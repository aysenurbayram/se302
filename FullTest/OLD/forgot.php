<html>
<head></head>
<body>
<?php include ("contents/statics/head.php"); ?>
<?php include("contents/statics/settings.php"); ?>
		<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_about_us.jpg">
			<div class="container bg--cover-content">
				<h2 class="title--page">Parolamı Unuttum</h2>
			</div>
		</div>

		<div class="container">
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="index.php">Başlangıç</a> / <span>Parolamı Unuttum</span>
			</nav>
<p  class="item--p-top">Lütfen hesabınız için E - Posta adresi giriniz. Ve Parolamı Unuttum butonuna tıklayınız. Parolanız E - Posta adresinize gönderilecektir. Parolanızın size gönderilebilemesi için E - Posta adresiniz doğru girmeniz gerekmektedir. Aksi durumda parolanız gönderilemeyecektir.</p>
<br/><br/> 
<form action='#' method='post'>
<table cellspacing='5' align='center'>
<tr><td>Email:</td><td><input type='text' name='mail' style="border:1px solid olive; border-radius:5px;padding-left:5px;"/></td></tr>
<tr><td><br/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Parolamı Unuttum'  style="border:1px solid olive; border-radius:5px;"/></td></tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{ 
include('services/db_baglan.php');

 $mail=$_POST['mail'];
 $q=mysql_query("select * from Member where mail='".$mail."' ") or die(mysql_error());
 $p=mysql_affected_rows();
 if($p!=0) 
 {
  $res=mysql_fetch_array($q);
  $to=$res['mail'];
  $subject='Mevcut Parolanız';
  $message='Parolanız : '.$res['password']; 
  $headers='From:otekizbas@gmail.com';
  $m=mail($to,$subject,$message,$headers);
  if($m)
  {
	echo '<script type="text/javascript">alert("E Posta kutunuzu kontrol edin.");</script>';
  }
  else
  {
   	echo '<script type="text/javascript">alert("E Posta gönderilmedi! Hata");</script>';
  }
 }
 else
 {
  	echo '<script type="text/javascript">alert("Girdiğiniz E Posta mevcut değil! Hata");</script>';
 }
}
?>
</div>
<?php include ("contents/statics/footer.php"); ?>
</div>
<?php include ("contents/statics/script.php"); ?>
</body>
</html>