var myParam;

window.onload = function(){
    const urlParams = new URLSearchParams(window.location.search);
    myParam = urlParams.get('q');
    console.log(myParam);
    // get content from sql server
    select_change();
};    

// run when select form changes 
function select_change(){
    fetch("/assets/get_info.php?q=" + myParam + "&l=" + document.getElementById("Level").value)
            .then(x => x.text())
            .then(y => {
                console.log(y + "lalall");
                document.getElementById("query").innerHTML = y;
    });
}