zf1
===

传智播客 zend framework 1 学习


# 安装
- zf.bat create project C:\Apache2\htdocs\zf1\myproject
- 从下载的zf包里将Zend/文件夹拷贝进：C:\Apache2\htdocs\zf1\myproject\library 
- 开启pdo（php.ini）、rewrite（httpd.conf里的mod_rewrite.so）模块
- 编辑httpd.conf，将文件中全部的AllowOverride都从None改成All、
- 配置虚拟主机，先打开Include conf/extra/httpd-vhosts.conf，在其中编辑：

<pre>
	&lt;VirtualHost *:80&gt;
		DocumentRoot "C:/.../myproject/public"
        ServerName test.com
        DirectoryIndex index.php
        &lt;Directory&gt;
            options FollowSymLinks
            AllowOverride None
            Order allow,deny
            Allow from all
        &lt;/Directory&gt;
    &lt;/VirtualHost&gt;
</pre>

- 编辑hosts：

    127.0.0.1 localhost
    127.0.0.1 test.com


程序执行的顺序： index.php -> Bootstrap.php -> Controller的init方法 -> Controller的实际方法

<pre>
create table `message`(
message_id int(10) unsigned not null auto_increment,
sender varchar(10) not null,
getter varchar(10) not null,
sendtime datetime not null,
content varchar(10) not null,
primary key (message_id)) engine=InnoDB default charset=utf8;
</pre>

插入一些数据

TO: 传智播客PHP培训 韩顺平 PHP视频教程 zend framework 第03讲 zend原理剖析 zend整合数据库.zip 中间部分？