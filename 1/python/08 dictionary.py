

student = {
	"fname" : "Ramesh",
  "lname" : "Kumar",
  "dob"   : "02-03-2005",
  "phone" : "8498000111",
  "colors": ["red","blue","green"]
}

print(student)
print(type(student))
print(student["fname"])
print(student["lname"])
print(len(student))


print(student["colors"])
for x in student["colors"]:
  print(student["fname"] + " likes " + x)
  

details = dict(name = "John", age = 36, country = "Norway")
details["age"] = 37

details["subject"] = "Science"
print(details)
print(details.keys())
print(details.values())
print(details.items())


if "subject" in details:
  print("available")
else:
  print("not available")
  
student.update({
	"fname" : "Suresh",
  "dob"   : "02-03-2009",
})

print(student)
student.pop("dob")
print(student)
student.popitem()
print(student)
del student["phone"]
print(student)
student.clear()
print(student)
del student
# print(student)
# this will raise error


# apple = details
apple = details.copy()
details.clear()
print(apple)

# Nested Dictionary....
myfamily = {
  "child1" : {
    "name" : "Emil",
    "year" : 2004,
  },
  "child2" : {
    "name" : "Tobias",
    "year" : 2007,
  },
  "child3" : {
    "name" : "Linus",
    "year" : 2011,
  },
}

print(myfamily["child1"]["name"])
print(myfamily["child1"]["year"])
print(myfamily["child2"]["name"])
print(myfamily["child2"]["year"])