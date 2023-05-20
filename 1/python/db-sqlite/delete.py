import sqlite3
con = sqlite3.connect("new.db")
cur = con.cursor()

name = input('Enter name to delete:')
con.execute("DELETE from student where name = ? ", (name,))
print(name + " deleted...")
con.commit()