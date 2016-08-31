<?php

namespace dispatch\core;

$app = __DIR__;

require_once $app.'/interfaces/VulnerabilityPoller.php';
require_once $app.'/interfaces/MatchHandler.php';
require_once $app.'/interfaces/VulnerabilityDataSource.php';
require_once $app.'/interfaces/VulnerabilityMatcher.php';
require_once $app.'/exceptions/MissingLogicalDependencyException.php';

use dispatch\core\interfaces\VulnerabilityPoller;
use dispatch\core\interfaces\MatchHandler;
use dispatch\core\interfaces\VulnerabilityDataSource;
use dispatch\core\interfaces\VulnerabilityMatcher;
use dispatch\core\exceptions\MissingLogicalDependencyException;

class PollVulnerabilities implements VulnerabilityPoller
{
	protected $VulnerabilityDataSource;
	protected $VulnerabilityMatcher;

	/**
	 * @param dispatch\core\interfaces\VulnerabilityDataSource $dataSource
	 */
	public function addVulnerabilityDataSource(
		VulnerabilityDataSource $dataSource
	) {
		$this->VulnerabilityDataSource = $dataSource;
	}

	/**
	 * @param dispatch\core\interfaces\VulnerabilityMatcher $matcher
	 */
	public function addVulnerabilityMatcher(VulnerabilityMatcher $matcher)
	{
		$this->VulnerabilityMatcher = $matcher;
	}

	/**
	 * @param \DateTime $startDate
	 * @param \DateTime $endDate
	 * @return dispatch\core\interfaces\data\VulnerabilityCollection
	 */
	public function pollDateRange(\DateTime $startDate, \DateTime $endDate)
	{
		$this->checkMissingDependencies();

		$this->VulnerabilityDataSource->getVulnerabilitiesInDateRange(
			$startDate,
			$endDate
		);
	}

	/**
	 * @throws dispatch\core\exceptions\MissingLogicalDependencyException
	 */
	protected function checkMissingDependencies()
	{
		$logicalDependencies = array (
			'VulnerabilityDataSource',
			'VulnerabilityMatcher'
		);

		foreach ($logicalDependencies as $logicalDependency) {
			if (!$this->$logicalDependency) {
				throw new MissingLogicalDependencyException(
					'Logical Dependency '.$logicalDependency.' is missing.'
				);
			}
		}
	}
}
