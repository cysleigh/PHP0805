<?php
function ShowStar($star){
	$result = " ";
	if($star > 0){
		for($i=1; $i<= $star ; $i++){
			$result .= "*";
		}
		echo $result;
	}else{
		echo "------";
	}
	
}

ShowStar(6);
?>
