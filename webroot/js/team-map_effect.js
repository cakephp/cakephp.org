(function () {
    google.charts.load('current', {'packages':['geochart']});
    google.charts.setOnLoadCallback(drawRegionsMap);
    function drawRegionsMap(teamMember) {
        var country = $('#' + teamMember + '-country').val();
        var data = google.visualization.arrayToDataTable([
            ['Country'],
            [country]
        ]);
        var options = {
            defaultColor: '#D33C44'
        };
        var chart = new google.visualization.GeoChart(document.getElementById(teamMember + '-map'));
        chart.draw(data, options);
    }
    $("a").click(function() {
        var teamMember = $(this).attr("data-target").split('#');
        drawRegionsMap(teamMember[1]);
    });
})();