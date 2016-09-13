# phpunix
原则：
支持php 5.5以上
轻量、安全、性能、扩展性不用太强求
本地版的saas框架
不需要路由设计，完全通过web容器做rewrite
不需要ORM，直接写SQL，prepare方式(SQL注入)
支持基本的数据拆分策略
支持codis
框架实现一些基本的业务逻辑和支持


目录说明:
	boot/ 框架内核文件
	init/ 初始化文件
	config/ 配置文件
	lib/ 库文件
	modules/ 底层模块
	apps/ 应用
	index.php 入口文件
