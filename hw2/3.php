<?
	function sum($a, $b) {
		return $a+$b;
	}
	function raz($a, $b) {
		return $a-$b;
	}
	function pro($a, $b) {
		return $a*$b;
	}
	function cha($a, $b) {
		if($b==0){
			return "на 0 делить нельзя!";
        }
		return $a/$b;
	}

	echo sum(5, 5)."<br>";
	echo raz(5, 5)."<br>";
	echo pro(5, 5)."<br>";
	echo cha(5, 5); 
?>