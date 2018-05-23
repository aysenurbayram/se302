<table style="width:100%">
  <tr>
    <th>Blog Yorum ID</th>
    <th>Yorum Yazan Kişi</th>
    <th>Yorum</th>     
    <th>Blog ID</th>     
  </tr>
  <tr>


        <?php
					include_once('services/manage.php'); 
					$allcomment = getComment();

					if(count($allcomment) != 0){
						foreach ($allcomment as $blog_yorum) {
							echo '
									<td>'.$blog_yorum["idComment"].'</td>
									<td>'.$blog_yorum['commentor'] .' </td>
									<td>'.$blog_yorum["comment"].'</td>
									<td>'.$blog_yorum["Blog_idBlog"].'</td>

							';
									echo"<td><a href=blogyorum_sil.php?deger=".$blog_yorum["idComment"].">SİL</a></td>";
									echo'</tr>';

						}
					}
					else {
						include("contents/statics/404-content.php");
					} ?>
		</table>