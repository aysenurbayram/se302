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
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		
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
<?php include ("menu-navigator.php"); ?>
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
								<form method="POST" name ="form" action="adminviewlocalmarket.php?search">	
								<div class="form--common form--search">
									<input class="input--common" placeholder="Yerel Market Ara" type="text" value="" name="name">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>

<br/>
	Kullanıcı Ara
								<form method="POST" name ="form" action="adminviewuser.php?search">		
								<div class="form--common form--search">
									<input class="input--common" placeholder="Kullanıcı Ara" type="text" value="" name="name">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>
	
	<br/>
	Ürün Ara
								<form method="POST" name ="form" action="adminviewitem.php?search">	
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
	
	<div class="text-center bg--cover bg--fixed bg--cover-dark js__background" data-background="assets/images/bg_lookbook.jpg">
		<div class="container bg--cover-content">
			<h2 class="title--page">Ürünler</h2>
		</div>
	</div>
	
	<div class="container">
		<nav class="woocommerce-breadcrumb">
			<a class="home" href="admin-panel.php">Anasayfa</a> / <span>Ürünler</span>
		</nav>
		
		
		
				
 <?php
					  if (isset($_GET["search"])){
						 $name = $_POST['name'];
					 ?>

		
<table id="customers">
  <tr>
    <th>Ürün Adı</th>
    <th>Protein</th>
    <th>Vitamin</th>
	 <th>Yağ</th>
	 <th>Karbonhidrat</th>
	 <th>Mineral</th>
	  <th>Şeker Oranı</th>
	 <th>Market</th>
	 <th>Dönem</th>
	 <th>Açıklama</th>
  </tr>
  <?php
   include("database.php"); 
  $item=mysql_query("select * from Item ");
		 
	  
 while ($row = mysql_fetch_array($item)) {

$id=$row['idItem'];
  echo"<td><a href='item-detail.php?item=$id'>".$row['name']."</td>";
  echo"<td>".$row['protein']."</td>";
  echo"<td>".$row['vitamin']."</td>";
  echo"<td>".$row['fat']."</td>";
  echo"<td>".$row['carbonhydrate']."</td>";
  echo"<td>".$row['mineral']."</td>";
    echo"<td>".$row['sugar']."</td>";
  
 $marketid=$row['LocalMarket_idLocalMarket'];
   $s=mysql_query("select * from LocalMarket where idLocalMarket=$marketid ");
  $market = mysql_fetch_array($s);
  
  echo"<td><a href='market-detail.php?item=$id'>".$market['name']."</td>";
  echo"<td>".$row['time']."</td>";
   echo"<td>".$row['description']."</td>";
 echo "</tr>"; 
 
 }
					  } 
   
			 ?>   
</table>
		
		
		
<!--


..........................ÜRÜN GÖRÜNTÜLEMEK İÇİN............................

