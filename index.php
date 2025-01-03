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
    
 
    <title>JobJugad</title>
    
    
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

</head>

<body>
<?php
include('header.php');
?>

    <div class="loading-area">
        <div class="loading-box"></div>
        <div class="loading-pic">
            <div class="wrapper">
                <div class="cssload-loader"></div>
            </div>
        </div>
    </div>


	<div class="page-wraper">

        <div class="twm-all-demo-list-wrap">
            <div class="twm-all-demo-inner scrollbar-macosx">
            <a href="javascript:;" class="all-demo-close"></a>
                <ul class="twm-all-demo-list">
                    <li><a href="index.php"><img src="images/home-14/all-demo-pages/1.jpg"></a></li>
                    <li><a href="index-2.php"><img src="images/home-14/all-demo-pages/2.jpg"></a></li>
                    <li><a href="index-3.php"><img src="images/home-14/all-demo-pages/3.jpg"></a></li>
                    <li><a href="index-4.php"><img src="images/home-14/all-demo-pages/4.jpg"></a></li>
                    <li><a href="index-5.php"><img src="images/home-14/all-demo-pages/5.jpg"></a></li>
                    <li><a href="index-6.php"><img src="images/home-14/all-demo-pages/6.jpg"></a></li>
                    <li><a href="index-7.php"><img src="images/home-14/all-demo-pages/7.jpg"></a></li>
                    <li><a href="index-8.php"><img src="images/home-14/all-demo-pages/8.jpg"></a></li>
                    <li><a href="index-9.php"><img src="images/home-14/all-demo-pages/9.jpg"></a></li>
                    <li><a href="index-10.php"><img src="images/home-14/all-demo-pages/10.jpg"></a></li>
                    <li><a href="index-11.php"><img src="images/home-14/all-demo-pages/11.jpg"></a></li>
                    <li><a href="index-12.php"><img src="images/home-14/all-demo-pages/12.jpg"></a></li>
                    <li><a href="index-13.php"><img src="images/home-14/all-demo-pages/13.jpg"></a></li>
                    <li><a href="index-14.php"><img src="images/home-14/all-demo-pages/14.jpg"></a></li>
                    <li><a href="index-15.php"><img src="images/home-14/all-demo-pages/15.jpg"></a></li>
                    <li><a href="index-16.php"><img src="images/home-14/all-demo-pages/16.jpg"></a></li>
                    <li><a href="index-17.php"><img src="images/home-14/all-demo-pages/17.jpg"></a></li>
                    <li><a href="index-18.php"><img src="images/home-14/all-demo-pages/18.jpg"></a></li>
                </ul>
            </div>                                                                
        </div>


        <div class="page-content">

  
            <div class="twm-home3-banner-section site-bg-white bg-cover" style="background-image:url(images/home-3/banner1.jpg)">
                <div class="twm-home3-inner-section">
                    <div class="twm-bnr-mid-section">
                        <div class="twm-bnr-title-large">Find Top IT Jobs</div>
                        <div class="twm-bnr-title-light">For talent Developers</div>
                        <div class="twm-bnr-discription">Type your keyword, then click search to find your perfect job.</div>

                        <div class="twm-bnr-search-bar">
                            <form>
                                <div class="row">
                                 
                                    <div class="form-group col-xl-3 col-lg-6 col-md-6">
                                        <label>What</label>
                                        <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-Job_Title" data-bv-field="size">
                                            <option disabled selected value="">Select Category</option>
                                            <option selected>Job Title</option>
                                            <option>Web Designer</option>
                                            <option>Developer</option>
                                            <option>Acountant</option>
                                        </select>
                                    </div>

                                  
                                    <div class="form-group col-xl-4 col-lg-6 col-md-6">
                                        <label>Type</label>
                                        <select class="wt-search-bar-select selectpicker"  data-live-search="true" title="" id="j-All_Category" data-bv-field="size">
                                            <option disabled selected value="">Select Category</option>
                                            <option selected>All Category</option>
                                            <option>Web Designer</option>
                                            <option>Developer</option>
                                            <option>Acountant</option>
                                        </select>
                                    </div>

                            
                                    <div class="form-group col-xl-3 col-lg-6 col-md-6">
                                        <label>Location</label>
                                        <div class="twm-inputicon-box">
                                            <input name="username" type="text" required class="form-control" placeholder="Location">
                                            <i class="twm-input-icon fas fa-map-marker-alt"></i>
                                        </div>
                                    </div>

                                 
                                    <div class="form-group col-xl-2 col-lg-6 col-md-6">
                                        <button type="button" class="site-button">Find Job</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="twm-bnr-popular-search">
                            <span class="twm-title">Popular Searches:</span>
                            <a href="job-list.php">Developer</a> ,
                            <a href="job-list.php">Designer</a> ,
                            <a href="job-list.php">Architect</a> ,
                            <a href="job-list.php">Engineer</a> ...
                        </div>
                    </div>
                    <div class="twm-bnr-bottom-section">
                        <div class="twm-browse-jobs">7,000+ Browse Jobs</div>
                        <div class="twm-bnr-blocks-wrap">
                        
                            <div class="twm-bnr-blocks twm-bnr-blocks-position-1">
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-pink">
                                        <span class="counter">12</span>K+
                                    </div>
                                    <p class="icon-content-info">Companies Jobs</p>
                                </div>
                            </div>

                            
                            <div class="twm-bnr-blocks twm-bnr-blocks-position-2">
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-yellow">
                                        <span class="counter">98</span> +
                                    </div>
                                    <p class="icon-content-info">Job For Countries </p>
                                </div>
                            </div>

                            <div class="twm-bnr-blocks-3 twm-bnr-blocks-position-3">
                                <div class="twm-pics">
                                    <span><img src="images/main-slider/slider1/user/u-1.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider1/user/u-2.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider1/user/u-3.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider1/user/u-4.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider1/user/u-5.jpg" alt=""></span>
                                    <span><img src="images/main-slider/slider1/user/u-6.jpg" alt=""></span>
                                </div>
                                <div class="twm-content">
                                    <div class="tw-count-number text-clr-green">
                                        <span class="counter">3</span>K+
                                    </div>
                                    <p class="icon-content-info">Jobs Done</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
         

            
            <div class="section-full p-t120 p-b90 site-bg-white twm-companies-wrap">
                  
               
                <div class="section-head center wt-small-separator-outer">
                    <div class="wt-small-separator site-text-primary">
                       <div>Top Companies</div>                                
                    </div>
                    <h2 class="wt-title">Get hired in top companies</h2>
                </div>                  
                

                <div class="container">
                    <div class="section-content">
                        <div class="owl-carousel home-client-carousel3 owl-btn-vertical-center">
                        
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="employer-list.php"><img src="images/client-logo2/w1.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="employer-list.php"><img src="images/client-logo2/w2.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="employer-list.php"><img src="images/client-logo2/w3.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="employer-list.php"><img src="images/client-logo2/w4.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="employer-list.php"><img src="images/client-logo2/w5.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="employer-list.php"><img src="images/client-logo2/w6.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="employer-list.php"><img src="images/client-logo2/w1.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="employer-list.php"><img src="images/client-logo2/w2.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="employer-list.php"><img src="images/client-logo2/w3.png" alt=""></a></div>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="ow-client-logo">
                                    <div class="client-logo client-logo-media">
                                    <a href="employer-list.php"><img src="images/client-logo2/w5.png" alt=""></a></div>
                                </div>
                            </div>                            
                        </div>
                    </div>
                    <div class="twm-company-approch2-outer">
                        <div class="twm-company-approch2">
                            <div class="row">
    
                           
                                <div class="col-lg-4 col-md-4">
                                    <div class="counter-outer-two">
                                        <div class="icon-content">
                                            <div class="tw-count-number site-text-black">
                                                <span class="counter">5</span>M+</div>
                                            <p class="icon-content-info">Million daily active users</p>
                                        </div>
                                    </div>
                                </div>
    
                               
                                <div class="col-lg-4 col-md-4">
                                    <div class="counter-outer-two">
                                        <div class="icon-content">
                                            <div class="tw-count-number site-text-black">
                                                <span class="counter">9</span>K+</div>
                                            <p class="icon-content-info">Open job positions</p>
                                        </div>
                                    </div>
                                </div>
    
                                
                                <div class="col-lg-4 col-md-4">
                                    <div class="counter-outer-two">
                                        <div class="icon-content">
                                            <div class="tw-count-number site-text-black">
                                                <span class="counter">2</span>M+</div>
                                            <p class="icon-content-info">Million stories shared</p>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>
           

         
            <div class="section-full p-t120 p-b90 site-bg-gray twm-how-it-work-area">
                        
                <div class="container">

                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div>Working Process</div>                                
                        </div>
                        <h2 class="wt-title">How It Works</h2>
                        
                    </div>                  
                    

                    <div class="twm-how-it-work-section3">
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps3">
                                    <div class="twm-w-pro-top">
                                        <span class="twm-large-number  text-clr-sky">01</span>
                                        <div class="twm-media bg-clr-sky">
                                            <span><img src="images/work-process/icon1.png" alt="icon1"></span>
                                        </div>
                                    </div>
                                    <h4 class="twm-title">Register Your Account</h4>
                                    <p>You need to create an account to find the best and preferred job.</p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps3">
                                    <div class="twm-w-pro-top">
                                        <span class="twm-large-number text-clr-pink">02</span>
                                        <div class="twm-media bg-clr-pink">
                                            <span><img src="images/work-process/icon2.png" alt="icon1"></span>
                                        </div>
                                    </div>
                                    <h4 class="twm-title">Apply For Dream Job</h4>
                                    <p>You need to create an account to find the best and preferred job.</p>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-6 col-md-6">
                                <div class="twm-w-process-steps3">
                                    <div class="twm-w-pro-top">
                                        <span class="twm-large-number  text-clr-green">03</span>
                                        <div class="twm-media  bg-clr-green">
                                            <span><img src="images/work-process/icon3.png" alt="icon1"></span>
                                        </div>
                                    </div>
                                    <h4 class="twm-title">Upload Your Resume</h4>
                                    <p>You need to create an account to find the best and preferred job.</p>
                                </div>
                            </div>

                        </div>
                    </div>                  
                </div>

            </div>   
           

          
            <div class="section-full p-t120 p-b90 site-bg-white twm-featured-city-area">
                        
                <div class="container">
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div>Featured Cities</div>                                
                        </div>
                        <h2 class="wt-title">Browse job offers by 
                            popular locations
                        </h2>
                    </div>                  
                   

                    <div class="twm-featured-city-section">
                        <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-12">
                                <div class="twm-featured-city twm-large-block">
                                    <div class="twm-media">
                                        <img src="images/featured-cities/city1.jpg" alt="">
                                        <div class="twm-city-info">
                                            <div class="twm-city-jobs">125 Jobs</div>
                                            <h4 class="twm-title"><a href="job-list.php">New York City</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="twm-featured-city">
                                            <div class="twm-media">
                                                <img src="images/featured-cities/city2.jpg" alt="">
                                                <div class="twm-city-info">
                                                    <div class="twm-city-jobs">190 Jobs</div>
                                                    <h4 class="twm-title"><a href="job-list.php">Dubai</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="twm-featured-city">
                                            <div class="twm-media">
                                                <img src="images/featured-cities/city3.jpg" alt="">
                                                <div class="twm-city-info">
                                                    <div class="twm-city-jobs">220 Jobs</div>
                                                    <h4 class="twm-title"><a href="job-list.php">Shanghai</a></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>                  
                </div>
            </div>   
       
            <div class="section-full p-t120 p-b90 site-bg-gray twm-bg-ring-wrap2">
                <div class="twm-bg-ring-right"></div>
                <div class="twm-bg-ring-left"></div>
                <div class="container">

                    <div class="wt-separator-two-part">
                        <div class="row wt-separator-two-part-row">
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-left">
                               
                                <div class="section-head left wt-small-separator-outer">
                                    <div class="wt-small-separator site-text-primary">
                                    <div>All Jobs Post</div>                                
                                    </div>
                                    <h2 class="wt-title">Find Your Career You Deserve it</h2>
                                </div>                  
                                
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-12 wt-separator-two-part-right text-right">
                                <a href="job-list.php" class=" site-button">Browse All Jobs</a>
                            </div>
                        </div>
                    </div>
                   
                    <div class="section-content">
                       <div class="twm-jobs-grid-wrap">
                           <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="twm-jobs-grid-style1  m-b30">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic1.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">1 days ago</span>
                                        <div class="twm-jobs-category green"><span class="twm-bg-green">New</span></div>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.php" class="twm-job-title">
                                                <h4>Senior Web Designer , Developer</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <div class="twm-jobs-amount">$2000 - $2500 <span>/ Month</span></div>
                                            <a href="job-detail.php" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="twm-jobs-grid-style1 m-b30">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic2.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">15 days ago</span>
                                        <div class="twm-jobs-category green"><span class="twm-bg-brown">Intership</span></div>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.php" class="twm-job-title">
                                                <h4>Senior Rolling Stock Technician</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                        </div>
                                        <div class="twm-right-content">
                                            <div class="twm-jobs-amount">$7 <span>/ Hour</span></div>
                                            <a href="job-detail.php" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="twm-jobs-grid-style1  m-b30">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic3.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">6 Month ago</span>
                                        <div class="twm-jobs-category green"><span class="twm-bg-purple">Fulltime</span></div>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.php" class="twm-job-title">
                                                <h4 class="twm-job-title">IT Department Manager</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                        </div>
                                        <div class="twm-right-content">
                                            
                                            <div class="twm-jobs-amount">$2000 - $2500 <span>/ Month</span></div>
                                            <a href="job-detail.php" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="twm-jobs-grid-style1  m-b30">
                                        <div class="twm-media">
                                            <img src="images/jobs-company/pic5.jpg" alt="#">
                                        </div>
                                        <span class="twm-job-post-duration">1 days ago</span>
                                        <div class="twm-jobs-category green"><span class="twm-bg-golden">Temporary</span></div>
                                        <div class="twm-mid-content">
                                            <a href="job-detail.php" class="twm-job-title">
                                                <h4 class="twm-job-title">Recreation & Fitness Worker</h4>
                                            </a>
                                            <p class="twm-job-address">1363-1385 Sunset Blvd Los Angeles, CA 90026, USA</p>
                                            <a href="https://themeforest.net/user/thewebmax/portfolio" class="twm-job-websites site-text-primary">https://thewebmax.com</a>
                                        </div>
                                        <div class="twm-right-content">
                                            <div class="twm-jobs-amount">$500 - $1000 <span>/ Month</span></div>
                                            <a href="job-detail.php" class="twm-jobs-browse site-text-primary">Browse Job</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                           
                       </div>
                    </div>
                   
                </div>
            </div>
    
            <div class="section-full p-t120 p-b90 site-bg-white">
                <div class="container">
                   
                  
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div>Candidates</div>                                
                        </div>
                        <h2 class="wt-title">Featured Candidates</h2>
                        
                    </div>              


                    <div class="section-content">
                        <div class="twm-blog-post-3-outer-wrap">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-6 col-md-12 col-sm-12">
                            
                                    <div class="twm-candidates-list-style1">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic1.jpg" alt="#">
                                            </div>
                                            <div class="twm-candidates-tag"><span>Featured</span></div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="candidate-detail.php" class="twm-job-title">
                                                <h4>Wanda Montgomery </h4>
                                            </a>
                                            <p>Charted Accountant</p>
                                            
                                            <div class="twm-fot-content">
                                                <div class="twm-left-info">
                                                   <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                                   <div class="twm-jobs-vacancies">$20<span>/ Day</span></div>
                                                </div>
                                                <div class="twm-right-btn">
                                                    <a href="candidate-detail.php" class="twm-view-prifile site-text-primary">View Profile</a>
                                                </div>
                                           </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  
                                    <div class="twm-candidates-list-style1">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic2.jpg" alt="#">
                                            </div>
                                            <div class="twm-candidates-tag"><span>Featured</span></div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="candidate-detail.php" class="twm-job-title">
                                                <h4>Peter Hawkins</h4>
                                            </a>
                                            <p>Medical Professed</p>
                                            
                                            <div class="twm-fot-content">
                                                <div class="twm-left-info">
                                                   <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                                   <div class="twm-jobs-vacancies">$7<span>/ Hour</span></div>
                                                </div>
                                                <div class="twm-right-btn">
                                                    <a href="candidate-detail.php" class="twm-view-prifile site-text-primary">View Profile</a>
                                                </div>
                                           </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                   
                                    <div class="twm-candidates-list-style1">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic3.jpg" alt="#">
                                            </div>
                                            <div class="twm-candidates-tag"><span>Featured</span></div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="candidate-detail.php" class="twm-job-title">
                                                <h4>Ralph Johnson  </h4>
                                            </a>
                                            <p>Bank Manger</p>
                                            
                                            <div class="twm-fot-content">
                                                <div class="twm-left-info">
                                                   <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                                   <div class="twm-jobs-vacancies">$180<span>/ Day</span></div>
                                                </div>
                                                <div class="twm-right-btn">
                                                    <a href="candidate-detail-2.php" class="twm-view-prifile site-text-primary">View Profile</a>
                                                </div>
                                           </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                  
                                    <div class="twm-candidates-list-style1">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic4.jpg" alt="#">
                                            </div>
                                            <div class="twm-candidates-tag"><span>Featured</span></div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="candidate-detail.php" class="twm-job-title">
                                                <h4>Randall Henderson </h4>
                                            </a>
                                            <p>IT Contractor</p>
                                            
                                            <div class="twm-fot-content">
                                                <div class="twm-left-info">
                                                   <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                                   <div class="twm-jobs-vacancies">$90<span>/ Week</span></div>
                                                </div>
                                                <div class="twm-right-btn">
                                                    <a href="candidate-detail.php" class="twm-view-prifile site-text-primary">View Profile</a>
                                                </div>
                                           </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                   
                                    <div class="twm-candidates-list-style1">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic5.jpg" alt="#">
                                            </div>
                                            <div class="twm-candidates-tag"><span>Featured</span></div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="candidate-detail.php" class="twm-job-title">
                                                <h4>Randall Warren</h4>
                                            </a>
                                            <p>Digital & Creative</p>
                                            
                                            <div class="twm-fot-content">
                                                <div class="twm-left-info">
                                                   <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                                   <div class="twm-jobs-vacancies">$95<span>/ Day</span></div>
                                                </div>
                                                <div class="twm-right-btn">
                                                    <a href="candidate-detail.php" class="twm-view-prifile site-text-primary">View Profile</a>
                                                </div>
                                           </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-12 col-sm-12">
                                   
                                    <div class="twm-candidates-list-style1">
                                        <div class="twm-media">
                                            <div class="twm-media-pic">
                                               <img src="images/candidates/pic6.jpg" alt="#">
                                            </div>
                                            <div class="twm-candidates-tag"><span>Featured</span></div>
                                        </div>
                                        <div class="twm-mid-content">
                                            <a href="candidate-detail.php" class="twm-job-title">
                                                <h4>Christina Fischer </h4>
                                            </a>
                                            <p>Charity & Voluntary</p>
                                            
                                            <div class="twm-fot-content">
                                                <div class="twm-left-info">
                                                   <p class="twm-candidate-address"><i class="feather-map-pin"></i>New York</p>
                                                   <div class="twm-jobs-vacancies">$19<span>/ Hour</span></div>
                                                </div>
                                                <div class="twm-right-btn">
                                                    <a href="candidate-detail.php" class="twm-view-prifile site-text-primary">View Profile</a>
                                                </div>
                                           </div>
                                        </div>
                                        
                                    </div>
                                </div>                                                         
                            </div>
                            <div class="text-center m-b30">
                                <a href="candidate-list.php" class=" site-button">All  Candidates</a>
                           </div>
                        </div>
                    </div>
                   
                </div>
            </div>
           
            <div class="section-full p-t120 p-b90 site-bg-light-purple">
                <div class="container">
                   
                  
                    <div class="section-head center wt-small-separator-outer">
                        <div class="wt-small-separator site-text-primary">
                           <div>Our Blogs</div>                                
                        </div>
                        <h2 class="wt-title">Latest Article</h2>
                        
                    </div>                  
                   


                    <div class="section-content">
                        <div class="twm-blog-post-3-outer-wrap">
                            <div class="row d-flex justify-content-center">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    
                                    <div class="blog-post twm-blog-post-3-outer">
                                        <div class="wt-post-media">
                                            <a href="blog-single.php"><img src="images/blog/latest/bg10.jpg" alt=""></a>
                                        </div>                                    
                                        <div class="wt-post-info">
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">March 05, 2023</li>
                                                    <li class="post-author">By <a href="candidate-detail.php">Mark Petter</a></li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-title ">
                                                <h4 class="post-title">
                                                    <a href="blog-single.php">How to convince recruiters.</a>
                                                </h4>
                                            </div>
                                                                                  
                                        </div>                                
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    
                                    <div class="blog-post twm-blog-post-3-outer">
                                        <div class="wt-post-media">
                                            <a href="blog-single.php"><img src="images/blog/latest/bg11.jpg" alt=""></a>
                                        </div>                                    
                                        <div class="wt-post-info">
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">March 05, 2023</li>
                                                    <li class="post-author">By <a href="candidate-detail.php">David Wish</a></li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-title ">
                                                <h4 class="post-title">
                                                    <a href="blog-single.php">5 things to know about the March.</a>
                                                </h4>
                                            </div>
                                        </div>                                
                                    </div>
                                </div>
                                
                                <div class="col-lg-4 col-md-6 col-sm-12">
                          
                                    <div class="blog-post twm-blog-post-3-outer">
                                        <div class="wt-post-media">
                                            <a href="blog-single.php"><img src="images/blog/latest/bg12.jpg" alt=""></a>
                                        </div>                                    
                                        <div class="wt-post-info">
                                            <div class="wt-post-meta ">
                                                <ul>
                                                    <li class="post-date">March 05, 2023</li>
                                                    <li class="post-author">By <a href="candidate-detail.php">Mike Doe</a></li>
                                                </ul>
                                            </div>
                                            <div class="wt-post-title ">
                                                <h4 class="post-title">
                                                    <a href="blog-single.php">Job Board is the most important</a>
                                                </h4>
                                            </div>
                                        </div>                                
                                    </div>
                                </div>                                                        
                            </div>
                        </div>
                    </div>                   
                </div>
            </div>           
        </div>
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


