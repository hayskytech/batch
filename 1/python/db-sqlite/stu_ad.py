import sqlite3
con = sqlite3.connect("new.db")

cur = con.cursor()

name = input("Enter student name:")
phone = input("Enter phone num:")
father = input("Enter father name:")

data = [
	(name, phone, father)
]
cur.executemany("INSERT INTO student VALUES(?, ?, ?)",data)
con.commit()

input("Student added successfully...")