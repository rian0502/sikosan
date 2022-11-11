-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2022 at 03:18 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sikosan`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth_activation_attempts`
--

CREATE TABLE `auth_activation_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups`
--

CREATE TABLE `auth_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups`
--

INSERT INTO `auth_groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'administrator, level entitas yang mengurusi seluruh sistem'),
(2, 'customer', 'customer, level entitas yang hanya dapat melakukan pencarian kost'),
(3, 'owner', 'owner, level entitas yang dapat melakukan untuk memasarkan kosannya');

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_permissions`
--

CREATE TABLE `auth_groups_permissions` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_groups_users`
--

CREATE TABLE `auth_groups_users` (
  `group_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_groups_users`
--

INSERT INTO `auth_groups_users` (`group_id`, `user_id`) VALUES
(1, 5),
(2, 1),
(2, 4),
(3, 2),
(3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `auth_logins`
--

CREATE TABLE `auth_logins` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `user_id` int(11) UNSIGNED DEFAULT NULL,
  `date` datetime NOT NULL,
  `success` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth_logins`
--

INSERT INTO `auth_logins` (`id`, `ip_address`, `email`, `user_id`, `date`, `success`) VALUES
(1, '::1', 'muhammadfebrianhasibuan@gmail.com', 1, '2022-10-31 11:56:03', 1),
(2, '::1', 'muhammadfebrianhasibuan@gmail.com', NULL, '2022-10-31 23:37:22', 0),
(3, '::1', 'muhammadfebrianhasibuan@gmail.com', 1, '2022-10-31 23:40:34', 1),
(4, '::1', 'nevsisipitnya@gmail.com', NULL, '2022-10-31 23:40:53', 0),
(5, '::1', 'nevsisipitnya@gmail.com', NULL, '2022-10-31 23:41:00', 0),
(6, '::1', 'nevsisipitnya@gmail.com', NULL, '2022-10-31 23:41:09', 0),
(7, '::1', 'nevsisipitnya@gmail.com', NULL, '2022-10-31 23:41:51', 0),
(8, '::1', 'nevsisipitnya@gmail.com', 2, '2022-10-31 23:41:56', 1),
(9, '::1', 'nevsisipitnya@gmail.com', 2, '2022-11-01 17:52:22', 1),
(10, '::1', 'muhammadfebrianhasibuan@gmail.com', NULL, '2022-11-01 18:01:06', 0),
(11, '::1', 'muhammadfebrianhasibuan@gmail.com', 1, '2022-11-01 18:01:12', 1),
(12, '::1', 'muhammadfebrianhasibuan@gmail.com', 1, '2022-11-01 22:45:00', 1),
(13, '::1', 'nevsisipitnya@gmail.com', NULL, '2022-11-01 22:45:16', 0),
(14, '::1', 'nevsisipitnya@gmail.com', 2, '2022-11-01 22:45:20', 1),
(15, '::1', 'febrianhasibuan090@gmail.com', 3, '2022-11-01 23:23:21', 1),
(16, '::1', 'muhammadfebrianhasibuan@gmail.com', 1, '2022-11-02 00:19:11', 1),
(17, '::1', 'febrianhasibuan090@gmail.com', 3, '2022-11-02 00:25:41', 1),
(18, '::1', 'muhammad.febrianhasibuan2033@students.unila.ac.id', NULL, '2022-11-02 00:43:51', 0),
(19, '::1', 'nevsisipitnya@gmail.com', 2, '2022-11-03 22:41:39', 1),
(20, '::1', 'muhammadfebrianhasibuan@gmail.com', NULL, '2022-11-04 00:16:08', 0),
(21, '::1', 'muhammadfebrianhasibuan@gmail.com', 1, '2022-11-04 00:16:14', 1),
(22, '::1', 'nevsisipitnya@gmail.com', 2, '2022-11-05 13:08:21', 1),
(23, '::1', 'rifan@gmail.com', 4, '2022-11-10 19:11:22', 1),
(24, '::1', 'akuadmin@gmail.com', 5, '2022-11-10 20:31:48', 1),
(25, '::1', 'rifan@gmail.com', 4, '2022-11-10 20:52:19', 1),
(26, '::1', 'akuadmin@gmail.com', 5, '2022-11-10 21:02:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `auth_permissions`
--

CREATE TABLE `auth_permissions` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_reset_attempts`
--

CREATE TABLE `auth_reset_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `ip_address` varchar(255) NOT NULL,
  `user_agent` varchar(255) NOT NULL,
  `token` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_tokens`
--

CREATE TABLE `auth_tokens` (
  `id` int(11) UNSIGNED NOT NULL,
  `selector` varchar(255) NOT NULL,
  `hashedValidator` varchar(255) NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `expires` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `auth_users_permissions`
--

CREATE TABLE `auth_users_permissions` (
  `user_id` int(11) UNSIGNED NOT NULL DEFAULT 0,
  `permission_id` int(11) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `foto_kosan`
--

CREATE TABLE `foto_kosan` (
  `id_kosan` int(11) UNSIGNED NOT NULL,
  `id_foto` int(11) UNSIGNED NOT NULL,
  `nama_foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `foto_kosan`
--

INSERT INTO `foto_kosan` (`id_kosan`, `id_foto`, `nama_foto`) VALUES
(4, 10, '1667319619_2a65d74dc7143accffa9.jpg'),
(5, 11, '1667319996_8361e66b915860d51a16.jpg'),
(5, 12, '1667319996_5345a318747cc02eef72.jpg'),
(5, 13, '1667319996_92018babd7fa6ca6e307.jpg'),
(6, 14, '1667323572_ab5b77254160801f4d31.jpg'),
(6, 15, '1667320628_9d3a1e797f709d97c8bc.jpg'),
(6, 17, '1667323690_e2282d348b39f448ca45.jpg'),
(4, 18, '1667490155_f5f2f3c4d538b5707de7.jpg'),
(4, 19, '1667490155_ca96aa5b8d4788975058.jpg'),
(7, 20, '1667494863_70e2b75d5145410180d4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(11) UNSIGNED NOT NULL,
  `id_kosan` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `komentar` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `id_kosan`, `id_user`, `komentar`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 'Kosannya apakah ready kak ?', '2022-11-03 22:25:49', '2022-11-03 22:25:49'),
(2, 5, 1, 'apakah ready', '2022-11-03 22:31:08', '2022-11-03 22:31:08');

-- --------------------------------------------------------

--
-- Table structure for table `kosan`
--

CREATE TABLE `kosan` (
  `id_kosan` int(11) UNSIGNED NOT NULL,
  `namaKost` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `fasilitas` text DEFAULT NULL,
  `harga` int(11) NOT NULL,
  `type` enum('Putra','Putri','Campur') NOT NULL,
  `idPemilik` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kosan`
--

INSERT INTO `kosan` (`id_kosan`, `namaKost`, `alamat`, `kota`, `deskripsi`, `fasilitas`, `harga`, `type`, `idPemilik`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Kosan Graha Abadi', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sed minima ea corporis repudiandae doloremque eligendi voluptates pariatur dolor, labore corrupti architecto doloribus. Libero recusandae fuga alias suscipit temporibus dicta nesciunt nobis odio', 'Metro', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scramblLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem IpsumLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsumed it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum', 500000, 'Campur', 2, '2022-11-01 23:20:19', '2022-11-03 23:54:52', NULL),
(5, 'Wisma Atlet', 'Kp.baru indah sejuk, Gg Duku no 2', 'Bandar Lampung', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 650000, 'Putra', 3, '2022-11-01 23:26:36', '2022-11-02 00:15:27', NULL),
(6, 'Kosan Brutal', 'JL Gedong Gedein Dong banget', 'Bandar Lampung', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', 600000, 'Putri', 3, '2022-11-01 23:37:08', '2022-11-02 00:28:10', NULL);
INSERT INTO `kosan` (`id_kosan`, `namaKost`, `alamat`, `kota`, `deskripsi`, `fasilitas`, `harga`, `type`, `idPemilik`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'qwer6t', '<!-- DEBUG-VIEW START 3 APPPATH\\Views\\auth\\owner\\tambah_kosan_page.php -->\r\n<!-- DEBUG-VIEW START 2 APPPATH\\Views\\templates\\sidebar_menu.php -->\r\n<!DOCTYPE html>\r\n<html lang=\"en\">\r\n\r\n<head>\r\n<script type=\"text/javascript\"  id=\"debugbar_loader\" data-time=\"', 'Lampung Barat', '<!-- DEBUG-VIEW START 3 APPPATH\\Views\\auth\\owner\\tambah_kosan_page.php -->\r\n<!-- DEBUG-VIEW START 2 APPPATH\\Views\\templates\\sidebar_menu.php -->\r\n<!DOCTYPE html>\r\n<html lang=\"en\">\r\n\r\n<head>\r\n<script type=\"text/javascript\"  id=\"debugbar_loader\" data-time=\"1667494796.877452\" src=\"http://localhost:8080/?debugbar\"></script><script type=\"text/javascript\"  id=\"debugbar_dynamic_script\"></script><style type=\"text/css\"  id=\"debugbar_dynamic_style\"></style><script class=\"kint-rich-script\">void 0===window.kintShared&&(window.kintShared=function(){\"use strict\";var e={dedupe:function(e,n){return[].forEach.call(document.querySelectorAll(e),function(e){e!==(n=!n||!n.ownerDocument.contains(n)?e:n)&&e.parentNode.removeChild(e)}),n},runOnce:function(e){\"complete\"===document.readyState?e():window.addEventListener(\"load\",e)}};return window.addEventListener(\"click\",function(e){var n;e.target.classList.contains(\"kint-ide-link\")&&((n=new XMLHttpRequest).open(\"GET\",e.target.href),n.send(null),e.preventDefault())}),e}());\r\nvoid 0===window.kintRich&&(window.kintRich=function(){\"use strict\";var l={selectText:function(e){var t=window.getSelection(),a=document.createRange();a.selectNodeContents(e),t.removeAllRanges(),t.addRange(a)},toggle:function(e,t){var a=l.getChildren(e);a&&(e.classList.toggle(\"kint-show\",t),1===a.childNodes.length&&(a=a.childNodes[0].childNodes[0])&&a.classList&&a.classList.contains(\"kint-parent\")&&l.toggle(a,t))},toggleChildren:function(e,t){var a=l.getChildren(e);if(a){var o=a.getElementsByClassName(\"kint-parent\"),n=o.length;for(void 0===t&&(t=e.classList.contains(\"kint-show\"));n--;)l.toggle(o[n],t)}},switchTab:function(e){var t=e.previousSibling,a=0;for(e.parentNode.getElementsByClassName(\"kint-active-tab\")[0].classList.remove(\"kint-active-tab\"),e.classList.add(\"kint-active-tab\");t;)1===t.nodeType&&a++,t=t.previousSibling;for(var o=e.parentNode.nextSibling.childNodes,n=0;n<o.length;n++)n===a?(o[n].classList.add(\"kint-show\"),1===o[n].childNodes.length&&(t=o[n].childNodes[0].childNodes[0])&&t.classList&&t.classList.contains(\"kint-parent\")&&l.toggle(t,!0)):o[n].classList.remove(\"kint-show\")},mktag:function(e){return\"<\"+e+\">\"},openInNewWindow:function(e){var t=window.open();t&&(t.document.open(),t.document.write(l.mktag(\"html\")+l.mktag(\"head\")+l.mktag(\"title\")+\"Kint (\"+(new Date).toISOString()+\")\"+l.mktag(\"/title\")+l.mktag(\'meta charset=\"utf-8\"\')+l.mktag(\'script class=\"kint-rich-script\" nonce=\"\'+l.script.nonce+\'\"\')+l.script.innerHTML+l.mktag(\"/script\")+l.mktag(\'style class=\"kint-rich-style\" nonce=\"\'+l.style.nonce+\'\"\')+l.style.innerHTML+l.mktag(\"/style\")+l.mktag(\"/head\")+l.mktag(\"body\")+\'<input class=\"kint-note-input\" placeholder=\"Take some notes!\"><div class=\"kint-rich\">\'+e.parentNode.outerHTML+\"</div>\"+l.mktag(\"/body\")),t.document.close())},sortTable:function(e,a){var t=e.tBodies[0];[].slice.call(e.tBodies[0].rows).sort(function(e,t){if(e=e.cells[a].textContent.trim().toLocaleLowerCase(),t=t.cells[a].textContent.trim().toLocaleLowerCase(),isNaN(e)||isNaN(t)){if(isNaN(e)&&!isNaN(t))return 1;if(isNaN(t)&&!isNaN(e))return-1}else e=parseFloat(e),t=parseFloat(t);return e<t?-1:t<e?1:0}).forEach(function(e){t.appendChild(e)})},showAccessPath:function(e){for(var t=e.childNodes,a=0;a<t.length;a++)if(t[a].classList&&t[a].classList.contains(\"access-path\"))return t[a].classList.toggle(\"kint-show\"),void(t[a].classList.contains(\"kint-show\")&&l.selectText(t[a]))},showSearchBox:function(e){var t=e.querySelector(\".kint-search\");t&&(t.classList.toggle(\"kint-show\"),t.classList.contains(\"kint-show\")?(e.classList.add(\"kint-show\"),t.focus(),t.select(),l.search(e.parentNode,t.value)):e.parentNode.classList.remove(\"kint-search-root\"))},search:function(e,t){e.querySelectorAll(\".kint-search-match\").forEach(function(e){e.classList.remove(\"kint-search-match\")}),e.classList.remove(\"kint-search-match\"),e.classList.toggle(\"kint-search-root\",t.length),t.length&&l.findMatches(e,t)},findMatches:function(e,t){var a,o,n,r=e.cloneNode(!0);if(r.querySelectorAll(\".access-path\").forEach(function(e){e.remove()}),-1!=r.textContent.toUpperCase().indexOf(t.toUpperCase())){for(s in e.classList.add(\"kint-search-match\"),e.childNodes)if(\"DD\"==e.childNodes[s].tagName){a=e.childNodes[s];break}if(a)if([].forEach.call(a.childNodes,function(e){\"DL\"==e.tagName?l.findMatches(e,t):\"UL\"==e.tagName&&(e.classList.contains(\"kint-tabs\")?o=e.childNodes:e.classList.contains(\"kint-tab-contents\")&&(n=e.childNodes))}),o&&n&&o.length==n.length)for(var s=0;s<o.length;s++){var i=!1;-1!=o[s].textContent.toUpperCase().indexOf(t.toUpperCase())?i=!0:((r=n[s].cloneNode(!0)).querySelectorAll(\".access-path\").forEach(function(e){e.remove()}),-1!=r.textContent.toUpperCase().indexOf(t.toUpperCase())&&(i=!0)),i&&(o[s].classList.add(\"kint-search-match\"),[].forEach.call(n[s].childNodes,function(e){\"DL\"==e.tagName&&l.findMatches(e,t)}))}}},getParentByClass:function(e,t){for(;(e=e.parentNode)&&e.classList&&!e.classList.contains(t););return e},getParentHeader:function(e,t){for(var a=e.nodeName.toLowerCase();\"dd\"!==a&&\"dt\"!==a&&l.getParentByClass(e,\"kint-rich\");)a=(e=e.parentNode).nodeName.toLowerCase();return l.getParentByClass(e,\"kint-rich\")?(e=\"dd\"===a&&t?e.previousElementSibling:e)&&\"dt\"===e.nodeName.toLowerCase()&&e.classList.contains(\"kint-parent\")?e:void 0:null},getChildren:function(e){for(;(e=e.nextElementSibling)&&\"dd\"!==e.nodeName.toLowerCase(););return e},isFolderOpen:function(){if(l.folder&&l.folder.querySelector(\"dd.kint-foldout\"))return l.folder.querySelector(\"dd.kint-foldout\").previousSibling.classList.contains(\"kint-show\")},initLoad:function(){l.style=window.kintShared.dedupe(\"style.kint-rich-style\",l.style),l.script=window.kintShared.dedupe(\"script.kint-rich-script\",l.script),l.folder=window.kintShared.dedupe(\".kint-rich.kint-folder\",l.folder);var t,e=document.querySelectorAll(\"input.kint-search\");[].forEach.call(e,function(t){function e(e){window.clearTimeout(a),t.value!==o&&(a=window.setTimeout(function(){o=t.value,l.search(t.parentNode.parentNode,o)},500))}var a=null,o=null;t.removeEventListener(\"keyup\",e),t.addEventListener(\"keyup\",e)}),l.folder&&(t=l.folder.querySelector(\"dd\"),[].forEach.call(document.querySelectorAll(\".kint-rich.kint-file\"),function(e){e.parentNode!==l.folder&&t.appendChild(e)}),document.body.appendChild(l.folder),l.folder.classList.add(\"kint-show\"))},keyboardNav:{targets:[],target:0,active:!1,fetchTargets:function(){var e=l.keyboardNav.targets[l.keyboardNav.target];l.keyboardNav.targets=[],document.querySelectorAll(\".kint-rich nav, .kint-tabs>li:not(.kint-active-tab)\").forEach(function(e){l.isFolderOpen()&&!l.folder.contains(e)||0===e.offsetWidth&&0===e.offsetHeight||l.keyboardNav.targets.push(e)}),e&&-1!==l.keyboardNav.targets.indexOf(e)&&(l.keyboardNav.target=l.keyboardNav.targets.indexOf(e))},sync:function(e){var t=document.querySelector(\".kint-focused\");t&&t.classList.remove(\"kint-focused\"),l.keyboardNav.active&&((t=l.keyboardNav.targets[l.keyboardNav.target]).classList.add(\"kint-focused\"),e||l.keyboardNav.scroll(t))},scroll:function(e){var t,a;e!==l.folder.querySelector(\"dt > nav\")&&(a=(t=function(e){return e.offsetTop+(e.offsetParent?t(e.offsetParent):0)})(e),l.isFolderOpen()?(e=l.folder.querySelector(\"dd.kint-foldout\")).scrollTo(0,a-e.clientHeight/2):window.scrollTo(0,a-window.innerHeight/2))},moveCursor:function(e){for(l.keyboardNav.target+=e;l.keyboardNav.target<0;)l.keyboardNav.target+=l.keyboardNav.targets.length;for(;l.keyboardNav.target>=l.keyboardNav.targets.length;)l.keyboardNav.target-=l.keyboardNav.targets.length;l.keyboardNav.sync()},setCursor:function(e){if(l.isFolderOpen()&&!l.folder.contains(e))return!1;l.keyboardNav.fetchTargets();for(var t=0;t<l.keyboardNav.targets.length;t++)if(e===l.keyboardNav.targets[t])return l.keyboardNav.target=t,!0;return!1}},mouseNav:{lastClickTarget:null,lastClickTimer:null,lastClickCount:0,renewLastClick:function(){window.clearTimeout(l.mouseNav.lastClickTimer),l.mouseNav.lastClickTimer=window.setTimeout(function(){l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickTimer=null,l.mouseNav.lastClickCount=0},250)}},style:null,script:null,folder:null};return window.addEventListener(\"click\",function(e){var t=e.target;if(l.mouseNav.lastClickTarget&&l.mouseNav.lastClickTimer&&l.mouseNav.lastClickCount)if(t=l.mouseNav.lastClickTarget,1===l.mouseNav.lastClickCount)l.toggleChildren(t.parentNode),l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),l.mouseNav.lastClickCount++,l.mouseNav.renewLastClick();else{for(var a=t.parentNode.classList.contains(\"kint-show\"),o=document.getElementsByClassName(\"kint-parent\"),n=o.length;n--;)l.toggle(o[n],a);l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),l.keyboardNav.scroll(t),window.clearTimeout(l.mouseNav.lastClickTimer),l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickCount=0}else if(l.getParentByClass(t,\"kint-rich\")){var r=t.nodeName.toLowerCase();if(\"dfn\"===r&&l.selectText(t),\"th\"!==r)if((t=l.getParentHeader(t))&&(l.keyboardNav.setCursor(t.querySelector(\"nav\")),l.keyboardNav.sync(!0)),t=e.target,\"li\"===r&&\"kint-tabs\"===t.parentNode.className)\"kint-active-tab\"!==t.className&&l.switchTab(t),(t=l.getParentHeader(t,!0))&&(l.keyboardNav.setCursor(t.querySelector(\"nav\")),l.keyboardNav.sync(!0));else if(\"nav\"===r)\"footer\"===t.parentNode.nodeName.toLowerCase()?(l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),(t=t.parentNode).classList.toggle(\"kint-show\")):(l.toggle(t.parentNode),l.keyboardNav.fetchTargets(),l.mouseNav.lastClickCount=1,l.mouseNav.lastClickTarget=t,l.mouseNav.renewLastClick());else if(t.classList.contains(\"kint-popup-trigger\")){var s=t.parentNode;if(\"footer\"===s.nodeName.toLowerCase())s=s.previousSibling;else for(;s&&!s.classList.contains(\"kint-parent\");)s=s.parentNode;l.openInNewWindow(s)}else t.classList.contains(\"kint-access-path-trigger\")?l.showAccessPath(t.parentNode):t.classList.contains(\"kint-search-trigger\")?l.showSearchBox(t.parentNode):t.classList.contains(\"kint-search\")||(\"pre\"===r&&3===e.detail?l.selectText(t):l.getParentByClass(t,\"kint-source\")&&3===e.detail?l.selectText(l.getParentByClass(t,\"kint-source\")):t.classList.contains(\"access-path\")?l.selectText(t):\"a\"!==r&&(t=l.getParentHeader(t))&&(l.toggle(t),l.keyboardNav.fetchTargets()));else e.ctrlKey||l.sortTable(t.parentNode.parentNode.parentNode,t.cellIndex)}},!0),window.addEventListener(\"keydown\",function(e){if(e.target===document.body&&!e.altKey&&!e.ctrlKey){if(68===e.keyCode){if(l.keyboardNav.active)l.keyboardNav.active=!1;else if(l.keyboardNav.active=!0,l.keyboardNav.fetchTargets(),0===l.keyboardNav.targets.length)return void(l.keyboardNav.active=!1);return l.keyboardNav.sync(),void e.preventDefault()}if(l.keyboardNav.active){if(9===e.keyCode)return l.keyboardNav.moveCursor(e.shiftKey?-1:1),void e.preventDefault();if(38===e.keyCode||75===e.keyCode)return l.keyboardNav.moveCursor(-1),void e.preventDefault();if(40===e.keyCode||74===e.keyCode)return l.keyboardNav.moveCursor(1),void e.preventDefault();var t,a,o=l.keyboardNav.targets[l.keyboardNav.target];if(\"li\"===o.nodeName.toLowerCase()){if(32===e.keyCode||13===e.keyCode)return l.switchTab(o),l.keyboardNav.fetchTargets(),l.keyboardNav.sync(),void e.preventDefault();if(39===e.keyCode||76===e.keyCode)return l.keyboardNav.moveCursor(1),void e.preventDefault();if(37===e.keyCode||72===e.keyCode)return l.keyboardNav.moveCursor(-1),void e.preventDefault()}o=o.parentNode,65===e.keyCode?(l.showAccessPath(o),e.preventDefault()):\"footer\"===o.nodeName.toLowerCase()&&o.parentNode.classList.contains(\"kint-rich\")?32===e.keyCode||13===e.keyCode?(o.classList.toggle(\"kint-show\"),e.preventDefault()):37===e.keyCode||72===e.keyCode?(o.classList.remove(\"kint-show\"),e.preventDefault()):39!==e.keyCode&&76!==e.keyCode||(o.classList.add(\"kint-show\"),e.preventDefault()):32===e.keyCode||13===e.keyCode?(l.toggle(o),l.keyboardNav.fetchTargets(),e.preventDefault()):39!==e.keyCode&&76!==e.keyCode&&37!==e.keyCode&&72!==e.keyCode||(t=39===e.keyCode||76===e.keyCode,o.classList.contains(\"kint-show\")?l.toggleChildren(o,t):t||(a=l.getParentHeader(o.parentNode.parentNode,!0))&&(l.keyboardNav.setCursor((o=a).querySelector(\"nav\")),l.keyboardNav.sync()),l.toggle(o,t),l.keyboardNav.fetchTargets(),e.preventDefault())}}},!0),l}()),window.kintShared.runOnce(window.kintRich.initLoad);\r\nvoid 0===window.kintMicrotimeInitialized&&(window.kintMicrotimeInitialized=1,window.addEventListener(\"load\",function(){\"use strict\";var a={},t=Array.prototype.slice.call(document.querySelectorAll(\"[data-kint-microtime-group]\"),0);t.forEach(function(t){var i,e;t.querySelector(\".kint-microtime-lap\")&&(i=t.getAttribute(\"data-kint-microtime-group\"),e=parseFloat(t.querySelector(\".kint-microtime-lap\").innerHTML),t=parseFloat(t.querySelector(\".kint-microtime-avg\").innerHTML),void 0===a[i]&&(a[i]={}),(void 0===a[i].min||a[i].min>e)&&(a[i].min=e),(void 0===a[i].max||a[i].max<e)&&(a[i].max=e),a[i].avg=t)}),t.forEach(function(t){var i,e,r,o,n=t.querySelector(\".kint-microtime-lap\");null!==n&&(i=parseFloat(n.textContent),o=t.dataset.kintMicrotimeGroup,e=a[o].avg,r=a[o].max,o=a[o].min,i===(t.querySelector(\".kint-microtime-avg\").textContent=e)&&i===o&&i===r||(n.style.background=e<i?\"hsl(\"+(40-40*((i-e)/(r-e)))+\", 100%, 65%)\":\"hsl(\"+(40+80*(e===o?0:(e-i)/(e-o)))+\", 100%, 65%)\"))})}));\r\n</script><style class=\"kint-rich-style\">.kint-rich{font-size:13px;overflow-x:auto;white-space:nowrap;background:rgba(255,255,255,0.9)}.kint-rich.kint-folder{position:fixed;bottom:0;left:0;right:0;z-index:999999;width:100%;margin:0;display:block}.kint-rich.kint-folder dd.kint-foldout{max-height:calc(100vh - 100px);padding-right:8px;overflow-y:scroll;display:none}.kint-rich.kint-folder dd.kint-foldout.kint-show{display:block}.kint-rich::selection,.kint-rich::-moz-selection,.kint-rich::-webkit-selection{background:#aaa;color:#1d1e1e}.kint-rich .kint-focused{box-shadow:0 0 3px 2px red}.kint-rich,.kint-rich::before,.kint-rich::after,.kint-rich *,.kint-rich *::before,.kint-rich *::after{box-sizing:border-box;border-radius:0;color:#1d1e1e;float:none !important;font-family:Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;line-height:15px;margin:0;padding:0;text-align:left}.kint-rich{margin:8px 0}.kint-rich dt,.kint-rich dl{width:auto}.kint-rich dt,.kint-rich div.access-path{background:#f8f8f8;border:1px solid #d7d7d7;color:#1d1e1e;display:block;font-weight:bold;list-style:none outside none;overflow:auto;padding:4px}.kint-rich dt:hover,.kint-rich div.access-path:hover{border-color:#aaa}.kint-rich>dl dl{padding:0 0 0 12px}.kint-rich dt.kint-parent>nav,.kint-rich>footer>nav{background:url(\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMCAxNTAiPjxwYXRoIGQ9Ik02IDdoMThsLTkgMTV6bTAgMzBoMThsLTkgMTV6bTAgNDVoMThsLTktMTV6bTAgMzBoMThsLTktMTV6bTAgMTJsMTggMThtLTE4IDBsMTgtMTgiIGZpbGw9IiM1NTUiLz48cGF0aCBkPSJNNiAxMjZsMTggMThtLTE4IDBsMTgtMTgiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlPSIjNTU1Ii8+PC9zdmc+\") no-repeat scroll 0 0/15px 75px transparent;cursor:pointer;display:inline-block;height:15px;width:15px;margin-right:3px;vertical-align:middle}.kint-rich dt.kint-parent:hover>nav,.kint-rich>footer>nav:hover{background-position:0 25%}.kint-rich dt.kint-parent.kint-show>nav,.kint-rich>footer.kint-show>nav{background-position:0 50%}.kint-rich dt.kint-parent.kint-show:hover>nav,.kint-rich>footer.kint-show>nav:hover{background-position:0 75%}.kint-rich dt.kint-parent.kint-locked>nav{background-position:0 100%}.kint-rich dt.kint-parent+dd{display:none;border-left:1px dashed #d7d7d7}.kint-rich dt.kint-parent.kint-show+dd{display:block}.kint-rich var,.kint-rich var a{color:#06f;font-style:normal}.kint-rich dt:hover var,.kint-rich dt:hover var a{color:red}.kint-rich dfn{font-style:normal;font-family:monospace;color:#1d1e1e}.kint-rich pre{color:#1d1e1e;margin:0 0 0 12px;padding:5px;overflow-y:hidden;border-top:0;border:1px solid #d7d7d7;background:#f8f8f8;display:block;word-break:normal}.kint-rich .kint-popup-trigger,.kint-rich .kint-access-path-trigger,.kint-rich .kint-search-trigger{background:rgba(29,30,30,0.8);border-radius:3px;height:16px;font-size:16px;margin-left:5px;font-weight:bold;width:16px;text-align:center;float:right !important;cursor:pointer;color:#f8f8f8;position:relative;overflow:hidden;line-height:17.6px}.kint-rich .kint-popup-trigger:hover,.kint-rich .kint-access-path-trigger:hover,.kint-rich .kint-search-trigger:hover{color:#1d1e1e;background:#f8f8f8}.kint-rich dt.kint-parent>.kint-popup-trigger{line-height:19.2px}.kint-rich .kint-search-trigger{font-size:20px}.kint-rich input.kint-search{display:none;border:1px solid #d7d7d7;border-top-width:0;border-bottom-width:0;padding:4px;float:right !important;margin:-4px 0;color:#1d1e1e;background:#f8f8f8;height:24px;width:160px;position:relative;z-index:100}.kint-rich input.kint-search.kint-show{display:block}.kint-rich .kint-search-root ul.kint-tabs>li:not(.kint-search-match){background:#f8f8f8;opacity:0.5}.kint-rich .kint-search-root dl:not(.kint-search-match){opacity:0.5}.kint-rich .kint-search-root dl:not(.kint-search-match)>dt{background:#f8f8f8}.kint-rich .kint-search-root dl:not(.kint-search-match) dl,.kint-rich .kint-search-root dl:not(.kint-search-match) ul.kint-tabs>li:not(.kint-search-match){opacity:1}.kint-rich div.access-path{background:#f8f8f8;display:none;margin-top:5px;padding:4px;white-space:pre}.kint-rich div.access-path.kint-show{display:block}.kint-rich footer{padding:0 3px 3px;font-size:9px;background:transparent}.kint-rich footer>.kint-popup-trigger{background:transparent;color:#1d1e1e}.kint-rich footer nav{height:10px;width:10px;background-size:10px 50px}.kint-rich footer>ol{display:none;margin-left:32px}.kint-rich footer.kint-show>ol{display:block}.kint-rich a{color:#1d1e1e;text-shadow:none;text-decoration:underline}.kint-rich a:hover{color:#1d1e1e;border-bottom:1px dotted #1d1e1e}.kint-rich ul{list-style:none;padding-left:12px}.kint-rich ul:not(.kint-tabs) li{border-left:1px dashed #d7d7d7}.kint-rich ul:not(.kint-tabs) li>dl{border-left:none}.kint-rich ul.kint-tabs{margin:0 0 0 12px;padding-left:0;background:#f8f8f8;border:1px solid #d7d7d7;border-top:0}.kint-rich ul.kint-tabs>li{background:#f8f8f8;border:1px solid #d7d7d7;cursor:pointer;display:inline-block;height:24px;margin:2px;padding:0 12px;vertical-align:top}.kint-rich ul.kint-tabs>li:hover,.kint-rich ul.kint-tabs>li.kint-active-tab:hover{border-color:#aaa;color:red}.kint-rich ul.kint-tabs>li.kint-active-tab{background:#f8f8f8;border-top:0;margin-top:-1px;height:27px;line-height:24px}.kint-rich ul.kint-tabs>li:not(.kint-active-tab){line-height:20px}.kint-rich ul.kint-tabs li+li{margin-left:0}.kint-rich ul.kint-tab-contents>li{display:none}.kint-rich ul.kint-tab-contents>li.kint-show{display:block}.kint-rich dt:hover+dd>ul>li.kint-active-tab{border-color:#aaa;color:red}.kint-rich dt>.kint-color-preview{width:16px;height:16px;display:inline-block;vertical-align:middle;margin-left:10px;border:1px solid #d7d7d7;background-color:#ccc;background-image:url(\'data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 2 2\"><path fill=\"%23FFF\" d=\"M0 0h1v2h1V1H0z\"/></svg>\');background-size:100%}.kint-rich dt>.kint-color-preview:hover{border-color:#aaa}.kint-rich dt>.kint-color-preview>div{width:100%;height:100%}.kint-rich table{border-collapse:collapse;empty-cells:show;border-spacing:0}.kint-rich table *{font-size:12px}.kint-rich table dt{background:none;padding:2px}.kint-rich table dt .kint-parent{min-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.kint-rich table td,.kint-rich table th{border:1px solid #d7d7d7;padding:2px;vertical-align:center}.kint-rich table th{cursor:alias}.kint-rich table td:first-child,.kint-rich table th{font-weight:bold;background:#f8f8f8;color:#1d1e1e}.kint-rich table td{background:#f8f8f8;white-space:pre}.kint-rich table td>dl{padding:0}.kint-rich table pre{border-top:0;border-right:0}.kint-rich table thead th:first-child{background:none;border:0}.kint-rich table tr:hover>td{box-shadow:0 0 1px 0 #aaa inset}.kint-rich table tr:hover var{color:red}.kint-rich table ul.kint-tabs li.kint-active-tab{height:20px;line-height:17px}.kint-rich pre.kint-source{margin-left:-1px}.kint-rich pre.kint-source[data-kint-filename]:before{display:block;content:attr(data-kint-filename);margin-bottom:4px;padding-bottom:4px;border-bottom:1px solid #f8f8f8}.kint-rich pre.kint-source>div:before{display:inline-block;content:counter(kint-l);counter-increment:kint-l;border-right:1px solid #aaa;padding-right:8px;margin-right:8px}.kint-rich pre.kint-source>div.kint-highlight{background:#f8f8f8}.kint-rich .kint-microtime-lap{text-shadow:-1px 0 #aaa,0 1px #aaa,1px 0 #aaa,0 -1px #aaa;color:#f8f8f8;font-weight:bold}input.kint-note-input{width:100%}.kint-rich .kint-focused{box-shadow:0 0 3px 2px red}.kint-rich dt{font-weight:normal}.kint-rich dt.kint-parent{margin-top:4px}.kint-rich dl dl{margin-top:4px;padding-left:25px;border-left:none}.kint-rich>dl>dt{background:#f8f8f8}.kint-rich ul{margin:0;padding-left:0}.kint-rich ul:not(.kint-tabs)>li{border-left:0}.kint-rich ul.kint-tabs{background:#f8f8f8;border:1px solid #d7d7d7;border-width:0 1px 1px 1px;padding:4px 0 0 12px;margin-left:-1px;margin-top:-1px}.kint-rich ul.kint-tabs li,.kint-rich ul.kint-tabs li+li{margin:0 0 0 4px}.kint-rich ul.kint-tabs li{border-bottom-width:0;height:25px}.kint-rich ul.kint-tabs li:first-child{margin-left:0}.kint-rich ul.kint-tabs li.kint-active-tab{border-top:1px solid #d7d7d7;background:#fff;font-weight:bold;padding-top:0;border-bottom:1px solid #fff !important;margin-bottom:-1px}.kint-rich ul.kint-tabs li.kint-active-tab:hover{border-bottom:1px solid #fff}.kint-rich ul>li>pre{border:1px solid #d7d7d7}.kint-rich dt:hover+dd>ul{border-color:#aaa}.kint-rich pre{background:#fff;margin-top:4px;margin-left:25px}.kint-rich .kint-source{margin-left:-1px}.kint-rich .kint-source .kint-highlight{background:#cfc}.kint-rich .kint-parent.kint-show>.kint-search{border-bottom-width:1px}.kint-rich table td{background:#fff}.kint-rich table td>dl{padding:0;margin:0}.kint-rich table td>dl>dt.kint-parent{margin:0}.kint-rich table td:first-child,.kint-rich table td,.kint-rich table th{padding:2px 4px}.kint-rich table dd,.kint-rich table dt{background:#fff}.kint-rich table tr:hover>td{box-shadow:none;background:#cfc}\r\n</style>\r\n\r\n    <meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Form Tambah Data Kosan | Owner</title>\r\n    <link rel=\"stylesheet\" href=\"/adminTemplate/assets/css/main/app.css\">\r\n    <link rel=\"stylesheet\" href=\"/adminTemplate/assets/css/main/app-dark.css\">\r\n    <link rel=\"shortcut icon\" href=\"/adminTemplate/assets/images/logo/favicon.svg\" type=\"image/x-icon\">\r\n    <link rel=\"shortcut icon\" href=\"/adminTemplate/assets/images/logo/favicon.png\" type=\"image/png\">\r\n    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css\">\r\n    <link rel=\"stylesheet\" href=\"/adminTemplate/assets/css/shared/iconly.css\">\r\n    <link rel=\"stylesheet\" href=\"/adminTemplate/assets/extensions/sweetalert2/sweetalert2.min.css\">\r\n    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css\">\r\n    <link rel=\"stylesheet\" href=\"/adminTemplate/assets/extensions/choices.js/public/assets/styles/choices.css\">\r\n    <script src=\"/jquery/jquery.min.js\"></script>\r\n</head>\r\n\r\n<body>\r\n    <div id=\"app\">\r\n        <div id=\"sidebar\" class=\"active\">\r\n            <div class=\"sidebar-wrapper active\">\r\n                <div class=\"sidebar-header position-relative\">\r\n                    <div class=\"d-flex justify-content-between align-items-center\">\r\n                        <div class=\"logo\">\r\n                            <a href=\"/\"><img src=\"/assets/svg/logo_sikosan_and_text.svg\" alt=\"SIKOSAN\" style=\"height: 25px;\"></a>\r\n                        </div>\r\n                        <div class=\"theme-toggle d-flex gap-2  align-items-center mt-2\">\r\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" role=\"img\" class=\"iconify iconify--system-uicons\" width=\"20\" height=\"20\" preserveAspectRatio=\"xMidYMid meet\" viewBox=\"0 0 21 21\">\r\n                                <g fill=\"none\" fill-rule=\"evenodd\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\r\n                                    <path d=\"M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2\" opacity=\".3\"></path>\r\n                                    <g transform=\"translate(-210 -1)\">\r\n                                        <path d=\"M220.5 2.5v2m6.5.5l-1.5 1.5\"></path>\r\n                                        <circle cx=\"220.5\" cy=\"11.5\" r=\"4\"></circle>\r\n                                        <path d=\"m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2\"></path>\r\n                                    </g>\r\n                                </g>\r\n                            </svg>\r\n                            <div class=\"form-check form-switch fs-6\">\r\n                                <input class=\"form-check-input  me-0\" type=\"checkbox\" id=\"toggle-dark\">\r\n                                <label class=\"form-check-label\"></label>\r\n                            </div>\r\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" role=\"img\" class=\"iconify iconify--mdi\" width=\"20\" height=\"20\" preserveAspectRatio=\"xMidYMid meet\" viewBox=\"0 0 24 24\">\r\n                                <path fill=\"currentColor\" d=\"m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z\"></path>\r\n                            </svg>\r\n                        </div>\r\n                        <div class=\"sidebar-toggler  x\">\r\n                            <a href=\"#\" class=\"sidebar-hide d-xl-none d-block\"><i class=\"bi bi-x bi-middle\"></i></a>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"sidebar-menu mb-auto\">\r\n                    <div class=\"card\">\r\n                        <div class=\"card-body py-4 px-5\">\r\n                            <div class=\"d-flex align-items-center\">\r\n                                <div class=\"avatar avatar-xl\">\r\n                                    <img src=\"/adminTemplate/assets/images/faces/1.jpg\" alt=\"Face 1\">\r\n                                </div>\r\n                                <div class=\"ms-3 name\">\r\n                                    <h5 class=\"font-bold\">Ngab Owi TB</h5>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <ul class=\"menu\">\r\n                        <li class=\"sidebar-title\">Menu</li>\r\n\r\n                        <li class=\"sidebar-item \">\r\n                            <a href=\"/owner/halaman_pemilik\" class=\'sidebar-link\'>\r\n                                <i class=\"bi bi-grid-fill\"></i>\r\n                                <span>Dashboard</span>\r\n                            </a>\r\n                        </li>\r\n\r\n                        <li class=\"sidebar-item \">\r\n                            <a href=\"/owner/kosan_anda\" class=\'sidebar-link\'>\r\n                                <i class=\"bi bi-collection-fill\"></i>\r\n                                <span>Kosan</span>\r\n                            </a>\r\n                        </li>\r\n                    </ul>\r\n                </div>\r\n                <hr>\r\n                <ul class=\"menu\">\r\n                    <li class=\"sidebar-item\">\r\n                        <a href=\"/logout\" class=\'sidebar-link btn btn-outline-danger\'>\r\n                            <i class=\"bi bi-door-open\"></i>\r\n                            <span>Keluar</span>\r\n                        </a>\r\n                    </li>\r\n                </ul>\r\n\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div id=\"main\">\r\n        <header class=\"mb-3\">\r\n            <a href=\"#\" class=\"burger-btn d-block d-xl-none\">\r\n                <i class=\"bi bi-justify fs-3\"></i>\r\n            </a>\r\n        </header>\r\n        <style>\r\n    body {\r\n        font-family: Arial, Helvetica, sans-serif;\r\n    }\r\n\r\n    #myImg {\r\n        border-radius: 5px;\r\n        cursor: pointer;\r\n        transition: 0.3s;\r\n    }\r\n\r\n    #myImg:hover {\r\n        opacity: 0.7;\r\n    }\r\n\r\n    /* The Modal (background) */\r\n    .modal {\r\n        display: none;\r\n        /* Hidden by default */\r\n        position: fixed;\r\n        /* Stay in place */\r\n        z-index: 1;\r\n        /* Sit on top */\r\n        padding-top: 100px;\r\n        /* Location of the box */\r\n        left: 0;\r\n        top: 0;\r\n        width: 100%;\r\n        /* Full width */\r\n        height: 100%;\r\n        /* Full height */\r\n        overflow: auto;\r\n        /* Enable scroll if needed */\r\n        background-color: rgb(0, 0, 0);\r\n        /* Fallback color */\r\n        background-color: rgba(0, 0, 0, 0.9);\r\n        /* Black w/ opacity */\r\n    }\r\n\r\n    /* Modal Content (image) */\r\n    .modal-content {\r\n        margin: auto;\r\n        display: block;\r\n        width: 80%;\r\n        max-width: 700px;\r\n    }\r\n\r\n    /* Caption of Modal Image */\r\n    #caption {\r\n        margin: auto;\r\n        display: block;\r\n        width: 80%;\r\n        max-width: 700px;\r\n        text-align: center;\r\n        color: #ccc;\r\n        padding: 10px 0;\r\n        height: 150px;\r\n    }\r\n\r\n    /* Add Animation */\r\n    .modal-content,\r\n    #caption {\r\n        -webkit-animation-name: zoom;\r\n        -webkit-animation-duration: 0.6s;\r\n        animation-name: zoom;\r\n        animation-duration: 0.6s;\r\n    }\r\n\r\n    @-webkit-keyframes zoom {\r\n        from {\r\n            -webkit-transform: scale(0)\r\n        }\r\n\r\n        to {\r\n            -webkit-transform: scale(1)\r\n        }\r\n    }\r\n\r\n    @keyframes zoom {\r\n        from {\r\n            transform: scale(0)\r\n        }\r\n\r\n        to {\r\n            transform: scale(1)\r\n        }\r\n    }\r\n\r\n    /* The Close Button */\r\n    .close {\r\n        position: absolute;\r\n        top: 15px;\r\n        right: 35px;\r\n        color: #f1f1f1;\r\n        font-size: 40px;\r\n        font-weight: bold;\r\n        transition: 0.3s;\r\n    }\r\n\r\n    .close:hover,\r\n    .close:focus {\r\n        color: #bbb;\r\n        text-decoration: none;\r\n        cursor: pointer;\r\n    }\r\n\r\n    /* 100% Image Width on Smaller Screens */\r\n    @media only screen and (max-width: 700px) {\r\n        .modal-content {\r\n            width: 100%;\r\n        }\r\n    }\r\n</style>\r\n<section class=\"section\">\r\n    <div class=\"card\">\r\n        <div class=\"card-header\">\r\n            <h4 class=\"card-title\">Form Tambah Data Kosan | Owner</h4>\r\n        </div>\r\n        <div class=\"card-body\">\r\n\r\n            <form action=\"/owner/save_kosan\" method=\"POST\" enctype=\"multipart/form-data\">\r\n                <input type=\"hidden\" name=\"csrf_test_name\" value=\"5435584d25edd6fa2ab344b4a1e089bf\" />                <div class=\"row\">\r\n                    <div class=\"col-md-6\">\r\n                        <div class=\"form-group\">\r\n                            <label for=\"namaKost\" class=\"form-label\">Nama Kost</label>\r\n                            <input type=\"text\" class=\"form-control \" id=\"namaKost\" name=\"namaKost\" value=\"\" autocomplete=\"off\">\r\n                            <div class=\"invalid-feedback\">\r\n                                                            </div>\r\n                        </div>\r\n                        <label for=\"kota\" class=\"form-label\">Kota/Kabupaten</label>\r\n                        <fieldset class=\"form-group\">\r\n                            <select name=\"kota\" id=\"nama_kota\" class=\"form-select\">\r\n\r\n                            </select>\r\n                        </fieldset>\r\n\r\n                        <div class=\"form-group\">\r\n                            <label for=\"type\" class=\"form-label\">Type</label>\r\n                            <fieldset class=\"form-group\">\r\n                                <select class=\"form-select\" id=\"type\" name=\"type\">\r\n                                    <option value=\"Putra\">Putra</option>\r\n                                    <option value=\"Putri\">Putri</option>\r\n                                    <option value=\"Campur\">Campur</option>\r\n                                </select>\r\n                            </fieldset>\r\n                        </div>\r\n                        <div class=\"form-group\">\r\n                            <label for=\"alamat\" class=\"form-label\">Alamat Lengkap</label>\r\n                            <textarea class=\"form-control \" id=\"alamat\" autocomplete=\"off\" name=\"alamat\" rows=\"3\"></textarea>\r\n                            <div class=\"invalid-feedback\">\r\n                                                            </div>\r\n                        </div>\r\n                        <div class=\"form-group\">\r\n                            <label for=\"fasilitas\" class=\"form-label\">Fasilitas</label>\r\n                            <textarea class=\"form-control \" id=\"fasilitas\" name=\"fasilitas\" rows=\"3\"></textarea>\r\n                            <div class=\"invalid-feedback\">\r\n                                                            </div>\r\n                        </div>\r\n                        <div class=\"form-group\">\r\n                            <label for=\"deskripsi\" class=\"form-label\">Deskripsi</label>\r\n                            <textarea class=\"form-control  \" id=\"deskripsi\" name=\"deskripsi\" rows=\"3\"></textarea>\r\n                            <div class=\"invalid-feedback\">\r\n                                                            </div>\r\n                        </div>\r\n                        <div class=\"form-group\">\r\n                            <label for=\"harga\" class=\"form-label\">Harga</label>\r\n                            <input type=\"number\" class=\"form-control \" id=\"harga\" name=\"harga\" placeholder=\"Harga\" value=\"\">\r\n                            <div class=\"invalid-feedback\">\r\n                                                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-md-6\">\r\n                        <div class=\"mb-3\">\r\n                            <label for=\"foto\" class=\"form-label\">Foto 1</label>\r\n                            <input name=\"foto_1\" class=\"form-control\" id=\"foto1\" type=\'file\' onchange=\"readURL1(this);\" />\r\n                            <small class=\"text-muted\">Foto pertama akan menjadi thumbnail postingan kosan anda.</small> <br>\r\n                            <button type=\"button\" class=\"btn btn-primary mt-2\" data-bs-toggle=\"modal\" id=\"btnft1\">\r\n                                Lihat Foto\r\n                            </button>\r\n                            <img src=\"/foto_kosan/\" id=\"foto1img\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" width=\"600\" height=\"auto\" hidden>\r\n\r\n                            <div id=\"modalFoto1\" class=\"modal\">\r\n\r\n                                <span class=\"close\" id=\"close\" data-dismiss=\"modal\">&times;</span>\r\n                                <div></div>\r\n                                <img class=\"modal-content\" id=\"foto1imgs\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" alt=\"Belum ada Foto\" style=\"object-fit:contain;width:700px; height:700px;\">\r\n                                <!-- <div id=\"caption\"></div> -->\r\n                            </div>\r\n                        </div>\r\n\r\n                        <div class=\"mb-3\">\r\n                            <label for=\"foto\" class=\"form-label\">Foto 2</label>\r\n                            <input name=\"foto_2\" class=\"form-control\" id=\"foto2\" type=\'file\' onchange=\"readURL2(this);\" />\r\n\r\n                            <button type=\"button\" class=\"btn btn-primary mt-2\" data-bs-toggle=\"modal\" id=\"btnft2\">\r\n                                Lihat Foto\r\n                            </button>\r\n                            <img src=\"/foto_kosan/\" id=\"foto2img\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" width=\"600\" height=\"auto\" hidden>\r\n                            <div id=\"modalFoto2\" class=\"modal\">\r\n                                <span class=\"close\" id=\"close\">&times;</span>\r\n                                <img class=\"modal-content\" id=\"foto2imgs\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" alt=\"Belum ada Foto\" style=\"object-fit:contain;width:700px; height:700px;\">\r\n                                <!-- <div id=\"caption\"></div> -->\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"mb-3\">\r\n                            <label for=\"foto\" class=\"form-label\">Foto 3</label>\r\n                            <input name=\"foto_3\" class=\"form-control\" id=\"foto3\" type=\'file\' onchange=\"readURL3(this);\" />\r\n                            <button type=\"button\" class=\"btn btn-primary mt-2\" data-bs-toggle=\"modal\" id=\"btnft3\">\r\n                                Lihat Foto\r\n                            </button>\r\n                            <img src=\"/foto_kosan/\" id=\"foto3img\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" width=\"600\" height=\"auto\" hidden>\r\n                            <div id=\"modalFoto3\" class=\"modal\">\r\n                                <span class=\"close\" id=\"close\">&times;</span>\r\n                                <img class=\"modal-content\" id=\"foto3imgs\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" alt=\"Belum ada Foto\" style=\"object-fit:contain;width:700px; height:700px;\">\r\n                                <!-- <div id=\"caption\"></div> -->\r\n                            </div>\r\n                        </div>\r\n\r\n                    </div>\r\n                    <div class=\"col-sm-12 d-flex justify-content-end\">\r\n                        <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\">Submit</button>\r\n                        <button type=\"reset\" class=\"btn btn-light-secondary me-1 mb-1\">Reset</button>\r\n                    </div>\r\n                </div>\r\n            </form>\r\n        </div>\r\n    </div>\r\n</section>\r\n</div>\r\n<script>\r\n    // Get the modal\r\n    var modal1 = document.getElementById(\"modalFoto1\");\r\n\r\n    // Get the image and insert it inside the modal - use its \"alt\" text as a caption\r\n    var img1 = document.getElementById(\"foto1img\");\r\n    var modalImg1 = document.getElementById(\"foto1imgs\");\r\n    var preview1 = document.getElementById(\"btnft1\")\r\n    preview1.onclick = function() {\r\n        modal1.style.display = \"block\";\r\n        modalImg1.src = img1.src;\r\n        // captionText.innerHTML = this.alt;\r\n    }\r\n\r\n    // Get the <span> element that closes the modal\r\n    var span1 = document.getElementsByClassName(\"close\")[0];\r\n\r\n    // When the user clicks on <span> (x), close the modal\r\n    span1.onclick = function() {\r\n        modal1.style.display = \"none\";\r\n    }\r\n</script>\r\n<script>\r\n    // Get the modal\r\n    var modal2 = document.getElementById(\"modalFoto2\");\r\n\r\n    // Get the image and insert it inside the modal - use its \"alt\" text as a caption\r\n    var img2 = document.getElementById(\"foto2img\");\r\n    var modalImg2 = document.getElementById(\"foto2imgs\");\r\n    var preview2 = document.getElementById(\"btnft2\")\r\n    preview2.onclick = function() {\r\n        modal2.style.display = \"block\";\r\n        modalImg2.src = img2.src;\r\n        // captionText.innerHTML = this.alt;\r\n    }\r\n\r\n    // Get the <span> element that closes the modal\r\n    var span2 = document.getElementsByClassName(\"close\")[1];\r\n\r\n    // When the user clicks on <span> (x), close the modal\r\n    span2.onclick = function() {\r\n        modal2.style.display = \"none\";\r\n    }\r\n</script>\r\n<script>\r\n    // Get the modal\r\n    var modal3 = document.getElementById(\"modalFoto3\");\r\n\r\n    // Get the image and insert it inside the modal - use its \"alt\" text as a caption\r\n    var img3 = document.getElementById(\"foto3img\");\r\n    var modalImg3 = document.getElementById(\"foto3imgs\");\r\n    var preview3 = document.getElementById(\"btnft3\")\r\n    preview3.onclick = function() {\r\n        modal3.style.display = \"block\";\r\n        modalImg3.src = img3.src;\r\n        // captionText.innerHTML = this.alt;\r\n    }\r\n\r\n    // Get the <span> element that closes the modal\r\n    var span3 = document.getElementsByClassName(\"close\")[2];\r\n\r\n    // When the user clicks on <span> (x), close the modal\r\n    span3.onclick = function() {\r\n        modal3.style.display = \"none\";\r\n    }\r\n</script>\r\n<script>\r\n    function readURL1(input) {\r\n        if (input.files && input.files[0]) {\r\n            var reader1 = new FileReader();\r\n\r\n            reader1.onload = function(e) {\r\n                $(\'#foto1img\')\r\n                    .attr(\'src\', e.target.result);\r\n            };\r\n\r\n            reader1.readAsDataURL(input.files[0]);\r\n        }\r\n    }\r\n</script>\r\n<script>\r\n    function readURL2(input) {\r\n        if (input.files && input.files[0]) {\r\n            var reader2 = new FileReader();\r\n\r\n            reader2.onload = function(e) {\r\n                $(\'#foto2img\')\r\n                    .attr(\'src\', e.target.result);\r\n            };\r\n\r\n            reader2.readAsDataURL(input.files[0]);\r\n        }\r\n    }\r\n</script>\r\n<script>\r\n    function readURL3(input) {\r\n        if (input.files && input.files[0]) {\r\n            var reader3 = new FileReader();\r\n\r\n            reader3.onload = function(e) {\r\n                $(\'#foto3img\')\r\n                    .attr(\'src\', e.target.result);\r\n            };\r\n\r\n            reader3.readAsDataURL(input.files[0]);\r\n        }\r\n    }\r\n</script>\r\n<!-- JS -->\r\n\r\n<!-- <script type=\"text/javascript\">\r\n    var harga = document.getElementById(\'harga\');\r\n    harga.addEventListener(\'keyup\', function(e) {\r\n        // tambahkan \'Rp.\' pada saat form di ketik\r\n        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka\r\n        harga.value = formatRupiah(this.value, \'Rp. \');\r\n    });\r\n\r\n    /* Fungsi formatRupiah */\r\n    function formatRupiah(angka, prefix) {\r\n        var number_string = angka.replace(/[^,\\d]/g, \'\').toString(),\r\n            split = number_string.split(\',\'),\r\n            sisa = split[0].length % 3,\r\n            harga = split[0].substr(0, sisa),\r\n            ribuan = split[0].substr(sisa).match(/\\d{3}/gi);\r\n\r\n        // tambahkan titik jika yang di input sudah menjadi angka ribuan\r\n        if (ribuan) {\r\n            separator = sisa ? \'.\' : \'\';\r\n            harga += separator + ribuan.join(\'.\');\r\n        }\r\n\r\n        harga = split[1] != undefined ? harga + \',\' + split[1] : harga;\r\n        return prefix == undefined ? harga : (harga ? \'Rp. \' + harga : \'\');\r\n    }\r\n</script> -->\r\n        <!-- DEBUG-VIEW START 1 APPPATH\\Views\\globals\\partials\\footer.php -->\r\n<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">\r\n    <div class=\"col-md-4 d-flex align-items-center\">\r\n        <a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1\">\r\n            <img src=\"/assets/img/sikosan.ico\" width=\"40\" height=\"32\">\r\n        </a>\r\n        <span class=\"mb-3 mb-md-0 text-muted\">&copy; 2022 Sikosan, Inc</span>\r\n    </div>\r\n\r\n\r\n    <ul class=\"nav col-md-4 justify-content-end\">\r\n        <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">About</a></li>\r\n        <li class=\"nav-item\"><a href=\"/pusatBantuan\" class=\"nav-link px-2 text-muted\">Pusat Bantuan</a></li>\r\n        <li class=\"nav-item\"><a href=\"/terms\" class=\"nav-link px-2 text-muted\">Syarat & ketentuan</a></li>\r\n    </ul>\r\n</footer>\r\n<!-- DEBUG-VIEW ENDED 1 APPPATH\\Views\\globals\\partials\\footer.php -->\r\n    </div>\r\n    </div>\r\n    <script src=\"/adminTemplate/assets/js/bootstrap.js\"></script>\r\n    <script src=\"/adminTemplate/assets/js/app.js\"></script>\r\n    <script src=\"/adminTemplate/assets/extensions/apexcharts/apexcharts.min.js\"></script>\r\n    <script src=\"/adminTemplate/assets/js/pages/dashboard.js\"></script>\r\n    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js\"></script>\r\n    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css\">\r\n\r\n    <script src=\"/adminTemplate/assets/extensions/choices.js/public/assets/scripts/choices.js\"></script>\r\n    <script src=\"/adminTemplate/assets/js/pages/form-element-select.js\"></script>\r\n\r\n    <script>\r\n        $.ajax({\r\n            type: \"GET\",\r\n            url: \"http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=18\",\r\n            crossDomain: true,\r\n            dataType: \"json\",\r\n            success: function(response) {\r\n                for (let i = 0; i < response[\'kota_kabupaten\'].length; i++) {\r\n                    var element = response[\'kota_kabupaten\'][i][\'nama\'];\r\n                    element = element.split(\" \");\r\n                    element.shift();\r\n                    element = element.join(\" \");\r\n                    $(\'#nama_kota\').append(\'<option value=\"\' + element + \'\">\' + response[\'kota_kabupaten\'][i][\'nama\'] + \'</option>\');\r\n                }\r\n\r\n            }\r\n        });\r\n\r\n        $(\'.btn-delete\').click(function(e) {\r\n            e.preventDefault();\r\n            Swal.fire({\r\n                title: \'Apakah anda yakin?\',\r\n                text: \"Data yang dihapus tidak dapat dikembalikan!\",\r\n                icon: \'warning\',\r\n                showCancelButton: true,\r\n                confirmButtonColor: \'#3085d6\',\r\n                cancelButtonColor: \'#d33\',\r\n                confirmButtonText: \'Ya, hapus!\'\r\n            }).then((result) => {\r\n                if (result.isConfirmed) {\r\n                    $(\'#formDelete\').submit();\r\n                }\r\n            });\r\n\r\n        });\r\n    </script>\r\n</body>\r\n\r\n</html>\r\n<!-- DEBUG-VIEW ENDED 2 APPPATH\\Views\\templates\\sidebar_menu.php -->\r\n\r\n<!-- DEBUG-VIEW ENDED 3 APPPATH\\Views\\auth\\owner\\tambah_kosan_page.php -->\r\n', '<!-- DEBUG-VIEW START 3 APPPATH\\Views\\auth\\owner\\tambah_kosan_page.php -->\r\n<!-- DEBUG-VIEW START 2 APPPATH\\Views\\templates\\sidebar_menu.php -->\r\n<!DOCTYPE html>\r\n<html lang=\"en\">\r\n\r\n<head>\r\n<script type=\"text/javascript\"  id=\"debugbar_loader\" data-time=\"1667494796.877452\" src=\"http://localhost:8080/?debugbar\"></script><script type=\"text/javascript\"  id=\"debugbar_dynamic_script\"></script><style type=\"text/css\"  id=\"debugbar_dynamic_style\"></style><script class=\"kint-rich-script\">void 0===window.kintShared&&(window.kintShared=function(){\"use strict\";var e={dedupe:function(e,n){return[].forEach.call(document.querySelectorAll(e),function(e){e!==(n=!n||!n.ownerDocument.contains(n)?e:n)&&e.parentNode.removeChild(e)}),n},runOnce:function(e){\"complete\"===document.readyState?e():window.addEventListener(\"load\",e)}};return window.addEventListener(\"click\",function(e){var n;e.target.classList.contains(\"kint-ide-link\")&&((n=new XMLHttpRequest).open(\"GET\",e.target.href),n.send(null),e.preventDefault())}),e}());\r\nvoid 0===window.kintRich&&(window.kintRich=function(){\"use strict\";var l={selectText:function(e){var t=window.getSelection(),a=document.createRange();a.selectNodeContents(e),t.removeAllRanges(),t.addRange(a)},toggle:function(e,t){var a=l.getChildren(e);a&&(e.classList.toggle(\"kint-show\",t),1===a.childNodes.length&&(a=a.childNodes[0].childNodes[0])&&a.classList&&a.classList.contains(\"kint-parent\")&&l.toggle(a,t))},toggleChildren:function(e,t){var a=l.getChildren(e);if(a){var o=a.getElementsByClassName(\"kint-parent\"),n=o.length;for(void 0===t&&(t=e.classList.contains(\"kint-show\"));n--;)l.toggle(o[n],t)}},switchTab:function(e){var t=e.previousSibling,a=0;for(e.parentNode.getElementsByClassName(\"kint-active-tab\")[0].classList.remove(\"kint-active-tab\"),e.classList.add(\"kint-active-tab\");t;)1===t.nodeType&&a++,t=t.previousSibling;for(var o=e.parentNode.nextSibling.childNodes,n=0;n<o.length;n++)n===a?(o[n].classList.add(\"kint-show\"),1===o[n].childNodes.length&&(t=o[n].childNodes[0].childNodes[0])&&t.classList&&t.classList.contains(\"kint-parent\")&&l.toggle(t,!0)):o[n].classList.remove(\"kint-show\")},mktag:function(e){return\"<\"+e+\">\"},openInNewWindow:function(e){var t=window.open();t&&(t.document.open(),t.document.write(l.mktag(\"html\")+l.mktag(\"head\")+l.mktag(\"title\")+\"Kint (\"+(new Date).toISOString()+\")\"+l.mktag(\"/title\")+l.mktag(\'meta charset=\"utf-8\"\')+l.mktag(\'script class=\"kint-rich-script\" nonce=\"\'+l.script.nonce+\'\"\')+l.script.innerHTML+l.mktag(\"/script\")+l.mktag(\'style class=\"kint-rich-style\" nonce=\"\'+l.style.nonce+\'\"\')+l.style.innerHTML+l.mktag(\"/style\")+l.mktag(\"/head\")+l.mktag(\"body\")+\'<input class=\"kint-note-input\" placeholder=\"Take some notes!\"><div class=\"kint-rich\">\'+e.parentNode.outerHTML+\"</div>\"+l.mktag(\"/body\")),t.document.close())},sortTable:function(e,a){var t=e.tBodies[0];[].slice.call(e.tBodies[0].rows).sort(function(e,t){if(e=e.cells[a].textContent.trim().toLocaleLowerCase(),t=t.cells[a].textContent.trim().toLocaleLowerCase(),isNaN(e)||isNaN(t)){if(isNaN(e)&&!isNaN(t))return 1;if(isNaN(t)&&!isNaN(e))return-1}else e=parseFloat(e),t=parseFloat(t);return e<t?-1:t<e?1:0}).forEach(function(e){t.appendChild(e)})},showAccessPath:function(e){for(var t=e.childNodes,a=0;a<t.length;a++)if(t[a].classList&&t[a].classList.contains(\"access-path\"))return t[a].classList.toggle(\"kint-show\"),void(t[a].classList.contains(\"kint-show\")&&l.selectText(t[a]))},showSearchBox:function(e){var t=e.querySelector(\".kint-search\");t&&(t.classList.toggle(\"kint-show\"),t.classList.contains(\"kint-show\")?(e.classList.add(\"kint-show\"),t.focus(),t.select(),l.search(e.parentNode,t.value)):e.parentNode.classList.remove(\"kint-search-root\"))},search:function(e,t){e.querySelectorAll(\".kint-search-match\").forEach(function(e){e.classList.remove(\"kint-search-match\")}),e.classList.remove(\"kint-search-match\"),e.classList.toggle(\"kint-search-root\",t.length),t.length&&l.findMatches(e,t)},findMatches:function(e,t){var a,o,n,r=e.cloneNode(!0);if(r.querySelectorAll(\".access-path\").forEach(function(e){e.remove()}),-1!=r.textContent.toUpperCase().indexOf(t.toUpperCase())){for(s in e.classList.add(\"kint-search-match\"),e.childNodes)if(\"DD\"==e.childNodes[s].tagName){a=e.childNodes[s];break}if(a)if([].forEach.call(a.childNodes,function(e){\"DL\"==e.tagName?l.findMatches(e,t):\"UL\"==e.tagName&&(e.classList.contains(\"kint-tabs\")?o=e.childNodes:e.classList.contains(\"kint-tab-contents\")&&(n=e.childNodes))}),o&&n&&o.length==n.length)for(var s=0;s<o.length;s++){var i=!1;-1!=o[s].textContent.toUpperCase().indexOf(t.toUpperCase())?i=!0:((r=n[s].cloneNode(!0)).querySelectorAll(\".access-path\").forEach(function(e){e.remove()}),-1!=r.textContent.toUpperCase().indexOf(t.toUpperCase())&&(i=!0)),i&&(o[s].classList.add(\"kint-search-match\"),[].forEach.call(n[s].childNodes,function(e){\"DL\"==e.tagName&&l.findMatches(e,t)}))}}},getParentByClass:function(e,t){for(;(e=e.parentNode)&&e.classList&&!e.classList.contains(t););return e},getParentHeader:function(e,t){for(var a=e.nodeName.toLowerCase();\"dd\"!==a&&\"dt\"!==a&&l.getParentByClass(e,\"kint-rich\");)a=(e=e.parentNode).nodeName.toLowerCase();return l.getParentByClass(e,\"kint-rich\")?(e=\"dd\"===a&&t?e.previousElementSibling:e)&&\"dt\"===e.nodeName.toLowerCase()&&e.classList.contains(\"kint-parent\")?e:void 0:null},getChildren:function(e){for(;(e=e.nextElementSibling)&&\"dd\"!==e.nodeName.toLowerCase(););return e},isFolderOpen:function(){if(l.folder&&l.folder.querySelector(\"dd.kint-foldout\"))return l.folder.querySelector(\"dd.kint-foldout\").previousSibling.classList.contains(\"kint-show\")},initLoad:function(){l.style=window.kintShared.dedupe(\"style.kint-rich-style\",l.style),l.script=window.kintShared.dedupe(\"script.kint-rich-script\",l.script),l.folder=window.kintShared.dedupe(\".kint-rich.kint-folder\",l.folder);var t,e=document.querySelectorAll(\"input.kint-search\");[].forEach.call(e,function(t){function e(e){window.clearTimeout(a),t.value!==o&&(a=window.setTimeout(function(){o=t.value,l.search(t.parentNode.parentNode,o)},500))}var a=null,o=null;t.removeEventListener(\"keyup\",e),t.addEventListener(\"keyup\",e)}),l.folder&&(t=l.folder.querySelector(\"dd\"),[].forEach.call(document.querySelectorAll(\".kint-rich.kint-file\"),function(e){e.parentNode!==l.folder&&t.appendChild(e)}),document.body.appendChild(l.folder),l.folder.classList.add(\"kint-show\"))},keyboardNav:{targets:[],target:0,active:!1,fetchTargets:function(){var e=l.keyboardNav.targets[l.keyboardNav.target];l.keyboardNav.targets=[],document.querySelectorAll(\".kint-rich nav, .kint-tabs>li:not(.kint-active-tab)\").forEach(function(e){l.isFolderOpen()&&!l.folder.contains(e)||0===e.offsetWidth&&0===e.offsetHeight||l.keyboardNav.targets.push(e)}),e&&-1!==l.keyboardNav.targets.indexOf(e)&&(l.keyboardNav.target=l.keyboardNav.targets.indexOf(e))},sync:function(e){var t=document.querySelector(\".kint-focused\");t&&t.classList.remove(\"kint-focused\"),l.keyboardNav.active&&((t=l.keyboardNav.targets[l.keyboardNav.target]).classList.add(\"kint-focused\"),e||l.keyboardNav.scroll(t))},scroll:function(e){var t,a;e!==l.folder.querySelector(\"dt > nav\")&&(a=(t=function(e){return e.offsetTop+(e.offsetParent?t(e.offsetParent):0)})(e),l.isFolderOpen()?(e=l.folder.querySelector(\"dd.kint-foldout\")).scrollTo(0,a-e.clientHeight/2):window.scrollTo(0,a-window.innerHeight/2))},moveCursor:function(e){for(l.keyboardNav.target+=e;l.keyboardNav.target<0;)l.keyboardNav.target+=l.keyboardNav.targets.length;for(;l.keyboardNav.target>=l.keyboardNav.targets.length;)l.keyboardNav.target-=l.keyboardNav.targets.length;l.keyboardNav.sync()},setCursor:function(e){if(l.isFolderOpen()&&!l.folder.contains(e))return!1;l.keyboardNav.fetchTargets();for(var t=0;t<l.keyboardNav.targets.length;t++)if(e===l.keyboardNav.targets[t])return l.keyboardNav.target=t,!0;return!1}},mouseNav:{lastClickTarget:null,lastClickTimer:null,lastClickCount:0,renewLastClick:function(){window.clearTimeout(l.mouseNav.lastClickTimer),l.mouseNav.lastClickTimer=window.setTimeout(function(){l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickTimer=null,l.mouseNav.lastClickCount=0},250)}},style:null,script:null,folder:null};return window.addEventListener(\"click\",function(e){var t=e.target;if(l.mouseNav.lastClickTarget&&l.mouseNav.lastClickTimer&&l.mouseNav.lastClickCount)if(t=l.mouseNav.lastClickTarget,1===l.mouseNav.lastClickCount)l.toggleChildren(t.parentNode),l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),l.mouseNav.lastClickCount++,l.mouseNav.renewLastClick();else{for(var a=t.parentNode.classList.contains(\"kint-show\"),o=document.getElementsByClassName(\"kint-parent\"),n=o.length;n--;)l.toggle(o[n],a);l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),l.keyboardNav.scroll(t),window.clearTimeout(l.mouseNav.lastClickTimer),l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickTarget=null,l.mouseNav.lastClickCount=0}else if(l.getParentByClass(t,\"kint-rich\")){var r=t.nodeName.toLowerCase();if(\"dfn\"===r&&l.selectText(t),\"th\"!==r)if((t=l.getParentHeader(t))&&(l.keyboardNav.setCursor(t.querySelector(\"nav\")),l.keyboardNav.sync(!0)),t=e.target,\"li\"===r&&\"kint-tabs\"===t.parentNode.className)\"kint-active-tab\"!==t.className&&l.switchTab(t),(t=l.getParentHeader(t,!0))&&(l.keyboardNav.setCursor(t.querySelector(\"nav\")),l.keyboardNav.sync(!0));else if(\"nav\"===r)\"footer\"===t.parentNode.nodeName.toLowerCase()?(l.keyboardNav.setCursor(t),l.keyboardNav.sync(!0),(t=t.parentNode).classList.toggle(\"kint-show\")):(l.toggle(t.parentNode),l.keyboardNav.fetchTargets(),l.mouseNav.lastClickCount=1,l.mouseNav.lastClickTarget=t,l.mouseNav.renewLastClick());else if(t.classList.contains(\"kint-popup-trigger\")){var s=t.parentNode;if(\"footer\"===s.nodeName.toLowerCase())s=s.previousSibling;else for(;s&&!s.classList.contains(\"kint-parent\");)s=s.parentNode;l.openInNewWindow(s)}else t.classList.contains(\"kint-access-path-trigger\")?l.showAccessPath(t.parentNode):t.classList.contains(\"kint-search-trigger\")?l.showSearchBox(t.parentNode):t.classList.contains(\"kint-search\")||(\"pre\"===r&&3===e.detail?l.selectText(t):l.getParentByClass(t,\"kint-source\")&&3===e.detail?l.selectText(l.getParentByClass(t,\"kint-source\")):t.classList.contains(\"access-path\")?l.selectText(t):\"a\"!==r&&(t=l.getParentHeader(t))&&(l.toggle(t),l.keyboardNav.fetchTargets()));else e.ctrlKey||l.sortTable(t.parentNode.parentNode.parentNode,t.cellIndex)}},!0),window.addEventListener(\"keydown\",function(e){if(e.target===document.body&&!e.altKey&&!e.ctrlKey){if(68===e.keyCode){if(l.keyboardNav.active)l.keyboardNav.active=!1;else if(l.keyboardNav.active=!0,l.keyboardNav.fetchTargets(),0===l.keyboardNav.targets.length)return void(l.keyboardNav.active=!1);return l.keyboardNav.sync(),void e.preventDefault()}if(l.keyboardNav.active){if(9===e.keyCode)return l.keyboardNav.moveCursor(e.shiftKey?-1:1),void e.preventDefault();if(38===e.keyCode||75===e.keyCode)return l.keyboardNav.moveCursor(-1),void e.preventDefault();if(40===e.keyCode||74===e.keyCode)return l.keyboardNav.moveCursor(1),void e.preventDefault();var t,a,o=l.keyboardNav.targets[l.keyboardNav.target];if(\"li\"===o.nodeName.toLowerCase()){if(32===e.keyCode||13===e.keyCode)return l.switchTab(o),l.keyboardNav.fetchTargets(),l.keyboardNav.sync(),void e.preventDefault();if(39===e.keyCode||76===e.keyCode)return l.keyboardNav.moveCursor(1),void e.preventDefault();if(37===e.keyCode||72===e.keyCode)return l.keyboardNav.moveCursor(-1),void e.preventDefault()}o=o.parentNode,65===e.keyCode?(l.showAccessPath(o),e.preventDefault()):\"footer\"===o.nodeName.toLowerCase()&&o.parentNode.classList.contains(\"kint-rich\")?32===e.keyCode||13===e.keyCode?(o.classList.toggle(\"kint-show\"),e.preventDefault()):37===e.keyCode||72===e.keyCode?(o.classList.remove(\"kint-show\"),e.preventDefault()):39!==e.keyCode&&76!==e.keyCode||(o.classList.add(\"kint-show\"),e.preventDefault()):32===e.keyCode||13===e.keyCode?(l.toggle(o),l.keyboardNav.fetchTargets(),e.preventDefault()):39!==e.keyCode&&76!==e.keyCode&&37!==e.keyCode&&72!==e.keyCode||(t=39===e.keyCode||76===e.keyCode,o.classList.contains(\"kint-show\")?l.toggleChildren(o,t):t||(a=l.getParentHeader(o.parentNode.parentNode,!0))&&(l.keyboardNav.setCursor((o=a).querySelector(\"nav\")),l.keyboardNav.sync()),l.toggle(o,t),l.keyboardNav.fetchTargets(),e.preventDefault())}}},!0),l}()),window.kintShared.runOnce(window.kintRich.initLoad);\r\nvoid 0===window.kintMicrotimeInitialized&&(window.kintMicrotimeInitialized=1,window.addEventListener(\"load\",function(){\"use strict\";var a={},t=Array.prototype.slice.call(document.querySelectorAll(\"[data-kint-microtime-group]\"),0);t.forEach(function(t){var i,e;t.querySelector(\".kint-microtime-lap\")&&(i=t.getAttribute(\"data-kint-microtime-group\"),e=parseFloat(t.querySelector(\".kint-microtime-lap\").innerHTML),t=parseFloat(t.querySelector(\".kint-microtime-avg\").innerHTML),void 0===a[i]&&(a[i]={}),(void 0===a[i].min||a[i].min>e)&&(a[i].min=e),(void 0===a[i].max||a[i].max<e)&&(a[i].max=e),a[i].avg=t)}),t.forEach(function(t){var i,e,r,o,n=t.querySelector(\".kint-microtime-lap\");null!==n&&(i=parseFloat(n.textContent),o=t.dataset.kintMicrotimeGroup,e=a[o].avg,r=a[o].max,o=a[o].min,i===(t.querySelector(\".kint-microtime-avg\").textContent=e)&&i===o&&i===r||(n.style.background=e<i?\"hsl(\"+(40-40*((i-e)/(r-e)))+\", 100%, 65%)\":\"hsl(\"+(40+80*(e===o?0:(e-i)/(e-o)))+\", 100%, 65%)\"))})}));\r\n</script><style class=\"kint-rich-style\">.kint-rich{font-size:13px;overflow-x:auto;white-space:nowrap;background:rgba(255,255,255,0.9)}.kint-rich.kint-folder{position:fixed;bottom:0;left:0;right:0;z-index:999999;width:100%;margin:0;display:block}.kint-rich.kint-folder dd.kint-foldout{max-height:calc(100vh - 100px);padding-right:8px;overflow-y:scroll;display:none}.kint-rich.kint-folder dd.kint-foldout.kint-show{display:block}.kint-rich::selection,.kint-rich::-moz-selection,.kint-rich::-webkit-selection{background:#aaa;color:#1d1e1e}.kint-rich .kint-focused{box-shadow:0 0 3px 2px red}.kint-rich,.kint-rich::before,.kint-rich::after,.kint-rich *,.kint-rich *::before,.kint-rich *::after{box-sizing:border-box;border-radius:0;color:#1d1e1e;float:none !important;font-family:Consolas, Menlo, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace, serif;line-height:15px;margin:0;padding:0;text-align:left}.kint-rich{margin:8px 0}.kint-rich dt,.kint-rich dl{width:auto}.kint-rich dt,.kint-rich div.access-path{background:#f8f8f8;border:1px solid #d7d7d7;color:#1d1e1e;display:block;font-weight:bold;list-style:none outside none;overflow:auto;padding:4px}.kint-rich dt:hover,.kint-rich div.access-path:hover{border-color:#aaa}.kint-rich>dl dl{padding:0 0 0 12px}.kint-rich dt.kint-parent>nav,.kint-rich>footer>nav{background:url(\"data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAzMCAxNTAiPjxwYXRoIGQ9Ik02IDdoMThsLTkgMTV6bTAgMzBoMThsLTkgMTV6bTAgNDVoMThsLTktMTV6bTAgMzBoMThsLTktMTV6bTAgMTJsMTggMThtLTE4IDBsMTgtMTgiIGZpbGw9IiM1NTUiLz48cGF0aCBkPSJNNiAxMjZsMTggMThtLTE4IDBsMTgtMTgiIHN0cm9rZS13aWR0aD0iMiIgc3Ryb2tlPSIjNTU1Ii8+PC9zdmc+\") no-repeat scroll 0 0/15px 75px transparent;cursor:pointer;display:inline-block;height:15px;width:15px;margin-right:3px;vertical-align:middle}.kint-rich dt.kint-parent:hover>nav,.kint-rich>footer>nav:hover{background-position:0 25%}.kint-rich dt.kint-parent.kint-show>nav,.kint-rich>footer.kint-show>nav{background-position:0 50%}.kint-rich dt.kint-parent.kint-show:hover>nav,.kint-rich>footer.kint-show>nav:hover{background-position:0 75%}.kint-rich dt.kint-parent.kint-locked>nav{background-position:0 100%}.kint-rich dt.kint-parent+dd{display:none;border-left:1px dashed #d7d7d7}.kint-rich dt.kint-parent.kint-show+dd{display:block}.kint-rich var,.kint-rich var a{color:#06f;font-style:normal}.kint-rich dt:hover var,.kint-rich dt:hover var a{color:red}.kint-rich dfn{font-style:normal;font-family:monospace;color:#1d1e1e}.kint-rich pre{color:#1d1e1e;margin:0 0 0 12px;padding:5px;overflow-y:hidden;border-top:0;border:1px solid #d7d7d7;background:#f8f8f8;display:block;word-break:normal}.kint-rich .kint-popup-trigger,.kint-rich .kint-access-path-trigger,.kint-rich .kint-search-trigger{background:rgba(29,30,30,0.8);border-radius:3px;height:16px;font-size:16px;margin-left:5px;font-weight:bold;width:16px;text-align:center;float:right !important;cursor:pointer;color:#f8f8f8;position:relative;overflow:hidden;line-height:17.6px}.kint-rich .kint-popup-trigger:hover,.kint-rich .kint-access-path-trigger:hover,.kint-rich .kint-search-trigger:hover{color:#1d1e1e;background:#f8f8f8}.kint-rich dt.kint-parent>.kint-popup-trigger{line-height:19.2px}.kint-rich .kint-search-trigger{font-size:20px}.kint-rich input.kint-search{display:none;border:1px solid #d7d7d7;border-top-width:0;border-bottom-width:0;padding:4px;float:right !important;margin:-4px 0;color:#1d1e1e;background:#f8f8f8;height:24px;width:160px;position:relative;z-index:100}.kint-rich input.kint-search.kint-show{display:block}.kint-rich .kint-search-root ul.kint-tabs>li:not(.kint-search-match){background:#f8f8f8;opacity:0.5}.kint-rich .kint-search-root dl:not(.kint-search-match){opacity:0.5}.kint-rich .kint-search-root dl:not(.kint-search-match)>dt{background:#f8f8f8}.kint-rich .kint-search-root dl:not(.kint-search-match) dl,.kint-rich .kint-search-root dl:not(.kint-search-match) ul.kint-tabs>li:not(.kint-search-match){opacity:1}.kint-rich div.access-path{background:#f8f8f8;display:none;margin-top:5px;padding:4px;white-space:pre}.kint-rich div.access-path.kint-show{display:block}.kint-rich footer{padding:0 3px 3px;font-size:9px;background:transparent}.kint-rich footer>.kint-popup-trigger{background:transparent;color:#1d1e1e}.kint-rich footer nav{height:10px;width:10px;background-size:10px 50px}.kint-rich footer>ol{display:none;margin-left:32px}.kint-rich footer.kint-show>ol{display:block}.kint-rich a{color:#1d1e1e;text-shadow:none;text-decoration:underline}.kint-rich a:hover{color:#1d1e1e;border-bottom:1px dotted #1d1e1e}.kint-rich ul{list-style:none;padding-left:12px}.kint-rich ul:not(.kint-tabs) li{border-left:1px dashed #d7d7d7}.kint-rich ul:not(.kint-tabs) li>dl{border-left:none}.kint-rich ul.kint-tabs{margin:0 0 0 12px;padding-left:0;background:#f8f8f8;border:1px solid #d7d7d7;border-top:0}.kint-rich ul.kint-tabs>li{background:#f8f8f8;border:1px solid #d7d7d7;cursor:pointer;display:inline-block;height:24px;margin:2px;padding:0 12px;vertical-align:top}.kint-rich ul.kint-tabs>li:hover,.kint-rich ul.kint-tabs>li.kint-active-tab:hover{border-color:#aaa;color:red}.kint-rich ul.kint-tabs>li.kint-active-tab{background:#f8f8f8;border-top:0;margin-top:-1px;height:27px;line-height:24px}.kint-rich ul.kint-tabs>li:not(.kint-active-tab){line-height:20px}.kint-rich ul.kint-tabs li+li{margin-left:0}.kint-rich ul.kint-tab-contents>li{display:none}.kint-rich ul.kint-tab-contents>li.kint-show{display:block}.kint-rich dt:hover+dd>ul>li.kint-active-tab{border-color:#aaa;color:red}.kint-rich dt>.kint-color-preview{width:16px;height:16px;display:inline-block;vertical-align:middle;margin-left:10px;border:1px solid #d7d7d7;background-color:#ccc;background-image:url(\'data:image/svg+xml;utf8,<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 2 2\"><path fill=\"%23FFF\" d=\"M0 0h1v2h1V1H0z\"/></svg>\');background-size:100%}.kint-rich dt>.kint-color-preview:hover{border-color:#aaa}.kint-rich dt>.kint-color-preview>div{width:100%;height:100%}.kint-rich table{border-collapse:collapse;empty-cells:show;border-spacing:0}.kint-rich table *{font-size:12px}.kint-rich table dt{background:none;padding:2px}.kint-rich table dt .kint-parent{min-width:100%;overflow:hidden;text-overflow:ellipsis;white-space:nowrap}.kint-rich table td,.kint-rich table th{border:1px solid #d7d7d7;padding:2px;vertical-align:center}.kint-rich table th{cursor:alias}.kint-rich table td:first-child,.kint-rich table th{font-weight:bold;background:#f8f8f8;color:#1d1e1e}.kint-rich table td{background:#f8f8f8;white-space:pre}.kint-rich table td>dl{padding:0}.kint-rich table pre{border-top:0;border-right:0}.kint-rich table thead th:first-child{background:none;border:0}.kint-rich table tr:hover>td{box-shadow:0 0 1px 0 #aaa inset}.kint-rich table tr:hover var{color:red}.kint-rich table ul.kint-tabs li.kint-active-tab{height:20px;line-height:17px}.kint-rich pre.kint-source{margin-left:-1px}.kint-rich pre.kint-source[data-kint-filename]:before{display:block;content:attr(data-kint-filename);margin-bottom:4px;padding-bottom:4px;border-bottom:1px solid #f8f8f8}.kint-rich pre.kint-source>div:before{display:inline-block;content:counter(kint-l);counter-increment:kint-l;border-right:1px solid #aaa;padding-right:8px;margin-right:8px}.kint-rich pre.kint-source>div.kint-highlight{background:#f8f8f8}.kint-rich .kint-microtime-lap{text-shadow:-1px 0 #aaa,0 1px #aaa,1px 0 #aaa,0 -1px #aaa;color:#f8f8f8;font-weight:bold}input.kint-note-input{width:100%}.kint-rich .kint-focused{box-shadow:0 0 3px 2px red}.kint-rich dt{font-weight:normal}.kint-rich dt.kint-parent{margin-top:4px}.kint-rich dl dl{margin-top:4px;padding-left:25px;border-left:none}.kint-rich>dl>dt{background:#f8f8f8}.kint-rich ul{margin:0;padding-left:0}.kint-rich ul:not(.kint-tabs)>li{border-left:0}.kint-rich ul.kint-tabs{background:#f8f8f8;border:1px solid #d7d7d7;border-width:0 1px 1px 1px;padding:4px 0 0 12px;margin-left:-1px;margin-top:-1px}.kint-rich ul.kint-tabs li,.kint-rich ul.kint-tabs li+li{margin:0 0 0 4px}.kint-rich ul.kint-tabs li{border-bottom-width:0;height:25px}.kint-rich ul.kint-tabs li:first-child{margin-left:0}.kint-rich ul.kint-tabs li.kint-active-tab{border-top:1px solid #d7d7d7;background:#fff;font-weight:bold;padding-top:0;border-bottom:1px solid #fff !important;margin-bottom:-1px}.kint-rich ul.kint-tabs li.kint-active-tab:hover{border-bottom:1px solid #fff}.kint-rich ul>li>pre{border:1px solid #d7d7d7}.kint-rich dt:hover+dd>ul{border-color:#aaa}.kint-rich pre{background:#fff;margin-top:4px;margin-left:25px}.kint-rich .kint-source{margin-left:-1px}.kint-rich .kint-source .kint-highlight{background:#cfc}.kint-rich .kint-parent.kint-show>.kint-search{border-bottom-width:1px}.kint-rich table td{background:#fff}.kint-rich table td>dl{padding:0;margin:0}.kint-rich table td>dl>dt.kint-parent{margin:0}.kint-rich table td:first-child,.kint-rich table td,.kint-rich table th{padding:2px 4px}.kint-rich table dd,.kint-rich table dt{background:#fff}.kint-rich table tr:hover>td{box-shadow:none;background:#cfc}\r\n</style>\r\n\r\n    <meta charset=\"UTF-8\">\r\n    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">\r\n    <title>Form Tambah Data Kosan | Owner</title>\r\n    <link rel=\"stylesheet\" href=\"/adminTemplate/assets/css/main/app.css\">\r\n    <link rel=\"stylesheet\" href=\"/adminTemplate/assets/css/main/app-dark.css\">\r\n    <link rel=\"shortcut icon\" href=\"/adminTemplate/assets/images/logo/favicon.svg\" type=\"image/x-icon\">\r\n    <link rel=\"shortcut icon\" href=\"/adminTemplate/assets/images/logo/favicon.png\" type=\"image/png\">\r\n    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css\">\r\n    <link rel=\"stylesheet\" href=\"/adminTemplate/assets/css/shared/iconly.css\">\r\n    <link rel=\"stylesheet\" href=\"/adminTemplate/assets/extensions/sweetalert2/sweetalert2.min.css\">\r\n    <link rel=\"stylesheet\" href=\"https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css\">\r\n    <link rel=\"stylesheet\" href=\"/adminTemplate/assets/extensions/choices.js/public/assets/styles/choices.css\">\r\n    <script src=\"/jquery/jquery.min.js\"></script>\r\n</head>\r\n\r\n<body>\r\n    <div id=\"app\">\r\n        <div id=\"sidebar\" class=\"active\">\r\n            <div class=\"sidebar-wrapper active\">\r\n                <div class=\"sidebar-header position-relative\">\r\n                    <div class=\"d-flex justify-content-between align-items-center\">\r\n                        <div class=\"logo\">\r\n                            <a href=\"/\"><img src=\"/assets/svg/logo_sikosan_and_text.svg\" alt=\"SIKOSAN\" style=\"height: 25px;\"></a>\r\n                        </div>\r\n                        <div class=\"theme-toggle d-flex gap-2  align-items-center mt-2\">\r\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" role=\"img\" class=\"iconify iconify--system-uicons\" width=\"20\" height=\"20\" preserveAspectRatio=\"xMidYMid meet\" viewBox=\"0 0 21 21\">\r\n                                <g fill=\"none\" fill-rule=\"evenodd\" stroke=\"currentColor\" stroke-linecap=\"round\" stroke-linejoin=\"round\">\r\n                                    <path d=\"M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2\" opacity=\".3\"></path>\r\n                                    <g transform=\"translate(-210 -1)\">\r\n                                        <path d=\"M220.5 2.5v2m6.5.5l-1.5 1.5\"></path>\r\n                                        <circle cx=\"220.5\" cy=\"11.5\" r=\"4\"></circle>\r\n                                        <path d=\"m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2\"></path>\r\n                                    </g>\r\n                                </g>\r\n                            </svg>\r\n                            <div class=\"form-check form-switch fs-6\">\r\n                                <input class=\"form-check-input  me-0\" type=\"checkbox\" id=\"toggle-dark\">\r\n                                <label class=\"form-check-label\"></label>\r\n                            </div>\r\n                            <svg xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" aria-hidden=\"true\" role=\"img\" class=\"iconify iconify--mdi\" width=\"20\" height=\"20\" preserveAspectRatio=\"xMidYMid meet\" viewBox=\"0 0 24 24\">\r\n                                <path fill=\"currentColor\" d=\"m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z\"></path>\r\n                            </svg>\r\n                        </div>\r\n                        <div class=\"sidebar-toggler  x\">\r\n                            <a href=\"#\" class=\"sidebar-hide d-xl-none d-block\"><i class=\"bi bi-x bi-middle\"></i></a>\r\n                        </div>\r\n                    </div>\r\n                </div>\r\n                <div class=\"sidebar-menu mb-auto\">\r\n                    <div class=\"card\">\r\n                        <div class=\"card-body py-4 px-5\">\r\n                            <div class=\"d-flex align-items-center\">\r\n                                <div class=\"avatar avatar-xl\">\r\n                                    <img src=\"/adminTemplate/assets/images/faces/1.jpg\" alt=\"Face 1\">\r\n                                </div>\r\n                                <div class=\"ms-3 name\">\r\n                                    <h5 class=\"font-bold\">Ngab Owi TB</h5>\r\n                                </div>\r\n                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <ul class=\"menu\">\r\n                        <li class=\"sidebar-title\">Menu</li>\r\n\r\n                        <li class=\"sidebar-item \">\r\n                            <a href=\"/owner/halaman_pemilik\" class=\'sidebar-link\'>\r\n                                <i class=\"bi bi-grid-fill\"></i>\r\n                                <span>Dashboard</span>\r\n                            </a>\r\n                        </li>\r\n\r\n                        <li class=\"sidebar-item \">\r\n                            <a href=\"/owner/kosan_anda\" class=\'sidebar-link\'>\r\n                                <i class=\"bi bi-collection-fill\"></i>\r\n                                <span>Kosan</span>\r\n                            </a>\r\n                        </li>\r\n                    </ul>\r\n                </div>\r\n                <hr>\r\n                <ul class=\"menu\">\r\n                    <li class=\"sidebar-item\">\r\n                        <a href=\"/logout\" class=\'sidebar-link btn btn-outline-danger\'>\r\n                            <i class=\"bi bi-door-open\"></i>\r\n                            <span>Keluar</span>\r\n                        </a>\r\n                    </li>\r\n                </ul>\r\n\r\n            </div>\r\n        </div>\r\n    </div>\r\n    <div id=\"main\">\r\n        <header class=\"mb-3\">\r\n            <a href=\"#\" class=\"burger-btn d-block d-xl-none\">\r\n                <i class=\"bi bi-justify fs-3\"></i>\r\n            </a>\r\n        </header>\r\n        <style>\r\n    body {\r\n        font-family: Arial, Helvetica, sans-serif;\r\n    }\r\n\r\n    #myImg {\r\n        border-radius: 5px;\r\n        cursor: pointer;\r\n        transition: 0.3s;\r\n    }\r\n\r\n    #myImg:hover {\r\n        opacity: 0.7;\r\n    }\r\n\r\n    /* The Modal (background) */\r\n    .modal {\r\n        display: none;\r\n        /* Hidden by default */\r\n        position: fixed;\r\n        /* Stay in place */\r\n        z-index: 1;\r\n        /* Sit on top */\r\n        padding-top: 100px;\r\n        /* Location of the box */\r\n        left: 0;\r\n        top: 0;\r\n        width: 100%;\r\n        /* Full width */\r\n        height: 100%;\r\n        /* Full height */\r\n        overflow: auto;\r\n        /* Enable scroll if needed */\r\n        background-color: rgb(0, 0, 0);\r\n        /* Fallback color */\r\n        background-color: rgba(0, 0, 0, 0.9);\r\n        /* Black w/ opacity */\r\n    }\r\n\r\n    /* Modal Content (image) */\r\n    .modal-content {\r\n        margin: auto;\r\n        display: block;\r\n        width: 80%;\r\n        max-width: 700px;\r\n    }\r\n\r\n    /* Caption of Modal Image */\r\n    #caption {\r\n        margin: auto;\r\n        display: block;\r\n        width: 80%;\r\n        max-width: 700px;\r\n        text-align: center;\r\n        color: #ccc;\r\n        padding: 10px 0;\r\n        height: 150px;\r\n    }\r\n\r\n    /* Add Animation */\r\n    .modal-content,\r\n    #caption {\r\n        -webkit-animation-name: zoom;\r\n        -webkit-animation-duration: 0.6s;\r\n        animation-name: zoom;\r\n        animation-duration: 0.6s;\r\n    }\r\n\r\n    @-webkit-keyframes zoom {\r\n        from {\r\n            -webkit-transform: scale(0)\r\n        }\r\n\r\n        to {\r\n            -webkit-transform: scale(1)\r\n        }\r\n    }\r\n\r\n    @keyframes zoom {\r\n        from {\r\n            transform: scale(0)\r\n        }\r\n\r\n        to {\r\n            transform: scale(1)\r\n        }\r\n    }\r\n\r\n    /* The Close Button */\r\n    .close {\r\n        position: absolute;\r\n        top: 15px;\r\n        right: 35px;\r\n        color: #f1f1f1;\r\n        font-size: 40px;\r\n        font-weight: bold;\r\n        transition: 0.3s;\r\n    }\r\n\r\n    .close:hover,\r\n    .close:focus {\r\n        color: #bbb;\r\n        text-decoration: none;\r\n        cursor: pointer;\r\n    }\r\n\r\n    /* 100% Image Width on Smaller Screens */\r\n    @media only screen and (max-width: 700px) {\r\n        .modal-content {\r\n            width: 100%;\r\n        }\r\n    }\r\n</style>\r\n<section class=\"section\">\r\n    <div class=\"card\">\r\n        <div class=\"card-header\">\r\n            <h4 class=\"card-title\">Form Tambah Data Kosan | Owner</h4>\r\n        </div>\r\n        <div class=\"card-body\">\r\n\r\n            <form action=\"/owner/save_kosan\" method=\"POST\" enctype=\"multipart/form-data\">\r\n                <input type=\"hidden\" name=\"csrf_test_name\" value=\"5435584d25edd6fa2ab344b4a1e089bf\" />                <div class=\"row\">\r\n                    <div class=\"col-md-6\">\r\n                        <div class=\"form-group\">\r\n                            <label for=\"namaKost\" class=\"form-label\">Nama Kost</label>\r\n                            <input type=\"text\" class=\"form-control \" id=\"namaKost\" name=\"namaKost\" value=\"\" autocomplete=\"off\">\r\n                            <div class=\"invalid-feedback\">\r\n                                                            </div>\r\n                        </div>\r\n                        <label for=\"kota\" class=\"form-label\">Kota/Kabupaten</label>\r\n                        <fieldset class=\"form-group\">\r\n                            <select name=\"kota\" id=\"nama_kota\" class=\"form-select\">\r\n\r\n                            </select>\r\n                        </fieldset>\r\n\r\n                        <div class=\"form-group\">\r\n                            <label for=\"type\" class=\"form-label\">Type</label>\r\n                            <fieldset class=\"form-group\">\r\n                                <select class=\"form-select\" id=\"type\" name=\"type\">\r\n                                    <option value=\"Putra\">Putra</option>\r\n                                    <option value=\"Putri\">Putri</option>\r\n                                    <option value=\"Campur\">Campur</option>\r\n                                </select>\r\n                            </fieldset>\r\n                        </div>\r\n                        <div class=\"form-group\">\r\n                            <label for=\"alamat\" class=\"form-label\">Alamat Lengkap</label>\r\n                            <textarea class=\"form-control \" id=\"alamat\" autocomplete=\"off\" name=\"alamat\" rows=\"3\"></textarea>\r\n                            <div class=\"invalid-feedback\">\r\n                                                            </div>\r\n                        </div>\r\n                        <div class=\"form-group\">\r\n                            <label for=\"fasilitas\" class=\"form-label\">Fasilitas</label>\r\n                            <textarea class=\"form-control \" id=\"fasilitas\" name=\"fasilitas\" rows=\"3\"></textarea>\r\n                            <div class=\"invalid-feedback\">\r\n                                                            </div>\r\n                        </div>\r\n                        <div class=\"form-group\">\r\n                            <label for=\"deskripsi\" class=\"form-label\">Deskripsi</label>\r\n                            <textarea class=\"form-control  \" id=\"deskripsi\" name=\"deskripsi\" rows=\"3\"></textarea>\r\n                            <div class=\"invalid-feedback\">\r\n                                                            </div>\r\n                        </div>\r\n                        <div class=\"form-group\">\r\n                            <label for=\"harga\" class=\"form-label\">Harga</label>\r\n                            <input type=\"number\" class=\"form-control \" id=\"harga\" name=\"harga\" placeholder=\"Harga\" value=\"\">\r\n                            <div class=\"invalid-feedback\">\r\n                                                            </div>\r\n                        </div>\r\n                    </div>\r\n                    <div class=\"col-md-6\">\r\n                        <div class=\"mb-3\">\r\n                            <label for=\"foto\" class=\"form-label\">Foto 1</label>\r\n                            <input name=\"foto_1\" class=\"form-control\" id=\"foto1\" type=\'file\' onchange=\"readURL1(this);\" />\r\n                            <small class=\"text-muted\">Foto pertama akan menjadi thumbnail postingan kosan anda.</small> <br>\r\n                            <button type=\"button\" class=\"btn btn-primary mt-2\" data-bs-toggle=\"modal\" id=\"btnft1\">\r\n                                Lihat Foto\r\n                            </button>\r\n                            <img src=\"/foto_kosan/\" id=\"foto1img\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" width=\"600\" height=\"auto\" hidden>\r\n\r\n                            <div id=\"modalFoto1\" class=\"modal\">\r\n\r\n                                <span class=\"close\" id=\"close\" data-dismiss=\"modal\">&times;</span>\r\n                                <div></div>\r\n                                <img class=\"modal-content\" id=\"foto1imgs\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" alt=\"Belum ada Foto\" style=\"object-fit:contain;width:700px; height:700px;\">\r\n                                <!-- <div id=\"caption\"></div> -->\r\n                            </div>\r\n                        </div>\r\n\r\n                        <div class=\"mb-3\">\r\n                            <label for=\"foto\" class=\"form-label\">Foto 2</label>\r\n                            <input name=\"foto_2\" class=\"form-control\" id=\"foto2\" type=\'file\' onchange=\"readURL2(this);\" />\r\n\r\n                            <button type=\"button\" class=\"btn btn-primary mt-2\" data-bs-toggle=\"modal\" id=\"btnft2\">\r\n                                Lihat Foto\r\n                            </button>\r\n                            <img src=\"/foto_kosan/\" id=\"foto2img\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" width=\"600\" height=\"auto\" hidden>\r\n                            <div id=\"modalFoto2\" class=\"modal\">\r\n                                <span class=\"close\" id=\"close\">&times;</span>\r\n                                <img class=\"modal-content\" id=\"foto2imgs\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" alt=\"Belum ada Foto\" style=\"object-fit:contain;width:700px; height:700px;\">\r\n                                <!-- <div id=\"caption\"></div> -->\r\n                            </div>\r\n                        </div>\r\n                        <div class=\"mb-3\">\r\n                            <label for=\"foto\" class=\"form-label\">Foto 3</label>\r\n                            <input name=\"foto_3\" class=\"form-control\" id=\"foto3\" type=\'file\' onchange=\"readURL3(this);\" />\r\n                            <button type=\"button\" class=\"btn btn-primary mt-2\" data-bs-toggle=\"modal\" id=\"btnft3\">\r\n                                Lihat Foto\r\n                            </button>\r\n                            <img src=\"/foto_kosan/\" id=\"foto3img\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" width=\"600\" height=\"auto\" hidden>\r\n                            <div id=\"modalFoto3\" class=\"modal\">\r\n                                <span class=\"close\" id=\"close\">&times;</span>\r\n                                <img class=\"modal-content\" id=\"foto3imgs\" onerror=\"if (this.src != \'/foto_kosan/notfound.jpg\') this.src = \'/foto_kosan/notfound.jpg\';\" alt=\"Belum ada Foto\" style=\"object-fit:contain;width:700px; height:700px;\">\r\n                                <!-- <div id=\"caption\"></div> -->\r\n                            </div>\r\n                        </div>\r\n\r\n                    </div>\r\n                    <div class=\"col-sm-12 d-flex justify-content-end\">\r\n                        <button type=\"submit\" class=\"btn btn-primary me-1 mb-1\">Submit</button>\r\n                        <button type=\"reset\" class=\"btn btn-light-secondary me-1 mb-1\">Reset</button>\r\n                    </div>\r\n                </div>\r\n            </form>\r\n        </div>\r\n    </div>\r\n</section>\r\n</div>\r\n<script>\r\n    // Get the modal\r\n    var modal1 = document.getElementById(\"modalFoto1\");\r\n\r\n    // Get the image and insert it inside the modal - use its \"alt\" text as a caption\r\n    var img1 = document.getElementById(\"foto1img\");\r\n    var modalImg1 = document.getElementById(\"foto1imgs\");\r\n    var preview1 = document.getElementById(\"btnft1\")\r\n    preview1.onclick = function() {\r\n        modal1.style.display = \"block\";\r\n        modalImg1.src = img1.src;\r\n        // captionText.innerHTML = this.alt;\r\n    }\r\n\r\n    // Get the <span> element that closes the modal\r\n    var span1 = document.getElementsByClassName(\"close\")[0];\r\n\r\n    // When the user clicks on <span> (x), close the modal\r\n    span1.onclick = function() {\r\n        modal1.style.display = \"none\";\r\n    }\r\n</script>\r\n<script>\r\n    // Get the modal\r\n    var modal2 = document.getElementById(\"modalFoto2\");\r\n\r\n    // Get the image and insert it inside the modal - use its \"alt\" text as a caption\r\n    var img2 = document.getElementById(\"foto2img\");\r\n    var modalImg2 = document.getElementById(\"foto2imgs\");\r\n    var preview2 = document.getElementById(\"btnft2\")\r\n    preview2.onclick = function() {\r\n        modal2.style.display = \"block\";\r\n        modalImg2.src = img2.src;\r\n        // captionText.innerHTML = this.alt;\r\n    }\r\n\r\n    // Get the <span> element that closes the modal\r\n    var span2 = document.getElementsByClassName(\"close\")[1];\r\n\r\n    // When the user clicks on <span> (x), close the modal\r\n    span2.onclick = function() {\r\n        modal2.style.display = \"none\";\r\n    }\r\n</script>\r\n<script>\r\n    // Get the modal\r\n    var modal3 = document.getElementById(\"modalFoto3\");\r\n\r\n    // Get the image and insert it inside the modal - use its \"alt\" text as a caption\r\n    var img3 = document.getElementById(\"foto3img\");\r\n    var modalImg3 = document.getElementById(\"foto3imgs\");\r\n    var preview3 = document.getElementById(\"btnft3\")\r\n    preview3.onclick = function() {\r\n        modal3.style.display = \"block\";\r\n        modalImg3.src = img3.src;\r\n        // captionText.innerHTML = this.alt;\r\n    }\r\n\r\n    // Get the <span> element that closes the modal\r\n    var span3 = document.getElementsByClassName(\"close\")[2];\r\n\r\n    // When the user clicks on <span> (x), close the modal\r\n    span3.onclick = function() {\r\n        modal3.style.display = \"none\";\r\n    }\r\n</script>\r\n<script>\r\n    function readURL1(input) {\r\n        if (input.files && input.files[0]) {\r\n            var reader1 = new FileReader();\r\n\r\n            reader1.onload = function(e) {\r\n                $(\'#foto1img\')\r\n                    .attr(\'src\', e.target.result);\r\n            };\r\n\r\n            reader1.readAsDataURL(input.files[0]);\r\n        }\r\n    }\r\n</script>\r\n<script>\r\n    function readURL2(input) {\r\n        if (input.files && input.files[0]) {\r\n            var reader2 = new FileReader();\r\n\r\n            reader2.onload = function(e) {\r\n                $(\'#foto2img\')\r\n                    .attr(\'src\', e.target.result);\r\n            };\r\n\r\n            reader2.readAsDataURL(input.files[0]);\r\n        }\r\n    }\r\n</script>\r\n<script>\r\n    function readURL3(input) {\r\n        if (input.files && input.files[0]) {\r\n            var reader3 = new FileReader();\r\n\r\n            reader3.onload = function(e) {\r\n                $(\'#foto3img\')\r\n                    .attr(\'src\', e.target.result);\r\n            };\r\n\r\n            reader3.readAsDataURL(input.files[0]);\r\n        }\r\n    }\r\n</script>\r\n<!-- JS -->\r\n\r\n<!-- <script type=\"text/javascript\">\r\n    var harga = document.getElementById(\'harga\');\r\n    harga.addEventListener(\'keyup\', function(e) {\r\n        // tambahkan \'Rp.\' pada saat form di ketik\r\n        // gunakan fungsi formatRupiah() untuk mengubah angka yang di ketik menjadi format angka\r\n        harga.value = formatRupiah(this.value, \'Rp. \');\r\n    });\r\n\r\n    /* Fungsi formatRupiah */\r\n    function formatRupiah(angka, prefix) {\r\n        var number_string = angka.replace(/[^,\\d]/g, \'\').toString(),\r\n            split = number_string.split(\',\'),\r\n            sisa = split[0].length % 3,\r\n            harga = split[0].substr(0, sisa),\r\n            ribuan = split[0].substr(sisa).match(/\\d{3}/gi);\r\n\r\n        // tambahkan titik jika yang di input sudah menjadi angka ribuan\r\n        if (ribuan) {\r\n            separator = sisa ? \'.\' : \'\';\r\n            harga += separator + ribuan.join(\'.\');\r\n        }\r\n\r\n        harga = split[1] != undefined ? harga + \',\' + split[1] : harga;\r\n        return prefix == undefined ? harga : (harga ? \'Rp. \' + harga : \'\');\r\n    }\r\n</script> -->\r\n        <!-- DEBUG-VIEW START 1 APPPATH\\Views\\globals\\partials\\footer.php -->\r\n<footer class=\"d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top\">\r\n    <div class=\"col-md-4 d-flex align-items-center\">\r\n        <a href=\"/\" class=\"mb-3 me-2 mb-md-0 text-muted text-decoration-none lh-1\">\r\n            <img src=\"/assets/img/sikosan.ico\" width=\"40\" height=\"32\">\r\n        </a>\r\n        <span class=\"mb-3 mb-md-0 text-muted\">&copy; 2022 Sikosan, Inc</span>\r\n    </div>\r\n\r\n\r\n    <ul class=\"nav col-md-4 justify-content-end\">\r\n        <li class=\"nav-item\"><a href=\"#\" class=\"nav-link px-2 text-muted\">About</a></li>\r\n        <li class=\"nav-item\"><a href=\"/pusatBantuan\" class=\"nav-link px-2 text-muted\">Pusat Bantuan</a></li>\r\n        <li class=\"nav-item\"><a href=\"/terms\" class=\"nav-link px-2 text-muted\">Syarat & ketentuan</a></li>\r\n    </ul>\r\n</footer>\r\n<!-- DEBUG-VIEW ENDED 1 APPPATH\\Views\\globals\\partials\\footer.php -->\r\n    </div>\r\n    </div>\r\n    <script src=\"/adminTemplate/assets/js/bootstrap.js\"></script>\r\n    <script src=\"/adminTemplate/assets/js/app.js\"></script>\r\n    <script src=\"/adminTemplate/assets/extensions/apexcharts/apexcharts.min.js\"></script>\r\n    <script src=\"/adminTemplate/assets/js/pages/dashboard.js\"></script>\r\n    <script src=\"https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.js\"></script>\r\n    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://cdn.jsdelivr.net/npm/sweetalert2@9.17.2/dist/sweetalert2.min.css\">\r\n\r\n    <script src=\"/adminTemplate/assets/extensions/choices.js/public/assets/scripts/choices.js\"></script>\r\n    <script src=\"/adminTemplate/assets/js/pages/form-element-select.js\"></script>\r\n\r\n    <script>\r\n        $.ajax({\r\n            type: \"GET\",\r\n            url: \"http://dev.farizdotid.com/api/daerahindonesia/kota?id_provinsi=18\",\r\n            crossDomain: true,\r\n            dataType: \"json\",\r\n            success: function(response) {\r\n                for (let i = 0; i < response[\'kota_kabupaten\'].length; i++) {\r\n                    var element = response[\'kota_kabupaten\'][i][\'nama\'];\r\n                    element = element.split(\" \");\r\n                    element.shift();\r\n                    element = element.join(\" \");\r\n                    $(\'#nama_kota\').append(\'<option value=\"\' + element + \'\">\' + response[\'kota_kabupaten\'][i][\'nama\'] + \'</option>\');\r\n                }\r\n\r\n            }\r\n        });\r\n\r\n        $(\'.btn-delete\').click(function(e) {\r\n            e.preventDefault();\r\n            Swal.fire({\r\n                title: \'Apakah anda yakin?\',\r\n                text: \"Data yang dihapus tidak dapat dikembalikan!\",\r\n                icon: \'warning\',\r\n                showCancelButton: true,\r\n                confirmButtonColor: \'#3085d6\',\r\n                cancelButtonColor: \'#d33\',\r\n                confirmButtonText: \'Ya, hapus!\'\r\n            }).then((result) => {\r\n                if (result.isConfirmed) {\r\n                    $(\'#formDelete\').submit();\r\n                }\r\n            });\r\n\r\n        });\r\n    </script>\r\n</body>\r\n\r\n</html>\r\n<!-- DEBUG-VIEW ENDED 2 APPPATH\\Views\\templates\\sidebar_menu.php -->\r\n\r\n<!-- DEBUG-VIEW ENDED 3 APPPATH\\Views\\auth\\owner\\tambah_kosan_page.php -->\r\n', 567565656, 'Putra', 2, '2022-11-04 00:01:03', '2022-11-04 00:01:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(8, '2022-10-14-150527', 'App\\Database\\Migrations\\Kosan', 'default', 'App', 1667192066, 1),
(9, '2022-10-14-150528', 'App\\Database\\Migrations\\FotoKosan', 'default', 'App', 1667192066, 1),
(10, '2022-10-30-145214', 'App\\Database\\Migrations\\Wishlist', 'default', 'App', 1667192066, 1),
(11, '2017-11-20-223112', 'Myth\\Auth\\Database\\Migrations\\CreateAuthTables', 'default', 'Myth\\Auth', 1667192086, 2),
(12, '2022-11-03-151609', 'App\\Database\\Migrations\\Komentar', 'default', 'App', 1667489018, 3),
(13, '2022-11-03-151620', 'App\\Database\\Migrations\\ReplyKomentar', 'default', 'App', 1667489018, 3),
(14, '2022-11-10-114023', 'App\\Database\\Migrations\\ReportKosan', 'default', 'App', 1668081333, 4);

-- --------------------------------------------------------

--
-- Table structure for table `reply_komentar`
--

CREATE TABLE `reply_komentar` (
  `id` int(11) UNSIGNED NOT NULL,
  `id_komentar` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `reply` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reply_komentar`
--

INSERT INTO `reply_komentar` (`id`, `id_komentar`, `id_user`, `reply`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'ready mas', '2022-11-04 22:26:42', '2022-11-04 22:26:42'),
(2, 1, 3, 'Kosannya Jelek dek', '2022-11-04 22:29:53', '2022-11-04 22:29:53');

-- --------------------------------------------------------

--
-- Table structure for table `report_kosan`
--

CREATE TABLE `report_kosan` (
  `id_report` int(11) UNSIGNED NOT NULL,
  `id_kosan` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL,
  `report` text NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `report_kosan`
--

INSERT INTO `report_kosan` (`id_report`, `id_kosan`, `id_user`, `report`, `created_at`, `updated_at`) VALUES
(2, 6, 4, 'Saya ditipu', '2022-11-10 20:10:04', '2022-11-10 20:10:04'),
(3, 6, 4, 'Saya juga', '2022-11-10 20:10:24', '2022-11-10 20:10:24'),
(4, 5, 4, 'Kosan ga sesuai harga, saya bersama 4 orang teman saya kecewa', '2022-11-10 20:59:04', '2022-11-10 20:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `namaLengkap` varchar(255) NOT NULL,
  `notlp` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `reset_hash` varchar(255) DEFAULT NULL,
  `reset_at` datetime DEFAULT NULL,
  `reset_expires` datetime DEFAULT NULL,
  `activate_hash` varchar(255) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `status_message` varchar(255) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0,
  `force_pass_reset` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `namaLengkap`, `notlp`, `email`, `password_hash`, `reset_hash`, `reset_at`, `reset_expires`, `activate_hash`, `status`, `status_message`, `active`, `force_pass_reset`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Muhammad Febrian Hasibuan', '082310385532', 'muhammadfebrianhasibuan@gmail.com', '$2y$10$k9dTKjpBo/BWVWvB8BQTJuFCQGTJ4rdnLrji1TKmfG3oNXj/2Xrbm', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-31 11:55:56', '2022-10-31 11:55:56', NULL),
(2, 'Ngab Owi TB', '082310385532', 'nevsisipitnya@gmail.com', '$2y$10$jXDiqgXE9Em9K80JN9MpIOpAIN4Wzlu1CeNwZ5oeFMf.CdnUsK5GO', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-10-31 23:41:45', '2022-10-31 23:41:45', NULL),
(3, 'Pak Makmur', '082310385532', 'febrianhasibuan090@gmail.com', '$2y$10$jAJ5mu0FsUG1AShetX4vzOHj.9itNyXkvJlONdIVFr5r49Jr2BQIG', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-01 23:23:14', '2022-11-01 23:23:14', NULL),
(4, 'Rifan Setiadi', '087654321234', 'rifan@gmail.com', '$2y$10$gDV5Q1.EgG9qBVFE7d3mw.5f2rkf5zSo4ZlAs94oI9m743N5Kc6xC', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-10 19:11:11', '2022-11-10 19:11:11', NULL),
(5, 'Aku Admin', '098767654543', 'akuadmin@gmail.com', '$2y$10$fVKAe.vGS5z2EFBHGhRG5uZwlJ4t8Y8IWpxAdKyU4SAUrUFV1L2.2', NULL, NULL, NULL, NULL, NULL, NULL, 1, 0, '2022-11-10 20:31:39', '2022-11-10 20:31:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(11) UNSIGNED NOT NULL,
  `id_kosan` int(11) UNSIGNED NOT NULL,
  `id_user` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `id_kosan`, `id_user`) VALUES
(1, 101, 2),
(2, 10, 1),
(3, 1, 1),
(4, 9, 1),
(8, 7, 1),
(9, 7, 4),
(10, 5, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups`
--
ALTER TABLE `auth_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD KEY `auth_groups_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `group_id_permission_id` (`group_id`,`permission_id`);

--
-- Indexes for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD KEY `auth_groups_users_user_id_foreign` (`user_id`),
  ADD KEY `group_id_user_id` (`group_id`,`user_id`);

--
-- Indexes for table `auth_logins`
--
ALTER TABLE `auth_logins`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auth_tokens_user_id_foreign` (`user_id`),
  ADD KEY `selector` (`selector`);

--
-- Indexes for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD KEY `auth_users_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `user_id_permission_id` (`user_id`,`permission_id`);

--
-- Indexes for table `foto_kosan`
--
ALTER TABLE `foto_kosan`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `foto_kosan_id_kosan_foreign` (`id_kosan`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`),
  ADD KEY `komentar_id_kosan_foreign` (`id_kosan`),
  ADD KEY `komentar_id_user_foreign` (`id_user`);

--
-- Indexes for table `kosan`
--
ALTER TABLE `kosan`
  ADD PRIMARY KEY (`id_kosan`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reply_komentar`
--
ALTER TABLE `reply_komentar`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reply_komentar_id_komentar_foreign` (`id_komentar`),
  ADD KEY `reply_komentar_id_user_foreign` (`id_user`);

--
-- Indexes for table `report_kosan`
--
ALTER TABLE `report_kosan`
  ADD PRIMARY KEY (`id_report`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth_activation_attempts`
--
ALTER TABLE `auth_activation_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_groups`
--
ALTER TABLE `auth_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `auth_logins`
--
ALTER TABLE `auth_logins`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `auth_permissions`
--
ALTER TABLE `auth_permissions`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_reset_attempts`
--
ALTER TABLE `auth_reset_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto_kosan`
--
ALTER TABLE `foto_kosan`
  MODIFY `id_foto` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kosan`
--
ALTER TABLE `kosan`
  MODIFY `id_kosan` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `reply_komentar`
--
ALTER TABLE `reply_komentar`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `report_kosan`
--
ALTER TABLE `report_kosan`
  MODIFY `id_report` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth_groups_permissions`
--
ALTER TABLE `auth_groups_permissions`
  ADD CONSTRAINT `auth_groups_permissions_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_groups_users`
--
ALTER TABLE `auth_groups_users`
  ADD CONSTRAINT `auth_groups_users_group_id_foreign` FOREIGN KEY (`group_id`) REFERENCES `auth_groups` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_groups_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_tokens`
--
ALTER TABLE `auth_tokens`
  ADD CONSTRAINT `auth_tokens_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `auth_users_permissions`
--
ALTER TABLE `auth_users_permissions`
  ADD CONSTRAINT `auth_users_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `auth_permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auth_users_permissions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `foto_kosan`
--
ALTER TABLE `foto_kosan`
  ADD CONSTRAINT `foto_kosan_id_kosan_foreign` FOREIGN KEY (`id_kosan`) REFERENCES `kosan` (`id_kosan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `komentar`
--
ALTER TABLE `komentar`
  ADD CONSTRAINT `komentar_id_kosan_foreign` FOREIGN KEY (`id_kosan`) REFERENCES `kosan` (`id_kosan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `komentar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reply_komentar`
--
ALTER TABLE `reply_komentar`
  ADD CONSTRAINT `reply_komentar_id_komentar_foreign` FOREIGN KEY (`id_komentar`) REFERENCES `komentar` (`id_komentar`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `reply_komentar_id_user_foreign` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
