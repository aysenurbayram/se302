<!DOCTYPE html>
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include("contents/statics/settings.php"); ?>
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_portfolio.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Profil Sayfası</h2>
		</div>
	</div>
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="index.php">Başlangıç</a> / <span>Profil  Sayfası</span>
		</nav>
		<div class="portfolio--wrap margin--bottom-50 js__isotope_wrap">
			<div id="profil_detay">
				<?php
				$mail = $_SESSION['mail'];
				?>
				<?php
				include "services/db_baglan.php";
				$sorgu = mysql_query("SELECT * FROM  `Member` WHERE mail='$mail'")
				?>
					<?php
					if($sorgu){
						while($duyuru = mysql_fetch_array($sorgu)){
							echo'
								<h3>Kullanıcı Detayları</h3>
								<hr/>
								<img src="'.$duyuru['picture'].'" height="250" width="250"/>
								<div id= "inform">
									<input type="text" name="idMember" value="'.$duyuru['idMember'].'" placeholder="" id="cmt-name-inp" class="inp--text" style="border: none; background-color:white; color:transparent" readonly>
								</div>
								<div id= "inform">
									<br/>
									Ad Soyad
									<h4>'.$duyuru['firstname'].' '.$duyuru['lastname'].'</h4>
								</div>
								<br/>
								<div id= "inform">
									Telefon
									<h4>'.$duyuru['phone'].'</h4>
								</div>
								<br/>
								<div id= "inform">
									E - Mail
									<h4>'.$duyuru['mail'].'</h4>
								</div>
								<br/>
							';
							
							echo'Kullanıcı Rolü';
								if($_SESSION['role'] == 'Onayli_Uye'){
									echo'<h4>Yazar Üye</h4>';
								}
								if($_SESSION['role'] == 'Normal_Uye'){
									echo'<h4>Normal Üye</h4>';
								}
								if($_SESSION['role'] == 'Onay_Bekliyor'){
									echo'<h4>Yazar Onayı Bekliyor</h4>';
								}
							
							echo'<hr/>
								<a href ="my-profile.php">Profil Bilgilerimi Güncelle</a>
								<br/>
								<a href ="my-profile_updete_pass.php">Parolamı Değiştir</a>
							';
	
						}
					}	

					?>
					
				
			</div>
			
		</div>
	</div>
	<?php include ("contents/statics/footer.php"); ?>
</div>
<?php include ("contents/statics/script.php"); ?>
</body>
</html>