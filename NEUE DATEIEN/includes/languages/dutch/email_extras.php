<?php
/**
* Zen Cart German Specific (158 code in 157)

* @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
* @copyright Portions Copyright 2003 osCommerce
* @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * Translations by Zen4All (https://zen4all.nl)
 * https://github.com/Zen4All-nl/Dutch-Language-Pack-for-Zen-Cart
* @version $Id: email_extras.php 2024-04-04 17:32:14Z webchills $
 */

define ('EMAIL_LOGO_ALT_TITLE_TEXT', '');
define ('EMAIL_LOGO_FILENAME', 'header.jpg');
define ('EMAIL_LOGO_WIDTH', '600');
define ('EMAIL_LOGO_HEIGHT', '70');


define ('EMAIL_EXTRA_HEADER_INFO', '');


define('OFFICE_FROM','<strong>Van:</strong>');
define('OFFICE_EMAIL','<strong>E-mailadres afzender:</strong>');

define('OFFICE_USE','<strong>Alleen t.b.v. intern gebruik:</strong>');
define('OFFICE_LOGIN_NAME','<strong>Gebruikersnaam:</strong>');
define('OFFICE_LOGIN_EMAIL','<strong>E-mailadres gebruiker:</strong>');
define('OFFICE_LOGIN_PHONE','<strong>Telefoon:</strong>');
define('OFFICE_LOGIN_FAX','<strong>Fax:</strong>');
define('OFFICE_IP_ADDRESS','<strong>IP adres:</strong>');
define('OFFICE_HOST_ADDRESS','<strong>Host adres:</strong>');
define('OFFICE_DATE_TIME','<strong>Datum en tijd:</strong>');


define('EMAIL_TEXT_TELEPHONE', 'Telefoon: ');


define('EMAIL_DISCLAIMER', '');
define('EMAIL_SPAM_DISCLAIMER', '-');

define('EMAIL_ORDER_MESSAGE',''); 
define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' <a href="' . zen_href_link(FILENAME_DEFAULT) . '" target="_blank">' . STORE_NAME . '</a>. Powered by <a href="http://www.zen-cart.com" target="_blank">Zen Cart</a>');
define('TEXT_UNSUBSCRIBE', "\n\nOm geen nieuwsbrieven en promotie mails te ontvangen in de toekomst kunt u op de volgende link klikken en u wordt van de lijst verwijdert: \n");


define('EMAIL_ADVISORY', '-----' . "\n" . '<strong>BELANGRIJK:</strong> Voor uw veiligheid en om misbruik te voorkomen worden alle e-mail\'s verstuurd via onze site gelogd en de inhoud ervan zal worden opgeslagen en voor ons leesbaar zijn. Indien u deze e-mail abusievelijk hebt ontvangen, brengt u ons dan op de hoogte door een e-mail te sturen aan ' . STORE_OWNER_EMAIL_ADDRESS . "\n\n");


define('EMAIL_ADVISORY_INCLUDED_WARNING', '<strong>Dit bericht zal worden toegevoegd aan alle e-mail verstuurd vanaf deze site:</strong>');



define('SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_SUBJECT', '[NEUES KUNDENKONTO]');

define('SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_SUBJECT', '[GUTSCHEIN]');
define('SEND_EXTRA_NEW_ORDERS_EMAILS_TO_SUBJECT', '[NEUE BESTELLUNG]');


define('EMAIL_TEXT_SUBJECT_LOWSTOCK', 'WARNUNG: Lagermindestbestand unterschritten');
define('SEND_EXTRA_LOW_STOCK_EMAIL_TITLE', 'Lagerbestandsbericht: ');