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
	/**
	 * @param dispatch\core\interfaces\VulnerabilityDataSource $dataSource
	 */
	public function addVulnerabilityDataSource(
		VulnerabilityDataSource $dataSource
	) {
	}

	/**
	 * @param dispatch\core\interfaces\VulnerabilityMatcher $matcher
	 */
	public function addVulnerabilityMatcher(VulnerabilityMatcher $matcher)
	{
	}

	/**
	 * @param string $startDate  Start date of the date range to poll, in YYYY-MM-DD
	 * @param string $endDate  End date of the date range to poll, in YYYY-MM-DD
	 * @return dispatch\core\interfaces\data\VulnerabilityCollection
	 * @throws dispatch\core\exceptions\MissingLogicalDependencyException
	 */
	public function pollDateRange($startDate, $endDate)
	{
		throw new MissingLogicalDependencyException();
	}
}
