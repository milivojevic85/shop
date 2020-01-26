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
	public $title;
	public $producerMainName;
	public $producerFirstName;
	public $price = 0;
	
	public function __construct($title, $firstName, $mainName, $price) {
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	}
	
	public function getProducer() {
		return $this->producerFirstName." ".$this->producerMainName;
	}
	public function write() {
		$str = $this->title." by ".$this->getProducer()." (".$this->price.")";
		echo $str;
	}
}

class BookProduct extends ShopProduct
{
	public $numPages;
	
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
	public $playLength;
	
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

echo $book1->write();
echo $cd1->write();

?>
</body>
</html>