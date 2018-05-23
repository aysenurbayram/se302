		<form action="#" method="POST" id="add_product" class="comment-form frm-contact">
<input type="submit" name='add_product' class="button--common button--border button--white button--hover-main" value="Neyin Zamanı Ekle">

							<h5>Ürün Adı</h5>
									<input type="text" name="name" value=""  placeholder="Ürün Adı" id="input-name1" class="form-control">
							<h5>Protein</h5>
									<input type="text" name="protein" value=""  placeholder="Protein" id="input-name1" class="form-control">
							<h5>Vitamin</h5>
									<input type="text" name="vitamin" value=""  placeholder="Vitamin" id="input-name1" class="form-control">
							<h5>Şeker Oranı</h5>
									<input type="text" name="seker" value=""  placeholder="Şeker Oranı" id="input-name1" class="form-control">
							<h5>Yağ</h5>
									<input type="text" name="fat" value=""  placeholder="Yağ" id="input-name1" class="form-control">
							<h5>Karbonhidrat</h5>
									<input type="text" name="carbonhydrate" value=""  placeholder="Karbonhidrat" id="input-name1" class="form-control">
							<h5>Mineral</h5>
									<input type="text" name="mineral" value=""  placeholder="Mineral" id="input-name1" class="form-control">

							<h5>Ürün Zamanı</h5>
									<select name="time">
										<option name="time" value="yaz">Yaz</option>
										<option name="time" value="kis">Kış</option>
										<option name="time" value="ilkbahar">İlkbahar</option>
										<option name="time" value="sonbahar">Yaz</option>
									</select>
					<div id= "inform">
						Ürün Resmi
						<iframe src="upload/upload.php" width="100%" height="450"></iframe>
					</div>
							<h5>Ürün Resim URL</h5>
									<input type="text" name="picture" value=""  placeholder="Ürün Resim URL" id="input-name1" class="form-control">
									
									<h5>Ürün Açıklama</h5>
									<input type="text" name="description" value=""  placeholder="Ürün Açıklama" id="input-name1" class="form-control">
									
						<h5>Yerel Market Adı</h5>
						<select name="LocalMarket_idLocalMarket">
						<?php
						include_once('services/manage.php'); 
								$lm = getLocalMarkets();

						if(count($lm) != 0){
							foreach ($lm as $lm_name) {
								echo'<option name="LocalMarket_idLocalMarket" value="'.$lm_name['idLocalMarket'].'">'.$lm_name['name'].'</option>';
							}
						}
						
						?>
						</select>
						<br/><br/><br/>
					</form>
<?php
if(isset($_POST['add_product'])){
include ("services/db_baglan.php");
								$idItem=$_POST['idItem'];
								$name=$_POST['name'];
								$protein=$_POST['protein'];					
								$vitamin=$_POST['vitamin'];
								$seker=$_POST['seker'];
								$fat=$_POST['fat'];
								$carbonhydrate=$_POST['carbonhydrate'];
								$mineral=$_POST['mineral'];					
								$LocalMarket_idLocalMarket=$_POST['LocalMarket_idLocalMarket'];	
								$time=$_POST['time'];	
								$picture=$_POST['picture'];
								$description=$_POST['description'];	
			
	if((empty($name))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarısız! Ürün adı giriniz");</script>';
		echo'</div>';
	}
	if((empty($protein)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarısız!Protein bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($vitamin))){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarısız! Vitamin bilgisi giriniz.");</script>';
		echo'</div>';
	}	
	if((empty($seker))){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarısız! Şeker Oranı bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if( (empty($fat)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarısız! Yağ bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($carbonhydrate))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarısız!Karbonhidrat bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($mineral))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarısız!Mineral bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($time))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarısız!Ürün Zamanı bilgisi giriniz.");</script>';
		echo'</div>';
	}	
	if((empty($picture)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarısız!Ürün Resmi URL giriniz.");</script>';
		echo'</div>';
	}	
	if((empty($description))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarısız!Ürün Açıklaması giriniz.");</script>';
		echo'</div>';
	}
else{
		$sorgu=mysql_query("
								INSERT INTO `Item`(`idItem`, `name`, `protein`, `vitamin`, `seker`, `fat`, `carbonhydrate`, `mineral`, `LocalMarket_idLocalMarket`, `time`, `picture`, `description`) 
VALUES ('$idItem','$name','$protein','$vitamin','$seker','$fat','$carbonhydrate','$mineral','$LocalMarket_idLocalMarket','$time','$picture','$description' )
								");

	
			if($sorgu){
					echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarıyla tamamlandı.");</script>';
					echo "<meta http-equiv='refresh' content='0'>";

			}else{
				echo '<script type="text/javascript">alert("Ürün ekleme işlemi başarısız.");</script>';
			}
		}				
								
								
}
?>