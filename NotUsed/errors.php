<?PHP
error_reporting(E_ALL);
function multiply($a,$b){
$x = $a * $b;
if ($x < 0 ){
    // throw new Exception("The result is not positive");
}
else {
    return $a * $b;
}
    
}

try {
    echo multiply(-5,4);
}
catch (Exception $e){
    echo $e->getMessage();
    // echo($e);
}




?>