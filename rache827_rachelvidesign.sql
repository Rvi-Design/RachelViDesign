-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 02, 2026 at 12:21 PM
-- Server version: 8.4.8-cll-lve
-- PHP Version: 8.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rache827_rachelvidesign`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_ID` tinyint NOT NULL,
  `category_name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_ID`, `category_name`) VALUES
(3, 'Arwork'),
(1, 'Websites'),
(2, 'Logos');

-- --------------------------------------------------------

--
-- Table structure for table `commissions`
--

CREATE TABLE `commissions` (
  `ID` smallint NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reason` mediumtext NOT NULL,
  `esb` varchar(40) DEFAULT NULL,
  `img` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `ID` smallint NOT NULL,
  `name` varchar(80) NOT NULL,
  `email` varchar(100) NOT NULL,
  `reason` mediumtext NOT NULL,
  `esd` varchar(40) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `ID` smallint NOT NULL,
  `name` varchar(50) NOT NULL,
  `h2` varchar(60) DEFAULT NULL,
  `category` varchar(20) NOT NULL,
  `blurb` mediumtext NOT NULL,
  `link` varchar(35) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `medium` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `imgMain` varchar(20) NOT NULL,
  `altMain` varchar(255) NOT NULL,
  `imgLeftbox` varchar(20) NOT NULL,
  `altLeftbox` varchar(255) NOT NULL,
  `imgRightbox` varchar(20) NOT NULL,
  `altRightbox` varchar(255) NOT NULL,
  `imgLongbox` varchar(20) NOT NULL,
  `altLongbox` varchar(255) NOT NULL,
  `imgBigbox` varchar(20) NOT NULL,
  `altBigbox` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`ID`, `name`, `h2`, `category`, `blurb`, `link`, `medium`, `imgMain`, `altMain`, `imgLeftbox`, `altLeftbox`, `imgRightbox`, `altRightbox`, `imgLongbox`, `altLongbox`, `imgBigbox`, `altBigbox`) VALUES
(1, 'Wild Rose Foundry', 'E-Commerce Website — SAIT Final Project', '1', 'As my final project at SAIT, I designed and built a fully functional e-commerce website from the ground up. The process began with planning and database design, including creating an ERD and later revising it to reflect new requirements, intentionally mirroring the realities of client feedback and scope changes.\r\n\r\nOn the technical side, I batch-processed over 160 product images into optimized thumbnails and item photos, built dynamic product listings using PHP and database queries, and styled the site into a cohesive, polished experience with HTML and CSS. JavaScript brought the interface to life through interactive product carousels and a festive seasonal touch: a live Christmas countdown.\r\n\r\nThis project took approximately 80 hours to complete as a solo build and became a major learning milestone for me. Beyond the technical skills, it helped me better understand my own coding habits, identify areas for growth, and solidify best practices that now inform how I approach larger, more complex projects.', NULL, NULL, 'WRFmain.png', 'A stylized rose with metal, wood, and stone textures. Intended to evoke the Albertan \'Wild Rose\' provincial flower.', 'WRFlb.png', 'A screen capture from the main page of the wild rose foundry website. It depicts item listings of mugs and pottery, on a dark background.', 'WRFrb.png', 'A golden stylized rose icon.', 'WRFlong.png', 'A screen capture from the wild rose foundry website. It show the main item catalogue page, with various items displaying.', 'WRFbb.png', 'A close up of a pottery tray product. Beige and brown in colour, with a speckled glaze'),
(2, 'Th3 Rice Lab', 'Th3 Rice Lab — Client Website', '1', 'Over the summer, I collaborated with a computer science peer to design and build a custom website for <span>Th3 Rice Lab </span>, a new nail technician business. I took on the role of front-end designer, working closely with the client to translate their vision into a clean, functional interface while ensuring the front end communicated seamlessly with the back end and database.\r\n\r\nThe site was built using a MERN stack, with TypeScript, JavaScript, HTML, and CSS through React and Tailwind. Beyond development, I also created a range of custom visual assets for the project, including an area-of-operation map, nail size and shape charts, and multiple logo iterations to support the brand’s identity.\r\n\r\nThe project took approximately 60 hours to complete and resulted in a fully functional platform featuring an admin dashboard, booking and payment systems, calendar integration, and tools to log and monitor revenue and expenses. This project gave me hands-on experience balancing technical constraints, client needs, and design clarity in a production-ready environment.', 'https://th3ricelab.ca/', NULL, 'TRLmain.png', '', 'TRLlb.png', '', 'TRLrb.png', '', 'TRLlong.png', '', 'TRLbb.png', ''),
(3, 'Sweet Peach', 'SweetPeach — Logo & Brand Identity', '2', '<span>SweetPeach</span> is a concept skincare brand I developed as a branding and identity exploration. The goal was to create a logo system and brand guidelines that felt down-to-earth, modern, and approachable, while still appealing to a young, feminine target audience.\r\n\r\nThe visual identity centers around a minimal, post-modern peach mark—built from soft geometric shapes and a tapered, expressive stroke—to suggest both the product inspiration and the brand’s playful tone. A warm, muted color palette reinforces a sense of softness and care, helping the brand feel inviting without becoming overly delicate.\r\n\r\nTo support the logo, I designed a custom display typeface inspired by rounded citrus forms and fuzzy, organic textures, blending the friendliness of fonts like Tangelo with a more refined, contemporary edge. Together, the logo and typography strike a balance between playful and polished, giving SweetPeach a cohesive, flexible foundation for future packaging and marketing.', NULL, NULL, 'SPmain.png', 'A minimalist and simplified stylized peach logo for skincare brand \"sweet Peach\"', 'SPlb.png', '', 'SPrb.png', '', 'SPlong.png', '', 'SPbb.png', ''),
(4, 'Jewels by Jules', 'Jewels by Jules — Logo Design', '2', 'Jewels by Jules is a logo design project created for a local Calgary-based aesthetician. Jules wanted a brand mark that felt feminine, delicate, and unmistakably personal, something that looked and felt like her.\r\n\r\nWe worked through three iterative design sessions to refine the concept, followed by multiple colour and texture explorations to dial in the final look. The chosen direction became a soft, sun-kissed illustration of Jules herself, featuring flowing, wavy hair with a ribbon weaving in and out—symbolizing care, movement, and connection.\r\n\r\nThe final mark includes natural, organically shaped gemstones floating between her hands, reinforcing the brand’s focus on beauty, intention, and thoughtful self-care. This project was a collaborative, detail-oriented process that balanced personal storytelling with a flexible, recognizable identity suited for both digital and print use.', NULL, NULL, 'JBJmain.png', '', 'JBJlb.png', '', 'JBJrb.png', '', 'JBJlong.png', '', 'JBJbb.png', ''),
(5, 'DreamTeam', 'DreamTeam — Brand Identity & Guidelines', '2', 'DreamTeam is a collaborative brand identity created for one of my project groups at SAIT. As our team worked together across multiple classes and semester-long projects, we needed a cohesive visual identity that could adapt to a wide range of deliverables.\r\n\r\nThe name naturally evolved from our group nickname, “The Dream Team,” and became the foundation for a playful yet purposeful brand.\r\n\r\nTo support the identity, I developed a full set of brand assets including a wordmark, logo variations, icon sets, and themed taglines. This system allowed the brand to remain consistent and recognizable while still feeling flexible enough to grow alongside our work throughout the semester.', NULL, NULL, 'DTmain.png', '', 'DTlb.png', '', 'DTrb.png', '', 'DTlong.png', '', 'DTbb.png', ''),
(6, 'Out of Abyss', 'Out of Abyss — Band Logo Design', '2', 'Out of Abyss is a logo set created for a progressive jazz-metal band undergoing a visual rebrand and musical evolution (previously performing under the name Out of the Band). The goal was to shift toward a more metal-centric identity while avoiding imagery that felt overly aggressive or off-putting.\r\n\r\nThe final concept is built around a predator–prey aesthetic, blending the forms of a wolf and a rabbit into a single, stylized mark inspired by illustrative, mythic design styles similar to <a href=\"https://www.faunwood.com/\">Faunwood</a>. This duality reflects both the intensity and nuance of the band’s sound, balancing heaviness with restraint and musical complexity.\r\n\r\nThe system includes a primary and secondary logo designed to function as a paired set: one for the band’s core identity, and one to accompany new music releases and EP artwork. Both marks were developed with scalability in mind, allowing them to translate cleanly across digital platforms, album art, and physical merchandise.', NULL, NULL, 'OOAmain.png', '', 'OOAlb.png', '', 'OOArb.png', '', 'OOAlong.png', '', 'OOAbb.png', ''),
(7, 'Rachel Vi Design', 'Rachel Vi Design — Personal Logo', '2', 'Rachel Vi Design is my personal professional mark, created to represent both my design approach and my identity as a creative. From the outset, I wanted a logo that felt recognizable, feminine, and sleek, something expressive without being rigid, and versatile enough to live across every platform I use professionally.\r\n\r\nDesigned as a simple but flexible system, the logo translates easily across business cards, resumes, portfolio and personal websites, social media profiles, and other professional touchpoints with minimal alteration. It’s a mark I genuinely enjoy using, one that feels both personal and enduring, and that grows comfortably alongside my work.', NULL, NULL, 'RVImain.png', '', 'RVIlb.png', '', 'RVIrb.png', '', 'RVIlong.png', '', 'RVIbb.png', ''),
(8, 'Autumn', 'Autumn — Digital Illustration', '3', 'Autumn was created as a way to bridge the gap between my background in traditional art and my transition into digital illustration. The piece began with an old, unfinished sketch; one I had always intended to complete but never quite returned to, making it a natural and grounding starting point for exploring a new medium.\r\n\r\nUsing the original sketch as a foundation, I approached the piece as a learning exercise in digital painting, allowing the process to evolve organically. The illustration went through several iterations as I experimented with palette choices, lighting, and shading techniques, gradually refining the mood and visual balance.\r\n\r\nWhile Autumn took time to complete, it became a meaningful milestone in my artistic growth. By the end of the piece, I had gained a much deeper understanding of digital workflows, layering, and color control—lessons that continue to influence how I approach my digital work today.', NULL, 'Ink, Digital', '34main.png', 'A digital artowrk of a brown-haired girl amongst autumn, yellowed leaves. Simply titles \"Autumn\".', '34lb.png', '', '34rb.png', '', '34long.png', '', '34bb.png', ''),
(9, 'A Spirit Arrives', 'A Spirit Arrives — Commissioned Illustration', '3', '<span>A Spirit Arrives</span> is a commissioned illustration created to celebrate the birth of a child. The parents requested a horse rendered in non-gendered colours, as the piece was intended for a nursery before they knew whether they were expecting a boy or a girl.\r\n\r\nThe artwork was inspired by a photograph of one of the family’s horses, which I used as a reference to design a technicolour, neo-traditional interpretation. My focus was on capturing the animal’s wild energy and spirit, while maintaining a softness and warmth suited to a space meant for rest and new beginnings.\r\n\r\nThis piece was a thoughtful balance between expressive colour, emotional symbolism, and personal meaning, created to grow with the child and remain resonant well beyond the nursery years.', NULL, 'Copic Ink', 'ASmain.png', '', 'ASlb.png', '', 'ASrb.png', '', 'ASlong.png', '', 'ASbb.png', ''),
(10, 'Joyride', 'Joyride — Digital Illustration', '3', 'Joyride is part of my ongoing “devil-girl” series; an exploratory exercise where I challenged myself to design multiple horned, demonic-inspired characters while experimenting with varied styles, anatomy, and visual language.\r\n\r\nThis piece leans fully into bold colour, exaggerated expression, and unconventional anatomy. The horn structure, palette choices, and facial features were all designed to push contrast and personality, resulting in a vibrant, slightly chaotic composition that captures a sense of manic, high-energy movement.\r\n\r\nLike several of my digital works, Joyride began as a loose sketch before transitioning into a fully rendered digital illustration. Above all, this piece was about creative freedom; allowing play, experimentation, and instinct to guide the process. Sometimes the most valuable work comes from simply letting yourself have fun.', NULL, 'Ink, Digital', 'JRmain.png', '', 'JRlb.png', '', 'JRrb.png', '', 'JRlong.png', '', 'JRbb.png', ''),
(11, 'Works in Progress', 'Miscellaneous Pieces — Works in Progress', '3', 'A small selection of sketches, works-in-progress, and pieces that don’t belong to a specific series or theme. This section highlights other styles and ideas I’ve been exploring recently, offering a glimpse into my ongoing experimentation and creative curiosity.', NULL, 'Graphite, Ink, Acrylic', 'MSCmain.png', '', 'MSClb.png', '', 'MSCrb.png', '', 'MSClong.png', '', 'MSCbb.png', ''),
(12, 'Stargazers', 'Stargazers — Acrylic on Wood', '3', 'Stargazers is a gift created for a family member, exploring texture, color, and form through acrylic on wood. The piece uses chunky, square brushstrokes to construct eyes and stars, while pallet-knife techniques add ridges and arcs, giving the work a tactile, layered feel.\r\n\r\nThe eye colours are a personal nod, reflecting those of the family member and her husband, adding an intimate, meaningful touch. Working with square strokes to create rounded shapes presented a unique technical challenge, and one I found both fun and rewarding. The result is a vibrant, textured piece that combines experimentation with personal storytelling.', NULL, 'Acrylic', 'SGmain.png', '', 'SGlb.png', '', 'SGrb.png', '', 'SGlong.png', '', 'SGbb.png', ''),
(13, 'IDD x ET', 'Design Advisory — Brand Identity', '3', 'Design Advisory is a logo and brand identity created for a pilot design advisory program I am involved with. The initiative brings together IDD (Interactive Design Diploma) students, acting as design consultants, and Emerging Trends software development students in a cross-course collaboration. As this was the program’s first run, no existing branding was in place.\r\n\r\nI took the initiative to develop a complete visual identity system, including a primary logo, complex and alternate logo variations, a wordmark, icon set, and supporting brand guidelines. The logo centers on an eye motif, symbolizing insight, evaluation, and guidance, with a node-based structure forming the iris and pupil to reference systems thinking and technical collaboration. Coding brackets frame the eye, reinforcing the connection between design and development.\r\n\r\nThe colour palette combines off-black with an orange-to-purple gradient, balancing clarity and creativity while allowing the identity to feel professional, adaptable, and forward-looking. The resulting system provides the program with a cohesive foundation that can scale alongside future iterations of the advisory.', NULL, NULL, 'DAmain.png', '', 'DAlb.png', '', 'DArb.png', '', 'DAlong.png', '', 'DAbb.png', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_ID`);

--
-- Indexes for table `commissions`
--
ALTER TABLE `commissions`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_project_category` (`category`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commissions`
--
ALTER TABLE `commissions`
  MODIFY `ID` smallint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `ID` smallint NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `ID` smallint NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
