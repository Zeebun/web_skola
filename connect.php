<?php
	$spojeni=mysqli_connect("localhost", "root", "", "hanc");
  mysqli_query($spojeni, "SET CHARACTER SET 'utf8'");
  
  if (mysqli_connect_errno())
  {
  echo "Failed to connect MySQL: ", mysqli_connect_error();
  
  }
  
?>