<?php

/**
 * @author QiangYu
 *
 * 数据统计首页
 *
 * */

namespace Controller\Stat;

use Core\Helper\Utility\Validator;

class Index extends \Controller\AuthController
{

    public function get($f3)
    {
        global $smarty;
        $smarty->display('stat_index.tpl');
    }

}
