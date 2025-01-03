<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />    
    <meta name="description" content="" />
    
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <title>JobJugaad</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/feather.css">
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <link rel="stylesheet" type="text/css" href="css/lc_lightbox.css">   
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="css/select.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="css/scrollbar.css">
    <link rel="stylesheet" type="text/css" href="css/datepicker.css">
    <link rel="stylesheet" type="text/css" href="css/flaticon.css"> 
    <link rel="stylesheet" type="text/css" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  
    <link rel="stylesheet" class="skin" type="text/css" href="css/skins-type/skin-6.css">
  
    <link rel="stylesheet" type="text/css" href="css/switcher.css">   
    <style>
  @media (max-width: 991px) {
    .row-cols-md-2 > * {
      flex: 0 0 50%;
      max-width: 50%;
    }
  }
  @media (max-width: 450px) {
    .twm-jobs-grid-style1 {
        width: 100%; /* Ensures each block takes full width */
    }
    .row > .col-lg-4,
    .row > .col-md-6 {
        flex: 0 0 100%; /* Each column takes full width */
        max-width: 100%; /* Ensures no column shares a row */
    }
}
@media (max-width: 767px) {
        .mobile-input {
            width: 120% !important; /* Increase width for mobile view */
        }
    }
</style>
</head>

<body>
<?php
include('header1.php');
?>
        
        <div class="page-content">
            <div class="wt-bnr-inr overlay-wraper bg-center" style="background-image:url(images/banner/1.jpg);">
                <div class="overlay-main site-bg-white opacity-01"></div>
                <div class="container">
                    <div class="wt-bnr-inr-entry">
                        <div class="banner-title-outer">
                            <div class="banner-title-name">
                                <h2 class="wt-title">The Most Exciting Jobs</h2>
                            </div>
                        </div>
                                                   
                        
                            <div>
                                <ul class="wt-breadcrumb breadcrumb-style-2">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Jobs Grid</li>
                                </ul>
                            </div>                     
                    </div>
                </div>
            </div>
         
            <div class="section-full p-t30 p-b10 m-b50" style="margin:30px;">
                <div class="container-fluid">
                    <div class="row">
                    <div class="col-lg-3 col-md-12 rightSidebar">
                                <div class="row w-100 gx-1 mb-3">
                                    <!-- Filter Button for Small Screens -->
                                    <div class="d-flex justify-content-center">
            <button class="btn btn-light d-lg-none w-100 mb-1" type="button" data-bs-toggle="collapse" data-bs-target="#filterSidebar" aria-expanded="false" aria-controls="filterSidebar" onclick="toggleFilterSidebar(this)">
                Filter Jobs <i class="fas fa-filter"></i>
            </button>
        </div>
                                </div>
                                <div class="side-bar collapse d-lg-block" id="filterSidebar">
                                    <div class="sidebar-elements search-bx">
                                        <form>
                                            <!-- Filter Row (Start) -->
                                            <div class="row">
                                                <!-- Job Type Filter -->
                                                <div class="col-12 col-md-6 col-lg-12">
                                                    <div class="twm-sidebar-ele-filter">
                                                        <h4 class="section-head-small mb-4">Job Type</h4>
                                                        <ul>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                                    <label class="form-check-label" for="exampleCheck1">Freelance</label>
                                                                </div>
                                                                <span class="twm-job-type-count">09</span>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck2">
                                                                    <label class="form-check-label" for="exampleCheck2">Full Time</label>
                                                                </div>
                                                                <span class="twm-job-type-count">07</span>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck3">
                                                                    <label class="form-check-label" for="exampleCheck3">Internship</label>
                                                                </div>
                                                                <span class="twm-job-type-count">15</span>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck4">
                                                                    <label class="form-check-label" for="exampleCheck4">Part Time</label>
                                                                </div>
                                                                <span class="twm-job-type-count">20</span>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck5">
                                                                    <label class="form-check-label" for="exampleCheck5">Temporary</label>
                                                                </div>
                                                                <span class="twm-job-type-count">22</span>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="checkbox" class="form-check-input" id="exampleCheck6">
                                                                    <label class="form-check-label" for="exampleCheck6">Volunteer</label>
                                                                </div>
                                                                <span class="twm-job-type-count">25</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>

                                                <!-- Date Posts Filter -->
                                                <div class="col-12 col-md-6 col-lg-12">
                                                    <div class="twm-sidebar-ele-filter">
                                                        <h4 class="section-head-small mb-4">Date Posts</h4>
                                                        <ul>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="exampleradio1">
                                                                    <label class="form-check-label" for="exampleradio1">Last hour</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="exampleradio2">
                                                                    <label class="form-check-label" for="exampleradio2">Last 24 hours</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="exampleradio3">
                                                                    <label class="form-check-label" for="exampleradio3">Last 7 days</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="exampleradio4">
                                                                    <label class="form-check-label" for="exampleradio4">Last 14 days</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="exampleradio5">
                                                                    <label class="form-check-label" for="exampleradio5">Last 30 days</label>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="form-check">
                                                                    <input type="radio" class="form-check-input" id="exampleradio6">
                                                                    <label class="form-check-label" for="exampleradio6">All</label>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Filter Row (End) -->
                                        </form>
                                    </div>
                                </div>
                            </div>


   
                        <div class="col-lg-9 col-md-12">
                            <div class="product-filter-wrap d-flex justify-content-center align-items-center">
                                <form class="woocommerce-ordering twm-filter-select w-100" method="get">
                                    <div class="row w-100 gx-1">
                                        <!-- Category Select -->
                                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                                        <select id="category-select" class="form-control bg-light border-0 shadow-none" style="color: #6c757d;">
                                            <option value="" disabled selected hidden>All Categories</option>
                                            <option>Web Designer</option>
                                            <option>Developer</option>
                                            <option>Accountant</option>
                                        </select>
                                        </div>

                                        <!-- Job Title or Keyword Input -->
                                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                                            <div class="input-group">
                                                <input id="job-title-input" type="text" class="form-control bg-light border-0 shadow-none" placeholder="Job Title or Keyword">
                                                <button class="btn btn-light" type="button"><i class="feather-search"></i></button>
                                            </div>
                                        </div>

                                        <!-- Location Input -->
                                        <div class="col-12 col-md-6 col-lg-4 mb-3">
                                            <div class="input-group">
                                                <input id="location-input" type="text" class="form-control bg-light border-0 shadow-none" placeholder="Search Location">
                                                <button class="btn btn-light" type="button"><i class="feather-map-pin"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3">
                                <!--Block one-->
                                <div class="col-lg-4 col-md-12 m-b30">

                                    <div class="twm-jobs-grid-style1">
                                        
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic1.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">1 days ago</span>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4>Senior Web Designer , Developer</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <a href="job-detail.html" class="btn btn-outline-primary btn-sm p-1">Browse Job</a>
                                       
                                            </div>
                                    </div>

                                </div>
                                <!--Block two-->
                                <div class="col-lg-4 col-md-12 m-b30">

                                    <div class="twm-jobs-grid-style1">
                                        
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic1.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">1 days ago</span>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4>Senior Web Designer , Developer</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <a href="job-detail.html" class="btn btn-outline-primary btn-sm p-1">Browse Job</a>
                                       
                                            </div>
                                    </div>

                                </div>

                                
                                <!--Block three-->
                                <div class="col-lg-4 col-md-12 m-b30">

                                    <div class="twm-jobs-grid-style1">
                                        
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic1.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">1 days ago</span>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4>Senior Web Designer , Developer</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <a href="job-detail.html" class="btn btn-outline-primary btn-sm p-1">Browse Job</a>
                                       
                                            </div>
                                    </div>

                                </div>
                                
                                 <!--Block Four-->
                                <div class="col-lg-4 col-md-12 m-b30">

                                    <div class="twm-jobs-grid-style1">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic4.jpg" alt="#">
                                        </div>
                                        
                                        <span class="twm-job-post-duration">2 days ago</span>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4 class="twm-job-title">Art Production Specialist and design</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            
                                        </div>
                                        <div class="twm-right-content">
                                            
                                           
                                            <a href="job-detail.html" class="btn btn-outline-primary btn-sm p-1">Browse Job</a>
                                        </div>
                                    </div>

                                </div>
                                
                                <!--Block Five-->
                                <div class="masonry-item col-lg-4 col-md-12 m-b30">
                                    
                                    <div class="twm-jobs-grid-style1">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic5.jpg" alt="#">
                                        </div>
                                        
                                        <span class="twm-job-post-duration">1 days ago</span>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4 class="twm-job-title">Recreation Fresher&amp; s Worker</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                           
                                        </div>
                                        <div class="twm-right-content">
                                          
                                            <a href="job-detail.html" class="btn btn-outline-primary btn-sm p-1">Browse Job</a>
                                        </div>
                                    </div>

                                </div>
                                
                                <!--Block Six-->
                                <div class="masonry-item col-lg-4 col-md-12 m-b30">
                                    <div class="twm-jobs-grid-style1">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic1.jpg" alt="#">
                                        </div>
                                        
                                        <span class="twm-job-post-duration">1 days ago</span>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4>Senior Web Designer , Developer</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                           
                                        </div>
                                        <div class="twm-right-content">
                                           
                                            <a href="job-detail.html" class="btn btn-outline-primary btn-sm p-1">Browse Job</a>
                                        </div>
                                    </div>
                                </div>

                                <!--Block Seven-->
                                <div class="col-lg-4 col-md-12 m-b30">

                                    <div class="twm-jobs-grid-style1">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic1.jpg" alt="#">
                                        </div>
                                        
                                        <span class="twm-job-post-duration">1 days ago</span>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4>Senior Web Designer , Developer</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            
                                        </div>
                                        <div class="twm-right-content">
                                            
                                           
                                            <a href="job-detail.html" class="btn btn-outline-primary btn-sm p-1">Browse Job</a>
                                        </div>
                                    </div>

                                </div>
                                
                                <!--Block Eight-->
                                <div class="col-lg-4 col-md-12 m-b30">

                                    <div class="twm-jobs-grid-style1">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic2.jpg" alt="#">
                                        </div>
                                        
                                        <span class="twm-job-post-duration">15 days ago</span>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4>Senior Rolling Stock Technician</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                           
                                        </div>
                                        <div class="twm-right-content">
                                           
                                            <a href="job-detail.html" class="btn btn-outline-primary btn-sm p-1">Browse Job</a>
                                        </div>
                                    </div>

                                </div>
                                
                                <!--Block Nine-->
                                <div class="masonry-item col-lg-4 col-md-12 m-b30">
                                    
                                    <div class="twm-jobs-grid-style1">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic3.jpg" alt="#">
                                        </div>
                                        
                                        <span class="twm-job-post-duration">6 Month ago</span>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4 class="twm-job-title">IT Department Manager</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <a href="job-detail.html" class="btn btn-outline-primary btn-sm p-1">Browse Job</a>
                                        </div>
                                    </div>   
                                </div>
                                
                                 <!--Block ten-->
                                <div class="col-lg-4 col-md-12 m-b30">

                                    <div class="twm-jobs-grid-style1">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic4.jpg" alt="#">
                                        </div>
                                        
                                        <span class="twm-job-post-duration">2 days ago</span>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.html" class="twm-job-title">
                                                <h4 class="twm-job-title">Art Production Specialist</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                           
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <a href="job-detail.html" class="btn btn-outline-primary btn-sm p-1">Browse Job</a>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="pagination-outer">
                        <div class="pagination-style1 d-flex justify-content-center">
                            <ul class="clearfix">
                                <li class="prev"><a href="javascript:;"><span> <i class="fa fa-angle-left"></i> </span></a></li>
                                <li><a href="javascript:;">1</a></li>
                                <li class="active"><a href="javascript:;">2</a></li>
                                <li><a href="javascript:;">3</a></li>
                                <li><a class="javascript:;" href="javascript:;"><i class="fa fa-ellipsis-h"></i></a></li>
                                <li><a href="javascript:;">5</a></li>
                                <li class="next"><a href="javascript:;"><span> <i class="fa fa-angle-right"></i> </span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>  
        </div> 
    </div><br>
