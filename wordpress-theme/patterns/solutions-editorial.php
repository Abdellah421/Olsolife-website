<?php
/**
 * Title: Solutions éditoriales
 * Slug: olsolife/solutions-editorial
 * Categories: olsolife
 * Description: Trois solutions en mise en page éditoriale alternée.
 */
$img_pompage = esc_url( get_theme_file_uri( 'assets/images/solution-pompage.jpg' ) );
$img_irrigation = esc_url( get_theme_file_uri( 'assets/images/solution-irrigation.jpg' ) );
$img_goutte = esc_url( get_theme_file_uri( 'assets/images/solution-goutte.jpg' ) );
?>
<section id="solutions" class="olsolife-section">
  <div class="olsolife-section-inner">
    <p class="olsolife-eyebrow">Nos solutions</p>
    <h2>Des solutions adaptées à votre source d'eau et à vos cultures</h2>
    <p class="olsolife-lead">Les catégories ci-dessous sont des pistes à valider avec OLSOLIFE : les détails techniques et les marques proposées sont à confirmer.</p>

    <div class="olsolife-editorial">
      <div class="olsolife-editorial-media">
        <img src="<?php echo $img_pompage; ?>" alt="Pompe solaire installée en extérieur" loading="lazy" />
        <p class="olsolife-photo-note">Photo illustrative : pompe solaire (James Emery, Wikimedia Commons). Ce n'est pas un projet OLSOLIFE.</p>
      </div>
      <div>
        <h3>Pompage solaire</h3>
        <p>Le pompage solaire puise l'eau de puits, de forages ou de réserves pour alimenter votre exploitation, en utilisant l'énergie du soleil.</p>
        <p class="olsolife-placeholder">[À confirmer : types de pompes, profondeurs, débits, marques]</p>
        <p><a class="olsolife-btn olsolife-btn-primary" href="#devis">Demander un devis</a></p>
      </div>
    </div>

    <div class="olsolife-editorial olsolife-editorial-flip">
      <div class="olsolife-editorial-media">
        <img src="<?php echo $img_irrigation; ?>" alt="Système d'irrigation par pivot arrosant une parcelle agricole" loading="lazy" />
        <p class="olsolife-photo-note">Photo illustrative : irrigation par pivot (Wikimedia Commons, CC BY-SA 3.0). Ce n'est pas un projet OLSOLIFE.</p>
      </div>
      <div>
        <h3>Irrigation agricole</h3>
        <p>Des systèmes d'irrigation pour distribuer l'eau sur vos parcelles, du pompage jusqu'à l'aspersion ou l'acheminement vers les cultures.</p>
        <p class="olsolife-placeholder">[À confirmer : systèmes proposés, surfaces couvertes, installation]</p>
        <p><a class="olsolife-btn olsolife-btn-primary" href="#devis">Demander un devis</a></p>
      </div>
    </div>

    <div class="olsolife-editorial">
      <div class="olsolife-editorial-media">
        <img src="<?php echo $img_goutte; ?>" alt="Tuyaux d'irrigation goutte-à-goutte installés dans un champ" loading="lazy" />
        <p class="olsolife-photo-note">Photo illustrative : tuyaux d'irrigation (Amuzujoe, Wikimedia Commons). Ce n'est pas un projet OLSOLIFE.</p>
      </div>
      <div>
        <h3>Systèmes goutte-à-goutte</h3>
        <p>Une irrigation localisée qui apporte l'eau au pied de chaque plante et réduit le gaspillage, adaptée aux cultures en lignes et aux vergers.</p>
        <p class="olsolife-placeholder">[À confirmer : matériel, goutteurs, filtration, entretien]</p>
        <p><a class="olsolife-btn olsolife-btn-primary" href="#devis">Demander un devis</a></p>
      </div>
    </div>
  </div>
</section>
