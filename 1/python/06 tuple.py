fruits = ('apple','mango','banana','cherry')

print(fruits)
print(fruits[0])
print(fruits[1])

print(fruits[-1])
print(fruits[-2])

print(fruits[0:3])

fruits = ("apple", "banana", "cherry", "orange", "kiwi", "melon", "mango")
print(fruits[-4:-1])

# fruits[0] = 'bat'
# tuple cannot be changed...

x = ("apple", "banana", "cherry")
y = list(x)
y[1] = "kiwi"
x = tuple(y)
print(x)


for a in fruits:
  print('I have '+a)
  
if 'bat' in fruits:
  print("available")
else:
  print("not available")

print(len(fruits))

print('---------------------------')

fruits = ("apple", "banana", "cherry")
# fruits[3] = "orange" 
# This will raise an error
print(fruits)

# Create Tuple With One Item
fruits = ("apple",)
print(type(fruits)) #NOT a tuple
fruits= ("apple")
print(type(fruits))

# Joining two tuples
tuple1 = ("a", "b", "c")
tuple2 = (1, 2, 3)
tuple3 = tuple1 + tuple2
print(tuple3)

thistuple = (1, 3, 7, 8, 7, 5, 4, 6, 8, 5)
x = thistuple.count(5)
print(x)

thistuple = (8, 1, 3, 7, 7, 5, 4, 6, 8, 5)
x = thistuple.index(8)
print(x)