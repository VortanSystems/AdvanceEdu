

<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

  @extends('layouts.app')

@section('content')
   <?php


      $get_sys_data=DB::select('select * from system_settings_general ');

      $metatitle=$get_sys_data[0]->metatitle;
      $metakeywords=$get_sys_data[0]->metakeywords;
      $metadescription=$get_sys_data[0]->metadescription;
      $metafavicon=$get_sys_data[0]->metafavicon;
      $metalogo=$get_sys_data[0]->metalogo;
      $metablacklogo=$get_sys_data[0]->meta_black_logo;
      $metaimage=$get_sys_data[0]->metaimage;
      $copyrighttext=$get_sys_data[0]->copyright_text;
      $sitebrief=$get_sys_data[0]->site_brief;
      $sitemission=$get_sys_data[0]->site_mission;
      $address=$get_sys_data[0]->address;
      $sitephone=$get_sys_data[0]->site_phone;
      $sitename=$get_sys_data[0]->site_name;
      $support_email=$get_sys_data[0]->support_email;
      $cardtttitlea=$get_sys_data[0]->landing_card_title_1;
      $cardtttexta=$get_sys_data[0]->landing_card_text_1;
      $cardttimage=$get_sys_data[0]->landing_card_image_1;

      $cardtttitleb=$get_sys_data[0]->landing_card_title_2;
      $cardtttextb=$get_sys_data[0]->landing_card_text_2;
      $cardttimagb=$get_sys_data[0]->landing_card_image_2;

      $cardtttitlec=$get_sys_data[0]->landing_card_title_3;
      $cardtttextc=$get_sys_data[0]->landing_card_text_3;
      $cardttimagc=$get_sys_data[0]->landing_card_image_3;

      $slider_one_image=$get_sys_data[0]->slider_one_image;
      $slider_onesmall_maintitle=$get_sys_data[0]->slider_one_title;
      $slider_onelarge_maintitle=$get_sys_data[0]->slider_one_title_large;
      $slider_one_description=$get_sys_data[0]->slider_one_sub_title;
      $slider_one_buttonone_text=$get_sys_data[0]->slider_one_button_1_text;
      $slider_one_buttonone_link= $get_sys_data[0]->slider_one_button_1_link; 
      $slider_one_buttontwo_text=$get_sys_data[0]->slider_one_button_2_text;
      $slider_one_buttontwo_link=$get_sys_data[0]->slider_one_button_2_link;


      $slider_two_image=$get_sys_data[0]->slider_two_image;
      $slider_twosmall_maintitle=$get_sys_data[0]->slider_two_title;
      $slider_twolarge_maintitle=$get_sys_data[0]->slider_two_title_large;
      $slider_two_description=$get_sys_data[0]->slider_two_sub_title;
      $slider_two_buttontwo_text=$get_sys_data[0]->slider_two_button_1_text;
      $slider_two_button_one_link= $get_sys_data[0]->slider_two_button_1_link; 
      $slider_two_buttontwo_text=$get_sys_data[0]->slider_two_button_2_text;
      $slider_two_buttontwo_link=$get_sys_data[0]->slider_two_button_2_link;

      $slider_three_image=$get_sys_data[0]->slider_three_image;
      $slider_threesmall_maintitle=$get_sys_data[0]->slider_three_title;
      $slider_threelarge_maintitle=$get_sys_data[0]->slider_three_title_large;
      $slider_three_description=$get_sys_data[0]->slider_three_sub_title;
      $slider_three_buttonthree_text=$get_sys_data[0]->slider_three_button_1_text;
      $slider_three_buttonthree_link= $get_sys_data[0]->slider_three_button_1_link; 
      $slider_three_buttontwo_text=$get_sys_data[0]->slider_three_button_2_text;
      $slider_three_buttontwo_link=$get_sys_data[0]->slider_three_button_2_link;

      ?>


<head>
<title><?php echo$metatitle;?></title>
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="icon" href="uploads/meta/<?php echo$metafavicon;?>" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="uploads/meta/<?php echo$metafavicon;?>" /> 

 <meta name="twitter:card" content="summary_large_image"/>
  <meta name="twitter:image:src" content="uploads/meta/<?php echo$metaimage;?>">
  <meta property="og:image" content="uploads/meta/<?php echo$metaimage;?>">
  <meta name="twitter:title" content="<?php echo$metatitle;?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
   <meta name="keywords" content="<?php echo$metakeywords;?>">
  <meta name="description" content="<?php echo$metadescription;?>">


    
    <!-- MOBILE SPECIFIC ============================================= -->

    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
    
    <!-- All PLUGINS CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/assets.css') }}">
    
    <!-- TYPOGRAPHY ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/typography.css') }}">
    
    <!-- SHORTCODES ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/shortcodes/shortcodes.css') }}">
    
    <!-- STYLESHEETS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link class="skin" rel="stylesheet" type="text/css" href="{{ asset('assets/css/color/color-1.css') }}">
    
    <!-- REVOLUTION SLIDER CSS ============================================= -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/layers.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/settings.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/vendors/revolution/css/navigation.css') }}">
    <!-- REVOLUTION SLIDER END -->  
