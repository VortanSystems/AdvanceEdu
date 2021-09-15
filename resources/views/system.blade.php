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


               <a   href="/features_activation"><button class="btn btn-primary rounded-pill" >Features Control</button></a>


            @endif
        </div>

        <div class="card-body">
            @if((Auth::user()->user_type)=='admin')
            

@foreach($get_sys_data as $system)




                    <!-- Begin Page Content -->
                <div class="container-fluid">






                    <!-- Page Heading -->
                    <div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          General Settings
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        


        <form action="/general_data_update" method="POST" enctype="multipart/form-data" >

             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-school"></i></span>
  </div>
  <input value="{{ $system->site_name }}"  type="text" class="form-control" name="institutionname" placeholder="Institution Name" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


           <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
  </div>
  <input value="{{ $system->site_phone }}"  type="text" class="form-control" name="phone" placeholder="Contact Phone" aria-label="System Phone" aria-describedby="basic-addon1">
</div>

          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope"></i></span>
  </div>
  <input value="{{ $system->support_email }}"  type="text" class="form-control" name="email" placeholder="Contact Email" aria-label="Contact Email" aria-describedby="basic-addon1">
</div>






          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-map-marker"></i></span>
  </div>
  <input value="{{ $system->address }}"  type="text" class="form-control" name="physicaladdress" placeholder="Physical Address" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><b>&copy;</b></span>
  </div>
  <input value="{{ $system->copyright_text }}"  type="text" class="form-control" name="copyright" placeholder="Copyright Text" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"> <i class="fa fa-bullseye"></i> </span>
  </div>
  <textarea name="mission"  class="form-control" placeholder="Mission Statement (maximum 300 words)" aria-label="With textarea">{{ $system->site_mission }}</textarea>
</div>
<br>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"> <i class="fa fa-info-circle"></i></span>
  </div>
  <textarea name="brief"  class="form-control" placeholder="Brief Description (maximum 550 words)" aria-label="With textarea">{{ $system->site_brief }}</textarea>
</div>



<br>
<center><button name="generalsystem" class="btn btn-primary">Update</button></center>
 
<br>


            
        </form>



      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Banking Information
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       
              <form action="/env_update" method="POST" enctype="multipart/form-data" >

             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-globe"></i></span>
  </div>
  <input value="<?php echo(env('PUBLIC_KEY')); ?>"  type="text" class="form-control" name="pubkey" placeholder="Fluterwave Public Key" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
  </div>
  <input value="<?php echo(env('SECRET_KEY')); ?>"  type="text" class="form-control" name="seckey" placeholder="Fluterwave Secret Key" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
  </div>
  <input value="<?php echo(env('ENCRYPTION_KEY')); ?>"  type="text" class="form-control" name="enckey" placeholder="Fluterwave Encryption Key" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-table"></i></span>
  </div>
  <input value="<?php echo(env('ENV')); ?>"  type="text" class="form-control" name="platform" placeholder="staging or live" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


<br>
<center><button name="generalsystem" type="button" class="btn btn-primary">Update</button></center>
 
</form>

 



      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          SEO
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
              <form action="/seo_update" method="POST" enctype="multipart/form-data" >

             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-heading"></i></span>
  </div>
  <input value="{{ $system->metatitle }}"  type="text" class="form-control" name="metatitle" placeholder="Meta Title" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


           <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-camera"></i> &nbsp;&nbsp;Meta Image</span>
  </div>
  <input  type="file" class="form-control" name="metaimage" placeholder="Meta Image" aria-label="System Phone" aria-describedby="basic-addon1">

</div>

          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-image"></i> &nbsp;&nbsp;Site Favicon</span>
  </div>
  <input type="file" class="form-control" name="metafavicon" placeholder="Site Favicon" aria-label="Contact Email" aria-describedby="basic-addon1">
 
</div>






          <div class="input-group mb-3">
  <div   class="input-group-prepend" >
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-file-image"></i> &nbsp;&nbsp;System Logo White text
  
  

  </span>
  </div>

  <input   type="file" class="form-control" name="metalogo" placeholder="System Logo" aria-label="Institution Name" aria-describedby="basic-addon1">
 

