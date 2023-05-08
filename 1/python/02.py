str = input("Enter your age:")
age = int(str)

if age >= 18:  
	print("Eligible for voting...")
else:
	print("Not Eligible for voting...")

# -----------------------------------------
# Sum of two number
x = input('enter x:')
y = input('enter y:')

x = int(x)
y = int(y)
# change plus (+) to any other operator
z = x + y

print("Sum is " + str(z))

# -----------------------------------------

amount = input("how much amount do you have:")
am = int(amount)

if am>100:
	print('Have breakfast')
elif am>=50:
	print('Have snacks')
elif am>=20:
	print('Have cool drink')
else:
	print("Nothing")

