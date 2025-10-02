import xml.etree.ElementTree as ET

filename = "FBOFeed19991231"  # Your uploaded file

# Load the XML file
tree = ET.parse(filename)
root = tree.getroot()

# Print the root tag and immediate children to see the structure
print("Root tag:", root.tag)
print("First level tags:", [child.tag for child in root])

# Usually, the notices are in a list under some tag. Let's print first 5!
notices = list(root.iter())
print(f"Total tags found: {len(notices)}")
print("\nFirst 10 tags:")
for tag in notices[:10]:
    print(tag.tag)

# Now, let's try to print the first 5 'notice' or 'record' entries (adjust if needed)
# You might need to change 'notice' below to 'record', 'item', or whatever matches the file!

print("\nFirst 5 opportunities:")
count = 0
for notice in root.iter():
    # You want to change 'notice' to the real tag name for a notice/record in the file
    if notice.tag.lower() in ('notice', 'record', 'item'):
        print("----")
        for child in notice:
            print(child.tag, ":", child.text)
        count += 1
        if count >= 5:
            break
