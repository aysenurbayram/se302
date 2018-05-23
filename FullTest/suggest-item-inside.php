<form method="post" name ="form" action="#">
				<h3>Ürün Bilgileri</h3>
				<hr/>
					<div id= "inform">
						Ürün Adı
						<input type="text" name="name" value="" placeholder="" id="ad" class="form-control">
					</div>
					<div id= "inform">
						Protein
						<input type="text" name="protein" value="" placeholder="" id="protein" class="form-control">
					</div>

					<div id= "inform">
						Vitamin
						<input type="text" name="vitamin" value="" placeholder="" id="vitamin" class="form-control">
					</div>
					
					<div id= "inform">
						Şeker Oranı
						<input type="text" name="seker" value="" placeholder="" id="seker" class="form-control">
					</div>
					<div id= "inform">
						Yağ
						<input type="text" name="fat" value="" placeholder="" id="fat" class="form-control">
					</div>
					
					<div id= "adres_inform">
						Karbonhidrat
						<input type="text" name="carbonhydrate" value="" placeholder="" id="carbonhydrate" class="form-control">
					</div>	
					<div id= "inform">
						Mineral
						<input type="text" name="mineral" value="" placeholder="" id="mineral" class="form-control">
					</div>
					<div id= "inform">
						Ürün Zamanı
						<br/>
	<select name="time">
    <option value="yaz">Yaz</option>
    <option value="kiz">Kış</option>
    <option value="ilkbahar">İlkbahar</option>
    <option value="sonbahar">Sonbahar</option>
	</select>
					</div>					
					<div id= "inform">
						Ürün Resmi
						<input type="text" name="picture" value="" placeholder="" id="picture" class="form-control">
						<iframe src="upload/upload.php" width="150%" height="690"></iframe>
					</div>
						

					<div id= "inform">
						Ürün Açıklaması
						<input type="text" name="description" value="" placeholder="" id="description" class="form-control">
					</div>
					<hr/>
				<h3>Referans Bilgisi</h3>
					<div id= "inform">
						Referans
						<input type="text" name="referance" value="" placeholder="" id="referance" class="form-control">
					</div>
					<div id= "inform">
						İl 
						<br/>
						<select name="Location_idLocation">
    <option value="0">------</option>
    <option value="1">Adana</option>
    <option value="2">Adıyaman</option>
    <option value="3">Afyonkarahisar</option>
    <option value="4">Ağrı</option>
    <option value="5">Amasya</option>
    <option value="6">Ankara</option>
    <option value="7">Antalya</option>
    <option value="8">Artvin</option>
    <option value="9">Aydın</option>
    <option value="10">Balıkesir</option>
    <option value="11">Bilecik</option>
    <option value="12">Bingöl</option>
    <option value="13">Bitlis</option>
    <option value="14">Bolu</option>
    <option value="15">Burdur</option>
    <option value="16">Bursa</option>
    <option value="17">Çanakkale</option>
    <option value="18">Çankırı</option>
    <option value="19">Çorum</option>
    <option value="20">Denizli</option>
    <option value="21">Diyarbakır</option>
    <option value="22">Edirne</option>
    <option value="23">Elazığ</option>
    <option value="24">Erzincan</option>
    <option value="25">Erzurum</option>
    <option value="26">Eskişehir</option>
    <option value="27">Gaziantep</option>
    <option value="28">Giresun</option>
    <option value="29">Gümüşhane</option>
    <option value="30">Hakkâri</option>
    <option value="31">Hatay</option>
    <option value="32">Isparta</option>
    <option value="33">Mersin</option>
    <option value="34">İstanbul</option>
    <option value="35">İzmir</option>
    <option value="36">Kars</option>
    <option value="37">Kastamonu</option>
    <option value="38">Kayseri</option>
    <option value="39">Kırklareli</option>
    <option value="40">Kırşehir</option>
    <option value="41">Kocaeli</option>
    <option value="42">Konya</option>
    <option value="43">Kütahya</option>
    <option value="44">Malatya</option>
    <option value="45">Manisa</option>
    <option value="46">Kahramanmaraş</option>
    <option value="47">Mardin</option>
    <option value="48">Muğla</option>
    <option value="49">Muş</option>
    <option value="50">Nevşehir</option>
    <option value="51">Niğde</option>
    <option value="52">Ordu</option>
    <option value="53">Rize</option>
    <option value="54">Sakarya</option>
    <option value="55">Samsun</option>
    <option value="56">Siirt</option>
    <option value="57">Sinop</option>
    <option value="58">Sivas</option>
    <option value="59">Tekirdağ</option>
    <option value="60">Tokat</option>
    <option value="61">Trabzon</option>
    <option value="62">Tunceli</option>
    <option value="63">Şanlıurfa</option>
    <option value="64">Uşak</option>
    <option value="65">Van</option>
    <option value="66">Yozgat</option>
    <option value="67">Zonguldak</option>
    <option value="68">Aksaray</option>
    <option value="69">Bayburt</option>
    <option value="70">Karaman</option>
    <option value="71">Kırıkkale</option>
    <option value="72">Batman</option>
    <option value="73">Şırnak</option>
    <option value="74">Bartın</option>
    <option value="75">Ardahan</option>
    <option value="76">Iğdır</option>
    <option value="77">Yalova</option>
    <option value="78">Karabük</option>
    <option value="79">Kilis</option>
    <option value="80">Osmaniye</option>
    <option value="81">Düzce</option>
