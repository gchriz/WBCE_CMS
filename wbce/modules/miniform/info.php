<?php
/**
 *
 * @category        modules
 * @package         miniform
 * @author          Ruud Eisinga / Dev4me
 * @link			http://www.dev4me.nl/modules-snippets/opensource/miniform/
 * @license         http://www.gnu.org/licenses/gpl.html
 * @platform        WebsiteBaker 2.8.x
 * @requirements    PHP 5.6 and higher
 * @version         0.15.0
 * @lastmodified    April 30, 2019
 *
 *
 * v0.15 - fixed bug when quotes are used in values
 *       - fixed compatibility issue with WBCE 1.4
 * v0.14 - fixed ajax file-upload issue IOS
 * v0.13 - fixed ajax caching problem for IOS
 * 	       added referer for email-template. use {REFERER}
 * v0.12 - added sender_email, session-data storing, removed autoTLS disable
 * v0.11 - added ajax handling
 *
 */


$module_directory = 'miniform';
$module_name = 'MiniForm';
$module_function = 'page';
$module_version = '0.15.0';
$module_platform = '2.8.x';
$module_author = 'Ruud / Dev4me';
$module_license = 'GNU General Public License';
$module_description = 'This module allows you to create a quick and simple form without complicated settings.';

?>