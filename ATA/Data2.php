<?phpif($_SERVER['REQUEST_METHOD']=="POST"){include('config.php');$name=$_POST['name'];$email=$_POST['email'];$message=$_POST['message'];$sql="INSERT INTO contact VALUES('0','$name','$email','$message')";$exec= mysqli_query($con,$sql) or die(mysqli_error($con));if($exec==1)header('location:contact.php?done=true');else echo 'Data not saved';}elseecho 'Forbidden access';?>