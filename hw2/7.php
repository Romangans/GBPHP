<?

  function timeNow ($hour, $minute) {
    if ($hour == 0 || ($hour>= 5 && $hour<= 20)) {
      $result .= $hour.' часов ';
    }
    elseif ($hour%10 == 1) {
      $result .= $hour.' час ';
    }
    else {
      $result .= $hour.' часa ';
    }
    
    if ($minute%10 == 0 || ($minute%10 >= 5 && $minute%10 <= 9) ||  ($minute%100 >= 11 && $minute%100 <= 14)) {
      $result .= $minute.' минут';
    }
    elseif ($minute%10 == 1) {
      $result .= $minute.' минута';
    }
    else {
      $result .= $minute.' минуты';
    }
    return $result;
  }
echo (timeNow(date('G'), date ('i')));

function f($x,$y){
   echo $x." ".$y;
}
f(1,2)
?>
