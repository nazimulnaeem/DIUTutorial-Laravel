-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 06, 2019 at 04:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(1, 'English', 'english', 'english-2019-05-02-5cca60f027eb1.jpg', '2019-04-17 09:04:15', '2019-05-01 21:16:00'),
(2, 'Physics', 'physics', 'physics-2019-05-02-5cca60dd5f2b7.jpg', '2019-04-17 09:05:01', '2019-05-01 21:15:41'),
(3, 'Mathematics', 'mathematics', 'mathematics-2019-05-02-5cca60c916309.jpg', '2019-04-17 09:06:21', '2019-05-01 21:15:21'),
(4, 'CSE', 'cse', 'cse-2019-05-02-5cca60a8c89b8.jpg', '2019-04-17 09:08:24', '2019-05-01 21:14:49'),
(5, 'Biology', 'biology', 'biology-2019-05-02-5cca60949dd76.jpg', '2019-04-17 09:08:49', '2019-05-01 21:14:28'),
(6, 'Business', 'business', 'business-2019-05-02-5cca6076e1f33.jpg', '2019-04-17 09:10:23', '2019-05-01 21:13:59'),
(7, 'Networking', 'networking', 'networking-2019-05-02-5cca605b77be3.png', '2019-04-17 09:10:39', '2019-05-01 21:13:31'),
(8, 'Database', 'database', 'database-2019-05-02-5cca60285fc8e.png', '2019-04-17 09:11:00', '2019-05-01 21:12:40'),
(9, 'Programming', 'programming', 'programming-2019-05-02-5cca601503fb6.jpg', '2019-04-17 09:12:26', '2019-05-01 21:12:21'),
(10, 'Others', 'others', 'others-2019-05-02-5cca5ffb95276.jpg', '2019-04-17 09:12:38', '2019-05-01 21:11:55');

-- --------------------------------------------------------

--
-- Table structure for table `category_post`
--

CREATE TABLE `category_post` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_post`
--

INSERT INTO `category_post` (`id`, `post_id`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 20, 4, '2019-04-25 08:50:45', '2019-04-25 08:50:45'),
(3, 21, 4, '2019-04-28 22:47:40', '2019-04-28 22:47:40'),
(4, 22, 4, '2019-04-28 22:59:04', '2019-04-28 22:59:04'),
(5, 23, 4, '2019-04-28 23:01:30', '2019-04-28 23:01:30'),
(6, 24, 4, '2019-04-28 23:03:17', '2019-04-28 23:03:17'),
(7, 27, 4, '2019-04-28 23:12:08', '2019-04-28 23:12:08'),
(8, 28, 4, '2019-04-28 23:14:42', '2019-04-28 23:14:42'),
(9, 29, 4, '2019-04-30 08:45:02', '2019-04-30 08:45:02'),
(10, 30, 4, '2019-04-30 08:46:06', '2019-04-30 08:46:06'),
(11, 31, 4, '2019-04-30 08:47:04', '2019-04-30 08:47:04'),
(12, 32, 4, '2019-04-30 08:48:11', '2019-04-30 08:48:11'),
(13, 33, 4, '2019-04-30 08:49:00', '2019-04-30 08:49:00'),
(14, 34, 4, '2019-04-30 08:53:32', '2019-04-30 08:53:32'),
(17, 35, 9, '2019-05-01 21:20:55', '2019-05-01 21:20:55'),
(18, 36, 3, '2019-05-02 09:38:52', '2019-05-02 09:38:52'),
(19, 37, 3, '2019-05-02 09:43:42', '2019-05-02 09:43:42'),
(20, 38, 3, '2019-05-02 09:46:23', '2019-05-02 09:46:23'),
(21, 39, 4, '2019-05-02 09:49:21', '2019-05-02 09:49:21'),
(22, 40, 4, '2019-05-02 09:51:47', '2019-05-02 09:51:47'),
(23, 41, 4, '2019-05-02 09:54:27', '2019-05-02 09:54:27'),
(24, 42, 1, '2019-05-02 10:00:22', '2019-05-02 10:00:22'),
(25, 43, 2, '2019-05-02 10:08:52', '2019-05-02 10:08:52'),
(26, 44, 4, '2019-05-02 10:15:34', '2019-05-02 10:15:34'),
(27, 45, 3, '2019-05-02 10:20:47', '2019-05-02 10:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `category_question`
--

CREATE TABLE `category_question` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_question`
--

