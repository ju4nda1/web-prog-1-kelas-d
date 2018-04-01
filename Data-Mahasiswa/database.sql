create database crud_db;
 
use crud_db;
 
CREATE TABLE `users` (
  `nim` int(11) NOT NULL auto_increment,
  `name` varchar(100),
  `jurusan` varchar(100),
  `nim_mhs` varchar(15),
  PRIMARY KEY  (`nim`)
);