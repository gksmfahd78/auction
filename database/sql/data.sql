CREATE TABLE board (
    id int(11) unsigned NOT NULL AUTO_INCREMENT,
    name varchar(20) NOT NULL,
    pass varchar(20) NOT NULL,
    content text NOT NULL,
    wdate timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
    PRIMARY KEY(id)
) ENGINE=innoDB DEFAULT CHARSET=utf8;