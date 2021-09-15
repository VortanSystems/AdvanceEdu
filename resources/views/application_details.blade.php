@extends('layouts.app')

@section('content')







<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

    <!-- Fontfaces CSS-->
       <link href="{{ asset('dashboard/css/font-face.css') }}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{ asset('dashboard/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{ asset('dashboard/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{ asset('dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="{{ asset('dashboard/css/theme.css')}}" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index">
                            <img src="{{ asset('images/icon/logo.png') }}" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            

                        </li>
                        <li>
                            <a href="/courses">
                                <i class="fas fa-user-graduate"></i>Courses</a>
                        </li>
                        <li>
                            <a href="/assignments">
                                <i class="fas fa-tasks"></i>Assignments</a>
                        </li>


@if((Auth::user()->user_type)=='admin')
                           <li>
                    <a href="/users">
                                <i class="fas fa-chalkboard-teacher"></i>Manage Users</a>
                        </li>
                        
                @else      
   <li>
                            <a href="/tutors">
                                <i class="fas fa-chalkboard-teacher"></i>Tutors</a>
                        </li>
                     @endif


                     @if((Auth::user()->access_level)=='tutor')
                           <li>
                    <a href="/my_applications">
                                <i class="fas fa-suitcase"></i>Applications</a>
                        </li>
                        
               
                     

                     <?php $tiris=$tutoraapplics[0]->tutor_id; ?>

                     @if($tiris>0)

                           <li>
                    <a href="/my_courses">
                                <i class="fas fa-book"></i>My Courses</a>
                        </li>
                     @endif
@endif

                        <li>
                            <a href="/library">
                                <i class="fas fa-archive"></i>Library</a>
                        </li>
                        <li>
                            <a href="/announcement">
                                <i class="fas fa-bullhorn"></i>Announcements</a>
                        </li>
                   
                 

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('images/icon/logo.png') }}" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            

                        </li>
                        <li>
                            <a href="/courses">
                                <i class="fas fa-user-graduate"></i>Courses</a>
                        </li>
                        <li>
                            <a href="/assignments">
                                <i class="fas fa-tasks"></i>Assignments</a>
                        </li>


@if((Auth::user()->user_type)=='admin')
                           <li>
                    <a href="/users">
                                <i class="fas fa-chalkboard-teacher"></i>Manage Users</a>
                        </li>
                        
                @else      
   <li>
                            <a href="/tutors">
                                <i class="fas fa-chalkboard-teacher"></i>Tutors</a>
                        </li>
                     @endif


                     @if((Auth::user()->access_level)=='tutor')
                           <li>
                    <a href="/my_applications">
                                <i class="fas fa-suitcase"></i>Applications</a>
                        </li>
                        
               
                     

                     <?php $tiris=$tutoraapplics[0]->tutor_id; ?>

                     @if($tiris>0)

                           <li>
                    <a href="/my_courses">
                                <i class="fas fa-book"></i>My Courses</a>
                        </li>
                     @endif
@endif

                        <li>
                            <a href="/library">
                                <i class="fas fa-archive"></i>Library</a>
                        </li>
                        <li>
                            <a href="/announcement">
                                <i class="fas fa-bullhorn"></i>Announcements</a>
                        </li>
                   
                 

                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
              <?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

{

// Mobile Display

    ?>


<div class="page">
    <?php
}

