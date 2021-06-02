<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Facial Recognition - Snapshot</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
                                <?php
                                    include "header.php";
                                ?>

							<!-- Content -->
								<section>
									<header class="main">
										<h1>Create an Account</h1>
									</header>

                                    <span class="image main"><img src="images/pic11.jpg" alt="" /></span>

									<p>This is a fake account.  Please do not enter any sensitive or secret information.  This account is just for demonstration purposes.  Your image and information will not be collected or shared.</p>
									<p>After the demo, you can delete the image and all information enter for the account.  If you do not manually delete the account, it will be automatically deleted in 24 hours.</p>
									<p>The account will remain in the database for 24 hours in case you would like to come back to test the facial recognition login system again.</p>

									<hr class="major" />

                                    <h2>Create a Shapshot</h2>
                                    <p>In this step, we must capture an image of your face using the webcam on your computer.  This snapshot image will be used for comparison when logging in using facial recognition.</p>
                                    <ol>
                                        <li>The browser will ask for permission to access the camera, you must allow access to contine.</li>
                                        <li>Smile and click the 'take picture' button.</li>
                                    </ol>
                                    <video id="webcam" autoplay playsinline width="640" height="480" style="border: 1px solid #000000;"></video>
                                    <canvas id="canvas" class="d-none"></canvas>
                                    <audio id="snapSound" src="assets/audio/snap.wav" preload="auto"></audio>

                                    <hr class="major" />

									<h2>Create a User Name</h2>
									<p>Enter anything here.  It is used only to demonstrate that your information is retreived after the facial recognition system logs you in.</p>

									<hr class="major" />

									<h2>Enter a Phrase</h2>
									<p>Enter a sentance or some unique characters.  This information will also be retreived when you successfully login.</p>

									<hr class="major" />

									<h2>Save Account Info</h2>
									<p>Click 'save' below to create the demo account.  After creating your account, use the 'login' menu item in the sidebar to test the facial recognition system.</p>

								</section>

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">
									<form method="post" action="#">
										<input type="text" name="query" id="query" placeholder="Search" />
									</form>
								</section>

							<!-- Menu -->
                                <?php
                                    include "menu.php";
                                ?>

							<!-- Get in Touch -->
                                <?php
                                    include "contact.php";
                                ?>

							<!-- Footer -->
                                <?php
                                    include "footer.php";
                                ?>

						</div>
					</div>

			</div>

		<!-- Scripts -->
			<!-- use cdn jquery <script src="assets/js/jquery.min.js"></script> -->
            <script src="//code.jquery.com/jquery-3.3.1.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
            <script src="assets/js/webcam-easy.js"></script>
            <script src="assets/js/webcam-app.js"></script>

	</body>
</html>