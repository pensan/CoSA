<?php
namespace TYPO3\FLOW3\Persistence\Doctrine\Logging;

/*                                                                        *
 * This script belongs to the FLOW3 framework.                            *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License, either version 3   *
 * of the License, or (at your option) any later version.                 *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */


/**
 * A SQL logger that logs to a FLOW3 logger.
 *
 */
class SqlLogger_Original implements \Doctrine\DBAL\Logging\SQLLogger {

	/**
	 * @var \TYPO3\FLOW3\Log\LoggerInterface
	 */
	protected $logger;

	/**
	 * Logs a SQL statement to the system logger (DEBUG priority).
	 *
	 * @param string $sql The SQL to be executed
	 * @param array $params The SQL parameters
	 * @param array $types The SQL parameter types.
	 * @return void
	 */
	public function startQuery($sql, array $params = NULL, array $types = NULL) {
			// this is a safeguard for when no logger might be available...
		if ($this->logger !== NULL) {
			$this->logger->log($sql, LOG_DEBUG, array('params' => $params, 'types' => $types));
		}
	}

	/**
	 * @return void
	 */
	public function stopQuery() {}

}


#0             %CLASS%TYPO3_FLOW3_Persistence_Doctrine_Logging_SqlLogger1519      