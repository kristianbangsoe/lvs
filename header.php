
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width" intitial-scale="1" maximum-scale="1">
    <meta name="mobile-web-app-capable" content="yes">
    <link rel="manifest" href="manifest.json">
    <title>LVS</title>
    <link rel="stylesheet" href="css/master.css">
    <link rel="stylesheet" href="css/animate.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src='js/jquery.mobile-1.4.5.min.js' charset='utf-8'></script>
  </head>
  <body>
  <script>
    window.fbAsyncInit = function() {
    FB.init({
      appId      : '194215584714458',
      xfbml      : true,
      version    : 'v2.12'
    });
    FB.AppEvents.logPageView();
    };

    (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
  </script>
    <header>
<nav class="navbar navbar-expand-lg navbar-light headerbackgroundcolor">
  <div class="container">

    <a href="frontpage.php">
    <img class="logo" src="assets/images/logo.svg" alt="">
    </a>

    <button type="button" class="nav-menu" aria-expanded="false" aria-label="Toggle navigation">
      <img width="30" src="assets/images/nav.svg" alt="">
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-lg-auto">
        <li class="nav-item active">
          <a class="nav-link" href="about.php">Om LVS <span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="publications.php">Publikationer</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="projects.php">Projekter</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="activities.php">Aktiviteter</a>
        </li>

        <li class="nav-item ">
          <a class="nav-link" href="contact.php">Kontakt</a>
        </li>



      </ul>

      <button class="btn-green" type="button" name="button">Find et Værested</button>

    </div>
  </div>
</nav>
    </header>
