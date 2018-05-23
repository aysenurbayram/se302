<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Admin Panel</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->

    <header class="header dark-bg">
      <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>

      <!--logo start-->
      <a href="index.html" class="logo">Nice <span class="lite">Admin</span></a>
      <!--logo end-->

    </header>
    <!--header end-->

    <!--sidebar start-->
	<?php
		include("menuadmin.php");
	?>
    <!--sidebar end-->

    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">

				<?php
					$mail = $_SESSION['mail'];
				?>
				<?php
					include "services/db_baglan.php";
					$sorgu_admin = mysql_query("SELECT * FROM  `Admin` WHERE mail='$mail'")
				?>
				
			<?php
			include "services/db_baglan.php";

			if(!empty($_GET['deger'])){
			$memberID=$_GET["deger"];
								if($sorgu_admin){
								while($duyuru = mysql_fetch_array($sorgu_admin)){
									echo'<input type="text" name="Admin_idAdmin" value="'.$duyuru['idAdmin'].'"  placeholder="" id="input-name1" class="form-control"  style="border: none;background-color:transparent; color:transparent" readonly>';
									$adminID=$duyuru['idAdmin'];
								}
							}
			$sorgu="UPDATE `Member` SET `idMember`='$memberID' ,`role`='Onay_Bekliyor',`Admin_idAdmin`='$adminID' WHERE `idMember`=  '$memberID'";
			
			if(mysql_query($sorgu) or die (hata))
			{
				echo " kayıt Başarılı";
			}
		}
			?>
			</section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">

        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>


</body>

</html>
