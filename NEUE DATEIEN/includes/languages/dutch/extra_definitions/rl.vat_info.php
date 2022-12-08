<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * Translations by Zen4All (https://zen4all.nl)
 * https://github.com/Zen4All-nl/Dutch-Language-Pack-for-Zen-Cart
 * @version $Id: rl.vat_info.php 2022-12-08 15:45:57Z webchills $
 */
 
define('VAT_SHOW_TEXT_VERSANDKOSTENFREI','<br><span class="taxAddon">incl. %s BTW</span>');

if(DISPLAY_PRICE_WITH_TAX=='true')
define('VAT_SHOW_TEXT','<br><span class="taxAddon">incl. %s BTW<br> plus <a href="' . zen_href_link(FILENAME_SHIPPING) . '">verzendkosten</a></span>');
else
define('VAT_SHOW_TEXT','<br><span class="taxAddon">plus %s BTW<br> plus <a href="' . zen_href_link(FILENAME_SHIPPING) . '">verzendkosten</a></span>');