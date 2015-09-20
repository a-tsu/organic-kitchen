CREATE TABLE product (
    product_id 		int(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    product_name 	varchar(64) NOT NULL,
    img_path 		varchar(128) NOT NULL,
    b_price 		int(10) unsigned NOT NULL,
    c_price 		int(10) unsigned NOT NULL,
    description 	varchar(256) NOT NULL
    )
