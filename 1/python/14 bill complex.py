units = int(input("Units: "))

if units < 100:
	c = 4
elif units < 200:
	c = 5
elif units < 300:
	c = 6
else:
	c = 7

bill = units * c
if bill < 180:
	bill = 180

print("Total Amount: Rs." + str(bill))