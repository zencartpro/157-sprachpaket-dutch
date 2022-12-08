<?php
/**
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * Translations by Zen4All (https://zen4all.nl)
 * https://github.com/Zen4All-nl/Dutch-Language-Pack-for-Zen-Cart
 * @version $Id: eustandardtransfer.php 2015-12-23 20:36:14 webchills $
*/
define('MODULE_PAYMENT_EUTRANSFER_TEXT_TITLE', 'Postwissel');

define('MODULE_PAYMENT_EUTRANSFER_TEXT_DESCRIPTION', 
'<div class="eustandardtransferdescription">Gebruik de volgende details om het bedrag van uw order over te maken:<br>' .
'<br>Bank name:  ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKNAM) .
'<br>Account Name: ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCNAM) . 
'<br>IBAN:    ' . nl2br(MODULE_PAYMENT_EUTRANSFER_ACCIBAN) .
'<br>BIC/SWIFT:   ' . nl2br(MODULE_PAYMENT_EUTRANSFER_BANKBIC) .
'<br>Uw order zal worden verwerkt als wij de betaling hebben ontvangen.</div>');
   
define('MODULE_PAYMENT_EUTRANSFER_TEXT_EMAIL_FOOTER', 
"Gebruik de volgende details om het bedrag van uw order over te maken:\n" .
"\nBank naam:  " . MODULE_PAYMENT_EUTRANSFER_BANKNAM .
"\nAccount Naam: " . MODULE_PAYMENT_EUTRANSFER_ACCNAM . 
"\nIBAN:    " . MODULE_PAYMENT_EUTRANSFER_ACCIBAN .
"\nBIC/SWIFT:   " . MODULE_PAYMENT_EUTRANSFER_BANKBIC . 
"\n\nUw order zal worden verwerkt als wij de betaling hebben ontvangen.");