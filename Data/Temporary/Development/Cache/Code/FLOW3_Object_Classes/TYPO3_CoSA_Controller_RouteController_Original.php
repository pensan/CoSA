<?php
namespace TYPO3\CoSA\Controller;

/*                                                                        *
 * This script belongs to the FLOW3 package "TYPO3.CoSA".                 *
 *                                                                        *
 *                                                                        */

use TYPO3\FLOW3\Annotations as FLOW3;

use TYPO3\FLOW3\MVC\Controller\ActionController;
use \TYPO3\CoSA\Domain\Model\Route;

/**
 * Route controller for the TYPO3.CoSA package 
 *
 * @FLOW3\Scope("singleton")
 */
class RouteController_Original extends ActionController {

	/**
	 * @FLOW3\Inject
	 * @var \TYPO3\CoSA\Domain\Repository\RouteRepository
	 */
	protected $routeRepository;
	
	/**
	 * @FLOW3\Inject
	 * @var \TYPO3\CoSA\Domain\Repository\RoomRepository
	 */
	protected $roomRepository;
	
	/**
	 * @FLOW3\Inject
	 * @var \TYPO3\CoSA\Domain\Repository\AnswerRepository
	 */
	protected $answerRepository;

	/**
	 * Shows a list of routes
	 *
	 * @return void
	 */
	public function indexAction() {
		$this->view->assign('routes', $this->routeRepository->findAll());
	}

	/**
	 * Shows a single route object
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Route $route The route to show
	 * @return void
	 */
	public function showAction(Route $route) {
		$this->view->assign('route', $route);
	}

	/**
	 * Shows a form for creating a new route object
	 *
	 * @return void
	 */
	public function newAction() {
		$this->view->assign('rooms', $this->roomRepository->findAll());
		$this->view->assign('answers', $this->answerRepository->findAll());
	}

	/**
	 * Adds the given new route object to the route repository
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Route $newRoute A new route to add
	 * @return void
	 */
	public function createAction(Route $newRoute) {
		$this->routeRepository->add($newRoute);
		$this->addFlashMessage('Created a new route.');
		$this->redirect('index');
	}

	/**
	 * Shows a form for editing an existing route object
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Route $route The route to edit
	 * @return void
	 */
	public function editAction(Route $route) {
		$this->view->assign('rooms', $this->roomRepository->findAll());
		$this->view->assign('answers', $this->answerRepository->findAll());
		$this->view->assign('route', $route);
	}

	/**
	 * Updates the given route object
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Route $route The route to update
	 * @return void
	 */
	public function updateAction(Route $route) {
		$this->routeRepository->update($route);
		$this->addFlashMessage('Updated the route.');
		$this->redirect('index');
	}

	/**
	 * Removes the given route object from the route repository
	 *
	 * @param \TYPO3\CoSA\Domain\Model\Route $route The route to delete
	 * @return void
	 */
	public function deleteAction(Route $route) {
		$this->routeRepository->remove($route);
		$this->addFlashMessage('Deleted a route.');
		$this->redirect('index');
	}

}


#0             %CLASS%TYPO3_CoSA_Controller_RouteController2937      