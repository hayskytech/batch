units = int(input("No. of units: "))

bill = units * 5
if bill < 100:
	bill = 100
elif bill >= 400:
	tax = (bill*15) / 100
	tax = round(tax)
	print("Surcharge: Rs." + str(tax))
	bill += tax

bill = round(bill)
print("Total amount: Rs." + str(bill))