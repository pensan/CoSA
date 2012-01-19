<?php
namespace TYPO3\CoSA\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.CoSA".                 *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \TYPO3\CoSA\Domain\Model\Question;

/**
 * Question controller for the TYPO3.CoSA package 
 *
 * @FLOW3\Scope("singleton")
 */
class QuestionController extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \TYPO3\CoSA\Domain\Repository\QuestionRepository
	 */
	protected $questionRepository;

	/**
	 * Shows a list of questions
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('questions', $this->questionRepository->findAll());
	}

	/**
	 * Shows a single question object
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Question $question The question to show
	 * @return void
	 */
	public function showAction(Question $question) {
		$this->view->assign('question', $question);
	}

	/**
	 * Shows a form for creating a new question object
	 *
	 * @return void
	 */
	public function newAction() {
	}

	/**
	 * Adds the given new question object to the question repository
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Question $newQuestion A new question to add
	 * @return void
	 */
	public function createAction(Question $newQuestion) {
		$this->questionRepository->add($newQuestion);
		$this->addFlashMessage('Created a new question.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing question object
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Question $question The question to edit
	 * @return void
	 */
	public function editAction(Question $question) {
		$this->view->assign('question', $question);
	}

	/**
	 * Updates the given question object
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Question $question The question to update
	 * @return void
	 */
	public function updateAction(Question $question) {
		$this->questionRepository->update($question);
		$this->addFlashMessage('Updated the question.');
		$this->redirect('index');
	}

	/**
	 * Removes the given question object from the question repository
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Question $question The question to delete
	 * @return void
	 */
	public function deleteAction(Question $question) {
		$this->questionRepository->remove($question);
		$this->addFlashMessage('Deleted a question.');
		$this->redirect('index');
	}

}

?>