<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="responsestudios">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>

        Gasthof 't Voshol &middot;

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
        <span>@lang('messages.gasthof')</span>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li >
          <a href="https://gasthoftvoshol.company.site/">Shop</a>
        </li>
        <li >
          <a href="{{"../" . LaravelLocalization::getCurrentLocale(). "/#reserveren"}}">@lang('messages.reserveren')</a>
        </li>
        <li >
          <a href="{{"../" . LaravelLocalization::getCurrentLocale(). "/#waardebon"}}">@lang('messages.waardebon')</a>
        </li>
        <li >
          <a href="{{"../" . LaravelLocalization::getCurrentLocale(). "/#menu"}}">@lang('messages.menu')</a>
        </li>
        <li >
          <a href="{{"../" . LaravelLocalization::getCurrentLocale(). "/#gin"}}">@lang('messages.gin')</a>
        </li>
        <li >
          <a href="{{"../" . LaravelLocalization::getCurrentLocale(). "/#contact"}}">@lang('messages.contact')</a>
        </li>
        <li >
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @unless(LaravelLocalization::getCurrentLocale() == $properties['name'])
                    <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                        {{ $properties['native'] }}
                    </a>
                @endunless
            @endforeach
        </li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>



<div class="block">
  <div class="container text-center app-translate-15" data-transition="entrance">
    <img src="../img/logo_tvoshol.gif">
    <blockquote class="pull-quote">
        <h2 class="block-title m-b-sm text-uppercase app-myphone-brand">@lang('messages.restaurant')</h2>
      <p>
          @lang('messages.bachten')
      </p>
    </blockquote>
  </div>
</div>

<div id="menu" class="block block-bordered-lg p-b-0 app-block-stats">
  <div class="container">
    <div class="row">
    <div class="col-md-7 col-sm-6">
        <img
          src="../img/meat_low.jpg"
          class="app-translate-5"
          data-transition="entrance">
        <hr class="m-t-0 m-b-lg m-x-auto visible-xs">
      </div>
      <div class="col-md-5 col-sm-6 text-xs-center text-sm-left">
        <p class="lead">
            @lang('messages.menukaart')
        </p>
        <div class="row m-y-md">
          <div class="col-xs-12">
            @if(LaravelLocalization::getCurrentLocale() == 'nl')
              @foreach($cards as $card)
                <a class="btn btn-default btn-large" href="{{ URL::to('../img/cards/'. $card->menukaartNL) }}">@lang('messages.raadplegen')</a>
              @endforeach
            @else
              @foreach($cards as $card)
                <a class="btn btn-default btn-large" href="{{ URL::to('../img/cards/'. $card->menukaartFR) }}">@lang('messages.raadplegen')</a>
              @endforeach
            @endif

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
            @lang('messages.foxgin')
        </p>
        <p class="lead">
            @lang('messages.verkrijgbaar')
        </p>
      </div>
      <div class="col-md-5 col-sm-6">
        <img
          src="../img/foxginetiket_fles.png"
          class="app-translate-5"
          data-transition="entrance">
        <hr class="m-t-0 m-b-lg m-x-auto visible-xs">
      </div>
    </div>
  </div>
</div>


@if(isset($messages))
    @foreach ($messages as $message)
        @if(LaravelLocalization::getCurrentLocale() == "nl")
            <div class="block block-bordered-lg">
              <div class="container text-center app-translate-15" data-transition="entrance">
                <blockquote class="pull-quote">
                    <h2 class="block-title m-b-sm text-uppercase app-myphone-brand">{{ $message->titelNL }}</h2>
                  <p>
                    {!! nl2br($message->tekstNL) !!}
                  </p>
                </blockquote>
              </div>
            </div>
          @else
            <div class="block block-bordered-lg">
              <div class="container text-center app-translate-15" data-transition="entrance">
                <blockquote class="pull-quote">
                    <h2 class="block-title m-b-sm text-uppercase app-myphone-brand">{{ $message->titelFR }}</h2>
                  <p>
                    {!! nl2br($message->tekstFR) !!}
                  </p>
                </blockquote>
              </div>
            </div>
          @endif


    @endforeach
@endif


