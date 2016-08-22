<?php

namespace dispatch\core\tests\tests\unit;

$app = __DIR__.'/../../..';
require_once $app.'/PollVulnerabilities.php';
require_once $app.'/interfaces/VulnerabilityPoller.php';

use PHPUnit\Framework\TestCase;
use dispatch\core\PollVulnerabilities;
use dispatch\core\interfaces\VulnerabilityPoller;

class PollVulnerabilitiesTest extends TestCase
{
	/**
	 * @testdox The PollVulnerabilities class is instantiable
	 */
	public function testPollVulnerabilitiesIsInstantiable()
	{
		$Poller = new PollVulnerabilities();

		$this->assertNotNull($Poller);
	}

	/**
	 * @testdox The PollVulnerabilities class implements the VulnerabilityPoller interface
	 */
	public function testPollVulnerabilitiesImplementsVulnerabilityPoller()
	{
		$Poller = new PollVulnerabilities();

		$this->assertTrue($Poller instanceof VulnerabilityPoller);
	}

	/**
	 * @testdox The pollDateRange() method requests vulnerabilites from the datasource
	 */
	public function testPollDateRangePollsVulnerabilityDataSourceDateRange()
	{
		$this->markTestIncomplete();
	}

	/**
	 * @testdox The pollDateRange() method checks all vulnerabilities for a match
	 */
	public function testPollDateRangeChecksReturnedVulnerabilitiesForMatch()
	{
		$this->markTestIncomplete();
	}

	/**
	 * @testdox The pollDateRange() method handles all matches
	 */
	public function testPollDateRangeHandlesMatchesForMatchingVulnerabilities()
	{
		$this->markTestIncomplete();
	}
}