</head>
<body id="bg">
<div class="page-wraper">
<div id="loading-icon-bx"></div>
    <!-- Header Top ==== -->
    <header style="background-color: black;" class="header rs-nav header-transparent">
      

                    <?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

{

// Mobile Display

    ?>


    <?php
} else

{?>

  <div class="top-bar">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="topbar-left">
                        <ul>
                            <li><a><i class="fa fa-question-circle"></i>Ask a Question</a></li>
                            <li><a href="javascript:;"><i class="fa fa-envelope-o"></i><?php echo$support_email;?></a></li>
                        </ul>
                    </div>
                    <div class="topbar-right">
                        <ul>
                         
                            <li><a href="login">Login</a></li>
                            <li><a href="register">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>


    <?php } ?>
        <div class="sticky-header navbar-expand-lg">
            <div class="menu-bar clearfix">
                <div class="container clearfix">
                    <!-- Header Logo ==== -->
                    <div class="menu-logo">
                        <a href="/"><img src="uploads/meta/<?php echo$metalogo;?>" alt=""></a>
                    </div>
                    <!-- Mobile Nav Button ==== -->
                    <button class="navbar-toggler collapsed menuicon justify-content-end" type="button" data-toggle="collapse" data-target="#menuDropdown" aria-controls="menuDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- Author Nav ==== -->
                    <div class="secondary-menu">
                        <div class="secondary-inner">
                            <ul>
                                <li><a href="javascript:;" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="javascript:;" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="javascript:;" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                <!-- Search Button ==== -->
                                <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form action="#">
                            <input name="search" value="" type="text" class="form-control" placeholder="Find A Course...">
                            <span><i class="ti-search"></i></span>
                        </form>
                        <span id="search-remove"><i class="ti-close"></i></span>
                    </div>
                    <!-- Navigation Menu ==== -->
                    <div class="menu-links navbar-collapse collapse justify-content-start" id="menuDropdown">
                        <div class="menu-logo">

<!-------------------------------------------------Logo White----------------------------------->                        
                           
 <a href="/"><img src="uploads/meta/<?php echo$metablacklogo;?>" alt=""></a>

<!-------------------------------------------------Logo White----------------------------------->

                        </div>
                        <ul class="nav navbar"> 

                          
                            <li class="active"><a href="/">Home</a></li>

                            <li><a href="/our-courses">Courses</a></li>

                            <li><a href="/contact_us">Contact Us</a></li>

                            <li><a href="/our_library">Library</a></li>

                            <li><a href="/our_gallery">Gallery</a></li>

                            <li><a href="/our_events">Events</a></li>

                            <li><a href="/latest_news">News</a></li>
                    <?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

{

// Mobile Display

    ?>
<li><a href="/login">Login</a></li>

                            <li><a href="/register">Register</a></li>

    <?php
} else

{?>


<?php }?>



















                          
                         
                        </ul>
                        <div class="nav-social-link">
                            <a href="javascript:;"><i class="fa fa-facebook"></i></a>
                            <a href="javascript:;"><i class="fa fa-google-plus"></i></a>
                            <a href="javascript:;"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                    <!-- Navigation Menu END ==== -->
                </div>
            </div>
        </div>
    </header>
    <!-- Header Top END ==== -->
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        



