<div class="block block-bordered-lg">
  <div class="container">
    <div class="row">
    <div class="col-sm-8 col-sm-offset-2 text-center m-b-lg">
      <p class="lead m-x-auto">@lang('messages.troeven')</p>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <ul class="featured-list">
          <li class="m-b-lg">
            <div class="featured-list-icon text-primary">
              <span class="icon icon-cake"></span>
            </div>
            <p class="featured-list-icon-text m-b-0"><strong>@lang('messages.kwaliteit')</strong></p>
            <p class="featured-list-icon-text">
                @lang('messages.kwaliteit_tekst')
            </p>
          </li>

          <li class="m-b-lg">
            <div class="featured-list-icon text-primary">
              <span class="icon icon-drink"></span>
            </div>
            <p class="featured-list-icon-text m-b-0"><strong>@lang('messages.genieten')</strong></p>
            <p class="featured-list-icon-text">
                @lang('messages.genieten_tekst')
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
            <p class="featured-list-icon-text m-b-0"><strong>@lang('messages.knooppunt')</strong></p>
            <p class="featured-list-icon-text">
                @lang('messages.knooppunt_tekst')
            </p>
          </li>

          <li class="m-b-lg">
            <div class="featured-list-icon text-primary">
              <span class="icon icon-tree"></span>
            </div>
            <p class="featured-list-icon-text m-b-0"><strong>@lang('messages.duurzaam')</strong></p>
            <p class="featured-list-icon-text">
                @lang('messages.duurzaam_tekst')
            </p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>

@if(isset($pictures))
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

                    <img class="img-responsive slider-image center-block" src="{{ asset("../img/uploads/" . $picture->bestand) }}">

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
@endif

<div class="block block-bordered-lg block-overflow-hidden p-b-0 app-block-design">
  <div class="container">
    <div class="row pos-r">
      <div class="col-sm-5 text-xs-center text-sm-left">
        <p class="lead">
            @lang('messages.fan')
        </p>
      </div>
      <div class="col-sm-7">
        <img src="../img/waardebon_crop.png" class="app-translate-5" data-transition="entrance">
        </div>
    </div>
  </div>
</div>

<div id="reserveren" class="block block-bordered-lg text-center">
  <div class="container-fluid">
    <p class="lead m-b-md">
        @lang('messages.online_reserveren')
    </p>

    <div class="row">
      <div class="col-md-6 col-md-offset-3">

    <form method="POST" action="/reservation">
         <input type="hidden" name="_token" value="{{ csrf_token() }}">
         <div class="form-group">
           <label for="voornaam">@lang('messages.voornaam')</label>
           <input type="text" class="form-control" name="voornaam">
         </div>
         <div class="form-group">
           <label for="naam">@lang('messages.naam')</label>
           <input type="text" class="form-control" name="naam">
         </div>
         <div class="form-group">
           <label for="aantal">@lang('messages.aantal')</label>
           <input type="text" class="form-control" name="aantal">
         </div>
         <div class="form-group">
             <label for="datetime">@lang('messages.dag')</label>
             <div class='input-group date' id='datetime'>
                 <input type='text' class="form-control" name="datetime" />
                 <span class="input-group-addon">
                     <span class="icon icon-calendar"></span>
                 </span>
             </div>
         </div>
         <div class="form-group">
           <label for="email">@lang('messages.email')</label>
           <input type="email" class="form-control" name="email">
         </div>
         <div class="form-group">
           <label for="tel">@lang('messages.telefoonnummer')</label>
           <input type="text" class="form-control" name="tel">
         </div>
         <div class="form-group">
           <label for="opmerkingen">@lang('messages.opmerkingen')</label>
           <input type="text" class="form-control" name="opmerkingen">
         </div>
          </br>
         <button type="submit" class="btn btn-default">@lang('messages.versturen')</button>
     </form>

   </div>
 </div>
 </br>
    <small class="text-muted">
        @lang('messages.opgepast')
    </small>
  </div>
</div>

<div id="contact" class="block app-block-footer">
  <div class="container">
    <div class="row">
       <div class="col-sm-6">
        <h3 class="text-uppercase"></h3>@lang('messages.contactgegevens')</h3>
        <h6>@lang('messages.adres')</h6>
      </div>
       <div class="col-sm-6">
        <h3 class="text-uppercase">@lang('messages.openingsuren')</h3>
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
