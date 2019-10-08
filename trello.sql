-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2019 at 03:33 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trello`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(255) NOT NULL,
  `author_password` varchar(255) NOT NULL,
  `author_picture` blob NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`author_id`, `author_name`, `author_password`, `author_picture`, `created_at`, `is_deleted`, `deleted_at`) VALUES
(1, 'JaynamSanghavi', 'cf0d92a7be8cb153c57b66ca07d21e0f', 0xffd8ffe000104a46494600010100004800480000ffe1008c4578696600004d4d002a000000080005011200030000000100010000011a0005000000010000004a011b0005000000010000005201280003000000010002000087690004000000010000005a00000000000000480000000100000048000000010003a00100030000000100010000a00200040000000100000048a0030004000000010000004800000000ffed003850686f746f73686f7020332e30003842494d04040000000000003842494d0425000000000010d41d8cd98f00b204e9800998ecf8427effc00011080048004803011200021101031101ffc4001f0000010501010101010100000000000000000102030405060708090a0bffc400b5100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9faffc4001f0100030101010101010101010000000000000102030405060708090a0bffc400b51100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffdb004300080606070605080707070909080a0c140d0c0b0b0c1912130f141d1a1f1e1d1a1c1c20242e2720222c231c1c2837292c30313434341f27393d38323c2e333432ffdb0043010909090c0b0c180d0d1832211c213232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232ffdd00040009ffda000c03010002110311003f00f1f095305a091152a645a600b1f34b3cc2da12f8dcdd9477a0761e2218ac8c6a37f32a2248fbba2266a5c92dca506cd369605620c8bc75e6b3e749b4d6682eedda3941c14c018fad2e6bec53a76dcd848d5d7729047ad66db5e2c0e191c3293ca9fd68e625c4d2310c74a9d4ac91aba9e08c8ab2194da2e2acb2d0067bc7ed56245a00ffd0f29038a70a649220a541401435495a1f2995739c8aedb49d074ed4f4646bb4792e2779161555fb9b33962dfc3d3e87a739aca751276674d2a12947991a9f0d74db6fec9fb7cb086b99988cb73800f415aba7595e5a7822cc698ebe7476e859c1c1e99247079ae3a8f9a476538f2c4b5e25f0a69bac059258577818dca31c573ba0ea1e21d42fe4f36e9e6b544dd2f9bcac6dce554ed1923bfd6935cab46526a5ba39fd77c06b6961717966cc0c31972839dc0727f4ae8edfc4b73a8e9fa995b444812291033a9058f4fa77ad20e775a99d550b3d0e26c2264b28c3e738cd5938550074aee5b1e6377642c39a19a8021714d73401ffd1f2b1c9a05324993a5356803a2f0e6b179652bd9c291c90dc02184848283bb291eddba1a83c3d6af36a90c80a981a0909f5cf007e84d615d2e5bb3a70ce5cd65b1dc68dbad34d8ad16725628c2027f88018ae321d564b1d40e9d79290a0e2373d1d7d0fbd71b8c9ea7629d9d8ed9b55b9b331dacb6724c272cab242576463fda24839f6ac5b44326a710f33640a37030ce48c7d09c7e94d5ada9ab96972cebf3436de1a7119dad7738550063201c9247d07eb5cdf893564bfbc48e16dd6f6e0a21fef1272cdfcbf2ae9a34edab38311594b48994c78a84c9c5749c80c7ad44ef400d7351335007fffd2f237bc853a36e3e8b59bb462988b32df492a32a8d8a7f3355003cfa5033aed275136fa75ade162a21055dbd8706b9db76b89ed9ec61745476dedbb3ce31c7e94349ab304da774777a95b5b788b488eee1501d80c86edf5a9bc14f666296c98849fbc7d8fd2b86a45c1fba77539a9af78c3d4a783c39a01836aff0068dcc65015624aa9ea7fc3deac78cbc232f9d3ea714a6488fccc09e578c607b53a6e2dea2aaa49596c7216faa3a5ba6f4deabf2920f23fc6a994312c71e304e79aec388d88efe09f01241bbfbadc1ac064c1e28158e909ac9b1926599519894652704e718a02c6935318d311ffd3f0a13fbd403ad00591265b8a8a3fbf4c0bf65298ef626040e71cd4317faf8ffdf1fce8407553dbf9ee934523dbdd4672922f045587ff005c7fdd15564dd992db4ae8e8752d54dee83651b91e74c01980ed8ebff8f564c9fea2dffdc3ff00a1b5734211f68ce99ce5ec91c66a9731cfa988e251b23382c3f88f73544ffc841bfdfadd98128501f18ef4f3febbf1a40588d7176dfec263f3a72ffc7d4df8500c793435049fffd9, '2019-10-08 00:00:00', 0, '0000-00-00 00:00:00'),
(2, 'Rahul', 'cf0d92a7be8cb153c57b66ca07d21e0f', 0xffd8ffe000104a46494600010100004800480000ffe1008c4578696600004d4d002a000000080005011200030000000100010000011a0005000000010000004a011b0005000000010000005201280003000000010002000087690004000000010000005a00000000000000480000000100000048000000010003a00100030000000100010000a00200040000000100000048a0030004000000010000004800000000ffed003850686f746f73686f7020332e30003842494d04040000000000003842494d0425000000000010d41d8cd98f00b204e9800998ecf8427effc00011080048004803011200021101031101ffc4001f0000010501010101010100000000000000000102030405060708090a0bffc400b5100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9faffc4001f0100030101010101010101010000000000000102030405060708090a0bffc400b51100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffdb004300080606070605080707070909080a0c140d0c0b0b0c1912130f141d1a1f1e1d1a1c1c20242e2720222c231c1c2837292c30313434341f27393d38323c2e333432ffdb0043010909090c0b0c180d0d1832211c213232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232ffdd00040009ffda000c03010002110311003f00f1f095305a091152a645a600b1f34b3cc2da12f8dcdd9477a0761e2218ac8c6a37f32a2248fbba2266a5c92dca506cd369605620c8bc75e6b3e749b4d6682eedda3941c14c018fad2e6bec53a76dcd848d5d7729047ad66db5e2c0e191c3293ca9fd68e625c4d2310c74a9d4ac91aba9e08c8ab2194da2e2acb2d0067bc7ed56245a00ffd0f29038a70a649220a541401435495a1f2995739c8aedb49d074ed4f4646bb4792e2779161555fb9b33962dfc3d3e87a739aca751276674d2a12947991a9f0d74db6fec9fb7cb086b99988cb73800f415aba7595e5a7822cc698ebe7476e859c1c1e99247079ae3a8f9a476538f2c4b5e25f0a69bac059258577818dca31c573ba0ea1e21d42fe4f36e9e6b544dd2f9bcac6dce554ed1923bfd6935cab46526a5ba39fd77c06b6961717966cc0c31972839dc0727f4ae8edfc4b73a8e9fa995b444812291033a9058f4fa77ad20e775a99d550b3d0e26c2264b28c3e738cd5938550074aee5b1e6377642c39a19a8021714d73401ffd1f2b1c9a05324993a5356803a2f0e6b179652bd9c291c90dc02184848283bb291eddba1a83c3d6af36a90c80a981a0909f5cf007e84d615d2e5bb3a70ce5cd65b1dc68dbad34d8ad16725628c2027f88018ae321d564b1d40e9d79290a0e2373d1d7d0fbd71b8c9ea7629d9d8ed9b55b9b331dacb6724c272cab242576463fda24839f6ac5b44326a710f33640a37030ce48c7d09c7e94d5ada9ab96972cebf3436de1a7119dad7738550063201c9247d07eb5cdf893564bfbc48e16dd6f6e0a21fef1272cdfcbf2ae9a34edab38311594b48994c78a84c9c5749c80c7ad44ef400d7351335007fffd2f237bc853a36e3e8b59bb462988b32df492a32a8d8a7f3355003cfa5033aed275136fa75ade162a21055dbd8706b9db76b89ed9ec61745476dedbb3ce31c7e94349ab304da774777a95b5b788b488eee1501d80c86edf5a9bc14f666296c98849fbc7d8fd2b86a45c1fba77539a9af78c3d4a783c39a01836aff0068dcc65015624aa9ea7fc3deac78cbc232f9d3ea714a6488fccc09e578c607b53a6e2dea2aaa49596c7216faa3a5ba6f4deabf2920f23fc6a994312c71e304e79aec388d88efe09f01241bbfbadc1ac064c1e28158e909ac9b1926599519894652704e718a02c6935318d311ffd3f0a13fbd403ad00591265b8a8a3fbf4c0bf65298ef626040e71cd4317faf8ffdf1fce8407553dbf9ee934523dbdd4672922f045587ff005c7fdd15564dd992db4ae8e8752d54dee83651b91e74c01980ed8ebff8f564c9fea2dffdc3ff00a1b5734211f68ce99ce5ec91c66a9731cfa988e251b23382c3f88f73544ffc841bfdfadd98128501f18ef4f3febbf1a40588d7176dfec263f3a72ffc7d4df8500c793435049fffd9, '2019-10-07 00:00:00', 0, NULL),
(3, 'Animesh', 'cf0d92a7be8cb153c57b66ca07d21e0f', 0xffd8ffe000104a46494600010100004800480000ffe1008c4578696600004d4d002a000000080005011200030000000100010000011a0005000000010000004a011b0005000000010000005201280003000000010002000087690004000000010000005a00000000000000480000000100000048000000010003a00100030000000100010000a00200040000000100000048a0030004000000010000004800000000ffed003850686f746f73686f7020332e30003842494d04040000000000003842494d0425000000000010d41d8cd98f00b204e9800998ecf8427effc00011080048004803011200021101031101ffc4001f0000010501010101010100000000000000000102030405060708090a0bffc400b5100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9faffc4001f0100030101010101010101010000000000000102030405060708090a0bffc400b51100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffdb004300080606070605080707070909080a0c140d0c0b0b0c1912130f141d1a1f1e1d1a1c1c20242e2720222c231c1c2837292c30313434341f27393d38323c2e333432ffdb0043010909090c0b0c180d0d1832211c213232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232ffdd00040009ffda000c03010002110311003f00f1f095305a091152a645a600b1f34b3cc2da12f8dcdd9477a0761e2218ac8c6a37f32a2248fbba2266a5c92dca506cd369605620c8bc75e6b3e749b4d6682eedda3941c14c018fad2e6bec53a76dcd848d5d7729047ad66db5e2c0e191c3293ca9fd68e625c4d2310c74a9d4ac91aba9e08c8ab2194da2e2acb2d0067bc7ed56245a00ffd0f29038a70a649220a541401435495a1f2995739c8aedb49d074ed4f4646bb4792e2779161555fb9b33962dfc3d3e87a739aca751276674d2a12947991a9f0d74db6fec9fb7cb086b99988cb73800f415aba7595e5a7822cc698ebe7476e859c1c1e99247079ae3a8f9a476538f2c4b5e25f0a69bac059258577818dca31c573ba0ea1e21d42fe4f36e9e6b544dd2f9bcac6dce554ed1923bfd6935cab46526a5ba39fd77c06b6961717966cc0c31972839dc0727f4ae8edfc4b73a8e9fa995b444812291033a9058f4fa77ad20e775a99d550b3d0e26c2264b28c3e738cd5938550074aee5b1e6377642c39a19a8021714d73401ffd1f2b1c9a05324993a5356803a2f0e6b179652bd9c291c90dc02184848283bb291eddba1a83c3d6af36a90c80a981a0909f5cf007e84d615d2e5bb3a70ce5cd65b1dc68dbad34d8ad16725628c2027f88018ae321d564b1d40e9d79290a0e2373d1d7d0fbd71b8c9ea7629d9d8ed9b55b9b331dacb6724c272cab242576463fda24839f6ac5b44326a710f33640a37030ce48c7d09c7e94d5ada9ab96972cebf3436de1a7119dad7738550063201c9247d07eb5cdf893564bfbc48e16dd6f6e0a21fef1272cdfcbf2ae9a34edab38311594b48994c78a84c9c5749c80c7ad44ef400d7351335007fffd2f237bc853a36e3e8b59bb462988b32df492a32a8d8a7f3355003cfa5033aed275136fa75ade162a21055dbd8706b9db76b89ed9ec61745476dedbb3ce31c7e94349ab304da774777a95b5b788b488eee1501d80c86edf5a9bc14f666296c98849fbc7d8fd2b86a45c1fba77539a9af78c3d4a783c39a01836aff0068dcc65015624aa9ea7fc3deac78cbc232f9d3ea714a6488fccc09e578c607b53a6e2dea2aaa49596c7216faa3a5ba6f4deabf2920f23fc6a994312c71e304e79aec388d88efe09f01241bbfbadc1ac064c1e28158e909ac9b1926599519894652704e718a02c6935318d311ffd3f0a13fbd403ad00591265b8a8a3fbf4c0bf65298ef626040e71cd4317faf8ffdf1fce8407553dbf9ee934523dbdd4672922f045587ff005c7fdd15564dd992db4ae8e8752d54dee83651b91e74c01980ed8ebff8f564c9fea2dffdc3ff00a1b5734211f68ce99ce5ec91c66a9731cfa988e251b23382c3f88f73544ffc841bfdfadd98128501f18ef4f3febbf1a40588d7176dfec263f3a72ffc7d4df8500c793435049fffd9, '2019-10-08 16:06:50', 0, NULL),
(4, 'aarviwriting', 'cf0d92a7be8cb153c57b66ca07d21e0f', 0xffd8ffe000104a46494600010100004800480000ffe1008c4578696600004d4d002a000000080005011200030000000100010000011a0005000000010000004a011b0005000000010000005201280003000000010002000087690004000000010000005a00000000000000480000000100000048000000010003a00100030000000100010000a00200040000000100000048a0030004000000010000004800000000ffed003850686f746f73686f7020332e30003842494d04040000000000003842494d0425000000000010d41d8cd98f00b204e9800998ecf8427effc00011080048004803011200021101031101ffc4001f0000010501010101010100000000000000000102030405060708090a0bffc400b5100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9faffc4001f0100030101010101010101010000000000000102030405060708090a0bffc400b51100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffdb004300080606070605080707070909080a0c140d0c0b0b0c1912130f141d1a1f1e1d1a1c1c20242e2720222c231c1c2837292c30313434341f27393d38323c2e333432ffdb0043010909090c0b0c180d0d1832211c213232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232ffdd00040009ffda000c03010002110311003f00f1f095305a091152a645a600b1f34b3cc2da12f8dcdd9477a0761e2218ac8c6a37f32a2248fbba2266a5c92dca506cd369605620c8bc75e6b3e749b4d6682eedda3941c14c018fad2e6bec53a76dcd848d5d7729047ad66db5e2c0e191c3293ca9fd68e625c4d2310c74a9d4ac91aba9e08c8ab2194da2e2acb2d0067bc7ed56245a00ffd0f29038a70a649220a541401435495a1f2995739c8aedb49d074ed4f4646bb4792e2779161555fb9b33962dfc3d3e87a739aca751276674d2a12947991a9f0d74db6fec9fb7cb086b99988cb73800f415aba7595e5a7822cc698ebe7476e859c1c1e99247079ae3a8f9a476538f2c4b5e25f0a69bac059258577818dca31c573ba0ea1e21d42fe4f36e9e6b544dd2f9bcac6dce554ed1923bfd6935cab46526a5ba39fd77c06b6961717966cc0c31972839dc0727f4ae8edfc4b73a8e9fa995b444812291033a9058f4fa77ad20e775a99d550b3d0e26c2264b28c3e738cd5938550074aee5b1e6377642c39a19a8021714d73401ffd1f2b1c9a05324993a5356803a2f0e6b179652bd9c291c90dc02184848283bb291eddba1a83c3d6af36a90c80a981a0909f5cf007e84d615d2e5bb3a70ce5cd65b1dc68dbad34d8ad16725628c2027f88018ae321d564b1d40e9d79290a0e2373d1d7d0fbd71b8c9ea7629d9d8ed9b55b9b331dacb6724c272cab242576463fda24839f6ac5b44326a710f33640a37030ce48c7d09c7e94d5ada9ab96972cebf3436de1a7119dad7738550063201c9247d07eb5cdf893564bfbc48e16dd6f6e0a21fef1272cdfcbf2ae9a34edab38311594b48994c78a84c9c5749c80c7ad44ef400d7351335007fffd2f237bc853a36e3e8b59bb462988b32df492a32a8d8a7f3355003cfa5033aed275136fa75ade162a21055dbd8706b9db76b89ed9ec61745476dedbb3ce31c7e94349ab304da774777a95b5b788b488eee1501d80c86edf5a9bc14f666296c98849fbc7d8fd2b86a45c1fba77539a9af78c3d4a783c39a01836aff0068dcc65015624aa9ea7fc3deac78cbc232f9d3ea714a6488fccc09e578c607b53a6e2dea2aaa49596c7216faa3a5ba6f4deabf2920f23fc6a994312c71e304e79aec388d88efe09f01241bbfbadc1ac064c1e28158e909ac9b1926599519894652704e718a02c6935318d311ffd3f0a13fbd403ad00591265b8a8a3fbf4c0bf65298ef626040e71cd4317faf8ffdf1fce8407553dbf9ee934523dbdd4672922f045587ff005c7fdd15564dd992db4ae8e8752d54dee83651b91e74c01980ed8ebff8f564c9fea2dffdc3ff00a1b5734211f68ce99ce5ec91c66a9731cfa988e251b23382c3f88f73544ffc841bfdfadd98128501f18ef4f3febbf1a40588d7176dfec263f3a72ffc7d4df8500c793435049fffd9, '2019-10-08 16:07:44', 0, NULL),
(5, 'VatsaDoshi', 'cf0d92a7be8cb153c57b66ca07d21e0f', 0xffd8ffe000104a46494600010100004800480000ffe1008c4578696600004d4d002a000000080005011200030000000100010000011a0005000000010000004a011b0005000000010000005201280003000000010002000087690004000000010000005a00000000000000480000000100000048000000010003a00100030000000100010000a00200040000000100000048a0030004000000010000004800000000ffed003850686f746f73686f7020332e30003842494d04040000000000003842494d0425000000000010d41d8cd98f00b204e9800998ecf8427effc00011080048004803011200021101031101ffc4001f0000010501010101010100000000000000000102030405060708090a0bffc400b5100002010303020403050504040000017d01020300041105122131410613516107227114328191a1082342b1c11552d1f02433627282090a161718191a25262728292a3435363738393a434445464748494a535455565758595a636465666768696a737475767778797a838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae1e2e3e4e5e6e7e8e9eaf1f2f3f4f5f6f7f8f9faffc4001f0100030101010101010101010000000000000102030405060708090a0bffc400b51100020102040403040705040400010277000102031104052131061241510761711322328108144291a1b1c109233352f0156272d10a162434e125f11718191a262728292a35363738393a434445464748494a535455565758595a636465666768696a737475767778797a82838485868788898a92939495969798999aa2a3a4a5a6a7a8a9aab2b3b4b5b6b7b8b9bac2c3c4c5c6c7c8c9cad2d3d4d5d6d7d8d9dae2e3e4e5e6e7e8e9eaf2f3f4f5f6f7f8f9faffdb004300080606070605080707070909080a0c140d0c0b0b0c1912130f141d1a1f1e1d1a1c1c20242e2720222c231c1c2837292c30313434341f27393d38323c2e333432ffdb0043010909090c0b0c180d0d1832211c213232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232323232ffdd00040009ffda000c03010002110311003f00f1f095305a091152a645a600b1f34b3cc2da12f8dcdd9477a0761e2218ac8c6a37f32a2248fbba2266a5c92dca506cd369605620c8bc75e6b3e749b4d6682eedda3941c14c018fad2e6bec53a76dcd848d5d7729047ad66db5e2c0e191c3293ca9fd68e625c4d2310c74a9d4ac91aba9e08c8ab2194da2e2acb2d0067bc7ed56245a00ffd0f29038a70a649220a541401435495a1f2995739c8aedb49d074ed4f4646bb4792e2779161555fb9b33962dfc3d3e87a739aca751276674d2a12947991a9f0d74db6fec9fb7cb086b99988cb73800f415aba7595e5a7822cc698ebe7476e859c1c1e99247079ae3a8f9a476538f2c4b5e25f0a69bac059258577818dca31c573ba0ea1e21d42fe4f36e9e6b544dd2f9bcac6dce554ed1923bfd6935cab46526a5ba39fd77c06b6961717966cc0c31972839dc0727f4ae8edfc4b73a8e9fa995b444812291033a9058f4fa77ad20e775a99d550b3d0e26c2264b28c3e738cd5938550074aee5b1e6377642c39a19a8021714d73401ffd1f2b1c9a05324993a5356803a2f0e6b179652bd9c291c90dc02184848283bb291eddba1a83c3d6af36a90c80a981a0909f5cf007e84d615d2e5bb3a70ce5cd65b1dc68dbad34d8ad16725628c2027f88018ae321d564b1d40e9d79290a0e2373d1d7d0fbd71b8c9ea7629d9d8ed9b55b9b331dacb6724c272cab242576463fda24839f6ac5b44326a710f33640a37030ce48c7d09c7e94d5ada9ab96972cebf3436de1a7119dad7738550063201c9247d07eb5cdf893564bfbc48e16dd6f6e0a21fef1272cdfcbf2ae9a34edab38311594b48994c78a84c9c5749c80c7ad44ef400d7351335007fffd2f237bc853a36e3e8b59bb462988b32df492a32a8d8a7f3355003cfa5033aed275136fa75ade162a21055dbd8706b9db76b89ed9ec61745476dedbb3ce31c7e94349ab304da774777a95b5b788b488eee1501d80c86edf5a9bc14f666296c98849fbc7d8fd2b86a45c1fba77539a9af78c3d4a783c39a01836aff0068dcc65015624aa9ea7fc3deac78cbc232f9d3ea714a6488fccc09e578c607b53a6e2dea2aaa49596c7216faa3a5ba6f4deabf2920f23fc6a994312c71e304e79aec388d88efe09f01241bbfbadc1ac064c1e28158e909ac9b1926599519894652704e718a02c6935318d311ffd3f0a13fbd403ad00591265b8a8a3fbf4c0bf65298ef626040e71cd4317faf8ffdf1fce8407553dbf9ee934523dbdd4672922f045587ff005c7fdd15564dd992db4ae8e8752d54dee83651b91e74c01980ed8ebff8f564c9fea2dffdc3ff00a1b5734211f68ce99ce5ec91c66a9731cfa988e251b23382c3f88f73544ffc841bfdfadd98128501f18ef4f3febbf1a40588d7176dfec263f3a72ffc7d4df8500c793435049fffd9, '2019-10-08 16:07:44', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `list_id` int(11) NOT NULL,
  `list_title` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`list_id`, `list_title`, `created_at`, `is_deleted`, `deleted_at`) VALUES
(1, 'To Do', '2019-10-08 16:12:06', 0, NULL),
(2, 'On Going', '2019-10-08 16:12:06', 0, NULL),
(3, 'Done', '2019-10-08 16:12:13', 0, NULL),
(4, 'Plugins', '2019-10-08 16:12:37', 0, NULL),
(5, 'Courses', '2019-10-08 16:12:50', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `list_item`
--

CREATE TABLE `list_item` (
  `list_item_id` int(11) NOT NULL,
  `list_id` int(11) NOT NULL,
  `list_item_title` varchar(255) NOT NULL,
  `list_item_content` text NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `is_deleted` int(11) NOT NULL DEFAULT 0,
  `deleted_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list_item`
--

INSERT INTO `list_item` (`list_item_id`, `list_id`, `list_item_title`, `list_item_content`, `author_id`, `created_at`, `is_deleted`, `deleted_at`) VALUES
(1, 1, 'database', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde saepe voluptatum quibusdam debitis, soluta beatae vel!quibusdam debitis, soluta beatae vel!', 1, '2019-10-08 16:22:59', 0, NULL),
(2, 2, 'ASP', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde saepe voluptatum quibusdam debitis, soluta beatae vel!quibusdam debitis, soluta beatae vel!', 2, '2019-10-08 16:22:59', 0, NULL),
(3, 1, 'OS', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde saepe voluptatum quibusdam debitis, soluta beatae vel!quibusdam debitis, soluta beatae vel!', 3, '2019-10-08 16:22:59', 0, NULL),
(4, 1, 'networking', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde saepe voluptatum quibusdam debitis, soluta beatae vel!quibusdam debitis, soluta beatae vel!', 3, '2019-10-08 16:22:59', 0, NULL),
(5, 2, 'C#', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde saepe voluptatum quibusdam debitis, soluta beatae vel!quibusdam debitis, soluta beatae vel!', 4, '2019-10-08 16:22:59', 0, NULL),
(6, 3, 'JAVA', 'OOP CONCEPT', 2, '2019-10-08 16:22:59', 0, NULL),
(7, 3, 'JAVA', 'Multithreading', 4, '2019-10-08 16:22:59', 0, NULL),
(8, 4, 'OCR', 'OCR SPACE', 4, '2019-10-08 16:22:59', 0, NULL),
(9, 4, 'MAPS', 'GOOGLE MAPS', 5, '2019-10-08 16:22:59', 0, NULL),
(10, 5, 'PHP', 'Youtube', 5, '2019-10-08 16:22:59', 0, NULL),
(11, 1, 'JAVA', 'Cross platform', 1, '2019-10-08 17:48:46', 0, NULL),
(12, 1, 'JAVA', 'Cross platform', 1, '2019-10-08 17:51:17', 0, NULL),
(13, 1, 'JAVA', 'Cross platform', 1, '2019-10-08 17:52:20', 0, NULL),
(14, 1, 'JAVA', 'Cross platform', 1, '2019-10-08 17:52:49', 0, NULL),
(15, 5, 'TAX', 'GST is imp', 1, '2019-10-08 18:33:14', 0, NULL),
(16, 4, 'SPCC', 'complier, interpreter', 1, '2019-10-08 18:34:39', 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `review_id` int(11) NOT NULL,
  `list_item_id` int(11) NOT NULL,
  `author_id` int(11) NOT NULL,
  `isAccepted` int(11) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `author`
--
ALTER TABLE `author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`list_id`);

--
-- Indexes for table `list_item`
--
ALTER TABLE `list_item`
  ADD PRIMARY KEY (`list_item_id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`review_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `author`
--
ALTER TABLE `author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `list_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `list_item`
--
ALTER TABLE `list_item`
  MODIFY `list_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `review_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;