-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 27, 2017 at 10:57 PM
-- Server version: 10.1.26-MariaDB-0+deb9u1
-- PHP Version: 7.0.19-1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog-p3-MVC`
--

-- --------------------------------------------------------

--
-- Table structure for table `Article`
--

CREATE TABLE `Article` (
  `id` int(10) NOT NULL,
  `author` text NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `resume` varchar(100) NOT NULL,
  `dateCreation` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Article`
--

INSERT INTO `Article` (`id`, `author`, `title`, `content`, `resume`, `dateCreation`) VALUES
(3, 'Jean Forteroche', 'Chapitre 1', '  Il y a huit mois environ, un de mes amis, Louis R..., avait réuni, un soir, quelques camarades de collège ; nous buvions du punch et nous fumions en causant littérature, peinture, et en racontant, de temps à autre, quelques joyeusetés, ainsi que cela se pratique dans les réunions de jeunes gens. Tout à coup la porte s\'ouvre toute grande et un de mes bons amis d\'enfance entre comme un ouragan. \"Devinez d\'où je viens, s\'écria-t-il aussitôt. - Je parie pour Mabille, répond l\'un, - non, tu es trop gai, tu viens d\'emprunter de l\'argent, d\'enterrer ton oncle, ou de mettre ta montre chez ma tante, reprend un autre. - Tu viens de te griser, riposte un troisième, et comme tu as senti le punch chez Louis, tu es monté pour recommencer. - Vous n\'y êtes point, je viens de P... en Normandie, où j\'ai été passer huit jours et d\'où je rapporte un grand criminel de mes amis que je vous demande la permission de vous présenter.\" A ces mots, il tira de sa poche une main d\'écorché ; cette main était affreuse, noire, sèche, très longue et comme crispée, les muscles, d\'une force extraordinaire, étaient retenus à l\'intérieur et à l\'extérieur par une lanière de peau parcheminée, les ongles jaunes, étroits, étaient restés au bout des doigts ; tout cela sentait le scélérat d\'une lieue. \"Figurez-vous, dit mon ami, qu\'on vendait l\'autre jour les défroques d\'un vieux sorcier bien connu dans toute la contrée ;', '', '2017-10-11 10:00:00'),
(4, 'Jean Forteroche', 'Chapitre 2', 'il allait au sabbat tous les samedis sur un manche à balai, pratiquait la magie blanche et noire, donnait aux vaches du lait bleu et leur faisait porter la queue comme celle du compagnon de saint Antoine. Toujours est-il que ce vieux gredin avait une grande affection pour cette main, qui, disait-il, était celle d\'un célèbre criminel supplicié en 1736, pour avoir jeté, la tête la première, dans un puits sa femme légitime, ce quoi faisant je trouve qu\'il n\'avait pas tort, puis pendu au clocher de l\'église le curé qui l\'avait marié. Après ce double exploit, il était allé courir le monde et dans sa carrière aussi courte que bien remplie, il avait détroussé douze voyageurs, enfumé une vingtaine de moines dans leur couvent et fait un sérail d\'un monastère de religieuses. - Mais que vas-tu faire de cette horreur ? nous écriâmes-nous. - Eh parbleu, j\'en ferai mon bouton de sonnette pour effrayer mes créanciers. - Mon ami, dit Henri Smith, un grand Anglais très flegmatique, je crois que cette main est tout simplement de la viande indienne conservée par le procédé nouveau, je te conseille d\'en faire du bouillon. - Ne raillez pas, messieurs, reprit avec le plus grand sang-froid un étudiant en médecine aux trois quarts gris, et toi, Pierre, si j\'ai un conseil à te donner, fais enterrer chrétiennement ce débris humain, de crainte que son propriétaire ne vienne te le redemander ;', '', '2017-10-14 10:00:00'),
(5, 'Jean Forteroche', 'Chapitre 3', 'et puis, elle a peut-être pris de mauvaises habitudes cette main, car tu sais le proverbe : \"Qui a tué tuera.\" - Et qui a bu boira\", reprit l\'amphitryon. Là-dessus il versa à l\'étudiant un grand verre de punch, l\'autre l\'avala d\'un seul trait et tomba ivre-mort sous la table. Cette sortie fut accueillie par des rires formidables, et Pierre élevant son verre et saluant la main : \"Je bois, dit-il, à la prochaine visite de ton maître\", puis on parla d\'autre chose et chacun rentra chez soi.\r\n    Le lendemain, comme je passais devant sa porte, j\'entrai chez lui, il était environ deux heures, je le trouvai lisant et fumant. \"Eh bien, comment vas-tu ? lui dis-je. - Très bien, me répondit-il. - Et ta main ? - Ma main, tu as dû la voir à ma sonnette où je l\'ai mise hier soir en rentrant, mais à ce propos figure-toi qu\'un imbécile quelconque, sans doute pour me faire une mauvaise farce, est venu carillonner à ma porte vers minuit ; j\'ai demandé qui était là, mais comme personne ne me répondait, je me suis recouché et rendormi.\" ', '', '2017-10-16 14:00:00'),
(6, 'Jean Forteroche', 'Chapitre 4', ' En ce moment, on sonna, c\'était le propriétaire, personnage grossier et fort impertinent. Il entra sans saluer. \"Monsieur, dit-il à mon ami, je vous prie d\'enlever immédiatement la charogne que vous avez pendue à votre cordon de sonnette, sans quoi je me verrai forcé de vous donner congé. - Monsieur, reprit Pierre avec beaucoup de gravité, vous insultez une main qui ne le mérite pas, sachez qu\'elle a appartenu à un homme fort bien élevé.\" Le propriétaire tourna les talons et sortit comme il était entré. Pierre le suivit, décrocha sa main et l\'attacha à la sonnette pendue dans son alcôve. \"Cela vaut mieux, dit-il, cette main, comme le \"Frère, il faut mourir\" des Trappistes, me donnera des pensées sérieuses tous les soirs en m\'endormant.\" Au bout d\'une heure je le quittai et je rentrai à mon domicile. ', '', '2017-10-18 12:00:00'),
(7, 'Jean Forteroche', 'Chapitre 5', '  Je dormis mal la nuit suivante, j\'étais agité, nerveux ; plusieurs fois je me réveillai en sursaut, un moment même je me figurai qu\'un homme s\'était introduit chez moi et je me levai pour regarder dans mes armoires et sous mon lit ; enfin, vers six heures du matin, comme je commençais à m\'assoupir, un coup violent frappé à ma porte, me fit sauter du lit ; c\'était le domestique de mon ami, à peine vêtu, pâle et tremblant. \"Ah monsieur ! s\'écria-t-il en sanglotant, mon pauvre maître qu\'on a assassiné.\" Je m\'habillai à la hâte et je courus chez Pierre. La maison était pleine de monde, on discutait, on s\'agitait, c\'était un mouvement incessant, chacun pérorait, racontait et commentait l\'événement de toutes les façons. Je parvins à grand-peine jusqu\'à la chambre, la porte était gardée, je me nommai, on me laissa entrer. Quatre agents de la police étaient debout au milieu, un carnet à la main, ils examinaient, se parlait bas de temps en temps et écrivaient ; deux docteurs causaient près du lit sur lequel Pierre était étendu sans connaissance. Il n\'était pas mort, mais il avait un aspect effrayant. Ses yeux démesurément ouverts, ses prunelles dilatées semblaient regarder fixement avec une indicible épouvante une chose horrible et inconnue, ses doigts étaient crispés, son corps, à partir du menton, était recouvert d\'un drap que je soulevai. Il portait au cou les marques de cinq doigts qui s\'étaient profondément enfoncés dans la chair, quelques gouttes de sang maculaient sa chemise. En ce moment une chose me frappa, je regardai par hasard la sonnette de son alcôve, la main d\'écorché n\'y était plus. Les médecins l\'avaient sans doute enlevée pour ne point impressionner les personnes qui entreraient dans la chambre du blessé, car cette main était vraiment affreuse. Je ne m\'informai point de ce qu\'elle était devenue. ', '', '2017-10-20 09:00:00'),
(8, 'Jean Forteroche', 'Chapitre 6', '  Je coupe maintenant, dans un journal du lendemain, le récit du crime avec tous les détails que la police a pu se procurer. Voici ce qu\'on y lisait :\r\n    \"Un attentat horrible a été commis hier sur la personne d\'un jeune homme, M. Pierre B..., étudiant en droit, qui appartient à une des meilleures familles de Normandie. Ce jeune homme était rentré chez lui vers dix heures du soir, il renvoya son domestique, le sieur Bouvin, en lui disant qu\'il était fatigué et qu\'il allait se mettre au lit. Vers minuit, cet homme fut réveillé tout à coup par la sonnette de son maître qu\'on agitait avec fureur. Il eut peur, alluma une lumière et attendit ; la sonnette se tut environ une minute, puis reprit avec une telle force que le domestique, éperdu de terreur, se précipita hors de sa chambre et alla réveiller le concierge, ce dernier courut avertir la police et, au bout d\'un quart d\'heure environ, deux agents enfonçaient la porte. Un spectacle horrible s\'offrit à leurs yeux, les meubles étaient renversés, tout annonçait qu\'une lutte terrible avait eu lieu entre la victime et le malfaiteur. Au milieu de la chambre, sur le dos, les membres raides, la face livide et les yeux effroyablement dilatés, le jeune Pierre B... gisait sans mouvement ; il portait au cou les empreintes profondes de cinq doigts. Le rapport du docteur Bourdeau, appelé immédiatement, dit que l\'agresseur devait être doué d\'une force prodigieuse et avoir une main extraordinairement maigre et nerveuse, car les doigts qui ont laissé dans le cou comme cinq trous de balle s\'étaient presque rejoints à travers les chairs. Rien ne peut faire soupçonner le mobile du crime, ni quel peut en être l\'auteur. La justice informe.\"\r\n    On lisait le lendemain dans le même journal : ', '', '2017-10-22 00:00:00'),
(9, 'Jean Forteroche', 'Chapitre 7', ' \"M. Pierre B..., la victime de l\'effroyable attentat que nous racontions hier, a repris connaissance après deux heures de soins assidus donnés par M. le docteur Bourdeau. Sa vie n\'est pas en danger, mais on craint fortement pour sa raison ; on n\'a aucune trace du coupable.\"\r\n    En effet, mon pauvre ami était fou ; pendant sept mois j\'allai le voir tous les jours à l\'hospice où nous l\'avions placé, mais il ne recouvra pas une lueur de raison. Dans son délire, il lui échappait des paroles étranges et, comme tous les fous, il avait une idée fixe, il se croyait toujours poursuivi par un spectre. Un jour, on vint me chercher en toute hâte en me disant qu\'il allait plus mal, je le trouvai à l\'agonie. Pendant deux heures, il resta fort calme, puis tout à coup, se dressant sur son lit malgré nos efforts, il s\'écria en agitant les bras et comme en proie à une épouvantable terreur : \"Prends-la ! prends-la ! Il m\'étrangle, au secours, au secours !\" Il fit deux fois le tour de la chambre en hurlant, puis il tomba mort, la face contre terre. ', '', '2017-10-24 11:00:00'),
(10, 'Jean Forteroche', 'Chapitre 8', 'Comme il était orphelin, je fus chargé de conduire son corps au petit village de P... en Normandie, où ses parents étaient enterrés. C\'est de ce même village qu\'il venait, le soir où il nous avait trouvés buvant du punch chez Louis R... et où il nous avait présenté sa main d\'écorché. Son corps fut enfermé dans un cercueil de plomb, et quatre jours après, je me promenais tristement avec le vieux curé qui lui avait donné ses premières leçons, dans le petit cimetière où l\'on creusait sa tombe. Il faisait un temps magnifique, le ciel tout bleu ruisselait de lumière, les oiseaux chantaient dans les ronces du talus, où bien des fois, enfants tous deux, nous étions venus manger des mûres. Il me semblait encore le voir se faufiler le long de la haie et se glisser par le petit trou que je connaissais bien, là-bas, tout au bout du terrain où l\'on enterre les pauvres, puis nous revenions à la maison, les joues et les lèvres noires de jus des fruits que nous avions mangés ; et je regardai les ronces, elles étaient couvertes de mûres ; machinalement j\'en pris une, et je la portai à ma bouche ; le curé avait ouvert son bréviaire et marmottait tout bas ses oremus, et j\'entendais au bout de l\'allée la bêche des fossoyeurs qui creusaient la tombe. Tout à coup, ils nous appelèrent, le curé ferma son livre et nous allâmes voir ce qu\'ils nous voulaient. Ils avaient trouvé un cercueil. ', '', '2017-10-25 14:00:00'),
(11, 'Jean Forteroche', 'Chapitre 9', 'D\'un coup de pioche, ils firent sauter le couvercle et nous aperçûmes un squelette démesurément long, couché sur le dos, qui, de son oeil creux, semblait encore nous regarder et nous défier ; j\'éprouvai un malaise, je ne sais pourquoi j\'eus presque peur. \"Tiens ! s\'écria un des hommes, regardez donc, le gredin a un poignet coupé, voilà sa main.\" Et il ramassa à côté du corps une grande main desséchée qu\'il nous présenta. \"Dis donc, fit l\'autre en riant, on dirait qu\'il te regarde et qu\'il va te sauter à la gorge pour que tu lui rendes sa main. - Allons mes amis, dit le curé, laissez les morts en paix et refermez ce cercueil, nous creuserons autre part la tombe de ce pauvre monsieur Pierre. ', '', '2017-10-27 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `Comment`
--

CREATE TABLE `Comment` (
  `id` int(10) NOT NULL,
  `author` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `resume` varchar(255) NOT NULL,
  `dateCreation` datetime NOT NULL,
  `id_article` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `Comment`
--

INSERT INTO `Comment` (`id`, `author`, `content`, `resume`, `dateCreation`, `id_article`) VALUES
(1, 'Lerna', 'Test num 1', '', '2017-10-25 10:00:00', 7);

-- --------------------------------------------------------

--
-- Table structure for table `User`
--

CREATE TABLE `User` (
  `id` int(10) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `prenom` varchar(100) NOT NULL,
  `mdp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `User`
--

INSERT INTO `User` (`id`, `mail`, `prenom`, `mdp`) VALUES
(1, 'plop@plop.fr', 'plop', 'plop');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Article`
--
ALTER TABLE `Article`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Comment`
--
ALTER TABLE `Comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_article` (`id_article`);

--
-- Indexes for table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Article`
--
ALTER TABLE `Article`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `Comment`
--
ALTER TABLE `Comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Comment`
--
ALTER TABLE `Comment`
  ADD CONSTRAINT `FK_id_ article_id` FOREIGN KEY (`id_article`) REFERENCES `Article` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