<!-------------------------------------------------------------------->




























































        <!-------------------------------------------------------------->






































        <!-- Main Slider -->
        
    
 

    <!-- Content END-->
    <!-- Footer ==== -->
    <footer>
        <div class="footer-top">
            <div class="pt-exebar">
                <div class="container">
                    <div class="d-flex align-items-stretch">
                        <div class="pt-logo mr-auto">
                            <a href="/"><img src="uploads/meta/<?php echo$metalogo;?>" alt=""/></a>
                        </div>
                        <div class="pt-social-link">
                            <ul class="list-inline m-a0">
                                <li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="pt-btn-join">
                            <a href="#" class="btn ">Join Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">Sign Up For A Newsletter</h5>
                            <p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                            <div class="subscribe-form m-b20">
                                <form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
                                    <div class="ajax-message"></div>
                                    <div class="input-group">
                                        <input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
                                        <span class="input-group-btn">
                                            <button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
                                        </span> 
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-5 col-md-7 col-sm-12">
                        <div class="row">
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="widget footer_widget">
                                    <h5 class="footer-title">Company</h5>
                                    <ul>
                                        <li><a href="index">Home</a></li>
                                        <li><a href="about-1">About</a></li>
                                        <li><a href="faq-1">FAQs</a></li>
                                        <li><a href="contact-1">Contact</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="widget footer_widget">
                                    <h5 class="footer-title">Get In Touch</h5>
                                    <ul>
                                        <li><a href="http://educhamp.themetrades.com/admin/index">Dashboard</a></li>
                                        <li><a href="blog-classic-grid">Blog</a></li>
                                        <li><a href="portfolio">Portfolio</a></li>
                                        <li><a href="event">Event</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-4 col-lg-4 col-md-4 col-sm-4">
                                <div class="widget footer_widget">
                                    <h5 class="footer-title">Courses</h5>
                                    <ul>
                                        <li><a href="courses">Courses</a></li>
                                        <li><a href="courses-details">Details</a></li>
                                        <li><a href="membership">Membership</a></li>
                                        <li><a href="profile">Profile</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                        <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title">Our Gallery</h5>
                            <ul class="magnific-image">
                                <li><a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic1.jpg" alt=""></a></li>
                                <li><a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic2.jpg" alt=""></a></li>
                                <li><a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic3.jpg" alt=""></a></li>
                                <li><a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic4.jpg" alt=""></a></li>
                                <li><a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic5.jpg" alt=""></a></li>
                                <li><a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic6.jpg" alt=""></a></li>
                                <li><a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic7.jpg" alt=""></a></li>
                                <li><a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic8.jpg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>

<!-- External JavaScripts -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/popper.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap-select/bootstrap-select.min.js')}}"></script>
<script src="{{ asset('assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js')}}"></script>
<script src="assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="assets/vendors/counter/waypoints-min.js"></script>
<script src="assets/vendors/counter/counterup.min.js"></script>
<script src="assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="assets/vendors/masonry/masonry.js"></script>
<script src="assets/vendors/masonry/filter.js"></script>
<script src="assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="assets/js/functions.js"></script>
<script src="assets/js/contact.js"></script>
<script src='assets/vendors/switcher/switcher.js'></script>
<!-- Revolution JavaScripts Files -->
<script src="assets/vendors/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="assets/vendors/revolution/js/jquery.themepunch.revolution.min.js"></script>
<!-- Slider revolution 5.0 Extensions  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

</body>

</html>

<script>
jQuery(document).ready(function() {
    var ttrevapi;
    var tpj =jQuery;
    if(tpj("#rev_slider_486_1").revolution == undefined){
        revslider_showDoubleJqueryError("#rev_slider_486_1");
    }else{
        ttrevapi = tpj("#rev_slider_486_1").show().revolution({
            sliderType:"standard",
            jsFileLocation:"assets/vendors/revolution/js/",
            sliderLayout:"fullwidth",
            dottedOverlay:"none",
            delay:9000,
            navigation: {
                keyboardNavigation:"on",
                keyboard_direction: "horizontal",
                mouseScrollNavigation:"off",
                mouseScrollReverse:"default",
                onHoverStop:"on",
                touch:{
                    touchenabled:"on",
                    swipe_threshold: 75,
                    swipe_min_touches: 1,
                    swipe_direction: "horizontal",
                    drag_block_vertical: false
                }
                ,
                arrows: {
                    style: "uranus",
                    enable: true,
                    hide_onmobile: false,
                    hide_onleave: false,
                    tmp: '',
                    left: {
                        h_align: "left",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    },
                    right: {
                        h_align: "right",
                        v_align: "center",
                        h_offset: 10,
                        v_offset: 0
                    }
                },
                
            },
            viewPort: {
                enable:true,
                outof:"pause",
                visible_area:"80%",
                presize:false
            },
            responsiveLevels:[1240,1024,778,480],
            visibilityLevels:[1240,1024,778,480],
            gridwidth:[1240,1024,778,480],
            gridheight:[768,600,600,600],
            lazyType:"none",
            parallax: {
                type:"scroll",
                origo:"enterpoint",
                speed:400,
                levels:[5,10,15,20,25,30,35,40,45,50,46,47,48,49,50,55],
                type:"scroll",
            },
            shadow:0,
            spinner:"off",
            stopLoop:"off",
            stopAfterLoops:-1,
            stopAtSlide:-1,
            shuffle:"off",
            autoHeight:"off",
            hideThumbsOnMobile:"off",
            hideSliderAtLimit:0,
            hideCaptionAtLimit:0,
            hideAllCaptionAtLilmit:0,
            debugMode:false,
            fallbacks: {
                simplifyAll:"off",
                nextSlideOnWindowFocus:"off",
                disableFocusListener:false,
            }
        });
    }
}); 
</script>