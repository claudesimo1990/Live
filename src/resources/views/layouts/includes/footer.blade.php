<!-- Footer -->
<footer class="page-footer font-small lighten-5" style="width: 100%; background: darkslategray; color: white">
  
    <!-- Footer Links -->
    <div class="container-fluid text-center text-md-left">
  
        <!-- Grid row -->
        <div class="row dark-grey-text">
    
          <!-- Grid column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mb-4 pt-3">
    
            <!-- Content -->
            <h6 class="text-uppercase font-weight-bold">Go Au Bled</h6>
            <hr class="teal accent-3 mb-2 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>est une page mettant en relation les personnes de différentes communautés de l’Afrique comme de sa diaspora dans le but de transporter des colis et courriers destinés à leurs proches de partout dans le monde.</p>    
          </div>
          <!-- Grid column -->
    
          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4 pt-3">
    
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Menu</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <a class="footer--link dark-grey-text" href="{{route('news.index', ["key" => "pack"]) }}">Colis</a>
            </p>
            <p>
              <a class="footer--link dark-grey-text" href="{{route('news.index', ["key" => "travel"]) }}">Voyages</a>
            </p>
            <p>
              <a class="footer--link dark-grey-text" href="{{route('travels.create')}}">Transporter</a>
            </p>
            <p>
              <a class="footer--link dark-grey-text" href="{{route('packs.create')}}">Envoyer</a>
            </p>
    
          </div>
          <!-- Grid column -->
    
          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4 pt-3">
    
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">A Propos de nous</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <a class="footer--link dark-grey-text" href="{{ route('whoAreWe') }}">Qui sommes nous</a>
            </p>
            <p>
              <a class="footer--link dark-grey-text" href="{{ route('principes') }}">Principes</a>
            </p>
            <p>
              <a class="footer--link dark-grey-text" href="{{ route('faq') }}">FAQ</a>
            </p>
            <p>
              <a class="footer--link dark-grey-text" href="{{ route('howItWork') }}">Comment ca marche ?</a>
            </p>
    
          </div>
          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-2 mx-auto mb-4 pt-3">
    
            <!-- Links -->
            <h6 class="text-uppercase font-weight-bold">Informations</h6>
            <hr class="teal accent-3 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
            <p>
              <a class="footer--link dark-grey-text" href="{{ route('termsOfservice') }}">Charte de confidential</a>
            </p>
            <p>
              <a class="footer--link dark-grey-text" href="{{ route('confidentialityCharter') }}">conditions generales d'utilisation</a>
            </p>
            <p>
              <a class="footer--link dark-grey-text" href="{{ route('contactUs') }}">nous Contactez</a>
            </p>  
          </div>
    
        </div>
        <!-- Grid row -->
    
      </div>
      <!-- Footer Links -->
  
    <!-- Copyright -->
    <div class="footer-copyright text-center text-black py-3">© 2020 Copyright:
        <a class="dark-grey-text" href="{{ route('accueil') }}">goaubled.com</a> | 
        <a class="dark-grey-text" href="{{ route('impressum') }}">Impressum</a> | <a class="dark-grey-text" href="{{ route('AGB') }}">AGB</a>
    </div>
    <!-- Copyright -->
    <cookie-component></cookie-component>
  </footer>
