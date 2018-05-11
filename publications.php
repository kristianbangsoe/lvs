<!-- This is the contact page -->

<?php include 'header.php'; ?>

<!-- The page content here -->


<div id="publications">
	<div class="hero light" style="background-image: url('assets/images/publications.jpg');">
		<div class="overlay d-flex jc-center ai-center">
			<div class="d-flex jc-center ai-center">
				<h1 class="wow fadeInUp">Publikationer</h1>
			</div>
		</div>
	</div>

	<section class="list">
		<div class="container">
			<div class="row mb-4">
				<form class="mx-3 mt-4" action="index.html" method="post">
					<div class="form-group">
						<div class="form-item form-search">
							<input type="text" name="search-pub" value="" placeholder="Søg efter publikaitoner...">
						</div>
						<div class="form-item form-select">
							<select class="" name="category-pub">
								<option selected disabled hidden value="[object Object]">Vælg kategori</option>
								<option value="[object Object]">Alle</option>
								<option value="[object Object]">Afhængihed</option>
								<option value="[object Object]">Misbrug</option>
								<option value="[object Object]">Hjemløs</option>
								<option value="[object Object]">Den grimme ælling</option>
								<option value="[object Object]">Medlems publikaitoner</option>
							</select>
						</div>
						<div class="form-item form-select">
							<select class="" name="sort-pub">
								<option selected disabled hidden value="[object Object]">Sorter efter</option>
								<option value="[object Object]">Nyeste</option>
								<option value="[object Object]">Ældste</option>
								<option value="[object Object]">Mest hentede</option>
								<option value="[object Object]">Gratis</option>
								<option value="[object Object]">Betalt</option>
							</select>
						</div>
					</div>
				</form>
			</div>
			<hr>
			<div class="row mt-4">
				<div class="col-md-3">
					<a target="_blank" href="assets/Akut+Krisecenter+for+livstruede+stofmisbrugere_web.pdf" download="proposed_file_name">
						<figure class="pub-item">
								<div class="pub-image" style="background-image: url('assets/images/publications/pub-1.jpg');">
								</div>
								<div class="pub-info px-3 py-3">
									<div class="btn-green-round float-right">
										<i class="read-more-btn fas fa-arrow-down"></i>
									</div>
									<p class="boldtext">Den Gode Historie</p>
									<p class="color-gray">22 Sider   |   5MB   |  4 Marts, 2018</p>
									<p class="boldtext color-green">Misbrug, Afhængihed</p>
								</div>
						</figure>
					</a>
				</div>

				<div class="col-md-3">
					<a target="_blank" href="assets/Akut+Krisecenter+for+livstruede+stofmisbrugere_web.pdf" download="proposed_file_name">
						<figure class="pub-item">
								<div class="pub-image" style="background-image: url('assets/images/publications/pub-2.jpg');">
								</div>
								<div class="pub-info px-3 py-3">
									<div class="btn-green-round float-right">
										<i class="read-more-btn fas fa-arrow-down"></i>
									</div>
									<p class="boldtext">Den Gode Historie</p>
									<p class="color-gray">22 Sider   |   5MB   |  4 Marts, 2018</p>
									<p class="boldtext color-green">Misbrug, Afhængihed</p>
								</div>
						</figure>
					</a>
				</div>

				<div class="col-md-3">
					<a target="_blank" href="assets/Akut+Krisecenter+for+livstruede+stofmisbrugere_web.pdf" download="proposed_file_name">
						<figure class="pub-item">
								<div class="pub-image" style="background-image: url('assets/images/publications/pub-3.png');">
								</div>
								<div class="pub-info px-3 py-3">
									<div class="btn-green-round float-right">
										<i class="read-more-btn fas fa-arrow-down"></i>
									</div>
									<p class="boldtext">Den Gode Historie</p>
									<p class="color-gray">22 Sider   |   5MB   |  4 Marts, 2018</p>
									<p class="boldtext color-green">Misbrug, Afhængihed</p>
								</div>
						</figure>
					</a>
				</div>

				<div class="col-md-3">
					<a target="_blank" href="assets/Akut+Krisecenter+for+livstruede+stofmisbrugere_web.pdf" download="proposed_file_name">
						<figure class="pub-item">
								<div class="pub-image" style="background-image: url('assets/images/publications/pub-4.png');">
								</div>
								<div class="pub-info px-3 py-3">
									<div class="btn-green-round float-right">
										<i class="read-more-btn fas fa-arrow-down"></i>
									</div>
									<p class="boldtext">Den Gode Historie</p>
									<p class="color-gray">22 Sider   |   5MB   |  4 Marts, 2018</p>
									<p class="boldtext color-green">Misbrug, Afhængihed</p>
								</div>
						</figure>
					</a>
				</div>

			</div>
		</div>
	</section>
</div>


<!-- The page content ends here -->

<?php include 'footer.php'; ?>
