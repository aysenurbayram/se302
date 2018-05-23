<table style="width:100%">
  <tr>
    <th>Yerel Market Yorum ID</th>
    <th>Yorum Yazan Kişi</th>
    <th>Yorum</th>     
    <th>Yerel Market ID</th>     
  </tr>
  <tr>


        <?php
					include_once('services/manage.php'); 
					$allcomment = getComment_LocalMarket();

					if(count($allcomment) != 0){
						foreach ($allcomment as $blog_yorum) {
							echo '
									<td>'.$blog_yorum["idComment_localmarket"].'</td>
									<td>'.$blog_yorum['commentor'] .' </td>
									<td>'.$blog_yorum["comment"].'</td>
									<td>'.$blog_yorum["idLocalMarket"].'</td>

							';
									echo"<td><a href=yerelmarket_yorum_sil.php?deger=".$blog_yorum["idComment_localmarket"].">SİL</a></td>";
									echo'</tr>';

						}
					}
					else {
						include("contents/statics/404-content.php");
					} ?>
		</table>