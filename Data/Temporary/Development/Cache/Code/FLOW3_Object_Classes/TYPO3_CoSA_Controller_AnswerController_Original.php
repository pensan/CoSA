<?php
namespace TYPO3\CoSA\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.CoSA".                 *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \TYPO3\CoSA\Domain\Model\Answer;

/**
 * Answer controller for the TYPO3.CoSA package 
 *
 * @FLOW3\Scope("singleton")
 */
class AnswerController_Original extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \TYPO3\CoSA\Domain\Repository\AnswerRepository
	 */
	protected $answerRepository;
	
	/**
	 * @FLOW3\Inject
	 * @var \TYPO3\CoSA\Domain\Repository\QuestionRepository
	 */
	protected $questionRepository;

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
	 * @param \TYPO3\CoSA\Domain\Model\Answer $answer The answer to show
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
		$this->view->assign('questions', $this->questionRepository->findAll());
	}

	/**
	 * Adds the given new answer object to the answer repository
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Answer $newAnswer A new answer to add
	 * @return void
	 */
	public function createAction(Answer $newAnswer) {
		$this->answerRepository->add($newAnswer);
		$this->addFlashMessage('Created a new answer.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing answer object
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Answer $answer The answer to edit
	 * @return void
	 */
	public function editAction(Answer $answer) {
		$this->view->assign('questions', $this->questionRepository->findAll());
		$this->view->assign('answer', $answer);
	}

	/**
	 * Updates the given answer object
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Answer $answer The answer to update
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
	 * @param \TYPO3\CoSA\Domain\Model\Answer $answer The answer to delete
	 * @return void
	 */
	public function deleteAction(Answer $answer) {
		$this->answerRepository->remove($answer);
		$this->addFlashMessage('Deleted a answer.');
		$this->redirect('index');
	}

}


#0             %CLASS%TYPO3_CoSA_Controller_AnswerController2759      