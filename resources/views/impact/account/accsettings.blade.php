<div class="container-fluid gedf-wrapper py-4">
<div class="card" style="border-radius: 25px;padding:0px;">
<div class="card-body" style="padding:0px;">
<ul class="nav nav-pills nav-fill">
  <li class="nav-item">
    <a class="nav-link text-dark" style="border-radius:25px;text-decoration:none;" href="/dashboard"> <i class="far fa-home" style="margin-right:5px;"></i> Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#" style="text-decoration:none;"> <i class="far fa-shopping-cart" style="margin-right:5px;"></i> Marketplace</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#" style="text-decoration:none;"> <i class="far fa-camera" style="margin-right:5px;"></i> Creators</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#" style="text-decoration:none;"> <i class="far fa-history" style="margin-right:5px;"></i> Your Rides</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#" style="text-decoration:none;"> <i class="far fa-truck-monster" style="margin-right:5px;"></i> Your Vehicles</a>
  </li>
  <li class="nav-item">
    <a class="nav-link text-dark" href="#" style="text-decoration:none;"> <i class="far fa-map-marker-alt" style="margin-right:5px;"></i> Trails</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="/account/settings" style="border-radius:25px;text-decoration:none;"> <i class="far fa-sliders-v-square" style="margin-right:5px;"></i> Account Settings</a>
  </li>
</ul>
</div>
</div><br>
        <div class="row">
            <div class="col-md-3">
                <style>
                    .list-group button {
                        border: none;
                        outline:none;
                    }
                </style>

                <div class="list-group" style="border-radius:25px;">
                <button wire:click="setPage('general')" class="list-group-item list-group-item-action @if($active == 'general') active @endif" aria-current="true"><i class="fas fa-cog"></i> General Settings</button>
                <button wire:click="setPage('profilepicture')" class="list-group-item list-group-item-action @if($active == 'profilepicture') active @endif"><i class="far fa-smile-beam"></i> Profile Picture</button>
                <button wire:click="setPage('security')" class="list-group-item list-group-item-action @if($active == 'security') active @endif"><i class="far fa-fingerprint"></i> Security</button>
                <button wire:click="setPage('connections')" class="list-group-item list-group-item-action @if($active == 'connections') active @endif"><i class="far fa-plug"></i> Connections</button>
                <button href="#" class="list-group-item list-group-item-action" disabled><i class="far fa-credit-card"></i> Payment Methods</button>
                <button href="#" class="list-group-item list-group-item-action" disabled><i class="far fa-user-secret"></i> Privacy</button>
                <button href="#" class="list-group-item list-group-item-action" disabled><i class="far fa-laptop"></i> Connected Devices</button>
                <button href="#" class="list-group-item list-group-item-action" disabled><i class="far fa-cogs"></i> Advanced Settings</button>
                </div><br>

                @if(Auth::user()->role == "admin")
                <div class="list-group" style="border-radius:25px;">
                <a href="#" class="list-group-item list-group-item-action"><i class="far fa-cog"></i> General Admin Settings</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="far fa-users"></i> Users</a>
                <a href="#" class="list-group-item list-group-item-action"><i class="far fa-cloud"></i> Storage Monitoring</a>
                </div>
                <br>
                @endif

                <div class="list-group" style="border-radius:25px;">
                <button class="list-group-item list-group-item-action" disabled><i class="far fa-book"></i> Policies</button>
                <button wire:click="setPage('about')" href="#" class="list-group-item list-group-item-action @if($active == 'about') active @endif"><i class="far fa-info-circle"></i> About Impact</button>
                </div>

            </div>
            <div class="col-md-6 gedf-main">

            @if($active == 'general')
            <livewire:account.general/>
            @endif

            @if($active == 'profilepicture')
            <livewire:account.profilepicture/>
            @endif

            @if($active == 'security')
            <livewire:account.security/>
            @endif

            @if($active == 'connections')
            <livewire:account.connections/>
            @endif

            @if($active == 'about')
            <div class="card" style="border-radius: 25px;">
                <div class="card-body">
                   <center>
                    <img src="/impact.svg" alt="Italian Trulli" width="300"><br>
                    <hr>
                      <p style="padding:0px;margin:0px;"><strong>Version : 1.1 Release</strong></p>
                      <p>Created &amp; Designed by : Lynx Group <br><img src="/lynx-p.svg" alt="Italian Trulli" class="align-center text-center" style="width:75px;"></p>
                      <br>
                      <p>We would like to extend our thanks to the following sponsors for funding Impact development. G-Portal, Google Cloud & Fly Racing</p>
                      <br>
                      <a href="https://github.com/Impact-Offroading-LTD/impact" class="btn btn-primary float-center" style="border-radius: 25px;"><i class="fab fa-github"></i> Github Page</a>
                    </center>
                </div>
             </div>
             <br>
            @endif

            </div>
            <!--<div class="col-md-3">
                <div class="card gedf-card" style="border-radius: 25px;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                            card's content.</p>
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card gedf-card"  style="border-radius: 25px;margin-top:10px;">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                                card's content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
            </div>-->
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