<?php
include('footer.php');
?>
<script  src="js/jquery-3.6.0.min.js"></script>
<script  src="js/popper.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/magnific-popup.min.js"></script>
<script  src="js/waypoints.min.js"></script>
<script  src="js/counterup.min.js"></script>
<script  src="js/waypoints-sticky.min.js"></script>
<script  src="js/isotope.pkgd.min.js"></script>
<script  src="js/imagesloaded.pkgd.min.js"></script>
<script  src="js/owl.carousel.min.js"></script>
<script  src="js/theia-sticky-sidebar.js"></script>
<script  src="js/lc_lightbox.lite.js" ></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/jquery.scrollbar.js"></script>
<script  src="js/bootstrap-datepicker.js"></script>
<script  src="js/jquery.dataTables.min.js"></script>
<script  src="js/dataTables.bootstrap5.min.js"></script>
<script  src="js/chart.js"></script>
<script  src="js/bootstrap-slider.min.js"></script>
<script  src="js/swiper-bundle.min.js"></script>
<script  src="js/custom.js"></script>
<script  src="js/switcher.js"></script>
<script>
    function toggleFilterSidebar(button) {
        const filterSidebar = document.getElementById('filterSidebar');
        const isExpanded = button.getAttribute('aria-expanded') === 'true';

        if (isExpanded) {
            filterSidebar.classList.remove('show'); // Collapse the sidebar
            button.setAttribute('aria-expanded', 'false'); // Update the button attribute
        } else {
            filterSidebar.classList.add('show'); // Expand the sidebar
            button.setAttribute('aria-expanded', 'true'); // Update the button attribute
        }
    }
