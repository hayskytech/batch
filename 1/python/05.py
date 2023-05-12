x = 27
y = 5
print(x // y)

# LIST
items = ['apple',"bat",'cat',20,56,'ramu','mango','frog']
# list has order
print(items[0])
print(items[1])
# Negative Indexing
print(items[-1])
# Range of Indexes
print(items[2:5])
# 0 to 3 items
print(items[:3])
# 2 to last
print(items[2:])

print(items[-4:-1])

# list is changeable
items[1] = 'ballon'
print(items)

# list allows duplicates
fruits = ["apple", "banana", "cherry", "apple", "cherry"]
print(fruits)

print(len(fruits))
print(type(fruits))

print("-----------------")

# Check if Item Exists
if "apple" in fruits:
	print("yes available")
else:
	print("not available")


thislist = ["apple", "banana", "cherry"]
thislist[1:3] = ["blackcurrant", "watermelon"]
print(thislist)

thislist = ["apple", "banana", "cherry"]
thislist[1:3] = ["watermelon"]
print(thislist)


thislist = ["apple", "banana", "cherry"]
thislist.insert(2, "watermelon")
print(thislist)

thislist = ["apple", "banana", "cherry"]
thislist.append("orange")
print(thislist)


thislist = ["apple", "banana", "cherry"]
tropical = ["mango", "pineapple", "papaya"]

thislist.extend(tropical)
print(thislist)


# Remove items by item name
fruits = ["apple", "banana", "cherry", "apple", "cherry"]
fruits.remove("apple")
print(fruits)

# Remove items by index 1
fruits.pop(1)
print(fruits)

# without index pop() will remove last item


fruits.clear()
print(fruits)

# delete list completely
del fruits
# print(fruits)
# this will give error