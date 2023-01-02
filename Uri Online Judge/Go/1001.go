package main

import "fmt"

func main() {
	var n1 int
	var n2 int

	fmt.Scanln(&n1)
	fmt.Scanln(&n2)

	fmt.Printf("X = %d\n", (n1 + n2))
}
