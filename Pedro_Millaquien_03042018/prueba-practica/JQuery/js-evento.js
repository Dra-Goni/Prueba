// Aqui debes escribir tu codigo, para agregar los eventos y funciones necesarias para desarrollar los Ejercicios.
// Importante debes comentar tu codigo
$( document ).ready(function() {
    $("#btnColor").click(NuevoColor);
    $("#btnSumar").click(Sumar);
    $("#btnRestar").click(Quitar);
    $("#caja1").click(Copiar);
    $("#caja2").click(Copiar2);
    $("#caja3").click(Copiar3);

    function Copiar(){
        var copiar = $("#caja1").html();
        var copiar2 = $("#caja4").html();
        if(copiar != copiar2 ){
            $("#caja4").html(copiar);
        }else{
            alert("Ya se ha copiado el texto de la CAJA");
        }
    };

    function Copiar2(){
        var copiar = $("#caja2").html();
        var copiar2 = $("#caja4").html();
        if(copiar != copiar2 ){
            $("#caja4").html(copiar);
        }else{
            alert("Ya se ha copiado el texto de la CAJA");
        }
    };

    function Copiar3(){
        var copiar = $("#caja3").html();
        var copiar2 = $("#caja4").html();
        if(copiar != copiar2 ){
            $("#caja4").html(copiar);
        }else{
            alert("Ya se ha copiado el texto de la CAJA");
        }
    };

    function NuevoColor(){
        $("#btnColor").css('background', '#b6f9ae');
    };

    function Quitar(){
        var valor=$("#TextNumber").val();
        if(valor>0){
         valor--;
         $("#TextNumber").val(valor);
        }
    };

    function Sumar(){
        var valor=$("#TextNumber").val();
        if(valor=>0){
            if(valor<15){
                valor++;
            $("#TextNumber").val(valor);
            }
        }
    };
});


   





  

  

   

