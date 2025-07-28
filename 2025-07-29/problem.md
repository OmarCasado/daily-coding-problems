Write a function called sumDigits($n) that receives a positive integer and returns the sum of its digits using a single recursive pass

Examples:
sumDigits(123);   // 1 + 2 + 3 = 6
sumDigits(5001);  // 5 + 0 + 0 + 1 = 6
sumDigits(7);     // 7

Requirements:
・Use recursion.
・You may not use loops (for, while).
・Use mathematical operators such as % (to get the last digit) and intdiv() or floor($n / 10) to remove it.