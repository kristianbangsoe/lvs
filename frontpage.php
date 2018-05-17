<?php include 'header.php'; ?>
<?php include 'graph.php'; ?>

<!-- The page content here -->

<!-- SEKTION 1 -->
<section id="section-1" class="dark hero" style="background-image: url(assets/images/contact-cover-4.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1 class="pb-3 wow fadeIn delay-1">Over <strong> 130 væresteder</strong> dedikeret til de socialt udsatte i Danmark</h1>
        <p class="hide-sm wow fadeIn delay-2">Landsforeningen af VæreSteder samler alle væresteder i danmark, til socialt udsatte der mangler hjælp. Du vil kunne finde kontakt information, event kalendre og meget mere for de forskellige væresteder. </p>
        <a class="hide-md btn-green" href="/vaeresteder">Find et Værested</a>
        <form class="hide-sm wow fadeIn delay-3" action="index.html" method="post">
          <div class="form-group">
            <div class="form-item">
              <label for="center-area">Vælg region</label>
              <select class="" name="area">
                <option value="[object Object]">Fyn</option>
                <option value="[object Object]">Sjælland</option>
                <option value="[object Object]">Nord Jylland</option>
                <option value="[object Object]">Midt Jylland</option>
                <option value="[object Object]">Sønder Jylland</option>
                <option value="[object Object]">Bornholm</option>
              </select>
            </div>
            <div class="form-item">
              <label for="center-type">Vælg type</label>
              <select class="" name="center-type">
                <option value="[object Object]">Alle</option>
                <option value="[object Object]">Underholdning</option>
                <option value="[object Object]">Café</option>
                <option value="[object Object]">Hjemløse</option>
                <option value="[object Object]">Misbrug</option>
              </select>
            </div>
            <div class="form-item">
              <label for="center-name">Vælg Værested</label>
              <select class="" name="center-name">
                <option selected disabled hidden value="[object Object]">Se tilgængelige</option>
                <option value="[object Object]">Dagvarmestuen</option>
                <option value="[object Object]">Natvarmestuen</option>
                <option value="[object Object]">Paraplyen</option>
                <option value="[object Object]">Reden i Odense</option>
                <option value="[object Object]">Stoppestedet - SIND værested</option>
                <option value="[object Object]">Vista Balboa</option>
                <option value="[object Object]">Værestedet Lyset</option>
                <option value="[object Object]">Café Mælkevejen</option>
                <option value="[object Object]">Blochhuset</option>
              </select>
            </div>
          </div>
           <button class="rounded-btn btn-white" type="button" name="button">SØG</button>
        </form>
        <a class="hide-sm hint mt-1 wow fadeIn delay-3" href="#">Hvad er et værested?</a>
      </div>
    </div>
  </div>
</section>

