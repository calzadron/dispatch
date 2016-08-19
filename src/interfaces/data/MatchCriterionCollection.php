<?php

namespace dispatch\core\interfaces\data;

$app = __DIR__.'/../..';

require_once $app.'/interfaces/data/MatchCriterion.php';

use dispatch\core\interfaces\data\MatchCriterion;

interface MatchCriterionCollection
{
	/**
	 * @param dispatch\core\interfaces\data\MatchCriterion $criterion
	 */
	public function addMatchCriterion(MatchCriterion $criterion);

	/**
	 * @return array
	 */
	public function critera();
}
