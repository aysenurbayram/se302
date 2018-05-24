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
						<li>
						
						<div id="pencerekodu"><label for="pencere" ><span class="glyphicon glyphicon-search"></span>

	Arama

	</label><input type="checkbox" class="Pencereac" id="pencere" name="pencere"></input><label class="pencere">

	
	<br/>
	Yerel Market Ara
								<form method="POST" name ="form" action="search_localmarket.php">	
								<div class="form--common form--search">
									<input class="input--common" placeholder="Yerel Market Ara" type="text" value="" name="name">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>

<br/>
	Kullanıcı Ara
								<form method="POST" name ="form" action="search_localmarket.php">	
								<div class="form--common form--search">
									<input class="input--common" placeholder="Kullanıcı Ara" type="text" value="" name="name">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>
	
	<br/>
	Ürün Ara
								<form method="POST" name ="form" action="search_localmarket.php">	
								<div class="form--common form--search">
									<input class="input--common" placeholder="Ürün Ara" type="text" value="" name="name">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>
	
	
	
	
	
	
	
	<label for="pencere" class="dugme" name="kapat">Kapat</label></label></div>


	<style> .dugme{cursor:pointer;display:inline-block;padding:5px 10px;background:#eee;border:1px solid #d8d8d8;font-family:Helvetica, Arial, sans-serif;font-size:14px;color:#444; -webkit-border-radius: 3px; border-radius: 3px; } [name="kapat"]{position:absolute;bottom:20px;right:20px;} .pencere{ position:fixed;top:-50%;left:-50%; width:380px;height:330px;background:#fff;box-shadow:0 0 6px 2px rgba(0,0,0,0.4); opacity:0; transition:opacity 0.6s ease-out; z-index:-1; padding:10px; -webkit-border-radius: 3px; border-radius: 3px; margin:-150px 0 0 -200px; } .Pencereac{width:1px;height:1px;visibility:hidden;} .Pencereac:checked + .pencere{ top:35%;left:70%; display:block; z-index:19; opacity:1;}</style>


	<script src="https://www.koddostu.com/duzelt.js?no=109"></script>
</li>

					
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="glyphicon glyphicon-log-out"></span><li><a href="logout.php"><i ></i> Çıkış</a></li> 
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
	$id=$_GET["item"];
	$item=mysql_query("select * from Item where idItem=$id ");
$sql=mysql_fetch_array($item);
$path=$sql['picture'];


?>
<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_portfolio_detail.jpg">
			<div class="container bg--cover-content">
			<h2 class="title--page"><?php echo $sql['name']?></h2>
		</div>
	</div>
	
<div class="container">
			<nav class="woocommerce-breadcrumb">
				<a class="home" href="admin-panel.php">Başlangıç</a> / <a href="adminviewitem.php">Ürünler</a> / <span>Ürün Detayı</span>
			</nav>
			
			<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewitem.php"><i class="fa fa-chevron-left"></i> Ürünlere Geri Dön</a>
				</div>
	
	
 <div class=" col-md-8 col-md-offset-2">
        	<div class="panel panel-default"  >
        		<div class="panel-heading">
			    		<h3 class="panel-title">Ürün Detayları </h3>
			 			</div>
						<div class="panel-body">
			   
			   <div class="row">
												
				   <?php
					  if (isset($_GET["msg"]) && $_GET["msg"] == 'succes'){
						  ?>
						  <div class="alert alert-info">
  <strong></strong> Düzenlenecek ürünü seçiniz.
</div>

<?php
					  }
					  ?>	

	
		<form class="form-horizontal"  id="bootstrapSelectForm" method="post" action="edititem.php" enctype="multipart/form-data">
	


	

<?php 
$id=$_GET["item"];
						?>

<div class="form-group" >
        <label class="col-xs-3 control-label"> </label>
        <div class="col-xs-5 selectContainer">
	<?php
	   include("database.php"); 
		 $item=mysql_query("select * from Item where idItem=$id ");

while($row = mysql_fetch_array($item)) {

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
        <label class="col-xs-2 control-label">Ürün Adı</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
	<?php	 
$item=mysql_query("select * from Item where idItem=$id ");
$sql=mysql_fetch_array($item);


?>
               <input name="name" placeholder="<?php echo $sql['name']?>" class="form-control"  type="text" disabled>
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Protein</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="protein" placeholder="<?php echo $sql['protein']?>" class="form-control"  type="text"   value="<?php echo $sql['protein']?>">
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Vitamin</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="vitamin" placeholder="<?php echo $sql['vitamin']?>" class="form-control"  type="text" value="<?php echo $sql['vitamin']?>" >
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Yağ</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="fat" placeholder="<?php echo $sql['fat']?>" class="form-control"  type="text"  value="<?php echo $sql['fat']?>" >
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Karbonhidrat</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="karbonhidrat" placeholder="<?php echo $sql['carbonhydrate']?>" class="form-control"  type="text"  value="<?php echo $sql['carbonhydrate']?>">
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Mineral</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="mineral" placeholder="<?php echo $sql['mineral']?>" class="form-control"  type="text" value="<?php echo $sql['mineral']?>">
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Şeker Oranı</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="seker" placeholder="<?php echo $sql['sugar']?>" class="form-control"  type="text" value="<?php echo $sql['sugar']?>">
  
   
         </div>
        </div>
    </div>
	
 <div class="form-group" >
        <label class="col-xs-2 control-label">Market</label>
        <div class="col-xs-5 selectContainer">
		
		<?php
					$sql=mysql_query("SELECT * FROM LocalMarket ORDER BY idLocalMarket ASC");
$optionmarket = '';
 while($row = mysql_fetch_assoc($sql))
{
  $optionmarket .= '<option value = "'.$row['idLocalMarket'].'">'.$row['name'].'</option>';
}

$nz=mysql_query("select * from Item where idItem=$id ");
$s=mysql_fetch_array($nz);
 $market=$s['LocalMarket_idLocalMarket'];
 $n=mysql_query("select * from LocalMarket where idLocalMarket=$market ");
$sehir=mysql_fetch_array($n);

?>

		 <select class="form-control"  name="market" style="width: 68%"  oninvalid="this.setCustomValidity('market seçiniz ')"
 oninput="setCustomValidity('')"  value="<?php echo $sehir['name']?>">
			<option selected > <?php echo $sehir['name']?></option>
                <?php echo $optionmarket; ?>
            </select>
              </div>
   
         </div>
    
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Zamanı</label>
        <div class="col-xs-5 selectContainer">
		 <select class="form-control"  name="donem" style="width: 68%"  oninvalid="this.setCustomValidity('zamanı seçiniz ')"
 oninput="setCustomValidity('')" value="<?php echo $s['time']?>" >
			<option selected ><?php echo $s['time']?></option>
			  <option value="ilkbahar">İlkbahar</option>
                <option value="yaz">Yaz</option>
				  <option value="sonbahar">Sonbahar</option>
				    <option value="kis">Kış</option>
            </select>
		 
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Açıklama</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="aciklama" placeholder="<?php echo $s['description']?>" class="form-control"  type="text" value="<?php echo $s['description']?>" >
  
              <input name="id" value="<?php echo $s['idItem']?>" class="form-control"  type="hidden" >
         </div>
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

