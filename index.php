<?php include('includes/head.php'); ?>

<?php include('includes/nav.php'); ?>

<!-- Begin Content -->
<div class="content-wrapper">

<!-- Begin Intro -->
	<div id="intro">
		<p>INTRO: Some Language</p>
	</div>
<!-- End Intro -->

<!-- Begin Featured Module -->
<div id="featured">
	<!-- Open Issues -->
	<div>
		<h3>Open Issues</h3>
		<div class="big-number">0000</div>
		<a href="">Learn More <span class="genericon genericon-rightarrow"></span></a>
	</div>

	<!-- Overdue Issues -->
	<div>
		<h3>Overdue Issues</h3>
		<div class="big-number">0000</div>
		<a href="">Learn More <span class="genericon genericon-rightarrow"></span></a>
	</div>

	<!-- Popular Issues -->
	<div>
		<h3>Popular Issues</h3>
		<ol>
			<li>Case Summary? <span>1200 Votes</span></li>
			<li>Case Summary? <span>800 Votes</span></li>
			<li>Case Summary? <span>400 Votes</span></li>
			<li>Case Summary? <span>200 Votes</span></li>
		</ol>
		<a href="">Learn More <span class="genericon genericon-rightarrow"></span></a>
	</div>
</div>
<!-- End Feature Module -->

<!-- Begin View Toggle -->
	<div id="toggle">
		<a id="mapToggle" class="active">Map</a>
		<a id="listToggle">List</a>
	</div>
<!-- End View Toggle -->

<!-- Begin Map -->
	<div id="map" class="active"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d196349.3432420176!2d-104.9327023923828!3d39.740583318570806!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1401578563430" frameborder="0" style="border:0"></iframe></div>
<!-- End Map -->

<!-- Begin List -->
	<div id="list">
		<div class="chart"></div>
	</div>
	<!-- End List -->
</div>


<?php include('includes/footer.php'); ?>