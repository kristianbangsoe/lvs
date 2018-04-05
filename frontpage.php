<?php include 'header.php'; ?>

<!-- The page content here -->


<section id="section-1" style="background-image: url(assets/images/header.jpg);">
  <div class="container">
    <div class="row">
      <div class="col-7 wow fadeInLeft">
        <h1 class="pb-3">Over <span class="boldtext colorgreentext"> 130 væresteder</span> dedikeret til de socialt udsatte i Danmark</h1>
        <p>Landsforeningen af VæreSteder samler alle væresteder i danmark, til socialt udsatte der mangler hjælp. Du vil kunne finde kontakt information, event kalendre og meget mere for de forskellige væresteder. </p>
        <form class="" action="index.html" method="post">
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
      </div>
    </div>
  </div>
</section>

<section id="categories" class= "col-md-12">
<div class="container">
  <h1 class="boldtext">Hvad Landsforeningen <span class="colorgreentext">tilbyder</span></h1>
<p> </p>
</div>
</section>

<section id="events">

</section>

<section id="reviews">

</section>

<!-- And so on -->

<?php include 'footer.php'; ?>
