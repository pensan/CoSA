<?php
namespace TYPO3\CoSA\Domain\Model;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.CoSA".                 *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;
use Doctrine\ORM\Mapping as ORM;

/**
 * A Route
 *
 * @FLOW3\Scope("prototype")
 * @FLOW3\Entity
 */
class Route {
	
	/**
	 * The name
	 * @var string
	 */
	protected $name;
	
	/**
     * The answer
     * @ORM\ManyToOne(inversedBy="route")
     * @var TYPO3\CoSA\Domain\Model\Answer
	 */
	protected $answer;
	
	/**
     * The room source
     * @ORM\ManyToOne
     * @var TYPO3\CoSA\Domain\Model\Room
	 */
	protected $roomSource;
	
	/**
     * The room destination
     * @ORM\ManyToOne
     * @var TYPO3\CoSA\Domain\Model\Room
	 */
	protected $roomDestination;

	
	/**
	 * Get the Route's name
	 *
	 * @return string The Route's name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets this Route's name
	 *
	 * @param string $type The Route's name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
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
	 * Get the RoomSource
	 *
	 * @return TYPO3\CoSA\Domain\Model\Room The Room source
	 */
	public function getRoomSource() {
		return $this->roomSource;
	}

	/**
	 * Sets this Room
	 *
	 * @param TYPO3\CoSA\Domain\Model\Room $room The Room
	 * @return void
	 */
	public function setRoomSource($roomSource) {
		$this->roomSource = $roomSource;
	}
	
	/**
	 * Get the RoomDestination
	 *
	 * @return TYPO3\CoSA\Domain\Model\Room The RoomDestination
	 */
	public function getRoomDestination() {
		return $this->roomDestination;
	}

	/**
	 * Sets this RoomDestination
	 *
	 * @param TYPO3\CoSA\Domain\Model\Room $roomDestination The Room
	 * @return void
	 */
	public function setRoomDestination($roomDestination) {
		$this->roomDestination = $roomDestination;
	}
}
?>