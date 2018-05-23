		<table style="width:100%">
  <tr>
    <th>Ürün ID</th>
    <th>Ürün Resmi</th>
    <th>Ürün Adı</th>     
	<th>Protein</th>
    <th>Vitamin</th>     
    <th>Şeker Oranı</th>     
	<th>Yağ</th>
    <th>Karbonhidrat</th>     
	<th>Mineral</th>
    <th>Yerel Market ID</th>     
	<th>Ürün Zamanı</th>
	<th>İşlem</th> 
  </tr>
  <tr>


        <?php
					include_once('services/manage.php'); 
					$allUrun = getItems();

					if(count($allUrun) != 0){
						foreach ($allUrun as $Item) {
							echo '
									<td>'.$Item["idItem"].'</td>
									<td><img src="' . $Item['picture'] .'" width=50px; height= 50px alt=""></td> 
									<td>' . $Item['name'] .' </td>
									<td>'.$Item["protein"].'</td>
									<td>'.$Item["vitamin"].'</td>
									<td>'.$Item["seker"].'</td>
									<td>'.$Item["fat"].'</td>
									<td>'.$Item["carbonhydrate"].'</td>
									<td>'.$Item["mineral"].'</td>
									<td>'.$Item["LocalMarket_idLocalMarket"].'</td>
									<td>'.$Item["time"].'</td>
							';
									echo"<td><a href=urunduzenle.php?deger=".$Item["idItem"].">DÜZENLE</a> - <a href=urunsil.php?deger=".$Item["idItem"].">SİL</a></td>";
									echo'</tr>';

						}
					}
					else {
						include("contents/statics/404-content.php");
					} ?>
		</table>