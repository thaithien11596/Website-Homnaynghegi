-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2017 at 06:03 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id3672668_music_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user`, `pass`) VALUES
(1, 'admin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `idAlbum` int(10) NOT NULL,
  `TenAlbum` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`idAlbum`, `TenAlbum`) VALUES
(1, 'Album 1'),
(2, 'Album 2'),
(3, 'Album 3'),
(4, 'Album 4'),
(5, 'Album 5'),
(6, 'Album 6'),
(7, 'Album 7');

-- --------------------------------------------------------

--
-- Table structure for table `baihat`
--

CREATE TABLE `baihat` (
  `idBaihat` int(10) NOT NULL,
  `TenBaihat` varchar(50) NOT NULL,
  `LoiBathat` text NOT NULL,
  `idNhacsi` int(10) NOT NULL,
  `idQuocgia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `baihat`
--

INSERT INTO `baihat` (`idBaihat`, `TenBaihat`, `LoiBathat`, `idNhacsi`, `idQuocgia`) VALUES
(1, 'Em Gái Mưa', 'Mưa trôi cả bầu Trời nắng, trượt theo những nỗi buồn \r\nThấm ướt lệ sầu môi đắng vì đánh mất hy vọng \r\nLần đầu gặp nhau dưới mưa, trái tim rộn ràng bởi ánh nhìn \r\nTình cảm dầm mưa thấm lâu, em nào ngờ... \r\n\r\nMình hợp nhau đến như vậy thế nhưng... không phải là yêu! \r\nVà em muốn hỏi anh rằng \"chúng ta là thế nào?\" \r\nRồi... lặng người đến vô tận, trách sao được sự tàn nhẫn \r\nAnh trót vô tình.. thương em như- là- em- gái... \r\n\r\nChorus: \r\nĐừng lo lắng về em khi mà em... vẫn còn yêu anh \r\nCàng xa lánh, càng trống vắng... tim cứ đau và nhớ lắm... \r\nĐành phải buông hết tất cả thôi, nụ cười mỉm sau bờ môi \r\nẤm áp dịu dàng vai anh, em đã bao lần yên giấc... \r\n\r\nNhìn trên cao khoảng Trời yêu mà em lỡ dành cho anh, \r\nGiờ mây đen quyện thành bão, giông tố đang dần kéo đến \r\nChồi non háo hức đang đợi mưa, rất giống em ngày xưa \r\nMưa trôi để lại ngây thơ, trong giấc mơ buốt lạnh \r\n\r\n(Nhớ nhưng chẳng thể ở bên \r\nHết nước mắt lòng buồn tênh \r\nYou can not feel my love...) \r\n\r\nTựa như yêu nhưng... đến khi ai đó chối từ \r\nTrời đất như rung chuyển một người... vỡ mộng.', 2, 1),
(2, 'Cho Em Gần Anh Thêm Một Chút Nữa ', 'Một chút nhớ anh đấy \r\nMột chút mơ chưa đầy \r\nMột chút thương anh mà xa như khói mây \r\nMột chút ít hơi ấm \r\nMột chút thương âm thầm \r\nMột chút yêu thôi nằm sâu như sóng ngầm \r\nMột chút nhớ thành hai \r\nMột chút mơ góp lại \r\nMột chút thế thôi mà buồn mỗi sớm mai \r\nMột chút gió thành bão giông \r\nMột chút mưa đầy biển rộng \r\nMột chút yêu thôi mà đau đến cháy lòng \r\nYêu là như thế dù là sai là thế nào \r\nVẫn cứ yêu thôi và yêu đến khi tàn hơi \r\nBao lần đã cố nhủ lòng phải quên đi \r\nMà tim ơi sao mềm yếu quá vậy \r\nTrái tim em và dòng máu nóng để yêu anh \r\nGiấc mơ ơi ở lại bên tôi đừng tan nhanh \r\nNgày mai thức giấc thấy giữa lồng ngực là hình bóng ấy \r\nNắm tay em đừng để em đi đừng để em đi \r\nLỡ sinh ra là để yêu nhau chẳng rời xa đâu \r\nBình yên ở đây ở đây chẳng đâu xa vời \r\nCho em gần anh thêm chút nữa', 6, 1),
(3, 'Chiều Hôm Ấy', 'Chiều hôm ấy em nói với anh \r\nRằng mình không nên gặp nhau nữa người ơi \r\nEm đâu biết anh đau thế nào \r\nKhoảng lặng phủ kín căn phòng ấy \r\nTim anh như thắt lại \r\nVà mong đó chỉ là mơ \r\nVì anh còn yêu em rất nhiều \r\nGiọt buồn làm nhòe đi dòng kẻ mắt \r\nHòa cùng cơn mưa là những nỗi buồn kia \r\nEm khóc cho cuộc tình chúng mình \r\nCớ sao con yêu nhau mà mình \r\nKhông thể đến được với nhau \r\nVì anh đã sai hay bởi vì \r\nBên em có ai kia \r\nChẳng ai có thể hiểu nổi được trái tim \r\nKhi đã lỡ yêu rồi \r\nChỉ biết trách bản thân đã mù quáng \r\nTrót yêu một người vô tâm \r\nTừng lời hứa như vết dao lạnh lùng \r\nCắt thật sâu trái tim này \r\nVì muốn thấy em hạnh phúc nên \r\nAnh sẽ lùi về sau \r\nThời gian qua chúng ta liệu sống tốt hơn \r\nHay cứ mãi dối lừa \r\nNhìn người mình thương ướt nhòe mi cay \r\nKhiến tim này càng thêm đau \r\nNgười từng khiến anh thay đổi là em \r\nĐã mãi xa rồi... \r\nThôi giấc mơ khép lại \r\nKý ức kia gửi theo \r\nGió bay...', 4, 1),
(4, 'Anh Đã Quen Với Cô Đơn  ', 'Anh thường hay vẫn nằm mơ \r\nVề một ngôi nhà, ở một nơi chỉ có đôi ta \r\n\r\nNơi đã có anh và em xây từng câu chuyện \r\nCùng sẻ chia về những ước mơ \r\n\r\nTrên trời cao, muôn vì sao, soi từng con đường \r\nHòa làn mây cùng gió đến đây \r\n\r\nEm đã nói sẽ ở bên anh thật lâu \r\nChẳng thể quên được những vấn vương \r\n\r\nCó thể anh mơ \r\nChỉ là giấc mơ về một hạnh phúc \r\nNắng phai trên mi ai \r\nGiờ em nơi đâu có biết chăng nơi này \r\n\r\nCó lẽ em đã quên rồi \r\nTừng chiếc ôm trong tiết sang trời trở đông \r\nNhững ngón tay ta đan chặt \r\nNhìn nhau thật lâu và chẳng cần nói điều gì \r\n\r\nEverynight Alone \r\nĐừng để giọt nước mắt vẫn rơi tàn hoa khắp nơi thiếu em babe \r\n\r\nEverynight Alone \r\nLại gọi tên những nổi nhớ đong đầy \r\n\r\nBao đam mê cũng đã chóng phai \r\nYêu em ko biết đúng sai \r\nChỉ bằng cảm xúc bằng lý trí bằng tất cả những gì anh có \r\nHay em cho \r\nKhi hai con tim lệch nhịp \r\nAnh có cố gắng thế nào, em cũng không hiểu được em \r\nNhư là bản thân chính em.', 3, 1),
(5, 'Cho họ ghét đi em', 'Một mình trong đêm không phải anh cô đơn. \r\n\r\nTa đêm nay cứ say ta quên hết sự đời. \r\n\r\nMặc kệ ngoài kia có bao nhiêu dèm pha. \r\n\r\nTâm ta vẫn yên vui không ganh đua cuộc đời. \r\n\r\nCHO HỌ GHÉT ĐI EM, CHO HỌ GHÉT ĐI EM. \r\n\r\nTâm ta vẫn yên vui không ganh đua cuộc đời. \r\n\r\nLang thang bước trong đêm lang thang bước trong đêm. \r\n\r\nCô đơn và nỗi đau nó cũng chẳng là gì. \r\n\r\nVerse 1: \r\n\r\nTâm anh vẫn luôn phải tịnh ở giữa dòng đời đầy vạn thính. \r\n\r\nNhưng đẹp trai là phải tỉnh chứ không yêu ma nó bất kính. \r\n\r\nMới sáng sớm anh bước ra ngỏ, anh đạp cức chó thật quá nhọ. \r\n\r\nĐời của anh giống như chữ \"O\" , anh hơi sống khác hơn là bọn họ. \r\n\r\nChắc vì thế ông già em khó ổng không cho quen như vậy mới chó. \r\n\r\nTập làm quen với những điều đó, cuộc sống là chó còn ta là mèo. \r\n\r\nVì thực tế nó là con mèo, thì người thiên hạ họ gọi là chó. \r\n\r\nNghe tới đây nó hơi khó khó, không biết khi nào mới được tự do. \r\n\r\nVerse 2: \r\n\r\nÊ cuộc đời này thiệt là đẹp, nhiều lúc nó đẹp còn hơn ăn dép. \r\n\r\nNên giờ đây anh chọn sống khép, vẫn phải ra nếp chứ không sao chép. \r\n\r\nAnh đã nói bao nhiêu lần, dòng nhạc của anh là nhạc hòa bình. \r\n\r\nEm cũng nghe khi chill cần, thì em cũng biết là bài nhạc tình. \r\n\r\nAnh yêu cây, yêu cỏ, yêu núi, yêu rừng và yêu em. \r\n\r\nCũng như con gái như em em thích ăn hàng và ăn kem. \r\n\r\nNgười thiên hạ họ đồn anh đây đa tình và lãng tử. \r\n\r\nVăn võ song toàn anh đầy đủ hết truyền kíp của Thủy Hử. \r\n\r\nTiền thân của anh là thần tiên, miệng đời họ gọi anh thằng điên. \r\n\r\nNhưng không sao hết, anh vẫn mĩm cười nhẹ nhàng lòng an nhiên', 1, 1),
(6, 'Em biết', 'Giấu vào thời gian mau trôi đi nhanh theo dĩ vãng \r\nGiấu vào niềm nhớ tan theo hư vô vào quên lãng \r\nMuốn để lòng cố quên thật mau, tình ta mãi xa lìa nhau \r\nĐể giọt nước mắt anh rơi hoà tan theo nỗi đau \r\n\r\nVẫn nhủ lòng cố quên em nhưng sao anh còn xao xuyến \r\nBiết giờ này em đang vui hay em đang buồn ai khác \r\nHơi ấm bên em vẫn nồng nàn, hoà cùng nỗi nhớ em vô vàn \r\nLiệu em có biết anh vẫn còn yêu em \r\n\r\nEm có biết chăng giờ này anh đang suy nghĩ \r\nEm có biết chăng do thói quen anh khóc một mình \r\nDù ta xa cách hai phương trời \r\nĐường tình rẽ chia hai người \r\nLiệu em có biết anh vẫn còn yêu \r\n\r\nMưa ơi cứ rơi để anh được bên em mãi \r\nMây ơi cứ trôi để anh được thấy em hoài \r\nDù tình ta xa cách mãi nhưng anh còn yêu em rất nhiều \r\nLiệu em có biết anh vẫn còn yêu, yêu mình em', 6, 1),
(7, 'Sau Tất Cả ', 'Sau tất cả mình lại trở về với nhau \r\nTựa như chưa bắt đầu, tựa như ta vừa mới quen \r\nSau tất cả long chẳng hề đổi thay \r\nTừng ngày xa lìa khiến con tim bồi hồi \r\nVà ta lại gần nhau hơn nữa \r\n\r\n[Pre-chorus] \r\nCó những lúc đôi ta giận hờn \r\nThầm trách nhau không một ai nói điều gì \r\nThời gian cứ chậm lại, từng giây phút sao quá dài \r\nĐể khiến anh nhận ra mình cần em hơn \r\n\r\n[Chorus] \r\nTình yêu cứ thế đong đầy trong anh từng ngày \r\nVì quá yêu em nên không thể làm gì khác \r\nChỉ cần ta mãi luôn dành cho nhau những chân thành \r\nMọi khó khan cũng chỉ là thử thách \r\nVì trái tim ta luôn luôn thuộc về nhau \r\n\r\nSau tất cả mình lại chung lối đi \r\nĐoạn đường ta có nhau, bàn tay nắm chặt bấy lâu \r\nSau tất cả mình cùng nhau sẻ chia \r\nMuộn phiền không thể khiến đôi tim nhạt nhoà \r\nVà ta lại gần nhau hơn nữa \r\n\r\n[Pre-chorus] \r\n\r\n[Chorus] \r\n\r\nGiữ chặt bàn tay mình cùng nhau đi hết bao tháng ngày \r\nMọi điều gian khó ta luôn vượt qua \r\nĐể khiến ta nhận ra mình gần nhau hơn ', 5, 1),
(8, 'Đã lỡ yêu em nhiều', 'Đã lỡ yêu em nhiều rồi thì anh chỉ biết ngắm mưa \r\nNhìn qua hàng cây được bao nhiêu hạt mưa \r\nLà trong anh được bấy nhiêu nỗi nhớ em \r\nĐã lỡ yêu em nhiều rồi thì anh chỉ biết đếm sao \r\nNhìn lên trời cao được bao nhiêu vì sao \r\nLà trong lòng anh còn bấy nhiêu những nỗi lo \r\nSợ mình đánh mất em khi, thu vừa sang, lá xanh bỗng úa vàng \r\nKhi mưa còn chưa tới, em thay người yêu mới, oh no no \r\nSợ mình sẽ khiến em yêu phai nhạt hơn giữa mênh mông bộn bề.. \r\nEm ơi chờ anh với \r\n(Chỉ biết nói cho em nghe vậy thôi..) \r\n\r\nVì đã lỡ yêu em rồi, chẳng dám hứa xa xôi \r\nCứ nhắm mắt em lại và feel my love \r\nDù nắng mưa bao mùa \r\nThì tình anh vẫn luôn đây mà \r\nChẳng phải kiếm đâu xa \r\nVẫn giữ đó bầu trời của riêng chúng ta \r\nĐể gió mang đi về 1 nơi không người.. \r\n\r\nĐã lỡ yêu em nhiều rồi thì anh chỉ biết thế thôi \r\nDù mai về sau mình không bên cạnh nhau \r\nDù tim mình đau khi biết em đã lỡ yêu người \r\nĐã lỡ yêu em nhiều rồi thì anh sẽ bất chấp luôn \r\nDù mưa, dù giông, dù sông sâu, biển xa \r\nDù nắng cháy anh cũng không hề lo \r\nChỉ sợ mình đánh mất em khi, thu vừa sang, lá xanh bỗng úa vàng \r\nKhi mưa còn chưa tới, em thay người yêu mới, oh no no \r\nSợ mình sẽ khiến em yêu phai nhạt hơn giữa mênh mông bộn bề \r\nEm ơi chờ anh với \r\n(Chỉ biết nói cho em nghe vậy thôi) \r\n\r\nVì đã lỡ yêu em rồi, chẳng dám hứa xa xôi \r\nCứ nhắm mắt em lại và feel my love \r\nDù nắng mưa bao mùa \r\nThì tình anh vẫn luôn đây mà \r\nChẳng phải kiếm đâu xa \r\nVẫn giữ đó bầu trời của riêng chúng ta \r\nĐể gió mang đi về 1 nơi không người \r\n\r\nĐã lỡ yêu..nah nah nah \r\nU know, oh lỡ yêu…nah nah nah \r\nI love you so, bei I love you so \r\nMình phải bước chậm lại vì ngày mai rất dài \r\nĐã lỡ yêu..nah nah nah \r\nU know, oh lỡ yêu…nah nah nah \r\nI love you so, bei I love you so \r\nMình phải bước chậm lại, chậm lại.. \r\n\r\nVì biết đâu, sớm mai thức dậy \r\nEm không còn đây ôm anh, nhẹ hôn anh \r\nĐể tình ta cứ trôi lững lờ \r\nChờ giông và bão cuốn đi bất ngờ \r\nRồi lỡ đâu, giấc mơ không thành \r\nEm không còn kề vai anh, tình mong manh \r\n1 người đứng cứ trông với chờ, người kia thì ôm giấc mơ.. \r\n\r\nVì đã lỡ yêu em rồi, chẳng dám hứa xa xôi \r\n(Chẳng dám hứa thêm gì nữa no no no no no) \r\nCứ nhắm mắt em lại và feel my love \r\n(Can you feel my love, love bei?) \r\n(Dù cho bao mùa anh vẫn sẽ đây) \r\nChẳng phải kiếm đâu xa \r\n(I love you so \r\nLove you so \r\nLove you so \r\nI love you so..) \r\nĐã lỡ yêu..vì 1 người lỡ yêu, lỡ yêu..', 5, 1),
(9, 'Làm người yêu anh nhé baby', 'Em lặng im còn anh thì ngồi ngẩn ngơ nhìn khuôn mặt ngây thơ đó. \r\nEm hững hờ quá nên anh lo sợ bơ vơ. \r\nĐợi chờ đôi mắt ngoan em ngại ngùng ngó sang. \r\nAnh thẫn thờ, bơ phờ, đôi mắt mơ. \r\nAnh đã cố đổi thay để mạnh mẽ hơn vì anh sợ cô đơn. \r\nNói yêu má hồng, mắt cong, bờ môi mọng rất khó. \r\nVì lo trong trái tim em đã có ai. \r\nNhưng nếu yêu em là sai thì anh đây không cần đúng. \r\n\r\n[ĐK] \r\nNgười yêu ơi... yêu mình anh được không? \r\ntừ giờ và sau này. \r\nXua lạnh hơi đêm mùa đông. \r\nLà ngày ta xum vầy khỏa lấp con tim hao gầy...lấp trống tình yêu đông đầy... \r\nHãy để anh chứng minh cho em thấy... \r\nNgười yêu ơi... yêu thì có gì sai? \r\n(Đâu có sai) \r\nkhông là anh thì ai? \r\nđể anh đưa em về. \r\nLà tình yêu mãi mê. Mặc kệ người ta cười chê. \r\nBởi vì tình yêu là thế. \r\nLàm người yêu anh nhé? Babe! \r\nRồi làm vợ anh nhé? Babe!! \r\n\r\n[Rap] \r\nKhông hiểu! Không hiểu! Không hiểu! \r\nLòng em tự nhiên trái tim bên trái...Nhảy sang bên phải \r\nphép toán anh có thể tính 1+1=2 \r\nAnh + em = 3 là sai. \r\nNhưng tương lai sẽ đúng nếu như ta yêu nhau mãi \r\nbàn phím máy tính chơi nhiều cũng chai. \r\nhoa đẹp đến mấy cũng có ngày tàn phai \r\nyêu xong chia tay ai cũng sợ hãi. \r\nRiêng tình yêu anh trao em \r\nnó rất dai và rất dài...! \r\n\r\n[ĐK] \r\n\r\nAnh đã cố đổi thay để mạnh mẽ hơn vì anh sơ cô đơn \r\nlà khi những nỗi nhớ như sóng xô nơi đây từng cơn. \r\nlà khi em cười đùa bên ai đau đớn nên anh giận hờn \r\nnhưng yêu em là sai thì anh không cần đúng.', 9, 1),
(10, 'Sống xa anh chẳng dễ dàng', 'Nhìn vào hư không... ngước vô định vào xa xăm \r\nThở dài tiếc nuối biết bao ân hận... với một người \r\nNặng lời nhau đau vỡ trái tim, người tổn thương.. đi rồi \r\nNhận ra phải sống xa anh chẳng dễ dàng \r\n\r\nOng đã biết... cần hoa lấy mật \r\nBiết đợi nắng.. sưởi ấm mỗi ngày \r\nEm giờ không trẻ con như trước \r\nsẽ không để lạc nhau dù một bước \r\n\r\nChorus: \r\nNếu quá khứ có trở lại \r\nHứa với anh - sẽ chẳng còn sự khờ dại và \r\nsẽ yêu anh êm đềm vững chãi \r\nGió thôi gợn sóng trả lại mặt hồ yên ả \r\n\r\nCó những nỗi nhớ lấn át \r\nChẳng biết vui bao giờ để nở nụ cười buồn \r\nTrái tim em bây giờ chẳng khác, \r\nCó cả thế giới nhưng trong lòng lại chơi vơi \r\nVì anh chính là cả cuộc đời \r\n(anh chiếm hết cả cuộc đời) \r\n\r\nGiang tấu: \r\nTừ lâu tôi nghĩ rằng bao ngốc nghếch chịu đựng vì yêu ai cũng trải qua \r\nNgười yêu dỗi hờn hay trách móc là quan tâm đến ta. \r\nChẳng hiểu sao hai đứa cứ xa dần, thương nhưng vẫn không sao lại gần nữa... \r\n\r\nChorus cuối: \r\nNhắm mắt nhớ phút đắm đuối \r\nLúc đôi môi anh thì thầm gọi nhẹ \"babe\" \r\nThắm thiết hôn từ sau \r\nCó những cảm giác ám ảnh chẳng thề phai màu... \r\n\r\n(I just cant stop missing you bae...) \r\nNhưng không - ta đã kết thúc \r\nChẳng thể nói ra lời thật lòng muộn màng để nói câu \r\n\"Em xin lỗi...\" \r\nBuông xuôi quá khứ chấp nhận vùi bao nhớ thương \r\ndù ngọt đắng... cũng chỉ vì anh \r\n\r\nEnd: \r\nNặng lời nhau đau vỡ trái tim, người tổn thương.. không về', 2, 1),
(11, 'Ai chờ ai', 'Sớm mai tỉnh dậy tôi lạc vào hư không\r\nĐôi tay níu lấy điều gì mà chờ mong\r\nNắng kéo mây về\r\nGió kéo đông về\r\nBuồn người thương kéo tôi về ngày yêu\r\n\r\nĐêm qua mơ thấy anh quay về\r\nÔm choàng nhau, ấm áp đông qua\r\nThức giấc môi cười\r\nÔi ! Là mơ thôi\r\nBuồn tôi ơi, khi nào mày vơi ?\r\n\r\nAnh cứ đi, đi tìm tình yêu mới\r\nTôi đứng đây, ôm trọn tình yêu cũ\r\nNhắn gió mây gửi đến anh đôi lời\r\n“Sợi tơ duyên, đứt đi rồi có nối lại được không”\r\nRap :\r\nAnh chẳng thể nắm được duyên tình\r\nMặc dù luôn muốn giữ e cho riêng mình\r\nAnh chẳng thể giữ em lại đây\r\nMặc dù cô đơn vẫn cứ luôn bủa vây\r\nAnh biết trước 2 ta sẽ xa nhau\r\nThêm lâu rồi niềm đau sẽ thêm sâu\r\nNhưng nếu ta xa nhau thì con tim này ai khâu ?\r\nAnh biết thời gian rồi vẫn qua , thanh xuân cả 2 rồi sẽ qua\r\nNhưng có những thứ cả 2 chẳng thể xóa\r\nEm tồn tại trong anh là giấc mơ\r\nAnh đã tìm được em trong nỗi nhớ\r\nNhưng anh sống với hiện thực\r\nTình yêu còn đó chẳng kết thúc như giấc mơ\r\nEm đi qua như dòng chảy của dòng sông\r\nAnh là phiên đá cũ tự hỏi e về không ?\r\nEm đi qua dòng nước khác vẫn quanh anh\r\nNhưng anh lại cảm thấy nổi cô đơn vẫn bao quanh\r\nAnh chẳng thể mua được thời gian\r\nChẳng thể yêu ngày hôm qua\r\nCâu truyện h đã lật sang trang\r\nKết truyện là anh nhìn em rời xa.\r\nVer2\r\nVẫn kiếm tìm môi hôn vụng dại\r\nVẫn mộng mơ tiếng yêu ngày đầu\r\nMình từng hứa sẽ bên nhau dài lâu\r\nNhưng giờ đây lạc về đâu\r\n\r\nVẫn đợi chờ giờ anh tan ca\r\nVẫn dặn lòng, chia tay thôi mà\r\nBước qua nỗi đau\r\nMạnh mẽ tôi ơi\r\nBài nhạc tình tôi hát “ tình tang tang” ( tình tan tan :) )\r\n\r\nAnh cứ đi, đi tìm tình yêu mới\r\nTôi đứng đây, ôm trọn tình yêu cũ\r\nNhắn gió mây gửi đến anh đôi lời\r\n“Sợi tơ duyên, đứt đi rồi có nối lại được không”\r\n\r\nTừng giây phút, ngày xưa đó\r\nNgười có nhớ\r\nNhớ\r\nNhớ\r\nNhớ không', 10, 1),
(12, 'Mưa trong lòng', 'Bài hát: Mưa Trong Lòng - Trịnh Đình Quang \r\n\r\nĐêm nay trăng sáng anh ngồi một mình nhớ em \r\nĐêm qua anh viết vài dòng thư nhưng em không trả lời \r\nCây tre đầu ngõ đung đưa theo làn gió nhẹ \r\nTrăng vẫn sáng gió vẫn đưa, anh vẫn buồn \r\n\r\nKhông gian lặng vắng mắt anh sầu em ở đâu \r\nVà người có những thứ hơn hẳn anh, đã cướp đi em của anh \r\nAnh chỉ muốn khóc thật to, nhưng sợ mình yếu đuối \r\nThế nhưng đến nay là một đêm rất buồn \r\n\r\nSương rơi lạnh cánh tay anh ướt đẫm nước mắt \r\nAnh nhớ hình dáng lúc trước khi anh còn vẫn còn có em \r\nEm hiền hòa em đậm đà, em từng là người rất thương anh \r\nNhưng vòng tay anh không thể giữ, không thể ôm trọn lấy em \r\n\r\nAnh tuyệt vọng đau trong lòng chẳng dám nói ra \r\nChỉ có thể yếu lòng mỗi khi đêm xuống một mình \r\nVà gió cứ đưa anh vẫn mưa trong lòng rộn rã nỗi sầu \r\nChỉ có ánh trăng mới thấu được nỗi lòng của anh ', 11, 1),
(13, 'Chuyện tình tôi', 'Bài hát: Chuyện Tình Tôi - Khắc Việt \r\n\r\nCòn biết bao nhiêu nơi, \r\nAnh chưa kịp đưa em đến nữa rồi, \r\nCòn biết bao nhiêu đêm anh đã hứa sẽ ở cạnh em. \r\n\r\nHanh phúc khi bên em, \r\nNghĩ đến ngày xa nhau tim anh như vỡ vụn, \r\nBản lĩnh anh nơi đâu lý trí nói thế nhưng con tim đâu làm theo. \r\n\r\nMình chỉ muốn yêu nhau thôi, \r\nNhưng tình yêu không đủ để cản ngăn số phận, \r\nĐổ lỗi cho ai đây hay kiếp trước ta có quá nhiều nợ vay. \r\n\r\nYêu nhau bên nhau mà biết trước sẽ chia ly, \r\nThì hai ta cố gắng quên nhau đi. \r\nXung quanh hai ta mọi người luôn muốn thế mà, \r\nThì thôi xa nhau để mọi người toại nguyện nhá. \r\n\r\nAnh giữ những hạnh phúc anh giữ những kỷ niệm \r\nGhim chặt nơi đây sẽ chỉ anh biết thôi \r\nEm sẽ gặp ngừời mới, \r\nVà sẽ bên người ta để quên đi những gì đã qua \r\nAnh ước lúc vội vã tất cả là thoáng qua, để hai ta ko lún sâu thế này \r\nEm ơi anh yêu quá anh đã đăt cuộc sống vào em nhưng sao mình phải chia xa', 7, 1),
(14, 'Anh thế giới và em', 'Sẽ có người yêu em hơn anh \r\nAnh đã nói vậy ngày chia tay đứng chết lặng trông theo bóng dáng cứ xa dần \r\nĐã lâu rồi trong em vẫn thế vẫn chưa phai chuyện cũ và anh \r\nGiống như chỉ hôm qua đây thôi nỗi đau vẫn còn \r\nEm muốn được quên muốn bên người mới \r\nNhưng trong thế giới em chỉ muốn gần anh \r\nKhi ta lìa xa, biết đâu là mãi mãi \r\nBiết đâu là tàn phai một giấc mơ \r\n\r\nTình yêu khi không như mong đợi \r\nNgười ra đi cho em đơn côi \r\nCó hiểu chăng lòng em vẫn nhớ \r\nNhớ đến anh trong mỏi mòn \r\nVì anh ơi nơi cuộc đời này \r\nLòng em sẽ yêu ai hơn anh \r\nVà có lẽ trái tim giờ đây héo úa khi yêu thương một ngày lụi tàn. \r\n\r\nĐã có người yêu em hơn anh \r\nEm cứ nghĩ sẽ quên anh thôi \r\nNhững phút giây ở bên anh ấy \r\nĐôi khi em vui… \r\nThế nhưng rồi em cũng phải hiểu \r\nĐó là sai lầm khi cố tìm người thay anh \r\nEm đã khóc vì nỗi đắng cay \r\nCó lẽ về sau em nên sống mỗi riêng em \r\n\r\nTình yêu khi không như mong đợi \r\nNgười ra đi cho em đơn côi \r\nCó hiểu chăng lòng em vẫn nhớ \r\nNhớ đến anh trong mỏi mòn \r\nVì anh ơi nơi cuộc đời này \r\nLòng em sẽ yêu ai hơn anh \r\nVà có lẽ trái tim giờ đây héo úa khi yêu thương một ngày lụi tàn. \r\n\r\nEm muốn được quên, muốn bên người mới \r\nNhưng trong thế giới em chỉ muốn gần anh \r\nKhi ta lìa xa, biết đâu là mãi mãi \r\nBiết đâu là tàn phai một giấc mơ \r\n\r\nTình yêu khi như không như mong đợi \r\nNgười ra đi cho e đơn côi \r\nCó hiểu chăng lòng em vẫn nhớ \r\nNhớ đến anh trong mỏi mòn \r\nVì anh ơi nơi cuộc đời này \r\nLòng em sẽ yêu ai hơn anh \r\nVà có lẽ trái tim giờ đây héo úa khi yêu thương một ngày lụi tàn. \r\n\r\nEm yêu anh thôi \r\nEm yêu anh thôi…', 12, 1),
(15, 'Chờ một ngày nắng', 'Chẳng còn lại gì sau bao tan vỡ \r\nKhi tình yêu đã không tìm được lòng tin nên hai người càng xa nhau \r\nVẫn sẽ là những nỗi đau \r\nVà rồi không thể quay lại \r\n\r\nYêu thương bao lâu, sao quên được nhau \r\nHạnh phúc đó quá ngắn khi anh đã chấp nhận một lời chia tay \r\nĐể rồi em bước đi không nói anh nào đâu hay \r\n\r\nGóc phố cũng buồn khi thiếu vắng tiếng chân bước rộn ràng \r\nVà giọng cười của em mỗi khi gần anh \r\nEm ra đi để lại nhớ thương \r\nKỉ niệm ngọt ngào đến trong anh mỗi đêm \r\n\r\nGió vẫn âm thầm dõi theo về em đã xa \r\nGió vẫn mang lời ca đôi chúng ta \r\nChờ một ngày nắng đến mang theo yêu thương sưởi ấm trái tim \r\nNhững giấc mơ nào đến rồi lại đi thật nhanh \r\nEm như là một ánh nắng đã biến mất trong anh \r\nEm theo làn mây kia trôi đi phương nào \r\nAnh vẫn sẽ luôn nhớ về \r\nEm và những kỷ niệm \r\n\r\nI will let you, let you go \r\nAnh quên đi giấc mơ này \r\nI will let you, let you go \r\nSao khóe mắt cay cay \r\nI will let you, let you go \r\nĐể qua đi hết những gì hôm nay và phải cố quên đi giây phút chia tay \r\n\r\nLúc em quay lưng đôi chân vội đi, em rất lạnh lùng \r\nMưa đã bắt đầu rơi, \r\nTừng giọt dài trên má nhưng anh vẫn nào đâu hay \r\nRằng mãi bên cạnh anh vẫn còn một cơn mưa trong tiếc nuối \r\nNắng trong anh ở lại \r\nVẫn mong đợi chờ một ngày nắng lên \r\nĐể nắng trong anh trở về \r\nLiệu anh có thêm một lần nữa \r\nLòng tin hai ta lại sẽ có nhau chưa bao giờ vụt tắt \r\nNắng vẫn sẽ mãi mãi thuộc về mây kia để gió cứ mãi lang thang một mình \r\nCố gắng quên đi một người đã mãi mang đi những yên bình \r\nNgọt ngào yêu thương từ nơi ta hạnh phúc', 13, 1),
(17, 'Ta còn yêu nhau', 'Góc phố này \r\nLá vẫn bay \r\nRiêng minh anh ngồi đây \r\n\r\nNgoài kia bao nhiêu kỉ niệm \r\nHai chúng minh \r\nChờ nắng sớm khi bình minh \r\n\r\nCó biết không \r\nGiữa đám đông \r\nChợt có lúc anh yếu lòng \r\n\r\nTừng ngày trôi qua sao quá dài \r\nCon tim anh mệt nhoài \r\nTự hỏi, giờ em nơi đâu?? \r\n\r\nChorus \r\n\r\nNgười yêu anh thấy những lúc em ở đây \r\nMùa đông như ấm hơn khi tay đan bàn tay \r\nKề môi em khẽ thì thầm \r\nRằng anh yêu em rất chân thành \r\n\r\nHàng cây sao vẫn mãi đứng đó trước gió \r\nVà hình như anh vẫn đang nơi đây chờ em \r\nLàm sao để nhắn một lời: \r\n‘’Em hãy quay về bên anh’’ \r\n\r\nCoda: \r\nNgười ơi xin hãy thật lòng \r\nHãy nói, TA CÒN YÊU NHAU.', 12, 1),
(18, 'Đếm ngày xa em', 'Ngọt lắm những lúc em nắm đôi tay \r\nVà hứa sẽ mãi yêu chỉ anh đây \r\nTừ khi em qua nơi này \r\nAnh thấy vui biết mấy \r\nRồi nắng sớm mới ấm vẫn chưa vơi \r\nCon tim vang tiếng ca vui cười \r\nVì em mang niềm vui tới nơi anh \r\nNhư người may mắn nhất trên đời \r\n\r\nNào đâu..... \r\nChẳng đc bấy lâu \r\nLại phải xa cách nhau \r\nCố nén nỗi đau khi cơn mưa ngâu vụn vỡ \r\nĐêm về lại mơ \r\nSớm ra lại bơ vơ còn xa em là nhớ \r\n\r\n\r\nChỉ là đôi môi \r\nChỉ là.. \r\nVài câu yêu thương thôi mà \r\nEm đã khiến anh yêu em mãi không thể phai phôi \r\nAnh mong em đừng thay đổi \r\nVì anh đã quá yêu em mất rồi \r\nVì yêu em ,xa em quanh anh chỉ còn bóng tối \r\nChờ đợi ngày mai \r\nChờ... \r\nMột ngày gần trong tương lai \r\nChờ... \r\nNgày 2 ta đc sánh đôi vai được bên nhau mãi mãi \r\ndẫu .. \r\nAnh có làm gì sai \r\nCũng sẽ không một ai có thể chia 2 ta chung bước mãi \r\ntrên một con đường dài..... \r\n\r\nĐếm,đếm,đếm,đếm,đếm,....... \r\nAnh đếm ngày xa em \r\n...... \r\nRap : \r\n\r\n1,2,3,4,5,6,7 ...ngày trôi, \r\nBiết em giờ có nhớ về anh hay nhớ về ai \r\nBao ngày thật là dài khi anh không có em ở bên cạnh \r\nAnh cảm thấy rất giá lạnh \r\nMà làm sao cho em hiểu thấu khi mình không ở bên nhau \r\n... \r\nMonday ..tuesday...wednesday...thursday...friday ...saturday...sun day.. \r\nOh week \r\nAnh... chẳng thể nghĩ về ai chỉ nghĩ về em \r\nNỗi buồn thì anh không thể đếm \r\nNỗi nhớ em thì lại càng tăng thêm \r\nNgọt ngào đôi môi không thể nếm \r\nPhải làm sao khi không em mỗi đêm...', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `idBinhluan` int(10) NOT NULL,
  `Kichthuoc` varchar(50) NOT NULL,
  `idThanhvien` int(10) NOT NULL,
  `idChitietbaihat` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`idBinhluan`, `Kichthuoc`, `idThanhvien`, `idChitietbaihat`) VALUES
