-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 déc. 2025 à 01:50
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
-- Base de données : `skincare_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL,
  `extrait` text DEFAULT NULL,
  `categorie_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `publie` tinyint(1) NOT NULL DEFAULT 1,
  `vues` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `contenu`, `extrait`, `categorie_id`, `image`, `slug`, `publie`, `vues`, `created_at`, `updated_at`) VALUES
(1, '\"5 Erreurs de Nettoyage qui Abîment Votre Peau\"', '5 Erreurs de Nettoyage qui Abîment Votre Peau\r\n\r\nUn nettoyage inadapté du visage peut irriter, déshydrater et perturber la barrière cutanée, entraînant rougeurs, sécheresse ou excès de sébum. Ces pratiques courantes semblent innocentes mais aggravent souvent les problèmes cutanés à long terme. Adopter une routine douce préserve l\'équilibre naturel de la peau.[1][3][4][5]\r\n\r\n Erreur 1 : Frotter trop vigoureusement\r\nFrotter la peau avec force lors du nettoyage provoque irritations, ruptures capillaires et déshydratation, surtout sur les peaux sensibles. Utiliser un gant ou une serviette abrasive empire les choses en accumulant bactéries et en abîmant la barrière hydrolipidique. Préférez des mouvements circulaires doux avec les doigts.[3][5][7][1]\r\n\r\nErreur 2 : Utiliser de l\'eau trop chaude\r\nL\'eau chaude élimine les huiles naturelles, perturbant la barrière cutanée et stimulant la production de sébum. Cela assèche particulièrement les peaux sensibles ou sèches. Optez pour de l\'eau tiède pour un nettoyage respectueux.[4][5][1][3]\r\n\r\nErreur 3 : Choisir un nettoyant inadapté\r\nLes produits agressifs avec tensioactifs comme le SLS décapent l\'épiderme, quel que soit le type de peau. Les formules non adaptées à une peau grasse, sèche ou mixte causent tiraillements ou acné. Sélectionnez des nettoyants au pH neutre, comme huiles ou gelées douces.\r\n\r\n Erreur 4 : Se laver trop ou pas assez souvent\r\nUn lavage excessif dépouille les huiles protectrices, provoquant sécheresse et démangeaisons, tandis qu\'un nettoyage insuffisant obstrue les pores. Cela perturbe l\'équilibre pour tous les types de peau. Visez deux fois par jour maximum, matin et soir.[7][1][3][4]\r\n\r\nErreur 5 : Appliquer une lotion tonique agressive\r\nUne lotion contenant de l\'alcool irrite et assèche après le nettoyage, au lieu de parfaire l\'étape. Cela contrebalance les bénéfices du lavage doux. Choisissez des toniques doux sans alcool pour tonifier sans agresser.[2][5]', NULL, 1, 'articles/eugCIL67sVLPBJ6FQT1qFPuSZpuAM6S50nFtY3Xy.jpg', '5-erreurs-de-nettoyage-qui-abiment-votre-peau', 1, 2, '2025-11-28 20:17:02', '2025-11-30 19:17:07'),
(2, '\"Crème Visage : Comment Choisir Celle qu\'il Vous Faut Vraiment ?\"', 'Crème Visage : Comment Choisir Celle qu\'il Vous Faut Vraiment ?\r\n\r\nChoisir la bonne crème visage peut sembler complexe avec la multitude d\'options disponibles sur le marché. Que vous ayez une peau sèche, grasse, sensible ou mature, une crème adaptée peut faire toute la différence pour votre routine beauté. Cet article vous guide étape par étape pour identifier vos besoins et sélectionner le produit idéal, en vous basant sur des critères scientifiques et pratiques.\r\n\r\n1. Évaluez Votre Type de Peau\r\nAvant tout achat, il est essentiel de connaître votre type de peau. Cela influence directement les ingrédients et la texture de la crème.\r\n\r\nPeau sèche : Elle manque d\'hydratation et peut tirailler. Optez pour des crèmes riches en huiles (comme l\'huile d\'argan ou le beurre de karité) et en humectants (glycérine, hyaluronate de sodium).\r\nPeau grasse : Elle produit trop de sébum, causant des brillances et des boutons. Choisissez des formules légères, non comédogènes, avec des ingrédients matifiants comme l\'acide salicylique ou le zinc.\r\nPeau mixte : Zone T grasse, joues sèches. Une crème équilibrante avec des extraits d\'aloès ou de thé vert est idéale.\r\nPeau sensible : Elle réagit facilement (rougeurs, irritations). Privilégiez des crèmes hypoallergéniques, sans parfums, avec de la camomille ou de l\'allantoïne.\r\nPeau mature : Signes de vieillissement (rides, perte d\'élasticité). Recherchez des crèmes anti-âge avec du rétinol, de la vitamine C ou du collagène.\r\nAstuce : Testez votre peau en observant sa réaction après une douche (sans crème) pendant 30 minutes. Si elle est terne, elle est sèche ; si elle brille, elle est grasse.\r\n\r\n2. Identifiez Vos Besoins Spécifiques\r\nUne crème visage n\'est pas universelle. Pensez à vos préoccupations principales :\r\n\r\nHydratation : Pour une peau assoiffée, visez des crèmes avec de l\'acide hyaluronique, qui retient l\'eau jusqu\'à 1 000 fois son poids.\r\nAnti-âge : Les peptides et les antioxydants (vitamine E, niacinamide) aident à stimuler la production de collagène et à réduire les rides.\r\nAcné ou imperfections : Des ingrédients comme le peroxyde de benzoyle ou l\'acide glycolique exfoliants sont efficaces, mais consultez un dermatologue pour éviter les irritations.\r\nProtection solaire : Même en hiver, une crème avec SPF 30+ protège contre les UV, responsables du vieillissement prématuré.\r\nAutres : Pour les taches, optez pour de la vitamine C ; pour l\'éclat, du ginseng ou de l\'extrait de grenade.\r\n3. Considérez les Ingrédients et la Composition\r\nLisez la liste des ingrédients (INCI) sur l\'emballage. Les premiers sont les plus concentrés.\r\n\r\nIngrédients naturels : Huiles essentielles, extraits de plantes (comme le calendula pour apaiser).\r\nIngrédients synthétiques : Efficaces pour des résultats ciblés, mais vérifiez les allergies.\r\nÉvitez : Parabens (conservateurs controversés), sulfates (peuvent dessécher), et silicones (occlusifs mais non nourrissants).\r\nRecherchez des certifications comme \"cruelty-free\" (non testé sur animaux) ou \"vegan\" si cela vous importe.\r\n\r\n4. Tenez Compte des Facteurs Pratiques\r\nÂge et genre : Les crèmes pour hommes sont souvent plus légères ; celles pour femmes matures plus riches.\r\nBudget : Des options abordables (10-20 €) existent, mais les marques premium (50 €+) offrent des formules plus concentrées.\r\nTexture et application : Gel pour peau grasse, baume pour peau sèche, sérum pour un boost ciblé.\r\nMarque et avis : Consultez des sites comme Sephora ou des forums (Reddit, beauté française) pour des retours réels. Évitez les promesses miracles.\r\n5. Testez Avant d\'Acheter\r\nÉchantillons : Demandez des tests en magasin.\r\nPatch test : Appliquez une petite quantité derrière l\'oreille et attendez 24h pour vérifier les réactions.\r\nRoutine : Intégrez la crème dans votre routine (nettoyage, tonique, crème) et observez les résultats après 4-6 semaines.\r\nConclusion\r\nChoisir une crème visage revient à écouter votre peau et à prioriser la qualité sur la quantité. Commencez par une analyse simple de votre type de peau, puis affinez selon vos besoins. Si vous avez des problèmes persistants (eczéma, acné sévère), consultez un dermatologue pour des recommandations personnalisées. Avec ces conseils, vous trouverez la crème qui vous convient vraiment, pour une peau saine et éclatante !', NULL, 2, 'articles/WBCBTktDubuY2aYttc7659Ht4uGdj5kyDuWYiTNL.jpg', 'creme-visage-comment-choisir-celle-quil-vous-faut-vraiment', 1, 1, '2025-11-28 20:21:19', '2025-11-30 14:45:13'),
(3, '\"Rétinol : Le Guide Ultime du Débutant\"', 'Rétinol : Le Guide Ultime du Débutant\r\nLe rétinol est l\'un des ingrédients les plus populaires en dermatologie pour rajeunir la peau, traiter l\'acné et améliorer la texture. Mais pour les débutants, il peut sembler intimidant avec ses potentiels effets secondaires. Ce guide vous explique tout ce qu\'il faut savoir pour l\'utiliser en toute sécurité et efficacité, étape par étape.\r\n\r\nQu\'est-ce que le Rétinol ?\r\nLe rétinol est une forme de vitamine A, un dérivé de l\'acide rétinoïque (présent dans les prescriptions médicales comme le Retin-A). Il agit en accélérant le renouvellement cellulaire, stimulant la production de collagène et en régulant la production de sébum. Contrairement aux crèmes hydratantes classiques, il est actif et nécessite une adaptation progressive.\r\n\r\nTypes courants : Rétinol pur, rétinoïdes (plus forts, sur ordonnance), ou formes douces comme le rétinaldéhyde.\r\nBénéfices prouvés : Réduction des rides, amélioration de l\'éclat, traitement de l\'acné, uniformisation du teint. Des études (comme celles publiées dans le Journal of the American Academy of Dermatology) montrent une efficacité après 3-6 mois d\'usage régulier.\r\nPourquoi le Rétinol pour les Débutants ?\r\nSi vous débutez, le rétinol est idéal pour :\r\n\r\nCombattre les signes de vieillissement prématuré.\r\nTraiter les imperfections sans agressivité excessive.\r\nPréparer la peau à d\'autres traitements (comme les peelings).\r\nCependant, il n\'est pas recommandé pour les femmes enceintes ou allaitantes, les personnes sensibles au soleil, ou celles avec des problèmes cutanés graves (consultez un dermatologue).\r\n\r\nComment Commencer avec le Rétinol ?\r\nÉtape 1 : Préparez Votre Peau\r\nNettoyez et hydratez : Utilisez une routine douce. Évitez les exfoliants agressifs pendant les premières semaines.\r\nPatch test : Appliquez une petite quantité derrière l\'oreille ou sur l\'avant-bras. Attendez 24-48 heures pour vérifier les rougeurs ou irritations.\r\nProtection solaire : Le rétinol rend la peau plus sensible aux UV. Utilisez toujours un SPF 30+ le jour, même en hiver.\r\nÉtape 2 : Choisissez Votre Produit\r\nConcentration : Pour débutants, commencez par 0,1-0,3 % (comme dans les crèmes La Roche-Posay ou The Ordinary). Évitez les concentrations élevées (>1 %) au départ.\r\nForme : Crème pour peau sèche, gel pour peau grasse, sérum pour un traitement ciblé.\r\nPrix : De 10 € (marques génériques) à 50 € (premium). Vérifiez les ingrédients : rétinol encapsulé (plus doux) est préférable.\r\nAvis et certifications : Lisez les retours sur des sites comme Amazon ou des forums beauté. Optez pour des produits non comédogènes et hypoallergéniques.\r\nÉtape 3 : Appliquez-le Correctement\r\nFréquence : Commencez 2-3 fois par semaine, le soir seulement. Augmentez progressivement à tous les soirs après 4 semaines si toléré.\r\nQuantité : Une noisette pour le visage entier. Appliquez sur peau sèche, après le nettoyage.\r\nRoutine : Nettoyez → Tonifiez → Appliquez le rétinol → Hydratez avec une crème riche pour minimiser l\'irritation.\r\nDurée : Utilisez-le pendant 3-6 mois pour voir des résultats. Arrêtez si irritation persistante.\r\nEffets Secondaires et Comment les Gérer\r\nLe rétinol peut causer une \"purgation\" initiale : rougeurs, sécheresse, desquamation ou boutons temporaires. C\'est normal et dure 2-4 semaines.\r\n\r\nConseils : Hydratez abondamment (avec de l\'acide hyaluronique). Si trop irritant, réduisez la fréquence ou alternez avec une crème apaisante.\r\nQuand arrêter : En cas d\'éruption sévère, de gonflement ou de douleur. Consultez un médecin.\r\nPrécautions : Évitez de combiner avec d\'autres actifs forts (AHA/BHA) sans avis médical.\r\nErreurs Courantes à Éviter\r\nTrop, trop vite : Ne sautez pas les étapes – l\'adaptation est clé.\r\nIgnorer le soleil : Sans protection, vous risquez des taches pigmentaires.\r\nAcheter n\'importe quoi : Les produits bon marché peuvent être inefficaces ou irritants.\r\nEspérer des miracles : Le rétinol améliore, mais ne transforme pas radicalement la peau.\r\nConclusion\r\nLe rétinol est un allié puissant pour une peau plus jeune et saine, mais il demande patience et prudence. En suivant ce guide, vous minimiserez les risques et maximiserez les bénéfices. Si vous avez des doutes, un dermatologue peut personnaliser votre approche. Prêt à commencer ? Votre peau vous remerciera !', NULL, 3, 'articles/TqdXQ5do9F2QaMpsKJWcLOIGxsRdhEQ2ibKqfK6P.jpg', 'retinol-le-guide-ultime-du-debutant', 1, 1, '2025-11-28 20:24:57', '2025-11-30 14:07:22'),
(4, 'FPS 30, 50 : Que Signifient Vraiment ces Chiffres ?', 'FPS 30, 50 : Que Signifient Vraiment ces Chiffres ?\r\nLes crèmes solaires affichent souvent des chiffres comme FPS 30 ou 50, mais que signifient-ils vraiment ? Le Facteur de Protection Solaire (FPS, ou SPF en anglais) est essentiel pour protéger votre peau des rayons UV, responsables des coups de soleil, du vieillissement prématuré et même du cancer de la peau. Cet article décrypte ces valeurs, explique leur fonctionnement et vous aide à choisir le bon niveau de protection.\r\n\r\nQu\'est-ce que le FPS ?\r\nLe FPS mesure l\'efficacité d\'un écran solaire contre les rayons UVB, ceux qui causent les coups de soleil. Il indique combien de temps vous pouvez rester exposé au soleil sans brûler, comparé à une peau non protégée.\r\n\r\nCalcul du FPS : Si votre peau brûle après 10 minutes sans protection, un FPS 30 vous protège théoriquement 30 fois plus longtemps (soit 300 minutes). En réalité, c\'est une estimation – la protection dépend de facteurs comme le type de peau, l\'application et l\'activité.\r\nRayons couverts : Le FPS cible principalement les UVB, mais les écrans solaires modernes incluent aussi une protection contre les UVA (responsables du vieillissement). Cherchez des mentions comme \"large spectre\" pour une couverture complète.\r\nNormes : En Europe, les FPS sont réglementés (par exemple, FPS 50+ signifie au moins 50). Aux États-Unis, la FDA classe les FPS en catégories (faible, moyen, élevé).\r\nFPS 30 : Une Protection Solide pour la Vie Quotidienne\r\nLe FPS 30 est recommandé pour la plupart des gens et convient à une utilisation quotidienne ou modérée.\r\n\r\nNiveau de protection : Il bloque environ 97 % des rayons UVB. Idéal pour les promenades, le jardinage ou les sorties urbaines.\r\nAvantages : Léger, facile à appliquer, et souvent moins cher. Suffisant pour les peaux claires à moyennes qui ne brûlent pas facilement.\r\nLimites : Pas optimal pour les expositions prolongées (plage, sports en plein air) ou les peaux très sensibles. Réappliquez toutes les 2 heures, surtout après la transpiration ou la baignade.\r\nFPS 50 : Une Protection Maximale pour les Risques Élevés\r\nLe FPS 50 offre une barrière plus forte, parfaite pour les situations à haut risque solaire.\r\n\r\nNiveau de protection : Il bloque environ 98 % des rayons UVB (seulement 1 % de plus que le 30, mais significatif pour les peaux vulnérables). Utile pour les vacances à la plage, les randonnées ou les personnes à peau claire/famille à risque de cancer cutané.\r\nAvantages : Plus de sécurité contre les coups de soleil sévères et les dommages cumulés. Recommandé par des organisations comme l\'American Academy of Dermatology pour les enfants et les adultes sensibles.\r\nLimites : Texture parfois plus épaisse, coût plus élevé. N\'offre pas une protection \"totale\" – aucun FPS ne bloque 100 % des UV.\r\nFPS 30 vs. 50 : Quelle Différence Réelle ?\r\nLa différence entre 30 et 50 n\'est pas énorme en termes de pourcentage bloqué, mais elle compte pour les expositions intenses.\r\n\r\nEfficacité comparative : FPS 30 = protection de base ; FPS 50 = protection renforcée. Des études (comme celles de l\'Université de Yale) montrent que le FPS 50 réduit les risques de brûlures de 5-10 % de plus que le 30 dans des conditions extrêmes.\r\nQuand choisir 30 : Vie quotidienne, peau mate, faible exposition solaire.\r\nQuand choisir 50 : Peau claire, enfants, sports aquatiques, voyages ensoleillés, ou si vous avez des antécédents de mélanome.\r\nMythe à déboulonner : Un FPS plus élevé ne signifie pas rester plus longtemps au soleil sans risque. La protection diminue avec le temps, et les UVA passent toujours partiellement.\r\nComment Choisir et Utiliser Votre Écran Solaire ?\r\nSelon votre peau : Peau claire (phototype I-II) : FPS 50+. Peau mate (III-IV) : FPS 30 suffit souvent.\r\nType de produit : Crème pour le visage, spray pour le corps, stick pour les zones sensibles. Optez pour des formules résistantes à l\'eau si vous nagez.\r\nApplication : Appliquez généreusement (2 mg/cm², soit une cuillère à café pour le corps entier) 15-30 minutes avant l\'exposition. Réappliquez toutes les 2 heures, ou après sueur/eau.\r\nAutres conseils : Combinez avec des vêtements, chapeaux et ombre. Vérifiez la date d\'expiration et stockez à l\'abri de la chaleur.\r\nErreurs à éviter : Ne pas appliquer assez, oublier les zones (oreilles, cou), ou penser qu\'un FPS élevé dispense de précaution.\r\nConclusion\r\nLes chiffres FPS 30 et 50 indiquent une protection croissante contre les UVB, mais aucun n\'est infaillible. Le 30 est idéal pour le quotidien, tandis que le 50 est un must pour les risques élevés. Priorisez toujours une application correcte et une protection globale pour une peau saine.', NULL, 4, 'articles/13CBtNOTy7PTQEPLITEHdV3dHfiEIgcKb4ktf2a3.jpg', 'fps-30-50-que-signifient-vraiment-ces-chiffres', 1, 4, '2025-11-28 20:27:32', '2025-11-30 14:42:53');

