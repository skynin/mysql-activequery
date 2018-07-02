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

        $this->schemaMap['mysqli'] = 'common\components\snldbextra\SchemaExt';
        $this->schemaMap['mysql'] = 'common\components\snldbextra\SchemaExt';
    }
}