{?>

            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">


                                                    @if(Auth::user()->profile_photo)
                             <img src="uploads/{{ Auth::user()->profile_photo }}" />
                                        @else
                            <i style="font-size:40px;" class="fa fa-user"></i>
                                                    @endif
                                            
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a style="" href="/profile">
                                                        
                                            
                                                    @if(Auth::user()->profile_photo)
                             <img src="uploads/{{ Auth::user()->profile_photo }}" />
                                        @else
                            <i style="font-size:40px;" class="fa fa-user"></i>
                                                    @endif
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="/profile">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                 <a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
<div class="page-container">
<?php } ?>
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search" placeholder="Search for datas &amp; reports..." />
                                <button class="au-btn--submit" type="submit">
                                    <i class="zmdi zmdi-search"></i>
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-comment-more"></i>
                                        <span class="quantity">1</span>
                                        <div class="mess-dropdown js-dropdown">
                                            <div class="mess__title">
                                                <p>You have 2 news message</p>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Michelle Moreno" />
                                                </div>
                                                <div class="content">
                                                    <h6>Michelle Moreno</h6>
                                                    <p>Have sent a photo</p>
                                                    <span class="time">3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="mess__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Diane Myers" />
                                                </div>
                                                <div class="content">
                                                    <h6>Diane Myers</h6>
                                                    <p>You are now connected on message</p>
                                                    <span class="time">Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="mess__footer">
                                                <a href="#">View all messages</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-email"></i>
                                        <span class="quantity">1</span>
                                        <div class="email-dropdown js-dropdown">
                                            <div class="email__title">
                                                <p>You have 3 New Emails</p>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-06.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, 3 min ago</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-05.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, Yesterday</span>
                                                </div>
                                            </div>
                                            <div class="email__item">
                                                <div class="image img-cir img-40">
                                                    <img src="images/icon/avatar-04.jpg" alt="Cynthia Harvey" />
                                                </div>
                                                <div class="content">
                                                    <p>Meeting about new dashboard...</p>
                                                    <span>Cynthia Harvey, April 12,,2018</span>
                                                </div>
                                            </div>
                                            <div class="email__footer">
                                                <a href="#">See all emails</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="noti__item js-item-menu">
                                        <i class="zmdi zmdi-notifications"></i>
                                        <span class="quantity">3</span>
                                        <div class="notifi-dropdown js-dropdown">
                                            <div class="notifi__title">
                                                <p>You have 3 Notifications</p>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c1 img-cir img-40">
                                                    <i class="zmdi zmdi-email-open"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a email notification</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c2 img-cir img-40">
                                                    <i class="zmdi zmdi-account-box"></i>
                                                </div>
                                                <div class="content">
                                                    <p>Your account has been blocked</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__item">
                                                <div class="bg-c3 img-cir img-40">
                                                    <i class="zmdi zmdi-file-text"></i>
                                                </div>
                                                <div class="content">
                                                    <p>You got a new file</p>
                                                    <span class="date">April 12, 2018 06:50</span>
                                                </div>
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#">All notifications</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <i style="font-size:40px;" class="fa fa-user"></i>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a style="" href="#">
                                                        <i style="font-size:60px;" class="fa fa-user"></i>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">{{ Auth::user()->name }}</a>
                                                    </h5>
                                                    <span class="email">{{ Auth::user()->email }}</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="/profile">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-money-box"></i>Billing</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main">
                <div>
                    <div class="container-fluid">
                     


                        <div class="row">
                           
                          

<div class="col-md-12">
    
    <div class="card" width="100%">
        <div class="card-header">
            <b>Application Details</b>


                                             
                                             


        </div>

        <div class="card-body">
          
@if((Auth::user()->user_type)=='admin')    

 @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </ul>
   </div>
  @endif
  @if(session()->get('message'))
  <div class="alert alert-success" role="alert">
    <strong>Success: </strong>{{session()->get('message')}}
  </div>
  @endif

                        @foreach($tutorapplics as $minonte)





                        
