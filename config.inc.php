<?php
// configuration file for dialogs/pwdchange.php

class Configuration
{
	// define, if this zarafa-installation uses ldap
	private $use_ldap = TRUE;

	// basedn, to search for users dn
	private $basedn = "dc=example,dc=com";

	// ldap server uri
	// examples: "ldapi:///" or "localhost" or "127.0.0.1"
	private $uri = "localhost";

	function get_basedn () {
		return $this->basedn;
	}

	function get_uri () {
		return $this->uri;
	}

	function get_method () {
		return $this->use_ldap;
	}

}
?>

