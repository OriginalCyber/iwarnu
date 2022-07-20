{% load static %}
<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/7.22.1/firebase-firestore.js"></script>

  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>I WARN U</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com}" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="{% static 'assets/vendor/bootstrap/css/bootstrap.min.css'%}" rel="stylesheet">
  <link href="{% static 'assets/vendor/bootstrap-icons/bootstrap-icons.css'%}" rel="stylesheet">
  <link href="{% static 'assets/vendor/boxicons/css/boxicons.min.css'%}" rel="stylesheet">
  <link href="{% static 'assets/vendor/quill/quill.snow.css'%}" rel="stylesheet">
  <link href="{% static 'assets/vendor/quill/quill.bubble.css'%}" rel="stylesheet">
  <link href="{% static 'assets/vendor/remixicon/remixicon.css'%}" rel="stylesheet">
  <link href="{% static 'assets/vendor/simple-datatables/style.css'%}" rel="stylesheet">
  <!-- Template Main CSS File -->
  <link href="{% static 'assets/css/style.css'%}" rel="stylesheet">
  <!-- =======================================================
  * Template Name: NiceAdmin - v2.2.2
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->


</head>

<body>


<script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-app.js";
        import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.9.0/firebase-analytics.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries
      
        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
          apiKey: "AIzaSyAScRewEazLIcw0TuJLo6CVAmx9hKoFtXo",
          authDomain: "iwarnu-c6fce.firebaseapp.com",
          databaseURL: "https://iwarnu-c6fce-default-rtdb.firebaseio.com",
          projectId: "iwarnu-c6fce",
          storageBucket: "iwarnu-c6fce.appspot.com",
          messagingSenderId: "860115877730",
          appId: "1:860115877730:web:b5fbf6ce8bde1ce58a763b",
          measurementId: "G-SFRVNW8DTQ"
        };
          // Initialize Firebase
        firebase.initializeApp(firebaseConfig);
        firebase.analytics();
        const db = firebase.firestore();
        </script> 




  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="{% url 'index' %}" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">I WARN U</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->
    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="{% url 'index' %}">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
        <li class="nav-item dropdown pe-3">
          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="{% static 'assets/img/i-warn-u.png'%}" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">I WARN U</span>
          </a><!-- End Profile Iamge Icon -->
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>I WARN U</h6>
              <span>Police</span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>
          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->
      </ul>
    </nav><!-- End Icons Navigation -->
  </header><!-- End Header -->
  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">
    <ul class="sidebar-nav" id="sidebar-na
    Lorem Ipsumv">
      <li class="nav-item">
        <a class="nav-link " href="{% url 'index' %}">
          <i class="bi bi-grid"></i>
          <span>Home</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      </li><!-- End Blank Page Nav -->
    </ul>
  </aside><!-- End Sidebar-->












  
    <main id="main" class="main">
      <div class="pagetitle">
        <h1>{% block title%}{% endblock title%}</h1>
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{% url 'index' %}">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>
        </nav>
      </div><!-- End Page Title -->
      <section class="section dashboard">
        <div class="row">
          <!-- Left side columns -->
          <div class="col-lg-8">
            <div class="row">




              <!-- Sales Card -->
              
  <!-- News & Updates Traffic --><!-- News & Updates Traffic --><!-- News & Updates Traffic --><!-- News & Updates Traffic -->
              
              <!-- News & Updates Traffic -->

              <div  class="card">
                <div class="card-body pb-0">
                  <div class="news">
                  <div align="center">
                    <div class="postit-item clearfix">
                       <!--<img src="{% static 'assets/img/1.png'%}" alt="{% url 'index' %}">-->
                      <br>
                      <h5><a href="{% url 'index' %}">กรุณากรอกข้อมูล</a></h5><br><br>
                      
                        <!-- เขียนตรงนี้ -->



                      <div class="container">
                        <ul id="posList">

                        <form id="addPostit">
                          <input type="text" name="articles" placeholder="แจ้งเหตุ">
                          <br><br>
                          <input type="text" name="location" placeholder="ที่ตั้ง">
                          <br><br>
                          <input type="text" name="province" placeholder="จังหวัด">
                          <br><br>
                          <input type="text" name="district" placeholder="อำเภอ">
                          <br><br>
                          <input type="text" name="road" placeholder="ถนน">
                          <br><br>
                          <input type="text" name="address" placeholder="ที่อยู่">
                          <br><br>
                          <input type="text" name="name" placeholder="ชื่อ">
                          <br><br>
                          <input type="text" name="phone_number" placeholder="หมายเลขโทรศัพท์">
                          <br><br>
                          <br>
                          <button>ส่ง</button>
                          <br>


                          <!-- =============================================================================
    
                              Title: Simple Hotel booking form
                              Description: Simple Clean form for booking a room
                              Nerds name: Andi
                              Site: http://andi.io
                              Twitter: @gitmash
                              Location: Zurich, Switzerland 

                              ==== THANKS ==== 

                              Forked from @soulrider911 https://codepen.io/soulrider911/pen/ugnyl/
                              font: Lato (google font)
                              Icon font:   http://fontawesome.io/icons/

                              ==== @TODO ====

                              Make <select> easier to select

                          ========================================================================== -->

                          <form action="">
                            <!--  General -->
                            <div class="form-group">
                              <h2 class="heading">Booking & contact</h2>
                              <div class="controls">
                                <input type="text" id="name" class="floatLabel" name="name">
                                <label for="name">Name</label>
                              </div>
                              <div class="controls">
                                <input type="text" id="email" class="floatLabel" name="email">
                                <label for="email">Email</label>
                              </div>       
                              <div class="controls">
                                <input type="tel" id="phone" class="floatLabel" name="phone">
                                <label for="phone">Phone</label>
                              </div>
                                <div class="grid">
                                  <div class="col-2-3">
                                    <div class="controls">
                                    <input type="text" id="street" class="floatLabel" name="street">
                                    <label for="street">Street</label>
                                    </div>          
                                  </div>
                                  <div class="col-1-3">
                                    <div class="controls">
                                      <input type="number" id="street-number" class="floatLabel" name="street-number">
                                      <label for="street-number">Number</label>
                                    </div>          
                                  </div>
                                </div>
                                <div class="grid">
                                  <div class="col-2-3">
                                    <div class="controls">
                                      <input type="text" id="city" class="floatLabel" name="city">
                                      <label for="city">City</label>
                                    </div>         
                                  </div>
                                  <div class="col-1-3">
                                    <div class="controls">
                                      <input type="text" id="post-code" class="floatLabel" name="post-code">
                                      <label for="post-code">Post Code</label>
                                    </div>         
                                  </div>
                                </div>
                                <div class="controls">
                                  <input type="text" id="country" class="floatLabel" name="country">
                                  <label for="country">Country</label>
                                </div>
                            </div>
                            <!--  Details -->
                            <div class="form-group">
                              <h2 class="heading">Details</h2>
                              <div class="grid">
                              <div class="col-1-4 col-1-4-sm">
                                <div class="controls">
                                  <input type="date" id="arrive" class="floatLabel" name="arrive" value="<?php echo date('Y-m-d'); ?>">
                                  <label for="arrive" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Arrive</label>
                                </div>      
                              </div>
                              <div class="col-1-4 col-1-4-sm">
                                <div class="controls">
                                  <input type="date" id="depart" class="floatLabel" name="depart" value="<?php echo date('Y-m-d'); ?>" />
                                  <label for="depart" class="label-date"><i class="fa fa-calendar"></i>&nbsp;&nbsp;Depart</label>
                                </div>      
                              </div>
                                </div>
                                <div class="grid">
                              <div class="col-1-3 col-1-3-sm">
                                <div class="controls">
                                  <i class="fa fa-sort"></i>
                                  <select class="floatLabel">
                                    <option value="blank"></option>
                                    <option value="1">1</option>
                                    <option value="2" selected>2</option>
                                    <option value="3">3</option>
                                  </select>
                                  <label for="fruit"><i class="fa fa-male"></i>&nbsp;&nbsp;People</label>
                                </div>      
                              </div>
                              <div class="col-1-3 col-1-3-sm">
                              <div class="controls">
                                <i class="fa fa-sort"></i>
                                <select class="floatLabel">
                                  <option value="blank"></option>
                                  <option value="deluxe" selected>With Bathroom</option>
                                  <option value="Zuri-zimmer">Without Bathroom</option>
                                </select>
                                <label for="fruit">Room</label>
                              </div>     
                              </div>

                              <div class="col-1-3 col-1-3-sm">
                              <div class="controls">
                                <i class="fa fa-sort"></i>
                                <select class="floatLabel">
                                  <option value="blank"></option>
                                  <option value="single-bed">Zweibett</option>
                                  <option value="double-bed" selected>Doppelbett</option>
                                </select>
                                <label for="fruit">Bedding</label>
                              </div>     
                              </div>
                                
                              </div>
                                <div class="grid">
                                  <p class="info-text">Please describe your needs e.g. Extra beds, children's cots</p>
                                  <br>
                                  <div class="controls">
                                    <textarea name="comments" class="floatLabel" id="comments"></textarea>
                                    <label for="comments">Comments</label>
                                    </div>
                                      <button type="submit" value="Submit" class="col-1-4">Submit</button>
                                </div>  
                            </div> <!-- /.form-group -->
                          </form>

                        </ul>
                      </div>
                      


                      




                    




                    </div>
                  </div><!-- End sidebar recent posts-->
                </div>
              </div><!-- End News & Updates -->

            <br><br><br><br><br><br>
          </div><!-- End Right side columns -->
        </div>
      </section>
    </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>I WARN U</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://www.facebook.com/MiniminnyZung/">ALL M Min</a>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{% static 'assets/vendor/apexcharts/apexcharts.min.js'%}"></script>
  <script src="{% static 'assets/vendor/bootstrap/js/bootstrap.bundle.min.js'%}"></script>
  <script src="{% static 'assets/vendor/chart.js/chart.min.js'%}"></script>
  <script src="{% static 'assets/vendor/echarts/echarts.min.js'%}"></script>
  <script src="{% static 'assets/vendor/quill/quill.min.js'%}"></script>
  <script src="{% static 'assets/vendor/simple-datatables/simple-datatables.js'%}"></script>
  <script src="{% static 'assets/vendor/tinymce/tinymce.min.js'%}"></script>
  <script src="{% static 'assets/vendor/php-email-form/validate.js'%}"></script>

  <!-- Template Main JS File -->
  <script src="{% static 'assets/js/main.js'%}"></script>
  <script src="{% static 'assets/js/postit.js'%}"></script>

</body>

</html>