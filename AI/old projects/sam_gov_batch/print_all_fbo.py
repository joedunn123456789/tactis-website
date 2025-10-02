import re

filename = "FBOFeed19991231"

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

        print("Subject:", subject.group(1).strip() if subject else "")
        print("Agency:", agency.group(1).strip() if agency else "")
        print("Solicitation #:", solnbr.group(1).strip() if solnbr else "")
        print("Date:", date.group(1).strip() if date else "", year.group(1).strip() if year else "")
        print("Description:", desc.group(1).strip() if desc else "")
        print("="*60)
