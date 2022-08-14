<?php
include_once('php/db.php');
$sql = "Select * from `job-post` where jobid=3";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/dashboard.css" />
  
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />


    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="navbar">
          <div class="logo">
            <img src="img/logo.jpg" alt="" />
            <h1 style="font-size: 20px;">Portal</h1>
          </div>
          <ul>
            <li>
              <a href="dashboard.html"
                ><i class="fas fa-user"></i>
                <span class="nav-item">Dashboard</span></a
              >
            </li>
            <li>
              <a href="dashboard-job.html"
                ><i class="fas fa-chart-bar"></i>
                <span class="nav-item">Job Listing</span></a
              >
            </li>
            <li>
              <a href="dashboard-settings.html"
                ><i class="fas fa-tasks"></i>
                <span class="nav-item">Settings</span></a
              >
            </li>
            <li>
              <a href="login.html" class="Logout"
                ><i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Log Out</span></a
              >
            </li>
          </ul>
        </div>
      </nav>
      <section class="main">
        <div class="main-top">
          <p>Explore the opportunites</p>
        </div>
        <div class="main-body">
            <h1>Search for Jobs</h1>
        </div>
        <div class="search_bar"">
            <input type="search" placeholder="Search job here.." />
         
        </div>
        <div class="container-xxl py-5">
          
            <div class="container">
             
              <div class="tab-class text-center wow fadeInUp" data-wow-delay="0.3s">
                  
                  <div class="tab-content" style="padding-left: 190px;">
                      <div id="tab-1" class="tab-pane fade show p-0 active">
                          <div class="job-item p-4 mb-4">
                              <div class="row g-4">
                                  <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-1.jpg" alt="" style="width: 80px; height: 80px;">
                                      <div class="text-start ps-4">
                                          <h5 class="mb-3"><?php
                                          echo $row["designation"];
                                          ?></h5>
                                          <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $row["location"]; ?></span>
                                          <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php echo $row["company"]; ?></span>
                                          <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i><?php echo $row["salary"]; ?></span>
                                      </div>
                                  </div>
                                  <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                      <div class="d-flex mb-3">
                                          <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                          <a class="btn btn-primary" href="job-detail.php">Apply Now</a>
                                      </div>
                                      <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                  </div>
                              </div>
                          </div>
                          
                          <div class="job-item p-4 mb-4">
                              <div class="row g-4">
                                  <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-3.jpg" alt="" style="width: 80px; height: 80px;">
                                      <div class="text-start ps-4">
                                          <h5 class="mb-3"><?php
                                          echo $row["designation"];
                                          ?></h5>
                                          <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $row["location"]; ?></span>
                                          <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php echo $row["company"]; ?></span>
                                          <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i><?php echo $row["salary"]; ?></span>
                                      </div>
                                  </div>
                                  <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                      <div class="d-flex mb-3">
                                          <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                          <a class="btn btn-primary" href="job-detail.php">Apply Now</a>
                                      </div>
                                      <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                  </div>
                              </div>
                          </div>
                          <div class="job-item p-4 mb-4">
                              <div class="row g-4">
                                  <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-4.jpg" alt="" style="width: 80px; height: 80px;">
                                      <div class="text-start ps-4">
                                          <h5 class="mb-3"><?php
                                          echo $row["designation"];
                                          ?></h5>
                                          <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $row["location"]; ?></span>
                                          <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php echo $row["company"]; ?></span>
                                          <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i><?php echo $row["salary"]; ?></span>
                                      </div>
                                  </div>
                                  <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                      <div class="d-flex mb-3">
                                          <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                          <a class="btn btn-primary" href="job-detail.php">Apply Now</a>
                                      </div>
                                      <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                  </div>
                              </div>
                          </div>
                          <div class="job-item p-4 mb-4">
                              <div class="row g-4">
                                  <div class="col-sm-12 col-md-8 d-flex align-items-center">
                                      <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-5.jpg" alt="" style="width: 80px; height: 80px;">
                                      <div class="text-start ps-4">
                                          <h5 class="mb-3"><?php
                                          echo $row["designation"];
                                          ?></h5>
                                          <span class="text-truncate me-3"><i class="fa fa-map-marker-alt text-primary me-2"></i><?php echo $row["location"]; ?></span>
                                          <span class="text-truncate me-3"><i class="far fa-clock text-primary me-2"></i><?php echo $row["company"]; ?></span>
                                          <span class="text-truncate me-0"><i class="far fa-money-bill-alt text-primary me-2"></i><?php echo $row["salary"]; ?></span>
                                      </div>
                                  </div>
                                  <div class="col-sm-12 col-md-4 d-flex flex-column align-items-start align-items-md-end justify-content-center">
                                      <div class="d-flex mb-3">
                                          <a class="btn btn-light btn-square me-3" href=""><i class="far fa-heart text-primary"></i></a>
                                          <a class="btn btn-primary" href="job-detail.php">Apply Now</a>
                                      </div>
                                      <small class="text-truncate"><i class="far fa-calendar-alt text-primary me-2"></i>Date Line: 01 Jan, 2045</small>
                                  </div>
                              </div>
                          </div>
                          <a class="btn btn-primary py-3 px-5" href="">Browse More Jobs</a>
                      </div>
                      
                   
                         
                        
                      
                  </div>
              </div>
          </div>
      </div>

      </section>
    </div>
  </body>
</html>