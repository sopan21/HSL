<!-- footer section starts  -->

<footer class="footer">

   <section class="flex">

      <div class="box">
         <a href="tel:8459606454"><i class="fas fa-phone"></i><span>8459606454</span></a>
         <a href="tel:9021035212"><i class="fas fa-phone"></i><span>9021035212</span></a>
         <a href="mailto:HSL_PVT_LTD@gmail.com"><i
               class="fas fa-envelope"></i><span>HSL_PVT_LTD@gmail.com</span></a>
         <a href="https://maps.app.goo.gl/n3bDX4rMFqLJ92i98"><i class="fas fa-map-marker-alt"></i><span>Chh. Sambhaji-Nagar</span></a>
      </div>

      <div class="box">
         <a href="home.php"><span>Home</span></a>
         <a href="about.php"><span>About</span></a>
         <a href="contact.php"><span>Contact</span></a>
         <a href="listings.php"><span>All Listings</span></a>
         <a href="saved.php"><span>Saved Properties</span></a>
      </div>
      <div class="box">
         <a href="https://www.facebook.com/sopan.jadhav.7393264"><span>Facebook</span><i
               class="fab fa-facebook-f"></i></a>
         <a href="https://twitter.com/SopanJadha37952"><span>Twitter</span><i class="fab fa-twitter"></i></a>
         <span><!-- dbutton starts -->
         <button class="dbutton" onclick="togglePopup()" style="border: none; font-size: 170%; margin-top: 9px;">Linkedin</button>
         <!-- dbutton ends --></span><a href="" style="
    margin-left: 77px;
    margin-top: -30px;
"><i class="fab fa-linkedin"></i></a>
         <a href="https://www.instagram.com/swapnil152002?igsh=ZWMxaGxiN3l4dWF6"><span>Instagram</span><i
               class="fab fa-instagram"></i></a>
               
      </div>
      
      
      <!-- popup starts -->
      
   <div id="developerPopup" class="popup">
      <div class="popup-content">
         <span class="close" onclick="togglePopup()">&times;</span>
         <div class="developer">
            <img src="images\SJ.jpg" alt="Developer 1">
            <a  href="https://www.linkedin.com/in/sopan-jadhav-662034267">Sopan</a>
         </div>
         <div class="developer">
            <img src="images\RS.jpg" alt="Developer 2">
            <a  href="https://www.linkedin.com/in/rupali-suryawanshi-308046231">Rupali</a>
         </div>
      </div>
   </div>
      <!-- popup ends -->
   </section>

   <div class="credit">&copy; copyright @
      <?= date('Y'); ?> by <span>HSL PVT LTD</span> | all rights reserved!
   </div>

</footer>

<style>
 /* Normal state */
.dbutton {
   font-size: initial;
   font-family: 'Montserrat';
  background-color: transparent;
  color: #ffffff; /* Button text color */
  cursor: pointer;
  transition: background-color 0.3s ease; /* Smooth transition effect */
  max-width: 100%; /* Ensures the button doesn't exceed the width of its container */
  width: auto; /* Allows the button to adjust its width based on content */
}

/* Hover state */
.dbutton:hover {
  background-color: rgba(0, 0, 0, 0.1); /* Light black color */
}


   .popup {
      border-radius: 30px;
      width: 200px;
      height: 220px;
      display: none;
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 9999;
      background-color: #fff;
      border: 1px solid #ccc;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
      padding: 20px;
   }

   .popup-content {
      text-align: center;
   }

   .close {
      font-size: large;
      position: absolute;
      top: 10px;
      right: 18px;
      cursor: pointer;
   }

   .developer {
      margin-bottom: 20px;
   }

   .developer img {
      margin-left: -33px;
      width: 60px;
      height: 60px;
      border-radius: 50%;
   }
   .developer a {
      font-size: 0.4cm;
    color: black;
    font-weight: bold;
   }
   /* Media query for responsiveness */
@media screen and (max-width: 768px) {
  .button {
   
    font-size: 14px; /* Adjust font size for smaller screens */
    padding: 8px 16px; /* Adjust padding for smaller screens */
  }
</style>

<script>
   function togglePopup() {
      var popup = document.getElementById('developerPopup');
      popup.style.display = (popup.style.display === 'block') ? 'none' : 'block';
   }
</script>