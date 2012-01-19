<?php
namespace TYPO3\CoSA\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.CoSA".                 *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Answer
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Answer {

	/**
	 * The name
	 * @var string
	 */
	protected $text;
	
	/**
	 * The Route
	 * @ORM\OneToMany(mappedBy="answer")
	 * @var TYPO3\CoSA\Domain\Model\Route
	 */
	protected $route;
	
	/**
	 * The Question
	 * @ORM\ManyToOne(inversedBy="answer")
	 * @var TYPO3\CoSA\Domain\Model\Question
	 */
	protected $question;
	
	/**
	 * Get the Route
	 *
	 * @return TYPO3\CoSA\Domain\Model\Route The Route
	 */
	public function getRoute() {
		return $this->route;
	}

	/**
	 * Sets this Route
	 *
	 * @param TYPO3\CoSA\Domain\Model\Route $route The Route
	 * @return void
	 */
	public function setRoute($route) {
		$this->route = $route;
	}

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
	 * @param TYPO3\CoSA\Domain\Model\Question $question The Question
	 * @return void
	 */
	public function setQuestion($question) {
		$this->question = $question;
	}

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

}
?>