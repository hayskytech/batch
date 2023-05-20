import sqlite3
con = sqlite3.connect("new.db")
cur = con.cursor()


res = cur.execute("SELECT * FROM student")
students = res.fetchall()

# print(students)

for x in students:
	print( "Name: " + x[0] + " phone: " + x[1] + " father: " + x[2] )
	# pass

input()