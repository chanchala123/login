

<?php
$u=$_REQUEST['email'];
$d=$_REQUEST['password'];
//echo "hello $n,your password is $a";//
 $c=mysqli_connect('localhost','root','',"login");
 $sql="Select * from mytable2 where email='$u' and password='$d'";
 $r=mysqli_query($c,$sql);
 if($s=mysqli_fetch_array($r))
	 echo "succeccssfully login";
 else
	 echo "connection failed";
	 ?>
 <script>
 window.location="about.html";
 </script>
 <?php
 ?>
 
 


