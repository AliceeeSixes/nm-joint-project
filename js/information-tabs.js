function openTab(tabIndex){
    var i;
    var x = document.getElementsByClassName('information-content--block');
    for (i=0; i<x.length; i++){
        x[i].style.display = "none";
    }
    document.getElementById(tabIndex).style.display = "block";
}
