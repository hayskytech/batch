n = int(input("enter num:"))
# result = ''
# for x in range(1,n+1):
# 	result += str(x) + " "

# print(result)

k = 1
for a in range(0,n+1):
# For spaces
	for z in range(0,n-a):
		# print(" ", end ="")
		pass
		# For elements (enable any one line)
	for b in range(0,a):
		# print("*", end =" ")
		# print(a, end =" ")
		# print(b, end =" ")
		print(k, end =" ")
		
	print("\n")k += 1