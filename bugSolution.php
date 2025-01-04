To fix the problem, we must enforce stricter type checking and avoid implicit conversions whenever possible.  We can use type hinting and the `is_numeric()` function to ensure variables are of the expected type before operations are performed.

```php
function calculateTotal(int $count): int {
  return $count * 2;
}

$count = 10; // Explicitly typed as an integer
if (is_numeric("$count")){
  $total = calculateTotal($count);
  echo "Total: " . $total; //This will produce a correct result
} else {
  echo "Invalid input. Please provide a valid number.";
}

// Using === for comparison
$value1 = 10;
$value2 = "10";
if ($value1 === $value2) {
  echo "Values are equal in type and value";
} else {
  echo "Values are not equal in type and value"; //This will execute as '===' checks for type as well
}
```

This revised code explicitly checks for numeric input and uses strict comparison, preventing the implicit conversion that leads to the bug.