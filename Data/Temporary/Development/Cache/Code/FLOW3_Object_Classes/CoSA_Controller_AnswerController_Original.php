<?php
namespace CoSA\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "CoSA".                       *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \CoSA\Domain\Model\Answer as Answer;

/**
 * Answer controller for the CoSA package 
 *
 * @FLOW3\Scope("singleton")
 */
class AnswerController_Original extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \CoSA\Domain\Repository\AnswerRepository
	 */
	protected $answerRepository;

	/**
	 * Shows a list of answers
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('answers', $this->answerRepository->findAll());
	}

	/**
	 * Shows a single answer object
	 *
	 * @param \CoSA\Domain\Model\Answer $answer The answer to show
	 * @return void
	 */
	public function showAction(Answer $answer) {
		$this->view->assign('answer', $answer);
	}

	/**
	 * Shows a form for creating a new answer object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new answer object to the answer repository
	 *
	 * @param \CoSA\Domain\Model\Answer $newAnswer A new answer to add
	 * @FLOW3\IgnoreValidation("$newAnswer")
	 * @return void
	 */
	public function createAction(Answer $newAnswer) {
		$this->answerRepository->add($newAnswer);
		//\TYPO3\FLOW3\var_dump($newAnswer);
		$this->addFlashMessage('Created a new answer.');
		$this->redirect('index');
	}
	
	/**
	 * Shows a form for editing an existing answer object
	 *
	 * @param \CoSA\Domain\Model\Answer $answer The answer to edit
	 * @return void
	 */
	public function editAction(Answer $answer) {
		$this->view->assign('answer', $answer);
	}

	/**
	 * Updates the given answer object
	 *
	 * @param \CoSA\Domain\Model\Answer $answer The answer to update
	 * @return void
	 */
	public function updateAction(Answer $answer) {
		$this->answerRepository->update($answer);
		$this->addFlashMessage('Updated the answer.');
		$this->redirect('index');
	}

	/**
	 * Removes the given answer object from the answer repository
	 *
	 * @param \CoSA\Domain\Model\Answer $answer The answer to delete
	 * @return void
	 */
	public function deleteAction(Answer $answer) {
		$this->answerRepository->remove($answer);
		$this->addFlashMessage('Deleted a answer.');
		$this->redirect('index');
	}

}


#0             %CLASS%CoSA_Controller_AnswerController2529      