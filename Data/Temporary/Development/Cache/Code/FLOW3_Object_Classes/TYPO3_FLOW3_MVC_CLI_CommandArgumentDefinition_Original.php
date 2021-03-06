<?php
namespace TYPO3\FLOW3\MVC\CLI;

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
 * Represents a CommandArgumentDefinition
 *
 */
class CommandArgumentDefinition_Original {

	/**
	 * @var string
	 */
	protected $name = '';

	/**
	 * @var boolean
	 */
	protected $required = FALSE;

	/**
	 * @var string
	 */
	protected $description = '';

	/**
	 * Constructor
	 *
	 * @param string $name name of the command argument (= parameter name)
	 * @param boolean $required defines whether this argument is required or optional
	 * @param string $description description of the argument
	 */
	public function __construct($name, $required, $description) {
		$this->name = $name;
		$this->required = $required;
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Returns the lowercased name with dashes as word separator
	 *
	 * @return string
	 */
	public function getDashedName() {
		$dashedName = ucfirst($this->name);
		$dashedName = preg_replace('/([A-Z][a-z0-9]+)/', '$1-', $dashedName);
		return '--' . strtolower(substr($dashedName, 0, -1));
	}

	/**
	 * @return string
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * @return string
	 */
	public function isRequired() {
		return $this->required;
	}

}

#0             %CLASS%TYPO3_FLOW3_MVC_CLI_CommandArgumentDefinition1965      