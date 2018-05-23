<!DOCTYPE html>
<html lang="en">
<?php include ("head.php"); ?>
<body>
	<div id="js__hammer" class="menumobile--overlay js__menu_close"></div>
	<nav class="menu--navbar-wrapper">
		<div class="menu--navbar menumobile--navbar js__menu_mobile">
			<div class="menumobile--close-btn js__menu_close">
				<span class="glyphicon glyphicon-remove"></span> CLOSE
			</div>
			<div id="menu--mobile">
<?php include ("adminmenu-navigator.php"); ?>
	</div>
</nav><!--/.menu- -navbar-wrapper -->
<div class="mobile--sticky js__menu_sticky">
	<div class="container">
		<div class="pull-left">
			<a href="index.html" class="logo"><img src="assets/images/son.png" alt=""></a>
		</div>
		<div class="pull-right">
			<button type="button" class="menumobile--toggle js__menu_toggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
	</div>
</div>
<div id="wrapper">
	<header class="ossvn--header">
		<div class="container">
			<a href="" class="logo--header"><img src="assets/images/son.png" style="height:120px" alt=""></a>
			<div class="header--right">
				<button type="button" class="menumobile--toggle js__menu_toggle">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<div class="menu--header">
					<ul class="menu menu--inline linkwrap--hover-line-bottom">
						<li><a href="#"><i class="icon fa fa-user-md"></i> Arama</a></li>
						
					</ul>
				</div>
				<div class="dropdown--address js__tab_plugin" data-toggle="yes" data-outside="yes">

				</div>
			</div>
		</div>
	</header><!--/.ossvn- -header -->

    <nav class="menu--navbar-wrapper">
		<div class="container">
			<div class="menu--navbar animation--top menudesktop--navbar">
				<div id="menu--navbar" class="js__auto_correct_sub_menu">
<?php include ("adminmenu-navigator.php"); ?>
				</div><!--/#menu- -navbar -->
			</div>
		</div>
    </nav><!--/.menu- -navbar-wrapper -->
		
		
		<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/users.png">
			<div class="container bg--cover-content">
				<h2 class="title--page">Kullanıcı Detayı</h2>
			</div>
		</div>
		
		<div class="container">
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="admin-panel.php">Başlangıç</a> / <a href="adminviewuser.php">Kullanıcılar</a> / <span>Kullanıcı Detayı</span>
			</nav>
			
			<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewuser.php"><i class="fa fa-chevron-left"></i> Kullanıcılara Geri Dön</a>
				</div>

				<div class="col--center text-left margin--top-100">

					<?php include('database.php'); 
					
			
					$id=$_GET["uid"];
					$sql=mysql_query("select * from Member where idMember=$id ");
                      $user=mysql_fetch_array($sql);
							echo '

							<div class="portfolio--full-img margin--top-100">
							<img src="' . $user['picture'] . '"   class="img-circle"> 
							</div>

							<h2 class="portfolio--detail-title">' . $user['firstname'] .'  &nbsp &nbsp '. $user['lastname'].'</h2>
						
							

							<ul class="list--two-side">
							<li><strong class="pull-left">Telefon</strong><span class="pull-right">' . $user['phone'] . '</span></li>
							<li><strong class="pull-left">Mail</strong><span class="pull-right">' . $user['mail'] . '</span></li>
							<li><strong class="pull-left">Rol</strong><span class="pull-right">' . $user['role'] . '</span></li>
							
							</ul>
							';


					?>
<?php 
if ($user['role']=='Onay_Bekliyor'){
	?>
	<div class="center">
		<a href="approveuser.php?uid=<?php echo $user['idMember'];?>" class="btn btn-primary a-btn-slide-text" name="onay">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
        <span><strong>Onayla</strong></span>            
    </a>
<?php
}
?>

<?php 
if ($user['role']=='Onayli_Uye'){
	?>
	<div class="center">
		<a href="rejectuser.php?uid=<?php echo $user['idMember'];?>" class="btn btn-primary a-btn-slide-text" name="onay">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
        <span><strong>Onayı Kaldır</strong></span>            
    </a>
<?php
}
?>

<?php 
if ($user['isBaned']=='false'){
	?>
		<a href="engelle_user.php?uid=<?php echo $user['idMember'];?>" class="btn btn-primary a-btn-slide-text" name="onay">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
        <span><strong>Kullanıcıyı Engelle</strong></span>            
    </a>
<?php
}
?>

<?php 
if ($user['isBaned']=='true'){
	?>
		<a href="engellikaldır_user.php?uid=<?php echo $user['idMember'];?>" class="btn btn-primary a-btn-slide-text" name="onay">
        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
        <span><strong>Kullanıcıyı Engelli Kaldır</strong></span>            
    </a>
<?php
}
?>

    <a href="deleteuser.php?uid=<?php echo $user['idMember'];?>" class="btn btn-primary a-btn-slide-text">
       <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>Kullanıcıyı Sil</strong></span>            
    </a>	
	</div>
				
				

				</div>
				
				
	
	</div><!--/#wrapper -->
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="http://demo.comfythemes.com/tomoko-html/assets/script/html5shiv.min.js"></script>
      <script src="http://demo.comfythemes.com/tomoko-html/assets/script/respond.min.js"></script>
  <![endif]-->
    <!-- Bootstrap core JavaScript
    	================================================== -->
    	<!-- Placed at the end of the document so the pages load faster -->
    	<?php include ("script.php"); ?>
    </body>
    </html>