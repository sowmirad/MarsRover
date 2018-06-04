
<?php

$con=mysqli_connect('localhost','root','','cse');
//$db=mysqli_select_db('cse',$con) or die ("No Database Found!");

if(!$con) {
    die ("No Database Found");
} else {
    echo ("Connection successful");

}

?>