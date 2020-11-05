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
                                width:'23%',
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
                                width:'23%',
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
                                width:'23%',
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
                                width:'23%',
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

            <div class="container-sm-fluid bg-white mx-0 row justify-content-center ">
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