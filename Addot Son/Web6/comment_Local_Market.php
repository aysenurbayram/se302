		<div id="reviews">
							<div id="comments" class="comments">
								<ol class="comment-list">
									<li class="comment">
										<div class="comment-body">
											<div class="comment-meta">
												<div class="comment-author vcard">
												</div>
												<!-- .comment-author -->
												<div class="comment-metadata">
												</div>
												<!-- .comment-metadata -->
											</div>
											<!-- .comment-meta -->
											<div class="comment-content">
												<div class="text--content">
<?php
							include_once("services/manage.php");
							$blog_post2 = getComment_LocalMarket();
							if (count($blog_post2) != 0) {
								foreach ($blog_post2 as $blogp) { 
									echo '
									<b class="fn"><a href="#" rel="external nofollow" class="url">'.$blogp["commentor"].'</a></b>
																			<p>'.$blogp["comment"].'</p>

			';
			}
		}
		else {
			include ("404-content-local-market-yorum-yok.php"); 
			}
		?>
													
													
												</div>
											</div>
									</li><!--- .comment-->
								</ol><!--- .comment-list-->
								<div id="respond" class="comment-respond frm-comment">
									<h4 id="reply-title" class="comment-reply-title text-left small"><span>Yorum Yaz</span></h4>
									<form action="#" method="post" id="commentform" class="comment-form frm-contact">
										<div class="row">
											<div class="col-sm-6 col-mid-6 col-xs-12">
												<div class="controls">
												

													
												</div>
												<div class="controls">
														<?php
															$mail = $_SESSION['mail'];
														?>			
														<?php
															include "services/db_baglan.php";
															$sorgu = mysql_query("SELECT firstname, lastname FROM  `Member` WHERE mail='$mail'")
														?>			
														<?php
															if($sorgu){
																while($duyuru = mysql_fetch_array($sorgu)){
																$_SESSION['firtname'] = $duyuru['firstname'];
																$_SESSION['lastname'] = $duyuru['lastname'];
																echo'<input type="text" name="commentor" id="cmt-name-inp" class="inp--text" placeholder="Ad Soyad" value ="'.$_SESSION['firtname'].' '.$_SESSION['lastname'].'">';
																}
															}
														?>
												</div>
											</div>

											<div class="col-xs-12">
												<div class="controls">
													<textarea name="comment" id="cmt-comment-inp" class="inp--text inp--textarea" placeholder="Yorum"></textarea>
												</div>
											</div>

																							<?
																			include_once("services/manage.php");
							$blog_post = getlAllLocalMarketostsDetails();
							if (count($blog_post) != 0) {
								foreach ($blog_post as $blog) { 
									echo '
												<input type="text" name="idLocalMarket" value="'. $blog["idLocalMarket"] . '" id="cmt-name-inp" class="inp--text" placeholder="" style="border: none;background-color:white; color:transparent" readonly>
												';
												}
		}
		else {
			echo'<h4>Blog Yok</h4>'; 
			}
												?>											<div class="col-xs-12">
												<div class="controls text-left">
													<input type="submit" name= "commentlocalmarket" class="button--common button--border button--white button--hover-main" value="Yorum Yaz">
												</div>
											</div>
										</div>
									</form>
									
<?php
if(isset($_POST['commentlocalmarket']))
{ 
			include "db_baglan.php";	
			
			$commentor = $_POST['commentor'];	
			$comment = $_POST['comment'];	
			$idLocalMarket = $_POST['idLocalMarket'];	

			if((empty($commentor)) or (empty($comment))  ){
						echo'<div id = "kayitbasarilicart">';
				echo '<script type="text/javascript">alert("Yerel Market hakkında yorum işleminiz başarısız!");</script>';
		header("Location:local-market.php");
						echo'</div>';
	}else{
		$sorgu = mysql_query("insert into Comment_localmarket(commentor, comment,idLocalMarket) VALUES ('$commentor','$comment','$idLocalMarket')");

			if($sorgu){
								echo'<div id = "kayitbasarilicart">';
					header("Location:index.php");
					include('basarili.php');
					echo'</div>';
					echo "<meta http-equiv='refresh' content='0'>";
			}
			else{
				echo '<script type="text/javascript">alert("Yerel Market hakkında yorum işleminiz başarısız! Aynı yorum birden fazla yapılamaz.");</script>';
			}
	}
	
}

?>
							
								</div><!--- .comment-respond-->
							</div><!--- .comments-->