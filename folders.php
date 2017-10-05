<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
        <title>Folders</title>
	

      <!-- Stylesheets -->
    <link rel="stylesheet" type="text/css" href="/css/animate.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
    
    <script src="http://code.jquery.com/jquery-1.7.1.js"></script>
     <script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
</head>
<body>
    
    
<style>
    /* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
    height: 85px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    /*border: 1px solid #ccc;*/
   
}


    
    .buttonstab {
        background-color: #D5D5D5;
        width: 100%;
        
        height: 72px;
        
    } 
    
    .buttons {
        float: right;
        padding: 14px 16px;
        margin: 10px 6px;
        color: white;
        
        border: none;
        outline: none;
        
    }
    
    #download-btn {
        background-color: #11497B;
    }
    
    #unselectall-btn {
        background-color: #4C95CA;
    }
    #selectall-btn {
        background-color: #0068B4;
    }
    #addtofav-btn {
        background-color: #A1C510;
        color: #11497C;
    }
    
    #search-btn {
        background-color: #33B1E8;
    }
    
    #searchdropdown {
        float: right;
        padding: 13px;
        margin: 12px;
    }
    
    .marketingmat {
        
        min-height: 70px;
        background-color: #C0C2C3;
        color: #11497B;
    }
   
    
    
    
    .files {
                width: 400px;
                height: 360px;
                border-style: solid;
                overflow:hidden;
                float: left;
                margin: 10px;
                display: block;
            }
            
            .files img {
                height: 300px;
            }
            
            .files:hover {
                border-color: #33B1E8;
                border-width: 4px;
            }
//-------------------------------------     
            
            .filesSELECTED {
                border-color: #33B1E8 !important;
                border-width: 5px !important;
            }
    
            .filesUNSELECTED {
                border-width: 2px;
                border-color: #C0C2C3;
            }
            
            .files span {
                position: fixed;
                
            }
    
    #selected-btn
    {
        background-color: #33B1E8;
        color: white;
    }
         
</style>

     <script>
            var selected = 0;

        $( function() {
   
    $('.files').click( function() {
        var number = $(this).find('.num');
        
        if (number.text() == 0)
        {
             number.text( parseInt(1));
             document.getElementById("selected-btn").innerHTML = ++selected + "<br>Selected"; 
             document.getElementById("download-btn").innerHTML = '<img src="icons/downloadd.png" alt="download icon" height="15" width="auto">'+"DOWNLOAD (" + selected + ")";
            
              $(this).removeClass('filesUNSELECTED');
              $(this).addClass('filesSELECTED');
        }
        
        else 
        {
            number.text( parseInt(0));
            document.getElementById("selected-btn").innerHTML = --selected + "<br>Selected";
            document.getElementById("download-btn").innerHTML = '<img src="icons/downloadd.png" alt="download icon" height="15" width="auto">'+"DOWNLOAD (" + selected + ")";
            $(this).removeClass('filesSELECTED');
            $(this).addClass('filesUNSELECTED');
            //number.text( parseInt(number.text()) + 1 );
        }
    });
    
});
       /*  
        $('#selectall-btn').click( function() {
            $(".selectall-btn").css({"background-color": "yellow", "font-size": "200%"});
        }
         */
        </script>
        
    
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
            global $filesImg, $dir_Img, $dir_Banners, $filesBanners, $dir_Videos  ;
        ?>
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

    <div id="images" class="tabcontent">
      
        
      
    </div>

    <div id="videos" class="tabcontent">
      
      
    </div>
    
    <div id="banners" class="tabcontent">
      
      
    </div>
    
    <div id="selected" class="tabcontent">
    
          <script>
              
        </script>
    </div>
    
    
</section>
    
    
    
    
<script>
    function openTab(evt, tabName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        
        /*for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }*/
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        
        
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();
    
    
    
    function hasClass(element, cls) {
                    return (' ' + element.className + ' ').indexOf(' ' + cls + ' ') > -1;
                }
                  
              function showSelected(){
                  var el = document.getElementById('selected-btn');
    
                  if (hasClass(el, 'active')) {
                      $('.filesUNSELECTED').hide();
                      $('.filesSELECTED').show();
                  }
              }
              
              function showAll () {
                  var el = document.getElementById('defaultOpen');
    
                  if (hasClass(el, 'active')) {
                      $('.filesUNSELECTED').show();
                      $('.filesSELECTED').show();
                  }
              }
    
            function showImg() {
                  var el = document.getElementById('img-btn');
    
                  if (hasClass(el, 'active')) {
                      $('.files').hide();
                      $('.imgCard').show();
                  }
            };
            function showBanners() {
                  var el = document.getElementById('banners-btn');
    
                  if (hasClass(el, 'active')) {
                      $('.files').hide();
                      $('.bannerCard').show();
                  }
            };
    
            function selectAll () {
                  $('.files').removeClass('filesUNSELECTED');
                  $('.files').addClass('filesSELECTED');
                
                var number = $('.files').find('.num');
                number.text( parseInt(1));
                selected = 3;
                document.getElementById("selected-btn").innerHTML = selected + "<br>Selected"; 
                document.getElementById("download-btn").innerHTML = '<img src="icons/downloadd.png" alt="download icon" height="15" width="auto">'+"DOWNLOAD (" + selected + ")";
                    
            }
    
            function unselectAll () {
                  $('.files').removeClass('filesSELECTED');
                  $('.files').addClass('filesUNSELECTED');
                  
                selected = 0;
                 var number = $('.files').find('.num');
                 number.text( parseInt(0));
                    document.getElementById("selected-btn").innerHTML = selected + "<br>Selected";
                    document.getElementById("download-btn").innerHTML = '<img src="icons/downloadd.png" alt="download icon" height="15" width="auto">'+"DOWNLOAD (" + selected + ")";
            }

</script>
     

    
</body>
</html>