<div class="row">
    <div class="col-md-12">
        <div class="row">
        <div class="col-md-4">
            <div style="width: 100%;">
            
                    @foreach ($tutorapplics as $tutaorapplic)

                
                <?php 
                $uyismin=$tutaorapplic->tutor_id;
                $usssers = DB::table('users')
                ->where('id', '=', $uyismin)
                ->get();

               
                ?>



                
                <?php 
                $uyismisn=$tutaorapplic->course_id;
                $uzers = DB::table('courses_by_admin')
                ->where('id', '=', $uyismisn)
                ->get();

               
                ?>


                @foreach ($usssers as $quser)
                










 
        <div class="col-md-12">
        <div class="profile-card-2">

            @if($quser->profile_photo)
            <div style="height: 425px; overflow: hidden;">
            <img style="height: 426px;  overflow-x: hidden;" src="../uploads/{{ $quser->profile_photo }}" class="img img-responsive">
            </div>
            @else

            <div style="height: 425px; overflow: hidden;">
            <img style="height: 426px;  overflow-x: hidden;" src="http://envato.jayasankarkr.in/code/profile/assets/img/profile-2.jpg" class="img img-responsive">
            </div>
           

            @endif
        <div class="profile-name" style="  
  width: 190px;
  padding: 0;
  overflow: hidden;
  display: inline-block;
  text-decoration: none;
  text-overflow: ellipsis;
  white-space: nowrap;
  ">{{ $quser->name }}</div>
        <div class="profile-username"></div>
        <div class="profile-icons"> 

            <a style="color:white;text-decoration: underline;" href="#">&nbsp;<i class="fa fa-pen"></i>&nbsp;</a> 

        </div>
    
    <div class="profile-username"> 
          @if(($tutaorapplic->application_status)=='pending')
                            <span style="border:yellow; padding: 2px; background-color: yellow; color:white; width:100%; " class="btn btn-danger rounded-pill">&nbsp;&nbsp;&nbsp;Pending&nbsp;&nbsp;&nbsp;</span>

                        @elseif(($tutaorapplic->application_status)=='approved')
                       <span style="border:green; padding: 2px; background-color: green; color:white; width:100%; " class="btn btn-danger rounded-pill">&nbsp;&nbsp;&nbsp;Approved&nbsp;&nbsp;&nbsp;</span>
                        @elseif(($tutaorapplic->application_status)=='declined')

                        <span style="border:red; padding: 2px; background-color: red; color:white; width:100%; " class="btn btn-danger rounded-pill">&nbsp;&nbsp;&nbsp;Declined&nbsp;&nbsp;&nbsp;</span>

                        @endif   
</div>

    </div>
</div>

 <style type="text/css">
     

.profile-card-1 {
    background-color: #FFF;
    border-radius: 10px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    background-image: url(uploads/{{ $quser->profile_photo }});
    background-position: center;
    padding-top: 100px;
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    max-width: 300px;
}



 </style>
 








                   
@endforeach
                    @endforeach
                  






            </div>
        </div>

        <div class="col-md-8" style="width: 100%;">
            
<div class="card  mt-3">


                <ul class="list-group list-group-flush">
                  
                    
                    
                    
                    
                <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    
                    
                    <h6>Course Name:</h6>
                    <span class="text-secondary"><?php echo$uzers[0]->course_name;?></span>
                  </li>





                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    
                    
                    <h6>Tutor Name:</h6>
                    <span class="text-secondary">{{ $quser->name }}</span>
                  </li>



                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    
                    
                    <h6>Tutor Phone:</h6>
                    <span class="text-secondary">{{ $quser->phone }}</span>
                  </li>



                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    
                    
                    <h6>Tutor Address:</h6>
                    <span class="text-secondary"> {{ $quser->address }}</span>
                  </li>



                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    
                    
                    <h6>Tutor Email:</h6>
                    <span class="text-secondary">{{ $quser->email }}</span>
                  </li>





                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    
                    
                    <h6>Tutor Resume:</h6>
                    <span class="text-secondary"><a href="../uploads/cvs_a/{{ $tutaorapplic->cv_name }}" target="_blank">View</a></span>
                  </li>





                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    
                    
                    <h6>Tutor Identification:</h6>
                    <span class="text-secondary"><a href="../uploads/ids/{{ $tutaorapplic->identifications }}" target="_blank">View</a></span>
                  </li>




                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    
                    
                    <h6>Tutor Number Of Students:</h6>
                    <span class="text-secondary">{{ $tutaorapplic->number_of_students }}</span>
                  </li>





                   <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                    
                    
                    <h6>Application Status:</h6>
                    <span class="text-secondary">     @if(($tutaorapplic->application_status)=='pending')
                            <span style="border:yellow; padding: 2px; background-color: yellow; color:white; width:100%; " class="btn btn-danger rounded-pill">&nbsp;&nbsp;&nbsp;Pending&nbsp;&nbsp;&nbsp;</span>

                        @elseif(($tutaorapplic->application_status)=='approved')
                       <span style="border:green; padding: 2px; background-color: green; color:white; width:100%; " class="btn btn-danger rounded-pill">&nbsp;&nbsp;&nbsp;Approved&nbsp;&nbsp;&nbsp;</span>
                        @elseif(($tutaorapplic->application_status)=='declined')

                        <span style="border:red; padding: 2px; background-color: red; color:white; width:100%; " class="btn btn-danger rounded-pill">&nbsp;&nbsp;&nbsp;Declined&nbsp;&nbsp;&nbsp;</span>

                        @endif </span>
                  </li>





                
          
                </ul>
             
            
            
        <br> 

            <center><button  data-toggle="modal" data-target="#mediumModal" class="btn btn-warning   rounded-pill">Decline</button> &nbsp;&nbsp;&nbsp;<button   data-toggle="modal" data-target="#mediumModal"  class="btn btn-success  rounded-pill">Approve</button></center>

