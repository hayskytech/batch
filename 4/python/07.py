student = {
  "fname" : "raju",
  "lname" : "babu",
  'phone' : '8498000172',
  'town' : 'NDK',
}

student['phone'] = '123'
# student['fname'] = 'ramu'

print(student['town'], student['phone'])



for x in student.items():
  print(x[0] + ' is ' + x[1])

# fruits = ['apple','bat']

# for x in fruits:
#   print(x)


myfamily = {
	"child1" : {
		"name" : "Emil",
		"year" : 2004
		},
	"child2" : {
		"name" : "Tobias",
		"year" : 2007
		},
	"child3" : {
		"name" : "Linus",
		"year" : 2011
		}
}

print(myfamily)

posts = [
  {
    "id"    : 1,
    "title" : 'hai'
  },
  {
    "id"    : 2,
    "title" : 'hello'
  },
  {
    "id" : 3,
    "title" : "bye"
  }
]

print( posts[0]['title'] )
print( posts[1]['title'] )
print( posts[2]['title'] )
print('======================================')

for x in posts:
  print(x['title'])



fruits = set((5,61,61,6,16,1,65,1))

stu = dict(name='ramu', town='NDK', phone=123 )