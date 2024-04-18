<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Connect to your MySQL database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "register";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Loop through the POST data to extract the selected options
    foreach ($_POST['schedule'] as $day => $timeSlots) {
        foreach ($timeSlots as $timeSlot => $subject) {
            // Insert each selected option into the database
            $sql = "INSERT INTO timetable (day, time_slot, selected_option) VALUES ('$day', '$timeSlot', '$subject')";
            if ($conn->query($sql) !== TRUE) {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }

    // Close the database connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        Timetable_Page
    </title>
    <link rel="stylesheet" href="T-styles.css">
</head>


<body>
    <div class="navbar">
        <div class="nav-items"><img id="logo" src="logo.png">
        </div>
        <div class="nav-items"><a href="H-index.php">Home</a></div>
        <div class="nav-items" id="timetable_bg">Timetable</div>
        <div class="nav-items"><a href="E-index.html">Eventts</a>
        </div>
        <div class="nav-items">About us</div>
        <div class="nav-items" id="profile"><a href="L-index.html">Login</a>
        </div>
    </div>
    <div class="main_body">
        <div id="left_main">

        </div>
        <div id="left_border">

        </div>
        <div id="main">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <table id="timetable">
                    <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                    <td class="time">9:00 - 10:00</td>
                    <td>
                        <div class="inline-items">
                            <select class="select_box">
                                <option selected disabled>Test</option>
                            </select>

                        </div>
                    </td>

                    <td>
                        <div class="inline-items">
                            <select>
                                <option selected disabled>Select</option>
                                <option>S12+S13:KGD L07C Computer Networks Lab</option>
                                <option>S12+S13:VDD L05C Database Management System Lab</option>
                            </select>

                        </div>
                    </td>
                    <td>
                        <div class="inline-items">
                            <select>
                                <option selected disabled>Select</option>
                            </select>

                        </div>
                    </td>
                    <td>
                        <div class="inline-items">
                            <select>
                                <option selected disabled>Select</option>
                            </select>

                        </div>
                    </td>
                    <td>
                        <div class="inline-items">
                            <select>
                                <option selected disabled>Select</option>
                            </select>

                        </div>
                    </td>
                    </tr>

                    <tr>
                        <td class="time">10:00 - 11:00</td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Test</option>
                                </select>

                            </div>
                        </td>

                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="time">11:15 - 12:15</td>
                        <td>
                            <div class="inline-items">
                                <select name="schedule[Monday][9:00-10:00]">
                                    <option selected disabled>Select</option>
                                    <option value="S12+S13:KGD L07C">Computer Networks Lab</option>
                                    <option value="S12+S13:VDD L05C">Database Management System Lab</option>
                                </select>
                            </div>
                        </td>

                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="time">12:15 - 1:15</td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA
                                        M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP
                                        E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD
                                        L05C Database Management System Lab</option>
                                </select>

                            </div>
                        </td>

                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="time">1:45 - 2:45</td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>

                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="time">2:45 - 3:45</td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>

                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="time">3:45 - 4:45</td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>

                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="time">4:45 - 5:45</td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>

                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select>
                                    <option selected disabled>Select</option>
                                </select>

                            </div>
                        </td>
                    </tr>
                </table>
        </div>
        <div id="right_border">

        </div>
        <div id="right_main">
            <div id="choose_course">
                <span
                    style="margin:auto;text-align:  center; display: block; margin: 20px;font-size: 20px;font-family: 'Roboto', sans-serif;font-weight: bold;">Choosen
                    courses</span>

                <table id="table_choose">
                    <tr>
                        <th class="choose_th">Subject</th>
                        <th class="choose_th">Theory</th>
                        <th class="choose_th">Lab</th>
                    </tr>
                    <tr>
                        <td class="choosen_subject">AOA</td>
                        <td class="choose_d_u">Undone</td>
                        <td class="choose_d_u">Undone</td>
                    </tr>
                    <tr>
                        <td class="choosen_subject">DBMS</td>
                        <td class="choose_d_u">Undone</td>
                        <td class="choose_d_u">Undone</td>
                    </tr>
                    <tr>
                        <td class="choosen_subject">EM IV</td>
                        <td class="choose_d_u">Undone</td>
                        <td class="choose_d_u">Undone</td>
                    </tr>
                    <tr>
                        <td class="choosen_subject">SE</td>
                        <td class="choose_d_u">Undone</td>
                        <td class="choose_d_u">Undone</td>
                    </tr>
                    <tr>
                        <td class="choosen_subject">TCS</td>
                        <td class="choose_d_u">Undone</td>
                        <td class="choose_d_u">Undone</td>
                    </tr>
                    <tr>
                        <td class="choosen_subject">CG</td>
                        <td class="choose_d_u">Undone</td>
                        <td class="choose_d_u">Undone</td>
                    </tr>
                </table>
            </div>

        </div>
    </div>
    <!-- Your timetable HTML code here -->

    <input type="submit" value="Submit">
    </form>
</body>

</html>