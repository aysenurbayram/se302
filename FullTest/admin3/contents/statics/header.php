<header class="ossvn--header">

	<div class="container">
		<a href="index.php" class="logo--header"><img src="assets/images/logo.png" alt=""></a>
		<div class="header--right">
			<button type="button" class="menumobile--toggle js__menu_toggle">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<div class="menu--header">
															<?php 
 
include("db_baglan.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
	include('login.php');
    header("Location:index.php");
	
}
else {
    echo "<center>Sayfamıza hosgeldiniz";
	echo '<input type="text" name="mail" value="'.$_SESSION['mail'].'" placeholder="mail" id="input-name1" class="form-control" style="background-color:transparent;width:100%" readonly>';
    echo "<a href=logout.php>Guvenli cikis</a></center>";
							echo '<ul class="menu menu--inline linkwrap--hover-line-bottom">
							<li>
	<div id="pencerekodu"><label for="pencere" class="icon fa fa-user-md">

	Arama

	</label><input type="checkbox" class="Pencereac" id="pencere" name="pencere"></input><label class="pencere">

	Blog Ara 
								<form method="POST" name ="form" action="search_blog.php">	
								<div class="form--common form--search">
									<input class="input--common" placeholder="Blog Ara" type="text" value="" name ="title">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>
	<br/>
	Yerel Market Ara
								<form method="POST" name ="form" action="search_localmarket.php">	
								<div class="form--common form--search">
									<input class="input--common" placeholder="Yerel Market Ara" type="text" value="" name="name">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>

<br/>
	Adrese Göre Yerel Market Ara
								<form method="POST" name ="form" action="search_localmarket_by_address.php">	
								<div class="form--common form--search">
									<input class="input--common" placeholder="Adrese Göre Yerel Market Ara" type="text" value="" name="address">
									<button type="submit" class="button--icon"><i class="icon fa fa-search"></i></button>
								</div>
							</form>
	<label for="pencere" class="dugme" name="kapat">Kapat</label></label></div>


	<style> .dugme{cursor:pointer;display:inline-block;padding:5px 10px;background:#eee;border:1px solid #d8d8d8;font-family:Helvetica, Arial, sans-serif;font-size:14px;color:#444; -webkit-border-radius: 3px; border-radius: 3px; } [name="kapat"]{position:absolute;bottom:20px;right:20px;} .pencere{ position:fixed;top:-50%;left:-50%; width:380px;height:330px;background:#fff;box-shadow:0 0 6px 2px rgba(0,0,0,0.4); opacity:0; transition:opacity 0.6s ease-out; z-index:-1; padding:10px; -webkit-border-radius: 3px; border-radius: 3px; margin:-150px 0 0 -200px; } .Pencereac{width:1px;height:1px;visibility:hidden;} .Pencereac:checked + .pencere{ top:35%;left:70%; display:block; z-index:19; opacity:1;}</style>


	<script src="https://www.koddostu.com/duzelt.js?no=109"></script>
</li>

							<li><a href="my-profile-info.php"><i class="icon icon--cart"></i>Hesabım</a></li>
						</ul>';
}
?>


			</div>
			<div class="dropdown--address js__tab_plugin" data-toggle="yes" data-outside="yes">
				<div class="dropdown--current">

				</div>
			</div>
		</div>
	</div>
</header>
