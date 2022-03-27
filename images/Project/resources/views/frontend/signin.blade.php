<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"></script>
    <link rel="stylesheet" href="{{asset('frontend/css/login.css')}}" />
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h3 style="color:orange;">Member Login</h3>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="info@jea.com" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
            <br><br>

            <p class="footer-company-name" style="font-size: 12px;margin-top:50px;">&copy;Design & Developed by <a
                    href="https://www.facebook.com/apurbo.cse" style="color:orange; text-decoration:none; " >
                    <b style="color:orange; font-weight: 600" class="ml12">Apurbo Roy</b></a>
            </p>
            
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Jouypurhat Engineer's Association</h3>
            <p>
              Are You Engineer / Engineering Students ? So you can create an account.
            </p>
            <button class="btn transparent" id="sign-up-btn">
                <a href="{{route('join')}}" style="text-decoration:none;color:white">Sign Up</a>
            </button>
            <button class="btn transparent" id="sign-up-btn">
                <a href="/" style="text-decoration:none;color:white">Home</a>
            </button>
            
          </div>
          <img src="img/log.svg" class="image" alt="" />
        </div>
      </div>
    </div>
        
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
    <style>
        .ml12 {
    font-weight: 50;
    font-size: 10px;
    text-transform: uppercase;
    letter-spacing: 0.5em;
    margin-left:3px;
    }


    </style>

    <script>
    // Wrap every letter in a span
    var textWrapper = document.querySelector('.ml12');
    textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");

    anime.timeline({loop: true})
    .add({
        targets: '.ml12 .letter',
        translateX: [40,0],
        translateZ: 0,
        opacity: [0,1],
        easing: "easeOutExpo",
        duration: 1200,
        delay: (el, i) => 500 + 30 * i
    }).add({
        targets: '.ml12 .letter',
        translateX: [0,-30],
        opacity: [1,0],
        easing: "easeInExpo",
        duration: 1100,
        delay: (el, i) => 100 + 30 * i
    });</script>


  </body>
</html>
