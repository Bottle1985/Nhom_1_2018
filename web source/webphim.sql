-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2015 at 05:17 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webphim`
--
CREATE DATABASE IF NOT EXISTS `webphim` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `webphim`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `hovaten` text NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` text CHARACTER SET utf8mb4 NOT NULL,
  `diachi` text NOT NULL,
  `email` text NOT NULL,
  `sodienthoai` int(11) NOT NULL,
  `gioithieubanthan` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `hovaten`, `ngaysinh`, `gioitinh`, `diachi`, `email`, `sodienthoai`, `gioithieubanthan`) VALUES
(1, 'admin', 'admin', 'Nguyễn Đức Toàn', '2000-04-24', 'Nam', 'Khánh Hòa', 'kiemchop135@gmail.com', 0927972635, 'Admin wapsite http://wapvietnam.mobi');

-- --------------------------------------------------------

--
-- Table structure for table `phim`
--

CREATE TABLE IF NOT EXISTS `phim` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tenphim` text NOT NULL,
  `anhminhhoa` text NOT NULL,
  `dienvien` text NOT NULL,
  `thongtinphim` text NOT NULL,
  `theloai` text NOT NULL,
  `daodien` text NOT NULL,
  `thoiluongphim` text NOT NULL,
  `namsanxuat` date NOT NULL,
  `noisanxuat` text NOT NULL,
  `tags` text NOT NULL,
  `linkphim` text NOT NULL,
  `soluotxem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `phim`
--

