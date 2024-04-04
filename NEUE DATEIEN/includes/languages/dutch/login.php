<?php
/**
 * Zen Cart German Specific (158 code in 157)
 
 * @copyright Copyright 2003-2023 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * Translations by Zen4All (https://zen4all.nl)
 * https://github.com/Zen4All-nl/Dutch-Language-Pack-for-Zen-Cart
 
 * @version $Id: login.php 2024-04-04 19:05:14Z webchills $
 */

define('NAVBAR_TITLE', 'Inloggen');
define('HEADING_TITLE', 'Welkom, alstublieft inloggen');

define('HEADING_NEW_CUSTOMER', 'Nieuwe klant? Dan alstublieft eerst account aanmaken');
define('HEADING_NEW_CUSTOMER_SPLIT', 'Nieuwe klant');

define('TEXT_NEW_CUSTOMER_INTRODUCTION', 'Als nieuwe klant van <strong>' . STORE_NAME . '</strong> kunt u hier uw inlogaccount aanmaken. Het afleveradres kunt u altijd bij uw bestelling wijzigen. Uw persoonlijke gegevens worden veilig opgeslagen en alleen gebruikt volgens onze Privacy verklaring.');
define('TEXT_NEW_CUSTOMER_INTRODUCTION_SPLIT', 'Hebt u een PayPal account? Wilt u snel afrekenen met uw creditcard? Gebruik dan hieronder de PayPal knop om snel en gemakkelijk af te rekenen.');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_DIVIDER', '<span class="larger">of</span><br>');
define('TEXT_NEW_CUSTOMER_POST_INTRODUCTION_SPLIT', 'Maak nu een inlogaccount aan bij <strong>' . STORE_NAME . '</strong> waardoor u sneller kan bestellen, de status van uw bestellingen kan inzien, eerdere bestellingen kan weergeven en van al onze overige aanbiedingen kan genieten.');

define('HEADING_RETURNING_CUSTOMER', 'Bestaande klant: alstublieft inloggen');
define('HEADING_RETURNING_CUSTOMER_SPLIT', 'Bestaande klant');

define('TEXT_RETURNING_CUSTOMER_SPLIT', 'Om door te gaan alstublieft inloggen met uw <strong>' . STORE_NAME . '</strong> account.');



define('TEXT_LOGIN_ERROR', 'Fout: Het opgegeven e-mail adres en wachtwoord horen niet bij elkaar.');
define('TEXT_VISITORS_CART', '<strong>NB:</strong> De inhoud van uw &quot;gasten winkelwagen&quot; zal worden overgenomen in uw eigen &quot;leden winkelwagen&quot; zodra u inlogt. <a href="javascript:session_win();">[Meer info]</a>');

define('TABLE_HEADING_PRIVACY_CONDITIONS', '<span class="privacyconditions">Privacy verklaring</span>');
define('TEXT_PRIVACY_CONDITIONS_DESCRIPTION', '<span class="privacydescription">Ga alstublieft akkoor met onze privayverklaring door het selectievakje aan te klikken. Onze privacyverklaring kunt u </span> <a href="' . zen_href_link(FILENAME_PRIVACY, '', 'SSL') . '"><span class="pseudolink">hier lezen</span></a>.');
define('TEXT_PRIVACY_CONDITIONS_CONFIRM', '<span class="privacyagree">Ik heb de privayverklaring gelezen en ga met de inhoud ervan akkoord.</span>');

define('ERROR_SECURITY_ERROR', 'Er was een beveiligingsfout bij het aanmelden.');

define('TEXT_LOGIN_BANNED', 'Fout: Toegang geweigerd.');
define('HEADING_PAYPAL_CUSTOMER_SPLIT', 'Login und Bezahlen mit PayPal');
define('TEXT_PAYPAL_CUSTOMER_SPLIT', 'Express Checkout mit PayPal: Bei der Anmeldung mit PayPal �ber den PayPal Express Button werden Ihre bei PayPal hinterlegten Kontaktdaten f�r ein Kundenkonto in unserem Onlineshop genutzt. Sie m�ssen Ihre Daten nicht eintippen und wickeln die Zahlung �ber PayPal ab.');
