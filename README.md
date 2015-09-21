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

to include the header file
```
$ sed -i -e "1i <?php include_once('/var/www/html/header.inc'); ?>" your.file
```


to include the hooter file
```
echo "<?php include_once('/var/www/html/header.inc'); ?>" >> your.file
```
