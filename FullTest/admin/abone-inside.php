		<table style="width:100%">
  <tr>
    <th>ID</th>
    <th>Ad Soyad</th>
    <th>Mail</th>     
  </tr>
  <tr>


        <?php
					include_once('services/manage.php'); 
					$allabone = getAbone();

					if(count($allabone) != 0){
						foreach ($allabone as $abone_list) {
							echo '
									<td>'.$abone_list["abone_id"].'</td>
									<td>'.$abone_list['abone_ad'] .' </td>
									<td>'.$abone_list["abone_mail"].'</td>

							';
									echo'</tr>';

						}
					}
					else {
						include("contents/statics/404-content.php");
					} ?>
		</table>