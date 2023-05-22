class Car:
	color = "grey"
	price = "2000"

tata = Car()
audi = Car()

tata.color = "red"
tata.price = "3000"

audi.color = "black"
audi.price = "5000"

print(tata.color)
print(audi.color)

class Person:
  def __init__(self, name, age):
    self.name = name
    self.age = age
    

  def __str__(self):
    return f"{self.name}({self.age})"
		


p1 = Person("John", 36)
p2 = Person("Ramesh", 25)

print(p1)
print(p1.name)
print(p1.age)
print(p2)