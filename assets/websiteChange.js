$(document).ready(function(){
    var xmlHttp = new XMLHttpRequest();
    var htmlCode = "";
    var response;
    var send = "assets/get_info.php";
    xmlHttp.open("GET", send, true);
    xmlHttp.send(null);
    xmlHttp.onreadystatechange = function(){
        if(xmlHttp.readyState == 4 && this.status == 200){
            if (document.getElementById("Level").selected == "Experienced"){
                
            }
            else{
                
            }
            document.getElementById("Website").innerHTML = xmlHttp.responseText;
        }
    }
});