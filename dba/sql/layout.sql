BEGIN TRANSACTION;

CREATE TABLE 'layout' ('id' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 'name' TEXT);

INSERT INTO layout (id,name) VALUES ('1','jumbotron');
INSERT INTO layout (id,name) VALUES ('2','signin');
INSERT INTO layout (id,name) VALUES ('3','dashboard');

COMMIT;
