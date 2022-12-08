<?php
/**
 * Zen Cart German Specific
 
* @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * Translations by Zen4All (https://zen4all.nl)
 * https://github.com/Zen4All-nl/Dutch-Language-Pack-for-Zen-Cart
* @version $Id: index.php 2020-03-01 09:00:16Z webchills $
 */

define('TEXT_MAIN','Dit is de algemene tekst voor de door <a href="http://zen-cart.nl">zen-cart.nl</a> uitgegeven Nederlandse versie (Dutch language) indien geen template is gekozen. Deze tekst kunt u vinden in: <strong>/includes/languages/dutch/index.php</strong>');

// Showroom vs winkel
if (STORE_STATUS == '0') {
  define('TEXT_GREETING_GUEST', 'Welkom <span class="greetUser">bezoeker!</span> Wilt u zich <a href="%s">aanmelden</a>?');
} else {
  define('TEXT_GREETING_GUEST', 'Welkom, kijk rustig rond in onze showroom.');
}

define('TEXT_GREETING_PERSONAL', 'Welkom terug <span class="greetUser">%s</span>! Wilt u de <a href="%s">nieuwste toevoegingen</a> aan ons assortiment zien?');

define('TEXT_INFORMATION', 'De welkomstpagina van je bedrijf kun je hier kwijt.');


if ( ($category_depth == 'products') || (zen_check_url_get_terms()) ) {
  // dit deel gaat over de artikeloverzicht pagina's
  define('HEADING_TITLE', 'Beschikbare artikelen');
  define('TABLE_HEADING_IMAGE', 'Productfoto');
  define('TABLE_HEADING_PRODUCTS', 'Naam artikel');
  define('TABLE_HEADING_MANUFACTURER', 'Merk');
  define('TABLE_HEADING_PRICE', 'Prijs');
  define('TABLE_HEADING_WEIGHT', 'Gewicht');
  define('TABLE_HEADING_BUY_NOW', 'Nu kopen!');
  define('TEXT_NO_PRODUCTS', 'In deze categorie zijn op dit moment geen artikelen aanwezig.');
  define('TEXT_NO_PRODUCTS2', 'Van dit merk zijn op dit moment geen artikelen aanwezig.');
  define('TEXT_NUMBER_OF_PRODUCTS', 'Aantal artikelen: ');
  define('TEXT_SHOW', 'Sorteren op:');
  define('TEXT_BUY', 'Koop 1 \'');
  define('TEXT_NOW', '\' nu');
  define('TEXT_ALL_CATEGORIES', 'Alle categorieën');
  define('TEXT_ALL_MANUFACTURERS', 'Alle merken');
} elseif ($category_depth == 'top') {
  // dit deel gaat over wat er bovenaan de "home" pagina komt te staan als er geen opties danwel artikelen zijn geselecteerd
  /*Vervang deze tekst door de door u gewenste koptekst. Bijvoorbeeld: 'Welkom in mijn webwinkel!'*/
  define('HEADING_TITLE', 'Welkom in onze online winkel!');
} elseif ($category_depth == 'nested') {
  // dit deel gaat over het weergeven van een subcategorie
  /*Vervang deze tekst door de door u gewenste koptekst. Bijvoorbeeld: 'Welkom in mijn webwinkel!'*/
  define('HEADING_TITLE', 'Welkom in onze online winkel!');
}
