<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Leo's Page</title>

		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet"/>
		<link rel="stylesheet" type="text/css" href="css/creative-tim.css"/>
		<link rel="stylesheet" type="text/css" href="octicons/octicons.css"/>
		<link rel="stylesheet" type="text/css" href="genericons/genericons.css"/>
		<link rel="stylesheet" type="text/css" href="font-awesome-4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/main.css"/>

	</head>
	<body>

		<nav class="navbar filter-bar fixed-absolute" role="navigation" style="background-color: rgba(0,0,0,0.4);">
			<div class="container">
				<div class="notification">
					<div id="notif-message" class="notif-message" style="display: none;" notice-type=success>
					</div>
				</div>
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>

					<a class="navbar-brand" href="/">
						<div class="logo">
							<img src="images/somephoto.jpg"/>
						</div>
					</a>
				</div>


				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li><a href="#"></a></li>
					</ul>

					<ul class="nav navbar-nav navbar-right">
						<li class="active">
							<a href="/">
								<i class="glyphicon glyphicon-home" aria-hidden="true"></i>
								<p>Home</p>    
							</a>
						</li>
						<li>
							<a href="#projects-title">
								<span class="glyphicon glyphicon-tasks"></span>
								<p>Projects</p>
							</a>
						</li>
						<li>
							<a href="#sentry">
								<span class="glyphicon glyphicon-wrench"></span>
								<p>Sentry</p>
							</a>
						</li>
					</ul>
				</div>
			</div>

		</nav>

		<div class="parallax parallax-small">
		    <div class="over-gradient"></div>
		    <div class="container">
		    	<div class="row" style="visibility: hidden;"><h1>1</h1></div>
		         <div class="row">
		            <div class="col-md-6">
		                <h1 class="hello">
		                   <a href="/">Greetings,</a>
		                    <small>My name is Leo, and this is my site.</small>
		                </h1>
		            </div>
		            <div class="col-md-6">
		            	<div id="second-col" class="row">
			                <div class="actions pull-right">
			                     <a class="btn btn-lg btn-fill btn-success" href="https://github.com/PiJoules">
			                     	<span class="octicon octicon-octoface" aria-hidden="true"></span> Github
			                     </a>
			                </div>
		            	</div>
		            	<div class="row">
			                <div class="actions pull-right">
			                     <a class="btn btn-lg btn-fill btn-info" href="https://www.linkedin.com/pub/leonard-chan/64/a84/71b">
			                     	<span class="genericon genericon-linkedin-alt"></span>
			                     	Linkedin
			                     </a>
			                </div>
		            	</div>
		            	<div class="row">
			                <div class="actions pull-right">
			                     <a class="btn btn-lg btn-fill btn-primary" href="https://bitbucket.org/Pi_Joules">
			                     	<span class="fa fa-bitbucket"></span>
			                     	Bitbucket
			                     </a>
			                </div>
		            	</div>
		            </div>
		        </div>
		    </div>
		</div>

		<div id="projects-title">
			<div class="container">
				<h1>Projects I worked on</h1>
			</div>
		</div>

		<div id="projects-main">
			<div class="container">
				<div class="row">
					<div class="col-md-8">

						<div class="card">
							<div class="thumbnail two-by-one">           
								<img class="" src="images/kompact.png" />
							</div>
							<div class="card-info">
								<div class="moving">
									<a href="http://kompactit.com/">
										<h3>Kompact</h3>
										<p>Create and read summarized news articles with Kompact. The API can be used on any web service to generate summaries of text.</p>
									</a>
									<b class="actions">
										<a class="blue-text" href="http://kompactit.com/" target="_blank">Visit</a>
									</b>
								</div>
							</div>
						</div>

					</div>

					<div class="col-md-4">

						<div class="card">
							<div class="thumbnail">           
								<img alt="Opt wizard thumbnail" src="images/gps.png" />
							</div>
							<div class="card-info">
								<div class="moving">
									<a href="https://itunes.apple.com/us/app/gps-coordinate-extractor/id763199461?mt=8">
										<h3>GPS Coordinate Extractor</h3>
										<p>Get GPS coordinates of any path you make on with your iPhone.</p>
									</a>
									<b class="actions">
										<a class="blue-text" href="https://itunes.apple.com/us/app/gps-coordinate-extractor/id763199461?mt=8" target="_blank">Check out on App Store</a>
									</b>
								</div>
							</div>
						</div>

					</div>

				</div>
				<div class="row">

					<div class="col-md-4">

						<div class="card">
							<div class="thumbnail">           
								<img alt="Opt wizard thumbnail" src="images/polygon.png" />
							</div>
							<div class="card-info">
								<div class="moving">
									<a href="https://github.com/PiJoules/TestApp">
										<h3>Polygon Game</h3>
										<p>Polygons will spawn in each corner. These are your enemies. You can eat the smaller ones to get bigger. The bigger you get, the higher your score!</p>
									</a>
									<b class="actions">
										<a class="blue-text" href="https://github.com/PiJoules/TestApp" target="_blank">View Source Code</a>
									</b>
								</div>
							</div>
						</div>

					</div>

					<div class="col-md-8">

						<div class="card">
							<div class="thumbnail">           
								<img alt="Opt wizard thumbnail" src="images/this-website.png" />
							</div>
							<div class="card-info">
								<div class="moving">
									<a href="/">
										<h3>This website</h3>
										<p>This website was constructed using Bootstrap and is hosted on Google App Engine.</p>
									</a>
									<b class="actions">
										<a class="blue-text" href="https://github.com/PiJoules/Personal-Website" target="_blank">View Source Code</a>
									</b>
								</div>
							</div>
						</div>

					</div>

				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="card">
							<div class="thumbnail">           
								<img alt="Opt wizard thumbnail" src="images/batman.jpeg" />
							</div>
							<div class="card-info">
								<div class="moving">
									<a href="https://github.com/PiJoules/Batman-on-drugs">
										<h3>Batman on Drugs</h3>
										<p>Just a fun little app I made overnight. This was inspired by a youtube video.</p>
									</a>
									<b class="actions">
										<a class="blue-text" href='https://www.youtube.com/watch?v=e1dvSlvZLG8' target="_blank">See the Video</a>
										<b class="separator">|</b>
										<a class="blue-text" href="https://github.com/PiJoules/Batman-on-drugs" target="_blank">View Source Code</a>
									</b>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="sentry" class="footer">
			<div class="overlayer">
				<div class="container">
					<div class="row">
						<div class="credits">
							Made with <span class="glyphicon glyphicon-heart" alt="heart"></span>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="js/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/main.js"></script>

		<script type="text/javascript">
			window.onerror = function (errorMsg, url, lineNumber, column, errorObj) {
			    alert('Error: ' + errorMsg + ' Script: ' + url + ' Line: ' + lineNumber
			    + ' Column: ' + column + ' StackTrace: ' +  errorObj);
			}
		</script>
	</body>
</html>