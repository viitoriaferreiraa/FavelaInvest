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
          