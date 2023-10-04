print('hai')
x = 50
y = 5
print(x+y)
print(x/y)
print(type( x / y ))

name = 'raju'
age = 30
print(age)

fruits = ['apple', 'bat', 'cat', 'mango', 'banana', 'orange', 20, 30]
fruits[1] = 'cherry'
print(fruits)
print(fruits[0])
print(fruits[2:6])
print(fruits[-4:])
print(fruits[4:])
print(fruits[:4])
print(len(fruits))

# not changeable
items = (20,30,50,60,80)
print(items)
print(items[1])
print(items[0:3])
# items[0] = 21

names = {'raju', 'ramu', 'apple', 'bat'}
print(names)
# duplicates not allowed
# no index
# add remove works

details = {
  "name" : 'apple',
  'price' : 40,
  'quantity' : 20
}

details['price'] = 45
print(details['name'])
print(details)