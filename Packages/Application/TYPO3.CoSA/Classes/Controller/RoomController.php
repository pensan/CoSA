<?php
namespace TYPO3\CoSA\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.CoSA".                 *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \TYPO3\CoSA\Domain\Model\Room;

/**
 * Room controller for the TYPO3.CoSA package 
 *
 * @FLOW3\Scope("singleton")
 */
class RoomController extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \TYPO3\CoSA\Domain\Repository\RoomRepository
	 */
	protected $roomRepository;
	
	/**
	 * @FLOW3\Inject
	 * @var \TYPO3\CoSA\Domain\Repository\QuestionRepository
	 */
	protected $questionRepository;
	
	/**
	 * @FLOW3\Inject
	 * @var \TYPO3\CoSA\Domain\Repository\RouteRepository
	 */
	protected $routeRepository;

	/**
	 * Shows a list of rooms
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('rooms', $this->roomRepository->findAll());
	}

	/**
	 * Shows a single room object
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Room $room The room to show
	 * @return void
	 */
	public function showAction(Room $room) {
		$this->view->assign('room', $room);
	}

	/**
	 * Shows a form for creating a new room object
	 *
	 * @return void
	 */
	public function newAction() {
		$this->view->assign('questions', $this->questionRepository->findAll());
	}

	/**
	 * Adds the given new room object to the room repository
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Room $newRoom A new room to add
	 * @return void
	 */
	public function createAction(Room $newRoom) {
		$this->roomRepository->add($newRoom);
		$this->addFlashMessage('Created a new room.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing room object
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Room $room The room to edit
	 * @return void
	 */
	public function editAction(Room $room) {		
		$this->view->assign('questions', $this->questionRepository->findAll());
		$this->view->assign('room', $room);
	}

	/**
	 * Updates the given room object
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Room $room The room to update
	 * @return void
	 */
	public function updateAction(Room $room) {
		$this->roomRepository->update($room);
		$this->addFlashMessage('Updated the room.');
		$this->redirect('index');
	}

	/**
	 * Removes the given room object from the room repository
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Room $room The room to delete
	 * @return void
	 */
	public function deleteAction(Room $room) {
		$this->roomRepository->remove($room);
		$this->addFlashMessage('Deleted a room.');
		$this->redirect('index');
	}
	
	/**
	 * Start new adventure
	 *
	 * @return void
	 */
	public function startAction() {
		$room = $this->roomRepository->findOneByName("Eingang");
		//\TYPO3\FLOW3\var_dump($room);
		$this->redirect('load', 'Room', NULL, array('room' => $room));
	}

	/**
	 * Load Room
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Room $room The room to load
	 * @return void
	 */
	public function loadAction(Room $room) {
		$answers = $room->getQuestion();
	//	$routes = $this->routeRepository->findByRoomsourceAndAnswer($room->getId(), $anwers->getId());
	//	\TYPO3\FLOW3\var_dump($routes);
	}
}

?>