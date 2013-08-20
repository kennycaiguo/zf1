zf1
===

传智播客 zend framework 1 学习


# 安装
- zf.bat create project C:\Apache2\htdocs\zf1\myproject
- 从下载的zf包里将Zend/文件夹拷贝进：C:\Apache2\htdocs\zf1\myproject\library 
- 开启pdo（php.ini）、rewrite（httpd.conf里的mod_rewrite.so）模块
- 编辑httpd.conf，将文件中全部的AllowOverride都从None改成All、
- 配置虚拟主机，先打开Include conf/extra/httpd-vhosts.conf，在其中编辑：

    <VirtualHost *:80>
        DocumentRoot "C:/.../myproject/public"
        ServerName test.com
        DirectoryIndex index.php
        <Directory>
            options FollowSymLinks
            AllowOverride None
            Order allow,deny
            Allow from all
        </Directory>
    </VirtualHost>

- 编辑hosts：

    127.0.0.1 localhost
    127.0.0.1 test.com

