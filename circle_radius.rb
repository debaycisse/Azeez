# Program to calculate the area of a circle, based on the given radius.

# Asking for the radius from the user and saving the user's input in a variable, that is radius
puts "Enter the radius number: "
radius = gets.to_i  # the radius value is converted in to an integer

# Declaring pi variable with it's value
pi = 3.14

# Computing the calculation and saving the result into area_of_circle variable
area_of_circle = ((pi * radius)**2)

# printing out the result to the screen.
# The value of the calculation is also converted into string,
# so that it can be concatenated with the string in the below statement. 
puts ("The area of circle is: " + area_of_circle.to_s)