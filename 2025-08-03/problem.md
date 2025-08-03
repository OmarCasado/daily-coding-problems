Create a recursive function called sumArray($array) that takes an array of numbers and returns the total sum of its elements.

Examples:
sumArray([1, 2, 3, 4]); // Result: 10
sumArray([5]);          // Result: 5
sumArray([]);           // Result: 0

Requirements:
・Do not use loops (for, foreach, etc.).
・You may only use functions like array_shift() or array_slice() to traverse the array recursively.
・The base case must be when the array is empty.