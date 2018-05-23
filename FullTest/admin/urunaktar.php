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
			include "services/db_baglan.php";

			if(!empty($_GET['deger'])){
			$dgr=$_GET["deger"];
			$tmp = $_GET["deger"];
			
			$select_query = mysql_query("SELECT * FROM suggest_item WHERE suggest_item_id='$dgr'");
			if($select_query){
				while($veri = mysql_fetch_array($select_query)){
					$suggest_item_id = $veri['suggest_item_id'];
					$name = $veri['name'];
					$protein = $veri['protein'];
					$vitamin = $veri['vitamin'];
					$seker = $veri['seker'];
					$fat = $veri['fat'];
					$carbonhydrate = $veri['carbonhydrate'];
					$mineral = $veri['mineral'];
					$time = $veri['time'];
					$picture = $veri['picture'];
					$description = $veri['description'];
					$referance = $veri['referance'];
					$Location_idLocation = $veri['Location_idLocation'];
					$idLocalMarket = $veri['idLocalMarket'];
				}
			}
			
			$insert_query= mysql_query("INSERT INTO `Item`(`idItem`, `name`, `protein`, `vitamin`, `seker`, `fat`, `carbonhydrate`, `mineral`, `LocalMarket_idLocalMarket`, `time`, `picture`, `description`) 
								VALUES ('','$name','$protein','$vitamin','$seker','$fat','$carbonhydrate','$mineral','$idLocalMarket','$time','$picture','$description')	");	
			
			$delete_query= mysql_query("DELETE FROM `suggest_item` WHERE suggest_item_id='$tmp'");
			
				echo "Neyin Zamanı Listesine Aktarma işlemi başarıyla tamamlandı.";
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
