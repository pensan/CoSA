<?php
namespace CoSA\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "CoSA".                       *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * A Player
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Player {

	/**
	 * The name
	 * @var string
	 */
	protected $name;


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
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>