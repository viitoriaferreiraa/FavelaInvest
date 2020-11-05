<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sobre nós</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <?php
    require('css/comunidade.css');
    ?>
</head>
<body class="container-md" >

    <main class="container-sm-fluid  mx-0 px-0">
        <section class="menu mx-0 px-0">
            <header class="jumbotron j px-auto py-1 mb-0" >
                <nav class="row justify-content-center">
                    <h2 class="col-sm-11 display-4 h pt-1 mt-1 text-center">Favela Invest</h2>
                    <a class="menu_img r col-sm-1 bg-warning" href="index.php"></a>
                </nav>
                <nav class="row">   
                    <a class="col-sm-1 btn text-white btn-md b" role="button" href="index.php">Voltar</a>
                </nav> 
                
                
            </header>
        </section>

        <section  class="apresentacao container-fluid mx-0 px-0">
            
            <div class="jumbotron-fluid j2 text-center img1">
            <h5>Ao total, são 17 objetivos que compõem os ODS atualmente (Objetivos de Desenvolvimento Sustentável) <strong><br>Para os Estados Membros da ONU</strong></h5>
            <p class="text-center"><strong>Entre eles, promover o crescimento econômico</strong></p>
            </div>

            <div class="container-fluid row txt2 align-items-center">
                <div class="col-sm-12 text-center" ><h5><span class="text-primary">8.3</span> Promover políticas orientadas para o desenvolvimento, <br /> <strong> que apoiem as atividades produtivas </strong>, <br /> geração de emprego decente, <br /> <strong>empreendedorismo, criatividade e inovação, e <br /> incentiva a formalização e o crescimento das micro, pequenas e médias empresas, <br />inclusive por meio do acesso a serviços financeiros</strong></h5></div>
            </div>
        </section>

        <section class="desenvolvimento container-fluid px-0 mx-0">
            <div class="bg-white mx-0 px-0 row justify-content-center ">
            <div class="col-sm-5" id="piechart">
            <?php
            require('javascript/grafico1.js');
            ?>
            </div>
            </div>
            <div class="container-sm-fluid row bg-white mx-0">
            <?php
            require('javascript/graficos.js');
            ?>
            <div class="col-sm-4 bg-white" id="chart"></div>
            <div class="col-sm-8 jumbotron bg-white"><h4>Alta dependência de doações</h4><p>As doações são o principal mecanismo financeiro de sobrevivência para esses negócios, um modelo de recurso muito presente em projetos sociais e iniciativas na periferia. Em comparação ao <a href="https://pipe.social/produtos/mapa2019">2º Mapa de Negócios de Impacto 2019</a>, enquanto 60% dos negócios de impacto que captaram algum recurso financeiro mencionaram as doações, na periferia esse índice vai para 79%.</p></div>
            </div>

        </section>

        <section class="conclusao text-center container-fluid mx-0 px-0">
        <div class="jumbotron-fluid row align-items-center">
            <div class="col-sm-4"><h4>Com isso veio a ideia de uma apliacação multiplataforma de localização de empreendedores e investidores <strong class="text-primary">na periferia</strong>, cruzando informações de perfil</h4><p class="text-primary">Funciona como um "Tinder para o universo do empreendedorismo"</p></div>
            <div class="col-sm-1 text-dark"><img src="img/seta-direita.svg" alt=""></div>
            <div class="col-sm-3"><h1 class="text-primary">Favela Invest</h1><h2>Okay, mas como funciona?</h2></div>
            <div class="col-sm-1 text-dark"><img src="img/seta-direita.svg" alt=""></div>
            <div class="col-sm-3"><h3><strong class="text-primary">Empreendedores e Investidores</strong> criam o seu pitch ou perfil na plataforma</h3></div>
        </div>
        <div class="jumbotron-fluid row align-items-center">
            <div class="col-sm-4"><h3>Investidores e empreendedores recebem uma notificação do app sobre um novo negócio ou investidor que se adequa àquilo que procura.</h3></div>
            <div class="col-sm-1 text-dark"><img src="img/seta-direita.svg" alt=""></div>
            <div class="col-sm-3 "><h3><span class="text-primary">Caso haja uma correspondência</span>, as duas partes podem entrar em contato.</h3></div>
            <div class="col-sm-1 text-dark"><img src="img/seta-direita.svg" alt=""></div>
            <div class="col-sm-3"><h3>Podendo <span class="text-primary">fechar parceria</span> ou não</h3></div>
        </div>

        </section>
    </main>
    <footer class="container-fluid mx-0 px-0 mt-5">
        <p class="bg-secondary text-center text-white">Favela Invest &copy</p>
    </footer>
</body>
</html>