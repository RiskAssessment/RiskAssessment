// Set a callback to run when the Google Visualization API is loaded.
			google.setOnLoadCallback(drawChart);

			function drawChart() {
				var json = $.ajax({
					url: 'Relatorio.php', // make this url point to the data file
					dataType: 'json',
					async: false
				}).responseText;
				
				// Create our data table out of JSON data loaded from server.
				var data = new google.visualization.DataTable(json);
				var options = {
					title: 'Quantidade de Pessoas com risco médio por empresa',
					is3D: 'true',
					width: 800,
					height: 600
				};
				// Instantiate and draw our chart, passing in some options.
				//do not forget to check ur div ID
				var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
				chart.draw(data, options);

				
			}