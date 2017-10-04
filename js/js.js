// JavaScript Document
function openTab(evt, action) {
    // Declare all variables
    var i, tabcontent, tablinks;
    var alpha1 = {img:"img/alpha1.jpg", description:"Alpha1 is the best pump", availability:"in stock!"};


    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(action).style.display = "block";
    evt.currentTarget.className += " active";

    document.getElementById("content").innerHTML = "";
    document.getElementById("content").innerHTML = alpha1["img", "description", "availability"];


}
//Add to favourite button
function addToFavourite (){
}