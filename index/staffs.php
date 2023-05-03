
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">
    <meta name="author" content="">

    <title>Scheduling System</title>

    <!-- CSS FILES -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/bootstrap-icons.css" rel="stylesheet">

    <link href="css/templatemo-kind-heart-charity.css" rel="stylesheet">
    <!--

TemplateMo 581 Kind Heart Charity

https://templatemo.com/tm-581-kind-heart-charity

-->
</head>

<body>

    <header class="site-header">
        <div class="container">
            <div class="row">

                <div class="col-lg-8 col-12 d-flex flex-wrap">
                    <p class="d-flex me-4 mb-0">
                        <i class="bi-geo-alt me-2"></i>
                       High Way Diplahan Zamboanga Sibugay
                    </p>

                    <p class="d-flex mb-0">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:info@company.com">
                            Diplahanchurch@gmail.com
                        </a>
                    </p>
                </div>

                <div class="col-lg-3 col-12 ms-auto d-lg-block d-none">
                    <ul class="social-icon">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-youtube"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-whatsapp"></a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </header>

    <nav class="navbar navbar-expand-lg bg-light shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="">
                <img src="images/diologo.jpg" class="logo img-fluid" alt="">
                <span>
                  Our lady of pilar Parish
                  <small>Diplahan church</small>
                </span>
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php#section_1">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php#section_2">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link smoothscroll" href="index.php#section_5">News</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link click-scroll" href="index.php#section_6">Contact</a>
                    </li>

                   
                 
                </ul>
            </div>
        </div>
    </nav>

    <main>

    <section class="section-padding">
            <div class="container">
                <div class="row">

                    <!-- Bootstrap Table with Header - Dark -->
              <div class="card">
              <div class="text-center">
              <h2 class="section-heading text-uppercase">Church Ministry</h2>
               </div>
                <div class="table-responsive text-nowrap">
                  <table class="table">
                  <thead class="table-align-list">
                    <thead class="table-dark">
                      <tr>
                       
                        <th>Name</th>
                        <th>Position</th>
                        <th>Profile</th>
                     
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                     
                    <?php
                $u=1;
                require_once "config.php"; 
                $result = mysqli_query($conn,"SELECT * FROM staff order by type ASC");
                    if (mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_array($result)) {
                            
?>
                
                
                    <tr>
                    
                  
                        <td><?php echo $row["staffname"]; ?></td>
                        <td><?php echo $row["position"]; ?></td>
                        <td><img class="mx-auto rounded-profile" width="80" heigth="50" src="../html//pictures/staff/<?php echo $row["picontainer"];?>" alt="..." /></td>
                    </tr>
           
<?php
                $u=$u+1;
            }
            }
            else{
            echo "No result found";
            }
?>
                      
                    
                      
                    </tbody>
                  
                  </table>
            
                </div>
              </div>
              <!--/ Bootstrap Table with Header Dark -->

                </div>
            </div>
        </section>
    </main>

    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 mb-4">
                    <img src="images/diologo.jpg" class="logo img-fluid" alt="">
                </div>

                <div class="col-lg-4 col-md-6 col-12 mb-4">
                    <h5 class="site-footer-title mb-3">Quick Links</h5>

                    <ul class="footer-menu">
                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Our Story</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Newsroom</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">our services</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Apostol of God</a></li>

                        <li class="footer-menu-item"><a href="#" class="footer-menu-link">Join us</a></li>
                    </ul>
                </div>

                <div class="col-lg-4 col-md-6 col-12 mx-auto">
                    <h5 class="site-footer-title mb-3">Contact Infomation</h5>

                    <p class="text-white d-flex mb-2">
                        <i class="bi-telephone me-2"></i>

                        <a href="phone: 09-453-950-062" class="site-footer-link">
                           09-453-950-062
                        </a>
                    </p>

                    <p class="text-white d-flex">
                        <i class="bi-envelope me-2"></i>

                        <a href="mailto:donate@charity.org" class="site-footer-link">
                            Diplahancurch@gmail.com
                        </a>
                    </p>

                    <p class="text-white d-flex mt-3">
                        <i class="bi-geo-alt me-2"></i>
                        High Way Diplahan Zamboanga Sibugay
                    </p>

                    <a href="#" class="custom-btn btn mt-3"></a>
                </div>
            </div>
        </div>

       
        
                </div>
            </div>
        </div>
    </footer>

    <!-- JAVASCRIPT FILES -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/counter.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>