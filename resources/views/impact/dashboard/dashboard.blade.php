<div class="container-fluid gedf-wrapper py-4">
<div class="card" style="border-radius: 25px;padding:0px;">
<div class="card-body" style="padding:0px;">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a wire:click="setPage('home')" href="#" class="nav-link @if($active == 'home') active @else text-dark @endif" style="border-radius:25px;text-decoration:none;"> <i class="far fa-home" style="margin-right:5px;"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#" style="text-decoration:none;"> <i class="far fa-shopping-cart" style="margin-right:5px;"></i> Marketplace</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#" style="text-decoration:none;"> <i class="far fa-camera" style="margin-right:5px;"></i> Creators</a>
  </li>
  <li class="nav-item">
    <a wire:click="setPage('history')" href="#" class="nav-link @if($active == 'history') active @else text-dark @endif" style="border-radius:25px;text-decoration:none;"> <i class="far fa-history" style="margin-right:5px;"></i> Your Rides</a>
  </li>
  <li class="nav-item">
    <a wire:click="setPage('vehicles')" class="nav-link @if($active == 'vehicles') active @else text-dark @endif" href="#" style="border-radius:25px;text-decoration:none;"> <i class="far fa-truck-monster" style="margin-right:5px;"></i> Your Vehicles</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#" style="text-decoration:none;"> <i class="far fa-map-marker-alt" style="margin-right:5px;"></i> Trails</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="/account/settings" style="text-decoration:none;"> <i class="far fa-sliders-v-square" style="margin-right:5px;"></i> Account Settings</a>
  </li>
