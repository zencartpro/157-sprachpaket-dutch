<?php
/**
 * Zen Cart German Specific
 * Constants used by the zen_update_orders_history function.
 *
 
 * @copyright Copyright 2003-2022 Zen Cart Development Team
 * Zen Cart German Version - www.zen-cart-pro.at
 * @copyright Portions Copyright 2003 osCommerce
 * @license https://www.zen-cart-pro.at/license/3_0.txt GNU General Public License V3.0
 * @version $Id: orders_status_updates_admin.php 2022-02-04 18:58:14Z webchills $
 */
define('OSH_EMAIL_SEPARATOR', '------------------------------------------------------');
define('OSH_EMAIL_TEXT_SUBJECT', 'Order Update');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_MALE', 'Geachte heer ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_GENDER_FEMALE', 'Geachte mevrouw ');
define('OSH_EMAIL_TEXT_ORDER_CUSTOMER_NEUTRAL', 'Goedendag ');
define('OSH_EMAIL_TEXT_UPDATEINFO', 'Wij informeren u over de status van uw bestelling met ');
define('OSH_EMAIL_TEXT_ORDER_NUMBER', 'Ordernummer:');
define('OSH_EMAIL_TEXT_INVOICE_URL', 'Gedetaileerde factuur:');
define('OSH_EMAIL_TEXT_DATE_ORDERED', 'Besteldatum:');
define('OSH_EMAIL_TEXT_COMMENTS_UPDATE', '<em>De opmerkingen bij deze bestelling zijn: </em>');
define('OSH_EMAIL_TEXT_STATUS_UPDATED', 'De status van uw bestelling is aangepast:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_NO_CHANGE', 'De status van uw bestelling in onveranderd:' . "\n");
define('OSH_EMAIL_TEXT_STATUS_LABEL', '<strong>Huidige status: </strong> %s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_CHANGE', '<strong>Oude status:</strong> %1$s, <strong>Nieuwe status:</strong> %2$s' . "\n\n");
define('OSH_EMAIL_TEXT_STATUS_PLEASE_REPLY', 'Heeft u vragen? Stuur een antwoord op deze mail.' . "\n");
