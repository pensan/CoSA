<?php
namespace TYPO3\FLOW3\Security\Authentication\Provider;

/*                                                                        *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * An authentication provider that authenticates SSO requests from typo3.org
 *
 */
class Typo3OrgSsoProvider_Original implements \TYPO3\FLOW3\Security\Authentication\AuthenticationProviderInterface {

	/**
	 * @var \TYPO3\FLOW3\Security\AccountRepository
	 * @FLOW3\Inject
	 */
	protected $accountRepository;

	/**
	 * @var \TYPO3\FLOW3\Security\Cryptography\RsaWalletServiceInterface
	 * @FLOW3\Inject
	 */
	protected $rsaWalletService;

	/**
	 * @var string
	 */
	protected $name;

	/**
	 * @var array
	 */
	protected $options = array();

	/**
	 * Constructor
	 *
	 * @param string $name The name of this authentication provider
	 * @param array $options Additional configuration options
	 * @return void
	 */
	public function __construct($name, array $options) {
		$this->name = $name;
		$this->options = $options;
	}

	/**
	 * Returns TRUE if the given token can be authenticated by this provider
	 *
	 * @param \TYPO3\FLOW3\Security\Authentication\TokenInterface $authenticationToken The token that should be authenticated
	 * @return boolean TRUE if the given token class can be authenticated by this provider
	 */
	public function canAuthenticate(\TYPO3\FLOW3\Security\Authentication\TokenInterface $authenticationToken) {
		if ($authenticationToken->getAuthenticationProviderName() === $this->name) return TRUE;
		return FALSE;
	}

	/**
	 * Returns the classnames of the tokens this provider is responsible for.
	 *
	 * @return string The classname of the token this provider is responsible for
	 */
	public function getTokenClassNames() {
		return array('TYPO3\FLOW3\Security\Authentication\Token\Typo3OrgSsoToken');
	}

	/**
	 * Sets isAuthenticated to TRUE for all tokens.
	 *
	 * @param \TYPO3\FLOW3\Security\Authentication\TokenInterface $authenticationToken The token to be authenticated
	 * @return void
	 */
	public function authenticate(\TYPO3\FLOW3\Security\Authentication\TokenInterface $authenticationToken) {
		if (!($authenticationToken instanceof \TYPO3\FLOW3\Security\Authentication\Token\Typo3OrgSsoToken)) {
			throw new \TYPO3\FLOW3\Security\Exception\UnsupportedAuthenticationTokenException('This provider cannot authenticate the given token.', 1217339840);
		}

		$account = NULL;
		$credentials = $authenticationToken->getCredentials();

		if (is_array($credentials) && isset($credentials['username'])) {
			$account = $this->accountRepository->findActiveByAccountIdentifierAndAuthenticationProviderName($credentials['username'], $this->name);
		}

		if (is_object($account)) {
			$authenticationData = 'version=' . $credentials['version'] .
									'&user=' . $credentials['username'] .
									'&tpa_id=' . $credentials['tpaId'] .
									'&expires=' . $credentials['expires'] .
									'&action=' . $credentials['action'] .
									'&flags=' . $credentials['flags'] .
									'&userdata=' . $credentials['userdata'];

			if ($this->rsaWalletService->verifySignature($authenticationData, $credentials['signature'], $this->options['rsaKeyUuid'])
				&& $credentials['expires'] > time()) {

				$authenticationToken->setAuthenticationStatus(\TYPO3\FLOW3\Security\Authentication\TokenInterface::AUTHENTICATION_SUCCESSFUL);
				$authenticationToken->setAccount($account);
			} else {
				$authenticationToken->setAuthenticationStatus(\TYPO3\FLOW3\Security\Authentication\TokenInterface::WRONG_CREDENTIALS);
			}
		} elseif ($authenticationToken->getAuthenticationStatus() !== \TYPO3\FLOW3\Security\Authentication\TokenInterface::AUTHENTICATION_SUCCESSFUL) {
			$authenticationToken->setAuthenticationStatus(\TYPO3\FLOW3\Security\Authentication\TokenInterface::NO_CREDENTIALS_GIVEN);
		}
	}
}


#0             %CLASS%TYPO3_FLOW3_Security_Authentication_Provider_Typo3OrgSsoProvider4422      