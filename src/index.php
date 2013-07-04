<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/main.css?v=0.0.1">
    <script src="js/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body>
<!--[if lt IE 7]>
<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
    your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to
    improve your experience.</p>
<![endif]-->

<!-- Add your site or application content here -->
 
 <a class="githubForkMeBagde" href="https://github.com/rivendale2010/diaspora-reshare-visualization/tree/local"><img width="132px"   src="https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png" alt="Fork me on GitHub"></a>
 <div id="topNav">
        <div class="container">
            <div class="row">
                <div class="span5">&#9654; Diaspora ReShare Graph <a title="Clear the form." href="http://rsv.diapod.net"><strong>rsv.diapod.net</strong></a>
                    <p>A D3.js powered grafter to follow reshares.<br>
                       <strong>Bookmarklet</strong>: <a title="Drop this bookmarklet on your bookmark bar and click it when in the single post view." href="javascript:window.location.href = 'http://rsv.diapod.net/?startUrl='+encodeURIComponent(window.location.href);void 0;">Diaspora ReShare Graph</a></p>Also see 
						<a target="_blank" href="/endpoint.php?startUrl=<?php echo !empty($_GET['startUrl']) ? $_GET['startUrl'] : $_SERVER['QUERY_STRING'] ?>" title="Shows a trace of your last request."> Diagnostics</a> and <a title="Checkout the readme on github." href=https://github.com/rivendale2010/diaspora-reshare-visualization/tree/local#diaspora-reshare-visualization->ReadMe
						</a><p></div>
                <div class="span5">
		
				<form style="margin-bottom: 0px;" class="form-horizontal" id="searchForm"  >
                    <label for="startUrl" class="">Paste or drop a post URL. Share the link!</label>
<input  onclick="this.select()" type="text" placeholder="" class="span4" id="startUrl" name="startUrl" value="<?php if ($_SERVER['QUERY_STRING'] <> 'startUrl=') { echo trim( !empty($_GET['startUrl']) ? $_GET['startUrl'] : $_SERVER['QUERY_STRING']); }; ?>"/>
					<!-- <script>var textbox = document.getElementById('startUrl'); alert(textbox.value);</script>  -->    

		<button type="submit" class="btn" OnClick="javascript:window.location.href = 'http://rsv.diapod.net/?startUrl='+window.searchForm.startUrl.value; window.searchForm.startUrl.value=''">Start</button>
		<br><script> document.write( '<a title="Copy and paste this link to share your graph." href=http://rsv.diapod.net/?' + window.searchForm.startUrl.value + '>http://rsv.diapod.net/?' + window.searchForm.startUrl.value + '</a>' );</script>      
        </form>
				<div id="loader"><img src="img/loader.gif"/></div></div>
            </div>
        </div>
 </div>

<div id="mainBox">

</div>

<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/d3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js?v=0.0.1"></script>

<?php
// echo ($_SERVER['QUERY_STRING']);
 if (!empty($_SERVER['QUERY_STRING']) & ($_SERVER['QUERY_STRING'] <> "startUrl=" ) & ($_SERVER['QUERY_STRING'] <> "startUrl=startUrl=" ) ) {
?>

    <script>
        $(function() { 
            $('#searchForm').submit();
        });
    </script>

<?php
 }
?>

</body>
</html>
