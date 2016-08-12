<?php

namespace dispatch\core;

$app = __DIR__;

require_once $app.'/interfaces/VulnerabilityPoller.php';
require_once $app.'/interfaces/MatchHandler.php';
require_once $app.'/interfaces/VulnerabilityDataSource.php';
require_once $app.'/interfaces/VulnerabilityMatcher.php';

use dispatch\core\interfaces\VulnerabilityPoller;
use dispatch\core\interfaces\MatchHandler;
use dispatch\core\interfaces\VulnerabilityDataSource;
use dispatch\core\interfaces\VulnerabilityMatcher;

class PollVulnerabilities implements VulnerabilityPoller
{
	/**
	 * @param dispatch\core\interfaces\MatchHandler $matchHandler
	 */
	public function addMatchHandler(MatchHandler $matchHandler)
	{
	}

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
}