INSERT INTO `category_question` (`id`, `question_id`, `category_id`, `created_at`, `updated_at`) VALUES
(7, 1, 4, '2019-04-25 11:32:31', '2019-04-25 11:32:31'),
(8, 1, 9, '2019-04-25 11:32:31', '2019-04-25 11:32:31'),
(9, 2, 10, '2019-04-29 10:43:55', '2019-04-29 10:43:55'),
(10, 3, 4, '2019-04-29 10:46:12', '2019-04-29 10:46:12'),
(11, 3, 7, '2019-04-29 10:46:12', '2019-04-29 10:46:12'),
(12, 4, 4, '2019-04-29 10:48:02', '2019-04-29 10:48:02'),
(13, 4, 8, '2019-04-29 10:48:02', '2019-04-29 10:48:02'),
(14, 5, 4, '2019-04-29 10:53:57', '2019-04-29 10:53:57'),
(15, 5, 7, '2019-04-29 10:53:57', '2019-04-29 10:53:57'),
(16, 5, 8, '2019-04-29 10:53:57', '2019-04-29 10:53:57'),
(17, 5, 10, '2019-04-29 10:53:57', '2019-04-29 10:53:57'),
(18, 6, 4, '2019-04-29 11:01:53', '2019-04-29 11:01:53'),
(19, 6, 9, '2019-04-29 11:01:53', '2019-04-29 11:01:53'),
(20, 7, 4, '2019-04-29 11:03:58', '2019-04-29 11:03:58'),
(21, 8, 4, '2019-04-29 11:06:33', '2019-04-29 11:06:33'),
(24, 10, 1, '2019-04-29 11:11:54', '2019-04-29 11:11:54'),
(25, 11, 4, '2019-04-29 11:12:35', '2019-04-29 11:12:35'),
(26, 11, 9, '2019-04-29 11:12:35', '2019-04-29 11:12:35'),
(27, 12, 3, '2019-04-29 11:15:56', '2019-04-29 11:15:56'),
(28, 13, 2, '2019-04-29 11:23:02', '2019-04-29 11:23:02'),
(29, 14, 4, '2019-04-29 11:25:23', '2019-04-29 11:25:23'),
(30, 15, 2, '2019-04-29 11:27:02', '2019-04-29 11:27:02'),
(31, 16, 4, '2019-04-29 11:30:17', '2019-04-29 11:30:17'),
(32, 16, 9, '2019-04-29 11:30:17', '2019-04-29 11:30:17'),
(33, 17, 3, '2019-04-29 11:33:20', '2019-04-29 11:33:20'),
(34, 18, 4, '2019-04-29 11:41:12', '2019-04-29 11:41:12'),
(35, 18, 8, '2019-04-29 11:41:12', '2019-04-29 11:41:12'),
(36, 19, 4, '2019-04-29 11:43:06', '2019-04-29 11:43:06'),
(37, 19, 7, '2019-04-29 11:43:06', '2019-04-29 11:43:06'),
(38, 20, 10, '2019-04-29 11:45:22', '2019-04-29 11:45:22'),
(39, 21, 4, '2019-04-29 12:16:25', '2019-04-29 12:16:25'),
(40, 22, 4, '2019-04-29 12:17:57', '2019-04-29 12:17:57'),
(41, 23, 4, '2019-04-29 12:19:07', '2019-04-29 12:19:07'),
(42, 23, 9, '2019-04-29 12:19:07', '2019-04-29 12:19:07'),
(43, 24, 6, '2019-04-29 12:20:27', '2019-04-29 12:20:27'),
(44, 25, 4, '2019-04-29 12:23:05', '2019-04-29 12:23:05'),
(45, 26, 4, '2019-04-29 12:25:51', '2019-04-29 12:25:51'),
(46, 27, 1, '2019-04-29 12:31:14', '2019-04-29 12:31:14'),
(47, 27, 2, '2019-04-29 12:31:14', '2019-04-29 12:31:14'),
(48, 27, 3, '2019-04-29 12:31:14', '2019-04-29 12:31:14'),
(49, 27, 4, '2019-04-29 12:31:14', '2019-04-29 12:31:14'),
(50, 28, 4, '2019-04-29 12:34:45', '2019-04-29 12:34:45'),
(51, 29, 1, '2019-04-29 12:37:58', '2019-04-29 12:37:58'),
(52, 30, 3, '2019-04-29 12:39:07', '2019-04-29 12:39:07'),
(53, 31, 3, '2019-04-29 12:40:23', '2019-04-29 12:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `post_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(3, 20, 7, 'Nice', '2019-04-27 02:24:12', '2019-04-27 02:24:12'),
(4, 27, 2, 'Nice post', '2019-04-30 12:00:47', '2019-04-30 12:00:47'),
(5, 24, 2, 'Importent things', '2019-05-02 05:58:59', '2019-05-02 05:58:59'),
(6, 32, 2, 'Nice post', '2019-05-02 06:09:13', '2019-05-02 06:09:13'),
(7, 45, 7, 'Love this topics', '2019-05-02 10:56:58', '2019-05-02 10:56:58'),
(8, 44, 7, 'Awesome', '2019-05-02 10:57:51', '2019-05-02 10:57:51'),
(9, 43, 2, 'Awesome', '2019-05-02 11:00:00', '2019-05-02 11:00:00'),
(10, 45, 2, 'Realy Awesome', '2019-05-02 11:00:48', '2019-05-02 11:00:48'),
(11, 42, 2, 'Awesome', '2019-05-02 11:01:39', '2019-05-02 11:01:39'),
(12, 39, 2, 'Very basic level', '2019-05-02 11:02:32', '2019-05-02 11:02:32'),
(13, 44, 2, 'love this topics', '2019-05-02 11:16:40', '2019-05-02 11:16:40'),
(14, 45, 2, 'helpful topics', '2019-05-02 11:26:39', '2019-05-02 11:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `comment_questions`
--

CREATE TABLE `comment_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_04_21_145313_create_roles_table', 1),
(4, '2018_04_24_134132_create_tags_table', 1),
(6, '2018_04_30_163457_create_posts_table', 1),
(7, '2018_04_30_163658_create_category_post_table', 1),
(8, '2018_04_30_163710_create_post_tag_table', 1),
(9, '2018_06_07_054134_create_subscribers_table', 1),
(10, '2018_06_13_082204_create_jobs_table', 1),
(11, '2018_07_12_154144_create_post_user_table', 1),
(12, '2018_07_18_142248_create_comments_table', 1),
(13, '2018_04_26_144755_create_categories_table', 2),
(15, '2019_04_25_131137_create_category_question_table', 4),
(16, '2019_04_25_131513_create_question_tag_table', 4),
(17, '2019_04_25_093218_create_questions_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `image`, `body`, `view_count`, `status`, `is_approved`, `created_at`, `updated_at`) VALUES
(20, 1, 'RISKs digest', 'risks-digest', 'errof-failurs-07_errors_failures_risks.pdf', '<p>&nbsp;&ldquo;Forum on Risks to the Public in Computers and Related systems&rdquo;</p>\r\n<p><br />BSoD forces students to retake standardized test (May 15, 2007) <br />2900 Virginia students will have to re-take standardized tests because the computer systems failed during the testing process. There are two descriptions of what went wrong: the testing vendor \"reported that there was a problem with a connection between two servers\" and students\' \"computer screens suddenly turned blue and displayed an error message\" (i.e., a BSoD). Whether this is one problem or two is unclear... \"State officials said there was an unrelated computer problem with online testing last week [where] 1,300 tests were interrupted and that the students will have to be retested.\"</p>\r\n<p>&nbsp;</p>\r\n<p>Scots Jail hi-tech door locking system broke (September 20, 2005) <br />Prison officers have been forced to abandon a new security system and return to the use of keys after the cutting-edge technology repeatedly failed. The system, which is thought to have cost over &pound;3 million, used fingerprint recognition to activate the locking system at the high-security Glenochil Prison near Tullibody, Clackmannanshire. ... For more than a month, the 420 inmates - including some murderers and other high-risk inmates - had been able to wander around the high-security jail. Staff claim that the unlimited access to all parts of the prison had allowed some prisoners to settle old scores with rivals.</p>', 8, 1, 1, '2019-04-25 08:50:45', '2019-05-02 05:52:01'),
(21, 8, 'The human visual system', 'the-human-visual-system', 'the-human-visual-system-Human_Visual_System.pdf', '<p>It may be surprising to ﬁnd a chapter on the human visual system in a book on digital image processing, but there are two reasons to include it: &bull; We need to be aware that there is a large difference between the image we display and the image we actually perceive. There is, for instance, a difference between the luminance of a pixel on a computer screen and the perceived brightness of this pixel: if we double the screen luminance, this does not imply that the perceived brightness is doubled too. The brightness also depends on other factors, such as contrast around the pixel and various cognitive processes1. &bull; The human visual system can perform a number of image processing tasks in a manner vastly superior to anything we are presently able to do with computers. If we want to mimic such processing, we need to carefully study the way our eyes and brain do this.<br />2.1 The human eye<br />The human visual system consists of two functional parts, the eye and (part of the) brain. The brain does all of the complex image processing, while the eye functions as the biological equivalent of a camera.<br />Figure 2.1 shows a cross section of the human eye and identiﬁes its most important parts. What our eyes perceive of a scene is determined by the light rays emitted or reﬂected from that scene. When these light rays are strong enough (have enough energy),<br />1In this book we will use the term luminance for the actual physical brightness, and brightness for the perceived brightness of an object, pixel, etc.<br />18 The human visual system<br />Figure 2.1 Cross section of the human eye.<br />and are within the right range of the electromagnetic spectrum (about 300 to 700 nm), the healthy eye will react to such a ray by sending an electric signal to the brain through the optic nerve.<br />When a light ray hits the eye, it will ﬁrst pass through the cornea, then subsequently through the aqueous humor, the iris, the lens, and the vitreous humor before ﬁnally reaching the retina. The cornea is a transparent protective layer, which acts as a lens and refracts the light. The iris forms a round aperture that can vary in size and so determines the amount of light that can pass through. Under dark circumstances the iris is wide open, letting through as much light as possible. In normal daylight, the iris constricts to a small hole. The lens can vary its shape to focus the perceived image onto the retina.<br />In the retina, the light rays are detected and converted to electrical signals by photoreceptors. The eye has two types of photoreceptors: rods and cones, named after their approximate shape. The rods are abundant, about 100 million in a human eye, and spread evenly about the retina, except at the fovea, where there are almost none. The fovea is the area of the retina where our vision is sharpest. There are much fewer cones, about 6 to 7 million, which are mainly located around the fovea, but can be found in a low density in the entire retina. No photoreceptors are found at the point where the optic nerve attaches to the eye (the so-called blind spot), so we cannot perceive anything there. Since rods are more responsive to light than cones we can identify three types of vision, depending on the amount of light that reaches the eye. Under dark circumstances, practically only the rods are active. Since rods cannot discriminate colors, we perceive only shades of grey. We call this scotopic or night vision. Under daylight cicumstances, the cones are most active, and we experience photopic or day vision. In dimly lighted circumstances there is an intermediate stage where both rods and cones are active called mesopic vision.</p>', 1, 1, 1, '2019-04-28 22:47:40', '2019-04-28 23:22:14'),
(22, 8, 'Copyright', 'copyright', NULL, '<p>Literary works &ndash; books, pamphlets, poems &ndash; other works consisting of text &ndash; computer programs (!) &bull;  Dramatic works &ndash; films, videos, plays, screenplays, scripts &bull;  Music works &ndash; Compositions (words &amp; music, or music only) &bull;  Artistic works &ndash; Paintings, drawings, maps, photographs, sculptures, architectural works&nbsp;&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p>Copyright: &ndash;  Protects works that owe their origin to the expressive efforts of an individual. &ndash;  Key is that if the work is &ldquo;original&rdquo; (i.e., created independently) then it can be &ldquo;copyrighted&rdquo;. &bull;  Even if there is a closely similar work in existence. &ndash;  Copyright owner has rights only against those who use their work without permission (i.e., defense against plagiarism). &bull;  Patents: &ndash;  Protect the discoveries of inventors. &ndash;  For as long as patent lasts, holder has a monopoly right. &ndash;  This right prevents anyone from producing implementations of their invention, even if same discovery was made independently.&nbsp;</p>', 2, 1, 1, '2019-04-28 22:59:04', '2019-05-02 06:22:03'),
(23, 8, 'Hacking', 'hacking', NULL, '<p>&nbsp;Web era (mid 90s) &ndash;  Increased use of Internet by average people &ndash;  Attractive to criminals with basic computer skills. &bull;  Crimes included the release of malicious code &bull;  Unprotected computers are especially vulnerable &ndash;  Unsuspecting users may have their computers utilized to take part in a DDoS or fraud &bull;  Minimal computer skills needed to create havoc &ndash;  &ldquo;Script kiddies&rdquo; &ndash;  Attackers who use tools / code written by others &bull;  2008 -- 93% of breaches reported by Verizon Business were at financial institutions&nbsp;</p>', 0, 1, 1, '2019-04-28 23:01:30', '2019-04-28 23:19:43'),
(24, 8, 'Hacktivism', 'hacktivism', NULL, '<p>&nbsp;Use of hacking to promote a political cause. &bull;  Degree can range from mild to destructive &ndash;  Defacing websites &ndash;  Destroying data &ndash;  Denial of service &bull;  Some think hacktivism is modern civil disobedience &bull;  Many do not think so: &ndash;  Denies others their own freedom of speech. &ndash;  Violates property rights. &ndash;  Even some hacktivists reject web-site defacing as legitimate activity. &bull;  An advocacy site: http://www.hacktivist.net/&nbsp;</p>', 2, 1, 1, '2019-04-28 23:03:17', '2019-05-02 05:58:26'),
(27, 3, 'The human visual systems', 'the-human-visual-systems', NULL, '<p>It may be surprising to ﬁnd a chapter on the human visual system in a book on digital image processing, but there are two reasons to include it: &bull; We need to be aware that there is a large difference between the image we display and the image we actually perceive. There is, for instance, a difference between the luminance of a pixel on a computer screen and the perceived brightness of this pixel: if we double the screen luminance, this does not imply that the perceived brightness is doubled too. The brightness also depends on other factors, such as contrast around the pixel and various cognitive processes1. &bull; The human visual system can perform a number of image processing tasks in a manner vastly superior to anything we are presently able to do with computers. If we want to mimic such processing, we need to carefully study the way our eyes and brain do this.<br />2.1 The human eye<br />The human visual system consists of two functional parts, the eye and (part of the) brain. The brain does all of the complex image processing, while the eye functions as the biological equivalent of a camera.<br />Figure 2.1 shows a cross section of the human eye and identiﬁes its most important parts. What our eyes perceive of a scene is determined by the light rays emitted or reﬂected from that scene. When these light rays are strong enough (have enough energy),<br />1In this book we will use the term luminance for the actual physical brightness, and brightness for the perceived brightness of an object, pixel, etc.<br />18 The human visual system<br />Figure 2.1 Cross section of the human eye.<br />and are within the right range of the electromagnetic spectrum (about 300 to 700 nm), the healthy eye will react to such a ray by sending an electric signal to the brain through the optic nerve.<br />When a light ray hits the eye, it will ﬁrst pass through the cornea, then subsequently through the aqueous humor, the iris, the lens, and the vitreous humor before ﬁnally reaching the retina. The cornea is a transparent protective layer, which acts as a lens and refracts the light. The iris forms a round aperture that can vary in size and so determines the amount of light that can pass through. Under dark circumstances the iris is wide open, letting through as much light as possible. In normal daylight, the iris constricts to a small hole. The lens can vary its shape to focus the perceived image onto the retina.<br />In the retina, the light rays are detected and converted to electrical signals by photoreceptors. The eye has two types of photoreceptors: rods and cones, named after their approximate shape. The rods are abundant, about 100 million in a human eye, and spread evenly about the retina, except at the fovea, where there are almost none. The fovea is the area of the retina where our vision is sharpest. There are much fewer cones, about 6 to 7 million, which are mainly located around the fovea, but can be found in a low density in the entire retina. No photoreceptors are found at the point where the optic nerve attaches to the eye (the so-called blind spot), so we cannot perceive anything there. Since rods are more responsive to light than cones we can identify three types of vision, depending on the amount of light that reaches the eye. Under dark circumstances, practically only the rods are active. Since rods cannot discriminate colors, we perceive only shades of grey. We call this scotopic or night vision. Under daylight cicumstances, the cones are most active, and we experience photopic or day vision. In dimly lighted circumstances there is an intermediate stage where both rods and cones are active called mesopic vision.</p>', 3, 1, 1, '2019-04-28 23:12:08', '2019-05-02 02:53:42'),
(28, 1, 'Copyright vs. Patent', 'copyright-vs-patent', NULL, '<p>&nbsp;Copyright: &ndash;  Protects works that owe their origin to the expressive efforts of an individual. &ndash;  Key is that if the work is &ldquo;original&rdquo; (i.e., created independently) then it can be &ldquo;copyrighted&rdquo;. &bull;  Even if there is a closely similar work in existence. &ndash;  Copyright owner has rights only against those who use their work without permission (i.e., defense against plagiarism).</p>\r\n<p>&bull;  Patents: &ndash;  Protect the discoveries of inventors. &ndash;  For as long as patent lasts, holder has a monopoly right. &ndash;  This right prevents anyone from producing implementations of their invention, even if same discovery was made independently.&nbsp;</p>', 3, 1, 1, '2019-04-28 23:14:42', '2019-05-02 06:24:02'),
(29, 3, 'Since patents are “property rights”, do they promote  innovation', 'since-patents-are-property-rights-do-they-promote-innovation', NULL, '<p>Most of the arguments against software patents turn out to be arguments against patents per se. These arguments are advanced most credibly on the basis of established technologies where data and research already exist. Patents have been accepted around the world as promoting innovation. Many giants of U.S. industry such as G.E., AT&amp;T, Polaroid, Xerox and Hewlett-Packard, started as small companies that used patent protection to protect their inventions. Yet, most of the articles on patents in the trade, business and even academic press read by the computer community have a an anti software patent bias. The reason is that for every patent there is one patent holder who is reluctant to speak because the issue is complex and what someone says could be used against them in litigation. And there are a dozen who might like to use the patented technology without paying for it and so are willing to malign the patent and patent system and pass on unsubstantiated rumors and misinformation</p>\r\n<p>Economists have researched innovation in other technologies and found the following: patents encourage innovation; and small entities-individual inventors and small companies-are a very important source of innovation. According to Jewkes et al. It is almost impossible to conceive of any existing social institution so faulty in so many ways. It survives only because there seems to be nothing better. And yet for the individual inventor or the small producer struggling to market a new idea, the patent right is crucially important. It is the only resource he possesses and, fragile and precarious as his rights may be, without them he would have nothing by which to establish a claim to a reward for his work. The sale of his ideas directly or the raising of capital for exploiting the ideas would be hopeless without the patent.</p>\r\n<p>While several articles discuss software patent and copyrights, few have been written for the software, as opposed to the legal, community. Such studies have only rarely been linked to software, and, we are unaware of any empirical studies of the effect of software patents on innovation other than this one. If we are to reject patents in principle, we should argue that case. If we accept patents as promoting innovation elsewhere but not in software then we should differentiate software from other technologies.</p>', 2, 1, 1, '2019-04-30 08:45:02', '2019-05-02 05:06:57'),
(30, 3, 'Have patents evolved to address concerns raised by  those who suspect software patents', 'have-patents-evolved-to-address-concerns-raised-by-those-who-suspect-software-patents', NULL, '<p>The courts have developed a patent jurisprudence as a unifying mechanism to support many technologies and foster evolutionary improvement while balancing the rights of patent holders and potential infringers. Most of the concerns about patents raised by the League have been raised long ago in the context of other technologies and addressed in case law and legislation and have stood the test of time. The patent system, like MS/DOS, is not perfect. MS/DOS has a long history of evolutionary improvement: it is a derivative of CP/M, which is a derivative of TOPS-20, which is a derivative of the SDS-940 timesharing system which evolved from the first timesharing system developed at BBN about 1960. Patent jurisprudence has a similar history of evolution. Part of the value of patents is they are a proven, public domain standard of intellectual property protection that have a history of evolutionary improvement over 500 years, compared to the 30 or 40 years of experience developing operating systems. TopView and OS/2, demonstrate how developing a new operating system and crystallizing a new infrastructure around it are fraught with dangers known and unknown. An infrastructure has crystallized around MS/DOS . It includes developers and consultants who know it, books explaining its use, and commercial products based on it. Similarly, an infrastructure has crystallized around that patent system. It includes patent lawyers, case law examples of valid and invalid, infringed and not infringed patents, and books and articles explaining patents to both lawyers and non-lawyers.</p>', 1, 1, 1, '2019-04-30 08:46:06', '2019-05-02 05:07:08'),
(31, 3, 'Must the patent system be perfect?', 'must-the-patent-system-be-perfect', NULL, '<p>Pattern are not perfect. There are problems with the patent system. Only that which is not real is perfect. The patent community and the Patent and Trademark Office (PTO) are aware of the problems and have been working to address them. A Commission on Patent Reform is considering improvements. The problems that the patent community sees are these: (a) the difficulty and expense of prior art searches; (b) patents being issued with inadequate examination; (c) imprecise claims making it difficult to know whether infringement has occurred; and (d) the length of time the examination process takes. (This hurts both the patent holder who can\'t enforce unissued patents and potential infringers who won\'t know about them. Patents are published automatically 18 months after filing in all other countries.) None of these problems are unique to software.</p>\r\n<p>If lack of perfection was a reason to get rid of something, no teenager would survive to adulthood. Other industries find patents useful in spite of these problems; software will too.</p>\r\n<p>Patents, it is said, inhibit standards. They do not; they inhibit the expropriate of intellectual property without just compensation in violation of the Fifth Amendment. Where patents exist standards are created two ways:</p>\r\n<ul>\r\n<li>Where people want a standard which infringes a patent, the standards body usually negotiates an agreement whereby the patent holder in return for having the technology required as part of a standard, agrees to make a standard license and rate available to all.</li>\r\n<li>Most standards don\'t infringe any intellectual property. The QWERTY keyboard and the standard automobile controls (Steering wheel, brake and accelerator) demonstrate that patents don\'t inhibit standards creation. Both public domain standards were developed during the working lifetime of Edison who received 1100 patents.</li>\r\n</ul>', 2, 1, 1, '2019-04-30 08:47:04', '2019-05-02 05:58:07'),
(32, 3, 'Is software different enough from other technologies  that it is suitable for special treatment?', 'is-software-different-enough-from-other-technologies-that-it-is-suitable-for-special-treatment', NULL, '<p>Software is not inherently different from other technologies in the way innovation or patents work<strong>. </strong>Arguments that software is different should be treated critically; you can be sure those same arguments will be used by those who do not believe that the protections of the Bill of Rights extend to areas where computers and software are used.</p>\r\n<p>Fred Brooks, following Aristotle, suggested the distinction between essence and accident, and that distinction has guided our analysis in the distinctions raised by the League and The question is whether the differences between software are essential or accidental in their encouraging innovation. The League says software is different and should be protected differently. They present two arguments.</p>\r\n<h6>A. Programs are complex.</h6>\r\n<p>Why, so they are; but so are airplanes, silicon chips, silicon chip fabrication plants, potato chip plants, oil refineries and many things. But people find the patent system beneficial in these other technologies.</p>\r\n<h6>B. Software is cheap to develop compared to other technologies because it is a cottage industry.</h6>\r\n<p>Other industries have cottage manufacturers and they deal with patents. Outside of software much invention is a cottage industry; about 5000 independent inventors belong to the 37 organizations that are members of the National Congress of Independent Inventors. And most cottage industries don\'t rely on invention.</p>\r\n<p>We should no more optimize an intellectual property system for cottage developers then we should for Fortune 500 companies.</p>\r\n<p>When one talks about marketing and maintaining commercial software products, the costs are much greater than the estimates made by the League. At the other extreme, IBM is reported to have spent 2.5 billion dollars to develop OS/2, including applications.</p>\r\n<p>It is expensive to develop software if the task is to design it from scratch and make it a success in the market; it is not, if the task is to clone something that already exists or is precisely specified.</p>\r\n<p>Indeed, that clone software is so much cheaper to develop argues for the necessity of patent protection if one wants to stimulate the development of products worth cloning.</p>\r\n<p>Making software non-patentable or subjecting it to a different form of protection creates practical difficulties, rather like a state seceding from the Union and setting up checkpoints on its border. And if one state secedes, they all can. If each technology has a sui generis (unique to itself ) form of protection, we would have to set up boundaries between the different technologies and would need rules for what happens at the boundaries.</p>\r\n<p>This situation occurs in software development. Should programmers be able to define their own conventions or should they conform to the system conventions even where they are not optimal? Do new programmers get to define their own conventions just because they were not involved in the original decision? Aren\'t programmers expected to abide by the conventions so the code will integrate better and others can maintain it later. Of course, as problems surface, it is foolish to resist all change in conventions just because changes have repercussions. Changes are made, but as part of a deliberative process in which the burden of proof is on those who advocate the changes.</p>\r\n<p>The evolution of the law works the same way; computer law is just another subsystem to be integrated into the fabric of jurisprudence.</p>\r\n<p>The problem of having different conventions in different areas is demonstrated by the Cad track patent which is discussed later. It is a hardware, rather than a software, patent. It requires a display device but no software to infringe it. A computer can be designed so it does not infringe, although a simple program running on it can. This demonstrates that simple software programs can infringe almost pure hardware patents and suggests the difficulty of drawing a legal distinction between hardware and software.</p>', 2, 1, 1, '2019-04-30 08:48:11', '2019-05-02 06:03:34'),
(33, 3, 'Is it fair to pose the question, “Is software  patentable?”', 'is-it-fair-to-pose-the-question-is-software-patentable', NULL, '<p>Legally, software is patentable. And it will remain so. Prior to 1982, about 30 different software related patent cases went through the Appellate Courts. The range of technologies-seismic, medical, petrochemical, telecommunications, firmware, and software-demonstrate that software is both well grounded in patent law, and basic to the advancement of American Industry. Software has become pervasive in industry that it has been basing business decisions on software\'s being patentable for 10 to 20 years. This has created a sophisticated broad-based constituency for keeping software patentable. Congress has not given in to demands to make less pervasive technologies, such as biotechnology, unpatentable; it is less likely to do so with software. Software has been clearly patentable longer than it has been copyrightable.</p>\r\n<p>Chisum, the leading authority on patents, wrote an article on the patentability of software and concluded:</p>\r\n<p>The continuing confusion over the patentability of computer programming ideas can be laid on the doorsteps of a single Supreme Court decision, Gottschalk v. Benson, which held that mathematical algorithms cannot be patented, no matter how new and useful. A careful analysis of that decision shows the holding is not supported by any of the authorities on which it relied, that the Court misunderstood the nature of the subject matter before it, and that the Court failed to offer any viable policy justification for excluding by judicial fiat mathematical algorithms from the patent system. The Benson decision is inconsistent with the later Supreme Court ruling in Diamond v. Chakabarty that the patent system applies impartially to new technologies and that any policy issues for excluding new technologies should be addressed to Congress. Policy considerations indicate that patent protection is appropriate for mathematical algorithms that are useful for computer programming as for other technological innovations.</p>\r\n<p>Chisum is in the mainstream in saying the courts made a mistake by making software unpatentable. But courts are reluctant to overturn previous decisions directly, and then only after their scope has been eroded. A similar situation where prejudice had become part of the jurisprudence occurred earlier:&nbsp;<em>Plessy v. Furgesson</em>(1896) held that \"separate but equal\" facilities for whites and blacks were lawful. The courts did not directly overturn it, but eroded its vitality on a case- by-case basis over a period of years in a number of decisions starting with&nbsp;<em>Murrey v. Maryland</em>&nbsp;while appearing to show respect for&nbsp;<em>Plessy</em>. Finally, when faced with&nbsp;<em>Brown v. Board of Education</em>&nbsp;(1954), ample precedent had been created for the Supreme Court to overrule Plessy directly.</p>\r\n<p>Samuelson, having asked Professor Chisum to write his article, now attempted to refute him, but after arguing for over 100 pages that the basis for software patentability is weak, was forced to conclude that:</p>\r\n<p>...the only principle which seems to have guided the court\'s decisions is one of upholding the patentability of as many program-related inventions as possible while appearing to show respect for the Supreme Court\'s decisions.</p>', 0, 1, 1, '2019-04-30 08:49:00', '2019-04-30 09:03:45'),
(34, 3, 'DDoS attacks', 'ddos-attacks', NULL, '<p>In 2000, Michael Calce, a 15-year-old boy who used the online name &ldquo;Mafiaboy,&rdquo; launched one of the first recorded DDoS attacks. Calce hacked into the computer networks of a number of universities. He used their servers to operate a DDoS attack that crashed several major websites, including CNN, E-Trade, eBay, and Yahoo. Calce was convicted of his crimes in the Montreal Youth Court. As an adult, he became a &ldquo;white-hat hacker&rdquo; identifying vulnerabilities in the computer systems of major companies. More recently, in 2016, Dyn, a major domain name system provider &mdash; or DNS &mdash; was hit with a massive DDoS attack that took down major websites and services, including AirBnB, CNN, Netflix, PayPal, Spotify, Visa, Amazon, The New York Times, Reddit, and GitHub. The gaming industry has also been a target of DDoS attacks, along with software and media companies. DDoS attacks are sometimes done to divert the attention of the target organization.</p>\r\n<h2>&nbsp;</h2>', 3, 1, 1, '2019-04-30 08:53:32', '2019-05-02 06:03:00'),
(35, 1, 'Spoofing', 'spoofing', NULL, '<ul>\r\n<li>Definition</li>\r\n</ul>\r\n<p>Spoofing is the act of disguising a communication from an unknown source as being from a known, trusted source. Spoofing can apply to emails, phone calls, and websites, or can be more technical, such as a computer spoofing an IP address, Address Resolution Protocol (ARP), or Domain Name System (DNS) server. Spoofing can be used to gain access to a target&rsquo;s personal information.</p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h2>How Spoofing Works</h2>\r\n<h2>Spoofing can be applied to a number of communication methods and employ various levels of technical know-how. Spoofing can be used carry out phishing attacks, which are scams to gain sensitive information from individuals or organizations.</h2>\r\n<h2>&nbsp; Email Spoofing</h2>\r\n<p>Email spoofing occurs when an attacker uses an email message to trick a recipient into thinking it came from a known and/or trusted source. These emails may include links to malicious websites or attachments infected with malware, or they may use&nbsp;<a href=\"https://www.forcepoint.com/cyber-edu/social-engineering\">social engineering</a>&nbsp;to convince the recipient to freely disclose sensitive information.</p>\r\n<p>Sender information is easy to spoof and can be done in one of two ways:</p>\r\n<ul>\r\n<li>Mimicking a trusted email address or domain by using alternate letters or numbers to appear only slightly different than the original</li>\r\n<li>Disguising the &lsquo;From&rsquo; field to be the exact email address of a known and/or trusted source</li>\r\n</ul>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<h2>&nbsp;Caller ID Spoofing</h2>\r\n<h2>With caller ID spoofing, attackers can make it appear as if their phone calls are coming from a specific number&mdash;either one that is known and/or trusted to the recipient, or one that indicates a specific geographic location. Attackers can then use social engineering&mdash;often posing as someone from a bank or customer support&mdash;to convince their targets to, over the phone, provide sensitive information such as passwords, account information, social security numbers, and more.</h2>\r\n<h2>&nbsp;</h2>\r\n<h2>&nbsp;Website Spoofing</h2>\r\n<h2>Website spoofing refers to when a website is designed to mimic an existing site known and/or trusted by the user. Attackers use these sites to gain login and other personal information from users.</h2>\r\n<h2>&nbsp;IP Spoofing</h2>\r\n<h2>Attackers may use IP (Internet Protocol) spoofing to disguise a computer IP address, thereby hiding the identity of the sender or impersonating another computer system. One purpose of IP address spoofing is to gain access to a networks that authenticate users based on IP addresses.</h2>\r\n<h2>ARP Spoofing</h2>\r\n<h2>Address Resolution Protocol (ARP) is a protocol that resolves IP addresses to Media Access Control (MAC) addresses for transmitting data. ARP spoofing is used to link an attacker&rsquo;s MAC to a legitimate network IP address so the attacker can receive data meant for the owner associated with that IP address. ARP spoofing is commonly used to steal or modify data but can also be used in denial-of-service and man-in-the-middle attacks or in session hijacking.</h2>\r\n<h2>DNS Server Spoofing</h2>\r\n<h2>DNS (Domain Name System) servers resolve URLs and email addresses to corresponding IP addresses. DNS spoofing allows attackers to divert traffic to a different IP address, leading victims to sites that spread malware.</h2>', 3, 1, 1, '2019-04-30 08:58:32', '2019-05-02 00:26:07'),
(36, 3, 'Differentiation', 'differentiation', NULL, '<p>Differentiation allows us to find rates of change. For example, it allows us to find the rate of change of velocity with respect to time (which is acceleration). It also allows us to find the rate of change of x with respect to y, which on a graph of y against x is the gradient of the curve. There are a number of simple rules which can be used to allow us to differentiate many functions easily.</p>\r\n<p>If y = some function of x (in other words if y is equal to an expression containing numbers and x\'s), then the&nbsp;<strong>derivative&nbsp;</strong>of y (with respect to x) is written dy/dx, pronounced \"dee y by dee x\" .</p>\r\n<p><u><strong>Differentiating x to the power of something</strong></u></p>\r\n<p>1) If y = x<sup>n</sup>, dy/dx = nx<sup>n-1</sup></p>\r\n<p>2) If y = kx<sup>n</sup>, dy/dx = nkx<sup>n-1</sup>(where k is a constant- in other words a number)</p>\r\n<p>Therefore to differentiate x to the power of something you bring the power down to in front of the x, and then reduce the power by one.</p>\r\n<p><em><strong>Examples</strong></em></p>\r\n<p>If y = x<sup>4</sup>, dy/dx = 4x<sup>3</sup><br />If y = 2x<sup>4</sup>, dy/dx = 8x<sup>3</sup><br />If y = x<sup>5</sup>&nbsp;+ 2x<sup>-3</sup>, dy/dx = 5x<sup>4</sup>&nbsp;- 6x<sup>-4</sup></p>\r\n<p><em><strong>Example</strong></em></p>\r\n<p>Find the derivative of:<br /><img src=\"https://revisionworld.com/sites/revisionworld.com/files/imce/differentiation.GIF\" alt=\"\" /></p>\r\n<p>This looks hard, but it isn\'t. The trick is to simplify the expression first: do the division (divide each term on the numerator by 3x<sup>&frac12;</sup>. We get:<br />(1/3)x<sup>3/2</sup>&nbsp;+ (5/3)x<sup>&frac12;</sup>&nbsp;- x<sup>-&frac12;</sup>&nbsp;(using the laws of indices).</p>\r\n<p>So differentiating term by term: &frac12; x<sup>&frac12;</sup>&nbsp;+ (5/6)x<sup>-&frac12;</sup>&nbsp;+ &frac12;x<sup>-3/2</sup>.</p>\r\n<p><u><strong>Notation</strong></u></p>\r\n<p>There are a number of ways of writing the derivative. They are all essentially the same:</p>\r\n<p>(1) If y = x<sup>2</sup>, dy/dx = 2x<br />This means that if y = x<sup>2</sup>, the derivative of y, with respect to x is 2x.</p>\r\n<p>(2)&nbsp;<u>d&nbsp;</u>(x<sup>2</sup>) = 2x<br />&nbsp; &nbsp; &nbsp;dx<br />This says that the derivative of x<sup>2</sup>&nbsp;with respect to x is 2x.</p>\r\n<p>(3) If f(x) = x<sup>2</sup>, f\'(x) = 2x<br />This says that is f(x) = x<sup>2</sup>, the derivative of f(x) is 2x.</p>\r\n<p><u><strong>Finding the Gradient of a Curve</strong></u></p>\r\n<p>A formula for the gradient of a curve can be found by differentiating the equation of the curve.</p>\r\n<p><em><strong>Example</strong></em></p>\r\n<p>What is the gradient of the curve y = 2x<sup>3</sup>&nbsp;at the point (3,54)?<br />dy/dx = 6x<sup>2</sup><br />When x = 3, dy/dx = 6&times; 9 = 54</p>', 0, 1, 1, '2019-05-02 09:38:52', '2019-05-02 11:08:54'),
(37, 3, 'Radians', 'radians', NULL, '<p style=\"font-weight: 400;\">Radians, like degrees, are a way of measuring angles.</p>\r\n<p style=\"font-weight: 400;\">One radian is equal to the angle formed when the arc opposite the angle is equal to the radius of the circle. So in the above diagram, the angle &oslash; is equal to one radian since the arc AB is the same length as the radius of the circle.</p>\r\n<p style=\"font-weight: 400;\">Now, the circumference of the circle is 2 PI r, where r is the radius of the circle. So the circumference of a circle is 2 PI larger than its radius. This means that in any circle, there are 2 PI radians.<br />Therefore 360&ordm; = 2 PI radians.<br />Therefore 180&ordm; = PI radians.<br />So one radian = 180/ PI degrees and one degree = PI /180 radians.</p>\r\n<p style=\"font-weight: 400;\">Therefore to convert a certain number of degrees in to radians, multiply the number of degrees by PI /180 (for example, 90&ordm; = 90 &times; PI /180 radians = PI /2). To convert a certain number of radians into degrees, multiply the number of radians by 180/ PI .</p>\r\n<p style=\"font-weight: 400;\"><u><strong>Arc Length</strong></u></p>\r\n<p style=\"font-weight: 400;\">The length of an arc of a circle is equal to &empty;, where &empty; is the angle, in radians, subtended by the arc at the centre of the circle (see below diagram if you don&rsquo;t understand). So in the below diagram, s = r&empty; .</p>\r\n<p style=\"font-weight: 400;\"><u><strong>Area of Sector</strong></u></p>\r\n<p style=\"font-weight: 400;\">The area of a sector of a circle is &frac12; r&sup2; &empty;, where r is the radius and &empty; the angle in radians subtended by the arc at the centre of the circle. So in the below diagram, the shaded area is equal to &frac12; r&sup2; &empty; .</p>\r\n<p style=\"font-weight: 400;\">See the video below for more information on how to convert radians and degrees</p>', 0, 1, 0, '2019-05-02 09:43:42', '2019-05-02 09:43:42'),
(38, 3, 'Basic equations', 'basic-equations', NULL, '<div class=\"panel-pane pane-page-content\">\r\n<div class=\"pane-content\">\r\n<div class=\"panel-display panel-1col clearfix\">\r\n<div class=\"panel-panel panel-col\">\r\n<div>\r\n<div class=\"panel-pane pane-node-content\">\r\n<div class=\"pane-content\">\r\n<div id=\"node-76\" class=\"node node-mathsrevision clearfix\">\r\n<div class=\"content\">\r\n<div class=\"field field-name-body field-type-text-with-summary field-label-hidden\">\r\n<div class=\"field-items\">\r\n<div class=\"field-item even\">\r\n<p>This pages shows you how to solve basic equations. It is important to write down&nbsp;<strong>all</strong>&nbsp;of the solutions in the interval that you are given.</p>\r\n<p><em><strong>Example</strong></em></p>\r\n<p>Solve sin(x -&nbsp;p/2) = &frac12; for 0 &lt; x &lt; 2p</p>\r\n<p>We take arcsin [arcsin means sin<sup>-1</sup>] of both sides to get:</p>\r\n<p>x -&nbsp;p/2 = arcsin(&frac12;)</p>\r\n<p>x -&nbsp;p/2 = -7p/6 ,&nbsp;p/6, 5p/6, 13p/6 ...</p>\r\n<p>We want all of the solutions for x between 0 and 2p. You must be careful, because when you take&nbsp;p/2 to the right hand side, the solutions are each going to have increased by&nbsp;p/2 and so some solutions might have entered or exited the range that you want them to be in.</p>\r\n<p>x =&nbsp;<u>2p/3, 4p/3</u></p>\r\n<p><em><strong>Example</strong></em></p>\r\n<p>Solve 2cos<sup>2</sup>x + 3sinx = 3, giving your answer in radians for 0&lt; x &lt;p.<br />2cos<sup>2</sup>x + 3sinx - 3 = 0<br />We need to get everything in terms of sinx or everything in terms of cosx. Since we know that cos<sup>2</sup>x = 1 - sin<sup>2</sup>x:<br />2(1 - sin<sup>2</sup>x) + 3sinx - 3 = 0<br />2 - 2sin<sup>2</sup>x + 3sinx - 3 = 0<br />-2sin<sup>2</sup>x + 3sinx - 1 = 0<br />2sin<sup>2</sup>x - 3sinx + 1 = 0<br />(2sinx - 1)(sinx - 1) = 0<br />sin x = &frac12; or sin x = 1<br />x =&nbsp;<u>p/6, 5p/6,&nbsp;p/2</u></p>\r\n<p>Remember, if sinx = 1 then x =&nbsp;p/2 or 5p/2&nbsp;or&nbsp;9p/2&nbsp;or ... and similarly for arcsin(&frac12;). In this question, you are asked for values of x between 0 and&nbsp;p. You must write down all of the appropriate solutions.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"panel-separator\">&nbsp;</div>\r\n<div class=\"panel-separator\">&nbsp;</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n<div class=\"panel-separator\">&nbsp;</div>\r\n<div class=\"panel-pane pane-fieldable-panels-pane pane-fpid-56 pane-bundle-simple-ad-pane-wide\">&nbsp;</div>', 0, 1, 0, '2019-05-02 09:46:23', '2019-05-03 10:18:59'),
(39, 3, 'COMPUTER HISTORY', 'computer-history', NULL, '<p>The computer as we know it today had its beginning with a 19th century English mathematics professor name Charles Babbage.<br />He designed the Analytical Engine and it was this design that the basic framework of the computers of today are based on.</p>\r\n<p>Generally speaking, computers can be classified into three generations. Each generation lasted for a certain period of<br />time,and each gave us either a new and improved computer or an improvement to the existing computer.</p>\r\n<p><span style=\"font-size: large;\">First generation: 1937 &ndash; 1946 -&nbsp;</span>In 1937 the first electronic digital computer was built by Dr. John V. Atanasoff and Clifford Berry. It was called the Atanasoff-Berry Computer (ABC). In 1943 an electronic computer name the Colossus was built for the military. Other developments continued until in 1946 the first general&ndash; purpose digital computer, the Electronic Numerical Integrator and Computer (ENIAC) was built. It is said that this computer weighed 30 tons, and had 18,000 vacuum tubes which was used for processing. When this computer was turned on for the first time lights dim in sections of Philadelphia. Computers of this generation could only perform single task, and they had no operating system.</p>\r\n<p><span style=\"font-size: large;\">Second generation: 1947 &ndash; 1962 -&nbsp;</span>This generation of computers used transistors instead of vacuum tubes which were more reliable. In 1951 the first computer for commercial use was introduced to the public; the Universal Automatic Computer (UNIVAC 1). In 1953 the International Business Machine (IBM) 650 and 700 series computers made their mark in the computer world. During this generation of computers over 100 computer programming languages were developed, computers had memory and operating systems. Storage media such as tape and disk were in use also were printers for output.</p>\r\n<p><span style=\"font-size: large;\">Third generation: 1963 - present -&nbsp;</span>The invention of integrated circuit brought us the third generation of computers. With this invention computers became smaller, more powerful more reliable and they are able to run many different programs at the same time. In1980 Microsoft Disk Operating System (MS-Dos) was born and in 1981 IBM introduced the personal computer (PC) for home and office use. Three years later Apple gave us the Macintosh computer with its icon driven interface and the 90s gave us Windows operating system.</p>\r\n<p>As a result of the various improvements to the development of the computer we have seen the computer being used in all areas of life. It is a very useful tool that will continue to experience new development as time passes.</p>', 1, 1, 1, '2019-05-02 09:49:21', '2019-05-02 11:02:14'),
(40, 3, 'What Is Programming?', 'what-is-programming', NULL, '<p><strong>Programming</strong>&nbsp;is the process of taking an algorithm and encoding it into a notation, a programming language, so that it can be executed by a computer. Although many programming languages and many different types of computers exist, the important first step is the need to have the solution. Without an algorithm there can be no program.</p>\r\n<p>Computer science is not the study of programming. Programming, however, is an important part of what a computer scientist does. Programming is often the way that we create a representation for our solutions. Therefore, this language representation and the process of creating it becomes a fundamental part of the discipline.</p>\r\n<p>Algorithms describe the solution to a problem in terms of the data needed to represent the problem instance and the set of steps necessary to produce the intended result. Programming languages must provide a notational way to represent both the process and the data. To this end, languages provide control constructs and data types.</p>\r\n<p>Control constructs allow algorithmic steps to be represented in a convenient yet unambiguous way. At a minimum, algorithms require constructs that perform sequential processing, selection for decision-making, and iteration for repetitive control. As long as the language provides these basic statements, it can be used for algorithm representation.</p>\r\n<p>All data items in the computer are represented as strings of binary digits. In order to give these strings meaning, we need to have&nbsp;<strong>data types</strong>. Data types provide an interpretation for this binary data so that we can think about the data in terms that make sense with respect to the problem being solved. These low-level, built-in data types (sometimes called the primitive data types) provide the building blocks for algorithm development.</p>\r\n<p>For example, most programming languages provide a data type for integers. Strings of binary digits in the computer&rsquo;s memory can be interpreted as integers and given the typical meanings that we commonly associate with integers (e.g. 23, 654, and -19). In addition, a data type also provides a description of the operations that the data items can participate in. With integers, operations such as addition, subtraction, and multiplication are common. We have come to expect that numeric types of data can participate in these arithmetic operations.</p>\r\n<p>The difficulty that often arises for us is the fact that problems and their solutions are very complex. These simple, language-provided constructs and data types, although certainly sufficient to represent complex solutions, are typically at a disadvantage as we work through the problem-solving process. We need ways to control this complexity and assist with the creation of solutions.</p>', 0, 1, 1, '2019-05-02 09:51:47', '2019-05-02 11:08:28'),
(41, 3, 'COMPUTER HARDWARE', 'computer-hardware', NULL, '<p>You learned earlier that a computer has electronic and mechanical parts known as hardware.<br />Hardware also includes input devices, output devices, system unit, storage devices and<br />communication devices. Without these components we would not be able to use the computer.</p>\r\n<p><span style=\"font-size: large;\"><span style=\"font-family: \'ariel black\';\">Input Devices -&nbsp;</span></span>An input device is any hardware component that allows you the user to enter data into the computer.<br />There are many input devices. Six of the most widely used input devices are:</p>\r\n<p><img src=\"http://people.bu.edu/baws/Image/keyboard.jpg\" align=\"left\" hspace=\"20\" vspace=\"20\" />1. A keyboard -- You use the keyboard to type letters,<br />numbers,and symbols into the computer.</p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\"><img src=\"http://people.bu.edu/baws/Image/mouse.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\">2. A Mouse --The mouse is a pointing device that has a pointer<br />that changes into different shapes as you use the mouse.<br />You click the mouse by pressing and releasing the button.<br />This action allows you to enter data when using a mouse.</p>\r\n<p>&nbsp;</p>\r\n<p>3. A Scanner -- This input device copies from paper into your computer.</p>\r\n<p>&nbsp;</p>\r\n<p align=\"left\"><img src=\"http://people.bu.edu/baws/Image/test.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\">4 . A Microphone -- The microphone is usually used for voice input into the computer.</p>\r\n<p align=\"center\"><img src=\"http://people.bu.edu/baws/Image/mike.jpg\" /></p>\r\n<p>5. A Digital Camer -- The digital camera allows you to take pictures that you can input into your computer.&nbsp;</p>\r\n<p><img src=\"http://people.bu.edu/baws/Image/camera.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\">6. A PC Video Camera -- The PC video camera allows you take both video<br />and still images that you can input onto your computer.</p>\r\n<p>&nbsp;</p>\r\n<p align=\"center\"><img src=\"http://people.bu.edu/baws/Image/vcam.jpg\" /></p>\r\n<p>&nbsp;</p>\r\n<p>&nbsp;</p>\r\n<p><span style=\"font-size: large;\"><span style=\"font-family: \'ariel black\';\">Output Devices&nbsp;</span></span>An output device is any hardware component that gives information to the user.&nbsp;<br />Three commonly used output devices are as follow:</p>\r\n<p><img src=\"http://people.bu.edu/baws/Image/monitor.jpg\" align=\"\" hspace=\"20\" vspace=\"\" />&nbsp;1. A Monitor -- This output device displays your information on a screen,</p>\r\n<p align=\"center\">2. A Printer -- This output device prints information on paper.<br />This type of printed output is called a hard copy</p>', 0, 1, 1, '2019-05-02 09:54:27', '2019-05-02 11:08:20'),
(42, 8, 'writing and comprehension', 'writing-and-comprehension', 'writing-and-comprehension-Writing for Comprehension.pdf', '<p>It is helpful pdf for anyone .</p>', 2, 1, 1, '2019-05-02 10:00:22', '2019-05-02 11:01:22'),
(43, 8, 'Basic Electrical Circuits', 'basic-electrical-circuits', 'basic-electrical-circuits-electric circuit.pdf', '<p>Electrical Circuits</p>', 3, 1, 1, '2019-05-02 10:08:52', '2019-05-02 10:59:40'),
(44, 8, 'Data structure', 'data-structure', 'data-structure-2.0 Basic Data Structures.pdf', '<p>Basic things of data structure</p>', 3, 1, 1, '2019-05-02 10:15:34', '2019-05-02 11:16:08'),
(45, 8, 'Ordinay and partial differential', 'ordinay-and-partial-differential', 'ordinay-and-partial-differential-ordinary and partial.pdf', '<p>Basic about ordinary and partial</p>', 8, 1, 1, '2019-05-02 10:20:46', '2019-05-02 11:26:02');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

CREATE TABLE `post_tag` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(20, 20, 1, '2019-04-25 08:50:45', '2019-04-25 08:50:45'),
(21, 21, 42, '2019-04-28 22:47:40', '2019-04-28 22:47:40'),
(22, 22, 42, '2019-04-28 22:59:04', '2019-04-28 22:59:04'),
(23, 23, 42, '2019-04-28 23:01:30', '2019-04-28 23:01:30'),
(24, 24, 42, '2019-04-28 23:03:17', '2019-04-28 23:03:17'),
(25, 27, 42, '2019-04-28 23:12:08', '2019-04-28 23:12:08'),
(26, 28, 42, '2019-04-28 23:14:42', '2019-04-28 23:14:42'),
(27, 20, 41, '2019-04-30 08:40:06', '2019-04-30 08:40:06'),
(28, 29, 41, '2019-04-30 08:45:02', '2019-04-30 08:45:02'),
(29, 30, 41, '2019-04-30 08:46:06', '2019-04-30 08:46:06'),
(30, 31, 41, '2019-04-30 08:47:04', '2019-04-30 08:47:04'),
(31, 32, 41, '2019-04-30 08:48:11', '2019-04-30 08:48:11'),
(32, 33, 41, '2019-04-30 08:49:00', '2019-04-30 08:49:00'),
(33, 34, 41, '2019-04-30 08:53:32', '2019-04-30 08:53:32'),
(34, 35, 41, '2019-04-30 08:58:32', '2019-04-30 08:58:32'),
(35, 36, 1, '2019-05-02 09:38:52', '2019-05-02 09:38:52'),
(36, 37, 1, '2019-05-02 09:43:42', '2019-05-02 09:43:42'),
(37, 38, 5, '2019-05-02 09:46:24', '2019-05-02 09:46:24'),
(38, 39, 7, '2019-05-02 09:49:21', '2019-05-02 09:49:21'),
(39, 40, 9, '2019-05-02 09:51:47', '2019-05-02 09:51:47'),
(40, 41, 7, '2019-05-02 09:54:27', '2019-05-02 09:54:27'),
(41, 42, 10, '2019-05-02 10:00:22', '2019-05-02 10:00:22'),
(42, 43, 12, '2019-05-02 10:08:52', '2019-05-02 10:08:52'),
(43, 44, 13, '2019-05-02 10:15:34', '2019-05-02 10:15:34'),
(44, 45, 14, '2019-05-02 10:20:47', '2019-05-02 10:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `post_user`
--

CREATE TABLE `post_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `post_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_user`
--

INSERT INTO `post_user` (`id`, `post_id`, `user_id`, `created_at`, `updated_at`) VALUES
(6, 20, 7, '2019-04-27 01:20:49', '2019-04-27 01:20:49'),
(8, 24, 2, '2019-04-28 23:26:38', '2019-04-28 23:26:38'),
(9, 27, 2, '2019-04-28 23:26:50', '2019-04-28 23:26:50'),
(10, 34, 2, '2019-04-30 09:16:10', '2019-04-30 09:16:10'),
(11, 35, 2, '2019-05-01 02:52:04', '2019-05-01 02:52:04'),
(12, 35, 3, '2019-05-01 06:03:30', '2019-05-01 06:03:30'),
(13, 23, 2, '2019-05-01 09:42:49', '2019-05-01 09:42:49'),
(14, 24, 3, '2019-05-01 23:03:26', '2019-05-01 23:03:26'),
(15, 31, 8, '2019-05-02 04:25:34', '2019-05-02 04:25:34'),
(16, 34, 8, '2019-05-02 06:23:45', '2019-05-02 06:23:45'),
(17, 28, 8, '2019-05-02 06:23:54', '2019-05-02 06:23:54'),
(18, 45, 2, '2019-05-02 10:42:03', '2019-05-02 10:42:03'),
(19, 44, 2, '2019-05-02 10:45:53', '2019-05-02 10:45:53'),
(20, 43, 2, '2019-05-02 10:46:02', '2019-05-02 10:46:02'),
(21, 42, 2, '2019-05-02 10:46:17', '2019-05-02 10:46:17'),
(22, 45, 8, '2019-05-02 10:46:33', '2019-05-02 10:46:33'),
(23, 44, 8, '2019-05-02 10:46:42', '2019-05-02 10:46:42'),
(24, 39, 8, '2019-05-02 10:46:49', '2019-05-02 10:46:49'),
(25, 35, 8, '2019-05-02 10:46:59', '2019-05-02 10:46:59'),
(26, 42, 8, '2019-05-02 10:47:40', '2019-05-02 10:47:40'),
(27, 45, 3, '2019-05-02 10:53:43', '2019-05-02 10:53:43'),
(28, 44, 3, '2019-05-02 10:53:48', '2019-05-02 10:53:48'),
(29, 43, 3, '2019-05-02 10:53:56', '2019-05-02 10:53:56'),
(30, 42, 3, '2019-05-02 10:54:10', '2019-05-02 10:54:10'),
(31, 39, 3, '2019-05-02 10:54:15', '2019-05-02 10:54:15'),
(32, 45, 7, '2019-05-02 10:56:07', '2019-05-02 10:56:07'),
(33, 43, 7, '2019-05-02 10:56:21', '2019-05-02 10:56:21'),
(34, 33, 7, '2019-05-02 10:56:32', '2019-05-02 10:56:32'),
(35, 39, 2, '2019-05-02 11:02:04', '2019-05-02 11:02:04');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `term` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_year` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `view_count` int(11) NOT NULL DEFAULT '0',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `is_approved` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_id`, `title`, `slug`, `course_code`, `term`, `passing_year`, `image`, `file`, `body`, `view_count`, `status`, `is_approved`, `created_at`, `updated_at`) VALUES
(1, 1, 'Computer Graphics', 'computer-graphics', 'cse421', 'Midterm', 'Summer 2018', 'computer-graphics-CSE421.pdf', NULL, '<p>its a computer graphics midterm question</p>', 8, 1, 1, '2019-04-25 11:32:30', '2019-04-28 22:26:34'),
(2, 1, 'Art of Living', 'art-of-living', 'GED321', 'Final', 'Summer 2018', 'art-of-living-Art Of Living.pdf', NULL, '<p>SUMMER 2018</p>', 0, 1, 1, '2019-04-29 10:43:55', '2019-04-29 10:43:55'),
(3, 1, 'Computer Networks', 'computer-networks', 'CSE313', 'Final', 'Summer 2018', 'computer-networks-Computer Networking.pdf', NULL, '<p>Summer final</p>', 0, 1, 1, '2019-04-29 10:46:12', '2019-04-29 10:46:12'),
(4, 1, 'Database Management System', 'database-management-system', 'CSE311', 'Final', 'Summer 2018', 'database-management-system-Database Management.pdf', NULL, '<p>Summer final</p>', 0, 1, 1, '2019-04-29 10:48:02', '2019-04-29 10:48:02'),
(5, 1, 'DBMS CN AOF', 'dbms-cn-aof', 'CSE311 CSE313 CSE321', 'Midterm', 'Summer 2018', 'dbms-cn-aof-7th Semester.pdf', NULL, '<p>Summer 2018 7th semester mid all question here</p>', 1, 1, 1, '2019-04-29 10:53:57', '2019-04-29 12:44:50'),
(6, 1, 'Computer Graphics', 'computer-graphics', 'CSE421', 'Final', 'Summer 2018', 'computer-graphics-Computer graphics, CSE 421, final, summer 2018.pdf', NULL, '<p>FINAL 2018 SUMMER</p>', 0, 1, 1, '2019-04-29 11:01:53', '2019-04-29 11:01:53'),
(7, 1, 'Data Mining', 'data-mining', 'CSE450', 'Final', 'Summer 2018', 'data-mining-Data Mining, Final 2018 (1).pdf', NULL, '<p>Data mining final summer 2018</p>', 0, 1, 1, '2019-04-29 11:03:58', '2019-04-29 11:03:58'),
(8, 1, 'Image Processing', 'image-processing', 'CSE433', 'Midterm', 'Summer 2018', 'image-processing-CSE433 image processing.pdf', NULL, '<p>Digital image processing mid term</p>', 0, 1, 1, '2019-04-29 11:06:33', '2019-04-29 11:06:33'),
(10, 1, 'English', 'english', 'ENG123', 'Final', 'Fall 2017', 'english-ENG123 Final-English.pdf', NULL, '<p>English spoken</p>', 0, 1, 1, '2019-04-29 11:11:54', '2019-04-29 11:11:54'),
(11, 1, 'Programming and Problem Solving', 'programming-and-problem-solving', 'CSE122', 'Final', 'Fall 2017', 'programming-and-problem-solving-CSE122.pdf', NULL, '<p>Problem solving</p>', 0, 1, 1, '2019-04-29 11:12:35', '2019-04-29 11:12:35'),
(12, 1, 'Mathematics', 'mathematics', 'MAT121', 'Final', 'Fall 2017', 'mathematics-MAT121 Final-Math.pdf', NULL, '<p>math</p>', 7, 1, 1, '2019-04-29 11:15:56', '2019-05-02 10:39:06'),
(13, 1, 'Physics 2', 'physics-2', 'PHY123', 'Final', 'Fall 2017', 'physics-2-PHY123 Final-Physics.pdf', NULL, '<p>physics 2 second semester</p>', 0, 1, 1, '2019-04-29 11:23:01', '2019-04-29 11:23:01'),
(14, 1, 'Discrete Mathematics', 'discrete-mathematics', 'CSE131', 'Midterm', 'Fall 2017', 'discrete-mathematics-CSE 131.pdf', NULL, '<p>discrete</p>', 0, 1, 1, '2019-04-29 11:25:23', '2019-04-29 11:25:23'),
(15, 1, 'Electrical Circuit', 'electrical-circuit', 'CSE132', 'Midterm', 'Fall 2017', 'electrical-circuit-CSE 132.pdf', NULL, '<p>circuits&nbsp;</p>', 0, 1, 1, '2019-04-29 11:27:02', '2019-04-29 11:27:02'),
(16, 1, 'Data Structure', 'data-structure', 'CSE134', 'Midterm', 'Fall 2017', 'data-structure-CSE 134.pdf', NULL, '<p>Data structure</p>', 0, 1, 1, '2019-04-29 11:30:17', '2019-04-29 11:30:17'),
(17, 1, 'Partial Differential Equation', 'partial-differential-equation', 'CSE132', 'Midterm', 'Fall 2017', 'partial-differential-equation-MAT131.pdf', NULL, '<p>Ordinary partial differential&nbsp;</p>', 1, 1, 1, '2019-04-29 11:33:19', '2019-04-29 22:15:17'),
(18, 1, 'Database Management System', 'database-management-system', 'CSE311', 'Midterm', 'Fall 2017', 'database-management-system-CSE 311.pdf', NULL, '<p>DB Management system</p>', 0, 1, 1, '2019-04-29 11:41:11', '2019-04-29 11:41:11'),
(19, 1, 'Computer Network', 'computer-network', 'CSE313', 'Midterm', 'Spring 2017', 'computer-network-CSE 313.pdf', NULL, '<p>Networking</p>', 0, 1, 1, '2019-04-29 11:43:06', '2019-04-29 11:43:06'),
(20, 1, 'Art of Living', 'art-of-living', 'GED321', 'Midterm', 'Fall 2017', 'art-of-living-GED 321.pdf', NULL, '<p>Social communication ettequete , mannar&nbsp;</p>', 0, 1, 1, '2019-04-29 11:45:22', '2019-04-29 11:45:22'),
(21, 1, 'Compiler disign', 'compiler-disign', 'CSE33', 'Final', 'Fall 2017', 'compiler-disign-Final (Fall 17) CSE 331.pdf', NULL, '<p>fall 17</p>', 0, 1, 1, '2019-04-29 12:16:25', '2019-04-29 12:16:25'),
(22, 1, 'Software Engineering', 'software-engineering', 'CSE333', 'Final', 'Fall 2017', 'software-engineering-Final (Fall 17) CSE 333.pdf', NULL, '<p>SOFTWARE 17</p>', 0, 1, 1, '2019-04-29 12:17:57', '2019-04-29 12:17:57'),
(23, 1, 'Wireless Programming', 'wireless-programming', 'CSE334', 'Final', 'Fall 2017', 'wireless-programming-Final (Fall 17) CSE 334.pdf', NULL, '<p>android&nbsp;</p>', 0, 1, 1, '2019-04-29 12:19:07', '2019-04-29 12:19:07'),
(24, 1, 'Accounting', 'accounting', 'CSE301', 'Final', 'Fall 2017', 'accounting-Final (Fall17) ACT 301.pdf', NULL, '<p>FINANCIAL AND MANAGERIAL&nbsp;</p>', 1, 1, 1, '2019-04-29 12:20:27', '2019-04-29 22:17:33'),
(25, 1, 'Digital Image Processing', 'digital-image-processing', 'CSE433', 'Midterm', 'Fall 2017', 'digital-image-processing-CSE433 image processing mid fall 2017_2.pdf', NULL, '<p>image process</p>', 0, 1, 1, '2019-04-29 12:23:04', '2019-04-29 12:23:04'),
(26, 1, 'Social Computer', 'social-computer', 'CSE498', 'Midterm', 'Fall 2017', 'social-computer-CSE498 SPIC.pdf', NULL, '<p>SOCIAL ISSUE IN COMPUTER</p>', 1, 1, 1, '2019-04-29 12:25:51', '2019-04-30 01:33:26'),
(27, 1, 'PHY CF FES MAT', 'phy-cf-fes-mat', 'PHY113 CSE112 ENG113 MAT111', 'Final', 'Spring 2017', 'phy-cf-fes-mat-first sems final question.pdf', NULL, '<p>first semester all question are here</p>', 2, 1, 1, '2019-04-29 12:31:14', '2019-05-01 23:12:15'),
(28, 1, 'Computer Fundamental', 'computer-fundamental', 'CSE112', 'Midterm', 'Spring 2017', 'computer-fundamental-CSE 112.pdf', NULL, '<p>Computer basic</p>', 0, 1, 1, '2019-04-29 12:34:45', '2019-04-29 12:34:45'),
(29, 1, 'Fundamental English and spoken', 'fundamental-english-and-spoken', 'CSE113', 'Midterm', 'Spring 2017', 'fundamental-english-and-spoken-ENG 113.pdf', NULL, '<p>English for beginner</p>', 0, 1, 1, '2019-04-29 12:37:58', '2019-04-29 12:37:58'),
(30, 1, 'Mathematics', 'mathematics', 'MAT11', 'Midterm', 'Spring 2017', 'mathematics-MAT 111.pdf', NULL, '<p>mathematics</p>', 0, 1, 1, '2019-04-29 12:39:07', '2019-04-29 12:39:07'),
(31, 1, 'Physics', 'physics', 'PHY113', 'Midterm', 'Spring 2017', 'physics-PHY 113.pdf', NULL, '<p>BASIC PHYSICS</p>', 5, 1, 1, '2019-04-29 12:40:23', '2019-05-02 11:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `question_tag`
--

CREATE TABLE `question_tag` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_tag`
--

INSERT INTO `question_tag` (`id`, `question_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(5, 1, 6, '2019-04-25 11:32:31', '2019-04-25 11:32:31'),
(6, 2, 32, '2019-04-29 10:43:55', '2019-04-29 10:43:55'),
(7, 3, 27, '2019-04-29 10:46:12', '2019-04-29 10:46:12'),
(8, 4, 26, '2019-04-29 10:48:02', '2019-04-29 10:48:02'),
(9, 5, 26, '2019-04-29 10:53:57', '2019-04-29 10:53:57'),
(10, 5, 27, '2019-04-29 10:53:57', '2019-04-29 10:53:57'),
(11, 5, 32, '2019-04-29 10:53:57', '2019-04-29 10:53:57'),
(12, 6, 6, '2019-04-29 11:01:53', '2019-04-29 11:01:53'),
(13, 7, 26, '2019-04-29 11:03:58', '2019-04-29 11:03:58'),
(14, 8, 42, '2019-04-29 11:06:33', '2019-04-29 11:06:33'),
(16, 10, 8, '2019-04-29 11:11:54', '2019-04-29 11:11:54'),
(17, 11, 9, '2019-04-29 11:12:35', '2019-04-29 11:12:35'),
(18, 12, 5, '2019-04-29 11:15:56', '2019-04-29 11:15:56'),
(19, 13, 12, '2019-04-29 11:23:02', '2019-04-29 11:23:02'),
(20, 14, 11, '2019-04-29 11:25:23', '2019-04-29 11:25:23'),
(21, 15, 12, '2019-04-29 11:27:02', '2019-04-29 11:27:02'),
(22, 16, 13, '2019-04-29 11:30:18', '2019-04-29 11:30:18'),
(23, 17, 14, '2019-04-29 11:33:20', '2019-04-29 11:33:20'),
(24, 18, 26, '2019-04-29 11:41:12', '2019-04-29 11:41:12'),
(25, 19, 27, '2019-04-29 11:43:06', '2019-04-29 11:43:06'),
(26, 20, 32, '2019-04-29 11:45:22', '2019-04-29 11:45:22'),
(27, 21, 33, '2019-04-29 12:16:25', '2019-04-29 12:16:25'),
(28, 22, 34, '2019-04-29 12:17:57', '2019-04-29 12:17:57'),
(29, 23, 35, '2019-04-29 12:19:07', '2019-04-29 12:19:07'),
(30, 24, 36, '2019-04-29 12:20:28', '2019-04-29 12:20:28'),
(31, 25, 42, '2019-04-29 12:23:05', '2019-04-29 12:23:05'),
(32, 26, 41, '2019-04-29 12:25:51', '2019-04-29 12:25:51'),
(33, 27, 1, '2019-04-29 12:31:14', '2019-04-29 12:31:14'),
(34, 27, 3, '2019-04-29 12:31:14', '2019-04-29 12:31:14'),
(35, 27, 7, '2019-04-29 12:31:14', '2019-04-29 12:31:14'),
(36, 27, 8, '2019-04-29 12:31:14', '2019-04-29 12:31:14'),
(37, 28, 7, '2019-04-29 12:34:45', '2019-04-29 12:34:45'),
(38, 29, 8, '2019-04-29 12:37:58', '2019-04-29 12:37:58'),
(39, 30, 1, '2019-04-29 12:39:08', '2019-04-29 12:39:08'),
(40, 31, 3, '2019-04-29 12:40:23', '2019-04-29 12:40:23');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin', NULL, NULL),
(2, 'Student', 'student', NULL, NULL),
(3, 'Teacher', 'teacher', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(9) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `user_id`, `name`, `image`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'Mathematics 1', 'mathematics-1-2019-05-02-5cca8146bc7b1.jpg', 'mathematics-1', '2019-04-14 04:19:59', '2019-05-01 23:33:58'),
(3, 1, 'Physics 1', 'physics-1-2019-05-02-5cca817211d42.jpg', 'physics-1', '2019-04-14 04:51:25', '2019-05-01 23:34:42'),
(5, 1, 'Mathematics 2', 'mathematics-2-2019-05-02-5cca81a2ab971.jpg', 'mathematics-2', '2019-04-14 08:22:21', '2019-05-01 23:35:30'),
(6, 1, 'Computer Graphics', 'computer-graphics-2019-05-02-5cca81dcca801.png', 'computer-graphics', '2019-04-25 11:30:25', '2019-05-01 23:36:29'),
(7, 1, 'Computer Fundamentals', 'computer-fundamentals-2019-05-02-5cca8209826ac.jpg', 'computer-fundamentals', '2019-04-26 09:05:35', '2019-05-01 23:37:13'),
(8, 1, 'Basic Fundamental English and English Spoken', 'basic-fundamental-english-and-english-spoken-2019-05-02-5cca822cb0145.jpg', 'basic-fundamental-english-and-english-spoken', '2019-04-26 09:06:14', '2019-05-01 23:37:48'),
(9, 1, 'Program and problem solving', 'program-and-problem-solving-2019-05-02-5cca8243c662d.jpg', 'program-and-problem-solving', '2019-04-26 09:06:59', '2019-05-01 23:38:11'),
(10, 1, 'Writing and comprehension', 'writing-and-comprehension-2019-05-02-5cca825f4b1b5.jpg', 'writing-and-comprehension', '2019-04-26 09:07:34', '2019-05-01 23:38:39'),
(11, 1, 'Discrete Mathematics', 'discrete-mathematics-2019-05-02-5cca828345956.jpg', 'discrete-mathematics', '2019-04-26 09:07:59', '2019-05-01 23:39:15'),
(12, 1, 'Electrical Circuits', 'electrical-circuits-2019-05-02-5cca8308e10d2.jpg', 'electrical-circuits', '2019-04-26 09:08:25', '2019-05-01 23:41:29'),
(13, 1, 'Data Structure', 'data-structure-2019-05-02-5cca835b2a0ff.png', 'data-structure', '2019-04-26 09:09:00', '2019-05-01 23:42:51'),
(14, 1, 'Ordinary and partial Differential Equations', 'ordinary-and-partial-differential-equations-2019-05-02-5cca837db14a7.jpg', 'ordinary-and-partial-differential-equations', '2019-04-26 09:10:01', '2019-05-01 23:43:25'),
(15, 1, 'Engineering Mathematics', 'engineering-mathematics-2019-05-02-5cca83932f74d.jpg', 'engineering-mathematics', '2019-04-26 09:10:33', '2019-05-01 23:43:47'),
(16, 1, 'Digital Electronics', 'digital-electronics-2019-05-02-5cca83d837e18.jpg', 'digital-electronics', '2019-04-26 09:10:56', '2019-05-01 23:44:56'),
(17, 1, 'Object Oriented Programming', 'object-oriented-programming-2019-05-02-5cca8412d471f.jpg', 'object-oriented-programming', '2019-04-26 09:11:22', '2019-05-01 23:45:54'),
(18, 1, 'Bangladesh Studies', 'bangladesh-studies-2019-05-02-5cca84792db00.jpg', 'bangladesh-studies', '2019-04-26 09:11:46', '2019-05-01 23:47:38'),
(19, 1, 'Algorithms', 'algorithms-2019-05-02-5cca84b48bbe2.png', 'algorithms', '2019-04-26 09:12:22', '2019-05-01 23:48:36'),
(20, 1, 'Statistics and Probability', 'statistics-and-probability-2019-05-02-5cca84dc40862.jpg', 'statistics-and-probability', '2019-04-26 09:13:08', '2019-05-01 23:49:16'),
(21, 1, 'Electronics Device and Circuits', 'electronics-device-and-circuits-2019-05-02-5cca8575153f2.jpg', 'electronics-device-and-circuits', '2019-04-26 09:13:43', '2019-05-01 23:51:49'),
(22, 1, 'Microprocessor and Assembly Language', 'microprocessor-and-assembly-language-2019-05-02-5cca86274e4dd.png', 'microprocessor-and-assembly-language', '2019-04-26 09:14:18', '2019-05-01 23:54:47'),
(23, 1, 'Data Communication', 'data-communication-2019-05-02-5cca867f1da5b.jpg', 'data-communication', '2019-04-26 09:14:36', '2019-05-01 23:56:15'),
(24, 1, 'Numerical Methods', 'numerical-methods-2019-05-02-5cca86d38ff39.png', 'numerical-methods', '2019-04-26 09:14:52', '2019-05-01 23:57:39'),
(25, 1, 'Introduction to Bio-Informatics', 'introduction-to-bio-informatics-2019-05-02-5cca86fea2747.jpg', 'introduction-to-bio-informatics', '2019-04-26 09:15:32', '2019-05-01 23:58:22'),
(26, 1, 'Database Management System', 'database-management-system-2019-05-02-5cca873d44515.png', 'database-management-system', '2019-04-26 09:16:46', '2019-05-01 23:59:25'),
(27, 1, 'Computer Network', 'computer-network-2019-05-02-5cca87582af41.jpg', 'computer-network', '2019-04-26 09:17:02', '2019-05-01 23:59:52'),
(28, 1, 'Economics', 'economics-2019-05-02-5cca879acb02e.jpg', 'economics', '2019-04-26 09:17:16', '2019-05-02 00:00:59'),
(29, 1, 'System Analysis and Design', 'system-analysis-and-design-2019-05-02-5cca8874162eb.png', 'system-analysis-and-design', '2019-04-26 09:17:50', '2019-05-02 00:04:36'),
(30, 1, 'Computer Architecture and Organization', 'computer-architecture-and-organization-2019-05-02-5cca88a00dd80.jpg', 'computer-architecture-and-organization', '2019-04-26 09:18:17', '2019-05-02 00:05:20'),
(31, 1, 'Operating Systems', 'operating-systems-2019-05-02-5cca88f0db96e.jpeg', 'operating-systems', '2019-04-26 09:18:44', '2019-05-02 00:06:41'),
(32, 1, 'Art of Effective Living', 'art-of-effective-living-2019-05-02-5cca89420f427.jpg', 'art-of-effective-living', '2019-04-26 09:19:12', '2019-05-02 00:08:02'),
(33, 1, 'Compiler Design', 'compiler-design-2019-05-02-5cca89882057d.png', 'compiler-design', '2019-04-26 09:19:43', '2019-05-02 00:09:12'),
(34, 1, 'Software Engineering', 'software-engineering-2019-05-02-5cca89d5a8ea0.jpg', 'software-engineering', '2019-04-26 09:20:14', '2019-05-02 00:10:29'),
(35, 1, 'Wireless Programming', 'wireless-programming-2019-05-02-5cca8a6406e85.jpg', 'wireless-programming', '2019-04-26 09:20:38', '2019-05-02 00:12:52'),
(36, 1, 'Financial and Managerial Accounting', 'financial-and-managerial-accounting-2019-05-02-5cca8a82668a9.jpg', 'financial-and-managerial-accounting', '2019-04-26 09:21:15', '2019-05-02 00:13:22'),
(37, 1, 'Artificial Intelligence', 'artificial-intelligence-2019-05-02-5cca8ac8e6eaf.jpg', 'artificial-intelligence', '2019-04-26 09:21:48', '2019-05-02 00:14:33'),
(38, 1, 'Simulation and Modelling', 'simulation-and-modelling-2019-05-02-5cca8b56374c2.jpg', 'simulation-and-modelling', '2019-04-26 09:22:19', '2019-05-02 00:16:54'),
(39, 1, 'Web Engineering', 'web-engineering-2019-05-02-5cca8ba24b7f0.jpg', 'web-engineering', '2019-04-26 09:22:39', '2019-05-02 00:18:10'),
(40, 1, 'Embedded Systems', 'embedded-systems-2019-05-02-5cca8bec098b6.jpg', 'embedded-systems', '2019-04-26 09:23:29', '2019-05-02 00:19:24'),
(41, 1, 'Social and Professional Issues in Computer', 'social-and-professional-issues-in-computer-2019-05-02-5cca8c5abb245.jpg', 'social-and-professional-issues-in-computer', '2019-04-26 09:25:06', '2019-05-02 00:21:14'),
(42, 1, 'Digital Image Processing', 'digital-image-processing-2019-05-02-5cca8ca3554b2.jpg', 'digital-image-processing', '2019-04-26 09:25:43', '2019-05-02 00:22:27');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL DEFAULT '2' COMMENT '2=Student | 3=Teacher',
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default.png',
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `username`, `email`, `password`, `image`, `designation`, `about`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Md. Nazimul Islam Naeem', 'nazimul', 'nazimulnaeem@gmail.com', '$2y$10$//7i1cF/OP3/O8qtI2v3/.oQ15X49gkjdyBLWumfwtzPiH6XEwt4C', 'md-nazimul-islam-naeem-2019-05-02-5cca5f9c85d2c.jpg', 'Admin', 'Laravel website Developer', NULL, NULL, '2019-05-01 21:10:21'),
(2, 2, 'Md. Rakibul Hasan Pathan', 'rakib', 'pathan15-5810@diu.edu.bd', '$2y$10$LMg1dK8NwnOfPfr2cEKauuFuQ1rjjUs5LZ.6NTzUJ4KG5BpDbaEzS', 'md-rakibul-hasan-pathan-2019-05-02-5ccabba0ed6e6.jpg', NULL, 'daffodilian', NULL, NULL, '2019-05-02 11:27:24'),
(3, 3, 'Aninda Debnath', 'aninda', 'debnath15-5618@diu.edu.bd', '$2y$10$tEsj0VvJ3Vfljj946wfAPOXN9aCfcbBrRiOZGBf6p.XYPBcNOJuo2', 'aninda-debnath-2019-05-02-5cca932d3c8c0.jpg', 'Lecturar', NULL, NULL, NULL, '2019-05-02 00:50:21'),
(7, 2, 'Salma Akther Popi', 'popi', 'akther15-4683@diu.edu.bd', '$2y$10$/knIb.R0aqT.ATVIwvMzeOCyKV0qiX6EZbE7kuT4.yApL9pQVOBlG', 'default.png', NULL, 'I am a student of Daffodil International University', NULL, '2019-04-17 00:33:58', '2019-04-17 01:59:58'),
(8, 3, 'Md. Borhan Uddin', 'borhan', 'borhan15-5746@diu.edu.bd', '$2y$10$eFgzRAe723U.iH1FFDyQF.EejMcUCDoia.nqKx2KMOaitORhLHS5m', 'md-borhan-uddin-2019-05-02-5cca9a33c7426.jpg', 'Lecturar', NULL, NULL, '2019-04-17 00:34:41', '2019-05-02 01:20:20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_post`
--
ALTER TABLE `category_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_question`
--
ALTER TABLE `category_question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_post_id_foreign` (`post_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`);

--
-- Indexes for table `comment_questions`
--
ALTER TABLE `comment_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_user_id_foreign` (`user_id`);

--
-- Indexes for table `post_tag`
--
ALTER TABLE `post_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_user`
--
ALTER TABLE `post_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_user_post_id_foreign` (`post_id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_user_id_foreign` (`user_id`);

--
-- Indexes for table `question_tag`
--
ALTER TABLE `question_tag`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category_post`
--
ALTER TABLE `category_post`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `category_question`
--
ALTER TABLE `category_question`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comment_questions`
--
ALTER TABLE `comment_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `post_tag`
--
ALTER TABLE `post_tag`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `post_user`
--
ALTER TABLE `post_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `question_tag`
--
ALTER TABLE `question_tag`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `post_user`
--
ALTER TABLE `post_user`
  ADD CONSTRAINT `post_user_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
