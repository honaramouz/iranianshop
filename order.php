<?php
include ("includes/header.php");
$link = mysqli_connect("localhost","root","","shop_db"); 
if(mysqli_connect_errno())  
    exit ("خطایی به شرع زیر رخ داده است" . mysqli_connect_error());
$pro_code =0;
if (isset($_GET['id']))
    $pro_code = $_GET['id'];
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"] === true)){
?>
<br>
<span style="color:red;" ><b>
برای خرید پستی محصول انتخاب شده باد وارد سایت شوید 
</b>
</span>
<br><br>
در صورتی که عضو فروشگاه هستید برای ورود
<a href="login.php" style="text-decoration: none;" ><span style="color: blue;" >
<b>
اینجا
</b>
</span></a>
کلیک کنید
<br><br>
و در صورتی که عضو نیستید برای ثبت نام در سایت
<a href="register.php" style="text-decoration: none;" ><span style="color: green;" >
<b>اینجا</b>
</span></a>
کلیک کنید
<br><br>
<?php
exit();
}
$query ="SELECT * FROM products WHERE pro_code='$pro_code'";
$result = mysqli_query($link,$query);  
?>
<form name="order" action="action_order.php" method="POST" >
<table style="width: 100%;" border="1px">
<tr><td style="width: 60%;" >
<?php

if ($row = mysqli_fetch_array($result)){ 
?>
<br>
<table style="width: 100%;" border="0" style="margin-left: auto;margin-right:auto;" >
<tr>
<td style="width: 22%;" >کد کالا <span style="color: red;" >*</span></td>
<td style="width: 78%;" > <input type="text" id="pro_code" name="pro_code" value="
<?php echo ($pro_code); ?>" style="background-color: lightgray;" readonly> </td>
</tr>
<tr>
<td>نام کالا <span style="color: red;" >*</span></td>
<td> <input type="text" id="pro_name" name="pro_name" value="
<?php echo ($row['pro_name']); ?>" style="background-color: lightgray;" readonly> </td>
</tr>
<tr>
<td>تعداد یا مقدار درخواستی <span style="color: red;" >*</span></td>
<td> <input type="text" style="text-align: left;" id="pro_qty" name="pro_qty" onchange="calc_price();" > </td>
</tr>
</table>
</td>
</tr>
</table>
</form>
<?php
include('includes/footer.php');
?>