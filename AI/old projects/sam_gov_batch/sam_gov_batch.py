import requests
import gzip
import json
from datetime import datetime

# What day is it? We'll get today's bag of LEGOs
today = datetime.utcnow().strftime("%Y%m%d")
filename = f"ContractOpportunitiesFull_{today}.jsonl.gz"
url = f"https://static.sam.gov/opp/{today}/{filename}"

# Robot grabs the bag and brings it home
resp = requests.get(url, stream=True)
if resp.status_code == 200:
    with open(filename, "wb") as f:
        f.write(resp.content)
    print("Yay! We got the new bag of LEGOs!")
else:
    print("No LEGOs today yet! Try a different day.")
    exit()

# Unzip the bag and dump all the LEGOs on the floor (load the data)
opportunities = []
with gzip.open(filename, "rt", encoding="utf-8") as f:
    for line in f:
        opportunities.append(json.loads(line))
print(f"We found {len(opportunities)} new LEGOs today!")
