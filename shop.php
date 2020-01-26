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
}

class ShopProductWriter
{
	public function write(ShopProduct $shopProduct) {
		$str = $shopProduct->title." : ".$shopProduct->getProducer()." (".$shopProduct->price.")";
		echo $str."<br>";
	}
}

$product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);
$writer = new ShopProductWriter();
$writer->write($product1); // My Antonia : Willa Cather (5.99)

?>
</body>
</html>