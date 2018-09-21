<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件

/**
 * 求一个数n的阶乘
 * @param  int $n 要求的数n
 * @return int    阶乘的结果
 * @author cstxco<cstxco@gmail.com>
 */
function factorial($n) {

    if($n <= 1) {
        return 1;
    }
    return $n * factorial($n-1);
}