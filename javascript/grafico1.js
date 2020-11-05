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