<?php

namespace dispatch\core;

$app = __DIR__;

require_once $app.'/interfaces/VulnerabilityPoller.php';
require_once $app.'/interfaces/MatchHandler.php';

use dispatch\core\interfaces\VulnerabilityPoller;
use dispatch\core\interfaces\MatchHandler;

class PollVulnerabilities implements VulnerabilityPoller
{
	/**
	 * @param dispatch\core\interfaces\MatchHandler $matchHandler
	 */
	public function addMatchHandler(MatchHandler $matchHandler)
	{
	}
}
