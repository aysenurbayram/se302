		<form action="#" method="POST" id="update_yerelmarket" class="comment-form frm-contact">
<input type="submit" name='update_yerelmarket' class="button--common button--border button--white button--hover-main" value="Yerel Market Güncelle">
				<?php
				$mail = $_SESSION['mail'];
				?>
								<?php
				include "services/db_baglan.php";
				$sorgu = mysql_query("SELECT * FROM  `Admin` WHERE mail='$mail'")
				?>
        <?php
		$duzenle=$_GET["deger"];
					include_once('services/manage.php'); 
					$alllm = getlAllLocalMarketostsDetails();

					if(count($alllm) != 0){
						foreach ($alllm as $local_maket) {
							echo '
							<h5>Yerel Market ID</h5>
									<input type="text" name="idLocalMarket" value="'.$local_maket['idLocalMarket'].'"  placeholder="Yerel  Market ID" id="input-name1" class="form-control" readonly>

							<h5>Yerel Market Adı</h5>
									<input type="text" name="name" value="'.$local_maket['name'].'"  placeholder="Yerel Market Adı" id="input-name1" class="form-control">
							<h5>Telefon</h5>
									<input type="text" name="phone" value="'.$local_maket['phone'].'"  placeholder="Telefon" id="input-name1" class="form-control">
							<h5>Mail</h5>
									<input type="text" name="mail" value="'.$local_maket['mail'].'"  placeholder="Mail" id="input-name1" class="form-control">
							<h5>Adres</h5>
									<input type="text" name="address" value="'.$local_maket['address'].'"  placeholder="Adres" id="input-name1" class="form-control">
							<h5>Yerel Market Resim URL</h5>
									<input type="text" name="picture" value="'.$local_maket['picture'].'"  placeholder="Yerel Market Resim URL" id="input-name1" class="form-control">
					<div id= "inform">
						Yerel Market Resmi
						<iframe src="upload/upload.php" width="100%" height="450"></iframe>
					</div>
							<h5>Açıklama</h5>
									<input type="text" name="description" value="'.$local_maket['description'].'"  placeholder="Açıklama" id="input-name1" class="form-control">

							<h5>Yerel Market Şehir ID</h5>
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
';
									
			if($sorgu){
				while($duyuru = mysql_fetch_array($sorgu)){
					echo'<input type="text" name="Admin_idAdmin" value="'.$duyuru['idAdmin'].'"  placeholder="" id="input-name1" class="form-control"  style="border: none;background-color:transparent; color:transparent" readonly>';
				}
			}


							
						}
					}
					else {
						echo'<script type="text/javascript">alert("Ürün düzenleme işlemi başarıyla tamamlandı.");</script>';
					} 
			?>
					
						<br/><br/><br/>
					</form>
<?php
if(isset($_POST['update_yerelmarket'])){
include ("services/db_baglan.php");
								$idLocalMarket=$_POST['idLocalMarket'];
								$name=$_POST['name'];
								$phone=$_POST['phone'];					
								$mail=$_POST['mail'];
								$address=$_POST['address'];
								$picture=$_POST['picture'];
								$description=$_POST['description'];					
								$Location_idLocation=$_POST['Location_idLocation'];	
								$Admin_idAdmin=$_POST['Admin_idAdmin'];	


								
	$sorgu_update=mysql_query("UPDATE LocalMarket SET idLocalMarket='$idLocalMarket' , name='$name' , phone='$phone' , mail='$mail' , address='$address' , picture='$picture'
	, description='$description' , Location_idLocation='$Location_idLocation' , Admin_idAdmin='$Admin_idAdmin' 
	WHERE idLocalMarket='$idLocalMarket'");
	
			if($sorgu_update){
					echo '<script type="text/javascript">alert("Yerel Market güncelleme işlemi başarıyla tamamlandı.");</script>';
					echo "<meta http-equiv='refresh' content='0'>";

			}else{
				echo '<script type="text/javascript">alert("Yerel Market güncelleme işlemi başarısız.");</script>';
			}
	}
?>