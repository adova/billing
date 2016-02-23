CREATE TABLE IF NOT EXISTS `packages` (
`id` int(11) NOT NULL,
  `package_name` varchar(128) NOT NULL,
  `ammount` decimal(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created` datetime NOT NULL COMMENT '0=Inactive,1=Active '
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `previous_packages`
--

CREATE TABLE IF NOT EXISTS `previous_packages` (
`id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `ammount` decimal(10,2) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