<br><br>


    <div class="modal fade" id="mediumModal" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Medium Modal</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p> 






                               <form class="user" action = "/aprove_or_decline/{{ $tutaorapplic->id }}" method = "post"  enctype="multipart/form-data">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    
              

               <div class="form-group row">
                         
 <input type = "hidden" name = "course_id" value = "{{ $tutaorapplic->course_id }}">
  <input type = "hidden" name = "tutor_id" value = "{{ $tutaorapplic->tutor_id }}">
 <input type = "hidden" name = "application_id" value = "{{ $tutaorapplic->id }}">
       <div class="col-md-11"> 

                <select name="application_stats" class="form-control">
                                <option selected="true"  value="approved" >Approve</option>
                                <option value="declined" >Decline</option>
                            </select>
                                

                              
                            </div>
                        </div>



  

 
 



        <div class="form-group row">
                            

      <div class="col-md-10" >
                               





<div class="editor">
  <div class="toolbar">
    <div class="line">
      
      <div class="box">
        <span class="btn btn-icon"data-action="bold" data-tag-name="b" title="Bold">
          <i class="fa fa-bold"></i>
        </span>
        <span class="btn btn-icon"data-action="italic" data-tag-name="i" title="Italic">
          <i class="fa fa-italic"></i>
        </span>
        <span class="btn btn-icon"data-action="underline" data-tag-name="u" title="Underline">
          <i class="fa fa-underline"></i>
        </span>
        <span class="btn btn-icon"data-action="strikeThrough" data-tag-name="strike" title="Strike through">
          <i class="fa fa-strikethrough"></i>
        </span>
      </div>
      
      <div class="box">
        <span class="btn icon has-submenu">
          <!--<i class="fa fa-caret-down"></i>-->
          <div class="submenu">
            <span class="btn btn-icon"data-action="justifyLeft" data-style="textAlign:left" title="Justify left">
              <i class="fa fa-align-left"></i>
            </span>
            <span class="btn btn-icon"data-action="justifyCenter" data-style="textAlign:center" title="Justify center">
              <i class="fa fa-align-justify"></i> 
            </span>
            <span class="btn btn-icon"data-action="justifyRight" data-style="textAlign:right" title="Justify right">
              <i class="fa fa-align-right"></i> 
            </span>
            <span class="btn btn-icon" data-action="formatBlock" data-style="textAlign:justify" title="Justify block">
              <i class="fa fa-align-center"></i>  
            </span>
          </div>
        </span>
        <span class="btn btn-icon"data-action="insertOrderedList" data-tag-name="ol" title="Insert ordered list">
          <img style="width:20%;" src="https://image.flaticon.com/icons/svg/25/25242.svg">  
        </span>
        <span class="btn btn-icon"data-action="insertUnorderedList" data-tag-name="ul" title="Insert unordered list">
          <img style="width:20%;" src="https://image.flaticon.com/icons/svg/25/25648.svg">  
        </span>
        <span class="btn btn-icon"data-action="outdent" title="Outdent">
          <img style="width:20%;" src="https://image.flaticon.com/icons/svg/25/25410.svg">  
        </span>
        <span class="btn btn-icon"data-action="indent" title="Indent">
          <img style="width:20%;" src="https://image.flaticon.com/icons/svg/25/25233.svg">  
        </span>
        
      </div>
      <div class="box">
        <span class="btn btn-icon"data-action="insertHorizontalRule" title="Insert horizontal rule">
          <img style="width:20%;" src="https://image.flaticon.com/icons/svg/25/25232.svg">  
        </span>
      </div>
      
    </div>
    <div class="line">
      
      <div class="box">
        <span class="btn btn-icon"data-action="undo" title="Undo">
          <img style="width:20%;" src="https://image.flaticon.com/icons/svg/25/25249.svg">
        </span>
        <span class="btn btn-icon"data-action="removeFormat" title="Remove format">
          <img style="width:20%;" src="https://image.flaticon.com/icons/svg/25/25454.svg">  
        </span>
      </div>
      
      <div class="box">
        <span class="btn btn-icon"data-action="createLink" title="Insert Link">
          <img style="width:20%;" src="https://image.flaticon.com/icons/svg/25/25385.svg">
        </span>
        <span class="btn btn-icon"data-action="unlink" data-tag-name="a" title="Unlink">
          <img style="width:20%;" src="https://image.flaticon.com/icons/svg/25/25341.svg">
        </span>
      </div>
      
      <div class="box">
        <span class="btn btn-icon"data-action="code" title="Show HTML-Code">
          <img style="width:20%;" src="https://image.flaticon.com/icons/svg/25/25185.svg">
        </span>
      </div>
      
    </div>
  </div>
  <div class="content-area">
    <div class="visuell-view" contenteditable>
     Include A Message Such As How To Get Started...
     
    </div>
    <textarea  id="summernote" class="html-view"  name="message" ></textarea>
  </div>
