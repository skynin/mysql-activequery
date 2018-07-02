<?php

namespace common\components\snldbextra;

use Yii;

/**
 * @author Skynin <sohay_ua@yahoo.com>
 */
class Schema extends \yii\db\mysql\Schema
{
    public function createQueryBuilder()
    {
        return new QueryBuilderExt($this->db);
    }
}
