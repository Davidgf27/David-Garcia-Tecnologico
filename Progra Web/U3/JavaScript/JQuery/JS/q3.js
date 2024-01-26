$(document).ready(function(){
    //agregando elementos
    var p1 = "<p>Parrafo agregado con append.</p>";
    var img1 = $("<img src=JQuery/JS/IMG/india.jpg>").text("imagen agregada con append.");
    img1.css("width",100);
    var txt3 = document.createElement("p");
    txt3.innerHTML = "Parrafo creado con DOM con el document.createElement('p')";
    $("#div1").append(p1,img1,txt3)
})