</div>

<div class="modal">
  <div class="modal-bg"></div>
  <div class="modal-wrapper">
    <div class="close">✖</div>
    <div class="modal-content" id="modalCreateLink">
      <h3>Insert Link</h3>
      <input type="text" id="linkValue" placeholder="Link (example: https://webdeasy.de/)">
      <div class="row">
        <input type="checkbox" id="new-tab">
        <label for="new-tab">Open in new Tab?</label>
      </div>
      <button class="done">Done</button>
    </div>
  </div>
</div>



















                            </div>
                        </div>

    


     



        <div class="form-group row">
            

       <div class="col-md-10">
                            

             <center><input id="email" class="btn btn-warning rounded-pill" name="addcourse" type = 'submit' value = "&nbsp;&nbsp;&nbsp;&nbsp;Confirm&nbsp;&nbsp;&nbsp;&nbsp;"/></center>                 
                            </div>
                        </div>




    
    
   
</form>








                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            
                        </div>
                    </div>
                </div>
            </div>







 








            </div>

        </div>
        </div>
    </div>
</div>









                        @endforeach




<style type="text/css">
    
    /*****************
    - Header -
*****************/

.container-fluid,
.container {
    max-width: 1200px;
}

.card-container {
    padding: 100px 0px;
    -webkit-perspective: 1000;
    perspective: 1000;
}

.profile-card-1 .profile-content {
    position: relative;
    background-color: #FFF;
    padding: 70px 20px 20px 20px;
    text-align: center;
}

.profile-card-1 .profile-img {
    position: absolute;
    height: 100px;
    left: 0px;
    right: 0px;
    z-index: 10;
    top: -50px;
    transition: all 0.25s linear;
    transform-style: preserve-3d;
}

.profile-card-1 .profile-img img {
    height: 100px;
    margin: auto;
    border-radius: 50%;
    border: 5px solid #FFF;
    box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
}

.profile-card-1 .profile-name {
    font-size: 18px;
    font-weight: bold;
    color: #021830;
}

.profile-card-1 .profile-address {
    color: #777;
    font-size: 12px;
    margin: 0px 0px 15px 0px;
}

