<?php
namespace TYPO3\CoSA\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.CoSA".                 *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Question
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Question {

	/**
	 * The text
	 * @var string
	 */
	protected $text;

	/**
	 * The Route
	 * @ORM\OneToMany(mappedBy="question")
	 * @var TYPO3\CoSA\Domain\Model\Room
	 */
	protected $room;
	
	/**
	 * The Answer
	 * @ORM\OneToMany(mappedBy="question")
	 * @var TYPO3\CoSA\Domain\Model\Answer
	 */
	protected $answer;
	
	/**
	 * Get the Room
	 *
	 * @return TYPO3\CoSA\Domain\Model\Room The Room
	 */
	public function getRoom() {
		return $this->room;
	}

	/**
	 * Sets this Room
	 *
	 * @param TYPO3\CoSA\Domain\Model\Room $room The Room
	 * @return void
	 */
	public function setRoom($room) {
		$this->room = $room;
	}
	
	/**
	 * Get the Answer
	 *
	 * @return TYPO3\CoSA\Domain\Model\Answer The Answer
	 */
	public function getAnswer() {
		return $this->answer;
	}

	/**
	 * Sets this Answer
	 *
	 * @param TYPO3\CoSA\Domain\Model\Answer $answer The Answer
	 * @return void
	 */
	public function setAnswer($answer) {
		$this->answer = $answer;
	}
	
	/**
	 * Get the Question's text
	 *
	 * @return string The Question's text
	 */
	public function getText() {
		return $this->text;
	}

	/**
	 * Sets this Question's text
	 *
	 * @param string $text The Question's text
	 * @return void
	 */
	public function setText($text) {
		$this->text = $text;
	}

}
?>