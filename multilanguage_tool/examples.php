<?php ob_start(); ?>
<?php
	switch($_GET['lang']){
		case "it":
			$language = "italian";
		break;
		case "en":
			$language = "english";
		break;
	}

	include_once("config.php");
	include_once("languages/".$language."/header.php");
	include_once("languages/".$language."/examples.php");
	include_once("languages/".$language."/footer.php");
?>
<!DOCTYPE html>
<html lang='<?php echo $_GET['lang']; ?>'>
<html>
<head>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' rel='stylesheet'>
	<link href="http://darwinne.github.io/FidoCadJ/db_style.css" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name=viewport content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo META_DESCRIPTION; ?>">
	<link rel="icon" href="http://darwinne.github.io/FidoCadJ/images/FidoCadJ_favicon.png" />
	<link rel="canonical" href="http://darwinne.github.io/FidoCadJ/index.html" />
	<title><?php echo PAGE_TITLE; ?></title>
</head>

	<body>
		<header>
				<a href="index.html"><h1>FidoCadJ</h1></a>
				<h2><?php echo MAIN_SUBTITLE; ?></h2>
				<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a href="https://twitter.com/share?via=davbucci" class="twitter-share-button">Tweet</a>
				<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
				<a href="index.html" class="mainmenu">[<?php echo HOME_BUTTON; ?>]</a>
				&nbsp;
				<a class="mainmenu">[<?php echo DOWNLOAD_BUTTON; ?>]</a>
				&nbsp;
				<a href="scrn.html" class="mainmenu">[<?php echo SCREENSHOTS_BUTTON; ?>]</a>
				&nbsp;
				<a href="libs.html" class="mainmenu">[<?php echo LIBRARIES_BUTTON; ?>]</a>
				&nbsp;
				<a href="faq.html" class="mainmenu">[<?php echo FAQ_BUTTON; ?>]</a>
				&nbsp;
				<b class="mainmenu">[<?php echo EXAMPLES_BUTTON; ?>]</b>
				&nbsp;
				<a href="<?php echo "http://darwinne.github.io/FidoCadJ/".str_replace(".php",".html",basename(__FILE__)); ?>"><img src="http://darwinne.github.io/FidoCadJ/images/flags/english_flag.jpg" alt="<?php echo ENGLISH_FLAG_IMAGE_ALT; ?>"/></a>
				&nbsp;
				<a href="<?php echo "http://darwinne.github.io/FidoCadJ/lang/it/".str_replace(".php",".html",basename(__FILE__)); ?>"> <img src="http://darwinne.github.io/FidoCadJ/images/flags/italian_flag.jpg" alt="<?php echo ITALIAN_FLAG_IMAGE_ALT; ?>"/></a>
		</header>

		<div id="content">
			<h3><?php echo FIRST_LINE; ?></h3>
			<table>
				<tr>
					<td  align="center">
						<a href="examples/differential_amplifier.png"><img src="http://darwinne.github.io/FidoCadJ/examples/differential_amplifier.png" alt="<?php echo IMAGE_ALT_1; ?>" width="60%"></a>
					</td>
					<td>
						<div class="code">
							<pre>
