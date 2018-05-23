		<table style="width:100%">
  <tr>
    <th>Yerel Market ID</th>
    <th>Yerel Market Resmi</th>
    <th>Yerel Market Adı</th>     
    <th>Telefon</th>     
	<th>Mail</th>
	<th>Şehir Plaka No</th>
  </tr>
  <tr>


        <?php
					include_once('services/manage.php'); 
					$alllocalmarkets = getLocalMarkets();

					if(count($alllocalmarkets) != 0){
						foreach ($alllocalmarkets as $localmarket) {
							echo '
									<td>'.$localmarket["idLocalMarket"].'</td>
									<td><img src="' . $localmarket['picture'] .'" width=50px; height= 50px alt=""></td> 
									<td>' . $localmarket['name'] .' </td>
									<td>'.$localmarket["phone"].'</td>
									<td>'.$localmarket["mail"].'</td>
									<td>'.$localmarket["Location_idLocation"].'</td>

							';
									echo"<td><a href=localmarketduzenle.php?deger=".$localmarket["idLocalMarket"].">DÜZENLE</a> - <a href=localmarketsil.php?deger=".$localmarket["idLocalMarket"].">SİL</a></td>";
									echo'</tr>';

						}
					}
					else {
						include("contents/statics/404-content.php");
					} ?>
		</table>