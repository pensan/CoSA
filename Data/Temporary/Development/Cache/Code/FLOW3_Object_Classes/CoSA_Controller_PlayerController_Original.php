<?php
namespace CoSA\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "CoSA".                       *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \CoSA\Domain\Model\Player;

/**
 * Player controller for the CoSA package 
 *
 * @FLOW3\Scope("singleton")
 */
class PlayerController_Original extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \CoSA\Domain\Repository\PlayerRepository
	 */
	protected $playerRepository;
	
	/**
	* @FLOW3\Inject
	* @var \CoSA\Domain\Service\AdventureSession
	*/
	protected $adventureSession;

	/**
	 * Shows a list of players
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('players', $this->playerRepository->findAll());
	}

	/**
	 * Shows a single player object
	 *
	 * @param \CoSA\Domain\Model\Player $player The player to show
	 * @return void
	 */
	public function showAction(Player $player) {
		$this->view->assign('player', $player);
	}

	/**
	 * Shows a form for creating a new player object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new player object to the player repository
	 *
	 * @param \CoSA\Domain\Model\Player $newPlayer A new player to add
	 * @return void
	 */
	public function createAction(Player $newPlayer) {
		$this->adventureSession->setName($newPlayer->getName());
		//$this->adventureSession->printSession();
		$this->redirect('index', 'Room');
	}

	/**
	 * Shows a form for editing an existing player object
	 *
	 * @param \CoSA\Domain\Model\Player $player The player to edit
	 * @return void
	 */
	public function editAction(Player $player) {
		$this->view->assign('player', $player);
	}

	/**
	 * Updates the given player object
	 *
	 * @param \CoSA\Domain\Model\Player $player The player to update
	 * @return void
	 */
	public function updateAction(Player $player) {
		$this->playerRepository->update($player);
		$this->addFlashMessage('Updated the player.');
		$this->redirect('index');
	}

	/**
	 * Removes the given player object from the player repository
	 *
	 * @param \CoSA\Domain\Model\Player $player The player to delete
	 * @return void
	 */
	public function deleteAction(Player $player) {
		$this->playerRepository->remove($player);
		$this->addFlashMessage('Deleted a player.');
		$this->redirect('index');
	}

}


#0             %CLASS%CoSA_Controller_PlayerController2558      