-- --------------------------------------------------------

--
-- Structure de la table `article_ingredient`
--

CREATE TABLE `article_ingredient` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_id` bigint(20) UNSIGNED NOT NULL,
  `ingredient_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('skincare-guide-cache-nouhabelwaer82@gmail.com|127.0.0.1', 'i:2;', 1764526270),
('skincare-guide-cache-nouhabelwaer82@gmail.com|127.0.0.1:timer', 'i:1764526270;', 1764526270);

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`, `description`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Nettoyants & Démaquillants', 'Produits pour nettoyer la peau et éliminer les impuretés et le maquillage.', 'nettoyants-demaquillants', '2025-11-28 20:08:57', '2025-11-28 20:08:57'),
(2, 'Soins Hydratants', 'Crèmes, gels et lotions pour apporter hydratation et confort à la peau.', 'soins-hydratants', '2025-11-28 20:09:24', '2025-11-28 20:09:24'),
(3, 'Soins Anti-Âge', 'Produits ciblant les rides, les ridules et la fermeté de la peau.', 'soins-anti-age', '2025-11-28 20:09:51', '2025-11-28 20:09:51'),
(4, 'Protection Solaire', 'Crèmes et sprays pour protéger la peau des rayons UV.', 'protection-solaire', '2025-11-28 20:10:16', '2025-11-28 20:10:16'),
(5, 'Soins pour les Yeux', 'Produits spécifiquement formulés pour le contour délicat des yeux.', 'soins-pour-les-yeux', '2025-11-28 20:10:40', '2025-11-28 20:10:40'),
(6, 'Sérums & Concentrés Actifs', 'Soins intensifs ciblant des problématiques spécifiques comme les taches ou l\'éclat.', 'serums-concentres-actifs', '2025-11-28 20:11:27', '2025-11-28 20:11:27');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_ingredients`
--

