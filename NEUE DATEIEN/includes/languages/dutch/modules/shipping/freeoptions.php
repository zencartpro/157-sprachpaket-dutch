<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * Translations by Zen4All (https://zen4all.nl)
 * https://github.com/Zen4All-nl/Dutch-Language-Pack-for-Zen-Cart
 
 * @version $Id: freeoptions.php 627 2010-08-30 15:05:14Z webchills $
 */

define('MODULE_SHIPPING_FREEOPTIONS_TEXT_TITLE', 'Optioneel geen verzendkosten');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_DESCRIPTION', '
Optioneel geen verzendkosten word gebruikt om een gratis verzendmethode te bieden als er ook andere verzendmethodes worden weergegeven.
Kan worden ingesteld als: Altijd weergeven, Totaal bestelling, gewicht bestelling of op basis van het aantal items dat besteld wordt.
De optioneel geen verzendkosten module word niet getoond als de Geen verzendkosten module word weergegeven.<br><br>
Totaal instellen op >= 0.00 en <= niks (leeg laten) zal deze module activeren om te worden getoond bij alle verzendmethodes, behalve voor Geen verzendkosten - gratis verzend.<br><br>
NB: Door alle insttellingen voor totaal, gewicht en items tellen leeg te laten zal deze module deactiveren.<br><br>
NB: De Optioneel geen verzendkosten module zal niet worden getoond als de Geen verzendkosten staat ingesteld op aktiveren bij een bestelgewicht van 0.
zie: Geen verzendkosten
');
define('MODULE_SHIPPING_FREEOPTIONS_TEXT_WAY', 'Geen verzendkosten');