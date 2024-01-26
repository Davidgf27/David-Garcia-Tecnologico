$(document).ready(function(){
    var p1 =$("#p1").text();
    var p2 =$("#p2").html();
    var p3 =$("#p3").val();

    $("#p1").text(p1 + "El contenido de texto de los elementos seleccionados");  
    $("#p2").text(p2 + "El contenido de los elementos seleccionados (incluido el marcado HTML");  
    $("#p3").text(p3 + "el valor de los campos del formulario");  
    $("#p4").text(p4 + "el valor de los campos del formulario, es decir solo funciona con campos de formulario");  
})