</script>

<div class="styleswitcher">
    <div class="styleswitcher-inner">
        <h6 class="switcher-title">Color Skin</h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="job-grida39b.html?theme=css/skin/skin-1"></a></li>
            <li><a class="theme-skin skin-2" href="job-grid61e7.html?theme=css/skin/skin-2"></a></li>
            <li><a class="theme-skin skin-3" href="job-gridcce5.html?theme=css/skin/skin-3"></a></li>
            <li><a class="theme-skin skin-4" href="job-grid13f7.html?theme=css/skin/skin-4"></a></li>
            <li><a class="theme-skin skin-5" href="job-grid19a6.html?theme=css/skin/skin-5"></a></li>
            <li><a class="theme-skin skin-6" href="job-gridfe5c.html?theme=css/skin/skin-6"></a></li>
            <li><a class="theme-skin skin-7" href="job-gridab47.html?theme=css/skin/skin-7"></a></li>
            <li><a class="theme-skin skin-8" href="job-grid5f8d.html?theme=css/skin/skin-8"></a></li>
            <li><a class="theme-skin skin-9" href="job-grid5663.html?theme=css/skin/skin-9"></a></li>
            <li><a class="theme-skin skin-10" href="job-grid28ac.html?theme=css/skin/skin-10"></a></li>    
        </ul>                   
    </div>    
</div>
</body>
</html>