.profile-card-1 .profile-description {
    font-size: 13px;
    padding: 5px 10px;
    color: #777;
}

.profile-card-1 .profile-icons .fa {
    margin: 5px;
    color: #777;
}

.profile-card-1:hover {
    box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.1);
}

.profile-card-1:hover .profile-img {
    transform: rotateY(180deg);
}

.profile-card-2 {
    max-width: 300px;
    background-color: #FFF;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    background-position: center;
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    border-radius: 10px;
}

.profile-card-2 img {
    transition: all linear 0.25s;
}

.profile-card-2 .profile-name {
    position: absolute;
    left: 30px;
    bottom: 70px;
    font-size: 30px;
    color: #FFF;
    text-shadow: 0px 0px 20px rgba(0, 0, 0, 0.5);
    font-weight: bold;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-icons {
    position: absolute;
    bottom: 30px;
    right: 30px;
    color: #FFF;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-username {
    position: absolute;
    bottom: 50px;
    left: 30px;
    color: #FFF;
    font-size: 13px;
    transition: all linear 0.25s;
}

.profile-card-2 .profile-icons .fa {
    margin: 5px;
}

.profile-card-2:hover img {
    filter: grayscale(100%);
}

.profile-card-2:hover .profile-name {
    bottom: 80px;
}

.profile-card-2:hover .profile-username {
    bottom: 60px;
}

.profile-card-2:hover .profile-icons {
    right: 40px;
}

.profile-card-3 {
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 25px 15px;
}

.profile-card-3 .profile-name {
    font-weight: bold;
    color: #21304e;
}

.profile-card-3 .profile-location {
    color: #999;
    font-size: 13px;
    font-weight: 600;
}

.profile-card-3 img {
    height: 100px;
    width: 100px;
    object-fit: cover;
    margin: 10px auto;
    border-radius: 50%;
    transition: all linear 0.25s;
}

.profile-card-3 .profile-description {
    font-size: 13px;
    color: #777;
    padding: 10px;
}

.profile-card-3 .profile-icons {
    margin: 15px 0px;
}

.profile-card-3 .profile-icons .fa {
    color: #fe455a;
    margin: 0px 5px;
}

.profile-card-3:hover img {
    height: 110px;
    width: 110px;
    margin: 5px auto;
}

.profile-card-4 {
    max-width: 300px;
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
}

.profile-card-4 img {
    transition: all 0.25s linear;
}

.profile-card-4 .profile-content {
    position: relative;
    padding: 15px;
    background-color: #FFF;
}

.profile-card-4 .profile-name {
    font-weight: bold;
    position: absolute;
    left: 0px;
    right: 0px;
    top: -70px;
    color: #FFF;
    font-size: 17px;
}

.profile-card-4 .profile-name p {
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 1.5px;
}

.profile-card-4 .profile-description {
    color: #777;
    font-size: 12px;
    padding: 10px;
}

.profile-card-4 .profile-overview {
    padding: 15px 0px;
}

.profile-card-4 .profile-overview p {
    font-size: 10px;
    font-weight: 600;
    color: #777;
}

.profile-card-4 .profile-overview h4 {
    color: #273751;
    font-weight: bold;
}

.profile-card-4 .profile-content::before {
    content: "";
    position: absolute;
    height: 20px;
    top: -10px;
    left: 0px;
    right: 0px;
    background-color: #FFF;
    z-index: 0;
    transform: skewY(3deg);
}

.profile-card-4:hover img {
    transform: rotate(5deg) scale(1.1, 1.1);
    filter: brightness(110%);
}

.profile-card-5 {
    max-width: 300px;
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 50px 15px 25px 15px;
}

.profile-card-5 img {
    height: 100px;
    width: 100px;
    object-fit: cover;
    margin: 10px auto;
    border-radius: 50%;
    transition: all linear 0.25s;
    position: relative;
}

.profile-card-5::before {
    content: "";
    position: absolute;
    top: -60px;
    right: 0px;
    left: 0px;
    height: 170px;
    background-color: #4fb96e;
    transform: skewY(-20deg);
}

.profile-card-5 .profile-name {
    padding-top: 15px;
    font-weight: bold;
    color: #333;
}

.profile-card-5 .profile-designation {
    font-size: 13px;
    color: #777;
}

.profile-card-3 .profile-location {
    color: #999;
    font-size: 13px;
    font-weight: 600;
}

.profile-card-5 .profile-description {
    font-size: 13px;
    color: #777;
    padding: 10px;
}

.profile-card-5 .profile-overview {
    padding: 15px 0px;
}

.profile-card-5 .profile-overview p {
    color: #777;
    font-size: 13px;
}

.profile-card-5 .profile-overview h2 {
    font-weight: bold;
    color: #1e2832;
}

.profile-card-5 .profile-icons .fa {
    margin: 7px;
    color: #4fb96e;
}

.profile-card-5:hover img {
    transform: rotate(-5deg);
}

.profile-card-6 {
    max-width: 300px;
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
}

.profile-card-6 img {
    transition: all 0.15s linear;
}

.profile-card-6 .profile-name {
    position: absolute;
    top: 10px;
    left: 10px;
    font-size: 25px;
    font-weight: bold;
    color: #FFF;
    padding: 15px 20px;
    background: linear-gradient(140deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0) 50%);
    transition: all 0.15s linear;
}

