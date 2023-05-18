def run():
	print("hai")
	print("hello")

run()
run()
run()

def addition(x,y):
	print(x+y)

addition(2,4)
addition(1,9)

# write similar functions for sub,mul,div

def run2(a=0,b=0,c=0):
	print(a+b+c)

run2(5,2)
run2(5,2,3)
run2(5)
run2()

def family(*kids):
	total = 0
	for x in kids:
		total += x
	print("Family expenses: " + str(total))

family(20,25,26,30)
family(20,25,26,30,99,300)
family()

# create product function using *attr