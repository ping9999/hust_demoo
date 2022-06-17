
CREATE TABLE `Post` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `img` date NOT NULL,
 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;



CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `date` date(6) NOT NULL,
  `diadiem` varchar(255) NOT NULL,
  `img` blob NOT NULL
 
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `post`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

  ALTER TABLE `Post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

  ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

  ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
  
  