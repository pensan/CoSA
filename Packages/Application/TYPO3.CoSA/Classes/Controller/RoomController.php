<?php
namespace TYPO3\CoSA\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.CoSA".                 *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \TYPO3\CoSA\Domain\Model\Room;
use \TYPO3\CoSA\Domain\Model\Answer as Answer;

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
	 * @FLOW3\Inject
	 * @var \TYPO3\CoSA\Domain\Repository\AnswerRepository
	 */
	protected $answerRepository;

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
	 * Set video for final room
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Room $room The room to load
	 * @return string
	 */
	private function getVideo(Room $room) {
		$videoUrl = "";
		switch($room->getName()){
			case "MMT C++":
				$videoUrl = "http://www.youtube.com/v/nziy2_U5JQI";
				break;
			case "MMT HTML5":
				$videoUrl = "http://www.youtube.com/v/siOHh0uzcuY";
				break;
			case "MMA Audio":
				$videoUrl = "http://www.youtube.com/v/wiAq1L7mR0Q";
				break;
			case "MMA Video":
				$videoUrl = "http://www.youtube.com/v/MvJeQaTRT5E";
				break;
		}
		return $videoUrl;
	}

	/**
	 * Load Room
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Room $room The room to load
	 * @return void
	 */
	public function loadAction(Room $room) {
		$this->view->assign('answers', $this->answerRepository->findByQuestion($room->getQuestion()));
		$this->view->assign('room', $room);

		switch($room->getType()){
			case "e":
				$bgImage = "eingang_final.jpg";
				break;
			case "f":
				$bgImage = "Raum1_final.jpg";
				$videoUrl = $this->getVideo($room);
				print($videoUrl);
				$this->view->assign('videoUrl', $videoUrl);
				break;
			default:
			 	$bgImage = "Gang1_final.jpg";
				break;
		}
		$this->view->assign('backgroundImage', $bgImage);
	}
	
	/**
	 * Load Room
	 *
	 * @param array $answer The selected answer answer
	 * @return void
	*/
	public function nextAction($answer) {
		$route = $this->routeRepository->findOneByAnswer($answer['__identity']);
		$this->redirect('load', 'Room', NUll, array('room' => $route->getRoomDestination()));
	}
}

?>