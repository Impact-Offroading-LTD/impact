<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Impact</title>
	<link rel="icon" type="image/svg+xml" href="/favicon.svg">
        <!-- Styles -->
       
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css" integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK" crossorigin="anonymous">
        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/fontawesome/css/all.css">
        <link rel="stylesheet" href="/css/features.css">
        <link rel="stylesheet" href="/css/highlight-blue.css">
        <link rel="stylesheet" href="/css/highlight-clean.css">
        
        <style>
         .user-avatar{
            width: 60px;
            height: 60px;
            -webkit-border-radius: 60px;
            -webkit-background-clip: padding-box;
            -moz-border-radius: 60px;
            -moz-background-clip: padding;
            border-radius: 60px;
            background-clip: padding-box;

            background-size: cover;
            background-position: center center;
         }

         .center-block {
            display: block;
            margin-right: auto;
            margin-left: auto;
         }

         body {
            background: #e9ecef !important;
         }
         </style>
         <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    </head>


<body>

<div id="app">
    <nav class="navbar navbar-expand-md navbar-dark bg-impact shadow" style="background-color: #222425;border-color: #222425;">
        <div class="container">
           <a class="navbar-brand" href="{{ url('/') }}">
           <img src="/impact-w.svg" alt="Italian Trulli" style="width: 100px;height:40px;"><br>
           </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
           <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav mr-auto">
              <li class="nav-item px-2">
                    <a class="nav-link" href="/dashboard" style="text-decoration:none;"><i class="far fa-home" style="margin-right:5px;"></i> {{ __('Home') }}</a>
                 </li>
                 <li class="nav-item px-2">
                    <a class="nav-link" href="#account/myvehicles" style="text-decoration:none;"><i class="far fa-calendar-alt" style="margin-right:5px;"></i> {{ __('Events') }}</a>
                 </li>
                 <li class="nav-item px-2">
                    <a class="nav-link" href="#account/myvehicles" style="text-decoration:none;"><i class="far fa-book" style="margin-right:5px;"></i> {{ __('Wiki') }}</a>
                 </li>
                 <li class="nav-item px-2">
                    <a class="nav-link" href="#account/myvehicles" style="text-decoration:none;"><i class="far fa-megaphone" style="margin-right:5px;"></i> {{ __('Blog & News') }}</a>
                 </li>
              </ul>
              <ul class="navbar-nav ml-auto">
              </ul>
           </div>
        </div>
    </nav>


<main class="page login-page">
   <section class="clean-block dark py-4" style="min-height:600px;">
      <div class="container">       
         <div class="card" style="margin: auto;border-radius:25px;">
            <div class="card-body">
               
                  <div class="col-sm-12">
                  <p style="padding:0px;margin:0px;font-size:25px;" class="text-danger"><img class="mb-3" src="/dirtbike.svg" alt="" width="50" style="margin-top:10px;"> <strong>Page Not Found</strong></p>
                  <p><strong>Looks like you got lost!</strong><br>Seems you might want to call your buddys for help. The page you're after no longer exists.</p>
                  <a href="/" class="btn btn-danger" style="border-radius:25px;">Go Home</a>

            </div>
         </div>
      </div>
   </section>
</main>
<footer class="page-footer dark">
   <div class="container">
      <div class="row">
         <div class="col-sm-3">
            <h5>Get started</h5>
            <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">Sign up</a></li>
               <li><a href="#">Downloads</a></li>
            </ul>
         </div>
         <div class="col-sm-3">
            <h5>About us</h5>
            <ul>
               <li><a href="#">Company Information</a></li>
               <li><a href="#">Contact us</a></li>
               <li><a href="#">Reviews</a></li>
            </ul>
         </div>
         <div class="col-sm-3">
            <h5>Support</h5>
            <ul>
               <li><a href="#">FAQ</a></li>
               <li><a href="#">Help desk</a></li>
               <li><a href="#">Forums</a></li>
            </ul>
         </div>
         <div class="col-sm-3">
            <h5>Legal</h5>
            <ul>
               <li><a href="#">Terms of Service</a></li>
               <li><a href="#">Terms of Use</a></li>
               <li><a href="#">Privacy Policy</a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="footer-copyright">
    <p>© 2021 Copyrighted by Impact Offroading | Created & Designed by : Lynx Group <img src="/lynx.svg" alt="Italian Trulli" class="align-center text-center" style="width:25px;"></p>   
   </div>
</footer>

</div>

</body>
</html>