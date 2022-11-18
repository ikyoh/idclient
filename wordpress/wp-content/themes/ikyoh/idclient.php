<?php

/* Template Name: Example Template */

get_header();
?>

<div class="hero-container">
	<div></div>
	<div class="hero">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/picts/hero-overlay.png" alt="">
	</div>
	<div></div>
</div>


<?php 
// 1. On définit les arguments pour définir ce que l'on souhaite récupérer
$args = array(
    'post_type' => 'idclient-title'
);

// 2. On exécute la WP Query
$my_query = new WP_Query( $args );

// 3. On lance la boucle !
if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
    
?>
<div>
<?php  the_title(); ?>
</div>
	
	<?php

// the_content();
// the_post_thumbnail();
endwhile;
endif;

// 4. On réinitialise à la requête principale (important)
wp_reset_postdata();

?>


	


<section class="intro">
	<div class="container">
		<h1>
			" iD CLIENT est née d’une super ambition personnelle de changement !
		</h1>
		<p>
			Stéphanie Rosa - Fondatrice et directrice de création
		</p>
		<p>
			Après 20 années de commerce dans le secteur de l’impression numérique grand format et de la signalétique
			évènementielle et pérenne, j’ai décidé de m’orienter sur la création et l’accompagnement des directions
			marketing sur leurs opérations évènementielles et la décoration pérenne de leurs espaces de vente,
			parcours client et espaces dédiés.
		</p>
		<p>
			Mes passions pour l’environnement commercial, l’expérience client et
			la relation client m’ont poussées à trouver davantage de sens à mon activité professionnelle. J’ai donc
			créé ma propre structure : ID CLIENT et me suis entourée d’un super réseau de partenaires EXPERTS en :
		</p>
		<p>
			J’ai donc créé ma propre structure : ID CLIENT et me suis entourée d’un super réseau de partenaires
			EXPERTS en :
		</p>
	</div>
</section>
<section>
	<div class="container flex picts">
		<div class="circle">
			<img src="assets/picts/social-facebook.svg" alt="">
			Graphisme et 3D
		</div>
		<div class="circle">
			<img src="assets/picts/social-facebook.svg" alt="">
			Graphisme et 3D
		</div>
		<div class="circle">
			<img src="assets/picts/social-facebook.svg" alt="">
			Graphisme et 3D
		</div>
		<div class="circle">
			<img src="assets/picts/social-facebook.svg" alt="">
			Graphisme et 3D
		</div>
		<div class="circle">
			<img src="assets/picts/social-facebook.svg" alt="">
			Graphisme et 3D
		</div>
		<div class="circle">
			<img src="assets/picts/social-facebook.svg" alt="">
			Graphisme et 3D
		</div>
		<div class="circle">
			<img src="assets/picts/social-facebook.svg" alt="">
			Graphisme et 3D
		</div>
		<div class="circle">
			<img src="assets/picts/social-facebook.svg" alt="">
			Graphisme et 3D
		</div>
		<div class="circle">
			<img src="assets/picts/social-facebook.svg" alt="">
			Graphisme et 3D
		</div>
	</div>
</section>
<section class="intro">
	<div class="container">
		<p>
			Ainsi, je peux créer mes concepts personnalisés et les faire fabriquer en toute tranquillité́ avec un
			réseau fiable, réactif et qualitatif !
		</p>
		<p>

			Mon expertise dans le secteur du Retail et des Centres Commerciaux me permet de conseiller mes clients
			sur le choix des matériaux et des installations possibles tout en respectant les normes
			environnementales et de sécurité́ importantes sur les surfaces de vente et le parcours client.
		</p>
		<p>
			Étant très impliquée dans le développement durable, je suis constamment en veille sur les matériaux
			innovants eco-responsables et mes partenaires privilégient des supports recyclés, recyclables ou
			naturels : le bois, le papier, le végétal… je suis également axée sur le recyclage et la réutilisation
			de mes concepts sur plusieurs utilisations.
		</p>
		<p>
			Mon ambition principale est de démarquer mon client de ses concurrents en proposant une expérience
			client originale, personnalisée et unique.
		</p>
		<p>
			J’ai décidé de m’orienter sur la création de concepts et l’accompagnement…mes passions pour
			l’environnement commercial, le design de service, l’expérience client…
		</p>
	</div>
</section>
<section class="expertise">
	<h1 class="text-center text-white uppercase">Prestation</h1>
	<div class="container">
		<div class="swiper">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<div class="expertise-card"></div>
				</div>
				<div class="swiper-slide">
					<div class="expertise-card"></div>
				</div>
				<div class="swiper-slide">
					<div class="expertise-card"></div>
				</div>
				<div class="swiper-slide">
					<div class="expertise-card"></div>
				</div>
				<div class="swiper-slide">
					<div class="expertise-card"></div>
				</div>
			</div>

			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

		</div>
	</div>
</section>
<section class="reference">
	<h1 class="text-center text-primary uppercase">Références</h1>
	<div class="container">
		<h3 class="text-center">
			Yara MORETE
		</h3>
		<h4 class="text-center">
			Responsable Silk Road Paris
		</h4>
		<p class="text-center">
			ID Client sait proposer tous types de solutions et anticiper vos besoins ! Disponible et très à
			l’écoute, vous pouvez trouver ensemble le meilleur compromis. De confiance, nous n’hésitons pas à faire
			appel à Stéphanie !
		</p>
	</div>
</section>
<section>
	<div class="container flex space-between">
		<div class="logos"></div>
		<div class="logos"></div>
		<div class="logos"></div>
		<div class="logos"></div>
		<div class="logos"></div>
		<div class="logos"></div>
	</div>
</section>

<section>
	<div class="container">
		<div class="swiper">
			<!-- Additional required wrapper -->
			<div class="swiper-wrapper">
				<!-- Slides -->
				<div class="swiper-slide">
					<div class="expertise-card"></div>
				</div>
				<div class="swiper-slide">
					<div class="expertise-card"></div>
				</div>
				<div class="swiper-slide">
					<div class="expertise-card"></div>
				</div>
				<div class="swiper-slide">
					<div class="expertise-card"></div>
				</div>
				<div class="swiper-slide">
					<div class="expertise-card"></div>
				</div>
			</div>

			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>

		</div>
	</div>
</section>
<!-- Slider main container -->

<div class="contact flex">
	<div class="expertise-card"></div>
	<div class="expertise-card"></div>
</div>

<?php

get_footer();
