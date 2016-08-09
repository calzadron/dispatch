<?php

namespace dispatch\core\tests\tests\unit;

$app = __DIR__.'/../../..';
require_once $app.'/PollVulnerabilities.php';

use PHPUnit\Framework\TestCase;
use dispatch\core\PollVulnerabilities;

class PollVulnerabilitiesTest extends TestCase
{
	/**
	 * @testdox The PollVulnerabilities class must be instantiable
	 */
	public function testPollVulnerabilitiesIsInstantiable()
	{
		$Poller = new PollVulnerabilities();

		$this->assertNotNull($Poller);
	}
}
