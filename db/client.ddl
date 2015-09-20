CREATE TABLE client ( 
    client_id 		int PRIMARY KEY NOT NULL AUTO_INCREMENT, 
    client_name 	varchar(64) NOT NULL, 
    full_name 		varchar(32) NOT NULL, 
    age 		int(4) unsigned NOT NULL, 
    sex 		tinyint(1) unsigned NOT NULL, 
    postal_code 	int(7) unsigned NOT NULL, 
    address 		varchar(128) NOT NULL, 
    passward 		varchar(64) NOT NULL
)
