<footer class="ossvn--footer">
	<div class="container relative">
		<div class="row">
			<div class="col col-sm-6 col-md-3">
				<h4 class="footer--title">Hakkımızda</h4>
				<a href="index.php" class="footer--logo"><img src="assets/images/logo.png" alt=""></a>
				<p>ADDOT, dönemlik meyve ve sebzeleri gösteren; yerel üretici ile Türkiye'nin dört bir yanında bulunan tüketiciyi buluşturan; uzmanların yazılarını yayınlayan bir yaşam portalıdır.</p>
				<a href="about-us.php" class="link--color-bm link--read-more">Devamını gör<i class="fa fa-long-arrow-right"></i></a>
			</div>
			<div class="col col sm-6 col-md-2">
				<h4 class="footer--title">Site Haritası</h4>
				<ul class="menu">
					<li><a href="index.php">Ana Sayfa</a></li>
					<li><a href="blog.php">Son Yazılar</a></li>
					<li><a href="local-market.php">Yerel Marketler </a></li>
					<li><a href="suggest-item.php">Ürün Öner</a></li>
					<li><a href="faq.php">SSS</a></li>
				</ul>
			</div>
			<div class="col col-md-3 col-sm-6">
				<h4 class="footer--title">İrtibatta Kalalım!</h4>
				<ul class="list--social">
					<li><a href="#" class="fa fa-twitter icon"></a></li>
					<li><a href="#" class="fa fa-facebook icon"></a></li>
					<li><a href="#" class="fa fa-google-plus icon"></a></li>
					<li><a href="#" class="fa fa-flickr icon"></a></li>
					<li><a href="#" class="fa fa-pinterest icon"></a></li>
				</ul>
			</div>
			<div class="col col-sm-6 col-md-4">
				<h4 class="footer--title">Abonemiz Olabilirsiniz...</h4>
				<p>Dönemin ürünlerini önceden duymak, son yayınlanan yazıları ve listemize en son eklenen yerel marketleri herkesten önce duymak için elektronik posta listemize abone olabilirsiniz.</p>
				<form action="#"  method="post" id="commentform" class="comment-form frm-contact frm-comment">
					<input type="text" style="width: 100%;height:35px;border:1px solid olive; border-radius:5px;padding-left:10px;"  name="abone_ad" id="abone_ad" class="inp-text input--common" placeholder="Ad Soyad yazınız">
					<br/><br/>
					<input type="email" style="width: 100%;height:35px;border:1px solid olive; border-radius:5px;padding-left:10px;" name="abone_mail" id="abone_mail" class="inp-text input--common" placeholder="E-Posta adresinizi yazınız">
					<br/><br/>
					<input type="submit" value="Abone Ol" class="button--common button--main button--hover-dark-main" id="" name ="abone_ol_event">
				</form>
				
<?php

				if(isset($_POST['abone_ol_event']))
{ 

			include "db_baglan.php";	
			
			$abone_ad = $_POST['abone_ad'];	
			$abone_mail = $_POST['abone_mail'];	
			
			if((empty($abone_mail)) or (empty($abone_ad))  ){
						echo'<div id = "kayitbasarilicart">';
		echo '<script type="text/javascript">alert("Abonelik işlemi başarısız!");</script>';
		header("Location:contact-us.php");
						echo'</div>';
	}else{
		$sorgu = mysql_query("insert into abone(abone_mail, abone_ad) VALUES ('$abone_mail','$abone_ad')");

			if($sorgu){
								echo'<div id = "kayitbasarilicart">';
					echo '<script type="text/javascript">alert("Abonelik işlemi başarılı!");</script>';
					header("Location:contact-us.php");
				echo'</div>';
			}
			else{
				echo '<script type="text/javascript">alert("Abonelik işlemi başarısız!Aynı mail adresi ile birçok kez abone olamazsınız!");</script>';
				header("Location:contact-us.php");
			}
	}
	
}		

?>			
			
			</div>
		</div>
	</div><!--/container -->
	<div class="copyright">
		<div class="container">
			<div class="pull-left"><i>Bu sosyal ağ Işık Üniversitesi öğrencileri tarafından hazırlanmıştır ve tüm hakları saklıdır.</i></div>
			<div class="pull-right">
				<ul class="menu">
					<li><a href="contact-us.php">İletişim Bilgileri</a></li>
					<li><a href="about-us.php">Hakkımızda</a></li>
					<li><a href="privacy.php">Gizlilik</a></li>
					<li><a href="usage.php">Kullanım Şartları</a></li>
				</ul>
				</div>
			</div>
		</div>
	</footer>
	<div class="back-to-top js__back_to_top"><img src="assets/images/icon-to-top.png" alt=""><br>Başa dön!</div>