[FIDOCAD]
FJC B 0.5
MC 30 60 0 0 280
FCJ
TY 50 50 4 3 0 0 0 Helvetica Q1
TY 40 65 4 3 0 0 0 Helvetica
MC 100 60 0 1 280
FCJ
TY 75 50 4 3 0 0 0 Helvetica Q2
TY 110 65 4 3 0 0 0 Helvetica
LI 65 70 65 115 0
MC 50 125 0 0 280
FCJ
TY 67 122 4 3 0 0 0 Helvetica Q5
TY 60 130 4 3 0 0 0 Helvetica
MC 95 85 0 0 280
FCJ
TY 114 74 4 3 0 0 0 Helvetica Q3
TY 105 90 4 3 0 0 0 Helvetica
MC 165 85 0 1 280
FCJ
TY 140 75 4 3 0 0 0 Helvetica Q4
TY 175 90 4 3 0 0 0 Helvetica
LI 130 95 130 115 0
MC 145 125 0 1 280
FCJ
TY 122 122 4 3 0 0 0 Helvetica Q6
TY 155 130 4 3 0 0 0 Helvetica
LI 65 135 130 135 0
LI 110 75 110 30 0
LI 20 10 220 10 0
LI 45 35 45 50 0
LI 85 45 85 50 0
LI 150 75 150 30 0
LI 85 45 170 45 0
SA 150 45 0
LI 45 35 190 35 0
SA 110 35 0
LI 100 60 100 75 0
LI 100 75 10 75 0
LI 95 85 10 85 0
LI 165 85 165 100 0
LI 165 100 10 100 0
SA 65 70 0
SA 95 135 0
SA 130 95 0
SA 110 10 0
SA 150 10 0
MC 10 60 2 0 000
MC 10 75 2 0 000
MC 10 85 2 0 000
MC 10 100 2 0 000
MC 110 15 1 0 ihram.res
FCJ
TY 115 20 4 3 0 0 0 Helvetica 1kΩ
TY 120 20 4 3 0 0 0 Helvetica
MC 150 15 1 0 ihram.res
FCJ
TY 155 20 4 3 0 0 0 Helvetica 1kΩ
TY 160 20 4 3 0 0 0 Helvetica
LI 110 10 110 15 0
LI 150 10 150 15 0
MC 50 70 0 0 ihram.res
FCJ
TY 52 63 4 3 0 0 0 Helvetica 20Ω
TY 60 75 4 3 0 0 0 Helvetica
LI 50 70 45 70 0
MC 80 70 0 1 ihram.res
FCJ
TY 69 63 4 3 0 0 0 Helvetica 20Ω
TY 90 75 4 3 0 0 0 Helvetica
LI 85 70 80 70 0
MC 170 45 0 0 280
FCJ
TY 187 42 4 3 0 0 0 Helvetica Q8
TY 180 50 4 3 0 0 0 Helvetica
MC 190 35 0 0 280
FCJ
TY 208 32 4 3 0 0 0 Helvetica Q9
TY 200 40 4 3 0 0 0 Helvetica
LI 185 35 185 10 0
SA 185 10 0
LI 205 25 205 10 0
SA 205 10 0
MC 185 70 1 0 ihram.res
FCJ
TY 188 75 4 3 0 0 0 Helvetica 4.5kΩ
TY 195 75 4 3 0 0 0 Helvetica
MC 205 70 1 0 ihram.res
FCJ
TY 208 75 4 3 0 0 0 Helvetica 4.5kΩ
TY 215 75 4 3 0 0 0 Helvetica
MC 110 155 0 1 280
FCJ
TY 86 152 4 3 0 0 0 Helvetica Q7
TY 120 160 4 3 0 0 0 Helvetica
LI 95 135 95 145 0
LI 110 155 170 155 0
MC 170 165 1 0 220
FCJ
TY 180 165 4 3 0 0 0 Helvetica Green
TY 180 170 4 3 0 0 0 Helvetica LED
LI 170 165 170 150 0
SA 170 155 0
MC 170 135 1 0 ihram.res
FCJ
TY 175 140 4 3 0 0 0 Helvetica 470Ω
TY 180 140 4 3 0 0 0 Helvetica
MC 170 55 1 0 ihram.res
FCJ
TY 158 60 4 3 0 0 0 Helvetica 1kΩ
TY 180 60 4 3 0 0 0 Helvetica
LI 170 55 170 10 0
SA 170 10 0
SA 170 125 0
LI 170 70 170 135 0
LI 170 125 145 125 0
MC 170 180 0 0 045
MC 95 180 0 0 045
MC 95 165 1 0 ihram.res
FCJ
TY 100 170 4 3 0 0 0 Helvetica 120Ω
TY 105 170 4 3 0 0 0 Helvetica
MC 185 85 0 0 045
MC 205 85 0 0 045
LI 205 45 205 70 0
LI 185 55 185 70 0
MC 10 155 2 0 000
LI 15 155 10 155 0
MC 145 95 0 1 ihram.res
FCJ
TY 135 88 4 3 0 0 0 Helvetica 20Ω
TY 155 100 4 3 0 0 0 Helvetica
MC 115 95 0 0 ihram.res
FCJ
TY 115 88 4 3 0 0 0 Helvetica 20Ω
TY 125 100 4 3 0 0 0 Helvetica
LI 110 95 115 95 0
LI 145 95 150 95 0
MC 30 180 0 0 045
MC 30 155 2 0 200
MC 30 165 1 0 ihram.res
FCJ
TY 35 170 4 3 0 0 0 Helvetica 1kΩ
TY 40 170 4 3 0 0 0 Helvetica
MC 30 130 1 0 ihram.res
FCJ
TY 35 135 4 3 0 0 0 Helvetica 4.7kΩ
TY 40 135 4 3 0 0 0 Helvetica
MC 30 105 1 0 ihram.res
FCJ
TY 35 110 4 3 0 0 0 Helvetica 2.2kΩ
TY 40 110 4 3 0 0 0 Helvetica
LI 30 60 10 60 0
LI 30 105 30 10 0
SA 30 10 0
LI 30 120 30 130 0
LI 30 130 30 130 0
LI 30 125 50 125 0
SA 30 125 0
LI 30 145 30 165 0
SA 30 155 0
MC 225 50 0 0 000
LI 205 50 225 50 0
LI 185 65 225 65 0
MC 225 65 0 0 000
SA 185 65 0
SA 205 50 0
						</pre>
					</div>
				</td>
			</tr>

			<tr>
				<td  align="center">
					<a href="examples/nixie_clock.png"><img src="http://darwinne.github.io/FidoCadJ/examples/nixie_clock.png" width="60%" alt="<?php echo IMAGE_ALT_2; ?>"></a>
				</td>
				<td>
					<div class="code">
						<pre>
