$("document").ready(function(){

    
    $("#btnEnviar").click(function(){

        var parametros = {"cuenta":$("#cuenta").val(),"nombre":$("#nombre").val(),"apellido":$("#apellido").val(),"codigo":$("#cod-clase").val(),"descripcion":$("#descripcion").val()};
        console.log(parametros);
        

        $.ajax({
            url: "recibe.php",
            data: parametros,
            success: function(resp){
                console.log(resp);
            }

        });
    
        
    
    
    });

    
        


    
    

    
});
