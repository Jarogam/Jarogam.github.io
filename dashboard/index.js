// var listbook = [];
// var addbook = document.getElementById("addbook");


window.onload = function(){


    var listbook = [];
    if(localStorage.getItem("add")!=undefined){
        add = JSON.parse(localStorage.getItem("add"));
        getlistbook();
    }

    document.getElementById("btnaddbook").onclick = function(){
        var addbook = document.getElementById("addbook").value;
        
        var temp = {};
        temp.add = addbook;
        temp.check = false;

        var i = listbook.length;
        listbook[i] = temp;
        console.log(listbook)
        getlistbook();
        localStorage.setItem("add", JSON.stringify(listbook));
        
        // {
        //     todo: addbook;
        //     check: false
        // }
    }
    function getlistbook(){
        var getlistbook = "";
        for (var key in listbook){
            // document.getElementsByClassName("listitem")+= "li" + listbook[key].add + '<br>';
            getlistbook += "<li>" + listbook[key].add;
            if(listbook[key].check == true){
                getlistbook += "<input>"
            }
            else{
                getlistbook += '<input type="checkbox" checked>';
            }
        }
        document.getElementById('listitem').innerHTML = getlistbook;
    }
    // var getlistbook  = document.getElementById("listitem")
}