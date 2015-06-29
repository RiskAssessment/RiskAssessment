$(document).ready(function (){
    
    $.ajax({
         type: 'POST',
         url: 'Relatorio.php',
         dataType: "Json",
        
        success:function(msg){
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['CRO',     1],
          ['oi',      1],
          ['yoki',  1]
        
        ]);

        var options = {
          title: 'Risco das empresa',
          is3D: true,
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
        chart.draw(data, options);
      }


      
        }
    

    });


});