(1, '3000', 1, 1),
(2, '3000', 2, 2),
(3, '3000', 3, 3),
(4, '3000', 4, 4),
(5, '3000', 5, 5),
(6, '3000', 6, 6),
(7, '3000', 7, 7),
(8, '3000', 7, 7),
(9, '3000', 8, 8),
(10, '3000', 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `casi`
--

CREATE TABLE `casi` (
  `idCasi` int(10) NOT NULL,
  `HotenCasi` varchar(50) NOT NULL,
  `NgaysinhCasi` date NOT NULL,
  `QuequanCasi` varchar(255) NOT NULL,
  `GioitinhCasi` tinyint(1) NOT NULL,
  `TieusuCasi` text NOT NULL,
  `idQuocgia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `casi`
--

INSERT INTO `casi` (`idCasi`, `HotenCasi`, `NgaysinhCasi`, `QuequanCasi`, `GioitinhCasi`, `TieusuCasi`, `idQuocgia`) VALUES
(1, 'Huỳnh James', '1986-11-14', 'Phan Thiết', 1, 'Sinh sống và làm việc tại Phan Thiết, xuất thân là một BBoy chơi Breakdance từ năm 2004, sau đó anh bắt đầu tìm hiểu Rap vào năm 2005. Anh chơi song song hai thể loại, sống trong niềm đam mê HipHop và duy trì đến ngày hôm nay. Anh được nhiều bạn trẻ underground yêu thích với bản tính hài hước, nhạc anh viết với thể loại nhạc vui tươi mang đến sự thoải mái thư giản cho người nghe. Anh bắt đầu làm việc và hợp tác với phòng thu âm Mondo Records và cho ra các sản phẩm chất lượng mang đậm chất underground. Những bài hát đang là tâm điểm của các bạn trẻ và giới Underground. - Cho Họ Ghét Đi Em - Huỳnh James - Quăng Tao Cái Boong - Huỳnh James ft. Pjnboys - Dân Chơi Tỉnh Lẻ - Huỳnh James ft. Pjnboys - Bê Rồi Ông Cố Ơi - Huỳnh James ft. Pjnboys', 1),
(2, 'Hương Tràm', '1995-01-15', '\r\nTp Vinh, Nghệ An \r\n ', 0, 'Hương Tràm là con nhà nòi. Cô có ba là NSƯT Tiến Dũng và anh trai là thí sinh Sao Mai điểm hẹn 2010 Phạm Tiến Mạnh. Hương Tràm đã gây cơn sốt trong buổi lên sóng đầu tiên ở vòng Giấu Mặt của \"The Voice 2012\" khi cô chọn ca khúc kinh điển I Will Always Love You của Whitney Houston và đã được cả 4 vị huấn luyện viên xoay ghế chọn vào đội của mình. Tuy nhiên, Hương Tràm quyết định chọn ca sỹ Thu Minh là vị huấn luyện viên cho giọng ca của mình. Ngày 13/01/2013, Hương Tràm chính thức trở thành quán quân đầu tiên của Giọng Hát Việt.', 1),
(3, 'Soobin Hoàng Sơn', '1992-09-10', 'Hà Nội', 1, 'Là một ca sĩ, nhạc sĩ và rapper trẻ đang được nhiều người yêu mến và Soobion hiện là ca sĩ của SpaceSpeakers Music Productionz. Tuy Hoàng Sơn sinh ra và lớn lên ở Hà Nội nhưng anh lại tập trung phát triển sự nghiệp ca hát của mình hơn trong những năm gần đây tại Tp. HCM.\r\nSở trường của Soobin Hoàng Sơn là các ca khúc R&B, thế nhưng mới đây nam ca sĩ Hà Thành này lại khiến khán giả không khỏi bất ngờ khi phát hành ca khúc mang phong cách pop ballad có tựa đề \"Phía sau một cô gái\", một sáng tác của nữ ca nhạc sĩ Tiên Cookie - Đánh dấu một nét nổi bật mới dành cho nam ca sĩ này. Không chỉ đổi mới về phong cách âm nhạc, Soobin Hoàng Sơn còn trau chuốt về hình ảnh lẫn giọng hát trong sản phẩm âm nhạc mới này. Bài hát này còn là một trong những bài hát được nghe nhiều nhất tại Việt Nam trong năm 2016.', 1),
(4, 'Trịnh Đình Quang', '1988-12-18', 'Nghệ An', 1, 'Sinh ra ở mảnh đất xứ Thanh, trong một gia đình không có ai theo hoạt động nghệ thuật. Tự học thu âm , hòa âm phối khí từ lớp 11. Sau khi tốt nghiệp phổ thông, Trịnh Đình Quang đã quyết định Nam tiến để theo đuổi đam mê nghệ thuật của mình. Tốt nghiệp trường Đại học văn hóa nghệ thuật khoa Piano năm 2012. Cơ duyên đến khi anh được một số người bạn tham gia CCtalk. Ban đầu, anh chỉ có suy nghĩ tham gia để giao lưu và hát cho mọi người nghe nhưng vì nhận được nhiều lời khen ngợi nên anh cảm thấy thích thú hơn với nghề cầm ca. Sau đó, khi ca khúc đầu tiên của Trịnh Đình Quang được lọt vào bảng xếp hạng, anh đã mừng rơi nước mắt. Và từ đó, khán giả ở Việt Nam, nhất là khán giả là giới trẻ đã không còn xa lạ với ca sĩ này, người đã làm nên những bản hit đình đám như ca khúc “Nếu em còn tồn tại”, “Thất tình”, “Thế giới ảo tình yêu thật”… Sau nhiều khó khăn Trịnh Đình Quang đang là nhà sản xuất âm nhạc ở Qstudio cũng là phòng thu của TĐQ. Hiện tại TĐQ đang hợp tác với những ca sỹ khác. Ngoài niềm đam mê ca hát Trịnh Đình Quang còn chạy theo niềm đam mê sáng tác và đã có 1 số sáng tác HIT như : Một Tình Yêu Đúng Nghĩa – Hồ Quang hiếu, Tìm Em – Hồ Quang Hiếu , Nếu Không Thể Đến Với Nhau - The Men, Anh Vẫn Luôn Là Anh – Chu Hiểu Minh, Quay Về Còn Kịp – Thiên Dũng… Những Album nổi tiếng của Trịnh Đình Quang: Con Nợ Mẹ (2014) Thế Giới Ảo Tình Yêu Thật (2015) Gã Điên Cua Gái (2015) Mưa Trong Lòng (2016) Ngày Em Trở Về (2017) Em Biết (2017)', 1),
(5, 'Jaykii', '1993-09-21', 'Hà Nội', 1, 'JayKii tên thật là Trần Anh Quân - một gương mặt ca sĩ-nhạc sĩ trẻ tài năng. Anh được công chúng biết tới sau khi lọt vào top 9 của cuộc thi “VietNam Idol 2013\". Sau khi rời khỏi chương trình VietNam Idol 2013, JayKii đã chính thức hoạt động âm nhạc chuyên nghiệp. Single đầu tay \"Chiều hôm ấy\", một ca khúc do chính anh sáng tác và thể hiện đã nhận được sự đón nhận nhiệt liệt từ công chúng thu hút hơn 25 triệu lượt xem trên Youtube và hơn 80 triệu lượt nghe trên MP3 Zing; đứng trong top 10 bảng xếp hạng trong nhiều tuần liền chỉ sau một thời gian ngắn phát hành. Vào ngày 11:11 ngày 11/11/2017 JayKii tiếp tục phát hành ca khúc Vài tháng qua - là câu chuyện tiếp nối từ Chiều hôm ấy cũng được giới phê bình đánh giá cao và dự đoán sẽ tạo nên làn sóng không thua kém gì “người anh em” của mình.', 1),
(6, 'Bích Phương', '1989-09-30', 'Quảng Ninh', 0, 'Bích Phương là ca sĩ trưởng thành từ cuộc thi Việt Nam Idol 2010. Năm 2011, cô nổi lên như 1 hiện tượng với hàng loạt những ca khúc Pop Ballad mang giai điệu trữ tình, lời ca đi sâu vào lòng người như: Vẫn, Có khi nào rời xa, Kí ức ngủ quên, v..v.. Bích Phương nhanh chóng chiếm được tình cảm của đông đảo khán giả trẻ nhờ giọng hát mượt mà, sâu lắng cùng ngoại hình xinh đẹp, nữ tính. ', 1),
(7, 'Justa Tee', '1996-10-15', 'Hà Nội', 1, 'Nick name: JayTee, JustaTee Ngày sinh: 01/11 Chiều cao: 1m 68 Cân nặng: 53 Kg Tiểu sử : Thành viên cũ của Click Click Boom, đang là thành viên trong Joker\'s Rule và LadyKillah Proz Khả năng: Composer, singer, mixer, beatzmaker Kinh nghiệm : Sáng tác và hát hơn 5 năm Chất giọng: Smooth Thể loại: R\'nB everystyle Hiện đang là Music Producer của LadyKillah Proz - Nhóm các Rappers/Singers hàng đầu VN như Lil\'Knight, Emily, Mr.T, Yanbi,Mr.A, Bueno, Phúc Bồ, TmT, Big Daddy..... Chất giọng: Smooth Thể loại : R&B/Hiphop Phong cách ăn mặc : Original Là 1 ca sỹ đi lên từ Underground với mức cảm nhạc khác người, họ nói anh là người đầu tiên mang đến định nghĩa thực về dòng nhạc R&B, khi mà trước đó chỉ là những bài hát Pop ngộ nhận, và đến bây giờ cũng chưa có nhiều người nhận thức đúng về dòng nhạc này Tiểu sử : Bắt đầu sáng tác từ năm 2004 với nick name JayTee, sau này được đổi thành JustaTee 2005 - 2008 : Là Rapper/Singer/Music producer trong nhóm Click Click Boom - nhóm nhạc rap đa thành viên đầu tiên tại Việt Nam 2008 : Bắt đầu đánh dấu sự nghiệp R&B 2010 : Cùng Lil\' Knight đồng sáng lập nên LadyKillah với sự điều hành của Mr.J ( Jan Saker ) làm nên website R&B/Hiphop lớn mạnh nhất hiện nay 20/08/2010: Ra mắt mini album JUST-A-TEE đánh dấu tên tuổi mình trên nền nhạc R&B của nước nhà . Ca khúc \"Sau tất cả\", với sự góp giọng của JustaTee và BigDaddy đã trở thành bài hit đình đám trong thế giới nhạc Việt. Trong chương trình The Remix - Hòa âm ánh sáng 2016, \"cặp bài trùng\" này lại tiếp tục có màn phối hợp ăn ý trong ca khúc \"Về nhà ăn tết\", ca khúc này đã trở thành bản hit trong những ngày đầu năm mới 2016. Trong năm 2016, \"cặp bài trùng\" này tiếp tục hợp tác trong single \"Dù anh có đứng lại\", một ca khúc mạng đậm cá tính của cả hai giọng ca, khiến khán giả phát cuồng về sự mới lạ trong phong cách. Những bài hát mang lại tên tuổi JustaTee : Người Lạ Nơi Cuối Đường, Imma HeartBreaker, K part 2, Không Tin 1 Sớm Mai Bình Yên REMIX, Call Me The Liar...', 1),
(8, 'Erik', '1997-10-13', 'Hà Nội ', 1, 'Nam nghệ sĩ solo - giọng ca chính của ST.319\'s Boygroup. THÀNH TÍCH & HOẠT ĐỘNG: - Năm 2012: Top 15 The Voice Kids ( Giọng hát việt nhí ) - Năm 2013: Giải vàng giai điệu Tuổi hồng toàn quốc - Năm 2014: Top 25 Ngôi sao việt Top 4 The winer is 2014 - Năm 2015: Vượt qua buổi thử giọng vào tháng 1/2015, ERIK chính thức trở thành trainee của ST.319 và tham gia vào quá trình đào tạo bài bản và chuyên nghiệp trong suốt 1 năm. ', 1),
(9, 'Nguyên Jenda', '1992-11-09', 'Hà Nội', 1, '', 1),
(10, 'Bảo Anh', '1992-11-13', 'Vũng Tàu', 0, 'Bảo Anh từng là gương mặt ấn tượng trong nhiều cuộc thi âm nhạc dành cho tuổi teen. Năm 2008, Bảo Anh lọt vào top 12 thí sinh vòng chung kết Tiếng ca học đường. Năm 2009, Bảo Anh tiếp tục đoạt giải đồng hạng với Văn Mai Hương tại \'Tiếng Hát Học Đường\' với ca khúc \'Ăn khế trả vàng\'. Năm 2010, Nguyễn Hoài Bảo Anh tiếp tục đoạt giải triển vọng cuộc thi H2T Icon 2010 do Báo Hoa học trò tổ chức. Năm 2012, Nguyễn Hoài Bảo Anh chinh phục được trái tim của 2 ca sỹ Thu Minh cùng nam ca sỹ nhạc rock Trần Lập trong cuộc thi Giọng hát Việt bằng chất giọng trong sáng và ngọt ngào. Thậm chí, cô cũng còn được ví là Taylor Swift phiên bản Việt lúc thể hiện ca khúc Safe and sound một cách khá trong trẻo, ngọt ngào cùng với hình tượng không khác như một công chúa. Tại thời điểm sau đó, Bảo Anh luôn gắn liền với các bản Ballad ngọt ngào, và truyền cảm. Cô đã nhanh chóng được các khán giả yêu mến với hàng loạt bài hit như là Anh muốn em sống sao, Và em đã biết mình yêu, Em đã từng yêu… Giữ một hình tượng ngây thơ, công chúa vào một thời gian dài, tới năm 2015, Bảo Anh tham gia vào The Remix và quyết định theo đuổi một hình tượng sexy. Bảo Anh ngày càng trưởng thành nhiều hơn ở trong phong cách âm nhạc cũng như là nhan sắc khiến cho nhiều khán giả hâm mộ bất ngờ. Năm 2016 là một năm thành công vượt trội của Bảo Anh cùng với 2 sản phẩm đình đám là Trái tim em cũng biết đau và Yêu một người vô tâm. Đây là 2 ca khúc đã từng làm mưa, làm gió trên khá nhiều bảng xếp hạng âm nhạc và cũng giúp cho nữ ca sĩ giành được khá nhiều giải thưởng uy tín. 2017 cô hợp tác cùng Bùi Anh Tuấn thể hiện ca khúc Thanh Xuân Của Chúng Ta với giai điệu trẻ trung, sôi động và gần đây nhất sau khi chính thức chia tay Hồ Quang Hiếu thì nữ ca sĩ đã phát hành single Sống Xa Anh Chẳng Dễ Dàng.', 1),
(11, 'FloD, M', '1993-08-06', 'Hà Nội', 1, '', 1),
(12, 'Khắc Việt', '1989-10-04', 'Hà Nội', 1, 'Nickname: Việt Vui Vẻ (do fanclub dành tặng)\r\nĐã tốt nghiệp Học viện Âm nhạc Quốc gia Việt Nam, khoa Thanh nhạc vào năm 2005;\r\nTính đến thời điểm hiện nay đã sáng tác hơn 100 ca khúc, trong đó có một số ca khúc được đông đảo khán giả trẻ yêu thích.\r\nSinh ra và lớn lên ở Yên Bái, trong một gia đình không có ai theo nghệ thuật, bố mẹ là công chức; sau khi học xong phổ thông, Khắc Việt cùng em ruột của mình thi đỗ Nhạc viện Hà Nội (Học viện Âm nhạc Quốc gia bây giờ) vào năm 2005.\r\nTốt nghiệp khoa Thanh nhạc, nhưng Khắc Việt lại bén duyên với con đường sáng tác khi cho ra mắt ca khúc đầu tay với tựa đề \'Quên\' vào năm 2009. Sau khi phát hành một thời gian ngắn, ca khúc \'Quên\' do chính Khắc Việt thể hiện đã trở thành một hit trên mạng vào thời gian đó và liên tục đứng vị trí cao tại các bảng xếp hạng âm nhạc online. Với thành công đó, Khắc Việt đã tiếp tục cho ra đời album online \'Câu Chuyện Tình Yêu\' để chuẩn bị cho con đường ca hát chuyên nghiệp của mình.\r\nĐầu năm 2010, single \'Như Vậy Nhé\' được phát hành online và nhận được rất nhiều sự ủng hộ của khán giả, đặc biệt là cộng đồng mạng. Với chất giọng nam cao, sáng, đầy nội lực nhưng không kém phần tinh tế, Khắc Việt gây ấn tượng với khán giả bằng các ca khúc trữ tình, đậm chất pop-ballad trong thời gian qua. Có thể nói đây là một sở trường mà Khắc Việt đã biết khai thác đúng hướng. Không có thế mạnh về ngoại hình như nhiều ca sĩ hiện nay nhưng Khắc Việt tự tin với âm nhạc mang dấu ấn riêng của mình sẽ khiến cho khán giả \'bắt tai\'. Với âm nhạc, Khắc Việt đặt ra tiêu chí chú trọng phần nghe hơn là phần nhìn.\r\nBên cạnh ca hát thì sáng tác là niềm đam mê của Khắc Việt ngay từ khi bước chân vào con đường ca hát. Sở hữu hơn 100 ca khúc tính đến thời điểm bây giờ, cái tên Khắc Việt đang được nhiều ca sĩ thị trường tìm đến cộng tác cùng trong các dự án âm nhạc của họ. Hiện tại, Khắc Việt đang là sáng tác chính cho một số ca sĩ như Nam Cường, Cao Thái Sơn, Nhật Tinh Anh, Quỳnh Nga, nhóm The Men… Những sáng tác của Khắc Việt như: Yêu Thương Quay Về, Bình Yên Nhé (Cao Thái Sơn); Phải Là Anh, Đoạn Cuối Con Đường (Nam Cường); Chờ Em Trong Đêm (The Men); Suy Nghĩ Trong Anh (Duy Khoa)… là những bài hát đang nằm trong top hot các ca khúc được nghe nhiều nhất trên một số kênh âm nhạc hiện nay.', 1),
(13, 'Lynk Lee', '1988-10-24', 'Bắc Giang', 1, 'Lynk Lee là chàng sĩ trẻ được rất nhiều người biết đến, anh được fan hâm mộ gọi với cái tên thân mật là “chàng ca sĩ của học sinh”. Anh đã sống và làm việc chủ yếu ở tại thủ đô Hà Nội. Anh đã được các khán giả chú ý đến sau khi anh hát những ca khúc về tuổi học trò như là Tạm biệt nhé, bài hát Ngày ấy bạn và tôi… hay các bản cover khoe được chất giọng chứa đầy cảm xúc. Anh là một người yêu âm nhạc, anh chàng đam mê ca hát ngay từ khi anh còn nhỏ tuổi. Anh đã tham gia vào trong các phong trào hoạt động từ lúc anh mới 6 tuổi. Tập sáng tác các bài hát thiếu nhi trong năm 12 tuổi. Anh đã tốt nghiệp THPT với tấm bằng loại giỏi. Năm 2007, thì anh đã theo học tại trường Đại Học Mở Hà Nội thuộc khoa tiếng anh. Các giải thưởng đã đạt được: Giải nhất cuộc thi Tiếng hát SV Viện ĐH Mở Hà Nội năm 2009, 2010. Giải Nhất trong cuộc thi Khuấy động đam mê năm 2010. Giải Nhất cuộc thi Honda BeUnik 11 vào năm 2011. Giải Nhất chung cuộc trong Gameshow My sound do Imuzik được tổ chức vào năm 2011. Lọt vào trong vòng bán kết trong chương trình Vietnam’s Got Talent năm 2013. Các album đã phát hành: Tạm Biệt Nhé (2012) Tiếng Mưa (Single) (2012) Quà Tặng Ngày Yêu (2012) Nếu Có Thể Được Yêu (2012) Hoàng Hôn Tắt (Single) (2013) Ngày Ấy Bạn Và Tôi (2013) Nắm Chặt Tay Anh Nhé (Single) (2013) Cho Tôi Xin Một Vé Đi Tuổi Thơ (Single) (2013) Nhật Ký Lớp Tôi (2014) Tát Nước Đầu Đình (Single) (2015) Việt Nam Quê Tôi (2016) Em Ơi (Single) (2016) Ngày Chia Tay (2017) Chờ Một Ngày Nắng (Single) (2017)', 1),
(14, 'Đức Phúc', '1998-07-15', 'Hà Nội', 1, 'Đức Phúc là quán quân Giọng hát Việt mùa 3 đồng thời là sinh viên trường Đại học Xây dựng Hà Nội. Hiện anh đang hoạt động nghệ thuật với vai trò ca sĩ do công ty Mỹ Tâm Entertainment quản lý. Năm 2015 anh tham gia cuộc thi Giọng hát Việt. Trước khi tham gia Giọng hát Việt anh cũng đã từng tham gia hai cuộc thi khác đó là Vietnam Idol và Vietnam\'s Got Talent nhưng đều bị loại ở ngay vòng đầu. Sau 6 tháng tham gia cuộc thi dưới sự đẫn dắt của Mỹ Tâm vào ngày 20/09/2015 anh chính thức trở thành quán quân nam đầu tiên của Giọng hát Việt với tỷ lệ tin nhắn bình chọn áp đảo 49.25%. Sau hơn 2 tháng kể từ khi đăng quang ngôi vị Quán quân chương trình The Voice, Đức Phúc chính thức giới thiệu đến công chúng và khán giả yêu âm nhạc sản phẩm đầu tay của mình, MV “Chỉ Một Câu”. MV được sự hỗ trợ thực hiện từ Công ty MT Entertainment của ca sĩ Mỹ Tâm. Đây có thể xem là việc làm nhằm hiện thực hóa lời hứa sẽ đồng hành, hỗ trợ cậu học trò nhỏ mà “Họa mi tóc nâu” từng hứa trong cuộc thi The Voice. Không quá bất ngờ nhưng điều này cũng tạo ra nhiều thú vị bởi từ trước đến nay Mỹ Tâm gần như chưa bao giờ chính thức nhận lời hỗ trợ “toàn tập” cho bất kỳ ca sĩ trẻ nào. Với quyết định dìu dắt Đức Phúc từ những bước đi đầu tiên, Mỹ Tâm thêm một lần nữa khẳng định quan điểm mà cô nhiều lần phát biểu trong cuộc thi The Voice, rằng một nhân tố không có lợi thế ngoại hình vẫn có thể khẳng định được vị trí trong showbiz nếu có chiến lược, đường hướng cũng như sự đầu tư đúng mức. MV “Chỉ Một Câu” cũng là sản phẩm gắn mác cá nhân thực thụ đầu tiên của Đức Phúc trên hành trình hoạt động nghệ thuật với tư cách là một ca sĩ - một ca khúc hoàn toàn mới được nhạc sĩ Phạm Toàn Thắng sáng tác riêng cho giọng ca Đức Phúc. Có thể xem MV “Chỉ Một Câu” như một lời tri ân mà Đức Phúc muốn gửi đến khán giả, đặc biệt là những người đã ủng hộ mình xuyên suốt cuộc thi Giọng hát Việt 2015. Nội dung MV xoay quanh câu chuyện tình cảm của một chàng trai dành cho một cô gái nhưng vì nhút nhát nên anh chẳng dám ngỏ lời. Tất cả tâm tư, tình cảm anh đem hết vào những trang thư. Đến một ngày, khi lấy đủ can đảm để ngỏ lời thì chàng trai phát hiện ra sự thật phũ phàng là cô gái đã có bạn trai. Với tâm trạng buồn bã, cô đơn, hụt hẫng, Đức Phúc đã thể hiện hình ảnhmột chàng trai thất tình đầy cảm xúc trong phần kết của MV. Bối cảnh quay MV khá đơn giản, thiên về khai thác tâm lý và cảm xúc để làm nền nâng giọng hát sâu lắng, tình cảm của người hát nhiều hơn là trưng trổ những kỹ thuật, kỹ xảo hoành tráng. Chia sẻ cảm giác của mình, Đức Phúc cho biết: “Lần đầu tiên được hát ca khúc của riêng mình, rồi còn được quay MV nữa nên em vui lắm (cười). Bên cạnh đó, em cũng khá hồi hộp vì không biết khán giả sẽ đón nhận sản phẩm đầu tay của mình như thế nào. Hi vọng mọi người sẽ yêu thích và ủng hộ để em có thêm động lực cho những sản phẩm tiếp theo”. Sản phẩm âm nhạc đầu tay này đã mang về cho Đức Phúc và tác giả giải thưởng \"Ca sĩ thể hiện hiệu quả\" và \"Bài hát của tháng\" trong chương trình Bài hát Việt tháng 11 năm 2015. và giải thưởng \"Ca sĩ được yêu thích nhất\" do khán giả bình chọn trong đêm chung kết Bài hát Việt 2015.. \"Chỉ một câu\" cũng xuất hiện trong danh sách đề cử sơ bộ \"Bài hát của năm\" của Giải thưởng Âm nhạc Cống hiến lần thứ 11. Đầu năm 2016 anh tham gia chương trình VTV Bài hát tôi yêu với MV \"Giấu mặt\". Anh đã giành giải 3 (MV Đồng)', 1),
(15, 'Only C', '1986-02-20', '', 1, 'Vốn có năng khiếu âm nhạc...được bố cho tiếp xúc với âm nhạc và truyền đạt hiểu biết kiến thức âm nhạc từ lúc bé.. Biết chơi Guitar, piano và trống năm 16 tuổi ..và được sở hữu dàn nhạc riêng ở nhà nên tự tập và tự biết chơi các nhạc cụ không qua trường lớp đào tạo Đến năm 18 tuổi bắt đầu mò mẫm các kỹ năng phòng thu : thu âm, mix + master và được đi tu nghiệp học hỏi kỹ năng phòng thu tại Singapore Năm 2009 chính thức làm việc chuyên nghiệp với vai trò là nhạc sỹ - nhà sản xuất âm nhạc với album đầu tay cùng ca sỹ Khổng Tú Quỳnh : Try To Up Anh cũng là nhà sản xuất cho đội của Isaac (thành viên ban nhạc 365) trong chương trình Hòa âm Ánh sáng mùa 1. Các giải thưởng anh đạt được : Ca khúc Song ca/Nhóm ca Được yêu thích nhất Zing Music Awards năm 2015. Top 10 nhạc sĩ được yêu thích nhất Làn Sóng Xanh năm 2015. Top 10 nhạc sĩ được yêu thích nhất Làn Sóng Xanh năm 2016. Sau đó là một loạt những sản phẩm khẳng định vị trí nhất định trong Vpop : + Album Nhận ra - Miu Lê. + Singler Ngày anh xa, Em nhớ Anh - Miu Lê. + Oh my love , Nơi Anh không thuộc vê - 365. + Beautiful girl - Minh Hằng. + Yêu Là Tha Thu (Em Chưa 18 OST) (Single). + Yêu Đi Đừng Sợ (OST Yêu Đi Đừng Sợ) (Single). + Đếm Ngày Xa Em , Não Cá Vàng (Single)- Lou Hoàng. Ngoài ra còn rất nhiều các ca sỹ trẻ khác đang cùng hợp tác với OnlyC. Hiện tại OnlyC đang làm việc trong vai trò Music producer và thức hiện các dự án trong nước cũng như các nước lân cận để hướng tới môi trường làm việc chuyên nghiệp hơn .', 1);

-- --------------------------------------------------------

--
-- Table structure for table `chitietalbum`
--

CREATE TABLE `chitietalbum` (
  `idchitietAlbum` int(10) NOT NULL,
  `LuotngheAlbum` int(10) NOT NULL,
  `NgaydangAlbum` date NOT NULL,
  `idAlbum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietalbum`
--

INSERT INTO `chitietalbum` (`idchitietAlbum`, `LuotngheAlbum`, `NgaydangAlbum`, `idAlbum`) VALUES
(1, 392103, '2017-08-10', 1),
(2, 820563, '2017-10-02', 2),
(3, 852220, '2017-09-20', 3),
(4, 741120, '2017-04-11', 4),
(5, 650123, '2016-12-12', 5),
(6, 6451895, '2017-10-20', 6),
(7, 2015450, '2016-01-20', 7);

-- --------------------------------------------------------

--
-- Table structure for table `chitietbaihat`
--

CREATE TABLE `chitietbaihat` (
  `idChitietbaihat` int(10) NOT NULL,
  `imageBaihat` text NOT NULL,
  `NgaydangBaihat` date NOT NULL,
  `LuotngheBaihat` int(10) NOT NULL,
  `LuottaiBaihat` int(10) NOT NULL,
  `LinkBaihat` varchar(255) NOT NULL,
  `idBaihat` int(10) NOT NULL,
  `idCasi` int(10) NOT NULL,
  `idTheloai` int(10) NOT NULL,
  `idPlaylist` int(10) NOT NULL,
  `idChitietAlbum` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chitietbaihat`
--

INSERT INTO `chitietbaihat` (`idChitietbaihat`, `imageBaihat`, `NgaydangBaihat`, `LuotngheBaihat`, `LuottaiBaihat`, `LinkBaihat`, `idBaihat`, `idCasi`, `idTheloai`, `idPlaylist`, `idChitietAlbum`) VALUES
(1, 'nd7.jpg', '2017-03-20', 20245455, 1450630, 'audio/Chohoghediem.mp3', 5, 1, 1, 1, 1),
(2, 'nd3.jpg', '2017-09-01', 181370151, 15203360, 'audio/Emgaimua.mp3', 1, 2, 1, 2, 2),
(3, 'nd17.jpg', '2016-11-14', 89851992, 9562310, 'audio/Choemgananhthemchutnua.mp3', 2, 2, 1, 3, 3),
(4, 'nd19.jpg', '2017-03-15', 62393348, 7412650, 'audio/Anhdaquenvoicodon.mp3', 4, 3, 3, 4, 4),
(5, 'nd4.jpg', '2017-10-12', 47816221, 10256944, 'audio/Embiet.mp3', 6, 4, 1, 5, 5),
(6, 'nd1.jpg', '2017-07-01', 79561569, 19852663, 'audio/Chieuhomay.mp3', 3, 5, 1, 6, 6),
(7, 'nd18.jpg', '2016-10-19', 11491106, 5642201, 'audio/Daloyeuemnhieu.mp3', 8, 7, 1, 7, 7),
(8, 'nd20.jpg', '2016-01-10', 100795233, 45956332, 'audio/Sautatca.mp3', 7, 8, 1, 8, 1),
(9, 'nd21.jpg', '2016-04-15', 82506302, 56042321, 'audio/Lamnguoiyeuanhnhebaby.mp3', 9, 9, 1, 8, 6),
(10, 'nd22.jpg', '2017-11-13', 23512340, 15032678, 'audio/songxaanhchangdedang.mp3', 10, 10, 1, 11, 4),
(11, 'nd23.jpg', '2015-11-20', 12503124, 3506120, 'audio/aichoai.mp3', 11, 11, 3, 12, 2),
(12, 'nd24.jpg', '2016-11-03', 57451264, 54213648, 'audio/muatronglong.mp3', 12, 4, 1, 15, 7),
(13, 'nd9.jpg', '2017-11-29', 15326421, 6451351, 'audio/chuyentinhtoi.mp3', 13, 12, 1, 2, 7),
(14, 'nd25.jpg', '2016-05-11', 71456240, 46215104, 'audio/anhthegioivaem.mp3', 14, 2, 3, 15, 5),
(15, 'nd26.jpg', '2017-08-16', 8451203, 2120450, 'audio/chomotngaynang.mp3', 15, 13, 1, 9, 3),
(16, 'nd27.jpg', '2017-10-26', 18334150, 610214, 'audio/taconyeunhau.mp3', 17, 14, 1, 14, 7),
(17, 'nd28.jpg', '2015-12-24', 191547951, 54123541, 'audio/demngayxaem.mp3', 18, 15, 1, 12, 4);

-- --------------------------------------------------------

--
-- Table structure for table `nhacsi`
--

CREATE TABLE `nhacsi` (
  `idNhacsi` int(10) NOT NULL,
  `HotenNhacsi` varchar(50) NOT NULL,
  `NgaysinhNhacsi` date NOT NULL,
  `QuequanNhacsi` varchar(255) NOT NULL,
  `TieusuNhacsi` text NOT NULL,
  `idQuocgia` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nhacsi`
--

INSERT INTO `nhacsi` (`idNhacsi`, `HotenNhacsi`, `NgaysinhNhacsi`, `QuequanNhacsi`, `TieusuNhacsi`, `idQuocgia`) VALUES
(1, 'Nguyễn Duy Anh', '1993-10-20', 'Hà Nội', 'Nguyễn Duy Anh bắt đầu tiếp xúc với âm nhạc vào năm nhất Đại học khi tham gia ca hát ở trường. Khoảng thời gian đó Duy Anh cũng may mắn đạt được 1 số giải thưởng như : Huy chương bạc tiếng hát sinh viên toàn quốc, Giải nhất giọng hát vàng mùa xuân tinh yêu TPHCM - cung văn hóa Loa Động, Giải ba tiếng hát phát thanh, Giải ba tiếng hát toàn ngành du lịch, Giải nhất đơn ca Đại Học Tôn Đức Thắng', 1),
(2, 'Mr Siro', '1982-11-18', 'Tp Hồ Chí Minh', 'Mr. Siro sinh năm 1982, tên thật là Vương Quốc Tuân, được biết đến là một nhạc sỹ có khả năng tự trình bày những ca khúc do chính anh sáng tác được khán giả đặc biệt yêu thích', 1),
(3, 'Soobin Hoàng Sơn', '1992-10-09', 'Hà Nội', 'Soobin Hoàng Sơn sinh ra là con trai duy nhất trong một gia đình có truyền thống làm nghệ thuật với bố là một nhạc sĩ và nghệ nhân nhạc cụ dân tộc. Nên từ nhỏ anh đã biết chơi đàn bầu, piano.', 1),
(4, 'Trần Anh Quân', '1993-09-21', 'Thanh Hóa', '- Trần Anh Quân là nam ca sĩ trẻ được đông đảo khán giả yêu nhạc biết đến và yêu mến sau cuộc thi Việt Nam Idol 2013.\r\n- Với chất giọng ấm áp và sâu lắng Trần Anh Quân khá thành công với dòng nhạc ballad, khi trong tất cả các đêm thi anh đều chọn cho mình thể loại nhạc này để thể hiện. Anh được mọi người gọi là \"Hoàng tử ballad\" ngay sau khi kết thúc cuộc thi.', 1),
(5, 'Nguyễn Khắc Hưng', '1992-12-12', 'Yên Bái', 'Khắc Hưng là em trai ca sĩ Khắc Việt. Anh là cựu sinh viên của Học viện Âm nhạc Quốc gia Việt Nam. Những sáng tác đầu tiên của Khắc Việt có sự phụ giúp của em trai trong phần phối khí. Hiện tại, Khắc Hưng đang là nhạc sĩ, nhà sản xuất trẻ có tiếng tại miền Bắc, anh chính là người đứng sau một số hit của các ca sĩ trẻ như Nguyễn Trần Trung Quân, Min, Erik, Trọng Hiếu, Miu Lê,...', 1),
(6, 'Tăng Nhật Tuệ', '1986-12-24', 'Đông Anh, Hà Nội', 'Tăng Nhật Tuệ tên thật là Lê Duy Linh, sinh ngày 24 tháng 12 năm 1986, nguyên quán huyện Đông Anh, Hà Nội. Từ khi còn nhỏ, anh đã theo học múa ba lê, học hát và nhiều sinh hoạt khác tại Cung Văn hóa Thiếu nhi Hà Nội. Năm 2003, anh đỗ vào Trường Cao đẳng Văn hóa Nghệ thuật Hà Nội, khoa thanh nhạc.\r\nTăng Nhật Tuệ là một người không có duyên với các cuộc thi. Năm 2006, anh từng tham gia dự thi Sao Mai điểm hẹn nhưng không lọt vào vòng chung kết. Đối với anh, đây là thất bại lớn nhất trong đời', 1),
(7, 'Khắc Việt', '1987-08-30', 'Yên Bái', 'Khắc Việt tên thật là Nguyễn Khắc Việt (sinh ngày 30 tháng 8 năm 1987) là một ca sĩ, nhạc sĩ Việt Nam. Anh theo dòng nhạc pop-ballad.\r\nSinh ra và lớn lên ở Yên Bái, trong một gia đình không có ai theo nghệ thuật, bố mẹ là công chức; sau khi học xong phổ thông trung học, Khắc Việt cùng em ruột của mình là Khắc Hưng thi đỗ vào Nhạc viện Hà Nội (Học viện Âm nhạc Quốc gia bây giờ) vào năm 2005. Vì gia đình không dư dả về kinh tế, để trang trải cuộc sống, Khắc Việt từng phải đi bán xăng và hát lót suốt 3 năm trời.', 1),
(8, 'Huỳnh James', '1986-11-14', 'Phan Thiết', 'Sinh sống và làm việc tại Phan Thiết, xuất thân là một BBoy chơi Breakdance từ năm 2004, sau đó anh bắt đầu tìm hiểu Rap vào năm 2005. Anh chơi song song hai thể loại, sống trong niềm đam mê HipHop và duy trì đến ngày hôm nay. Anh được nhiều bạn trẻ underground yêu thích với bản tính hài hước, nhạc anh viết với thể loại nhạc vui tươi mang đến sự thoải mái thư giản cho người nghe. Anh bắt đầu làm việc và hợp tác với phòng thu âm Mondo Records và cho ra các sản phẩm chất lượng mang đậm chất underground. Những bài hát đang là tâm điểm của các bạn trẻ và giới Underground. - Cho Họ Ghét Đi Em - Huỳnh James - Quăng Tao Cái Boong - Huỳnh James ft. Pjnboys - Dân Chơi Tỉnh Lẻ - Huỳnh James ft. Pjnboys - Bê Rồi Ông Cố Ơi - Huỳnh James ft. Pjnboys', 1),
(9, 'Nguyen Jenda', '1992-11-09', 'Hà Nội', 'Nhóm nhạc 3 chú bộ đội gồm 3 thành viên: 1. Nguyên Jenda tên thật Cao Trung Nguyên nhạc sĩ 2. Tuấn đen Tên thật Vừ Mí Tuấn ca sĩ 3. Mạnh Mh tên thật Nông Đức Mạnh ca sĩ Cả ba đến với nhau vì đam mê âm nhạc . mặc dù chưa từng học qua trường lớp về âm nhạc nhưng nhóm được cộng đồng mạng rất yêu thích vì sự tươi vui yêu đời trong các clip hát đơn giản của nhóm. ngoài ra những bài hát của nhóm còn được các ca sĩ tìm đến và thể hiện lại như: \" Đếm ngày xa em\" \"Giá như anh lặng im \" \" anh xấu xí chứ không xấu xa \" đều có vị trí khá cao trên các website âm nhạc như zing, nhaccuatui. Hiện tại nhóm vẫn còn rất nhìu tác phẩn khác đang trong quá trình hoàn thiện. Nguyên Jenda có tên thật là Cao Trung Nguyên, anh sinh vào ngày 10/08/1995, chàng lính này đến từ thôn Hòn Dù, của huyện Khánh Vĩnh, thuộc tỉnh Khánh Hòa. Hiện tại, Nguyên hiện đang theo học về chuyên ngành Vận tải tại Học viện Hậu Cần. Anh chàng này đã được cư dân mạng biết đến qua các video bài hát do chính mình tự sáng tác, tự đệm đàn kết hợp cùng với 2 chàng trai ở trong đơn vị thể hiện.', 1),
(10, 'FloD, M', '1993-11-20', 'Hà Nội', '', 1),
(11, 'Trịnh Đình Quang', '1991-11-06', 'Thanh Hóa', 'Sinh ra ở mảnh đất xứ Thanh, trong một gia đình không có ai theo hoạt động nghệ thuật. Bố mẹ làm nông. Sau khi tốt nghiệp phổ thông, Trịnh Đình Quang đã quyết định Nam tiến để theo đuổi đam mê nghệ thuật của mình. Tốt nghiệp trường Đại học văn hóa nghệ thuật khoa Piano năm 2012. Anh tự học thu âm, hòa âm phối khí từ lớp 11. Chạy theo đam mê, năm 2012 vào Sài Gòn lập nghiệp. Sau nhiều khó khăn Trịnh Đình Quang đang là nhà sản xuất âm nhạc ở Qstudio cũng là phòng thu của anh.\r\n\r\nBắt đầu từ những bản cover như \"Chắc ai đó sẽ về\", \"Âm thầm bên em\", \"Có anh ở đây rồi\",... tiếng hát của Trịnh Đình Quang đã dần được khán giả công nhận, đồng thời những ca khúc do chính anh sáng tác và thể hiện như \"Thất tình\", \"Nếu không thể đến với nhau\", \"Con nợ mẹ\", \"Nếu em còn tồn tại\",... cũng đã trở thành những ca khúc hit, lọt top những bài hát được yêu thích trên các trang nghe nhạc trực tuyến. \r\n\r\nĐặc biệt với bản hit \"Thất tình\", tên tuổi của Trịnh Đình Quang mới thực sự được nhiều người biết đến một cách rộng rãi.\r\nHiện tại anh đang hợp tác với những ca sỹ như Hồ Quang Hiếu, The Men, Thiên Ân, Thiên Dũng, Chu Hiểu Minh, Bảo Phúc, Lê Chí Trung, Hồ Việt Trung, Châu Khải Phong. Ngoài niềm đam mê ca hát Trịnh Đình Quang còn chạy theo niềm đam mê sáng tác và đã có 1 số sáng tac HIT như: Một Tình Yêu Đúng Nghĩa – Hồ Quang hiếu, Tìm Em – Hồ Quang Hiếu, Nếu Không Thể Đến Với Nhau - The Men, Anh Vẫn Luôn Là Anh – Chu Hiểu Minh, Quay Về Còn Kịp – Thiên Dũng… ', 1),
(12, 'Phan Mạnh Quỳnh', '1990-01-10', 'Nghệ An', 'Phan Mạnh Quỳnh sinh ra và lớn lên ở xóm Đồng Hà, xã Diễn Vạn, huyện Diễn Châu, tỉnh Nghệ An. Từ nhỏ, Phan Mạnh Quỳnh có đam mê sáng tác nhạc. Năm 2009, Phan Mạnh Quỳnh đậu Trường Đại học Công nghiệp Thành phố Hồ Chí Minh và vào Thành phố Hồ Chí Minh để học tập. Phan Mạnh Quỳnh là tác giả của nhiều bản hit mà ca sĩ Ưng Hoàng Phúc, Khởi My, Hồ Quang Hiếu, Miu Lê... từng thể hiện. Không chỉ sáng tác, anh còn được cộng đồng mạng yêu mến khi tự thể hiện các ca khúc của mình với chất giọng lạ, trầm ấm và gần gũi với cuộc sống như \"Người yêu cũ\", \"Nước ngoài\", \"Bước qua thế giới\", \"Mất hy vọng\", \"Khi phải quên đi\"... Tháng 9 năm 2015, Phan Mạnh Quỳnh phát hành album Vợ người ta và thành công lớn với ca khúc chủ đề cùng tên đã trở thành một hiện tượng trong năm 2015. Ca khúc \"Vợ người ta\" đã lập kỷ lục đạt 6 triệu lượt nghe chỉ sau 2 tuần phát hành (chỉ tính riêng trên một trang nhạc trực tuyến), đứng Top 5 cho ba hạng mục giải thưởng của Zing Music Awards: Ca khúc của năm, Album của năm và Music Video của năm. Tính đến tháng 12 năm 2015, \"Vợ người ta\" đã cán mốc 100 triệu lượt nghe và 32 triệu lượt xem trên kênh âm nhạc trực tuyến. Ca khúc Vợ người ta được ca sĩ trình bày lại trong tập 7, chương trình Hội ngộ danh hài năm 2016. Năm 2016, Phan Mạnh Quỳnh đã sáng tác và biểu diễn bài hát mới \"Hồi Ức\" trong chương trình Sing My Song (Bài Hát Hay Nhất) Tập 7. Với bài hát Vợ người ta đã giúp Phan Mạnh Quỳnh nhận các giải thưởng: -Tại lễ trao giải Zing Music Awards 2015. -Ca khúc Soul/R&B được yêu thích nhất. -Ca khúc được chia sẻ nhiều nhất cộng đồng mạng. Tại chương trình Vietnam Top Hits 2015: -Top năm ca khúc của năm. -Hiện tượng âm nhạc 2015.', 1),
(13, 'Lynk Lee', '1988-10-24', 'Bắc Giang', 'Lynk Lee là chàng sĩ trẻ được rất nhiều người biết đến, anh được fan hâm mộ gọi với cái tên thân mật là “chàng ca sĩ của học sinh”. Anh đã sống và làm việc chủ yếu ở tại thủ đô Hà Nội. Anh đã được các khán giả chú ý đến sau khi anh hát những ca khúc về tuổi học trò như là Tạm biệt nhé, bài hát Ngày ấy bạn và tôi… hay các bản cover khoe được chất giọng chứa đầy cảm xúc. Anh là một người yêu âm nhạc, anh chàng đam mê ca hát ngay từ khi anh còn nhỏ tuổi. Anh đã tham gia vào trong các phong trào hoạt động từ lúc anh mới 6 tuổi. Tập sáng tác các bài hát thiếu nhi trong năm 12 tuổi. Anh đã tốt nghiệp THPT với tấm bằng loại giỏi. Năm 2007, thì anh đã theo học tại trường Đại Học Mở Hà Nội thuộc khoa tiếng anh. Các giải thưởng đã đạt được: Giải nhất cuộc thi Tiếng hát SV Viện ĐH Mở Hà Nội năm 2009, 2010. Giải Nhất trong cuộc thi Khuấy động đam mê năm 2010. Giải Nhất cuộc thi Honda BeUnik 11 vào năm 2011. Giải Nhất chung cuộc trong Gameshow My sound do Imuzik được tổ chức vào năm 2011. Lọt vào trong vòng bán kết trong chương trình Vietnam’s Got Talent năm 2013. Các album đã phát hành: Tạm Biệt Nhé (2012) Tiếng Mưa (Single) (2012) Quà Tặng Ngày Yêu (2012) Nếu Có Thể Được Yêu (2012) Hoàng Hôn Tắt (Single) (2013) Ngày Ấy Bạn Và Tôi (2013) Nắm Chặt Tay Anh Nhé (Single) (2013) Cho Tôi Xin Một Vé Đi Tuổi Thơ (Single) (2013) Nhật Ký Lớp Tôi (2014) Tát Nước Đầu Đình (Single) (2015) Việt Nam Quê Tôi (2016) Em Ơi (Single) (2016) Ngày Chia Tay (2017) Chờ Một Ngày Nắng (Single) (2017)', 1);

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

CREATE TABLE `playlist` (
  `idPlaylist` int(10) NOT NULL,
  `tenPlaylist` varchar(50) NOT NULL,
  `idThanhvien` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `playlist`
--

INSERT INTO `playlist` (`idPlaylist`, `tenPlaylist`, `idThanhvien`) VALUES
(1, 'Playlist 1', 1),
(2, 'Playlist 2', 1),
(3, 'Playlist 3', 1),
(4, 'Playlist 4', 2),
(5, 'Playlist 5', 2),
(6, 'Playlist 6', 3),
(7, 'Playlist 7', 4),
(8, 'Playlist 8', 4),
(9, 'Playlist 9', 5),
(10, 'Playlist 10', 6),
(11, 'Playlist 11', 6),
(12, 'Playlist 12', 7),
(13, 'Playlist 13', 7),
(14, 'Playlist 14', 8),
(15, 'Playlist 15', 9);

-- --------------------------------------------------------

--
-- Table structure for table `quocgia`
--

CREATE TABLE `quocgia` (
  `idQuocgia` int(10) NOT NULL,
  `TenQuocgia` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `quocgia`
--

INSERT INTO `quocgia` (`idQuocgia`, `TenQuocgia`) VALUES
(1, 'Việt Nam'),
(2, 'Âu - Mỹ\r\n'),
(3, 'Trung Quốc '),
(4, 'Hàn Quốc');

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `idThanhvien` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `HotenThanhvien` varchar(50) NOT NULL,
  `GioitinhThanhvien` tinyint(1) NOT NULL,
  `SdtThanhvien` int(11) NOT NULL,
  `DiachiThanhvien` varchar(255) NOT NULL,
  `NgaysinhThanhvien` date NOT NULL,
  `NgayDangki` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`idThanhvien`, `username`, `password`, `HotenThanhvien`, `GioitinhThanhvien`, `SdtThanhvien`, `DiachiThanhvien`, `NgaysinhThanhvien`, `NgayDangki`) VALUES
(1, 'User name 1', '123456', 'Thành Viên 1', 1, 942898298, '180 Cao Lỗ, Phường 1, Quận 8, TP Hồ Chí Minh', '1996-05-29', '2017-07-20'),
(2, 'User name 2', '123456789', 'Thành Viên 2', 0, 942898297, '205 Lý Thường Kiệt, Phường 6, Quận 11, TP Hồ Chí Minh', '1997-05-10', '2016-11-26'),
(3, 'User name 3', '123456', 'Thành Viên 3', 1, 942898296, '180 Cao Lỗ, Phường 1 , Quận 8, Tp Hồ Chí Minh', '1995-04-20', '2015-03-09'),
(4, 'User name 4', '123456789', 'Thành Viên 4', 1, 942898295, '180 Cao Lỗ, Phường 1 , Quận 8, Tp Hồ Chí Minh', '1994-05-19', '2017-10-12'),
(5, 'User name 5', '123456', 'Thành Viên 5', 0, 942898294, '180 Cao Lỗ, Phường 1 , Quận 8, Tp Hồ Chí Minh', '1996-06-07', '2017-11-10'),
(6, 'User name 6', '123456789', 'Thành Viên 6', 0, 942898293, '210 Tạ Quang Bữu, Phường 1 , Quận 8, Tp Hồ Chí Minh', '1996-06-07', '2016-12-12'),
(7, 'User name 7', '123456', 'Thành Viên 7', 1, 942898292, '160 Tạ Quang Bữu, Phường 1 , Quận 8, Tp Hồ Chí Minh', '1998-10-21', '2016-01-02'),
(8, 'User name 8', '123456789', 'Thành Viên 8', 1, 942898291, '120 Cao Lỗ, Phường 1 , Quận 8, Tp Hồ Chí Minh', '1999-12-10', '2017-04-21'),
(9, 'User name 9', '123456789', 'Thành Viên 9', 0, 942898290, '230 Cao Lỗ, Phường 1 , Quận 8, Tp Hồ Chí Minh', '1994-10-11', '2015-06-12');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `idTheloai` int(10) NOT NULL,
  `TenTheloai` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`idTheloai`, `TenTheloai`) VALUES
(1, 'Nhạc Trẻ  '),
(2, 'Nhạc Trữ Tình '),
(3, 'Nhạc Balad - Pop '),
(4, 'Nhạc Không Lời'),
(5, 'Nhạc EDM'),
(6, 'Aucoustic'),
(7, 'Nhạc US-UK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`idAlbum`);

--
-- Indexes for table `baihat`
--
ALTER TABLE `baihat`
  ADD PRIMARY KEY (`idBaihat`),
  ADD KEY `baihat_nhacsi` (`idNhacsi`),
  ADD KEY `baihat_quocgia` (`idQuocgia`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`idBinhluan`),
  ADD KEY `binhluan_thanhvien` (`idThanhvien`),
  ADD KEY `binhluan_chitietbaihat` (`idChitietbaihat`);

--
-- Indexes for table `casi`
--
ALTER TABLE `casi`
  ADD PRIMARY KEY (`idCasi`),
  ADD KEY `casi_quocgia` (`idQuocgia`);

--
-- Indexes for table `chitietalbum`
--
ALTER TABLE `chitietalbum`
  ADD PRIMARY KEY (`idchitietAlbum`),
  ADD KEY `chitietalbum_album` (`idAlbum`);

--
-- Indexes for table `chitietbaihat`
--
ALTER TABLE `chitietbaihat`
  ADD PRIMARY KEY (`idChitietbaihat`),
  ADD KEY `chitietbaihat_baihat` (`idBaihat`),
  ADD KEY `chitietbaihat_casi` (`idCasi`),
  ADD KEY `chitietbaihat_theloai` (`idTheloai`),
  ADD KEY `chitietbaihat_playlist` (`idPlaylist`),
  ADD KEY `chitietbaihat_chitietalbum` (`idChitietAlbum`);

--
-- Indexes for table `nhacsi`
--
ALTER TABLE `nhacsi`
  ADD PRIMARY KEY (`idNhacsi`),
  ADD KEY `nhacsi_quocgia` (`idQuocgia`);

--
-- Indexes for table `playlist`
--
ALTER TABLE `playlist`
  ADD PRIMARY KEY (`idPlaylist`),
  ADD KEY `playlist_thanhvien` (`idThanhvien`);

--
-- Indexes for table `quocgia`
--
ALTER TABLE `quocgia`
  ADD PRIMARY KEY (`idQuocgia`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`idThanhvien`);

--
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`idTheloai`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `idAlbum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `baihat`
--
ALTER TABLE `baihat`
  MODIFY `idBaihat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `idBinhluan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `casi`
--
ALTER TABLE `casi`
  MODIFY `idCasi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `chitietalbum`
--
ALTER TABLE `chitietalbum`
  MODIFY `idchitietAlbum` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `chitietbaihat`
--
ALTER TABLE `chitietbaihat`
  MODIFY `idChitietbaihat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `nhacsi`
--
ALTER TABLE `nhacsi`
  MODIFY `idNhacsi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `playlist`
--
ALTER TABLE `playlist`
  MODIFY `idPlaylist` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `quocgia`
--
ALTER TABLE `quocgia`
  MODIFY `idQuocgia` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `idThanhvien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `idTheloai` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `baihat`
--
ALTER TABLE `baihat`
  ADD CONSTRAINT `baihat_nhacsi` FOREIGN KEY (`idNhacsi`) REFERENCES `nhacsi` (`idNhacsi`),
  ADD CONSTRAINT `baihat_quocgia` FOREIGN KEY (`idQuocgia`) REFERENCES `quocgia` (`idQuocgia`);

--
-- Constraints for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD CONSTRAINT `binhluan_chitietbaihat` FOREIGN KEY (`idChitietbaihat`) REFERENCES `chitietbaihat` (`idChitietbaihat`),
  ADD CONSTRAINT `binhluan_thanhvien` FOREIGN KEY (`idThanhvien`) REFERENCES `thanhvien` (`idThanhvien`);

--
-- Constraints for table `casi`
--
ALTER TABLE `casi`
  ADD CONSTRAINT `casi_quocgia` FOREIGN KEY (`idQuocgia`) REFERENCES `quocgia` (`idQuocgia`);

--
-- Constraints for table `chitietalbum`
--
ALTER TABLE `chitietalbum`
  ADD CONSTRAINT `chitietalbum_album` FOREIGN KEY (`idAlbum`) REFERENCES `album` (`idAlbum`);

--
-- Constraints for table `chitietbaihat`
--
ALTER TABLE `chitietbaihat`
  ADD CONSTRAINT `chitietbaihat_baihat` FOREIGN KEY (`idBaihat`) REFERENCES `baihat` (`idBaihat`),
  ADD CONSTRAINT `chitietbaihat_casi` FOREIGN KEY (`idCasi`) REFERENCES `casi` (`idCasi`),
  ADD CONSTRAINT `chitietbaihat_chitietalbum` FOREIGN KEY (`idChitietAlbum`) REFERENCES `chitietalbum` (`idchitietAlbum`),
  ADD CONSTRAINT `chitietbaihat_playlist` FOREIGN KEY (`idPlaylist`) REFERENCES `playlist` (`idPlaylist`),
  ADD CONSTRAINT `chitietbaihat_theloai` FOREIGN KEY (`idTheloai`) REFERENCES `theloai` (`idTheloai`);

--
-- Constraints for table `nhacsi`
--
ALTER TABLE `nhacsi`
  ADD CONSTRAINT `nhacsi_quocgia` FOREIGN KEY (`idQuocgia`) REFERENCES `quocgia` (`idQuocgia`);

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_thanhvien` FOREIGN KEY (`idThanhvien`) REFERENCES `thanhvien` (`idThanhvien`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
