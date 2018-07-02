<?php

namespace common\models;

use Yii;

/**
 * @author Skynin <sohay_ua@yahoo.com>
 */
class YourActiveQuery extends \yii\db\ActiveQuery
{
	public function forUpdate() {
       $this->addParams(['!lockMode' => 'forUpdate']);
		return $this;
	}
	public function forRead() {
       $this->addParams(['!lockMode' => 'forShare']);
		return $this;
	}
}