<!-- SEKTION 2 -->
<section id="categories" class= "col-md-12">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-6 m-auto text-center">
        <h1 class="boldtext h2 mt-4">Hvad Landsforeningen <span class="colorgreentext">tilbyder</span></h1>
        <p>Der findes stadig I Danmark er socialt udsatte stadivæk et udbredt fænomen som vi alle kan hjælpe med at formindske. Her kan du se en oversigt over hvordan.</p>
      </div>
    </div>
    <div class="row text-center mt-5">
      <div class="col-md-4 col-6">
        <figure class="p-4">
          <img class="mb-4" src="assets/images/icon-1.svg" alt="">
          <h2>HVAD ER ET VÆRESTED?</h2>
          <p>Et værested er et til hjælp for socialt udsatte, LVS’s arbejde består i at skabe et netværk af væresteder og opbygge et sammenthold.</p>
          <a href="about.php">LÆS MERE</a>
        </figure>
      </div>
      <div class="col-md-4 col-6">
        <figure class="p-4">
          <img class="mb-4" src="assets/images/icon-2.svg" alt="">
          <h2>RÅDGIVNING TIL VÆRESTEDER</h2>
          <p>Et værested er et til hjælp for socialt udsatte, LVS’s arbejde består i at skabe et netværk af væresteder og opbygge et sammenthold.</p>
          <a href="#">LÆS MERE</a>
        </figure>
      </div>
      <div class="col-md-4 col-6">
        <figure class="p-4">
          <img class="mb-4" src="assets/images/icon-3.svg" alt="">
          <h2>UDGIVEDE PUBLIKATIONER</h2>
          <p>Et værested er et til hjælp for socialt udsatte, LVS’s arbejde består i at skabe et netværk af væresteder og opbygge et sammenthold.</p>
          <a href="publications.php">LÆS MERE</a>
        </figure>
      </div>
      <div class="col-md-4 col-6">
        <figure class="p-4">
          <img class="mb-4" src="assets/images/icon-4.svg" alt="">
          <h2>VORES ANSVARLIGHEDER</h2>
          <p>Et værested er et til hjælp for socialt udsatte, LVS’s arbejde består i at skabe et netværk af væresteder og opbygge et sammenthold.</p>
          <a href="#">LÆS MERE</a>
        </figure>
      </div>
      <div class="col-md-4 col-6">
        <figure class="p-4">
          <img class="mb-4" src="assets/images/icon-5.svg" alt="">
          <h2>BLIV FRIVILLIG & HJÆLP</h2>
          <p>Et værested er et til hjælp for socialt udsatte, LVS’s arbejde består i at skabe et netværk af væresteder og opbygge et sammenthold.</p>
          <a href="#">LÆS MERE</a>
        </figure>
      </div>
      <div class="col-md-4 col-6">
        <figure class="p-4">
          <img class="mb-4" src="assets/images/icon-6.svg" alt="">
          <h2>BLIV SPONSOR & PARTNER</h2>
          <p>Et værested er et til hjælp for socialt udsatte, LVS’s arbejde består i at skabe et netværk af væresteder og opbygge et sammenthold.</p>
          <a href="#">LÆS MERE</a>
        </figure>
      </div>
    </div>
  </div>
</section>

<hr>

<!-- SEKTION 3 -->
<section id="events" class="col-md-12">
  <div class="container pb-5">
    <div class="row">
      <div class="col-md-6 m-auto text-center py-5">
        <h1 class="boldtext h2 mt-4">Kommende<span class="colorgreentext"> events</span> og<span class="colorgreentext"> aktiviteter</span></h1>
      </div>
    </div>
        <div class="row">

          <figure class="event-item col-md-4">
            <a href="#">
              <div class="event-image" style="background-image: url('assets/images/event-1.jpg');">
                <div class="overlay p-3">
                  <div class="date-dm text-right"><div class="date-day">20</div>MAR</div>
                  <h2 class="event-title">CAMPING TUR PÅ RØMØ </h2>
                </div>
              </div>
              <div class="event-info px-3 py-4">
                <div class="btn-green-round float-right">
                  <i class="read-more-btn fas fa-arrow-right"></i>
                </div>
                <p class="date color-gray">KL. 18.00 - 27 Marts, kl.10.00</p>
                <p class="colorgreentext boldtext">12 deltagere, 5 interesseret</p>
                <p class="location">Placering: Paraplyen, Odense C</p>
              </div>
            </a>
          </figure>

          <figure class="event-item col-md-4">
            <a href="#">
              <div class="event-image" style="background-image: url('assets/images/event-1.jpg');">
                <div class="overlay p-3">
                  <div class="date-dm text-right"><div class="date-day">20</div>MAR</div>
                  <h2 class="event-title">GRILL AFTEN</h2>
                </div>
              </div>
              <div class="event-info px-3 py-4">
                <div class="btn-green-round float-right">
                  <i class="read-more-btn fas fa-arrow-right"></i>
                </div>
                <p class="date color-gray">KL. 18.00 - 27 Marts, kl.22.00</p>
                <p class="colorgreentext boldtext">32 deltagere, 7 interesseret</p>
                <p class="location">Placering: Tusind års skoven, Odense C</p>
              </div>
            </a>
          </figure>

          <figure class="event-item col-md-4">
            <a href="#">
              <div class="event-image" style="background-image: url('assets/images/event-2.jpg');">
                <div class="overlay p-3">
                  <div class="date-dm text-right"><div class="date-day">20</div>MAR</div>
                  <h2 class="event-title">GRILL AFTEN</h2>
                </div>
              </div>
              <div class="event-info px-3 py-4">
                <div class="btn-green-round float-right">
                  <i class="read-more-btn fas fa-arrow-right"></i>
                </div>
                <p class="date color-gray">KL. 18.00 - 27 Marts, kl.22.00</p>
                <p class="colorgreentext boldtext">32 deltagere, 7 interesseret</p>
                <p class="location">Placering: Tusind års skoven, Odense C</p>
              </div>
            </a>
          </figure>

        </div>
          </div>
          <div class="row pb-5">
  <a class="m-auto text-center link event-item col-md-6" href="#">GÅ TIL AKTIVITETS KALENDEREN</a>
      </div>