</div>




          <div class="input-group mb-3">
  <div   class="input-group-prepend" >
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-file-image"></i> &nbsp;&nbsp;System Logo Black Text
  
  

  </span>
  </div>

  <input   type="file" class="form-control" name="metalogo_black" placeholder="System Logo" aria-label="Institution Name" aria-describedby="basic-addon1">
 

</div>


<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"> <i class="fa fa-low-vision"></i> </span>
  </div>
  <textarea name="metadescription" maxlength="160" class="form-control" placeholder="Meta Descrition (160 characters)" aria-label="With textarea">{{ $system->metadescription }}</textarea>
</div>
<br>
<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"> <i class="fa fa-info-circle"></i></span>
  </div>
  <textarea name="metakeywords" class="form-control" placeholder="Meta Keywords (10 meta keywords)" aria-label="With textarea">{{ $system->metakeywords }}</textarea>
</div>



<br>
<center><button name="seoupdate" class="btn btn-primary">Update</button></center>
 
<br>


    
            
        </form>

      </div>
    </div>
  </div>
</div>


<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
          Landing Page Slider
        </button>
      </h5>
    </div>

    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
                 



<div class="col-md-12">
    <div class="row">
        <div class="col-md-4">
<button  data-toggle="modal" data-target="#mediumModal1" class="btn btn-block btn-warning rounded-pill">Slider One</button>
</div>
<div class="col-md-4">
<button  data-toggle="modal" data-target="#mediumModal2" class="btn btn-block btn-warning rounded-pill">Slider Two</button>
</div>
<div class="col-md-4">
<button  data-toggle="modal" data-target="#mediumModal3" class="btn btn-block btn-warning rounded-pill">Slider Three</button>
</div>
</div>
</div>
 <div class="modal fade" id="mediumModal1" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Landing Slider One</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                

        <form action="/slider_one_update" method="POST" enctype="multipart/form-data" >

             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-heading"></i></span>
  </div>
  <input value="{{ $system->slider_one_title }}"  type="text" class="form-control" name="slider_one_title" placeholder="Slider One Title  (max 33)" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


           <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-heading"></i></span>
  </div>
  <input value="{{ $system->slider_one_title_large }}"  type="text" class="form-control" name="slider_one_title_large" placeholder="Slider One Main Title (max 25)" aria-label="System Phone" aria-describedby="basic-addon1">
</div>

  






          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pen"></i></span>
  </div>
  <input value="{{ $system->slider_one_button_1_text }}"  type="text" class="form-control" name="slider_one_button_1_text" placeholder="Button One Text" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-chain"></i></span>
  </div>
  <input value="{{ $system->slider_one_button_1_link }}"  type="text" class="form-control" name="slider_one_button_1_link" placeholder="Button One Link" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pen"></i></span>
  </div>
  <input value="{{ $system->slider_one_button_2_text }}"  type="text" class="form-control" name="slider_one_button_2_text" placeholder="Button Two Text" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-chain"></i></span>
  </div>
  <input value="{{ $system->slider_one_button_2_link }}"  type="text" class="form-control" name="slider_one_button_2_link" placeholder="Button Two Link" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    
  </div>
  <label class="btn btn-warning btn-block"><input hidden="true"  type="file" class="form-control" name="slider_one_image" placeholder="Copyright Text" aria-label="Institution Name" aria-describedby="basic-addon1">

  <b><center> <i class="fa fa-camera"></i> Slider Image (2000x1125) </center></b>

    </label>
</div>


<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"> <i class="fa fa-bullseye"></i> </span>
  </div>
  <textarea name="slider_one_sub_title"  class="form-control" placeholder="Slider One Brief (max 150)" aria-label="With textarea">{{ $system->slider_one_sub_title }}</textarea>
</div>
 



<br>
<center><button name="generalsystem" class="btn btn-primary rounded-lg">Update</button></center>
 
