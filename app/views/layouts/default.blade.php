<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="nivo-lightbox-notouch"><!--<![endif]--><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"><style type="text/css">.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px}</style><link href="vcard_data/css_002.css" rel="stylesheet" type="text/css"><style type="text/css">@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style type="text/css">.gm-style{font-family:Roboto,Arial,sans-serif;font-size:11px;font-weight:400;text-decoration:none}</style>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="keywords" content="HTML5 Template">
	<meta name="description" content="Multipress - Responsive Multipurpose HTML5 Template">
	<meta name="author" content="">

	<title> {{ $title }}</title>

	<!-- Mobile Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Favicons -->
        
	<link rel="shortcut icon" href="http://premiumlayers.com/demos/vcard/img/favicon.ico">
	<link rel="apple-touch-icon" href="http://premiumlayers.com/demos/vcard/img/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="http://premiumlayers.com/demos/vcard/img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="http://premiumlayers.com/demos/vcard/img/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="144x144" href="http://premiumlayers.com/demos/vcard/img/apple-touch-icon-144x144.png">

	<!-- Google Webfonts -->
	<link href="vcard_data/css_003.css" rel="stylesheet" type="text/css">
	<link href="vcard_data/css.css" rel="stylesheet" type="text/css">

	<!--[if lt IE 9]>
	<script src="/js/libs/respond.min.js"></script>
	<![endif]-->

	<!-- Bootstrap Core CSS -->
	<link href="vcard_data/bootstrap.css" rel="stylesheet">

	<!-- Theme Styles CSS-->
	<link href="vcard_data/font-awesome.css" rel="stylesheet">
        <link href="vcard_data/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="vcard_data/style.css">
	<link rel="stylesheet" href="vcard_data/flexslider.css">
	<link rel="stylesheet" href="vcard_data/nivo-lightbox.css">
	<link rel="stylesheet" href="vcard_data/default.css">
	<link rel="stylesheet" href="vcard_data/animate.css">
        
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">


	<!--[if lt IE 9]>
	<script src="/js/libs/html5.js"></script>
	<![endif]-->

	<!-- Style Switch -->
	<link rel="alternate stylesheet" type="text/css" href="vcard_data/yellow-black.css" title="yellow" media="screen">
   	<link rel="alternate stylesheet" type="text/css" href="vcard_data/violet-black.css" title="black" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="vcard_data/orange-black.css" title="orange" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="vcard_data/blue-black.css" title="blue" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="vcard_data/red-black.css" title="red" media="screen">
	<link rel="stylesheet" type="text/css" href="vcard_data/green-black.css" title="green" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="vcard_data/pink-black.css" title="pink" media="screen">
	<link rel="alternate stylesheet" type="text/css" href="vcard_data/pale-green-black.css" title="pale-green" media="screen">
        
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script style="" src="vcard_data/commonutilstats.js" charset="UTF-8" type="text/javascript"></script><script src="vcard_data/mapmarker.js" charset="UTF-8" type="text/javascript"></script><script src="vcard_data/onion.js" charset="UTF-8" type="text/javascript"></script><script src="vcard_data/controls.js" charset="UTF-8" type="text/javascript"></script>
    
<style>
            .mavBut{
                background:#1ABC9C;width:120px;height:43px;color:#fff;float:right;
            }
            .mavBut:hover{
                background: #000;
            }
</style></head>
<body style="background: none repeat scroll 0% 0% rgb(217, 219, 221);">

<!-- LOADING MASK -->
<div style="display: none;" id="mask">   
    <div style="display: none;" class="loader">
        <img src="vcard_data/loading.gif" alt="loading">
    </div>
</div>
        @yield('content')
       
<!-- JavaScript -->
<script src="vcard_data/jquery_003.js"></script>
<script src="vcard_data/bootstrap.js"></script>
<script src="vcard_data/jquery.js"></script>
<script src="vcard_data/jquery_005.js"></script>
<script src="vcard_data/jquery_002.js"></script>
<script src="vcard_data/nivo-lightbox.js"></script>
<script src="vcard_data/jquery_004.js"></script>
<script src="vcard_data/jquery_006.js"></script>
<script src="vcard_data/main_002.js"></script>
<script src="vcard_data/contact.js"></script>
<script src="vcard_data/animations.js"></script>

<script src="vcard_data/js"></script><script src="vcard_data/main.js" type="text/javascript"></script>
<script src="vcard_data/gmaps.js"></script>

<script src="vcard_data/styleswitch.js"></script>
<script src="vcard_data/style_switch_custom.js"></script>
@if($errors->has())
        <script>
            //alert("here");
            $(window).bind('load',function(){
            //alert('Hi1');
                $('#1').parent('section').removeClass('no-height').removeClass('flex-active-slide').addClass('no-display').css({'z-index':1,'opacity':0});
        //alert('Hi2');        
        $('#5').parent('section').addClass('no-height').addClass('flex-active-slide').removeClass('no-display').css({'z-index':2,'opacity':1});
                $('#mavli1').removeClass('flex-active');
                $('#mavli3').addClass('flex-active');
                //alert('hi');
            });
        </script>
@endif
@if(Session::has('message'))
        <script>
            $(window).bind('load',function(){
            //alert('Hi');
                $('#1').parent('section').removeClass('no-height').removeClass('flex-active-slide').addClass('no-display').css({'z-index':1,'opacity':0});
                $('#5').parent('section').addClass('no-height').addClass('flex-active-slide').removeClass('no-display').css({'z-index':2,'opacity':1});
                $('#mavli1').removeClass('flex-active');
                $('#mavli3').addClass('flex-active');
            });
        </script>
@endif
    </body>
</html>
