Create a function called countChar($string, $char) that receives a string and a character, and returns how many times that character appears in the string, using recursion only.

Examples:
countChar("banana", "a");    // Result: 3
countChar("recursion", "r"); // Result: 2
countChar("php", "z");       // Result: 0


Requirements:
・You cannot use for, while, array_filter, or any function that does the job for you.
・You can use substr() and $string[0] to recursively go through the string.
・Try to make the function return the total number (not just print it).