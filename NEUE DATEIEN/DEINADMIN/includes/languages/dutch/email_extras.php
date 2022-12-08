<?php
/**
* Zen Cart German Specific
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: email_extras.php 2021-12-01 10:05:14Z webchills $
 */

define ('EMAIL_LOGO_FILENAME', 'header.jpg');  //diese Datei muss im Ordner email liegen
define ('EMAIL_LOGO_WIDTH', '600');
define ('EMAIL_LOGO_HEIGHT', '70');
define ('EMAIL_LOGO_ALT_TITLE_TEXT', '');

  // -----
  // If you want to include some extra information in each email's header information (like perhaps the store address and/or phone number),
  // set this value to contain the full HTML content to be copied, e.g. '<div id="extra-stuff">Extra stuff for header</div>'.
  //
  define ('EMAIL_EXTRA_HEADER_INFO', '');

  // Define a message you'd like to add to an order update email
  define('EMAIL_ORDER_UPDATE_MESSAGE',''); 

// office use only
  define('OFFICE_FROM','Van:');
  define('OFFICE_EMAIL','E-mailadres afzender:');

  define('OFFICE_USE','Alleen eigen gebruik:');
  define('OFFICE_LOGIN_NAME','Gebruikersnaam:');
  define('OFFICE_LOGIN_EMAIL','Aanmelden e-mail:');
  define('OFFICE_LOGIN_PHONE','Telefoon:');
  define('OFFICE_IP_ADDRESS','IP adres:');
  define('OFFICE_HOST_ADDRESS','Hostadres:');
  define('OFFICE_DATE_TIME','Datum en tijd:');

// e-mail disclaimer
define('EMAIL_DISCLAIMER','');
define('EMAIL_SPAM_DISCLAIMER', '-');
define('EMAIL_FOOTER_COPYRIGHT','Copyright (c) ' . date('Y') . ' '  . STORE_NAME . '');
define('SEND_EXTRA_GV_ADMIN_EMAILS_TO_SUBJECT','[GUTSCHEIN ADMIN GESENDET]');
define('SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_SUBJECT','[AKTIONSKUPON]');
define('SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_SUBJECT','[BESTELLSTATUS]');
  define('TEXT_UNSUBSCRIBE', "\n\nOm u af te melden voor toekomstige nieuwsbrieven en andere promotionele activiteiten kunt u gebruik maken van de volgende link: \n");

// for whos_online when gethost is off
  define('OFFICE_IP_TO_HOST_ADDRESS', 'Uitgeschakeld');

define('TEXT_EMAIL_SUBJECT_ADMIN_USER_ADDED', 'Admin Alarm: Ein neue Admin Benutzer wurde hinzugefügt.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_ADDED', 'Administrativer Alarm: Der Admin Benutzer (%s) wurde Ihrem Shop hinzugefügt von %s.' . "\n\n" . 'Wenn Sie oder ein autorisierter Administrator diese Änderung nicht veranlasst haben, dann ist es empfehlenswert die Sicherheit Ihres Shop sofort zu überprüfen.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_DELETED', 'Admin Alarm: Ein Admin Benutzer wurde gelöscht.');
define('TEXT_EMAIL_MESSAGE_ADMIN_USER_DELETED', 'Administrativer Alarm: Der Admin Benutzer (%s) wurde aus Ihrem Shop gelöscht von %s.' . "\n\n" . 'Wenn Sie oder ein autorisierter Administrator diese Änderung nicht veranlasst haben, dann ist es empfehlenswert die Sicherheit Ihres Shop sofort zu überprüfen.');
define('TEXT_EMAIL_SUBJECT_ADMIN_USER_CHANGED', 'Admin Alarm: Ein Admin Benutzer wurde verändert.');
define('TEXT_EMAIL_ALERT_ADM_EMAIL_CHANGED', 'Admin Alarm: Die E-Mail Adresse von Admin Benutzer (%s) wurde geändert von (%s) zu (%s) von (%s)');
define('TEXT_EMAIL_ALERT_ADM_NAME_CHANGED', 'Admin Alarm: Der Benutzername von Admin Benutzer (%s) wur geändert von (%s) zu (%s) von (%s)');
define('TEXT_EMAIL_ALERT_ADM_PROFILE_CHANGED', 'Admin Alarm: Das Berechtigungsprofil von Admin Benutzer (%s) wurde geändert von (%s) zu (%s) von (%s)');