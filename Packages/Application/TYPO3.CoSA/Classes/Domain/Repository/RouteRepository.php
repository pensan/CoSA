<?php
namespace TYPO3\CoSA\Domain\Repository;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.CoSA".                 *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;
use \TYPO3\CoSA\Domain\Model\Room as Room;
use \TYPO3\CoSA\Domain\Model\Answer as Answer;

/**
 * A repository for Routes
 *
 * @FLOW3\Scope("singleton")
 */
class RouteRepository extends \TYPO3\FLOW3\Persistence\Repository {

	// add customized methods here

	
	/**
	 * Find all matching routes
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Room $room Current room
	 * @param \TYPO3\CoSA\Domain\Model\Answer $answer Current answer
	 * @return \TYPO3\FLOW3\Persistence\QueryResultProxy The new room
	 */
	public function findOneByRoomAndAnswer(\TYPO3\CoSA\Domain\Model\Room $room, \TYPO3\CoSA\Domain\Model\Answer $answer) {
		\TYPO3\FLOW3\var_dump($answer);
		
	        $query = $this->createQuery();
	        return $query->matching(
					$query->equals('roomsource', $room),
					$query->equals('answer', $answer)
					)
	                ->execute()
	                ->getFirst();
	}
}
?>