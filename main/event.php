<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="free-educational-responsive-web-template-webEdu">
  <meta name="author" content="webThemez.com">
  <title>Events</title>
  <link rel="favicon" href="assets/images/favicon.png">
  <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/font-awesome.min.css">
  <!-- Custom styles for our template -->
  <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
  <link rel="stylesheet" type="text/css" href="assets/css/isotope.css" media="screen" />
  <link rel="stylesheet" href="assets/js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="assets/css/style.css">
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
  
	<![endif]-->
  
</head>

<body>
  <!-- Fixed navbar -->
  <div class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <!-- Button for smallest screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span
            class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
        <a class="navbar-brand" href="index.html">
          <img src="assets/images/logo.png" alt="Techro HTML5 template"></a>
      </div>
      <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav pull-right mainNav">
          <li><a href="home.php">Home</a></li>
          <li><a href="slot.php">Slot</a></li>
          <li><a href="timetable.php">TimeTable</a></li>
          <li><a href="mytt.php">MY Timetable</a></li>
          <li class="active"><a href="event.php">Events</a></li>
          <li class="nav-items" id="profile">
						<?php
						session_start();
					
						if (isset($_SESSION['first_name']) && $_SESSION['first_name'] !== null) {
							echo '<a href="#">' . $_SESSION['first_name'] . '</a>';
						} else {
							echo '<a href="L-index.html">Login</a>';
						}
						?>
					</li>
        </ul>
      </div>
      <!--/.nav-collapse -->
    </div>
  </div>
  <!-- /.navbar -->
  <style>
    /*#events_bg {
    background-color: #dfdfdf;
    cursor: pointer;
    padding: 10px;
    margin: auto;
    font-weight: bold;
}*/

    .container_down {
      display: flex;
    }

    .committee {
      width: 20%;
      background-color: #f4f4f4;
      padding: 20px;
    }

    .events {
      width: 80%;
      padding: 20px;
    }

    .filter-tabs {
      display: flex;
      background-color: #fff;
      padding: 5px 20px 20px;
    }

    .filter-tab {
      margin-right: 20px;
      font-weight: bold;
      font-size: 18px;
      cursor: pointer;
      font-family: 'Roboto', sans-serif;
      box-shadow: 5px 5px 4px rgba(0, 0, 0, 0.2);
      padding: 10px;
    }

    .filter-tab:last-child {
      margin-right: 0;
    }

    .event-details {
      padding: 10px;
    }

    .event h3 {
      margin: 0;
    }

    .event p {
      margin: 5px 0;
    }

    .event-section {
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
      justify-content: left;
      align-items: left;
      gap: 16px;
      max-width: 1400px;
      margin: 0 auto;
      padding: 20px 10px;
    }

    .event img {
      width: 250px;
      /* Set the width to a fixed value */
      height: 300px;
      /* Set the height to a fixed value */
      object-fit: cover;
      border-radius: 10px;
    }


    .event::after {
      content: "";
      width: 350px;
    }
  </style>
  <header id="head" class="secondary">
    <div class="container">
      <h1>Events</h1>
    </div>
  </header>


  <div class="container_down">
    <div class="committee">
      <h2>Select Committee</h2>
      <ul>
        <div>
          <li><a href="#" onclick="showAllEvents()">All Events</a></li>
        </div>
        <div>
          <li class="committee-option"><a href="#" onclick="showEvents('cultural')">Cultural Committee</a></li>
        </div>
        <div>
          <li class="committee-option"><a href="#" onclick="showEvents('sports')">Sports Committee</a></li>
        </div>
        <!-- Add more committee options as needed -->
      </ul>
    </div>




    <div class="events" id="eventsContainer">
      <!-- Filter tabs -->
      <div class="filter-tabs">
        <span class="filter-tab" onclick="showAllEvents()">All Events</span>
        <span class="filter-tab" onclick="showOngoingEvents()">Ongoing Events</span>
        <span class="filter-tab" onclick="showPastEvents()">Past Events</span>
        <span class="filter-tab" onclick="showUpcomingEvents()">Upcoming Events</span>
      </div>


      <div id="culturalEvents" class="event-section">
        <div class="event">
          <img src="nights.jpeg" alt="Cultural Night Poster">
          <h3>Cultural Night</h3>
          <p>Date: April 15, 2024</p>
        </div>
        <div class="event">
          <img src="dance.jpeg" alt="Dance Competition Poster">
          <h3>Dance Competition</h3>
          <p>Date: April 20, 2024</p>
        </div>
      </div>

      <div id="sportsEvents" class="event-section">
        <div class="event">
          <img src="football.jpeg" alt="Football Tournament Poster">
          <h3>Football Tournament</h3>
          <p>Date: April 17, 2024</p>
        </div>
        <div class="event">
          <img src="basketball.jpeg" alt="Basketball Match Poster">
          <h3>Basketball Match</h3>
          <p>Date: April 22, 2024</p>
        </div>
      </div>

    </div>
  </div>
  <!-- Merged content ends here -->

  <script>
    function showAllEvents() {
      // Show all events
      document.querySelectorAll('.event-section').forEach(section => {
        section.style.display = 'block';
      });
    }

    function showEvents(committee) {
      // Hide all event sections first
      document.querySelectorAll('.event-section').forEach(section => {
        section.style.display = 'none';
      });

      // Show events for the selected committee
      document.getElementById(committee + 'Events').style.display = 'block';
    }

    function showOngoingEvents() {
      // Hide all event sections first
      document.querySelectorAll('.event-section').forEach(section => {
        section.style.display = 'none';
      });
      // Show only ongoing events
      // You need to implement this based on your criteria
    }

    function showPastEvents() {
      // Hide all event sections first
      document.querySelectorAll('.event-section').forEach(section => {
        section.style.display = 'none';
      });
      // Show only past events
      // You need to implement this based on your criteria
    }

    function showUpcomingEvents() {
      // Hide all event sections first
      document.querySelectorAll('.event-section').forEach(section => {
        section.style.display = 'none';
      });
      // Show only upcoming events
      // You need to implement this based on your criteria
    }


  </script>

