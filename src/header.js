window.onscroll = function () {

    if (document.documentElement.scrollTop > 100) {
        document.getElementById("navbar").style.background="#63868c";
        document.getElementById("navbar-right").style.paddingTop = "20px";      
        document.getElementById("logo").style.display = "flex";
        document.getElementById("navbar-right").style.color = "#63868c";
        document.getElementById("navbar-right").style.display = flex;
        document.getElementById("navbar-right").style.alignItems = alignItems;
        
        
        
    }
    else {
        document.getElementById("navbar").style.background = "transparent";  
        document.getElementById("logo").style.display = "flex";
        document.getElementById("logo").style.alignItems = "center";
        document.getElementById("navbar-right").style.alignItems = "center";
    }


}