<table border="1" align="center" style="line-height:25px;">
<tr><th colspan="10"><h1>customer record</h1></th></tr>
       <tr>
       <td><h2>FNAME</h2></td>
       <td><h2>LNAME</h2></td>
       <td><h2>EMAIL</h2></td>
       <td><h2>DEPART FROM</h2></td>
        <td><h2>ARRIVE AT</h2></td>
        <td><h2>DEPART ON</h2></td>
        <td><h2>RETURN ON</h2></td>
        <td><h2>ADULT</h2></td>
         <td><h2>CHILDREN</h2></td>
         <td><h2>CLASS</h2></td>
          <tr>
<?php

$connect=new mysqli("localhost","root","","register");
if(!$connect){
die('connection failed');
}
else
echo"connection worked "."<br>";


$sql="select * from t2";

$result=mysqli_query($connect,$sql);
while($row=mysqli_fetch_array($result)){

echo"<tr>";
echo"<td>".$row['fname']."</td>";
echo"<td>".$row['lname']."</td>";
echo"<td>".$row['email']."</td>";
echo"<td>".$row['depart_from']."</td>";
echo"<td>".$row['arrive_at']."</td>";
echo"<td>".$row['depart_on']."</td>";
echo"<td>".$row['return_on']."</td>";
echo"<td>".$row['adult']."</td>";
echo"<td>".$row['children']."</td>";
echo"<td>".$row['class']."</td>";
echo"</tr>";

}
?>
