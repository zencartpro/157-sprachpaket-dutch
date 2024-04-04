<?php
/**
 * Zen Cart German Specific (158 code in 157 /zencartpro adaptations)
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * Translations by Zen4All (https://zen4all.nl)
 * https://github.com/Zen4All-nl/Dutch-Language-Pack-for-Zen-Cart 
 * @version $Id: checkout_confirmation.php 2024-04-04 14:53:14Z webchills $
 */

define('NAVBAR_TITLE_1', 'Afrekenen');
define('NAVBAR_TITLE_2', 'Bevestiging');

define('HEADING_TITLE', 'Stap 3 van 3 - Bevestigen bestelling');
define('TEXT_ZUSATZ_SCHRITT3','Controleer uw bestelling en druk vervolgens op de knop "KOPEN" onderaan deze pagina.');
define('BRAINTREE_MESSAGE_PLEASE_CONFIRM_ORDER', '<b>Uw creditcard is succesvol geverifieerd, maar er is nog geen betaling verricht. Bevestig nu uw bestelling met onderstaande knop. Alleen dan worden betaling en bestelling verwerkt.</b>');
define('HEADING_PRODUCTS','Inhoud winkelmandje');


define('NO_COMMENTS_TEXT', 'Geen');
define('TITLE_CONTINUE_CHECKOUT_PROCEDURE', 'Laatste stap');
define('TEXT_CONTINUE_CHECKOUT_PROCEDURE', '- verdergaan om uw bestelling te bevestigen.');

// buttonloesung
define('TABLE_HEADING_SINGLEPRICE','Prijs');
define('TABLE_HEADING_PRODUCTIMAGE','Afbeelding');
define('TEXT_CONDITIONS_ACCEPTED_IN_LAST_STEP','Ik heb <a href="' . zen_href_link(FILENAME_CONDITIONS, '', 'SSL') . '" target="_blank"><u>Algemene voorwaarden</u></a> en <a href="' . zen_href_link(FILENAME_WIDERRUFSRECHT, '', 'SSL') . '"><u>Recht van terugtrekking</u></a> gelezen en aanvaard.');
define('TEXT_NON_EU_COUNTRIES','Let op:<br>Uw bestelling wordt geleverd in een niet-EU land. Bovendien kunnen verdere douanerechten, belastingen of kosten worden gemaakt als onderdeel van uw bestelling, die niet via ons worden betaald of door ons worden gefactureerd.');
