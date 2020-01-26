<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Shop Product</title>
</head>
<body>
<?php 
class ShopProduct 
{
	private $title;
	private $producerMainName;
	private $producerFirstName;
	protected $price;
	protected $discount = 0;
	
	public function __construct($title, $firstName, $mainName, $price) {
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	}
	public function setDiscount($discount) {
		$this->discount = $discount;
	}
	public function getDiscount() {
		return $this->discount;
	}
	public function getPrice() {
		$newPrice = $this->price - $this->discount;
		return $newPrice;
	}
	public function getProducer() {
		return $this->producerFirstName." ".$this->producerMainName;
	}
	public function write() {
		$str = $this->title." by ".$this->getProducer()." (".$this->getPrice().")";
		echo $str;
	}
}

class BookProduct extends ShopProduct
{
	private $numPages;
	
	public function __construct($title, $firstName, $mainName, $price, $numPages) {
		parent::__construct($title, $firstName, $mainName, $price);
		$this->numPages = $numPages;
	}
	public function getNumberOfPages() {
		return $this->numPages;
	}
	public function write() {
		$str = parent::write();
		$str .=", page count - ".$this->numPages;
		return $str."<br>";
	}
}

class CDProduct extends ShopProduct
{
	private $playLength;
	
	public function __construct($title, $firstName, $mainName, $price, $playLength) {
		parent::__construct($title, $firstName, $mainName, $price);
		$this->playLength = $playLength;
	}
	public function getPlayLength() {
		return $this->playLength;
	}
	public function write() {
		$str = parent::write();
		$str .=", playing time - ".$this->playLength;
		return $str."<br>";
	}
}

$book1 = new BookProduct("The Karamazov Brothers", "Fyodor", "Dostoevsky", 7.99, 870 );
$cd1 = new CDProduct("Live Paris", "Ben", "L'oncle Soul", 8.99, 152 );

echo $book1->setDiscount(2);
echo $book1->write(); // The Karamazov Brothers by Fyodor Dostoevsky (5.99), page count - 870
echo $cd1->write(); // Live Paris by Ben L'oncle Soul (8.99), playing time - 152

?>
</body>
</html>