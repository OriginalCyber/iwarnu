{% load static %}
<!DOCTYPE html>
<html lang="en">

<head>
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
      <li class="nav-heading">Pages</li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Profile</span>
        </a>
      </li><!-- End Profile Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-contact.html">
          <i class="bi bi-envelope"></i>
          <span>Contact</span>
        </a>
      </li><!-- End Contact Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->
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
                    <div class="post-item clearfix">
                       <!--<img src="{% static 'assets/img/1.png'%}" alt="{% url 'index' %}">-->
                      <br>
                      <h5><a href="{% url 'index' %}">Urgent</a></h5>
                    
                      <p>ยิงกัน, ปล้นชิงทรัพย์, อุบัติเหตุร้ายแรง,  </p>
                      
                                            


                      <!-- เขียนตรงนี้ -->




                      <form name=“form name" method="post" action="process.php">
                      <select class="form-select" form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" aria-label="Default select example">
                        <option selected="">ความรุนแรง</option>
                        <option value="1">ร้ายแรง</option>
                        <option value="2">ปานกลาง</option>
                        <option value="3">ไม่ร้ายแรง</option>
                      </form>
                      </select>
                      <br>
                      <select class="form-select" form action="<?php $_SERVER['PHP_SELF'] ?>" aria-label="Default select example">
                        <option selected="">ยิงกัน</option>
                        <option value="1">ปล้นชิงทรัพย์</option>
                        <option value="2">อุบัติเหตุร้ายแรง</option>
                        <option value="3">ล่วงละเมิดทางเพศ</option>
                        <option value="3">อุบัติเหตุเล็ก</option>
                        <option value="3">ทะเลาะวิวาท</option>
                        <option value="3">หลอกลวงด้านการเงิน</option>
                        <option value="3">หลอกจำหน่ายสินค้าออนไลน์</option>
                        <option value="3">ข่าวปลอม Fake News</option>
                        <option value="3">ล่วงละเมิดทางเพศ</option>
                        <option value="3">พนันออนไลน์</option>
                      </form>
                      </select>  
                      <br>
                      <select class="form-select" form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" aria-label="Default select example">
                        <option selected="">จังหวัด</option>
                      </form>
                      </select>
                      <br>
                      <select class="form-select" form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" aria-label="Default select example">
                        <option selected="">อำเถอ</option>
                      </form>
                      </select>
                      <br>
                      <select class="form-select" form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" aria-label="Default select example">
                        <option selected="">ตำบล</option>
                      </form>
                      </select>
                      <br>
                      <select class="form-select" form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" aria-label="Default select example">
                        <option selected="">หมู่บ้าน</option>
                      </form>
                      </select>
                      <br>
                      <select class="form-select" form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" aria-label="Default select example">
                        <option selected="">ถนน</option>
                      </form>
                      </select>
                      <br>
                      <select class="form-select" form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" aria-label="Default select example">
                        <option selected="">ความรุนแรง</option>
                      </form>
                      </select>
                      <br>
                      <form action="action_page.php">
                        ชื่อ  <br><input type="text" name="user">
                        <br>
                      </form>
                      <br>
                      <form action="action_page.php">
                        เบอร์โทรศัพท์  <br><input type="text" name="user">
                        <br>
                      </form>
                      <br>
                      <form action="action_page.php">
                        <textarea name="message" rows="10" cols="30">ข้อความเพิ่มเติม</textarea>
                        <br>
                      </form>
                      <br>
                      <div class="input-group mb-3">
                        <input type="file" class="form-control" id="inputGroupFile02">
                        <label class="input-group-text" for="inputGroupFile02">Upload</label>
                      </div>



                      
                      <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
                      </form>
                      <br>




                      







                      <!--<select class="form-select" form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" aria-label="Default select example">
                        <option selected>ความรุนแรง</option>
                        <option value="1">ร้ายแรง</option>
                        <option value="2">ปานกลาง</option>
                        <option value="3">ไม่ร้ายแรง</option>
                      </form>
                      </select>
                      <br>
                      <select class="form-select" form action="<?php $_SERVER['PHP_SELF'] ?>" aria-label="Default select example">
                        <option selected>ความรุนแรง</option>
                        <option value="1">ร้ายแรง</option>
                        <option value="2">ปานกลาง</option>
                        <option value="3">ไม่ร้ายแรง</option>
                      </form>
                      </select>  
                      <br>
                      <input type="submit" value="บันทึกข้อมูล" class="btn btn-success">
















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
  <script src="{% static '/vendor/chart.js/chart.min.js'%}"></script>
  <script src="{% static 'assets/vendor/echarts/echarts.min.js'%}"></script>
  <script src="{% static 'assets/vendor/quill/quill.min.js'%}"></script>
  <script src="{% static 'assets/vendor/simple-datatables/simple-datatables.js'%}"></script>
  <script src="{% static 'assets/vendor/tinymce/tinymce.min.js'%}"></script>
  <script src="{% static 'assets/vendor/php-email-form/validate.js'%}"></script>

  <!-- Template Main JS File -->
  <script src="{% static 'assets/js/main.js'%}"></script>

</body>

</html>