</ul>
</div>
</div><br>
        <div class="row">
            <div class="col-md-3">
                <div class="card" style="border-radius: 25px;">
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <div class="user-avatar" style="background-image: url('https://media.discordapp.net/attachments/756086069275131945/769594596077862952/impact-discord.png');width:75px;height:75px;"></div>
                            <div class="h5" style="margin-top:10px;">{{Auth::user()->name}}</div>
                        </li>
                        <li class="list-group-item">
                            <div class="h6 text-muted">Followers</div>
                            <div class="h5">0</div>
                        </li>
                        <li class="list-group-item">
                            <div class="h6 text-muted">Following</div>
                            <div class="h5">0</div>
                        </li>
                        <!--<li class="list-group-item">Lives in Shediac, NB</li>-->
                    </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-6 gedf-main">

                @if($active == 'home')
                <!--- \\\\\\\Post-->
                <div class="card gedf-card" style="border-radius: 25px;">
                    <div class="card-body">
                        <div class="tab-content" id="myTabContent">
                                <div class="form-group">
                                    <label class="sr-only" for="message">post</label>
                                    <textarea class="form-control" id="message" rows="3" placeholder="Going riding?" style="border-radius: 25px;resize: none;"></textarea>
                                </div>
                        </div>
                                <button type="submit" class="btn btn-primary" style="border-radius: 25px;width:100%">Post</button>

                    </div>
                </div>
                <br>
                <!-- Post /////-->

                <!--- \\\\\\\Post-->
                <div class="card gedf-card" style="border-radius: 25px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://media.discordapp.net/attachments/756086069275131945/769594596077862952/impact-discord.png" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">Impact User</div>
                                    <div class="h7 text-muted">@impactuser</div>
                                </div>
                            </div>
                            <!--<div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Hide</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>-->
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>October 10, 2020 at 6:39PM</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">Our Example Post</h5>
                        </a>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                            sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="far fa-thumbs-up"></i> Like</a>
                        <a href="#" class="card-link"><i class="far fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="far fa-share"></i> Share</a>
                    </div>
                </div><br><br>
                <!-- Post /////-->

                                <!--- \\\\\\\Post-->
                                <div class="card gedf-card" style="border-radius: 25px;">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" src="https://media.discordapp.net/attachments/756086069275131945/769594596077862952/impact-discord.png" alt="">
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0">Impact User</div>
                                    <div class="h7 text-muted">@impactuser</div>
                                </div>
                            </div>
                            <!--<div>
                                <div class="dropdown">
                                    <button class="btn btn-link dropdown-toggle" type="button" id="gedf-drop1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="gedf-drop1">
                                        <div class="h6 dropdown-header">Configuration</div>
                                        <a class="dropdown-item" href="#">Save</a>
                                        <a class="dropdown-item" href="#">Hide</a>
                                        <a class="dropdown-item" href="#">Report</a>
                                    </div>
                                </div>
                            </div>-->
                        </div>

                    </div>
                    <div class="card-body">
                        <div class="text-muted h7 mb-2"> <i class="fa fa-clock-o"></i>October 10, 2020 at 6:39PM</div>
                        <a class="card-link" href="#">
                            <h5 class="card-title">Our Example Post</h5>
                        </a>

                        <p class="card-text">
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quo recusandae nulla rem eos ipsa praesentium esse magnam nemo dolor
                            sequi fuga quia quaerat cum, obcaecati hic, molestias minima iste voluptates.
                        </p>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="card-link"><i class="far fa-thumbs-up"></i> Like</a>
                        <a href="#" class="card-link"><i class="far fa-comment"></i> Comment</a>
                        <a href="#" class="card-link"><i class="far fa-share"></i> Share</a>
                    </div>
                </div><br><br>
                <!-- Post /////-->


                @endif

                @if($active == 'events')
                <livewire:dashboard.components.events/>
                @endif

                @if($active == 'history')
                <livewire:dashboard.components.rides/>
                @endif

                @if($active == 'vehicles')
                <livewire:dashboard.components.vehicles/>
                @endif

            </div>
            <div class="col-md-3">
            <div class="card gedf-card" style="border-radius: 25px;">
                    <div class="card-body">
                        <h5 class="card-title">Weather In Shediac, NB</h5>
                        <h6 class="card-subtitle mb-2 text-muted" style="font-size:35px;"><i class="far fa-cloud-snow text-gray"></i> 11°C</h6>
                        <p class="card-text" style="padding:0px;margin:0px;">Cloudy with chances of snow tonight</p>
                    </div>
                </div><br>
                <div class="card gedf-card" style="border-radius: 25px;">
                    <div class="card-body">
                    <img class="rounded-circle" width="45" src="https://cdn.discordapp.com/avatars/322912889566396429/13c9669538850be627170ea50f152bcf.webp?size=1024" alt="" style="margin-bottom:15px;">
                        <h5 class="card-title">Ride Dirt Bikes</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Official Partner</h6>
                        <p class="card-text">
                        Dirt biking is a passion of mine that I take very seriously. In my videos, I describe my technique of riding trails and it also shows my course of learning how to ride motocross tracks. This channel is not only about riding dirt bikes, it is also about fixing and maintaining them. I am starting a massive bike project that will soon be published. It will have in-depth how-to videos on almost everything you could need to know on dirt bikes from the wheels to the bars.
                        </p>
                        <a href="https://www.youtube.com/channel/UC60YvZ70lwmwCJRpVLb0Vfw?sub_confirmation=1" class="card-link">Creator Channel</a>
                    </div>
                </div>
                <div class="card gedf-card"  style="border-radius: 25px;margin-top:10px;">
                        <div class="card-body">
                        <img class="rounded-circle" width="45" src="https://media.discordapp.net/attachments/756086069275131945/770012382549639178/119438745_3198057123642433_5296281851253655353_n.png" alt="" style="margin-bottom:15px;">
                    
                            <h5 class="card-title">G-Portal</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Game Hosting Company</h6>
                            <p class="card-text">Today the #Halloween event - Fear Evolved 4 starts in #ARK. Not only is it spooky, there is also a lot of cool stuff to get your hands on, like scary dino skins and some new items; #Chibis is our new favourite! What are you looking forward to the most?</p>
                            <a href="https://g-portal.com/arksurvival" class="card-link">https://g-portal.com/arksurvival</a>
                        </div>
                    </div>
            </div>
        </div>
    </div>

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