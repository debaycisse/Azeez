package main

import (
	"fmt"
	"strconv"
)

func main() {
	// Demand for the decimal number from the user
	fmt.Print("Type in the decimal number: ")
	// Declare a variable to save the inputted decimal number
	var decnum int64
	// Save the inputted decimal number inside a variable, named decnum
	fmt.Scanln(&decnum)
	// Convert the the inputted number into binary and print it on the screen
	fmt.Print("the binary equivalent of ", decnum, " is ", strconv.FormatInt(decnum, 2), "\n")

}
