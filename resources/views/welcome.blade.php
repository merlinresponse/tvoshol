<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Minimal &middot; 
      
    </title>

    
      <link href="http://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
      <link href="css/toolkit-minimal.css" rel="stylesheet">
      <link href="css/application-minimal.css" rel="stylesheet">
    

    

    <style>
      /* note: this is a hack for ios iframe for bootstrap themes shopify page */
      /* this chunk of css is not part of the toolkit :) */
      /* …curses ios, etc… */
      @media (max-width: 768px) and (-webkit-min-device-pixel-ratio: 2) {
        body {
          width: 1px;
          min-width: 100%;
          *width: 100%;
        }
        #stage {
          height: 1px;
          overflow: auto;
          min-height: 100vh;
          -webkit-overflow-scrolling: touch;
        }
      }
    </style>
  </head>


<body>
  



<nav class="navbar navbar-default navbar-static-top navbar-padded text-uppercase app-navbar">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed p-x-0" data-toggle="collapse" data-target="#navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="../">
        <span>Gasthof 't Voshol</span>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li >
          <a href="#reserveren">reserveren</a>
        </li>
        <li class="active">
          <a href="#waardebon">waardebon</a>
        </li>
        <li >
          <a href="#menu">menu</a>
        </li>
        <li >
          <a href="#gin">gin</a>
        </li>            
        <li >
          <a href="#contact">contact</a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
    
    
    @if(Session::has('success'))
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <strong>Perfect!</strong> {{ Session::get('message', '') }}
    </div>
    @endif
        

<div class="block">
  <div class="container text-center app-translate-15" data-transition="entrance">
    <img src="img/logo_tvoshol.gif">
    <blockquote class="pull-quote">
        <h2 class="block-title m-b-sm text-uppercase app-myphone-brand">Restaurant & Tearoom</h2>      
      <p>
        Leisele, gelegen "Bachten de Kupe", aan de grens van ons Belgisch grondgebied, verdoken in de verre Westhoek, een mooie landelijke gemeente, met beschermd dorpsgezicht op zowat 12km van Veurne, 15km van de Kust, 25km van Ieper en 4km van het franse Hondschoote. Filmdorp tijdens de opnames van VRT-feuilleton "De Bossen van Vlaanderen". Op het dorpsplein rechtover de Kerk en de kiosk.
      </p>
    </blockquote>
  </div>
</div>

<div id="menu" class="block block-bordered-lg p-b-0 app-block-stats">
  <div class="container">
    <div class="row">
    <div class="col-md-7 col-sm-6">
        <img
          src="img/meat_low.jpg"
          class="app-translate-5"
          data-transition="entrance">
        <hr class="m-t-0 m-b-lg m-x-auto visible-xs">
      </div> 
      <div class="col-md-5 col-sm-6 text-xs-center text-sm-left">
        <p class="lead">
          Gasthof 't Voshol biedt u een gevarieerde menukaart met een selectie van vis- en vleesgerechten. U kan deze via onderstaande link meteen raadplegen.
        </p>
        <div class="row m-y-md">
          <div class="col-xs-12">
            <button class="btn btn-primary m-b">Menukaart raadplegen</button>
          </div>
        </div>
      </div>       
    </div>
  </div>
</div>


<div id="gin" class="block block-bordered-lg p-b-0 app-block-stats">
  <div class="container">
    <div class="row">
      <div class="col-md-7 col-sm-6 text-xs-center text-sm-left">
        <p class="lead">
<strong>FOXGIN is een exclusieve in Belgie gestookte gin</strong>, gemaakt van het zuivere water uit de Dolomieten. Toetsen van citrus en lavendel combineren tot een fris en zuiders boeket. Samengesteld door B. Dedeckere. <strong>Enjoy Responsibly.</strong>
        </p>
        <div class="row m-y-md">
          <div class="col-xs-12">
            <button class="btn btn-primary m-b">Uw Foxgin bestellen</button>
          </div>
        </div>
      </div>
      <div class="col-md-5 col-sm-6">
        <img
          src="img/foxginetiket_fles.png"
          class="app-translate-5"
          data-transition="entrance">
        <hr class="m-t-0 m-b-lg m-x-auto visible-xs">
      </div>        
    </div>
  </div>
</div>