CREATE TABLE `categorie_ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `lu` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `email`, `message`, `lu`, `created_at`, `updated_at`) VALUES
(1, 'Belwaer', 'nouhabelwaer82@gmail.com', 'bien site bien bien', 0, '2025-11-30 17:13:09', '2025-11-30 17:13:09');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ingredients`
--

CREATE TABLE `ingredients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `nom_scientifique` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `bienfaits` text NOT NULL,
  `utilisation` text DEFAULT NULL,
  `precautions` text DEFAULT NULL,
  `concentration` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `types_peau` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`types_peau`)),
  `actif` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `ingredients`
--

INSERT INTO `ingredients` (`id`, `nom`, `nom_scientifique`, `slug`, `type`, `bienfaits`, `utilisation`, `precautions`, `concentration`, `image`, `types_peau`, `actif`, `created_at`, `updated_at`) VALUES
(1, 'Niacinamide', 'Niacinamide (Vitamine B3)', 'niacinamide', 'Antioxydant', '-Réduit l\'apparence des pores dilatés\r\n\r\n-Régule la production de sébum (idéal pour les peaux grasses)\r\n\r\n-Uniformise le teint et atténue les taches pigmentaires\r\n\r\n-Renforce la barrière cutanée et améliore l\'hydratation\r\n\r\n-Anti-inflammatoire : aide à calmer les rougeurs et l\'acné légère', 'À appliquer matin et/ou soir sur une peau propre et sèche, avant la crème hydratante. Compatible avec la plupart des actifs (ex : acide hyaluronique), mais éviter de l\'associer à la vitamine C sous forme pure (risque d\'incompatibilité à pH différent).', 'Très bien toléré, convient même aux peaux sensibles. Aucune photosensibilisation. En cas de première utilisation, tester dans le pli du coude.', '5%', 'ingredients/nU1Jqbl2oVWcvKHoBE6H9jTpfKJyAU0oO4Ata28Z.jpg', '\"[\\\"Tous types\\\"]\"', 1, '2025-11-28 21:28:03', '2025-11-28 21:28:03'),
(2, 'Acide Hyaluronique', 'Hyaluronic Acid', 'acide-hyaluronique', 'Hydratant', '-Attire et retient jusqu\'à 1000 fois son poids en eau dans la peau.\r\n\r\n-Hydrate intensément les couches superficielles de l\'épiderme.\r\n\r\n-Lisse temporairement l\'apparence des ridules dues à la déshydratation.\r\n\r\n-Donne un effet \"peau repulpée\" et plus lumineuse.\r\n\r\n-Aide à calmer les sensations de tiraillement.', 'Appliqué sur une peau légèrement humide pour maximiser son efficacité. Utilisable matin et soir, avant votre crème hydratante. Se marie parfaitement avec tous les autres actifs.', 'Dans un air très sec (climat ou pièce chauffée), il peut potentiellement tirer l\'eau de la peau si elle n\'est pas correctement scellée avec une crème. Bien suivre avec un produit hydratant pour \"sceller\" l\'hydratation.', '0.1% - 2%', 'ingredients/FnujjVbn2dFkrEEMmLiM4m3QA0FCNA6n1rgRc864.jpg', '\"[\\\"Tous types\\\"]\"', 1, '2025-11-28 21:36:01', '2025-11-28 21:36:01'),
(3, 'Rétinol', 'Rétinol', 'retinol', 'Anti-âge', 'Accélère le renouvellement cellulaire pour un teint plus lisse et uniforme.\r\n\r\nStimule la production de collagène, réduisant l\'apparence des rides et ridules.\r\n\r\nAméliore la texture de la peau et l\'élasticité.\r\n\r\nAide à diminuer l\'hyperpigmentation et les marques d\'acné.', 'UNIQUEMENT le soir. Commencer par 1 à 2 applications par semaine sur peau sèche, en augmentant très progressivement la fréquence. Toujours associé à une crème hydratante pour limiter les irritations. L\'utilisation d\'un SPF le jour suivant est OBLIGATOIRE.', 'Peut causer des rougeurs, une desquamation et des irritations (\"rétinol uglies\") lors de la phase d\'adaptation. Déconseillé aux peaux très sensibles, rosacée, et aux femmes enceintes ou allaitantes. Éviter les associations avec d\'autres actifs agressifs (AHA/BHA, Vitamine C pure)', '0.01% - 1%', 'ingredients/T9fai92rA7JVuY1txsW3IprVlNGrGNssRukTFvaT.jpg', '\"[\\\"Normale\\\",\\\"Grasse\\\",\\\"Mixte\\\",\\\"Acn\\\\u00e9ique\\\"]\"', 1, '2025-11-28 21:39:26', '2025-11-28 21:39:26'),
(4, 'Acide Salicylique', 'Salicylic Acid', 'acide-salicylique', 'Exfoliant', '-Pénètre profondément dans les pores pour les dissoudre et les désobstruer.\r\n\r\n-Exfolie en douceur la surface de la peau et l\'intérieur des pores.\r\n\r\n-Réduit les points noirs, les boutons et les comédons.\r\n\r\n-Aide à calmer l\'inflammation liée à l\'acné.\r\n\r\n-Régule l\'excès de sébum.', 'Utilisé dans des nettoyants (contact court), toniques, sérums ou masques. Commencer par une application tous les deux jours, puis ajuster selon la tolérance. Idéal le soir.', 'Peut assécher ou irriter au début. Utiliser un écran solaire le jour suivant car l\'exfoliation rend la peau plus sensible au soleil. Ne pas sur-utiliser.', '0.5% - 2%', 'ingredients/dVYfoQLa4qHSudIxXQP2R9Q0G2muZrulJGPymYPD.jpg', '\"[\\\"Grasse\\\",\\\"Mixte\\\",\\\"Acn\\\\u00e9ique\\\"]\"', 1, '2025-11-28 21:43:50', '2025-11-28 21:43:50'),
(5, 'Vitamine C', 'Vitamine C (forme : Acide L-Ascorbique)', 'vitamine-c', 'Éclaircissant', 'Protège la peau des dommages des radicaux libres (pollution, UV).\r\n\r\nUniformise le teint et atténue les taches brunes.\r\n\r\nStimule la synthèse de collagène pour une peau plus ferme.\r\n\r\nDonne un éclat immédiat à la peau.', 'Idéalement le matin, après le nettoyage et avant la crème hydratante, pour booster la protection solaire. Attendre 5-10 minutes après application pour laisser le pH agir.', 'Peut être instable à la lumière et à l\'air (opter pour des emballages opaques et airless). Peut picoter légèrement les peaux sensibles. Peut s\'oxyder et jaunir, devenant alors inefficace.', '10% - 20%. 15%', 'ingredients/Q4fhemkfpFbD36S4Th0K6PNfUTqqd2nfVtZ9HruN.jpg', '\"[\\\"Normale\\\",\\\"S\\\\u00e8che\\\",\\\"Grasse\\\",\\\"Mixte\\\"]\"', 1, '2025-11-28 21:51:05', '2025-11-28 21:51:05'),
(6, 'Glycérine', 'Glycérine', 'glycerine', 'Hydratant', 'Humectant puissant qui attire l\'humidité dans la couche cornée de la peau.\r\n\r\nAide à maintenir la souplesse et la douceur de la peau.\r\n\r\nAméliore la fonction barrière de la peau.\r\n\r\nCompatible avec presque tous les types de peau et très bien tolérée.', 'Présente dans une multitude de produits (nettoyants, sérums, crèmes). Appliquer les produits qui en contiennent sur peau humide.', 'Aucune connue. C\'est l\'un des ingrédients les plus sûrs et les plus efficaces en cosmétique.', '2% - 20%', 'ingredients/U1mVQdcaPBb5JuerrEisJqahLxIezpekSexV1WmW.jpg', '\"[\\\"Tous types\\\"]\"', 1, '2025-11-28 21:53:47', '2025-11-28 21:53:47');

-- --------------------------------------------------------

--
-- Structure de la table `ingredient_categorie`
--

CREATE TABLE `ingredient_categorie` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ingredient_id` bigint(20) UNSIGNED NOT NULL,
  `categorie_ingredient_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '20251128_000000_create_categorie_ingredient_table', 1),
(5, '2025_11_26_205040_create_categories_table', 1),
(6, '2025_11_26_205040_create_types_peau_table', 1),
(7, '2025_11_26_205041_create_ingredients_table', 1),
(8, '2025_11_26_205042_create_articles_table', 1),
(9, '2025_11_26_205043_create_article_ingredient_table', 1),
(10, '2025_11_26_205043_create_routines_table', 1),
(11, '2025_11_26_205044_create_contacts_table', 1),
(12, '2025_11_27_151845_add_is_admin_to_users_table', 1),
(13, '2025_11_27_215820_create_ingredient_categorie_table', 1),
(14, '2025_11_28_022447_add_columns_to_types_peau_table', 1),
(15, '2025_11_28_194709_add_is_admin_to_users_table', 2),
(16, '2025_11_28_233458_add_actif_column_to_types_peau_table', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `routines`
--

CREATE TABLE `routines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type_peau_id` bigint(20) UNSIGNED NOT NULL,
  `titre` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `periode` enum('matin','soir','hebdomadaire') NOT NULL,
  `ordre` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('IU53Wg8O0ELKSfyAOwV52OVA3F6uOaG6rPUvM4vy', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/142.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUjBaSDY5bWZ3akJaaUxESnhXb1Y0VjlSRnZFQU9GellVNWdXaDBYbSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9kYXNoYm9hcmQiO3M6NToicm91dGUiO3M6MTU6ImFkbWluLmRhc2hib2FyZCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7fQ==', 1764547872);

-- --------------------------------------------------------

--
-- Structure de la table `types_peau`
--

CREATE TABLE `types_peau` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `erreurs_a_eviter` text DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `actif` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `is_admin` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `is_admin`) VALUES
(2, 'Administrateur', 'admin@skincare.com', NULL, '$2y$12$7xUUdmYXttfOaDsggE1db.mNwx85ypPI7tcHQc/x/7vISr4XlSpvi', 'pOXlDF20yFy30d7xgPTcZp4SBLRIDjRE9gkLC32oldM123UWv3wAFg8oGVnx', '2025-11-28 18:02:44', '2025-11-28 18:02:44', 'user', 0),
(3, 'Admin', 'admin@example.com', NULL, '$2y$12$I8yBVMwquKCBFYFdalCIzeu8MSWCvWGqiNrY6FagHJi9HQ6DmXp2e', 'VF13nVrKp6H29sMfWmXDQYQtMS5kvlzkQzinuDU0Itx3y5OOitsiMGJY6G0R', '2025-11-28 18:49:32', '2025-11-28 19:18:54', 'admin', 1),
(4, 'Nouha Belwaer', 'nouhabelwaer82@gmail.com', NULL, '$2y$12$ClE2J4iJ4hzsbbSqsloRZ.AnvcN0bEufoTA02ckmb7VANuZM1hace', NULL, '2025-11-30 17:11:42', '2025-11-30 17:11:42', 'user', 0);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `articles_slug_unique` (`slug`),
  ADD KEY `articles_categorie_id_foreign` (`categorie_id`);

--
-- Index pour la table `article_ingredient`
--
ALTER TABLE `article_ingredient`
  ADD PRIMARY KEY (`id`),
  ADD KEY `article_ingredient_article_id_foreign` (`article_id`),
  ADD KEY `article_ingredient_ingredient_id_foreign` (`ingredient_id`);

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Index pour la table `categorie_ingredients`
--
ALTER TABLE `categorie_ingredients`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `ingredients`
--
ALTER TABLE `ingredients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `ingredients_slug_unique` (`slug`);

