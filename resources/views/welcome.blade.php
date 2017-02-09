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
      <link href="/css/toolkit-minimal.css" rel="stylesheet">
      <link href="/css/application-minimal.css" rel="stylesheet">
      <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">


      <link href="/slim/slim.min.css" rel="stylesheet">
  <!--
      <link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css" />
    -->
      <link rel="stylesheet" href="/bower_components/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css" />

      <link rel="stylesheet" type="text/css" href="{{asset('/slick/slick.css')}}"/>
      <!-- Add the new slick-theme.css if you want the default styling -->
      <link rel="stylesheet" type="text/css" href="{{asset('/slick/slick-theme.css')}}"/>


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
          <a href="/#reserveren">reserveren</a>
        </li>
        <li class="active">
          <a href="/#waardebon">waardebon</a>
        </li>
        <li >
          <a href="/#menu">menu</a>
        </li>
        <li >
          <a href="/#gin">gin</a>
        </li>
        <li >
          <a href="/#contact">contact</a>
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>

<div class="container">
    <div class ="row">
        <div class="col-md-12">

            @if(Session::has('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Perfect!</strong> {{ Session::get('message', '') }}
            </div>
            @endif

        </div>
    </div>
</div>

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
            @foreach($cards as $card)
              <a class="btn btn-small btn-info" href="{{ URL::to('/img/cards/'. $card->menukaartNL) }}">Menukaart raadplegen</a>
            @endforeach
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


@if(isset($messages))
    @foreach ($messages as $message)

    <div class="block block-bordered-lg">
      <div class="container text-center app-translate-15" data-transition="entrance">
        <blockquote class="pull-quote">
            <h2 class="block-title m-b-sm text-uppercase app-myphone-brand">{{ $message->titelNL }}</h2>
          <p>
            {{ $message->tekstNL }}
          </p>
        </blockquote>
      </div>
    </div>

    @endforeach
@endif


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

<div class="block block-bordered-lg">
  <div class="container">
    <div class="row pos-r">
      <div class="col-sm-12 text-xs-center text-sm-center text-md-center text-lg-center">

        <div class="row">

            <div class="myslider">
            @foreach($pictures as $picture)

              @if($picture->tonen == 1)

              <div class="block">
                <div class="container">

                    <img class="img-responsive slider-image" src="{{ asset("img/uploads/" . $picture->bestand) }}">

                </div>
              </div>

            @endif

            @endforeach
            </div>
          </div>
        </div>
      </div>
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

    <div class="row">
      <div class="col-md-6 col-md-offset-3">

    <form method="POST" action="/reservation">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="form-group">
           <label for="voornaam">Voornaam</label>
           <input type="text" class="form-control" name="voornaam">
         </div>
         <div class="form-group">
           <label for="naam">Naam</label>
           <input type="text" class="form-control" name="naam">
         </div>
         <div class="form-group">
           <label for="aantal">Aantal personen</label>
           <input type="text" class="form-control" name="aantal">
         </div>
         <div class="form-group">
             <label for="datetime">Dag en uur gewenste reservatie</label>
             <div class='input-group date' id='datetime'>
                 <input type='text' class="form-control" name="datetime" />
                 <span class="input-group-addon">
                     <span class="icon icon-calendar"></span>
                 </span>
             </div>
         </div>
         <div class="form-group">
           <label for="email">Email</label>
           <input type="email" class="form-control" name="email">
         </div>
         <div class="form-group">
           <label for="tel">Telefoonnummer</label>
           <input type="text" class="form-control" name="tel">
         </div>
         <div class="form-group">
           <label for="opmerkingen">Opmerkingen</label>
           <input type="text" class="form-control" name="opmerkingen">
         </div>
          </br>
         <button type="submit" class="btn btn-default">Versturen</button>
     </form>

   </div>
 </div>
 </br>
    <small class="text-muted">
      Opgepast, uw reservatie is pas definitief na bevestiging door Gasthof 't Voshol.
    </small>
  </div>
</div>

<div id="contact" class="block app-block-footer">
  <div class="container">
    <div class="row">
       <div class="col-sm-6">
        <h3 class="text-uppercase"></h3>Contactgegevens & Sociale Media</h3>
        <h6>Gasthof 't Voshol</br>Leiseledorp 20</br>8691 Leisele</br>T: +32 (0)58 29 81 57</br>info@tvoshol.be</h6>
      </div>
       <div class="col-sm-6">
        <h3 class="text-uppercase">Openingsuren</h3>
        @foreach($hours as $hour)
          <h6>{{$hour->urenNL}}</h6>
        @endforeach

      </div>
    </div>
  </div>
</div>


    <script type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="/bower_components/moment/min/moment.min.js"></script>

    <script type="text/javascript" src="/bower_components/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>

    <script src="/slim/slim.kickstart.min.js"></script>

    <script type="text/javascript">
      $(document).ready(function() {
          $('#datetime').datetimepicker(
            {
              stepping: 15,
              format: 'D / MM / YYYY, HH:mm',
              sideBySide: true

            }
          );
      });
    </script>
    <script src="js/toolkit.js"></script>
    <script src="js/application.js"></script>

    <script type="text/javascript" src="{{asset('/slick/slick.min.js')}}"></script>



      <script type="text/javascript">
        $(document).ready(function(){
          $('.myslider').slick({
            dots: true,
            infinite: true,
            speed: 2000,
            fade: true,
            autoplay: true,
            arrows: true

          });
        });
      </script>
  </body>
</html>
