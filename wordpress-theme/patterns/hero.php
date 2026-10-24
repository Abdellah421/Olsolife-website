<?php
/**
 * Title: Hero OLSOLIFE
 * Slug: olsolife/hero
 * Categories: olsolife
 * Description: Hero plein écran avec photo agrivoltaïque et appels à l'action.
 */
$hero = esc_url( get_theme_file_uri( 'assets/images/hero-agrivoltaics.jpg' ) );
?>
<section class="olsolife-hero">
  <img class="olsolife-hero-img" src="<?php echo $hero; ?>" alt="Centrale agrivoltaïque : panneaux solaires verticaux installés sur des terres agricoles" fetchpriority="high" />
  <div class="olsolife-hero-inner">
    <p class="olsolife-eyebrow">Irrigation solaire — El Kelâa des Sraghna</p>
    <h1>L'énergie solaire au service de votre agriculture.</h1>
    <p class="olsolife-hero-sub">Des solutions d'irrigation adaptées aux besoins de votre exploitation agricole.</p>
    <div class="olsolife-hero-ctas">
      <a class="olsolife-btn olsolife-btn-accent" href="#devis">Demander un devis</a>
      <a class="olsolife-btn olsolife-btn-outline" href="#solutions">Découvrir nos solutions</a>
    </div>
    <p class="olsolife-photo-note">Photo illustrative : centrale agrivoltaïque (Tobi Kellner, Wikimedia Commons). Ce n'est pas un projet OLSOLIFE.</p>
  </div>
</section>
