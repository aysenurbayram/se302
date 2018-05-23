		<table style="width:100%">
  <tr>
    <th>Admin ID</th>
    <th>Ad</th>
    <th>Soyad</th>     
    <th>Mail</th>     
  </tr>
  <tr>


        <?php
					include_once('services/manage.php'); 
					$alladmin = getAdmin();

					if(count($alladmin) != 0){
						foreach ($alladmin as $admin_list) {
							echo '
									<td>'.$admin_list["idAdmin"].'</td>
									<td>'.$admin_list["firstname"].'</td>
									<td>'.$admin_list['lastname'] .' </td>
									<td>'.$admin_list["mail"].'</td>

							';
									echo"<td><a href=adminduzenle.php?deger=".$admin_list["idAdmin"].">DÜZENLE</a> - <a href=adminsil.php?deger=".$admin_list["idAdmin"].">SİL</a></td>";
									echo'</tr>';

						}
					}
					else {
						include("contents/statics/404-content.php");
					} ?>
		</table>