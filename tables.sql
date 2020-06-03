
CREATE TABLE `node_tree` (
  `idNode` int(11) NOT NULL AUTO_INCREMENT,
  `level` int(11) NOT NULL,
  `iLeft` int(11) NOT NULL,
  `iRight` int(11) NOT NULL,
  PRIMARY KEY (`idNode`)
);


CREATE TABLE `node_tree_names"` (
  `idNode` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(255) NOT NULL,
  `nodeName` varchar(255) NOT NULL,
  PRIMARY KEY (`idNode`)
);

--------------------------------------------------------------

Relations:
node-tree <--1<>*--> node_tree_names

Nested Model: from 1 to 24

Marketing 2-3
Helpdesk 4-5
Managers 6-7
Customer Account 8-9
Docebo 1-24
Accounting 10-11
Sales 12-19
Italy 15-16
Europe 17-18
Developers 20-21
North America 13-14
Quality Assurance 22-23