</body>
</section>
<!-- /container -->
<footer id="footer">

  <div class="container">
    <div class="row">
      <div class="footerbottom">
        <div class="col-md-3 col-sm-6">
          <div class="footerwidget">
            <h4>
              Course Categories
            </h4>
            <div class="menu-course">
              <ul class="menu">
                <li><a href="#">
                    List of Technology
                  </a>
                </li>
                <li><a href="#">
                    List of Business
                  </a>
                </li>
                <li><a href="#">
                    List of Photography
                  </a>
                </li>
                <li><a href="#">
                    List of Language
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footerwidget">
            <h4>
              Products Categories
            </h4>
            <div class="menu-course">
              <ul class="menu">
                <li> <a href="#">
                    Individual Plans </a>
                </li>
                <li><a href="#">
                    Business Plans
                  </a>
                </li>
                <li><a href="#">
                    Free Trial
                  </a>
                </li>
                <li><a href="#">
                    Academic
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footerwidget">
            <h4>
              Browse by Categories
            </h4>
            <div class="menu-course">
              <ul class="menu">
                <li><a href="#">
                    All Courses
                  </a>
                </li>
                <li> <a href="#">
                    All Instructors
                  </a>
                </li>
                <li><a href="#">
                    All Members
                  </a>
                </li>
                <li>
                  <a href="#">
                    All Groups
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="footerwidget">
            <h4>Contact</h4>
            <p>Lorem reksi this dummy text unde omnis iste natus error sit volupum</p>
            <div class="contact-info">
              <i class="fa fa-map-marker"></i> Kerniles 416 - United Kingdom<br>
              <i class="fa fa-phone"></i>+00 123 156 711 <br>
              <i class="fa fa-envelope-o"></i> youremail@email.com
            </div>
          </div><!-- end widget -->
        </div>
      </div>
    </div>
    <div class="social text-center">
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-dribbble"></i></a>
      <a href="#"><i class="fa fa-flickr"></i></a>
      <a href="#"><i class="fa fa-github"></i></a>
    </div>

    <div class="clear"></div>
    <!--CLEAR FLOATS-->
  </div>
  <div class="footer2">
    <div class="container">
      <div class="row">

        <div class="col-md-6 panel">
          <div class="panel-body">
            <p class="simplenav">
              <a href="index.html">Home</a> |
              <a href="about.html">About</a> |
              <a href="courses.html">Courses</a> |
              <a href="price.html">Price</a> |
              <a href="videos.html">Videos</a> |
              <a href="contact.html">Contact</a>
            </p>
          </div>
        </div>

        <div class="col-md-6 panel">
          <div class="panel-body">
            <p class="text-right">
              Copyright &copy; 2014. Template by <a href="http://webthemez.com/" rel="develop">WebThemez.com</a>
            </p>
          </div>
        </div>

      </div>
      <!-- /row of panels -->
    </div>
  </div>
</footer>


<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.cslider.js"></script>
<script src="assets/js/jquery.isotope.min.js"></script>
<script src="assets/js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="assets/js/custom.js"></script>
</body>

</html>