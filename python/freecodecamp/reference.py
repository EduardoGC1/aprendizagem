# class
class Chef:
    # python does not actually support private variables
    def __init__(self, name): # constructor
        self.name = name

    def make_chicken(self):
        print("The chef makes chicken")
    
    def make_salad(self):
        print("The chef makes salad")

    def make_special_dish(self):
        print("The chef makes bbq ribs")

# class inheritance
class ItalianChef(Chef):
    def make_special_dish(self):
        print("The chef makes chicken parm")

    def make_pasta(self):
        print("The chef makes pasta")

print("Hello, World!")

# variables
number = 1 #integer
floater = 1.5 #float
thisistrue = True #boolean


# function
def this_is_a_function():
    print("You can see the '():' that defines a function")

this_is_a_function()


# calling a class
chef = Chef("Rick")
italian_chef = ItalianChef("Mario")

chef.make_chicken()
chef.make_special_dish()
print(chef.name)

italian_chef.make_pasta()
italian_chef.make_special_dish()
print(italian_chef.name)

# if statements
print("Is it raining?")
is_raining = False
if is_raining:
    print("Grab an umbrella")
else:
    print("Sky is probably clear")

# ternary operator "do_this_when_true if condition else do_this_when_false"
print("I wake up")
print("Am I hungry?")
am_i_hungry = False
print("I eat breakfast") if am_i_hungry else print("I skip breakfast")

# if else statemetns
rating = "DOG"
if rating == "G": print("This was 'G': " + rating)  
elif rating == "PG": print("This was 'PG': " + rating)
elif rating == "PG-13":print("This was 'PG-13': " + rating)
elif rating == "R" : print("This was 'R': " + rating)
else: print("This was 'NR': " + rating)
