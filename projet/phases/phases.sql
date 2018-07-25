-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 15 mars 2018 à 23:49
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `tennis`
--

-- --------------------------------------------------------

--
-- Structure de la table `phases`
--

-- DROP TABLE IF EXISTS `phases`;
-- CREATE TABLE IF NOT EXISTS `phases` (
--   `Nom` varchar(30) NOT NULL,
--   `Phase1` varchar(30) NOT NULL,
--   `Phase2` varchar(30) NOT NULL,
--   `Phase3` varchar(30) NOT NULL,
--   `Phase4` varchar(30) NOT NULL,
--   `Phase5` varchar(30) NOT NULL,
--   `Phase6` varchar(30) NOT NULL,
--   `Phase7` varchar(30) NOT NULL
-- ) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `phases`
--

INSERT INTO `phases` (`Nom`,`Phase1`, `Phase2`, `Phase3`, `Phase4`, `Phase5`, `Phase6`, `Phase7`) VALUES
('A.Murray       ', '6-6-6', '666', '6467', '7766', '647711', '',''),
('A.Bublik       ', '1-4-2', '', '', '', '','',''),
('J.Sousa        ', '6-6[5]-44', '', '', '', '', '',''),
('D.Brown        ', '37766', '322', '', '', '', '', ''),  
('J.Vesely       ', '64476', '6342', '', '', '', '', ''),     
('I.Marchenko    ', '16651', '', '', '', '', '', ''), 
('D.Tursunov     ', '133', '', '', '', '', '', ''),
('F.Fognini      ', '666', '7766', '2615', '', '', '', ''),
('N.Kyrgios      ', '34 ', '', '', '', '', '', ''),
('P.Herbert      ', '66 ', '6414', '', '', '', '', ''),
('R.Dutra Silva  ', '4-6-610-4', '', '', '', '', '', ''),
('B.Paire        ', '6376', '7766', '6776', '6144', '', '', '')  ,
('D.Shapovalov   ', '46362', '', '', '', '', '', ''),
('J.Janowicz     ', '63677', '777736', '2633', '', '', '', ''),
('M.Jaziri       ', '774462', '', '', '', '', '', ''),
('L.Pouille      ', '656677', '646561', '', '', '', '', ''),
('J-W.Tsonga     ', '666', '676', '266565', '', '', '', '') ,
('C.Norrie       ', '322', '', '', '', '', '', ''),
('S.Bolelli      ', '6166', '152', '', '', '', '', ''),
('Y-H.Lu         ', '3634', '', '', '', '', '', ''),
('C.Berlocq      ', '4631', '', '', '', '', '', ''),
('N.Basilashvili ', '6776', '4633', '', '', '', '', ''),
('T.Fabbiano     ', '6552', '', '', '', '', '', ''), 
('S.Querrey      ', '7776', '6466', '63717', '57766116', '36666', '784635', ''),
('F.Verdasco     ', '665683', '', '', '', '', '', ''),
('K.Anderson     ', '27776', '6776', '77677', '76537133', '', '', ''), 
('N.Gombos       ', '2621', '', '', '', '', '', ''), 
('A.Seppi        ', '6366', '3643', '', '', '', '', ''),  
('T.Haas GER     ', '2635', '', '', '', '', '', ''),
('R.Bemelmans    ', '6367', '66326', '6346', '', '', '', ''),
('D.Medvedev     ', '6366', '42663', '', '', '', '', ''),
('S.Wawrinka     ', '4641', '', '', '', '', '', ''),
('R.Nadal        ', '666', '667', '6677', '346613', '', '', ''),
('J.Millman      ', '132', '', '', '', '', '', ''), 		
('D.Young        ', '5664', '425', '', '', '', '', ''), 		
('D.Istomin      ', '7442', '', '', '', '', '', ''),		
('T.Monteiro     ', '467777', '665635', '', '', '', '', ''), 		
('A.Whittington  ', '63665', '', '', '', '', '', ''), 		
('An.Kuznetsov   ', '646362', '', '', '', '', '', ''),   
('K.Khachanov    ', '772616', '37777', '146', '', '', '', ''),   
('I.Karlovic     ', '776679676', '', '', '', '', '', ''), 	 
('A.Bedene       ', '65786798', '6366', '6454', '', '', '', ''),   
('D.Dzumhur      ', '666', '3633', '', '', '', '', ''),   
('R.Olivo        ', '201', '', '', '', '', '', ''),   
('L.Rosol        ', '4766', '579637', '', '', '', '', ''),   
('H.Laaksonen    ', '6534', '', '', '', '', '', ''),   
('M.Fucsovics    ', '542', '', '', '', '', '', ''),   
('G.Muller       ', '766', '767469', '7776', '663415', '666571', '', ''),   
('K.Nishikori    ', '666', '667678', '46363', '', '', '', ''),   
('M.Cecchinato   ', '220', '', '', '', '', '', ''),   
('J.Benneteau    ', '36862', '', '', '', '', '', ''),   
('S.Stakhovsky   ', '671026', '479166', '', '', '', '', ''),   
('P.Gojowczyk    ', '77266', '2163', '', '', '', '', ''),   
('M.Copil        ', '65631', '', '', '', '', '', ''),   
('A.Haider-Maurer', '312', '', '', '', '', '', ''),   
('R.Bautista Agut', '666', '6636', '67736', '222', '', '', ''),   
('S.Johnson      ', '676', '6646', '4634', '', '', '', ''),   
('N.Kicker       ', '453', '', '', '', '', '', ''),   
('F.Bagnis       ', '646963', '', '', '', '', '', ''),   
('R.Albot        ', '46777', '3363', '', '', '', '', ''),   
('V.Troicki      ', '1', '', '', '', '', '', ''),   
('F.Mayer        ', '6', '6245', '', '', '', '', ''),   
('P.Kohlschreiber', '423', '', '', '', '', '', ''),   
('M.Cilic        ', '666', '7767', '6776', '666', '378756', '66677', '314'),   
('M.Raonic       ','77677','37967','7767','47476','4264','',''),        
('J.Struff       ','6526','','','','','',''),        
('M.Youzhny      ','676','66745','','','','',''),       
('N.Mahut        ','254','','','','','',''),         
('A.Rublev       ','636717','578634','','','','',''),        
('S.Travaglia    ','773565','','','','','',''),     
('J.Thompson     ','4464','','','','','',''),      
('A.Ramos-Vinolas','667','766466','6345','','','',''), 
('J.Sock         ','64776','34662','','','','',''),          
('C.Garin        ','3663','','','','','',''),        
('T.Bellucci     ','232','','','','','',''),       
('S.Ofner        ','666','66326','442','','','',''), 		
('R.Haase        ','36655','437103','','','','',''), 		
('F.Tiafoe       ','6377','343','','','','',''), 			
('E.Donskoy      ','4633','','','','','',''), 		
('A.Zverev       ','6776','666','666','65651','','',''), 			
('G.Dimitrov     ','7766','666','66','424','','',''),       
('D.Schwartzman  ','6422','','','','','',''),    
('J.Ward         ','443','','','','','',''),           
('M.Baghdatis    ','666','321','','','','',''),      
('D.Sela         ','46166','65775776','11','','','',''),           
('M.Granollers   ','63621','','','','','',''),     
('T.Fritz        ','4633','','','','','',''),          
('J.Isner        ','6776','77657653','','','','',''),          
('M.Zverev       ','666','66236','6344','','','',''),         
('B.Tomic        ','434','','','','','',''),           
('M.Kukushkin    ','46776','12664','','','','',''),       
('T.Daniel       ','6462','','','','','',''),          
('S.Tsitsipas    ','444','','','','','',''),   
('D.Lajovic      ','666','6032','','','','',''), 
('A.Dolgopolov   ','30','','','','','',''), 
('R.Federer      ','63','7766','7766','666','667','77776','666'),  
('D.Thiem        ','666','5666','766','377363','','',''),  
('V.Pospisil     ','443','','','','','',''),  
('G.Simon        ','7766','7424','','','','',''),  
('N.Jarry        ','6433','','','','','',''),  
('J.Tipsarevic   ','0','','','','','',''),  
('J.Donaldson    ','5','67766','542','','','',''), 
('H.Zeballos     ','636685','','','','','',''),  
('P.Lorenzi      ','77477','46072','','','','',''),  
('R.Gasquet      ','3472','','','','','',''),  
('D.Ferrer       ','6656','3','343','','','',''),
('S.Darcis       ','46266','0','','','','',''),
('R.Berankis     ','63643','','','','','',''),
('B.Coric        ','64466','','','','','',''),
('R.Harrison     ','7767','','','','','',''),
('J.Chardy       ','36644','','','','','',''),
('T.Berdych      ','6376','6666','666','661636','772','64644',''), 
('G.Monfils      ','676','7766','636732','','','',''),  
('D.Brands       ','354','','','','','',''),
('K.Edmund       ','4666','6144','','','','',''),
('A.Ward         ','6321','','','','','',''),
('Y.Sugita       ','7766','176622','','','','',''),  
('B.Klein        ','6530','','','','','',''), 
('A.Mannarino    ','5664','654776','774566','2654','','',''),  
('F.Lopez        ','7113','','','','','',''),  
('J.Del          ','63776','4463','','','','',''), 
('T.Kokkinakis   ','3664','','','','','',''),  
('E.Gulbis       ','666','667','4162','','','',''),  
('V.Estrella     ','112','','','','','',''),  
('A.Pavlasek     ','67666','221','','','','',''),  
('E.Escobedo     ','79131','','','','','',''), 
('M.Klizan       ','30','','','','','',''),  
('N.Djokovic     ','62','666','667','6776','620','','');  

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