.profile-card-6 .profile-position {
    position: absolute;
    color: rgba(255, 255, 255, 0.4);
    left: 30px;
    top: 100px;
    transition: all 0.15s linear;
}

.profile-card-6 .profile-overview {
    position: absolute;
    bottom: 0px;
    left: 0px;
    right: 0px;
    background: linear-gradient(0deg, rgba(0, 0, 0, 0.4) 50%, rgba(255, 255, 0, 0));
    color: #FFF;
    padding: 50px 0px 20px 0px;
    transition: all 0.15s linear;
}

.profile-card-6 .profile-overview h3 {
    font-weight: bold;
}

.profile-card-6 .profile-overview p {
    color: rgba(255, 255, 255, 0.7);
}

.profile-card-6:hover img {
    filter: brightness(80%);
}

.profile-card-6:hover .profile-name {
    padding-left: 25px;
    padding-top: 20px;
}

.profile-card-6:hover .profile-position {
    left: 40px;
}

.profile-card-6:hover .profile-overview {
    padding-bottom: 25px;
}

.profile-card-7 {
    background-color: #FFF;
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
}

.profile-card-7 .profile-content {
    padding: 60px 30px 30px 30px;
    background-color: #FFF;
    position: relative;
}

.profile-card-7 .profile-content img {
    position: absolute;
    height: 80px;
    width: 80px;
    border-radius: 50%;
    top: -40px;
    border: 5px solid #FFF;
}

.profile-card-7 .profile-content .profile-name {
    position: absolute;
    font-size: 17px;
    font-weight: bold;
    top: -35px;
    left: 125px;
    color: #FFF;
}

.profile-card-7 .profile-overview {
    padding: 5px 0px;
}

.profile-card-7 .profile-overview p {
    color: #777;
    font-size: 11px;
    font-weight: 600;
}

.profile-card-7 .profile-overview h5 {
    color: #142437;
    font-weight: bold;
}

