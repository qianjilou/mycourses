<?php
//定义一个规则（找来一把筛子）
$str = 'helloworld
helloasia
hellochina';

$reg = '/^hello.+/m';   //helloworld

preg_match_all($reg, $str,$match);
echo '<pre>';
var_dump($match);
die;
//运来一车沙子
$str = '中国你好'; 
$str = '<div data-topic-id="2," class="aw-item active">
			<a rel="nofollow" href="people.html" data-id="1" class="aw-user-name hidden-xs">
				<img alt="" src="/0414/application/public/common/avatar-max-img.png"></a>
			<div class="aw-question-content">
				<h4>
					<a href="question.html">提问：牙齿是真的还是假的？</a>
				</h4>
				<a class="pull-right text-color-999" href="answer.html">回复</a>
				<p>
					<a href="category.html" class="aw-question-tags">
					MVC</a>•
					<a class="aw-user-name" href="people.html">张三丰</a>
					<span class="text-color-999">发起了问题 • 
					100 人关注 • 
					100 个回复 • 
					200 次浏览 • 
					2017-04-15 15:43:46 天前</span>
					<span class="text-color-999 related-topic hide">• 来自相关话题</span>
				</p>
			</div>
		</div>';

//招募一些工人筛沙子了
preg_match($reg, $str,$match);
echo '<pre>';
var_dump($match);
