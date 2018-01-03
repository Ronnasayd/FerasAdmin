<?php
$conn = mysqli_connect("localhost","root","","Feras");

if(!$conn){
	echo mysqli_error($conn);
}