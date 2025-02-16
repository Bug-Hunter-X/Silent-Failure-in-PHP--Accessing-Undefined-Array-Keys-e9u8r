The best solution is to explicitly check if a key exists before accessing it:

```php
<?php
$myArray = [];
$myArray["existingKey"] = "someValue";

//Check if the key exists using isset()
if (isset($myArray["anotherNonExistentKey"])) {
  echo $myArray["anotherNonExistentKey"];
} else {
  echo "Key does not exist!";
}

//Alternatively, use array_key_exists()
if (array_key_exists("anotherNonExistentKey", $myArray)){
  echo $myArray["anotherNonExistentKey"];
} else {
  echo "Key does not exist!";
}
?>
```

This approach provides better error handling and prevents unexpected behavior.