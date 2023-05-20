import sqlite3
con = sqlite3.connect("new.db")
cur = con.cursor()

table = input('Enter table to delete:')
con.execute("DROP TABLE " + table)
print(table + " table deleted...")
con.commit()