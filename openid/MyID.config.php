<?php
// IF YOU HAVE NOT DONE SO, PLEASE READ THE README FILE FOR DIRECTIONS!!!

/**
 * phpMyID - A standalone, single user, OpenID Identity Provider
 *
 * @package phpMyID
 * @author CJ Niemira <siege (at) siege (dot) org>
 * @copyright 2006-2008
 * @license http://www.gnu.org/licenses/gpl.html GNU Public License
 * @url http://siege.org/projects/phpMyID
 * @version 2
 */


/**
 * User profile
 * @name $profile
 * @global array $GLOBALS['profile']
 */
$GLOBALS['profile'] = array(
	# Basic Config - Required
	'auth_username'	=> 	'bradley@bpeters.id.au',
	'auth_password' =>	'c0a8148e00554b2d03cf141ab3d7dac3',

	# Optional Config - Please see README before setting these
	'microid'	=>	array('mailto:bradley@bpeters.id.au', 'http://bpeters.id.au'),
#	'pavatar'	=>	'http://your.site.com/path/pavatar.img',

	# Advanced Config - Please see README before setting these
#	'allow_gmp'	=>	false,
#	'allow_test'	=> 	false,
#	'allow_suhosin'	=>	false,
#	'auth_realm'	=>	'phpMyID',
#	'force_bigmath'	=>	false,
#	'idp_url'	=>	'http://your.site.com/path/MyID.config.php',
#	'lifetime'	=>	1440,
	'paranoid'	=>	true,

	# Debug Config - Please see README before setting these
#	'debug'		=>	false,
#	'logfile'	=>	'/tmp/phpMyID.debug.log',
);

/**
 * Simple Registration Extension
 * @name $sreg
 * @global array $GLOBALS['sreg']
 */
$GLOBALS['sreg'] = array (
#	'nickname'		=> 'Brad',
	'email'			=> 'bradley@bpeters.id.au',
	'fullname'		=> 'Brad Peters',
#	'dob'			=> '1970-10-31',
	'gender'		=> 'M',
#	'postcode'		=> '22000',
	'country'		=> 'AU',
	'language'		=> 'en',
	'timezone'		=> 'Australia/Victoria'
);

require('MyID.php');
?>