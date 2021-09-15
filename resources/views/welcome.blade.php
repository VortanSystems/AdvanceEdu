

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
    <header class="header rs-nav header-transparent">
      

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
                           
                                <!-- Search Button ==== -->
                                <li class="search-btn"><button id="quik-search-btn" type="button" class="btn-link"><i class="fa fa-search"></i></button></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Search Box ==== -->
                    <div class="nav-search-bar">
                        <form method="GET" action="{{ route('outersearch') }}" >
                           <div class="input-group">
                            <input name="search" value="" type="text" class="form-control" placeholder="Type to search">
                            <button class="btn" style="border: 0.5px solid grey;" type="submit"><i class="ti-search"></i></button>
                          </div>
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




































        <div class="rev-slider">
            <div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
                <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                <div id="rev_slider_486_1" class="rev_slider fullwidthabanner" style="display:none;" data-version="5.3.0.2">
                    <ul>    <!-- SLIDE  -->
                        





                   <li data-index="rs-100" 
                        data-transition="parallaxvertical" 
                        data-slotamount="default" 
                        data-hideafterloop="0" 
                        data-hideslideonmobile="off" 
                        data-easein="default" 
                        data-easeout="default" 
                        data-masterspeed="default" 
                        data-thumb="error-404" 
                        data-rotate="0" 
                        data-fstransition="fade" 
                        data-fsmasterspeed="1500" 
                        data-fsslotamount="7" 
                        data-saveperformance="off" 
                        data-title="A STUDY ON HAPPINESS" 
                        data-param1="" data-param2="" 
                        data-param3="" data-param4="" 
                        data-param5="" data-param6="" 
                        data-param7="" data-param8="" 
                        data-param9="" data-param10="" 
                        data-description="Science says that Women are generally happier">
                            <!-- MAIN IMAGE -->
                            <img src="uploads/sliders/{!! $slider_one_image !!}" alt="" 
                                data-bgposition="center center" 
                                data-bgfit="cover" 
                                data-bgrepeat="no-repeat" 
                                data-bgparallax="10" 
                                class="rev-slidebg" 
                                data-no-retina />
                                
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-100-layer-1" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>    
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title   tp-resizeme" 
                                id="slide-100-layer-2" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['250','250','250','240']" 
                                data-fontsize="['50','50','50','30']"
                                data-lineheight="['55','55','55','35']"
                                data-width="full"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[10,10,10,10]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
                                      {!! $slider_onelarge_maintitle !!} 
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
                                id="slide-100-layer-3" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['210','210','210','210']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
                                    {!! $slider_onesmall_maintitle !!} 
                            </div>
                            
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
                                id="slide-100-layer-4" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['320','320','320','290']" 
                                data-width="['800','800','700','420']"
                                data-height="['100','100','100','120']"
                                data-whitespace="unset"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
                                   {!! $slider_one_description !!}
                            </div>
                            <!-- LAYER NR. 4 -->
                            <a href="{!! $slider_one_buttonone_link !!}" target="_blank"><div class="tp-caption Newspaper-Button rev-btn " 
                                id="slide-100-layer-5" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['90','80','75','90']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['400','400','400','420']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[12,12,12,12]"
                                data-paddingright="[30,35,35,15]"
                                data-paddingbottom="[12,12,12,12]"
                                data-paddingleft="[30,35,35,15]"
                                style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:var(--primary) !important; border:0; border-radius:30px; margin-right:5px;"> {!! $slider_one_buttonone_text !!} </div>

                            </a>
                            <a href="{!! $slider_one_buttontwo_link !!}" target="_blank"><div class="tp-caption Newspaper-Button rev-btn" 
                                id="slide-100-layer-6" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['-90','-80','-75','-90']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['400','400','400','420']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[12,12,12,12]"
                                data-paddingright="[30,35,35,15]"
                                data-paddingbottom="[12,12,12,12]"
                                data-paddingleft="[30,35,35,15]"
                                style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;">{!! $slider_one_buttontwo_text !!}</div>
                            </a>
                        </li>











                        <li data-index="rs-200" 
                        data-transition="parallaxvertical" 
                        data-slotamount="default" 
                        data-hideafterloop="0" 
                        data-hideslideonmobile="off" 
                        data-easein="default" 
                        data-easeout="default" 
                        data-masterspeed="default" 
                        data-thumb="error-404" 
                        data-rotate="0" 
                        data-fstransition="fade" 
                        data-fsmasterspeed="1500" 
                        data-fsslotamount="7" 
                        data-saveperformance="off" 
                        data-title="A STUDY ON HAPPINESS" 
                        data-param1="" data-param2="" 
                        data-param3="" data-param4="" 
                        data-param5="" data-param6="" 
                        data-param7="" data-param8="" 
                        data-param9="" data-param10="" 
                        data-description="Science says that Women are generally happier">
                            <!-- MAIN IMAGE -->
                            <img src="uploads/sliders/{!! $slider_two_image !!}" alt="" 
                                data-bgposition="center center" 
                                data-bgfit="cover" 
                                data-bgrepeat="no-repeat" 
                                data-bgparallax="10" 
                                class="rev-slidebg" 
                                data-no-retina />
                                
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-100-layer-1" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>    
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title   tp-resizeme" 
                                id="slide-100-layer-2" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['250','250','250','240']" 
                                data-fontsize="['50','50','50','30']"
                                data-lineheight="['55','55','55','35']"
                                data-width="full"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[10,10,10,10]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
                                      {!! $slider_twolarge_maintitle !!} 
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
                                id="slide-100-layer-3" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['210','210','210','210']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
                                    {!! $slider_twosmall_maintitle !!} 
                            </div>
                            
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
                                id="slide-100-layer-4" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['320','320','320','290']" 
                                data-width="['800','800','700','420']"
                                data-height="['100','100','100','120']"
                                data-whitespace="unset"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
                                   {!! $slider_two_description !!}
                            </div>
                            <!-- LAYER NR. 4 -->
                            <a href="{!! $slider_two_button_one_link !!}" target="_blank"><div class="tp-caption Newspaper-Button rev-btn " 
                                id="slide-100-layer-5" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['90','80','75','90']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['400','400','400','420']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[12,12,12,12]"
                                data-paddingright="[30,35,35,15]"
                                data-paddingbottom="[12,12,12,12]"
                                data-paddingleft="[30,35,35,15]"
                                style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:var(--primary) !important; border:0; border-radius:30px; margin-right:5px;"> {!! $slider_two_buttontwo_text !!} </div>

                            </a>
                            <a href="{!! $slider_one_buttontwo_link !!}" target="_blank"><div class="tp-caption Newspaper-Button rev-btn" 
                                id="slide-100-layer-6" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['-90','-80','-75','-90']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['400','400','400','420']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[12,12,12,12]"
                                data-paddingright="[30,35,35,15]"
                                data-paddingbottom="[12,12,12,12]"
                                data-paddingleft="[30,35,35,15]"
                                style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;">{!! $slider_two_buttontwo_text !!}</div>
                            </a>
                        </li>









                        <li data-index="rs-300" 
                        data-transition="parallaxvertical" 
                        data-slotamount="default" 
                        data-hideafterloop="0" 
                        data-hideslideonmobile="off" 
                        data-easein="default" 
                        data-easeout="default" 
                        data-masterspeed="default" 
                        data-thumb="error-404" 
                        data-rotate="0" 
                        data-fstransition="fade" 
                        data-fsmasterspeed="1500" 
                        data-fsslotamount="7" 
                        data-saveperformance="off" 
                        data-title="A STUDY ON HAPPINESS" 
                        data-param1="" data-param2="" 
                        data-param3="" data-param4="" 
                        data-param5="" data-param6="" 
                        data-param7="" data-param8="" 
                        data-param9="" data-param10="" 
                        data-description="Science says that Women are generally happier">
                            <!-- MAIN IMAGE -->
                            <img src="uploads/sliders/{!! $slider_three_image !!}" alt="" 
                                data-bgposition="center center" 
                                data-bgfit="cover" 
                                data-bgrepeat="no-repeat" 
                                data-bgparallax="10" 
                                class="rev-slidebg" 
                                data-no-retina />
                                
                            <!-- LAYER NR. 1 -->
                            <div class="tp-caption tp-shape tp-shapewrapper " 
                                id="slide-100-layer-1" 
                                data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']" 
                                data-width="full"
                                data-height="full"
                                data-whitespace="nowrap"
                                data-type="shape" 
                                data-basealign="slide" 
                                data-responsive_offset="off" 
                                data-responsive="off"
                                data-frames='[{"from":"opacity:0;","speed":1,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},{"delay":"wait","speed":1,"to":"opacity:0;","ease":"Power4.easeOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 5;background-color:rgba(2, 0, 11, 0.80);border-color:rgba(0, 0, 0, 0);border-width:0px;"> </div>    
                            <!-- LAYER NR. 2 -->
                            <div class="tp-caption Newspaper-Title   tp-resizeme" 
                                id="slide-100-layer-2" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['250','250','250','240']" 
                                data-fontsize="['50','50','50','30']"
                                data-lineheight="['55','55','55','35']"
                                data-width="full"
                                data-height="none"
                                data-whitespace="normal"
                                data-type="text" 
                                data-responsive_offset="on" 
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[10,10,10,10]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 6; font-family:rubik; font-weight:700; text-align:center; white-space: normal;">
                                      {!! $slider_threelarge_maintitle !!} 
                            </div>

                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
                                id="slide-100-layer-3" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['210','210','210','210']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['left','left','left','left']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; white-space: nowrap; color:#fff; font-family:rubik; font-size:18px; font-weight:400;">
                                    {!! $slider_threesmall_maintitle !!} 
                            </div>
                            
                            <!-- LAYER NR. 3 -->
                            <div class="tp-caption Newspaper-Subtitle   tp-resizeme" 
                                id="slide-100-layer-4" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['0','0','0','0']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['320','320','320','290']" 
                                data-width="['800','800','700','420']"
                                data-height="['100','100','100','120']"
                                data-whitespace="unset"
                                data-type="text" 
                                data-responsive_offset="on"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[0,0,0,0]"
                                data-paddingright="[0,0,0,0]"
                                data-paddingbottom="[0,0,0,0]"
                                data-paddingleft="[0,0,0,0]"
                                style="z-index: 7; text-transform:capitalize; white-space: unset; color:#fff; font-family:rubik; font-size:18px; line-height:28px; font-weight:400;">
                                   {!! $slider_three_description !!}
                            </div>
                            <!-- LAYER NR. 4 -->
                            <a href="{!! $slider_three_buttonthree_link !!}" target="_blank"><div class="tp-caption Newspaper-Button rev-btn " 
                                id="slide-100-layer-5" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['90','80','75','90']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['400','400','400','420']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[12,12,12,12]"
                                data-paddingright="[30,35,35,15]"
                                data-paddingbottom="[12,12,12,12]"
                                data-paddingleft="[30,35,35,15]"
                                style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; background-color:var(--primary) !important; border:0; border-radius:30px; margin-right:5px;"> {!! $slider_three_buttonthree_text !!} </div>

                            </a>
                            <a href="{!! $slider_three_buttontwo_link !!}" target="_blank"><div class="tp-caption Newspaper-Button rev-btn" 
                                id="slide-100-layer-6" 
                                data-x="['center','center','center','center']" 
                                data-hoffset="['-90','-80','-75','-90']" 
                                data-y="['top','top','top','top']" 
                                data-voffset="['400','400','400','420']" 
                                data-width="none"
                                data-height="none"
                                data-whitespace="nowrap"
                                data-type="button" 
                                data-responsive_offset="on" 
                                data-responsive="off"
                                data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"300","ease":"Power1.easeInOut","to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(0, 0, 0, 1.00);bg:rgba(255, 255, 255, 1.00);bc:rgba(255, 255, 255, 1.00);bw:1px 1px 1px 1px;"}]'
                                data-textAlign="['center','center','center','center']"
                                data-paddingtop="[12,12,12,12]"
                                data-paddingright="[30,35,35,15]"
                                data-paddingbottom="[12,12,12,12]"
                                data-paddingleft="[30,35,35,15]"
                                style="z-index: 8; white-space: nowrap; outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;cursor:pointer; border-radius:30px;">{!! $slider_three_buttontwo_text !!}</div>
                            </a>
                        </li>



































                        






                    </ul>
                </div><!-- END REVOLUTION SLIDER -->  
            </div>  
        </div>  





































        <!-------------------------------------------------------------->






































        <!-- Main Slider -->
        <div class="content-block">
    
            <!-- Our Services -->
            <div class="section-area content-inner service-info-bx">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="service-bx">
                                <div class="action-box">
                                    <img src="uploads/cards/<?php echo$cardttimage;?>" alt="">
                                </div>
                                <div class="info-bx text-center">
                                    <div class="feature-box-sm  bg-white">
                                      <?php echo$cardtttexta;?>
                                    </div>
                                    <h4><a href="#"><?php echo$cardtttitlea;?></a></h4>
                                   
                                </div>
                            </div>
                        </div>


                                <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="service-bx">
                                <div class="action-box">
                                    <img src="uploads/cards/<?php echo$cardttimagb;?>" alt="">
                                </div>
                                <div class="info-bx text-center">
                                    <div class="feature-box-sm  bg-white">
                                      <?php echo$cardtttextb;?>
                                    </div>
                                    <h4><a href="#"><?php echo$cardtttitleb;?></a></h4>
                                   
                                </div>
                            </div>
                        </div>



                                <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="service-bx">
                                <div class="action-box">
                                    <img src="uploads/cards/<?php echo$cardttimagc;?>" alt="">
                                </div>
                                <div class="info-bx text-center">
                                    <div class="feature-box-sm bg-white">
                                      <?php echo$cardtttextc;?>
                                    </div>
                                    <h4><a href="#"><?php echo$cardtttitlec;?></a></h4>
                                   
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>
            </div>
            <!-- Our Services END -->

            
            <!-- Popular Courses -->
            <div class="section-area section-sp2 popular-courses-bx">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-bx left">
                            <h2 class="title-head">Popular <span>Courses</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                        </div>
                    </div>
                    <div class="row">
                    <div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">































   @foreach ($users as $user)







   <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="service-bx">
                                <div class="action-box">
                                    <img src="uploads/<?php echo$user->preview_image;?>" alt="">
                                </div>
                                <div class="info-bx text-center">
                                    <div class="feature-box-sm radius bg-white">
                                       <a style="color: indigo; font-size: 20px;" class="text-primary">{{ $user->course_price }} <i style="font-size: 20px;" class="fa fa-dollar text-primary"></i></a>
                                    </div>
                                    <h4><a href="#"   style="width: 190px;
  padding: 0;
  overflow: hidden;
  position: relative;
  display: inline-block;
  margin: 0 5px 0 5px;
  text-align: center;
  text-decoration: none;
  text-overflow: ellipsis;
  white-space: nowrap;
  " >{{ $user->course_name }}</a></h4>
                                    <a style="border: 0.5px solid yellow;" href="course/{{ $user->id }}" class="btn radius-xl">Read More</a>
                                </div>
                            </div>
                        </div>








