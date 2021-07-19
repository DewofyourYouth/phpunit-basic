<?php declare(strict_types=1);

require './src/Book.php';
use PHPUnit\Framework\TestCase;
final class BookTest extends TestCase
{
  /**
   * @testdox the correct author name can be retreived with getAuthor method
   */
  public function testAuthorNameCanBeRetrievedWithGetAuthor(): void
  {
    $myBook = new Book('Mark Twain', 'Huckleberry Finn', '12345678', 3.99);
    $this->assertSame("Mark Twain", $myBook->getAuthor());
  }

  /**
   * @testdox the correct price can be retrieved with the getPrice method
   */
  public function testPriceCanBeRetrievedWithGetPrice(): void
  {
    $myBook = new Book('Mark Twain', 'Huckleberry Finn', '12345678', 3.99);
    $this->assertEquals(3.99, $myBook->getPrice());
  }

  /**
   * @testdox the correct price can be retreived with a discount (percentage) applied using the getDiscountedPrice method
   */
  public function testPriceWithDiscountPercentCanBeRetrievedWithGetDiscountedPrice(): void
  {
    $myBook = new Book('Mark Twain', 'Huckleberry Finn', '12345678', 3.99);
    $this->assertEquals(2.99, $myBook->getDiscountedPrice(25));
  }

  /**
   * @testdox the price can be changed with the changePrice method
   */
  public function testPriceCanBeChangedWithChangePrice(): void
  {
    $myBook = new Book('Mark Twain', 'Huckleberry Finn', '12345678', 3.99);
    $myBook->changePrice(7.0);
    $this->assertEquals(7.0, $myBook->getPrice());
  }

  /**
   * @testdox the correct title is returned with the getTitle method
   */
  public function testTitleIsReturnedWithGetTitle(): void
  {
    $myBook = new Book('Mark Twain', 'Huckleberry Finn', '12345678', 3.99);
    $this->assertSame('Huckleberry Finn', $myBook->getTitle());
  }
}
?>
