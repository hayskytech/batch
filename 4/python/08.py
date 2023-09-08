n = 30
# n = int(input("enter num:"))
i = 1

while i <= n:
	print(i)
	if i==15:
		break
	i +=2
else:
	print('thank you')
	
n = input("Enter table num: ")

for l in range(1,11):
	p = l*int(n)
	print(n,' x ',l,' = ',p)


for x in range(1,10):
	str = ''
	for z in range(0,10-x):
		str += ' '
	for y in range(1,x):
		str += '* '
	print(str)