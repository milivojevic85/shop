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
		$str = $this->title." : ".$this->getProducer()." (".$this->price.")";
		echo $str."<br>";
	}
}

$product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
$product2 = new ShopProduct("Exile on Coldharbour Lane", "The", "Alabama 3", 10.99);

$product1->write(); // My Antonia : Willa Cather (5.99)


?>
</body>
</html>