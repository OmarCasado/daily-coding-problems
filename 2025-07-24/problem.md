Write a PHP function called groupWordsByLetter($words) that receives an array of words (strings) and groups the words that start with the same letter (regardless of whether they are uppercase or lowercase).

It should return an associative array where the key is the initial letter (in lowercase), and the value is an array with the words that start with that letter.

Example:
$input = ["Apple", "Avocado", "banana", "Berry", "apricot", "Blueberry", "cherry"];

$output = groupWordsByLetter($input);

print_r($output);


Return:
[
  'a' => ['Apple', 'Avocado', 'apricot'],
  'b' => ['banana', 'Berry', 'Blueberry'],
  'c' => ['cherry']
]
