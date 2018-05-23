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

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>


	  <link rel="stylesheet" href="assets/styles/style.min.css">
	 <link rel="stylesheet" href="assets/styles/register.css">
        <script src="assets/scripts/jquery-1.12.3.min.js"></script>
    <script src="assets/scripts/bootstrap.min.js"></script>
	 <script src="assets/scripts/profil.js"></script>
    <link rel="stylesheet" href="assets/styles/bootstrap.css">
	 <link rel="stylesheet" href="assets/styles/register.css">
	  <script src="assets/styles/profil.js"></script>
	


      <link rel="stylesheet" href="css/style.css">

    <script  src="js/index.js"></script>
	 
	 <style>
a {
    color: black;
}
a:hover {
    color: green;
}
</style>
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
	
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/market.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Marketler</h2>
		</div>
	</div>
	
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="admin-panel.php">Anasayfa</a> / <span>Marketler</span>
		</nav>
		
<!--

......................................MARKET GÖRÜNTÜLEMEK  İÇİN............................

-->
 <?php
					  if (!isset($_GET["msg"])) {
						 
					 ?>


<table id="customers">
  <tr>
    <th>Market Adı</th>
	 <th>Telefon</th>
    <th>Mail</th>
    <th>Adres</th>
	 <th>Açıklama</th>
	 <th>Şehir</th>
  </tr>
  <?php
   include("database.php"); 
  $item=mysql_query("select * from LocalMarket ");
		 
	  
 while ($row = mysql_fetch_array($item)) {

$id=$row['idLocalMarket'];
  echo"<td><a href='market-detail.php?mid=$id'>".$row['name']."</td>";
  echo"<td>".$row['phone']."</td>";
  echo"<td>".$row['mail']."</td>";
  echo"<td>".$row['address']."</td>";
  echo"<td>".$row['description']."</td>";
 $sehir=$row['Location_idLocation'];
   $s=mysql_query("select * from Location where idLocation=$sehir ");
  $sql = mysql_fetch_array($s);
  
  echo"<td>".$sql['name']."</td>";
 
 echo "</tr>"; 
 
 }
  
   
			 ?>   
</table>

	<div class="center">
		<a href="adminviewlocalmarket.php?msg=add" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Ekle</strong></span>            
    </a>
    <a href="adminviewlocalmarket.php?msg=edit" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Düzenle</strong></span>            
    </a>
 
    <a href="adminviewlocalmarket.php?msg=delete" class="btn btn-primary a-btn-slide-text">
       <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>Sil</strong></span>            
    </a>	
	</div>
<!--

.......................................MARKET EKLEMEK İÇİN..................... 

-->
<?php
					  }
					  ?>