[FIDOCAD]
FJC C 1.5
FJC A 1.0
FJC B 1.0
MC 540 370 3 0 pcb.to92b
MC 655 540 0 0 pcb.to220v
MC 540 500 3 0 pcb.to92b
MC 175 230 0 0 pcb.to92b
MC 155 465 0 0 pcb.r01
MC 275 475 1 0 pcb.to220v
MC 220 510 1 0 pcb.cpbx603
MC 215 355 1 0 pcb.do41
PL 1195 665 15 665 7 0
MC 540 225 3 0 pcb.to92b
MC 540 295 3 0 pcb.to92b
MC 110 215 1 0 pcb.cc50
MC 540 435 3 0 pcb.to92b
PL 1195 5 1195 665 7 0
MC 155 435 0 0 pcb.r01
PL 15 665 15 5 7 0
MC 145 580 2 0 pcb.ce10
PL 15 5 1195 5 7 0
MC 110 490 0 0 pcb.cc50
MC 800 515 1 0 pcb.do41
PL 990 345 1000 345 4 1
PA 985 325 20 12 4 2 1
PL 920 320 920 130 7 1
PL 1100 225 1100 150 4 1
PA 985 365 20 12 4 2 1
PA 895 465 18 18 4 0 1
PA 925 345 20 12 4 2 1
PA 960 490 18 18 4 0 1
PA 960 530 18 18 4 0 1
PL 930 345 940 345 4 1
PL 585 500 580 500 9 1
PA 925 325 20 12 4 1 1
PL 1060 220 1060 150 4 1
PA 985 385 20 12 4 2 1
PA 925 405 20 12 4 2 1
PA 985 405 20 12 4 2 1
PA 925 425 20 12 4 2 1
PA 985 425 20 12 4 2 1
PA 925 445 20 12 4 2 1
PA 985 445 20 12 4 2 1
PA 865 515 16 16 8 2 1
PL 520 500 540 500 9 1
PL 585 295 580 295 9 1
PA 925 385 20 12 4 2 1
PL 905 425 915 425 9 1
PL 1080 230 1080 150 4 1
PL 890 385 845 345 9 1
PA 460 250 12 12 4 0 1
PL 440 235 460 235 4 1
PL 495 250 515 250 4 1
PL 640 340 630 340 9 1
PL 825 305 830 295 7 1
PA 420 245 14 14 6 0 1
PA 985 345 20 12 4 2 1
PA 925 365 20 12 4 2 1
PL 460 230 460 250 7 1
PL 420 245 420 270 4 1
PL 420 270 495 270 4 1
PL 495 270 495 250 4 1
PA 520 295 12 12 4 0 1
PL 585 235 585 510 4 1
PA 650 580 14 14 6 0 1
PL 620 275 670 275 4 1
PA 460 295 12 12 4 0 1
PA 925 465 20 12 4 2 1
PA 460 225 12 12 4 0 1
PL 885 550 905 555 10 1
PL 1040 220 1040 150 4 1
PA 460 320 12 12 4 0 1
PA 1155 625 18 18 4 0 1
PA 60 625 18 18 4 0 1
PA 895 425 18 18 4 0 1
PA 420 315 14 14 6 0 1
PL 895 425 920 425 4 1
PL 500 320 510 320 7 1
PL 440 305 460 305 4 1
PL 420 315 420 340 4 1
PL 500 320 520 320 4 1
PA 620 275 12 12 4 0 1
PA 865 575 16 16 8 0 1
PA 520 370 12 12 4 0 1
PA 830 220 16 16 6 0 1
PA 905 515 12 12 4 0 1
PA 905 555 12 12 4 0 1
PA 460 370 12 12 4 0 1
PA 520 225 12 12 4 0 1
PA 625 340 12 12 4 0 1
PL 520 435 535 435 9 1
PL 1100 455 1045 510 7 1
PL 495 190 535 155 12 1
PA 565 340 12 12 4 0 1
PL 495 410 495 390 4 1
PL 915 385 890 385 9 1
PL 435 95 380 145 8 1
PL 420 75 360 130 8 1
PL 405 55 340 115 8 1
PA 460 435 12 12 4 0 1
PA 520 460 12 12 4 0 1
PL 845 430 865 445 7 1
PL 850 235 835 250 8 1
PL 870 245 850 265 8 1
PA 460 460 12 12 4 0 1
PL 850 55 880 90 8 1
PL 960 415 970 405 8 1
PA 420 435 14 14 6 0 1
PA 420 455 14 14 6 0 1
PA 435 445 14 14 6 0 1
PL 1025 425 1040 410 7 1
PL 440 445 460 445 4 1
PL 420 455 420 480 4 1
PL 500 460 520 460 4 1
PL 420 270 420 255 12 1
PA 985 465 20 12 4 2 1
PA 520 500 12 12 4 0 1
PL 420 540 420 525 12 1
PL 790 575 865 575 12 1
PL 790 575 765 545 12 1
PA 460 500 12 12 4 0 1
PA 520 525 12 12 4 0 1
PL 440 305 455 305 12 1
PL 440 235 455 235 12 1
PL 440 445 455 445 12 1
PA 460 525 12 12 4 0 1
PL 460 500 460 525 9 1
PL 440 510 460 510 4 1
PL 495 525 515 525 4 1
PL 860 105 860 125 8 1
PA 420 520 14 14 6 0 1
PA 420 500 14 14 6 0 1
PA 435 510 14 14 6 0 1
PL 810 115 450 115 8 1
PA 620 200 12 12 4 0 1
PL 400 295 415 295 8 1
PL 520 295 540 295 9 1
PL 420 175 420 225 8 1
PA 560 200 12 12 4 0 1
PA 670 345 12 20 4 1 1
PA 520 250 12 12 4 0 1
PA 690 345 12 20 4 2 1
PA 690 285 12 20 4 2 1
PA 710 345 12 20 4 2 1
PA 710 285 12 20 4 2 1
PA 730 345 12 20 4 2 1
PA 730 285 12 20 4 2 1
PA 750 345 12 20 4 2 1
PA 750 285 12 20 4 2 1
PA 770 345 12 20 4 2 1
PA 420 225 14 14 6 0 1
PA 435 235 14 14 6 0 1
PA 790 285 12 20 4 2 1
PA 810 345 12 20 4 2 1
PA 810 285 12 20 4 2 1
PA 830 345 12 20 4 2 1
PA 830 285 12 20 4 2 1
PL 945 340 945 150 7 1
PL 945 150 940 135 7 1
PL 960 135 960 355 7 1
PL 620 200 620 240 4 1
PL 400 165 400 295 4 1
PA 560 415 12 12 4 0 1
PA 900 130 14 22 6 2 1
PA 980 130 12 20 4 1 1
PA 960 130 12 20 4 2 1
PA 940 130 12 20 4 2 1
PA 920 130 12 20 4 2 1
PA 420 295 14 14 6 0 1
PA 880 130 12 20 4 2 1
PA 435 305 14 14 6 0 1
PA 840 130 12 20 4 2 1
PA 820 130 12 20 4 2 1
PA 1120 130 12 20 4 2 1
PA 1100 130 12 20 4 2 1
PA 1080 130 12 20 4 2 1
PL 495 525 515 525 9 1
PL 710 580 710 595 9 1
TY 704 501 19 18 0 5 1 * +5
PA 560 275 12 12 4 0 1
PA 625 415 12 12 4 0 1
PL 700 545 730 545 9 1
PL 620 305 605 325 9 1
PL 1080 160 1080 135 4 1
PL 940 600 960 580 12 1
PL 405 55 850 55 8 1
PL 520 225 540 225 7 1
PL 495 260 495 530 4 1
PL 505 460 495 460 4 1
PA 520 435 12 12 4 0 1
PL 420 340 495 340 4 1
PL 420 480 495 480 4 1
PA 900 130 16 16 6 0 1
PA 880 130 16 16 6 0 1
PA 860 130 16 16 6 0 1
PA 860 130 16 16 6 0 1
PA 840 130 16 16 6 0 1
PA 820 130 16 16 6 0 1
PA 800 130 16 16 6 0 1
PA 1060 130 16 16 6 0 1
PA 1040 130 16 16 6 0 1
PA 1020 130 16 16 6 0 1
PA 1020 130 16 16 6 0 1
PA 1000 130 16 16 6 0 1
PA 980 130 16 16 6 0 1
PA 960 130 16 16 6 0 1
PA 940 130 16 16 6 0 1
PA 920 130 16 16 6 0 1
PA 1120 130 16 16 6 0 1
PA 1100 130 16 16 6 0 1
PA 1080 130 16 16 6 0 1
PA 65 440 12 12 4 0 1
PA 710 255 12 20 4 2 1
PA 730 255 12 20 4 2 1
PL 560 390 560 340 9 1
PL 710 275 710 265 4 1
PL 730 275 730 260 4 1
PA 900 155 16 16 6 0 1
PL 900 155 900 135 8 1
PA 750 185 18 18 4 0 1
PA 750 215 18 18 4 0 1
PL 750 350 750 370 4 1
PL 750 370 750 350 4 1
PA 870 220 16 16 6 0 1
PA 850 220 16 16 6 0 1
PL 820 95 840 120 8 1
PA 795 180 12 12 4 0 1
PA 795 210 12 12 4 0 1
PA 75 346 18 18 6 0 1
PL 690 280 690 260 4 1
PA 695 180 12 12 4 0 1
PA 695 210 12 12 4 0 1
PA 130 410 12 20 4 2 1
PA 735 545 12 12 4 0 1
PA 735 565 12 12 4 0 1
PA 150 350 12 20 4 2 1
PL 735 570 735 600 4 1
PA 735 520 16 16 6 0 1
PA 735 480 16 16 6 0 1
PA 735 480 16 16 6 0 1
PL 605 325 605 485 9 1
PL 655 325 640 340 7 1
PA 710 440 12 12 4 0 1
PA 50 525 28 27 4 0 1
PA 270 400 20 20 4 0 1
PA 260 340 12 12 4 2 1
PA 710 380 12 12 4 0 1
PA 585 550 12 12 4 0 1
PA 585 570 12 12 4 0 1
PA 230 225 12 12 4 0 1
PL 740 545 765 545 4 1
PA 270 225 12 12 4 0 1
PA 625 475 12 12 4 0 1
PP 100 525 150 545 280 545 315 595 350 595 315 525 1
PL 970 365 980 365 7 1
PA 520 320 12 12 4 0 1
PA 565 475 12 12 4 0 1
PA 650 470 16 16 8 2 1
PL 1080 140 1080 440 7 1
PA 1150 45 18 18 4 0 1
PA 710 470 16 16 8 0 1
PA 284 290 18 18 6 0 1
PA 220 290 18 18 6 0 1
PL 500 525 515 525 7 1
PL 505 320 510 320 7 1
PL 1000 140 1005 145 7 1
PA 645 500 12 12 4 0 1
PA 645 500 18 18 4 0 1
PA 710 500 18 18 4 0 1
PL 710 475 710 495 4 1
PL 710 480 730 480 4 1
PA 830 220 18 18 4 0 1
TY 770 470 19 18 0 5 1 * B
PL 175 350 195 335 9 1
PL 190 420 190 385 10 1
PL 170 370 160 370 10 1
PL 160 370 150 360 10 1
PL 150 490 155 470 10 1
PL 290 340 310 340 10 1
PL 290 165 310 165 10 1
PA 335 400 18 18 6 0 1
PA 270 400 18 18 6 0 1
PL 710 600 940 600 12 1
PL 960 580 960 530 12 1
PL 735 570 735 595 12 1
PL 905 555 905 595 12 1
PL 555 545 555 570 12 1
PL 605 180 655 180 12 1
PL 655 180 700 180 12 1
PL 700 180 750 180 12 1
PL 750 180 810 180 12 1
PL 810 180 830 220 12 1
PL 585 200 585 525 12 1
PL 585 525 555 545 12 1
PL 960 490 960 415 8 1
PL 970 405 975 405 8 1
PL 495 525 495 190 12 1
PL 535 155 895 155 12 1
PL 375 545 475 545 12 1
PL 425 480 495 480 12 1
PL 420 340 490 340 12 1
PL 420 270 490 270 12 1
PL 215 340 250 340 15 1
PL 420 340 420 325 12 1
PL 420 480 420 465 12 1
PL 220 220 220 180 15 1
PL 250 235 250 205 10 1
PL 280 285 280 230 15 1
PL 765 545 735 545 12 1
PL 555 570 585 570 12 1
PL 560 315 560 275 9 1
PL 560 455 560 415 9 1
PL 560 245 560 200 9 1
PL 440 510 455 510 12 1
TY 500 555 19 18 0 5 1 * +170V
PL 880 90 880 120 8 1
PL 420 75 835 75 8 1
PL 580 225 585 225 9 1
PL 435 95 820 95 8 1
PA 1020 130 12 20 4 2 1
PL 820 125 812 115 8 1
PL 150 335 175 315 10 1
PL 400 160 400 295 8 1
PL 170 410 170 395 10 1
PL 465 135 795 135 8 1
PL 215 445 245 475 15 1
PL 360 130 360 360 8 1
PL 360 360 415 435 8 1
PA 670 285 12 20 4 2 1
PL 340 360 415 500 8 1
PL 620 200 620 240 8 1
PL 620 240 640 260 8 1
PL 640 260 690 260 8 1
PL 690 260 690 275 8 1
PL 620 275 670 275 8 1
PL 850 220 850 235 8 1
PL 835 250 795 250 8 1
PL 795 250 775 265 8 1
PA 770 285 12 20 4 2 1
PA 790 345 12 20 4 2 1
PL 850 265 800 265 8 1
PL 800 265 790 275 8 1
PL 695 210 710 255 8 1
PL 920 140 920 200 4 1
PL 930 345 940 345 7 1
PP 105 630 625 630 670 595 745 595 670 665 140 665 1
PL 320 590 535 590 12 1
PL 730 255 750 215 9 1
PL 250 475 220 510 15 1
PL 980 320 980 135 7 1
PL 400 295 415 295 4 1
PL 1100 455 1100 135 7 1
PP 20 265 60 220 20 220 1
PL 985 465 1055 465 7 1
PL 990 445 1040 445 7 1
PL 1060 425 1060 135 7 1
PL 1040 140 1040 410 7 1
PL 985 385 1010 385 7 1
PA 860 130 12 20 4 2 1
PL 635 540 615 550 9 1
PL 1005 145 1005 345 7 1
PL 1005 345 995 345 7 1
PL 790 345 790 370 7 1
PL 790 370 820 395 7 1
PA 1060 130 12 20 4 2 1
PA 1040 130 12 20 4 2 1
PL 175 230 175 220 10 1
PA 1000 130 12 20 4 2 1
PL 1020 155 1020 135 4 1
PL 1040 160 1040 135 4 1
PL 1060 160 1060 135 4 1
PL 740 520 770 520 16 1
PL 1100 165 1100 135 4 1
PL 735 440 800 490 7 1
PL 730 350 730 365 7 1
PL 730 365 710 380 7 1
PL 770 335 780 320 7 1
PL 510 320 495 320 4 1
PL 855 320 905 365 7 1
PL 905 365 920 365 7 1
PL 645 490 645 470 7 1
PL 650 470 685 440 7 1
PL 685 440 710 440 7 1
PL 620 305 740 305 9 1
PL 740 305 750 295 9 1
PL 625 415 670 370 9 1
PL 670 370 670 355 9 1
PL 625 470 625 455 9 1
PL 625 455 690 395 9 1
PL 690 395 690 355 9 1
PL 750 275 760 255 9 1
PL 760 255 795 210 9 1
PL 710 265 710 275 9 1
PL 730 280 730 265 9 1
PL 1055 465 1080 440 7 1
PL 870 520 905 520 9 1
PL 750 355 750 420 9 1
PL 750 422 825 480 9 1
PA 110 315 18 18 6 0 1
PL 710 500 710 475 9 1
PL 715 480 735 480 16 1
PL 580 370 585 370 9 1
PL 270 395 255 345 15 1
PL 565 340 560 340 9 1
PL 615 550 615 590 9 1
PL 700 545 675 540 9 1
PL 235 250 250 235 10 1
PL 560 520 560 480 9 1
PL 580 435 585 435 9 1
PA 75 320 18 18 6 0 1
PL 500 460 515 460 9 1
PA 220 165 18 18 6 0 1
PL 130 350 130 335 10 1
PL 810 355 845 385 7 1
PL 615 550 585 550 9 1
PL 650 575 655 540 9 1
PL 150 350 150 335 10 1
PL 520 370 535 370 9 1
PA 110 410 12 20 4 1 1
PA 110 350 12 20 4 2 1
PL 245 475 275 475 15 1
PL 455 370 405 370 9 1
PL 380 345 380 145 9 1
PL 465 135 420 175 8 1
PA 170 410 12 20 4 2 1
PA 170 350 12 20 4 2 1
PL 845 345 835 345 9 1
PL 920 145 920 320 9 1
PL 985 425 1025 425 7 1
PA 90 525 16 16 6 0 1
PA 90 525 28 27 4 0 1
PL 655 325 755 325 7 1
PL 770 305 825 305 7 1
PL 770 305 755 325 7 1
PA 287 340 12 12 4 0 1
PL 460 295 460 320 7 1
PL 460 435 460 455 7 1
PA 710 580 14 14 6 2 1
PA 250 205 12 12 4 0 1
PL 50 320 75 320 15 1
PL 1040 445 1060 425 7 1
PL 105 530 310 530 15 1
PL 215 350 215 290 15 1
PP 80 565 215 565 240 610 130 610 1
PL 950 510 1045 510 7 1
PL 120 270 105 255 9 1
PL 770 520 805 550 10 1
PL 555 570 535 590 12 1
PL 615 590 590 610 9 1
PL 335 400 335 495 12 1
PA 55 45 18 18 4 0 1
PL 175 270 120 270 9 1
PL 1020 375 1020 140 7 1
PL 820 445 845 465 7 1
PL 500 250 520 250 7 1
PL 500 320 515 320 9 1
PL 500 250 515 250 9 1
PP 265 135 285 165 310 165 310 135 1
PL 615 500 605 485 9 1
PL 105 255 75 255 9 1
PL 970 365 960 355 7 1
PL 845 385 845 430 7 1
PL 865 445 915 445 7 1
PP 15 5 1195 5 1195 90 925 90 865 30 385 30 310 100 15 100 1
PP 1090 85 1125 130 1125 470 1055 540 960 540 960 525 905 555 905 625 1195 625 1195 85 1
PL 585 200 605 180 12 1
TY 1140 630 19 18 0 5 1 * Bucci - Simonazzi 2008
PP 1030 600 730 600 710 625 1015 625 1
PL 130 450 130 420 10 1
PL 195 335 195 305 9 1
PL 945 480 905 515 8 1
PL 450 115 400 160 8 1
PL 110 380 110 355 10 1
PL 130 335 110 315 10 1
PL 110 315 80 345 10 1
PL 405 370 380 345 9 1
PL 375 545 335 495 12 1
PL 160 250 235 250 10 1
PL 105 440 85 440 10 1
PA 287 340 18 18 4 0 1
PL 835 75 860 105 8 1
PA 270 225 18 18 4 0 1
PA 250 205 18 18 4 0 1
PL 645 500 615 500 9 1
PL 940 345 945 340 7 1
PL 1010 385 1020 375 7 1
TY 305 570 19 18 0 5 1 * +12V
PL 110 420 110 525 15 1
PA 75 410 18 18 6 0 1
PL 130 450 170 450 7 1
PL 800 515 800 490 7 1
PL 215 415 215 445 15 1
PL 235 435 270 455 8 1
PL 340 115 340 360 8 1
PA 85 440 12 12 4 0 1
PL 915 535 950 510 7 1
PL 190 385 170 370 10 1
PL 275 495 275 530 15 1
PL 475 545 495 525 12 1
PL 840 505 840 520 7 1
PL 900 490 855 490 7 1
PL 170 450 180 440 7 1
PA 75 256 18 18 6 0 1
PL 710 440 735 440 7 1
PA 284 165 18 18 6 0 1
PL 820 395 820 445 7 1
PL 590 610 130 610 9 1
PL 50 545 130 610 9 1
PL 50 545 50 525 9 1
PL 310 95 310 530 15 1
PL 825 480 825 550 9 1
PL 195 305 175 270 9 1
PL 805 550 885 550 10 1
PL 925 465 900 490 7 1
PL 130 450 135 465 10 1
PA 174 315 18 18 6 0 1
PL 935 405 945 415 8 1
PL 55 385 155 385 10 1
PA 150 410 12 20 4 2 1
PL 155 385 170 395 10 1
PL 180 440 180 430 10 1
PA 900 130 12 20 4 2 1
PL 50 525 50 320 15 1
PL 855 490 840 505 7 1
PL 190 420 180 430 10 1
PP 160 665 40 564 25 535 25 95 15 100 15 666 1
PL 775 265 770 275 8 1
PL 870 225 870 245 8 1
PP 20 225 180 225 180 170 205 140 310 140 310 95 20 95 1
PL 945 415 945 480 8 1
PL 845 465 890 465 7 1
PA 135 465 12 12 4 0 1
PA 230 225 18 18 4 0 1
PL 855 535 840 520 7 1
PL 780 320 855 320 7 1
PA 260 340 18 18 4 0 1
PL 65 440 50 440 10 1
PL 70 410 55 410 10 1
PP 270 495 285 495 305 470 305 535 270 535 1
PA 130 350 12 20 4 2 1
PL 155 430 150 410 10 1
PL 855 535 915 535 7 1
PA 50 525 16 16 6 0 1
PA 110 465 12 12 4 0 1
PL 960 490 960 530 5 2
PL 895 425 895 465 5 2
RP 559 417 575 413 3
RP 510 527 520 523 3
RP 565 473 575 477 3
RP 660 582 650 578 3
TY 525 205 14 8 0 0 3 * Q1
RP 460 297 470 293 3
RP 510 502 520 498 3
RP 868 565 862 575 3
RP 460 368 470 372 3
RP 510 297 520 293 3
RV 658 343 842 287 3
EV 915 505 895 565 3
RV 575 465 615 485 3
RP 615 473 625 477 3
RP 610 202 620 198 3
RP 510 227 520 223 3
RV 470 510 510 490 3
LI 408 528 408 493 3
RP 670 460 665 480 3
EV 725 175 775 225 3
RV 470 305 510 285 3
RV 470 535 510 515 3
RP 460 527 470 523 3
TY 585 470 14 8 0 0 3 * R4
RP 560 202 570 198 3
TY 585 335 14 8 0 0 3 * R5
TY 730 460 14 8 0 0 3 * +batt
TY 730 500 14 8 0 0 3 * -batt
RP 875 535 855 530 3
TY 695 230 14 8 0 0 3 * XTAL
RV 470 360 510 380 3
TY 480 220 14 8 0 0 3 * R6
RP 510 368 520 372 3
LI 419 531 419 490 3
RP 127 306 130 322 3
BE 658 325 671 324 671 306 658 305 3
RV 700 590 660 570 3
RP 109 313 122 316 3
RP 162 313 175 316 3
RV 470 330 510 310 3
RV 660 460 700 480 3
RV 470 260 510 240 3
LI 408 287 408 322 3
BE 408 287 453 269 453 341 408 322 3
RV 66 308 82 268 3
TY 580 270 14 8 0 0 3 * R2
TY 585 410 14 8 0 0 3 * R3
RP 695 498 705 502 3
TY 815 115 14 8 90 0 3 * A - Ore UNI
RP 73 268 76 255 3
TY 520 350 14 8 0 0 3 * Q5
RV 875 525 855 565 3
TY 525 275 14 8 0 0 3 * Q2
TY 525 415 14 8 0 0 3 * Q3
RP 868 515 862 525 3
TY 480 245 14 8 0 0 3 * R7
RP 73 411 76 398 3
RP 73 358 76 345 3
EV 805 175 785 215 3
RV 570 210 610 190 3
RV 470 235 510 215 3
RP 460 227 470 223 3
EV 705 175 685 215 3
BE 945 315 946 328 964 328 965 315 3
RV 927 315 983 475 3
RP 460 502 470 498 3
EV 55 430 95 450 3
RP 510 252 520 248 3
RV 100 408 180 352 3
RP 66 298 82 295 3
RP 66 291 82 288 3
RP 73 321 76 308 3
BE 408 253 453 271 453 199 408 218 3
RV 720 390 700 430 3
RP 712 380 708 390 3
RP 712 430 708 440 3
LI 419 256 419 215 3
EV 241 372 305 308 3
RP 66 381 82 378 3
EV 595 540 575 580 3
RP 710 582 700 578 3
RP 690 590 695 570 3
EV 240 235 260 215 3
LI 250 235 250 215 3
RV 210 185 290 265 3
RV 232 281 272 297 3
RP 237 281 240 297 3
RP 460 322 470 318 3
TY 390 325 14 8 0 0 3 * Q7
RP 219 288 232 291 3
RP 272 288 285 291 3
RP 650 467 660 473 3
RP 66 303 82 300 3
RV 655 490 695 510 3
TY 795 115 14 8 90 0 3 * A - Ore DEC
LI 419 284 419 325 3
RP 249 156 252 172 3
RP 219 163 232 166 3
RP 272 163 285 166 3
RV 66 398 82 358 3
RP 66 393 82 390 3
RP 66 388 82 385 3
RP 610 277 620 273 3
BE 408 528 460 545 453 474 408 493 3
RV 282 391 322 407 3
RV 575 425 615 405 3
RP 615 417 625 413 3
RP 299 391 302 407 3
RV 575 350 615 330 3
RP 565 342 575 338 3
RP 615 342 625 338 3
RP 510 322 520 318 3
EV 745 535 725 575 3
TY 415 410 14 8 0 0 3 * Q8
RV 470 445 510 425 3
RP 460 437 470 433 3
RP 510 437 520 433 3
RP 645 498 655 502 3
LI 408 253 408 218 3
RV 470 470 510 450 3
RP 460 462 470 458 3
RP 510 462 520 458 3
RV 695 265 745 245 3
LI 408 427 408 462 3
BE 408 427 453 409 453 481 408 462 3
TY 228 335 15 9 90 1 3 * +
EV 100 455 140 475 3
RV 122 306 162 322 3
LI 419 424 419 465 3
RP 132 306 135 322 3
RP 139 306 142 322 3
TY 735 310 14 8 0 0 3 * U3
TY 945 380 14 8 0 0 3 * U2
TY 785 190 14 8 0 0 3 * C4
TY 730 195 14 8 0 0 3 * C6
TY 665 220 14 8 0 0 3 * C5
TY 865 205 14 8 90 0 3 * P1
TY 845 205 14 8 90 0 3 * P2
TY 825 205 14 8 90 0 3 * GND
TY 580 195 14 8 0 0 3 * R1
TY 245 555 14 8 0 0 3 * L1
TY 265 355 14 8 0 0 3 * C10
TY 226 385 14 8 0 0 3 * D4
TY 116 365 14 8 0 0 3 * U4
TY 61 360 14 8 0 0 3 * R16
TY 126 290 14 8 0 0 3 * R17
TY 86 280 14 8 0 0 3 * R18
TY 126 230 14 8 0 0 3 * Q10
TY 525 480 14 8 0 0 3 * T4
TY 80 470 14 8 0 0 3 * C8
TY 65 450 14 8 0 0 3 * C9
TY 480 290 14 8 0 0 3 * R8
TY 480 315 14 8 0 0 3 * R9
TY 480 365 14 8 0 0 3 * R15
TY 475 430 14 8 0 0 3 * R10
TY 475 455 14 8 0 0 3 * R11
TY 475 495 14 8 0 0 3 * R12
TY 475 520 14 8 0 0 3 * R13
TY 430 205 14 8 0 0 3 * Q6
TY 110 555 14 8 0 0 3 * C7
RP 460 252 470 248 3
TY 390 500 14 8 0 0 3 * Q9
TY 275 375 14 8 0 0 3 * R14
BE 100 390 113 389 113 371 100 370 3
TY 226 300 14 8 0 0 3 * R19
TY 261 195 14 8 0 0 3 * R20
TY 211 140 14 8 0 0 3 * R21
TY 835 115 14 8 90 0 3 * LP
TY 855 115 14 8 90 0 3 * A - Min DEC
TY 875 115 14 8 90 0 3 * A - Min UNI
TY 915 115 14 8 90 0 3 * K - 8
TY 935 115 14 8 90 0 3 * K - 9
TY 955 115 14 8 90 0 3 * K - 5
TY 975 115 14 8 90 0 3 * K - 0
TY 995 115 14 8 90 0 3 * K - 1
TY 1015 115 14 8 90 0 3 * K - 4
TY 1035 115 14 8 90 0 3 * K - 6
TY 1055 115 14 8 90 0 3 * K - 7
TY 1075 115 14 8 90 0 3 * K - 3
TY 1095 115 14 8 90 0 3 * K - 2
TY 895 115 14 8 90 0 3 * +170 V
RP 242 281 245 297 3
RP 249 281 252 297 3
TY 920 540 14 8 0 0 3 * C3
TY 857 540 14 8 0 0 3 * D3
TY 792 540 14 8 0 0 3 * D2
RP 700 467 710 473 3
RV 232 156 272 172 3
RP 237 156 240 172 3
RP 242 156 245 172 3
TY 665 575 14 8 0 0 3 * D1
TY 700 525 14 8 0 0 3 * U1
TY 745 560 14 8 0 0 3 * C2
TY 580 530 14 8 0 0 3 * C1
RV 570 285 610 265 3
RP 560 277 570 273 3
TY 690 445 14 8 0 0 3 * D5
TY 665 495 14 8 0 0 3 * R24
TY 675 415 14 8 0 0 3 * R22
RP 287 391 290 407 3
RP 292 391 295 407 3
TY 1115 115 14 8 90 0 3 * GND
RP 269 398 282 401 3
RP 322 398 335 401 3
TY 185 430 14 8 0 0 3 * R25
TY 180 460 14 8 0 0 3 * R26
TY 165 485 14 8 0 0 3 * C11
TY 270 415 14 8 0 0 3 * Q11
TY 70 225 14 8 0 0 3 * C12
								</pre>
							</div>
						</td>
					</tr>
				</table>


			<br>

			<p><?php echo EXAMPLES_PAGE_UPDATE_DATE; ?>	</p><br>
		</div>
<!-- end of content -->
		<footer>
			<h3><?php echo FOOTER_TITLE; ?></h3>
			<img id="gplv3_logo" src="http://darwinne.github.io/FidoCadJ/images/logos/gplv3-127x51.png" alt="GPL v. 3">
			<p id="license"><?php echo FOOTER_CONTENT; ?></p>
		</footer>
	</body>
</html>
<?php file_put_contents("php_to_html_output/".$_GET['lang']."/".str_replace(".php",".html",basename(__FILE__)), ob_get_clean()); ?>
