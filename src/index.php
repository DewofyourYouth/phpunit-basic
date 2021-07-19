<?php
require './Book.php';
$myBook = new Book('Mark Twain', 'Huckleberry Finn', '12345678', 3.99);
echo "<p>{$myBook->getTitle()} by {$myBook->getAuthor()} <br/> {$myBook->getPrice()}</p>";
echo "<p>Now 25% off for a new low price of {$myBook->getDiscountedPrice(
  25
)}!!</p>";
?>
