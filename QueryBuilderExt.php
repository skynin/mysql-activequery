<?php

namespace common\components\snldbextra;

use Yii;

/**
 * @author Skynin <sohay_ua@yahoo.com>
 */
class QueryBuilderExt extends \yii\db\mysql\QueryBuilder
{
    public function build( $query, $params = [] )
    {
        $lockMode = null;

        if (!empty($query->params)) {
            $tempParams = [];

            foreach ( $query->params as $key => $value ) {
                if ($key=='!lockMode') $lockMode = $value;
                else $tempParams[$key] = $value;
            }
            $query->params = $tempParams;
        }

        $result = parent::build($query, $params);

        if (!empty($lockMode)) {
            list($sql, $params) = $result;

            $lockSQL = $lockMode == 'forUpdate' ? 'FOR UPDATE' : 'LOCK IN SHARE MODE';

            $sql .= ' ' . $lockSQL;

            $result = [$sql, $params];
        }

        return $result;
    }
}
