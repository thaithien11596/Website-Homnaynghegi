<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	 <!-- Insert to your webpage before the </head> -->
    <script src="audioplayerengine/jquery.js"></script>
    <script src="audioplayerengine/amazingaudioplayer.js"></script>
    <link rel="stylesheet" type="text/css" href="audioplayerengine/initaudioplayer-1.css">
    <script src="audioplayerengine/initaudioplayer-1.js"></script>
    <!-- End of head section HTML codes -->
</head>
<body>
	<?php 
		include('header1.php');
	 ?>
	<div style="margin:12px auto;">
    
    <!-- Insert to your webpage where you want to display the audio player -->
    <div id="amazingaudioplayer-1" style="display:block;position:relative;width:100%;max-width:420px;height:auto;margin:0px auto 0px;">
        <ul class="amazingaudioplayer-audios" style="display:none;">
            <li data-artist="Andiez" data-title="1 Phút" data-album="1 Phút (Single)" data-info="" data-image="" data-duration="376">
                <div class="amazingaudioplayer-source" data-src="audios/1phut.mp3" data-type="audio/mpeg" />
            </li>
        </ul>
        <div class="amazingaudioplayer-engine"><a href="http://amazingaudioplayer.com" title="mp3 player for website">mp3 player for website</a></div>
    </div>
    <!-- End of body section HTML codes -->

</div>
</body>
</html>