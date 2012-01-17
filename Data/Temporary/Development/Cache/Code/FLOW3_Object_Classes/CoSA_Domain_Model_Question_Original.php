<?php
namespace CoSA\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "CoSA".                       *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;
use Doctrine\ORM\Mapping as ORM;
use CoSA\Domain\Model\Answer as Answer;

/**
 * A Question
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Question_Original {

	/**
	 * The text
	 * @var string
	 */
	protected $text;
	
	/**
	 * The answer1
	 * @ORM\OneToOne(mappedBy="answer1")
	 * @var CoSA\Domain\Model\Answer
	 */
	protected $answer1;
	
	/**
	 * The answer2
	 * @ORM\OneToOne(mappedBy="answer2")
	 * @var CoSA\Domain\Model\Answer
	 */
	protected $answer2;

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
	
	/**
	 * Get the Answer
	 *
	 * @return CoSA\Domain\Model\Answer The Answer
	 */
	public function getAnswer1() {
		return $this->answer1;
	}

	/**
	 * Sets this Answer
	 *
	 * @param CoSA\Domain\Model\Answer $text The Answer
	 * @return void
	 */
	public function setAnswer1($answer1) {
		$this->answer1 = $answer1;
	}
	
	/**
	 * Get the Answer
	 *
	 * @return CoSA\Domain\Model\Answer The Answer
	 */
	public function getAnswer2() {
		return $this->answer2;
	}

	/**
	 * Sets this Answer
	 *
	 * @param CoSA\Domain\Model\Answer $text The Answer
	 * @return void
	 */
	public function setAnswer2($answer2) {
		$this->answer2 = $answer2;
	}
}

#0             %CLASS%CoSA_Domain_Model_Question1799      