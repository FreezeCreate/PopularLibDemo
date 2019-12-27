# PopularLibDemo
some popular Lib Demo

-   `composer global require phpunit/phpunit` 安装到全局
	`composer require --dev phpunit/phpunit` 安装到本项目

	PHPunit-单元测试工具，需注意[Stubs测试替身](http://www.phpunit.cn/manual/4.8/zh_cn/test-doubles.html#test-doubles.stubs) , [命令行测试执行器](http://www.phpunit.cn/manual/5.7/zh_cn/textui.html)
	[使用composer安装](https://blog.csdn.net/benpaodelulu_guajian/article/details/90245924)并在根目录添加phpunit.xml文件，在根目录下创建test目录，随后在test下编写测试案例，使用命令行测试 `phpunit test/RafTest`

	>此处使用4.8为测试版本,[官方文档](http://www.phpunit.cn/manual/4.8/zh_cn/index.html)，[参考文档](http://www.dahouduan.com/2017/08/18/composer-phpunit-phpstorm/)，[接口测试案例](https://www.douban.com/group/topic/109545769/)

-  `composer require erusev/parsedown`  MD解析器 
	
	使用案例见[parseMd.php](./public/parseMd.php)

- `composer require mobiledetect/mobiledetectlib` 检测移动设备类型

	使用案例见[mobileCheck.php](./public/mobileCheck.php)