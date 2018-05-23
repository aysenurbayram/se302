   <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
          <li class="">
            <a class="" href="dashboard.php">
                          <i class="icon_house_alt"></i>
                          <span>Anasayfa</span>
                      </a>
          </li>

          <li class="">
            <a class="" href="neyin_zamani_admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Neyin Zamanı</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="blog_admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Blog</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="yerel_market_admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Yerel Marketler</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="urun_oner_admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Ürün Öner</span>
                      </a>
          </li>

          <li class="">
            <a class="" href="blog_yorum_admin.php">
                          <i class="icon_house_alt"></i>
                          <span>Blog Yorum</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="yerel_market_yorum.php">
                          <i class="icon_house_alt"></i>
                          <span>Yerel Market  Yorum</span>
                      </a>
          </li>
          <li class="">
            <a class="" href="kullanicilar.php">
                          <i class="icon_house_alt"></i>
                          <span>Kullanıcılar</span>
                      </a>
          </li>          
		  
		  <li class="">
            <a class="" href="adminler.php">
                          <i class="icon_house_alt"></i>
                          <span>Adminler</span>
                      </a>
          </li>
		  
		  <li class="">
            <a class="" href="contact.php">
                          <i class="icon_house_alt"></i>
                          <span>İletişim</span>
                      </a>
          </li>		
		  
		  <li class="">
            <a class="" href="abone.php">
                          <i class="icon_house_alt"></i>
                          <span>Abone</span>
                      </a>
          </li>
<br/>
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
    echo "<a href=services/logout.php>Guvenli cikis</a></center>";
}
?>
          </li>
        </ul>
        <!-- sidebar menu end-->
      </div>
    </aside>