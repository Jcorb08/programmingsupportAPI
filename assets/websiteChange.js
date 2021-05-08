var myParam;

window.onload = function(){
    const urlParams = new URLSearchParams(window.location.search);
    // gets the query statement from url
    myParam = urlParams.get('q');
    console.log(myParam);
    // get content from sql server
    select_change();
};    

// run when select form changes 
// fetchs the php file that interacts with database
function select_change(){
    fetch("/assets/get_info.php?q=" + myParam + "&l=" + document.getElementById("Level").value)
            .then(x => x.text())
            .then(y => {
                console.log(y + "lalall");
                document.getElementById("query").innerHTML = y;
    });
}