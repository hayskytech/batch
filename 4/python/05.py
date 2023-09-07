

list = [2,3,6,6,22,5]


list[0] = 55
list[-1] = 66


print(list)

for x in list:
  print('No: ' + str(x))
  if x > 18:
    print('Voting')
  else:
    print('No voting')
  print('') 

print('End')


fruits = ['apple', 'banana', 'mango']
for item in fruits:
  print(item)

print(len(fruits))

fruits.append('cherry')
print(fruits)

fruits.insert(2,'jack')
print(fruits)

fruits.remove("apple")
del fruits[2]
print(fruits)

fruits.pop()
print(fruits)

fruits.clear()
print(fruits)

# del fruits
# print(fruits)

items = [2,6,5,8,9,8,96]
myitems = items.copy()

myitems.clear()
print(myitems)
print(items)


list1 = ["a", "b" , "c"]
list2 = [1, 2, 3]
list1.extend(list2)
print(list1)


fruits = ['cherry','apple',"ant","01", 'banana',"02" ,'mango']
fruits.sort()
print(fruits)