</section>

<hr>

<!-- SEKTION 3 SLIDER -->
<section id="slider" class="testimonial py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-8 m-auto text-center">
        <img src="assets/images/heart.svg" alt="" height="40">
        <h4 id="sliderheading">Udtalelser fra vores <span class="colorgreentext">talspersoner</span></h4>
      </div>
    </div>
  </div>

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">

      <div class="py-5 carousel-item active">
        <div class="t-item p-3 m-auto col-md-5 d-flex">
          <img class="mr-4" src="assets/images/review-1.jpg" alt="">
          <div class="t-content">
            <p class="boldtext color-green mb-0 mt-2">KRONPRINSESSE MARY</p>
            <p>Landsforeningen af Væresteder har gjordt et henrivende stykke arbejde og har hjulpet vor  Danske udsatte igennem storm og vind.</p>
          </div>
        </div>
      </div>

      <div class="py-5 carousel-item">
        <div class="t-item p-3 m-auto col-md-5 d-flex">
          <img class="mr-4" src="assets/images/review-2.jpg" alt="">
          <div class="t-content">
            <p class="boldtext uppercase color-green mb-0 mt-2">JACOB HAUGAARD</p>
            <p>Det er fantastisk at se nogle der kæmper så meget for hinanden. Jeg ved hvor hård det kan være at stå alene i situationer som denne – Tak LVS!</p>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<hr>

<!-- SEKTION 4  -->
<section id="senestenyt" class="col-md-12">
  <div class="container pb-5">
    <div class="row">
      <div class="col-md-6 m-auto text-center py-5">
        <h4 class="boldtext h2 mt-4 sliderheading"><span class="colorgreentext">Seneste nyt</span> fra LVS</h4>
        <p class="pt-2">Følg med på hvad der sker via vores facebook nyheds feed som bliver opdateret dagligt. Smid eventuelt et like på vore facebook side.</p>
      </div>
    </div>
    <div class="row">
      <?php  facebookGraph('LandsforeningenAfVaeresteder', 'posts?', 3, '&fields=likes,name,full_picture,created_time,message,link,permalink_url,child_attachments', null); ?>
    </div>
  </div>
  <div class="row pb-5">
    <a class="m-auto mt-5 text-center link col-md-6" href="#">GÅ TIL NYHEDSFEED</a>
  </div>
</section>

<!-- SEKTION 5  -->
<hr>

