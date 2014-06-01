<?php include('includes/head.php'); ?>

<?php include('includes/nav.php'); ?>

<!-- Begin Content -->
<div class="content-wrapper">

<!-- Begin Intro -->
	<div id="intro">
		<!--<h2>Citizen Satisfaction</h2>-->
		<p class="byline">Discover thousands of 311 service requests logged across the city of Denver and rate the issues that matter most to you.</p>
		<p>HappyGov is a citizen evangelist platform brought to life at Hack 4 Colorado. HappyGov has continued to develop into a fully-functional and customizable service request ecosystem.</p>
		<a class="button" href="">Sign up for Notifications near you!</a>
	</div>
<!-- End Intro -->

<!-- Begin Featured Module -->
<div id="featured">
	<!-- Open Issues -->
	<div>
		<h3>Open Requests</h3>
		<div class="big-number high">7152</div>
		<a href="">Learn More <span class="genericon genericon-rightarrow"></span></a>
	</div>

	<!-- Overdue Issues -->
	<div>
		<h3>Overdue Requests <span>(<10 days)</span></h3>
		<div class="big-number medium">1951</div>
		<a href="">Learn More <span class="genericon genericon-rightarrow"></span></a>
	</div>

	<!-- Popular Issues -->
	<div>
		<h3>Popular Requests</h3>
		<ol>
			<li>Grafitti on Private Property <span class="genericon genericon-digg">1038 Votes</span></li>
			<li>Pothole Needs Repair <span class="genericon genericon-digg">874 Votes</span></li>
			<li>Missed Trash <span class="genericon genericon-digg">561 Votes</span></li>
			<li>Loose Dog Without Owner <span class="genericon genericon-digg">390 Votes</span></li>
		</ol>
		<a href="">Learn More <span class="genericon genericon-rightarrow"></span></a>
	</div>
</div>
<!-- End Feature Module -->

<!-- Begin View Toggle -->
	<div id="toggle">
		<a id="mapToggle" class="active">Map</a>
		<a id="listToggle">Data</a>
	</div>
<!-- End View Toggle -->

<!-- Begin Map -->
	<div id="main" class="active">
		<div id="heatmapArea">
			<div id="heatLayer"></div>
			<div id="map">
				<div id="LocateButton"></div>
			</div>
		</div>
		<div id="configArea">
			<h4><span class="genericon genericon-location"></span> Denver, CO</h4>
			<div id="tog" class="btn active">Toggle Heatmap <span class="genericon genericon-checkmark"></span></div>
			<div id="tog2" class="btn">Toggle Requests <span class="genericon genericon-checkmark"></span></div>
			<!--<div id="typeBox" style="background:#fff;padding:5px;margin-top:20px;border:1px solid #333;">
			<h3>Toggle By Type</h3>
			<input type="checkbox" id="complaintbox">Complaints</input><br/>
			<input type="checkbox" id="servicebox">Service Requests</input><br/>
			<input type="checkbox" id="complimentbox">Compliments</input><br/>
			</div>-->
		</div>
	</div>
<!-- End Map -->

<!-- Begin List -->
	<div id="list">
		<!-- <div class="chart">LISTS!!!!! CHARTS!!!! EYEBALL CANDIES!!!!</div> -->
		<section class="line-chart">
			<br>
			<br>
			<h3>Types of Cases Over Time</h3>
			<br>
			<br>
			<div id="chart"></div>
		</section>

		<section class="pie-chart">
			<br>
			<br>
			<h3>Open Cases by Neighborhood</h3>
			<br>
			<br>
			<div id="chart-2"></div>
		</section>

		<section class="pie-chart">
			<div id="chart-2"></div>
		</section>

		<script>
			$(function() {
			    console.log( "ready!" );

					var chart = c3.generate({
						bindto: '#chart',
						type: 'line',
				    data: {
			        url: 'datasets/data-type-month.csv'
				    }
					});

      var chart = c3.generate({
				size: {
					height: '800'
				},
				bindto: '#chart-2',
		    data: {
	        // iris data from R
	        columns: [
            ['Athmar Park',130],
						['Auraria',17],
						['Baker',118],
						['Barnum',77],
						['Barnum West',101],
						['Bear Valley',49],
						['Belcaro',47],
						['Berkeley',117],
						['Capitol Hill',104],
						['CBD',51],
						['Chaffee Park',42],
						['Cheesman Park',59],
						['Cherry Creek',82],
						['City Park',24],
						['City Park West',39],
						['Civic Center',33],
						['Clayton',51],
						['Cole',67],
						['College View / South Platte',62],
						['Congress Park',104],
						['Cory - Merrill',61],
						['Country Club',22],
						['DIA',4],
						['East Col,fax',89],
						['Elyria Swansea',94],
						['Five Points',181],
						['Fort Logan',45],
						['Gateway - Green Valley Ranch',118],
						['Globeville',58],
						['Goldsmith',46],
						['Hale',92],
						['Hampden',76],
						['Hampden South',57],
						['Harvey Park',129],
						['Harvey Park South',71],
						['Highland',92],
						['Hilltop',83],
						['Indian Creek',10],
						['Jefferson Park',33],
						['Kennedy',12],
						['Lincoln Park',70],
						['Lowry Field',41],
						['Mar Lee',140],
						['Marston',34],
						['Montbello',216],
						['Montclair',45],
						['North Capitol Hill',37],
						['North Park Hill',78],
						['Northeast Park Hill',56],
						['Overland',45],
						['Platt Park',70],
						['Regis',33],
						['Rosedale',34],
						['Ruby Hill',99],
						['Skyland',40],
						['Sloan Lake',116],
						['South Park Hill',92],
						['Southmoor Park',9],
						['Speer',120],
						['Stapleton',137],
						['Sun Valley',17],
						['Sunnyside',88],
						['Union Station',70],
						['University',95],
						['University Hills',66],
						['University Park',66],
						['Valverde',63],
						['Villa Park',106],
						['Virginia Village',62],
						['Washington Park',76],
						['Washington Park West',87],
						['Washington Virginia Vale',94],
						['Wellshire',7],
						['West Colfax',93],
						['West Highland',89],
						['Westwood',195],
						['Whittier',42],
						['Windsor',18]
	        ],
		      type : 'pie',
		    },
		    pie: {
		        onclick: function (d, i) { console.log(d, i); },
		        onmouseover: function (d, i) { console.log(d, i); },
		        onmouseout: function (d, i) { console.log(d, i); }
		    }
			});
//


			});
		</script>

	</div>
	<!-- End List -->
</div>


<?php include('includes/footer.php'); ?>
