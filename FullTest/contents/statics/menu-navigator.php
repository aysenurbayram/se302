<ul class="menu">
	<li><a href="index.php">Ana Sayfa</a></li>
	<li><a href="lookbook.php">Neyin Zamanı?</a></li>
	<li><a href="blog.php">Blog</a></li>
			<?php
						$mail = $_SESSION['mail'];
			?>
			
						<?php
			include "services/db_baglan.php";
			$sorgu = mysql_query("SELECT role FROM  `Member` WHERE mail='$mail'")
			?>
<?php
if($sorgu){
							 while($duyuru = mysql_fetch_array($sorgu)){
							 $_SESSION['role'] = $duyuru['role'];
}
}
	if($_SESSION['mail'] && $_SESSION['role'] == 'Onayli_Uye'){
		echo'<li><a href="write-blog.php">Blog Yaz</a></li>';
	}
?>
	<li><a href="local-market.php">Yerel Marketler</a></li>
	<li><a href="suggest-item.php">Ürün Öner</a></li>
	<li><a href="about-us.php">Hakkımızda</a></li>
	<li><a href="contact-us.php">İletişim</a></li>
</ul>