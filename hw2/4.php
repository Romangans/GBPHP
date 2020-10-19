<?
echo mathOperation(15, 14, '*');

function mathOperation($arg1, $arg2, $operation) {
	switch ($operation) {
		
		case '+':
		
			return sum($arg1,$arg2);
			break;
		case '-':
	
			return raz($arg1,$arg2);
			break;
		case '*':

			return pro($arg1,$arg2);
			break;
		case '/':
	
			return $arg1 / $arg2;
			break;

		default:
			echo "Заданы не правильные аргументы.";
			break;
	}
}
?>