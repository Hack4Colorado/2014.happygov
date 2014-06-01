<!DOCTYPE html>
<html>
<head>
	<title>HappyGov</title>
	<meta charset="utf-8">
	<meta name="description" content="" />
	<meta name="author" content="">
	<meta name="keywords" content="" />


<!-- Optimized mobile viewport -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes"/>
  <meta name="apple-mobile-web-app-capable" content="yes" />

<!--	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/logo.40x40png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/logo.80x80.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/logo.128x128.png">	-->


	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,800,700,600,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="http://js.arcgis.com/3.9/js/dojo/dijit/themes/claro/claro.css">
	<link rel="stylesheet" href="http://js.arcgis.com/3.9/js/esri/css/esri.css">
	<link href="/fonts/genericons/genericons.css" rel="stylesheet" type="text/css">
	<link href='css/style.css' rel='stylesheet' type='text/css'>
	        <style>
            #main {
                position:relative;
                width:100%;
                padding:0;
                margin:auto;
            }
            #heatmapArea {
                position:relative;
                float:left;
                width:100%;
                height:800px;
                border:1px dashed black;
            }
            #configArea {
                position:absolute;
                right:10px;
								width:20%;
								max-width:180px;
                padding:15px;
                padding-top:0;
                padding-right:0;
            }
            .btn {
                margin-top:10px;
                padding:10px 10px 10px;
								cursor:pointer;
                color:white;
                background-color:#287297;
								font-size:14px;
								text-align:center;
            }
            #map {
                width:100%;
								height:800px;
            }
						#LocateButton {
							position: absolute;
							top: 95px;
							left: 20px;
							z-index: 50;
						}
						#typeBox{
						display:none;
						}
        </style>
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
   <script>
      document.createElement('header');
      document.createElement('section');
      document.createElement('footer');
   </script>
<![endif]-->
	<script>
		var dojoConfig = {
			parseOnLoad:true,
			packages: [{
				"name": "myModules",
				"location": location.pathname.replace(/\/[^/]+$/, "") + "/myModules"
			}]
		};
	</script>
	<script type="text/javascript" src="http://js.arcgis.com/3.9/"></script>
</head>

<body>

