<?php

namespace common\components\snldbextra;

use Yii;

/**
 * @author Skynin <sohay_ua@yahoo.com>
 */
class ConnectionExt extends \yii\db\Connection
{
    public function init(  )
    {
        parent::init();

        $this->schemaMap['mysqli'] = 'common\components\snldbextra\Schema';
        $this->schemaMap['mysql'] = 'common\components\snldbextra\Schema';
    }
}
