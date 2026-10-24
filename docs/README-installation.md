# OLSOLIFE Premium — Guide d'installation (thème WordPress v2)

Thème de blocs, sans plugin payant, sans Elementor. Aucun déploiement live n'est
inclus : ce dossier livre un thème installable, à installer sur un WordPress existant.

## 1. Installer le thème

1. Dans WordPress : **Apparence > Thèmes > Ajouter > Importer un thème**,
   puis choisissez `olsolife-theme.zip`.
   (Ou décompressez le zip dans `wp-content/themes/` de façon à obtenir
   `wp-content/themes/olsolife/`.)
2. Activez le thème **OLSOLIFE Premium**.
3. Si WordPress signale une erreur de syntaxe à l'activation : le fichier
   `functions.php` n'a pas pu être vérifié avec `php -l` dans l'environnement
   de construction (PHP indisponible) — vérifiez-le sur une machine équipée de PHP
   avant de poursuivre. Voir le rapport de qualité.

## 2. Configurer la page d'accueil

1. **Pages > Ajouter** une page intitulée « Accueil » (contenu libre, le modèle
   « Page d'accueil » du thème s'applique automatiquement aux pages d'accueil).
2. **Réglages > Lecture > « La page d'accueil affiche » > Une page statique**,
   puis choisissez « Accueil ».
3. Le contenu de la page d'accueil provient des modèles du thème
   (`templates/front-page.html` et les modèles dans `patterns/`) et reste
   modifiable dans **Apparence > Éditeur** (éditeur de site).

## 3. Modifier le contenu

| Élément | Où le modifier |
|---|---|
| Logo | Apparence > Éditeur > en-tête, bloc Logo (ou Apparence > Personnaliser > Identité du site) |
| Contenu de l'accueil, images, textes | Apparence > Éditeur (modèles et modèles de blocs) |
| Solutions / Produits / Projets | Contenus > Solutions / Produits / Projets (types de contenu personnalisés) |
| Téléphone, WhatsApp, adresse, horaires, lien Maps | Apparence > Personnaliser > Coordonnées OLSOLIFE |
| Métadonnées SEO (titres, descriptions) | Titre du site et réglages des pages (fonctionnalités natives de WordPress) |
| Menu de navigation | Les liens de l'en-tête sont modifiables dans Apparence > Éditeur ; un menu WordPress classique peut être assigné (emplacements « Menu principal » et « Menu de pied de page » déclarés dans `functions.php`) |

## 4. Crédits photos

Les photos livrées dans `assets/images/` sont des photos illustratives issues de
Wikimedia Commons — ce ne sont PAS des photos d'OLSOLIFE. Voir
`assets/SOURCES.md` pour chaque source, auteur et licence.
**Avant toute publication officielle**, remplacez-les par de vraies photos
d'OLSOLIFE (boutique, chantiers, équipe, matériel).

## 5. Étapes obligatoires avant publication

- [ ] **Confirmer que +212 6 41 39 51 13 est actif sur WhatsApp** (le flux
      WhatsApp du formulaire et du bouton flottant utilise ce numéro).
- [ ] Remplacer tous les contenus marqués `[À confirmer]` : marques, modèles,
      prix, spécifications, services exacts, garanties, certifications.
- [ ] Remplacer la galerie « Projets » (emplacement de démonstration) par de
      vraies photos de chantiers, ou la retirer.
- [ ] Vérifier `php -l functions.php` sur une machine équipée de PHP.
- [ ] Tester le site dans un vrai WordPress (voir le rapport de qualité pour
      la liste des tests restants : rendu, mobile, édition, formulaire réel).

## 6. Arabe — travail restant (aucun faux sélecteur de langue)

Le thème est livré en français uniquement, sans bouton de langue non fonctionnel.
Le CSS utilise des propriétés logiques (`margin-inline-start`, `inset-inline`)
pour préparer la RTL. Pour l'arabe : installer une extension multilingue
(Polylang ou WPML), faire traduire les contenus par un traducteur professionnel,
puis activer le sélecteur de langue de l'extension. Ne pas activer de langue
arabe approximative ou automatique sur le site public.

## 7. Ce que le thème ne fait PAS

- Il ne stocke pas les demandes de devis et n'envoie pas d'e-mail : le formulaire
  ouvre WhatsApp avec un message prérempli que l'utilisateur choisit d'envoyer.
- Il n'affiche aucune note, aucun avis et aucun témoignage : la fiche Google Maps
  ne compte que 2 avis, insuffisants pour être repris.
- Il ne prétend pas être déployé : l'ancienne démo statique Vercel reste séparée
  et n'est pas un WordPress.