<section id="membership" class= "col-md-12">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-6 m-auto text-center">
        <h1 class="boldtext h2 mt-4"><span class="colorgreentext">Bliv medlem af</span> LVS</h1>
        <p class="mt-4">Som medlem kommer du på vores donations liste og får alle vores publikaitoner gratis.</p>
      </div>
    </div>
    <div class="row text-center mt-5">
      <div class="col-md-4">
        <figure class="p-4">
          <img class="mb-4" src="assets/images/star.svg" alt="" height="90">
          <h2>ENGANGS BELØB</h2>
          <p>Bliv et æres medlem og få muligheden for at få dit logo på hjemmesiden samt navn hvis det ønskes. Du vil blive inviteret til årlige arrangementer.</p>
          <p class="price">199<span class="dkk">DKK</span></p>
          <p class="greytextsmall">engangsbeløb</p>
          <div class="btn-green-round">
            <i class="read-more-btn fas fa-arrow-right"></i>
          </div>
        </figure>
      </div>
      <div class="col-md-4">
        <figure class="p-4">
          <img class="mb-4" src="assets/images/haenderdollar.svg" alt="" height="90">
          <h2>DEN GAVMILDE</h2>
          <p>Bliv et æres medlem og få muligheden for at få dit logo på hjemmesiden samt navn hvis det ønskes. Du vil blive inviteret til årlige arrangementer.</p>
          <p class="price">99<span class="dkk">DKK</span></p>
          <p class="greytextsmall">engangsbeløb</p>
          <div class="btn-green-round">
            <i class="read-more-btn fas fa-arrow-right"></i>
          </div>
        </figure>
      </div>
      <div class="col-md-4 mb-4">
        <figure class="p-4">
          <img class="mb-4" src="assets/images/diamond.svg" alt="" height="90">
          <h2>ÆRESMEDLEMMET</h2>
          <p>Bliv et æres medlem og få muligheden for at få dit logo på hjemmesiden samt navn hvis det ønskes. Du vil blive inviteret til årlige arrangementer.</p>
          <p class="price">995<span class="dkk">DKK</span></p>
          <p class="greytextsmall">engangsbeløb</p>
          <div class="btn-green-round">
            <i class="read-more-btn fas fa-arrow-right"></i>
          </div>
        </figure>
      </div>
    </div>
  </div>
</section>

<!-- SEKTION 5 END -->
<hr>
<!-- SEKTION 6  -->
<section id="newsletter" class="col-md-12">
  <div class="container py-5">
    <div class="row">
      <div class="col-md-9 m-auto formcontainer d-flex">
        <div class="col-md-5 mr-3">
          <div class="col">
            <h3 class="pt-5 boldtext"><span class="colorgreentext">Tilmeld dig</span> vores nyhedsbrev</h3>
            <p>Følg med på hvad der sker via vores nyhedsbrev og bliv opdateret omkring events og nyheder.</p>

            <!-- Mailchimp implemetation -->
            <div class="pb-5" id="mc_embed_signup">
              <form action="https://xn--hjlunds-murerforretning-lmc.us9.list-manage.com/subscribe/post?u=78e21e525d505ff63ccbb3e6e&amp;id=774c2845a5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                  <div id="mc_embed_signup_scroll">
                    <div class="mc-field-group">
                      <input type="text" placeholder="Navn" name="FNAME" class="required" id="mce-FNAME">
                    </div>
                    <div class="mc-field-group">
                      <input type="email" placeholder="E-mail" name="EMAIL" class="required email" id="mce-EMAIL">
                    </div>
                    <div id="mce-responses" class="clear">
                      <div class="response" id="mce-error-response" style="display:none"></div>
                      <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                      <div style="position: absolute; left: -5000px;" aria-hidden="true">
                        <input type="text" name="b_78e21e525d505ff63ccbb3e6e_774c2845a5" tabindex="-1" value="">
                      </div>
                      <div class="clear mt-3">
                        <input type="submit" value="Tilmeld" name="subscribe" class="w-100 submit btn-green">
                      </div>
                  </div>
                </form>
              </div>
              <!--End mc_embed_signup-->
          </div>
        </div>
        <div class="rightcontainernewsfeed hide-sm col-md-7" style="background-image: url('assets/images/signupformimage.png');">
        </div>
      </div>
    </div>
  </div>
</section >
<!-- SEKTION 6 END -->

<?php include 'footer.php'; ?>
