window.onload = function(){
    const urlParams = new URLSearchParams(window.location.search);
    const myParam = urlParams.get('q');
    console.log(myParam);
    
    fetch("/assets/get_info.php?q=" + myParam)
            .then(x => x.text())
            .then(y => {
                console.log(y + "lalall");
                var response = y.split('~');
                if (document.getElementById("Level").selected == "Experienced"){
                    response = response[1];                
                }
                else{
                    response = response[0];
                }
                // gets rid of css???
                document.getElementById("query").innerHTML = response;
    });
};    