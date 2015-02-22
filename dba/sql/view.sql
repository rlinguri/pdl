BEGIN TRANSACTION;

CREATE TABLE view ('id' INTEGER PRIMARY KEY AUTOINCREMENT NOT NULL, 'tag' TEXT, 'attributes' TEXT, 'selfclose' BOOLEAN, 'html' TEXT);

INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('1',NULL,NULL,1,'<!DOCTYPE html>');
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('2','html','lang="en"',NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('3','head',NULL,NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('4','body','role="document"',NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('5','meta','http-equiv="content-type" content="text\/html; charset=UTF-8"',1,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('6','meta','charset="utf-8"',1,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('7','meta','name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"',1,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('8','title',NULL,NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('9','link','href="css\/bootstrap.min.css" rel="stylesheet"',1,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('10',NULL,NULL,1,'<!--[if lt IE 9]>');
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('11','script','src="http://html5shim.googlecode.com/svn/trunk/html5.js"',NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('12',NULL,NULL,1,'<![endif]-->');
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('13','nav','class="navbar navbar-inverse" role="navigation"',NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('14','div','class="container"',NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('15','footer','class="footer"',NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('16','script','src="js\/jquery.min.js"',NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('17','script','src="js\/bootstrap.min.js"',NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('18','script','src="js\/ie10-viewport-bug-workaround.js"',NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('19','div','class="container"',NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('20','p','class="text-muted"',NULL,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('21',NULL,NULL,1,'CONTAINER OBJECT PLACEHOLDER');
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('22',NULL,NULL,1,'NAV OBJECT PLACEHOLDER');
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('23',NULL,NULL,1,'FOOTER OBJECT PLACEHOLDER');
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('24','link','href="css\/sticky-footer-navbar.css" rel="stylesheet"',1,NULL);
INSERT INTO view (id, tag, attributes, selfclose, html) VALUES ('25',NULL,NULL,1,'Default Page Title');

COMMIT;
