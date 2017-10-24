<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <title>Folders</title>
  <!-- Stylesheets -->
	<link rel="stylesheet" type="text/css" href="css/styleFolders.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body>
	<section id="marketingmaterial">
    <div class="marketingmat">
        <div style="float: left; padding: 23px;">MARKETING MATERIAL</div>
        <button class="buttons" id="search-btn">SEARCH</button>
        <select id="searchdropdown">
          <option value="volvo">ALPHA1</option>
          <option value="saab">ALPHA2</option>
        </select>
    </div>
    <div class="buttonstab">
        <button class="buttons" id="download-btn"    onclick="download();"><img src="icons/downloadd.png" alt="download icon" height="15" width="auto"> DOWNLOAD</button>
        <button class="buttons" id="unselectall-btn" onclick="unselectAll();">UNSELECT ALL</button>
        <button class="buttons" id="selectall-btn"   onclick="selectAll();">SELECT ALL</button>
        <button class="buttons" id="addtofav-btn"><img src="icons/fav.png" alt="download icon" height="15" width="auto"> ADD TO FAVORITES</button>
    </div>
    <div class="tab">
      <button class="tablinks" onclick="openTab(event, 'all'); showAll();" id="defaultOpen"> <img src="icons/folder.png" alt="folder icon" height="30" width="auto"> <br>All</button>
      <button class="tablinks" onclick="openTab(event, 'images'); showImg();" id="img-btn"><img src="icons/img.png" alt="image icon" height="30" width="auto"><br>Images</button>
      <button class="tablinks" onclick="openTab(event, 'videos'); showVideos();"><img src="icons/video.png" alt="video icon" height="30" width="auto"><br>Videos</button>
      <button class="tablinks" onclick="openTab(event, 'banners'); showBanners();" id="banners-btn"><img src="icons/banner.png" alt="banner icon" height="30" width="auto"><br>Banners</button>
      <button class="tablinks" onclick="openTab(event, 'selected'); showSelected();" id="selected-btn" >0<br>Selected</button>
    </div>
    <?php
        //$dir    = 'C:/xampp/htdocs/Grundfos/products/ALPHA1/Images/Print';
        $dir_Img      = './products/ALPHA1/Images/Web';
        $dir_Banners  = './products/ALPHA1/Webbanners';
        $dir_Videos   = './products/ALPHA1/Videos';

        //$files1 = scandir($dir_Img);
        //$files2 = scandir($dir_Img, 1);
        //$files = array_diff(scandir($dir_Img), array('.', '..'));
        $filesImg = array_values(array_diff(scandir($dir_Img), array('.', '..')));
        $filesBanners = array_values(array_diff(scandir($dir_Banners), array('.', '..')));

        // print_r($filesImg);
    function PrintAll () {
            global $filesImg, $dir_Img, $dir_Banners, $filesBanners, $dir_Videos ;
        ?>
				<!-- Can be made into a loop -->
        <section class="files filesUNSELECTED imgCard" >
            <span class="num">0</span>
            <img src="<?php echo $dir_Img."/".$filesImg[1]; ?>" alt="">
            <p> <?php echo $filesImg[1]; ?></p>
        </section>

        <section class="files filesUNSELECTED imgCard">
            <span class="num">0</span>
            <img src="<?php echo $dir_Img."/".$filesImg[3]; ?>" alt="">
            <p> <?php echo $filesImg[3]; ?></p>
        </section>

        <section class="files filesUNSELECTED bannerCard">
            <span class="num">0</span>
            <img src="<?php echo $dir_Banners."/".$filesBanners[0]; ?>" alt="">
            <p> <?php echo $filesBanners[0]; ?></p>
        </section>
    <?php
    }
    ?>

    <div id="all" class="tabcontent">
    <?php PrintAll (); ?>
    </div>
    <div id="images" class="tabcontent"></div>
    <div id="videos" class="tabcontent"></div>
    <div id="banners" class="tabcontent"></div>
    <div id="selected" class="tabcontent">  </div>
	</section>
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="js/jsFolders.js"></script>
</body>
</html>
