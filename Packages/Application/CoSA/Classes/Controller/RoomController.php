<?php
namespace CoSA\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "CoSA".                       *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \CoSA\Domain\Model\Room;

/**
 * Room controller for the CoSA package 
 *
 * @FLOW3\Scope("singleton")
 */
class RoomController extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \CoSA\Domain\Repository\RoomRepository
	 */
	protected $roomRepository;
	
	/**
	 * @FLOW3\Inject
	 * @var \CoSA\Domain\Repository\QuestionRepository
	 */
	protected $questionRepository;
	
	/**
	* @FLOW3\Inject
	* @var \CoSA\Domain\Service\AdventureSession
	*/
	protected $adventureSession;


	/**
     * Check if session is active
     *
     * @return void
     */
    public function checkName() {
		if(!$this->adventureSession->getName())
		  $this->redirect('new', 'Player');
    }

	/**
	 * Shows a list of rooms
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->checkName();
		$this->adventureSession->printSession();
		$this->view->assign('playerName', $this->adventureSession->getName());
		$this->view->assign('rooms', $this->roomRepository->findAll());
	}
	
	/**
	 * Get a room
	 *
	 * @return void
	 */
	public function getAction($answer) {
		$this->checkName();
		$this->adventureSession->printSession();
	}

	/**
	 * Shows a single room object
	 *
	 * @param \CoSA\Domain\Model\Room $room The room to show
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
	 * @param \CoSA\Domain\Model\Room $newRoom A new room to add
	 * @return void
	 */
	public function createAction(Room $newRoom) {
		$this->checkName();
		$this->roomRepository->add($newRoom);
		$this->addFlashMessage('Created a new room.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing room object
	 *
	 * @param \CoSA\Domain\Model\Room $room The room to edit
	 * @return void
	 */
	public function editAction(Room $room) {
		$this->view->assign('room', $room);
	}

	/**
	 * Updates the given room object
	 *
	 * @param \CoSA\Domain\Model\Room $room The room to update
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
	 * @param \CoSA\Domain\Model\Room $room The room to delete
	 * @return void
	 */
	public function deleteAction(Room $room) {
		$this->roomRepository->remove($room);
		$this->addFlashMessage('Deleted a room.');
		$this->redirect('index');
	}

}

?>