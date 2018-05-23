<?php require_once 'services/manage.php'; ?>
<!DOCTYPE html>
<html lang="en">
<?php include ("contents/statics/head.php"); ?>
<body>
	<?php include ("contents/statics/settings.php"); ?>
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_blog.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Hesabım</h2>
		</div>
	</div>
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="index.php">Home Page</a> / <span>Üye Ol</span>
		</nav>
		<div class="row">
			<div class="col-md-1 col-xs-12"></div>
			<div class="col-md-9 col-xs-12">
				<ul class="blog--list">
					<li>
						<div class="blog--item">
							<h4>Hesap Oluştur</h4>
							<h4>Zaten bir hesabınız varsa, lütfen <a href="login.php"> giriş sayfasından</a> giriş yapınız. </h4>
							<h4>Parolanız en az 1 harf içermesi ve en az 6 karakterden oluşması gerekmektedir.</h4>
							<form method="post" name ="form" action="#">
								<h3>Kullanıcı Detayları</h3>
								<hr/>
								<div id= "inform">
									Ad
									<input type="text" name="firstname" value="" placeholder="Ad" id="firstname" class="form-control">
								</div>
								<div id= "inform">
									Soyad
									<input type="text" name="lastname" value="" placeholder="Soyad" id="lastname" class="form-control">
								</div>
								<div id= "inform">
									Telefon
									<input type="tel" name="phone" value="" placeholder="Telefon" id="phone" class="form-control">
								</div>
								<hr/>
								<h3>Kullanıcı Bilgileri</h3>
								<hr/>
								<div id= "inform">
									E - Mail
									<input type="email" name="mail" value="" placeholder="E-Mail" id="mail" class="form-control">
								</div>
								<div id= "adres_inform">
									Parola
									<input type="password" name="password" value="" placeholder="Parola" id="password" class="form-control">
								</div>	
								<div id= "inform">
									Profil Resmi
									<input type="text" name="picture" value="" placeholder="Profil Resmi" id="picture" class="form-control">
					<div id= "inform">
						<iframe src="upload/upload.php" width="150%" height="690"></iframe>
					</div>	
								</div>
								<hr/>
								<div id= "inform">
									Yazar Üye Olmak İstiyor musunuz ?						
									<select id="role" name="role" value="Gold Üye Olmak İstiyor musunuz ?" >
										<option value="Onay_Bekliyor">Evet</option>
										<option value="Normal_Uye">Hayır</option>
									</select>
								</div><hr/>
								<input type="submit" name ="submit" value="Üye Ol" class="" id="" name ="registerAuthor">
							</form>	
							
<?php
if(isset($_POST['submit']))
{ 

			include "db_baglan.php";	
			
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$phone = $_POST['phone'];
			$mail = $_POST['mail'];
			$password = $_POST['password'];	
			$picture = $_POST['picture'];
			$role = $_POST['role'];
				
			
	if((!(is_numeric($phone))) ){
						echo'<div id = "kayitbasarilicart">';
		header("Location:register.php");
		echo '<script type="text/javascript">alert("Üyelik işleminiz başarısız! Telefon bilgisi giriniz.");</script>';
						echo'</div>';
	}	
	if(((strlen($password) < 6) and (ctype_alnum($password) ) )  ){
						echo'<div id = "kayitbasarilicart">';
		header("Location:register.php");
		echo '<script type="text/javascript">alert("Üyelik işleminiz başarısız! Parola bilgisi en az 6 karakter ve içerisinde en az 1 harf bulunması gerekir");</script>';
						echo'</div>';
	}	
	
	if( (empty($firstname)) ){
						echo'<div id = "kayitbasarilicart">';
		header("Location:register.php");
		echo '<script type="text/javascript">alert("Üyelik işleminiz başarısız! Ad giriniz.");</script>';
						echo'</div>';
	}	
	if((empty($lastname))){
						echo'<div id = "kayitbasarilicart">';
		header("Location:register.php");
		echo '<script type="text/javascript">alert("Üyelik işleminiz başarısız! Soyad giriniz");</script>';
						echo'</div>';
	}	
	if((empty($mail))  ){
						echo'<div id = "kayitbasarilicart">';
		header("Location:register.php");
		echo '<script type="text/javascript">alert("Üyelik işleminiz başarısız! Email giriniz.");</script>';
						echo'</div>';
	}
	
	
	
	
	
	
	
	else{
		
$sorgu = mysql_query("insert into Member(firstname, lastname, phone,mail, password,picture, role,isBaned) VALUES ('$firstname','$lastname','$phone','$mail','$password','$picture','$role','false')");
			if($sorgu){
								echo'<div id = "kayitbasarilicart">';
					echo "<h3>Kayıt Başarılı</h3>";
					header("Location:index.php");
					echo '<script type="text/javascript">alert("Üyelik işleminiz başarıyla tamamlandı!");</script>';
					echo'</div>';
			}else{
				include('404-content.php');
				echo '<script type="text/javascript">alert("Üyelik işleminiz başarısız!");</script>';
			}
	}
}	
 			

?>							
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<?php include ("contents/statics/footer.php"); ?>
</div>
<?php include ("contents/statics/script.php"); ?>
</body>
</html>