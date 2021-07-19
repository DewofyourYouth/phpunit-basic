<?php declare(strict_types=1);
class Book
{
  private $author;
  private $title;
  private $isbn;
  private $price;

  public function __construct(
    string $author,
    string $title,
    string $isbn,
    float $price
  ) {
    $this->author = $author;
    $this->title = $title;
    $this->isbn = $isbn;
    $this->price = $price;
  }

  function getAuthor(): string
  {
    return $this->author;
  }

  function getPrice(): float
  {
    return $this->price;
  }

  function getTitle(): string
  {
    return $this->title;
  }

  function changePrice(float $newPrice): void
  {
    $this->price = $newPrice;
  }

  function getDiscountedPrice($percent): float
  {
    $percentage = $percent / 100;
    $discountedPrice = round($this->price - $this->price * $percentage, 2);

    return $discountedPrice;
  }
}

?>
