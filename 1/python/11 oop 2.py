class Person:
  def __init__(self, name, age):
    self.name = name
    self.age = age

  def introduce(self):
    print("Hello my name is " + self.name)
    print("Hello my age is " + str(self.age))
    
  def goodbye(self):
    print("Good night--" + self.name)




p1 = Person("John", 36)
p1.introduce()
p1.goodbye()

p2 = Person("Ramesh",20)
p2.introduce()
p2.goodbye()