-->
 <?php
					  if (!isset($_GET["msg"])&& (!isset($_GET["search"]))) {
						 
					 ?>

<table id="customers">
  <tr>
    <th>Ürün Adı</th>
    <th>Protein</th>
    <th>Vitamin</th>
	 <th>Yağ</th>
	 <th>Karbonhidrat</th>
	 <th>Mineral</th>
	  <th>Şeker Oranı</th>
	 <th>Market</th>
	 <th>Dönem</th>
	 <th>Açıklama</th>
  </tr>
  <?php
   include("database.php"); 
  $item=mysql_query("select * from Item ");
		 
	  
 while ($row = mysql_fetch_array($item)) {

$id=$row['idItem'];
  echo"<td><a href='item-detail.php?item=$id'>".$row['name']."</td>";
  echo"<td>".$row['protein']."</td>";
  echo"<td>".$row['vitamin']."</td>";
  echo"<td>".$row['fat']."</td>";
  echo"<td>".$row['carbonhydrate']."</td>";
  echo"<td>".$row['mineral']."</td>";
    echo"<td>".$row['sugar']."</td>";
  
 $marketid=$row['LocalMarket_idLocalMarket'];
   $s=mysql_query("select * from LocalMarket where idLocalMarket=$marketid ");
  $market = mysql_fetch_array($s);
  
  echo"<td><a href='market-detail.php?mid=$marketid'>".$market['name']."</td>";
  echo"<td>".$row['time']."</td>";
   echo"<td>".$row['description']."</td>";
 echo "</tr>"; 
 
 }
  
   
			 ?>   
</table>

	<div class="center">
		<a href="adminviewitem.php?msg=add" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
        <span><strong>Ekle</strong></span>            
    </a>
    <a href="adminviewitem.php?msg=edit" class="btn btn-primary a-btn-slide-text">
        <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
        <span><strong>Düzenle</strong></span>            
    </a>
 
    <a href="adminviewitem.php?msg=delete" class="btn btn-primary a-btn-slide-text">
       <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        <span><strong>Sil</strong></span>            
    </a>	
	</div>
<!--

.................................ÜRÜN EKLEMEK İÇİN..................................

-->
<?php
if (isset($_GET["error"]) && $_GET["error"] == 'error'){
						  ?>
	<div class="alert alert-danger">
  <strong>Hata!</strong>Sistemde ürün kayıtlı
</div>

<?php
}
?>
<?php
					  }
					  ?>

   <?php
					  if (isset($_GET["msg"]) && $_GET["msg"] == 'add'){
						  ?>

<div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewitem.php"><i class="fa fa-chevron-left"></i>Ürünlere Geri Dön</a>
				</div>


	<br>
	<br>
 <div class=" col-md-8 col-md-offset-2">
        	<div class="panel panel-default"  >
        		<div class="panel-heading">
			    		<h3 class="panel-title">Ürün Detayları </h3>
			 			</div>
						<div class="panel-body">
			   
			   <div class="row">
								



		<form class="form-horizontal"  id="bootstrapSelectForm" method="post" action="additem.php" enctype="multipart/form-data">
	

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
	
 	

	 <div class="form-group" >
        <label class="col-xs-2 control-label">Ürün Adı</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">

               <input name="name" placeholder="adı" class="form-control"  type="text" >
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Protein</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="protein" placeholder="protein" class="form-control"  type="text" required>
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Vitamin</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="vitamin" placeholder="vitamin" class="form-control"  type="text" required>
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Yağ</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="fat" placeholder="yağ" class="form-control"  type="text" required>
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Karbonhidrat</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="karbonhidrat" placeholder="karbonhidrat" class="form-control"  type="text" required>
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Mineral</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="mineral" placeholder="mineral" class="form-control"  type="text" required>
  
   
         </div>
        </div>
    </div>
	
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Şeker Oranı</label>
        <div class="col-xs-5 selectContainer">
		 <div class="input-group">
 
               <input name="seker" placeholder="şeker" class="form-control"  type="text" required>
  
   
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
?>

		 <select class="form-control"  name="market" style="width: 68%"  oninvalid="this.setCustomValidity('market seçiniz ')"
 oninput="setCustomValidity('')"   required>
			<option selected disabled> Market Seçiniz</option>
                <?php echo $optionmarket; ?>
            </select>
              </div>
   
         </div>
    
	 <div class="form-group" >
        <label class="col-xs-2 control-label">Zamanı</label>
        <div class="col-xs-5 selectContainer">
		 <select class="form-control"  name="donem" style="width: 68%"  oninvalid="this.setCustomValidity('zamanı seçiniz ')"
 oninput="setCustomValidity('')"   required>
			<option selected disabled>Zamanını seçiniz </option>
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
 
               <input name="aciklama" placeholder="açıklama" class="form-control"  type="text" required>
         </div>
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

.........................................ÜRÜN DÜZENLEMEK İÇİN................................

-->

<?php
					  }
					  ?>

   <?php
					  if (isset($_GET["msg"]) && $_GET["msg"] == 'edit'){
						  ?>
						  <div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewitem.php"><i class="fa fa-chevron-left"></i>Ürünlere Geri Dön</a>
				</div>

						  <div class="alert alert-info">
  <strong></strong> Düzenlenecek ürünü seçiniz.
</div>
		

<table id="customers">
  <tr>
    <th>Ürün Adı</th>
    <th>Protein</th>
    <th>Vitamin</th>
	 <th>Yağ</th>
	 <th>Karbonhidrat</th>
	 <th>Mineral</th>
	 <th>Şeker Oranı</th>
	 <th>Market</th>
	 <th>Zamanı</th>
	 <th>Açıklama</th>
  </tr>
  <?php
   include("database.php"); 
  $item=mysql_query("select * from Item ");
		 
	  
 while ($row = mysql_fetch_array($item)) {

$id=$row['idItem'];
  echo"<td><a href='adminedititem.php?item=$id'>".$row['name']."</td>";
  echo"<td>".$row['protein']."</td>";
  echo"<td>".$row['vitamin']."</td>";
  echo"<td>".$row['fat']."</td>";
  echo"<td>".$row['carbonhydrate']."</td>";
  echo"<td>".$row['mineral']."</td>";
  echo"<td>".$row['sugar']."</td>";
  $marketid=$row['LocalMarket_idLocalMarket'];
   $s=mysql_query("select * from LocalMarket where idLocalMarket=$marketid ");
  $market = mysql_fetch_array($s);
  
  echo"<td><a href='market-detail.php?mid=$marketid'>".$market['name']."</td>";
  echo"<td>".$row['time']."</td>";
   echo"<td>".$row['description']."</td>";
 echo "</tr>"; 
 
 }
  
   
			 ?>   
</table>




<?php
					  }
					  ?>
		
	
	
			
<!--

..........................................ÜRÜN SİLMEK İÇİN..............................

-->

   <?php
					  if (isset($_GET["msg"]) && $_GET["msg"] == 'delete'){
						  ?>
						  
						  <div class="text-center">
				<div class="nav--top clearfix">
					<a class="link--back pull-left link--color-gm" href="adminviewitem.php"><i class="fa fa-chevron-left"></i>Ürünlere Geri Dön</a>
				</div>

						  <div class="alert alert-info">
  <strong></strong> Silmek istediğiniz ürünü seçiniz.
</div>
		


<table id="customers">
  <tr>
    <th>Ürün Adı</th>
    <th>Protein</th>
    <th>Vitamin</th>
	 <th>Yağ</th>
	 <th>Karbonhidrat</th>
	 <th>Mineral</th>
	 <th>Şeker Oranı</th>
	 <th>Market</th>
	 <th>Dönem</th>
	 <th>Açıklama</th>
  </tr>
  <?php
   include("database.php"); 
  $item=mysql_query("select * from Item ");
		 
	  
 while ($row = mysql_fetch_array($item)) {

$id=$row['idItem'];
  echo"<td><a href='item-detail.php?item=$id & msg=sil '>".$row['name']."</td>";
  echo"<td>".$row['protein']."</td>";
  echo"<td>".$row['vitamin']."</td>";
  echo"<td>".$row['fat']."</td>";
  echo"<td>".$row['carbonhydrate']."</td>";
  echo"<td>".$row['mineral']."</td>";
  echo"<td>".$row['sugar']."</td>";
  echo"<td>".$row['LocalMarket_idLocalMarket']."</td>";
  echo"<td>".$row['time']."</td>";
   echo"<td>".$row['description']."</td>";
 echo "</tr>"; 
 
 }
  
					  }				  
			 ?>   
</table>

	
	

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