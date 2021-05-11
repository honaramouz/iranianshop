<?php
include('includes/header.php');
if (!(isset($_SESSION["state_login"]) && $_SESSION["state_login"]===true && $_SESSION["user_type"]=="admin")) {
?>
<script type = "text/javascript">
   <!--
     location.replace("index.php")
   //-->
</script>
<?php } ?>
<br>
<form name="add_products" action="action_admin_products.php" method="POST" enctype="multipart/form-data">
<table style="width:100%;" border="0" style="margin-left:auto;margin-right:auto;">
  <tr>
    <td tyle="width:22%;">کد کالا <span style="color:red;">*</span></td>
    <td style="width:78%;"> <input type="text" id="pro_code" name="pro_code"> </td>
  </tr>
  <tr>
    <td tyle="width:22%;">نام کالا<span style="color:red;">*</span></td>
    <td style="width:78%;"> <input type="text" id="pro_name" name="pro_name"> </td>
  </tr>
  <tr>
    <td tyle="width:22%;">موجودی کالا<span style="color:red;">*</span></td>
    <td style="width:78%;"> <input type="text" id="pro_qty" name="pro_qty"> </td>
  </tr>
  <tr>
    <td tyle="width:22%;">قیمت کالا<span style="color:red;">*</span></td>
    <td style="width:78%;"> <input type="text" id="pro_price" name="pro_price">&nbsp; ریال </td>
  </tr>
  <tr>
    <td tyle="width:22%;">آپلود تصویر<span style="color:red;">*</span></td>
    <td style="width:78%;"> <input type="file" id="pro_image" name="pro_image" size="30"> </td>
  </tr>
  <td tyle="width:22%;">توضیحات تکمیلی<span style="color:red;">*</span></td>
  <td style="width:78%;"> <textarea cols="45" rows="10" warp="vitual" type="text" id="pro_detail" name="pro_detail"></textarea </td>
<br>
    <input type="submit" value="افزودن کالا" >
    &nbsp;&nbsp;&nbsp;
 <input type="reset"  value="ریست ">
  </table>
</form>




    <?php
include('includes/footer.php');

    ?>
