<?php 

$conn = mysqli_connect('localhost','root','','mugen');
$query = 'SELECT * FROM general_ledger LIMIT 0 , 20';
$result = mysqli_query($conn,$query);

echo mysqli_num_rows($result);

?>