<br>


            
        </form>

                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                            
                        </div>
                    </div>
                </div>
            </div>
































































































            <div class="modal fade" id="mediumModal2" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Landing Slider Two</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                

                                       

        <form action="/slider_two_update" method="POST" enctype="multipart/form-data" >

             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-heading"></i></span>
  </div>
  <input value="{{ $system->slider_two_title }}"  type="text" class="form-control" name="slider_one_title" placeholder="Slider Two Title  (max 33)" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


           <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-heading"></i></span>
  </div>
  <input value="{{ $system->slider_two_title_large }}"  type="text" class="form-control" name="slider_one_title_large" placeholder="Slider Two Main Title (max 25)" aria-label="System Phone" aria-describedby="basic-addon1">
</div>

  






          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pen"></i></span>
  </div>
  <input value="{{ $system->slider_two_button_2_text }}"  type="text" class="form-control" name="slider_one_button_1_text" placeholder="Button Two Text" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-chain"></i></span>
  </div>
  <input value="{{ $system->slider_two_button_2_link }}"  type="text" class="form-control" name="slider_one_button_1_link" placeholder="Button Two Link" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pen"></i></span>
  </div>
  <input value="{{ $system->slider_two_button_1_link }}"  type="text" class="form-control" name="slider_one_button_2_text" placeholder="Button Two Text" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-chain"></i></span>
  </div>
  <input value="{{ $system->slider_two_button_2_text }}"  type="text" class="form-control" name="slider_one_button_2_link" placeholder="Button Two Link" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    
  </div>
  <label class="btn btn-warning btn-block"><input hidden="true"  type="file" class="form-control" name="slider_one_image" placeholder="Copyright Text" aria-label="Institution Name" aria-describedby="basic-addon1">

  <b><center> <i class="fa fa-camera"></i> Slider Image (2000x1125) </center></b>

    </label>
</div>


<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"> <i class="fa fa-bullseye"></i> </span>
  </div>
  <textarea name="slider_one_sub_title"  class="form-control" placeholder="Slider One Brief (max 150)" aria-label="With textarea">{{ $system->slider_two_sub_title }}</textarea>
</div>
 



<br>
<center><button name="generalsystem" class="btn btn-primary rounded-lg">Update</button></center>
 
<br>


            
        </form>


                            </p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                             
                        </div>
                    </div>
                </div>
            </div>






















































































            <div class="modal fade" id="mediumModal3" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="mediumModalLabel">Landing Slider Three</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <p>
                                

        <form action="/slider_three_update" method="POST" enctype="multipart/form-data" >

             <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-heading"></i></span>
  </div>
  <input value="{{ $system->slider_three_title }}"  type="text" class="form-control" name="slider_one_title" placeholder="Slider Three Title" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


           <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-heading"></i></span>
  </div>
  <input value="{{ $system->slider_three_title_large }}"  type="text" class="form-control" name="slider_one_title_large" placeholder="Slider Three Main Title" aria-label="System Phone" aria-describedby="basic-addon1">
</div>

  






          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pen"></i></span>
  </div>
  <input value="{{ $system->slider_three_button_1_text }}"  type="text" class="form-control" name="slider_one_button_1_text" placeholder="Button One Text" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-chain"></i></span>
  </div>
  <input value="{{ $system->slider_three_button_1_link }}"  type="text" class="form-control" name="slider_one_button_1_link" placeholder="Button Two Link" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-pen"></i></span>
  </div>
  <input value="{{ $system->slider_three_button_2_text }}"  type="text" class="form-control" name="slider_one_button_2_text" placeholder="Button Two Text" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-chain"></i></span>
  </div>
  <input value="{{ $system->slider_three_button_2_link  }}"  type="text" class="form-control" name="slider_one_button_2_link" placeholder="Button Two Link" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>



          <div class="input-group mb-3">
  <div class="input-group-prepend">
    
  </div>
  <label class="btn btn-warning btn-block"><input hidden="true"  type="file" class="form-control" name="slider_one_image" placeholder="Copyright Text" aria-label="Institution Name" aria-describedby="basic-addon1">

  <b><center> <i class="fa fa-camera"></i> Slider Image </center></b>

    </label>
</div>


