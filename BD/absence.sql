  CREATE TABLE `absence` (
  `ID_abs` int(11) NOT NULL,
  `matiere` varchar(10) NOT NULL,
  `nbr` int(11) NOT NULL,
  `ID_eleve` int(11) NOT NULL
  )

INSERT INTO `absence` (`ID_abs`, `matiere`, `nbr`, `ID_eleve`) VALUES
(1, 'PHP', 2, 1),
(2, 'SQL', 1, 4),
(3, 'ANALYSE', 1, 1),
(4, 'PHP', 1, 2),
(5, 'CPP', 1, 3),
(6, 'ALGEBRE', 1, 5),
(7, 'ENGLISH', 1, 4),
(8, 'CPP', 1, 5),
(9, 'PYTHON', 2, 6);

  ALTER TABLE `absence`
  ADD PRIMARY KEY (`ID_abs`);

ALTER TABLE `absence`
  MODIFY `ID_abs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

COMMIT;