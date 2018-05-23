		<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Ad</th>
    <th>Mail</th>     
    <th>Konu</th>     
    <th>İçerik</th>     
  </tr>
  <tr>


        <?php
					include_once('services/manage.php'); 
					$allcontact = getContact();

					if(count($allcontact) != 0){
						foreach ($allcontact as $contact_list) {
							echo '
									<td>'.$contact_list["contact_id"].'</td>
									<td>'.$contact_list["contact_name"].'</td>
									<td>'.$contact_list['contact_email'] .' </td>
									<td>'.$contact_list["contact_subject"].'</td>
									<td>'.$contact_list["contact_description"].'</td>

							';
									echo"<td><a href=contactsil.php?deger=".$contact_list["contact_id"].">SİL</a></td>";
									echo'</tr>';

						}
					}
					else {
						include("contents/statics/404-content.php");
					} ?>
		</table>