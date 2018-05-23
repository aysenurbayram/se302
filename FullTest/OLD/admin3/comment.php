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
							include("database.php");
								
						$id=$_GET["bid"];
					$sql=mysql_query("select * from Comment where Blog_idBlog=$id ");

						
							  
 while ($blog=mysql_fetch_array($sql)) {

									echo '
									<b class="fn"><a href="#" rel="external nofollow" class="url">'.$blog["commentor"].'</a></b> &nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									&nbsp;
									<p>'.$blog["comment"].'</p> ';?>
									<div align="right">
									 <form action="deletecomment.php" method="post">	
			<input type="hidden" name="commentid" value="<?php echo $blog['idComment'] ?>">		   
<input type="submit" name="deletecomment" value="Sil" class="btn btn-info btn-block" style="width:50px" >
</form>         
    </a>
																			
 </div>
		<?php
 }		
 ?>
											

 
		
													
		
												</div>
											</div>
									</li><!--- .comment-->
								</ol><!--- .comment-list-->
								

								</div><!--- .comment-respond-->
							</div><!--- .comments-->