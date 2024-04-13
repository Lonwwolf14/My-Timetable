<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Timetable</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="H-styles.css">
</head>

<body>
    <div class="navbar">
        <div class="nav-items"><img id="logo" src="logo.png"></div>
        <div class="nav-items" id="home">Home</div>
        <div class="nav-items"><a href="T-index.html">Timetable</a></div>
        <div class="nav-items"><a href="E-index.html">Events</a></div>
        <div class="nav-items">About us</div>
        <div class="nav-items" id="profile">
            <?php
            session_start();

            if (isset($_SESSION['first_name']) && $_SESSION['first_name'] !== null) {
                echo '<a href="#">' . $_SESSION['first_name'] . '</a>';
            } else {
                echo '<a href="L-index.html">Login</a>';
            }
            ?>
        </div>
    </div>

    <div class="main_content">
        <div id="left-main">
            <div class="your"><b>Your </b>timetable,</div>
            <div class="your"><b>Your </b>events,</div>
            <div class="your"><b>Your </b>way</div>
            <div class="your">– all at your fingertips.</div>
        </div>
        <div id="grey" style="background:#cacaca;height:500px;width:100px;position:absolute;opacity: 0.1;"></div>
        <div id="right-main"><img id="home_image"
                src="https://images.pexels.com/photos/585752/pexels-photo-585752.jpeg?auto=compress&cs=tinysrgb&w=600">
        </div>
    </div>

    <div class="objectives">
        <!-- Content of objectives here -->
    </div>

    <footer>
        <div id="blank">
            <div id="contact">Contact with us:</div>
            <div id="contact_details">
                Email: <a href="mailto:raviraj.parab@vit.edu.in">raviraj.parab@vit.edu.in</a><br>
                Phone: +123-456-7890<br>
                Maharashtra, India<br>
            </div>
        </div>
        <div id="footer_info">
            <div class="follow">
                <div>About us:</div>
                <div>Follow us:</div>
            </div>
            <div class="terms">
                <div>Privacy</div>
                <div>Terms of use</div>
                <div>Cookie Preferences</div>
            </div>
        </div>
    </footer>
</body>

</html>