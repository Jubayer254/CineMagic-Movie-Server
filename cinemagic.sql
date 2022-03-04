-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2022 at 06:59 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinemagic`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `pass` varchar(20) NOT NULL,
  `con_pass` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`name`, `email`, `gender`, `dob`, `pass`, `con_pass`, `id`) VALUES
('Jubayer Hossen', 'j@gmail.com', 'Male', '2022-02-16', '1111', '1111', 1);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `name` varchar(100) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  `release_date` date NOT NULL,
  `poster` longblob NOT NULL,
  `imdb` float NOT NULL,
  `details` varchar(1000) NOT NULL,
  `link` varchar(100) NOT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`name`, `lang`, `type`, `release_date`, `poster`, `imdb`, `details`, `link`, `id`) VALUES
('Avengers Endgame', 'English', 'Movie', '2021-04-26', 0x312e6a7067, 8.4, 'Avengers: Endgame is a 2019 American superhero film based on the Marvel Comics superhero team the Avengers. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the direct sequel to Avengers: Infinity War (2018) and the 22nd film in the Marvel Cinematic Universe (MCU). Directed by Anthony and Joe Russo and written by Christopher Markus and Stephen McFeely, the film features an ensemble cast including Robert Downey Jr., Chris Evans, Mark Ruffalo, Chris Hemsworth, Scarlett Johansson, Jeremy Renner, Don Cheadle, Paul Rudd, Brie Larson, Karen Gillan, Danai Gurira, Benedict Wong, Jon Favreau, Bradley Cooper, Gwyneth Paltrow, and Josh Brolin. In the film, the surviving members of the Avengers and their allies attempt to reverse the destruction caused by Thanos in Infinity War.', 'https://www.youtube.com/watch?v=TcMBFSGVi1c', 28),
('Black Widow', 'English', 'Movie', '2021-07-09', 0x31392e6a7067, 6.7, 'Black Widow is a 2021 American superhero film based on Marvel Comics featuring the character of the same name. Produced by Marvel Studios and distributed by Walt Disney Studios Motion Pictures, it is the 24th film in the Marvel Cinematic Universe (MCU). The film was directed by Cate Shortland from a screenplay by Eric Pearson, and stars Scarlett Johansson as Natasha Romanoff / Black Widow alongside Florence Pugh, David Harbour, O-T Fagbenle, Olga Kurylenko, William Hurt, Ray Winstone, and Rachel Weisz. Set after the events of Captain America: Civil War (2016), the film sees Romanoff on the run and forced to confront her past.', 'https://drive.google.com/file/d/1DQellCSFSp7FP8Z-1k6bpIt5PLcW2E75/view?usp=sharing', 29),
('Aynabaji', 'Bangla', 'Movie', '2016-09-30', 0x4161696e6162616a692d706f737465722e6a7067, 9.1, 'Aynabaji is a 2016 Bangladeshi crime thriller film directed by Amitabh Reza Chowdhury and produced by Gousul Alam under the banner of Content Matters Production. The film stars Chanchal Chowdhury, Masuma Rahman Nabila and Partha Barua in lead roles.', 'https://www.youtube.com/watch?v=2fNjoiJSjsE', 30),
('Shershaah', 'Hindi', 'Movie', '2021-08-12', 0x5368657273686161682d66756c6c2d6d6f7669652d7265766965772e6a7067, 8.7, 'Shershaah is a 2021 Indian Hindi-language biographical war film directed by Vishnuvardhan in his Hindi film debut and written by Sandeep Shrivastava. The film follows the life of Param Vir Chakra-awardee Captain Vikram Batra, from his first posting in the army to his death in the Kargil War. The film stars Sidharth Malhotra as Vikram Batra and Kiara Advani as his girlfriend Dimple Cheema. The film was produced by Dharma Productions and Kaash Entertainment, with Hiroo Yash Johar, Karan Johar, Apoorva Mehta, Shabbir Boxwala, Ajay Shah and Himanshu Gandhi serving as producers.', 'https://drive.google.com/file/d/1C9rFBVbGNu85FZt3u3L8mHr5Rrx6YHob/view?usp=sharing', 33),
('My Sassy Girl', 'Korean', 'Movie', '2001-07-27', 0x373035363035352e6a7067, 8, 'My Sassy Girl is a 2017 South Korean television drama starring Joo Won, Oh Yeon-seo, Lee Jung-shin and Kim Yoon-hye, based on the 2001 South Korean movie My Sassy Girl by Kwak Jae-yong.', 'https://drive.google.com/file/d/1WmavXYcZuzhNeLvLGEEJQ2Sh8aQ7TXSe/view?usp=sharing', 34),
('Pushpa', 'Telugu', 'Movie', '2021-12-17', 0x7075736870612d6561726c792d7472656e64732d3030312e6a7067, 5, 'Pushpa: The Rise – Part 01 is a 2021 Indian Telugu-language action drama film written and directed by Sukumar. Produced by Mythri Movie Makers in association with Muttamsetty Media, it stars Allu Arjun as the titular character alongside Fahadh Faasil (in his Telugu debut) and Rashmika Mandanna while Jagadeesh Prathap Bandari, Sunil, Rao Ramesh, Dhananjaya, Anasuya Bharadwaj, Ajay and Ajay Ghosh play supporting roles. The first of two cinematic parts, the film depicts the rise of a coolie in the smuggling syndicate of red sandalwood, a rare wood that grows only in the Seshachalam Hills of Andhra Pradesh state.', 'https://drive.google.com/file/d/1KuRY4wPsXhqDlDFIdatWXMBgrJoJtw-S/view?usp=sharing', 35),
('2.0', 'Tamil', 'Movie', '2018-11-19', 0x616b73686179392e6a7067, 6.2, '2.0 is a 2018 Indian Tamil-language science fiction action film directed by S. Shankar who co-wrote the film with B. Jeyamohan. Produced by Subaskaran under the banner of Lyca Productions. As the second instalment in the Enthiran franchise, 2.0 is a standalone sequel to Enthiran (2010), featuring Rajinikanth reprising the roles of Vaseegaran and Chitti as the Robot, alongside Akshay Kumar as Pakshi Rajan and Amy Jackson as Nila and also Sudhanshu Pandey, Adil Hussain, Kalabhavan Shajohn, and K. Ganesh appear in supporting roles. The film follows the conflict between Chitti, the once dismantled humanoid robot, and Pakshi Rajan, a former ornithologist who seeks vengeance upon cell phone users to prevent avian population decline. The soundtrack is composed by A. R. Rahman, with lyrics written by Madhan Karky and Na. Muthukumar.', 'https://www.youtube.com/watch?v=_qOl_7qfPOM', 36),
('Premam', 'Malayalam', 'Movie', '2015-05-19', 0x7072656d616d2d373539312e6a7067, 8.3, 'Premam is a 2015 Indian Malayalam coming of age romance film written, directed and edited by Alphonse Puthren. Produced by Anwar Rasheed for Anwar Rasheed Entertainment, the film stars Nivin Pauly and Sai Pallavi as George and Malar. Along with Madonna Sebastian, Anupama Parameswaran, Shabareesh Varma, Krishna Sankar, Ananth Nag, Siju Wilson and others in the supporting roles and it featured 18 debutant actors.', 'https://www.youtube.com/watch?v=pbgvTikmIMk', 38),
('Our Little Sister', 'Japanese', 'Movie', '2015-06-13', 0x343030302e6a7067, 7.5, 'Our Little Sister is a 2015 Japanese drama film directed by Hirokazu Kore-eda. Three sisters, Sachi Kouda, Yoshino Kouda and Chika Kouda, live in the house of their grandparents in Kamakura. Their parents are divorced. One day, they receive news of the death of their father whom they have not seen in fifteen years. At the funeral, they meet their half-sister Suzu Asano. Suzu is living with her stepmother and stepbrother. Observing the behaviour of the stepmother at the funeral (she tries to pass on the responsibility of addressing the guests to Suzu), Sachi guesses that Suzu looked after their father as he died, not the stepmother. At the train station Sachi spontaneously invites Suzu to come and live with them. Suzu joins the local football team and becomes popular as the relationship develops.', 'https://www.youtube.com/watch?v=NtTeSQFce2A', 40),
('Game of Thrones (Season 1)', 'English', 'Series', '2011-04-17', 0x68747470735f5f5f77696e7465726973636f6d696e672e6e65745f66696c65735f323031395f30345f47616d652d6f662d5468726f6e65732d6c6f676f2d7469746c652d636172642d383530783532342e6a7067, 9.2, 'The first season of the fantasy drama television series Game of Thrones premiered on HBO on April 17, 2011, in the U.S. and concluded on June 19, 2011. It consists of ten episodes, each of approximately 55 minutes. The series is based on A Game of Thrones, the first novel in the A Song of Ice and Fire series by George R. R. Martin, adapted for television by David Benioff and D. B. Weiss.', 'https://drive.google.com/drive/folders/1nLmwx3mu-Thv5aOirsu3Y292a4-krdHU?usp=sharing', 42),
('Mohanagar', 'Bangla', 'Series', '2021-06-25', 0x386235323765643962366433333565313234346566333765646538386333333337656365366539313035316630336234386239353531353330316136323631632e5f52495f565f5454575f2e6a7067, 8.6, 'Mohanagar is a Bangladeshi drama streaming television series created by Ashfaque Nipun. Starring Mosharraf Karim as the Officer in Charge (OC) of Kotwali police station, Dhaka. The series consisting of eight episodes premiered on 25 June 2021 on Hoichoi. Khairul Basar, Shamol Mawla, Nishat Priom, Mostafizur Noor Imran, Nasir Uddin Khan, Zakia Bari Momo, Shahed Ali co-starred.', 'https://www.youtube.com/watch?v=uTrCgrA034A', 43),
('Asur', 'Hindi', 'Series', '2020-03-02', 0x4d5635424f4445794e5445784d6d51744e6a6c6b4e5330304e6d52694c54677a596a41744d7a63794d5451304d5441335a475932586b4579586b467163476465515856794d5445304d7a59304e6a45312e5f56315f2e6a7067, 8.5, 'Asur is a 2020 Indian Hindi-language crime thriller web series, produced by Tanveer Bookwala of Ding Entertainment for the video on demand platform Voot. The series stars Arshad Warsi, Barun Sobti, Sharib Hashmi and Amey Wagh. The series is set in the context of a modern day serial killer having religious ties. Arshad Warsi made his OTT debut through this series.', 'https://www.youtube.com/watch?v=LDirQBvwx7g', 44),
('All of Us Are Dead', 'Korean', 'Series', '2022-01-28', 0x416c6c2d6f662d55732d4172652d446561642d5265766965772e6a7067, 7.6, 'A high school becomes ground zero for a zombie virus outbreak. Trapped students must fight their way out — or turn into one of the rabid infected.', 'https://drive.google.com/drive/folders/11CYHLc-P5dDDNpLUUQ9uGU65BZBeo3AT?usp=sharing', 45),
('Queen', 'Tamil', 'Series', '2019-12-14', 0x717565656e2d74616d696c2d7468652d6d6f7669652d3133393334362e6a7067, 7.7, 'The Queen is a story of a woman in the male-driven worlds of Cinema and Tamil Nadu politics. It is a story of a woman who did not get the happy ending she wanted and yet, was destinys chosen child.', 'https://www.youtube.com/watch?v=7ZnGtM5g9xI', 48),
('Parampara', 'Telugu', 'Series', '2021-12-24', 0x313039333837302d682d3661343237363533343636362e6a7067, 7.6, 'Parampara is an Indian Telugu-language crime drama streaming television series starring Jagapathi Babu, Sarath Kumar, Naveen Chandra, Ishaan and Aakanksha Singh in the lead roles. The series was premiered on Disney+ Hotstar on 24 December 2021.', 'https://www.youtube.com/watch?v=OMdaOOljXvE', 49),
('Menaka', 'Malayalam', 'Series', '2019-09-01', 0x39356639353038353232363732312e356437356635626565313161642e6a7067, 8.2, 'How do you stop a dead man from killing in the future ? This is the story of Ajayan (VK Sreenivas), a failed writer, who turns up at a television show and announces that he is going to commit the perfect 7 murders in 7 days. He starts off by killing his first victim. The rest of the series finds an able police team, under DySP Jacob Anookkaran (Ashwin Kumar), trying to stop a well planned and immaculate series of murders.', 'https://www.youtube.com/watch?v=-5Fxe9S4NrI', 51),
('Death Note', 'Japanese', 'Series', '2015-07-05', 0x44656174682d4e6f74652d4d6f766965732d4578706c61696e65642e6a7067, 7, 'Light Yagami, an ordinary university student, receives a death note which changes his life. The death note awakens his warped sense of justice and genius.', 'https://www.youtube.com/watch?v=nJUGIDn56GQ', 52),
('Boss Baby', 'English', 'Animation', '2017-03-31', 0x48442d77616c6c70617065722d7468652d626f73732d626162792d323031372d706f737465722d637574652d647265616d776f726b732d6d6f7669652d616e696d6174696f6e2d7468652d626f73732d626162792d77686974652d626c75652e6a7067, 5.9, 'A suit-wearing, briefcase-carrying baby pairs up with his 7-year old brother to stop the dastardly plot of the CEO of Puppy Co.', 'https://www.youtube.com/watch?v=k397HRbTtWI', 53),
('I Want to Eat Your Pancreas', 'Japanese', 'Animation', '2018-09-01', 0x4957616e74546f456174596f757250616e63726561735f706f737465722e6a7067, 8.1, 'A high school student discovers one of his classmates, Sakura Yamauchi, is suffering from a terminal illness. This secret brings the two together, as she lives out her final moments.', 'https://drive.google.com/file/d/1mxDqu7yb2-vmff3HFDGQmZ4FsWpLy6p7/view?usp=sharing', 54),
('Extraction', 'English', 'Movie', '2020-04-20', 0x372e6a7067, 6.7, 'Tyler Rake, a fearless black market mercenary, embarks on the most deadly extraction of his career when he iss enlisted to rescue the kidnapped son of an imprisoned international crime lord. After a day at school, Ovi Mahajan – son of an incarcerated Indian drug lord – sneaks out of his house to visit a club with his friend. At the party, Ovi and his friend go to the garage to have a smoke, where they encounter corrupt police officers working for rival drug lord Amir Asif, who shoot Ovi\'s friend and kidnap him. After discovering this, Saju Rav, a former Para (Special Forces) operator and Ovi\'s protector, visits Ovi\'s father in prison. Unwilling to pay the ransom as it will hurt his prestige, Ovi\'s father orders Saju to retrieve his son, threatening to kill Saju\'s own son if he is not willing to do so.', 'https://www.youtube.com/watch?v=L6P3nI6VnlY', 55),
('Wonder Woman 1984', 'English', 'Movie', '2020-12-25', 0x382e6a7067, 5.4, 'Diana must contend with a work colleague and businessman, whose desire for extreme wealth sends the world down a path of destruction, after an ancient artifact that grants wishes goes missing. Wonder Woman 1984 was originally scheduled for a wide theatrical release on June 5, 2020, but was delayed multiple times due to the COVID-19 pandemic. The film premiered on December 15, 2020, via the DC FanDome virtual platform, and was released by Warner Bros. Pictures on December 25, 2020, both theatrically and via the HBO Max streaming service. It received mixed reviews from critics, who praised its depiction of the 1980s, escapist qualities, and Jenkins\'s direction but criticized the plot and screenplay. The film grossed $166 million worldwide against a production budget of $200 million.', 'https://www.youtube.com/watch?v=XW2E2Fnh52w', 56),
('IT', 'English', 'Movie', '2017-09-08', 0x31382e6a7067, 7.3, 'In the summer of 1989, a group of bullied kids band together to destroy a shape-shifting monster, which disguises itself as a clown and preys on the children of Derry, their small Maine town. The following summer, Bill and his friends Richie Tozier, Eddie Kaspbrak, and Stan Uris run afoul of older bullies Henry Bowers, Belch Huggins, Patrick Hockstetter, and Victor Criss. Bill, still haunted by Georgie\'s disappearance, calculates that his brother\'s body may have washed up in a marshy wasteland called the Barrens. He recruits his friends to investigate, believing Georgie may still be alive. Ben Hanscom, one of Bill\'s new classmates, learns that unexplained tragedies and child disappearances have plagued the town for centuries. Targeted by Bowers\' gang, Ben flees into the Barrens and meets Bill\'s group. They find the sneaker of a missing girl named Betty Ripsom, while Patrick is killed by Pennywise while searching the sewers for Ben.', 'https://www.youtube.com/watch?v=FnCdOQsX5kc', 57);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `feedback` varchar(500) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `feedback`, `id`) VALUES
('Jubayer Hossen', 'jhossen191254@bscse.uiu.ac.bd', 'Very Good Website!!!!!', 16),
('Jubayer Hossen', 'jhossen191254@bscse.uiu.ac.bd', 'Feature Rich Website !!!', 17),
('Sharia', 'p.sharia24@gmail.com', 'good job ', 19),
('Jannatul Sadia', 'jannatulsadia56@gmail.com', 'Good Saad!!!!! ', 20);

-- --------------------------------------------------------

--
-- Table structure for table `req`
--

CREATE TABLE `req` (
  `cname` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `lang` varchar(20) NOT NULL,
  `poster` longblob NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `req`
--

INSERT INTO `req` (`cname`, `type`, `lang`, `poster`, `name`, `email`, `id`) VALUES
('Bloodshot', 'Movie', 'English', 0x31302e6a7067, 'Jubayer Hossen', 'jhossen191254@bscse.uiu.ac.bd', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `pass` varchar(20) NOT NULL,
  `con_pass` varchar(20) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `email`, `gender`, `dob`, `pass`, `con_pass`, `id`) VALUES
('Jubayer Hossen', 'jhossen191254@bscse.uiu.ac.bd', 'Male', '2022-02-02', '1234', '1234', 8),
('Jubayer Hossen', 'j191254@bscse.uiu.ac.bd', 'Male', '2022-02-08', '1234', '1234', 11),
('Jubayer Hossen', 'j4@bscse.uiu.ac.bd', 'Male', '2022-02-08', '1234', '1234', 12),
('Jubayer Hossen', 'j2@bscse.uiu.ac.bd', 'Male', '2022-02-07', '1234', '1234', 14),
('Sujon', 'mislam193107@bscse.uiu.ac.bd', 'Male', '2022-02-01', 'ssssssss', 'ssssssss', 15),
('Sharia', 'p.sharia24@gmail.com', 'Female', '2000-07-24', '1234', '1234', 16),
('Akib Rayhan', 'musanna1680@gmail.com', 'Male', '1998-04-08', '1234', '1234', 17),
('Jannatul Sadia', 'jannatulsadia56@gmail.com', 'Female', '2000-01-31', '1234', '1234', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `req`
--
ALTER TABLE `req`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `req`
--
ALTER TABLE `req`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
