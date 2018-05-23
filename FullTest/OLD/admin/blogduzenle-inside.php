		<form action="#" method="POST" id="update_blog" class="comment-form frm-contact">
<input type="submit" name='update_blog' class="button--common button--border button--white button--hover-main" value="Blog Güncelle">
        <?php
		$duzenle=$_GET["deger"];
					include_once('services/manage.php'); 
					$allblog = getlAllBlogPostsDetails();

					if(count($allblog) != 0){
						foreach ($allblog as $Item_blog) {
							echo '
							<h5>Ürün ID</h5>
									<input type="text" name="idBlog" value="'.$Item_blog['idBlog'].'"  placeholder="Blog ID" id="input-name1" class="form-control" readonly>

							<h5>Blog Başlığı</h5>
									<input type="text" name="title" value="'.$Item_blog['title'].'"  placeholder="Blog Başlığı" id="input-name1" class="form-control">
							<h5>Kısa Yazı</h5>
									<input type="text" name="short_text" value="'.$Item_blog['short_text'].'"  placeholder="Kısa Yazı" id="input-name1" class="form-control">
							<h5>İçerik</h5>
									<input type="text" name="text" value="'.$Item_blog['text'].'"  placeholder="İçerik" id="input-name1" class="form-control">
							<h5>Tarih</h5>
									<input type="text" name="date" value="'.$Item_blog['date'].'"  placeholder="Tarih" id="input-name1" class="form-control" readonly>
							<h5>Kullanıcı ID</h5>
									<input type="text" name="Member_idMember" value="'.$Item_blog['Member_idMember'].'"  placeholder="Kullanıcı ID" id="input-name1" class="form-control" readonly>
							<h5>Blog Resim URL</h5>
									<input type="text" name="picture" value="'.$Item_blog['picture'].'"  placeholder="Blog Resim URL" id="input-name1" class="form-control">
								<div id= "inform">
						Blog Resmi
						<iframe src="upload/upload.php" width="100%" height="450"></iframe>
					</div>
							';

						}
					}
					else {
					} 
			?>
				<h5>Blog Kategori</h5>
				<select id="category" name="category" >
				   <option value="saglikli_yasam">Sağlıklı Yaşam</option>
				   <option value="spor">Spor</option>
				   <option value="organik">Organik</option>
				   <option value="doga">Doğa</option>
				</select>

						<br/><br/><br/>
					</form>
<?php
if(isset($_POST['update_blog'])){
include ("services/db_baglan.php");
			$idBlog = $_POST['idBlog'];
			$title = $_POST['title'];
			$short_text = $_POST['short_text'];
			$text = $_POST['text'];
			$date = $_POST['date'];
			$Member_idMember = $_POST['Member_idMember'];
			$picture = $_POST['picture'];
			$category = $_POST['category'];
			
if((empty($title)) || (empty($short_text)) || (empty($text)) || (empty($date)) || (empty($Member_idMember)) || (empty($picture)) || (empty($category)) ){			
	if((empty($title))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Blog güncelleme işlemi başarısız! Blog Başlığı giriniz");</script>';
		echo'</div>';
	}
	if((empty($short_text)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert(">Blog güncelleme işlemi başarısız!Kısa blog yazısı giriniz.");</script>';
		echo'</div>';
	}
	if((empty($text))){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Blog güncelleme işlemi başarısız! Blog İçerik giriniz.");</script>';
		echo'</div>';
	}
	if( (empty($date)) ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert(">Blog güncelleme işlemi başarısız! Tarih bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($Member_idMember))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Blog güncelleme işlemi başarısız!Kullanıcı bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($picture))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Blog güncelleme işlemi başarısız! Blog Resim URL bilgisi giriniz.");</script>';
		echo'</div>';
	}
	if((empty($category))  ){
						echo'<div id = "kayitbasarilicart">';
			header("Location:suggest-item.php");
			echo '<script type="text/javascript">alert("Blog güncelleme işlemi başarısız! Kategoribilgisi giriniz.");</script>';
		echo'</div>';
	}	

}
	else{
								
								$sorgu=mysql_query("UPDATE Blog SET idBlog='$idBlog' , title='$title' , short_text='$short_text' , text='$text' , date='$date' , Member_idMember='$Member_idMember' , picture='$picture' , category='$category'
								WHERE idBlog='$idBlog'");
		
	
			if($sorgu){
					echo '<script type="text/javascript">alert("Blog güncelleme işlemi başarıyla tamamlandı.");</script>';
					echo "<meta http-equiv='refresh' content='0'>";

			}else{
				echo '<script type="text/javascript">alert("Blog güncelleme işlemi başarısız.");</script>';
			}
	}
}
?>