<?php
if (isset($_GET["error"]) && $_GET["error"] == 'error'){
						  ?>
	<div class="alert alert-danger">
  <strong>Hata!</strong>Sistemde market kayıtlı
</div>

<?php
}
?>
   <?php
					  if (isset($_GET["msg"]) && $_GET["msg"] == 'add'){
						  ?>
<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewlocalmarket.php"><i class="fa fa-chevron-left"></i>Marketlere Geri Dön</a>
				</div>



<table id="customers">
  <tr>
    <th>Market Adı</th>
	 <th>Telefon</th>
    <th>Mail</th>
    <th>Adres</th>
	 <th>Açıklama</th>
	 <th>Şehir</th>
  </tr>
  <?php
   include("database.php"); 
  $item=mysql_query("select * from LocalMarket ");
		 
	  
 while ($row = mysql_fetch_array($item)) {

$id=$row['idLocalMarket'];
  echo"<td><a href='market-detail.php?mid=$id'>".$row['name']."</td>";
  echo"<td>".$row['phone']."</td>";
  echo"<td>".$row['mail']."</td>";
  echo"<td>".$row['address']."</td>";
  echo"<td>".$row['description']."</td>";
 $sehir=$row['Location_idLocation'];
   $s=mysql_query("select * from Location where idLocation=$sehir ");
  $sql = mysql_fetch_array($s); 
  echo"<td>".$sql['name']."</td>";
 
 echo "</tr>"; 
 
 }
  
   
			 ?>   
</table>

	<br>
	<br>
	
<!--
market ekleme formu
-->
			
 <div class=" col-md-8 col-md-offset-2">
        	<div class="panel panel-default"  >
        		<div class="panel-heading">
			    		<h3 class="panel-title">Market Detayları </h3>
			 			</div>
						<div class="panel-body">
			   
			   <div class="row">
								
<form class="form-horizontal"  id="bootstrapSelectForm" method="post" action="addmarket.php" enctype="multipart/form-data">
<fieldset>


<div class="form-group" >
        <label class="col-xs-3 control-label"> </label>
        <div class="col-xs-5 selectContainer">
	<?php
	   include("database.php"); 
		
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


<!-- Text input-->
      


<!-- Text input-->



	 <div class="form-group" >
        <label class="col-xs-2 control-label">Market Adı</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
               <input name="name" placeholder="adı" class="form-control"  type="text" required>
  
   
         </div>
        </div>
    </div>
	       
<div class="form-group">
  <label class="col-xs-2 control-label">Telefon</label>  
    <div class="col-xs-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
  <input name="phone" placeholder="(---)--- ----" class="form-control" type="tel" maxlength="10" required>
    </div>
  </div>
</div>

 <div class="form-group">
  <label class="col-xs-2 control-label">E-Mail</label>  
    <div class="col-xs-5 inputGroupContainer">
    <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
  <input name="email" placeholder="E-Mail Address" class="form-control"  type="email" required>
    </div>
  </div>
</div>
	
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Adres</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
               <input name="adres" placeholder="adres" class="form-control"  type="text" required>
  
   
         </div>
        </div>
    </div>

	 
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Açıklama</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
  <div class="input-group">
 <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
               <input name="aciklama" placeholder="açıklama" class="form-control"  type="text" required>
  
   
         </div>
        </div>
    </div>
	</div>
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Şehir</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
		 
		
		<?php
					$sql=mysql_query("SELECT * FROM Location ORDER BY idLocation ASC");
$optionsehir = '';
 while($row = mysql_fetch_assoc($sql))
{
  $optionsehir .= '<option value = "'.$row['idLocation'].'">'.$row['name'].'</option>';
}
?>

		 <select class="form-control"  name="sehir" style="width: 68%"  oninvalid="this.setCustomValidity('şehir seçiniz ')"
 oninput="setCustomValidity('')"   required>
			<option selected disabled> Şehir Seçiniz</option>
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







<div>



<!--
....................................MARKET DÜZENLEMEK İÇİN...........................................

-->

<?php
					  }
					  ?>

   <?php
					  if (isset($_GET["msg"]) && $_GET["msg"] == 'edit'){
						  ?>
		<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewlocalmarket.php"><i class="fa fa-chevron-left"></i>Marketlere Geri Dön</a>
				</div>

						  <div class="alert alert-info">
  <strong></strong> Düzenlenecek marketi seçiniz.
</div>
		


<table id="customers">
  <tr>
    <th>Market Adı</th>
	 <th>Telefon</th>
    <th>Mail</th>
    <th>Adres</th>
	 <th>Açıklama</th>
	 <th>Şehir</th>
  </tr>
  <?php
   include("database.php"); 
  $item=mysql_query("select * from LocalMarket ");
		 
	  
 while ($row = mysql_fetch_array($item)) {

$id=$row['idLocalMarket'];
  echo"<td><a href='admineditmarket.php?mid=$id'>".$row['name']."</td>";
  echo"<td>".$row['phone']."</td>";
  echo"<td>".$row['mail']."</td>";
  echo"<td>".$row['address']."</td>";
  echo"<td>".$row['description']."</td>";
 $sehir=$row['Location_idLocation'];
   $s=mysql_query("select * from Location where idLocation=$sehir ");
  $sql = mysql_fetch_array($s); 
  echo"<td>".$sql['name']."</td>";
 
 echo "</tr>"; 
 
 }
  
   
			 ?>   
</table>





<?php
					  }
					  ?>
		
	
	
			
<!--

................................MARKET SİLMEK İÇİN..............................

-->

   <?php
					  if (isset($_GET["msg"]) && $_GET["msg"] == 'delete'){
						  ?>
	<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewlocalmarket.php"><i class="fa fa-chevron-left"></i>Marketlere Geri Dön</a>
				</div>

						  <div class="alert alert-info">
  <strong></strong> Silmek istediğiniz marketi  seçiniz.
</div>
		


<table id="customers">
  <tr>
    <th>Market Adı</th>
	 <th>Telefon</th>
    <th>Mail</th>
    <th>Adres</th>
	 <th>Açıklama</th>
	 <th>Şehir</th>
  </tr>
  <?php
   include("database.php"); 
  $item=mysql_query("select * from LocalMarket ");
		 
	  
 while ($row = mysql_fetch_array($item)) {

$id=$row['idLocalMarket'];
  echo"<td><a href='market-detail.php?mid=$id & msg=sil '>".$row['name']."</td>";
  echo"<td>".$row['phone']."</td>";
  echo"<td>".$row['mail']."</td>";
  echo"<td>".$row['address']."</td>";
  echo"<td>".$row['description']."</td>";
 $sehir=$row['Location_idLocation'];
   $s=mysql_query("select * from Location where idLocation=$sehir ");
  $sql = mysql_fetch_array($s); 
  echo"<td>".$sql['name']."</td>";
 
 echo "</tr>"; 
 
 }
  
			  
			 ?>   
</table>

	
	<?php
					  }
					  ?>
		

</body>

				
	
				
				
			</div><!--/.row -->
		

			
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