fruits = {"apple", "banana", "cherry"}
print(fruits)

for x in fruits:
	print(x + " is good")

if "banana" in fruits:
	print("available")
else:
	print("not available")


fruits.add("orange")
fruits.add("mango")
print(fruits)

fruits.update(["orange", "mango", "grapes"])
print(fruits)

print(len(fruits))
fruits.remove("banana")

# fruits.remove("bike")
# removing non exist items will raise error
fruits.discard("cycle")
# you can discard

x = fruits.pop()
print(x)
print(fruits)

fruits.clear()
print(fruits)

del fruits
# print(fruits) 
# this will raise error

set1 = {"a", "b" , "c"}
set2 = {1, 2, 3}
set3 = set1.union(set2)
print(set3)

set1.update(set2)
print(set1)

print("-----------------------------")

a = list(("apple","bat","car"))
b = tuple(("apple","bat","car"))
c = set(("apple","bat","car"))
print(a)
print(b)
print(c)