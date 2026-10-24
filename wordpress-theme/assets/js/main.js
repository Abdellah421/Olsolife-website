/* OLSOLIFE Premium — interactions minimales, sans dépendance. */
(function () {
  'use strict';

  /* Menu mobile (<details>) : se referme quand on choisit un lien. */
  document.querySelectorAll('.olsolife-mobile-menu nav a').forEach(function (link) {
    link.addEventListener('click', function () {
      var menu = link.closest('.olsolife-mobile-menu');
      if (menu) { menu.removeAttribute('open'); }
    });
  });

  /* Formulaire de devis -> message WhatsApp prérempli.
     Les données ne sont NI stockées NI envoyées par e-mail : elles partent
     uniquement dans le message WhatsApp que l'utilisateur choisit d'envoyer. */
  document.querySelectorAll('.olsolife-quote-form').forEach(function (form) {
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      var nom = form.querySelector('[name="nom"]');
      var tel = form.querySelector('[name="telephone"]');
      var status = form.querySelector('.olsolife-form-status');
      if (!nom.value.trim() || !tel.value.trim()) {
        if (status) { status.textContent = 'Veuillez renseigner votre nom et votre numéro de téléphone.'; }
        (nom.value.trim() ? tel : nom).focus();
        return;
      }
      var val = function (name) {
        var el = form.querySelector('[name="' + name + '"]');
        return el ? el.value.trim() : '';
      };
      var lines = [
        'Bonjour OLSOLIFE,',
        'Je souhaite un devis pour un projet d\u2019irrigation solaire.',
        'Nom : ' + val('nom'),
        'Téléphone : ' + val('telephone'),
        'Ville : ' + val('ville'),
        'Type de projet : ' + val('type_projet'),
        'Surface : ' + val('surface') + ' ha',
        'Source d\u2019eau : ' + val('source_eau'),
        'Détails : ' + val('details')
      ];
      var number = (window.olsolifeData && window.olsolifeData.whatsapp) ? window.olsolifeData.whatsapp : '212641395113';
      var url = 'https://wa.me/' + number + '?text=' + encodeURIComponent(lines.join('\n'));
      if (status) { status.textContent = 'Ouverture de WhatsApp avec votre demande préremplie…'; }
      window.open(url, '_blank', 'noopener');
    });
  });
})();
