<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - Finnish
* 
* Author: Jarno Fabritius
* 		  jarno.fabritius@meisso.com
*         @meisso_jarno
* 
* Location: http://github.com/benedmunds/ion_auth/
*          
* Created:  01.03.2011 
* 
* Description:  Finnish language file for Ion Auth messages and errors
* 
*/

// Account Creation
$lang['account_creation_successful'] 	  	 = 'Tili luotiin onnistuneesti!';
$lang['account_creation_unsuccessful'] 	 	 = 'Tilin luonti epäonnistui';
$lang['account_creation_duplicate_email'] 	 = 'Sähköpostiosoite on virheellinen tai se on jo käytössä';
$lang['account_creation_duplicate_username'] 	 = 'Tunnus on virheellinen tai se on jo käytössä';


// Password
$lang['password_change_successful'] 	 	 = 'Salasana vaihdettu!';
$lang['password_change_unsuccessful'] 	  	 = 'Salasanan vaihto epäonnistui';
$lang['forgot_password_successful'] 	 	 = 'Salasanan resetointiohjeet lähetettiin sähköpostiin';
$lang['forgot_password_unsuccessful'] 	 	 = 'Salasanan resetointi epäonnistui';

// Activation
$lang['activate_successful'] 		  	 = 'Tili aktivoitu!';
$lang['activate_unsuccessful'] 		 	 = 'Tilin aktivointi epäonnistui';
$lang['deactivate_successful'] 		  	 = 'Tili suljettu';
$lang['deactivate_unsuccessful'] 	  	 = 'Tilin sulkeminen epäonnistui';
$lang['activation_email_successful'] 	  	 = 'Aktivointiviesti lähetetty';
$lang['activation_email_unsuccessful']   	 = 'Aktivointiviestiä ei voitu lähettää';

// Login / Logout
$lang['login_successful'] 		  	 = 'Olet nyt kirjautunut sisään!';
$lang['login_unsuccessful'] 		  	 = 'Kirjautuminen epäonnistui';
$lang['logout_successful'] 		 	 = 'Olet nyt kirjautunut ulos';
  
// Account Changes
$lang['update_successful'] 		 	 = 'Tilin tiedot päivitetty!';
$lang['update_unsuccessful'] 		 	 = 'Tietojen päivitys epäonnistui';
$lang['delete_successful'] 		 	 = 'Tili poistettu';
$lang['delete_unsuccessful'] 		 	 = 'Tilin poisto epäonnistui';

// Email Subjects - TODO Please Translate
$lang['email_forgotten_password_subject']    = 'Forgotten Password Verification';
$lang['email_new_password_subject']          = 'New Password';
$lang['email_activation_subject']            = 'Account Activation';