<?php
/**
 * Title: Catalogue produits
 * Slug: olsolife/products
 * Categories: olsolife
 * Description: Cartes produits avec image, description et appel à la demande.
 */
$img_pompe = esc_url( get_theme_file_uri( 'assets/images/produit-pompe.jpg' ) );
$img_panneaux = esc_url( get_theme_file_uri( 'assets/images/produit-panneaux.jpg' ) );
$img_controleur = esc_url( get_theme_file_uri( 'assets/images/produit-controleur.jpg' ) );
?>
<section id="produits" class="olsolife-section olsolife-section-alt">
  <div class="olsolife-section-inner">
    <p class="olsolife-eyebrow">Produits</p>
    <h2>Un catalogue de matériel d'irrigation solaire</h2>
    <p class="olsolife-lead">Sélection illustrative de catégories de matériel. Aucune marque, aucun modèle ni prix n'est indiqué : ces informations sont à confirmer avec OLSOLIFE.</p>
    <div class="olsolife-grid-3">
      <article class="olsolife-card">
        <img src="<?php echo $img_pompe; ?>" alt="Système de pompage solaire" loading="lazy" />
        <div class="olsolife-card-body">
          <h3>Pompes solaires</h3>
          <p>Pompes submersibles et de surface alimentées par énergie solaire.</p>
          <p class="olsolife-placeholder">[Produits et prix à confirmer]</p>
          <a class="olsolife-btn olsolife-btn-primary" href="#devis">Se renseigner</a>
        </div>
      </article>
      <article class="olsolife-card">
        <img src="<?php echo $img_panneaux; ?>" alt="Panneaux photovoltaïques installés en plein champ" loading="lazy" />
        <div class="olsolife-card-body">
          <h3>Panneaux solaires</h3>
          <p>Champ photovoltaïque dimensionné selon vos besoins en eau.</p>
          <p class="olsolife-placeholder">[Produits et prix à confirmer]</p>
          <a class="olsolife-btn olsolife-btn-primary" href="#devis">Se renseigner</a>
        </div>
      </article>
      <article class="olsolife-card">
        <img src="<?php echo $img_controleur; ?>" alt="Onduleur central d'une installation photovoltaïque" loading="lazy" />
        <div class="olsolife-card-body">
          <h3>Contrôleurs &amp; accessoires</h3>
          <p>Contrôleurs, câbles, tuyauterie et accessoires d'installation.</p>
          <p class="olsolife-placeholder">[Produits et prix à confirmer]</p>
          <a class="olsolife-btn olsolife-btn-primary" href="#devis">Se renseigner</a>
        </div>
      </article>
    </div>
    <p class="olsolife-photo-note">Photos illustratives (Wikimedia Commons) : système de pompage, panneaux photovoltaïques, onduleur central. Ce ne sont pas des produits photographiés chez OLSOLIFE.</p>
  </div>
</section>
