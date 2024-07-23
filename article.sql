-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 23 juil. 2024 à 11:48
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

CREATE TABLE `article` (
  `id` int(11) NOT NULL,
  `url_image` varchar(255) NOT NULL,
  `titre_image` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image_1` varchar(250) NOT NULL,
  `image_2` varchar(250) NOT NULL,
  `image_3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`id`, `url_image`, `titre_image`, `description`, `image_1`, `image_2`, `image_3`) VALUES
(1, 'https://prod-saint-gobain-fr.content.saint-gobain.io/sites/saint-gobain.fr/files/2020-07/01-style-de-jardin-chaque-envie-son-jardin.jpg', 'Rosiers malades : venez à bout de leurs ennemis !\r\n\r\n', 'Vos rosiers ne sont parfois pas en grande forme ? Les feuilles laissent apparaître des taches de couleur étranges ? Les fleurs ne s’ouvrent plus comme avant ? Il arrive qu’ils soient la cible d’insectes nuisibles ou de maladies causées par des champi', 'images/imageDescription/blog-jardin--rosier--pucerons--insectes-ejpeg.jpeg\r\n\r\n', 'http://127.0.0.1/mini-projet-blog-moustapha/images/imageDescription/blog-jardin--rosier--maladie--oi', 'http://127.0.0.1/mini-projet-blog-moustapha/images/imageDescription/blog-jardin--rosier--araignees-r'),
(2, 'http://127.0.0.1/mini-projet-blog-moustapha/images/blog-jardin-fleurs-juillet-7.jpeg', 'Que faire au jardin en juillet ?', 'L’arrivée du mois de juillet et de sa météo ensoleillée nous offre un magnifique décor au jardin, qu’il convient d’entretenir comme il se doit. Binage, taille, arrosage…ce n’est pas le moment de relâcher vos efforts. Zoom sur les travaux à réaliser !\r\nQue planter et semer au mois de juillet ?\r\nOn l’oublie souvent, mais le mois de juillet est la période idéale pour préparer l’automne. Alors à vos transplantoirs, c’est le moment de :  \r\n\r\n👩🏻‍🌾 Planter de petits bulbes à floraison d’automne tels que les cyclamens de Naples, les colchiques et les amaryllis.\r\n\r\n👩🏻‍🌾Semer en pleine terre des bisannuelles (fleur dont le cycle de végétation évolue sur 2 ans) qui fleuriront à l’automne ou au printemps prochain. Au choix : myosotis, pâquerettes ou encore giroflées. Des vivaces comme les roses trémières pour une floraison attendue l’année suivante.*\r\n\r\nL’entretien au jardin en juillet : taille et arrosage\r\nLe mois de juillet marque le début de la saison estivale qui peut être éprouvante pour votre jardin selon la chaleur. Pour éviter de retrouver votre jardin en déclin, retrouvez tous nos conseils :\r\n\r\n ', 'http://127.0.0.1/mini-projet-blog-moustapha/images/imageDescription/blog-entretien-potager-verger-ju', 'http://127.0.0.1/mini-projet-blog-moustapha/images/imageDescription/blog-entretien-potager-verger-ju', 'http://127.0.0.1/mini-projet-blog-moustapha/images/imageDescription/blog-eclairage-jardin-vegetaux-.'),
(3, 'images/blog-graines,-fleurs-des-champs-.jpeg', 'Quand et comment semer des graines de fleurs ?', 'Pour les jardiniers du dimanche, semer ses premières fleurs est une première étape qui vous fera d’autant plus apprécier votre temps passé au jardin. Que ce soit pour donner une ambiance champêtre à votre jardin, ou bien pour créer une prairie fleuri', 'images/imageDescription/blog-preparer-le-sol-.jpeg\r\n\r\n', 'images/imageDescription/blog-semer-des-graines.jpeg', 'images/imageDescription/blog-arroser-en-pluie-fine.jpeg'),
(4, 'images/blog-Jardin,-gestes,-hiver,-taille,-arbus.jpeg', 'Les bons gestes pour entretenir son jardin en hiver', 'Les feuilles d’automne recouvrent votre sol ? Ne cherchez plus, l’hiver s’apprête à pointer le bout de son nez… Votre jardin a besoin de vous pour appréhender la baisse des températures. Nous vous confions nos bons gestes pour entretenir votre jardin. \r\nCommençons par le jardin\r\n🌿 C’est le moment de remettre votre jardin complétement au propre ! Commencez par tailler les fanes de vos vivaces. Leurs tiges herbacées reprendront tranquillement au printemps. Profitez-en pour ramasser toutes les feuilles mortes. Eh oui, après le passage de l’automne, vous avez forcément un beau tapis de feuilles mortes sur votre terrain. Si vous ne les ramasser pas, elles risquent de pourrir et donc d’endommager votre gazon. Ratissez régulièrement votre jardin jusqu’à ce que les feuilles ne cessent de tomber. Vous pouvez ensuite les évacuer en déchèterie mais chez Draw Me A Garden, on préfère les garder… Offrez leur une nouvelle vie dans votre compost, votre jardin vous remerciera !\r\n\r\n ', 'images/imageDescription/blog-gestes--jardin--hiver--geranium-pelargonium--interieu.jpeg', 'images/imageDescription/blog-legumes--potager--jardin--gestes--hiver-jpeg.jpeg', 'images/imageDescription/blog-gestes--jardin--hiver--paillage-jpeg.jpeg'),
(5, 'images/blog-Saints-de-Glace,-froid,-.jpeg', 'Les Saints de Glace en 3 questions', 'Vous avez dû entendre parler des Saints de Glace ? Oui mais de quoi s’agit-il vraiment ? C’est justement ce que nos experts vont vous expliquer. Vous saurez tout sur cette période du mois de mai. Votre jardin n’aura, quant à lui, rien à craindre avec', 'images/imageDescription/blog-saints-de-glace--gel--histoire-.jpeg', 'images/imageDescription/blog-saints-de-glace--froid--gel.jpeg', 'images/imageDescription/blog-saints-de-glace--froid--gel--jardin-.jpeg'),
(6, 'images/blog-graines,-fleurs-des-champs-.jpeg', 'Que faire au jardin au printemps ?', 'Vous vous demandez que faire au jardin au printemps ? Les températures augmentent et il fait petit à petit bien plus doux au jardin, le temps est idéal pour jardiner ! Mais comment appréhender l’arrivée des beaux jours au jardin ? Nous vous partageons tous nos conseils et astuces pour vos travaux de jardinage du printemps !\r\nQue faire au printemps : nettoyer son jardin !\r\nL’heure du grand nettoyage de printemps a sonné ! \r\n\r\nUne fois les giboulées de mars passées, il est temps de nettoyer le jardin. Débuter la saison printanière avec un jardin propre et net permettra à vos plantations de bien mieux s’épanouir.\r\n\r\nVous pouvez commencer par retirer les dernières feuilles mortes de votre gazon et effectuer la première tonte du printemps, celle-ci offrira une bouffée d’air frais à votre pelouse qui respirera mieux ! \r\n\r\nProfitez-en pour retirer la mousse et les mauvaises herbes qui se sont incrustées dans bien des recoins du jardin afin d’éviter la prolifération des maladies. Cela permettra à vos végétaux de se régénérer en puisant le maximum de nutriments. Ce désherbage est d’autant plus important du côté du potager, afin de préparer la terre à accueillir vos légumes du printemps.\r\n\r\nVos massifs et arbustes qui fleuriront à l’été apprécieront une taille de nettoyage printanière, pensez donc à ôter les branches et tiges mortes.\r\n\r\nLes rosiers et vivaces qui ont souffert du gel auront plus de chances de fleurir à nouveau avec une légère taille. \r\n\r\nVous souhaitez de délicieux fruits frais du jardin dès l’été, prenez soin de vos arbres fruitiers ! Taillez-les pour favoriser les nouvelles pousses. Munissez-vous d’un sécateur, et allégez vos arbres de quelques bois morts, cette taille permettra d’équilibrer le poids des branches.\r\n\r\nSi vous avez la chance d’avoir un petit point d’eau comme un bassin, c’est le moment de le nettoyer en ôtant les feuilles mortes et tout résidus tombés durant l’hiver.\r\n\r\nCôté nettoyage, profitez de ces quelques jours de beaux temps pour opérer le nettoyage de tous vos outils de jardin afin d’être opérationnel pour le printemps !', 'images/imageDescription/blog-fleurs-blanches-crocus-blancs-printemps.jpeg', 'images/imageDescription/blog-nettoyage-printemps-jardin-.jpeg', 'images/imageDescription/blog-jardin-printemps-preparation-sol-.jpeg'),
(7, 'images/blog-bruyere,-neige,-hiver-jpeg.jpeg', 'Comment avoir un beau jardin en hiver ?', 'Qui a dit que l\'hiver rendait le jardin triste ? Ouvrons-nous à un spectacle plus captivant lorsque les températures se mettent à décliner. Eh oui, la beauté de la nature traverse les saisons… Découvrez notre sélection de végétaux Draw Me A Garden pour avoir un beau jardin en hiver.*\r\nL\'hiver est la période où le jardin s\'endort pour se réveiller plus resplendissant que jamais aux beaux jours. C\'est pourtant aussi le meilleur moment d\'y observer des végétaux plus surprenants, plus délicats…\r\n\r\nEn effet, pour avoir un beau jardin en hiver, le choix de vos plantes doit être méticuleux. Certaines d\'entre elles ont un réel impact visuel apportant un nouveau souffle de couleur à votre jardin même quand il s\'est habillé d\'un manteau blanc... Il suffit de trouver les plantes qui vous conviennent et qui apporteront un intérêt visuel et botanique tout au long de l\'année.\r\n\r\nUne fois que vous avez fait place nette en coupant les vivaces, taillant les arbustes et tous les autres travaux du jardin, il est temps d\'en profiter ! Votre extérieur évolue en laissant place à une palette de teintes incroyable. \r\n\r\nDes petites fleurs se font une place dans le décor en formant des tapis apportant une pointe de féérie, et les écorces se dévoilent petit à petit…\r\n\r\nPartons à la découverte de notre sélection Draw Me A Garden de fleurs et arbustes préférés pour vous créer un beau jardin en hiver. ❄️', 'images/imageDescription/blog-arbustes--hiver--jardinjpeg.jpeg', 'images/imageDescription/blog-fleurs--hiver--jardin.jpeg', ''),
(16, 'image/blog-jardin-fleurs-jullet-7.jpeg', 'yfuoifofpf', 'wdshrqshrqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqqq', 'image/blog-jardin-fleurs-jullet-7.jpeg', 'image/blog-jardin-fleurs-jullet-7.jpeg', 'image/blog-jardin-fleurs-jullet-7.jpeg');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `article`
--
ALTER TABLE `article`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
