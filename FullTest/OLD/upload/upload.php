<html>
    <head>
        <title>Upload Image using form</title>
        <link rel="stylesheet" href="style.css" />
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="script.js"></script>
    </head>
    <body> 
        <div id="mainform">
            <div id="innerdiv">
                <!-- Required div starts here -->
                <div id="formdiv">
                    <h3>Resim Yukleme Formu</h3><br/>
                    <form id="form" action="" method="post"enctype="multipart/form-data">

                        <div id="upload">
                            <input type="file" name="file" id="file"/>
                        </div>
                        <br/>
                        <input type="submit" id="submit" name="submit" value="Upload"/>
                    </form>
                    <div id="detail"><b>Not: </b><br/><ul><li>Resim yuklemek icin Resim Yukle butonuna basim, yukleyeceginiz resmi secin</li>
                            <li>Yukleyebileceginiz dosya turleri- <b>images(jpeg,jpg,png).</b></li><li>Yuklemek istediginiz Resim en fazla 100 Kb olmalidir.</li></ul></div>
                
                </div>	
                <div id="clear"></div>
                <div id="preview"><img id="previewimg" src="" /><img id="deleteimg" src="delete.png" />
                     <span class="pre">Resim Goruntusu</span></div>
                <div id="message">
                    <?php include 'uploadphp.php';?>                    
                </div>
                </div>
            <!-- Right side div -->
            </div>
        </div>
    </body>
</html>