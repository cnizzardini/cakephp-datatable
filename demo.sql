--
-- Table structure for table `states`
--

CREATE TABLE IF NOT EXISTS `states` (
  `id` smallint(2) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL DEFAULT '',
  `abbrev` char(2) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `abbrev` (`abbrev`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Dumping data for table `states`
--

INSERT INTO `states` (`id`, `abbrev`, `name`) VALUES
(1, 'AK', 'Alaska'),
(2, 'AL', 'Alabama'),
(3, 'AR', 'Arkansas'),
(4, 'AZ', 'Arizona'),
(5, 'CA', 'California'),
(6, 'CO', 'Colorado'),
(7, 'CT', 'Connecticut'),
(8, 'DC', 'District of Columbia'),
(9, 'DE', 'Deleware'),
(10, 'FL', 'Florida'),
(11, 'GA', 'Georgia'),
(13, 'HI', 'Hawaii'),
(14, 'IA', 'Iowa'),
(15, 'ID', 'Idaho'),
(16, 'IL', 'Illinois'),
(17, 'IN', 'Indiana'),
(18, 'KS', 'Kansas'),
(19, 'KY', 'Kentucky'),
(20, 'LA', 'Louisiana'),
(21, 'MA', 'Massachusetts'),
(22, 'ME', 'Maine'),
(23, 'MD', 'Maryland'),
(24, 'MI', 'Michigan'),
(25, 'MN', 'Minnesota'),
(26, 'MO', 'Missouri'),
(27, 'MS', 'Mississippi'),
(28, 'MT', 'Montana'),
(29, 'NC', 'North Carolina'),
(30, 'ND', 'North Dakota'),
(31, 'NE', 'Nebraska'),
(32, 'NH', 'New Hampshire'),
(33, 'NJ', 'New Jersey'),
(34, 'NM', 'New Mexico'),
(35, 'NV', 'Nevada'),
(36, 'NY', 'New York'),
(37, 'OH', 'Ohio'),
(38, 'OK', 'Oklahoma'),
(39, 'OR', 'Oregon'),
(40, 'PA', 'Pennsylvania'),
(42, 'RI', 'Rhode Island'),
(43, 'SC', 'South Carolina'),
(44, 'SD', 'South Dakota'),
(45, 'TN', 'Tennessee'),
(46, 'TX', 'Texas'),
(47, 'UT', 'Utah'),
(48, 'VA', 'Virginia'),
(50, 'VT', 'Vermont'),
(51, 'WA', 'Washington'),
(52, 'WI', 'Wisconsin'),
(53, 'WV', 'West Virginia'),
(54, 'WY', 'Wyoming');