		<table style="width:100%">
  <tr>
    <th>Blog ID</th>
    <th>Blog Resmi</th>
    <th>Blog Başlığı</th>     
    <th>Blog Kategori</th>     
	<th>Blog Tarihi</th>
  </tr>
  <tr>


        <?php
					include_once('services/manage.php'); 
					$allblog = getlAllBlogPosts();

					if(count($allblog) != 0){
						foreach ($allblog as $blog) {
							echo '
									<td>'.$blog["idBlog"].'</td>
									<td><img src="' . $blog['picture'] .'" width=50px; height= 50px alt=""></td> 
									<td>' . $blog['title'] .' </td>
									<td>'.$blog["category"].'</td>
									<td>'.$blog["date"].'</td>

							';
									echo"<td><a href=blogduzenle.php?deger=".$blog["idBlog"].">DÜZENLE</a> - <a href=blogsil.php?deger=".$blog["idBlog"].">SİL</a></td>";
									echo'</tr>';

						}
					}
					else {
						include("contents/statics/404-content.php");
					} ?>
		</table>