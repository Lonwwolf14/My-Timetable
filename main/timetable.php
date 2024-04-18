<!--
Author: WebThemez
Author URL: http://webthemez.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="free-educational-responsive-web-template-webEdu">
    <meta name="author" content="webThemez.com">
    <title>TimeTable</title>
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
</head>
<style>
    * {
        margin: 0;
    }

    #timetable {
        margin: auto;
        font-size: 20px;
        margin-top: 2em;
    }

    .select_box {
        max-width: 200px;
        min-width: 200px;
        padding: 3px;
        height: 50px;
        border-bottom: 5px solid #a4a4a4;
        justify-content: center;
        align-items: center;
    }

    .inline-items {
        padding: 10px;
        max-width: 50px;
    }

    th {
        background-image: linear-gradient(to bottom, rgb(222, 222, 222), rgb(255, 255, 255));
        height: 50px;
        width: 5000px;
        font-family: 'Roboto', sans-serif;
        border-bottom: 2px solid #bdbcbb;
        box-shadow: 5px 2px 4px rgba(0, 0, 0, 0.2);
        text-align: center;
    }

    .time {
        font-family: 'Roboto', sans-serif;
        box-shadow: 5px 5px 4px rgba(0, 0, 0, 0.2);
        font-size: 20px;
        padding-left: 10px;
        text-align: center;
    }

    .navbar {
        display: flex;
        background-color: white;
        border-bottom: 2px solid #bdbcbb;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
        height: 70px;
    }

    .nav-items {
        padding: 10px;
        margin: auto;
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
        font-weight: bold;
    }

    #profile {
        padding-left: 50px;
    }

    a {
        color: black;
        text-decoration: none;
    }

    #logo {
        height: 50px;
        padding-left: 5px;
    }

    #timetable_bg {
        background-color: #dfdfdf;
    }

    #left_main {
        width: 100px;
        background-color: #ffffff;
        display: flex;
        flex: 1;
        margin: 20px;
        margin-top: 2em;
        padding-left: 20px;
        padding: 10px;
    }



    #main {
        width: 500px;
        background-color: #ffffff;
        padding-left: 20px;
        display: flex;
        flex: 1;
        margin-top: 2em;
        position: absolute;
        left: 400px;
        min-width: 1400px;
    }

    .main_body {
        display: flex;
    }



    #left_border {
        margin: 40px;
        background-color: #a4a4a4;
        width: 2px;
        height: 600px;
        padding-left: 10px;
        position: absolute;
        left: 330px;
    }

    .choose_th {
        margin: auto;
        background-image: linear-gradient(to bottom, rgb(222, 222, 222), rgb(255, 255, 255));
        height: 30px;
        width: 100px;
        text-align: center;
        padding: 15px;
    }

    .choosen_subject {
        font-family: 'Roboto', sans-serif;
        box-shadow: 5px 5px 4px rgba(0, 0, 0, 0.2);
        font-size: 15px;
        padding: 20px;
        text-align: center;
    }

    .choose_d_u {
        font-size: 15px;
        padding: 20px;
        text-align: center;
    }

    #final_sub {
    position: absolute;
    left: 700px;
    top: 550px;
    background-color: #007bff; /* Button background color */
    color: #fff; /* Button text color */
    padding: 10px 20px; /* Padding around the button text */
    border: none; /* Remove border */
    border-radius: 5px; /* Add border radius */
    cursor: pointer; /* Change cursor to pointer on hover */
    font-size: 16px; /* Font size */
}

#final_sub:hover {
    background-color: #0056b3; /* Darker background color on hover */
}

</style>

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
                    <li class="active"><a href="timetable.php">Timetable</a></li>
                    <li><a href="mytt.php">My Timetable</a></li>
                    <li><a href="event.php">Events</a></li>   
                    <li><a href="F-index.html"><img src="assets\images\signupbutton.png" alt="sign up"
                                width="100px"></a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </div>
    <!-- /.navbar -->

    <header id="head" class="secondary">
        <div class="container">
            <h1>TIME TABLE</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing eliras scele!</p>
        </div>
    </header>
    <div class="main_body">
        <div id="left_main">
            <div id="choose_course">
                <span
                    style="margin:auto;text-align:  center; display: block; margin: 20px;font-size: 25px;font-family: 'Roboto', sans-serif;font-weight: bold;">Choosen
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
        <div id="left_border">

        </div>
        <div id="main">
            <form method="post" action="process_timetable_database.php">
                <table id="timetable">
                    <tr>
                        <th>Time</th>
                        <th>Monday</th>
                        <th>Tuesday</th>
                        <th>Wednesday</th>
                        <th>Thursday</th>
                        <th>Friday</th>
                    </tr>
                    <tr>
                        <td class="time">9:00 - 10:00</td>
                        <td>
                            <div class="inline-items">
                                <select name="monday_9" class="select_box">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="tuesday_9">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="wednesday_9">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="thursday_9">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="friday_9">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="time">10:00 - 11:00</td>
                        <td>
                            <div class="inline-items">
                                <select name="monday_10">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="tuesday_10">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="wednesday_10">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="thursday_10">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="friday_10">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td class="time">11:15 - 12:15</td>
                        <td>
                            <div class="inline-items">
                                <select name="monday_11">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="tuesday_11">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="wednesday_11">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="thursday_11">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="friday_11">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td class="time">12:15 - 1:15</td>
                        <td>
                            <div class="inline-items">
                                <select name="monday_12">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="tuesday_12">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="wednesday_12">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="thursday_12">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="friday_12">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td class="time">1:45 - 2:45</td>
                        <td>
                            <div class="inline-items">
                                <select name="monday_1">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="tuesday_1">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="wednesday_1">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="thursday_1">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="friday_1">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                    </tr>


                    <tr>
                        <td class="time">2:45 - 3:45</td>
                        <td>
                            <div class="inline-items">
                                <select name="monday_2">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="tuesday_2">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="wednesday_2">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="thursday_2">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="inline-items">
                                <select name="friday_2">
                                    <option selected disabled>Select</option>
                                    <option>S04+S05:SNA M313A Operating Systems Lab</option>
                                    <option>S04+S05:SBP E301 Engineering Mathematics - IV</option>
                                    <option>S04+S05:VDD L05C Database Management System Lab</option>
                                </select>
                            </div>
                        </td>
                    </tr>

                </table>
                <input type="submit" value="Submit" id="final_sub">
            </form>
        </div>


        <script>
            // JavaScript to add 'select_box' class to each <select> element
            window.onload = function () {
                var selectElements = document.querySelectorAll('select');
                selectElements.forEach(function (select) {
                    select.classList.add('select_box');
                });
            };
        </script>

</body>



<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>

</html>