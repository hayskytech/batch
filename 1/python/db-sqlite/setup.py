import sqlite3
con = sqlite3.connect("new.db")
cur = con.cursor()

# cur.execute("CREATE TABLE student (name, phone, father)")
# cur.execute("CREATE TABLE book(title, year, price)")

# get all table names
res = cur.execute("SELECT name FROM sqlite_master")
print(res.fetchall())

# cur.execute("""
# INSERT INTO book VALUES
# ('English', 1975, 250),
# ('Telugu', 1983, 300)
# """)
# con.commit()