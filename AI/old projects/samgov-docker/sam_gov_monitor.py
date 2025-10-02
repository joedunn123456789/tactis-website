import requests
import json
from datetime import datetime, timedelta
import os
import time

# --- Configuration ---
API_KEY = "c8tpqgv3KANtBuJXC2aExy7VTJdBOuTtPZXccSWd"  # your API key
DAYS_BACK = 30
OUTPUT_FILE = "new_opportunities.txt"
url = "https://api.sam.gov/opportunities/v2/search"

# --- NAICS codes ---
naics_codes = ["541512", "541511", "541519"]

# --- Working agency codes (June 2025) ---
agency_codes = [
    "8000",  # NASA
    "7500",  # HHS
    "2100",  # Army
    "1700",  # Navy
    "5700",  # Air Force
    "7000",  # DHS
    "6900",  # DOT
    "4900",  # NSF
    "4700",  # GSA
    "7200",  # USAID
    "1300",  # Commerce
    "6800",  # EPA
]

# --- set aside codes ---
set_aside_codes = ["TOTAL_SMALL_BUSINESS"]

# --- Prepare start date ---
start_date = (datetime.utcnow() - timedelta(days=DAYS_BACK)).strftime("%Y-%m-%dT00:00:00Z")

# --- Pagination ---
offset = 0
page_size = 100

output_lines = []

while True:
    params = {
        "start": start_date,
        "limit": page_size,
        "offset": offset,
        "sort": "-modifiedDate",
        "active": "true",
        "index": "opp",
        "notice_type_codes": ["SRCSGT", "SOLICITATION", "COMBINE"],
        "naics_codes": naics_codes,
        "agency_codes": agency_codes,
        "set_aside_codes": set_aside_codes
    }

    headers = {
        "X-Api-Key": API_KEY
    }

    response = requests.get(url, params=params, headers=headers)
    data = response.json()

    opportunities = data.get("opportunitiesData", [])
    print(f"API returned {len(opportunities)} opportunities (offset {offset}).")

    if not opportunities:
        break  # No more results

    for opp in opportunities:
        notice_id = opp.get("noticeId", "No ID")
        title = opp.get("title", "No Title")
        agency = opp.get("agency", {}).get("name", "Unknown Agency")
        modified_date = opp.get("modifiedDate", "Unknown Date")
        solicitation_number = opp.get("solicitationNumber", "No Solicitation Number")
        url_link = f"https://sam.gov/opp/{notice_id}/view"

        # Prepare output line
        line = (
            f"[{modified_date}] {agency} | {title} | {solicitation_number} | {url_link}"
        )
        print(line)
        output_lines.append(line)

    # Pagination — move to next page
    offset += page_size
    time.sleep(0.2)

# --- Write output file if results ---
if output_lines:
    with open(OUTPUT_FILE, "a") as f:
        f.write(f"\n--- Run at {datetime.utcnow().isoformat()}Z ---\n")
        for line in output_lines:
            f.write(line + "\n")

    print(f"\nWrote {len(output_lines)} opportunities to {OUTPUT_FILE}")
else:
    print("\nNo new opportunities found.")
