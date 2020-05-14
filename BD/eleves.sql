
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `eleves` (
  `ID_eleve` int(11) NOT NULL,
  `CNE` varchar(10) NOT NULL,
  `Nom` varchar(15) NOT NULL,
  `Prenom` varchar(15) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Ville` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `Photo` varchar(100) NOT NULL,
  `etat` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO `eleves` (`ID_eleve`, `CNE`, `Nom`, `Prenom`, `Adresse`, `Ville`, `email`, `Photo`, `etat`) VALUES
(1, 'S139022035', 'ACHAHBAR', 'ADNANE', 'ENSAT BP 1818', 'Tanger', 'ACHAHBAR@gmail.com', './photos/ACHAHBAR.png', 0),
(2, 'R142034631', 'ADRAOUI', 'KHAWLA', 'ENSAT BP1818', 'Tanger', 'Adraouikha@gmail.com', './photos/ADRAOUI.png', 0),
(3, 'Y758458453', 'AAAAAAA', 'AAAAAAA', 'ENSAT BP1418', 'Rabat', 'AAAAAAA@gmail.com', './photos/AAAAAAA.png', 0),
(4, 'A748524014', 'BBBBBBB', 'BBBBBBB', 'ENSAT BP1718', 'Fes', 'BBBBBBB@gmail.com', './photos/BBBBBBB.png', 0),
(5, 'K748562479', 'CCCCCCC', 'CCCCCCC', 'ENSAT BP1212', 'Casa', 'CCCCCCC@gmail.com', './photos/CCCCCCC.png', 0),
(6, 'B875498656', 'DDDDDDD', 'DDDDDDD', 'ENSAT BP1515', 'Oujda', 'DDDDDDD@gmail.com', './photos/DDDDDDD.png', 0);

ALTER TABLE `eleves`
  ADD PRIMARY KEY (`ID_eleve`,`CNE`);

ALTER TABLE `eleves`
  MODIFY `ID_eleve` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

COMMIT;