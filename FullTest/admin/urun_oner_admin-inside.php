		<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Ürün Resmi</th>
    <th>Ürün Adı</th>
    <th>Protein</th>
    <th>Vitamin</th>
    <th>Şeker Oranı</th>
    <th>Yağ</th>
    <th>Karbonhidrat</th>
    <th>Mineral</th>
    <th>Ürün Zamanı</th>
    <th>Açıklama</th>
    <th>Referans</th>
    <th>İl Kodu</th>
    <th>Yerel Market ID</th>

  </tr>
  <tr>


        <?php
					include_once('services/manage.php'); 
					$allUrun = getSuggestItem();

					if(count($allUrun) != 0){
						foreach ($allUrun as $Item) {
							echo '
									<td>'.$Item["suggest_item_id"].'</td>
									<td><img src="' . $Item['picture'] .'" width=50px; height= 50px alt=""></td> 
									<td>'.$Item["name"].'</td>
									<td>'.$Item["protein"].'</td>
									<td>'.$Item["vitamin"].'</td>
									<td>'.$Item["seker"].'</td>
									<td>'.$Item["fat"].'</td>
									<td>'.$Item["carbonhydrate"].'</td>
									<td>'.$Item["mineral"].'</td>
									<td>'.$Item["time"].'</td>
									<td>'.$Item["description"].'</td>
									<td>'.$Item["referance"].'</td>
									<td>'.$Item["Location_idLocation"].'</td>
									<td>'.$Item["idLocalMarket"].'</td>

							';
									echo"<td><a href=urunaktar.php?deger=".$Item["suggest_item_id"].">Neyin Zamanı Listesine Aktar</a>";
									echo'</tr>';

						}
					}
					else {
						include("contents/statics/404-content.php");
					} ?>
		</table>