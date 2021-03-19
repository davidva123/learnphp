<?php

$_POST['hey'] = "This";
$_POST['what'] = "That";

function returnPre($item){
echo "<pre>" . $item . "</pre><br />";
};

foreach($_POST as $mypost){

   returnPre($mypost)

}



?>