<!DOCTYPE html>
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include ("contents/statics/settings.php"); ?>
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_contact_us.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">İletişim</h2>
		</div>
	</div>
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="index.php">Başlangıç</a> / <span>İletişim</span>
		</nav>
		<img src="assets/images/6ASMNGB3YI.jpg" alt="">
		<ul class="row row--inline page--contact">
			<li class="col-md-6 col-xs-12 margin--top-50 margin--bottom-50">
				<ul class="row">
					<li class="col-sm-4 col-mid-4 col-xs-12">
						<h2>Addot</h2>
					</li>
					<li class="col-sm-8 col-mid-8 col-xs-12">
						<h4><i>Güzel Ülkemiz, Türkiye'mizin yerli üreticisini tüketiciyle buluşturuyoruz.</i></h4>
					</li>
				</ul>
			</li>
			<li class="col-md-6 col-xs-12 margin--top-50 margin--bottom-50">
				<div class="text--content">
					<p>Addot, dönemlik meyve ve sebzeleri gösteren; yerel üretici ile Türkiye'nin dört bir yanında bulunan tüketiciyi buluşturan; uzmanların yazılarını yayınlayan bir yaşam portalıdır.
						Işık Üniversitesi öğrencileri tarafından SE302 kodlu Software Engineering Practice dersi kapsamında geliştirilmiştir. Ülkemizin yerli üretici ve tüketiciyi bir araya getirmek amacıyla
						kurulmuştur. Sitemizdeki tüm içerilkler onaylı kullanıcılarımız, uzman kalemler tarafından yazılmaktadır. Bu nedenle tüm içerikler %100 doğru ve objectifdir. 
					</p>
					<p>Bunun yanında, kullanıcılarımızın kişisel bilgileri güvenle veritabanımızda saklanmaktadır.Gizlilik bizim için çok önemlidir. Gizlilik politikamız gereği kişisel bilgileriniz hiçbir kullanıcımız ile paylaşılmamaktadır. Kişisel bilgileriniz hiçbir nedenle ve hiçbir muhatap nezdinde açıklanmaz ve kullanılmaz.</p>
					<h4>Sağlıklı bir yaşam için organik düşün.</h4>
					<p class="last">Addot Proje Grubu</p>
				</div>
			</li>
			<li class="col-md-6 col-xs-12 margin--top-50 margin--bottom-50">
				<ul class="row">
					<li class="col-sm-4 col-mid-4 col-xs-12">
						<h2><i>İletişim</i></h2>
					</li>
					<li class="col-sm-8 col-mid-8 col-xs-12 js__tab_plugin relative" data-toggle="yes">
						<h4 class="item--title js__tab_control js__tab_active">İletişim Bilgileri</h4>
						<ul class="list--infomation js__tab_content js__tab_active">
							<li>
								<h6>Adres</h6>
								<span class="address">
									Kozyatağı Kadıköy İstanbul Türkiye
								</span>
							</li>
							<li>
								<h6>Telefon</h6>
								<a href="contact-us.html#">+90 543 601 76 10</a>
							</li>
							<li>
								<h6>Email</h6>
								<a href="contact-us.html#">otekizbas@hotmail.com</a>
							</li>
							<li>
								<h6>Sosyal Medya</h6>
								<ul class="list--social-blog">
									<li><a href="contact-us.html#" class="fa fa-facebook"></a></li>
									<li><a href="contact-us.html#" class="fa fa-twitter"></a></li>
									<li><a href="contact-us.html#" class="fa fa-dribbble"></a></li>
									<li><a href="contact-us.html#" class="fa fa-tumblr"></a></li>
									<li><a href="contact-us.html#" class="fa fa-pinterest"></a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</li>
			<li class="col-md-6 col-xs-12 margin--top-50 margin--bottom-50">
				<h2><i>İrtibatta Kalalım</i></h2>
				<form action="#" method="post" id="commentform" class="comment-form frm-contact frm-comment">
					<div class="row">
						<div class="col-sm-6 col-mid-6 col-xs-12">
							<div class="controls">
								<input type="text" name="contact_name" id="contact_name" class="inp--text" placeholder="Ad Soyad">
							</div>
						</div>
						<div class="col-sm-6 col-mid-6 col-xs-12">
							<div class="controls">
								<input type="email" name="contact_email" id="contact_email" class="inp--text" placeholder="Email">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="controls">
								<input type="text" name="contact_subject" id="contact_subject" class="inp--text" placeholder="Konu">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="controls">
								<input type="text" name="contact_description" id="contact_description" class="inp--text" placeholder="İçerik">
							</div>
						</div>
						<div class="col-xs-12">
							<div class="controls text-left">
								<input type="submit" name="contact_us_event" class="button--common button--border button--white button--hover-main" value="Gönder">
							</div>
						</div>
					</div>
				</form>
<?php
				if(isset($_POST['contact_us_event']))
{ 
			include "db_baglan.php";	
			
			$contact_name = $_POST['contact_name'];
			$contact_email = $_POST['contact_email'];
			$contact_subject = $_POST['contact_subject'];
			$contact_description = $_POST['contact_description'];
			
	if((empty($contact_name)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:contact-us.php");
			echo '<script type="text/javascript">alert("İletişim bilgileriniz kaydedilemedi! Ad Soyad giriniz");</script>';
		echo'</div>';
	}
	if((empty($contact_email)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:contact-us.php");
			echo '<script type="text/javascript">alert("İletişim bilgileriniz kaydedilemedi! Mail Adresinizi Giriniz.");</script>';
		echo'</div>';
	}
	if( (empty($contact_subject)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:contact-us.php");
			echo '<script type="text/javascript">alert("İletişim bilgileriniz kaydedilemedi! Konu giriniz.");</script>';
		echo'</div>';
	}	
	if((empty($contact_description)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:contact-us.php");
			echo '<script type="text/javascript">alert("İletişim bilgileriniz kaydedilemedi! Açıklama yazısı giriniz.");</script>';
		echo'</div>';
	}
	
	
	
	
	
	
	
	
	else{
		$sorgu = mysql_query("insert into contact(contact_name, contact_email, contact_subject,contact_description) 
		VALUES ('$contact_name','$contact_email','$contact_subject','$contact_description')");

			if($sorgu){
								echo'<div id = "kayitbasarilicart">';
					header("Location:index.php");
					echo '<script type="text/javascript">alert("Bizimle iletime geçtiğiniz için teşekkürler!");</script>';
					echo'</div>';
					echo "<meta http-equiv='refresh' content='0'>";
			}
	}
}
 			

?>
			</li>
		</ul>
	</div>
	<?php include ("contents/statics/footer.php"); ?>
</div>
<?php include ("contents/statics/script.php"); ?>
<?php include ("contents/statics/map-for-contact.php"); ?>
</body>
</html>