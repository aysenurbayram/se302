		<table style="width:100%">
  <tr>
    <th>Kullanıcı ID</th>
	<th>Kullanıcı Resmi</th>
    <th>Ad</th>
    <th>Soyad</th>     
	<th>Telefon</th>
    <th>Mail Adresi</th>     
    <th>Rol</th>
	<th>İşlem</th> 
  </tr>
  <tr>


        <?php
					include_once('services/manage.php'); 
					$allMember = getMember_Yazarolmakisteyen_Kullanici();

					if(count($allMember) != 0){
						foreach ($allMember as $Member) {
							echo '
									<td>'.$Member["idMember"].'</td>
									<td><img src="'.$Member['picture'] .'" width=50px; height= 50px alt=""></td> 
									<td>'.$Member['firstname'] .'</td>
									<td>'.$Member["lastname"].'</td>
									<td>'.$Member["phone"].'</td>
									<td>'.$Member["mail"].'</td>
									<td>'.$Member["role"].'</td>

							';
									echo"<td><a href=kullanciduzenle.php?deger=".$Member["idMember"].">DÜZENLE</a> - <a href=kullancionay.php?deger=".$Member["idMember"].">Yazar Kullanıcı Onay Ver</a> - <a href=kullancisil.php?deger=".$Member["idMember"].">SİL</a></td>";
									echo'</tr>';

						}
					}
					else {
						include("contents/statics/404-content.php");
					} ?>
		</table>