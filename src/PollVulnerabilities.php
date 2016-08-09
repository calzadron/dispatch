<?php

namespace dispatch\core;

$app = __DIR__;

require_once $app.'/interfaces/VulnerabilityPoller.php';

use dispatch\core\interfaces\VulnerabilityPoller;

class PollVulnerabilities implements VulnerabilityPoller
{
}
