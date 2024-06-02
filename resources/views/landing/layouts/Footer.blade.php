 <!--Main Footer-->
 <footer class="main-footer style-two   " style="background-image: url(images/background/2.jpg)">
     <div class="auto-container">
         <!--Widgets Section-->
         <div class="widgets-section">
             <div class="row clearfix">

                 <!--big column-->
                 <div class="big-column col-lg-6 col-md-12 col-sm-12">
                     <div class="row clearfix">

                         <!--Footer Column-->
                         <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                             <div class="footer-widget logo-widget">
                                 <div class="logo">
                                     <a href="index.html"><img src="images/footer-logo.png" alt="" /></a>
                                 </div>
                                 <div class="text">Le Dr. Berrada Ali, fort d'une expérience de 37 ans, est un
                                     médecin spécialiste en médecine de travail. Il préside l’AMCC (Association
                                     des Médecins généralistes de Casablanca Centre) et est le fondateur de
                                     l’Association Marocaine de Médecine de Catastrophe. À son actif, il a assuré
                                     des formations de secourisme pour plus de 50 entreprises à travers tout le
                                     Maroc.</div>
                                 <ul class="social-icons">
                                     {{-- <li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
                                    <li><a href="#"><span class="fab fa-google"></span></a></li>
                                    <li><a href="#"><span class="fab fa-twitter"></span></a></li>
                                    <li><a href="#"><span class="fab fa-skype"></span></a></li> --}}
                                     <li><a
                                             href="{{ url('https://www.linkedin.com/in/dr-ali-berrada-99658045/?originalSubdomain=ma') }}"><span
                                                 class="fab fa-linkedin"></span></a></li>
                                 </ul>
                             </div>
                         </div>

                         <!--Footer Column-->
                         <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                             <div class="footer-widget links-widget">
                                 <div class="footer-title  clearfix">
                                     <h2>Actes et expertises</h2>
                                     <div class="separator"></div>
                                 </div>
                                 <ul class="footer-list">
                                     <li><a href="#">Consultations médicales</a></li>
                                     <li><a href="#">Médecine du travail</a></li>
                                     <li><a href="#">Certificats médicaux</a></li>
                                     <li><a href="#">Vaccination</a></li>
                                     <li><a href="#">Examens de santé préventifs</a></li>
                                     <li><a href="#">Gestion des maladies <span
                                                 class="ml-4">chroniques</span></a></li>
                                 </ul>
                             </div>
                         </div>

                     </div>
                 </div>

                 <!--big column-->
                 <div class="big-column col-lg-6 col-md-12 col-sm-12">
                     <div class="row clearfix">

                         <!--Footer Column-->
                         <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                             <div class="footer-widget links-widget">
                                 <div class="footer-title clearfix">
                                     <h2>Horaires d'ouverture</h2>
                                     <div class="separator"></div>
                                 </div>
                                 @foreach ($businessHours as $businessHour)
                                     <ul class="footer-list text-light">
                                         <li>{{ $businessHour->day }} :
                                             {{ date('H:i', strtotime($businessHour->from)) }} -
                                             {{ date('H:i', strtotime($businessHour->to)) }}</li>
                                     </ul>
                                 @endforeach
                             </div>
                         </div>


                         <!--Footer Column-->
                         <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                             <div class="footer-widget contact-widget">
                                 <div class="footer-title  clearfix">
                                     <h2>Contactez-nous</h2>
                                     <div class="separator"></div>
                                 </div>

                                 <ul class="contact-list">
                                     <li><span class="icon flaticon-placeholder"></span>332, bd Brahim Roudani,
                                         Casablanca</li>
                                     <li>
                                         <span class="icon flaticon-call"></span>Appelez-nous au : <br>
                                         <a href="tel:0522250907">052-225-0907</a>
                                     </li>

                                     <li><span class="icon flaticon-message"></span>Souhaitez-vous poser une
                                         question ?<a href="mailto:berrada.ali@gmail.com">berrada.ali@gmail.com</a></li>
                                 </ul>

                             </div>
                         </div>

                     </div>
                 </div>

             </div>
         </div>
     </div>

     <!-- Footer Bottom -->
     <div class="footer-bottom">
         <div class="auto-container">
             <div class="copyright">Africa IT Innovation &copy; All Rights Reserved</div>
         </div>
     </div>

 </footer>
