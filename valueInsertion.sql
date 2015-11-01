/*Applicants*/
INSERT INTO applicant VALUES('Ruo','Chen','chen.ruo@hotmail.com','helloworld','23','90042203','Female','14-APR-92','Chinese',NULL);
INSERT INTO applicant VALUES('RenFei','Wang','wangrenfei1991@gmail.com','applepie','24','91032301','Male','11-SEP-91','Chinese',NULL);

/*Employer*/
INSERT INTO employer VALUES('a0099726@u.nus.edu','12345','National University of Singapore','60000000',NULL,000000,'University','Lower Kent Ridge','Education');
INSERT INTO employer VALUES('a0101002@u.nus.edu','54321','Bank of China','61000000',NULL,000001,'Finance','4 Battery Road','Banking');
INSERT INTO employer VALUES('a0101973@u.nus.edu','hihi','Hewlett-Packard', '62000000', NULL, 000002, 'IT', 'Singapore', 'IT');
INSERT INTO employer VALUES('hihi@hi.com','hi','Hihihi!','63100000',NULL,000003,'hi','Hi Road','Hi');

/*Job*/
INSERT INTO jobs VALUES('1','Permanent','a0099726@u.nus.edu','IT','Degree','C++',NULL);
INSERT INTO jobs VALUES('2','Permanent','a0101002@u.nus.edu','Finance','Degree','Banking background','Secretary');
INSERT INTO jobs VALUES('3','Permanent','a0101002@u.nus.edu','Finance','Degree','Banking background','Admin');
INSERT INTO jobs VALUES('1','Permanent','a0101973@u.nus.edu','IT','Degree','Banking background',NULL);
INSERT INTO jobs VALUES('2','Permanent','a0101973@u.nus.edu','IT','Degree','Banking background','Secretary');
INSERT INTO jobs VALUES('3','Permanent','a0101973@u.nus.edu','IT','Degree','Banking background','Admin');
INSERT INTO jobs VALUES('5','Permanent','a0101973@u.nus.edu','IT','Degree','Banking background','Staff');

/*Applicants information*/
insert into information values('chen.ruo@hotmail.com',90042203,NULL,'Degree','C++','Java','Admin','IT','Avaliable',NULL,NULL);
insert into information values('wangrenfei1991@gmail.com',NULL,NULL,'Degree','Python',NULL,'Admin','IT','Avaliable',NULL,NULL);
