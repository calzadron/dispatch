<?php

namespace dispatch\core\tests\tests\unit;

$app = __DIR__.'/../../..';
require_once $app.'/PollVulnerabilities.php';
require_once $app.'/interfaces/VulnerabilityPoller.php';
require_once $app.'/interfaces/VulnerabilityDataSource.php';
require_once $app.'/interfaces/VulnerabilityMatcher.php';
require_once $app.'/exceptions/MissingLogicalDependencyException.php';

use PHPUnit\Framework\TestCase;
use dispatch\core\PollVulnerabilities;
use dispatch\core\interfaces\VulnerabilityPoller;

class PollVulnerabilitiesTest extends TestCase
{
	/**
	 * @testdox PollVulnerabilities is instantiable
	 */
	public function testPollVulnerabilitiesIsInstantiable()
	{
		$Poller = new PollVulnerabilities();

		$this->assertNotNull($Poller);
	}

	/**
	 * @testdox PollVulnerabilities implements the VulnerabilityPoller interface
	 */
	public function testPollVulnerabilitiesImplementsVulnerabilityPoller()
	{
		$Poller = new PollVulnerabilities();

		$this->assertTrue($Poller instanceof VulnerabilityPoller);
	}

	/**
	 * @param string $missingInjectionMethod
	 * @testdox pollDateRange() throws MissingLogicalDependencyException if missing a dependency
	 * @dataProvider providerRequiredLogicalDependencyInjectionMethods
	 */
	public function testPollDateRangeThrowsMissingDependency(
		$missingInjectionMethod
	) {
		$Poller = new PollVulnerabilities();

		$allInjectionMethods = $this->getAllInjectionMethods();

		foreach ($allInjectionMethods as $injectionMethod) {
			if ($injectionMethod !== $missingInjectionMethod) {
				$Poller->$injectionMethod(
					$this->getMockByInjectionMethod($injectionMethod)
				);
			}
		}

		$this->setExpectedException(
			'\dispatch\core\exceptions\MissingLogicalDependencyException'
		);

		$Poller->pollDateRange(date('Y-m-d'), date('Y-m-d'));
	}

	/**
	 * @return array
	 */
	public function providerRequiredLogicalDependencyInjectionMethods()
	{
		return array(
			array('addVulnerabilityDataSource'),
			array('addVulnerabilityMatcher')
		);
	}

	/**
	 * @return array
	 */
	protected function getAllInjectionMethods()
	{
		$injectionMethods = $this->providerRequiredLogicalDependencyInjectionMethods();

		$injectionMethodsFlat = array();
		foreach ($injectionMethods as $injectionMethod) {
			$injectionMethodsFlat[] = $injectionMethod[0];
		}

		return $injectionMethodsFlat;
	}

	/**
	 * @param string $injectionMethod
	 * @return mixed
	 */
	protected function getMockByInjectionMethod($injectionMethod)
	{
		$mock = null;

		switch ($injectionMethod) {
			case 'addVulnerabilityDataSource':
				$mock = $this->getVulnerabilityDataSourceMock();
				break;
			case 'addVulnerabilityMatcher':
				$mock = $this->getVulnerabilityMatcherMock();
				break;
		}

		return $mock;
	}

	/**
	 * @return \dispatch\core\interfaces\VulnerabilityDataSource
	 */
	protected function getVulnerabilityDataSourceMock()
	{
		return $this->createMock(
			'\dispatch\core\interfaces\VulnerabilityDataSource'
		);
	}

	/**
	 * @return \dispatch\core\interfaces\VulnerabilityMatcher
	 */
	protected function getVulnerabilityMatcherMock()
	{
		return $this->createMock(
			'\dispatch\core\interfaces\VulnerabilityMatcher'
		);
	}

	/**
	 * @testdox pollDateRange() requests vulnerabilites from the datasource
	 */
	public function testPollDateRangePollsVulnerabilityDataSourceDateRange()
	{
		$this->markTestIncomplete();
	}

	/**
	 * @testdox pollDateRange() checks all vulnerabilities for a match
	 */
	public function testPollDateRangeChecksReturnedVulnerabilitiesForMatch()
	{
		$this->markTestIncomplete();
	}
}
