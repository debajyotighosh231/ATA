<?php$username='root';$password='';$host='localhost';$dbname='ata';$con=mysqli_connect($host,$username,$password,$dbname) or die(mysqli_error($con));if($con){	echo 'Connection established';	echo '<br>';}?>