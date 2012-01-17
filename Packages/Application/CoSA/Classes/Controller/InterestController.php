<?php
namespace CoSA\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "CoSA".                       *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \CoSA\Domain\Model\Interest;

/**
 * Interest controller for the CoSA package 
 *
 * @FLOW3\Scope("singleton")
 */
class InterestController extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \CoSA\Domain\Repository\InterestRepository
	 */
	protected $interestRepository;

	/**
	 * Shows a list of interests
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('interests', $this->interestRepository->findAll());
	}

	/**
	 * Shows a single interest object
	 *
	 * @param \CoSA\Domain\Model\Interest $interest The interest to show
	 * @return void
	 */
	public function showAction(Interest $interest) {
		$this->view->assign('interest', $interest);
	}

	/**
	 * Shows a form for creating a new interest object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new interest object to the interest repository
	 *
	 * @param \CoSA\Domain\Model\Interest $newInterest A new interest to add
	 * @return void
	 */
	public function createAction(Interest $newInterest) {
		$this->interestRepository->add($newInterest);
		$this->addFlashMessage('Created a new interest.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing interest object
	 *
	 * @param \CoSA\Domain\Model\Interest $interest The interest to edit
	 * @return void
	 */
	public function editAction(Interest $interest) {
		$this->view->assign('interest', $interest);
	}

	/**
	 * Updates the given interest object
	 *
	 * @param \CoSA\Domain\Model\Interest $interest The interest to update
	 * @return void
	 */
	public function updateAction(Interest $interest) {
		$this->interestRepository->update($interest);
		$this->addFlashMessage('Updated the interest.');
		$this->redirect('index');
	}

	/**
	 * Removes the given interest object from the interest repository
	 *
	 * @param \CoSA\Domain\Model\Interest $interest The interest to delete
	 * @return void
	 */
	public function deleteAction(interest $interest) {
		$this->interestRepository->remove($interest);
		$this->addFlashMessage('Deleted a interest.');
		$this->redirect('index');
	}

}

?>