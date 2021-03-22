$(document).ready(function(){
    var xmlHttp = new XMLHttpRequest();
    var htmlCode = "";
    var response;
    var send = "/assets/get_info.php";
    xmlHttp.open("GET", send, true);
    xmlHttp.send();
    xmlHttp.onreadystatechange = function(){
        response = xmlHttp.responseText.split('~');
        if(xmlHttp.readyState == 4 && this.status == 200){
            if (document.getElementById("Level").selected == "Experienced"){
                response = response[1];                
            }
            else{
                response = response[0];
            }
            document.getElementById("Website").innerHTML = response;
            // change to better html 
        }
    }
});