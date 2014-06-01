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
		<div class="big-number">0000</div>
		<a href="">Learn More <span class="genericon genericon-rightarrow"></span></a>
	</div>

	<!-- Overdue Issues -->
	<div>
		<h3>Overdue Requests</h3>
		<div class="big-number">0000</div>
		<a href="">Learn More <span class="genericon genericon-rightarrow"></span></a>
	</div>

	<!-- Popular Issues -->
	<div>
		<h3>Popular Requests</h3>
		<ol>
			<li>Case Summary 1 <span class="genericon genericon-digg">1200 Votes</span></li>
			<li>Case Summary 2 <span class="genericon genericon-digg">800 Votes</span></li>
			<li>Case Summary 3 <span class="genericon genericon-digg">400 Votes</span></li>
			<li>Case Summary 4 <span class="genericon genericon-digg">200 Votes</span></li>
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
		 <!--<div id="title">Denver 311</div>-->
			<div id="map">
				<div id="LocateButton"></div>
			</div>
		</div>
		<div id="configArea">

			<div id="tog" class="btn">TOGGLE HEATMAP</div>
			<div id="tog2" class="btn">TOGGLE CASES</div>
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
		<div class="chart">LISTS!!!!! CHARTS!!!! EYEBALL CANDIES!!!!</div>
	</div>
	<!-- End List -->
</div>


<?php include('includes/footer.php'); ?>