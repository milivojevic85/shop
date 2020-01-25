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
	public $title = "default product";
	public $producerMainName = "main name";
	public $producerFirstName = "first name";
	public $price = 0;
	
	public function __construct($title, $firstName, $mainName, $price) {
		$this->title = $title;
		$this->producerFirstName = $firstName;
		$this->producerMainName = $mainName;
		$this->price = $price;
	}
	
	public function getProducer() {
		return $this->producerFirstName." ".$this->producerMainName."<br>";
	}
}

$product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
echo $product1->getProducer()."<br>"; // Willa Cather
?>
</body>
</html>