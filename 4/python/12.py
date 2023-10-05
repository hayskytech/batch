# conditional statements
x = 5
y = 3
z = 10
if (x > 2):
  print('yes')
else:
  print('no')

amount = 100

if amount>=100:
  print('breakfast')
elif amount>=50:
  print('snacks')
elif amount>=10:
  print('water')
else:
  print('nothing')

# loops
for x in range(0,50):
  if x==4:
    continue

  if x==10:
    break

  print('hai ' + str(x))

names = ['apple', 'bat', 'cat']
for x in names:
  print('this is ' + x)

