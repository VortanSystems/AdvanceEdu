@extends('layouts.app')

@section('content')







<!DOCTYPE html>
<html lang="en">

<head>



    <!-- Fontfaces CSS-->
    <link href="dashboard/css/font-face.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="dashboard/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="dashboard/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="dashboard/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="dashboard/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index">
                            <img src="images/icon/logo.png" alt="CoolAdmin" />
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
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                       
                        </li>
                        <li>
                            <a href="chart">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="login">Login</a>
                                </li>
                                <li>
                                    <a href="register">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="button">Button</a>
                                </li>
                                <li>
                                    <a href="badge">Badges</a>
                                </li>
                                <li>
                                    <a href="tab">Tabs</a>
                                </li>
                                <li>
                                    <a href="card">Cards</a>
                                </li>
                                <li>
                                    <a href="alert">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal">Modals</a>
                                </li>
                                <li>
                                    <a href="switch">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo">Typography</a>
                                </li>
                            </ul>
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
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="index">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="index2">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="index3">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="index4">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="chart">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="table">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="form">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="calendar">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="map">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="login">Login</a>
                                </li>
                                <li>
                                    <a href="register">Register</a>
                                </li>
                                <li>
                                    <a href="forget-pass">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="#">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="list-unstyled navbar__sub-list js-sub-list">
                                <li>
                                    <a href="button">Button</a>
                                </li>
                                <li>
                                    <a href="badge">Badges</a>
                                </li>
                                <li>
                                    <a href="tab">Tabs</a>
                                </li>
                                <li>
                                    <a href="card">Cards</a>
                                </li>
                                <li>
                                    <a href="alert">Alerts</a>
                                </li>
                                <li>
                                    <a href="progress-bar">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="modal">Modals</a>
                                </li>
                                <li>
                                    <a href="switch">Switchs</a>
                                </li>
                                <li>
                                    <a href="grid">Grids</a>
                                </li>
                                <li>
                                    <a href="fontawesome">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="typo">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
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

        </div>

        <div class="card-body">
            @if((Auth::user()->user_type)=='admin')
                             
                               












                               <form class="user" action = "create" method = "post"  enctype="multipart/form-data">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    
              

               <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Course Status') }}</label>



       <div class="col-md-9">

                <select name="course_status" class="form-control">
                                <option value="active" >Activated</option>
                                <option selected="true" value="inactive" >Deactivated</option>
                            </select>
                                

                              
                            </div>
                        </div>




        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Course Title') }}</label>

       <div class="col-md-9">
                                <input id="email" type="text" class="form-control" name="course_title" required autocomplete="email" autofocus>

                              
                            </div>
                        </div>


 <script>
      $('#summernote').summernote({
        placeholder: 'Hello Bootstrap 4',
        tabsize: 2,
        height: 100
      });
    </script>


                           <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Course Price') }}</label>

       <div class="col-md-9">
                                <input id="email" type="number" class="form-control" name="price" required autocomplete="email" autofocus>

                              
                            </div>
                        </div>

    




    

<div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Sub Title') }}</label>

       <div class="col-md-9">
                                <input id="email" type="text" class="form-control" name="course_sub_title" required autocomplete="email" autofocus>

                              
                            </div>
                        </div>

    


        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Short Description') }}</label>

       <div class="col-md-9">
                                <input id="email" type="text" class="form-control" name="sub_description" required autocomplete="email" autofocus>

                              
                            </div>
                        </div>

    



    


        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Course Preview Image') }}</label>

       <div class="col-md-9">


                              <label class="btn btn-block btn-success rounded-pill"><input type="file"   hidden name="preview_image" required>  <i class="fas fa-cloud-upload-alt" aria-hidden="true"></i>  &nbsp;Click To Upload</label>

                              
                            </div>
                        </div>




        <div class="form-group row">
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('Course Description') }}</label>

      <div class="col-md-7">
                                <!--<input id="summernote" type="text" class="form-control" name="course_description" required autocomplete="email" autofocus>-->
                                
                              






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
     Clear This Text Before You Start Typing...
     
    </div>
    <textarea  id="summernote" class="html-view"  name="course_description" required></textarea>
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
                            <label for="email" class="col-md-3 col-form-label text-md-right">{{ __('') }}</label>

       <div class="col-md-9">
                            

             <center><input id="email" class="btn btn-success rounded-pill" name="addcourse" type = 'submit' value = "&nbsp;&nbsp;&nbsp;&nbsp;Add Course&nbsp;&nbsp;&nbsp;&nbsp;"/></center>                 
                            </div>
                        </div>




    
    
   
</form>









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
    <script src="dashboard/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="dashboard/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="dashboard/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="dashboard/vendor/slick/slick.min.js">
    </script>
    <script src="dashboard/vendor/wow/wow.min.js"></script>
    <script src="dashboard/vendor/animsition/animsition.min.js"></script>
    <script src="dashboard/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="dashboard/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="dashboard/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="dashboard/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="dashboard/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="dashboard/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="dashboard/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="dashboard/js/main.js"></script>



</div>
@endsection
