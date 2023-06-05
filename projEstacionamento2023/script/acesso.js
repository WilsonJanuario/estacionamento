$(function(){
    $("button#btnEntrar").on("click", function(e){
        e.preventDefault();

        var campoEmail = $("form#formularioLogin #email").val();
        var campoSenha = $("form#formularioLogin #senha").val();
//trim tira os espaços antantes de digitas
        if(campoEmail.trim() == "" || campoSenha.trim() == ""){
            $("div#mensagem").html("Preencha todos os campos.");
        }else{
            $.ajax({
                //action é a url...como se estivesse na index
                url: "controller/login.php",
                type: "POST",
                data: {
                    email: campoEmail,
                    senha: campoSenha
                },

                success: function(retorno){
                    retorno = JSON.parse(retorno);

                    if(retorno["erro"]){
                        $("div#mensagem").html(retorno["mensagem"]);
                    }else{
                        window.location = "controller/dashboard.php";
                       
                    }
                },

                error: function(){
                    $("div#mensagem").html("Ocorreu um erro durante a solicitação");
                }
            });
        }
    });
});