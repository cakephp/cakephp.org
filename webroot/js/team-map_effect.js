
google.charts.load('current', {'packages':['geochart']});
google.charts.setOnLoadCallback(drawRegionsMap);

function drawRegionsMap() {

    var country = document.getElementsByClassName('country');
    console.log(country);

    var data = google.visualization.arrayToDataTable([
        ['Country'],
        [country]
    ]);

    var options = {
        defaultColor: '#D33C44'
    };

    var chart = new google.visualization.GeoChart(document.getElementById(country));

    chart.draw(data, options);
}