<div class="styleswitcher">

    
    <div class="styleswitcher-inner">
    
        <h6 class="switcher-title">Color Skin</h6>
        <ul class="color-skins">
            <li><a class="theme-skin skin-1" href="index-3a39b.php?theme=css/skin/skin-1"></a></li>
            <li><a class="theme-skin skin-2" href="index-361e7.php?theme=css/skin/skin-2"></a></li>
            <li><a class="theme-skin skin-3" href="index-3cce5.php?theme=css/skin/skin-3"></a></li>
            <li><a class="theme-skin skin-4" href="index-313f7.php?theme=css/skin/skin-4"></a></li>
            <li><a class="theme-skin skin-5" href="index-319a6.php?theme=css/skin/skin-5"></a></li>
            <li><a class="theme-skin skin-6" href="index-3fe5c.php?theme=css/skin/skin-6"></a></li>
            <li><a class="theme-skin skin-7" href="index-3ab47.php?theme=css/skin/skin-7"></a></li>
            <li><a class="theme-skin skin-8" href="index-35f8d.php?theme=css/skin/skin-8"></a></li>
            <li><a class="theme-skin skin-9" href="index-35663.php?theme=css/skin/skin-9"></a></li>
            <li><a class="theme-skin skin-10" href="index-328ac.php?theme=css/skin/skin-10"></a></li>           
        </ul>                   
    </div>    
</div>
</body>
</html>
