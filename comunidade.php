<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sobre nós</title>
    <link rel="stylesheet" href="./css/global.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/comunidade.css">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        .b {
            background-color: #3d56e0;
        }

        .h {
            color:#3d56e0;
        }

        .r {
            background-image: url('img/logo2.png');
            height:15vh; 
            background-repeat: no-repeat; 
            background-size: cover; 
            background-position: center; 
        }

        .j {
            background-color: #f7caa3;
        }

        .apresentacao h5 {
            position: relative;
            top: 2%;
        }

        .apresentacao p {
            position: relative;
            top: 81%;
        }

        body {
            background-color: #f7caa3;
        }

        .img1 {
            background-image: url('img/2030.png'); 
            height:85vh; 
            background-repeat: no-repeat; 
            background-size: cover; 
            background-position: center; 
            display:flex;
            flex-direction: column;
        }

        .txt2 {
            height: 80vh;
        }

        .txt2 h5 {
            line-height: 3;
        }

        .img2 {
            background-image: url('img/fundo.png'); 
            height:82vh; 
            background-repeat: no-repeat; 
            background-size: cover; 
            background-position: center; 
        }

        .conclusao h3, h4, p {
            line-height: 1.9;
        }

    </style>
</head>
<body>

    <main >
        <section class="menu">
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

        <section  class="apresentacao">
            
            <div class="jumbotron-fluid j2 text-center img1">
            <h5>Ao total, são 17 objetivos que compõem os ODS atualmente (Objetivos de Desenvolvimento Sustentável) <strong><br>Para os Estados Membros da ONU</strong></h5>
            <p class="text-center"><strong>Entre eles, promover o crescimento econômico</strong></p>
            </div>

            <div class="container-fluid row txt2 align-items-center">
                <div class="col-sm-12 text-center" ><h5><span class="text-primary">8.3</span> Promover políticas orientadas para o desenvolvimento, <br /> <strong> que apoiem as atividades produtivas </strong>, <br /> geração de emprego decente, <br /> <strong>empreendedorismo, criatividade e inovação, e <br /> incentiva a formalização e o crescimento das micro, pequenas e médias empresas, <br />inclusive por meio do acesso a serviços financeiros</strong></h5></div>
            </div>
        </section>

        <section class="desenvolvimento">
            <div class="container-fluid bg-white mx-0 row justify-content-center ">
            <div class="col-sm-5" id="piechart">
                <script type="text/javascript">
                // Load google charts
                google.charts.load('current', {'packages':['corechart']});
                google.charts.setOnLoadCallback(drawChart);

                // Draw the chart and set the chart values
                function drawChart() {
                var data = google.visualization.arrayToDataTable([
                ['Empreendedores', 'Empreendedoras Femininas'],
                ['Dos negócios são compostos por apenas uma pessoa', 39],
                ['Dos negócios mapeados tem um quadro societário mais feminino', 61]]);

                // Optional; add a title and set the width and height of the chart
                var options = {'title':'Empreendedores atuais', 'width':550, 'height':400};

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
                }

               </script>
            </div>
            </div>
            <div class="container-fluid row bg-white mx-0">
            <script type="text/javascript">

                // Load Charts and the corechart and barchart packages.
                google.charts.load('current', {'packages':['corechart']});

                // Draw the pie chart and bar chart when Charts is loaded.
                google.charts.setOnLoadCallback(drawChart1);
                google.charts.setOnLoadCallback(drawChart2);
                google.charts.setOnLoadCallback(drawChart3);
                google.charts.setOnLoadCallback(drawChart4);

                function drawChart1() {

                let data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['Apenas ou só homens', 26],
                    ['Misto', 12],
                    ['Apenas ou só mulheres', 61],
                    ['Não Sabe/NR', 1],
                ]);


                let barchart_options = {title:'Gênero dos empreendedores (as)',
                                width:'25%',
                                height:350,
                                legend: 'none'};
                let barchart = new google.visualization.PieChart(document.getElementById('pie1'));
                barchart.draw(data, barchart_options);

                }

                function drawChart2() {

                let data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['Negra', 41],
                    ['Branca', 34],
                    ['Parda/Mulata', 16],
                    ['Outra', 9],
                ]);


                let barchart_options = {title:'Identificação principal fundador (a)',
                                width:'25%',
                                height:350,
                                legend: 'none'};
                let barchart = new google.visualization.PieChart(document.getElementById('pie2'));
                barchart.draw(data, barchart_options);

                }

                function drawChart3() {

                let data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['18 a 29', 28],
                    ['30 a 39', 36],
                    ['40 a 49', 20],
                    ['60+', 8],
                    ['60+', 5],
                    ['NR', 3]
                ]);


                let barchart_options = {title:'Idade média principal fundador (a)',
                                width:'25%',
                                height:350,
                                legend: 'none'};
                let barchart = new google.visualization.PieChart(document.getElementById('pie3'));
                barchart.draw(data, barchart_options);

                }

                function drawChart4() {

                let data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', 'Slices');
                data.addRows([
                    ['Até o médio incompleto', 3],
                    ['Medio completo/superior incompleto', 31],
                    ['Superior completo', 34],
                    ['Pós Graduação/Mestrado/Doutorado', 31],
                ]);


                let barchart_options = {title:'Escolaridade média principal fundador (a)',
                                width:'25%',
                                height:350,
                                legend: 'none'};
                let barchart = new google.visualization.PieChart(document.getElementById('pie4'));
                barchart.draw(data, barchart_options);

                }
                

                </script>

                <div class="col-sm-3 bg-white" id="pie1"></div>
                <div class="col-sm-3 bg-white" id="pie2"></div>
                <div class="col-sm-3 bg-white" id="pie3"></div>
                <div class="col-sm-3 bg-white" id="pie4"></div>
            </div>

            <div class="container-fluid bg-white mx-0 row justify-content-center ">
            <script type="text/javascript">

                // Load Charts and the corechart and barchart packages.
                google.charts.load('current', {'packages':['corechart']});

                // Draw the pie chart and bar chart when Charts is loaded.
                google.charts.setOnLoadCallback(drawChart);


                function drawChart() {

                let data = new google.visualization.DataTable();
                data.addColumn('string', 'Topping');
                data.addColumn('number', '%');
                data.addRows([
                    ['Sim', 61],
                    ['Não', 25],
                    ['Não respondeu', 14],
               ]);


                let barchart_options = {title:'Estão captando no momento?',
                                width:'25%',
                                height:350,
                                legend: 'none'};
                let barchart = new google.visualization.BarChart(document.getElementById('chart'));
                barchart.draw(data, barchart_options);

                }
                
            </script>

                <div class="col-sm-4 bg-white" id="chart"></div>
                <div class="col-sm-8 jumbotron bg-white"><h4>Alta dependência de doações</h4><p>As doações são o principal mecanismo financeiro de sobrevivência para esses negócios, um modelo de recurso muito presente em projetos sociais e iniciativas na periferia. Em comparação ao <a href="https://pipe.social/produtos/mapa2019">2º Mapa de Negócios de Impacto 2019</a>, enquanto 60% dos negócios de impacto que captaram algum recurso financeiro mencionaram as doações, na periferia esse índice vai para 79%.</p></div>
            </div>

        </section>

        <section class="conclusao text-center container-fluid">
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
    <footer>
        <p class="bg-secondary text-center text-white">Favela Invest &copy</p>
    </footer>
</body>
</html>