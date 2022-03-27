
    <!-- Footer Start -->
    <footer class="footer-ditributed">
        <div class="footer-left">
            <img src="{{asset('frontend/images/logo.png')}}" alt="logo">
            <h3 style="font-size: 20px;" class="ml6">Joypurhat <span>Engineer's</span> Association</h3>
            <p class="footer-links">
            </p>
            <p class="footer-company-name" style="font-size: 12px;">&copy;Design & Developed by <a
                    href="https://www.facebook.com/apurbo.cse"><b style="color:orange;  " class="ml12">Apurbo Roy</b></a></p>
                    <br>
                    
            <p><a href="https://www.facebook.com/apurbo.cse"><b style="color:white; " class="ml12">Get in Touch</b></a></p>


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
                });
            
            </script>


        </div>

        <div class="footer-center">
            <div>
                <i class="fa fa-map-marker"></i>
                <p><span>Joypurhat,Rajshahi</span>Bangladesh</p>
            </div>

            <div>
                <i class="fa fa-phone"></i>
                <p>+880 1738-426929</p>
            </div>

            <div>
                <i class="fa fa-envelope"></i>
                <p><a href="mail to: support@CodeSmoker.com">jea@gmail.com</a></p>
            </div>
        </div>

        <div class="footer-right">
            <p class="footer-commpany-about">
                <span>About JEA</span>
                Joypurhat Engineer's Association - A single, uninterrupted and well-organized platform for
                all engineers in Joypurhat. In order to build a better Joypurhat where social and cultural
                responsibilities are fulfilled. It is completely compromised and unprofitable. The activities
                are being conducted in a well-planned and well-organized manner respecting the views of the
                competent administration panel and all the members.
            </p>
            <div class="footer-icons">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            </div>
        </div>
    </footer>

    <!-- Footer End -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- JavaScript Libraries -->