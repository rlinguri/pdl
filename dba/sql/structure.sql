BEGIN TRANSACTION;

CREATE TABLE 'structure' ('id' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 'parent' INTEGER, 'child' INTEGER, 'layout' INTEGER);

INSERT INTO structure (id, parent, child, layout) VALUES ('1', '0', '1', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('2', '0', '2', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('3', '2', '3', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('4', '2', '4', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('5', '3', '5', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('6', '3', '6', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('7', '3', '7', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('8', '3', '8', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('9', '3', '9', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('10', '3', '10', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('11', '3', '11', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('12', '3', '12', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('13', '4', '13', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('14', '4', '14', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('15', '4', '15', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('16', '4', '16', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('17', '4', '17', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('18', '4', '18', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('19', '13', '19', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('20', '15', '20', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('21', '14', '21', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('22', '19', '22', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('23', '20', '23', '0');
INSERT INTO structure (id, parent, child, layout) VALUES ('24', '3', '24', '0');
COMMIT;
