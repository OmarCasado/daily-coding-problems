Create a function called findMax($array) that returns the maximum value within an array of numbers, using recursion only.

Examples:
findMax([4, 7, 1, 9, 2]); // Result: 9
findMax([-10, -5, -1]);   // Result: -1
findMax([100]);           // Result: 100

Requirements:
・Do not use max(), or loops (for, foreach, etc.).
・The array will have at least one element, so you don’t need to check if it's empty.
・Use array_slice() to process the array recursively.
・Your function should compare the first element with the result of the recursive call.