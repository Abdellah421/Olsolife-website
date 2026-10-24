<?php
/**
 * Title: Projets (emplacement de démonstration)
 * Slug: olsolife/projects-placeholder
 * Categories: olsolife
 * Description: Galerie d'emplacement clairement étiquetée comme démonstration.
 */
$img_a = esc_url( get_theme_file_uri( 'assets/images/hero-agrivoltaics.jpg' ) );
$img_b = esc_url( get_theme_file_uri( 'assets/images/solution-irrigation.jpg' ) );
$img_c = esc_url( get_theme_file_uri( 'assets/images/solution-goutte.jpg' ) );
?>
<section id="projets" class="olsolife-section">
  <div class="olsolife-section-inner">
    <p class="olsolife-eyebrow">Projets</p>
    <h2>Réalisations</h2>
    <p class="olsolife-lead">Aucun projet réel d'OLSOLIFE n'est documenté publiquement à ce jour. La galerie ci-dessous est un emplacement de démonstration : elle doit être remplacée par de vraies photos de chantiers avant toute publication officielle.</p>
    <div class="olsolife-grid-3">
      <figure class="olsolife-project-tile">
        <img src="<?php echo $img_a; ?>" alt="Photo illustrative d'une centrale agrivoltaïque" loading="lazy" />
        <figcaption>Projet de démonstration — photo illustrative</figcaption>
      </figure>
      <figure class="olsolife-project-tile">
        <img src="<?php echo $img_b; ?>" alt="Photo illustrative d'un système d'irrigation" loading="lazy" />
        <figcaption>Projet de démonstration — photo illustrative</figcaption>
      </figure>
      <figure class="olsolife-project-tile">
        <img src="<?php echo $img_c; ?>" alt="Photo illustrative d'une installation goutte-à-goutte" loading="lazy" />
        <figcaption>Projet de démonstration — photo illustrative</figcaption>
      </figure>
    </div>
  </div>
</section>
