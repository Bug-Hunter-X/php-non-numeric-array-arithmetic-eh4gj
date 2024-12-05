```php
function calculateSum($numbers) {
  $sum = 0;
  foreach ($numbers as $number) {
    if (is_numeric($number)) {
      $sum += $number;
    } else {
      // Handle non-numeric values appropriately (e.g., log an error, skip the value, or throw an exception)
      trigger_error('Warning: Non-numeric value encountered in array: ' . $number);
    }
  }
  return $sum;
}

$numbers = [1, 2, 'a', 4, 5];
echo calculateSum($numbers); // Output: 12 (with a warning)
```