<div class="input-group">
  <div class="input-group-prepend">
    <span class="input-group-text"> <i class="fa fa-bullseye"></i> </span>
  </div>
  <textarea name="slider_one_sub_title"  class="form-control" placeholder="Slider Three Brief" aria-label="With textarea">{{ $system->slider_three_sub_title }}</textarea>
</div>
 



<br>
<center><button name="generalsystem" class="btn btn-primary rounded-lg">Update</button></center>
 
<br>


            
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
  














<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
          Landing Card 1
        </button>
      </h5>
    </div>

    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
 <form action="/update_card_one" method="POST" enctype="multipart/form-data" >


<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-heading"></i></span>
  </div>
  <input  value="{{ $system->landing_card_title_1 }}"  type="text" class="form-control" name="landingtitle" placeholder="Card Title" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-bullseye"></i></span>
  </div>
  <input  value="{{ $system->landing_card_text_1 }}"  type="text" class="form-control" name="landing_text" placeholder="Card Icon" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>

          <div class="input-group mb-3">
  <div   class="input-group-prepend" >
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-file-image"></i> &nbsp;CardImage
  
  

  </span>
  </div>


  <input   type="file" class="form-control" name="landingimage" placeholder="Landing Image" aria-label="Institution Name" aria-describedby="basic-addon1">



</div>







<br>
<center><button name="updatehowtohelpone" class="btn btn-primary">Update</button></center>
 
<br>


    
            
        </form>
      </div>
    </div>
  </div>
  






<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingSix">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
          Landing Card 2
        </button>
      </h5>
    </div>

    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
 <form action="/update_card_two" method="POST" enctype="multipart/form-data" >


<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-heading"></i></span>
  </div>
  <input  value="{{ $system->landing_card_title_2 }}"  type="text" class="form-control" name="landingtitle" placeholder="Card Title" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-bullseye"></i></span>
  </div>
  <input  value="{{ $system->landing_card_text_2 }}"  type="text" class="form-control" name="landing_text" placeholder="Card Icon" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>

          <div class="input-group mb-3">
  <div   class="input-group-prepend" >
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-file-image"></i> &nbsp;CardImage
  
  

  </span>
  </div>


  <input   type="file" class="form-control" name="landingimage" placeholder="Landing Image" aria-label="Institution Name" aria-describedby="basic-addon1">



</div>







<br>
<center><button name="updatehowtohelpone" class="btn btn-primary">Update</button></center>
 
<br>


    
            
        </form>
      </div>
    </div>
  </div>
  






<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
          Landing Card 3
        </button>
      </h5>
    </div>

    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordion">
      <div class="card-body">
 <form action="/update_card_three" method="POST" enctype="multipart/form-data" >


<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-heading"></i></span>
  </div>
  <input  value="{{ $system->landing_card_title_3 }}"  type="text" class="form-control" name="landingtitle" placeholder="Card Title" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>


          <div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-bullseye"></i></span>
  </div>
  <input  value="{{ $system->landing_card_text_3 }}"  type="text" class="form-control" name="landing_text" placeholder="Card Icon" aria-label="Institution Name" aria-describedby="basic-addon1">
</div>

          <div class="input-group mb-3">
  <div   class="input-group-prepend" >
    <span class="input-group-text" id="basic-addon1"><i class="fa fa-file-image"></i> &nbsp;CardImage
  
  

  </span>
  </div>


  <input   type="file" class="form-control" name="landingimage" placeholder="Landing Image" aria-label="Institution Name" aria-describedby="basic-addon1">



</div>







<br>
<center><button name="updatehowtohelpone" class="btn btn-primary">Update</button></center>
 
<br>


    
            
        </form>
      </div>
    </div>
  </div>
  































@endforeach


@else









                                        


                                        <div class="row justify-content-center">
    <div class="col-md-12 col-sm-12">
        <div class="card shadow-lg border-0 rounded-lg mt-5 mx-auto" style="width: 30rem;">
            <h3 class="card-header display-1 text-muted text-center">
                404
            </h3>

            <span class="card-subtitle mb-2 text-muted text-center">
                Are You Looking For Courses?
            </span>

            <div class="card-body mx-auto">
                <a type="button" href="/courses"
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

        </div>

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
