<?php $id = 'home'; ?>

<?php include('includes/head.php'); ?>

<?php include('includes/nav.php'); ?>

<!-- Begin Content -->
<div class="content-wrapper">

<!-- Begin Intro -->
	<div id="intro">
		<!--<h2>Citizen Satisfaction</h2>-->
		<p class="byline">Discover thousands of 311 service requests logged across the city of Denver and rate the issues that matter most to you.</p>
		<p>HappyGov is a citizen evangelist platform brought to life at Hack 4 Colorado. HappyGov has continued to develop into a fully-functional and customizable service request ecosystem.</p>
		<a id="signup-toggle" class="button">Sign up for Notifications near you!</a>
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
	<!--<div id="ninjaWrap">-->
	<div id="main" class="active hide">
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
	<!--</div>-->
<!-- End Map -->

<!-- Begin List -->
	<div id="list">
		<div class="chart">LISTS!!!!! CHARTS!!!! EYEBALL CANDIES!!!!</div>
	</div>
	<!-- End List -->
</div>

<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://happygov.us8.list-manage1.com/subscribe/post?u=50863486bf91fb938939df3fd&amp;id=ec5da06bb0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<h4>Stay Updated</h4>
<p>Sign Up and receive updates for new or overdue service requests in your area.</p>
<span id="form-close" class="genericon genericon-close-alt"></span>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-MMERGE2">Zip Code </label>
	<input type="text" value="" name="MMERGE2" class="" id="mce-MMERGE2">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_50863486bf91fb938939df3fd_ec5da06bb0" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>
<!--End mc_embed_signup-->

<?php include('includes/footer.php'); ?>