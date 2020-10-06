window.onscroll = function () {

    if (document.documentElement.scrollTop > 80) {
        document.getElementById("navbar").style.background="#63868c";
        document.getElementById("navbar").style.padding = "20px 10px";
        document.getElementById("logo").style.color = "#63868c";
        document.getElementById("navbar-right").style.color = "#63868c";
        document.getElementById("logo").style.justifyContent = "#center";
        
        
    }
    else {
        document.getElementById("navbar").style.background = "transparent";
        document.getElementById("navbar").style.padding = "20px 10px";
        document.getElementById("logo").style.color = "transparent";
        document.getElementById("navbar-right").style.color = "transparent";
    }


}