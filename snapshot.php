<!DOCTYPE HTML>
<!--
	Version Control (for this file)
    0.1 - 05/31/2021 : began coding of the website and the webcam controls
-->
<html>
	<head>
		<title>Facial Recognition - Snapshot</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
        <link rel="stylesheet" href="assets/css/bootstrap-icons.css" />
        <link rel="stylesheet" href="assets/css/webcam.css" />
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
                                    <div id="webcam-app">
                                        <div class="form-control webcam-start" id="webcam-control">
                                            <label class="form-switch" for="webcam-switch">
                                                <input type="checkbox" id="webcam-switch" />
                                                <i></i>
                                                <span id="webcam-caption">Click to Start Camera</span>
                                            </label>
                                            <button id="cameraFlip" class="btn d-none"></button>
                                        </div>
                                        <div id="errorMsg" class="alert alert-danger alert-dismissible d-none" role="alert" style="margin: 10px;">
                                            <h4 class="alert-heading">Failed to Start Camera</h4>
                                            <hr />
                                            <p>The camera/webcam failed to start.  Please allow permission to access camera.</p>
                                            <hr />
                                            <p>If you are browsing through a browser build into a social media application, you need to open this page in Safari (iOS) or Chrome (Android).</p>
                                            <button type="button" id="closeError" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                        <div class="md-modal md-effect-12">
                                            <div id="app-pannel" class="app-panel md-content row p-0 m-0">
                                                <div id="webcam-container" class="webcam-container col-12 d-none p-0 m-0">
                                                    <video id="webcam" autoplay playsinline width="640" height="480" style="border: 1px solid #000000;"></video>
                                                    <canvas id="canvas" class="d-none"></canvas>
                                                    <div class="flash"></div>
                                                    <audio id="snapSound" src="assets/audio/snap.wav" preload="auto"></audio>
                                                </div>
                                                <div id="cameraControls" class="cameraControls">
                                                    <a href="#" id="exit-app" title="Exit App" class="d-none"><i class="bi bi-x-square material-icons"></i></a>
                                                    <a href="#" id="take-photo" title="Take Photo"><i class="bi bi-person-bounding-box material-icons"></i></a>
                                                    <a href="#" id="download-photo" download="selfie.png" target="_blank" title="Save Photo" class="d-none"><i class="bi bi-folder2-open material-icons"></i></a>
                                                    <a href="#" id="resume-camera" title="Resume Camera" class="d-none"><i class="bi bi-camera material-icons"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md-overlay"></div>
                                    </div><!-- end #webcam-app -->

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
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>
            <script src="assets/js/webcam-easy.js"></script>
            <script src="assets/js/webcam-app.js"></script>

	</body>
</html>