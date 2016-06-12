<?php

namespace cloud\core\components;
use CApplicationComponent;
use CException;
use cloud\Cloud;
use Exception;

/**
 * SimpleLDAP
 *
 * An abstraction layer for LDAP server communication using PHP
 *
 * @author Klaus Silveira <contact@klaussilveira.com>
 * @package simpleldap
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 * @version 0.1
 * @link http://github.com/klaussilveira/SimpleLDAP
 */
class Ldap extends CApplicationComponent {
	
	/**
	 * Holds the LDAP server connection
	 *
	 * @var resource
	 * @access private
	 */
	private $ldap;
	
	/**
	 * Holds the default Distinguished Name. Ex.: ou=users,dc=demo,dc=com
	 *
	 * @var string
	 * @access public
	 */
	public $dn;
	
	/**
	 * Holds the administrator-priviledge Distinguished Name and user. Ex.: cn=admin,dc=demo,dc=com
	 *
	 * @var string
	 * @access public
	 */
	public $adn;
	
	/**
	 * Holds the administrator-priviledge user password. Ex.: 123456
	 *
	 * @var string
	 * @access public
	 */
	public $apass;


	/**
	 * @var string $hostname
	 */
	public $hostname;

	/**
	 * @var int $port
	 */
	public $port;

	/**
	 * @var int|null $protocol
	 */
	public $protocol = null;


	/**
	 *
	 */
	public function init()
	{
		if(!function_exists('ldap_connect')){
			throw new CException( Cloud::lang( 'Not support', 'error' ) . ':Ldap' );
		}
		$this->ldap = ldap_connect($this->hostname, $this->port);

		if($this->protocol != null) {
			ldap_set_option($this->ldap, LDAP_OPT_PROTOCOL_VERSION, $this->protocol);
		}
		parent::init();
	}
	
	/**
	 * Bind as an administrator in the LDAP server
	 *
	 * Bind as an administrator in order to execute admin-only tasks,
	 * such as add, modify and delete users from the directory.
	 *
	 * @access private
	 * @return bool Returns if the bind was successful or not
	 */
	private function adminBind() {
		$bind = ldap_bind($this->ldap, $this->adn, $this->apass);
		return $bind;
	}

	/**
	 * Authenticate an user and return it's information
	 *
	 * In this method we authenticate an user in the LDAP server with the specified username and password
	 * If successful, we return the user information. Otherwise, we'll return false and throw exceptions with error information
	 *
	 * @access public
	 * @param string $user Username to be authenticated
	 * @param string $password Password to be authenticated
	 * @return mixed User information, as an array, on successful authentication, false on error
	 * @throws Exception
	 */
	public function auth($user, $password) {
		/**
		 * We bind using the provided information in order to check if the user exists
		 * in the directory and his credentials are valid
		 */
		$bind = @ldap_bind($this->ldap, "uid=$user," . $this->dn, $password);
		
		if($bind) {
		
			/**
			 * If the user is logged in, we bind as an administrator and search the directory
			 * for the user information. If successful, we'll return that information as an array
			 */
			if($this->adminBind()) {
				$search = ldap_search($this->ldap, "uid=$user," . $this->dn, "(uid=$user)");
				
				if(!$search) {
					$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
					throw new Exception($error);
				}
				
				$data = ldap_get_entries($this->ldap, $search);
				
				if(!$data) {
					$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
					throw new Exception($error);
				}
				
				return $data;
			} else {
				$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
				throw new Exception($error);
			}
		} else {
			$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
			throw new Exception($error);
		}
	}

	/**
	 * Get users based on a query
	 *
	 * Returns information from users within the directory that match a certain query
	 *
	 * @access public
	 * @param string $filter The search filter used to query the directory. For more info, see: http://www.mozilla.org/directory/csdk-docs/filter.htm
	 * @param array $attributes (optional) An array containing all the attributes you want to request
	 * @return mixed Returns the information if successful or false on error
	 * @throws Exception
	 */
	public function getUsers($filter, $attributes = null) {
		if($this->adminBind()) {
			if($attributes !== null) {
				$search = ldap_search($this->ldap, $this->dn, $filter, $attributes);
				if(!$search) {
					$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
					throw new Exception($error);
				}
				$data = ldap_get_entries($this->ldap, $search);
				return $data;
			} else {
				$search = ldap_search($this->ldap, $this->dn, $filter);
				if(!$search) {
					$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
					throw new Exception($error);
				}
				$data = ldap_get_entries($this->ldap, $search);
				return $data;
			}
		} else {
			$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
			throw new Exception($error);
		}
	}

	/**
	 * Inserts a new user in LDAP
	 *
	 * This method will take an array of information and create a new entry in the
	 * LDAP directory using that information.
	 *
	 * @access public
	 * @param $user
	 * @param array $data Array of user information to be inserted
	 * @return bool Returns true on success and false on error
	 * @throws Exception
	 * @internal param string $uid Username that will be created
	 */
	public function addUser($user, $data) {
		if($this->adminBind()) {
			$add = ldap_add($this->ldap, "uid=$user," . $this->dn, $data);
			if(!$add) {
				$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
				throw new Exception($error);
			} else {
				return true;
			}
		} else {
			$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
			throw new Exception($error);
		}
	}

	/**
	 * Removes an existing user in LDAP
	 *
	 * This method will remove an existing user from the LDAP directory
	 *
	 * @access public
	 * @param $user
	 * @return bool Returns true on success and false on error
	 * @throws Exception
	 * @internal param string $uid Username that will be removed
	 */
	public function removeUser($user) {
		if($this->adminBind()) {
			$delete = ldap_delete($this->ldap, "uid=$user," . $this->dn);
			if(!$delete) {
				$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
				throw new Exception($error);
			} else {
				return true;
			}
		} else {
			$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
			throw new Exception($error);
		}
	}

	/**
	 * Modifies an existing user in LDAP
	 *
	 * This method will take an array of information and modify an existing entry
	 * in the LDAP directory using that information.
	 *
	 * @access public
	 * @param $user
	 * @param array $data Array of user information to be modified
	 * @return bool Returns true on success and false on error
	 * @throws Exception
	 * @internal param string $uid Username that will be modified
	 */
	public function modifyUser($user, $data) {
		if($this->adminBind()) {
			$modify = ldap_modify($this->ldap, "uid=$user," . $this->dn, $data);
			if(!$modify) {
				$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
				throw new Exception($error);
			} else {
				return true;
			}
		} else {
			$error = ldap_errno($this->ldap) . ": " . ldap_error($this->ldap);
			throw new Exception($error);
		}
	}
	
	/**
	 * Close the LDAP connection
	 *
	 * @access public
	 */
	public function close() {
		ldap_close($this->ldap);
	}
}
