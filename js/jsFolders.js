

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