@endforeach


                    </div>
                    </div>
                </div>
            </div>
            <!-- Popular Courses END -->
            
            <!-- Form -->
            <div class="section-area section-sp1 ovpr-dark bg-fix online-cours" style="background-image:url(assets/images/background/bg1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center text-white">
                            <h2>Online Courses To Learn</h2>
                            <h5>Own Your Future Learning New Skills Online</h5>
                            <form  method="GET" action="{{ route('outersearch') }}" class="cours-search">
                                <div class="input-group">
                                    <input type="text" name="search" class="form-control" placeholder="What do you want to learn today?   ">
                                    <div class="input-group-append">
                                        <button class="btn" type="submit">Search</button> 
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="mw800 m-auto">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="cours-search-bx m-b30">
                                    <div class="icon-box">
                                        <h3><i class="ti-user"></i><span class="counter"><?php echo$wordCount;?></span></h3>
                                    </div>
                                    <span class="cours-search-text">Over <?php echo$wordCount;?> Students</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="cours-search-bx m-b30">
                                    <div class="icon-box">
                                        <h3><i class="ti-book"></i><span class="counter"><?php echo$bently;?></span></h3>
                                    </div>
                                    <span class="cours-search-text"><?php echo$bently;?> Courses.</span>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <div class="cours-search-bx m-b30">
                                    <div class="icon-box">
                                        <h3><i class="ti-layout-list-post"></i><span class="counter"><?php echo$bentily;?></span></h3>
                                    </div>
                                      <span class="cours-search-text">Library Resources</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form END -->
            <div class="section-area section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-center heading-bx">
                            <h2 class="title-head m-b0">Upcoming <span>Events</span></h2>
                            <p class="m-b0">Upcoming Education Events To Feed Brain. </p>
                        </div>
                    </div>
                    <div class="row">
                    <div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">
                        <div class="item">
                            <div class="event-bx">
                                <div class="action-box">
                                    <img src="assets/images/event/pic4.jpg" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div>
                                        <div class="event-time">
                                            <div class="event-date">29</div>
                                            <div class="event-month">October</div>
                                        </div>
                                    </div>
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="event-bx">
                                <div class="action-box">
                                    <img src="assets/images/event/pic3.jpg" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div>
                                        <div class="event-time">
                                            <div class="event-date">29</div>
                                            <div class="event-month">October</div>
                                        </div>
                                    </div>
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="event-bx">
                                <div class="action-box">
                                    <img src="assets/images/event/pic2.jpg" alt="">
                                </div>
                                <div class="info-bx d-flex">
                                    <div>
                                        <div class="event-time">
                                            <div class="event-date">29</div>
                                            <div class="event-month">October</div>
                                        </div>
                                    </div>
                                    <div class="event-info">
                                        <h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
                                        <ul class="media-post">
                                            <li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
                                            <li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
                                        </ul>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the..</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="text-center">
                        <a href="#" class="btn">View All Event</a>
                    </div>
                </div>
            </div>
            
            <!-- Testimonials -->
            <div class="section-area section-sp2 bg-fix ovbl-dark" style="background-image:url(assets/images/background/bg1.jpg);">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 text-white heading-bx left">
                            <h2 class="title-head text-uppercase">what people <span>say</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                        </div>
                    </div>
                    <div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                        <div class="item">
                            <div class="testimonial-bx">
                                <div class="testimonial-thumb">
                                    <img src="assets/images/testimonials/pic1.jpg" alt="">
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="name">Peter Packer</h5>
                                    <p>-Art Director</p>
                                </div>
                                <div class="testimonial-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="testimonial-bx">
                                <div class="testimonial-thumb">
                                    <img src="assets/images/testimonials/pic2.jpg" alt="">
                                </div>
                                <div class="testimonial-info">
                                    <h5 class="name">Peter Packer</h5>
                                    <p>-Art Director</p>
                                </div>
                                <div class="testimonial-content">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonials END -->
            
            <!-- Recent News -->
            <div class="section-area section-sp2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 heading-bx left">
                            <h2 class="title-head">Recent <span>News</span></h2>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
                        </div>
                    </div>
                    <div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
                        <div class="item">
                            <div class="recent-news">
                                <div class="action-box">
                                    <img src="assets/images/blog/latest-blog/pic1.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-calendar"></i>Jan 02 2019</a></li>
                                        <li><a href="#"><i class="fa fa-user"></i>By William</a></li>
                                    </ul>
                                    <h5 class="post-title"><a href="blog-details">This Story Behind Education Will Haunt You Forever.</a></h5>
                                    <p>Knowing that, you’ve optimised your pages countless amount of times, written tons.</p>
                                    <div class="post-extra">
                                        <a href="#" class="btn-link">READ MORE</a>
                                        <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>20 Comment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="recent-news">
                                <div class="action-box">
                                    <img src="assets/images/blog/latest-blog/pic2.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-calendar"></i>Feb 05 2019</a></li>
                                        <li><a href="#"><i class="fa fa-user"></i>By John</a></li>
                                    </ul>
                                    <h5 class="post-title"><a href="blog-details">What Will Education Be Like In The Next 50 Years?</a></h5>
                                    <p>As desperate as you are right now, you have done everything you can on your.</p>
                                    <div class="post-extra">
                                        <a href="#" class="btn-link">READ MORE</a>
                                        <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>14 Comment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="recent-news">
                                <div class="action-box">
                                    <img src="assets/images/blog/latest-blog/pic3.jpg" alt="">
                                </div>
                                <div class="info-bx">
                                    <ul class="media-post">
                                        <li><a href="#"><i class="fa fa-calendar"></i>April 14 2019</a></li>
                                        <li><a href="#"><i class="fa fa-user"></i>By George</a></li>
                                    </ul>
                                    <h5 class="post-title"><a href="blog-details">Master The Skills Of Education And Be.</a></h5>
                                    <p>You will see in the guide all my years of valuable experience together with.</p>
                                    <div class="post-extra">
                                        <a href="#" class="btn-link">READ MORE</a>
                                        <a href="#" class="comments-bx"><i class="fa fa-comments-o"></i>23 Comment</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Recent News End -->
            
        </div>
        <!-- contact area END -->
    </div>
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
<script src="assets/vendors/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="assets/vendors/revolution/js/extensions/revolution.extension.video.min.js"></script>
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
</body>

</html>
