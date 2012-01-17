<?php
namespace CoSA\Domain\Service;

/*                                                                        *
 * This script belongs to the FLOW3 package "CoSA".                       *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * A AdventureSession
 *
 * @FLOW3\Scope("session")
 */
class AdventureSession_Original {

	/**
	 * The name of player
	 * @var string
	 */
	protected $name;
	
	/**
	 * The name of player
	 * @var array
	 */
	protected $interests;

	/**
	 * Get the Player's name
	 *
	 * @return string The Player's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Player's name
	 *
	 * @param string $name The Player's name
	 * @return void
	 * @FLOW3\Session(autoStart=true)
	 */
	public function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * Get the Player's interests
	 *
	 * @return array The Player's interests
	 */
	public function getInterests() {
		return $this->interests;
	}

	/**
	 * Sets this Player's interests
	 *
	 * @param array $interests The Player's interests
	 * @return void
	 * @FLOW3\Session(autoStart=true)
	 */
	public function setInterests($interests) {
		$this->interests = $interests;
	}
	
	public function printSession(){
		\TYPO3\FLOW3\var_dump($this);
	}
}

#0             %CLASS%CoSA_Domain_Service_AdventureSession1404      