INSERT INTO `phim` (`id`, `tenphim`, `anhminhhoa`, `dienvien`, `thongtinphim`, `theloai`, `daodien`, `thoiluongphim`, `namsanxuat`, `noisanxuat`, `tags`, `linkphim`, `soluotxem`) VALUES
(1, 'Chàng Trai Năm Ấy', 'upload/images/chang-trai-nam-ay.jpg', 'Sơn Tùng M-TP, Minh Hằng, Ngô Kiến Huy', 'Phim Chàng Trai Năm Ấy là câu chuyện kể về Ngô Kiến Hà – nam diễn viên có tính tình rất nhí nhố, một “phi công trẻ” với ý định lái “máy bay bà già”. Phạm Quỳnh Băng – nữ phát thanh viên chuyên tư vấn tình yêu nhưng lại chưa bao giờ yêu. Sky – cô gái đến từ Hàn Quốc, người luôn có những câu tiếng Việt “khó đỡ” trong những tình huống nhạy cảm. Lâm – anh chàng quản lý lạnh lùng, khó hiểu và nổi tiếng tham tiền.\r\n<img src="/doan/images/chang-trai-nam-ay-1.jpg" width="100%" class="images" />\r\nVà dĩ nhiên tình bạn của bộ tứ “hoàn cảnh” ấy sẽ thiếu chất kết dính nếu không có Đình Phong - một ca sĩ trẻ đầy triển vọng đang trên đà nổi tiếng với đông đảo người hâm mộ. Với đời sống của một ngôi sao đầy hào nhoáng nhưng cũng không thiếu những câu chuyện bi hài, Đình Phong luôn luôn có bộ tứ đi cùng anh trên khắp các chặng đường. Mỗi thành viên đều mang những cá tính cũng như số phận khác nhau. Kẻ biết quan tâm, người lạnh lùng và có cả kẻ chỉ chực chờ cơ hội để gom về thật nhiều lợi nhuận.\r\n\r\nNhưng đó có phải là tất cả về họ hay chỉ là một bộ mặt khác của những người nổi tiếng? Làm cách nào để nhóm bạn cùng tồn tại và phát triển trong thế giới đầy hào nhoáng của môi trường giải trí? Họ sẽ là những người bạn thân? Chắc chắn! Nhưng câu chuyện của họ không chỉ dừng ở đó.\r\n<img src="/doan/images/chang-trai-nam-ay-2.jpg" width="100%" class="images" />', '3', 'Nguyễn Quang Huy', '90 Phút', '2015-05-10', 'Thành Phố Hồ Chí Minh', 'Chàng Trai Năm Ấy, Phim Tràng Chai Năm Ấy, Phim Chiếu Rạp', '/doan/files-phim/chang-trai-nam-ay.mp4', 240),
(2, 'Kiếm Rồng', 'upload/images/kiem-rong.jpg', 'Thành Long, Adrien Brody, John Cusack', 'Phim Kiếm Rồng lấy bối cảnh diễn ra dưới thời Tây Hán, phim xoay quanh câu chuyện của đại tướng quân Hoắc An (Thành Long) với sứ mệnh bảo vệ sự bình yên cho các nước chư hầu ở Tây Vực. Với tài năng, sự kiên trung và tình yêu hòa bình, Hoắc An đã liên kết với các huynh đệ từng vào sinh ra tử với mình lập nên liên minh “Quyết tử cho hòa bình”. \r\n\r\nThế nhưng, ông lại bị gian thần hãm hại, bị đày tới biên cương và chịu cảnh nô dịch hà khắc. May mắn thay, Hoắc An đã được đại tướng quân Tiberius (John Cusack) trên đường hộ tống hoàng tử tới phương Đông giải thoát. Từ đây, hai vị tướng quân anh hùng gắn kết thành tâm giao tri kỷ cùng chung lý tưởng bảo vệ chính nghĩa, xây dựng hòa bình. Hai người sát cánh bên nhau trải qua hàng loạt những trận đấu ly kỳ và những sự kiện đầy chấn động.\r\n<img src="/doan/images/kiem-rong.jpg" width="100%" class="images" />\r\n', '2', 'Daniel Lee', '126 Phút', '2014-09-17', 'Trung Quốc', 'dragon bladetian jiang xiong shikiếm rồngthiên tướng hùng sư, kiếm rồng', 'https://r13---sn-ab5l6nek.googlevideo.com/videoplayback?requiressl=yes&shardbypass=yes&cmbypass=yes&id=a3bcb2a87ab069f4&itag=18&source=picasa&ip=113.160.133.144&ipbits=0&expire=1434543132&sparams=cmbypass,expire,id,ip,ipbits,itag,mm,mn,ms,mv,pl,requiressl,shardbypass,source&signature=156681A7CD8EEAD351E5408287F1FA73BF0E3FB3.03DE0FFC391D79197710BA941E397F2BBCA33218&key=cms1&redirect_counter=1&req_id=32550290101ba3ee&cms_redirect=yes&mm=30&mn=sn-ab5l6nek&ms=nxu&mt=1432279662&mv=m&pl=24', 8),
(3, 'Cô Nàng Lọ Lem', 'upload/images/lo-lem.jpg', 'Helena Bonham, Carter Helena, Bonham Carter,  Stellan Skarsgard, Stellan Skarsgard,  Cate Blanchett, Cate Blanchett,  Derek Jacobi, Derek Jacobi,  Nonso Anozie, Nonso Anozie,  Hayley Atwell, Hayley Atwell', 'Lọ Lem là một bộ phim điện ảnh bom tấn cổ tích mới nhất được hãng Walt Disney vừa công bố, tác phẩm do đạo diễn Kenneth Branagh phụ trách cùng dàn diễn viên như là Hayley Atwell, Helena Bonham Carter, Cate Blanchett, Richard Madden, Stellan Skarsgard, Lily James, Holliday Grainger, Nonso Anozie, Laurie Calvert, Derek Jacobi, Sophie McShera, Ben Chaplin....Nội dung bộ phim Lọ Lem xoay quanh một cô gái tên là Lọ Lem xinh đẹp sống cùng với người dì ghẻ và 2 cô em họ độc ác, sau khi bố mất mụ dì ghẻ đó bắt đầu hành hạ Lọ Lem, từ việc nhà cho đến những công việc nặng nhọc. Bỗng một ngày nhà vua cho tổ chức đại tiệc mừng hoàng tử trở về sau chuyến thực tại thế giới bên ngoài, mọi người ai nấy cũng đều sửa soạn để đi tham dự, nhưng riêng về phần Lọ Lem, cô rất muốn đi nhưng bị mụ dì ghẻ ngăn chặn bắt phải làm việc. Đau buồn cô chỉ biết ngồi khóc thương cho số phận của mình. Và rồi sự xuất hiện của bà tiên đã mang lai cơ hội cho Lọ Lem và được hoàng tử chú ý đến thông qua đôi giày cô đánh rơi tại buổi tiệc. Bộ phim sẽ được chiếu vào tháng 3 năm 2015 này. Hy vọng các bạn sẽ thích, và chúc các bạn xem phim Cinderella vui vẻ trên webside chúng tôi!.\n<img src="/doan/images/lo-lem-1.jpg" width="100%" class="images" />\n<img src="/doan/images/lo-lem-2.jpg" width="100%" class="images" class="images" />\n<img src="/doan/images/lo-lem-3.jpg" width="100%" class="images" />', '3', 'Kenneth Branagh', '125 Phút', '2015-05-01', 'Mỹ', 'Lọ Lem, Lọ Lem Full Hd, Lọ Lem Vietsub, Lọ Lem Mỹ Cinderella, Phim Chiếu Rạp Tháng 3', '/doan/files-phim/chang-trai-nam-ay.mp4', 21),
(4, 'Những Kẻ Nổi Loạn', 'upload/images/nhung-ke-noi-loan.jpg', '', '', '2', '', '185 Phút', '0000-00-00', '', '', '', 3),
(5, 'Nữ Gia Sư Xinh Đẹp', 'upload/images/nu-gia-su.jpg', '', '', '3', '', '75 Phút', '0000-00-00', '', '', '', 2),
(6, 'Siêu Nhân Và Elite', 'upload/images/sieu-nhan-va-elite.jpg', '', '', '4', '', '30 Phút', '0000-00-00', '', '', '', 3),
(8, 'Tình Yêu Trong Sáng', 'upload/images/tinh-yeu-trong-sang-falling-for-innocence-2015.jpg', 'Jung Kyung Ho, Kim So Yeon, Yoon Hyun ', 'Nội dung phim Tình Yêu Trong Sáng:\r\nChuyện phim xoay quanh anh chàng lạnh lùng bỗng chốc thay đổi tính cách sau khi trải qua ca phẫu thuật ghép tim. Những cảm xúc, tình cảm dành cho cô gái với cái tên Soon Jung chợt ùa đến trong anh.', '3', 'Ji Young Soo', '120 phút', '0000-00-00', 'Hàn Quốc', 'tình yêu trong sáng, falling for innocence, falling in love with soon jung', '', 1),
(9, 'Hãy Tin Em Lần Nữa', 'upload/images/hay-tin-em-them-lan-nua-got-to-believe-2014.jpg', 'Kathryn Bernardo, Daniel Padilla, Carmina ', 'Nội dung phim Hãy Tin Em Thêm Lần Nữa:\r\nLàm thế nào để nhận ra nhau khi không còn ký ức?\r\n“Điều đáng sợ nhất trong cuộc đời này không phải là cái chết. Đáng sợ hơn cái chết, đó là sự lãng quên.”\r\nXoay quanh câu chuyện của hai con người cố gắng tìm lại từng chút quá khứ, chiến đấu với chứng mất trí nhớ để cố nhận ra nhau, và cùng vượt qua hàng ngàn chướng ngại vật trên con đường tình nhiều chông gai để đến bên nhau lần nữa, “Hãy tin em lần nữa” là một bộ phim ngập tràn những thổn thức về tình yêu và sự lãng quên…\r\n\r\nPhim kể về Joaquin (biệt danh Wacky), anh chàng lớn lên cùng với một viên đạn lạc mắc kẹt trong não, bên cạnh người mẹ khắt nghiệt giàu sang và Cristina (biệt danh Chichay), cô gái giúp việc nhà vui vẻ, lạc quan, với tấm lòng nhân hậu. Wacky luôn cố gắng sống tự lập và vì thế, anh muốn lên thành phố học đại học. Không thể làm lay chuyển ý chí của con trai, bà Juliana, mẹ Wacky đành tìm cách để Chichay, cô giúp việc mà bà tin cậy, đi theo chăm sóc Wacky.\r\nMột bên là thiếu gia thư sinh, được bảo bọc như sương mai, một bên là thiếu nữ đang độ xuân xanh tràn đầy nhựa sống. Họ như hai thực thể đối lập, gặp và dần yêu nhau như định mệnh, yêu nhau như một cơn gió không thể cưỡng lại, lãng mạn và ngọt ngào, mê đắm và cuồng nhiệt. Ở bên nhau, họ cùng vẽ nên bao ước mộng tươi đẹp về tương lai và cùng nhau xây đắp nó. Cho đến một ngày, mọi thứ trở nên vỡ vụn khi bà Juliana phát hiện ra chuyện tình cảm bí mật giữa họ. Bà làm mọi thứ để chia tách hai đứa trẻ kể cả việc đẩy cha mẹ Chichay vào tình trạng nguy hiểm. Chichay quyết định lựa chọn về bên bố mẹ và xa rời tình yêu Wacky. Thất vọng và buồn bã, Wacky bị tai nạn khiến viên đạn di chuyển trong não, ảnh hưởng đến trí nhớ của anh. Anh quên tất cả mọi thứ, kể cả Chichay, người con gái anh yêu.\r\nChuyện tình đẹp như tranh vẽ, những tương lai cả hai đã cùng đắp xây và mơ mộng bỗng chốc bị bỏ lại phía sau cùng với những ký ức đã đột ngột mất đi của Wacky và sự trốn chạy đầy sợ hãi của Chichay dưới bàn tay quyền lực của bà mẹ giàu có. Liệu phép màu nào có thể giúp họ lại nhận ra nhau, yêu nhau và trở về bên nhau một lần nữa?\r\nVề mặt nội dung, “Hãy tin em lần nữa” có kịch bản không mới. Dễ thấy nhiều bộ phim Á – Âu quen thuộc khác cũng đã từng lấy đề tài này. Thế nên, sức hút của phim chủ yếu nằm ở những cảm xúc tình yêu giản dị, lắng đọng nhưng cũng vô cùng hấp dẫn và ngọt ngào mà các nhân vật mang lại.\r\nTình yêu của Wacky và Chichay đã bắt đầu từ sự rung động đẹp đẽ và hồn nhiên, vượt lên trên hết thảy mọi rào cản xã hội, mọi sự phân biệt giai cấp, giàu nghèo. Vì thế, nó sẽ không thể kết thúc dễ dàng bằng sự quên lãng. Trong cuộc đời mỗi người, sẽ đến một lúc nào đó, bạn có thể quên tất cả nhưng điều cuối cùng mà bạn luôn muốn giữ lại, chính là tình yêu khắc cốt ghi tâm. Viên đạn quái ác khiến chàng trai đánh mất hoàn toàn ký ức, trong đó có cả người anh yêu, nhưng trái tim anh sẽ thay anh tìm kiếm cô, nhận ra cô. Lấy lại quá khứ là chuyện chẳng hề dễ dàng với những người đã mất đi nó. Nhưng điều đó có hề gì, bởi tình yêu, bằng sức mạnh mãnh liệt và diệu kỳ của nó, có thể khiến chúng ta làm được những việc tưởng như không thể: nhận ra nhau bằng trái tim, chứ không nhất thiết phải cần ký ức.\r\n\r\nVà như vậy, “Hãy tin em thêm lần nữa” hứa hẹn sẽ là một bộ phim chạm đến trái tim người xem với nhiều cung bậc cảm xúc thay vì cốt truyện lắt léo, li kỳ hay những tình huống kịch tính.', '2', 'Cathy Garcia-Molina', '160 Phút', '0000-00-00', 'Thái Lan', ' got to believe, hãy tin em thêm lần nữa', '', 5),
(10, 'Xin Đừng Xa Anh', 'upload/images/xin-dung-xa-anh-dont-be-swayed-2008.jpg', 'Hong Eun hee, Kim Da in, Sunwoo Eun ', 'Nội dung phim Xin Đừng Xa Anh:\r\nPhim Xin Đừng Xa Anh | là bộ phim tâm lý tình cảm hàn quốc, phim xoay quanh cuộc chiến tình cảm giữa hai chị em kế Mi Jung và So Hyun. So Hyun là một người chị tài năng, có nhan sắc đẹp sắc nước hương trời nhưng cũng có nhiều tham vọng trong cuộc sống này.', '3', 'Lee Hong Goo', '100 Phút', '0000-00-00', 'Hàn Quốc', 'dont be swayed, xin đừng xa anh', '', 2),
(29, 'Chiến Binh Quyền Thái', 'upload/images/chien-binh-quyen-thai.jpg', 'Tony Jaa, Sorapong Chatree, Sarunyu Wongkrachang, Nirut Sirichanya', 'Cậu bé Tien từ nhỏ đã mong muốn sau này lớn lên sẽ tiếp bước cha mình, ngài Sihadecho, trở thành một chiến binh dũng cảm và trung thành với đất nước. Thật trớ trêu, ngay từ khi mới sinh, cậu đã được tiên đoán là người sẽ mang lại tai ương cho vùng đất quê hương cậu. Cha của Tien quyết định cho cậu bé đến ở tại một ngôi chùa để học thiền và Khon, một loại hình nghệ thuật nhảy múa cổ xưa. Bi kịch ập đến khi cả gia đình Tien bị tay sai của Lãnh chúa Rajasena sát hại. Tien may mắn chạy thoát và được thủ lĩnh của băng cướp Garuda Wing cứu sống. Bị thu hút bởi tinh thần chiến đấu và bản năng sát thủ của cậu bé, thủ lĩnh Chernang nhận Tien làm con nuôi và truyền thụ những tuyệt chiêu công phu của mình cho Tien. Lớn lên, Tien dần khẳng định được vị trí của mình trong băng nhóm Garuda Wing, nhưng điều mà Tien mong chờ nhất là trả thù Lãnh chúa Rajasena. Thù hận chất chứa trong bao năm, Tien lên đường thực hiện kế hoạch báo thù của mình và quyết không nương tay với bất kì ai.', '4', 'Tony Jaa, Panna Rittikrai', '120 phút', '2013-08-16', 'Thái Lan', 'tony jaa, vo thuat', '/doan/files-phim/chang-trai-nam-ay.mp4', 11),
(43, 'Quá Nhanh Quá Nguy Hiểm 7', 'upload/images/qua-nhanh-qua-nguy-hiem-7.jpg', 'Vin Diesel, Paul Walker, Dwayne Johnson, Michelle Rodriguez, Jordana Brewster, Tyrese Gibson, Chris Bridges, Lucas Black, Jason Statham', 'Fast & Furious 7 (còn được gọi là Furious 7 và Furious Seven) là một phim hành động năm 2015 của Mỹ. Đây là phần tiếp theo của bộ phim năm 2013 Fast & Furious 6 và cũng là bộ phim thứ bảy trong loạt phim Fast & Furious. Bộ phim được biên kịch bởi Chris Morgan và đạo diễn bởi James Wan, với sự góp mặt của các ngôi sao như Vin Diesel, Paul Walker, Dwayne Johnson, Michelle Rodriguez, Jordana Brewster, Tyrese Gibson, Ludacris, Lucas Black và Jason Statham. Với ba bộ phim trước đó được lấy bối cảnh ở giữa hai tập phim 2 Fast 2 Furious (2003) và The Fast and the Furious: Tokyo Drift (2006), Furious 7 là bộ phim đầu tiên trong loạt phim có các sự kiện diễn ra sau Tokyo Drift.\r\n<img class="images" src="/doan/images/qua-nhanh-qua-nguy-hiem-7.jpg" width="100%" />\r\nBộ phim đánh dấu sự xuất hiện cuối cùng của diễn viên Paul Walker, người đã chết vào ngày 30 tháng 11, 2013 trong khi mới chỉ hoàn thành một nửa quá trình quay phim. Sau cái chết của Walker, việc quay phim bị trì hoãn do phần kịch bản cần phải viết lại, và hai người anh trai của anh là Caleb và Cody Walker được sử dụng để đóng thế cho các cảnh quay còn lại. Fast & Furious 7 được công chiếu vào ngày 3 tháng 4, 2015. Bộ phim cũng được công chiếu quốc tế với định dạng 3D', '4', 'James Wan', '134 Phút', '2015-05-01', 'Mỹ - Châu Âu', 'băng cướp tốc độ, Fast, Fast & Furious, Furious, Jason Statham, Paul Walker, Quá nhanh quá nguy hiểm, Tốc độ và sự liều lĩnh, Vin Diesel', 'https://r1---sn-8qj-i2il.googlevideo.com/videoplayback?requiressl=yes&shardbypass=yes&cmbypass=yes&id=1b52d40c466c0dce&itag=18&source=picasa&ip=113.160.133.144&ipbits=0&expire=1434602972&sparams=cmbypass,expire,id,ip,ipbits,itag,mm,mn,ms,mv,pl,requiressl,shardbypass,source&signature=52CE1095B6C90ADFB4B8983B9BFF35DD1294071C.66A445C5FFE99D44B3942140BFCC5E8DD9C3D5AE&key=cms1&cms_redirect=yes&mm=31&mn=sn-8qj-i2il&ms=au&mt=1432177025&mv=m&pl=24', 24),
(42, 'Đại Gia Chân Đất 2015', 'upload/images/dai-gia-chan-dat-2015-dai-gia-chan-dat-2015.jpg', 'Bình Trọng, Quang Tèo, Chiến Thắng, Thu Huyền, Kim Xuyến', 'Nội dung phim Đại Gia Chân Đất 2015:<img src="/doan/images/dai-gia-chan-dat-2015.jpg"\n width="100%" class="images" />\nĐại Gia Chân Đất Phần 5 Vẫn như mọi năm, tạo hình chính của hai ông Tích và Sự là hai Đại gia nửa mùa, học làm sang. Ông Tích vẫn tìm mọi cách để đục khoét tiền của ông Sự. Hai nhân vật chính vẫn không thể chừa được tật hám gái. Thậm chí, bà vợ ông Sự còn phải chạy vạy để tìm "trại cai gái" cho chồng. Bộ phim sẽ hứa hẹn nhiều tình huống gây cười đặc sắc.', '4', 'Trần Bình Trọng', '120 Phút', '2014-12-24', 'Việt Nam', 'đại gia chân đất 2015, hài đại gia chân đất 2015', 'https://redirector.googlevideo.com/videoplayback?requiressl=yes&id=b092538919b9a31a&itag=22&source=picasa&cmo=secure_transport%3Dyes&ip=0.0.0.0&ipbits=0&expire=1435200702&sparams=requiressl,id,itag,source,ip,ipbits,expire&signature=86879B3B67177F8777A7293FF0D218EE732FE8A8.C2200057F48DF469BB52656F09FB4F2CFD06ABA5&key=lh1', 32);

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE IF NOT EXISTS `theloai` (
  `id` int(11) NOT NULL,
  `theloai` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`id`, `theloai`) VALUES
(1, 'Phim Bộ'),
(2, 'Phim Lẻ'),
(3, 'Phim Tình Cảm'),
(4, 'Phim Hài Hước'),
(5, 'Phim Viễn Tưởng'),
(6, 'Phim Hành Động');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `iduser` int(11) NOT NULL AUTO_INCREMENT,
  `hovaten` varchar(100) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `diachi` varchar(300) NOT NULL,
  `dienthoai` int(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` text CHARACTER SET utf32 NOT NULL,
  `theloaiyeuthich` varchar(1000) NOT NULL,
  PRIMARY KEY (`iduser`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`iduser`, `hovaten`, `username`, `password`, `diachi`, `dienthoai`, `email`, `ngaysinh`, `gioitinh`, `theloaiyeuthich`) VALUES
(1, 'Trần Văn An', 'tranan', 'an1994', 'Thái Bình', 985209088, 'tranan1994@gmail.com', '1994-07-04', 'Nam', 'Phim Hành Động'),
(2, 'Đào Tuấn Anh', 'theanh', 'theanh', 'Hưng Yên               ', 1672412005, 'daotuananh@gmail.com', '1994-06-12', 'Nam', 'Phim Tình Cảm            ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
