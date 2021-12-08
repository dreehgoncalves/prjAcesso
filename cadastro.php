<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

    <!-- JavaScript  -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <!-- Bootbox -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
    </script>
    <title>Projeto Acesso</title>
</head>

<body>
    <div class="container">

        <div class="text-align-center my-3 titulo">
            <h1>CADASTRO</h1>
        </div>

        <form action="" method="post">

            <label for="nome">Nome:</label><br />
            <input type="text" name="nome" id="nome" class="form-control">><br />

            <label for="usuario">Usuário:</label><br />
            <input type="text" name="usuario" id="usuario" class="form-control">><br />

            <label for="senha">Senha:</label><br />
            <input type="password" name="senha" id="senha" class="form-control"><br />

            <label for="verificar">Verificar senha:</label><br />
            <input type="password" name="verificar" id="verificar" class="form-control"><br />

            <button type="button" id="btnCadastrar" class="form-control">Salvar</button>
        </form>
    </div>

    <script>
        $("#btnCadastrar").click(function() {
            $.post(
                "bd/salvar.php", {
                    nome: $("#nome").val(),
                    usuario: $("#usuario").val(),
                    senha: $("#senha").val(),
                    verificar: $("#verificar").val(),

                },
                function(data) {
                    if (data.resp == false) {
                        bootbox.alert(`Ocorreu um erro:"${data.msg}"`);
                    } else {
                        bootbox.alert({
                            message: "Cadastro realizado",
                            callback: function () { location.reload(true); }
                        });
                    }
                },

                "JSON")
        });
    </script>
</body>

</html>