</select>
<br/>
					</div>
					<div id= "inform">
						Yerel Market Adı<br/>
						<select name="idLocalMarket">
				<?php include_once('services/manage.php'); 
						$allMarkets = getLocalMarkets();

				if(count($allMarkets) != 0){
					foreach ($allMarkets as $market) {

						echo '
							<option value="'.$market["idLocalMarket"].'"> '.$market["name"].' Plaka '.$market["Location_idLocation"].'</option>
						';

					}
				}
				else {

					include("404-content.php");
				}
				?>
						</select>
						
					</div>
				<hr/>
					<input type="submit" name="urun_oner_event" value="Ürün Öner" class="" id="" name ="urun_oner">
					
				</form>	
				<?php
				if(isset($_POST['urun_oner_event'])){

			include "db_baglan.php";	
			
			$name = $_POST['name'];
			$protein = $_POST['protein'];
			$vitamin = $_POST['vitamin'];
			$seker = $_POST['seker'];
			$fat = $_POST['fat'];
			$carbonhydrate = $_POST['carbonhydrate'];	
			$mineral = $_POST['mineral'];
			$time = $_POST['time'];
			$picture = $_POST['picture'];
			$description = $_POST['description'];
			$referance = $_POST['referance'];
			$Location_idLocation = $_POST['Location_idLocation'];
			$idLocalMarket = $_POST['idLocalMarket'];
				
			
	if((empty($name))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız! Ürün adı giriniz");</script>';
		echo'</div>';
	}
	if((empty($protein)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız!Protein bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($vitamin))){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız! Vitamin bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($seker))){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız! Şeker Oranı bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if( (empty($fat)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız! Yağ bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($carbonhydrate))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız!Karbonhidrat bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($mineral))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız!Mineral bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($time))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız!Ürün Zamanı bilgisi giriniz.");</script>';
		echo'</div>';
	}	
	if((empty($picture)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız!Ürün Resmi URL giriniz.");</script>';
		echo'</div>';
	}	
	if((empty($description))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız!Ürün Açıklaması giriniz.");</script>';
		echo'</div>';
	}
	if((empty($referance))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız!Referans bilgisi giriniz.");</script>';
		echo'</div>';
	}
	
	
	
	
	
	else{
		$sorgu = mysql_query("insert into suggest_item(name, protein, vitamin,seker,fat, carbonhydrate,mineral, time, picture, description, referance, Location_idLocation, idLocalMarket) 
		VALUES ('$name','$protein','$vitamin','$seker','$fat','$carbonhydrate','$mineral','$time','$picture','$description','$referance','$Location_idLocation','$idLocalMarket')");

			if($sorgu){
								echo'<div id = "kayitbasarilicart">';
					header("Location:index.php");
					echo '<script type="text/javascript">alert("Ürün önerme işlemi başarılı!");</script>';
					echo'</div>';
			}else{
				include('404-content.php');
				echo '<script type="text/javascript">alert("Ürün önerme işlemi başarısız!");</script>';
			}
	}
	
 			
				}
?>
				