--
-- Index pour la table `ingredient_categorie`
--
ALTER TABLE `ingredient_categorie`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ingredient_categorie_ingredient_id_foreign` (`ingredient_id`),
  ADD KEY `ingredient_categorie_categorie_ingredient_id_foreign` (`categorie_ingredient_id`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `routines`
--
ALTER TABLE `routines`
  ADD PRIMARY KEY (`id`),
  ADD KEY `routines_type_peau_id_foreign` (`type_peau_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `types_peau`
--
ALTER TABLE `types_peau`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `types_peau_slug_unique` (`slug`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `article_ingredient`
--
ALTER TABLE `article_ingredient`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `categorie_ingredients`
--
ALTER TABLE `categorie_ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `ingredients`
--
ALTER TABLE `ingredients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `ingredient_categorie`
--
ALTER TABLE `ingredient_categorie`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `routines`
--
ALTER TABLE `routines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `types_peau`
--
ALTER TABLE `types_peau`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `articles`
--
ALTER TABLE `articles`
  ADD CONSTRAINT `articles_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `article_ingredient`
--
ALTER TABLE `article_ingredient`
  ADD CONSTRAINT `article_ingredient_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `article_ingredient_ingredient_id_foreign` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `ingredient_categorie`
--
ALTER TABLE `ingredient_categorie`
  ADD CONSTRAINT `ingredient_categorie_categorie_ingredient_id_foreign` FOREIGN KEY (`categorie_ingredient_id`) REFERENCES `categorie_ingredients` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ingredient_categorie_ingredient_id_foreign` FOREIGN KEY (`ingredient_id`) REFERENCES `ingredients` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `routines`
--
ALTER TABLE `routines`
  ADD CONSTRAINT `routines_type_peau_id_foreign` FOREIGN KEY (`type_peau_id`) REFERENCES `types_peau` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
