<?php require('db.php');?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Graphic Design Tutorials EDUHub44</title>
    <link rel="shortcut icon" type="image" href="images/favicon.png">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 968px)">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">

    <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Header Section Started -->

    <section class="sub-header gdHeader">

        <!-- Navigation Section Started -->

        <nav>
            <div class="logo" id="top">
                <a href="http://localhost/eduhub/index.php.html"> <img src="images/logo2.png" alt="Logo"> </a>
            </div>

            <label for="btn" class="icon">
                <span class="fa fa-bars"></span>
            </label>
            <input type="checkbox" name="" id="btn">

            <ul>
                <li> <a href="http://localhost/eduhub/index.php"><i class="fas fa-home"> </i> HOME </a> </li>
                <li>

                    <label for="btn-1" class="show"><i class="fas fa-book"> </i> Courses <i
                            class="fas fa-caret-down"></i></label>

                    <a href="#"><i class="fas fa-book"> </i> Courses </a>
                    <input type="checkbox" id="btn-1">

                    <ul>
                        <li>
                            <label for="btn-2" class="show">1st Semester <i class="fas fa-caret-down"></i></label>
                            <a href="#"> 1st Semester <i class="fas fa-caret-right"></i> </a>
                            <input type="checkbox" id="btn-2">


                            <ul>
                                <li><a href="http://localhost/eduhub/Critical_Thinking_Communication.php"> Critical Thinking and Communication </a></li>
                                <li><a href="Mathematics-I.php"> Mathematics-I </a></li>
                                <li><a href="#"> Physics </a></li>
                                <li><a href="#"> Chemistry </a></li>
                                <li><a href="#"> Elementary Structured Programming </a></li>
                            </ul>
                        </li>
                        <li>
                            <label for="btn-3" class="show">2nd Semester <i class="fas fa-caret-down"></i></label>
                            <a href="#"> 2nd Semester <i class="fas fa-caret-right"></i> </a>
                            <input type="checkbox" id="btn-3">

                            <ul>
                                <li><a href="#"> Mathematics-II </a></li>
                                <li><a href="#"> Basic Mechanical Engineering </a></li>
                                <li><a href="#"> Basic Electrical Engineering </a></li>
                                <li><a href="#"> Discrete Mathematics </a></li>
                                <li><a href="#"> Object Oriented Programming </a></li>
                            </ul>
                        </li>
                        <li>

                            <label for="btn-4" class="show">3rd Semester <i class="fas fa-caret-down"></i></label>
                            <a href="#"> 3rd Semester <i class="fas fa-caret-right"></i> </a>
                            <input type="checkbox" id="btn-4">

                            <ul>
                                <li><a href="#"> Society, Ethics and Technology </a></li>
                                <li><a href="#"> Mathematics-III </a></li>
                                <li><a href="#"> Electronic Devices and Circuits </a></li>
                                <li><a href="#"> Data Structures </a></li>
                                <li><a href="#"> Digital Logic Design </a></li>
                            </ul>
                        </li>
                        <li>

                            <label for="btn-5" class="show">4th Semester <i class="fas fa-caret-down"></i></label>
                            <a href="#"> 4th Semester <i class="fas fa-caret-right"></i> </a>
                            <input type="checkbox" id="btn-5">

                            <ul>
                                <li><a href="#"> Mathematics- IV </a></li>
                                <li><a href="#"> Numerical Methods </a></li>
                                <li><a href="#"> Algorithms </a></li>
                                <li><a href="#"> Data Communication </a></li>
                                <li><a href="#"> Computer Architecture </a></li>
                            </ul>
                        </li>
                        <li>

                            <label for="btn-6" class="show">5th Semester <i class="fas fa-caret-down"></i></label>
                            <a href="#"> 5th Semester <i class="fas fa-caret-right"></i> </a>
                            <input type="checkbox" id="btn-6">

                            <ul>
                                <li><a href="#"> Economics and Accounting </a></li>
                                <li><a href="#"> Mathematical Analysis for Computer Science </a></li>
                                <li><a href="#"> Database </a></li>
                                <li><a href="#"> Digital System Design </a></li>
                                <li><a href="#"> Microprocessors and Microcontrollers </a></li>
                            </ul>
                        </li>
                    </ul>
                </li>

                <li>
                    <label for="btn-7" class="show"><i class="fas fa-clock"> </i> Routine <i
                            class="fas fa-caret-down"></i></label>

                    <a href="#"><i class="fas fa-clock"> </i> Routine </a>
                    <input type="checkbox" id="btn-7">

                    <ul>
                        <li> <a href="#"> Section A </a> </li>
                        <li> <a href="#"> Section B </a> </li>
                    </ul>
                </li>

                <li>
                    <label for="btn-8" class="show"><i class="fas fa-chalkboard-teacher"> </i> Tutorials <i
                            class="fas fa-caret-down"></i></label>

                    <a href="#"><i class="fas fa-chalkboard-teacher"> </i> Tutorials </a>
                    <input type="checkbox" id="btn-8">

                    <ul>
                        <li> <a href="http://localhost/eduhub/Programming_Tuto.php"> Programming </a> </li>
                        <li> <a href="http://localhost/eduhub/Web_Tuto.php"> Web Dev </a> </li>
                        <li> <a href="http://localhost/eduhub/CoreCourse_Tuto.php"> Core Courses </a> </li>
                        <li> <a href="http://localhost/eduhub/Android_Tuto.php"> Android Dev </a> </li>
                        <li> <a href="http://localhost/eduhub/UiUx_Tuto.php"> UI/UX Design </a> </li>
                        <li> <a href="http://localhost/eduhub/GraphicD_Tuto.php"> Graphic Design </a> </li>
                        <li> <a href="http://localhost/eduhub/Video_Edit_tuto.php"> Video Editing </a> </li>
                    </ul>
                </li>

                <li>
                    <label for="btn-9" class="show"><i class="fas fa-poll"> </i> Result <i
                            class="fas fa-caret-down"></i></label>

                    <a href="#"><i class="fas fa-poll"> </i> Result </a>
                    <input type="checkbox" id="btn-9">

                    <ul>
                        <li> <a href="http://localhost/eduhub/result_records.php"> Previous Records </a> </li>
                    </ul>
                </li>

                <li>
                    <label for="btn-10" class="show"><i class="fas fa-university"> </i> Academic <i
                            class="fas fa-caret-down"></i></label>

                    <a href="#"><i class="fas fa-university"> </i> Academic </a>
                    <input type="checkbox" id="btn-10">

                    <ul>
                        <li> <a href="http://localhost/eduhub/faculty_info.php"> Faculty Info </a> </li>
                        <li> <a href="#"> Bus Schedule </a> </li>
                    </ul>
                </li>

                <li> <a href="about.php"><i class="fas fa-address-card"> </i> About </a> </li>
                <li> <a href="http://localhost/eduhub/contact.php"><i class="fas fa-address-book"> </i> Contact </a> </li>

                <li>
                    <label for="btn-11" class="show"><i class="fas fa-clock"> </i> Logout <i
                            class="fas fa-caret-down"></i></label>

                    <a href="logout-user.php"><i class="fas fa-clock"> </i> Logout </a>
                    <input type="checkbox" id="btn-7">
                </li>
                
            </ul>
        </nav>

        <!-- Navigation Section Ended -->


        <h1> Class Routine :: Section-B </h1>

    </section>
    <!-- Header Section Ended -->


    <section class="pTable">
        <table>
            <caption>Google classroom code</caption>
            <thead>
                <tr>
                    <th>Code</th>
                    <th>Course Name</th>
                    <th>Faculty</th>
                    <th>Online class code</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>CSE 3100</td>
                    <td>Web Development(SD)</td>
                    <td>Md. Imrul Jubair</td>
                    <td>o5vl544</td>
                </tr>

                <tr>
                    <td>CSE 3107</td>
                    <td>Microprocessors</td>
                    <td>Tanjila Broti</td>
                    <td>aun7oqi</td>
                </tr>

                <tr>
                    <td>CSE 3104</td>
                    <td>Database</td>
                    <td>Nazmus Sakib</td>
                    <td>ciglkbv</td>
                </tr>

                <tr>
                    <td>HUM 3109</td>
                    <td>Accounting</td>
                    <td>Maisha Tasnim</td>
                    <td>khakrzv</td>
                </tr>
            </tbody>
        </table><br>

        <table class="secTable">
            <caption>Class Routine</caption>
            <thead>
                <tr>
                    <th> Time <i class="fas fa-arrow-circle-right"></i> </th>
                    <th colspan="3">10.30 AM to 11.50 AM</th>
                    <th colspan="3">2.00 PM to 3.20 PM</th>
                    <th colspan="3">3.30 PM to 4.50 PM</th>
                    <th colspan="3">5.00 PM to 6.20 PM</th>
                    <th colspan="3">6.30 PM to 7.50 PM</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td> Day <i class="fas fa-arrow-circle-down"></i> </td>
                    <td><b>Course Code</b></td>
                    <td><b>Course Name</b></td>
                    <td><b>Faculty</b></td>

                    <td><b>Course Code</b></td>
                    <td><b>Course Name</b></td>
                    <td><b>Faculty</b></td>

                    <td><b>Course Code</b></td>
                    <td><b>Course Name</b></td>
                    <td><b>Faculty</b></td>

                    <td><b>Course Code</b></td>
                    <td><b>Course Name</b></td>
                    <td><b>Faculty</b></td>

                    <td><b>Course Code</b></td>
                    <td><b>Course Name</b></td>
                    <td><b>Faculty</b></td>
                </tr>

                <tr>
                    <td>SAT</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>CSE 3104</td>
                    <td>Microprocessors</td>
                    <td>Tanjila Broti</td>

                    <td>CSE 3104</td>
                    <td>Microprocessors</td>
                    <td>Tanjila Broti</td>

                    <td>HUM 3109</td>
                    <td>Accounting</td>
                    <td>Maisha Tasnim</td>
                </tr>

                <tr>
                    <td>MON</td>

                    <td>CSE 3104</td>
                    <td>Database</td>
                    <td>Nazmus Sakib</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>TUE</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>CSE 3100</td>
                    <td>Web Development(SD)</td>
                    <td>Md. Imrul Jubair</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>WED</td>

                    <td>CSE 3104</td>
                    <td>Database</td>
                    <td>Nazmus Sakib</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>HUM 3109</td>
                    <td>Accounting</td>
                    <td>Maisha Tasnim</td>
                </tr>

                <tr>
                    <td>THU</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>CSE3100</td>
                    <td>Web Development(SD)</td>
                    <td>Md Imrul Jubair</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>

                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                </tr>
            </tbody>
        </table>

        <div class="dlRoutine">

            <p>If you want to download the routine, click on the download button below</p>
            <a href="Routine/Section_A_Routine.pdf" target="blank" download="">
                <button class="heroBtn"><i class="fas fa-download"></i> Download</button>
            </a>
        </div>

    </section>







    <!-- Footer section Started -->

    <section class="footer">

        <div class="fcol col-3 ftrTopEle">
            <h4> Feedback </h4>
            <div class="contactCol">

                <form action="https://forms.gle/TZDGdcY7jGtS349c6" method="post" target="hidden_iframe" onsubmit="submitted=true" class="myform" id="myform">

                    <input type="text" name="entry.805276147" placeholder="Name" required>
                    <input type="email" name="emailAddress" placeholder="Email" required>
                    <textarea rows="3" name="entry.1586819207" placeholder="Feedback" required></textarea>
                    <button type="submit" class="heroBtn"> Submit <i class="fas fa-paper-plane"></i> </button>
                </form>

                <p id="subMsg"></p>
                <p id="errMsg"></p>
            </div>
        </div>
        <div class="fcol col-3 ftrTopEle">

            <h4>Quick Links</h4>

            <ol>
                <li><a href="https://www.aust.edu/" target="blank"> AUST Website <i class="fas fa-external-link-alt"></i></a></li>
                <li><a href="https://www.facebook.com/AUSTPIC" target="blank"> AUST Programming and Informatics Club <i class="fas fa-external-link-alt"></i></a></li>
                <li><a href="https://www.facebook.com/groups/169147366481409" target="blank">Aust_ProgrammingGroup <i class="fas fa-external-link-alt"></i></a></li>
                <li><a href="https://www.facebook.com/groups/1743009186009279" target="blank">AUST Family <i class="fas fa-external-link-alt"></i></a></li>
            </ol>
        </div>
        <div class="fcol col-3 ftrTopEle">

            <h4>About Us</h4>

            <p>This website is designed and developed by the students of CSE 44th batch of Ahsanullah University of Science and Technology and it is not an official website. Our main purpose is to help our batch and our junior batches through this website.</p><br>
        </div>
        <div class="fcol col-3 flink ftrTopEle">

            <h4>Follow Us</h4>
            <div class="icons">
                <a href="#"> <i class="fab fa-facebook-f"> </i></a>
                <a href="#"> <i class="fab fa-twitter"> </i></a>
                <a href="#"> <i class="fab fa-instagram"> </i></a>
                <a href="#"> <i class="fab fa-linkedin-in"> </i></a>
            </div>
        </div>
        <hr>
        <div class="fcol col-6">

            <p> &copy; 2022 AUST_CSE-44(Ahsanullah University of Science and Technology)</p>
        </div>

        <div class="fcol col-6 ftop">

            <a href="#top">
                <div class="gotop">
                    Back to Top <i class="fas fa-angle-double-up"></i>
                </div>
            </a>
        </div>
    </section>

    <!-- Footer section Ended-->


    <!-- Linked to javascript file -->
    <!--<script src="index.js"></script>-->

</body>

</html>