<h1>How to use</h1>

to enable php file as .html in apache
```
$ sudo vim /etc/httpd/conf.d/php.conf
#
# Cause the PHP interpreter to handle files with a .php extension.
#
AddHandler php5-script .php .html ←追加
AddType text/html .php

$ sudo service httpd restart
```

to include header file
```
<?php include_once('/var/www/html/header.inc'); ?>
```
- put it on the first line

to include hooter file
```
<?php include_once('/var/www/html/header.inc'); ?>
```
- put it on the last line
