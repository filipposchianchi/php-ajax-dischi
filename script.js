
function printElement(data) {
    var source = document.getElementById("entry-template").innerHTML;
    var template = Handlebars.compile(source);

    for(var i = 0; i<data.length; i++){
        var context = { 
            src: data[i].poster, album: data[i].title, artista: data[i].author, anno: data[i].year 
        }     
        var html = template(context);
        $(".container").append(html);
    }
}

function getData() {

    $.ajax({    
        url: "getAllData.php",
        method: "GET",
    success: 
        function(data) {
            printElement(data);
    },
    error: 
        function(error) {      
            console.log("error", error);
    }
  });
}

function init() {
    getData();
}

$(document).ready(init)