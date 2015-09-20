CREATE TABLE purchase_history (
    purchase_history_id	int(10) unsigned PRIMARY KEY NOT NULL AUTO_INCREMENT,
    client_id 		int(10) unsigned NOT NULL,
    product_id 		int(10) unsigned NOT NULL,
    purchase_number 	int(10) unsigned NOT NULL,
    purchase_datetime 	datetime NOT NULL
    )
