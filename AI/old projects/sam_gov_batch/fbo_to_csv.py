import re
import csv

filename = "FBOFeed19991231"
results = []

with open(filename, "r", encoding="utf-8", errors="ignore") as f:
    data = f.read()

entries = data.split("<PRESOL>")

for entry in entries:
    if "</PRESOL>" in entry:
        subject = re.search(r"<SUBJECT>(.*)", entry)
        agency = re.search(r"<AGENCY>(.*)", entry)
        solnbr = re.search(r"<SOLNBR>(.*)", entry)
        date = re.search(r"<DATE>(.*)", entry)
        year = re.search(r"<YEAR>(.*)", entry)
        desc = re.search(r"<DESC>(.*)", entry)
        results.append([
            subject.group(1).strip() if subject else "",
            agency.group(1).strip() if agency else "",
            solnbr.group(1).strip() if solnbr else "",
            date.group(1).strip() if date else "",
            year.group(1).strip() if year else "",
            desc.group(1).strip() if desc else ""
        ])

with open("fbo_opps.csv", "w", newline='', encoding="utf-8") as csvfile:
    writer = csv.writer(csvfile)
    writer.writerow(["Subject", "Agency", "Solicitation #", "Date", "Year", "Description"])
    writer.writerows(results)

print("Saved as fbo_opps.csv — open in Excel or Google Sheets!")
