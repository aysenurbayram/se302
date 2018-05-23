<!DOCTYPE html>
<html lang="en">
<?php include ("head.php"); ?>
<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}

.center {
    margin: auto;
    width: 60%;
    padding: 10px;
}
</style>
<html lang="en">
  <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home</title>
    <link rel="stylesheet" href="assets/styles/style.min.css">
	 <link rel="stylesheet" href="assets/styles/register.css">
        <script src="assets/scripts/jquery-1.12.3.min.js"></script>
    <script src="assets/scripts/bootstrap.min.js"></script>
	 <script src="assets/scripts/profil.js"></script>
    <link rel="stylesheet" href="assets/styles/bootstrap.css">
	 <link rel="stylesheet" href="assets/styles/register.css">
	  <script src="assets/styles/profil.js"></script>
	 
  </head>

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
			<a href="" class="logo"><img src="assets/images/son.png" alt=""></a>
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
			<a href="" class="logo--header"><img src="assets/images/son.png" alt=""></a>
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
	
	<?php
	include('database.php');
	$id=$_GET["mid"];
	$item=mysql_query("select * from LocalMarket where idLocalMarket=$id ");
$sql=mysql_fetch_array($item);
$path=$sql['picture'];


?>
<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/market.jpg">
			<div class="container bg--cover-content">
			<h2 class="title--page"><?php echo $sql['name']?></h2>
		</div>
	</div>
	
<div class="container">
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="admin-panel.php">Başlangıç</a> / <a href="adminviewlocalmarket.php">Marketler</a> / <span>Market Detayı</span>
			</nav>
			
			<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewlocalmarket.php"><i class="fa fa-chevron-left"></i> Marketlere Geri Dön</a>
				</div>
	
	
 <div class=" col-md-8 col-md-offset-2">
        	<div class="panel panel-default"  >
        		<div class="panel-heading">
			    		<h3 class="panel-title">Market Detayları </h3>
			 			</div>
						<div class="panel-body">
			   
			   <div class="row">
												
				   <?php
					  if (isset($_GET["msg"]) && $_GET["msg"] == 'succes'){
						  ?>
						  <div class="alert alert-info">
  <strong></strong> Düzenlenecek marketi seçiniz.
</div>

<?php
					  }
					  ?>	

	
		<form class="form-horizontal"  id="bootstrapSelectForm" method="post" action="editmarket.php" enctype="multipart/form-data">
	


	

<?php 
$id=$_GET["mid"];
						?>

<div class="form-group" >
        <label class="col-xs-3 control-label"> </label>
        <div class="col-xs-5 selectContainer">
	<?php
	   include("database.php"); 
		 $market=mysql_query("select * from LocalMarket where idLocalMarket=$id ");

while($row = mysql_fetch_array($market)) {

$path=$row['picture'];


echo "<img class='media-object ' src='$path'    alt='user's photo' width='300' height='300'  />";
}
					   ?>
					   <br>
					   <br>
				   
           <div class="input-group image-preview">
                <input type="text" class="form-control image-preview-filename" disabled="disabled"> <!-- don't give a name === doesn't send on POST/GET -->
                <span class="input-group-btn">
                    <!-- image-preview-clear button -->
                    <button type="button" class="btn btn-default image-preview-clear" style="display:none;">
                        <span class="glyphicon glyphicon-remove"></span> Clear
                    </button>
                    <!-- image-preview-input -->
                    <div class="btn btn-default image-preview-input" style="height:35px;">
                        <span class="glyphicon glyphicon-folder-open"></span>
                        <span class="image-preview-input-title">Dosya seç</span>
                         <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/><input name="uploadedfilee" type="file" style="height:35px;" /><br><br>
						
                    </div>
                </span>
            </div><!-- /input-group image-preview [TO HERE]--> 
        </div>
</div>
	
 	

	 <div class="form-group" >
        <label class="col-xs-2 control-label">Market Adı</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
	<?php	 
$market=mysql_query("select * from LocalMarket where idLocalMarket=$id ");
$sql=mysql_fetch_array($market);


?>
               <input name="name" placeholder="<?php echo $sql['name']?>" class="form-control"  type="text" value="<?php echo $sql['name']?>" disabled>
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Telefon</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="tel" placeholder="<?php echo $sql['phone']?>" class="form-control"  type="tel" maxlength="10"  value="<?php echo $sql['phone']?>">
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Mail</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="mail" type="email" placeholder="<?php echo $sql['mail']?>"  value="<?php echo $sql['mail']?>" class="form-control"  >
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Adres</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="adres" placeholder="<?php echo $sql['address']?>" class="form-control"  type="text" value="<?php echo $sql['address']?>">
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Açıklama</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="aciklama" placeholder="<?php echo $sql['description']?>" class="form-control"  type="text"  value="<?php echo $sql['description']?>">
  
   
              <input name="id" value="<?php echo $sql['idLocalMarket']?>" class="form-control"  type="hidden" >
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Şehir</label>
        <div class="col-xs-5 selectContainer">
		 
		
		<?php
					$sql=mysql_query("SELECT * FROM Location ORDER BY idLocation ASC");
$optionsehir = '';
 while($row = mysql_fetch_assoc($sql))
{
  $optionsehir .= '<option value = "'.$row['idLocation'].'">'.$row['name'].'</option>';
}
$market=mysql_query("select * from LocalMarket where idLocalMarket=$id ");
$s=mysql_fetch_array($market);
 $sehirid=$s['Location_idLocation'];
 $sehir=mysql_query("select * from Location where idLocation=$sehirid ");
$sehiradi=mysql_fetch_array($sehir);



?>

		 <select class="form-control"  name="sehir" style="width: 68%" value="<?php echo $sehiradi['name']?>" oninvalid="this.setCustomValidity('şehir seçiniz ')"
 oninput="setCustomValidity('')"   >
			<option selected disabled> <?php echo $sehiradi['name']; ?></option>
                <?php echo $optionsehir; ?>
            </select>
              </div>
   
         </div>
	
	
	
	
	<div class="form-group" >
 <div class="col-md-10">
 <button type="submit" class="btn btn-md btn-success pull-right" name="edit">Kaydet</button>
 
	</div>
	</div>
	
	
	
	
	


</form>

</body>
</html>

