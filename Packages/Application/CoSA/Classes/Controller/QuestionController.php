<?php
namespace CoSA\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "CoSA".                       *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \CoSA\Domain\Model\Question;
use \CoSA\Domain\Model\Answer;

/**
 * Question controller for the CoSA package 
 *
 * @FLOW3\Scope("singleton")
 */
class QuestionController extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \CoSA\Domain\Repository\QuestionRepository
	 */
	protected $questionRepository;
	
	/**
	 * @FLOW3\Inject
	 * @var \CoSA\Domain\Repository\AnswerRepository
	 */
	protected $answerRepository;

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
	 * @param \CoSA\Domain\Model\Question $question The question to show
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
		$this->view->assign('answers1', $this->answerRepository->findAll());
		$this->view->assign('answers2', $this->answerRepository->findAll());
	}

	/**
	 * Adds the given new question object to the question repository
	 *
	 * @param \CoSA\Domain\Model\Question $newQuestion A new question to add
	 * @return void
	 */
	public function createAction(Question $newQuestion) {
		\TYPO3\FLOW3\var_dump($newQuestion);
		$this->questionRepository->add($newQuestion);
		$this->addFlashMessage('Created a new question.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing question object
	 *
	 * @param \CoSA\Domain\Model\Question $question The question to edit
	 * @return void
	 */
	public function editAction(Question $question) {
		$this->view->assign('question', $question);
	}

	/**
	 * Updates the given question object
	 *
	 * @param \CoSA\Domain\Model\Question $question The question to update
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
	 * @param \CoSA\Domain\Model\Question $question The question to delete
	 * @return void
	 */
	public function deleteAction(Question $question) {
		$this->questionRepository->remove($question);
		$this->addFlashMessage('Deleted a question.');
		$this->redirect('index');
	}

}

?>