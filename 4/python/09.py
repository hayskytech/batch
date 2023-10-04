


def run():
  print('hai')
  print('hello')
  print('bye')


run()


def addition(a,b):
  print(a+b)

addition(3,5)
addition(6,5)

# return value
def age(yob, thisyear):
  return (thisyear - yob)

raju = age(1996,2023)
if raju >= 18:
  print('voting')
else:
  print('no voting')

# default argument value
def sum(a=0,b=0,c=0):
  print(a+b+c)

sum(2,3,9)
sum(2,3)
sum()


print(age(thisyear=2023,yob=1996))

def mull(*numbers):
  ans = 1
  for x in numbers:
    ans *= x
  return ans

print(mull(2,3,2,3,56,8,9))

def addperson(**details):
  print(details)

addperson(name='raju',town='NDK')

# global scope
p = 5

def run2():
  # local scope
  q = 6
  print(p)

run2()

# this will raise error
# print(q)