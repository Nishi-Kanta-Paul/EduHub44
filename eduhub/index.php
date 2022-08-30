<?php require_once "controllerUserData.php"; ?>
<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM usertable WHERE email = '$email'";
    $run_Sql = mysqli_query($con, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $status = $fetch_info['status'];
        $code = $fetch_info['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}else{
    header('Location: login-user.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUHub44</title>
    <link rel="shortcut icon" type="image" href="images/favicon.png">

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mobile.css" media="screen and (max-width: 968px)">

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css" integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">


    <!-- Google font link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">


    <!-- JQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- OwlCarousel2 CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">

    <!-- Google Charts Script -->
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="icon" type="image/x-icon" href="images/log2.png">
</head>

<body>

    <!-- Header Section Started -->

    <section class="header">

        <!-- Navigation Section Started -->

        <nav>
            <div class="logo" id="top">
                <a href="http://localhost/eduhub/index.php"> <img src="images/logo2.png" alt="Logo"> </a>
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
                        <li> <a href="section_b.php"> Section B </a> </li>
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


        <!-- Header text Section Started -->

        <div class="content">
            <div class="principle">
                <h1 id="headerH1">Welcome to <br>EDUHub44</h1>
                <p id="headerP">It's a website of 44th batch. Here students of 44th batch will get facilities such as routine, google classroom code, tutorials etc. Moreover, anyone can know about the curricular activities and study materials of 44th batch.</p>

                <a href="#explore" class="heroBtn"> Explore to Know More </a>
            </div>
        </div>

        <!-- Header text Section Ended -->

    </section>
    <!-- Header Section Ended -->


    <!-- Todays Routine View Started -->

    <section class="routineSection" id="explore">
        <div class="tutorials">
            <h1 id="tRoutineHeading" class="headingStyle"> Todays Class Routine </h1>
            <hr class="dottedHR">
        </div>

        <div class="tRoutine">

            <div class="crd">
                <div class="gradIcon"><i class="fas fa-user-clock"></i></div>

                <div class="cont">
                    <div class="ttl">Section A</div>

                    <table class="crdTable">
                        <tr>
                            <td> Database </td>
                            <td> : </td>
                            <td id="AsecBEE" class="timeStyle"> NO CLASS </td>
                        </tr>
                        <tr>
                            <td> Microprocessors </td>
                            <td> : </td>
                            <td id="AsecMCF" class="timeStyle"> NO CLASS </td>
                        </tr>
                        <tr>
                            <td> MACS </td>
                            <td> : </td>
                            <td id="AsecP200" class="timeStyle"> NO CLASS </td>
                        </tr>
                        <tr>
                            <td> DSD </td>
                            <td> : </td>
                            <td id="AsecDM" class="timeStyle"> NO CLASS </td>
                        </tr>
                    </table>
                    <a class="heroBtn" href="sectionA-routine.html">Full Routine</a>
                </div>
            </div>

            <div class="crd">
                <div class="gradIcon"><i class="fas fa-user-clock"></i></div>

                <div class="cont">
                    <div class="ttl">Section B</div>

                    <table class="crdTable">
                        <tr>
                            <td> Database </td>
                            <td> : </td>
                            <td id="BsecBEE" class="timeStyle"> NO CLASS </td>
                        </tr>
                        <tr>
                            <td> Microprocessors </td>
                            <td> : </td>
                            <td id="BsecMCF" class="timeStyle"> NO CLASS </td>
                        </tr>
                        <tr>
                            <td> MACS </td>
                            <td> : </td>
                            <td id="BsecP200" class="timeStyle"> NO CLASS </td>
                        </tr>
                        <tr>
                            <td> DSD </td>
                            <td> : </td>
                            <td id="BsecDM" class="timeStyle"> NO CLASS </td>
                        </tr>
                    </table>
                    <a class="heroBtn" href="section_b.php">Full Routine</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Todays Routine View Ended -->


    <!-- Course section started-->


    <section class="course">
        <h1 class="headingStyle">Current Courses</h1>
        <hr class="dottedHR">

        <div class="slider owl-carousel">

            <div class="courseCol">

                <div class="img">
                    <img class="roundedIMG" src="images/dsd.jpg" alt="edu Icon">
                </div>

                <h3>DSD</h3>

                <div class="cardDesc">

                    <table class="crdTable">
                        <tr>
                            <td> Faculty </td>
                            <td> : </td>
                            <td> <strong>Md. Khairul Hasan</strong> </td>
                        </tr>
                        <tr>
                            <td> Email </td>
                            <td> : </td>
                            <td> <a href="#"><strong> khairulhasan@aust.edu.bd </strong></a>
                            </td>
                        </tr>
                        <tr>
                            <td> Mobile </td>
                            <td> : </td>
                            <td> <a href="#"><strong>+88017xxxxxxxx</strong></a> </td>
                        </tr>
                    </table>
                    <hr>
                    <div>
                        <a href="Mathematics-I.php" class="heroBtn"> Books & Materials </a> <br>
                    </div>
                </div>

            </div>

            <div class="courseCol">

                <div class="img">
                    <img class="roundedIMG" src="images/microprocessor.jpg" alt="edu Icon">
                </div>

                <h3>Microprocessors</h3>

                <div class="cardDesc">

                    <table class="crdTable">
                        <tr>
                            <td> Faculty </td>
                            <td> : </td>
                            <td> <strong>Tanjila Broti</strong> </td>
                        </tr>
                        <tr>
                            <td> Email </td>
                            <td> : </td>
                            <td> <a href="#"><strong> broti@aust.edu.bd </strong></a>
                            </td>
                        </tr>
                        <tr>
                            <td> Mobile </td>
                            <td> : </td>
                            <td> <a href="#"><strong>+88017xxxxxxxx</strong></a> </td>
                        </tr>
                    </table>
                    <hr>
                    <div>
                        <a href="Mathematics-I.php" class="heroBtn"> Books & Materials </a> <br>
                    </div>
                </div>

            </div>

            <div class="courseCol">

                <div class="img">
                    <img class="roundedIMG" src="images/economics.jpg" alt="edu Icon">
                </div>

                <h3>Economics & Accounting</h3>

                <div class="cardDesc">

                    <table class="crdTable">
                        <tr>
                            <td> Faculty </td>
                            <td> : </td>
                            <td> <strong style="font-size: 15px;">Maisha Tasnim</strong> </td>
                        </tr>
                        <tr>
                            <td> Email </td>
                            <td> : </td>
                            <td> <a href="#"><strong
                                        style="font-size: 14px;">maisha1971@gmail.com</strong></a></td>
                        </tr>
                        <tr>
                            <td> Mobile </td>
                            <td> : </td>
                            <td> <a href="#"><strong>+88016xxxxxxxx</strong></a> </td>
                        </tr>
                    </table>
                    <hr>
                    <div>
                        <a href="Mathematics-I.php" class="heroBtn"> Books & Materials </a> <br>
                    </div>
                </div>

            </div>

            <div class="courseCol">

                <div class="img">
                    <img class="roundedIMG" src="images/database.jpg" alt="edu Icon">
                </div>

                <h3>Database</h3>

                <div class="cardDesc">

                    <table class="crdTable">
                        <tr>
                            <td> Faculty </td>
                            <td> : </td>
                            <td> <strong>Nazmus Sakib</strong> </td>
                        </tr>
                        <tr>
                            <td> Email </td>
                            <td> : </td>
                            <td> <a href="#"><strong> sakib@aust.edu.bd </strong></a>
                            </td>
                        </tr>
                        <tr>
                            <td> Mobile </td>
                            <td> : </td>
                            <td> <a href="#"><strong>+88016xxxxxxxx</strong></a></td>
                        </tr>
                    </table>
                    <hr>
                    <div>
                        <a href="Mathematics-I.php" class="heroBtn"> Books & Materials </a> <br>
                    </div>
                </div>

            </div>

            <div class="courseCol">

                <div class="img">
                    <img class="roundedIMG" src="images/masc.jpg" alt="edu Icon">
                </div>

                <h3>MACS</h3>

                <div class="cardDesc">

                    <table class="crdTable">
                        <tr>
                            <td> Faculty </td>
                            <td> : </td>
                            <td> <strong>Dr. Mohammad Shafiul Alam</strong> </td>
                        </tr>
                        <tr>
                            <td> Email </td>
                            <td> : </td>
                            <td> <a href="#"><strong> shafiul.cse@aust.edu </strong></a>
                            </td>
                        </tr>
                        <tr>
                            <td> Mobile </td>
                            <td> : </td>
                            <td> <a href="#"><strong>+88016xxxxxxxx</strong></a></td>
                        </tr>
                    </table>
                    <hr>
                    <div>
                        <a href="Mathematics-I.php" class="heroBtn"> Books & Materials </a> <br>
                    </div>
                </div>

            </div>


        </div>
    </section>

    <!-- Course section Ended-->


    <!-- Tutorial view started -->

    <section>
        <div class="tutorials">
            <h1 class="headingStyle"> Tutorials </h1>
            <hr class="dottedHR">
        </div>
        <div class="slider owl-carousel">
            <div class="crd">
                <div class="img prog"><img src="images/programming_Headphone.jpg" alt=""></div>
                <div class="cont">
                    <div class="ttl">Programming</div>
                    <p>Programming is the process of creating a set of instructions that tell a computer how to perform a task. Programming can be done using a variety of computer programming languages.</p>
                    <hr>
                    <a href="http://localhost/eduhub/Programming_Tuto.php" class="heroBtn"> Explore </a>
                </div>
            </div>
            <div class="crd">
                <div class="img"><img src="images/web_dev1.jpg" alt=""></div>
                <div class="cont">
                    <div class="ttl">Web Development</div>
                    <p>Web development is the work involved in developing a Web site for the Internet (World Wide Web) or an intranet (a private network).</p>
                    <hr>
                    <a href="http://localhost/eduhub/Web_Tuto.php" class="heroBtn"> Explore </a>
                </div>
            </div>
            <div class="crd">
                <div class="img"><img src="images/cse_core.jpg" alt=""></div>
                <div class="cont">
                    <div class="ttl">CSE Core Courses</div>
                    <p>CSE Core Courses is classified into six groups: Introduction to CSE, Computational Mathematics, High Performance Computing, Intelligent Computing, Scientific Visualization, and Computational Optimization.
                    </p>
                    <hr>
                    <a href="http://localhost/eduhub/CoreCourse_Tuto.php" class="heroBtn"> Explore </a>
                </div>
            </div>
            <div class="crd">
                <div class="img"><img src="images/Android.jpg" alt=""></div>
                <div class="cont">
                    <div class="ttl">Android Development</div>
                    <p>Android software development is the process by which applications are created for devices running the Android operating system.</p>
                    <hr>
                    <a href="http://localhost/eduhub/Android_Tuto.php" class="heroBtn"> Explore </a>
                </div>
            </div>
            <div class="crd">
                <div class="img"><img src="images/uiux_design.jpg" alt=""></div>
                <div class="cont">
                    <div class="ttl">UI/UX Design</div>
                    <p>UX design refers to user experience design, while UI design stands for user interface design. Both of these are crucial to an IT product and need to work closely together.</p>
                    <hr>
                    <a href="http://localhost/eduhub/UiUx_Tuto.php" class="heroBtn"> Explore </a>
                </div>
            </div>
            <div class="crd">
                <div class="img"><img src="images/Graphic_Design.jpg" alt=""></div>
                <div class="cont">
                    <div class="ttl">Graphic Design</div>
                    <p>Graphic design is the art or profession of visual communication that combines images, words, and ideas to convey information to an audience, especially to produce a specific effect.</p>
                    <hr>
                    <a href="http://localhost/eduhub/GraphicD_Tuto.php" class="heroBtn"> Explore </a>
                </div>
            </div>
            <div class="crd">
                <div class="img"><img src="images/video_editing.jpg" alt=""></div>
                <div class="cont">
                    <div class="ttl">Video Editing</div>
                    <p>Video editing is the manipulation and arrangement of video shots. Video editing is used to structure and present all video information, including films and television shows, video advertisements and video essays.</p>
                    <hr>
                    <a href="http://localhost/eduhub/Video_Edit_tuto.php" class="heroBtn"> Explore </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Tutorial view ended -->


    <!-- Student Statistics Started -->

    <section class="stStat">
        <div class="statCol">
            <h2>Skills of our students</h2>
            <p>Some of our student are involve with Computer Programming and they done well in it. They solve problem regularly and participate online contest duly. A large number of student are involve with Web Developing and Graphics Designing. Many students
                of batch 44th of our department participated in last "Cefalo CodeFiesta : Intra AUST Programming Contest" contest of Ahsanullah University of Science and Technology and they did well. A few student of our batch are involved with Android Developing. We all working hard to develop our skills
                and experience. Also in our batch there are students with different skills including singers, dancers, actors, poets etc.
            </p>
        </div>

        <div class="statCol chart">
            <div id="columnchart_values" style="width: 100%; height: 350px;"></div>
        </div>
    </section>

    <!-- Student Statistics Ended -->


    <!-- Call to action section Started-->

    <section class="cta">

        <h1> If you need any kind of support regarding IT, you can call us directly! </h1>
        <p>Time: (Sunday to Thrushday) 4:30PM - 6:00PM</p>

        <a href="tel:+8801767705861" class="heroBtn"><i class="fa fa-phone"></i> Call to Action </a>


    </section>

    <!-- Call to action section Ended-->



    <!-- Script for form started -->
    
    <!--
    <script type="text/javascript">
        var submitted = false;
    </script>
    <iframe name="hidden_iframe" id="hidden_iframe" style="display: none" onload="formLoad()"></iframe>
    -->


    <!-- Script for form Ended -->

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



    <script>
       
        /*if(localStorage.login != 'yes') {
            location.replace('login-user.php')
        }else{
            location.replace('index.php');
        }*/


        $(".slider").owlCarousel({
            margin: 10,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000, //3000ms = 3s
            autoplayHoverPause: true,
            autoplaySpeed: 1000,
            smartSpeed: 1000,
            responsive: {
                0: {
                    items: 1,
                    nav: false
                },
                600: {
                    items: 2,
                    nav: false
                },
                1000: {
                    items: 3,
                    nav: true
                }
            }
        });
    </script>

    <!-- Linked to javascript file -->
    <!--<script src="index.js"></script>-->

</body>

</html>