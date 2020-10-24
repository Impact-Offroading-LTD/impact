<main class="page login-page">
   <section class="clean-block dark py-4" style="min-height:600px;">
      <div class="container">
         <div class="card" style="    max-width: 500px;    margin: auto;
            padding: 40px;border-radius:25px;">
            <div class="card-body">
               
            
            @if($step == 0)
            <center>
            <div class="user-avatar" style="display: block;margin-left: auto;margin-right: auto;background-image: url('https://media.discordapp.net/attachments/756086069275131945/769594596077862952/impact-discord.png?width=468&height=468');width:75px;height:75px;"></div>

<br><h5 class="text-center text-danger"><i class="fad fa-times-hexagon" style=""></i> User not found!</h5>
<p class="text-center">Seems the account your trying to sign into does not exist or the account has been terminated by our staff team.</p>
            
            </center>
            @endif

               @if($step == 1)
               <form wire:submit.prevent="getuser">
               <h2 class="text-info text-center">Log In</h2>
               <center><p style="text-center align-center">Use your Impact Account.</p></center>
               <div class="form-group"><input class="form-control item"  wire:model="email" placeholder="Email" type="email" id="email" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></div>
               <button class="btn btn-primary btn-block" type="submit">Next</button> 
               <br>
               <p class="text-center">Or sign in with Google</p>
               <img class="" style="display: block;margin-left: auto;margin-right: auto;" src="https://media.discordapp.net/attachments/760701188030857223/765223635572621372/googlelogo_color_272x92dp.png" alt="" width="72">
               </form>
               @endif

               @if($step == 2)
               <form method="POST" action="/login">
               <div class="user-avatar" style="display: block;margin-left: auto;margin-right: auto;background-image: url('https://media.discordapp.net/attachments/756086069275131945/769594596077862952/impact-discord.png?width=468&height=468');width:75px;height:75px;"></div>

               <br><h5 class="text-center">Welcome, {{$username}}!</h5>
               <p class="text-center">{{$email}}</p><br>

               <div class="form-group"><input class="form-control" placeholder="Password" type="password" id="password" autocomplete="off" style="background-image: url(&quot;data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAASCAYAAABSO15qAAAAAXNSR0IArs4c6QAAAPhJREFUOBHlU70KgzAQPlMhEvoQTg6OPoOjT+JWOnRqkUKHgqWP4OQbOPokTk6OTkVULNSLVc62oJmbIdzd95NcuGjX2/3YVI/Ts+t0WLE2ut5xsQ0O+90F6UxFjAI8qNcEGONia08e6MNONYwCS7EQAizLmtGUDEzTBNd1fxsYhjEBnHPQNG3KKTYV34F8ec/zwHEciOMYyrIE3/ehKAqIoggo9inGXKmFXwbyBkmSQJqmUNe15IRhCG3byphitm1/eUzDM4qR0TTNjEixGdAnSi3keS5vSk2UDKqqgizLqB4YzvassiKhGtZ/jDMtLOnHz7TE+yf8BaDZXA509yeBAAAAAElFTkSuQmCC&quot;); background-repeat: no-repeat; background-attachment: scroll; background-size: 16px 18px; background-position: 98% 50%; cursor: auto;"></div>
               <!--<div class="form-group">
                  <div class="form-check"><input class="form-check-input" type="checkbox" id="checkbox"><label class="form-check-label" for="checkbox">Remember me</label></div>
               </div>-->
               <button class="btn btn-primary btn-block" type="submit">Log In</button> 
               </form>
               @endif


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
      <p>© 2020 Copyright Text</p>
   </div>
</footer>