import sqlite3
con = sqlite3.connect("new.db")
cur = con.cursor()

cur.execute("UPDATE student set father = 'CSS' where name = 'john'")

input("Student updated...")
con.commit()