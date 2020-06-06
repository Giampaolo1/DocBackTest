-- Relations:
-- node-tree <--1<>*--> node_tree_names
--
-- Nested Model: from 1 to 24
--
-- Marketing 2-3
-- Helpdesk 4-5
-- Managers 6-7
-- Customer Account 8-9
-- Docebo 1-24
-- Accounting 10-11
-- Sales 12-19
-- Italy 15-16
-- Europe 17-18
-- Developers 20-21
-- North America 13-14
-- Quality Assurance 22-23

---------------------------------------

--
-- Table structure for table `node_tree`
--

CREATE TABLE `node_tree` (
  `idNode` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  `iLeft` int(11) NOT NULL,
  `iRight` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Table structure for table `node_tree_names`
--

CREATE TABLE `node_tree_names` (
  `id` int(11) NOT NULL,
  `idNode` int(11) NOT NULL,
  `language` varchar(255) NOT NULL,
  `nodeName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `node_tree`
--
ALTER TABLE `node_tree`
  ADD PRIMARY KEY (`idNode`);

--
-- Indexes for table `node_tree_names`
--
ALTER TABLE `node_tree_names`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idNode` (`idNode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `node_tree`
--
ALTER TABLE `node_tree`
  MODIFY `idNode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `node_tree_names`
--
ALTER TABLE `node_tree_names`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `node_tree_names`
--
ALTER TABLE `node_tree_names`
  ADD CONSTRAINT `node_tree_names_ibfk_1` FOREIGN KEY (`idNode`) REFERENCES `node_tree` (`idNode`);
COMMIT;
