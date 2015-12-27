-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: 2015 年 12 月 27 日 15:44
-- サーバのバージョン： 5.5.42
-- PHP Version: 5.6.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `christmas_menu`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2015_12_23_172558_create_topics_table', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `topics`
--

CREATE TABLE `topics` (
  `id` int(10) unsigned NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `published` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `eyecatch_file_name` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `eyecatch_file_size` int(11) NOT NULL,
  `eyecatch_content_type` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `eyecatch_updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- テーブルのデータのダンプ `topics`
--

INSERT INTO `topics` (`id`, `title`, `body`, `published`, `created_at`, `updated_at`, `eyecatch_file_name`, `eyecatch_file_size`, `eyecatch_content_type`, `eyecatch_updated_at`) VALUES
(1, '身も心も温まれるクリームシチュー', 'クリスマスイブに人気の料理の一つのクリームシチュー。具材も定番のチキンから豪華絢爛な魚介類をふんだんに使ったものに加えて、お野菜の色どりも幅広く対応できるのがとっても嬉しいですよね。また野菜の切り方もクリスマス風に星型やハート型で可愛くデコレーションすれば、クリスマスの雰囲気がぐっとでます。しかもそのまま食べてもパンにつけても美味しく頂くことができるのでそこもポイントが高いですよね(^^)。これができれば二人の素敵なディナータイムに身も心も温まって幸せな気持ちになれること間違いなしです。', '2015-12-24', '2015-12-24 00:24:20', '2015-12-24 16:56:58', 'cream_stew.jpg', 285633, 'image/jpeg', '2015-12-24 16:56:58'),
(2, 'おかわりしたくなる手作りハンバーグカレー', 'ハンバーグもカレーライスもどっちも男の子なら大好物のはず。ハンバーグに使うのはもちろん牛肉100%でしっかりと仕込んでおいて、上にかけるカレーも玉ねぎがあめ色になるまで十分に炒めるのがポイントです。丁寧に仕込んだカレーとハンバーグが合わされてば手料理としてはもう間違いなし！彼氏が美味しいと言って、あなたの特製カレーをおかわりする見ているといつも以上に愛おしく感じる幸せな瞬間ですよね。一見単純な料理かもしれないけど、彼女や妻がクリスマスに作るだけでもプレミアム感はぐっとあがりますよ(^^)v', '2015-12-24', '2015-12-24 08:32:48', '2015-12-24 20:31:40', 'hamburg_curry.jpg', 227381, 'image/jpeg', '2015-12-24 20:31:40'),
(3, '愛情たっぷりふわふわオムライス', 'オムライスもクリスマスに作ってあげたい料理の一つですよね。具沢山のケチャップライスの上にはもちろん、半熟状態のふわとろのオムレツを乗せたふわふわのオムライスならきっと彼氏の胃袋とハートをがっちりとキャッチすることは間違いなしです。ケチャップのデコレーションやメッセージはちょっとベタな演出でちょっと恥ずかしいかもしれませんが、大好きな二人の大切な時間だったらそれもアリかもしれませんね。またケチャッップライスの具材も彼氏の大好きなものや、かわいく彩った野菜たちをあしらってあげれば更にグレードアップできますよ！', '2015-12-24', '2015-12-24 08:47:15', '2015-12-24 08:47:15', 'om_rice.jpg', 421843, 'image/jpeg', '2015-12-24 08:47:15'),
(4, '熱々で具沢山のグラタン', '寒い冬の季節にはぴったりの熱々のグラタン。具のレパートリーも「サーモンとほうれん草」や「エビやホタテ」等数多くの具材の組み合わせでクリスマスバージョンのオリジナルのグラタンを作ることも可能です。ホワイトソースを作るのは、ちょっと難しいし練習が必要かもしれませんが、一度マスターできれいれば美味しいグラタンが作れるようになります。男の子も女の子もグラタンを手料理として振舞うことができればお互いの距離はもっともっと縮めることができると思いますので是非ともチャレンジしてみるのも一つの手段だと思いますし、特に男の子はホワイトソースを作れるようにしていると、確実に好感度UPできますよ！（女の子はチーズとホワイトソース大好きですよ！）', '2015-12-24', '2015-12-24 09:06:26', '2015-12-24 09:06:26', 'gratan.jpg', 686875, 'image/jpeg', '2015-12-24 09:06:26'),
(5, 'おしゃれパスタ・アラカルト', 'パスタも普段の食卓ではとてもありふれたものかもしれませんが、クリスマスに振舞うパスタに関しては普段の具材よりもぐっと豪華にプレミアム感を出してしまいたいものですよね。普段はなかなか高くて手が出ない食材や、オーガニック食材等パスタに絡めるソースや具材にひと工夫をかけるとクリスマスにふさわしいパスタに仕上げることだって十分に可能です。トマトベースやスープベース、クリームベースのパスタでも工夫の余地が沢山あります。普段の食卓のレシピもそうですけど、あなただけの「クリスマス特製のオリジナルパスタ」を編み出してみてはいかがでしょうか(^^)きっとクリスマスだけでなく平素の料理も楽しくなること間違いなしです。', '2015-12-24', '2015-12-24 09:19:48', '2015-12-24 09:19:48', 'pasta.jpg', 520137, 'image/jpeg', '2015-12-24 09:19:48'),
(6, '熱々＆具沢山が嬉しい手作りピッツア', '出前で取るピッツアももちろん美味しいと思いますが、オーブンとピザ生地さえあれば自家製のピッツアを手料理として振舞うことが十分に可能です。二人の好きな具材を沢山トッピングしてクリスマスの食卓を思う存分に彩ってみてはいかがでしょうか？また、ピザ生地を作るところから二人で共同作業を行えば、お料理でお腹や心を満たすだけでなく、二人の絆や距離感もぐっと近くなることでしょう(^_^)どちらか一方の手料理ではまだまだ満足できない！なんて欲配りな方は共同作業ありきのお料理をチョイスしてみるのもまた良い選択肢かもしれませんね。', '2015-12-24', '2015-12-24 09:58:51', '2015-12-24 09:58:51', 'pizza.jpg', 682425, 'image/jpeg', '2015-12-24 09:58:51'),
(7, '手間暇かけて作るローストビーフ', 'クリスマスといえばやっぱり大皿にドンと盛り付けができる肉料理はやっぱり大きなインパクトがあるものです。特にローストビーフはクリスマスをはじめとしてパーティーにあるだけでその場が盛り上がる便利な料理の一つです。下調理の時間や焼き時間を考えると結構手間暇はかかってしまうものですが、その分と時間には十分に割りに合う料理なのは間違いなし！丁寧に作られたローストビーフとクリスマスという記念の日にふさわしいワインで乾杯なんてシチュエーション、なんともロマンティックで素敵ではありませんか(^^)実際にローストビーフは普段の生活の中ではなかなか食べられないものなので、テンションも相当上がること間違いなしです。', '2015-12-24', '2015-12-24 10:09:38', '2015-12-24 10:09:38', 'roast_beaf.jpg', 566820, 'image/jpeg', '2015-12-24 10:09:38'),
(8, 'クリスマスに食べたいステーキ', 'ご馳走の代表格といえばやっぱりステーキ！せっかくの記念日だからお肉のクオリティはもちろん焼き加減にもしっかりとこだわりを持って、料理したいものですね。見た目だけでもシズる感が満載なので、彼氏の胃袋も心もガッチリとキャッチできる絶好のチャンス！ステーキを美味しく焼く手順はもちろんのこと、冷めないようにお皿はしっかりと温めておくことも忘れずに！ジューシィに焼き上げたステーキとワインの組み合わせは味もシチュエーションも最高に演出してくれること間違い無しです。', '2015-12-24', '2015-12-27 08:40:46', '2015-12-27 14:19:36', 'steak.jpg', 734514, 'image/jpeg', '2015-12-27 08:40:46');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