.profile-card-8 {
    background: linear-gradient(#09121c, #36445a);
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    transition: all 0.25s linear;
}

.profile-card-8 .profile-name {
    position: absolute;
    left: 0px;
    right: 0px;
    top: 25px;
    color: #58d683;
    font-size: 17px;
    font-weight: bold;
}

.profile-card-8 .profile-designation {
    position: absolute;
    left: 0px;
    right: 0px;
    top: 50px;
    color: #FFF;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1px;
}

.profile-card-8 .profile-icons {
    position: absolute;
    left: 0px;
    right: 0px;
    top: 80px;
    color: rgba(255, 255, 255, 0.7);
}

.profile-card-8 .profile-icons .fa {
    margin: 5px;
}

.profile-card-8:hover {
    transform: scale(1.05, 1.05);
}

.profile-card-9 {
    border-radius: 10px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 30px 15px;
    background-color: #FFF;
    transition: all 0.25s linear;
}

.profile-card-9 img {
    height: 120px;
    width: 120px;
    border-radius: 50%;
    margin: 10px auto;
}

.profile-card-9 .profile-name {
    font-size: 15px;
    color: #3249b9;
    font-weight: 600;
}

.profile-card-9 .profile-designation {
    font-size: 13px;
    color: #777;
}

.profile-card-9 .profile-description {
    padding: 10px;
    font-size: 13px;
    color: #777;
    margin: 15px 0px;
    background-color: #F1F2F3;
    border-radius: 5px;
}

.profile-card-9 a {
    padding: 10px 15px;
    background-color: #3249b9;
    color: #FFF;
    font-size: 11px;
    border-radius: 25px;
}

.profile-card-9:hover {
    transform: scale(1.05, 1.05);
}

.profile-card-10 {
    border-radius: 5px;
    box-shadow: 0px 0px 25px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    position: relative;
    margin: 10px auto;
    cursor: pointer;
    padding: 30px 15px;
    background-color: #1f2124;
    color: #EEE;
}

.profile-card-10 img {
    margin: 10px auto;
    width: 100px;
    height: 100px;
    border-radius: 50%;
    border: 10px solid transparent;
    box-shadow: 0px 0px 0px 2px #64c17b;
    transition: all 0.25s linear;
}

.profile-card-10 .profile-name {
    color: #FFF;
    font-weight: bold;
    font-size: 17px;
}

.profile-card-10 .profile-location {
    font-size: 13px;
    opacity: 0.7;
}

.profile-card-10 .profile-description {
    padding: 10px;
    font-size: 13px;
}

.profile-card-10 .profile-icons .fa {
    color: #ffc75e;
    margin: 10px;
}

.profile-card-10:hover img {
    transform: scale(1.1);
}
</style>



@else



                                        <div class="row justify-content-center">
    <div class="col-md-12 col-sm-12">
        <div class="card shadow-lg border-0 rounded-lg mt-5 mx-auto" style="width: 30rem;">
            <h3 class="card-header display-1 text-muted text-center">
                404
            </h3>

            <span class="card-subtitle mb-2 text-muted text-center">
                Are You Looking For Tutors?
            </span>

            <div class="card-body mx-auto">
                <a type="button" href="/tutors"
                class="btn btn-sm btn-info text-white"> Check Here </a>
            </div>
        </div>
    </div>
</div>

<style type="text/css">
    .card {
  position: relative;
  display: flex;
  flex-direction: column;
  min-width: 0;
  word-wrap: break-word;
  background-color: #fff;
  background-clip: border-box;
  border: 1px solid rgba(0, 0, 0, 0.04);
  border-radius: .25rem;
}

.card .card-header {
  background-color: #fff;
  border-bottom: none;
}
</style>
                            
                                                    @endif  




        <div class="card-footer">
            

        </div>







    </div>


</div>
                            </div>
                
                        



                       

                      

                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
     <script src="{{ asset('dashboard/vendor/jquery-3.2.1.min.js') }}"></script>
    <!-- Bootstrap JS-->
    <script src="{{ asset('dashboard/vendor/bootstrap-4.1/popper.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap-4.1/bootstrap.min.js') }}"></script>
    <!-- Vendor JS       -->
    <script src="{{ asset('dashboard/vendor/slick/slick.min.js') }}">
    </script>
    <script src="{{ asset('dashboard/vendor/wow/wow.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/animsition/animsition.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js') }}">
    </script>
    <script src="{{ asset('dashboard/vendor/counter-up/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/counter-up/jquery.counterup.min.js') }}">
    </script>
    <script src="{{ asset('dashboard/vendor/circle-progress/circle-progress.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/chartjs/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/select2/select2.min.js') }}">
    </script>

    <!-- Main JS-->
    <script src="{{ asset('dashboard/js/main.js') }}"></script>



</div>
@endsection
