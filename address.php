<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Address Manager</title>
</head>
<body>
<?php 
class AddressManager
{
	private $addresses = ["209.131.36.159","216.58.213.174"];
	
	public function outputAddresses() {
		foreach ($this->addresses as $address) {
			print $address."<br>";
		}
	}
}
$manager = new AddressManager();
$manager->outputAddresses(); // 209.131.36.159
                             // 216.58.213.174

?>
</body>
</html>