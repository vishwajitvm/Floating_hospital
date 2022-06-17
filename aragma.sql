-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 12:48 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `aragma`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_17_073607_create_sessions_table', 1),
(8, '2021_11_09_143656_create_parties_table', 2),
(9, '2021_12_07_083639_create_userparty_requests_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `parties`
--

CREATE TABLE `parties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `party_hosted_by` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_starting_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_ending_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_starting_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_ending_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_fees` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_discount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_includes` varchar(1000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_banner_image` varchar(10000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_gallary_images` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_gallary_videos` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_status` enum('approve','deny') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parties`
--

INSERT INTO `parties` (`id`, `party_hosted_by`, `party_name`, `party_description`, `party_starting_date`, `party_ending_date`, `party_starting_time`, `party_ending_time`, `party_city`, `party_location`, `party_fees`, `party_discount`, `party_includes`, `party_banner_image`, `party_gallary_images`, `party_gallary_videos`, `party_status`, `created_at`, `updated_at`) VALUES
(1, 'vishwa', 'party one', 'abc party description here test 1 Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney C', '2021-11-15', '2021-12-03', '16:41', '19:47', 'new delhi', NULL, '1000', '200', '\"Welcome Drink,Snacks,Music,Games,Host,Stay,Breakfast,Dinner\"', '202111301248istockphoto-1174840407-612x612.jpg', 'upload/party_gallary_image/043ab21fc5a1607b381ac3896176dac6.png|upload/party_gallary_image/2723ad49bd0d27b97b735e4822085e12.png', 'upload/party_gallary_videos/866d90e0921ac7b024b47d672445a086.mp4', 'approve', '2021-11-15 05:42:34', '2021-11-30 07:18:48'),
(3, 'vishwa', 'party 3', 'this is testing forContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virgi Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.\n\nThe standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.', '2021-11-26', '2021-11-29', '12:03', '17:03', 'new delhi', 'cafe', '4000', '200', '\"Welcome Drink,Snacks,Music,Open mic,Artist Performance,Stay,Breakfast,Dinner,Gift\"', '202111260636a873f39987e3f5d1337cb74d20c23d9b.jpg', 'upload/party_gallary_image/f0e6be4ce76ccfa73c5a540d992d0756.jpg|upload/party_gallary_image/d095a94d20dcaf7aa07301948549bede.jpg|upload/party_gallary_image/4cc5400e63624c44fadeda99f57588a6.jpg|upload/party_gallary_image/f5c150afbfbcef941def203e85cf40bc.jpg|upload/party_gallary_image/2aedcba61ca55ceb62d785c6b7f10a83.jpg', 'upload/party_gallary_videos/25ef0d887bc7a2b30089a025618e1c62.mp4', 'deny', '2021-11-26 01:06:05', '2021-11-26 03:37:45'),
(4, 'vishwa', 'Martinis at Midnight', '\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"\r\n\"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?\"', '2021-11-12', '2021-12-12', '19:11', '20:11', 'noida', 'crobar cafe', '5800', '500', '\"Welcome Drink,Music,Games,Host,Stay,Breakfast\"', '202111301245new-photos-of-one-club.jpg', 'upload/party_gallary_image/d4ec33c0c23ae3c91764fcc625108a5a.jpg|upload/party_gallary_image/991327d63593b0ba2c45618bf81f6a64.jpg|upload/party_gallary_image/4f16c818875d9fcb6867c7bdc89be7eb.jpg', 'upload/party_gallary_videos/1b90614883e606d5621b45c14f4f2963.mov', 'approve', '2021-11-30 07:15:56', '2021-11-30 07:15:56'),
(5, 'vishwa', 'Hollywood New Year\'s Eve Party 2022', 'So don\'t miss out on this NYE party at Gatsby\'s Hideout. Dress up in your best 1920s attire; and get ready to ring in the New Year in grand Gatsby style!\r\n\r\nHollywood , CA – December 31, 2021 – VIP Nightlife invites party-goers to ring in the New Year in true 1920’s flapper fashion. Gatsby’s Hideout will be a trip back into the roaring twenties; when women were known as eccentric flappers and men spared no expense to be the big cheese.\r\nFrom 9:00pm - 2:00am, enjoy premium drinks at multiple fully stocked prepaid open bars. Each ticket purchase is prepayment for your choice of beverages.\r\nGuests are invited to dress in their best roaring 20’s theme; accessories and festive party favors will also be provided.\r\nThis multi room New Year\'s Eve party will have surprises throughout the night -- topped with a countdown celebration you won’t soon forget!\r\nWith popular LA DJs spinning all your favorite open format music, from Edm to Top 40 & Hip-Hop, Gatsby\'s Hideout NYE will be your best option to have the time of your life!\r\nVIP Nightlife is bringing you this unique event. This international nightlife brand is proud to bring this ultra-exclusive, upscale event to Tinseltown LA. But act fast -- Hollywood\'s most anticipated new VIP-only NYE expects to sell out early (limited tickets may be available at door TBA).', '2021-12-31', '2022-01-01', '22:00', '06:00', 'new delhi', 'The Big Chill Cafe', '5000', '500', '\"Welcome Drink,Snacks,Music,Games,Drinks,Open mic,Artist Performance,Host,Stay,Breakfast,Dinner,Adventure\"', '202112021255girls-party-fun-dance-wallpaper-preview.jpg', 'upload/party_gallary_image/66705064b387572428517e38ae23e019.jpg|upload/party_gallary_image/fa183ba81b8f82c988245d8d4e701366.jpg|upload/party_gallary_image/d4b0a4ece86c42fe7c34d6eaa9aef588.jpg|upload/party_gallary_image/c6d4eb15f1e84a36eff58eca3627c82e.jpg|upload/party_gallary_image/e561611fa0ccf4a2c8867a82f8382816.jpg|upload/party_gallary_image/8aa903e40952a84bd7177ad2daeb5962.jpg|upload/party_gallary_image/c359889a833e7612e0cff1dc69d272bc.jpg|upload/party_gallary_image/25702d4234f4c7dc542adde64426a7ca.jpg|upload/party_gallary_image/9914464f0e6bdfa960015601578bcf2c.jpg|upload/party_gallary_image/6be93f7a96fed60c477d30ae1de032fd.jpg|upload/party_gallary_image/e4a86b0d7bf4c46d7d550a92b0b2fcae.jpg|upload/party_gallary_image/11f524c3fbfeeca4aa916edcb6b6392e.jpg', 'upload/party_gallary_videos/31f81674a348511b990af268ca3a8391.mp4|upload/party_gallary_videos/31ca0ca71184bbdb3de7b20a51e88e90.mp4|upload/party_gallary_videos/1ae5168b14a6091d623291902ac36e7c.mp4', NULL, '2021-12-02 07:25:23', '2021-12-02 07:25:23'),
(6, 'vishwa', 'crishmas party', 'Mix up the clichés keep it classy and ensure the perfect Christmas event or themed event if youre reading this post-December. We are able to not only craft a paper for you from. During open house days the room is full of decoration sandwiches donuts as well as fruits are set on the table the coffeemaker is continuously switched on. Once you have discussed details and pricing with our support team you can go to Christmas Party Description Essay Order Page and fill all the requested fields regarding your order. The anniversary of Christs birth legitimises another special celebration - the. Company invites you to the annual office holiday party.Mix up the clichés keep it classy and ensure the perfect Christmas event or themed event if youre reading this post-December. We are able to not only craft a paper for you from. During open house days the room is full of decoration sandwiches donuts as well as fruits are set on the table the coffeemaker is continuously switched on. Once you have discussed details and pricing with our support team you can go to Christmas Party Description Essay Order Page and fill all the requested fields regarding your order. The anniversary of Christs birth legitimises another special celebration - the. Company invites you to the annual office holiday party.Mix up the clichés keep it classy and ensure the perfect Christmas event or themed event if youre reading this post-December. We are able to not only craft a paper for you from. During open house days the room is full of decoration sandwiches donuts as well as fruits are set on the table the coffeemaker is continuously switched on. Once you have discussed details and pricing with our support team you can go to Christmas Party Description Essay Order Page and fill all the requested fields regarding your order. The anniversary of Christs birth legitimises another special celebration - the. Company invites you to the annual office holiday party.', '2021-12-25', '2021-11-26', '13:06', '02:06', 'new delhi', 'The Big Chill Cafe', '4000', '200', '\"Welcome Drink,Snacks,Music,Drinks,Host,Stay,Dinner,Adventure\"', '202112080937wp2848024.jpg', 'upload/party_gallary_image/596dedf4498e258e4bdc9fd70df9a859.jpg|upload/party_gallary_image/5352696a9ca3397beb79f116f3a33991.jpg|upload/party_gallary_image/7b66e8931c93da8c88a0a8b6dec62f9e.jpg|upload/party_gallary_image/36fa3ecc0b2d2bfe0bec0f2b369f24db.jpg', 'upload/party_gallary_videos/1511919f603e917ae2f763b63c5c15b6.mp4|upload/party_gallary_videos/4ef42b32bccc9485b10b8183507e5d82.mp4', 'approve', '2021-12-08 04:07:49', '2021-12-13 06:33:45'),
(7, 'vishwa', 'chat party 3.0', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2021-12-13', '2021-12-15', '14:46', '23:46', 'new delhi', NULL, '5000', '1000', '\"Welcome Drink,Snacks,Music,Games,Drinks,Open mic,Artist Performance,Host,Stay,Dinner,Gift\"', '202112130918photo-1517457373958-b7bdd4587205.jpg', 'upload/party_gallary_image/6c8dba7d0df1c4a79dd07646be9a26c8.jpg|upload/party_gallary_image/1371bccec2447b5aa6d96d2a540fb401.jpg|upload/party_gallary_image/4a4526b1ec301744aba9526d78fcb2a6.jpg', 'upload/party_gallary_videos/b139e104214a08ae3f2ebcce149cdf6e.mp4', 'approve', '2021-12-13 03:48:23', '2021-12-13 03:50:08');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('3pW1nhJMQlQgu68MK3NCNbzGCPCIg3W0sqa9W5PC', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 'YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDQ6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wYXJ0eXJlcXVlc3QvcGFydHl2aWV3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6IkZHdHFmb0Y3eWFhRktiOEJLb25ITGx6TWV2M2dHTmhjUHhJV0gxcTEiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR4eklBbVcvL01MTG1aT3RhWnNMaE5lSUpUYU1xREw5WlFZMVBMamV6RHc4V0hVY3B2OEczNiI7fQ==', 1639477984),
('7hafZFSh5Z7lUhFP6nRpXylgR5IBdl0lMN1tDz9O', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 'YTo1OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJySXY0SGRLbldVbno5TzloTlkyd3VpdkptZHVnb2tIYWc4bFk3RHd5IjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJHZhYlJObTVhb2Y1SFc3NTl3QmZMai5MN2ZKd2xOeWNyNmJqTVNhcy5LWS50Q2RoM09sc1QyIjt9', 1639481958),
('kQ4uOq2OyacDfVyNsEGkX0grwzZykAfD4qmHFtCe', 3, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/96.0.4664.93 Safari/537.36', 'YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC91c2Vycy92aWV3Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo2OiJfdG9rZW4iO3M6NDA6IjJlYmFEYmpnNThHb0hybWc1czc3SlUwTDJxbzJWd2FKTnhPcDVjbVkiO3M6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjM7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMCR4eklBbVcvL01MTG1aT3RhWnNMaE5lSUpUYU1xREw5WlFZMVBMamV6RHc4V0hVY3B2OEczNiI7fQ==', 1639481787);

-- --------------------------------------------------------

--
-- Table structure for table `userparty_requests`
--

CREATE TABLE `userparty_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_party_request_username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_party_request_useremail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_party_request_userphoneno1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `request_party_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_party_contribution` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_party_request_userphoneno2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `party_request_special_message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_party_request_status` enum('approve','deny') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `userparty_requests`
--

INSERT INTO `userparty_requests` (`id`, `user_party_request_username`, `user_party_request_useremail`, `user_party_request_userphoneno1`, `request_party_name`, `user_party_contribution`, `user_party_request_userphoneno2`, `party_request_special_message`, `user_party_request_status`, `created_at`, `updated_at`) VALUES
(1, 'rohit', 'rohit@gmail.com', '1234567890', 'Martinis at Midnight', '\"Singing,Hosting,Sharing Story,Comedy,Dancing\"', '8920352111', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'approve', '2021-12-07 07:05:00', '2021-12-07 07:05:00'),
(2, 'rohit', 'rohit@gmail.com', '1234567890', 'party one', '\"Singing,Hosting,Comedy,Dancing\"', '125247582', 'this is second test message for party here', 'deny', '2021-12-07 07:13:30', '2021-12-10 03:54:22'),
(3, 'yash', 'yash@gmail.com', '1234567890', 'Martinis at Midnight', '\"Singing,Hosting,Promoting,Dancing\"', '01458295725', 'this is testing special message', 'approve', '2021-12-08 00:58:26', '2021-12-10 03:36:53'),
(4, 'yash', 'yash@gmail.com', '1234567890', 'party one', '\"Singing,Promoting,Dancing\"', '12528547825', 'this is another demo special message', 'deny', '2021-12-08 01:03:24', '2021-12-10 09:31:20'),
(5, 'rohit', 'rohit@gmail.com', '1234567890', 'Martinis at Midnight', '\"Singing,Hosting,Promoting,Sharing Story\"', '585874857', 'this is testing message for the party booking.', 'deny', '2021-12-11 01:56:54', '2021-12-11 01:58:39'),
(6, 'ashish', 'ashish@gmail.com', '1234567899', 'chat party 3.0', '\"Singing,Hosting,Promoting,Sharing Story\"', '142528587', 'jbdskhbdsvhkbdhvbds', 'approve', '2021-12-13 03:52:29', '2021-12-13 03:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `usertype` enum('user','admin') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'user,Admin',
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmail_address` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_profile` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram_profile` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkdine_profile` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hear_about_party` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectation_from_aragma` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_tallent` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('active','inactive') COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'admin=head of sotware,operator=computer operator,user=employee',
  `join_date` date DEFAULT NULL,
  `designation_id` int(11) DEFAULT NULL,
  `salary` double DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active' COMMENT '0=inactive,1=active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `mobile`, `address`, `gender`, `birth_date`, `gmail_address`, `facebook_profile`, `instagram_profile`, `linkdine_profile`, `hear_about_party`, `expectation_from_aragma`, `user_tallent`, `image`, `fname`, `mname`, `religion`, `id_no`, `dob`, `code`, `role`, `join_date`, `designation_id`, `salary`, `status`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'user', 'rohit', 'rohit@gmail.com', NULL, '$2y$10$DyJ3AEWfIi.roBcloNt4UOtGAz14PJBcH84E9WnjTTSWN.O1CfPqC', NULL, NULL, '1234567890', 'Delhi', NULL, '1996-12-27', 'www.mygmail.com', 'www.facebook.com/userunkown1054', 'www.instagram.com/userprofileinsta', 'www.linkdine.com/userprofile', 'Instagram', NULL, NULL, '202111081108img_avatar3.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-10-07 07:10:08', '2021-11-09 01:40:45'),
(3, 'admin', 'vishwa', 'vishwa@gmail.com', NULL, '$2y$10$xzIAmW//MLLmZOtaZsLhNeIJTaMqDL9ZQY1PLjezDw8WHUcpv8G36', NULL, NULL, '8920352115', 'Delhi', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', '202111090804download (1).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-10-09 03:07:54', '2021-11-09 02:34:57'),
(5, 'user', 'test', 'test@gmail.com', NULL, '$2y$10$9SVHXZI7LvtILxBuB2Zwpe4FVCb9a/XoiS6JIk.jo05OYSRtCEXCi', NULL, NULL, '8920352115', 'Delhi', 'Male', NULL, NULL, NULL, NULL, NULL, NULL, '', '', '202110290934concrete-power-floater-250x250.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'inactive', NULL, NULL, NULL, '2021-10-20 06:51:16', '2021-10-29 04:04:46'),
(6, 'user', 'test2', 'test2@gmail.com', NULL, '$2y$10$AnbeYIeUXcH6yLcnpwPKVujzMTzHjXtr3pThJZMvqkbMe.cSUrkT2', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-10-21 01:17:04', '2021-10-30 03:07:02'),
(7, NULL, 'new user', 'newuser@gmail.com', NULL, '$2y$10$wBa4oSQ.UPhXFghXGpO7yeeEs2VC/JorjLI9fE7Dp0JMk1uPHsPuG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-11-08 02:49:56', '2021-11-08 02:49:56'),
(8, 'user', 'yash', 'yash@gmail.com', NULL, '$2y$10$YrcKvD1ouUu58LlGuli51.qiA3Ktfl83Bq1kfKqc.9lfCmZ0X/1vC', NULL, NULL, '1234567890', 'Delhi', 'Male', '2021-11-26', 'www.mygmail.com', 'www.facebook.com/userunkown1054', 'www.instagram.com/userprofileinsta', 'www.linkdine.com/userprofile', 'Instagram', 'partying hard', 'party like animal', '202111081313Asset 10@4x.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-11-08 02:57:10', '2021-11-08 07:43:10'),
(9, NULL, 'test3', 'test3@gmail.com', NULL, '$2y$10$ClUfkoVg3TOm3TdftnPbdu9ffKm.P1nMMPfmHehTjPRF0YnVuT.dW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-11-08 03:12:28', '2021-11-08 03:12:28'),
(10, 'user', 'abc', 'abc@gmail.com', NULL, '$2y$10$43kv0hw/gDls1gIw/8BLleglsJkOUR6KAXYMm4bjJo5qChl76.xlW', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-11-08 08:02:05', '2021-11-08 08:04:41'),
(11, 'admin', 'newadmin', 'newadmin@gmail.com', NULL, '$2y$10$lYT7ZGKaTjK4mjadFaUYPOqWtGAewm1jNuqrgC9VtQsyO.KrKXuBC', NULL, NULL, '1234567899', 'new delhi', NULL, '2001-12-21', 'newadmin@gmail.com', 'www.fb.com/unknoiw1212', 'www.instagram.com/unknoiw1212', 'www.linkdine.com/unknoiw1212', 'Newspaper', 'partying hard', 'patying aas animal', '202111090749download (1).png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-11-09 02:06:45', '2021-11-09 02:19:59'),
(12, 'user', 'ashish', 'ashish@gmail.com', NULL, '$2y$10$vabRNm5aof5HW759wBfLj.L7fJwlNycr6bjMSas.KY.tCdh3OlsT2', NULL, NULL, '1234567899', 'palam , south west delhi', 'Male', '1987-11-13', 'abcd@gmail.com', 'www.facebook.com/userunkown1054', 'www.instagram.com/userprofileinsta', 'www.linkdine.com/userprofile', 'Facebook', 'partying hard', 'coder', '202112130911WhatsApp Image 2021-12-12 at 7.49.20 PM.jpeg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'active', NULL, NULL, NULL, '2021-12-13 03:36:04', '2021-12-14 04:49:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parties`
--
ALTER TABLE `parties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `userparty_requests`
--
ALTER TABLE `userparty_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `parties`
--
ALTER TABLE `parties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userparty_requests`
--
ALTER TABLE `userparty_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
