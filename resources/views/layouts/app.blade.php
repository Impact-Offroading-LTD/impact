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
</style>
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
                 @guest
                 <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                       <div class="user-avatar" style="background-image: url('https://media.discordapp.net/attachments/756086069275131945/769594596077862952/impact-discord.png');width:30px;height:30px;"></div>

                    </a>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="min-width: 257px;">

                       <a class="dropdown-item" href="/login"/>
                       <i class="far fa-sign-in-alt" aria-hidden="true"></i> Login
                       </a>
                       <a class="dropdown-item" href="/register"/>
                       <i class="far fa-edit" aria-hidden="true"></i> Register
                       </a>

                    </div>
                 </li>
                 @else
                 <style>
                    .dropdown-menu::before,
                    .dropdown-menu::after {
                    border: none;
                    content: none;
                    }
                 </style>
                 <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        @php
                         $discord_connection = DiscordConnection::where('oaccount', Auth::user()->id)->first();
                        @endphp
                        @if(Auth::user()->avatar_url)
                        <div class="user-avatar" style="background-image: url('https://cdn.discordapp.com/avatars/{{$discord_connection->discord_id}}/{{$discord_connection->avatar}}.jpg');width:30px;height:30px;"></div>
                        @else
                        <div class="user-avatar" style="background-image: url('https://www.gravatar.com/avatar/{{ md5( strtolower( trim( Auth::user()->email ) ) )}}&s=100');width:30px;height:30px;"></div>
                        @endif
                        <!--<div>
                       <!--
                       <h4 style="font-size:16px;margin-top:7px;display:inline;color:#fff !important;">{{Auth::user()->name}}</h4>
                       </div>-->
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" style="min-width: 257px;">
                       <center>
                          <!-- https://ui-avatars.com/api/?name=Tek Xylo&color=0d6efd&background=2d2d2d -->
                          @if(Auth::user()->avatar_url)
                          <div class="user-avatar" style="background-image: url('https://cdn.discordapp.com/avatars/{{$discord_connection->discord_id}}/{{$discord_connection->avatar}}.jpg');width:50px;height:50px;"></div>
                          @else
                          <div class="user-avatar" style="background-image: url('https://www.gravatar.com/avatar/{{ md5( strtolower( trim( Auth::user()->email ) ) )}}&s=100');width:50px;height:50px;"></div>
                          @endif

                          <h4 class="text-primary" style="margin-bottom:0px;padding-bottom:0px;font-size:18px;margin-top:7px;">{{Auth::user()->name}}</h4>
                          <p style="margin-bottom:0px;padding-bottom:0px;color:dark-gray;font-size:14px;"><strong>{{'@' . Auth::user()->tag}}</strong></p>
                       </center>
                       <hr>
                       <a class="dropdown-item" href="/dashboard"/>
                       <i class="far fa-user" aria-hidden="true"></i> Profile
                       </a>
                       <!--<a class="dropdown-item disabled" href="/teams/unleashed"/>
                       <i class="fas fa-flag-checkered" aria-hidden="true"></i> Teams
                       </a>-->
                       <a class="dropdown-item" href="/account/settings"/>
                       <i class="far fa-cog" aria-hidden="true"></i>  Account Settings
                       </a>
                       <a class="dropdown-item" href="{{ route('logout') }}"
                          onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                       <i class="far fa-sign-out-alt
                          " aria-hidden="true"></i>  {{ __('Logout') }}
                       </a>
                       <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                          @csrf
                       </form>
                    </div>
                 </li>
                 @endguest
              </ul>
           </div>
        </div>
    </nav>

    {{ $slot }}
</div>


@extends('layouts.components.scripts')
</body>
</html>
