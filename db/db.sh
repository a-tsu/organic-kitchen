#!/bin/bash
mysql -u root -e "create database organic_kitchen default charset utf8"

mysql -u root -D organic_kitchen < client.ddl
mysql -u root -D organic_kitchen < product.ddl
mysql -u root -D organic_kitchen < purchase_history.ddl
