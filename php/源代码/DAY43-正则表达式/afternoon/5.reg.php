<?php
//运来一车沙子
$str = '<div data-topic-id="2," class="aw-item active">
			<a rel="nofollow" href="people.html" data-id="1" class="aw-user-name hidden-xs">
				<img alt="" src="/0414/application/public/common/avatar-max-img.png"></a>
			<div class="aw-question-content">
				<h4>
					<a href="question.html">提问：牙齿是真的还是假的？</a>
				</h4>
				<a class="pull-right text-color-999" href="answer.html">回复</a>
				<p>
					<span class="text-color-999 related-topic hide">• 来自相关话题</span>
				</p>
			</div>
		</div>';
//2. 定义规则（筛子）
$reg = '/<a\shref="(?:.+)">(.+)<\/a>/';

//3. 开始匹配
preg_match($reg, $str,$match);
echo '<pre>';
var_dump($match);