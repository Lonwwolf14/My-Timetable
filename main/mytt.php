<?php
// Establish database connection
$servername = "localhost"; // Assuming MySQL server is running on the same machine
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "register"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve timetable data from the database
$sql = "SELECT * FROM timetable";
$result = $conn->query($sql);

// Initialize an array to store timetable data
$timetable = array();

if ($result->num_rows > 0) {
    // Fetch data from each row and store it in the $timetable array
    while ($row = $result->fetch_assoc()) {
        $timetable[$row['day']][$row['time']] = $row['subject'];
    }
}

// Close database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>My Timetable</title>
    <link rel="favicon" href="assets/images/favicon.png">
    <link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <!-- Custom styles for our template -->
    <link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
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
                    <li><a href="timetable.php">Timetable</a></li>
                    <li class="active"><a href="mytt.php">My TimeTable</a></li>
                    <li><a href="event.php">Events</a></li>
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

    <header id="head" class="secondary">
        <div class="container">
            <h1>MY TIME TABLE</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
        </div>
    </header>

    <table>
        <tr>
            <th> TIME</th>
            <th>Monday</th>
            <th>Tuesday</th>
            <th>Wednesday</th>
            <th>Thursday</th>
            <th>Friday</th>
        </tr>
        <?php
        // Define time slots
        $timeSlots = array(
            "9.00 to 10.00am",
            "10.00 to 11.00am",
            "11.15 to 12.15am",
            "12.15 to 1.15am",
            "1.45 to 2.45am",
            "2.45 to 3.45am"
        );

        // Loop through each time slot
        foreach ($timeSlots as $timeSlot) {
            echo "<tr>";
            echo "<td>$timeSlot</td>";

            // Loop through each day
            foreach (array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday") as $day) {
                // Check if the timetable data exists for the current day and time slot
                if (isset($timetable[$day][$timeSlot])) {
                    $subject = $timetable[$day][$timeSlot];
                    echo "<td>$subject</td>";
                } else {
                    echo "<td></td>";
                }
            }

            echo "</tr>";
        }
        ?>
    </table>

    <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>

</html>
