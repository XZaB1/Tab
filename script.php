<?php
$mysqli=mysqli_connect('localhost', 'u1555786_jwt', '2_91J4WT3ah98@al3', 'u1555786_jwt_auth');
if(mysqli_connect('localhost','u1555786_jwt', '2_91J4WT3ah98@al3')){


}


$query =mysqli_query($mysqli,"SELECT * FROM `u1555786_jwt_auth`.`num`");
$col="color='#f9f9f9'";
while($row = mysqli_fetch_array($query)){
    $id=$row['id'];
    $numb=$row['numb'];
    $name=$row['name'];
    $status=$row['status'];
    if($status=='Готово')
    {
        echo
        "&nbsp;
<h1 style='font-size:45px; color: green;'>&nbsp;&nbsp;
$numb<strong style='font-size:70px; color: green;'>$name</strong> <strong style='color: green'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$status</strong> </h1>";
    }
    if($status<>'Готово')
    {
        echo "&nbsp;
<h1 style=' font-size:45px; color: black;'>&nbsp;&nbsp;
$numb<strong style='font-size:70px; color: black;'>$name</strong></h1>";
    }
}
// $col="//color='#f9f9f9'";
mysqli_close($mysqli);
?>
