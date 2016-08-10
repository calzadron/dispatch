<?php

namespace dispatch\core;

$app = __DIR__;

require_once $app.'/interfaces/VulnerabilityPoller.php';
require_once $app.'/interfaces/MatchHandler.php';
require_once $app.'/interfaces/VulnerabilityDataSource.php';

use dispatch\core\interfaces\VulnerabilityPoller;
use dispatch\core\interfaces\MatchHandler;
use dispatch\core\interfaces\VulnerabilityDataSource;

class PollVulnerabilities implements VulnerabilityPoller
{
	/**
	 * @param dispatch\core\interfaces\MatchHandler $matchHandler
	 */
	public function addMatchHandler(MatchHandler $matchHandler)
	{
	}

	public function addVulnerabilityDataSource(
		VulnerabilityDataSource $dataSource
	) {
	}
}
