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
 * A Room
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Room {

	/**
	 * The name
	 * @var string
	 */
	protected $name;
	
	/**
	 * The question
	 * @ORM\OneToOne(mappedBy="question")
	 * @var CoSA\Domain\Model\Question
	 */
	protected $question;

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
	 * @param string $name The Room's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}
	
	/**
	 * Get the Room's question
	 *
	 * @return CoSA\Domain\Model\Question The Room's question
	 */
	public function getQuestion() {
		return $this->question;
	}
	
	/**
	 * Sets this Room's question
	 *
	 * @param CoSA\Domain\Model\Question $name The Room's question
	 * @return void
	 */
	public function setQuestion($question) {
		$this->question = $question;
	}
}
?>