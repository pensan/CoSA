<?php
namespace TYPO3\CoSA\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.CoSA".                 *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Room
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Room_Original {

	/**
	 * The name
	 * @var string
	 */
	protected $name;
	
	/**
	 * The type
	 * @var string
	 */
	protected $type;

	/**
	 * The Route
	 * @ORM\ManyToOne(inversedBy="room")
	 * @var TYPO3\CoSA\Domain\Model\Question
	 */
	protected $question;
	
	/**
	 * Get the Question
	 *
	 * @return TYPO3\CoSA\Domain\Model\Question The Question
	 */
	public function getQuestion() {
		return $this->question;
	}

	/**
	 * Sets this Question
	 *
	 * @param TYPO3\CoSA\Domain\Model\Route $question The Question
	 * @return void
	 */
	public function setQuestion($question) {
		$this->question = $question;
	}

	/**
	 * Get the Room's type
	 *
	 * @return string The Room's type
	 */
	public function getType() {
		return $this->type;
	}

	/**
	 * Sets this Room's type
	 *
	 * @param string $type The Room's type
	 * @return void
	 */
	public function setType($type) {
		$this->type = $type;
	}
	
	/**
	 * Get the Room's name
	 *
	 * @return string The Room's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Room's name
	 *
	 * @param string $type The Room's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}
}

#0             %CLASS%TYPO3_CoSA_Domain_Model_Room1682      