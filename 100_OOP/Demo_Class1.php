<?php

$obj = new CAnimal();
$obj->makeNoise(); //指向
echo "<hr>";

$obj->weight = 10;  // 如果是 $obj->weight = -10; 呢
echo $obj->weight;


class CAnimal
{
	public $weight;
	
	public function makeNoise()
	{
		echo "CAnimal: makeNoise";
	}
}

?>
