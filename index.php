<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Tempo</title>
</head>

<body>
    <header class="header">
        <a href="/"><span class=>Php</span>Caseiro</a>
    </header>
    <section class="resouce">

        <div class="content">
            <header class="resource_header">
                <h2>Marcador de Tempo</h2>
            </header>
        </div>

    </section>
    <section class="time">
        <form class="form">
            <div class="hours">
                <div class="form-group" id="campo1">

                    <label>Inicio</label>
                    <input type="time" name="entrada[]" class="hour_start">

                    <label>Fim</label>
                    <input type="time" name="saida[]" class="hour_start">

                    <input type="submit" id="salvar" name="salvar" value="Calcular">

                    <div class="botoes">
                        <button class="botao efeito6" type="button" id='add-campo'>
                            +
                        </button>
                    </div>
                    
                </div>
            </div>
            <div class="resposta"></div>
        </form>
    </section>

    <script src="/js/script.js"></script>
</body>

</html>