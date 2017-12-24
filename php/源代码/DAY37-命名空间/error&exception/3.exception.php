<?php
echo '早上起床<br>';

echo '吃早餐<br>';

try {
    echo '开车上班<br>';
    //如果遇到意外情况
    throw new Exception('昨天加的油是假的,兑水太多<br>');
}catch (Exception $e){
    //捕获到异常信息
    echo $e ->getMessage();
    //提供备用方案：
    echo '打个车去上班<br>';
}

echo '到达公司开始撸代码<br>';