<div class="block block-bordered-lg">
  <div class="container">
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2 text-center m-b-lg">
      <p class="lead m-x-auto">Sinds de start houdt Gasthof 't Voshol vast aan deze <strong>troeven</strong>. </p>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <ul class="featured-list">
          <li class="m-b-lg">
            <div class="featured-list-icon text-primary">
              <span class="icon icon-cake"></span>
            </div>
            <p class="featured-list-icon-text m-b-0"><strong>Kwaliteit en Kwantiteit zijn onze troeven.</strong></p>
            <p class="featured-list-icon-text">
                Sinds 1990 is Gasthof 't Voshol de referentie voor een eerlijke en dagverse keuken.
            </p>
          </li>

          <li class="m-b-lg">
            <div class="featured-list-icon text-primary">
              <span class="icon icon-drink"></span>
            </div>
            <p class="featured-list-icon-text m-b-0"><strong>Genieten voor Jong en Oud</strong></p>
            <p class="featured-list-icon-text">
                Ons restaurant biedt voor ieder wat wils. Van romantisch moment tot heus familiediner, voor iedereen wat in Gasthof 't Voshol.
            </p>
          </li>

        </ul>
      </div>
      <div class="col-sm-6">
        <ul class="featured-list">

          <li class="m-b-lg">
            <div class="featured-list-icon text-primary">
              <span class="icon icon-tripadvisor"></span>
            </div>
            <p class="featured-list-icon-text m-b-0"><strong>Knooppunt van fietsroutes</strong></p>
            <p class="featured-list-icon-text">
            Leisele ligt op een knooppunt van fietsroutes. Fietsers kunnen bij ons genieten van lekker gebak vooraleer hun fietstocht verder te zetten.
            </p>
          </li>

          <li class="m-b-lg">
            <div class="featured-list-icon text-primary">
              <span class="icon icon-tree"></span>
            </div>
            <p class="featured-list-icon-text m-b-0"><strong>Duurzame horeca</strong></p>
            <p class="featured-list-icon-text">
             Gasthof 't Voshol draagt een steentje bij aan duurzaam en milieubewust leven. Sinds kort voorzien we zelfs in een stroompunt voor onze gasten met electrische fiets. 
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="block block-bordered-lg p-l-0 p-t-0 p-r-0">
  <div id="carousel-example-generic-2" class="carousel carousel-light slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-generic-2" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-generic-2" data-slide-to="1"></li>
      <li data-target="#carousel-example-generic-2" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="block">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p class="lead m-x-auto text-center">
                Steeds iets te beleven.
                </p>
              </div>
            </div>
            <img class="img-responsive m-t-lg app-block-game-img" src="img/slide1_low.jpg">
          </div>
        </div>
      </div>
      <div class="item">
        <div class="block">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p class="lead m-x-auto text-center">
                  Gezellige terras onder de kerktoren.
                </p>
              </div>
            </div>
            <img class="img-responsive m-t-lg app-block-game-img" src="img/slide2_low.jpg">
          </div>
        </div>
      </div>
      <div class="item">
        <div class="block">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2">
                <p class="lead m-x-auto text-center">
                Gelegen op het knooppunt van vele touristische routes.
                </p>
              </div>
            </div>
            <img class="img-responsive m-t-lg app-block-game-img" src="img/slide3_low.jpg">
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#carousel-example-generic-2" role="button" data-slide="prev">
      <span class="icon icon-chevron-thin-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic-2" role="button" data-slide="next">
      <span class="icon icon-chevron-thin-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<div class="block block-bordered-lg block-overflow-hidden p-b-0 app-block-design">
  <div class="container">
    <div class="row pos-r">
      <div class="col-sm-5 text-xs-center text-sm-left">
        <p class="lead">
          <strong>Bent u fan van Gasthof 't Voshol?</strong> Deel uw ervaring met uw vrienden en schenk hen de enige echte Gasthof 't Voshol waardebon. Deze leuke attentie is beschikbaar op eenvoudige vraag in het restaurant.
        </p>
      </div>
      <div class="col-sm-7">
        <img src="img/waardebon_crop.png" class="app-translate-5" data-transition="entrance">
        </div>    
    </div>
  </div>
</div>

<div id="reserveren" class="block block-bordered-lg text-center">
  <div class="container-fluid">
    <p class="lead m-b-md">
      Bij Gasthof 't Voshol kan u meteen <strong>online reserveren</strong>.</br>Vul onderstaand formulier aan en leg alvast uw bezoek bij ons vast!
    </p>
    
    <form class="form-inline" method="POST" action="/reservations">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
      <input name="voornaam" class="form-control m-b" placeholder="Voornaam">
      <input name="naam" class="form-control m-b" placeholder="Naam">
        <input name="email" class="form-control m-b" placeholder="Email">
        </br>
      <input name="reservatiedatum" class="form-control m-b" placeholder="Datum">
      <input name="reservatietijd" class="form-control m-b" placeholder="Tijdstip">
      <input name="aantal" class="form-control m-b" placeholder="Aantal personen">
      </br>
      <input name="opmerkingen" class="form-control m-b" placeholder="Opmerkingen">
      </br>
      <button class="btn btn-primary m-b">Reservatie versturen</button>
    </form>
    <small class="text-muted">
      Opgepast, uw reservatie is pas definitief na bevestiging door Gasthof 't Voshol.
    </small>
  </div>
</div>

<div id="contact" class="block app-block-footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-2 m-b">
        <ul class="list-unstyled list-spaced">
          <li><h6 class="text-uppercase">Products</h6></li>
          <li>Todo</li>
          <li>Calendario</li>
          <li>Email Town</li>
          <li>Pomodorotary</li>
          <li>ChillTower</li>
        </ul>
      </div>
      <div class="col-sm-2 m-b">
        <ul class="list-unstyled list-spaced">
          <li><h6 class="text-uppercase">Extras</h6></li>
          <li>AutotuneU</li>
          <li>Freestyler</li>
          <li>Chillaxation</li>
        </ul>
      </div>
      <div class="col-sm-2 m-b">
        <ul class="list-unstyled list-spaced">
          <li><h6 class="text-uppercase">Support</h6></li>
          <li>Online Support</li>
          <li>Telephone Sales</li>
          <li>Help Desk</li>
          <li>Workshops</li>
        </ul>
      </div>
       <div class="col-sm-6">
        <h6 class="text-uppercase">About</h6>
        <p>Shoutout to Invision team for creating the <a href="http://www.invisionapp.com/do">Do UI kit</a> that we used to fake our app screenshots. Also to the Dribbble community for providing phone mockups that look amazing.</p>
      </div>
    </div>
  </div>
</div>


    <script src="js/jquery.min.js"></script>
    <script src="js/toolkit.js"></script>
    <script src="js/application.js"></script>
  </body>
</html>

