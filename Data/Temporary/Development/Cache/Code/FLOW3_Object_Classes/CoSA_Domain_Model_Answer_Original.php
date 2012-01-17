<?php
namespace CoSA\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "CoSA".                       *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;
use Doctrine\ORM\Mapping as ORM;
use CoSA\Domain\Model\Question as Question;

/**
 * A Answer
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Answer_Original {

	/**
	 * The text
	 * @var string
	 */
	protected $text;
	
	/**
	 * The points
	 * @var string
	 */
	protected $points;

	/**
	 * Get the Answer's text
	 *
	 * @return string The Answer's text
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Sets this Answer's text
	 *
	 * @param string $text The Answer's text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}
	
	/**
	 * Get the Answer's points
	 *
	 * @return string The Answer's points
	 */
	public function getPoints() {
		return $this->points;
	}

	/**
	 * Sets this Answer's points
	 *
	 * @param string $points The Answer's points
	 * @return void
	 */
	public function setPoints($points) {
		$this->points = $points;
	}
}

#0             %CLASS%CoSA_Domain_Model_Answer1287      