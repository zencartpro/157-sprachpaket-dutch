<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * Translations by Zen4All (https://zen4all.nl)
 * https://github.com/Zen4All-nl/Dutch-Language-Pack-for-Zen-Cart 
 * @version $Id: password_forgotten.php 2018-04-01 10:05:14Z webchills $
 */

define('NAVBAR_TITLE_1', 'Inloggen');
define('NAVBAR_TITLE_2', 'Wachtwoord vergeten');

define('HEADING_TITLE', 'Wachtwoord vergeten');

define('TEXT_MAIN', 'Type hieronder uw e-mailadres dan sturen wij u een mailtje met het nieuwe wachtwoord.');

define('EMAIL_PASSWORD_REMINDER_SUBJECT', STORE_NAME . ' - nieuw wachtwoord');
define('EMAIL_PASSWORD_REMINDER_BODY', 'Er is een nieuw wachtwoord aangevraagd vanaf ' . $_SERVER['REMOTE_ADDR']  . '.' . "\n\n" . 'Uw nieuwe wachtwoord voor \'' . STORE_NAME . '\' is:' . "\n\n" . '   %s' . "\n\nNadat u bent ingelogd met dit nieuwe wachtwoord, kan u dit wijzigen vanuit de 'Mijn account' pagina.");

define('SUCCESS_PASSWORD_SENT', 'Bedankt. Als het e-mailadres in ons systeem voorkomt, dan sturen we naar dat e-mailadres instructies voor het herstellen van uw wachtwoord.');
