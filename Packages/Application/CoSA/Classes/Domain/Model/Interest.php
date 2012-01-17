<?php
namespace CoSA\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "CoSA".                       *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

/**
 * A Interesst
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Interest {

	/**
	 * The name
	 * @var string
	 */
	protected $name;


	/**
	 * Get the Interest's name
	 *
	 * @return string The Interest's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Interest's name
	 *
	 * @param string $name The Interest's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

}
?>