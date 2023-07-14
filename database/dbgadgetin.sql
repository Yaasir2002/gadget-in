-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Jul 2023 pada 08.40
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbgadgetin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `address` text NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `customers`
--

INSERT INTO `customers` (`id`, `nama`, `address`, `no_hp`) VALUES
(1, 'Rio', 'Jakarta Timur', '085729107290'),
(2, 'Bambang', 'Jakarta Selatan', '085625372982'),
(3, 'Zaki', 'Depok', '0813725378202'),
(4, 'Iqbal', 'Jakarta Utara', '082572927157'),
(5, 'Rika', 'Bogor', '089172638892');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
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
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(3, '2014_10_12_000000_create_users_table', 2),
(4, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(5, '2019_08_19_000000_create_failed_jobs_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `kode` char(45) NOT NULL,
  `tgl` date NOT NULL,
  `jumlah` int(11) NOT NULL,
  `keterangan` text DEFAULT NULL,
  `customers_id` int(11) NOT NULL,
  `products_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `orders`
--

INSERT INTO `orders` (`id`, `kode`, `tgl`, `jumlah`, `keterangan`, `customers_id`, `products_id`) VALUES
(1, 'PS01', '2023-02-08', 5, NULL, 3, 3),
(2, 'PS02', '2023-02-23', 2, NULL, 2, 5),
(3, 'PS03', '2023-04-12', 3, NULL, 1, 20),
(4, 'PS04', '2023-05-10', 0, NULL, 5, 8),
(5, 'PS05', '2023-06-14', 4, NULL, 4, 18);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `kode` char(5) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `stok` int(11) NOT NULL,
  `harga` double NOT NULL,
  `deskripsi` text DEFAULT NULL,
  `foto` varchar(45) DEFAULT NULL,
  `types_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `products`
--

INSERT INTO `products` (`id`, `kode`, `nama`, `stok`, `harga`, `deskripsi`, `foto`, `types_id`) VALUES
(1, 'HP01', 'Samsung Galaxy A23 5G', 20, 3999000, 'Display :\r\n-Size: 6,5 inch\r\n-Technology: PLS LCD, 120Hz\r\n-Resoluiton: Invinity-V Display\r\n-Dimension: 164,5 X 76,5 X 8,8 mm\r\n-Weight: 197g', 'Galaxy-A23-5G_Silver-1.png', 1),
(2, 'HP02', 'Apple Iphone 14 Pro ', 25, 17999000, 'Display :\r\n-Layar super Retina XDR 6.1 inch\r\n-Kamera utama 4,8 MP\r\n-Mode aksi untuk video handheld yangu stabil', 'ip14.png', 1),
(3, 'HP03', 'Samsung Galaxy Z Flip4 5G ', 18, 12899000, 'Display :\r\n-Main: 6,7\" Infinity Flex FHD+ Dynamic AMOLED 2x, 120Hz Adaptive Refresh Rate\r\n-Cover:1.9\" Super AMOLED 60Hz Refresh Rate', 'samsungz.jpg', 1),
(4, 'LP01', 'HP 14s-dq2614TU i3', 45, 6119000, '-Processor: Intelcore i3-1115G4\r\n-Processor Family: 11th Generation Intelcore i3 processor\r\n-Memory 4 GB\r\n- Display: 35,6 cm 14\" diagonal FHD(1920 x 1080), IPS, micro-edge,Brigthview, 250 nits. 45% NTSC', 'hp.png', 2),
(5, 'LP02', 'Asus VivoBook E410MA & L510MA', 10, 5505000, 'SPESIFIKASI :\r\n-Display : 14inch dan 15.6 inch\r\n-Processor : Intel® Celeron® N4020 Processor 1.1 GHz (4M Cache, up to 2.8 GHz)\r\n-Memory : 4GB DDR4\r\n-Storage : 128GB (64+64)/192GB(64+128)/320GB(64+256).256(128+128)\r\n-Graphics : Intel® UHD Graphics\r\nOperating System : Windows 10 HOME\r\nCamera : INTEGRATED\r\nAudio : ASUS SonicMaster Technology\r\nNetworking : Wi-Fi 5(802.11ac)', 'asus.png', 2),
(6, 'LP03', 'Apple MackBook Pro (14 inci, MI,2021)', 18, 40400000, '-Chip Apple M1 Pro atau M1 Max untuk lompatan besar dalam performa CPU, GPU, dan pembelajaran mesin\r\n-CPU hingga 10-core menghadirkan performa hingga 3,7x lebih cepat untuk menuntaskan berbagai tahapan kerja pro lebih cepat(3)\r\n-GPU hingga 32-core dengan performa hingga 13x lebih cepat untuk aplikasi -Neural Engine 16-core untuk performa pembelajaran mesin hingga 11x lebih cepat(3) \r\n-Kekuatan baterai lebih tahan lama, hingga 17 jam(1)\r\n-Memori terintegrasi hingga 64 GB menjadikan segala yang Anda lakukan terasa cepat dan lancar\r\n-Penyimpanan SSD super cepat hingga 8 TB membuka aplikasi dan file dalam sekejap\r\n-Layar Liquid Retina XDR 14 inci yang menakjubkan dengan Extreme Dynamic Range dan rasio kontras(2)\r\n-Kamera FaceTime HD 1080p dengan prosesor sinyal gambar canggih untuk panggilan video yang lebih tajam\r\n-Sistem suara enam speaker dengan woofer force-cancelling', 'apple.png', 2),
(7, 'EP01', 'BOSE QUIETCOMFORT 35 II', 29, 3340000, '- Three Levels of Noise Cancellation\r\n- Bluetooth Wireless with NFC Pairing\r\n- Noise-Rejecting Dual Microphones', 'ear1.png', 3),
(8, 'EP02', 'JBL T110 Original Earpods Handsfree Earphone ', 24, 189000, 'Driver size (mm)9.0\r\nNumber of Microphones 1\r\nDriver sensitivity at 1kHz/1mW (dB)96.0\r\nDynamic frequency response range (Hz)20 Hz - 20 kHz\r\nImpedance (ohms)16.0', 'ear2.png', 3),
(9, 'EP03', 'Zenith Pure Balanced Armature Earphone KZ-AS0', 35, 402000, 'Specification:\r\n- Product Name: KZ AS06 3BA Balanced Armature HiFi Monitor Sport Earphone\r\n- Brand: KZ\r\n- Model: AS06\r\n- Type: In-ear\r\n- Impedance: 15O\r\n- Earphone sensitivity: 105dB/mW\r\n- Interface: 3.5mm', 'ear3.jpg', 3),
(16, 'CM01', 'Canon EOS 250D', 29, 8400000, 'Pada kamera Canon EOS 250D tertanam sensor canggih APS-C CMOS 24 megapiksel yang dipasangkan dengan prosesor gambar Digic 8. Kamera ini juga memiliki sensitivitas ISO yang cukup tinggi mulai dari angka 100 hingga 25.600, dengan burst speed 5 FPS.', 'download.jpeg', 4),
(17, 'CM02', 'FUJIFILM INSTAX MINI EVO', 20, 3999000, 'Camera Function\r\nImage sensor : 1/5-inch CMOS with primary color filter\r\nNumber of recorded pixels : 2560 x 1920\r\nStorage media :Internal memory, microSD/microSDHC memory card\r\nStorage capacity : Approximately 45 images in internal memory, app', 'download (1).jpeg', 4),
(18, 'CM03', 'Sony Alpha A7 II Kit 28-70mm f/3.5-5.6', 19, 15521000, '- Pixels : 24 MP - Ukuran Sensor : Full frame (35.8 x 23.9 mm) - Tipe Sensor : CMOS - Prosesor : Bionz X - ISO : 100-25600', 'sony.jpg', 4),
(19, 'TB01', 'SAMSUNG GALAXY TAB S8 WIFI', 25, 9999000, '-Detail Prosessor:Octa-Core\r\n-RAM:8 GB\r\n-OS:Android\r\n-Jaringan:WIFI\r\n-Display:11.0\" (278.1mm)\r\n-Resolusi:2560 x 1600 (WQXGA)\r\n-Memori Internal:128GB', 's8.jpeg', 5),
(20, 'TB02', 'Apple iPad Pro 11', 12, 20500000, '-Liquid Retina display\r\n-11-inch (diagonal) LED backlit Multi‑Touch display with IPS technology\r\n-2388-by-1668-pixel resolution at 264 pixels per inch (ppi)\r\n-ProMotion technology\r\n-Wide color display (P3)\r\n-True Tone display\r\n-Fingerprint-resistant oleophobic coating\r\n-Fully laminated display', 'pro12.jpg', 5),
(21, 'TB03', 'Huawei MatePad 11', 23, 7299000, '-Sistem Operasi HarmonyOS 2\r\n-Prosesor Qualcomm Snapdragon 865 Octa-core (1x2.84 GHz Kryo 585 & 3x2.42 GHz Kryo 585 & 4x1.8 GHz Kryo 585)\r\n-GPU Adreno 650\r\n-RAM 6 GB\r\n-ROM 128 GB\r\n-Ukuran Layar 10.95 inch', 'mad.jpeg', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `types`
--

CREATE TABLE `types` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `types`
--

INSERT INTO `types` (`id`, `nama`) VALUES
(1, 'Handphone'),
(2, 'Laptop'),
(3, 'Earphone'),
(4, 'Camera'),
(5, 'Tablet');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role` enum('user','admin') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(5, 'Raffuad Munawir', 'raffuadmunawir@gmail.com', NULL, '$2y$10$TeLW0yh3RKXq7T/R1q3lyufpGw8ROGs201XMUuehSIQjlHBw.HXdS', NULL, 'admin', '2023-07-11 00:22:53', '2023-07-11 00:22:53'),
(6, 'user', 'fuadmunawir123@gmail.com', NULL, '$2y$10$i4dWCwE0U9CJzZiqXZVrOOK3srBGaKiuvMLfBMadpM3BqzQS4I98a', NULL, 'user', '2023-07-12 01:13:55', '2023-07-12 01:13:55');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_orders_customers1_idx` (`customers_id`),
  ADD KEY `fk_orders_products1_idx` (`products_id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_UNIQUE` (`kode`),
  ADD KEY `fk_products_types_idx` (`types_id`);

--
-- Indeks untuk tabel `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `types`
--
ALTER TABLE `types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_orders_customers1` FOREIGN KEY (`customers_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_orders_products1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Ketidakleluasaan untuk tabel `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_types` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
