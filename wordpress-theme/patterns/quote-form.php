<?php
/**
 * Title: Formulaire de devis WhatsApp
 * Slug: olsolife/quote-form
 * Categories: olsolife
 * Description: Formulaire de demande de devis envoyée via WhatsApp (rien n'est stocké).
 */
?>
<section id="devis" class="olsolife-section olsolife-section-alt">
  <div class="olsolife-section-inner">
    <p class="olsolife-eyebrow">Demander un devis</p>
    <h2>Décrivez votre projet, nous vous répondons via WhatsApp</h2>
    <p class="olsolife-lead">Remplissez le formulaire : votre demande s'ouvre préremplie dans WhatsApp. Vos informations ne sont pas stockées sur ce site et ne sont pas envoyées par e-mail.</p>
    <p class="olsolife-placeholder">[À confirmer avec OLSOLIFE : ce numéro est-il actif sur WhatsApp avant publication ? Numéro utilisé : +212 6 41 39 51 13]</p>
    <form class="olsolife-quote-form" action="#" method="get" novalidate>
      <div>
        <label for="olsolife-nom">Nom complet *</label>
        <input id="olsolife-nom" name="nom" type="text" required autocomplete="name" />
      </div>
      <div>
        <label for="olsolife-tel">Numéro de téléphone *</label>
        <input id="olsolife-tel" name="telephone" type="tel" required autocomplete="tel" />
      </div>
      <div>
        <label for="olsolife-ville">Ville</label>
        <input id="olsolife-ville" name="ville" type="text" autocomplete="address-level2" />
      </div>
      <div>
        <label for="olsolife-type">Type de projet</label>
        <select id="olsolife-type" name="type_projet">
          <option value="">— Choisir —</option>
          <option value="Pompage solaire">Pompage solaire</option>
          <option value="Irrigation agricole">Irrigation agricole</option>
          <option value="Goutte-à-goutte">Goutte-à-goutte</option>
          <option value="Autre">Autre</option>
        </select>
      </div>
      <div>
        <label for="olsolife-surface">Surface agricole (ha)</label>
        <input id="olsolife-surface" name="surface" type="number" min="0" step="0.1" inputmode="decimal" />
      </div>
      <div>
        <label for="olsolife-source">Source d'eau</label>
        <select id="olsolife-source" name="source_eau">
          <option value="">— Choisir —</option>
          <option value="Puits / forage">Puits / forage</option>
          <option value="Eau de surface (oued, bassin)">Eau de surface (oued, bassin)</option>
          <option value="Réservoir / château d'eau">Réservoir / château d'eau</option>
          <option value="Autre">Autre</option>
        </select>
      </div>
      <div class="olsolife-field-full">
        <label for="olsolife-details">Détails du projet</label>
        <textarea id="olsolife-details" name="details" rows="4"></textarea>
      </div>
      <div class="olsolife-field-full">
        <button class="olsolife-btn olsolife-btn-primary" type="submit">Envoyer ma demande via WhatsApp</button>
        <p class="olsolife-form-status" aria-live="polite"></p>
        <small>* Champs obligatoires. En envoyant, vous ouvrez WhatsApp avec votre message prérempli ; vous choisissez ensuite de l'envoyer ou non.</small>
      </div>
    </form>
  </div>
</section>
