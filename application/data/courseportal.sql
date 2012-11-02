-- phpMyAdmin SQL Dump
-- version 3.4.10.2
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2012 at 12:22 AM
-- Server version: 5.1.61
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `courseportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_accepted_languages`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_accepted_languages` (
  `id` varchar(6) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `onlinecourseportal_accepted_languages`
--

INSERT INTO `onlinecourseportal_accepted_languages` (`id`) VALUES
('ar'),
('bn'),
('de'),
('en'),
('es'),
('fr'),
('hi'),
('it'),
('ja'),
('ko'),
('pl'),
('pt'),
('ru'),
('ur'),
('zh');

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_avatar`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_avatar` (
  `user_id` int(11) NOT NULL,
  `mime_type` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `name` char(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_course`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_course` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Dumping data for table `onlinecourseportal_course`
--

INSERT INTO `onlinecourseportal_course` (`id`, `title`) VALUES
(6, 'Empower Online'),
(7, 'Intro to Caregiving Online'),
(8, 'Making Sense of Memory Loss Online'),
(9, 'CARE Coaching Online');

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_employer_domain`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_employer_domain` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `domain` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=7 ;

--
-- Dumping data for table `onlinecourseportal_employer_domain`
--

INSERT INTO `onlinecourseportal_employer_domain` (`id`, `name`) VALUES
(6, 'exxonmobil.com'),
(1, 'ibm.com'),
(4, 'matherlifeways.com'),
(3, 'merck.com'),
(2, 'ti.com');

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_group`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_group` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `onlinecourseportal_group`
--

INSERT INTO `onlinecourseportal_group` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'employee_user'),
(4, 'paid_user');

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_key`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_key` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `value` char(44) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(44) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `onlinecourseportal_key`
--

INSERT INTO `onlinecourseportal_key` (`id`, `value`, `salt`) VALUES
(1, 'UaAke0bAoH4pfobaCrNFsdCCkMOVA9ChZY4BeWm73Fw=', 'V2n6VZZxWTGzCfyhXFV82flYj2D5TJfJbWQ3NFLU5pA=');

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_message`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_message` (
  `id` int(11) NOT NULL DEFAULT '0',
  `language` varchar(16) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `translation` mediumtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`,`language`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `onlinecourseportal_message`
--

INSERT INTO `onlinecourseportal_message` (`id`, `language`, `translation`) VALUES
(1, 'ar', 'عبر الإنترنت دراسة البوابة'),
(1, 'de', 'Online-Portal'),
(1, 'es', 'Portal Curso Online'),
(1, 'fr', 'Portail Cours en ligne'),
(1, 'it', 'Corso portale online'),
(1, 'ru', 'Интернет портал курса'),
(1, 'zh', '网络课程的门户网站'),
(2, 'ar', 'منزل'),
(2, 'de', 'Zuhause'),
(2, 'es', 'Casa'),
(2, 'fr', 'Maison'),
(2, 'it', 'Casa'),
(2, 'ru', 'Дома'),
(2, 'zh', '家'),
(3, 'ar', 'الاتصال بنا'),
(3, 'de', 'Kontakt'),
(3, 'es', 'Contáctenos'),
(3, 'fr', 'Contactez-nous'),
(3, 'it', 'Contattaci'),
(3, 'ru', 'Связаться с Нами'),
(3, 'zh', '联系我们'),
(4, 'ar', 'تسجيل'),
(4, 'de', 'Registrieren'),
(4, 'es', 'Registro'),
(4, 'fr', 'Enregistrer'),
(4, 'it', 'Registro'),
(4, 'ru', 'Реестр'),
(4, 'zh', '注册'),
(5, 'ar', 'دخول'),
(5, 'de', 'Login'),
(5, 'es', 'Login'),
(5, 'fr', 'Login'),
(5, 'it', 'Accesso'),
(5, 'ru', 'Войти'),
(5, 'zh', '注册'),
(6, 'ar', 'الملف / الملفات'),
(6, 'de', 'Profil / Files'),
(6, 'es', 'Perfil / Archivos'),
(6, 'fr', 'Profil / Files'),
(6, 'it', 'Profilo / Files'),
(6, 'ru', 'Профиль / Files'),
(6, 'zh', '资料/文件'),
(7, 'ar', 'منتدى'),
(7, 'de', 'Forum'),
(7, 'es', 'Foro'),
(7, 'fr', 'Forum'),
(7, 'it', 'Foro'),
(7, 'ru', 'Форум'),
(7, 'zh', '论坛'),
(8, 'ar', 'دورات'),
(8, 'de', 'Kurse'),
(8, 'es', 'Cursos'),
(8, 'fr', 'Cours'),
(8, 'it', 'Corsi'),
(8, 'ru', 'Курсы'),
(8, 'zh', '课程'),
(9, 'ar', 'مشرف'),
(9, 'de', 'Admin'),
(9, 'es', 'Administración'),
(9, 'fr', 'Admin'),
(9, 'it', 'Admin'),
(9, 'ru', 'Админ'),
(9, 'zh', '管理员'),
(10, 'ar', 'خروج'),
(10, 'de', 'Abmelden'),
(10, 'es', 'Cerrar sesión'),
(10, 'fr', 'Déconnexion'),
(10, 'it', 'Logout'),
(10, 'ru', 'Выйти'),
(10, 'zh', '登出'),
(11, 'ar', 'الضيف'),
(11, 'de', 'Gast'),
(11, 'es', 'Invitado'),
(11, 'it', 'Ospite'),
(11, 'ru', 'Гость'),
(11, 'zh', '客人'),
(12, 'ar', 'على شبكة الإنترنت التدريب لمقدمي الرعاية'),
(12, 'de', 'Web-based Training für Erziehende'),
(12, 'es', 'Formación basada en web para cuidadores'),
(12, 'it', 'Formazione basata sul Web per Caregivers'),
(12, 'ru', 'Веб-тренинг для воспитателей'),
(12, 'zh', '基于Web的培训照顾者'),
(13, 'ar', 'طلب معلومات'),
(13, 'de', 'Informationen anfordern'),
(13, 'es', 'Solicitud de Información'),
(13, 'it', 'Richiesta informazioni'),
(13, 'ru', 'Запрос информации'),
(13, 'zh', '索取资料'),
(14, 'ar', 'البرنامج التعليمي'),
(14, 'de', 'Lernprogramm'),
(14, 'es', 'Tutorial'),
(14, 'it', 'Lezione'),
(14, 'ru', 'Учебник'),
(14, 'zh', '教程'),
(15, 'ar', 'احصائيات على مقدمي الرعاية'),
(15, 'de', 'Statistiken auf Caregivers'),
(15, 'es', 'Estadísticas sobre los cuidadores'),
(15, 'it', 'Statistiche su Caregivers'),
(15, 'ru', 'Статистика по Воспитатели'),
(15, 'zh', '统计照顾者'),
(16, 'ar', '2/3 من مقدمي الرعاية العامل تقريرا الصراعات بين العمل والرعاية التي تؤدي إلى ارتفاع نسبة الغياب والانقطاع، يوم العمل وتخفيض ساعات العمل، والتحول إلى عبء العمل الموظفين الآخرين.'),
(16, 'de', '2/3 der Arbeitszeit Betreuer berichten Konflikte zwischen Arbeit und Pflegeaufgaben, dass zu einem erhöhten Fehlzeiten, Arbeitstages Unterbrechungen, Kurzarbeit und Workload-Verlagerung an andere Mitarbeiter.'),
(16, 'es', '2/3 de los cuidadores que trabajan reportar conflictos entre el trabajo y el cuidado que se traducen en un aumento del absentismo, las interrupciones del día de trabajo, la reducción de horas, y la carga de trabajo desplazando a otros empleados.'),
(16, 'it', '2/3 dei caregiver di lavoro comunicazione del conflitto tra lavoro e caregiving che si traducono in una maggiore assenteismo, interruzioni giornata di lavoro, orario ridotto, il carico di lavoro e lo spostamento ad altri dipendenti.'),
(16, 'ru', '2/3 от рабочего воспитатели сообщают конфликты между работой и ухода, что приводит к увеличению прогулов, рабочий день перерывами, сокращенный рабочий день и рабочая нагрузка переход на другие сотрудники.'),
(16, 'zh', '2/3的的工作照顾者报告工作，并照顾，增加旷工，工作时间中断，减少工作时间和工作量转移到其他员工的结果之间的冲突。'),
(17, 'ar', 'البحث الأخيرة'),
(17, 'de', 'Aktuelle Forschung'),
(17, 'es', 'Investigaciones recientes'),
(17, 'it', 'La ricerca recente'),
(17, 'ru', 'Недавние исследования'),
(17, 'zh', '最近的研究'),
(18, 'ar', '<strong>شقاء مزدوج للمواليد رعاية والديهم</strong> <br /> الأطفال البالغين ما يقرب من 10 مليون دولار خلال سن ال 50 الرعاية والديهم المسنين. هذه الأسرة هي نفسها مقدمي الرعاية الشيخوخة فضلا عن توفير الرعاية في الوقت الذي كانت تحتاج أيضا إلى تخطيط والادخار للتقاعد خاصة بهم. هذه الدراسة هو محدث، نظرة وطنية للأطفال الكبار الذين يعملون ورعاية والديهم وأثر على تقديم الرعاية دخولهم والثروة مدى الحياة.'),
(18, 'de', '<strong>Double Jeopardy für Baby Boomers Fürsorge für ihre Eltern</strong> <br /> Fast 10 Millionen erwachsene Kinder im Alter von über 50 kümmern sich um ihre alternden Eltern. Diese pflegende Angehörige selbst Alterung sowie die Betreuung in einer Zeit, müssen sie auch zu planen und Geld für den eigenen Ruhestand. Die Studie ist eine aktualisierte, nationale Blick auf erwachsene Kinder, die arbeiten und kümmern sich um ihre Eltern und die Auswirkungen der Pflege auf ihre Gewinne und Lebensdauer Reichtum.'),
(18, 'es', '<strong>Doble traición para los Baby Boomers cuidado de sus padres</strong> <br /> Casi 10 millones de niños para adultos mayores de 50 cuidar de sus padres ancianos. Los cuidadores familiares son en sí mismos el envejecimiento, así como proporcionar atención en un momento en el que también se deben planificar y ahorrar para su propia jubilación. El estudio es una apariencia actualizada, nacional a los hijos adultos que trabajan y cuidan a sus padres y el impacto de los cuidados en sus ingresos y la riqueza de por vida.'),
(18, 'it', '<strong>Colpevole d&#39;innocenza per Baby Boomers La cura per i loro genitori</strong> <br /> Quasi 10 milioni di bambini adulti di età superiore ai 50 cura dei loro genitori anziani. Le assistenti familiari sono essi stessi l&#39;invecchiamento, oltre a fornire assistenza in un momento in cui anche bisogno di essere la pianificazione e risparmiare per la propria pensione. Lo studio è una versione aggiornata, sguardo nazionale di figli adulti che lavorano e la cura per i loro genitori e l&#39;impatto dei caregiving sui loro guadagni e la ricchezza della vita.'),
(18, 'ru', '<strong>Double Jeopardy для бэби-бумеров Забота о родителях</strong> <br /> Около 10 миллионов взрослых детей старше 50-летнего возраста заботиться о своих стареющих родителях. Эти семейные воспитатели сами старения, а также оказание помощи в то время, когда они также должны быть планирование и экономия для собственного выхода на пенсию. Исследование представляет собой обновленный, национальной взгляд на взрослые дети, которые работают и заботиться о своих родителях и последствиях ухода от их доходов и богатства жизни.'),
(18, 'zh', '<strong>为照顾父母的婴儿潮一代的双重危险</strong> <br />近10万成年子女照顾年迈的父母50岁以上的。这些家庭照顾者本身老化，以及提供医疗服务的时候，他们还需要为自己的退休计划和节约。这项研究是在更新，放眼全国成年子女的工作和照顾他们的父母和照顾他们的收入和终身财富的影响。'),
(19, 'ar', 'قراءة &quot;دراسة [متليف] مقدمي الرعاية العامل وصاحب العمل تكاليف الرعاية الصحية&quot;'),
(19, 'de', 'Lesen Sie &quot;Die MetLife Studie der Arbeitsgruppe Betreuer und Arbeitgeber Health Care Costs&quot;'),
(19, 'es', 'Lea &quot;El Estudio de MetLife de Cuidadores de trabajo y los costos del empleador Cuidado de la Salud&quot;'),
(19, 'zh', '阅读“大都会研究工作的护理员和雇主的健康保健费用”'),
(20, 'ar', 'هيتيبابرز'),
(20, 'de', 'Whitepapers'),
(20, 'es', 'Whitepapers'),
(20, 'it', 'White paper'),
(20, 'ru', 'Официальные документы'),
(20, 'zh', '白皮书'),
(21, 'ar', 'التعليم الإلكتروني: التقنيات الحديثة يجلب الرصيد و إمكانيات لتعليم التمريض'),
(21, 'de', 'E-Learning: Die Reifung Technologie bringt Balance &amp; Möglichkeiten zur Nursing Education'),
(21, 'es', 'e-learning: Tecnologías de la maduración aporta equilibrio y Posibilidades de Educación en Enfermería'),
(21, 'it', 'e-Learning: Tecnologia maturazione porta equilibrio e le possibilità di formazione infermieristica'),
(21, 'ru', 'E-Learning: Созревание технология приносит равновесие и возможности для сестринского образования'),
(21, 'zh', '电子学习：成熟的技术带来平衡的可能性护理教育'),
(22, 'ar', 'وخلاصة القول: كيف يمكن للتعليم الإلكتروني تخفيض النفقات وتحسين أداء الموظفين'),
(22, 'de', 'The Bottom Line: Wie E-Learning Kann Aufwendungen zu reduzieren und die Leistung der Mitarbeiter'),
(22, 'es', 'La línea de base: ¿Cómo e-Learning puede reducir los gastos y mejorar el rendimiento del personal'),
(22, 'zh', '底线：e-learning能减少开支和提高员工的工作绩效'),
(23, 'ar', 'لدينا عملاء'),
(23, 'de', 'Unsere Kunden'),
(23, 'es', 'Nuestros Clientes'),
(23, 'it', 'I nostri clienti'),
(23, 'ru', 'Наши клиенты'),
(23, 'zh', '我们的客户'),
(24, 'ar', 'ماثر LifeWays معهد للشيخوخة'),
(24, 'de', 'Mather Lebensweisen Institute on Aging'),
(24, 'es', 'Mather formas de vida Instituto del Envejecimiento'),
(24, 'it', 'Mather modi di vita Institute on Aging'),
(24, 'ru', 'Mather LifeWays института по проблемам старения'),
(24, 'zh', '奥美LifeWays老龄问题研究所'),
(25, 'ar', 'من خلال برامج للابحاث ومقره والتقنيات المبتكرة، وتلتزم ماثر LifeWays معهد الشيخوخة على المضي قدما في مجال رعاية المسنين. أحدث الأبحاث العلمية يضع الأساس لإيجاد حلول للتحديات الصلبة لدينا رعاية المسنين، بما في ذلك، والتوظيف الإرشاد والتدريب والاحتفاظ.'),
(25, 'de', 'Durch Forschung-basierten Programmen und innovative Techniken wird Mather Lebensweisen Institute on Aging zur Weiterentwicklung auf dem Gebiet der Altenpflege verpflichtet. Spitzenforschung legt den Grundstein für unsere solide Lösungen für Altenpflege Herausforderungen, einschließlich der Rekrutierung, Betreuung, Schulung und Retention.'),
(25, 'es', 'A través de programas basados ​​en la investigación y técnicas innovadoras, formas de vida Mather Institute on Aging tiene el compromiso de avanzar en el campo de la atención geriátrica. La investigación de vanguardia sienta las bases para nuestras soluciones sólidas a los problemas de atención de la tercera edad, incluyendo el reclutamiento, orientación, formación y retención.'),
(25, 'it', 'Attraverso la ricerca basati su programmi e tecniche innovative, Mather modi di vita Institute on Aging è impegnata a promuovere il campo della cura geriatrica. All&#39;avanguardia di ricerca pone le basi per le nostre soluzioni solide alle sfide assistenza agli anziani, per l&#39;assunzione, tutoraggio, la formazione e la conservazione.'),
(25, 'ru', 'Благодаря научно-обоснованных программ и инновационных технологий, Mather LifeWays института по проблемам старения стремится к продвижению области гериатрической помощи. Передовые исследования закладывает основу для наших твердых растворов к старшим проблемами ухода, включая набор персонала, наставничества, обучения и удержания.'),
(25, 'zh', '通过研究为基础的方案和创新的技术，奥美LifeWays老龄问题研究所致力于推进老年护理领域的。我们坚实的解决方案，以老年护理的挑战，包括招聘，指导，培训和保留最前沿的研究奠定了基础。'),
(26, 'ar', 'المستخدمة من قبل الأفراد والمنظمات بأكملها، لدينا معترف به وطنيا، الحائز على جائزة برامج تشمل وحدات تدريبية، دورات على الانترنت، أدوات العمل، وحدات التعلم تهدف إلى جعل التعلم متعة وسهولة. وقد ثبت برامجنا أن تؤدي إلى تحسينات قابلة للقياس في نوعية الرعاية المقدمة والاحتفاظ القوى العاملة.'),
(26, 'de', 'Wird von Einzelpersonen und ganze Organisationen umfassen unsere staatlich anerkannte, preisgekrönte Programme Schulungsmodule, Online-Kurse, Toolkits und Lernmodule entwickelt, um das Lernen einfach und macht Spaß zu machen. Unsere Programme haben gezeigt, dass in messbaren Verbesserungen in der Qualität der Versorgung und Mitarbeiterbindung führen.'),
(26, 'es', 'Utilizado por las personas y organizaciones enteras, nuestros reconocidos a nivel nacional y galardonados programas incluyen módulos de formación, cursos en línea, herramientas y módulos de aprendizaje diseñados para hacer el aprendizaje divertido y fácil. Nuestros programas han demostrado producir mejoras medibles en la calidad de la atención y la retención de mano de obra.'),
(26, 'it', 'Usato da individui e organizzazioni intere, riconosciuti a livello nazionale, i nostri premiati programmi includono moduli di formazione, corsi online, kit di strumenti e moduli di apprendimento progettati per rendere l&#39;apprendimento divertente e facile. I nostri programmi hanno dimostrato di portare a miglioramenti misurabili nella qualità dell&#39;assistenza fornita e il mantenimento della forza lavoro.'),
(26, 'ru', 'Используется лиц и целых организаций, наших национально признанных, наградами программы включают учебные модули, онлайн-курсы, учебные пособия и учебные модули разработаны, чтобы сделать обучение весело и легко. Наши программы было показано, что в результате ощутимого улучшения качества предоставляемых услуг и рабочей силы удержания.'),
(26, 'zh', '用于个人和整个组织，我们的国家认可，屡获殊荣的计划包括培训模块，在线课程，工具包，和学习模块设计，使学习变得有趣和容易。我们的计划已被证明是导致可衡量的改进提供护理的质量和员工保留。'),
(27, 'ar', 'دورة على الانترنت لمقدمي الرعاية'),
(27, 'de', 'Online Kurse für Pflegende'),
(27, 'es', 'Cursos en línea para cuidadores'),
(27, 'it', 'Corsi online per Caregivers'),
(27, 'ru', 'Онлайн курсы для воспитателей'),
(27, 'zh', '照顾者的在线课程'),
(28, 'ar', 'التي نقدمها عبر الإنترنت والتعلم على شبكة الإنترنت، طرائق باستخدام أحدث التقنيات للمهنيين بكفاءة وفعالية من حيث التكلفة تمكين. وبالإضافة إلى ذلك، ونحن في وضع جيد يؤهلها لمساعدة إجراء دراسات تجريبية لقياس أثر على كل من مقدمي الرعاية والعمل وخلاصة القول بالنسبة للشركات المهتمة.'),
(28, 'de', 'Wir liefern Online-Lernen und Web-basierte Modalitäten mit den neuesten Technologien effizient und kostengünstig befähigen Profis. Darüber hinaus sind wir gut positioniert, um durchzuführen Pilotstudien, die die Auswirkungen auf die beiden arbeiten Betreuer und der unteren Zeile für interessierte Unternehmen zu messen.'),
(28, 'es', 'Entregamos modalidades de aprendizaje en línea y basados ​​en web utilizando las últimas tecnologías a los profesionales de manera eficiente y costo-efectiva la autonomía. Además, estamos bien posicionados para ayudar a llevar a cabo estudios experimentales que miden el impacto tanto en los cuidadores de trabajo y la línea de fondo para las empresas interesadas.'),
(28, 'it', 'Consegniamo modalità di apprendimento on-line e web-based che utilizzano le più recenti tecnologie per i professionisti in modo efficiente e conveniente potenziare. Inoltre, siamo ben posizionati per condurre studi pilota che misurano l&#39;impatto su entrambi i caregivers di lavoro e la linea di fondo per le aziende interessate.'),
(28, 'ru', 'Мы поставляем онлайн условий обучения и веб-использования новейших технологий эффективного и экономичного расширения прав и возможностей работников. Кроме того, мы находимся в хорошем положении, чтобы помочь провести экспериментальные исследования, которые измеряют влияние как на рабочих воспитателей и нижнюю линию для заинтересованных корпораций.'),
(28, 'zh', '我们提供在线学习和网络为基础的模式，采用了最新的技术，以高效和成本有效授权的专业人士。此外，我们处于有利位置，以帮助进行试验性研究，测量工作照顾者和有兴趣的公司的底线的影响。'),
(29, 'ar', 'إذا ما أمعنا النظر - حياة مقدمي الرعاية'),
(29, 'de', 'A Closer Look - Lives of Caregivers'),
(29, 'es', 'Una mirada más cercana - Vidas de los cuidadores'),
(29, 'it', 'Uno sguardo da vicino - Vite dei Caregivers'),
(29, 'ru', 'Более пристальный взгляд - Жизнь Воспитатели'),
(29, 'zh', '仔细看看 - 主要照顾者的生活'),
(30, 'ar', 'الانضمام إلينا في النظر إلى حياة لا تصدق من مقدمي الرعاية، وعدة فريدة من نوعها، لأنها تذكر تجربتها والعاطفة. التقاط مختلف الفئات العمرية والأعراق، وسوف تتصل بسرعة لهذه الحالة كانت مقدمي الرعاية فيه.'),
(30, 'de', 'Begleiten Sie uns im Blick auf die unglaubliche Leben von mehreren, einzigartigen Bezugspersonen, wie sie ihre Erfahrungen und Emotionen erinnern. Capturing verschiedenen Altersgruppen und Ethnien, werden Sie schnell auf die Situation diese Bezugspersonen waren in. beziehen'),
(30, 'es', 'Únase a nosotros en el estudio de las vidas increíbles de los cuidadores varios, único, al recordar su experiencia y la emoción. La captura de varios grupos de edad y grupos étnicos, rápidamente se refieren a la situación de estos cuidadores se in'),
(30, 'it', 'Unisciti a noi nel guardare la vita incredibile di alcuni operatori sanitari, uniche, come ricordano la loro esperienza ed emozione. Acquisizione di vari gruppi di età ed etnie, sarà rapidamente in relazione alla situazione di questi caregiver erano trovi'),
(30, 'ru', 'Присоединяйтесь к нам в глядя на невероятную жизнь нескольких, уникальных воспитателей, так как они вспомнить свой опыт и эмоции. Захват различных возрастных групп и этносов, вы быстро относиться к ситуации эти воспитатели были дюйма'),
(30, 'zh', '加入我们在寻找的令人难以置信的几个，唯一的照顾者的生活，因为他们还记得他们的经验和情感。捕捉不同年龄组和不同种族，你会很快的情况，这些医护人员英寸'),
(31, 'ar', 'لعب'),
(31, 'de', 'Spielen'),
(31, 'es', 'Jugar'),
(31, 'zh', '玩'),
(32, 'ar', 'وقفة'),
(32, 'de', 'Pause'),
(32, 'es', 'Pausa'),
(32, 'zh', '暂停'),
(33, 'ar', 'توقف'),
(33, 'de', 'Stoppen'),
(33, 'es', 'Deténgase'),
(33, 'zh', '停止'),
(34, 'ar', 'كتم'),
(34, 'de', 'Stumm'),
(34, 'es', 'Silencio'),
(34, 'zh', '静音'),
(35, 'ar', 'إلغاء كتمه'),
(35, 'de', 'Stummschaltung'),
(35, 'es', 'Activar sonido'),
(35, 'zh', '取消静音'),
(36, 'ar', 'ماكس الحجم'),
(36, 'de', 'Max Volume'),
(36, 'es', 'Max Volumen'),
(36, 'zh', '最大音量'),
(37, 'ar', 'كامل الشاشة'),
(37, 'de', 'Full Screen'),
(37, 'es', 'Pantalla completa'),
(37, 'zh', '全屏'),
(38, 'ar', 'استعادة الشاشة'),
(38, 'de', 'Wiederherstellen Bildschirm'),
(38, 'es', 'Restaurar la pantalla'),
(38, 'zh', '恢复屏幕'),
(39, 'ar', 'كرر'),
(39, 'de', 'Wiederholen'),
(39, 'es', 'Repetir'),
(39, 'zh', '重复'),
(40, 'ar', 'تكرار معطلة'),
(40, 'de', 'Repeat Off'),
(40, 'es', 'Repetición desactivada'),
(40, 'zh', '重复关闭'),
(41, 'ar', 'تحديث المطلوبة'),
(41, 'de', 'Update erforderlich'),
(41, 'es', 'Actualización necesaria'),
(41, 'zh', '更新要求'),
(42, 'ar', 'لتشغيل الوسائط سوف تحتاج إلى تحديث المتصفح الخاص بك إما إلى إصدار أو تحديث الخاص الأخيرة'),
(42, 'de', 'Um die Medien zu spielen, müssen Sie entweder aktualisieren Sie Ihren Browser auf eine aktuellere Version oder aktualisieren Sie Ihre'),
(42, 'es', 'Para reproducir los medios de comunicación que tendrá que actualice su navegador a una versión más reciente o actualizar su'),
(42, 'zh', '播放媒体，您需要更新您的浏览器到最新版本或更新您的'),
(43, 'ar', 'فلاش البرنامج المساعد'),
(43, 'de', 'Flash-Plugin'),
(43, 'es', 'Plugin de Flash'),
(43, 'zh', 'Flash插件'),
(44, 'ar', 'بيداغوجيا'),
(44, 'de', 'Pädagogie'),
(44, 'es', 'Pedagogía'),
(44, 'it', 'Pedagogia'),
(44, 'ru', 'Педагогика'),
(44, 'zh', '教育学'),
(45, 'ar', 'التعليم عبر الإنترنت فعالة تعتمد على تصميم خبرات التعلم بشكل مناسب وبتسهيل من الميسرين المعرفة. لأن المتعلمين لديها أنماط التعلم المختلفة أو مزيج من الأساليب، وقد موقعنا على شبكة الانترنت التدريب القائم على التصميم باستخدام الأنشطة التي تتناول أوضاع الخاصة بهم للتعلم من أجل توفير الخبرات الهامة لكل مستخدم بالطبع. الماوس على الرسم البياني أدناه لترى مناطقنا من التركيز.'),
(45, 'es', 'Instrucción en línea eficaz depende de las experiencias de aprendizaje debidamente diseñadas y facilitadas por facilitadores expertos. Debido a que los alumnos tienen diferentes estilos de aprendizaje o una combinación de estilos, nuestra formación basada en web ha sido diseñado con actividades que respondan a sus modos de aprendizaje con el fin de proporcionar experiencias significativas para cada usuario del curso. Ratón sobre el cuadro de abajo para ver nuestras áreas de enfoque.'),
(45, 'it', 'Efficace istruzioni on-line dipende esperienze di apprendimento adeguatamente progettati e facilitato da facilitatori esperti. Perché gli studenti hanno diversi stili di apprendimento o una combinazione di stili, la nostra web-based di formazione è stato di progettazione utilizzando le attività che tengano conto delle loro modalità di apprendimento, al fine di fornire esperienze significative per ogni utente corso. Mouse-over la tabella qui sotto per vedere le nostre aree di messa a fuoco.'),
(45, 'ru', 'Эффективная онлайн команды зависит от опыта обучения надлежащим образом спланированных и способствовало знающих посредников. Потому что учащиеся имеют различные стили обучения или сочетание стилей, наш веб-обучения был дизайн с использованием мероприятий, направленных способы их обучения в целях обеспечения значительного опыта для каждого курса пользователь. Наведении курсора мыши на графике ниже, чтобы увидеть наших направлений.'),
(45, 'zh_cn', '指令依赖于有效的在线学习适当的设计和便利的经验知识渊博的主持人。因为学生有不同的学习风格或样式的组合，我们基于网络的培训设计，使用活动，以解决他们的学习方式，为每个用户提供重要的经验。鼠标在图表下面来看看我们的重点领域。'),
(46, 'ar', 'workingCaregiver'),
(46, 'de', 'workingCaregiver'),
(46, 'es', 'workingCaregiver'),
(46, 'it', 'workingCaregiver'),
(46, 'ru', 'workingCaregiver'),
(46, 'zh', 'workingCaregiver'),
(47, 'ar', 'هناك العديد من التحديات لكونها الرعاية والعمل بدوام كامل. مع الملايين من الأسر في رعاية الولايات المتحدة لشخص مسن، وبين مسؤوليات أماكن عملهم، من الصعب أن توفق على حد سواء.'),
(47, 'de', 'Es gibt viele Herausforderungen, um ein Pfleger und Vollzeit arbeiten. Mit Millionen von Haushalten in den USA Pflege eines älteren Menschen, unter ihrem Arbeitsplatz Verantwortung, ist es schwierig, beide jonglieren.'),
(47, 'es', 'Hay muchos desafíos para ser un cuidador y el trabajo a tiempo completo. Con millones de familias en el cuidado de EE.UU. para una persona de edad avanzada, entre las responsabilidades de su lugar de trabajo, es difícil compaginar ambas cosas.'),
(47, 'it', 'Ci sono molte sfide per essere un assistente e di lavoro a tempo pieno. Con milioni di famiglie negli Stati Uniti per la cura di una persona anziana, tra le loro responsabilità sul posto di lavoro, è difficile destreggiarsi entrambi.'),
(47, 'ru', 'Есть много проблем, чтобы быть опекуном и работать полный рабочий день. С миллионами домохозяйств в заботливые США за пожилой человек, среди своих обязанностей на рабочем месте, трудно совмещать то и другое.'),
(47, 'zh', '的护理人员全职工作面临着许多挑战。数以百万计的家庭在美国照顾的老人，在他们的工作职责，它是很难兼顾两者。'),
(48, 'ar', 'المستخدم ID'),
(48, 'de', 'Benutzer-ID'),
(48, 'es', 'ID de usuario'),
(48, 'fr', 'ID utilisateur'),
(48, 'it', 'User ID'),
(48, 'ru', 'User ID'),
(48, 'zh', '用户ID'),
(49, 'ar', 'هل اتخذت من أي وقت مضى في اليوم إجازة من العمل نتيجة لدورك كمقدم رعاية؟'),
(49, 'de', 'Haben Sie schon einmal einen Tag gedauert von der Arbeit als Ergebnis Ihrer Rolle als Betreuer?'),
(49, 'es', '¿Alguna vez ha tomado un día libre en el trabajo como consecuencia de su papel como cuidador?'),
(49, 'it', 'Hai mai preso un giorno di riposo dal lavoro a causa del suo ruolo di una badante?'),
(49, 'ru', 'Вы когда-либо день от работы в результате вашей роли воспитателя?'),
(49, 'zh', '你有没有每天下班，由于你的角色做保姆？'),
(50, 'ar', 'نعم'),
(50, 'de', 'Ja'),
(50, 'es', 'Sí'),
(50, 'it', 'Sì'),
(50, 'ru', 'Да'),
(50, 'zh', '是'),
(51, 'ar', 'لا'),
(51, 'de', 'Nicht'),
(51, 'es', 'No'),
(51, 'it', 'No'),
(51, 'ru', 'Нет'),
(51, 'zh', '没有'),
(52, 'ar', 'عرض'),
(52, 'de', 'Einreichen'),
(52, 'es', 'Presentar'),
(52, 'it', 'Presentare'),
(52, 'ru', 'Представлять'),
(52, 'zh', '提交'),
(53, 'ar', 'الحالة الصحية لمقدمي الرعاية العمل الخاص بك'),
(53, 'de', 'Gesundheitszustand Ihres Arbeitstages Betreuer'),
(53, 'es', 'Estado de salud de los cuidadores que trabajan'),
(53, 'it', 'Lo stato di salute dei vostri caregivers di lavoro'),
(53, 'ru', 'Состояние здоровья вашего рабочего воспитателей'),
(53, 'zh', '你的工作照顾者的健康状况'),
(54, 'ar', 'الرجاء اختيار واحدة من الدراسات الاستقصائية أدناه لاتخاذها. اعتمادا على صاحب العمل الخاص بك، أو موقف الموظف، يقدم هذا المسح الطوعي وعرض تعليقات الكلي من جميع المستخدمين السابقة.'),
(54, 'de', 'Bitte wählen Sie eine der Erhebungen unten zu nehmen. Abhängig von Ihrer Position, Arbeitgeber oder Arbeitnehmer, so reichen Sie freiwilligen Erhebung und sehen aggregierten Feedback von allen bisherigen Nutzer.'),
(54, 'es', 'Por favor, elija una de las encuestas indican a continuación para tomar. Dependiendo de su posición, empleador o empleado, presente esta encuesta voluntaria y ver información agregada de todos los usuarios anteriores.'),
(54, 'it', 'Si prega di scegliere una delle indagini di seguito per prendere. A seconda della posizione, datore di lavoro o dipendente, a presentare questa indagine volontaria e visualizzare i commenti di aggregazione di tutti gli utenti precedenti.'),
(54, 'ru', 'Пожалуйста, выберите один из обследований ниже, чтобы взять. В зависимости от вашей позиции, работодатель или работник, представить это добровольное обследование и просмотр совокупности обратную связь от всех предыдущих пользователей.'),
(54, 'zh', '下面的调查，采取请选择之一。根据你的位置，雇主或雇员，提交自愿总的反馈调查，并查看以前所有的用户。'),
(55, 'ar', 'HR / صاحب عمل مسح'),
(55, 'de', 'HR / Employer Survey'),
(55, 'es', 'HR / Empleador Encuesta'),
(55, 'it', 'HR / Datore di lavoro Survey'),
(55, 'ru', 'HR / Работодателю обзор'),
(55, 'zh', 'HR /雇主调查'),
(56, 'ar', 'الرعاية المسح'),
(56, 'de', 'Caregiver Umfrage'),
(56, 'es', 'Cuidador Encuesta'),
(56, 'it', 'Caregiver Survey'),
(56, 'ru', 'Caregiver обзор'),
(56, 'zh', '照顾者调查'),
(57, 'ar', 'شركاء'),
(57, 'de', 'Partner'),
(57, 'es', 'Partners'),
(57, 'it', 'Partner'),
(57, 'ru', 'Партнеры'),
(57, 'zh', '合作伙伴'),
(58, 'ar', 'hrEmployer'),
(58, 'de', 'hrEmployer'),
(58, 'es', 'hrEmployer'),
(58, 'it', 'hrEmployer'),
(58, 'ru', 'hrEmployer'),
(58, 'zh', 'hrEmployer'),
(59, 'ar', 'العديد من التحديات الرعاية العمال في كثير من الأحيان حتى يمكن مواجهة يكون لها تأثير سلبي على الموظف على حد سواء والعمل على التنظيم الخاص يشغلون الشركة والإنتاجية، وتهدد خطط التقاعد موظفيك والأمن المالي. تكلف مقدمي الرعاية الموظف الشركات الأمريكية ما يقرب من 34 مليار دولار في الإنتاجية المفقودة سنويا. بالإضافة إلى الأثر المالي، والإجهاد المرتبطة رعاية الكبار في السن إلى خسائر كبيرة البدني والنفسي على الأطفال الكبار. ونتيجة لذلك، ومقدمي الرعاية هي الآن أكثر عرضة للإصابة العادلة إلى ضعف الصحة، مما أدى إلى ارتفاع تكاليف الرعاية الصحية للشركات. يرجى إكمال المسح وجيزة.'),
(59, 'de', 'Die vielen Herausforderungen pflegende Arbeitnehmer so oft Gesicht kann einen negativen Einfluss sowohl auf die Mitarbeiter und die Organisation-belastenden den Workflow Ihres Unternehmens und Produktivität, und drohte Ihrer Mitarbeiter Altersvorsorge und finanzielle Sicherheit. Mitarbeiter Betreuer kostet amerikanische Unternehmen etwa $ 34 Mrd. verlorener Produktivität jedes Jahr. Zusätzlich zu den finanziellen Auswirkungen, nimmt der Stress mit der Betreuung einer älteren Erwachsenen assoziiert einen erheblichen physischen und psychischen Tribut von ihren erwachsenen Kindern. Als Ergebnis sind Bezugspersonen viel eher fair-to-schlechte Gesundheit haben, was zu höheren Kosten im Gesundheitswesen an Unternehmen. Bitte füllen Sie das kurze Umfrage.'),
(59, 'es', 'Los desafíos que muchos trabajadores de cuidado a menudo cara puede tener un impacto negativo sobre el empleado y el flujo de trabajo de la organización, gravar su empresa y la productividad, y amenazando a los planes de jubilación de sus empleados y la seguridad financiera. Cuidadores empleados cuesta a las empresas estadounidenses de aproximadamente $ 34 mil millones en productividad perdida cada año. Además del impacto económico, el estrés asociado con el cuidado de un adulto mayor tiene un peaje considerable física y psicológica de sus hijos adultos. Como resultado, los médicos son mucho más propensos a tener justo a la mala salud, lo que resulta en mayores costos de atención médica a las empresas. Por favor complete la encuesta breve.'),
(59, 'it', 'Le numerose sfide caregiving lavoratori così spesso faccia può avere un impatto negativo sia sul flusso di lavoro dipendente e l&#39;organizzazione-ingombrante della vostra azienda e la produttività, e minacciando i vostri piani di pensionamento dei lavoratori e di sicurezza finanziaria. Caregivers dipendenti costano le imprese americane di circa 34 miliardi di dollari di produttività persi ogni anno. Oltre alle conseguenze finanziarie, lo stress associato con la cura per un adulto di età prende un tributo notevole fisica e psicologica sui loro figli adulti. Di conseguenza, gli operatori sanitari sono molto più probabilità di avere fair-to-cattive condizioni di salute, con costi sanitari più elevati di assistenza alle imprese. Si prega di completare il breve sondaggio.'),
(59, 'ru', 'Многие проблемы ухода работников так часто лицо может иметь негативное влияние как на работника и рабочего процесса организации обременение вашей компании и производительность труда, и угрожая ваших сотрудников пенсионных планов и финансовой безопасности. Сотрудник воспитателей стоить американским компаниям примерно в $ 34 млрд в потере производительности каждый год. В дополнение к финансовым последствиям, стресс, связанный с уходом за пожилого возраста требуется значительное физическое и психологическое сказывается на их взрослых детей. В результате, воспитатели имеют гораздо больше шансов иметь справедливую к плохим состоянием здоровья, что приводит к повышению расходов на здравоохранение в компании. Пожалуйста, заполните краткий обзор.'),
(59, 'zh', '照顾工人的许多挑战，因此经常面对可以拥有雇员和组织的困扰贵公司的工作流程和生产力的负面影响，并威胁到员工的退休计划和财务的安全性。员工照顾者的成本，美国企业每年约3400亿美元的生产力损失。另外的财务影响，他们的成年子女照顾老年人的压力，需要大量的身体和心理伤害。因此，照顾者更可能有公平对穷人的健康，导致更高的医疗费用的公司。请填写简单的调查。'),
(60, 'ar', 'ماذا في المئة من موظفيك تقول ورعاية كبار السن لعضو العائلة أو الأصدقاء؟'),
(60, 'de', 'Wie viel Prozent Ihrer Mitarbeiter würden Sie sagen, sind für ein älteres Familienmitglied oder einen Freund kümmern?'),
(60, 'es', '¿Qué porcentaje de sus empleados dirías que está cuidando a un miembro mayor de la familia o un amigo?'),
(60, 'it', 'Qual è la percentuale dei vostri dipendenti diresti si prende cura di un familiare di età superiore o amico?'),
(60, 'ru', 'Какой процент ваших сотрудников вы говорите ухаживаете за старшего члена семьи или друга?'),
(60, 'zh', '百分之多少，你的员工，你会说是照顾年长的家庭成员或朋友吗？'),
(61, 'ar', 'منظمتكم تقديم معلومات وخدمات الدعم للموظفين الذين هم الآن، أو يمكن أن رعاية أفراد الأسرة من كبار السن أو الأصدقاء؟'),
(61, 'de', 'Hat Ihre Organisation bieten Informationen und Unterstützung für Mitarbeiter, die jetzt oder für ältere Familienmitglieder oder Freunde werden pflegen?'),
(61, 'es', '¿Su organización proporciona servicios de información y apoyo a los empleados que ahora están o pueden estar atendiendo a los miembros mayores de la familia o amigos?'),
(61, 'it', 'La vostra organizzazione fornire servizi di informazione e di sostegno per i dipendenti che ora sono o possono essere la cura per i membri più anziani della famiglia o amici?'),
(61, 'ru', 'Предоставляет ли ваша организация информации и поддержки для работников, которые в настоящее время или могут быть забота о старших членов семьи или друзей?'),
(61, 'zh', '您的组织提供信息和支持服务的员工现在或可能要照顾年长的家庭成员或朋友吗？'),
(62, 'ar', 'منظمتكم تقديم أدلة المستندة إلى برامج لدعم الموظفين الذين هم الآن، أو يمكن أن رعاية أفراد الأسرة من كبار السن أو الأصدقاء؟'),
(62, 'de', 'Bietet Ihre Organisation Evidenzbasierte Programme für Mitarbeiter, die jetzt oder für ältere Familienmitglieder oder Freunde werden Pflege unterstützen?'),
(62, 'es', '¿Su organización proporciona programas basados ​​en evidencias para apoyar a los empleados que están ahora o se puede cuidar a los miembros mayores de la familia o amigos?'),
(62, 'it', 'La vostra organizzazione fornire elementi di prova basati su programmi di sostegno ai lavoratori che oggi sono o possono essere la cura per i membri più anziani della famiglia o amici?'),
(62, 'ru', 'Предоставляет ли ваша организация на основе фактических данных программ поддержки работников, которые в настоящее время или могут быть забота о старших членов семьи или друзей?'),
(62, 'zh', '您的组织是否提供以证据为基础的方案，以支持员工现在或可能要照顾年长的家庭成员或朋友吗？'),
(63, 'ar', 'إذا كانت مؤسستك توفر الموارد رعاية المسنين لموظفيك، وهذه الموارد المقدمة؟'),
(63, 'de', 'Wenn Ihre Organisation Seniorenbetreuung Ressourcen, um Ihre Mitarbeiter werden diese Ressourcen zur Verfügung gestellt?'),
(63, 'es', 'Si su organización proporciona recursos para cuidar personas mayores a sus empleados, estos recursos se proporcionan?'),
(63, 'it', 'Se l&#39;organizzazione fornisce risorse accoglienza delle persone anziane ai dipendenti, queste risorse sono forniti?'),
(63, 'ru', 'Если Ваша организация предоставляет престарелыми ресурсов для ваших сотрудников, которые эти ресурсы, предоставляемые?'),
(63, 'zh', '如果您的组织您的员工提供老人照护资源，这些资源？'),
(64, 'ar', 'منظمتكم توفير ساعات العمل المرنة للموظفين الذين هم الآن، أو يمكن أن رعاية أفراد الأسرة من كبار السن أو الأصدقاء؟'),
(64, 'de', 'Bietet Ihre Organisation flexible Arbeitszeiten für die Mitarbeiter, die jetzt oder für ältere Familienmitglieder oder Freunde werden pflegen?'),
(64, 'es', '¿Su organización proporciona un horario flexible para los empleados que ya están o pueden estar atendiendo a los miembros mayores de la familia o amigos?'),
(64, 'it', 'La vostra organizzazione prevedere orari flessibili per i dipendenti che ora sono o possono essere la cura per i membri più anziani della famiglia o amici?'),
(64, 'ru', 'Предоставляет ли ваша организация гибкий график работы для сотрудников, которые в настоящее время или могут быть забота о старших членов семьи или друзей?'),
(64, 'zh', '您的组织是否提供灵活的工作时间，员工现在或可能要照顾年长的家庭成员或朋友吗？'),
(65, 'ar', 'لا تتبع أو مؤسستك قياس أثر مقدمي الرعاية العاملين الأسرة على المؤشرات مثل التغيب الإنتاجية أو الاحتفاظ،؟'),
(65, 'de', 'Hat Ihre Organisation zu verfolgen oder messen die Auswirkungen der Erwerbstätigen pflegende Angehörige auf Indikatoren wie Fehlzeiten, die Produktivität oder die Retention?'),
(65, 'es', '¿Su organización rastrear o medir el impacto de los cuidadores familiares ocupadas en indicadores tales como el ausentismo, la productividad o la retención?'),
(65, 'it', 'La vostra organizzazione tracciare o misurare l&#39;impatto delle assistenti familiari lavoratori su indicatori come l&#39;assenteismo, la produttività, o conservazione?'),
(65, 'ru', 'Существует ли в вашей организации отслеживать и измерять воздействие занятых воспитателей семью на такие показатели, как прогулы, производительности, или удержание?'),
(65, 'zh', '您的组织是否跟踪测量等指标缺勤，生产力，或保留就业家庭照顾者的影响？'),
(66, 'ar', 'منظمتكم توفير تدريب المشرفين والمديرين حول قضايا رعاية المسنين موظفيها قد تواجه؟'),
(66, 'de', 'Bietet Ihre Organisation Ausbildung von Vorgesetzten und Managern zu Seniorenbetreuung Probleme ihrer Mitarbeiter zugewandt sein kann?'),
(66, 'es', '¿Su organización proporciona formación de supervisores y gerentes sobre cuestiones de cuidado de ancianos a sus empleados pueden estar enfrentando?'),
(66, 'it', 'La vostra organizzazione provvedere alla formazione dei supervisori e manager su temi accoglienza delle persone anziane i loro dipendenti possono essere di fronte?'),
(66, 'ru', 'Предоставляет ли ваша организация обучения руководителей и менеджеров по вопросам престарелыми своих сотрудников может столкнуться?'),
(66, 'zh', '您的组织是否提供培训，监事会和经理对老人照护他们的员工可能会面临的问题吗？'),
(67, 'ar', 'هل تشعر أن ثقافة الشركات تدعم تقديم الرعاية الموظفين؟'),
(67, 'de', 'Haben Sie das Gefühl, dass die Unternehmenskultur caregiving Mitarbeiter unterstützt?'),
(67, 'es', '¿Cree usted que la cultura de la empresa apoya a los empleados de cuidado?'),
(67, 'it', 'Pensi che la cultura aziendale supporta dipendenti caregiving?'),
(67, 'ru', 'Считаете ли вы, что корпоративная культура поддерживает ухода сотрудников?'),
(67, 'zh', '你觉得的企业文化支持照顾员工？'),
(68, 'ar', 'وبرامج التعليم عبر الإنترنت لموظفيك لدعم هدفها المتمثل في الاستمرار في أن تكون الرعاية الأسرية وعامل الإنتاجية تكون ذات قيمة لمنظمتكم؟'),
(68, 'de', 'Möchten Online Bildungsprogramme für Ihre Mitarbeiter, um ihr Ziel weiter zu einer Familie Bezugsperson sein und eine produktive Arbeiter unterstützt wertvoll sein für Ihre Organisation?'),
(68, 'es', 'Me programas de educación en línea para sus empleados para apoyar su objetivo de seguir siendo un cuidador familiar y un trabajador productivo es valioso para su organización?'),
(68, 'it', 'Sarebbe programmi di formazione on-line per i dipendenti per sostenere il loro obiettivo di continuare ad essere un caregiver familiare e un lavoratore produttivo essere prezioso per la vostra organizzazione?'),
(68, 'ru', 'Будет онлайновые образовательные программы для сотрудников Вашей компании, чтобы поддержать их цели, продолжая оставаться семьей опекуна и продуктивным работником быть полезны для вашей организации?'),
(68, 'zh', '网上教育节目，为您的员工支持他们的目标是继续成为一个家庭照顾者和生产工人到您的组织是有价值的呢？'),
(69, 'ar', 'وقد مؤسستك القيام به مسح لموظفيك لفهم قضايا تقديم الرعاية؟'),
(69, 'de', 'Hat Ihre Organisation einen Überblick über Ihre Mitarbeiter caregiving Probleme zu verstehen getan?'),
(69, 'es', '¿Su organización ha realizado una encuesta entre sus empleados a entender los problemas de cuidado?'),
(69, 'it', 'La vostra organizzazione ha fatto un sondaggio dei vostri dipendenti per comprendere problematiche caregiving?'),
(69, 'ru', 'Занимается ли ваша организация сделала обзор ваших сотрудников, чтобы понять уходу вопросы?'),
(69, 'zh', '您的组织你的员工做了调查，以了解护理问题？'),
(70, 'ar', 'أقل من 10٪'),
(70, 'de', 'Weniger als 10%'),
(70, 'es', 'Menos del 10%'),
(70, 'it', 'Meno del 10%'),
(70, 'ru', 'Менее 10%'),
(70, 'zh', '只有不到10％'),
(71, 'ar', '10-20٪'),
(71, 'de', '10-20%'),
(71, 'es', '10-20%'),
(71, 'it', '10-20%'),
(71, 'ru', '10-20%'),
(71, 'zh', '10％至20％'),
(72, 'ar', '21-30٪'),
(72, 'de', '21-30%'),
(72, 'es', '21-30%'),
(72, 'it', '21-30%'),
(72, 'ru', '21-30%'),
(72, 'zh', '21-30％'),
(73, 'ar', '31-50٪'),
(73, 'de', '31-50%'),
(73, 'es', '31-50%'),
(73, 'it', '31-50%'),
(73, 'ru', '31-50%'),
(73, 'zh', '31-50％'),
(74, 'ar', 'أكثر من 50٪'),
(74, 'de', 'Mehr als 50%'),
(74, 'es', 'Más del 50%'),
(74, 'it', 'Più del 50%'),
(74, 'ru', 'Более чем на 50%'),
(74, 'zh', '超过50％'),
(75, 'ar', 'غير متأكد'),
(75, 'de', 'Unsicher'),
(75, 'es', 'Inseguro'),
(75, 'it', 'Incerto'),
(75, 'ru', 'Неуверенный'),
(75, 'zh', '不确定'),
(76, 'ar', 'من خلال مزود EAP أو وسيط'),
(76, 'de', 'Durch Ihre EAP-Anbieter oder Makler'),
(76, 'es', 'A través de su proveedor de EAP o corredor'),
(76, 'it', 'Attraverso il vostro fornitore di EAP o un broker'),
(76, 'ru', 'Благодаря вашей EAP поставщика или брокера'),
(76, 'zh', '通过您的EAP供应商或经纪人'),
(77, 'ar', 'من خلال تنظيم الخاصة بك (HR أو غيرها)'),
(77, 'de', 'Durch die eigene Organisation (HR oder andere)'),
(77, 'es', 'A través de su propia organización (recursos humanos o de otro tipo)'),
(77, 'it', 'Attraverso la propria organizzazione (HR o altro)'),
(77, 'ru', 'Благодаря вашей организации (HR или другой)'),
(77, 'zh', '通过自己的组织（HR或其他）'),
(78, 'ar', 'من خلال استشاريين خارجيين'),
(78, 'de', 'Durch externe Berater'),
(78, 'es', 'A través de consultores externos'),
(78, 'it', 'Attraverso consulenti esterni'),
(78, 'ru', 'С помощью внешних консультантов'),
(78, 'zh', '通过外部顾问'),
(79, 'ar', 'لا، بل لديهم مصلحة في القيام مسح'),
(79, 'de', 'Nein, das würde aber Interesse machen eine Umfrage'),
(79, 'es', 'No, pero tendría interés en hacer una encuesta'),
(79, 'it', 'No, ma avrebbe interesse a fare un sondaggio'),
(79, 'ru', 'Нет, но будет иметь интерес в этом опрос'),
(79, 'zh', '没有，但有兴趣做一个调查'),
(80, 'ar', 'الرعاية'),
(80, 'de', 'Betreuer'),
(80, 'es', 'cuidador'),
(80, 'it', 'badante'),
(80, 'ru', 'воспитатель'),
(80, 'zh', '照顾者');
INSERT INTO `onlinecourseportal_message` (`id`, `language`, `translation`) VALUES
(81, 'ar', 'A الرعاية هو &quot;غير الرسمي&quot; مقدم الرعاية في المنزل والمجتمع المحلي لصديق قديمة أحد الوالدين أو أحد أفراد العائلة، أو شخص، عادة. تقديم الرعاية الأسرية هو عمل من أعمال مساعدة شخص ما يهمك من هو مصاب بمرض مزمن أو المعاقين والذي يحتاج بعض المساعدة في الأنشطة اليومية أو الذين قد لا تكون قادرة على رعاية أنفسهم. أكثر من 65 مليون شخص (29٪ من سكان الولايات المتحدة) يقضون ما معدله 20 ساعة في الأسبوع لرعاية أحد أفراد الأسرة المصابين بأمراض مزمنة والمعوقين، أو العمر أو أي صديق خلال سنة معينة. يرجى إكمال المسح وجيزة.'),
(81, 'de', 'Eine Betreuerin ist eine &quot;informelle&quot; Anbieter von in-Home and Community Care zu einer älteren einzelnen, meist ein Elternteil, ein Familienmitglied oder einen Freund. Familie caregiving ist der Akt der Unterstützung Sie kümmern, die chronisch krank oder behindert ist und wer braucht etwas Unterstützung in der täglichen Aktivitäten, oder die möglicherweise nicht mehr in der Lage, für sich selbst sorgen. Mehr als 65 Millionen Menschen (29% der US-Bevölkerung) verbringen durchschnittlich 20 Stunden pro Woche Pflege eines chronisch kranke, behinderte oder ältere Familienmitglied oder einen Freund in einem bestimmten Jahr. Bitte füllen Sie das kurze Umfrage.'),
(81, 'es', 'Los cuidadores son &quot;informales&quot; proveedor de en el hogar y en la comunidad atención a un viejo individuo-por lo general un padre, un familiar o un amigo. Cuidado de la familia es el acto de ayudar a alguien que te importa, que es una enfermedad crónica o discapacidad y que necesita un poco de ayuda en las actividades diarias o que ya no sea capaz de cuidar de sí mismos. Más de 65 millones de personas (29% de la población de los EE.UU.) gastan un promedio de 20 horas por semana para cuidar a un familiar enfermo crónico, discapacitado o anciano o de un amigo durante un año determinado. Por favor complete la encuesta breve.'),
(81, 'it', 'Un caregiver è un fornitore di &#39;informale&#39; di servizi a domicilio e le cure sanitarie a un vecchio singolo di solito un genitore, un familiare o un amico. Caregiving familiare è l&#39;atto di aiutare qualcuno a cui tieni che è malati cronici o disabili e che ha bisogno di qualche aiuto nelle attività quotidiane o che potrebbe non essere più in grado di badare a se stessi. Più di 65 milioni di persone (il 29% della popolazione degli Stati Uniti) spendono una media di 20 ore a settimana per prendersi cura di un membro della famiglia malati cronici, disabili, o anziani o un amico nel corso di un dato anno. Si prega di completare il breve sondaggio.'),
(81, 'ru', 'Воспитатель «неофициальной» поставщика в семье и общине помощи старших индивидуальных обычно родителя, члена семьи или друга. Семья ухода является актом помощи кого-то вы заботитесь о том, кто хронически больными или инвалидами и кто нуждается в некоторой помощи в повседневной деятельности или кто может больше не быть в состоянии заботиться о себе. Более 65 миллионов человек (29% населения США) тратят в среднем 20 часов в неделю ухода за хроническими больными, инвалидами или престарелыми членами семьи или друга в любой данный год. Пожалуйста, заполните краткий обзор.'),
(81, 'zh', '做保姆是一种“非正式”的供应商，在家居及社区照顾到旧的个人，通常是父母，家庭成员或朋友。家庭照顾的是的协助你关心谁是残疾人士及长期病患者或需要一些援助，在日常活动中可能不再能够照顾自己的人的行为。在任何给定的一年，超过65万人（美国总人口的29％）的平均花费20个小时，每周关怀为长期病患，残疾或老年家庭成员或朋友。请填写简单的调查。'),
(82, 'ar', 'هل تعتبر نفسك الآن إلى الرعاية الفردية قديمة مثل أحد الوالدين أو قريب آخر أو صديق؟'),
(82, 'de', 'Sie betrachten nun selbst eine Bezugsperson zu einer älteren einzelnen wie Eltern, anderen Verwandten oder Freund?'),
(82, 'es', 'Actualmente, ¿se considera usted un cuidador de una persona mayor, como un padre, otro pariente, o amigo?'),
(82, 'it', 'Lei ora ti consideri un assistente ad un individuo più vecchio, come un genitore, un altro parente, o un amico?'),
(82, 'ru', 'Теперь вы считаете себя воспитатель старшего отдельных, таких как родитель, другой родственник или друг?'),
(82, 'zh', '你现在认为自己是一个照顾者，老年人如父母，其他亲属或朋友吗？'),
(83, 'ar', 'هل ترى نفسك كمقدم رعاية لكبار السن الفردية في المستقبل؟'),
(83, 'de', 'Siehst du dich als Bezugsperson zu einer älteren Person in der Zukunft?'),
(83, 'es', '¿Se ve usted como cuidador de una persona mayor en el futuro?'),
(83, 'it', 'Ti vedi come una badante a un individuo più vecchio in futuro?'),
(83, 'ru', 'Видите ли вы себя в качестве воспитателя старшего человека в будущем?'),
(83, 'zh', '你认为自己做保姆的老年人在未来？'),
(84, 'ar', 'كيف تتطور تقديم الرعاية دورك؟'),
(84, 'de', 'Wie haben Ihre Pflegerolle entwickeln?'),
(84, 'es', '¿Cómo fue su papel de cuidador evolucionar?'),
(84, 'it', 'Come ha fatto il tuo ruolo di caregiver evolvere?'),
(84, 'ru', 'Как ваши заботы роль развиваться?'),
(84, 'zh', '你怎么照顾的角色演变？'),
(85, 'ar', 'كمقدم رعاية، يمكنك الآن أو في المستقبل مساعدة المسن في الأنشطة اليومية. يرجى التحقق من تلك الأنشطة التي الآن أو في المستقبل قد تقديم المساعدة إلى المسن. (تحقق كل ما ينطبق)'),
(85, 'de', 'Als Helfer, können Sie jetzt oder in der Zukunft unterstützen eine ältere Person mit täglichen Aktivitäten. Bitte überprüfen Sie diese Tätigkeiten, die Sie jetzt oder in der Zukunft bieten Unterstützung für eine ältere Person. (Zutreffendes bitte ankreuzen)'),
(85, 'es', 'Como cuidador, usted puede ahora o en el futuro ayudar a una persona mayor con las actividades diarias. Por favor marque las actividades que usted puede ahora o en el futuro prestar asistencia a una persona mayor. (Marque todas las que apliquen)'),
(85, 'it', 'L&#39;assistente, è possibile che ora o in futuro, aiutare una persona anziana con le attività quotidiane. Si prega di verificare le attività che si possono ora o in futuro, fornire assistenza a una persona di età superiore. (Barrare le caselle pertinenti)'),
(85, 'ru', 'Как воспитатель, вы можете сейчас или в будущем помочь старше человек с повседневной деятельностью. Пожалуйста, проверьте те мероприятия, которые вы сейчас или в будущем оказывать помощь старшего человека. (Отметьте все, что подходит)'),
(85, 'zh', '做保姆，你现在可以在未来帮助老年人的日常活动。请您现在或可在未来提供援助，以一个老年人的这些活动。 （选择所有适用的）'),
(86, 'ar', 'وتقديم الرعاية للشخص المتأثر الأكبر سنا وظيفتك بطريقة ما؟ إذا كنت ترى نفسك كمقدم رعاية المستقبل، هل تعتقد مسؤولياتكم تقديم الرعاية سيؤثر عملك بطريقة أو بأخرى؟'),
(86, 'de', 'Hat die Betreuung für eine ältere betroffene Einzelperson Ihre Arbeit in irgendeiner Weise? Wenn Sie sich selbst sehen, wie eine zukünftige Betreuer, halten Sie Ihre pflegerischen Aufgaben wird Ihre Arbeit in irgendeiner Weise beeinflussen?'),
(86, 'es', 'Tiene la atención a una persona mayor afectado su trabajo de alguna manera? Si usted se ve como un cuidador futuro, ¿cree que sus responsabilidades de cuidador afectará su trabajo de alguna manera?'),
(86, 'it', 'Ha fornire assistenza per una persona di età superiore influenzato il tuo lavoro in qualche modo? Se ti vedi come un caregiver futuro, pensi che le vostre responsabilità caregiving interesserà il vostro lavoro in qualche modo?'),
(86, 'ru', 'Имеет обеспечение ухода за старшего отдельных повлияло на вашу работу в некотором роде? Если вы видите себя в качестве будущего воспитателя, вы считаете, что ваши заботы обязанности повлияет на вашу работу в некотором роде?'),
(86, 'zh', '为老年人提供医疗服务以某种方式影响你的工作吗？如果你认为自己是未来的照顾者，你认为在某种程度上照顾的责任，会影响你的工作吗？'),
(87, 'ar', 'كيف تتأثر الرعاية وظيفتك؟ قد إذا كنت ترى نفسك كمقدم رعاية المستقبل، كيف ترى الرعاية تؤثر وظيفتك؟ (تحقق كل ما ينطبق)'),
(87, 'de', 'Wie hat Pflegeaufgaben betroffen Ihrem Job? Wenn Sie sich selbst sehen, wie eine zukünftige Betreuer, wie denkst du Pflegeaufgaben können Einfluss auf Ihre Arbeit? (Zutreffendes bitte ankreuzen)'),
(87, 'es', '¿Cómo ha afectado a los cuidados de su trabajo? Si usted se ve como un cuidador futuro, ¿cómo cree usted que puede afectar a los cuidados de su trabajo? (Marque todas las que apliquen)'),
(87, 'it', 'Come ha caregiving influenzato il tuo lavoro? Se ti vedi come un caregiver futuro, come pensi che caregiving può influenzare il tuo lavoro? (Barrare le caselle pertinenti)'),
(87, 'ru', 'Каким ухода повлияло на вашу работу? Если вы видите себя в качестве будущего воспитателя, как вы думаете, ухода может повлиять на вашу работу? (Отметьте все, что подходит)'),
(87, 'zh', '如何照顾影响你的工作吗？如果你认为自己是未来的照顾者，你是怎么想的照顾，可能会影响你的工作吗？ （选择所有适用的）'),
(88, 'ar', 'كيف تتأثر الرعاية حياتك الشخصية؟ قد إذا كنت ترى نفسك كمقدم رعاية المستقبل، كيف ترى الرعاية تؤثر على حياتك الشخصية؟ (تحقق كل ما ينطبق)'),
(88, 'de', 'Wie hat Pflegeaufgaben betroffen Ihrem persönlichen Leben? Wenn Sie sich selbst sehen, wie eine zukünftige Betreuer, wie denkst du caregiving beeinflussen können Ihr persönliches Leben? (Zutreffendes bitte ankreuzen)'),
(88, 'es', '¿Cómo ha afectado su vida cuidado personal? Si usted se ve como un cuidador futuro, ¿cómo cree usted que los cuidados puede afectar su vida personal? (Marque todas las que apliquen)'),
(88, 'it', 'Come ha caregiving influenzato la tua vita personale? Se ti vedi come un caregiver futuro, come pensi che caregiving può influenzare la vostra vita personale? (Barrare le caselle pertinenti)'),
(88, 'ru', 'Каким ухода повлияло на вашу личную жизнь? Если вы видите себя в качестве будущего воспитателя, как вы думаете, ухода может повлиять на вашу личную жизнь? (Отметьте все, что подходит)'),
(88, 'zh', '影响你的个人生活如何照顾？如果你认为自己是未来的照顾者，你是怎么想的照顾，可能会影响你的个人生活吗？ （选择所有适用的）'),
(89, 'ar', 'في أسبوع عادي، كم عدد ساعات هل تقديم المساعدة والرعاية والإشراف لأو المسن؟'),
(89, 'de', 'In einer typischen Woche, wie viele Stunden Sie bieten Hilfe, Betreuung oder Betreuung für ältere Menschen?'),
(89, 'es', 'En una semana típica, ¿cuántas horas le ofrecerá ayuda, cuidado o supervisión de una persona mayor?'),
(89, 'it', 'In una settimana tipica, quante ore si fa a fornire aiuto, cura, vigilanza o per un individuo più vecchio?'),
(89, 'ru', 'В типичной недели, сколько часов вы предоставляете помощь, уход или надзор за старшего человека?'),
(89, 'zh', '在一个典型的一周中，多少小时，你提供帮助，护理，或监督为老年人的吗？'),
(90, 'ar', 'رب عملك لا تقدم أي تعليم أو الموارد لمساعدتك كمقدم رعاية الأسرة؟'),
(90, 'de', 'Hat Ihr Arbeitgeber eine Ausbildung oder Ressourcen, um Sie als pflegenden Angehörigen helfen?'),
(90, 'es', '¿Su empleador proporcionar ningún tipo de educación o recursos para ayudar a usted como cuidador familiar?'),
(90, 'it', 'Il vostro datore di lavoro fornisce alcuna istruzione o risorse che consentono di come caregiver familiare?'),
(90, 'ru', 'Имеет ли работодатель предоставить любую образования или ресурсов, чтобы помочь вам в семье опекуна?'),
(90, 'zh', '您的雇主提供教育或资源，为家庭照顾者帮助你吗？'),
(91, 'ar', 'ماذا سيكون قيمة بالنسبة لك كمقدم رعاية الحالية أو المستقبلية لمساعدتك في تقديم الرعاية مسؤولياتكم؟ (تحقق كل ما ينطبق)'),
(91, 'de', 'Was wäre für Sie wertvoller als aktuelle oder zukünftige Betreuer Sie in Ihrer pflegerischen Aufgaben helfen? (Zutreffendes bitte ankreuzen)'),
(91, 'es', '¿Cuál sería valioso para usted como cuidador actual o futuro para ayudarle en sus responsabilidades de cuidador? (Marque todas las que apliquen)'),
(91, 'it', 'Quale sarebbe utile per voi come un caregiver attuale o futuro per aiutarvi nelle vostre responsabilità caregiving? (Barrare le caselle pertinenti)'),
(91, 'ru', 'Что бы быть ценным для вас, как текущие или будущие воспитатель, чтобы помочь вам в вашей заботы обязанности? (Отметьте все, что подходит)'),
(91, 'zh', '什么是有价值的，为当前或未来的照顾者，帮助您在您的照顾责任？ （选择所有适用的）'),
(92, 'ar', 'وألقيت فجأة في دوري I تقديم الرعاية'),
(92, 'de', 'Ich war plötzlich in meinem Pflegerolle geworfen'),
(92, 'es', 'Fui arrojado de repente en mi papel de cuidador'),
(92, 'it', 'Fui improvvisamente gettato nel mio ruolo di caregiver'),
(92, 'ru', 'Я вдруг бросили в мою заботу роли'),
(92, 'zh', '我突然被​​扔进我照顾的作用'),
(93, 'ar', 'بلدي دور تقديم الرعاية المتقدمة ببطء على مدى عدة سنوات'),
(93, 'de', 'Meine Pflegerolle langsam über mehrere Jahre entwickelt'),
(93, 'es', 'Mi papel de cuidador desarrolla lentamente a lo largo de unos años'),
(93, 'it', 'Il mio ruolo di caregiver sviluppato lentamente nel corso di pochi anni'),
(93, 'ru', 'Мои заботы роль развивается медленно в течение нескольких лет'),
(93, 'zh', '我几年发展缓慢的护理角色'),
(94, 'ar', 'سوف دوري تقديم الرعاية تنمو في نهاية المطاف أكثر انخراطا'),
(94, 'de', 'Meine Pflegerolle schließlich wachsen beteiligten'),
(94, 'es', 'Mi papel de cuidador con el tiempo se volverá más complicado'),
(94, 'it', 'Il mio ruolo di caregiver finirà per crescere di più coinvolti'),
(94, 'ru', 'Мои заботы роль, в конечном счете расти более сложный'),
(94, 'zh', '我照顾的作用最终将变得更复杂'),
(95, 'ar', 'الاحتياجات الطبية مثل الذهاب الى عيادة الطبيب أو مساعدة مع الأدوية'),
(95, 'de', 'Medizinische Bedürfnisse wie der Besuch der Arztpraxis oder Unterstützung mit Medikamenten'),
(95, 'es', 'Necesidades médicas tales como ir a la oficina del médico o ayudar con los medicamentos'),
(95, 'it', 'Esigenze mediche come andare in ufficio del medico o l&#39;assistenza con farmaci'),
(95, 'ru', 'Медицинские потребности, такие как собирается кабинете врача или помощь с лекарствами'),
(95, 'zh', '如要在医生的办公室或协助药物的医疗需求'),
(96, 'ar', 'تتبع الفواتير والشيكات، أو غيرها من المسائل المالية'),
(96, 'de', 'Die Verfolgung von Rechnungen, Schecks oder anderen finanziellen Angelegenheiten'),
(96, 'es', 'Hacer un seguimiento de facturas, cheques, u otros asuntos financieros'),
(96, 'it', 'Tenere traccia delle fatture, assegni, o altre questioni finanziarie'),
(96, 'ru', 'Отслеживание векселя, чеки или другие финансовые вопросы'),
(96, 'zh', '跟踪的票据，支票或其他财务事项'),
(97, 'ar', 'إعداد وجبات الطعام، غسل الملابس، أو تنظيف المنزل'),
(97, 'de', 'Zubereitung von Mahlzeiten, Wäsche waschen oder die Reinigung des Hauses'),
(97, 'es', 'La preparación de comidas, lavar la ropa o limpiar la casa'),
(97, 'it', 'Preparare i pasti, fare il bucato, o la pulizia della casa'),
(97, 'ru', 'Приготовление пищи, стирка или уборка дома'),
(97, 'zh', '做饭，洗衣服，打扫房间'),
(98, 'ar', 'الذهاب للتسوق'),
(98, 'de', 'Einkaufen gehen'),
(98, 'es', 'Ir de compras'),
(98, 'it', 'Andare a fare shopping'),
(98, 'ru', 'Ходить за покупками'),
(98, 'zh', '去购物'),
(99, 'ar', 'مساعدة مع صلصة، والاستحمام، أو الوصول إلى الحمام'),
(99, 'de', 'Unterstützung bei Anziehen, Baden, oder sich auf die Toilette'),
(99, 'es', 'Ayudar a vestirse, bañarse o ir al baño'),
(99, 'it', 'Assistere con cabina armadio, bagno, o di ottenere in bagno'),
(99, 'ru', 'Оказание помощи в одевании, купании, или получить в ванной комнате'),
(99, 'zh', '协助穿衣，洗澡，或到浴室'),
(100, 'ar', 'الترتيب لخدمات الرعاية المنزلية التي يقوم بها الآخرين'),
(100, 'de', 'Vermittlung von ambulanten Pflegediensten von anderen durchgeführt'),
(100, 'es', 'La organización de los servicios de atención a domicilio realizadas por otros'),
(100, 'it', 'Organizzazione per i servizi di assistenza domiciliare effettuate da altri'),
(100, 'ru', 'Организация по уходу на дому услуги, выполняемые другими'),
(100, 'zh', '安排进行其他的家居照顾服务'),
(101, 'ar', 'جعل العادية أو تسجيل إجراءات الوصول مرة'),
(101, 'de', 'Erstellen regulären Check-in Besucher'),
(101, 'es', 'Realizar controles regulares en las visitas'),
(101, 'it', 'Effettuare regolari check-in visite'),
(101, 'ru', 'Создание регулярной регистрации посещений'),
(101, 'zh', '进行定期检查，在访问'),
(102, 'ar', 'تخفيض ساعات العمل في'),
(102, 'de', 'Reduzierte Stunden bei der Arbeit'),
(102, 'es', 'La reducción de horas de trabajo'),
(102, 'it', 'Orario ridotto durante il lavoro'),
(102, 'ru', 'Уменьшение часов на работе'),
(102, 'zh', '在工作​​时间减少'),
(103, 'ar', 'الصراعات الوقت بين العمل والمسؤوليات تقديم الرعاية'),
(103, 'de', 'Zeit Konflikte zwischen Arbeit und pflegerische Aufgaben'),
(103, 'es', 'Los conflictos de tiempo entre el trabajo y las responsabilidades del cuidado'),
(103, 'it', 'I conflitti temporali tra il lavoro e le responsabilità caregiving'),
(103, 'ru', 'Время конфликты между работой и уходу обязанностей'),
(103, 'zh', '工作时间之间的矛盾和护理的责任'),
(104, 'ar', 'تغيير إلى وظيفة أقل تطلبا'),
(104, 'de', 'Wechseln Sie zu einem weniger anspruchsvollen Job'),
(104, 'es', 'Cambie a un trabajo menos exigente'),
(104, 'it', 'Passare a un lavoro meno impegnativo'),
(104, 'ru', 'Изменения в менее ответственная работа'),
(104, 'zh', '切换到要求不高的工作'),
(105, 'ar', 'فقدان فرصة تعزيز'),
(105, 'de', 'Verlust der Förderung die Möglichkeit'),
(105, 'es', 'Pérdida de oportunidad de promoción'),
(105, 'it', 'Perdita di opportunità di promozione'),
(105, 'ru', 'Потеря возможности продвижения'),
(105, 'zh', '失去晋升机会'),
(106, 'ar', 'تحتاج إلى استخدام الوقت عطلة أو المرضى لتوفير الرعاية'),
(106, 'de', 'Brauchen Sie einen Urlaub oder krank Zeit nutzen, um zu versorgen'),
(106, 'es', 'Necesidad de utilizar vacaciones o licencia por enfermedad para brindar atención'),
(106, 'it', 'Necessità di utilizzare vacanza o tempo ammalato per fornire assistenza'),
(106, 'ru', 'Нужно использовать отпуск или больничный, чтобы обеспечить уход'),
(106, 'zh', '需要利用休假或生病的时候提供护理'),
(107, 'ar', 'الأعباء المالية لنفسي وعائلتي'),
(107, 'de', 'Finanzielle Belastung für mich und meine Familie'),
(107, 'es', 'Carga financiera para mi y mi familia'),
(107, 'it', 'Onere finanziario per me e la mia famiglia'),
(107, 'ru', 'Финансовое бремя для себя и своей семьи'),
(107, 'zh', '我和我的家人的财务负担'),
(108, 'ar', 'لا ما يكفي من الوقت لنفسي'),
(108, 'de', 'Nicht genug Zeit für mich'),
(108, 'es', 'No tengo suficiente tiempo para mí mismo'),
(108, 'it', 'Non abbastanza tempo per me'),
(108, 'ru', 'Не хватает времени для себя'),
(108, 'zh', '没有足够的时间给自己'),
(109, 'ar', 'لا ما يكفي من الوقت لعائلتي'),
(109, 'de', 'Nicht genug Zeit für meine Familie'),
(109, 'es', 'No hay suficiente tiempo para mi familia'),
(109, 'it', 'Non abbastanza tempo per la mia famiglia'),
(109, 'ru', 'Не хватает времени для моей семьи'),
(109, 'zh', '没有足够的时间为我的家人'),
(110, 'ar', 'تأثير سلبي على صحة بلدي'),
(110, 'de', 'Negative Auswirkungen auf meine eigene Gesundheit'),
(110, 'es', 'Impacto negativo en mi salud'),
(110, 'it', 'Impatto negativo sulla mia salute'),
(110, 'ru', 'Негативное влияние на мое собственное здоровье'),
(110, 'zh', '对自己的健康的负面影响'),
(111, 'ar', 'تقديم الرعاية الاجتماعية يؤثر حياتي'),
(111, 'de', 'Caregiving beeinflusst mein soziales Leben'),
(111, 'es', 'Cuidado afecta mi vida social'),
(111, 'it', 'Caregiving impatto la mia vita sociale'),
(111, 'ru', 'Уход влияет на мою социальную жизнь'),
(111, 'zh', '看护影响我的社交生活'),
(112, 'ar', 'تقديم الرعاية هي مرهقة بالنسبة لي'),
(112, 'de', 'Caregiving ist stressig für mich'),
(112, 'es', 'El cuidado es estresante para mí'),
(112, 'it', 'Caregiving è stressante per me'),
(112, 'ru', 'Уход является стрессом для меня'),
(112, 'zh', '对我来说是压力看护'),
(113, 'ar', 'أقل من 2 ساعة أسبوعيا'),
(113, 'de', 'Weniger als 2 Stunden pro Woche'),
(113, 'es', 'Menos de 2 horas semanales'),
(113, 'it', 'Meno di 2 ore settimanali'),
(113, 'ru', 'Менее, чем за 2 часа в неделю'),
(113, 'zh', '每周少于2小时'),
(114, 'ar', '2-5 ساعات أسبوعيا'),
(114, 'de', '2-5 Stunden pro Woche'),
(114, 'es', '2-5 horas por semana'),
(114, 'it', '2-5 ore settimanali'),
(114, 'ru', '2-5 часа в неделю'),
(114, 'zh', '每周2-5小时'),
(115, 'ar', '6-10 ساعات أسبوعيا'),
(115, 'de', '6-10 Stunden pro Woche'),
(115, 'es', '6-10 horas semanales'),
(115, 'it', '6-10 ore settimanali'),
(115, 'ru', '6-10 часов в неделю'),
(115, 'zh', '每周6-10小时'),
(116, 'ar', '11-20 ساعة أسبوعيا'),
(116, 'de', '11-20 Stunden pro Woche'),
(116, 'es', '11-20 horas semanales'),
(116, 'it', '11-20 ore settimanali'),
(116, 'ru', '11-20 часов в неделю'),
(116, 'zh', '11-20小时，每周'),
(117, 'ar', 'أكثر من 20 ساعة أسبوعيا'),
(117, 'de', 'Mehr als 20 Stunden pro Woche'),
(117, 'es', 'Más de 20 horas semanales'),
(117, 'it', 'Più di 20 ore settimanali'),
(117, 'ru', 'Более 20 часов в неделю'),
(117, 'zh', '每周超过20小时'),
(118, 'ar', 'الموارد اللازمة لمساعدتي على فهم رعاية الأفراد الأكبر سنا'),
(118, 'de', 'Ressourcen, um mir zu helfen verstehen für ältere Menschen kümmern'),
(118, 'es', 'Recursos para ayudarme a entender el cuidado de las personas mayores'),
(118, 'it', 'Risorse per aiutarmi a capire la cura per gli individui più anziani'),
(118, 'ru', 'Ресурсы, чтобы помочь мне понять, уход за пожилых людей'),
(118, 'zh', '资源，帮助我了解照顾老年人'),
(119, 'ar', 'التعليم لمساعدتي على فهم دوري كمقدم رعاية الأسرة'),
(119, 'de', 'Bildung, mir zu helfen zu verstehen meine Rolle als pflegenden Angehörigen'),
(119, 'es', 'Educación para ayudarme a entender mi papel como cuidador familiar'),
(119, 'it', 'Istruzione per aiutarmi a capire il mio ruolo di caregiver familiare'),
(119, 'ru', 'Образование чтобы помочь мне понять свою роль в качестве семейного воспитателя'),
(119, 'zh', '教育，帮助我了解我的一个家庭照顾者的角色，'),
(120, 'ar', 'أدوات لمساعدتي التواصل بشكل أكثر فعالية مع الأفراد الأكبر سنا'),
(120, 'de', 'Werkzeuge, mir zu helfen, effektiver zu kommunizieren mit älteren Menschen'),
(120, 'es', 'Herramientas para ayudarme a comunicarse más eficazmente con las personas mayores'),
(120, 'it', 'Strumenti per aiutarmi a comunicare più efficacemente con gli individui più anziani'),
(120, 'ru', 'Инструмент, чтобы помочь мне более эффективно общаться со взрослыми лицами'),
(120, 'zh', '工具来帮助我更有效地与年长者'),
(121, 'ar', 'المعلومات لمساعدتي على فهم ودعم احتياجات والتفضيلات وسلامة الأفراد الأكبر سنا في رعايتي الحالية أو المستقبلية'),
(121, 'de', 'Informationen, mir zu helfen zu verstehen und unterstützt die Bedürfnisse, Vorlieben, und die Sicherheit der älteren Menschen in meiner jetzigen oder zukünftigen Pflege'),
(121, 'es', 'La información que me ayude a entender y apoyar las necesidades, preferencias, y la seguridad de las personas mayores a mi cargo actual o futuro'),
(121, 'it', 'Informazioni di aiutarmi a capire e sostenere le esigenze, le preferenze, e la sicurezza di individui più anziani nella mia cura attuale o futuro'),
(121, 'ru', 'Информация, чтобы помочь мне понять и поддержать потребности, предпочтения и безопасности людей старшего возраста в моей нынешней или будущей помощи'),
(121, 'zh', '信息，以帮助我理解和支持老年人的需求，喜好和安全在我的当前或未来的护理'),
(122, 'ar', 'معلومات لمساعدتي على فهم نظام الرعاية الصحية، والرعاية الطبية، والرعاية الطويلة الأجل'),
(122, 'de', 'Informationen zu helfen mir zu verstehen, das Gesundheitssystem, Medicare und Langzeitpflege'),
(122, 'es', 'La información que me ayude a entender el sistema de atención de salud, Medicare y cuidado a largo plazo'),
(122, 'it', 'Informazioni di aiutarmi a capire il sistema di assistenza sanitaria, Medicare, e assistenza a lungo termine'),
(122, 'ru', 'Информация, чтобы помочь мне разобраться в системе здравоохранения, медицинской помощи, и долгосрочный уход'),
(122, 'zh', '信息，以帮助我了解的医疗保健制度，医疗保险，长期护理'),
(123, 'ar', 'الموارد لمساعدتي إدارة مسؤولياتي تقديم الرعاية وتلبية بلدي البدني والعقلي والعاطفي والاحتياجات الصحية'),
(123, 'de', 'Ressourcen, mir zu helfen mit meinem pflegerischen Aufgaben und richte meinen eigenen körperlichen, geistigen und emotionalen Gesundheit Bedürfnisse'),
(123, 'es', 'Recursos para ayudarme a manejar mis responsabilidades de cuidado y dirigir mi propio bienestar físico, mental y necesidades de salud emocional'),
(123, 'it', 'Risorse per aiutarmi a gestire le mie responsabilità di accudimento e rivolgo il mio fisico, mentale, emotivo e bisogni di salute'),
(123, 'ru', 'Ресурсы, чтобы помочь мне управлять моей заботы обязанности и решать свои физические, умственные и эмоциональные потребности в области здравоохранения'),
(123, 'zh', '资源，帮助我管理我的照顾责任，并解决我自己的身体，心理和情绪健康的需求，'),
(124, 'ar', 'أدوات لتحقيق التوازن بين تقديم الرعاية مساعدتي بلدي ومسؤوليات العمل'),
(124, 'de', 'Werkzeuge, mir zu helfen Gleichgewicht meiner Pflege und berufliche Verantwortung'),
(124, 'es', 'Herramientas para ayudarme a equilibrar mi cuidado y las responsabilidades del trabajo'),
(124, 'it', 'Strumenti per aiutarmi a bilanciare il mio accudimento e le responsabilità di lavoro'),
(124, 'ru', 'Инструмент, чтобы помочь мне баланс моего ухода и трудовых обязанностей'),
(124, 'zh', '工具来帮助我平衡我的照料和工作责任。'),
(125, 'es', 'Archivo &quot;{file}&quot; no existe.'),
(126, 'de', 'Felder mit <span class="required">*</span> sind Pflichtfelder.'),
(126, 'es', 'Los campos con <span class="required">*</span> son obligatorios.'),
(126, 'fr', 'Les champs avec <span class="required">*</span> sont obligatoires.'),
(126, 'it', 'I campi contrassegnati con <span class="required">*</span> sono obbligatori.'),
(126, 'zh_cn', '带<span class="required">*为必填</span>栏位。'),
(127, 'de', 'Identifikation'),
(127, 'es', 'Identificación'),
(127, 'fr', 'ID'),
(127, 'it', 'ID'),
(127, 'zh_cn', 'ID'),
(128, 'de', 'Kennwort'),
(128, 'es', 'Contraseña'),
(128, 'fr', 'Mot de passe'),
(128, 'it', 'Password'),
(128, 'zh_cn', '密码'),
(129, 'de', 'Salz'),
(129, 'es', 'Sal'),
(129, 'fr', 'Sel'),
(129, 'it', 'Sale'),
(129, 'zh_cn', '盐'),
(130, 'de', 'Gruppen-ID'),
(130, 'es', 'ID de grupo'),
(130, 'fr', 'ID de groupe'),
(130, 'it', 'ID gruppo'),
(130, 'zh_cn', '组ID'),
(131, 'de', 'E-Mail'),
(131, 'es', 'Email'),
(131, 'fr', 'Email'),
(131, 'it', 'E-mail'),
(131, 'zh_cn', '电子邮件'),
(132, 'de', 'Session Key'),
(132, 'es', 'Clave de sesión'),
(132, 'fr', 'Clé de session'),
(132, 'it', 'Chiave di sessione'),
(132, 'zh_cn', '会话密钥'),
(133, 'de', 'Erstellt'),
(133, 'es', 'Creado'),
(133, 'fr', 'Établi'),
(133, 'it', 'Creato'),
(133, 'zh_cn', '创建'),
(134, 'de', 'Schiedsrichter'),
(134, 'es', 'Árbitros'),
(134, 'fr', 'Arbitres'),
(134, 'it', 'Arbitri'),
(134, 'zh_cn', '裁判'),
(135, 'de', 'Verweise'),
(135, 'es', 'Referidos'),
(135, 'fr', 'Parrainages'),
(135, 'it', 'Referenti'),
(135, 'zh_cn', '介绍人'),
(136, 'de', 'Hochgeladene Dateien'),
(136, 'es', 'Archivos subidos'),
(136, 'fr', 'Les fichiers téléchargés'),
(136, 'it', 'File caricati'),
(136, 'zh_cn', '上传文件'),
(137, 'de', 'Benutzer aktiviert'),
(137, 'es', 'Activado por usuario'),
(137, 'fr', 'Activée par l&#39;utilisateur'),
(137, 'it', 'Utente Attivato'),
(137, 'zh_cn', '用户激活'),
(138, 'de', 'User Profile'),
(138, 'es', 'Perfil de usuario'),
(138, 'fr', 'Profil de l&#39;utilisateur'),
(138, 'it', 'Profilo Utente'),
(138, 'zh_cn', '用户配置文件'),
(139, 'de', 'Gruppe'),
(139, 'es', 'Grupo'),
(139, 'fr', 'Groupe'),
(139, 'it', 'Gruppo'),
(139, 'zh_cn', '组'),
(140, 'de', 'Passwort wiederholen'),
(140, 'es', 'Repetir contraseña'),
(140, 'fr', 'Répétez Mot de passe'),
(140, 'it', 'Ripetere la password'),
(140, 'zh_cn', '重复密码'),
(141, 'de', 'Benutzer-ID'),
(141, 'es', 'ID de usuario'),
(141, 'fr', 'ID utilisateur'),
(141, 'it', 'User ID'),
(141, 'zh_cn', '用户ID'),
(142, 'de', 'Vorname'),
(142, 'es', 'Nombre'),
(142, 'fr', 'Prénom'),
(142, 'it', 'Nome'),
(142, 'zh_cn', '名字'),
(143, 'de', 'Nachname'),
(143, 'es', 'Apellido'),
(143, 'fr', 'Nom de famille'),
(143, 'it', 'Cognome'),
(143, 'zh_cn', '姓'),
(144, 'de', 'City'),
(144, 'es', 'Ciudad'),
(144, 'fr', 'Ville'),
(144, 'it', 'Città'),
(144, 'zh_cn', '城市'),
(145, 'de', 'Postleitzahl'),
(145, 'es', 'Código postal'),
(145, 'fr', 'Code postal'),
(145, 'it', 'Codice di avviamento postale'),
(145, 'zh_cn', '邮编'),
(146, 'de', 'Zustand'),
(146, 'es', 'Estado'),
(146, 'fr', 'État'),
(146, 'it', 'Stato'),
(146, 'zh_cn', '国'),
(147, 'de', 'Land'),
(147, 'es', 'País'),
(147, 'fr', 'Pays'),
(147, 'it', 'Paese'),
(147, 'zh_cn', '国家'),
(148, 'de', 'MIME-Typ'),
(148, 'es', 'Tipo MIME'),
(148, 'fr', 'Type MIME'),
(148, 'it', 'Tipo MIME'),
(148, 'zh_cn', 'MIME类型'),
(149, 'de', 'Größe'),
(149, 'es', 'Tamaño'),
(149, 'fr', 'Taille'),
(149, 'it', 'Dimensione'),
(149, 'zh_cn', '大小'),
(150, 'de', 'Name'),
(150, 'es', 'Nombre'),
(150, 'fr', 'Nom'),
(150, 'it', 'Nome'),
(150, 'zh_cn', '名称'),
(151, 'de', 'Avatar'),
(151, 'es', 'Avatar'),
(151, 'fr', 'Avatar'),
(151, 'it', 'Avatar'),
(151, 'zh_cn', '头像'),
(152, 'de', 'Benutzer'),
(152, 'es', 'Usuario'),
(152, 'fr', 'Utilisateur'),
(152, 'it', 'Utente'),
(152, 'zh_cn', '用户'),
(153, 'de', 'Profil'),
(153, 'es', 'perfil'),
(153, 'fr', 'profil'),
(153, 'it', 'profilo'),
(153, 'zh_cn', '轮廓'),
(154, 'de', 'Wie alt sind Sie?'),
(154, 'es', '¿Cuál es su edad?'),
(154, 'fr', 'Quel est votre âge?'),
(154, 'it', 'Qual è la tua età?'),
(154, 'zh_cn', '什么是你的年龄吗？'),
(155, 'de', 'Wie würden Sie Ihre aktuelle Rolle als pflegenden Angehörigen?'),
(155, 'es', '¿Cómo describiría su actual papel como cuidador familiar?'),
(155, 'fr', 'Comment décririez-vous votre rôle actuel en tant qu&#39;aidant familial?'),
(155, 'it', 'Come descriveresti il ​​tuo ruolo attuale di un caregiver familiare?'),
(155, 'zh_cn', '作为家庭照顾者，你会如何形容你目前的角色？'),
(156, 'de', 'Wenn Sie gerade eine Betreuungsperson für einen älteren Elternteil, Verwandten oder Freund, wie viele Stunden pro Woche verbringen Sie pflegerischen oder die Bereitstellung irgendeine Art von Hilfe zu dieser Person?'),
(156, 'es', 'Si usted es actualmente un cuidador de un padre mayor, un familiar, o un amigo, acerca de cuántas horas a la semana dedica cuidado o prestar algún tipo de ayuda a esta persona?'),
(156, 'fr', 'Si vous êtes actuellement un fournisseur de soins d&#39;un parent âgé, un proche ou un ami, environ combien d&#39;heures par semaine consacrez-vous à la prestation de soins ou de fournir un certain type d&#39;aide à cette personne?'),
(156, 'it', 'Se siete attualmente un caregiver per un genitore più anziano, parente, o un amico, di quante ore alla settimana dedichi caregiving o di fornire un certo tipo di aiuto a questa persona?'),
(156, 'zh_cn', '如果你是一个照顾的老父母，亲戚，或朋友，约一个星期你花了多少个小时照顾或提供某种形式的帮助这个人吗？'),
(157, 'de', 'Welche der folgenden Probleme haben Sie als Bezugsperson erlebt? Wenn Sie derzeit nicht Pflegeaufgaben, weiß, welche der folgenden Probleme, die Sie in Ihre zukünftige Rolle als Bezugsperson erwarten? (Zutreffendes bitte ankreuzen)'),
(157, 'es', '¿Cuál de los siguientes problemas ha experimentado usted como cuidador? Si no están cuidados, cuál de los siguientes problemas puede anticipar en su futuro papel como cuidador? (Marque todas las que apliquen)'),
(157, 'fr', 'Lequel des problèmes suivants avez-vous vécu comme un aidant naturel? Si vous n&#39;êtes pas actuellement des soins, lequel des problèmes suivants prévoyez-vous pour votre futur rôle en tant que soignant? (Cochez tout ce qui s&#39;applique)'),
(157, 'it', 'Quale dei seguenti problemi avete vissuto come un caregiver? Se non sono attualmente caregiving, quale dei seguenti problemi è la data prevista nel tuo ruolo futuro come badante? (Barrare le caselle pertinenti)'),
(157, 'zh_cn', '你经历过以下问题做保姆？如果你不照顾，以下问题你预测你的未来做保姆的角色？ （选择所有适用的）'),
(158, 'de', 'Wenn Sie gerade eine Betreuungsperson für einen älteren Elternteil, Verwandten oder Freund, wie viele vollständige oder teilweise geplant Werktagen haben Sie während der letzten 6 Monate wegen Ihrer pflegerischen Aufgaben verpassen?'),
(158, 'es', 'Si usted es actualmente un cuidador de un padre mayor, un pariente o amigo, ¿cuántos días de trabajo programados totales o parciales faltó durante los últimos 6 meses debido a sus responsabilidades de cuidador?'),
(158, 'fr', 'Si vous êtes actuellement un fournisseur de soins d&#39;un parent âgé, un parent, ou un ami, combien de journées de travail complètes ou partielles prévues avez-vous manqué au cours des 6 derniers mois en raison de vos responsabilités d&#39;aidant?'),
(158, 'it', 'Se siete attualmente un caregiver per un genitore più anziano, parente, o un amico, a quanti giorni lavorativi programmati completi o parziali ti è mancato nel corso degli ultimi 6 mesi per le vostre responsabilità caregiving?'),
(158, 'zh_cn', '如果你是一个照顾的老父母，亲戚，或朋友，你错过了多少的全部或部分定个工作日内在过去的6个月，由于你的照顾责任？'),
(159, 'de', 'Unter 21'),
(159, 'es', 'Menor de 21 años'),
(159, 'fr', 'Moins de 21 ans'),
(159, 'it', 'Under 21'),
(159, 'zh_cn', '21岁以下'),
(160, 'de', '21-30'),
(160, 'es', '21-30'),
(160, 'fr', '21-30'),
(160, 'it', '21-30'),
(160, 'zh_cn', '21-30'),
(161, 'de', '31-40'),
(161, 'es', '31-40'),
(161, 'fr', '31-40'),
(161, 'it', '31-40'),
(161, 'zh_cn', '31-40'),
(162, 'de', '41-50'),
(162, 'es', '41-50'),
(162, 'fr', '41-50'),
(162, 'it', '41-50'),
(162, 'zh_cn', '41-50'),
(163, 'de', '51-60'),
(163, 'es', '51-60'),
(163, 'fr', '51-60'),
(163, 'it', '51-60'),
(163, 'zh_cn', '51-60'),
(164, 'de', '61 oder älter'),
(164, 'es', '61 años o más'),
(164, 'fr', '61 ans et plus'),
(164, 'it', '61 o più vecchio'),
(164, 'zh_cn', '61岁以上'),
(165, 'de', 'Ich werde höchstwahrscheinlich pflegerischen Aufgaben für einen älteren Elternteil, Verwandten, Freund oder innerhalb des nächsten Jahres.'),
(165, 'es', 'Yo lo más probable es que los cuidados responsabilidades de un padre mayor, un pariente o amigo en el próximo año.'),
(165, 'fr', 'Je vais très probablement responsabilités en la matière d&#39;un parent âgé, un proche ou un ami dans la prochaine année.'),
(165, 'it', 'Io molto probabilmente hanno caregiving responsabilità per un genitore più anziano, parente, o un amico entro il prossimo anno.'),
(165, 'zh_cn', '我将最有可能照顾的老父母，亲戚，或朋友的责任，在未来一年内。'),
(166, 'de', 'Ich werde höchstwahrscheinlich pflegerischen Aufgaben für einen älteren Elternteil, Verwandten oder Freund in den 2-5 Jahren.'),
(166, 'es', 'Yo lo más probable es que las responsabilidades de cuidado de un padre mayor, un pariente o amigo dentro de los 2-5 años.'),
(166, 'fr', 'Je vais très probablement responsabilités en la matière pour un vieux parent, un proche ou un ami dans les 2-5 ans.'),
(166, 'it', 'Io molto probabilmente hanno caregiving responsabilità per un genitore più anziano, parente, o un amico entro i 2-5 anni.'),
(166, 'zh_cn', '我将最有可能照顾的老父母，亲戚，或朋友的2-5年之内的责任。'),
(167, 'de', 'Ich bin mir nicht sicher über meine Zukunft caregiving Verantwortung.'),
(167, 'es', 'No estoy seguro acerca de mis responsabilidades de cuidado en el futuro.'),
(167, 'fr', 'Je ne suis pas sûr de mes futures responsabilités d&#39;aidants naturels.'),
(167, 'it', 'Non sono sicuro delle mie future responsabilità caregiving.'),
(167, 'zh_cn', '我不知道我的未来照顾的责任。'),
(168, 'de', 'Ich bin derzeit eine Betreuungsperson für einen älteren Elternteil, Verwandten oder Freund.'),
(168, 'es', 'Yo actualmente soy un cuidador de un padre mayor, un pariente o amigo.'),
(168, 'fr', 'Je suis actuellement un fournisseur de soins d&#39;un parent âgé, un parent ou ami.'),
(168, 'it', 'Io attualmente sono una badante per un genitore più anziano, parente, o un amico.'),
(168, 'zh_cn', '我目前是一个较旧的父母，亲戚，或朋友的照顾者。'),
(169, 'de', 'Weniger als eine Stunde'),
(169, 'es', 'Menos de una hora'),
(169, 'fr', 'Moins d&#39;une heure'),
(169, 'it', 'Meno di un&#39;ora'),
(169, 'zh_cn', '不到一小时'),
(170, 'de', '1-4 Stunden / Woche'),
(170, 'es', '1-4 horas / semana'),
(170, 'fr', '1-4 heures / semaine'),
(170, 'it', '1-4 ore / settimana'),
(170, 'zh_cn', '1-4小时/周'),
(171, 'de', '5-9 Stunden / Woche'),
(171, 'es', '5-9 horas / semana'),
(171, 'fr', '5-9 heures / semaine'),
(171, 'it', '5-9 ore / settimana'),
(171, 'zh_cn', '5-9小时/周'),
(172, 'de', '10-19 Stunden / Woche'),
(172, 'es', '10-19 horas / semana'),
(172, 'fr', '10-19 heures / semaine'),
(172, 'it', 'Ore 10-19 / settimana'),
(172, 'zh_cn', '10-19小时/周'),
(173, 'de', '20-29 Stunden / Woche'),
(173, 'es', '20-29 horas / semana'),
(173, 'fr', '20-29 heures / semaine'),
(173, 'it', '20-29 ore / settimana'),
(173, 'zh_cn', '20-29小时/周'),
(174, 'de', '30-39 Stunden / Woche'),
(174, 'es', '30-39 horas / semana'),
(174, 'fr', '30-39 heures / semaine'),
(174, 'it', '30-39 ore / settimana'),
(174, 'zh_cn', '30-39小时/周'),
(175, 'de', '40 oder mehr Stunden / Woche'),
(175, 'es', '40 o más horas / semana'),
(175, 'fr', '40 heures ou plus / semaine'),
(175, 'it', '40 o più ore / settimana'),
(175, 'zh_cn', '40小时/周'),
(176, 'de', 'Suche nach Services, mich in meinem pflegerischen Aufgaben helfen'),
(176, 'es', 'Encontrar servicios para que me ayude en mis responsabilidades de cuidado'),
(176, 'fr', 'Trouver des services pour m&#39;aider dans mes responsabilités d&#39;aidants naturels'),
(176, 'it', 'Trovare i servizi per aiutarmi nelle mie responsabilità di caregiving'),
(176, 'zh_cn', '查找服务，以帮助我在我的照顾责任'),
(177, 'de', 'Erste Informationen über die Krankheit der älteren Person, die ich pflegen'),
(177, 'es', 'Obtención de información sobre la enfermedad de la persona mayor que me importa'),
(177, 'fr', 'Obtenir des informations sur la maladie de la personne âgée je me soucie de'),
(177, 'it', 'Ottenere informazioni sulla malattia della persona anziana che cura'),
(177, 'zh_cn', '上了年纪的人，我关心的获取信息有关的疾病'),
(178, 'de', 'Verstehen staatlichen Programmen wie Medicare'),
(178, 'es', 'Comprensión de los programas del gobierno como Medicare'),
(178, 'fr', 'Comprendre les programmes gouvernementaux tels que Medicare'),
(178, 'it', 'Informazioni sui programmi di governo come Medicare'),
(178, 'zh_cn', '了解政府的计划，如医疗保险'),
(179, 'de', 'Finden zuverlässiger häusliche Pflege'),
(179, 'es', 'Encontrar confiables servicios de atención domiciliaria'),
(179, 'fr', 'Trouver des services fiables de soins à domicile'),
(179, 'it', 'Ricerca di affidabili servizi di assistenza domiciliare'),
(179, 'zh_cn', '寻找可靠的家居照​​顾服务'),
(180, 'de', 'Mit genügend Ressourcen für die Pflege zahlen'),
(180, 'es', 'Tener recursos suficientes para pagar la atención'),
(180, 'fr', 'Avoir suffisamment de ressources pour payer les soins'),
(180, 'it', 'Avere risorse sufficienti per pagare le cure'),
(180, 'zh_cn', '有足够的资源来支付护理'),
(181, 'de', 'Erste Hilfe von anderen Familienmitgliedern'),
(181, 'es', 'Obtener ayuda de otros familiares'),
(181, 'fr', 'Obtenir l&#39;aide d&#39;autres membres de la famille'),
(181, 'it', 'Come ottenere aiuto da altri membri della famiglia'),
(181, 'zh_cn', '获得其他家庭成员的帮助'),
(182, 'de', 'Balancing meiner Familie Verantwortung'),
(182, 'es', 'Equilibrar mis responsabilidades familiares'),
(182, 'fr', 'Équilibrer mes responsabilités familiales'),
(182, 'it', 'Bilanciare le mie responsabilità familiari'),
(182, 'zh_cn', '平衡我的家庭责任'),
(183, 'de', 'Schlafstörungen'),
(183, 'es', 'Problemas para dormir'),
(183, 'fr', 'Des problèmes de sommeil'),
(183, 'it', 'Disturbi del sonno'),
(183, 'zh_cn', '睡眠问题'),
(184, 'de', 'Sich Zeit für mich zu entspannen oder die Ausübung'),
(184, 'es', 'Encontrar tiempo para mí para relajarse o hacer ejercicio'),
(184, 'fr', 'Trouver du temps pour me détendre ou exercer'),
(184, 'it', 'Trovare il tempo per me per rilassarsi o esercitare'),
(184, 'zh_cn', '寻找自己要放松或锻炼的时间'),
(185, 'de', 'Das Bedürfnis, Zeit zu nehmen von der Arbeit zu versorgen'),
(185, 'es', 'Necesidad de tomar tiempo libre del trabajo para proporcionar atención'),
(185, 'fr', 'Ayant besoin de s&#39;absenter du travail pour prodiguer des soins'),
(185, 'it', 'Avendo bisogno di prendersi una pausa dal lavoro per fornire assistenza'),
(185, 'zh_cn', '需要请假的工作，提供护理'),
(186, 'de', 'Akzeptieren einer Förderung'),
(186, 'es', 'Aceptación de una promoción'),
(186, 'fr', 'D&#39;accepter une promotion'),
(186, 'it', 'Accettare una promozione'),
(186, 'zh_cn', '接受宣传'),
(187, 'de', 'Treffen meine Arbeit Verantwortung'),
(187, 'es', 'Cumplir mis responsabilidades laborales'),
(187, 'fr', 'Réunion mes responsabilités professionnelles'),
(187, 'it', 'Incontro le mie responsabilità di lavoro'),
(187, 'zh_cn', '我的工作职责'),
(188, 'de', 'Anpassen meiner Arbeit Zeitplan'),
(188, 'es', 'Ajuste de mi horario de trabajo'),
(188, 'fr', 'Réglage de mon horaire de travail'),
(188, 'it', 'Regolazione del mio programma di lavoro'),
(188, 'zh_cn', '调整我的工作日程'),
(189, 'de', 'Die Sicherstellung der Versorgung des Empfängers Sicherheit'),
(189, 'es', 'Garantizar la seguridad de la persona a quien cuida del'),
(189, 'fr', 'Assurer la sécurité du bénéficiaire des soins'),
(189, 'it', 'Garantire la sicurezza del destinatario di cura'),
(189, 'zh_cn', '确保照顾者的安全'),
(190, 'de', 'Kommunikation mit professionellen Anbietern'),
(190, 'es', 'Comunicación con los proveedores profesionales'),
(190, 'fr', 'Communiquer avec les fournisseurs professionnels'),
(190, 'it', 'Comunicare con i fornitori professionali'),
(190, 'zh_cn', '与专业供应商沟通'),
(191, 'de', 'Das Verständnis des Gesundheitssystems'),
(191, 'es', 'Comprender el sistema de atención de salud'),
(191, 'fr', 'Comprendre le système de soins de santé'),
(191, 'it', 'Comprendere il sistema sanitario'),
(191, 'zh_cn', '了解卫生保健系统'),
(192, 'de', 'Making Home Modifikationen zu kümmern Anforderungen'),
(192, 'es', 'Hacer modificaciones en el hogar para satisfacer las necesidades de atención'),
(192, 'fr', 'Apporter des modifications à domicile pour répondre aux besoins de soins'),
(192, 'it', 'Fare modifiche a casa per soddisfare le esigenze di cura'),
(192, 'zh_cn', '回家修改，以满足护理要求'),
(193, 'de', 'Der Umgang mit Speicher oder Änderungen im Verhalten der Pflegebedürftigen'),
(193, 'es', 'Hacer frente a cambios en la memoria o el comportamiento de la persona a quien cuida'),
(193, 'fr', 'Faire face aux changements de la mémoire ou du comportement de la personne soignée'),
(193, 'it', 'Trattare con i cambiamenti di memoria o comportamento del destinatario dell&#39;assistenza'),
(193, 'zh_cn', '处理内存或照顾者的行为变化'),
(194, 'de', 'Erleben meiner eigenen Gesundheitsfragen'),
(194, 'es', 'Experimentar mis propios problemas de salud'),
(194, 'fr', 'Vivre mes propres problèmes de santé'),
(194, 'it', 'Vivere le mie questioni di salute'),
(194, 'zh_cn', '体验自己的健康保健问题'),
(195, 'de', 'Keiner'),
(195, 'es', 'Ninguno'),
(195, 'fr', 'Aucun'),
(195, 'it', 'Nessuno'),
(195, 'zh_cn', '无'),
(196, 'de', '1-4 Tage'),
(196, 'es', '1-4 días'),
(196, 'fr', '1-4 jours'),
(196, 'it', '1-4 giorni'),
(196, 'zh_cn', '1-4天'),
(197, 'de', '5-9 Tage'),
(197, 'es', '5-9 días'),
(197, 'fr', '5-9 jours'),
(197, 'it', '5-9 giorni'),
(197, 'zh_cn', '5-9天'),
(198, 'de', 'Mehr als 9 Tage'),
(198, 'es', 'Más de 9 días'),
(198, 'fr', 'Plus de 9 jours'),
(198, 'it', 'Più di 9 giorni'),
(198, 'zh_cn', '超过900天'),
(199, 'de', 'Kann mich nicht erinnern'),
(199, 'es', 'No recuerdo'),
(199, 'fr', 'Ne me souviens pas'),
(199, 'it', 'Non ricordo'),
(199, 'zh_cn', '不记得'),
(200, 'de', 'Captcha'),
(200, 'es', 'Captcha'),
(200, 'fr', 'Captcha'),
(200, 'it', 'Captcha'),
(200, 'zh_cn', '验证码'),
(201, 'de', 'Einreichen'),
(201, 'es', 'Presentar'),
(201, 'fr', 'Soumettre'),
(201, 'it', 'Presentare'),
(201, 'zh_cn', '提交'),
(202, 'es', 'Esta encuesta no es anónima y el usuario no se ha especificado.'),
(202, 'zh_cn', '这项调查是不记名，不指定用户。'),
(203, 'es', 'Esta pregunta se requiere.'),
(203, 'zh_cn', '这个问题是必要的。');
INSERT INTO `onlinecourseportal_message` (`id`, `language`, `translation`) VALUES
(204, 'ar', 'التعليم عبر الإنترنت فعالة تعتمد على تصميم خبرات التعلم بشكل مناسب وبتسهيل من الميسرين المعرفة. لأن المتعلمين لديها أنماط التعلم المختلفة أو مزيج من الأساليب، وقد نموذجنا التدريب على شبكة الإنترنت باستخدام تصميم الأنشطة التي تتناول أوضاع الخاصة بهم للتعلم من أجل توفير الخبرات الهامة لكل مستخدم.'),
(204, 'de', 'Effektive Online-Unterricht hängt von Lernerfahrungen entsprechend konzipiert und von erfahrenen Moderatoren erleichtert. Da die Lernenden unterschiedliche Lernstile oder eine Kombination von Stilen haben, hat unser Web-basiertes Training Modells Design mit Tätigkeiten, die ihre Lernmethoden zu wenden, um wichtige Erfahrungen für jeden Benutzer bereitzustellen.'),
(204, 'zh', '指令依赖于有效的在线学习适当的设计和便利的经验知识渊博的主持人。由于学习者有不同的学习风格或样式的组合，我们基于网络的培训模式，已设计使用活动，以解决他们的学习方式，为每个用户提供重要的经验。'),
(205, 'ar', 'مؤسسة إدارة المحتوى على نطاق واسع - 25٪'),
(205, 'de', 'Institution Breites Content Management - 25%'),
(205, 'es', 'Entidad de Gestión de Contenidos Wide - 25%'),
(205, 'it', 'Istituzione Wide Management Content - 25%'),
(205, 'ru', 'Учреждение Широкий управления контентом - 25%'),
(205, 'zh', '机构范围的内容管理 -  25％'),
(206, 'ar', 'دورة على الانترنت التوصيل - 25٪'),
(206, 'de', 'Online Course Delivery - 25%'),
(206, 'es', 'Course Delivery Online - 25%'),
(206, 'it', 'Corso online di consegna - 25%'),
(206, 'ru', 'Интернет доставка Курс - 25%'),
(206, 'zh', '网络课程的交货 -  25％'),
(207, 'ar', 'استهدفت التعاون - 50٪'),
(207, 'de', 'Gezielte Collaboration - 50%'),
(207, 'es', 'Colaboración Targeted - 50%'),
(207, 'it', 'Collaborazione mirata - 50%'),
(207, 'ru', 'Целенаправленного сотрудничества - 50%'),
(207, 'zh', '有目标的协作 -  50％'),
(208, 'es', '¡Bienvenidos!'),
(209, 'es', '<span>1/4</span> de los hogares EE.UU. tiene un cuidador familiar proporcionando algún tipo de atención o servicio a un familiar o amigo, edad 50 +'),
(210, 'es', '<span>2/3</span> de estos cuidadores familiares también están trabajando.'),
(211, 'es', '<span>50%</span> de los cuidadores empleados trabajan a tiempo completo /'),
(212, 'es', 'En abril de 2012, el 53% de los adultos de 65 años o más americano utilizan Internet o correo electrónico. A pesar de estos adultos son mucho menos propensos que otros grupos de edad para usar el Internet, los últimos datos representan la primera vez que la mitad de las personas mayores van en línea. Después de varios años de crecimiento muy poco en este grupo, estas ganancias son significativas.'),
(213, 'es', 'Alzheimers Assocation'),
(214, 'es', 'Existen 10 señales de advertencia de la enfermedad de Alzheimer. Si usted o alguien que usted conoce está experimentando cualquiera de los síntomas, consulte a un médico. El diagnóstico temprano te da la oportunidad de buscar tratamiento y un plan para el futuro.'),
(215, 'es', 'Medicare.gov <br /> Consejos y Recursos para cuidadores'),
(216, 'es', '¿Está familiarizado y / o ha visitado el sitio web de Medicare? El folleto a continuación es una lista de consejos y recursos para los cuidadores como se sugiere por Medicare.'),
(217, 'es', 'Mather formas de vida Instituto del Envejecimiento'),
(218, 'es', 'A través de programas basados ​​en la investigación y técnicas innovadoras, formas de vida Mather Institute on Aging tiene el compromiso de avanzar en el campo de la atención geriátrica. La investigación de vanguardia sienta las bases para nuestras soluciones sólidas a los problemas de atención de la tercera edad, incluyendo el reclutamiento, orientación, formación y retención.'),
(219, 'es', 'Utilizado por las personas y organizaciones enteras, nuestros reconocidos a nivel nacional y galardonados programas incluyen módulos de formación, cursos en línea, herramientas y módulos de aprendizaje diseñados para hacer el aprendizaje divertido y fácil. Nuestros programas han demostrado producir mejoras medibles en la calidad de la atención y la retención de mano de obra.'),
(220, 'es', 'Empleadores y Empleados'),
(221, 'es', 'Estamos en una posición única para proporcionar a las empresas con programas innovadores y productos, todas cuidadosamente desarrollado y probado bajo condiciones de investigación aplicada, con muy respetadas compañías y organizaciones de alto nivel de vida. Con la experiencia personal a través de una serie de campos como la gerontología, psicología, sociología, enfermería y antropología cultural, que reunirá a múltiples perspectivas para abordar una amplia gama de cuestiones que afectan a la población que envejece.'),
(222, 'es', 'Entregamos modalidades de aprendizaje en línea y basados ​​en web utilizando las últimas tecnologías a los profesionales de manera eficiente y costo-efectiva la autonomía. Kits de herramientas digitales proporcionan una ventanilla recursos de capacitación para gerentes de recursos humanos y formadores que deseen incorporar los temas clave para trabajar los cuidadores en programas de formación actuales. Además, estamos bien posicionados para ayudar a llevar a cabo estudios experimentales que miden el impacto tanto en los cuidadores de trabajo y la línea de fondo para las empresas interesadas.'),
(223, 'es', 'La Generación Sandwich - por tormenta mediática'),
(224, 'es', 'Cineasta y fotógrafo pareja Julie Winokur y Ed Kashi estaban ocupados persiguiendo sus carreras y criar a dos hijos cuando Winokurs de 83 años de edad, padre, Herbie, se convirtieron en demasiado enfermo para cuidar de sí mismo. En ese momento se unieron a unos veinte millones de estadounidenses que integran la generación sándwich, los que se encuentran responsables del cuidado de sus dos hijos y sus padres ancianos.'),
(225, 'es', 'Los autores del libro Envejecimiento en América: los próximos años, que narra las countrys segmento de más rápido crecimiento de la población, Winokur y Kashi decidió contar su propia historia, ya que asumió el cargo de padre Winokurs. En La Generación Sandwich, han creado un relato honesto e íntimo de sus propias responsabilidades cambiantes y desafiantes, así como algunos de sus alegrías inesperadas.'),
(226, 'es', 'Si tiene consultas comerciales u otras preguntas, por favor llene el siguiente formulario para contactar con nosotros. Gracias.'),
(226, 'zh_cn', '如果你有业务咨询或其他问题，请填写下面的表单与我们联系。谢谢。'),
(227, 'es', 'Sujeto'),
(227, 'zh_cn', '主题'),
(228, 'es', 'Cuerpo'),
(228, 'zh_cn', '身体'),
(229, 'es', 'Perfil'),
(230, 'es', 'Cursos de usuarios'),
(230, 'zh_cn', '用户课程'),
(231, 'es', 'Guardar cambios'),
(232, 'es', 'Cursos en línea'),
(233, 'es', 'Para facilitar la transición de los cuidadores individuo en su nuevo cargo, estará mejor preparado para manejar las necesidades de su ser querido, y aprender cómo practicar eficazmente el autocuidado, los estilos de vida Mather Institute on Aging ha desarrollado programas en línea que están diseñados para educar a los cuidadores mientras que encajar en cualquier horario .'),
(234, 'es', 'Introducción a la prestación de cuidados en línea'),
(235, 'es', 'Pocos están totalmente preparados para las responsabilidades y tareas relacionadas con el cuidado de un adulto mayor. Como cuidador, es importante tener un plan claro o guía que tiene varias rutas. Este curso de cinco lecciones en línea introduce los conceptos básicos del rol de cuidador y explora los desafíos asociados con el cuidado de adultos mayores.'),
(236, 'es', 'Potenciar Online'),
(237, 'es', 'Potenciar Online es un análisis en profundidad, curso de cinco lecciones en línea que se centra en el auto-cuidado para el cuidador de trabajo que fue desarrollado por el Instituto Mather formas de vida sobre el Envejecimiento, con el apoyo de la Consultoría DMA. El programa se centra en la gestión de responsabilidades al cuidar a sus seres queridos con problemas médicos crónicos, e incluye la comunicación efectiva con los proveedores de salud y localización de recursos adicionales cuidadores.'),
(238, 'es', 'CUIDADO Entrenamiento Online'),
(239, 'es', 'CUIDADO Entrenamiento en línea proporciona los cuidadores que trabajan con las herramientas esenciales, el conocimiento y las habilidades para tratar con eficacia la variedad de cuestiones que surgen de cuidar a sus ancianos padres, familiares o seres queridos. Desarrollado por Mather formas de vida Instituto del Envejecimiento, Entrenamiento Online CUIDADO mejora la capacidad de los cuidadores que trabajan para comunicarse, abogado, relacionar y animar a sus padres mayores de esa edad o seres queridos para hacer planes de futuro.'),
(240, 'es', 'Tener sentido de la pérdida de memoria (MSML) Online'),
(241, 'es', 'Desarrollado por Mather formas de vida Instituto del Envejecimiento y la Asociación de Alzheimer, basada en la evidencia Making Sense of Online Pérdida de la memoria ayuda a las personas que cuidan a alguien en la temprana, media o tardía a las etapas finales de la pérdida de memoria, si esa persona ha recibido un diagnóstico de la enfermedad de Alzheimer o demencia relacionada.'),
(242, 'es', 'Gerontología Online programa'),
(243, 'es', 'Gerontología Online es un programa basado en la educación continua dirigido a profesionales de la salud que deseen ampliar sus conocimientos y habilidades en el campo del envejecimiento. Este programa proveerá a los empleados con información valiosa acerca de la gerontología, ayudándoles a mantenerse al tanto de las últimas investigaciones y prácticas y también es un excelente recurso para los nuevos empleados, proporcionándoles una base sólida y ahorrar tiempo a los empleadores y dinero al reducir las horas de formación y empleados aseguran tener una habilidad básica establecida en la contratación. Este programa es ofrecido por Mather formas de vida Instituto sobre el Envejecimiento, en colaboración con Rush University College of Nursing. Desarrollo ha sido parcialmente financiado por fondos de la Oficina de Salud Profesionales división del Departamento de Salud y Servicios Humanos.'),
(244, 'es', 'Objetivos'),
(245, 'es', 'Traducciones y lenguajes'),
(246, 'es', 'Idiomas'),
(247, 'es', 'Crear nuevo'),
(248, 'es', 'Agregar idioma'),
(249, 'ar', 'قراءة &quot;دراسة [متليف] مقدمي الرعاية العامل وصاحب العمل تكاليف الرعاية الصحية&quot;'),
(249, 'es', 'Lea &quot;El Estudio de MetLife de Cuidadores de trabajo y los costos del empleador Cuidado de la Salud&quot;'),
(249, 'it', 'Leggi &quot;Lo studio di MetLife caregiver di lavoro e datori di lavoro costi di assistenza sanitaria&quot;'),
(249, 'ru', 'Читайте &quot;MetLife Изучение рабочей Воспитатели и работодателем расходов на здравоохранение&quot;'),
(249, 'zh_cn', '阅读“大都会研究工作的护理员和雇主的健康保健费用”'),
(250, 'ar', 'وخلاصة القول: كيف يمكن للتعليم الإلكتروني تخفيض النفقات وتحسين أداء الموظفين'),
(250, 'es', 'La línea de base: ¿Cómo e-Learning puede reducir los gastos y mejorar el rendimiento del personal'),
(250, 'it', 'La linea di fondo: come e-Learning può ridurre le spese e migliorare le prestazioni del personale'),
(250, 'ru', 'Bottom Line: Как электронное обучение может сократить расходы и улучшить работу персонала'),
(250, 'zh_cn', '底线：e-learning能减少开支和提高员工的工作绩效'),
(251, 'zh_cn', '您的登录凭据，请填写下面的表单：'),
(252, 'zh_cn', '如果你还没有注册，请点击'),
(253, 'zh_cn', '这里'),
(254, 'zh_cn', '记住我，下次时间。');

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_referral`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_referral` (
  `id` int(11) NOT NULL,
  `referrer` int(11) NOT NULL,
  `referee` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `referrer_referee` (`referrer`,`referee`),
  KEY `referrer` (`referrer`),
  KEY `referee` (`referee`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_source_message`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_source_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(32) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` mediumtext COLLATE utf8_unicode_ci,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=255 ;

--
-- Dumping data for table `onlinecourseportal_source_message`
--

INSERT INTO `onlinecourseportal_source_message` (`id`, `category`, `message`) VALUES
(1, 'onlinecourseportal', 'Online Course Portal'),
(2, 'onlinecourseportal', 'Home'),
(3, 'onlinecourseportal', 'Contact Us'),
(4, 'onlinecourseportal', 'Register'),
(5, 'onlinecourseportal', 'Login'),
(6, 'onlinecourseportal', 'Profile / Files'),
(7, 'onlinecourseportal', 'Forum'),
(8, 'onlinecourseportal', 'Courses'),
(9, 'onlinecourseportal', 'Admin'),
(10, 'onlinecourseportal', 'Logout'),
(11, 'onlinecourseportal', 'Guest'),
(12, 'onlinecourseportal', 'Web-based Training for Caregivers'),
(13, 'onlinecourseportal', 'Request Information'),
(14, 'onlinecourseportal', 'Tutorial'),
(15, 'onlinecourseportal', 'Stats on Caregivers'),
(16, 'onlinecourseportal', '2/3 of working caregivers\n					report conflicts between work and caregiving that result in increased\n					absenteeism, workday interruptions, reduced hours, and workload\n					shifting to other employees.'),
(17, 'onlinecourseportal', 'Recent Research'),
(18, 'onlinecourseportal', '<strong>Double Jeopardy for Baby Boomers Caring for Their Parents</strong><br />\n					Nearly 10 million adult children over the age of 50 care for their\n					aging parents. These family caregivers are themselves aging as well\n					as providing care at a time when they also need to be planning and\n					saving for their own retirement. The study is an updated, national\n					look at adult children who work and care for their parents and the\n					impact of caregiving on their earnings and lifetime wealth.'),
(19, 'onlinecourseportal', 'Read "The MetLife Study of Working Caregivers and\n				Employer Health Care Costs"'),
(20, 'onlinecourseportal', 'Whitepapers'),
(21, 'onlinecourseportal', 'e-Learning: Maturing Technology Brings Balance &amp;\n						Possibilities to Nursing Education'),
(22, 'onlinecourseportal', 'The Bottom Line: How e-Learning Can Reduce Expenses and\n				Improve Staff Performance'),
(23, 'onlinecourseportal', 'Our Clients'),
(24, 'onlinecourseportal', 'Mather\n				LifeWays Institute on Aging'),
(25, 'onlinecourseportal', 'Through research-based programs and innovative techniques, Mather\n				LifeWays Institute on Aging is committed to advancing the field of\n				geriatric care. Cutting-edge research lays the foundation for our\n				solid solutions to senior care challenges, including recruitment,\n		mentorship, training, and retention.'),
(26, 'onlinecourseportal', 'Used by individuals and entire organizations, our nationally\n				recognized, award-winning programs include training modules, online\n				courses, toolkits, and learning modules designed to make learning fun\n				and easy. Our programs have been shown to result in measurable\n		improvements in the quality of care provided and workforce retention.'),
(27, 'onlinecourseportal', 'Online\n				Courses for Caregivers'),
(28, 'onlinecourseportal', 'We deliver online learning and web-based modalities using the latest\n				technologies to efficiently and cost-effectively empower professionals.\n				In addition, we are well-positioned to help conduct pilot studies that measure the impact\n				on both working caregivers and the bottom line for interested\n		corporations.'),
(29, 'onlinecourseportal', 'A Closer Look - Lives of Caregivers'),
(30, 'onlinecourseportal', 'Join us in looking at the incredible lives of several, unique caregivers, as they recall their\n				experience and emotion. Capturing various age groups and ethnicities, you will quickly relate to the\n		situation these caregivers were in.'),
(31, 'Jplayer', 'Play'),
(32, 'Jplayer', 'Pause'),
(33, 'Jplayer', 'Stop'),
(34, 'Jplayer', 'Mute'),
(35, 'Jplayer', 'Unmute'),
(36, 'Jplayer', 'Max Volume'),
(37, 'Jplayer', 'Full Screen'),
(38, 'Jplayer', 'Restore Screen'),
(39, 'Jplayer', 'Repeat'),
(40, 'Jplayer', 'Repeat Off'),
(41, 'Jplayer', 'Update Required'),
(42, 'Jplayer', 'To play the media you will need to either update your browser to a recent version or update your'),
(43, 'Jplayer', 'Flash plugin'),
(44, 'onlinecourseportal', 'Pedagogy'),
(45, 'onlinecourseportal', 'Effective online instruction depends on learning experiences\n				appropriately designed and facilitated by knowledgeable facilitators.\n				Because learners have different learning styles or a combination of\n				styles, our web-based training has been design using activities that\n				address their modes of learning in order to provide significant\n				experiences for each course user. Mouse-over the chart below to see\n		our areas of focus.'),
(46, 'surveyor', 'workingCaregiver'),
(47, 'surveyor', 'There are many challenges to being a caregiver and working full-time. With millions of households in the US caring for a elderly person, among their workplace responsibilities, it is difficult to juggle both.'),
(48, 'surveyor', 'User ID'),
(49, 'surveyor', 'Have you ever taken a day off from work as a result of your role as a caregiver?'),
(50, 'surveyor', 'Yes'),
(51, 'surveyor', 'No'),
(52, 'surveyor', 'Submit'),
(53, 'onlinecourseportal', 'Health status of your working caregivers'),
(54, 'onlinecourseportal', 'Please choose one of the surveys below to take. Depending on your position, employer \n			or employee, submit this voluntary survey and view aggregate feedback from all previous users.'),
(55, 'onlinecourseportal', 'HR/Employer Survey'),
(56, 'onlinecourseportal', 'Caregiver Survey'),
(57, 'onlinecourseportal', 'Partners'),
(58, 'surveyor', 'hrEmployer'),
(59, 'surveyor', 'The many challenges caregiving workers so often face can have a negative impact on both the employee and the organization—encumbering your company’s workflow and productivity, and threatening your employees’ retirement plans and financial security. Employee caregivers cost American businesses approximately $34 billion in lost productivity each year. In addition to the financial impact, the stress associated with caring for an older adult takes a considerable physical and psychological toll on their adult children. As a result, caregivers are far more likely to have fair-to-poor health, resulting in higher health care costs to companies.\r\nPlease complete the brief survey.'),
(60, 'surveyor', 'What percent of your employees would you say are caring for an older family member or friend?'),
(61, 'surveyor', 'Does your organization provide information and support services for employees who are now or may be caring for older family members or friends?'),
(62, 'surveyor', 'Does your organization provide evidence-based programs to support employees who are now or may be caring for older family members or friends?'),
(63, 'surveyor', 'If your organization provides eldercare resources to your employees, are these resources provided?'),
(64, 'surveyor', 'Does your organization provide flexible hours for employees who are now or may be caring for older family members or friends?'),
(65, 'surveyor', 'Does your organization track or measure the impact of employed family caregivers on such indicators as absenteeism, productivity, or retention?'),
(66, 'surveyor', 'Does your organization provide training of supervisors and managers about eldercare issues their employees may be facing?'),
(67, 'surveyor', 'Do you feel that the corporate culture supports caregiving employees? '),
(68, 'surveyor', 'Would online education programs for your employees to support their goal of continuing to be a family caregiver and a productive worker be valuable to your organization?'),
(69, 'surveyor', 'Has your organization done a survey of your employees to understand caregiving issues?'),
(70, 'surveyor', 'Less than 10%'),
(71, 'surveyor', '10-20%'),
(72, 'surveyor', '21-30%'),
(73, 'surveyor', '31-50%'),
(74, 'surveyor', 'More than 50%'),
(75, 'surveyor', 'Unsure'),
(76, 'surveyor', 'Through your EAP provider or broker'),
(77, 'surveyor', 'Through your own organization (HR or other)'),
(78, 'surveyor', 'Through external consultants'),
(79, 'surveyor', 'No, but would have interest in doing a survey'),
(80, 'surveyor', 'caregiver'),
(81, 'surveyor', 'A caregiver is an ‘informal’ provider of in-home and community care to an older individual—usually a parent, family member, or friend. Family caregiving is the act of assisting someone you care about who is chronically ill or disabled and who needs some assistance in daily activities or who may no longer be able to care for themselves. More than 65 million people (29% of the US population) spend an average of 20 hours per week caring for a chronically ill, disabled, or aged family member or friend during any given year.\r\nPlease complete the brief survey.'),
(82, 'surveyor', 'Do you now consider yourself a caregiver to an older individual such as a parent, other relative, or friend?'),
(83, 'surveyor', 'Do you see yourself as a caregiver to an older individual in the future?'),
(84, 'surveyor', 'How did your caregiving role evolve?'),
(85, 'surveyor', 'As a caregiver, you may now or in the future assist an older individual with daily activities. Please check those activities which you now or may in the future provide assistance to an older individual. (check all that apply)'),
(86, 'surveyor', 'Has providing care for an older individual affected your job in some way? If you see yourself as a future caregiver, do you think your caregiving responsibilities will affect your job in some way?'),
(87, 'surveyor', 'How has caregiving affected your job? If you see yourself as a future caregiver, how do you think caregiving may affect your job? (check all that apply)'),
(88, 'surveyor', 'How has caregiving affected your personal life? If you see yourself as a future caregiver, how do you think caregiving may affect your personal life? (check all that apply)'),
(89, 'surveyor', 'In a typical week, how many hours do you provide help, care, or supervision for an older individual? '),
(90, 'surveyor', 'Does your employer provide any education or resources to help you as a family caregiver?'),
(91, 'surveyor', 'What would be valuable for you as a current or future caregiver to help you in your caregiving responsibilities? (check all that apply)'),
(92, 'surveyor', 'I was suddenly thrown into my caregiving role'),
(93, 'surveyor', 'My caregiving role developed slowly over a few years'),
(94, 'surveyor', 'My caregiving role will eventually grow more involved'),
(95, 'surveyor', 'Medical needs such as going to the doctor’s office or assisting with medications'),
(96, 'surveyor', 'Keeping track of bills, checks, or other financial matters'),
(97, 'surveyor', 'Preparing meals, doing laundry, or cleaning the house'),
(98, 'surveyor', 'Going shopping'),
(99, 'surveyor', 'Assisting with dressing, bathing, or getting to the bathroom'),
(100, 'surveyor', 'Arranging for home care services performed by others'),
(101, 'surveyor', 'Making regular check-in visits'),
(102, 'surveyor', 'Reduced hours at work'),
(103, 'surveyor', 'Time conflicts between work and caregiving responsibilities'),
(104, 'surveyor', 'Change to a less demanding job'),
(105, 'surveyor', 'Loss of promotion opportunity'),
(106, 'surveyor', 'Need to use vacation or sick time to provide care'),
(107, 'surveyor', 'Financial burden for myself and my family'),
(108, 'surveyor', 'Not enough time for myself'),
(109, 'surveyor', 'Not enough time for my family'),
(110, 'surveyor', 'Negative impact on my own health'),
(111, 'surveyor', 'Caregiving impacts my social life'),
(112, 'surveyor', 'Caregiving is stressful for me'),
(113, 'surveyor', 'Less than 2 hours weekly'),
(114, 'surveyor', '2-5 hours weekly'),
(115, 'surveyor', '6-10 hours weekly'),
(116, 'surveyor', '11-20 hours weekly'),
(117, 'surveyor', 'More than 20 hours weekly'),
(118, 'surveyor', 'Resources to help me understand caring for older individuals'),
(119, 'surveyor', 'Education to help me understand my role as a family caregiver'),
(120, 'surveyor', 'Tools to help me communicate more effectively with older individuals'),
(121, 'surveyor', 'Information to help me understand and support the needs, preferences, and safety of older individuals in my current or future care'),
(122, 'surveyor', 'Information to help me understand the health care system, Medicare, and long-term care'),
(123, 'surveyor', 'Resources to help me manage my caregiving responsibilities and address my own physical, mental, and emotional health needs'),
(124, 'surveyor', 'Tools to help me balance my caregiving and work responsibilities'),
(125, 'HTTP_Download', 'File "{file}" does not exist.'),
(126, 'onlinecourseportal', 'Fields with <span class="required">*</span> are required.'),
(127, 'onlinecourseportal', 'ID'),
(128, 'onlinecourseportal', 'Password'),
(129, 'onlinecourseportal', 'Salt'),
(130, 'onlinecourseportal', 'Group ID'),
(131, 'onlinecourseportal', 'Email'),
(132, 'onlinecourseportal', 'Session Key'),
(133, 'onlinecourseportal', 'Created'),
(134, 'onlinecourseportal', 'Referees'),
(135, 'onlinecourseportal', 'Referrals'),
(136, 'onlinecourseportal', 'Uploaded Files'),
(137, 'onlinecourseportal', 'User Activated'),
(138, 'onlinecourseportal', 'User Profile'),
(139, 'onlinecourseportal', 'Group'),
(140, 'onlinecourseportal', 'Repeat Password'),
(141, 'onlinecourseportal', 'User ID'),
(142, 'onlinecourseportal', 'First Name'),
(143, 'onlinecourseportal', 'Last Name'),
(144, 'onlinecourseportal', 'City'),
(145, 'onlinecourseportal', 'Zip Code'),
(146, 'onlinecourseportal', 'State'),
(147, 'onlinecourseportal', 'Country'),
(148, 'onlinecourseportal', 'MIME Type'),
(149, 'onlinecourseportal', 'Size'),
(150, 'onlinecourseportal', 'Name'),
(151, 'onlinecourseportal', 'Avatar'),
(152, 'onlinecourseportal', 'User'),
(153, 'surveyor', 'profile'),
(154, 'surveyor', 'What is your age?'),
(155, 'surveyor', 'How would you describe your current role as a family caregiver?'),
(156, 'surveyor', 'If you are currently a caregiver for an older parent, relative, or friend, about how many hours a week do you spend caregiving or providing some type of help to this person?'),
(157, 'surveyor', 'Which of the following problems have you experienced as a caregiver?  If you are not currently caregiving, which of the following problems do you anticipate in your future role as a caregiver? (check all that apply)'),
(158, 'surveyor', 'If you are currently a caregiver for an older parent, relative, or friend, about how many full or partial scheduled workdays did you miss during the past 6 months due to your caregiving responsibilities?'),
(159, 'surveyor', 'Under 21'),
(160, 'surveyor', '21-30'),
(161, 'surveyor', '31-40'),
(162, 'surveyor', '41-50'),
(163, 'surveyor', '51-60'),
(164, 'surveyor', '61 or older'),
(165, 'surveyor', 'I will most likely have caregiving responsibilities for an older parent, relative, or friend within the next year. '),
(166, 'surveyor', 'I will most likely have caregiving responsibilities for an older parent, relative, or friend within the 2-5 years. '),
(167, 'surveyor', 'I am not sure about my future caregiving responsibilities.'),
(168, 'surveyor', 'I currently am a caregiver for an older parent, relative, or friend.'),
(169, 'surveyor', 'Less than one hour'),
(170, 'surveyor', '1-4 hours/week'),
(171, 'surveyor', '5-9 hours/week'),
(172, 'surveyor', '10-19 hours/week'),
(173, 'surveyor', '20-29 hours/week'),
(174, 'surveyor', '30-39 hours/week'),
(175, 'surveyor', '40 or more hours/week'),
(176, 'surveyor', 'Finding services to help me in my caregiving responsibilities'),
(177, 'surveyor', 'Getting information about the illness of the older person I care for'),
(178, 'surveyor', 'Understanding government programs such as Medicare'),
(179, 'surveyor', 'Finding reliable home care services'),
(180, 'surveyor', 'Having enough resources to pay for care'),
(181, 'surveyor', 'Getting help from other family members'),
(182, 'surveyor', 'Balancing my family responsibilities'),
(183, 'surveyor', 'Problems sleeping'),
(184, 'surveyor', 'Finding time for myself to relax or exercise'),
(185, 'surveyor', 'Needing to take time off from work to provide care'),
(186, 'surveyor', 'Accepting a promotion'),
(187, 'surveyor', 'Meeting my work responsibilities'),
(188, 'surveyor', 'Adjusting my work schedule'),
(189, 'surveyor', 'Ensuring the care recipient’s safety'),
(190, 'surveyor', 'Communicating with professional providers'),
(191, 'surveyor', 'Understanding the health care system'),
(192, 'surveyor', 'Making home modifications to meet care requirements'),
(193, 'surveyor', 'Dealing with memory or behavior changes in the care recipient'),
(194, 'surveyor', 'Experiencing my own health care issues'),
(195, 'surveyor', 'None'),
(196, 'surveyor', '1-4 days'),
(197, 'surveyor', '5-9 days'),
(198, 'surveyor', 'More than 9 days'),
(199, 'surveyor', 'Don’t remember'),
(200, 'onlinecourseportal', 'Captcha'),
(201, 'onlinecourseportal', 'Submit'),
(202, 'surveyor', 'This survey is not anonymous and a user was not specified.'),
(203, 'surveyor', 'This question is required.'),
(204, 'onlinecourseportal', 'Effective online instruction depends on learning experiences\n				appropriately designed and facilitated by knowledgeable facilitators.\n				Because learners have different learning styles or a combination of\n				styles, our web-based training model has been design using activities that\n				address their modes of learning in order to provide significant\n				experiences for each user.'),
(205, 'onlinecourseportal', 'Institution Wide Content Management - 25%'),
(206, 'onlinecourseportal', 'Online Course Delivery - 25%'),
(207, 'onlinecourseportal', 'Targeted Collaboration - 50%'),
(208, 'onlinecourseportal', 'Welcome!'),
(209, 'onlinecourseportal', '<span>1/4</span> of US households has a family caregiver providing some form of care or service to a relative or friend, age 50+'),
(210, 'onlinecourseportal', '<span>2/3</span> of these family caregivers are also working.'),
(211, 'onlinecourseportal', '<span>50%</span> of employed caregivers work full-time/'),
(212, 'onlinecourseportal', 'As of April 2012, 53% of American adults age 65 and older use the internet or email. \n			Though these adults are still less likely than all other age groups to use the internet, \n			the latest data represent the first time that half of seniors are going online. After \n			several years of very little growth among this group, these gains are significant.'),
(213, 'onlinecourseportal', 'Alzheimers Assocation'),
(214, 'onlinecourseportal', 'There are 10 warning signs of Alzheimers. If you or someone you know is experiencing \n			any of the signs, please see a doctor. Early diagnosis gives you a chance to seek treatment and plan for the future.'),
(215, 'onlinecourseportal', 'Medicare.gov<br />Tips &amp; Resources for Caregivers'),
(216, 'onlinecourseportal', 'Are you familar and/or have you visited the Medicare website? \n			The handout below is a list of tips and resources for caregivers as suggested by Medicare.'),
(217, 'onlinecourseportal', 'Mather LifeWays Institute on Aging'),
(218, 'onlinecourseportal', 'Through research-based programs and innovative techniques, Mather LifeWays Institute on Aging is \n		committed to advancing the field of geriatric care. Cutting-edge research lays the foundation for our solid solutions to senior care challenges, \n		including recruitment, mentorship, training, and retention.'),
(219, 'onlinecourseportal', 'Used by individuals and entire organizations, our nationally recognized, \n		award-winning programs include training modules, online courses, toolkits, and learning modules designed to make learning fun and easy. \n		Our programs have been shown to result in measurable improvements in the quality of care provided and workforce retention.'),
(220, 'onlinecourseportal', 'Employers and Employees'),
(221, 'onlinecourseportal', 'We are uniquely positioned to provide corporations with innovative programs and products, all \n		thoughtfully developed and tested under applied research conditions with well-respected companies and senior living organizations. With staff \n		expertise across a number of fields including gerontology, psychology, sociology, nursing, and cultural anthropology, we bring together \n		multiple perspectives to address a wide range of issues that affect the aging population.'),
(222, 'onlinecourseportal', 'We deliver online learning and web-based modalities using the latest technologies to efficiently and cost-effectively empower professionals. \n		Digital toolkits provide one-stop training resources for human resource managers and trainers who wish to incorporate key topics for working \n		caregivers into current training programs. In addition, we are well-positioned to help conduct pilot studies that measure the impact on both \n		working caregivers and the bottom line for interested corporations.'),
(223, 'onlinecourseportal', 'The Sandwich Generation - by Media Storm'),
(224, 'onlinecourseportal', 'Filmmaker-photographer couple Julie Winokur and Ed Kashi were busy pursuing their careers \n		and raising two children when Winokurs 83-year-old father, Herbie, became too infirm to care for himself. At that moment they joined \n		some twenty million other Americans who make up the sandwich generation, those who find themselves responsible for the care of both \n		their children and their aging parents.'),
(225, 'onlinecourseportal', 'Authors of the book Aging in America: The Years Ahead, which chronicles the countrys \n		fastest-growing segment of the population, Winokur and Kashi decided to tell their own story as they took on the care of Winokurs \n		father. In The Sandwich Generation, they have created an honest, intimate account of their own shifting and challenging responsibilities, as well as some of their unexpected joys.'),
(226, 'onlinecourseportal', 'If you have business inquiries or other questions, please fill out\n	the following form to contact us. Thank you.'),
(227, 'onlinecourseportal', 'Subject'),
(228, 'onlinecourseportal', 'Body'),
(229, 'onlinecourseportal', 'Profile'),
(230, 'onlinecourseportal', 'User Courses'),
(231, 'onlinecourseportal', 'Save Changes'),
(232, 'onlinecourseportal', 'Online Courses'),
(233, 'onlinecourseportal', 'To help individual caregivers transition into their new role, be better prepared to \n	manage their loved one’s needs, and learn how to effectively practice self-care, Mather LifeWays Institute on Aging has developed \n	online programs that are designed to educate caregivers while fitting into any schedule.'),
(234, 'onlinecourseportal', 'Intro to Caregiving Online'),
(235, 'onlinecourseportal', 'Few are fully prepared for the responsibilities and tasks involved in caring for an older adult. \n	As a caregiver, it is important to have a clear plan or guide that has multiple paths. This five-lesson online course introduces the basics \n	of the caregiver role and explores the challenges associated with older adult care.'),
(236, 'onlinecourseportal', 'Empower Online'),
(237, 'onlinecourseportal', 'Empower Online is an in-depth, five-lesson online course that focuses on self-care for the \n	working caregiver that was developed by Mather LifeWays Institute on Aging with the support of WFD Consulting. The program focuses on managing \n	responsibilities while caring for loved ones with chronic medical issues and includes communicating effectively with healthcare providers \n	and locating additional caregiver resources.'),
(238, 'onlinecourseportal', 'CARE Coaching Online'),
(239, 'onlinecourseportal', 'CARE Coaching Online provides working caregivers with essential tools, \n	knowledge, and skills to effectively deal with the variety of issues arising from caring for their aging parents, relatives, \n	or loved ones. Developed by Mather LifeWays Institute on Aging, CARE Coaching Online improves working caregivers’ abilities to \n	communicate, advocate, relate, and encourage their older parents or loved ones in making future plans.'),
(240, 'onlinecourseportal', 'Making Sense of of Memory Loss (MSML) Online'),
(241, 'onlinecourseportal', 'Developed by Mather LifeWays Institute on Aging and the Alzheimer’s Association, \n	evidence-based Making Sense of Memory Loss Online helps those who care for someone in the early, middle, or late to final \n	stages of memory loss, whether or not that individual has received a diagnosis of Alzheimers Disease or related dementia.'),
(242, 'onlinecourseportal', 'Gerontology Online program'),
(243, 'onlinecourseportal', 'Gerontology Online is a web-based continuing education program designed for health care professionals \n	who wish to enhance their knowledge and skills in the field of aging. This program will provide employees with valuable information about gerontology, \n	helping them to stay abreast of the latest research and practices and it is also an excellent resource for new hires, providing them with a solid \n	foundation while saving employers time and money by reducing training hours and ensuring employees have a basic skill set upon hiring. This program \n	is offered by Mather LifeWays Institute on Aging in collaboration with Rush University College of Nursing. Development was partially supported by \n	funding from the Bureau of Health Professionals division of the Department of Health and Human Services.'),
(244, 'onlinecourseportal', 'Objectives'),
(245, 'onlinecourseportal', 'Translations And Languages'),
(246, 'onlinecourseportal', 'Languages'),
(247, 'onlinecourseportal', 'Create New'),
(248, 'onlinecourseportal', 'Add Language'),
(249, 'onlinecourseportal', 'Read "The MetLife Study of Working Caregivers and\n						Employer Health Care Costs"'),
(250, 'onlinecourseportal', 'The Bottom Line: How e-Learning Can Reduce Expenses and\n						Improve Staff Performance'),
(251, 'onlinecourseportal', 'Please fill out the following form with your login credentials:'),
(252, 'onlinecourseportal', 'If you have not yet registered with us please click'),
(253, 'onlinecourseportal', 'here'),
(254, 'onlinecourseportal', 'Remember me next time.');

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_states`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(40) COLLATE utf8_unicode_ci NOT NULL,
  `abbrev` char(2) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=66 ;

--
-- Dumping data for table `onlinecourseportal_states`
--

INSERT INTO `onlinecourseportal_states` (`id`, `name`, `abbrev`) VALUES
(1, 'Alaska', 'AK'),
(2, 'Alabama', 'AL'),
(3, 'American Samoa', 'AS'),
(4, 'Arizona', 'AZ'),
(5, 'Arkansas', 'AR'),
(6, 'California', 'CA'),
(7, 'Colorado', 'CO'),
(8, 'Connecticut', 'CT'),
(9, 'Delaware', 'DE'),
(10, 'District of Columbia', 'DC'),
(11, 'Federated States of Micronesia', 'FM'),
(12, 'Florida', 'FL'),
(13, 'Georgia', 'GA'),
(14, 'Guam', 'GU'),
(15, 'Hawaii', 'HI'),
(16, 'Idaho', 'ID'),
(17, 'Illinois', 'IL'),
(18, 'Indiana', 'IN'),
(19, 'Iowa', 'IA'),
(20, 'Kansas', 'KS'),
(21, 'Kentucky', 'KY'),
(22, 'Louisiana', 'LA'),
(23, 'Maine', 'ME'),
(24, 'Marshall Islands', 'MH'),
(25, 'Maryland', 'MD'),
(26, 'Massachusetts', 'MA'),
(27, 'Michigan', 'MI'),
(28, 'Minnesota', 'MN'),
(29, 'Mississippi', 'MS'),
(30, 'Missouri', 'MO'),
(31, 'Montana', 'MT'),
(32, 'Nebraska', 'NE'),
(33, 'Nevada', 'NV'),
(34, 'New Hampshire', 'NH'),
(35, 'New Jersey', 'NJ'),
(36, 'New Mexico', 'NM'),
(37, 'New York', 'NY'),
(38, 'North Carolina', 'NC'),
(39, 'North Dakota', 'ND'),
(40, 'Northern Mariana Islands', 'MP'),
(41, 'Ohio', 'OH'),
(42, 'Oklahoma', 'OK'),
(43, 'Oregon', 'OR'),
(44, 'Palau', 'PW'),
(45, 'Pennsylvania', 'PA'),
(46, 'Puerto Rico', 'PR'),
(47, 'Rhode Island', 'RI'),
(48, 'South Carolina', 'SC'),
(49, 'South Dakota', 'SD'),
(50, 'Tennessee', 'TN'),
(51, 'Texas', 'TX'),
(52, 'Utah', 'UT'),
(53, 'Vermont', 'VT'),
(54, 'Virgin Islands', 'VI'),
(55, 'Virginia', 'VA'),
(56, 'Washington', 'WA'),
(57, 'West Virginia', 'WV'),
(58, 'Wisconsin', 'WI'),
(59, 'Wyoming', 'WY'),
(60, 'Armed Forces Africa', 'AE'),
(61, 'Armed Forces Americas (except Canada)', 'AA'),
(62, 'Armed Forces Canada', 'AE'),
(63, 'Armed Forces Europe', 'AE'),
(64, 'Armed Forces Middle East', 'AE'),
(65, 'Armed Forces Pacific', 'AP');

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_survey`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_survey` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `anonymous` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`),
  UNIQUE KEY `name_2` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Dumping data for table `onlinecourseportal_survey`
--

INSERT INTO `onlinecourseportal_survey` (`id`, `name`, `title`, `description`, `anonymous`) VALUES
(1, 'profile', '', '', 0),
(2, 'workingCaregiver', 'Caregiver and Working?', 'There are many challenges to being a caregiver and working full-time. With millions of households in the US caring for a elderly person, among their workplace responsibilities, it is difficult to juggle both.', 1),
(3, 'hrEmployer', 'HR/Employer Survey', 'The many challenges caregiving workers so often face can have a negative impact on both the employee and the organization—encumbering your company’s workflow and productivity, and threatening your employees’ retirement plans and financial security. Employee caregivers cost American businesses approximately $34 billion in lost productivity each year. In addition to the financial impact, the stress associated with caring for an older adult takes a considerable physical and psychological toll on their adult children. As a result, caregivers are far more likely to have fair-to-poor health, resulting in higher health care costs to companies.\r\nPlease complete the brief survey.', 1),
(4, 'caregiver', 'Caregiver Survey', 'A caregiver is an ‘informal’ provider of in-home and community care to an older individual—usually a parent, family member, or friend. Family caregiving is the act of assisting someone you care about who is chronically ill or disabled and who needs some assistance in daily activities or who may no longer be able to care for themselves. More than 65 million people (29% of the US population) spend an average of 20 hours per week caring for a chronically ill, disabled, or aged family member or friend during any given year.\r\nPlease complete the brief survey.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_survey_answer`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_survey_answer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `question_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_id_question_set_id` (`user_id`,`question_id`),
  KEY `user_id` (`user_id`),
  KEY `question_set_id` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=78 ;

--
-- Dumping data for table `onlinecourseportal_survey_answer`
--

INSERT INTO `onlinecourseportal_survey_answer` (`id`, `user_id`, `question_id`) VALUES
(74, NULL, 6),
(75, NULL, 6),
(76, NULL, 6),
(77, NULL, 6),
(21, 4, 1),
(22, 4, 2),
(23, 4, 3),
(25, 4, 5),
(64, 96, 1),
(65, 96, 2),
(66, 96, 3),
(67, 96, 4),
(68, 96, 5),
(69, 101, 1),
(70, 101, 2),
(71, 101, 3),
(72, 101, 5);

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_survey_answer_option`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_survey_answer_option` (
  `answer_id` int(11) NOT NULL,
  `option_id` int(11) NOT NULL,
  PRIMARY KEY (`answer_id`,`option_id`),
  KEY `option_id` (`option_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `onlinecourseportal_survey_answer_option`
--

INSERT INTO `onlinecourseportal_survey_answer_option` (`answer_id`, `option_id`) VALUES
(69, 2),
(21, 3),
(64, 5),
(65, 9),
(70, 9),
(22, 11),
(23, 12),
(71, 12),
(66, 13),
(25, 38),
(68, 38),
(72, 38),
(67, 56),
(76, 62),
(74, 63),
(75, 63),
(77, 63);

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_survey_answer_text`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_survey_answer_text` (
  `answer_id` int(11) NOT NULL,
  `text` mediumtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`answer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_survey_question`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_survey_question` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `survey_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  `allow_many_options` tinyint(1) NOT NULL DEFAULT '0',
  `required` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `survey_id_order` (`survey_id`,`order`),
  KEY `type_id` (`type_id`),
  KEY `survey_id` (`survey_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=27 ;

--
-- Dumping data for table `onlinecourseportal_survey_question`
--

INSERT INTO `onlinecourseportal_survey_question` (`id`, `survey_id`, `type_id`, `text`, `order`, `allow_many_options`, `required`) VALUES
(1, 1, 1, 'What is your age?', 1, 0, 1),
(2, 1, 1, 'How would you describe your current role as a family caregiver?', 2, 0, 1),
(3, 1, 1, 'If you are currently a caregiver for an older parent, relative, or friend, about how many hours a week do you spend caregiving or providing some type of help to this person?', 3, 0, 1),
(4, 1, 2, 'Which of the following problems have you experienced as a caregiver?  If you are not currently caregiving, which of the following problems do you anticipate in your future role as a caregiver? (check all that apply)', 4, 1, 0),
(5, 1, 1, 'If you are currently a caregiver for an older parent, relative, or friend, about how many full or partial scheduled workdays did you miss during the past 6 months due to your caregiving responsibilities?', 5, 0, 1),
(6, 2, 3, 'Have you ever taken a day off from work as a result of your role as a caregiver?', 1, 0, 1),
(7, 3, 3, 'What percent of your employees would you say are caring for an older family member or friend?', 1, 0, 1),
(8, 3, 3, 'Does your organization provide information and support services for employees who are now or may be caring for older family members or friends?', 2, 0, 1),
(9, 3, 3, 'Does your organization provide evidence-based programs to support employees who are now or may be caring for older family members or friends?', 3, 0, 1),
(10, 3, 3, 'If your organization provides eldercare resources to your employees, are these resources provided?', 4, 0, 1),
(11, 3, 3, 'Does your organization provide flexible hours for employees who are now or may be caring for older family members or friends?', 5, 0, 1),
(12, 3, 3, 'Does your organization track or measure the impact of employed family caregivers on such indicators as absenteeism, productivity, or retention?', 6, 0, 1),
(13, 3, 3, 'Does your organization provide training of supervisors and managers about eldercare issues their employees may be facing?', 7, 0, 1),
(14, 3, 3, 'Do you feel that the corporate culture supports caregiving employees? ', 8, 0, 1),
(15, 3, 3, 'Would online education programs for your employees to support their goal of continuing to be a family caregiver and a productive worker be valuable to your organization?', 9, 0, 1),
(16, 3, 3, 'Has your organization done a survey of your employees to understand caregiving issues?', 10, 0, 1),
(17, 4, 3, 'Do you now consider yourself a caregiver to an older individual such as a parent, other relative, or friend?', 1, 0, 1),
(18, 4, 3, 'Do you see yourself as a caregiver to an older individual in the future?', 2, 0, 1),
(19, 4, 3, 'How did your caregiving role evolve?', 3, 0, 1),
(20, 4, 2, 'As a caregiver, you may now or in the future assist an older individual with daily activities. Please check those activities which you now or may in the future provide assistance to an older individual. (check all that apply)', 4, 1, 0),
(21, 4, 3, 'Has providing care for an older individual affected your job in some way? If you see yourself as a future caregiver, do you think your caregiving responsibilities will affect your job in some way?', 5, 0, 1),
(22, 4, 2, 'How has caregiving affected your job? If you see yourself as a future caregiver, how do you think caregiving may affect your job? (check all that apply)', 6, 1, 0),
(23, 4, 2, 'How has caregiving affected your personal life? If you see yourself as a future caregiver, how do you think caregiving may affect your personal life? (check all that apply)', 7, 1, 0),
(24, 4, 3, 'In a typical week, how many hours do you provide help, care, or supervision for an older individual? ', 8, 0, 1),
(25, 4, 3, 'Does your employer provide any education or resources to help you as a family caregiver?', 9, 0, 1),
(26, 4, 2, 'What would be valuable for you as a current or future caregiver to help you in your caregiving responsibilities? (check all that apply)', 10, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_survey_question_option`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_survey_question_option` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `text` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `question_id_order` (`question_id`,`order`),
  KEY `question_id` (`question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=145 ;

--
-- Dumping data for table `onlinecourseportal_survey_question_option`
--

INSERT INTO `onlinecourseportal_survey_question_option` (`id`, `question_id`, `text`, `order`) VALUES
(2, 1, 'Under 21', 1),
(3, 1, '21-30', 2),
(4, 1, '31-40', 3),
(5, 1, '41-50', 4),
(6, 1, '51-60', 5),
(7, 1, '61 or older', 6),
(8, 2, 'I currently am a caregiver for an older parent, relative, or friend.', 4),
(9, 2, 'I will most likely have caregiving responsibilities for an older parent, relative, or friend within the next year. ', 1),
(10, 2, 'I will most likely have caregiving responsibilities for an older parent, relative, or friend within the 2-5 years. ', 2),
(11, 2, 'I am not sure about my future caregiving responsibilities.', 3),
(12, 3, 'Less than one hour', 1),
(13, 3, '1-4 hours/week', 2),
(14, 3, '5-9 hours/week', 3),
(15, 3, '10-19 hours/week', 4),
(16, 3, '20-29 hours/week', 5),
(17, 3, '30-39 hours/week', 6),
(18, 3, '40 or more hours/week', 7),
(38, 5, 'None', 1),
(39, 5, '1-4 days', 2),
(40, 5, '5-9 days', 3),
(41, 5, 'More than 9 days', 4),
(42, 5, 'Don’t remember', 5),
(43, 4, 'Adjusting my work schedule', 13),
(44, 4, 'Meeting my work responsibilities', 12),
(45, 4, 'Accepting a promotion', 11),
(46, 4, 'Needing to take time off from work to provide care', 10),
(47, 4, 'Finding time for myself to relax or exercise', 9),
(48, 4, 'Problems sleeping', 8),
(49, 4, 'Experiencing my own health care issues', 19),
(50, 4, 'Balancing my family responsibilities', 7),
(51, 4, 'Getting help from other family members', 6),
(52, 4, 'Having enough resources to pay for care', 5),
(53, 4, 'Finding reliable home care services', 4),
(54, 4, 'Understanding government programs such as Medicare', 3),
(55, 4, 'Getting information about the illness of the older person I care for', 2),
(56, 4, 'Finding services to help me in my caregiving responsibilities', 1),
(57, 4, 'Ensuring the care recipient’s safety', 14),
(58, 4, 'Communicating with professional providers', 15),
(59, 4, 'Understanding the health care system', 16),
(60, 4, 'Making home modifications to meet care requirements', 17),
(61, 4, 'Dealing with memory or behavior changes in the care recipient', 18),
(62, 6, 'Yes', 1),
(63, 6, 'No', 2),
(65, 7, 'Less than 10%', 1),
(66, 7, '10-20%', 2),
(67, 7, '21-30%', 3),
(68, 7, '31-50%', 4),
(69, 7, 'More than 50%', 5),
(70, 7, 'Unsure', 6),
(71, 8, 'Yes', 1),
(72, 8, 'No', 2),
(73, 8, 'Unsure', 3),
(74, 9, 'Yes', 1),
(75, 9, 'No', 2),
(76, 9, 'Unsure', 3),
(77, 10, 'Through your EAP provider or broker', 1),
(78, 10, 'Through your own organization (HR or other)', 2),
(79, 10, 'Through external consultants', 3),
(80, 10, 'Unsure', 4),
(81, 11, 'Yes', 1),
(82, 11, 'No', 2),
(83, 11, 'Unsure', 3),
(84, 12, 'Yes', 1),
(85, 12, 'No', 2),
(86, 12, 'Unsure', 3),
(87, 13, 'Yes', 1),
(88, 13, 'No', 2),
(89, 13, 'Unsure', 3),
(90, 14, 'Yes', 1),
(91, 14, 'No', 2),
(92, 14, 'Unsure', 3),
(93, 15, 'Yes', 1),
(94, 15, 'No', 2),
(95, 15, 'Unsure', 3),
(96, 16, 'Yes', 1),
(97, 16, 'No', 2),
(98, 16, 'No, but would have interest in doing a survey', 3),
(99, 16, 'Unsure', 4),
(100, 17, 'Yes', 1),
(101, 17, 'No', 2),
(102, 17, 'Unsure', 3),
(103, 18, 'Yes', 1),
(104, 18, 'No', 2),
(105, 18, 'Unsure', 3),
(106, 19, 'I was suddenly thrown into my caregiving role', 1),
(107, 19, 'My caregiving role developed slowly over a few years', 2),
(108, 19, 'My caregiving role will eventually grow more involved', 3),
(109, 20, 'Medical needs such as going to the doctor’s office or assisting with medications', 1),
(110, 20, 'Keeping track of bills, checks, or other financial matters', 2),
(111, 20, 'Preparing meals, doing laundry, or cleaning the house', 3),
(112, 20, 'Going shopping', 4),
(113, 20, 'Assisting with dressing, bathing, or getting to the bathroom', 5),
(114, 20, 'Arranging for home care services performed by others', 6),
(115, 20, 'Making regular check-in visits', 7),
(116, 21, 'Yes', 1),
(117, 21, 'No', 2),
(118, 21, 'Unsure', 3),
(119, 22, 'Reduced hours at work', 1),
(120, 22, 'Time conflicts between work and caregiving responsibilities', 2),
(121, 22, 'Change to a less demanding job', 3),
(122, 22, 'Loss of promotion opportunity', 4),
(123, 22, 'Need to use vacation or sick time to provide care', 5),
(124, 23, 'Financial burden for myself and my family', 1),
(125, 23, 'Not enough time for myself', 2),
(126, 23, 'Not enough time for my family', 3),
(127, 23, 'Negative impact on my own health', 4),
(128, 23, 'Caregiving impacts my social life', 5),
(129, 23, 'Caregiving is stressful for me', 6),
(130, 24, 'Less than 2 hours weekly', 1),
(131, 24, '2-5 hours weekly', 2),
(132, 24, '6-10 hours weekly', 3),
(133, 24, '11-20 hours weekly', 4),
(134, 24, 'More than 20 hours weekly', 5),
(135, 25, 'Yes', 1),
(136, 25, 'No', 2),
(137, 25, 'Unsure', 3),
(138, 26, 'Resources to help me understand caring for older individuals', 1),
(139, 26, 'Education to help me understand my role as a family caregiver', 2),
(140, 26, 'Tools to help me communicate more effectively with older individuals', 3),
(141, 26, 'Information to help me understand and support the needs, preferences, and safety of older individuals in my current or future care', 4),
(142, 26, 'Information to help me understand the health care system, Medicare, and long-term care', 5),
(143, 26, 'Resources to help me manage my caregiving responsibilities and address my own physical, mental, and emotional health needs', 6),
(144, 26, 'Tools to help me balance my caregiving and work responsibilities', 7);

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_survey_question_type`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_survey_question_type` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `onlinecourseportal_survey_question_type`
--

INSERT INTO `onlinecourseportal_survey_question_type` (`id`, `name`) VALUES
(2, 'checkbox'),
(3, 'radio'),
(1, 'select'),
(4, 'textarea'),
(5, 'textfield');

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_uploaded_file`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_uploaded_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `size` int(11) NOT NULL,
  `mime_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `local_name` char(40) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_user`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `password` char(44) COLLATE utf8_unicode_ci NOT NULL,
  `salt` char(44) COLLATE utf8_unicode_ci NOT NULL,
  `group_id` int(11) NOT NULL DEFAULT '2',
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `session_key` char(44) COLLATE utf8_unicode_ci NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  KEY `group_id` (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=102 ;

--
-- Dumping data for table `onlinecourseportal_user`
--

INSERT INTO `onlinecourseportal_user` (`id`, `password`, `salt`, `group_id`, `email`, `session_key`, `created`) VALUES
(4, 'DHq2uOG6ntWZOSsvWziPEaz+bNuZpFRT7QLgHs7IgXo=', 'nG42gK97c7hKwAyv++VQ2P9iTNmv5RhpLfb/81Vczgw=', 1, 'l.daprato@gmail.com', 'JzNVWE2bavymM8YXjRkhcu0nAytf5y5RSDOu98jKqSw=', '2012-08-22 06:36:45'),
(68, 'F4uRu9u3VXAgP/18k8T0Tkaw2AG7AN7W9DS8ssKiusc=', 'r2PFdVVKv0yqc3+yROOOFDVj/4InotUdJnF7ZIRJ44Q=', 1, 'james@jpederson.com', 'H6FBh79Zagnp4sLZSuFMlr6kzNP9VMtGEJmEwL7oaIU=', '2012-08-24 17:58:30'),
(72, 'qxC8vQi9m5Hi2o3NMNeBBBg2Un4YTqNpij45OmLc2M8=', 'IXmqmaSJoz5/Gc0kCOEYUxGy4IvZj8cZH7abJfI4kSw=', 1, 'jwoodall@matherlifeways.com', '+yaZu9u6XRBs1YRs+G8VqmCaMWWf0ACg2HS2e/6FuBA=', '2012-08-27 17:08:11'),
(75, 'U6aKLqF/mBHZFc8ZgY5wVW7oIo7mDgJroDX5AMfrCus=', 'QXozcQtePlULwf70nFzwgaLfJu9SjtRMawnCwlwG4do=', 1, 'yin_li_juan@hotmail.com', 'ek0HffubKvL8x+0D6xlQIQHaMAVATZCKJxjG+6m8Rk4=', '2012-08-27 23:32:10'),
(96, 'puF0IFm/F8VGdmZUxYBalkcPtSrAvCEIr2v4hhaKNAU=', 'ENtVcSM8H9zZJZD+VxtlbqLFOx8hJBHuneYcLZB/fCg=', 1, 'elznavarro@yahoo.com', 'ZJvo0rZm2DU+m6W2fS8B+nLKh/bt31R+IefZOhDT+eg=', '2012-10-19 05:00:15'),
(101, 'BogQOQCX8p8M0E0/a6FNRDlaXsC1QazIcP6iy5Wy5ec=', 'S/usb02UfO9fa4JGGAqiWGODtfI1IASMlInbgZ8TevM=', 4, 'test@test.com', 'VPIr6K9Pt1DgycB1hRvPLPw8WVFqX++pUzhoIFZYqBw=', '2012-11-01 23:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_user_activated`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_user_activated` (
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `onlinecourseportal_user_activated`
--

INSERT INTO `onlinecourseportal_user_activated` (`user_id`) VALUES
(4),
(68),
(72),
(75),
(96),
(101);

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_user_course`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_user_course` (
  `user_id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`course_id`),
  KEY `course_id` (`course_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `onlinecourseportal_user_profile`
--

CREATE TABLE IF NOT EXISTS `onlinecourseportal_user_profile` (
  `user_id` int(11) NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `zip_code` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `state_id` int(11) DEFAULT NULL,
  `country_iso` char(2) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`),
  KEY `state_id` (`state_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `onlinecourseportal_user_profile`
--

INSERT INTO `onlinecourseportal_user_profile` (`user_id`, `firstname`, `lastname`, `city`, `zip_code`, `state_id`, `country_iso`, `phone`) VALUES
(4, 'Louis', 'DaPrato', 'Glenview', '60025', 17, 'us', '7737271127'),
(68, 'James', 'Pederson', 'Madison', '53714', 17, 'US', '6084437567'),
(72, 'JON', 'WOODALL', 'EVANSTON', '60201', 17, 'US', '8474926753'),
(75, 'LiJuan', 'Yin', 'Arlington Heights', '60004', 17, 'US', '2247640558'),
(96, 'Ellen ', 'Ziegemeier', 'St. Peters', '63376', 30, 'us', '6366999715'),
(101, 'test', 'test', '', '', NULL, 'af', '');

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_acl_groups`
--

CREATE TABLE IF NOT EXISTS `phpbb_acl_groups` (
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_option_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_role_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_setting` tinyint(2) NOT NULL DEFAULT '0',
  KEY `group_id` (`group_id`),
  KEY `auth_opt_id` (`auth_option_id`),
  KEY `auth_role_id` (`auth_role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_acl_groups`
--

INSERT INTO `phpbb_acl_groups` (`group_id`, `forum_id`, `auth_option_id`, `auth_role_id`, `auth_setting`) VALUES
(1, 0, 85, 0, 1),
(1, 0, 93, 0, 1),
(1, 0, 111, 0, 1),
(5, 0, 0, 5, 0),
(5, 0, 0, 1, 0),
(2, 0, 0, 6, 0),
(3, 0, 0, 6, 0),
(4, 0, 0, 5, 0),
(4, 0, 0, 10, 0),
(5, 6, 0, 14, 0),
(7, 5, 0, 21, 0),
(7, 7, 0, 21, 0),
(1, 12, 0, 17, 0),
(1, 11, 0, 17, 0),
(1, 10, 0, 17, 0),
(1, 9, 0, 17, 0),
(1, 8, 0, 17, 0),
(1, 6, 0, 17, 0),
(1, 5, 0, 17, 0),
(1, 7, 0, 17, 0),
(7, 0, 0, 23, 0),
(5, 7, 0, 14, 0),
(7, 8, 0, 21, 0),
(7, 9, 0, 21, 0),
(7, 10, 0, 21, 0),
(7, 11, 0, 21, 0),
(7, 12, 0, 21, 0),
(2, 7, 0, 21, 0),
(2, 5, 0, 21, 0),
(7, 6, 0, 21, 0),
(2, 8, 0, 21, 0),
(2, 9, 0, 21, 0),
(2, 10, 0, 21, 0),
(2, 11, 0, 21, 0),
(2, 12, 0, 21, 0),
(7, 13, 0, 21, 0),
(1, 13, 0, 17, 0),
(2, 13, 0, 21, 0),
(7, 14, 0, 21, 0),
(1, 14, 0, 17, 0),
(2, 14, 0, 21, 0),
(7, 15, 0, 21, 0),
(1, 15, 0, 17, 0),
(2, 15, 0, 21, 0),
(7, 16, 0, 21, 0),
(1, 16, 0, 17, 0),
(2, 16, 0, 21, 0),
(7, 17, 0, 21, 0),
(1, 17, 0, 17, 0),
(2, 17, 0, 21, 0),
(7, 18, 0, 21, 0),
(1, 18, 0, 17, 0),
(2, 18, 0, 21, 0),
(7, 19, 0, 21, 0),
(1, 19, 0, 17, 0),
(2, 19, 0, 21, 0),
(5, 13, 0, 14, 0),
(5, 14, 0, 14, 0),
(5, 15, 0, 14, 0),
(5, 16, 0, 14, 0),
(5, 17, 0, 14, 0),
(5, 18, 0, 14, 0),
(5, 19, 0, 14, 0),
(2, 20, 0, 21, 0),
(5, 20, 0, 14, 0),
(1, 20, 0, 17, 0),
(7, 20, 0, 21, 0),
(7, 21, 0, 21, 0),
(1, 21, 0, 17, 0),
(5, 21, 0, 14, 0),
(2, 21, 0, 21, 0),
(2, 22, 0, 21, 0),
(5, 22, 0, 14, 0),
(1, 22, 0, 17, 0),
(7, 22, 0, 21, 0),
(7, 24, 0, 21, 0),
(1, 24, 0, 17, 0),
(5, 24, 0, 14, 0),
(2, 24, 0, 21, 0),
(7, 23, 0, 21, 0),
(1, 23, 0, 17, 0),
(5, 23, 0, 14, 0),
(2, 23, 0, 21, 0),
(7, 25, 0, 21, 0),
(1, 25, 0, 17, 0),
(5, 25, 0, 14, 0),
(2, 25, 0, 21, 0),
(7, 26, 0, 21, 0),
(1, 26, 0, 17, 0),
(5, 26, 0, 14, 0),
(2, 26, 0, 21, 0),
(2, 6, 0, 21, 0),
(2, 27, 0, 21, 0),
(7, 27, 0, 21, 0),
(1, 27, 0, 17, 0),
(5, 27, 0, 14, 0),
(2, 28, 0, 21, 0),
(5, 28, 0, 14, 0),
(1, 28, 0, 17, 0),
(7, 28, 0, 21, 0),
(2, 29, 0, 21, 0),
(5, 29, 0, 14, 0),
(1, 29, 0, 17, 0),
(7, 29, 0, 21, 0),
(2, 30, 0, 21, 0),
(5, 30, 0, 14, 0),
(1, 30, 0, 17, 0),
(7, 30, 0, 21, 0),
(7, 31, 0, 21, 0),
(1, 31, 0, 17, 0),
(5, 31, 0, 14, 0),
(2, 31, 0, 21, 0),
(7, 32, 0, 21, 0),
(1, 32, 0, 17, 0),
(5, 32, 0, 14, 0),
(2, 32, 0, 21, 0),
(7, 33, 0, 21, 0),
(1, 33, 0, 17, 0),
(5, 33, 0, 14, 0),
(2, 33, 0, 21, 0),
(7, 34, 0, 21, 0),
(1, 34, 0, 17, 0),
(5, 34, 0, 14, 0),
(2, 34, 0, 21, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_acl_options`
--

CREATE TABLE IF NOT EXISTS `phpbb_acl_options` (
  `auth_option_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `auth_option` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `is_global` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `is_local` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `founder_only` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`auth_option_id`),
  UNIQUE KEY `auth_option` (`auth_option`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=118 ;

--
-- Dumping data for table `phpbb_acl_options`
--

INSERT INTO `phpbb_acl_options` (`auth_option_id`, `auth_option`, `is_global`, `is_local`, `founder_only`) VALUES
(1, 'f_', 0, 1, 0),
(2, 'f_announce', 0, 1, 0),
(3, 'f_attach', 0, 1, 0),
(4, 'f_bbcode', 0, 1, 0),
(5, 'f_bump', 0, 1, 0),
(6, 'f_delete', 0, 1, 0),
(7, 'f_download', 0, 1, 0),
(8, 'f_edit', 0, 1, 0),
(9, 'f_email', 0, 1, 0),
(10, 'f_flash', 0, 1, 0),
(11, 'f_icons', 0, 1, 0),
(12, 'f_ignoreflood', 0, 1, 0),
(13, 'f_img', 0, 1, 0),
(14, 'f_list', 0, 1, 0),
(15, 'f_noapprove', 0, 1, 0),
(16, 'f_poll', 0, 1, 0),
(17, 'f_post', 0, 1, 0),
(18, 'f_postcount', 0, 1, 0),
(19, 'f_print', 0, 1, 0),
(20, 'f_read', 0, 1, 0),
(21, 'f_reply', 0, 1, 0),
(22, 'f_report', 0, 1, 0),
(23, 'f_search', 0, 1, 0),
(24, 'f_sigs', 0, 1, 0),
(25, 'f_smilies', 0, 1, 0),
(26, 'f_sticky', 0, 1, 0),
(27, 'f_subscribe', 0, 1, 0),
(28, 'f_user_lock', 0, 1, 0),
(29, 'f_vote', 0, 1, 0),
(30, 'f_votechg', 0, 1, 0),
(31, 'm_', 1, 1, 0),
(32, 'm_approve', 1, 1, 0),
(33, 'm_chgposter', 1, 1, 0),
(34, 'm_delete', 1, 1, 0),
(35, 'm_edit', 1, 1, 0),
(36, 'm_info', 1, 1, 0),
(37, 'm_lock', 1, 1, 0),
(38, 'm_merge', 1, 1, 0),
(39, 'm_move', 1, 1, 0),
(40, 'm_report', 1, 1, 0),
(41, 'm_split', 1, 1, 0),
(42, 'm_ban', 1, 0, 0),
(43, 'm_warn', 1, 0, 0),
(44, 'a_', 1, 0, 0),
(45, 'a_aauth', 1, 0, 0),
(46, 'a_attach', 1, 0, 0),
(47, 'a_authgroups', 1, 0, 0),
(48, 'a_authusers', 1, 0, 0),
(49, 'a_backup', 1, 0, 0),
(50, 'a_ban', 1, 0, 0),
(51, 'a_bbcode', 1, 0, 0),
(52, 'a_board', 1, 0, 0),
(53, 'a_bots', 1, 0, 0),
(54, 'a_clearlogs', 1, 0, 0),
(55, 'a_email', 1, 0, 0),
(56, 'a_fauth', 1, 0, 0),
(57, 'a_forum', 1, 0, 0),
(58, 'a_forumadd', 1, 0, 0),
(59, 'a_forumdel', 1, 0, 0),
(60, 'a_group', 1, 0, 0),
(61, 'a_groupadd', 1, 0, 0),
(62, 'a_groupdel', 1, 0, 0),
(63, 'a_icons', 1, 0, 0),
(64, 'a_jabber', 1, 0, 0),
(65, 'a_language', 1, 0, 0),
(66, 'a_mauth', 1, 0, 0),
(67, 'a_modules', 1, 0, 0),
(68, 'a_names', 1, 0, 0),
(69, 'a_phpinfo', 1, 0, 0),
(70, 'a_profile', 1, 0, 0),
(71, 'a_prune', 1, 0, 0),
(72, 'a_ranks', 1, 0, 0),
(73, 'a_reasons', 1, 0, 0),
(74, 'a_roles', 1, 0, 0),
(75, 'a_search', 1, 0, 0),
(76, 'a_server', 1, 0, 0),
(77, 'a_styles', 1, 0, 0),
(78, 'a_switchperm', 1, 0, 0),
(79, 'a_uauth', 1, 0, 0),
(80, 'a_user', 1, 0, 0),
(81, 'a_userdel', 1, 0, 0),
(82, 'a_viewauth', 1, 0, 0),
(83, 'a_viewlogs', 1, 0, 0),
(84, 'a_words', 1, 0, 0),
(85, 'u_', 1, 0, 0),
(86, 'u_attach', 1, 0, 0),
(87, 'u_chgavatar', 1, 0, 0),
(88, 'u_chgcensors', 1, 0, 0),
(89, 'u_chgemail', 1, 0, 0),
(90, 'u_chggrp', 1, 0, 0),
(91, 'u_chgname', 1, 0, 0),
(92, 'u_chgpasswd', 1, 0, 0),
(93, 'u_download', 1, 0, 0),
(94, 'u_hideonline', 1, 0, 0),
(95, 'u_ignoreflood', 1, 0, 0),
(96, 'u_masspm', 1, 0, 0),
(97, 'u_masspm_group', 1, 0, 0),
(98, 'u_pm_attach', 1, 0, 0),
(99, 'u_pm_bbcode', 1, 0, 0),
(100, 'u_pm_delete', 1, 0, 0),
(101, 'u_pm_download', 1, 0, 0),
(102, 'u_pm_edit', 1, 0, 0),
(103, 'u_pm_emailpm', 1, 0, 0),
(104, 'u_pm_flash', 1, 0, 0),
(105, 'u_pm_forward', 1, 0, 0),
(106, 'u_pm_img', 1, 0, 0),
(107, 'u_pm_printpm', 1, 0, 0),
(108, 'u_pm_smilies', 1, 0, 0),
(109, 'u_readpm', 1, 0, 0),
(110, 'u_savedrafts', 1, 0, 0),
(111, 'u_search', 1, 0, 0),
(112, 'u_sendemail', 1, 0, 0),
(113, 'u_sendim', 1, 0, 0),
(114, 'u_sendpm', 1, 0, 0),
(115, 'u_sig', 1, 0, 0),
(116, 'u_viewonline', 1, 0, 0),
(117, 'u_viewprofile', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_acl_roles`
--

CREATE TABLE IF NOT EXISTS `phpbb_acl_roles` (
  `role_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `role_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `role_description` text COLLATE utf8_bin NOT NULL,
  `role_type` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `role_order` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`role_id`),
  KEY `role_type` (`role_type`),
  KEY `role_order` (`role_order`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=25 ;

--
-- Dumping data for table `phpbb_acl_roles`
--

INSERT INTO `phpbb_acl_roles` (`role_id`, `role_name`, `role_description`, `role_type`, `role_order`) VALUES
(1, 'ROLE_ADMIN_STANDARD', 0x524f4c455f4445534352495054494f4e5f41444d494e5f5354414e44415244, 'a_', 1),
(2, 'ROLE_ADMIN_FORUM', 0x524f4c455f4445534352495054494f4e5f41444d494e5f464f52554d, 'a_', 3),
(3, 'ROLE_ADMIN_USERGROUP', 0x524f4c455f4445534352495054494f4e5f41444d494e5f5553455247524f5550, 'a_', 4),
(4, 'ROLE_ADMIN_FULL', 0x524f4c455f4445534352495054494f4e5f41444d494e5f46554c4c, 'a_', 2),
(5, 'ROLE_USER_FULL', 0x524f4c455f4445534352495054494f4e5f555345525f46554c4c, 'u_', 3),
(6, 'ROLE_USER_STANDARD', 0x524f4c455f4445534352495054494f4e5f555345525f5354414e44415244, 'u_', 1),
(7, 'ROLE_USER_LIMITED', 0x524f4c455f4445534352495054494f4e5f555345525f4c494d49544544, 'u_', 2),
(8, 'ROLE_USER_NOPM', 0x524f4c455f4445534352495054494f4e5f555345525f4e4f504d, 'u_', 4),
(9, 'ROLE_USER_NOAVATAR', 0x524f4c455f4445534352495054494f4e5f555345525f4e4f415641544152, 'u_', 5),
(10, 'ROLE_MOD_FULL', 0x524f4c455f4445534352495054494f4e5f4d4f445f46554c4c, 'm_', 3),
(11, 'ROLE_MOD_STANDARD', 0x524f4c455f4445534352495054494f4e5f4d4f445f5354414e44415244, 'm_', 1),
(12, 'ROLE_MOD_SIMPLE', 0x524f4c455f4445534352495054494f4e5f4d4f445f53494d504c45, 'm_', 2),
(13, 'ROLE_MOD_QUEUE', 0x524f4c455f4445534352495054494f4e5f4d4f445f5155455545, 'm_', 4),
(14, 'ROLE_FORUM_FULL', 0x524f4c455f4445534352495054494f4e5f464f52554d5f46554c4c, 'f_', 7),
(15, 'ROLE_FORUM_STANDARD', 0x524f4c455f4445534352495054494f4e5f464f52554d5f5354414e44415244, 'f_', 5),
(16, 'ROLE_FORUM_NOACCESS', 0x524f4c455f4445534352495054494f4e5f464f52554d5f4e4f414343455353, 'f_', 1),
(17, 'ROLE_FORUM_READONLY', 0x524f4c455f4445534352495054494f4e5f464f52554d5f524541444f4e4c59, 'f_', 2),
(18, 'ROLE_FORUM_LIMITED', 0x524f4c455f4445534352495054494f4e5f464f52554d5f4c494d49544544, 'f_', 3),
(19, 'ROLE_FORUM_BOT', 0x524f4c455f4445534352495054494f4e5f464f52554d5f424f54, 'f_', 9),
(20, 'ROLE_FORUM_ONQUEUE', 0x524f4c455f4445534352495054494f4e5f464f52554d5f4f4e5155455545, 'f_', 8),
(21, 'ROLE_FORUM_POLLS', 0x524f4c455f4445534352495054494f4e5f464f52554d5f504f4c4c53, 'f_', 6),
(22, 'ROLE_FORUM_LIMITED_POLLS', 0x524f4c455f4445534352495054494f4e5f464f52554d5f4c494d495445445f504f4c4c53, 'f_', 4),
(23, 'ROLE_USER_NEW_MEMBER', 0x524f4c455f4445534352495054494f4e5f555345525f4e45575f4d454d424552, 'u_', 6),
(24, 'ROLE_FORUM_NEW_MEMBER', 0x524f4c455f4445534352495054494f4e5f464f52554d5f4e45575f4d454d424552, 'f_', 10);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_acl_roles_data`
--

CREATE TABLE IF NOT EXISTS `phpbb_acl_roles_data` (
  `role_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_option_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_setting` tinyint(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`role_id`,`auth_option_id`),
  KEY `ath_op_id` (`auth_option_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_acl_roles_data`
--

INSERT INTO `phpbb_acl_roles_data` (`role_id`, `auth_option_id`, `auth_setting`) VALUES
(1, 44, 1),
(1, 46, 1),
(1, 47, 1),
(1, 48, 1),
(1, 50, 1),
(1, 51, 1),
(1, 52, 1),
(1, 56, 1),
(1, 57, 1),
(1, 58, 1),
(1, 59, 1),
(1, 60, 1),
(1, 61, 1),
(1, 62, 1),
(1, 63, 1),
(1, 66, 1),
(1, 68, 1),
(1, 70, 1),
(1, 71, 1),
(1, 72, 1),
(1, 73, 1),
(1, 79, 1),
(1, 80, 1),
(1, 81, 1),
(1, 82, 1),
(1, 83, 1),
(1, 84, 1),
(2, 44, 1),
(2, 47, 1),
(2, 48, 1),
(2, 56, 1),
(2, 57, 1),
(2, 58, 1),
(2, 59, 1),
(2, 66, 1),
(2, 71, 1),
(2, 79, 1),
(2, 82, 1),
(2, 83, 1),
(3, 44, 1),
(3, 47, 1),
(3, 48, 1),
(3, 50, 1),
(3, 60, 1),
(3, 61, 1),
(3, 62, 1),
(3, 72, 1),
(3, 79, 1),
(3, 80, 1),
(3, 82, 1),
(3, 83, 1),
(4, 44, 1),
(4, 45, 1),
(4, 46, 1),
(4, 47, 1),
(4, 48, 1),
(4, 49, 1),
(4, 50, 1),
(4, 51, 1),
(4, 52, 1),
(4, 53, 1),
(4, 54, 1),
(4, 55, 1),
(4, 56, 1),
(4, 57, 1),
(4, 58, 1),
(4, 59, 1),
(4, 60, 1),
(4, 61, 1),
(4, 62, 1),
(4, 63, 1),
(4, 64, 1),
(4, 65, 1),
(4, 66, 1),
(4, 67, 1),
(4, 68, 1),
(4, 69, 1),
(4, 70, 1),
(4, 71, 1),
(4, 72, 1),
(4, 73, 1),
(4, 74, 1),
(4, 75, 1),
(4, 76, 1),
(4, 77, 1),
(4, 78, 1),
(4, 79, 1),
(4, 80, 1),
(4, 81, 1),
(4, 82, 1),
(4, 83, 1),
(4, 84, 1),
(5, 85, 1),
(5, 86, 1),
(5, 87, 1),
(5, 88, 1),
(5, 89, 1),
(5, 90, 1),
(5, 91, 1),
(5, 92, 1),
(5, 93, 1),
(5, 94, 1),
(5, 95, 1),
(5, 96, 1),
(5, 97, 1),
(5, 98, 1),
(5, 99, 1),
(5, 100, 1),
(5, 101, 1),
(5, 102, 1),
(5, 103, 1),
(5, 104, 1),
(5, 105, 1),
(5, 106, 1),
(5, 107, 1),
(5, 108, 1),
(5, 109, 1),
(5, 110, 1),
(5, 111, 1),
(5, 112, 1),
(5, 113, 1),
(5, 114, 1),
(5, 115, 1),
(5, 116, 1),
(5, 117, 1),
(6, 85, 1),
(6, 86, 1),
(6, 87, 1),
(6, 88, 1),
(6, 89, 1),
(6, 92, 1),
(6, 93, 1),
(6, 94, 1),
(6, 96, 1),
(6, 97, 1),
(6, 98, 1),
(6, 99, 1),
(6, 100, 1),
(6, 101, 1),
(6, 102, 1),
(6, 103, 1),
(6, 106, 1),
(6, 107, 1),
(6, 108, 1),
(6, 109, 1),
(6, 110, 1),
(6, 111, 1),
(6, 112, 1),
(6, 113, 1),
(6, 114, 1),
(6, 115, 1),
(6, 117, 1),
(7, 85, 1),
(7, 87, 1),
(7, 88, 1),
(7, 89, 1),
(7, 92, 1),
(7, 93, 1),
(7, 94, 1),
(7, 99, 1),
(7, 100, 1),
(7, 101, 1),
(7, 102, 1),
(7, 105, 1),
(7, 106, 1),
(7, 107, 1),
(7, 108, 1),
(7, 109, 1),
(7, 114, 1),
(7, 115, 1),
(7, 117, 1),
(8, 85, 1),
(8, 87, 1),
(8, 88, 1),
(8, 89, 1),
(8, 92, 1),
(8, 93, 1),
(8, 94, 1),
(8, 115, 1),
(8, 117, 1),
(8, 96, 0),
(8, 97, 0),
(8, 109, 0),
(8, 114, 0),
(9, 85, 1),
(9, 88, 1),
(9, 89, 1),
(9, 92, 1),
(9, 93, 1),
(9, 94, 1),
(9, 99, 1),
(9, 100, 1),
(9, 101, 1),
(9, 102, 1),
(9, 105, 1),
(9, 106, 1),
(9, 107, 1),
(9, 108, 1),
(9, 109, 1),
(9, 114, 1),
(9, 115, 1),
(9, 117, 1),
(9, 87, 0),
(10, 31, 1),
(10, 32, 1),
(10, 42, 1),
(10, 33, 1),
(10, 34, 1),
(10, 35, 1),
(10, 36, 1),
(10, 37, 1),
(10, 38, 1),
(10, 39, 1),
(10, 40, 1),
(10, 41, 1),
(10, 43, 1),
(11, 31, 1),
(11, 32, 1),
(11, 34, 1),
(11, 35, 1),
(11, 36, 1),
(11, 37, 1),
(11, 38, 1),
(11, 39, 1),
(11, 40, 1),
(11, 41, 1),
(11, 43, 1),
(12, 31, 1),
(12, 34, 1),
(12, 35, 1),
(12, 36, 1),
(12, 40, 1),
(13, 31, 1),
(13, 32, 1),
(13, 35, 1),
(14, 1, 1),
(14, 2, 1),
(14, 3, 1),
(14, 4, 1),
(14, 5, 1),
(14, 6, 1),
(14, 7, 1),
(14, 8, 1),
(14, 9, 1),
(14, 10, 1),
(14, 11, 1),
(14, 12, 1),
(14, 13, 1),
(14, 14, 1),
(14, 15, 1),
(14, 16, 1),
(14, 17, 1),
(14, 18, 1),
(14, 19, 1),
(14, 20, 1),
(14, 21, 1),
(14, 22, 1),
(14, 23, 1),
(14, 24, 1),
(14, 25, 1),
(14, 26, 1),
(14, 27, 1),
(14, 28, 1),
(14, 29, 1),
(14, 30, 1),
(15, 1, 1),
(15, 3, 1),
(15, 4, 1),
(15, 5, 1),
(15, 6, 1),
(15, 7, 1),
(15, 8, 1),
(15, 9, 1),
(15, 11, 1),
(15, 13, 1),
(15, 14, 1),
(15, 15, 1),
(15, 17, 1),
(15, 18, 1),
(15, 19, 1),
(15, 20, 1),
(15, 21, 1),
(15, 22, 1),
(15, 23, 1),
(15, 24, 1),
(15, 25, 1),
(15, 27, 1),
(15, 29, 1),
(15, 30, 1),
(16, 1, 0),
(17, 1, 1),
(17, 7, 1),
(17, 14, 1),
(17, 19, 1),
(17, 20, 1),
(17, 23, 1),
(17, 27, 1),
(18, 1, 1),
(18, 4, 1),
(18, 7, 1),
(18, 8, 1),
(18, 9, 1),
(18, 13, 1),
(18, 14, 1),
(18, 15, 1),
(18, 17, 1),
(18, 18, 1),
(18, 19, 1),
(18, 20, 1),
(18, 21, 1),
(18, 22, 1),
(18, 23, 1),
(18, 24, 1),
(18, 25, 1),
(18, 27, 1),
(18, 29, 1),
(19, 1, 1),
(19, 7, 1),
(19, 14, 1),
(19, 19, 1),
(19, 20, 1),
(20, 1, 1),
(20, 3, 1),
(20, 4, 1),
(20, 7, 1),
(20, 8, 1),
(20, 9, 1),
(20, 13, 1),
(20, 14, 1),
(20, 17, 1),
(20, 18, 1),
(20, 19, 1),
(20, 20, 1),
(20, 21, 1),
(20, 22, 1),
(20, 23, 1),
(20, 24, 1),
(20, 25, 1),
(20, 27, 1),
(20, 29, 1),
(20, 15, 0),
(21, 1, 1),
(21, 3, 1),
(21, 4, 1),
(21, 5, 1),
(21, 6, 1),
(21, 7, 1),
(21, 8, 1),
(21, 9, 1),
(21, 11, 1),
(21, 13, 1),
(21, 14, 1),
(21, 15, 1),
(21, 16, 1),
(21, 17, 1),
(21, 18, 1),
(21, 19, 1),
(21, 20, 1),
(21, 21, 1),
(21, 22, 1),
(21, 23, 1),
(21, 24, 1),
(21, 25, 1),
(21, 27, 1),
(21, 29, 1),
(21, 30, 1),
(22, 1, 1),
(22, 4, 1),
(22, 7, 1),
(22, 8, 1),
(22, 9, 1),
(22, 13, 1),
(22, 14, 1),
(22, 15, 1),
(22, 16, 1),
(22, 17, 1),
(22, 18, 1),
(22, 19, 1),
(22, 20, 1),
(22, 21, 1),
(22, 22, 1),
(22, 23, 1),
(22, 24, 1),
(22, 25, 1),
(22, 27, 1),
(22, 29, 1),
(23, 96, 0),
(23, 97, 0),
(23, 114, 0),
(24, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_acl_users`
--

CREATE TABLE IF NOT EXISTS `phpbb_acl_users` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_option_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_role_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `auth_setting` tinyint(2) NOT NULL DEFAULT '0',
  KEY `user_id` (`user_id`),
  KEY `auth_option_id` (`auth_option_id`),
  KEY `auth_role_id` (`auth_role_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_acl_users`
--

INSERT INTO `phpbb_acl_users` (`user_id`, `forum_id`, `auth_option_id`, `auth_role_id`, `auth_setting`) VALUES
(2, 0, 0, 5, 0),
(54, 0, 0, 2, 0),
(55, 0, 0, 5, 0),
(55, 7, 2, 0, 1),
(55, 7, 11, 0, 1),
(55, 7, 14, 0, 1),
(55, 7, 17, 0, 1),
(55, 7, 20, 0, 1),
(55, 7, 21, 0, 1),
(55, 7, 26, 0, 1),
(55, 7, 3, 0, 1),
(55, 7, 4, 0, 1),
(55, 7, 7, 0, 1),
(55, 7, 10, 0, 1),
(55, 7, 13, 0, 1),
(55, 7, 24, 0, 1),
(55, 7, 25, 0, 1),
(55, 7, 5, 0, 1),
(55, 7, 6, 0, 1),
(55, 7, 8, 0, 1),
(55, 7, 9, 0, 1),
(55, 7, 19, 0, 1),
(55, 7, 22, 0, 1),
(55, 7, 27, 0, 1),
(55, 7, 28, 0, 1),
(55, 7, 12, 0, 1),
(55, 7, 15, 0, 1),
(55, 7, 18, 0, 1),
(55, 7, 23, 0, 1),
(55, 7, 16, 0, 1),
(55, 7, 29, 0, 1),
(55, 7, 30, 0, 1),
(55, 7, 1, 0, 1),
(55, 5, 2, 0, 1),
(55, 5, 11, 0, 1),
(55, 5, 14, 0, 1),
(55, 5, 17, 0, 1),
(55, 5, 20, 0, 1),
(55, 5, 21, 0, 1),
(55, 5, 26, 0, 1),
(55, 5, 3, 0, 1),
(55, 5, 4, 0, 1),
(55, 5, 7, 0, 1),
(55, 5, 10, 0, 1),
(55, 5, 13, 0, 1),
(55, 5, 24, 0, 1),
(55, 5, 25, 0, 1),
(55, 5, 5, 0, 1),
(55, 5, 6, 0, 1),
(55, 5, 8, 0, 1),
(55, 5, 9, 0, 1),
(55, 5, 19, 0, 1),
(55, 5, 22, 0, 1),
(55, 5, 27, 0, 1),
(55, 5, 28, 0, 1),
(55, 5, 12, 0, 1),
(55, 5, 15, 0, 1),
(55, 5, 18, 0, 1),
(55, 5, 23, 0, 1),
(55, 5, 16, 0, 1),
(55, 5, 29, 0, 1),
(55, 5, 30, 0, 1),
(55, 5, 1, 0, 1),
(55, 21, 0, 14, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_attachments`
--

CREATE TABLE IF NOT EXISTS `phpbb_attachments` (
  `attach_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `post_msg_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `in_message` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `poster_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `is_orphan` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `physical_filename` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `real_filename` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `download_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `attach_comment` text COLLATE utf8_bin NOT NULL,
  `extension` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `mimetype` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `filesize` int(20) unsigned NOT NULL DEFAULT '0',
  `filetime` int(11) unsigned NOT NULL DEFAULT '0',
  `thumbnail` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`attach_id`),
  KEY `filetime` (`filetime`),
  KEY `post_msg_id` (`post_msg_id`),
  KEY `topic_id` (`topic_id`),
  KEY `poster_id` (`poster_id`),
  KEY `is_orphan` (`is_orphan`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_banlist`
--

CREATE TABLE IF NOT EXISTS `phpbb_banlist` (
  `ban_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `ban_userid` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `ban_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ban_email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ban_start` int(11) unsigned NOT NULL DEFAULT '0',
  `ban_end` int(11) unsigned NOT NULL DEFAULT '0',
  `ban_exclude` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `ban_reason` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ban_give_reason` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`ban_id`),
  KEY `ban_end` (`ban_end`),
  KEY `ban_user` (`ban_userid`,`ban_exclude`),
  KEY `ban_email` (`ban_email`,`ban_exclude`),
  KEY `ban_ip` (`ban_ip`,`ban_exclude`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_bbcodes`
--

CREATE TABLE IF NOT EXISTS `phpbb_bbcodes` (
  `bbcode_id` smallint(4) unsigned NOT NULL DEFAULT '0',
  `bbcode_tag` varchar(16) COLLATE utf8_bin NOT NULL DEFAULT '',
  `bbcode_helpline` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_on_posting` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bbcode_match` text COLLATE utf8_bin NOT NULL,
  `bbcode_tpl` mediumtext COLLATE utf8_bin NOT NULL,
  `first_pass_match` mediumtext COLLATE utf8_bin NOT NULL,
  `first_pass_replace` mediumtext COLLATE utf8_bin NOT NULL,
  `second_pass_match` mediumtext COLLATE utf8_bin NOT NULL,
  `second_pass_replace` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`bbcode_id`),
  KEY `display_on_post` (`display_on_posting`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_bookmarks`
--

CREATE TABLE IF NOT EXISTS `phpbb_bookmarks` (
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`topic_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_bots`
--

CREATE TABLE IF NOT EXISTS `phpbb_bots` (
  `bot_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `bot_active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `bot_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `bot_agent` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `bot_ip` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`bot_id`),
  KEY `bot_active` (`bot_active`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=52 ;

--
-- Dumping data for table `phpbb_bots`
--

INSERT INTO `phpbb_bots` (`bot_id`, `bot_active`, `bot_name`, `user_id`, `bot_agent`, `bot_ip`) VALUES
(1, 1, 'AdsBot [Google]', 3, 'AdsBot-Google', ''),
(2, 1, 'Alexa [Bot]', 4, 'ia_archiver', ''),
(3, 1, 'Alta Vista [Bot]', 5, 'Scooter/', ''),
(4, 1, 'Ask Jeeves [Bot]', 6, 'Ask Jeeves', ''),
(5, 1, 'Baidu [Spider]', 7, 'Baiduspider+(', ''),
(6, 1, 'Bing [Bot]', 8, 'bingbot/', ''),
(7, 1, 'Exabot [Bot]', 9, 'Exabot/', ''),
(8, 1, 'FAST Enterprise [Crawler]', 10, 'FAST Enterprise Crawler', ''),
(9, 1, 'FAST WebCrawler [Crawler]', 11, 'FAST-WebCrawler/', ''),
(10, 1, 'Francis [Bot]', 12, 'http://www.neomo.de/', ''),
(11, 1, 'Gigabot [Bot]', 13, 'Gigabot/', ''),
(12, 1, 'Google Adsense [Bot]', 14, 'Mediapartners-Google', ''),
(13, 1, 'Google Desktop', 15, 'Google Desktop', ''),
(14, 1, 'Google Feedfetcher', 16, 'Feedfetcher-Google', ''),
(15, 1, 'Google [Bot]', 17, 'Googlebot', ''),
(16, 1, 'Heise IT-Markt [Crawler]', 18, 'heise-IT-Markt-Crawler', ''),
(17, 1, 'Heritrix [Crawler]', 19, 'heritrix/1.', ''),
(18, 1, 'IBM Research [Bot]', 20, 'ibm.com/cs/crawler', ''),
(19, 1, 'ICCrawler - ICjobs', 21, 'ICCrawler - ICjobs', ''),
(20, 1, 'ichiro [Crawler]', 22, 'ichiro/', ''),
(21, 1, 'Majestic-12 [Bot]', 23, 'MJ12bot/', ''),
(22, 1, 'Metager [Bot]', 24, 'MetagerBot/', ''),
(23, 1, 'MSN NewsBlogs', 25, 'msnbot-NewsBlogs/', ''),
(24, 1, 'MSN [Bot]', 26, 'msnbot/', ''),
(25, 1, 'MSNbot Media', 27, 'msnbot-media/', ''),
(26, 1, 'NG-Search [Bot]', 28, 'NG-Search/', ''),
(27, 1, 'Nutch [Bot]', 29, 'http://lucene.apache.org/nutch/', ''),
(28, 1, 'Nutch/CVS [Bot]', 30, 'NutchCVS/', ''),
(29, 1, 'OmniExplorer [Bot]', 31, 'OmniExplorer_Bot/', ''),
(30, 1, 'Online link [Validator]', 32, 'online link validator', ''),
(31, 1, 'psbot [Picsearch]', 33, 'psbot/0', ''),
(32, 1, 'Seekport [Bot]', 34, 'Seekbot/', ''),
(33, 1, 'Sensis [Crawler]', 35, 'Sensis Web Crawler', ''),
(34, 1, 'SEO Crawler', 36, 'SEO search Crawler/', ''),
(35, 1, 'Seoma [Crawler]', 37, 'Seoma [SEO Crawler]', ''),
(36, 1, 'SEOSearch [Crawler]', 38, 'SEOsearch/', ''),
(37, 1, 'Snappy [Bot]', 39, 'Snappy/1.1 ( http://www.urltrends.com/ )', ''),
(38, 1, 'Steeler [Crawler]', 40, 'http://www.tkl.iis.u-tokyo.ac.jp/~crawler/', ''),
(39, 1, 'Synoo [Bot]', 41, 'SynooBot/', ''),
(40, 1, 'Telekom [Bot]', 42, 'crawleradmin.t-info@telekom.de', ''),
(41, 1, 'TurnitinBot [Bot]', 43, 'TurnitinBot/', ''),
(42, 1, 'Voyager [Bot]', 44, 'voyager/1.0', ''),
(43, 1, 'W3 [Sitesearch]', 45, 'W3 SiteSearch Crawler', ''),
(44, 1, 'W3C [Linkcheck]', 46, 'W3C-checklink/', ''),
(45, 1, 'W3C [Validator]', 47, 'W3C_*Validator', ''),
(46, 1, 'WiseNut [Bot]', 48, 'http://www.WISEnutbot.com', ''),
(47, 1, 'YaCy [Bot]', 49, 'yacybot', ''),
(48, 1, 'Yahoo MMCrawler [Bot]', 50, 'Yahoo-MMCrawler/', ''),
(49, 1, 'Yahoo Slurp [Bot]', 51, 'Yahoo! DE Slurp', ''),
(50, 1, 'Yahoo [Bot]', 52, 'Yahoo! Slurp', ''),
(51, 1, 'YahooSeeker [Bot]', 53, 'YahooSeeker/', '');

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_config`
--

CREATE TABLE IF NOT EXISTS `phpbb_config` (
  `config_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `config_value` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `is_dynamic` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`config_name`),
  KEY `is_dynamic` (`is_dynamic`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_config`
--

INSERT INTO `phpbb_config` (`config_name`, `config_value`, `is_dynamic`) VALUES
('active_sessions', '0', 0),
('allow_attachments', '1', 0),
('allow_autologin', '1', 0),
('allow_avatar', '1', 0),
('allow_avatar_local', '0', 0),
('allow_avatar_remote', '0', 0),
('allow_avatar_upload', '1', 0),
('allow_avatar_remote_upload', '0', 0),
('allow_bbcode', '1', 0),
('allow_birthdays', '1', 0),
('allow_bookmarks', '1', 0),
('allow_emailreuse', '0', 0),
('allow_forum_notify', '1', 0),
('allow_mass_pm', '1', 0),
('allow_name_chars', 'USERNAME_CHARS_ANY', 0),
('allow_namechange', '0', 0),
('allow_nocensors', '0', 0),
('allow_pm_attach', '0', 0),
('allow_pm_report', '1', 0),
('allow_post_flash', '1', 0),
('allow_post_links', '1', 0),
('allow_privmsg', '1', 0),
('allow_quick_reply', '1', 0),
('allow_sig', '1', 0),
('allow_sig_bbcode', '1', 0),
('allow_sig_flash', '0', 0),
('allow_sig_img', '1', 0),
('allow_sig_links', '1', 0),
('allow_sig_pm', '1', 0),
('allow_sig_smilies', '1', 0),
('allow_smilies', '1', 0),
('allow_topic_notify', '1', 0),
('attachment_quota', '52428800', 0),
('auth_bbcode_pm', '1', 0),
('auth_flash_pm', '0', 0),
('auth_img_pm', '1', 0),
('auth_method', 'db', 0),
('auth_smilies_pm', '1', 0),
('avatar_filesize', '6144', 0),
('avatar_gallery_path', 'images/avatars/gallery', 0),
('avatar_max_height', '90', 0),
('avatar_max_width', '90', 0),
('avatar_min_height', '20', 0),
('avatar_min_width', '20', 0),
('avatar_path', 'images/avatars/upload', 0),
('avatar_salt', 'c1712ff3c9107adb28b9698b58a1cc06', 0),
('board_contact', 'jwoodall@matherlifeways.com', 0),
('board_disable', '0', 0),
('board_disable_msg', '', 0),
('board_dst', '1', 0),
('board_email', 'jwoodall@matherlifeways.com', 0),
('board_email_form', '0', 0),
('board_email_sig', 'Thanks, The Management', 0),
('board_hide_emails', '1', 0),
('board_timezone', '-6', 0),
('browser_check', '1', 0),
('bump_interval', '10', 0),
('bump_type', 'd', 0),
('cache_gc', '7200', 0),
('captcha_plugin', 'phpbb_captcha_gd', 0),
('captcha_gd', '1', 0),
('captcha_gd_foreground_noise', '0', 0),
('captcha_gd_x_grid', '25', 0),
('captcha_gd_y_grid', '25', 0),
('captcha_gd_wave', '0', 0),
('captcha_gd_3d_noise', '1', 0),
('captcha_gd_fonts', '1', 0),
('confirm_refresh', '1', 0),
('check_attachment_content', '1', 0),
('check_dnsbl', '0', 0),
('chg_passforce', '0', 0),
('cookie_domain', 'courseportal.matherlifewaysinstituteonaging.com', 0),
('cookie_name', 'phpbb3_5fzi1', 0),
('cookie_path', '/', 0),
('cookie_secure', '1', 0),
('coppa_enable', '0', 0),
('coppa_fax', '', 0),
('coppa_mail', '', 0),
('database_gc', '604800', 0),
('dbms_version', '5.0.95', 0),
('default_dateformat', 'D M d, Y g:i a', 0),
('default_style', '1', 0),
('display_last_edited', '1', 0),
('display_order', '0', 0),
('edit_time', '0', 0),
('delete_time', '0', 0),
('email_check_mx', '1', 0),
('email_enable', '1', 0),
('email_function_name', 'mail', 0),
('email_max_chunk_size', '50', 0),
('email_package_size', '20', 0),
('enable_confirm', '1', 0),
('enable_pm_icons', '1', 0),
('enable_post_confirm', '1', 0),
('feed_enable', '1', 0),
('feed_http_auth', '0', 0),
('feed_limit_post', '15', 0),
('feed_limit_topic', '10', 0),
('feed_overall_forums', '0', 0),
('feed_overall', '1', 0),
('feed_forum', '1', 0),
('feed_topic', '1', 0),
('feed_topics_new', '1', 0),
('feed_topics_active', '0', 0),
('feed_item_statistics', '1', 0),
('flood_interval', '15', 0),
('force_server_vars', '1', 0),
('form_token_lifetime', '7200', 0),
('form_token_mintime', '0', 0),
('form_token_sid_guests', '1', 0),
('forward_pm', '1', 0),
('forwarded_for_check', '0', 0),
('full_folder_action', '2', 0),
('fulltext_mysql_max_word_len', '254', 0),
('fulltext_mysql_min_word_len', '4', 0),
('fulltext_native_common_thres', '5', 0),
('fulltext_native_load_upd', '1', 0),
('fulltext_native_max_chars', '14', 0),
('fulltext_native_min_chars', '3', 0),
('gzip_compress', '0', 0),
('hot_threshold', '25', 0),
('icons_path', 'images/icons', 0),
('img_create_thumbnail', '0', 0),
('img_display_inlined', '1', 0),
('img_imagick', '', 0),
('img_link_height', '0', 0),
('img_link_width', '0', 0),
('img_max_height', '0', 0),
('img_max_thumb_width', '400', 0),
('img_max_width', '0', 0),
('img_min_thumb_filesize', '12000', 0),
('ip_check', '4', 0),
('ip_login_limit_max', '50', 0),
('ip_login_limit_time', '21600', 0),
('ip_login_limit_use_forwarded', '0', 0),
('jab_enable', '0', 0),
('jab_host', '', 0),
('jab_password', '', 0),
('jab_package_size', '20', 0),
('jab_port', '5222', 0),
('jab_use_ssl', '0', 0),
('jab_username', '', 0),
('ldap_base_dn', '', 0),
('ldap_email', '', 0),
('ldap_password', '', 0),
('ldap_port', '', 0),
('ldap_server', '', 0),
('ldap_uid', '', 0),
('ldap_user', '', 0),
('ldap_user_filter', '', 0),
('limit_load', '0', 0),
('limit_search_load', '0', 0),
('load_anon_lastread', '0', 0),
('load_birthdays', '1', 0),
('load_cpf_memberlist', '0', 0),
('load_cpf_viewprofile', '1', 0),
('load_cpf_viewtopic', '0', 0),
('load_db_lastread', '1', 0),
('load_db_track', '1', 0),
('load_jumpbox', '1', 0),
('load_moderators', '1', 0),
('load_online', '1', 0),
('load_online_guests', '1', 0),
('load_online_time', '5', 0),
('load_onlinetrack', '1', 0),
('load_search', '1', 0),
('load_tplcompile', '0', 0),
('load_unreads_search', '1', 0),
('load_user_activity', '1', 0),
('max_attachments', '3', 0),
('max_attachments_pm', '1', 0),
('max_autologin_time', '0', 0),
('max_filesize', '262144', 0),
('max_filesize_pm', '262144', 0),
('max_login_attempts', '3', 0),
('max_name_chars', '20', 0),
('max_num_search_keywords', '10', 0),
('max_pass_chars', '100', 0),
('max_poll_options', '10', 0),
('max_post_chars', '60000', 0),
('max_post_font_size', '200', 0),
('max_post_img_height', '0', 0),
('max_post_img_width', '0', 0),
('max_post_smilies', '0', 0),
('max_post_urls', '0', 0),
('max_quote_depth', '3', 0),
('max_reg_attempts', '5', 0),
('max_sig_chars', '255', 0),
('max_sig_font_size', '200', 0),
('max_sig_img_height', '0', 0),
('max_sig_img_width', '0', 0),
('max_sig_smilies', '0', 0),
('max_sig_urls', '5', 0),
('min_name_chars', '3', 0),
('min_pass_chars', '6', 0),
('min_post_chars', '1', 0),
('min_search_author_chars', '3', 0),
('mime_triggers', 'body|head|html|img|plaintext|a href|pre|script|table|title', 0),
('new_member_post_limit', '3', 0),
('new_member_group_default', '0', 0),
('override_user_style', '0', 0),
('pass_complex', 'PASS_TYPE_ANY', 0),
('pm_edit_time', '0', 0),
('pm_max_boxes', '4', 0),
('pm_max_msgs', '50', 0),
('pm_max_recipients', '0', 0),
('posts_per_page', '10', 0),
('print_pm', '1', 0),
('queue_interval', '60', 0),
('ranks_path', 'images/ranks', 0),
('require_activation', '1', 0),
('referer_validation', '1', 0),
('script_path', '/phpBB', 0),
('search_block_size', '250', 0),
('search_gc', '7200', 0),
('search_interval', '0', 0),
('search_anonymous_interval', '0', 0),
('search_type', 'fulltext_native', 0),
('search_store_results', '1800', 0),
('secure_allow_deny', '1', 0),
('secure_allow_empty_referer', '1', 0),
('secure_downloads', '0', 0),
('server_name', 'courseportal.matherlifewaysinstituteonaging.com', 0),
('server_port', '443', 0),
('server_protocol', 'https://', 0),
('session_gc', '3600', 0),
('session_length', '3600', 0),
('site_desc', 'Mather LifeWays Institute on Aging Online Course Portal', 0),
('sitename', 'courseportal.matherlifewaysinstituteonaging.com', 0),
('smilies_path', 'images/smilies', 0),
('smilies_per_page', '50', 0),
('smtp_auth_method', 'PLAIN', 0),
('smtp_delivery', '0', 0),
('smtp_host', '', 0),
('smtp_password', '', 0),
('smtp_port', '25', 0),
('smtp_username', '', 0),
('topics_per_page', '25', 0),
('tpl_allow_php', '0', 0),
('upload_icons_path', 'images/upload_icons', 0),
('upload_path', 'files', 0),
('version', '3.0.11', 0),
('warnings_expire_days', '90', 0),
('warnings_gc', '14400', 0),
('cache_last_gc', '1351830788', 1),
('cron_lock', '0', 1),
('database_last_gc', '1351830922', 1),
('last_queue_run', '0', 1),
('newest_user_colour', '', 1),
('newest_user_id', '55', 1),
('newest_username', 'Ellenz', 1),
('num_files', '0', 1),
('num_posts', '35', 1),
('num_topics', '35', 1),
('num_users', '3', 1),
('rand_seed', '2a37249c904bc9e6013400ead0fb075a', 1),
('rand_seed_last_update', '1351833690', 1),
('record_online_date', '1350620786', 1),
('record_online_users', '3', 1),
('search_indexing_state', '', 1),
('search_last_gc', '1351831067', 1),
('session_last_gc', '1351831990', 1),
('upload_dir_size', '0', 1),
('warnings_last_gc', '1351830883', 1),
('board_startdate', '1346462145', 0),
('default_lang', 'en', 0),
('questionnaire_unique_id', '63e4417965db2dba', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_confirm`
--

CREATE TABLE IF NOT EXISTS `phpbb_confirm` (
  `confirm_id` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_id` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `confirm_type` tinyint(3) NOT NULL DEFAULT '0',
  `code` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `seed` int(10) unsigned NOT NULL DEFAULT '0',
  `attempts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`session_id`,`confirm_id`),
  KEY `confirm_type` (`confirm_type`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_disallow`
--

CREATE TABLE IF NOT EXISTS `phpbb_disallow` (
  `disallow_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `disallow_username` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`disallow_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_drafts`
--

CREATE TABLE IF NOT EXISTS `phpbb_drafts` (
  `draft_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `save_time` int(11) unsigned NOT NULL DEFAULT '0',
  `draft_subject` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `draft_message` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`draft_id`),
  KEY `save_time` (`save_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phpbb_drafts`
--

INSERT INTO `phpbb_drafts` (`draft_id`, `user_id`, `topic_id`, `forum_id`, `save_time`, `draft_subject`, `draft_message`) VALUES
(1, 55, 0, 21, 1350622037, 'Cursos en línea/Apoyo', 0x557365206573746520c3a17265612070617261206465626174652067656e6572616c);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_extensions`
--

CREATE TABLE IF NOT EXISTS `phpbb_extensions` (
  `extension_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `extension` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`extension_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=67 ;

--
-- Dumping data for table `phpbb_extensions`
--

INSERT INTO `phpbb_extensions` (`extension_id`, `group_id`, `extension`) VALUES
(1, 1, 'gif'),
(2, 1, 'png'),
(3, 1, 'jpeg'),
(4, 1, 'jpg'),
(5, 1, 'tif'),
(6, 1, 'tiff'),
(7, 1, 'tga'),
(8, 2, 'gtar'),
(9, 2, 'gz'),
(10, 2, 'tar'),
(11, 2, 'zip'),
(12, 2, 'rar'),
(13, 2, 'ace'),
(14, 2, 'torrent'),
(15, 2, 'tgz'),
(16, 2, 'bz2'),
(17, 2, '7z'),
(18, 3, 'txt'),
(19, 3, 'c'),
(20, 3, 'h'),
(21, 3, 'cpp'),
(22, 3, 'hpp'),
(23, 3, 'diz'),
(24, 3, 'csv'),
(25, 3, 'ini'),
(26, 3, 'log'),
(27, 3, 'js'),
(28, 3, 'xml'),
(29, 4, 'xls'),
(30, 4, 'xlsx'),
(31, 4, 'xlsm'),
(32, 4, 'xlsb'),
(33, 4, 'doc'),
(34, 4, 'docx'),
(35, 4, 'docm'),
(36, 4, 'dot'),
(37, 4, 'dotx'),
(38, 4, 'dotm'),
(39, 4, 'pdf'),
(40, 4, 'ai'),
(41, 4, 'ps'),
(42, 4, 'ppt'),
(43, 4, 'pptx'),
(44, 4, 'pptm'),
(45, 4, 'odg'),
(46, 4, 'odp'),
(47, 4, 'ods'),
(48, 4, 'odt'),
(49, 4, 'rtf'),
(50, 5, 'rm'),
(51, 5, 'ram'),
(52, 6, 'wma'),
(53, 6, 'wmv'),
(54, 7, 'swf'),
(55, 8, 'mov'),
(56, 8, 'm4v'),
(57, 8, 'm4a'),
(58, 8, 'mp4'),
(59, 8, '3gp'),
(60, 8, '3g2'),
(61, 8, 'qt'),
(62, 9, 'mpeg'),
(63, 9, 'mpg'),
(64, 9, 'mp3'),
(65, 9, 'ogg'),
(66, 9, 'ogm');

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_extension_groups`
--

CREATE TABLE IF NOT EXISTS `phpbb_extension_groups` (
  `group_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `cat_id` tinyint(2) NOT NULL DEFAULT '0',
  `allow_group` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `download_mode` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `upload_icon` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `max_filesize` int(20) unsigned NOT NULL DEFAULT '0',
  `allowed_forums` text COLLATE utf8_bin NOT NULL,
  `allow_in_pm` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=10 ;

--
-- Dumping data for table `phpbb_extension_groups`
--

INSERT INTO `phpbb_extension_groups` (`group_id`, `group_name`, `cat_id`, `allow_group`, `download_mode`, `upload_icon`, `max_filesize`, `allowed_forums`, `allow_in_pm`) VALUES
(1, 'IMAGES', 1, 1, 1, '', 0, '', 0),
(2, 'ARCHIVES', 0, 1, 1, '', 0, '', 0),
(3, 'PLAIN_TEXT', 0, 0, 1, '', 0, '', 0),
(4, 'DOCUMENTS', 0, 0, 1, '', 0, '', 0),
(5, 'REAL_MEDIA', 3, 0, 1, '', 0, '', 0),
(6, 'WINDOWS_MEDIA', 2, 0, 1, '', 0, '', 0),
(7, 'FLASH_FILES', 5, 0, 1, '', 0, '', 0),
(8, 'QUICKTIME_MEDIA', 6, 0, 1, '', 0, '', 0),
(9, 'DOWNLOADABLE_FILES', 0, 0, 1, '', 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_forums`
--

CREATE TABLE IF NOT EXISTS `phpbb_forums` (
  `forum_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `left_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `right_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_parents` mediumtext COLLATE utf8_bin NOT NULL,
  `forum_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_desc` text COLLATE utf8_bin NOT NULL,
  `forum_desc_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_desc_options` int(11) unsigned NOT NULL DEFAULT '7',
  `forum_desc_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_link` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_password` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_style` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_image` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_rules` text COLLATE utf8_bin NOT NULL,
  `forum_rules_link` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_rules_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_rules_options` int(11) unsigned NOT NULL DEFAULT '7',
  `forum_rules_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_topics_per_page` tinyint(4) NOT NULL DEFAULT '0',
  `forum_type` tinyint(4) NOT NULL DEFAULT '0',
  `forum_status` tinyint(4) NOT NULL DEFAULT '0',
  `forum_posts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_topics` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_topics_real` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_last_post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_last_poster_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_last_post_subject` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_last_post_time` int(11) unsigned NOT NULL DEFAULT '0',
  `forum_last_poster_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_last_poster_colour` varchar(6) COLLATE utf8_bin NOT NULL DEFAULT '',
  `forum_flags` tinyint(4) NOT NULL DEFAULT '32',
  `forum_options` int(20) unsigned NOT NULL DEFAULT '0',
  `display_subforum_list` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `display_on_index` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_indexing` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_icons` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_prune` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `prune_next` int(11) unsigned NOT NULL DEFAULT '0',
  `prune_days` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `prune_viewed` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `prune_freq` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`forum_id`),
  KEY `left_right_id` (`left_id`,`right_id`),
  KEY `forum_lastpost_id` (`forum_last_post_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=35 ;

--
-- Dumping data for table `phpbb_forums`
--

INSERT INTO `phpbb_forums` (`forum_id`, `parent_id`, `left_id`, `right_id`, `forum_parents`, `forum_name`, `forum_desc`, `forum_desc_bitfield`, `forum_desc_options`, `forum_desc_uid`, `forum_link`, `forum_password`, `forum_style`, `forum_image`, `forum_rules`, `forum_rules_link`, `forum_rules_bitfield`, `forum_rules_options`, `forum_rules_uid`, `forum_topics_per_page`, `forum_type`, `forum_status`, `forum_posts`, `forum_topics`, `forum_topics_real`, `forum_last_post_id`, `forum_last_poster_id`, `forum_last_post_subject`, `forum_last_post_time`, `forum_last_poster_name`, `forum_last_poster_colour`, `forum_flags`, `forum_options`, `display_subforum_list`, `display_on_index`, `enable_indexing`, `enable_icons`, `enable_prune`, `prune_next`, `prune_days`, `prune_viewed`, `prune_freq`) VALUES
(10, 5, 10, 11, 0x613a313a7b693a353b613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b693a313b7d7d, 'Making Sense of Memory Loss (MSML) Online', 0x416c6c20706f7374696e6773, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 6, 2, 'Please use this forum for course discussion', 1347216826, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(8, 5, 6, 7, 0x613a313a7b693a353b613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b693a313b7d7d, 'CARE Coaching Online', 0x416c6c20706f7374696e6773, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 4, 2, 'Please use this forum for course discussion', 1347216789, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(9, 5, 8, 9, 0x613a313a7b693a353b613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b693a313b7d7d, 'Intro to Caregiving Online', 0x416c6c20706f7374696e6773, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 5, 2, 'Please use this forum for course discussion', 1347216809, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(12, 0, 29, 30, '', 'OTHER', 0x466f72756d20666f7220616c6c206e6f6e2d72656c6174656420706f7374696e6773, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 8, 2, 'Please use this forum for non-related purposes.', 1347216890, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(7, 0, 1, 2, '', 'General Discussion', 0x47656e6572616c2064697363757373696f6e202f20616c6c20746f70696373, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 2, 2, 'Please use this forum for general discussion.', 1347216671, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(5, 0, 3, 26, '', 'Online Courses / Programs', 0x436f7572736520436f6e74656e742044697363757373696f6e, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(6, 5, 4, 5, 0x613a313a7b693a353b613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b693a313b7d7d, 'Empower Online', 0x416c6c20706f7374696e6773, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 3, 2, 'Please use this forum for course discussion', 1347216772, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(11, 0, 27, 28, '', 'Help / Support', 0x557365207468697320666f72756d20666f722068656c7020616e642f6f7220737570706f727420746f70696373, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 7, 2, 'Please use this forum for support.', 1347216848, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(13, 5, 12, 25, 0x613a313a7b693a353b613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b693a313b7d7d, 'Gerontology Online Program', 0x416c6c20706f7374696e6773, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(14, 13, 13, 14, 0x613a323a7b693a353b613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b693a313b7d693a31333b613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b693a313b7d7d, 'Concepts of Aging', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 9, 2, 'Please use this forum for course discussion', 1347216928, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(15, 13, 15, 16, 0x613a323a7b693a353b613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b693a313b7d693a31333b613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b693a313b7d7d, 'Cultural Dimensions of Aging', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 10, 2, 'Please use this forum for course discussion', 1347216941, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(16, 13, 17, 18, 0x613a323a7b693a353b613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b693a313b7d693a31333b613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b693a313b7d7d, 'Environmental Context of Aging', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 11, 2, 'Please use this forum for course discussion', 1347216954, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(17, 13, 19, 20, 0x613a323a7b693a353b613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b693a313b7d693a31333b613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b693a313b7d7d, 'Mental Health and Aging', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 12, 2, 'Please use this forum for course discussion', 1347216970, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(18, 13, 21, 22, 0x613a323a7b693a353b613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b693a313b7d693a31333b613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b693a313b7d7d, 'Interdisciplinary Seminar on Aging', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 13, 2, 'Please use this forum for course discussion', 1347216984, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(19, 13, 23, 24, 0x613a323a7b693a353b613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b693a313b7d693a31333b613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b693a313b7d7d, 'Interventions with Older Adults', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 14, 2, 'Please use this forum for course discussion', 1347216999, 'Administrator', 'AA0000', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(27, 20, 32, 33, 0x613a313a7b693a32303b613a323a7b693a303b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b693a313b693a313b7d7d, '综合讨论区', 0xe7bbbce59088e8aea8e8aeba2fe68980e69c89e997aee9a298, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 15, 54, '本讨论区仅用于一般性问题讨论', 1347928574, 'lijuanyin', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(28, 20, 34, 43, 0x613a313a7b693a32303b613a323a7b693a303b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b693a313b693a313b7d7d, '网络课程', 0xe8afbee7a88be58685e5aeb9e8aea8e8aeba, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(29, 20, 44, 45, 0x613a313a7b693a32303b613a323a7b693a303b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b693a313b693a313b7d7d, '帮助/支持', 0xe69cace8aea8e8aebae58cbae794a8e4ba8ee58f91e5b883e6b182e58aa9e68896e68a80e69cafe694afe68c81e8af9de9a298, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 20, 54, '请在此发布求助或技术支持话题', 1347928761, 'lijuanyin', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(26, 0, 59, 60, '', 'Deutsch', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(25, 0, 57, 58, '', 'हिंदी', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(24, 0, 55, 56, '', 'العربية', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(23, 0, 53, 54, '', 'Français', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(22, 0, 51, 52, '', 'Português', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(21, 0, 49, 50, '', 'Español', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 15, 15, 15, 36, 55, 'Foro para todos los mensajes no relacionados al curso', 1351225133, 'Ellenz', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(20, 0, 31, 48, '', '中国（大陆及台湾）', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 0, 0, 0, 0, 0, '', 0, '', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(30, 20, 46, 47, 0x613a313a7b693a32303b613a323a7b693a303b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b693a313b693a313b7d7d, '灌水区', 0xe4bbbbe4bd95e697a0e585b3e8afbee7a88be8af9de9a298, '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 21, 54, '请在此发布任何无关课程的话题', 1347928845, 'lijuanyin', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(31, 28, 35, 36, 0x613a323a7b693a32303b613a323a7b693a303b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b693a313b693a313b7d693a32383b613a323a7b693a303b733a31323a22e7bd91e7bb9ce8afbee7a88b223b693a313b693a313b7d7d, '雇员照顾者网络课程', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 16, 54, '请在此讨论本课程相关问题', 1347928648, 'lijuanyin', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(32, 28, 37, 38, 0x613a323a7b693a32303b613a323a7b693a303b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b693a313b693a313b7d693a32383b613a323a7b693a303b733a31323a22e7bd91e7bb9ce8afbee7a88b223b693a313b693a313b7d7d, '照顾指导网络课程', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 17, 54, '请在此讨论本课程相关问题', 1347928663, 'lijuanyin', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(33, 28, 39, 40, 0x613a323a7b693a32303b613a323a7b693a303b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b693a313b693a313b7d693a32383b613a323a7b693a303b733a31323a22e7bd91e7bb9ce8afbee7a88b223b693a313b693a313b7d7d, '照顾入门网络课程', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 18, 54, '请在此讨论本课程相关问题', 1347928688, 'lijuanyin', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1),
(34, 28, 41, 42, 0x613a323a7b693a32303b613a323a7b693a303b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b693a313b693a313b7d693a32383b613a323a7b693a303b733a31323a22e7bd91e7bb9ce8afbee7a88b223b693a313b693a313b7d7d, '理解记忆缺失网络课程', '', '', 7, '', '', '', 0, '', '', '', '', 7, '', 0, 1, 0, 1, 1, 1, 19, 54, '请在此讨论本课程相关问题', 1347928725, 'lijuanyin', '', 48, 0, 1, 0, 1, 0, 0, 0, 7, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_forums_access`
--

CREATE TABLE IF NOT EXISTS `phpbb_forums_access` (
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `session_id` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`forum_id`,`user_id`,`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_forums_track`
--

CREATE TABLE IF NOT EXISTS `phpbb_forums_track` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `mark_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_forums_track`
--

INSERT INTO `phpbb_forums_track` (`user_id`, `forum_id`, `mark_time`) VALUES
(2, 7, 1347216671),
(2, 6, 1347216772),
(2, 8, 1347216789),
(2, 9, 1347216809),
(2, 10, 1347216826),
(2, 11, 1347216848),
(2, 12, 1347216890),
(2, 14, 1347216928),
(2, 15, 1347216941),
(2, 16, 1347216955),
(2, 17, 1347216970),
(2, 18, 1347216984),
(2, 19, 1347216999),
(54, 27, 1347928574),
(54, 31, 1347928648),
(54, 32, 1347928663),
(54, 33, 1347928688),
(54, 34, 1347928725),
(54, 29, 1347928761),
(54, 30, 1347928845),
(2, 21, 1350622982),
(55, 21, 1351225133);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_forums_watch`
--

CREATE TABLE IF NOT EXISTS `phpbb_forums_watch` (
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `notify_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  KEY `forum_id` (`forum_id`),
  KEY `user_id` (`user_id`),
  KEY `notify_stat` (`notify_status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_groups`
--

CREATE TABLE IF NOT EXISTS `phpbb_groups` (
  `group_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `group_type` tinyint(4) NOT NULL DEFAULT '1',
  `group_founder_manage` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group_skip_auth` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_desc` text COLLATE utf8_bin NOT NULL,
  `group_desc_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_desc_options` int(11) unsigned NOT NULL DEFAULT '7',
  `group_desc_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_display` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group_avatar` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_avatar_type` tinyint(2) NOT NULL DEFAULT '0',
  `group_avatar_width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `group_avatar_height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `group_rank` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_colour` varchar(6) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_sig_chars` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_receive_pm` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `group_message_limit` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_max_recipients` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_legend` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`group_id`),
  KEY `group_legend_name` (`group_legend`,`group_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=8 ;

--
-- Dumping data for table `phpbb_groups`
--

INSERT INTO `phpbb_groups` (`group_id`, `group_type`, `group_founder_manage`, `group_skip_auth`, `group_name`, `group_desc`, `group_desc_bitfield`, `group_desc_options`, `group_desc_uid`, `group_display`, `group_avatar`, `group_avatar_type`, `group_avatar_width`, `group_avatar_height`, `group_rank`, `group_colour`, `group_sig_chars`, `group_receive_pm`, `group_message_limit`, `group_max_recipients`, `group_legend`) VALUES
(1, 3, 0, 0, 'GUESTS', '', '', 7, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, 5, 0),
(2, 3, 0, 0, 'REGISTERED', '', '', 7, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, 5, 0),
(3, 3, 0, 0, 'REGISTERED_COPPA', '', '', 7, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, 5, 0),
(4, 3, 0, 0, 'GLOBAL_MODERATORS', '', '', 7, '', 0, '', 0, 0, 0, 0, '00AA00', 0, 0, 0, 0, 1),
(5, 3, 1, 0, 'ADMINISTRATORS', '', '', 7, '', 0, '', 0, 0, 0, 0, 'AA0000', 0, 0, 0, 0, 1),
(6, 3, 0, 0, 'BOTS', '', '', 7, '', 0, '', 0, 0, 0, 0, '9E8DA7', 0, 0, 0, 5, 0),
(7, 3, 0, 0, 'NEWLY_REGISTERED', '', '', 7, '', 0, '', 0, 0, 0, 0, '', 0, 0, 0, 5, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_icons`
--

CREATE TABLE IF NOT EXISTS `phpbb_icons` (
  `icons_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `icons_url` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `icons_width` tinyint(4) NOT NULL DEFAULT '0',
  `icons_height` tinyint(4) NOT NULL DEFAULT '0',
  `icons_order` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `display_on_posting` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`icons_id`),
  KEY `display_on_posting` (`display_on_posting`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=11 ;

--
-- Dumping data for table `phpbb_icons`
--

INSERT INTO `phpbb_icons` (`icons_id`, `icons_url`, `icons_width`, `icons_height`, `icons_order`, `display_on_posting`) VALUES
(1, 'misc/fire.gif', 16, 16, 1, 1),
(2, 'smile/redface.gif', 16, 16, 9, 1),
(3, 'smile/mrgreen.gif', 16, 16, 10, 1),
(4, 'misc/heart.gif', 16, 16, 4, 1),
(5, 'misc/star.gif', 16, 16, 2, 1),
(6, 'misc/radioactive.gif', 16, 16, 3, 1),
(7, 'misc/thinking.gif', 16, 16, 5, 1),
(8, 'smile/info.gif', 16, 16, 8, 1),
(9, 'smile/question.gif', 16, 16, 6, 1),
(10, 'smile/alert.gif', 16, 16, 7, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_lang`
--

CREATE TABLE IF NOT EXISTS `phpbb_lang` (
  `lang_id` tinyint(4) NOT NULL AUTO_INCREMENT,
  `lang_iso` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lang_dir` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lang_english_name` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lang_local_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lang_author` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`lang_id`),
  KEY `lang_iso` (`lang_iso`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phpbb_lang`
--

INSERT INTO `phpbb_lang` (`lang_id`, `lang_iso`, `lang_dir`, `lang_english_name`, `lang_local_name`, `lang_author`) VALUES
(1, 'en', 'en', 'British English', 'British English', 'phpBB Group');

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_log`
--

CREATE TABLE IF NOT EXISTS `phpbb_log` (
  `log_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `log_type` tinyint(4) NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `reportee_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `log_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `log_time` int(11) unsigned NOT NULL DEFAULT '0',
  `log_operation` text COLLATE utf8_bin NOT NULL,
  `log_data` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`log_id`),
  KEY `log_type` (`log_type`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_id` (`topic_id`),
  KEY `reportee_id` (`reportee_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=259 ;

--
-- Dumping data for table `phpbb_log`
--

INSERT INTO `phpbb_log` (`log_id`, `log_type`, `user_id`, `forum_id`, `topic_id`, `reportee_id`, `log_ip`, `log_time`, `log_operation`, `log_data`) VALUES
(1, 0, 2, 0, 0, 0, '98.253.33.44', 1346462156, 0x4c4f475f494e5354414c4c5f494e5354414c4c4544, 0x613a313a7b693a303b733a363a22332e302e3131223b7d),
(2, 0, 2, 0, 0, 0, '98.253.33.44', 1346466061, 0x4c4f475f434f4e4649475f5345435552495459, ''),
(3, 0, 2, 0, 0, 0, '98.253.33.44', 1346466230, 0x4c4f475f434f4e4649475f53455454494e4753, ''),
(4, 0, 2, 0, 0, 0, '98.253.33.44', 1346466401, 0x4c4f475f434f4e4649475f524547495354524154494f4e, ''),
(5, 0, 2, 0, 0, 0, '98.253.33.44', 1346633286, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(6, 0, 2, 0, 0, 0, '96.42.42.18', 1346728740, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(7, 0, 2, 0, 0, 0, '96.42.42.18', 1346728954, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(8, 0, 2, 0, 0, 0, '96.42.42.18', 1346729092, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(9, 0, 2, 0, 0, 0, '96.42.42.18', 1346729116, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(10, 0, 2, 0, 0, 0, '96.42.42.18', 1346729166, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(11, 0, 2, 0, 0, 0, '96.42.42.18', 1346729310, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(12, 0, 2, 0, 0, 0, '96.42.42.18', 1346729423, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(13, 0, 2, 0, 0, 0, '96.42.42.18', 1346729511, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(14, 0, 2, 0, 0, 0, '96.42.42.18', 1346729560, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(15, 0, 2, 0, 0, 0, '96.42.42.18', 1346729790, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(16, 0, 2, 0, 0, 0, '96.42.42.18', 1346729794, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(17, 0, 2, 0, 0, 0, '96.42.42.18', 1346730191, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(18, 0, 2, 0, 0, 0, '96.42.42.18', 1346730319, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(19, 0, 2, 0, 0, 0, '96.42.42.18', 1346730467, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(20, 0, 2, 0, 0, 0, '96.42.42.18', 1346730494, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(21, 0, 2, 0, 0, 0, '96.42.42.18', 1346730851, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(22, 0, 2, 0, 0, 0, '96.42.42.18', 1346730883, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(23, 0, 2, 0, 0, 0, '96.42.42.18', 1346730938, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(24, 0, 2, 0, 0, 0, '96.42.42.18', 1346730966, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(25, 0, 2, 0, 0, 0, '96.42.42.18', 1346731038, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(26, 0, 2, 0, 0, 0, '96.42.42.18', 1346731172, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(27, 0, 2, 0, 0, 0, '96.42.42.18', 1346731223, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(28, 0, 2, 0, 0, 0, '96.42.42.18', 1346731283, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(29, 0, 2, 0, 0, 0, '96.42.42.18', 1346867363, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(30, 0, 2, 0, 0, 0, '96.42.42.18', 1346867378, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(31, 0, 2, 0, 0, 0, '96.42.42.18', 1346867561, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(32, 0, 2, 0, 0, 0, '96.42.42.18', 1346867603, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(33, 0, 2, 0, 0, 0, '96.42.42.18', 1346867627, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(34, 0, 2, 0, 0, 0, '96.42.42.18', 1346867663, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(35, 0, 2, 0, 0, 0, '96.42.42.18', 1346867797, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(36, 0, 2, 0, 0, 0, '96.42.42.18', 1346867834, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(37, 0, 2, 0, 0, 0, '96.42.42.18', 1346867867, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(38, 0, 2, 0, 0, 0, '96.42.42.18', 1346867982, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(39, 0, 2, 0, 0, 0, '96.42.42.18', 1346868059, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(40, 0, 2, 0, 0, 0, '96.42.42.18', 1346868156, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(41, 0, 2, 0, 0, 0, '96.42.42.18', 1346868371, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31303a22466f72756d204e616d65223b7d),
(42, 0, 2, 0, 0, 0, '96.42.42.18', 1346868404, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31343a22456d706f776572204f6e6c696e65223b7d),
(43, 0, 2, 0, 0, 0, '96.42.42.18', 1346868501, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(44, 0, 2, 0, 0, 0, '96.42.42.18', 1346868544, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a33333a22496e74726f64756374696f6e20746f2043617265676976696e67204f6e6c696e65223b7d),
(45, 0, 2, 0, 0, 0, '96.42.42.18', 1346868643, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(46, 0, 2, 0, 0, 0, '96.42.42.18', 1346868643, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a33333a22496e74726f64756374696f6e20746f2043617265676976696e67204f6e6c696e65223b693a313b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(47, 0, 2, 0, 0, 0, '96.42.42.18', 1346868850, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(48, 0, 2, 0, 0, 0, '96.42.42.18', 1346869022, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(49, 0, 2, 0, 0, 0, '96.42.42.18', 1346869137, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(50, 0, 2, 0, 0, 0, '96.42.42.18', 1346869142, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(51, 0, 2, 0, 0, 0, '96.42.42.18', 1346869192, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(52, 0, 2, 0, 0, 0, '96.42.42.18', 1346873761, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(53, 0, 2, 0, 0, 0, '96.42.42.18', 1346873766, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(54, 0, 2, 0, 0, 0, '96.42.42.18', 1346873797, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(55, 0, 2, 0, 0, 0, '96.42.42.18', 1346874945, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(56, 0, 2, 0, 0, 0, '96.42.42.18', 1346875084, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(57, 0, 2, 0, 0, 0, '96.42.42.18', 1346875211, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(58, 0, 2, 0, 0, 0, '96.42.42.18', 1346875237, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(59, 0, 2, 0, 0, 0, '96.42.42.18', 1346875255, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(60, 0, 2, 0, 0, 0, '96.42.42.18', 1346875259, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(61, 0, 2, 0, 0, 0, '96.42.42.18', 1346875402, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(62, 0, 2, 0, 0, 0, '96.42.42.18', 1346875999, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(63, 0, 2, 0, 0, 0, '96.42.42.18', 1346876032, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(64, 0, 2, 0, 0, 0, '96.42.42.18', 1346876079, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(65, 0, 2, 0, 0, 0, '96.42.42.18', 1346876164, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(66, 0, 2, 0, 0, 0, '96.42.42.18', 1346876197, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(67, 0, 2, 0, 0, 0, '96.42.42.18', 1346876672, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(68, 0, 2, 0, 0, 0, '96.42.42.18', 1346876762, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(69, 0, 2, 0, 0, 0, '96.42.42.18', 1346876766, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(70, 0, 2, 0, 0, 0, '96.42.42.18', 1346876855, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(71, 0, 2, 0, 0, 0, '96.42.42.18', 1346876859, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(72, 0, 2, 0, 0, 0, '96.42.42.18', 1346877763, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(73, 0, 2, 0, 0, 0, '96.42.42.18', 1346877767, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(74, 0, 2, 0, 0, 0, '96.42.42.18', 1346877925, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(75, 0, 2, 0, 0, 0, '96.42.42.18', 1346877930, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(76, 0, 2, 0, 0, 0, '96.42.42.18', 1346878022, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(77, 0, 2, 0, 0, 0, '96.42.42.18', 1346878026, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(78, 0, 2, 0, 0, 0, '96.42.42.18', 1346878455, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(79, 0, 2, 0, 0, 0, '96.42.42.18', 1346878459, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(80, 0, 2, 0, 0, 0, '96.42.42.18', 1346878542, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(81, 0, 2, 0, 0, 0, '96.42.42.18', 1346878549, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(82, 0, 2, 0, 0, 0, '96.42.42.18', 1346878779, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(83, 0, 2, 0, 0, 0, '96.42.42.18', 1346878783, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(84, 0, 2, 0, 0, 0, '96.42.42.18', 1346878889, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(85, 0, 2, 0, 0, 0, '96.42.42.18', 1346879458, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(86, 0, 2, 0, 0, 0, '96.42.42.18', 1346879569, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(87, 0, 2, 0, 0, 0, '96.42.42.18', 1346879643, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(88, 0, 2, 0, 0, 0, '96.42.42.18', 1346879708, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(89, 0, 2, 0, 0, 0, '96.42.42.18', 1346879897, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(90, 0, 2, 0, 0, 0, '96.42.42.18', 1346880038, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(91, 0, 2, 0, 0, 0, '96.42.42.18', 1346880043, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(92, 0, 2, 0, 0, 0, '96.42.42.18', 1346880141, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(93, 0, 2, 0, 0, 0, '96.42.42.18', 1346880288, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(94, 0, 2, 0, 0, 0, '96.42.42.18', 1346880396, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(95, 0, 2, 0, 0, 0, '96.42.42.18', 1346880647, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(96, 0, 2, 0, 0, 0, '96.42.42.18', 1346880654, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(97, 0, 2, 0, 0, 0, '96.42.42.18', 1346880704, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(98, 0, 2, 0, 0, 0, '96.42.42.18', 1346880710, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(99, 0, 2, 0, 0, 0, '96.42.42.18', 1346880770, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(100, 0, 2, 0, 0, 0, '96.42.42.18', 1346880917, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(101, 0, 2, 0, 0, 0, '96.42.42.18', 1346880921, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(102, 0, 2, 0, 0, 0, '96.42.42.18', 1346880983, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(103, 0, 2, 0, 0, 0, '96.42.42.18', 1346881019, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(104, 0, 2, 0, 0, 0, '96.42.42.18', 1346881024, 0x4c4f475f54454d504c4154455f43414348455f434c4541524544, 0x613a323a7b693a303b733a393a2270726f73696c766572223b693a313b733a393a22416c6c2066696c6573223b7d),
(105, 0, 2, 0, 0, 0, '98.215.6.86', 1347212951, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(106, 0, 2, 0, 0, 0, '98.215.6.86', 1347213809, 0x4c4f475f464f52554d5f44454c5f504f5354535f464f52554d53, 0x613a313a7b693a303b733a33333a22496e74726f64756374696f6e20746f2043617265676976696e67204f6e6c696e65223b7d),
(107, 0, 2, 0, 0, 0, '98.215.6.86', 1347214020, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31343a224f6e6c696e6520436f7572736573223b7d),
(108, 0, 2, 0, 0, 0, '98.215.6.86', 1347214052, 0x4c4f475f464f52554d5f44454c5f464f52554d53, 0x613a313a7b693a303b733a31343a22456d706f776572204f6e6c696e65223b7d),
(109, 0, 2, 0, 0, 0, '98.215.6.86', 1347214077, 0x4c4f475f464f52554d5f53594e43, 0x613a313a7b693a303b733a31343a224f6e6c696e6520436f7572736573223b7d),
(110, 0, 2, 0, 0, 0, '98.215.6.86', 1347214107, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31343a22456d706f776572204f6e6c696e65223b7d),
(111, 0, 2, 0, 0, 0, '98.215.6.86', 1347214107, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31343a224f6e6c696e6520436f7572736573223b693a313b733a31343a22456d706f776572204f6e6c696e65223b7d),
(112, 0, 2, 0, 0, 0, '98.215.6.86', 1347214181, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(113, 0, 2, 0, 0, 0, '98.215.6.86', 1347214273, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a32303a224341524520436f616368696e67204f6e6c696e65223b7d),
(114, 0, 2, 0, 0, 0, '98.215.6.86', 1347214273, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31343a224f6e6c696e6520436f7572736573223b693a313b733a32303a224341524520436f616368696e67204f6e6c696e65223b7d),
(115, 0, 2, 0, 0, 0, '98.215.6.86', 1347214289, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a32363a22496e74726f20746f2043617265676976696e67204f6e6c696e65223b7d),
(116, 0, 2, 0, 0, 0, '98.215.6.86', 1347214289, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31343a224f6e6c696e6520436f7572736573223b693a313b733a32363a22496e74726f20746f2043617265676976696e67204f6e6c696e65223b7d),
(117, 0, 2, 0, 0, 0, '98.215.6.86', 1347214309, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a34313a224d616b696e672053656e7365206f66204d656d6f7279204c6f737320284d534d4c29204f6e6c696e65223b7d),
(118, 0, 2, 0, 0, 0, '98.215.6.86', 1347214309, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31343a224f6e6c696e6520436f7572736573223b693a313b733a34313a224d616b696e672053656e7365206f66204d656d6f7279204c6f737320284d534d4c29204f6e6c696e65223b7d),
(119, 0, 2, 0, 0, 0, '98.215.6.86', 1347214313, 0x4c4f475f464f52554d5f4d4f56455f5550, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a31343a22456d706f776572204f6e6c696e65223b7d),
(120, 0, 2, 0, 0, 0, '98.215.6.86', 1347214325, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31343a2248656c70202f20537570706f7274223b7d),
(121, 0, 2, 0, 0, 0, '98.215.6.86', 1347214325, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31343a224f6e6c696e6520436f7572736573223b693a313b733a31343a2248656c70202f20537570706f7274223b7d),
(122, 0, 2, 0, 0, 0, '98.215.6.86', 1347214342, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31343a22456d706f776572204f6e6c696e65223b7d),
(123, 0, 2, 0, 0, 0, '98.215.6.86', 1347214360, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a353a224f54484552223b7d),
(124, 0, 2, 0, 0, 0, '98.215.6.86', 1347214360, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31343a224f6e6c696e6520436f7572736573223b693a313b733a353a224f54484552223b7d),
(125, 0, 2, 0, 0, 0, '98.215.6.86', 1347214392, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(126, 0, 2, 0, 0, 0, '98.215.6.86', 1347214420, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a353a224f54484552223b7d),
(127, 0, 2, 0, 0, 0, '98.215.6.86', 1347214429, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31343a2248656c70202f20537570706f7274223b7d),
(128, 0, 2, 0, 0, 0, '98.215.6.86', 1347214440, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(129, 0, 2, 0, 0, 0, '98.215.6.86', 1347214449, 0x4c4f475f464f52554d5f4d4f56455f444f574e, 0x613a323a7b693a303b733a353a224f54484552223b693a313b733a31343a2248656c70202f20537570706f7274223b7d),
(130, 0, 2, 0, 0, 0, '98.215.6.86', 1347214450, 0x4c4f475f464f52554d5f4d4f56455f444f574e, 0x613a323a7b693a303b733a31343a2248656c70202f20537570706f7274223b693a313b733a353a224f54484552223b7d),
(131, 0, 2, 0, 0, 0, '98.215.6.86', 1347214452, 0x4c4f475f464f52554d5f4d4f56455f444f574e, 0x613a323a7b693a303b733a353a224f54484552223b693a313b733a31343a2248656c70202f20537570706f7274223b7d),
(132, 0, 2, 0, 0, 0, '98.215.6.86', 1347214454, 0x4c4f475f464f52554d5f4d4f56455f5550, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a353a224f54484552223b7d),
(133, 0, 2, 0, 0, 0, '98.215.6.86', 1347214457, 0x4c4f475f464f52554d5f4d4f56455f444f574e, 0x613a323a7b693a303b733a31343a2248656c70202f20537570706f7274223b693a313b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(134, 0, 2, 0, 0, 0, '98.215.6.86', 1347214459, 0x4c4f475f464f52554d5f4d4f56455f5550, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a31343a224f6e6c696e6520436f7572736573223b7d),
(135, 0, 2, 0, 0, 0, '98.215.6.86', 1347214563, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(136, 0, 2, 0, 0, 0, '98.215.6.86', 1347214657, 0x4c4f475f464f52554d5f53594e43, 0x613a313a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(137, 0, 2, 0, 0, 0, '98.215.6.86', 1347214980, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(138, 0, 2, 0, 0, 0, '98.215.6.86', 1347215004, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(139, 0, 2, 0, 0, 0, '98.215.6.86', 1347215041, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(140, 0, 2, 0, 0, 0, '98.215.6.86', 1347215284, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(141, 0, 2, 0, 0, 0, '98.215.6.86', 1347215971, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a33393a223c7370616e20636c6173733d22736570223e41646d696e6973747261746f72733c2f7370616e3e223b7d),
(142, 0, 2, 0, 0, 0, '98.215.6.86', 1347216095, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a3136363a224d616b696e672053656e7365206f66204d656d6f7279204c6f737320284d534d4c29204f6e6c696e652c204341524520436f616368696e67204f6e6c696e652c20496e74726f20746f2043617265676976696e67204f6e6c696e652c204f544845522c2047656e6572616c2044697363757373696f6e2c204f6e6c696e6520436f75727365732c20456d706f776572204f6e6c696e652c2048656c70202f20537570706f7274223b693a313b733a3132333a223c7370616e20636c6173733d22736570223e4775657374733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e526567697374657265642075736572733c2f7370616e3e2c203c7370616e20636c6173733d22736570223e4e65776c7920726567697374657265642075736572733c2f7370616e3e223b7d),
(143, 0, 2, 0, 0, 0, '98.215.6.86', 1347216156, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b7d),
(144, 0, 2, 0, 0, 0, '98.215.6.86', 1347216167, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31343a224f6e6c696e6520436f7572736573223b7d),
(145, 0, 2, 0, 0, 0, '98.215.6.86', 1347216186, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31343a2248656c70202f20537570706f7274223b7d),
(146, 0, 2, 0, 0, 0, '98.215.6.86', 1347216208, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a353a224f54484552223b7d),
(147, 0, 2, 0, 0, 0, '98.215.6.86', 1347216263, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31343a22456d706f776572204f6e6c696e65223b7d),
(148, 0, 2, 0, 0, 0, '98.215.6.86', 1347216272, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32303a224341524520436f616368696e67204f6e6c696e65223b7d),
(149, 0, 2, 0, 0, 0, '98.215.6.86', 1347216283, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32363a22496e74726f20746f2043617265676976696e67204f6e6c696e65223b7d),
(150, 0, 2, 0, 0, 0, '98.215.6.86', 1347216292, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32363a22496e74726f20746f2043617265676976696e67204f6e6c696e65223b7d),
(151, 0, 2, 0, 0, 0, '98.215.6.86', 1347216302, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a34313a224d616b696e672053656e7365206f66204d656d6f7279204c6f737320284d534d4c29204f6e6c696e65223b7d),
(152, 0, 2, 0, 0, 0, '98.215.6.86', 1347216348, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b7d),
(153, 0, 2, 0, 0, 0, '98.215.6.86', 1347216406, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b7d),
(154, 0, 2, 0, 0, 0, '98.215.6.86', 1347216406, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a32353a224f6e6c696e6520436f7572736573202f2050726f6772616d73223b693a313b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b7d),
(155, 0, 2, 0, 0, 0, '98.215.6.86', 1347216481, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31373a22436f6e6365707473206f66204167696e67223b7d),
(156, 0, 2, 0, 0, 0, '98.215.6.86', 1347216481, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b733a31373a22436f6e6365707473206f66204167696e67223b7d),
(157, 0, 2, 0, 0, 0, '98.215.6.86', 1347216502, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a32383a2243756c747572616c2044696d656e73696f6e73206f66204167696e67223b7d),
(158, 0, 2, 0, 0, 0, '98.215.6.86', 1347216503, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b733a32383a2243756c747572616c2044696d656e73696f6e73206f66204167696e67223b7d),
(159, 0, 2, 0, 0, 0, '98.215.6.86', 1347216521, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a33303a22456e7669726f6e6d656e74616c20436f6e74657874206f66204167696e67223b7d),
(160, 0, 2, 0, 0, 0, '98.215.6.86', 1347216521, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b733a33303a22456e7669726f6e6d656e74616c20436f6e74657874206f66204167696e67223b7d),
(161, 0, 2, 0, 0, 0, '98.215.6.86', 1347216542, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a32333a224d656e74616c204865616c746820616e64204167696e67223b7d),
(162, 0, 2, 0, 0, 0, '98.215.6.86', 1347216543, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b733a32333a224d656e74616c204865616c746820616e64204167696e67223b7d),
(163, 0, 2, 0, 0, 0, '98.215.6.86', 1347216560, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a33343a22496e7465726469736369706c696e6172792053656d696e6172206f6e204167696e67223b7d),
(164, 0, 2, 0, 0, 0, '98.215.6.86', 1347216560, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b733a33343a22496e7465726469736369706c696e6172792053656d696e6172206f6e204167696e67223b7d),
(165, 0, 2, 0, 0, 0, '98.215.6.86', 1347216575, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a33313a22496e74657276656e74696f6e732077697468204f6c646572204164756c7473223b7d),
(166, 0, 2, 0, 0, 0, '98.215.6.86', 1347216575, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a32363a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d223b693a313b733a33313a22496e74657276656e74696f6e732077697468204f6c646572204164756c7473223b7d),
(167, 0, 2, 0, 0, 0, '98.215.6.86', 1347216625, 0x4c4f475f41434c5f4144445f464f52554d5f4c4f43414c5f465f, 0x613a323a7b693a303b733a3230313a224765726f6e746f6c6f6779204f6e6c696e652050726f6772616d2c20436f6e6365707473206f66204167696e672c2043756c747572616c2044696d656e73696f6e73206f66204167696e672c20456e7669726f6e6d656e74616c20436f6e74657874206f66204167696e672c204d656e74616c204865616c746820616e64204167696e672c20496e7465726469736369706c696e6172792053656d696e6172206f6e204167696e672c20496e74657276656e74696f6e732077697468204f6c646572204164756c7473223b693a313b733a33393a223c7370616e20636c6173733d22736570223e41646d696e6973747261746f72733c2f7370616e3e223b7d),
(168, 0, 2, 0, 0, 0, '70.194.68.150', 1347480761, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(169, 0, 2, 0, 0, 0, '70.194.68.150', 1347481087, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a32313a224368696e6573652028547261646974696f6e616c29223b7d),
(170, 0, 2, 0, 0, 0, '70.194.68.150', 1347481104, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a373a224368696e657365223b7d),
(171, 0, 2, 0, 0, 0, '70.194.68.150', 1347481131, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a383a2245737061c3b16f6c223b7d),
(172, 0, 2, 0, 0, 0, '70.194.68.150', 1347481146, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a373a224368696e657365223b7d),
(173, 0, 2, 0, 0, 0, '70.194.68.150', 1347481146, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a373a224368696e657365223b7d),
(174, 0, 2, 0, 0, 0, '70.194.68.150', 1347481156, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a383a2245737061c3b16f6c223b7d),
(175, 0, 2, 0, 0, 0, '70.194.68.150', 1347481156, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a383a2245737061c3b16f6c223b7d),
(176, 0, 2, 0, 0, 0, '70.194.68.150', 1347481330, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31303a22506f7274756775c3aa73223b7d),
(177, 0, 2, 0, 0, 0, '70.194.68.150', 1347481330, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a31303a22506f7274756775c3aa73223b7d),
(178, 0, 2, 0, 0, 0, '70.194.68.150', 1347481384, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a393a22e4b8ade59c8be79a84223b7d),
(179, 0, 2, 0, 0, 0, '70.194.68.150', 1347481418, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a393a224672616ec3a7616973223b7d),
(180, 0, 2, 0, 0, 0, '70.194.68.150', 1347481448, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31343a22d8a7d984d8b9d8b1d8a8d98ad8a9223b7d),
(181, 0, 2, 0, 0, 0, '70.194.68.150', 1347481494, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31343a22d8a7d984d8b9d8b1d8a8d98ad8a9223b7d),
(182, 0, 2, 0, 0, 0, '70.194.68.150', 1347481494, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a31343a22d8a7d984d8b9d8b1d8a8d98ad8a9223b7d),
(183, 0, 2, 0, 0, 0, '70.194.68.150', 1347481504, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a393a224672616ec3a7616973223b7d),
(184, 0, 2, 0, 0, 0, '70.194.68.150', 1347481504, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a393a224672616ec3a7616973223b7d),
(185, 0, 2, 0, 0, 0, '70.194.68.150', 1347481514, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31303a22506f7274756775c3aa73223b7d),
(186, 0, 2, 0, 0, 0, '70.194.68.150', 1347481514, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a31303a22506f7274756775c3aa73223b7d),
(187, 0, 2, 0, 0, 0, '70.194.68.150', 1347481605, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31353a22e0a4b9e0a4bfe0a482e0a4a6e0a580223b7d),
(188, 0, 2, 0, 0, 0, '70.194.68.150', 1347481605, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a31353a22e0a4b9e0a4bfe0a482e0a4a6e0a580223b7d),
(189, 0, 2, 0, 0, 0, '70.194.68.150', 1347481634, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a373a2244657574736368223b7d),
(190, 0, 2, 0, 0, 0, '70.194.68.150', 1347481634, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a373a2244657574736368223b7d),
(191, 0, 2, 0, 0, 0, '96.42.42.18', 1347503039, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(192, 0, 2, 0, 0, 0, '96.42.42.18', 1347503055, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(193, 0, 2, 0, 0, 0, '96.42.42.18', 1347503095, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(194, 0, 2, 0, 0, 0, '96.42.42.18', 1347503246, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(195, 0, 2, 0, 0, 0, '96.42.42.18', 1347503453, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(196, 0, 2, 0, 0, 0, '96.42.42.18', 1347504176, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(197, 0, 2, 0, 0, 0, '96.42.42.18', 1347504578, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(198, 0, 2, 0, 0, 0, '96.42.42.18', 1347505200, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(199, 0, 2, 0, 0, 0, '96.42.42.18', 1347505368, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(200, 0, 2, 0, 0, 0, '96.42.42.18', 1347505548, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(201, 0, 2, 0, 0, 0, '96.42.42.18', 1347505915, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(202, 0, 2, 0, 0, 0, '96.42.42.18', 1347505995, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(203, 0, 2, 0, 0, 0, '96.42.42.18', 1347506214, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(204, 0, 2, 0, 0, 0, '96.42.42.18', 1347506378, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(205, 0, 2, 0, 0, 0, '96.42.42.18', 1347506441, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(206, 0, 2, 0, 0, 0, '96.42.42.18', 1347506507, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(207, 0, 2, 0, 0, 0, '96.42.42.18', 1347506802, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(208, 0, 2, 0, 0, 0, '96.42.42.18', 1347506860, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(209, 0, 2, 0, 0, 0, '96.42.42.18', 1347506910, 0x4c4f475f5448454d455f524546524553484544, 0x613a313a7b693a303b733a393a2270726f73696c766572223b7d),
(210, 3, 1, 0, 0, 54, '98.228.234.190', 1347924918, 0x4c4f475f555345525f4143544956455f55534552, ''),
(211, 0, 2, 0, 0, 0, '98.215.6.86', 1347925337, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(212, 0, 2, 0, 0, 0, '98.215.6.86', 1347925356, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31343a22456d706f776572204f6e6c696e65223b7d),
(213, 0, 2, 0, 0, 0, '98.215.6.86', 1347925356, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a31343a22456d706f776572204f6e6c696e65223b7d),
(214, 0, 2, 0, 0, 0, '98.215.6.86', 1347925572, 0x4c4f475f41434c5f4144445f555345525f474c4f42414c5f415f, 0x613a313a7b693a303b733a393a226c696a75616e79696e223b7d),
(215, 0, 54, 0, 0, 0, '98.228.234.190', 1347925956, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(216, 0, 54, 0, 0, 0, '98.228.234.190', 1347925996, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a363a22e4b8ade59bbd223b7d),
(217, 0, 54, 0, 0, 0, '98.228.234.190', 1347926922, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31353a22e7bbbce59088e8aea8e8aebae58cba223b7d),
(218, 0, 54, 0, 0, 0, '98.228.234.190', 1347926922, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a363a22e4b8ade59bbd223b693a313b733a31353a22e7bbbce59088e8aea8e8aebae58cba223b7d),
(219, 0, 54, 0, 0, 0, '98.228.234.190', 1347927010, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31323a22e7bd91e7bb9ce8afbee7a88b223b7d),
(220, 0, 54, 0, 0, 0, '98.228.234.190', 1347927010, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a363a22e4b8ade59bbd223b693a313b733a31323a22e7bd91e7bb9ce8afbee7a88b223b7d),
(221, 0, 54, 0, 0, 0, '98.228.234.190', 1347927189, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a31333a22e5b8aee58aa92fe694afe68c81223b7d),
(222, 0, 54, 0, 0, 0, '98.228.234.190', 1347927189, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a363a22e4b8ade59bbd223b693a313b733a31333a22e5b8aee58aa92fe694afe68c81223b7d),
(223, 0, 54, 0, 0, 0, '98.228.234.190', 1347927247, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a393a22e7818ce6b0b4e58cba223b7d),
(224, 0, 54, 0, 0, 0, '98.228.234.190', 1347927247, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a363a22e4b8ade59bbd223b693a313b733a393a22e7818ce6b0b4e58cba223b7d),
(225, 0, 54, 0, 0, 0, '98.228.234.190', 1347927354, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a32373a22e99b87e59198e785a7e9a1bee88085e7bd91e7bb9ce8afbee7a88b223b7d),
(226, 0, 54, 0, 0, 0, '98.228.234.190', 1347927354, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31323a22e7bd91e7bb9ce8afbee7a88b223b693a313b733a32373a22e99b87e59198e785a7e9a1bee88085e7bd91e7bb9ce8afbee7a88b223b7d),
(227, 0, 54, 0, 0, 0, '98.228.234.190', 1347927636, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a32343a22e785a7e9a1bee68c87e5afbce7bd91e7bb9ce8afbee7a88b223b7d),
(228, 0, 54, 0, 0, 0, '98.228.234.190', 1347927636, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31323a22e7bd91e7bb9ce8afbee7a88b223b693a313b733a32343a22e785a7e9a1bee68c87e5afbce7bd91e7bb9ce8afbee7a88b223b7d),
(229, 0, 54, 0, 0, 0, '98.228.234.190', 1347927694, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a32343a22e785a7e9a1bee585a5e997a8e7bd91e7bb9ce8afbee7a88b223b7d),
(230, 0, 54, 0, 0, 0, '98.228.234.190', 1347927694, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31323a22e7bd91e7bb9ce8afbee7a88b223b693a313b733a32343a22e785a7e9a1bee585a5e997a8e7bd91e7bb9ce8afbee7a88b223b7d),
(231, 0, 54, 0, 0, 0, '98.228.234.190', 1347927729, 0x4c4f475f464f52554d5f414444, 0x613a313a7b693a303b733a33303a22e79086e8a7a3e8aeb0e5bf86e7bcbae5a4b1e7bd91e7bb9ce8afbee7a88b223b7d),
(232, 0, 54, 0, 0, 0, '98.228.234.190', 1347927729, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31323a22e7bd91e7bb9ce8afbee7a88b223b693a313b733a33303a22e79086e8a7a3e8aeb0e5bf86e7bcbae5a4b1e7bd91e7bb9ce8afbee7a88b223b7d),
(233, 0, 54, 0, 0, 0, '98.228.234.190', 1347927984, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b7d),
(234, 0, 2, 0, 0, 0, '98.215.6.86', 1347928188, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b7d),
(235, 0, 2, 0, 0, 0, '98.215.6.86', 1347928188, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b7d),
(236, 0, 2, 0, 0, 0, '98.215.6.86', 1347928200, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31353a22e7bbbce59088e8aea8e8aebae58cba223b7d),
(237, 0, 2, 0, 0, 0, '98.215.6.86', 1347928200, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a31353a22e7bbbce59088e8aea8e8aebae58cba223b7d),
(238, 0, 2, 0, 0, 0, '98.215.6.86', 1347928210, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31323a22e7bd91e7bb9ce8afbee7a88b223b7d),
(239, 0, 2, 0, 0, 0, '98.215.6.86', 1347928210, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a31323a22e7bd91e7bb9ce8afbee7a88b223b7d),
(240, 0, 2, 0, 0, 0, '98.215.6.86', 1347928220, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31333a22e5b8aee58aa92fe694afe68c81223b7d),
(241, 0, 2, 0, 0, 0, '98.215.6.86', 1347928220, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a31333a22e5b8aee58aa92fe694afe68c81223b7d),
(242, 0, 2, 0, 0, 0, '98.215.6.86', 1347928230, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a393a22e7818ce6b0b4e58cba223b7d),
(243, 0, 2, 0, 0, 0, '98.215.6.86', 1347928230, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a393a22e7818ce6b0b4e58cba223b7d),
(244, 0, 2, 0, 0, 0, '98.215.6.86', 1347928263, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b7d),
(245, 0, 2, 0, 0, 0, '98.215.6.86', 1347928263, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a32373a22e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc89223b7d),
(246, 0, 2, 0, 0, 0, '98.215.6.86', 1347928292, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31353a22e7bbbce59088e8aea8e8aebae58cba223b7d),
(247, 0, 2, 0, 0, 0, '98.215.6.86', 1347928292, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31383a2247656e6572616c2044697363757373696f6e223b693a313b733a31353a22e7bbbce59088e8aea8e8aebae58cba223b7d),
(248, 0, 2, 0, 0, 0, '98.215.6.86', 1347928359, 0x4c4f475f464f52554d5f45444954, 0x613a313a7b693a303b733a31353a22e7bbbce59088e8aea8e8aebae58cba223b7d),
(249, 0, 2, 0, 0, 0, '98.215.6.86', 1347928359, 0x4c4f475f464f52554d5f434f504945445f5045524d495353494f4e53, 0x613a323a7b693a303b733a31343a22456d706f776572204f6e6c696e65223b693a313b733a31353a22e7bbbce59088e8aea8e8aebae58cba223b7d),
(250, 3, 1, 0, 0, 55, '69.179.146.189', 1350619605, 0x4c4f475f555345525f4143544956455f55534552, ''),
(251, 0, 2, 0, 0, 0, '98.215.6.86', 1350619932, 0x4c4f475f41444d494e5f415554485f53554343455353, ''),
(252, 0, 2, 0, 0, 0, '98.215.6.86', 1350620032, 0x4c4f475f55534552535f4144444544, 0x613a323a7b693a303b733a31373a22476c6f62616c206d6f64657261746f7273223b693a313b733a363a22456c6c656e7a223b7d),
(253, 0, 2, 0, 0, 0, '98.215.6.86', 1350620678, 0x4c4f475f41434c5f4144445f555345525f474c4f42414c5f555f, 0x613a313a7b693a303b733a363a22456c6c656e7a223b7d),
(254, 0, 2, 0, 0, 0, '98.215.6.86', 1350620733, 0x4c4f475f41434c5f4144445f555345525f4c4f43414c5f465f, 0x613a323a7b693a303b733a3635343a224d616b696e672053656e7365206f66204d656d6f7279204c6f737320284d534d4c29204f6e6c696e652c204341524520436f616368696e67204f6e6c696e652c20496e74726f20746f2043617265676976696e67204f6e6c696e652c204f544845522c2047656e6572616c2044697363757373696f6e2c204f6e6c696e6520436f7572736573202f2050726f6772616d732c20456d706f776572204f6e6c696e652c2048656c70202f20537570706f72742c204765726f6e746f6c6f6779204f6e6c696e652050726f6772616d2c20436f6e6365707473206f66204167696e672c2043756c747572616c2044696d656e73696f6e73206f66204167696e672c20456e7669726f6e6d656e74616c20436f6e74657874206f66204167696e672c204d656e74616c204865616c746820616e64204167696e672c20496e7465726469736369706c696e6172792053656d696e6172206f6e204167696e672c20496e74657276656e74696f6e732077697468204f6c646572204164756c74732c20e7bbbce59088e8aea8e8aebae58cba2c20e7bd91e7bb9ce8afbee7a88b2c20e5b8aee58aa92fe694afe68c812c20446575747363682c20e0a4b9e0a4bfe0a482e0a4a6e0a5802c20d8a7d984d8b9d8b1d8a8d98ad8a92c204672616ec3a76169732c20506f7274756775c3aa732c2045737061c3b16f6c2c20e4b8ade59bbdefbc88e5a4a7e99986e58f8ae58fb0e6b9beefbc892c20e7818ce6b0b4e58cba2c20e99b87e59198e785a7e9a1bee88085e7bd91e7bb9ce8afbee7a88b2c20e785a7e9a1bee68c87e5afbce7bd91e7bb9ce8afbee7a88b2c20e785a7e9a1bee585a5e997a8e7bd91e7bb9ce8afbee7a88b2c20e79086e8a7a3e8aeb0e5bf86e7bcbae5a4b1e7bd91e7bb9ce8afbee7a88b223b693a313b733a363a22456c6c656e7a223b7d),
(255, 3, 2, 0, 0, 2, '98.215.6.86', 1350620881, 0x4c4f475f555345525f5550444154455f4e414d45, 0x613a323a7b693a303b733a31353a22633134353139302d68323232373138223b693a313b733a31333a2241646d696e6973747261746f72223b7d),
(256, 0, 2, 0, 0, 0, '98.215.6.86', 1350620881, 0x4c4f475f555345525f555345525f555044415445, 0x613a313a7b693a303b733a31333a2241646d696e6973747261746f72223b7d),
(257, 1, 55, 21, 22, 0, '69.179.146.189', 1350621489, 0x4c4f475f504f53545f454449544544, 0x613a323a7b693a303b733a32363a224465626174652047656e6572616c20656e2065737061c3b16f6c223b693a313b733a31333a2241646d696e6973747261746f72223b7d),
(258, 1, 55, 21, 22, 0, '69.179.146.189', 1350621951, 0x4c4f475f504f53545f454449544544, 0x613a323a7b693a303b733a31343a224465626174652067656e6572616c223b693a313b733a31333a2241646d696e6973747261746f72223b7d);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_login_attempts`
--

CREATE TABLE IF NOT EXISTS `phpbb_login_attempts` (
  `attempt_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `attempt_browser` varchar(150) COLLATE utf8_bin NOT NULL DEFAULT '',
  `attempt_forwarded_for` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `attempt_time` int(11) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0',
  `username_clean` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '0',
  KEY `att_ip` (`attempt_ip`,`attempt_time`),
  KEY `att_for` (`attempt_forwarded_for`,`attempt_time`),
  KEY `att_time` (`attempt_time`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_login_attempts`
--

INSERT INTO `phpbb_login_attempts` (`attempt_ip`, `attempt_browser`, `attempt_forwarded_for`, `attempt_time`, `user_id`, `username`, `username_clean`) VALUES
('98.215.6.86', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/536.26.14 (KHTML, like Gecko) Version/6.0.1 Safari/536.26.14', '', 1351832910, 0, 'Admin', 'admin'),
('98.215.6.86', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/536.26.14 (KHTML, like Gecko) Version/6.0.1 Safari/536.26.14', '', 1351832913, 0, 'admin', 'admin'),
('98.215.6.86', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/536.26.14 (KHTML, like Gecko) Version/6.0.1 Safari/536.26.14', '', 1351832939, 0, 'c145190-h222718', 'c145190-h222718'),
('98.215.6.86', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/536.26.14 (KHTML, like Gecko) Version/6.0.1 Safari/536.26.14', '', 1351832985, 0, 'c145190-h222718', 'c145190-h222718');

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_moderator_cache`
--

CREATE TABLE IF NOT EXISTS `phpbb_moderator_cache` (
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `display_on_index` tinyint(1) unsigned NOT NULL DEFAULT '1',
  KEY `disp_idx` (`display_on_index`),
  KEY `forum_id` (`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_modules`
--

CREATE TABLE IF NOT EXISTS `phpbb_modules` (
  `module_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `module_enabled` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `module_display` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `module_basename` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `module_class` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `parent_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `left_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `right_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `module_langname` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `module_mode` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `module_auth` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`module_id`),
  KEY `left_right_id` (`left_id`,`right_id`),
  KEY `module_enabled` (`module_enabled`),
  KEY `class_left_id` (`module_class`,`left_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=199 ;

--
-- Dumping data for table `phpbb_modules`
--

INSERT INTO `phpbb_modules` (`module_id`, `module_enabled`, `module_display`, `module_basename`, `module_class`, `parent_id`, `left_id`, `right_id`, `module_langname`, `module_mode`, `module_auth`) VALUES
(1, 1, 1, '', 'acp', 0, 1, 64, 'ACP_CAT_GENERAL', '', ''),
(2, 1, 1, '', 'acp', 1, 4, 17, 'ACP_QUICK_ACCESS', '', ''),
(3, 1, 1, '', 'acp', 1, 18, 41, 'ACP_BOARD_CONFIGURATION', '', ''),
(4, 1, 1, '', 'acp', 1, 42, 49, 'ACP_CLIENT_COMMUNICATION', '', ''),
(5, 1, 1, '', 'acp', 1, 50, 63, 'ACP_SERVER_CONFIGURATION', '', ''),
(6, 1, 1, '', 'acp', 0, 65, 84, 'ACP_CAT_FORUMS', '', ''),
(7, 1, 1, '', 'acp', 6, 66, 71, 'ACP_MANAGE_FORUMS', '', ''),
(8, 1, 1, '', 'acp', 6, 72, 83, 'ACP_FORUM_BASED_PERMISSIONS', '', ''),
(9, 1, 1, '', 'acp', 0, 85, 110, 'ACP_CAT_POSTING', '', ''),
(10, 1, 1, '', 'acp', 9, 86, 99, 'ACP_MESSAGES', '', ''),
(11, 1, 1, '', 'acp', 9, 100, 109, 'ACP_ATTACHMENTS', '', ''),
(12, 1, 1, '', 'acp', 0, 111, 166, 'ACP_CAT_USERGROUP', '', ''),
(13, 1, 1, '', 'acp', 12, 112, 145, 'ACP_CAT_USERS', '', ''),
(14, 1, 1, '', 'acp', 12, 146, 153, 'ACP_GROUPS', '', ''),
(15, 1, 1, '', 'acp', 12, 154, 165, 'ACP_USER_SECURITY', '', ''),
(16, 1, 1, '', 'acp', 0, 167, 216, 'ACP_CAT_PERMISSIONS', '', ''),
(17, 1, 1, '', 'acp', 16, 170, 179, 'ACP_GLOBAL_PERMISSIONS', '', ''),
(18, 1, 1, '', 'acp', 16, 180, 191, 'ACP_FORUM_BASED_PERMISSIONS', '', ''),
(19, 1, 1, '', 'acp', 16, 192, 201, 'ACP_PERMISSION_ROLES', '', ''),
(20, 1, 1, '', 'acp', 16, 202, 215, 'ACP_PERMISSION_MASKS', '', ''),
(21, 1, 1, '', 'acp', 0, 217, 230, 'ACP_CAT_STYLES', '', ''),
(22, 1, 1, '', 'acp', 21, 218, 221, 'ACP_STYLE_MANAGEMENT', '', ''),
(23, 1, 1, '', 'acp', 21, 222, 229, 'ACP_STYLE_COMPONENTS', '', ''),
(24, 1, 1, '', 'acp', 0, 231, 250, 'ACP_CAT_MAINTENANCE', '', ''),
(25, 1, 1, '', 'acp', 24, 232, 241, 'ACP_FORUM_LOGS', '', ''),
(26, 1, 1, '', 'acp', 24, 242, 249, 'ACP_CAT_DATABASE', '', ''),
(27, 1, 1, '', 'acp', 0, 251, 276, 'ACP_CAT_SYSTEM', '', ''),
(28, 1, 1, '', 'acp', 27, 252, 255, 'ACP_AUTOMATION', '', ''),
(29, 1, 1, '', 'acp', 27, 256, 267, 'ACP_GENERAL_TASKS', '', ''),
(30, 1, 1, '', 'acp', 27, 268, 275, 'ACP_MODULE_MANAGEMENT', '', ''),
(31, 1, 1, '', 'acp', 0, 277, 278, 'ACP_CAT_DOT_MODS', '', ''),
(32, 1, 1, 'attachments', 'acp', 3, 19, 20, 'ACP_ATTACHMENT_SETTINGS', 'attach', 'acl_a_attach'),
(33, 1, 1, 'attachments', 'acp', 11, 101, 102, 'ACP_ATTACHMENT_SETTINGS', 'attach', 'acl_a_attach'),
(34, 1, 1, 'attachments', 'acp', 11, 103, 104, 'ACP_MANAGE_EXTENSIONS', 'extensions', 'acl_a_attach'),
(35, 1, 1, 'attachments', 'acp', 11, 105, 106, 'ACP_EXTENSION_GROUPS', 'ext_groups', 'acl_a_attach'),
(36, 1, 1, 'attachments', 'acp', 11, 107, 108, 'ACP_ORPHAN_ATTACHMENTS', 'orphan', 'acl_a_attach'),
(37, 1, 1, 'ban', 'acp', 15, 155, 156, 'ACP_BAN_EMAILS', 'email', 'acl_a_ban'),
(38, 1, 1, 'ban', 'acp', 15, 157, 158, 'ACP_BAN_IPS', 'ip', 'acl_a_ban'),
(39, 1, 1, 'ban', 'acp', 15, 159, 160, 'ACP_BAN_USERNAMES', 'user', 'acl_a_ban'),
(40, 1, 1, 'bbcodes', 'acp', 10, 87, 88, 'ACP_BBCODES', 'bbcodes', 'acl_a_bbcode'),
(41, 1, 1, 'board', 'acp', 3, 21, 22, 'ACP_BOARD_SETTINGS', 'settings', 'acl_a_board'),
(42, 1, 1, 'board', 'acp', 3, 23, 24, 'ACP_BOARD_FEATURES', 'features', 'acl_a_board'),
(43, 1, 1, 'board', 'acp', 3, 25, 26, 'ACP_AVATAR_SETTINGS', 'avatar', 'acl_a_board'),
(44, 1, 1, 'board', 'acp', 3, 27, 28, 'ACP_MESSAGE_SETTINGS', 'message', 'acl_a_board'),
(45, 1, 1, 'board', 'acp', 10, 89, 90, 'ACP_MESSAGE_SETTINGS', 'message', 'acl_a_board'),
(46, 1, 1, 'board', 'acp', 3, 29, 30, 'ACP_POST_SETTINGS', 'post', 'acl_a_board'),
(47, 1, 1, 'board', 'acp', 10, 91, 92, 'ACP_POST_SETTINGS', 'post', 'acl_a_board'),
(48, 1, 1, 'board', 'acp', 3, 31, 32, 'ACP_SIGNATURE_SETTINGS', 'signature', 'acl_a_board'),
(49, 1, 1, 'board', 'acp', 3, 33, 34, 'ACP_FEED_SETTINGS', 'feed', 'acl_a_board'),
(50, 1, 1, 'board', 'acp', 3, 35, 36, 'ACP_REGISTER_SETTINGS', 'registration', 'acl_a_board'),
(51, 1, 1, 'board', 'acp', 4, 43, 44, 'ACP_AUTH_SETTINGS', 'auth', 'acl_a_server'),
(52, 1, 1, 'board', 'acp', 4, 45, 46, 'ACP_EMAIL_SETTINGS', 'email', 'acl_a_server'),
(53, 1, 1, 'board', 'acp', 5, 51, 52, 'ACP_COOKIE_SETTINGS', 'cookie', 'acl_a_server'),
(54, 1, 1, 'board', 'acp', 5, 53, 54, 'ACP_SERVER_SETTINGS', 'server', 'acl_a_server'),
(55, 1, 1, 'board', 'acp', 5, 55, 56, 'ACP_SECURITY_SETTINGS', 'security', 'acl_a_server'),
(56, 1, 1, 'board', 'acp', 5, 57, 58, 'ACP_LOAD_SETTINGS', 'load', 'acl_a_server'),
(57, 1, 1, 'bots', 'acp', 29, 257, 258, 'ACP_BOTS', 'bots', 'acl_a_bots'),
(58, 1, 1, 'captcha', 'acp', 3, 37, 38, 'ACP_VC_SETTINGS', 'visual', 'acl_a_board'),
(59, 1, 0, 'captcha', 'acp', 3, 39, 40, 'ACP_VC_CAPTCHA_DISPLAY', 'img', 'acl_a_board'),
(60, 1, 1, 'database', 'acp', 26, 243, 244, 'ACP_BACKUP', 'backup', 'acl_a_backup'),
(61, 1, 1, 'database', 'acp', 26, 245, 246, 'ACP_RESTORE', 'restore', 'acl_a_backup'),
(62, 1, 1, 'disallow', 'acp', 15, 161, 162, 'ACP_DISALLOW_USERNAMES', 'usernames', 'acl_a_names'),
(63, 1, 1, 'email', 'acp', 29, 259, 260, 'ACP_MASS_EMAIL', 'email', 'acl_a_email && cfg_email_enable'),
(64, 1, 1, 'forums', 'acp', 7, 67, 68, 'ACP_MANAGE_FORUMS', 'manage', 'acl_a_forum'),
(65, 1, 1, 'groups', 'acp', 14, 147, 148, 'ACP_GROUPS_MANAGE', 'manage', 'acl_a_group'),
(66, 1, 1, 'icons', 'acp', 10, 93, 94, 'ACP_ICONS', 'icons', 'acl_a_icons'),
(67, 1, 1, 'icons', 'acp', 10, 95, 96, 'ACP_SMILIES', 'smilies', 'acl_a_icons'),
(68, 1, 1, 'inactive', 'acp', 13, 115, 116, 'ACP_INACTIVE_USERS', 'list', 'acl_a_user'),
(69, 1, 1, 'jabber', 'acp', 4, 47, 48, 'ACP_JABBER_SETTINGS', 'settings', 'acl_a_jabber'),
(70, 1, 1, 'language', 'acp', 29, 261, 262, 'ACP_LANGUAGE_PACKS', 'lang_packs', 'acl_a_language'),
(71, 1, 1, 'logs', 'acp', 25, 233, 234, 'ACP_ADMIN_LOGS', 'admin', 'acl_a_viewlogs'),
(72, 1, 1, 'logs', 'acp', 25, 235, 236, 'ACP_MOD_LOGS', 'mod', 'acl_a_viewlogs'),
(73, 1, 1, 'logs', 'acp', 25, 237, 238, 'ACP_USERS_LOGS', 'users', 'acl_a_viewlogs'),
(74, 1, 1, 'logs', 'acp', 25, 239, 240, 'ACP_CRITICAL_LOGS', 'critical', 'acl_a_viewlogs'),
(75, 1, 1, 'main', 'acp', 1, 2, 3, 'ACP_INDEX', 'main', ''),
(76, 1, 1, 'modules', 'acp', 30, 269, 270, 'ACP', 'acp', 'acl_a_modules'),
(77, 1, 1, 'modules', 'acp', 30, 271, 272, 'UCP', 'ucp', 'acl_a_modules'),
(78, 1, 1, 'modules', 'acp', 30, 273, 274, 'MCP', 'mcp', 'acl_a_modules'),
(79, 1, 1, 'permission_roles', 'acp', 19, 193, 194, 'ACP_ADMIN_ROLES', 'admin_roles', 'acl_a_roles && acl_a_aauth'),
(80, 1, 1, 'permission_roles', 'acp', 19, 195, 196, 'ACP_USER_ROLES', 'user_roles', 'acl_a_roles && acl_a_uauth'),
(81, 1, 1, 'permission_roles', 'acp', 19, 197, 198, 'ACP_MOD_ROLES', 'mod_roles', 'acl_a_roles && acl_a_mauth'),
(82, 1, 1, 'permission_roles', 'acp', 19, 199, 200, 'ACP_FORUM_ROLES', 'forum_roles', 'acl_a_roles && acl_a_fauth'),
(83, 1, 1, 'permissions', 'acp', 16, 168, 169, 'ACP_PERMISSIONS', 'intro', 'acl_a_authusers || acl_a_authgroups || acl_a_viewauth'),
(84, 1, 0, 'permissions', 'acp', 20, 203, 204, 'ACP_PERMISSION_TRACE', 'trace', 'acl_a_viewauth'),
(85, 1, 1, 'permissions', 'acp', 18, 181, 182, 'ACP_FORUM_PERMISSIONS', 'setting_forum_local', 'acl_a_fauth && (acl_a_authusers || acl_a_authgroups)'),
(86, 1, 1, 'permissions', 'acp', 18, 183, 184, 'ACP_FORUM_PERMISSIONS_COPY', 'setting_forum_copy', 'acl_a_fauth && acl_a_authusers && acl_a_authgroups && acl_a_mauth'),
(87, 1, 1, 'permissions', 'acp', 18, 185, 186, 'ACP_FORUM_MODERATORS', 'setting_mod_local', 'acl_a_mauth && (acl_a_authusers || acl_a_authgroups)'),
(88, 1, 1, 'permissions', 'acp', 17, 171, 172, 'ACP_USERS_PERMISSIONS', 'setting_user_global', 'acl_a_authusers && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),
(89, 1, 1, 'permissions', 'acp', 13, 117, 118, 'ACP_USERS_PERMISSIONS', 'setting_user_global', 'acl_a_authusers && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),
(90, 1, 1, 'permissions', 'acp', 18, 187, 188, 'ACP_USERS_FORUM_PERMISSIONS', 'setting_user_local', 'acl_a_authusers && (acl_a_mauth || acl_a_fauth)'),
(91, 1, 1, 'permissions', 'acp', 13, 119, 120, 'ACP_USERS_FORUM_PERMISSIONS', 'setting_user_local', 'acl_a_authusers && (acl_a_mauth || acl_a_fauth)'),
(92, 1, 1, 'permissions', 'acp', 17, 173, 174, 'ACP_GROUPS_PERMISSIONS', 'setting_group_global', 'acl_a_authgroups && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),
(93, 1, 1, 'permissions', 'acp', 14, 149, 150, 'ACP_GROUPS_PERMISSIONS', 'setting_group_global', 'acl_a_authgroups && (acl_a_aauth || acl_a_mauth || acl_a_uauth)'),
(94, 1, 1, 'permissions', 'acp', 18, 189, 190, 'ACP_GROUPS_FORUM_PERMISSIONS', 'setting_group_local', 'acl_a_authgroups && (acl_a_mauth || acl_a_fauth)'),
(95, 1, 1, 'permissions', 'acp', 14, 151, 152, 'ACP_GROUPS_FORUM_PERMISSIONS', 'setting_group_local', 'acl_a_authgroups && (acl_a_mauth || acl_a_fauth)'),
(96, 1, 1, 'permissions', 'acp', 17, 175, 176, 'ACP_ADMINISTRATORS', 'setting_admin_global', 'acl_a_aauth && (acl_a_authusers || acl_a_authgroups)'),
(97, 1, 1, 'permissions', 'acp', 17, 177, 178, 'ACP_GLOBAL_MODERATORS', 'setting_mod_global', 'acl_a_mauth && (acl_a_authusers || acl_a_authgroups)'),
(98, 1, 1, 'permissions', 'acp', 20, 205, 206, 'ACP_VIEW_ADMIN_PERMISSIONS', 'view_admin_global', 'acl_a_viewauth'),
(99, 1, 1, 'permissions', 'acp', 20, 207, 208, 'ACP_VIEW_USER_PERMISSIONS', 'view_user_global', 'acl_a_viewauth'),
(100, 1, 1, 'permissions', 'acp', 20, 209, 210, 'ACP_VIEW_GLOBAL_MOD_PERMISSIONS', 'view_mod_global', 'acl_a_viewauth'),
(101, 1, 1, 'permissions', 'acp', 20, 211, 212, 'ACP_VIEW_FORUM_MOD_PERMISSIONS', 'view_mod_local', 'acl_a_viewauth'),
(102, 1, 1, 'permissions', 'acp', 20, 213, 214, 'ACP_VIEW_FORUM_PERMISSIONS', 'view_forum_local', 'acl_a_viewauth'),
(103, 1, 1, 'php_info', 'acp', 29, 263, 264, 'ACP_PHP_INFO', 'info', 'acl_a_phpinfo'),
(104, 1, 1, 'profile', 'acp', 13, 121, 122, 'ACP_CUSTOM_PROFILE_FIELDS', 'profile', 'acl_a_profile'),
(105, 1, 1, 'prune', 'acp', 7, 69, 70, 'ACP_PRUNE_FORUMS', 'forums', 'acl_a_prune'),
(106, 1, 1, 'prune', 'acp', 15, 163, 164, 'ACP_PRUNE_USERS', 'users', 'acl_a_userdel'),
(107, 1, 1, 'ranks', 'acp', 13, 123, 124, 'ACP_MANAGE_RANKS', 'ranks', 'acl_a_ranks'),
(108, 1, 1, 'reasons', 'acp', 29, 265, 266, 'ACP_MANAGE_REASONS', 'main', 'acl_a_reasons'),
(109, 1, 1, 'search', 'acp', 5, 59, 60, 'ACP_SEARCH_SETTINGS', 'settings', 'acl_a_search'),
(110, 1, 1, 'search', 'acp', 26, 247, 248, 'ACP_SEARCH_INDEX', 'index', 'acl_a_search'),
(111, 1, 1, 'send_statistics', 'acp', 5, 61, 62, 'ACP_SEND_STATISTICS', 'send_statistics', 'acl_a_server'),
(112, 1, 1, 'styles', 'acp', 22, 219, 220, 'ACP_STYLES', 'style', 'acl_a_styles'),
(113, 1, 1, 'styles', 'acp', 23, 223, 224, 'ACP_TEMPLATES', 'template', 'acl_a_styles'),
(114, 1, 1, 'styles', 'acp', 23, 225, 226, 'ACP_THEMES', 'theme', 'acl_a_styles'),
(115, 1, 1, 'styles', 'acp', 23, 227, 228, 'ACP_IMAGESETS', 'imageset', 'acl_a_styles'),
(116, 1, 1, 'update', 'acp', 28, 253, 254, 'ACP_VERSION_CHECK', 'version_check', 'acl_a_board'),
(117, 1, 1, 'users', 'acp', 13, 113, 114, 'ACP_MANAGE_USERS', 'overview', 'acl_a_user'),
(118, 1, 0, 'users', 'acp', 13, 125, 126, 'ACP_USER_FEEDBACK', 'feedback', 'acl_a_user'),
(119, 1, 0, 'users', 'acp', 13, 127, 128, 'ACP_USER_WARNINGS', 'warnings', 'acl_a_user'),
(120, 1, 0, 'users', 'acp', 13, 129, 130, 'ACP_USER_PROFILE', 'profile', 'acl_a_user'),
(121, 1, 0, 'users', 'acp', 13, 131, 132, 'ACP_USER_PREFS', 'prefs', 'acl_a_user'),
(122, 1, 0, 'users', 'acp', 13, 133, 134, 'ACP_USER_AVATAR', 'avatar', 'acl_a_user'),
(123, 1, 0, 'users', 'acp', 13, 135, 136, 'ACP_USER_RANK', 'rank', 'acl_a_user'),
(124, 1, 0, 'users', 'acp', 13, 137, 138, 'ACP_USER_SIG', 'sig', 'acl_a_user'),
(125, 1, 0, 'users', 'acp', 13, 139, 140, 'ACP_USER_GROUPS', 'groups', 'acl_a_user && acl_a_group'),
(126, 1, 0, 'users', 'acp', 13, 141, 142, 'ACP_USER_PERM', 'perm', 'acl_a_user && acl_a_viewauth'),
(127, 1, 0, 'users', 'acp', 13, 143, 144, 'ACP_USER_ATTACH', 'attach', 'acl_a_user'),
(128, 1, 1, 'words', 'acp', 10, 97, 98, 'ACP_WORDS', 'words', 'acl_a_words'),
(129, 1, 1, 'users', 'acp', 2, 5, 6, 'ACP_MANAGE_USERS', 'overview', 'acl_a_user'),
(130, 1, 1, 'groups', 'acp', 2, 7, 8, 'ACP_GROUPS_MANAGE', 'manage', 'acl_a_group'),
(131, 1, 1, 'forums', 'acp', 2, 9, 10, 'ACP_MANAGE_FORUMS', 'manage', 'acl_a_forum'),
(132, 1, 1, 'logs', 'acp', 2, 11, 12, 'ACP_MOD_LOGS', 'mod', 'acl_a_viewlogs'),
(133, 1, 1, 'bots', 'acp', 2, 13, 14, 'ACP_BOTS', 'bots', 'acl_a_bots'),
(134, 1, 1, 'php_info', 'acp', 2, 15, 16, 'ACP_PHP_INFO', 'info', 'acl_a_phpinfo'),
(135, 1, 1, 'permissions', 'acp', 8, 73, 74, 'ACP_FORUM_PERMISSIONS', 'setting_forum_local', 'acl_a_fauth && (acl_a_authusers || acl_a_authgroups)'),
(136, 1, 1, 'permissions', 'acp', 8, 75, 76, 'ACP_FORUM_PERMISSIONS_COPY', 'setting_forum_copy', 'acl_a_fauth && acl_a_authusers && acl_a_authgroups && acl_a_mauth'),
(137, 1, 1, 'permissions', 'acp', 8, 77, 78, 'ACP_FORUM_MODERATORS', 'setting_mod_local', 'acl_a_mauth && (acl_a_authusers || acl_a_authgroups)'),
(138, 1, 1, 'permissions', 'acp', 8, 79, 80, 'ACP_USERS_FORUM_PERMISSIONS', 'setting_user_local', 'acl_a_authusers && (acl_a_mauth || acl_a_fauth)'),
(139, 1, 1, 'permissions', 'acp', 8, 81, 82, 'ACP_GROUPS_FORUM_PERMISSIONS', 'setting_group_local', 'acl_a_authgroups && (acl_a_mauth || acl_a_fauth)'),
(140, 1, 1, '', 'mcp', 0, 1, 10, 'MCP_MAIN', '', ''),
(141, 1, 1, '', 'mcp', 0, 11, 18, 'MCP_QUEUE', '', ''),
(142, 1, 1, '', 'mcp', 0, 19, 32, 'MCP_REPORTS', '', ''),
(143, 1, 1, '', 'mcp', 0, 33, 38, 'MCP_NOTES', '', ''),
(144, 1, 1, '', 'mcp', 0, 39, 48, 'MCP_WARN', '', ''),
(145, 1, 1, '', 'mcp', 0, 49, 56, 'MCP_LOGS', '', ''),
(146, 1, 1, '', 'mcp', 0, 57, 64, 'MCP_BAN', '', ''),
(147, 1, 1, 'ban', 'mcp', 146, 58, 59, 'MCP_BAN_USERNAMES', 'user', 'acl_m_ban'),
(148, 1, 1, 'ban', 'mcp', 146, 60, 61, 'MCP_BAN_IPS', 'ip', 'acl_m_ban'),
(149, 1, 1, 'ban', 'mcp', 146, 62, 63, 'MCP_BAN_EMAILS', 'email', 'acl_m_ban'),
(150, 1, 1, 'logs', 'mcp', 145, 50, 51, 'MCP_LOGS_FRONT', 'front', 'acl_m_ || aclf_m_'),
(151, 1, 1, 'logs', 'mcp', 145, 52, 53, 'MCP_LOGS_FORUM_VIEW', 'forum_logs', 'acl_m_,$id'),
(152, 1, 1, 'logs', 'mcp', 145, 54, 55, 'MCP_LOGS_TOPIC_VIEW', 'topic_logs', 'acl_m_,$id'),
(153, 1, 1, 'main', 'mcp', 140, 2, 3, 'MCP_MAIN_FRONT', 'front', ''),
(154, 1, 1, 'main', 'mcp', 140, 4, 5, 'MCP_MAIN_FORUM_VIEW', 'forum_view', 'acl_m_,$id'),
(155, 1, 1, 'main', 'mcp', 140, 6, 7, 'MCP_MAIN_TOPIC_VIEW', 'topic_view', 'acl_m_,$id'),
(156, 1, 1, 'main', 'mcp', 140, 8, 9, 'MCP_MAIN_POST_DETAILS', 'post_details', 'acl_m_,$id || (!$id && aclf_m_)'),
(157, 1, 1, 'notes', 'mcp', 143, 34, 35, 'MCP_NOTES_FRONT', 'front', ''),
(158, 1, 1, 'notes', 'mcp', 143, 36, 37, 'MCP_NOTES_USER', 'user_notes', ''),
(159, 1, 1, 'pm_reports', 'mcp', 142, 20, 21, 'MCP_PM_REPORTS_OPEN', 'pm_reports', 'aclf_m_report'),
(160, 1, 1, 'pm_reports', 'mcp', 142, 22, 23, 'MCP_PM_REPORTS_CLOSED', 'pm_reports_closed', 'aclf_m_report'),
(161, 1, 1, 'pm_reports', 'mcp', 142, 24, 25, 'MCP_PM_REPORT_DETAILS', 'pm_report_details', 'aclf_m_report'),
(162, 1, 1, 'queue', 'mcp', 141, 12, 13, 'MCP_QUEUE_UNAPPROVED_TOPICS', 'unapproved_topics', 'aclf_m_approve'),
(163, 1, 1, 'queue', 'mcp', 141, 14, 15, 'MCP_QUEUE_UNAPPROVED_POSTS', 'unapproved_posts', 'aclf_m_approve'),
(164, 1, 1, 'queue', 'mcp', 141, 16, 17, 'MCP_QUEUE_APPROVE_DETAILS', 'approve_details', 'acl_m_approve,$id || (!$id && aclf_m_approve)'),
(165, 1, 1, 'reports', 'mcp', 142, 26, 27, 'MCP_REPORTS_OPEN', 'reports', 'aclf_m_report'),
(166, 1, 1, 'reports', 'mcp', 142, 28, 29, 'MCP_REPORTS_CLOSED', 'reports_closed', 'aclf_m_report'),
(167, 1, 1, 'reports', 'mcp', 142, 30, 31, 'MCP_REPORT_DETAILS', 'report_details', 'acl_m_report,$id || (!$id && aclf_m_report)'),
(168, 1, 1, 'warn', 'mcp', 144, 40, 41, 'MCP_WARN_FRONT', 'front', 'aclf_m_warn'),
(169, 1, 1, 'warn', 'mcp', 144, 42, 43, 'MCP_WARN_LIST', 'list', 'aclf_m_warn'),
(170, 1, 1, 'warn', 'mcp', 144, 44, 45, 'MCP_WARN_USER', 'warn_user', 'aclf_m_warn'),
(171, 1, 1, 'warn', 'mcp', 144, 46, 47, 'MCP_WARN_POST', 'warn_post', 'acl_m_warn && acl_f_read,$id'),
(172, 1, 1, '', 'ucp', 0, 1, 12, 'UCP_MAIN', '', ''),
(173, 1, 1, '', 'ucp', 0, 13, 22, 'UCP_PROFILE', '', ''),
(174, 1, 1, '', 'ucp', 0, 23, 30, 'UCP_PREFS', '', ''),
(175, 1, 1, '', 'ucp', 0, 31, 42, 'UCP_PM', '', ''),
(176, 1, 1, '', 'ucp', 0, 43, 48, 'UCP_USERGROUPS', '', ''),
(177, 1, 1, '', 'ucp', 0, 49, 54, 'UCP_ZEBRA', '', ''),
(178, 1, 1, 'attachments', 'ucp', 172, 10, 11, 'UCP_MAIN_ATTACHMENTS', 'attachments', 'acl_u_attach'),
(179, 1, 1, 'groups', 'ucp', 176, 44, 45, 'UCP_USERGROUPS_MEMBER', 'membership', ''),
(180, 1, 1, 'groups', 'ucp', 176, 46, 47, 'UCP_USERGROUPS_MANAGE', 'manage', ''),
(181, 1, 1, 'main', 'ucp', 172, 2, 3, 'UCP_MAIN_FRONT', 'front', ''),
(182, 1, 1, 'main', 'ucp', 172, 4, 5, 'UCP_MAIN_SUBSCRIBED', 'subscribed', ''),
(183, 1, 1, 'main', 'ucp', 172, 6, 7, 'UCP_MAIN_BOOKMARKS', 'bookmarks', 'cfg_allow_bookmarks'),
(184, 1, 1, 'main', 'ucp', 172, 8, 9, 'UCP_MAIN_DRAFTS', 'drafts', ''),
(185, 1, 0, 'pm', 'ucp', 175, 32, 33, 'UCP_PM_VIEW', 'view', 'cfg_allow_privmsg'),
(186, 1, 1, 'pm', 'ucp', 175, 34, 35, 'UCP_PM_COMPOSE', 'compose', 'cfg_allow_privmsg'),
(187, 1, 1, 'pm', 'ucp', 175, 36, 37, 'UCP_PM_DRAFTS', 'drafts', 'cfg_allow_privmsg'),
(188, 1, 1, 'pm', 'ucp', 175, 38, 39, 'UCP_PM_OPTIONS', 'options', 'cfg_allow_privmsg'),
(189, 1, 0, 'pm', 'ucp', 175, 40, 41, 'UCP_PM_POPUP_TITLE', 'popup', 'cfg_allow_privmsg'),
(190, 1, 1, 'prefs', 'ucp', 174, 24, 25, 'UCP_PREFS_PERSONAL', 'personal', ''),
(191, 1, 1, 'prefs', 'ucp', 174, 26, 27, 'UCP_PREFS_POST', 'post', ''),
(192, 1, 1, 'prefs', 'ucp', 174, 28, 29, 'UCP_PREFS_VIEW', 'view', ''),
(193, 1, 1, 'profile', 'ucp', 173, 14, 15, 'UCP_PROFILE_PROFILE_INFO', 'profile_info', ''),
(194, 1, 1, 'profile', 'ucp', 173, 16, 17, 'UCP_PROFILE_SIGNATURE', 'signature', ''),
(195, 1, 1, 'profile', 'ucp', 173, 18, 19, 'UCP_PROFILE_AVATAR', 'avatar', 'cfg_allow_avatar && (cfg_allow_avatar_local || cfg_allow_avatar_remote || cfg_allow_avatar_upload || cfg_allow_avatar_remote_upload)'),
(196, 1, 1, 'profile', 'ucp', 173, 20, 21, 'UCP_PROFILE_REG_DETAILS', 'reg_details', ''),
(197, 1, 1, 'zebra', 'ucp', 177, 50, 51, 'UCP_ZEBRA_FRIENDS', 'friends', ''),
(198, 1, 1, 'zebra', 'ucp', 177, 52, 53, 'UCP_ZEBRA_FOES', 'foes', '');

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_poll_options`
--

CREATE TABLE IF NOT EXISTS `phpbb_poll_options` (
  `poll_option_id` tinyint(4) NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `poll_option_text` text COLLATE utf8_bin NOT NULL,
  `poll_option_total` mediumint(8) unsigned NOT NULL DEFAULT '0',
  KEY `poll_opt_id` (`poll_option_id`),
  KEY `topic_id` (`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_poll_votes`
--

CREATE TABLE IF NOT EXISTS `phpbb_poll_votes` (
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `poll_option_id` tinyint(4) NOT NULL DEFAULT '0',
  `vote_user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `vote_user_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  KEY `topic_id` (`topic_id`),
  KEY `vote_user_id` (`vote_user_id`),
  KEY `vote_user_ip` (`vote_user_ip`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_posts`
--

CREATE TABLE IF NOT EXISTS `phpbb_posts` (
  `post_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `poster_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `icon_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `poster_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `post_time` int(11) unsigned NOT NULL DEFAULT '0',
  `post_approved` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `post_reported` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `enable_bbcode` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_smilies` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_magic_url` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_sig` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `post_username` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `post_subject` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `post_text` mediumtext COLLATE utf8_bin NOT NULL,
  `post_checksum` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `post_attachment` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bbcode_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `bbcode_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `post_postcount` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `post_edit_time` int(11) unsigned NOT NULL DEFAULT '0',
  `post_edit_reason` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `post_edit_user` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `post_edit_count` smallint(4) unsigned NOT NULL DEFAULT '0',
  `post_edit_locked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`post_id`),
  KEY `forum_id` (`forum_id`),
  KEY `topic_id` (`topic_id`),
  KEY `poster_ip` (`poster_ip`),
  KEY `poster_id` (`poster_id`),
  KEY `post_approved` (`post_approved`),
  KEY `post_username` (`post_username`),
  KEY `tid_post_time` (`topic_id`,`post_time`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=37 ;

--
-- Dumping data for table `phpbb_posts`
--

INSERT INTO `phpbb_posts` (`post_id`, `topic_id`, `forum_id`, `poster_id`, `icon_id`, `poster_ip`, `post_time`, `post_approved`, `post_reported`, `enable_bbcode`, `enable_smilies`, `enable_magic_url`, `enable_sig`, `post_username`, `post_subject`, `post_text`, `post_checksum`, `post_attachment`, `bbcode_bitfield`, `bbcode_uid`, `post_postcount`, `post_edit_time`, `post_edit_reason`, `post_edit_user`, `post_edit_count`, `post_edit_locked`) VALUES
(2, 2, 7, 2, 0, '98.215.6.86', 1347216671, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for general discussion.', 0x506c6561736520757365207468697320666f72756d20666f722067656e6572616c2064697363757373696f6e2e, 'b940cc6ea30bdce2ea3e5d4c59d360b5', 0, '', '2ybz2b3q', 1, 0, '', 0, 0, 0),
(3, 3, 6, 2, 0, '98.215.6.86', 1347216772, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for course discussion', 0x506c6561736520757365207468697320666f72756d20666f7220636f757273652064697363757373696f6e, '86c73d899a56edf516fe490824af826e', 0, '', 'nl7kr451', 1, 0, '', 0, 0, 0),
(4, 4, 8, 2, 0, '98.215.6.86', 1347216789, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for course discussion', 0x506c6561736520757365207468697320666f72756d20666f7220636f757273652064697363757373696f6e, '86c73d899a56edf516fe490824af826e', 0, '', '2act8jtd', 1, 0, '', 0, 0, 0),
(5, 5, 9, 2, 0, '98.215.6.86', 1347216809, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for course discussion', 0x506c6561736520757365207468697320666f72756d20666f7220636f757273652064697363757373696f6e, '86c73d899a56edf516fe490824af826e', 0, '', '3lk64mxf', 1, 0, '', 0, 0, 0),
(6, 6, 10, 2, 0, '98.215.6.86', 1347216826, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for course discussion', 0x506c6561736520757365207468697320666f72756d20666f7220636f757273652064697363757373696f6e, '86c73d899a56edf516fe490824af826e', 0, '', '1h4az5b2', 1, 0, '', 0, 0, 0),
(7, 7, 11, 2, 0, '98.215.6.86', 1347216848, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for support.', 0x506c6561736520757365207468697320666f72756d20666f7220737570706f72742e, '90eb51905b3e5d202f5b4f90341afa75', 0, '', 'nfwwgfe9', 1, 0, '', 0, 0, 0),
(8, 8, 12, 2, 0, '98.215.6.86', 1347216890, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for non-related purposes.', 0x506c6561736520757365207468697320666f72756d20666f72206e6f6e2d72656c6174656420707572706f7365732e, '91b3bf4180dcefcc556f60eae42b8e1c', 0, '', '2xiw04jg', 1, 0, '', 0, 0, 0),
(9, 9, 14, 2, 0, '98.215.6.86', 1347216928, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for course discussion', 0x506c6561736520757365207468697320666f72756d20666f7220636f757273652064697363757373696f6e, '86c73d899a56edf516fe490824af826e', 0, '', '3sx0duer', 1, 0, '', 0, 0, 0),
(10, 10, 15, 2, 0, '98.215.6.86', 1347216941, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for course discussion', 0x506c6561736520757365207468697320666f72756d20666f7220636f757273652064697363757373696f6e, '86c73d899a56edf516fe490824af826e', 0, '', '37wsy98u', 1, 0, '', 0, 0, 0),
(11, 11, 16, 2, 0, '98.215.6.86', 1347216954, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for course discussion', 0x506c6561736520757365207468697320666f72756d20666f7220636f757273652064697363757373696f6e, '86c73d899a56edf516fe490824af826e', 0, '', '1axt0z29', 1, 0, '', 0, 0, 0),
(12, 12, 17, 2, 0, '98.215.6.86', 1347216970, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for course discussion', 0x506c6561736520757365207468697320666f72756d20666f7220636f757273652064697363757373696f6e, '86c73d899a56edf516fe490824af826e', 0, '', '2mum1ouo', 1, 0, '', 0, 0, 0),
(13, 13, 18, 2, 0, '98.215.6.86', 1347216984, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for course discussion', 0x506c6561736520757365207468697320666f72756d20666f7220636f757273652064697363757373696f6e, '86c73d899a56edf516fe490824af826e', 0, '', 'mcu4nnk3', 1, 0, '', 0, 0, 0),
(14, 14, 19, 2, 0, '98.215.6.86', 1347216999, 1, 0, 1, 1, 1, 1, '', 'Please use this forum for course discussion', 0x506c6561736520757365207468697320666f72756d20666f7220636f757273652064697363757373696f6e, '86c73d899a56edf516fe490824af826e', 0, '', '3fkpvzj2', 1, 0, '', 0, 0, 0),
(15, 15, 27, 54, 0, '98.228.234.190', 1347928574, 1, 0, 1, 1, 1, 1, '', '本讨论区仅用于一般性问题讨论', 0xe69cace8aea8e8aebae58cbae4bb85e794a8e4ba8ee4b880e888ace680a7e997aee9a298e8aea8e8aeba, '895b15e566d7189d59de66561c41a266', 0, '', '3bbjnv08', 1, 0, '', 0, 0, 0),
(16, 16, 31, 54, 0, '98.228.234.190', 1347928648, 1, 0, 1, 1, 1, 1, '', '请在此讨论本课程相关问题', 0xe8afb7e59ca8e6ada4e8aea8e8aebae69cace8afbee7a88be79bb8e585b3e997aee9a298, '1bcdcdaec8394259dbb2b76f0f3bc569', 0, '', '1mzocaw5', 1, 0, '', 0, 0, 0),
(17, 17, 32, 54, 0, '98.228.234.190', 1347928663, 1, 0, 1, 1, 1, 1, '', '请在此讨论本课程相关问题', 0xe8afb7e59ca8e6ada4e8aea8e8aebae69cace8afbee7a88be79bb8e585b3e997aee9a298, '1bcdcdaec8394259dbb2b76f0f3bc569', 0, '', '3rxa0c74', 1, 0, '', 0, 0, 0),
(18, 18, 33, 54, 0, '98.228.234.190', 1347928688, 1, 0, 1, 1, 1, 1, '', '请在此讨论本课程相关问题', 0xe8afb7e59ca8e6ada4e8aea8e8aebae69cace8afbee7a88be79bb8e585b3e997aee9a298, '1bcdcdaec8394259dbb2b76f0f3bc569', 0, '', '255z5bsg', 1, 0, '', 0, 0, 0),
(19, 19, 34, 54, 0, '98.228.234.190', 1347928725, 1, 0, 1, 1, 1, 1, '', '请在此讨论本课程相关问题', 0xe8afb7e59ca8e6ada4e8aea8e8aebae69cace8afbee7a88be79bb8e585b3e997aee9a298, '1bcdcdaec8394259dbb2b76f0f3bc569', 0, '', '20v9x9dz', 1, 0, '', 0, 0, 0),
(20, 20, 29, 54, 0, '98.228.234.190', 1347928761, 1, 0, 1, 1, 1, 1, '', '请在此发布求助或技术支持话题', 0xe8afb7e59ca8e6ada4e58f91e5b883e6b182e58aa9e68896e68a80e69cafe694afe68c81e8af9de9a298, '40cdc130ae070a6015409dfa9ad6a6cc', 0, '', '3tzc0upf', 1, 0, '', 0, 0, 0),
(21, 21, 30, 54, 0, '98.228.234.190', 1347928845, 1, 0, 1, 1, 1, 1, '', '请在此发布任何无关课程的话题', 0xe8afb7e59ca8e6ada4e58f91e5b883e4bbbbe4bd95e697a0e585b3e8afbee7a88be79a84e8af9de9a298, '0469aadb8645fd40b15898343b4e1900', 0, '', 'a9yca5zo', 1, 0, '', 0, 0, 0),
(22, 22, 21, 2, 0, '98.215.6.86', 1350620471, 1, 0, 1, 1, 1, 1, '', 'Debate general', 0x557365206573746520c3a17265612070617261206465626174652067656e6572616c, '1dcdd74d34448399b5d879944337dcfe', 0, '', '1sojsco1', 1, 0, '', 0, 0, 0),
(23, 23, 21, 55, 0, '69.179.146.189', 1350622139, 1, 0, 1, 1, 1, 1, '', 'Cursos/Programas en línea', 0x506f72206661766f722c20757365206573746520666f726f2070617261206465626174652067656e6572616c, '8bdce7b9df3552be3b898673b10d0399', 0, '', 't9ywadxc', 1, 0, '', 0, 0, 0),
(24, 24, 21, 55, 0, '69.179.146.189', 1351223933, 1, 0, 1, 1, 1, 1, '', 'Empower en línea, todos mensajes', 0x506f72206661766f722c20757365206573746520666f726f20706172612064656261746520736f62726520656c20637572736f, 'c21c6b7968464572fb7ef61a1c02a927', 0, '', '3ula0gl5', 1, 0, '', 0, 0, 0),
(25, 25, 21, 55, 0, '69.179.146.189', 1351223970, 1, 0, 1, 1, 1, 1, '', 'Entrenamiento CARE en línea, todos mensajes', 0x506f72206661766f722c20757365206573746520666f726f20706172612064656261746520736f62726520656c20637572736f, 'c21c6b7968464572fb7ef61a1c02a927', 0, '', 'bhntpzl5', 1, 0, '', 0, 0, 0),
(26, 26, 21, 55, 0, '69.179.146.189', 1351224005, 1, 0, 1, 1, 1, 1, '', 'Introducción al Proveer Cuidado en línea, todos mensajes', 0x506f72206661766f722c20757365206573746520666f726f20706172612064656261746520736f62726520656c20637572736f, 'c21c6b7968464572fb7ef61a1c02a927', 0, '', '4hdwf3uz', 1, 0, '', 0, 0, 0),
(27, 27, 21, 55, 0, '69.179.146.189', 1351224047, 1, 0, 1, 1, 1, 1, '', 'Comprendiendo la Pérdida de Memoria (CPM) en línea, todos m', 0x506f72206661766f722c20757365206573746520666f726f20706172612064656261746520736f62726520656c20637572736f, 'c21c6b7968464572fb7ef61a1c02a927', 0, '', '28gqp9pv', 1, 0, '', 0, 0, 0),
(28, 28, 21, 55, 0, '69.179.146.189', 1351224592, 1, 0, 1, 1, 1, 1, '', 'Programa de Gerontología en línea', 0x546f646f73206d656e73616a6573, '33aed92f06d1800dcd619d56ab23de21', 0, '', 'bhpzcwm3', 1, 0, '', 0, 0, 0),
(29, 29, 21, 55, 0, '69.179.146.189', 1351224619, 1, 0, 1, 1, 1, 1, '', 'Conceptos sobre el envejecimiento', 0x506f72206661766f722c20757365206573746520666f726f20706172612064656261746520736f62726520656c20637572736f, 'c21c6b7968464572fb7ef61a1c02a927', 0, '', '1pqrj1i2', 1, 0, '', 0, 0, 0),
(30, 30, 21, 55, 0, '69.179.146.189', 1351224668, 1, 0, 1, 1, 1, 1, '', 'Dimensiones culturales sobre el envejecimiento', 0x506f72206661766f722c20757365206573746520666f726f20706172612064656261746520736f62726520656c20637572736f, 'c21c6b7968464572fb7ef61a1c02a927', 0, '', '3mn7t3xj', 1, 0, '', 0, 0, 0),
(31, 31, 21, 55, 0, '69.179.146.189', 1351224762, 1, 0, 1, 1, 1, 1, '', 'Contexto ambiental sobre el envejecimiento', 0x506f72206661766f722c20757365206573746520666f726f20706172612064656261746520736f62726520656c20637572736f, 'c21c6b7968464572fb7ef61a1c02a927', 0, '', 'm0s4tqpm', 1, 0, '', 0, 0, 0),
(32, 32, 21, 55, 0, '69.179.146.189', 1351224909, 1, 0, 1, 1, 1, 1, '', 'Salud mental y el envejecimiento', 0x506f72206661766f722c20757365206573746520666f726f20706172612064656261746520736f62726520656c20637572736f, 'c21c6b7968464572fb7ef61a1c02a927', 0, '', '2ft2wp6p', 1, 0, '', 0, 0, 0),
(33, 33, 21, 55, 0, '69.179.146.189', 1351224947, 1, 0, 1, 1, 1, 1, '', 'Seminario interdisciplinario sobre el envejecimiento', 0x506f72206661766f722c20757365206573746520666f726f20706172612064656261746520736f62726520656c20637572736f, 'c21c6b7968464572fb7ef61a1c02a927', 0, '', '32sjf6ej', 1, 0, '', 0, 0, 0),
(34, 34, 21, 55, 0, '69.179.146.189', 1351224973, 1, 0, 1, 1, 1, 1, '', 'Intervenciones con los adultos mayores', 0x506f72206661766f722c20757365206573746520666f726f20706172612064656261746520736f62726520656c20637572736f, 'c21c6b7968464572fb7ef61a1c02a927', 0, '', '4ngbrrag', 1, 0, '', 0, 0, 0),
(35, 35, 21, 55, 0, '69.179.146.189', 1351225076, 1, 0, 1, 1, 1, 1, '', 'Ayuda/Apoyo Técnico', 0x557365206573746520666f726f207061726120617975646120792f6f2074656d61732064652061706f796f2074c3a9636e69636f, 'eb54443be71d12f902f12fcb9c4e9685', 0, '', '2ayvwdm1', 1, 0, '', 0, 0, 0),
(36, 36, 21, 55, 0, '69.179.146.189', 1351225133, 1, 0, 1, 1, 1, 1, '', 'Foro para todos los mensajes no relacionados al curso', 0x506f72206661766f722c20757365206573746520666f746f20706172612070726f70c3b37369746f73206e6f2072656c6163696f6e61646f7320636f6e20656c20637572736f2e, '6c2ceb527b0f1b1b031f169906132e2b', 0, '', '5fqxmlb3', 1, 0, '', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_privmsgs`
--

CREATE TABLE IF NOT EXISTS `phpbb_privmsgs` (
  `msg_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `root_level` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `author_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `icon_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `author_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `message_time` int(11) unsigned NOT NULL DEFAULT '0',
  `enable_bbcode` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_smilies` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_magic_url` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `enable_sig` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `message_subject` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `message_text` mediumtext COLLATE utf8_bin NOT NULL,
  `message_edit_reason` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `message_edit_user` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `message_attachment` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `bbcode_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `bbcode_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `message_edit_time` int(11) unsigned NOT NULL DEFAULT '0',
  `message_edit_count` smallint(4) unsigned NOT NULL DEFAULT '0',
  `to_address` text COLLATE utf8_bin NOT NULL,
  `bcc_address` text COLLATE utf8_bin NOT NULL,
  `message_reported` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`msg_id`),
  KEY `author_ip` (`author_ip`),
  KEY `message_time` (`message_time`),
  KEY `author_id` (`author_id`),
  KEY `root_level` (`root_level`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_privmsgs_folder`
--

CREATE TABLE IF NOT EXISTS `phpbb_privmsgs_folder` (
  `folder_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `folder_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `pm_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`folder_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_privmsgs_rules`
--

CREATE TABLE IF NOT EXISTS `phpbb_privmsgs_rules` (
  `rule_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_check` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_connection` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_string` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `rule_user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_action` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rule_folder_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`rule_id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_privmsgs_to`
--

CREATE TABLE IF NOT EXISTS `phpbb_privmsgs_to` (
  `msg_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `author_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pm_deleted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pm_new` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `pm_unread` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `pm_replied` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pm_marked` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `pm_forwarded` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `folder_id` int(11) NOT NULL DEFAULT '0',
  KEY `msg_id` (`msg_id`),
  KEY `author_id` (`author_id`),
  KEY `usr_flder_id` (`user_id`,`folder_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_profile_fields`
--

CREATE TABLE IF NOT EXISTS `phpbb_profile_fields` (
  `field_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `field_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_type` tinyint(4) NOT NULL DEFAULT '0',
  `field_ident` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_length` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_minlen` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_maxlen` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_novalue` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_default_value` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_validation` varchar(20) COLLATE utf8_bin NOT NULL DEFAULT '',
  `field_required` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_show_novalue` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_show_on_reg` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_show_on_vt` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_show_profile` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_hide` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_no_view` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_active` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `field_order` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`field_id`),
  KEY `fld_type` (`field_type`),
  KEY `fld_ordr` (`field_order`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_profile_fields_data`
--

CREATE TABLE IF NOT EXISTS `phpbb_profile_fields_data` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_profile_fields_lang`
--

CREATE TABLE IF NOT EXISTS `phpbb_profile_fields_lang` (
  `field_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `lang_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `option_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `field_type` tinyint(4) NOT NULL DEFAULT '0',
  `lang_value` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`field_id`,`lang_id`,`option_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_profile_lang`
--

CREATE TABLE IF NOT EXISTS `phpbb_profile_lang` (
  `field_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `lang_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `lang_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `lang_explain` text COLLATE utf8_bin NOT NULL,
  `lang_default_value` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`field_id`,`lang_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_ranks`
--

CREATE TABLE IF NOT EXISTS `phpbb_ranks` (
  `rank_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `rank_title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `rank_min` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `rank_special` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `rank_image` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`rank_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phpbb_ranks`
--

INSERT INTO `phpbb_ranks` (`rank_id`, `rank_title`, `rank_min`, `rank_special`, `rank_image`) VALUES
(1, 'Site Admin', 0, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_reports`
--

CREATE TABLE IF NOT EXISTS `phpbb_reports` (
  `report_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `reason_id` smallint(4) unsigned NOT NULL DEFAULT '0',
  `post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `pm_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_notify` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `report_closed` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `report_time` int(11) unsigned NOT NULL DEFAULT '0',
  `report_text` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`report_id`),
  KEY `post_id` (`post_id`),
  KEY `pm_id` (`pm_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_reports_reasons`
--

CREATE TABLE IF NOT EXISTS `phpbb_reports_reasons` (
  `reason_id` smallint(4) unsigned NOT NULL AUTO_INCREMENT,
  `reason_title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `reason_description` mediumtext COLLATE utf8_bin NOT NULL,
  `reason_order` smallint(4) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`reason_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=5 ;

--
-- Dumping data for table `phpbb_reports_reasons`
--

INSERT INTO `phpbb_reports_reasons` (`reason_id`, `reason_title`, `reason_description`, `reason_order`) VALUES
(1, 'warez', 0x54686520706f737420636f6e7461696e73206c696e6b7320746f20696c6c6567616c206f72207069726174656420736f6674776172652e, 1),
(2, 'spam', 0x546865207265706f7274656420706f73742068617320746865206f6e6c7920707572706f736520746f2061647665727469736520666f7220612077656273697465206f7220616e6f746865722070726f647563742e, 2),
(3, 'off_topic', 0x546865207265706f7274656420706f7374206973206f666620746f7069632e, 3),
(4, 'other', 0x546865207265706f7274656420706f737420646f6573206e6f742066697420696e746f20616e79206f746865722063617465676f72792c20706c656173652075736520746865206675727468657220696e666f726d6174696f6e206669656c642e, 4);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_search_results`
--

CREATE TABLE IF NOT EXISTS `phpbb_search_results` (
  `search_key` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `search_time` int(11) unsigned NOT NULL DEFAULT '0',
  `search_keywords` mediumtext COLLATE utf8_bin NOT NULL,
  `search_authors` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`search_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_search_wordlist`
--

CREATE TABLE IF NOT EXISTS `phpbb_search_wordlist` (
  `word_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `word_text` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `word_common` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `word_count` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`word_id`),
  UNIQUE KEY `wrd_txt` (`word_text`),
  KEY `wrd_cnt` (`word_count`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=156 ;

--
-- Dumping data for table `phpbb_search_wordlist`
--

INSERT INTO `phpbb_search_wordlist` (`word_id`, `word_text`, `word_common`, `word_count`) VALUES
(1, 'this', 0, 26),
(2, 'example', 0, 1),
(3, 'post', 0, 1),
(4, 'your', 0, 0),
(5, 'phpbb3', 0, 0),
(6, 'installation', 0, 0),
(7, 'everything', 0, 0),
(8, 'seems', 0, 0),
(9, 'working', 0, 0),
(10, 'you', 0, 0),
(11, 'may', 0, 0),
(12, 'delete', 0, 0),
(13, 'like', 0, 0),
(14, 'and', 0, 0),
(15, 'continue', 0, 0),
(16, 'set', 0, 0),
(17, 'board', 0, 0),
(18, 'during', 0, 0),
(19, 'the', 0, 1),
(20, 'process', 0, 0),
(21, 'first', 0, 0),
(22, 'category', 0, 0),
(23, 'forum', 0, 26),
(24, 'are', 0, 0),
(25, 'assigned', 0, 0),
(26, 'appropriate', 0, 0),
(27, 'permissions', 0, 0),
(28, 'for', 0, 27),
(29, 'predefined', 0, 0),
(30, 'usergroups', 0, 0),
(31, 'administrators', 0, 0),
(32, 'bots', 0, 0),
(33, 'global', 0, 0),
(34, 'moderators', 0, 0),
(35, 'guests', 0, 0),
(36, 'registered', 0, 0),
(37, 'users', 0, 0),
(38, 'coppa', 0, 0),
(39, 'also', 0, 0),
(40, 'choose', 0, 0),
(41, 'not', 0, 0),
(42, 'forget', 0, 0),
(43, 'assign', 0, 0),
(44, 'all', 0, 0),
(45, 'these', 0, 0),
(46, 'new', 0, 0),
(47, 'categories', 0, 0),
(48, 'forums', 0, 0),
(49, 'create', 0, 0),
(50, 'recommended', 0, 0),
(51, 'rename', 0, 0),
(52, 'copy', 0, 0),
(53, 'from', 0, 0),
(54, 'while', 0, 0),
(55, 'creating', 0, 0),
(56, 'have', 0, 0),
(57, 'fun', 0, 0),
(58, 'welcome', 0, 1),
(73, '讨', 0, 10),
(72, '本', 0, 10),
(71, 'purposes', 0, 2),
(70, 'related', 0, 2),
(69, 'non', 0, 2),
(68, 'support', 0, 2),
(67, 'course', 0, 20),
(66, 'postings', 0, 0),
(65, 'use', 0, 40),
(64, 'please', 0, 26),
(59, 'general', 0, 6),
(60, 'discussion', 0, 23),
(61, 'form', 0, 1),
(62, 'empower', 0, 2),
(63, 'online', 0, 1),
(74, '论', 0, 10),
(75, '区', 0, 2),
(76, '仅', 0, 2),
(77, '用', 0, 2),
(78, '于', 0, 2),
(79, '一', 0, 2),
(80, '般', 0, 2),
(81, '性', 0, 2),
(82, '问', 0, 10),
(83, '题', 0, 14),
(84, '请', 0, 12),
(85, '在', 0, 12),
(86, '此', 0, 12),
(87, '课', 0, 10),
(88, '程', 0, 10),
(89, '相', 0, 8),
(90, '关', 0, 10),
(91, '发', 0, 4),
(92, '布', 0, 4),
(93, '求', 0, 2),
(94, '助', 0, 2),
(95, '或', 0, 2),
(96, '技', 0, 2),
(97, '术', 0, 2),
(98, '支', 0, 2),
(99, '持', 0, 2),
(100, '话', 0, 4),
(101, '任', 0, 2),
(102, '何', 0, 2),
(103, '无', 0, 2),
(104, '的', 0, 2),
(105, 'area', 0, 0),
(106, 'spanish', 0, 0),
(107, 'este', 0, 14),
(108, 'área', 0, 1),
(109, 'para', 0, 15),
(110, 'debate', 0, 13),
(111, 'español', 0, 0),
(112, 'cursos', 0, 1),
(113, 'línea', 0, 6),
(114, 'programas', 0, 1),
(115, 'por', 0, 12),
(116, 'favor', 0, 12),
(117, 'foro', 0, 13),
(118, 'sobre', 0, 14),
(119, 'curso', 0, 12),
(120, 'entrenamiento', 0, 1),
(121, 'care', 0, 1),
(122, 'introducción', 0, 1),
(123, 'proveer', 0, 1),
(124, 'cuidado', 0, 1),
(125, 'comprendiendo', 0, 1),
(126, 'pérdida', 0, 1),
(127, 'memoria', 0, 1),
(128, 'msml', 0, 0),
(129, 'todos', 0, 6),
(130, 'mensajes', 0, 5),
(131, 'cpm', 0, 1),
(132, 'programa', 0, 1),
(133, 'gerontología', 0, 1),
(134, 'conceptos', 0, 1),
(135, 'envejecimiento', 0, 5),
(136, 'dimensiones', 0, 1),
(137, 'culturales', 0, 1),
(138, 'contexto', 0, 1),
(139, 'ambiental', 0, 1),
(140, 'salud', 0, 1),
(141, 'mental', 0, 1),
(142, 'seminario', 0, 1),
(143, 'interdisciplinario', 0, 1),
(144, 'intervenciones', 0, 1),
(145, 'con', 0, 2),
(146, 'los', 0, 2),
(147, 'adultos', 0, 1),
(148, 'mayores', 0, 1),
(149, 'ayuda', 0, 2),
(150, 'temas', 0, 1),
(151, 'apoyo', 0, 2),
(152, 'técnico', 0, 2),
(153, 'foto', 0, 1),
(154, 'propósitos', 0, 1),
(155, 'relacionados', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_search_wordmatch`
--

CREATE TABLE IF NOT EXISTS `phpbb_search_wordmatch` (
  `post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `word_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `title_match` tinyint(1) unsigned NOT NULL DEFAULT '0',
  UNIQUE KEY `unq_mtch` (`word_id`,`post_id`,`title_match`),
  KEY `word_id` (`word_id`),
  KEY `post_id` (`post_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_search_wordmatch`
--

INSERT INTO `phpbb_search_wordmatch` (`post_id`, `word_id`, `title_match`) VALUES
(2, 1, 0),
(2, 1, 1),
(3, 1, 0),
(3, 1, 1),
(4, 1, 0),
(4, 1, 1),
(5, 1, 0),
(5, 1, 1),
(6, 1, 0),
(6, 1, 1),
(7, 1, 0),
(7, 1, 1),
(8, 1, 0),
(8, 1, 1),
(9, 1, 0),
(9, 1, 1),
(10, 1, 0),
(10, 1, 1),
(11, 1, 0),
(11, 1, 1),
(12, 1, 0),
(12, 1, 1),
(13, 1, 0),
(13, 1, 1),
(14, 1, 0),
(14, 1, 1),
(1, 2, 0),
(1, 3, 0),
(1, 19, 1),
(2, 23, 0),
(2, 23, 1),
(3, 23, 0),
(3, 23, 1),
(4, 23, 0),
(4, 23, 1),
(5, 23, 0),
(5, 23, 1),
(6, 23, 0),
(6, 23, 1),
(7, 23, 0),
(7, 23, 1),
(8, 23, 0),
(8, 23, 1),
(9, 23, 0),
(9, 23, 1),
(10, 23, 0),
(10, 23, 1),
(11, 23, 0),
(11, 23, 1),
(12, 23, 0),
(12, 23, 1),
(13, 23, 0),
(13, 23, 1),
(14, 23, 0),
(14, 23, 1),
(1, 28, 1),
(2, 28, 0),
(2, 28, 1),
(3, 28, 0),
(3, 28, 1),
(4, 28, 0),
(4, 28, 1),
(5, 28, 0),
(5, 28, 1),
(6, 28, 0),
(6, 28, 1),
(7, 28, 0),
(7, 28, 1),
(8, 28, 0),
(8, 28, 1),
(9, 28, 0),
(9, 28, 1),
(10, 28, 0),
(10, 28, 1),
(11, 28, 0),
(11, 28, 1),
(12, 28, 0),
(12, 28, 1),
(13, 28, 0),
(13, 28, 1),
(14, 28, 0),
(14, 28, 1),
(1, 58, 1),
(1, 59, 1),
(2, 59, 0),
(2, 59, 1),
(22, 59, 0),
(22, 59, 1),
(23, 59, 0),
(1, 60, 1),
(2, 60, 0),
(2, 60, 1),
(3, 60, 0),
(3, 60, 1),
(4, 60, 0),
(4, 60, 1),
(5, 60, 0),
(5, 60, 1),
(6, 60, 0),
(6, 60, 1),
(9, 60, 0),
(9, 60, 1),
(10, 60, 0),
(10, 60, 1),
(11, 60, 0),
(11, 60, 1),
(12, 60, 0),
(12, 60, 1),
(13, 60, 0),
(13, 60, 1),
(14, 60, 0),
(14, 60, 1),
(1, 61, 1),
(1, 62, 1),
(24, 62, 1),
(1, 63, 1),
(2, 64, 0),
(2, 64, 1),
(3, 64, 0),
(3, 64, 1),
(4, 64, 0),
(4, 64, 1),
(5, 64, 0),
(5, 64, 1),
(6, 64, 0),
(6, 64, 1),
(7, 64, 0),
(7, 64, 1),
(8, 64, 0),
(8, 64, 1),
(9, 64, 0),
(9, 64, 1),
(10, 64, 0),
(10, 64, 1),
(11, 64, 0),
(11, 64, 1),
(12, 64, 0),
(12, 64, 1),
(13, 64, 0),
(13, 64, 1),
(14, 64, 0),
(14, 64, 1),
(2, 65, 0),
(2, 65, 1),
(3, 65, 0),
(3, 65, 1),
(4, 65, 0),
(4, 65, 1),
(5, 65, 0),
(5, 65, 1),
(6, 65, 0),
(6, 65, 1),
(7, 65, 0),
(7, 65, 1),
(8, 65, 0),
(8, 65, 1),
(9, 65, 0),
(9, 65, 1),
(10, 65, 0),
(10, 65, 1),
(11, 65, 0),
(11, 65, 1),
(12, 65, 0),
(12, 65, 1),
(13, 65, 0),
(13, 65, 1),
(14, 65, 0),
(14, 65, 1),
(22, 65, 0),
(23, 65, 0),
(24, 65, 0),
(25, 65, 0),
(26, 65, 0),
(27, 65, 0),
(29, 65, 0),
(30, 65, 0),
(31, 65, 0),
(32, 65, 0),
(33, 65, 0),
(34, 65, 0),
(35, 65, 0),
(36, 65, 0),
(3, 67, 0),
(3, 67, 1),
(4, 67, 0),
(4, 67, 1),
(5, 67, 0),
(5, 67, 1),
(6, 67, 0),
(6, 67, 1),
(9, 67, 0),
(9, 67, 1),
(10, 67, 0),
(10, 67, 1),
(11, 67, 0),
(11, 67, 1),
(12, 67, 0),
(12, 67, 1),
(13, 67, 0),
(13, 67, 1),
(14, 67, 0),
(14, 67, 1),
(7, 68, 0),
(7, 68, 1),
(8, 69, 0),
(8, 69, 1),
(8, 70, 0),
(8, 70, 1),
(8, 71, 0),
(8, 71, 1),
(15, 72, 0),
(15, 72, 1),
(16, 72, 0),
(16, 72, 1),
(17, 72, 0),
(17, 72, 1),
(18, 72, 0),
(18, 72, 1),
(19, 72, 0),
(19, 72, 1),
(15, 73, 0),
(15, 73, 1),
(16, 73, 0),
(16, 73, 1),
(17, 73, 0),
(17, 73, 1),
(18, 73, 0),
(18, 73, 1),
(19, 73, 0),
(19, 73, 1),
(15, 74, 0),
(15, 74, 1),
(16, 74, 0),
(16, 74, 1),
(17, 74, 0),
(17, 74, 1),
(18, 74, 0),
(18, 74, 1),
(19, 74, 0),
(19, 74, 1),
(15, 75, 0),
(15, 75, 1),
(15, 76, 0),
(15, 76, 1),
(15, 77, 0),
(15, 77, 1),
(15, 78, 0),
(15, 78, 1),
(15, 79, 0),
(15, 79, 1),
(15, 80, 0),
(15, 80, 1),
(15, 81, 0),
(15, 81, 1),
(15, 82, 0),
(15, 82, 1),
(16, 82, 0),
(16, 82, 1),
(17, 82, 0),
(17, 82, 1),
(18, 82, 0),
(18, 82, 1),
(19, 82, 0),
(19, 82, 1),
(15, 83, 0),
(15, 83, 1),
(16, 83, 0),
(16, 83, 1),
(17, 83, 0),
(17, 83, 1),
(18, 83, 0),
(18, 83, 1),
(19, 83, 0),
(19, 83, 1),
(20, 83, 0),
(20, 83, 1),
(21, 83, 0),
(21, 83, 1),
(16, 84, 0),
(16, 84, 1),
(17, 84, 0),
(17, 84, 1),
(18, 84, 0),
(18, 84, 1),
(19, 84, 0),
(19, 84, 1),
(20, 84, 0),
(20, 84, 1),
(21, 84, 0),
(21, 84, 1),
(16, 85, 0),
(16, 85, 1),
(17, 85, 0),
(17, 85, 1),
(18, 85, 0),
(18, 85, 1),
(19, 85, 0),
(19, 85, 1),
(20, 85, 0),
(20, 85, 1),
(21, 85, 0),
(21, 85, 1),
(16, 86, 0),
(16, 86, 1),
(17, 86, 0),
(17, 86, 1),
(18, 86, 0),
(18, 86, 1),
(19, 86, 0),
(19, 86, 1),
(20, 86, 0),
(20, 86, 1),
(21, 86, 0),
(21, 86, 1),
(16, 87, 0),
(16, 87, 1),
(17, 87, 0),
(17, 87, 1),
(18, 87, 0),
(18, 87, 1),
(19, 87, 0),
(19, 87, 1),
(21, 87, 0),
(21, 87, 1),
(16, 88, 0),
(16, 88, 1),
(17, 88, 0),
(17, 88, 1),
(18, 88, 0),
(18, 88, 1),
(19, 88, 0),
(19, 88, 1),
(21, 88, 0),
(21, 88, 1),
(16, 89, 0),
(16, 89, 1),
(17, 89, 0),
(17, 89, 1),
(18, 89, 0),
(18, 89, 1),
(19, 89, 0),
(19, 89, 1),
(16, 90, 0),
(16, 90, 1),
(17, 90, 0),
(17, 90, 1),
(18, 90, 0),
(18, 90, 1),
(19, 90, 0),
(19, 90, 1),
(21, 90, 0),
(21, 90, 1),
(20, 91, 0),
(20, 91, 1),
(21, 91, 0),
(21, 91, 1),
(20, 92, 0),
(20, 92, 1),
(21, 92, 0),
(21, 92, 1),
(20, 93, 0),
(20, 93, 1),
(20, 94, 0),
(20, 94, 1),
(20, 95, 0),
(20, 95, 1),
(20, 96, 0),
(20, 96, 1),
(20, 97, 0),
(20, 97, 1),
(20, 98, 0),
(20, 98, 1),
(20, 99, 0),
(20, 99, 1),
(20, 100, 0),
(20, 100, 1),
(21, 100, 0),
(21, 100, 1),
(21, 101, 0),
(21, 101, 1),
(21, 102, 0),
(21, 102, 1),
(21, 103, 0),
(21, 103, 1),
(21, 104, 0),
(21, 104, 1),
(22, 107, 0),
(23, 107, 0),
(24, 107, 0),
(25, 107, 0),
(26, 107, 0),
(27, 107, 0),
(29, 107, 0),
(30, 107, 0),
(31, 107, 0),
(32, 107, 0),
(33, 107, 0),
(34, 107, 0),
(35, 107, 0),
(36, 107, 0),
(22, 108, 0),
(22, 109, 0),
(23, 109, 0),
(24, 109, 0),
(25, 109, 0),
(26, 109, 0),
(27, 109, 0),
(29, 109, 0),
(30, 109, 0),
(31, 109, 0),
(32, 109, 0),
(33, 109, 0),
(34, 109, 0),
(35, 109, 0),
(36, 109, 0),
(36, 109, 1),
(22, 110, 0),
(22, 110, 1),
(23, 110, 0),
(24, 110, 0),
(25, 110, 0),
(26, 110, 0),
(27, 110, 0),
(29, 110, 0),
(30, 110, 0),
(31, 110, 0),
(32, 110, 0),
(33, 110, 0),
(34, 110, 0),
(23, 112, 1),
(23, 113, 1),
(24, 113, 1),
(25, 113, 1),
(26, 113, 1),
(27, 113, 1),
(28, 113, 1),
(23, 114, 1),
(23, 115, 0),
(24, 115, 0),
(25, 115, 0),
(26, 115, 0),
(27, 115, 0),
(29, 115, 0),
(30, 115, 0),
(31, 115, 0),
(32, 115, 0),
(33, 115, 0),
(34, 115, 0),
(36, 115, 0),
(23, 116, 0),
(24, 116, 0),
(25, 116, 0),
(26, 116, 0),
(27, 116, 0),
(29, 116, 0),
(30, 116, 0),
(31, 116, 0),
(32, 116, 0),
(33, 116, 0),
(34, 116, 0),
(36, 116, 0),
(23, 117, 0),
(24, 117, 0),
(25, 117, 0),
(26, 117, 0),
(27, 117, 0),
(29, 117, 0),
(30, 117, 0),
(31, 117, 0),
(32, 117, 0),
(33, 117, 0),
(34, 117, 0),
(35, 117, 0),
(36, 117, 1),
(24, 118, 0),
(25, 118, 0),
(26, 118, 0),
(27, 118, 0),
(29, 118, 0),
(29, 118, 1),
(30, 118, 0),
(30, 118, 1),
(31, 118, 0),
(31, 118, 1),
(32, 118, 0),
(33, 118, 0),
(33, 118, 1),
(34, 118, 0),
(24, 119, 0),
(25, 119, 0),
(26, 119, 0),
(27, 119, 0),
(29, 119, 0),
(30, 119, 0),
(31, 119, 0),
(32, 119, 0),
(33, 119, 0),
(34, 119, 0),
(36, 119, 0),
(36, 119, 1),
(25, 120, 1),
(25, 121, 1),
(26, 122, 1),
(26, 123, 1),
(26, 124, 1),
(27, 125, 1),
(27, 126, 1),
(27, 127, 1),
(24, 129, 1),
(25, 129, 1),
(26, 129, 1),
(27, 129, 1),
(28, 129, 0),
(36, 129, 1),
(24, 130, 1),
(25, 130, 1),
(26, 130, 1),
(28, 130, 0),
(36, 130, 1),
(27, 131, 1),
(28, 132, 1),
(28, 133, 1),
(29, 134, 1),
(29, 135, 1),
(30, 135, 1),
(31, 135, 1),
(32, 135, 1),
(33, 135, 1),
(30, 136, 1),
(30, 137, 1),
(31, 138, 1),
(31, 139, 1),
(32, 140, 1),
(32, 141, 1),
(33, 142, 1),
(33, 143, 1),
(34, 144, 1),
(34, 145, 1),
(36, 145, 0),
(34, 146, 1),
(36, 146, 1),
(34, 147, 1),
(34, 148, 1),
(35, 149, 0),
(35, 149, 1),
(35, 150, 0),
(35, 151, 0),
(35, 151, 1),
(35, 152, 0),
(35, 152, 1),
(36, 153, 0),
(36, 154, 0),
(36, 155, 0),
(36, 155, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_sessions`
--

CREATE TABLE IF NOT EXISTS `phpbb_sessions` (
  `session_id` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `session_forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `session_last_visit` int(11) unsigned NOT NULL DEFAULT '0',
  `session_start` int(11) unsigned NOT NULL DEFAULT '0',
  `session_time` int(11) unsigned NOT NULL DEFAULT '0',
  `session_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_browser` varchar(150) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_forwarded_for` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_page` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `session_viewonline` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `session_autologin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `session_admin` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`session_id`),
  KEY `session_time` (`session_time`),
  KEY `session_user_id` (`session_user_id`),
  KEY `session_fid` (`session_forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_sessions`
--

INSERT INTO `phpbb_sessions` (`session_id`, `session_user_id`, `session_forum_id`, `session_last_visit`, `session_start`, `session_time`, `session_ip`, `session_browser`, `session_forwarded_for`, `session_page`, `session_viewonline`, `session_autologin`, `session_admin`) VALUES
('8d2a5d5ab1068be2ac6c299a880c918c', 2, 0, 1350623377, 1351832436, 1351832436, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'ucp.php?mode=login', 1, 0, 0),
('425fcde578855d99e99bca3ee0626ae5', 1, 0, 1351832100, 1351832100, 1351832100, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'index.php', 1, 0, 0),
('935f43daf7bdce065070532fed1aea42', 1, 0, 1351832096, 1351832096, 1351832096, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'index.php', 1, 0, 0),
('01883d5a5db20ec90ec7dd9f129a17e7', 1, 0, 1351830239, 1351830239, 1351830239, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'index.php', 1, 0, 0),
('77fc7060e0a68d45d562e3afdbb57808', 2, 0, 1350623377, 1351830899, 1351830899, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'ucp.php?mode=login', 1, 0, 0),
('55fc26619a97e5e122f47ac3c1b25028', 2, 0, 1350623377, 1351830932, 1351830932, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'ucp.php?mode=login', 1, 0, 0),
('b0ee7f80bd43c7e63c747b6f0442c276', 1, 0, 1351831038, 1351831038, 1351831038, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'index.php', 1, 0, 0),
('7f6f41bb00e0d05ce0534aac31bc8d2a', 1, 0, 1351831056, 1351831056, 1351831056, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'index.php', 1, 0, 0),
('de933a675a5ee7c3cad5ee916e8a051e', 2, 0, 1350623377, 1351831077, 1351831077, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'ucp.php?mode=login', 1, 0, 0),
('4ceb3c5b09cafa7d6405fd042582d21c', 1, 0, 1351831962, 1351831962, 1351831990, '98.215.6.86', 'Mozilla/5.0 (iPad; CPU OS 6_0 like Mac OS X) AppleWebKit/536.26 (KHTML, like Gecko) Version/6.0 Mobile/10A403 Safari/8536.25', '', 'ucp.php?mode=login', 1, 0, 0),
('b4b05f1c29a93c7788530cc6f8029c28', 2, 0, 1350623377, 1351832452, 1351832452, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'ucp.php?mode=login', 1, 0, 0),
('1abe01c25927c78801ae0ca44db3d0fc', 2, 0, 1350623377, 1351832733, 1351832733, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'ucp.php?mode=login', 1, 0, 0),
('d20433c65dee86833d55cf1825544b28', 2, 0, 1350623377, 1351832810, 1351832810, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'ucp.php?mode=login', 1, 0, 0),
('4073ae62c9e7f60be81b20cab6f7e841', 1, 0, 1351832895, 1351832895, 1351833061, '98.215.6.86', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_7_5) AppleWebKit/536.26.14 (KHTML, like Gecko) Version/6.0.1 Safari/536.26.14', '', 'ucp.php?mode=login', 1, 0, 0),
('117454d33586f338b71804f316a42e54', 2, 0, 1350623377, 1351832940, 1351832940, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', '', 'ucp.php?mode=login', 1, 0, 0),
('17b4f54415bec1f76a908222e49625b8', 2, 0, 1350623377, 1351833051, 1351833051, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'ucp.php?mode=login', 1, 0, 0),
('6290204adf536139c86a1a9d6920caa0', 1, 0, 1351833674, 1351833674, 1351833674, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', '', 'ucp.php?mode=logout', 1, 0, 0),
('f9c2d6e84a2247657fb1c3986044ef7d', 1, 0, 1351833674, 1351833674, 1351833678, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:16.0) Gecko/20100101 Firefox/16.0', '', 'index.php', 1, 0, 0),
('cea43e02d7c2224a7ec3f7110d754197', 1, 0, 1351833690, 1351833690, 1351833690, '98.253.33.44', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.4 (KHTML, like Gecko) Chrome/22.0.1229.94 Safari/537.4', '', 'index.php', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_sessions_keys`
--

CREATE TABLE IF NOT EXISTS `phpbb_sessions_keys` (
  `key_id` char(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `last_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `last_login` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`key_id`,`user_id`),
  KEY `last_login` (`last_login`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_sessions_keys`
--

INSERT INTO `phpbb_sessions_keys` (`key_id`, `user_id`, `last_ip`, `last_login`) VALUES
('7f40ca9794d4e258ef9d32dbad8193c9', 2, '98.215.6.86', 1347925337);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_sitelist`
--

CREATE TABLE IF NOT EXISTS `phpbb_sitelist` (
  `site_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `site_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `site_hostname` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `ip_exclude` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`site_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_smilies`
--

CREATE TABLE IF NOT EXISTS `phpbb_smilies` (
  `smiley_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `code` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `emotion` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `smiley_url` varchar(50) COLLATE utf8_bin NOT NULL DEFAULT '',
  `smiley_width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `smiley_height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `smiley_order` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `display_on_posting` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`smiley_id`),
  KEY `display_on_post` (`display_on_posting`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=43 ;

--
-- Dumping data for table `phpbb_smilies`
--

INSERT INTO `phpbb_smilies` (`smiley_id`, `code`, `emotion`, `smiley_url`, `smiley_width`, `smiley_height`, `smiley_order`, `display_on_posting`) VALUES
(1, ':D', 'Very Happy', 'icon_e_biggrin.gif', 15, 17, 1, 1),
(2, ':-D', 'Very Happy', 'icon_e_biggrin.gif', 15, 17, 2, 1),
(3, ':grin:', 'Very Happy', 'icon_e_biggrin.gif', 15, 17, 3, 1),
(4, ':)', 'Smile', 'icon_e_smile.gif', 15, 17, 4, 1),
(5, ':-)', 'Smile', 'icon_e_smile.gif', 15, 17, 5, 1),
(6, ':smile:', 'Smile', 'icon_e_smile.gif', 15, 17, 6, 1),
(7, ';)', 'Wink', 'icon_e_wink.gif', 15, 17, 7, 1),
(8, ';-)', 'Wink', 'icon_e_wink.gif', 15, 17, 8, 1),
(9, ':wink:', 'Wink', 'icon_e_wink.gif', 15, 17, 9, 1),
(10, ':(', 'Sad', 'icon_e_sad.gif', 15, 17, 10, 1),
(11, ':-(', 'Sad', 'icon_e_sad.gif', 15, 17, 11, 1),
(12, ':sad:', 'Sad', 'icon_e_sad.gif', 15, 17, 12, 1),
(13, ':o', 'Surprised', 'icon_e_surprised.gif', 15, 17, 13, 1),
(14, ':-o', 'Surprised', 'icon_e_surprised.gif', 15, 17, 14, 1),
(15, ':eek:', 'Surprised', 'icon_e_surprised.gif', 15, 17, 15, 1),
(16, ':shock:', 'Shocked', 'icon_eek.gif', 15, 17, 16, 1),
(17, ':?', 'Confused', 'icon_e_confused.gif', 15, 17, 17, 1),
(18, ':-?', 'Confused', 'icon_e_confused.gif', 15, 17, 18, 1),
(19, ':???:', 'Confused', 'icon_e_confused.gif', 15, 17, 19, 1),
(20, '8-)', 'Cool', 'icon_cool.gif', 15, 17, 20, 1),
(21, ':cool:', 'Cool', 'icon_cool.gif', 15, 17, 21, 1),
(22, ':lol:', 'Laughing', 'icon_lol.gif', 15, 17, 22, 1),
(23, ':x', 'Mad', 'icon_mad.gif', 15, 17, 23, 1),
(24, ':-x', 'Mad', 'icon_mad.gif', 15, 17, 24, 1),
(25, ':mad:', 'Mad', 'icon_mad.gif', 15, 17, 25, 1),
(26, ':P', 'Razz', 'icon_razz.gif', 15, 17, 26, 1),
(27, ':-P', 'Razz', 'icon_razz.gif', 15, 17, 27, 1),
(28, ':razz:', 'Razz', 'icon_razz.gif', 15, 17, 28, 1),
(29, ':oops:', 'Embarrassed', 'icon_redface.gif', 15, 17, 29, 1),
(30, ':cry:', 'Crying or Very Sad', 'icon_cry.gif', 15, 17, 30, 1),
(31, ':evil:', 'Evil or Very Mad', 'icon_evil.gif', 15, 17, 31, 1),
(32, ':twisted:', 'Twisted Evil', 'icon_twisted.gif', 15, 17, 32, 1),
(33, ':roll:', 'Rolling Eyes', 'icon_rolleyes.gif', 15, 17, 33, 1),
(34, ':!:', 'Exclamation', 'icon_exclaim.gif', 15, 17, 34, 1),
(35, ':?:', 'Question', 'icon_question.gif', 15, 17, 35, 1),
(36, ':idea:', 'Idea', 'icon_idea.gif', 15, 17, 36, 1),
(37, ':arrow:', 'Arrow', 'icon_arrow.gif', 15, 17, 37, 1),
(38, ':|', 'Neutral', 'icon_neutral.gif', 15, 17, 38, 1),
(39, ':-|', 'Neutral', 'icon_neutral.gif', 15, 17, 39, 1),
(40, ':mrgreen:', 'Mr. Green', 'icon_mrgreen.gif', 15, 17, 40, 1),
(41, ':geek:', 'Geek', 'icon_e_geek.gif', 17, 17, 41, 1),
(42, ':ugeek:', 'Uber Geek', 'icon_e_ugeek.gif', 17, 18, 42, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_styles`
--

CREATE TABLE IF NOT EXISTS `phpbb_styles` (
  `style_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `style_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `style_copyright` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `style_active` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `template_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `theme_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `imageset_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`style_id`),
  UNIQUE KEY `style_name` (`style_name`),
  KEY `template_id` (`template_id`),
  KEY `theme_id` (`theme_id`),
  KEY `imageset_id` (`imageset_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phpbb_styles`
--

INSERT INTO `phpbb_styles` (`style_id`, `style_name`, `style_copyright`, `style_active`, `template_id`, `theme_id`, `imageset_id`) VALUES
(1, 'prosilver', '&copy; phpBB Group', 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_styles_imageset`
--

CREATE TABLE IF NOT EXISTS `phpbb_styles_imageset` (
  `imageset_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `imageset_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `imageset_copyright` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `imageset_path` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`imageset_id`),
  UNIQUE KEY `imgset_nm` (`imageset_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phpbb_styles_imageset`
--

INSERT INTO `phpbb_styles_imageset` (`imageset_id`, `imageset_name`, `imageset_copyright`, `imageset_path`) VALUES
(1, 'prosilver', '&copy; phpBB Group', 'prosilver');

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_styles_imageset_data`
--

CREATE TABLE IF NOT EXISTS `phpbb_styles_imageset_data` (
  `image_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `image_name` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '',
  `image_filename` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '',
  `image_lang` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `image_height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `image_width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `imageset_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`image_id`),
  KEY `i_d` (`imageset_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=79 ;

--
-- Dumping data for table `phpbb_styles_imageset_data`
--

INSERT INTO `phpbb_styles_imageset_data` (`image_id`, `image_name`, `image_filename`, `image_lang`, `image_height`, `image_width`, `imageset_id`) VALUES
(1, 'site_logo', 'site_logo.gif', '', 52, 139, 1),
(2, 'forum_link', 'forum_link.gif', '', 27, 27, 1),
(3, 'forum_read', 'forum_read.gif', '', 27, 27, 1),
(4, 'forum_read_locked', 'forum_read_locked.gif', '', 27, 27, 1),
(5, 'forum_read_subforum', 'forum_read_subforum.gif', '', 27, 27, 1),
(6, 'forum_unread', 'forum_unread.gif', '', 27, 27, 1),
(7, 'forum_unread_locked', 'forum_unread_locked.gif', '', 27, 27, 1),
(8, 'forum_unread_subforum', 'forum_unread_subforum.gif', '', 27, 27, 1),
(9, 'topic_moved', 'topic_moved.gif', '', 27, 27, 1),
(10, 'topic_read', 'topic_read.gif', '', 27, 27, 1),
(11, 'topic_read_mine', 'topic_read_mine.gif', '', 27, 27, 1),
(12, 'topic_read_hot', 'topic_read_hot.gif', '', 27, 27, 1),
(13, 'topic_read_hot_mine', 'topic_read_hot_mine.gif', '', 27, 27, 1),
(14, 'topic_read_locked', 'topic_read_locked.gif', '', 27, 27, 1),
(15, 'topic_read_locked_mine', 'topic_read_locked_mine.gif', '', 27, 27, 1),
(16, 'topic_unread', 'topic_unread.gif', '', 27, 27, 1),
(17, 'topic_unread_mine', 'topic_unread_mine.gif', '', 27, 27, 1),
(18, 'topic_unread_hot', 'topic_unread_hot.gif', '', 27, 27, 1),
(19, 'topic_unread_hot_mine', 'topic_unread_hot_mine.gif', '', 27, 27, 1),
(20, 'topic_unread_locked', 'topic_unread_locked.gif', '', 27, 27, 1),
(21, 'topic_unread_locked_mine', 'topic_unread_locked_mine.gif', '', 27, 27, 1),
(22, 'sticky_read', 'sticky_read.gif', '', 27, 27, 1),
(23, 'sticky_read_mine', 'sticky_read_mine.gif', '', 27, 27, 1),
(24, 'sticky_read_locked', 'sticky_read_locked.gif', '', 27, 27, 1),
(25, 'sticky_read_locked_mine', 'sticky_read_locked_mine.gif', '', 27, 27, 1),
(26, 'sticky_unread', 'sticky_unread.gif', '', 27, 27, 1),
(27, 'sticky_unread_mine', 'sticky_unread_mine.gif', '', 27, 27, 1),
(28, 'sticky_unread_locked', 'sticky_unread_locked.gif', '', 27, 27, 1),
(29, 'sticky_unread_locked_mine', 'sticky_unread_locked_mine.gif', '', 27, 27, 1),
(30, 'announce_read', 'announce_read.gif', '', 27, 27, 1),
(31, 'announce_read_mine', 'announce_read_mine.gif', '', 27, 27, 1),
(32, 'announce_read_locked', 'announce_read_locked.gif', '', 27, 27, 1),
(33, 'announce_read_locked_mine', 'announce_read_locked_mine.gif', '', 27, 27, 1),
(34, 'announce_unread', 'announce_unread.gif', '', 27, 27, 1),
(35, 'announce_unread_mine', 'announce_unread_mine.gif', '', 27, 27, 1),
(36, 'announce_unread_locked', 'announce_unread_locked.gif', '', 27, 27, 1),
(37, 'announce_unread_locked_mine', 'announce_unread_locked_mine.gif', '', 27, 27, 1),
(38, 'global_read', 'announce_read.gif', '', 27, 27, 1),
(39, 'global_read_mine', 'announce_read_mine.gif', '', 27, 27, 1),
(40, 'global_read_locked', 'announce_read_locked.gif', '', 27, 27, 1),
(41, 'global_read_locked_mine', 'announce_read_locked_mine.gif', '', 27, 27, 1),
(42, 'global_unread', 'announce_unread.gif', '', 27, 27, 1),
(43, 'global_unread_mine', 'announce_unread_mine.gif', '', 27, 27, 1),
(44, 'global_unread_locked', 'announce_unread_locked.gif', '', 27, 27, 1),
(45, 'global_unread_locked_mine', 'announce_unread_locked_mine.gif', '', 27, 27, 1),
(46, 'pm_read', 'topic_read.gif', '', 27, 27, 1),
(47, 'pm_unread', 'topic_unread.gif', '', 27, 27, 1),
(48, 'icon_back_top', 'icon_back_top.gif', '', 11, 11, 1),
(49, 'icon_contact_aim', 'icon_contact_aim.gif', '', 20, 20, 1),
(50, 'icon_contact_email', 'icon_contact_email.gif', '', 20, 20, 1),
(51, 'icon_contact_icq', 'icon_contact_icq.gif', '', 20, 20, 1),
(52, 'icon_contact_jabber', 'icon_contact_jabber.gif', '', 20, 20, 1),
(53, 'icon_contact_msnm', 'icon_contact_msnm.gif', '', 20, 20, 1),
(54, 'icon_contact_www', 'icon_contact_www.gif', '', 20, 20, 1),
(55, 'icon_contact_yahoo', 'icon_contact_yahoo.gif', '', 20, 20, 1),
(56, 'icon_post_delete', 'icon_post_delete.gif', '', 20, 20, 1),
(57, 'icon_post_info', 'icon_post_info.gif', '', 20, 20, 1),
(58, 'icon_post_report', 'icon_post_report.gif', '', 20, 20, 1),
(59, 'icon_post_target', 'icon_post_target.gif', '', 9, 11, 1),
(60, 'icon_post_target_unread', 'icon_post_target_unread.gif', '', 9, 11, 1),
(61, 'icon_topic_attach', 'icon_topic_attach.gif', '', 10, 7, 1),
(62, 'icon_topic_latest', 'icon_topic_latest.gif', '', 9, 11, 1),
(63, 'icon_topic_newest', 'icon_topic_newest.gif', '', 9, 11, 1),
(64, 'icon_topic_reported', 'icon_topic_reported.gif', '', 14, 16, 1),
(65, 'icon_topic_unapproved', 'icon_topic_unapproved.gif', '', 14, 16, 1),
(66, 'icon_user_warn', 'icon_user_warn.gif', '', 20, 20, 1),
(67, 'subforum_read', 'subforum_read.gif', '', 9, 11, 1),
(68, 'subforum_unread', 'subforum_unread.gif', '', 9, 11, 1),
(69, 'icon_contact_pm', 'icon_contact_pm.gif', 'en', 20, 28, 1),
(70, 'icon_post_edit', 'icon_post_edit.gif', 'en', 20, 42, 1),
(71, 'icon_post_quote', 'icon_post_quote.gif', 'en', 20, 54, 1),
(72, 'icon_user_online', 'icon_user_online.gif', 'en', 58, 58, 1),
(73, 'button_pm_forward', 'button_pm_forward.gif', 'en', 25, 96, 1),
(74, 'button_pm_new', 'button_pm_new.gif', 'en', 25, 84, 1),
(75, 'button_pm_reply', 'button_pm_reply.gif', 'en', 25, 96, 1),
(76, 'button_topic_locked', 'button_topic_locked.gif', 'en', 25, 88, 1),
(77, 'button_topic_new', 'button_topic_new.gif', 'en', 25, 96, 1),
(78, 'button_topic_reply', 'button_topic_reply.gif', 'en', 25, 96, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_styles_template`
--

CREATE TABLE IF NOT EXISTS `phpbb_styles_template` (
  `template_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `template_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `template_copyright` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `template_path` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `bbcode_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT 'kNg=',
  `template_storedb` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `template_inherits_id` int(4) unsigned NOT NULL DEFAULT '0',
  `template_inherit_path` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`template_id`),
  UNIQUE KEY `tmplte_nm` (`template_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phpbb_styles_template`
--

INSERT INTO `phpbb_styles_template` (`template_id`, `template_name`, `template_copyright`, `template_path`, `bbcode_bitfield`, `template_storedb`, `template_inherits_id`, `template_inherit_path`) VALUES
(1, 'prosilver', '&copy; phpBB Group', 'prosilver', 'lNg=', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_styles_template_data`
--

CREATE TABLE IF NOT EXISTS `phpbb_styles_template_data` (
  `template_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `template_filename` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `template_included` text COLLATE utf8_bin NOT NULL,
  `template_mtime` int(11) unsigned NOT NULL DEFAULT '0',
  `template_data` mediumtext COLLATE utf8_bin NOT NULL,
  KEY `tid` (`template_id`),
  KEY `tfn` (`template_filename`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_styles_theme`
--

CREATE TABLE IF NOT EXISTS `phpbb_styles_theme` (
  `theme_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `theme_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `theme_copyright` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `theme_path` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `theme_storedb` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `theme_mtime` int(11) unsigned NOT NULL DEFAULT '0',
  `theme_data` mediumtext COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`theme_id`),
  UNIQUE KEY `theme_name` (`theme_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=2 ;

--
-- Dumping data for table `phpbb_styles_theme`
--

INSERT INTO `phpbb_styles_theme` (`theme_id`, `theme_name`, `theme_copyright`, `theme_path`, `theme_storedb`, `theme_mtime`, `theme_data`) VALUES
(1, 'prosilver', '&copy; phpBB Group', 'prosilver', 1, 1347504121, 0x2f2a2020706870424233205374796c652053686565740a202020202d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a095374796c65206e616d653a09090970726f73696c76657220287468652064656661756c7420706870424220332e302e78207374796c65290a094261736564206f6e207374796c653a09090a094f726967696e616c20617574686f723a09546f6d2042656464617264202820687474703a2f2f7777772e737562626c75652e636f6d2f20290a094d6f6469666965642062793a090970687042422047726f7570202820687474703a2f2f7777772e70687062622e636f6d2f20290a202020202d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a2a2f0a0a2f2a2047656e6572616c204d61726b7570205374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a2a207b0a092f2a2052657365742062726f77736572732064656661756c74206d617267696e2c2070616464696e6720616e6420666f6e742073697a6573202a2f0a096d617267696e3a20303b0a0970616464696e673a20303b0a7d0a0a68746d6c207b0a092f2a20416c776179732073686f772061207363726f6c6c62617220666f722073686f7274207061676573202d2073746f707320746865206a756d70207768656e20746865207363726f6c6c62617220617070656172732e206e6f6e2d49452062726f7773657273202a2f0a096865696768743a20313031253b0a7d0a0a626f6479207b0a092f2a20546578742d53697a696e67207769746820656d733a20687474703a2f2f7777772e636c61676e75742e636f6d2f626c6f672f3334382f202a2f0a09666f6e742d66616d696c793a20417269616c2c2073616e732d73657269663b0a09636f6c6f723a20233832383238323b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a09666f6e742d73697a653a20313470783b0a096c696e652d6865696768743a20323070783b0a096d617267696e3a20303b0a0970616464696e673a203132707820303b0a7d0a0a6831207b0a092f2a20466f72756d206e616d65202a2f0a096d617267696e2d72696768743a2032303070783b0a09636f6c6f723a20234646464646463b0a096d617267696e2d746f703a20313570783b0a09666f6e742d7765696768743a20626f6c643b0a09666f6e742d73697a653a2032656d3b0a7d0a0a6832207b0a092f2a20466f72756d20686561646572207469746c6573202a2f0a09666f6e742d7765696768743a206e6f726d616c3b0a09636f6c6f723a20233366336633663b0a09666f6e742d73697a653a2032656d3b0a096d617267696e3a20302e38656d203020302e32656d20303b0a7d0a0a68322e736f6c6f207b0a096d617267696e2d626f74746f6d3a2031656d3b0a7d0a0a6833207b0a092f2a205375622d686561646572732028616c736f207573656420617320706f737420686561646572732c2062757420646566696e6564206c6174657229202a2f0a09666f6e742d66616d696c793a20417269616c2c2048656c7665746963612c2073616e732d73657269663b0a09666f6e742d7765696768743a20626f6c643b0a09746578742d7472616e73666f726d3a207570706572636173653b0a09626f726465722d626f74746f6d3a2031707820736f6c696420234343434343433b0a096d617267696e2d626f74746f6d3a203370783b0a0970616464696e672d626f74746f6d3a203270783b0a09666f6e742d73697a653a20312e3035656d3b0a09636f6c6f723a20233938393839383b0a096d617267696e2d746f703a20323070783b0a7d0a0a6834207b0a092f2a20466f72756d20616e6420746f706963206c697374207469746c6573202a2f0a09666f6e742d73697a653a20312e33656d3b0a7d0a0a70207b0a096d617267696e2d626f74746f6d3a20312e35656d3b0a7d0a0a696d67207b0a09626f726465722d77696474683a20303b0a7d0a0a6872207b0a092f2a20416c736f2073656520747765616b732e637373202a2f0a09626f726465723a2030206e6f6e6520234646464646463b0a09626f726465722d746f703a2031707820736f6c696420234343434343433b0a096865696768743a203170783b0a096d617267696e3a2035707820303b0a09646973706c61793a20626c6f636b3b0a09636c6561723a20626f74683b0a7d0a0a68722e646173686564207b0a09626f726465722d746f703a203170782064617368656420234343434343433b0a096d617267696e3a203130707820303b0a7d0a0a68722e64697669646572207b0a09646973706c61793a206e6f6e653b0a7d0a0a702e7269676874207b0a09746578742d616c69676e3a2072696768743b0a7d0a0a2f2a204d61696e20626c6f636b730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a2377726170207b0a0970616464696e673a203020323070783b0a096d696e2d77696474683a2036353070783b0a7d0a0a2373696d706c652d77726170207b0a0970616464696e673a2036707820313070783b0a7d0a0a23706167652d626f6479207b0a096d617267696e3a2034707820303b0a09636c6561723a20626f74683b0a7d0a0a23706167652d666f6f746572207b0a09636c6561723a20626f74683b0a7d0a0a23706167652d666f6f746572206833207b0a096d617267696e2d746f703a20323070783b0a7d0a0a236c6f676f207b0a09666c6f61743a206c6566743b0a0977696474683a206175746f3b0a0970616464696e673a20313070782031337078203020313070783b0a7d0a0a61236c6f676f3a686f766572207b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a2f2a2053656172636820626f780a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a237365617263682d626f78207b0a09636f6c6f723a20234646464646463b0a09706f736974696f6e3a2072656c61746976653b0a096d617267696e2d746f703a20333070783b0a096d617267696e2d72696768743a203570783b0a09646973706c61793a20626c6f636b3b0a09666c6f61743a2072696768743b0a09746578742d616c69676e3a2072696768743b0a0977686974652d73706163653a206e6f777261703b202f2a20466f72204f70657261202a2f0a7d0a0a237365617263682d626f7820236b6579776f726473207b0a0977696474683a20393570783b0a096261636b67726f756e642d636f6c6f723a20234646463b0a7d0a0a237365617263682d626f7820696e707574207b0a09626f726465723a2031707820736f6c696420236230623062303b0a7d0a0a2f2a202e627574746f6e31207374796c6520646566696e6564206c617465722c206a75737420612066657720747765616b7320666f72207468652073656172636820627574746f6e2076657273696f6e202a2f0a237365617263682d626f7820696e7075742e627574746f6e31207b0a0970616464696e673a20317078203570783b0a7d0a0a237365617263682d626f78206c69207b0a09746578742d616c69676e3a2072696768743b0a096d617267696e2d746f703a203470783b0a7d0a0a237365617263682d626f7820696d67207b0a09766572746963616c2d616c69676e3a206d6964646c653b0a096d617267696e2d72696768743a203370783b0a7d0a0a2f2a2053697465206465736372697074696f6e20616e64206c6f676f202a2f0a23736974652d6465736372697074696f6e207b0a09666c6f61743a206c6566743b0a0977696474683a203730253b0a7d0a0a23736974652d6465736372697074696f6e206831207b0a096d617267696e2d72696768743a20303b0a7d0a0a2f2a20526f756e6420636f726e6572656420626f78657320616e64206261636b67726f756e64730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a2e686561646572626172207b0a096261636b67726f756e643a2023656265626562206e6f6e65207265706561742d78203020303b0a09636f6c6f723a20234646464646463b0a096d617267696e2d626f74746f6d3a203470783b0a0970616464696e673a2030203570783b0a7d0a0a2e6e6176626172207b0a096261636b67726f756e642d636f6c6f723a20236562656265623b0a0970616464696e673a203020313070783b0a7d0a0a2e666f72616267207b0a096261636b67726f756e643a2023623162316231206e6f6e65207265706561742d78203020303b0a096d617267696e2d626f74746f6d3a203470783b0a0970616464696e673a2030203570783b0a09636c6561723a20626f74683b0a7d0a0a2e666f72756d6267207b0a096261636b67726f756e643a2023656265626562206e6f6e65207265706561742d78203020303b0a096d617267696e2d626f74746f6d3a203470783b0a0970616464696e673a2030203570783b0a09636c6561723a20626f74683b0a7d0a0a2e70616e656c207b0a096d617267696e2d626f74746f6d3a203470783b0a0970616464696e673a203020313070783b0a096261636b67726f756e642d636f6c6f723a20236633663366333b0a09636f6c6f723a20233366336633663b0a7d0a0a2e706f7374207b0a0970616464696e673a203020313070783b0a096d617267696e2d626f74746f6d3a203470783b0a096261636b67726f756e642d7265706561743a206e6f2d7265706561743b0a096261636b67726f756e642d706f736974696f6e3a203130302520303b0a7d0a0a2e706f73743a746172676574202e636f6e74656e74207b0a09636f6c6f723a20233030303030303b0a7d0a0a2e706f73743a7461726765742068332061207b0a09636f6c6f723a20233030303030303b0a7d0a0a2e626731097b206261636b67726f756e642d636f6c6f723a20236637663766373b7d0a2e626732097b206261636b67726f756e642d636f6c6f723a20236632663266323b207d0a2e626733097b206261636b67726f756e642d636f6c6f723a20236562656265623b207d0a0a2e726f776267207b0a096d617267696e3a203570782035707820327078203570783b0a7d0a0a2e756370726f776267207b0a096261636b67726f756e642d636f6c6f723a20236532653265323b0a7d0a0a2e6669656c64736267207b0a092f2a626f726465723a20317078202344424445453220736f6c69643b2a2f0a096261636b67726f756e642d636f6c6f723a20236561656165613b0a7d0a0a7370616e2e636f726e6572732d746f702c207370616e2e636f726e6572732d626f74746f6d2c207370616e2e636f726e6572732d746f70207370616e2c207370616e2e636f726e6572732d626f74746f6d207370616e207b0a09666f6e742d73697a653a203170783b0a096c696e652d6865696768743a203170783b0a09646973706c61793a20626c6f636b3b0a096865696768743a203570783b0a096261636b67726f756e642d7265706561743a206e6f2d7265706561743b0a7d0a0a7370616e2e636f726e6572732d746f70207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a096261636b67726f756e642d706f736974696f6e3a203020303b0a096d617267696e3a2030202d3570783b0a7d0a0a7370616e2e636f726e6572732d746f70207370616e207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a096261636b67726f756e642d706f736974696f6e3a203130302520303b0a7d0a0a7370616e2e636f726e6572732d626f74746f6d207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a096261636b67726f756e642d706f736974696f6e3a203020313030253b0a096d617267696e3a2030202d3570783b0a09636c6561723a20626f74683b0a7d0a0a7370616e2e636f726e6572732d626f74746f6d207370616e207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a096261636b67726f756e642d706f736974696f6e3a203130302520313030253b0a7d0a0a2e686561646267207370616e2e636f726e6572732d626f74746f6d207b0a096d617267696e2d626f74746f6d3a202d3170783b0a7d0a0a2e706f7374207370616e2e636f726e6572732d746f702c202e706f7374207370616e2e636f726e6572732d626f74746f6d2c202e70616e656c207370616e2e636f726e6572732d746f702c202e70616e656c207370616e2e636f726e6572732d626f74746f6d2c202e6e6176626172207370616e2e636f726e6572732d746f702c202e6e6176626172207370616e2e636f726e6572732d626f74746f6d207b0a096d617267696e3a2030202d313070783b0a7d0a0a2e72756c6573207370616e2e636f726e6572732d746f70207b0a096d617267696e3a2030202d3130707820357078202d313070783b0a7d0a0a2e72756c6573207370616e2e636f726e6572732d626f74746f6d207b0a096d617267696e3a20357078202d313070782030202d313070783b0a7d0a0a2f2a20486f72697a6f6e74616c206c697374730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a756c2e6c696e6b6c697374207b0a09646973706c61793a20626c6f636b3b0a096d617267696e3a20303b0a7d0a0a756c2e6c696e6b6c697374206c69207b0a09646973706c61793a20626c6f636b3b0a096c6973742d7374796c652d747970653a206e6f6e653b0a09666c6f61743a206c6566743b0a0977696474683a206175746f3b0a096d617267696e2d72696768743a203570783b0a7d0a0a756c2e6c696e6b6c697374206c692e7269676874736964652c20702e726967687473696465207b0a09666c6f61743a2072696768743b0a096d617267696e2d72696768743a20303b0a096d617267696e2d6c6566743a203570783b0a09746578742d616c69676e3a2072696768743b0a7d0a0a756c2e6e61766c696e6b73207b0a0970616464696e672d626f74746f6d3a203170783b0a096d617267696e2d626f74746f6d3a203170783b0a09626f726465722d626f74746f6d3a2031707820736f6c696420234646464646463b0a09666f6e742d7765696768743a20626f6c643b0a7d0a0a756c2e6c65667473696465207b0a09666c6f61743a206c6566743b0a096d617267696e2d6c6566743a20303b0a096d617267696e2d72696768743a203570783b0a09746578742d616c69676e3a206c6566743b0a7d0a0a756c2e726967687473696465207b0a09666c6f61743a2072696768743b0a096d617267696e2d6c6566743a203570783b0a096d617267696e2d72696768743a202d3570783b0a09746578742d616c69676e3a2072696768743b0a7d0a0a2f2a205461626c65207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a7461626c652e7461626c6531207b0a092f2a2053656520747765616b732e637373202a2f0a7d0a0a237563702d6d61696e207461626c652e7461626c6531207b0a0970616464696e673a203270783b0a7d0a0a7461626c652e7461626c6531207468656164207468207b0a09666f6e742d7765696768743a206e6f726d616c3b0a09746578742d7472616e73666f726d3a207570706572636173653b0a09636f6c6f723a20234646464646463b0a0970616464696e673a2030203020347078203370783b0a7d0a0a7461626c652e7461626c6531207468656164207468207370616e207b0a0970616464696e672d6c6566743a203770783b0a7d0a0a7461626c652e7461626c65312074626f6479207472207b0a09626f726465723a2031707820736f6c696420236366636663663b0a7d0a0a7461626c652e7461626c65312074626f64792074723a686f7665722c207461626c652e7461626c65312074626f64792074722e686f766572207b0a096261636b67726f756e642d636f6c6f723a20236636663666363b0a09636f6c6f723a20233030303b0a7d0a0a7461626c652e7461626c6531207464207b0a09636f6c6f723a20233661366136613b0a7d0a0a7461626c652e7461626c65312074626f6479207464207b0a0970616464696e673a203570783b0a09626f726465722d746f703a2031707820736f6c696420234641464146413b0a7d0a0a7461626c652e7461626c65312074626f6479207468207b0a0970616464696e673a203570783b0a09626f726465722d626f74746f6d3a2031707820736f6c696420233030303030303b0a09746578742d616c69676e3a206c6566743b0a09636f6c6f723a20233333333333333b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a7d0a0a2f2a20537065636966696320636f6c756d6e207374796c6573202a2f0a7461626c652e7461626c6531202e6e616d6509097b20746578742d616c69676e3a206c6566743b207d0a7461626c652e7461626c6531202e706f73747309097b20746578742d616c69676e3a2063656e7465722021696d706f7274616e743b2077696474683a2037253b207d0a7461626c652e7461626c6531202e6a6f696e6564097b20746578742d616c69676e3a206c6566743b2077696474683a203135253b207d0a7461626c652e7461626c6531202e616374697665097b20746578742d616c69676e3a206c6566743b2077696474683a203135253b207d0a7461626c652e7461626c6531202e6d61726b09097b20746578742d616c69676e3a2063656e7465723b2077696474683a2037253b207d0a7461626c652e7461626c6531202e696e666f09097b20746578742d616c69676e3a206c6566743b2077696474683a203330253b207d0a7461626c652e7461626c6531202e696e666f20646976097b2077696474683a20313030253b2077686974652d73706163653a206e6f726d616c3b206f766572666c6f773a2068696464656e3b207d0a7461626c652e7461626c6531202e6175746f636f6c097b206c696e652d6865696768743a2032656d3b2077686974652d73706163653a206e6f777261703b207d0a7461626c652e7461626c6531207468656164202e6175746f636f6c207b2070616464696e672d6c6566743a2031656d3b207d0a0a7461626c652e7461626c6531207370616e2e72616e6b2d696d67207b0a09666c6f61743a2072696768743b0a0977696474683a206175746f3b0a7d0a0a7461626c652e696e666f207464207b0a0970616464696e673a203370783b0a7d0a0a7461626c652e696e666f2074626f6479207468207b0a0970616464696e673a203370783b0a09746578742d616c69676e3a2072696768743b0a09766572746963616c2d616c69676e3a20746f703b0a09636f6c6f723a20233030303030303b0a09666f6e742d7765696768743a206e6f726d616c3b0a7d0a0a2e666f72756d6267207461626c652e7461626c6531207b0a096d617267696e3a20303b0a7d0a0a2e666f72756d62672d7461626c65203e202e696e6e6572207b0a096d617267696e3a2030202d3170783b0a7d0a0a2e666f72756d62672d7461626c65203e202e696e6e6572203e207370616e2e636f726e6572732d746f70207b0a096d617267696e3a2030202d347078202d317078202d3470783b0a7d0a0a2e666f72756d62672d7461626c65203e202e696e6e6572203e207370616e2e636f726e6572732d626f74746f6d207b0a096d617267696e3a202d317078202d3470782030202d3470783b0a7d0a0a2f2a204d697363206c61796f7574207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a2f2a20636f6c756d6e5b312d325d207374796c65732061726520636f6e7461696e65727320666f722074776f20636f6c756d6e206c61796f757473200a202020416c736f2073656520747765616b732e637373202a2f0a2e636f6c756d6e31207b0a09666c6f61743a206c6566743b0a09636c6561723a206c6566743b0a0977696474683a203439253b0a7d0a0a2e636f6c756d6e32207b0a09666c6f61743a2072696768743b0a09636c6561723a2072696768743b0a0977696474683a203439253b0a7d0a0a2f2a2047656e6572616c20636c617373657320666f7220706c6163696e6720666c6f6174696e6720626c6f636b73202a2f0a2e6c6566742d626f78207b0a09666c6f61743a206c6566743b0a0977696474683a206175746f3b0a09746578742d616c69676e3a206c6566743b0a7d0a0a2e72696768742d626f78207b0a09666c6f61743a2072696768743b0a0977696474683a206175746f3b0a09746578742d616c69676e3a2072696768743b0a7d0a0a646c2e64657461696c73207b0a0a7d0a0a646c2e64657461696c73206474207b0a09666c6f61743a206c6566743b0a09636c6561723a206c6566743b0a0977696474683a203330253b0a09746578742d616c69676e3a2072696768743b0a09636f6c6f723a20233030303030303b0a09646973706c61793a20626c6f636b3b0a7d0a0a646c2e64657461696c73206464207b0a096d617267696e2d6c6566743a20303b0a0970616464696e672d6c6566743a203570783b0a096d617267696e2d626f74746f6d3a203570783b0a09636f6c6f723a20233832383238323b0a09666c6f61743a206c6566743b0a0977696474683a203635253b0a7d0a0a2f2a20506167696e6174696f6e0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a2e706167696e6174696f6e207b0a096865696768743a2031253b202f2a20494520747765616b2028686f6c6c79206861636b29202a2f0a0977696474683a206175746f3b0a09746578742d616c69676e3a2072696768743b0a096d617267696e2d746f703a203570783b0a09666c6f61743a2072696768743b0a7d0a0a2e706167696e6174696f6e207370616e2e706167652d736570207b0a09646973706c61793a206e6f6e653b0a7d0a0a6c692e706167696e6174696f6e207b0a096d617267696e2d746f703a20303b0a7d0a0a2e706167696e6174696f6e207374726f6e672c202e706167696e6174696f6e2062207b0a09666f6e742d7765696768743a206e6f726d616c3b0a7d0a0a2e706167696e6174696f6e207370616e207374726f6e67207b0a0970616464696e673a2030203270783b0a096d617267696e3a2030203270783b0a09666f6e742d7765696768743a206e6f726d616c3b0a09636f6c6f723a20234646464646463b0a096261636b67726f756e642d636f6c6f723a20236266626662663b0a09626f726465723a2031707820736f6c696420236266626662663b0a7d0a0a2e706167696e6174696f6e207370616e20612c202e706167696e6174696f6e207370616e20613a6c696e6b2c202e706167696e6174696f6e207370616e20613a766973697465642c202e706167696e6174696f6e207370616e20613a616374697665207b0a09666f6e742d7765696768743a206e6f726d616c3b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a09636f6c6f723a20233734373437343b0a096d617267696e3a2030203270783b0a0970616464696e673a2030203270783b0a096261636b67726f756e642d636f6c6f723a20236565656565653b0a09626f726465723a2031707820736f6c696420236261626162613b0a7d0a0a2e706167696e6174696f6e207370616e20613a686f766572207b0a09626f726465722d636f6c6f723a20236432643264323b0a096261636b67726f756e642d636f6c6f723a20236432643264323b0a09636f6c6f723a20234646463b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a2e706167696e6174696f6e20696d67207b0a09766572746963616c2d616c69676e3a206d6964646c653b0a7d0a0a2f2a20506167696e6174696f6e20696e2076696577666f72756d20666f72206d756c74697061676520746f70696373202a2f0a2e726f77202e706167696e6174696f6e207b0a09646973706c61793a20626c6f636b3b0a09666c6f61743a2072696768743b0a0977696474683a206175746f3b0a096d617267696e2d746f703a20303b0a0970616464696e673a2031707820302031707820313570783b0a096261636b67726f756e643a206e6f6e65203020353025206e6f2d7265706561743b0a7d0a0a2e726f77202e706167696e6174696f6e207370616e20612c206c692e706167696e6174696f6e207370616e2061207b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a7d0a0a2e726f77202e706167696e6174696f6e207370616e20613a686f7665722c206c692e706167696e6174696f6e207370616e20613a686f766572207b0a096261636b67726f756e642d636f6c6f723a20236432643264323b0a7d0a0a2f2a204d697363656c6c616e656f7573207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a23666f72756d2d7065726d697373696f6e73207b0a09666c6f61743a2072696768743b0a0977696474683a206175746f3b0a0970616464696e672d6c6566743a203570783b0a096d617267696e2d6c6566743a203570783b0a096d617267696e2d746f703a20313070783b0a09746578742d616c69676e3a2072696768743b0a7d0a0a2e636f70797269676874207b0a0970616464696e673a203570783b0a09746578742d616c69676e3a2063656e7465723b0a09636f6c6f723a20233535353535353b0a7d0a0a2e736d616c6c207b0a7d0a0a2e7469746c657370616365207b0a096d617267696e2d626f74746f6d3a20313570783b0a7d0a0a2e6865616465727370616365207b0a096d617267696e2d746f703a20323070783b0a7d0a0a2e6572726f72207b0a09636f6c6f723a20236263626362633b0a09666f6e742d7765696768743a20626f6c643b0a7d0a0a2e7265706f72746564207b0a096261636b67726f756e642d636f6c6f723a20236637663766373b0a7d0a0a6c692e7265706f727465643a686f766572207b0a096261636b67726f756e642d636f6c6f723a20236563656365633b0a7d0a0a6469762e72756c6573207b0a096261636b67726f756e642d636f6c6f723a20236563656365633b0a09636f6c6f723a20236263626362633b0a0970616464696e673a203020313070783b0a096d617267696e3a203130707820303b0a7d0a0a6469762e72756c657320756c2c206469762e72756c6573206f6c207b0a096d617267696e2d6c6566743a20323070783b0a7d0a0a702e72756c6573207b0a096261636b67726f756e642d636f6c6f723a20236563656365633b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a0970616464696e673a203570783b0a7d0a0a702e72756c657320696d67207b0a09766572746963616c2d616c69676e3a206d6964646c653b0a0970616464696e672d746f703a203570783b0a7d0a0a702e72756c65732061207b0a09766572746963616c2d616c69676e3a206d6964646c653b0a09636c6561723a20626f74683b0a7d0a0a23746f70207b0a09706f736974696f6e3a206162736f6c7574653b0a09746f703a202d323070783b0a7d0a0a2e636c656172207b0a09646973706c61793a20626c6f636b3b0a09636c6561723a20626f74683b0a09666f6e742d73697a653a203170783b0a096c696e652d6865696768743a203170783b0a096261636b67726f756e643a207472616e73706172656e743b0a7d0a2f2a204c696e6b205374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a2f2a204c696e6b732061646a7573746d656e7420746f20636f72726563746c7920646973706c617920616e206f72646572206f662072746c2f6c7472206d6978656420636f6e74656e74202a2f0a61207b0a09646972656374696f6e3a206c74723b0a09756e69636f64652d626964693a20656d6265643b0a7d0a0a613a6c696e6b097b20636f6c6f723a20233839383938393b20746578742d6465636f726174696f6e3a206e6f6e653b207d0a613a76697369746564097b20636f6c6f723a20233839383938393b20746578742d6465636f726174696f6e3a206e6f6e653b207d0a613a686f766572097b20636f6c6f723a20236433643364333b20746578742d6465636f726174696f6e3a20756e6465726c696e653b207d0a613a616374697665097b20636f6c6f723a20236432643264323b20746578742d6465636f726174696f6e3a206e6f6e653b207d0a0a2f2a20436f6c6f7572656420757365726e616d6573202a2f0a2e757365726e616d652d636f6c6f75726564207b0a09666f6e742d7765696768743a20626f6c643b0a09646973706c61793a20696e6c696e652021696d706f7274616e743b0a0970616464696e673a20302021696d706f7274616e743b0a7d0a0a2f2a204c696e6b73206f6e206772616469656e74206261636b67726f756e6473202a2f0a237365617263682d626f7820613a6c696e6b2c202e6e6176626720613a6c696e6b2c202e666f72756d6267202e68656164657220613a6c696e6b2c202e666f72616267202e68656164657220613a6c696e6b2c20746820613a6c696e6b207b0a09636f6c6f723a20234646464646463b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a237365617263682d626f7820613a766973697465642c202e6e6176626720613a766973697465642c202e666f72756d6267202e68656164657220613a766973697465642c202e666f72616267202e68656164657220613a766973697465642c20746820613a76697369746564207b0a09636f6c6f723a20234646464646463b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a237365617263682d626f7820613a686f7665722c202e6e6176626720613a686f7665722c202e666f72756d6267202e68656164657220613a686f7665722c202e666f72616267202e68656164657220613a686f7665722c20746820613a686f766572207b0a09636f6c6f723a20236666666666663b0a09746578742d6465636f726174696f6e3a20756e6465726c696e653b0a7d0a0a237365617263682d626f7820613a6163746976652c202e6e6176626720613a6163746976652c202e666f72756d6267202e68656164657220613a6163746976652c202e666f72616267202e68656164657220613a6163746976652c20746820613a616374697665207b0a09636f6c6f723a20236666666666663b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a2f2a204c696e6b7320666f7220666f72756d2f746f706963206c69737473202a2f0a612e666f72756d7469746c65207b0a096d617267696e2d746f703a203570783b0a09666f6e742d7765696768743a20626f6c643b0a09636f6c6f723a20233839383938393b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a2f2a20612e666f72756d7469746c653a76697369746564207b20636f6c6f723a20233839383938393b207d202a2f0a0a612e666f72756d7469746c653a686f766572207b0a09636f6c6f723a20236263626362633b0a09746578742d6465636f726174696f6e3a20756e6465726c696e653b0a7d0a0a612e666f72756d7469746c653a616374697665207b0a09636f6c6f723a20233839383938393b0a7d0a0a612e746f7069637469746c65207b0a09666f6e742d7765696768743a20626f6c643b0a09636f6c6f723a20233839383938393b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a2f2a20612e746f7069637469746c653a76697369746564207b20636f6c6f723a20236432643264323b207d202a2f0a0a612e746f7069637469746c653a686f766572207b0a09636f6c6f723a20236263626362633b0a09746578742d6465636f726174696f6e3a20756e6465726c696e653b0a7d0a0a612e746f7069637469746c653a616374697665207b0a09636f6c6f723a20233839383938393b0a7d0a0a2f2a20506f737420626f6479206c696e6b73202a2f0a2e706f73746c696e6b207b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a09636f6c6f723a20236432643264323b0a09626f726465722d626f74746f6d3a2031707820736f6c696420236432643264323b0a0970616464696e672d626f74746f6d3a20303b0a7d0a0a2f2a202e706f73746c696e6b3a76697369746564207b20636f6c6f723a20236264626462643b207d202a2f0a0a2e706f73746c696e6b3a616374697665207b0a09636f6c6f723a20236432643264323b0a7d0a0a2e706f73746c696e6b3a686f766572207b0a096261636b67726f756e642d636f6c6f723a20236636663666363b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a09636f6c6f723a20233430343034303b0a7d0a0a2e7369676e617475726520612c202e7369676e617475726520613a766973697465642c202e7369676e617475726520613a686f7665722c202e7369676e617475726520613a616374697665207b0a09626f726465723a206e6f6e653b0a09746578742d6465636f726174696f6e3a20756e6465726c696e653b0a096261636b67726f756e642d636f6c6f723a207472616e73706172656e743b0a7d0a0a2f2a2050726f66696c65206c696e6b73202a2f0a2e706f737470726f66696c6520613a6c696e6b2c202e706f737470726f66696c6520613a766973697465642c202e706f737470726f66696c652064742e617574686f722061207b0a09666f6e742d7765696768743a20626f6c643b0a09636f6c6f723a20233839383938393b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a2e706f737470726f66696c6520613a686f7665722c202e706f737470726f66696c652064742e617574686f7220613a686f766572207b0a09746578742d6465636f726174696f6e3a20756e6465726c696e653b0a09636f6c6f723a20236433643364333b0a7d0a0a2f2a20435353207370656320726571756972657320613a6c696e6b2c20613a766973697465642c20613a686f76657220616e6420613a6163746976652072756c657320746f2062652073706563696669656420696e2074686973206f726465722e202a2f0a2f2a2053656520687474703a2f2f7777772e70687062622e636f6d2f627567732f7068706262332f3539363835202a2f0a2e706f737470726f66696c6520613a616374697665207b0a09666f6e742d7765696768743a20626f6c643b0a09636f6c6f723a20233839383938393b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a0a2f2a2050726f66696c6520736561726368726573756c7473202a2f090a2e736561726368202e706f737470726f66696c652061207b0a09636f6c6f723a20233839383938393b0a09746578742d6465636f726174696f6e3a206e6f6e653b200a09666f6e742d7765696768743a206e6f726d616c3b0a7d0a0a2e736561726368202e706f737470726f66696c6520613a686f766572207b0a09636f6c6f723a20236433643364333b0a09746578742d6465636f726174696f6e3a20756e6465726c696e653b200a7d0a0a2f2a204261636b20746f20746f70206f662070616765202a2f0a2e6261636b32746f70207b0a09636c6561723a20626f74683b0a096865696768743a20313170783b0a09746578742d616c69676e3a2072696768743b0a7d0a0a612e746f70207b0a096261636b67726f756e643a206e6f6e65206e6f2d72657065617420746f70206c6566743b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a0977696474683a207b494d475f49434f4e5f4241434b5f544f505f57494454487d70783b0a096865696768743a207b494d475f49434f4e5f4241434b5f544f505f4845494748547d70783b0a09646973706c61793a20626c6f636b3b0a09666c6f61743a2072696768743b0a096f766572666c6f773a2068696464656e3b0a096c65747465722d73706163696e673a203130303070783b0a09746578742d696e64656e743a20313170783b0a7d0a0a612e746f7032207b0a096261636b67726f756e643a206e6f6e65206e6f2d7265706561742030203530253b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a0970616464696e672d6c6566743a20313570783b0a7d0a0a2f2a204172726f77206c696e6b7320202a2f0a612e757009097b206261636b67726f756e643a206e6f6e65206e6f2d726570656174206c6566742063656e7465723b207d0a612e646f776e09097b206261636b67726f756e643a206e6f6e65206e6f2d7265706561742072696768742063656e7465723b207d0a612e6c65667409097b206261636b67726f756e643a206e6f6e65206e6f2d72657065617420337078203630253b207d0a612e726967687409097b206261636b67726f756e643a206e6f6e65206e6f2d72657065617420393525203630253b207d0a0a612e75702c20612e75703a6c696e6b2c20612e75703a6163746976652c20612e75703a76697369746564207b0a0970616464696e672d6c6566743a20313070783b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a09626f726465722d626f74746f6d2d77696474683a20303b0a7d0a0a612e75703a686f766572207b0a096261636b67726f756e642d706f736974696f6e3a206c65667420746f703b0a096261636b67726f756e642d636f6c6f723a207472616e73706172656e743b0a7d0a0a612e646f776e2c20612e646f776e3a6c696e6b2c20612e646f776e3a6163746976652c20612e646f776e3a76697369746564207b0a0970616464696e672d72696768743a20313070783b0a7d0a0a612e646f776e3a686f766572207b0a096261636b67726f756e642d706f736974696f6e3a20726967687420626f74746f6d3b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a612e6c6566742c20612e6c6566743a6163746976652c20612e6c6566743a76697369746564207b0a0970616464696e672d6c6566743a20313270783b0a7d0a0a612e6c6566743a686f766572207b0a09636f6c6f723a20236432643264323b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a096261636b67726f756e642d706f736974696f6e3a2030203630253b0a7d0a0a612e72696768742c20612e72696768743a6163746976652c20612e72696768743a76697369746564207b0a0970616464696e672d72696768743a20313270783b0a7d0a0a612e72696768743a686f766572207b0a09636f6c6f723a20236432643264323b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a096261636b67726f756e642d706f736974696f6e3a2031303025203630253b0a7d0a0a2f2a20696e76697369626c6520736b6970206c696e6b2c207573656420666f72206163636573736962696c69747920202a2f0a2e736b69706c696e6b207b0a09706f736974696f6e3a206162736f6c7574653b0a096c6566743a202d39393970783b0a0977696474683a2039393070783b0a7d0a0a2f2a20466565642069636f6e20696e20666f72756d6c6973745f626f64792e68746d6c202a2f0a612e666565642d69636f6e2d666f72756d207b0a09666c6f61743a2072696768743b0a096d617267696e3a203370783b0a7d0a2f2a20436f6e74656e74205374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a756c2e746f7069636c697374207b0a09646973706c61793a20626c6f636b3b0a096c6973742d7374796c652d747970653a206e6f6e653b0a096d617267696e3a20303b0a7d0a0a756c2e666f72756d73207b0a096261636b67726f756e643a2023663966396639206e6f6e65207265706561742d78203020303b0a7d0a0a756c2e746f7069636c697374206c69207b0a09646973706c61793a20626c6f636b3b0a096c6973742d7374796c652d747970653a206e6f6e653b0a09636f6c6f723a20233737373737373b0a096d617267696e3a20303b0a7d0a0a756c2e746f7069636c69737420646c207b0a09706f736974696f6e3a2072656c61746976653b0a7d0a0a756c2e746f7069636c697374206c692e726f7720646c207b0a0970616464696e673a2032707820303b0a7d0a0a756c2e746f7069636c697374206474207b0a09646973706c61793a20626c6f636b3b0a09666c6f61743a206c6566743b0a0977696474683a203530253b0a0970616464696e673a203570782035707820303b0a7d0a0a756c2e746f7069636c697374206464207b0a09646973706c61793a20626c6f636b3b0a09666c6f61743a206c6566743b0a09626f726465722d6c6566743a2031707820736f6c696420234646464646463b0a0970616464696e673a2034707820303b0a7d0a0a756c2e746f7069636c6973742064666e207b0a092f2a204c6162656c7320666f7220706f73742f7669657720636f756e7473202a2f0a09706f736974696f6e3a206162736f6c7574653b0a096c6566743a202d39393970783b0a0977696474683a2039393070783b0a7d0a0a756c2e746f7069636c697374206c692e726f7720647420612e737562666f72756d207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a096261636b67726f756e642d706f736974696f6e3a2030203530253b0a096261636b67726f756e642d7265706561743a206e6f2d7265706561743b0a09706f736974696f6e3a2072656c61746976653b0a0977686974652d73706163653a206e6f777261703b0a0970616464696e673a20302030203020313270783b0a7d0a0a2e666f72756d2d696d616765207b0a09666c6f61743a206c6566743b0a0970616464696e672d746f703a203570783b0a096d617267696e2d72696768743a203570783b0a7d0a0a6c692e726f77207b0a09626f726465722d746f703a2031707820736f6c696420234646464646463b0a09626f726465722d626f74746f6d3a2031707820736f6c696420233866386638663b0a7d0a0a6c692e726f77207374726f6e67207b0a09666f6e742d7765696768743a206e6f726d616c3b0a09636f6c6f723a20233030303030303b0a7d0a0a6c692e726f773a686f766572207b0a096261636b67726f756e642d636f6c6f723a20236636663666363b0a7d0a0a6c692e726f773a686f766572206464207b0a09626f726465722d6c6566742d636f6c6f723a20234343434343433b0a7d0a0a6c692e6865616465722064742c206c692e686561646572206464207b0a096c696e652d6865696768743a2031656d3b0a09626f726465722d6c6566742d77696474683a20303b0a096d617267696e3a2032707820302034707820303b0a09636f6c6f723a20234646464646463b0a0970616464696e672d746f703a203270783b0a0970616464696e672d626f74746f6d3a203270783b0a09666f6e742d66616d696c793a20417269616c2c2048656c7665746963612c2073616e732d73657269663b0a09746578742d7472616e73666f726d3a207570706572636173653b0a7d0a0a6c692e686561646572206474207b0a09666f6e742d7765696768743a20626f6c643b0a7d0a0a6c692e686561646572206464207b0a096d617267696e2d6c6566743a203170783b0a7d0a0a6c692e68656164657220646c2e69636f6e207b0a096d696e2d6865696768743a20303b0a7d0a0a6c692e68656164657220646c2e69636f6e206474207b0a092f2a20547765616b20666f72206865616465727320616c69676e6d656e74207768656e20666f6c6465722069636f6e2075736564202a2f0a0970616464696e672d6c6566743a20303b0a0970616464696e672d72696768743a20353070783b0a7d0a0a2f2a20466f72756d206c69737420636f6c756d6e207374796c6573202a2f0a646c2e69636f6e207b0a096d696e2d6865696768743a20333570783b0a096261636b67726f756e642d706f736974696f6e3a2031307078203530253b09092f2a20506f736974696f6e206f6620666f6c6465722069636f6e202a2f0a096261636b67726f756e642d7265706561743a206e6f2d7265706561743b0a7d0a0a646c2e69636f6e206474207b0a0970616464696e672d6c6566743a20343570783b09090909092f2a20537061636520666f7220666f6c6465722069636f6e202a2f0a096261636b67726f756e642d7265706561743a206e6f2d7265706561743b0a096261636b67726f756e642d706f736974696f6e3a20357078203935253b09092f2a20506f736974696f6e206f6620746f7069632069636f6e202a2f0a7d0a0a64642e706f7374732c2064642e746f706963732c2064642e7669657773207b0a0977696474683a2038253b0a09746578742d616c69676e3a2063656e7465723b0a7d0a0a2f2a204c69737420696e20666f72756d206465736372697074696f6e202a2f0a646c2e69636f6e206474206f6c2c0a646c2e69636f6e20647420756c207b0a096c6973742d7374796c652d706f736974696f6e3a20696e736964653b0a096d617267696e2d6c6566743a2031656d3b0a7d0a0a646c2e69636f6e206474206c69207b0a09646973706c61793a206c6973742d6974656d3b0a096c6973742d7374796c652d747970653a20696e68657269743b0a7d0a0a64642e6c617374706f7374207b0a0977696474683a203235253b0a7d0a0a64642e7265646972656374207b0a7d0a0a64642e6d6f6465726174696f6e207b0a7d0a0a64642e6c617374706f7374207370616e2c20756c2e746f7069636c6973742064642e7365617263686279207370616e2c20756c2e746f7069636c6973742064642e696e666f207370616e2c20756c2e746f7069636c6973742064642e74696d65207370616e2c2064642e7265646972656374207370616e2c2064642e6d6f6465726174696f6e207370616e207b0a09646973706c61793a20626c6f636b3b0a0970616464696e672d6c6566743a203570783b0a7d0a0a64642e74696d65207b0a0977696474683a206175746f3b0a096c696e652d6865696768743a20323030253b0a7d0a0a64642e6578747261207b0a0977696474683a203132253b0a096c696e652d6865696768743a20323030253b0a09746578742d616c69676e3a2063656e7465723b0a7d0a0a64642e6d61726b207b0a09666c6f61743a2072696768742021696d706f7274616e743b0a0977696474683a2039253b0a09746578742d616c69676e3a2063656e7465723b0a7d0a0a64642e696e666f207b0a0977696474683a203330253b0a7d0a0a64642e6f7074696f6e207b0a0977696474683a203135253b0a09746578742d616c69676e3a2063656e7465723b0a7d0a0a64642e7365617263686279207b0a0977696474683a203437253b0a7d0a0a756c2e746f7069636c6973742064642e7365617263686578747261207b0a096d617267696e2d6c6566743a203570783b0a0970616464696e673a20302e32656d20303b0a09636f6c6f723a20233333333333333b0a09626f726465722d6c6566743a206e6f6e653b0a09636c6561723a20626f74683b0a0977696474683a203938253b0a096f766572666c6f773a2068696464656e3b0a7d0a0a2f2a20436f6e7461696e657220666f7220706f73742f7265706c7920627574746f6e7320616e6420706167696e6174696f6e202a2f0a2e746f7069632d616374696f6e73207b0a096d617267696e2d626f74746f6d3a203370783b0a096865696768743a20323870783b0a096d696e2d6865696768743a20323870783b0a7d0a6469765b636c6173735d2e746f7069632d616374696f6e73207b0a096865696768743a206175746f3b0a7d0a0a2f2a20506f737420626f6479207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2e706f7374626f6479207b0a0970616464696e673a20303b0a09636f6c6f723a20233333333333333b0a0977696474683a203736253b0a09666c6f61743a206c6566743b0a09636c6561723a20626f74683b0a7d0a0a2e706f7374626f6479202e69676e6f7265207b0a7d0a0a2e706f7374626f64792068332e6669727374207b0a092f2a2054686520666972737420706f7374206f6e20746865207061676520757365732074686973202a2f0a7d0a0a2e706f7374626f6479206833207b0a092f2a20506f7374626f6479207265717569726573206120646966666572656e7420683320666f726d6174202d20736f206368616e67652069742068657265202a2f0a0970616464696e673a203270782030203020303b0a096d617267696e3a2030203020302e33656d20302021696d706f7274616e743b0a09746578742d7472616e73666f726d3a206e6f6e653b0a09626f726465723a206e6f6e653b0a09666f6e742d66616d696c793a2022547265627563686574204d53222c2056657264616e612c2048656c7665746963612c20417269616c2c2073616e732d73657269663b0a7d0a0a2e706f7374626f647920683320696d67207b0a092f2a20416c736f2073656520747765616b732e637373202a2f0a09766572746963616c2d616c69676e3a20626f74746f6d3b0a7d0a0a2e706f7374626f6479202e636f6e74656e74207b0a7d0a0a2e736561726368202e706f7374626f6479207b0a0977696474683a203638250a7d0a0a2f2a20546f706963207265766965772070616e656c0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a23726576696577207b0a096d617267696e2d746f703a2032656d3b0a7d0a0a23746f706963726576696577207b0a0970616464696e672d72696768743a203570783b0a096f766572666c6f773a206175746f3b0a096865696768743a2033303070783b0a7d0a0a23746f706963726576696577202e706f7374626f6479207b0a0977696474683a206175746f3b0a09666c6f61743a206e6f6e653b0a096d617267696e3a20303b0a096865696768743a206175746f3b0a7d0a0a23746f706963726576696577202e706f7374207b0a096865696768743a206175746f3b0a7d0a0a23746f706963726576696577206832207b0a09626f726465722d626f74746f6d2d77696474683a20303b0a7d0a0a2e706f73742d69676e6f7265202e706f7374626f6479207b0a09646973706c61793a206e6f6e653b0a7d0a0a2f2a204d435020506f73742064657461696c730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a23706f73745f64657461696c730a7b0a092f2a20546869732077696c6c206f6e6c7920776f726b20696e204945372b2c20706c757320746865206f7468657273202a2f0a096f766572666c6f773a206175746f3b0a096d61782d6865696768743a2033303070783b0a7d0a0a23657870616e640a7b0a09636c6561723a20626f74683b0a7d0a0a2f2a20436f6e74656e7420636f6e7461696e6572207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2e636f6e74656e74207b0a096d696e2d6865696768743a2033656d3b0a096f766572666c6f773a2068696464656e3b0a09666f6e742d66616d696c793a20417269616c2c2073616e732d73657269663b0a09636f6c6f723a20233333333333333b0a0970616464696e672d626f74746f6d3a203170783b0a7d0a0a2e636f6e74656e742068322c202e70616e656c206832207b0a09666f6e742d7765696768743a206e6f726d616c3b0a09636f6c6f723a20233938393839383b0a09626f726465722d626f74746f6d3a2031707820736f6c696420234343434343433b0a096d617267696e2d746f703a20302e35656d3b0a096d617267696e2d626f74746f6d3a20302e35656d3b0a0970616464696e672d626f74746f6d3a20302e35656d3b0a7d0a0a2e70616e656c206833207b0a096d617267696e3a20302e35656d20303b0a7d0a0a2e70616e656c2070207b0a096d617267696e2d626f74746f6d3a2031656d3b0a096c696e652d6865696768743a20312e34656d3b0a7d0a0a646c2e666171207b0a096d617267696e2d746f703a2031656d3b0a096d617267696e2d626f74746f6d3a2032656d3b0a7d0a0a646c2e666171206474207b0a09666f6e742d7765696768743a20626f6c643b0a09636f6c6f723a20233333333333333b0a7d0a0a2e636f6e74656e7420646c2e666171207b0a096d617267696e2d626f74746f6d3a20302e35656d3b0a7d0a0a2e636f6e74656e74206c69207b0a096c6973742d7374796c652d747970653a20696e68657269743b0a7d0a0a2e636f6e74656e7420756c2c202e636f6e74656e74206f6c207b0a096d617267696e2d626f74746f6d3a2031656d3b0a096d617267696e2d6c6566743a2033656d3b0a7d0a0a2e706f737468696c6974207b0a096261636b67726f756e642d636f6c6f723a20236633663366333b0a09636f6c6f723a20234243424342433b0a0970616464696e673a20302032707820317078203270783b0a7d0a0a2e616e6e6f756e63652c202e756e72656164706f7374207b0a092f2a20486967686c696768742074686520616e6e6f756e63656d656e7473202620756e7265616420706f73747320626f78202a2f0a09626f726465722d6c6566742d636f6c6f723a20234243424342433b0a09626f726465722d72696768742d636f6c6f723a20234243424342433b0a7d0a0a2f2a20506f737420617574686f72202a2f0a702e617574686f72207b0a096d617267696e3a2030203135656d20302e36656d20303b0a0970616464696e673a203020302035707820303b0a09666f6e742d66616d696c793a2056657264616e612c2048656c7665746963612c20417269616c2c2073616e732d73657269663b0a096c696e652d6865696768743a20312e32656d3b0a7d0a0a2f2a20506f7374207369676e6174757265202a2f0a2e7369676e6174757265207b0a096d617267696e2d746f703a20312e35656d3b0a0970616464696e672d746f703a20302e32656d3b0a09626f726465722d746f703a2031707820736f6c696420234343434343433b0a09636c6561723a206c6566743b0a096f766572666c6f773a2068696464656e3b0a0977696474683a20313030253b0a7d0a0a6464202e7369676e6174757265207b0a096d617267696e3a20303b0a0970616464696e673a20303b0a09636c6561723a206e6f6e653b0a09626f726465723a206e6f6e653b0a7d0a0a2e7369676e6174757265206c69207b0a096c6973742d7374796c652d747970653a20696e68657269743b0a7d0a0a2e7369676e617475726520756c2c202e7369676e6174757265206f6c207b0a096d617267696e2d626f74746f6d3a2031656d3b0a096d617267696e2d6c6566743a2033656d3b0a7d0a0a2f2a20506f7374206e6f746963696573202a2f0a2e6e6f74696365207b0a09666f6e742d66616d696c793a20224c7563696461204772616e6465222c2056657264616e612c2048656c7665746963612c20417269616c2c2073616e732d73657269663b0a0977696474683a206175746f3b0a096d617267696e2d746f703a20312e35656d3b0a0970616464696e672d746f703a20302e32656d3b0a09626f726465722d746f703a203170782064617368656420234343434343433b0a09636c6561723a206c6566743b0a7d0a0a2f2a204a756d7020746f20706f7374206c696e6b20666f72206e6f77202a2f0a756c2e736561726368726573756c7473207b0a096c6973742d7374796c653a206e6f6e653b0a09746578742d616c69676e3a2072696768743b0a09636c6561723a20626f74683b0a7d0a0a2f2a20424220436f6465207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2f2a2051756f746520626c6f636b202a2f0a626c6f636b71756f7465207b0a096261636b67726f756e643a2023656265626562206e6f6e652036707820387078206e6f2d7265706561743b0a09626f726465723a2031707820736f6c696420236462646264623b0a096d617267696e3a20302e35656d20317078203020323570783b0a096f766572666c6f773a2068696464656e3b0a0970616464696e673a203570783b0a7d0a0a626c6f636b71756f746520626c6f636b71756f7465207b0a092f2a204e65737465642071756f746573202a2f0a096261636b67726f756e642d636f6c6f723a20236261626162613b0a096d617267696e3a20302e35656d20317078203020313570783b090a7d0a0a626c6f636b71756f746520626c6f636b71756f746520626c6f636b71756f7465207b0a092f2a204e65737465642071756f746573202a2f0a096261636b67726f756e642d636f6c6f723a20236534653465343b0a7d0a0a626c6f636b71756f74652063697465207b0a092f2a20557365726e616d652f736f75726365206f662071756f746572202a2f0a09666f6e742d7374796c653a206e6f726d616c3b0a09666f6e742d7765696768743a20626f6c643b0a096d617267696e2d6c6566743a20323070783b0a09646973706c61793a20626c6f636b3b0a7d0a0a626c6f636b71756f746520636974652063697465207b0a7d0a0a626c6f636b71756f74652e756e6369746564207b0a0970616464696e672d746f703a20323570783b0a7d0a0a2f2a20436f646520626c6f636b202a2f0a646c2e636f6465626f78207b0a0970616464696e673a203370783b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a09626f726465723a2031707820736f6c696420236438643864383b0a7d0a0a646c2e636f6465626f78206474207b0a09746578742d7472616e73666f726d3a207570706572636173653b0a09626f726465722d626f74746f6d3a2031707820736f6c696420234343434343433b0a096d617267696e2d626f74746f6d3a203370783b0a09666f6e742d7765696768743a20626f6c643b0a09646973706c61793a20626c6f636b3b0a7d0a0a626c6f636b71756f746520646c2e636f6465626f78207b0a096d617267696e2d6c6566743a20303b0a7d0a0a646c2e636f6465626f7820636f6465207b0a092f2a20416c736f2073656520747765616b732e637373202a2f0a096f766572666c6f773a206175746f3b0a09646973706c61793a20626c6f636b3b0a096865696768743a206175746f3b0a096d61782d6865696768743a2032303070783b0a0977686974652d73706163653a206e6f726d616c3b0a0970616464696e672d746f703a203570783b0a09666f6e743a20302e39656d204d6f6e61636f2c2022416e64616c65204d6f6e6f222c22436f7572696572204e6577222c20436f75726965722c206d6f6e6f3b0a09636f6c6f723a20233862386238623b0a096d617267696e3a2032707820303b0a7d0a0a2e73796e746178626709097b20636f6c6f723a20234646464646463b207d0a2e73796e746178636f6d6d656e74097b20636f6c6f723a20233030303030303b207d0a2e73796e74617864656661756c74097b20636f6c6f723a20236263626362633b207d0a2e73796e74617868746d6c09097b20636f6c6f723a20233030303030303b207d0a2e73796e7461786b6579776f7264097b20636f6c6f723a20233538353835383b207d0a2e73796e746178737472696e67097b20636f6c6f723a20236137613761373b207d0a0a2f2a204174746163686d656e74730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2e617474616368626f78207b0a09666c6f61743a206c6566743b0a0977696474683a206175746f3b200a096d617267696e3a20357078203570782035707820303b0a0970616464696e673a203670783b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a09626f726465723a203170782064617368656420236438643864383b0a09636c6561723a206c6566743b0a7d0a0a2e706d2d6d657373616765202e617474616368626f78207b0a096261636b67726f756e642d636f6c6f723a20236633663366333b0a7d0a0a2e617474616368626f78206474207b0a09666f6e742d66616d696c793a20417269616c2c2048656c7665746963612c2073616e732d73657269663b0a09746578742d7472616e73666f726d3a207570706572636173653b0a7d0a0a2e617474616368626f78206464207b0a096d617267696e2d746f703a203470783b0a0970616464696e672d746f703a203470783b0a09636c6561723a206c6566743b0a09626f726465722d746f703a2031707820736f6c696420236438643864383b0a7d0a0a2e617474616368626f78206464206464207b0a09626f726465723a206e6f6e653b0a7d0a0a2e617474616368626f782070207b0a09636f6c6f723a20233636363636363b0a09666f6e742d7765696768743a206e6f726d616c3b0a09636c6561723a206c6566743b0a7d0a0a2e617474616368626f7820702e73746174730a7b0a096c696e652d6865696768743a20313130253b0a09636f6c6f723a20233636363636363b0a09666f6e742d7765696768743a206e6f726d616c3b0a09636c6561723a206c6566743b0a7d0a0a2e6174746163682d696d616765207b0a096d617267696e3a2033707820303b0a096d61782d6865696768743a2033353070783b0a096f766572666c6f773a206175746f3b0a7d0a0a2e6174746163682d696d61676520696d67207b0a09626f726465723a2031707820736f6c696420233939393939393b0a2f2a09637572736f723a206d6f76653b202a2f0a09637572736f723a2064656661756c743b0a7d0a0a2f2a20496e6c696e6520696d616765207468756d626e61696c73202a2f0a6469762e696e6c696e652d6174746163686d656e7420646c2e7468756d626e61696c2c206469762e696e6c696e652d6174746163686d656e7420646c2e66696c65207b0a09646973706c61793a20626c6f636b3b0a096d617267696e2d626f74746f6d3a203470783b0a7d0a0a6469762e696e6c696e652d6174746163686d656e742070207b0a7d0a0a646c2e66696c65207b0a09666f6e742d66616d696c793a2056657264616e612c20417269616c2c2048656c7665746963612c2073616e732d73657269663b0a09646973706c61793a20626c6f636b3b0a7d0a0a646c2e66696c65206474207b0a09746578742d7472616e73666f726d3a206e6f6e653b0a096d617267696e3a20303b0a0970616464696e673a20303b0a09666f6e742d7765696768743a20626f6c643b0a09666f6e742d66616d696c793a2056657264616e612c20417269616c2c2048656c7665746963612c2073616e732d73657269663b0a7d0a0a646c2e66696c65206464207b0a09636f6c6f723a20233636363636363b0a096d617267696e3a20303b0a0970616464696e673a20303b090a7d0a0a646c2e7468756d626e61696c20696d67207b0a0970616464696e673a203370783b0a09626f726465723a2031707820736f6c696420233636363636363b0a096261636b67726f756e642d636f6c6f723a20234646463b0a7d0a0a646c2e7468756d626e61696c206464207b0a09636f6c6f723a20233636363636363b0a09666f6e742d7374796c653a206974616c69633b0a09666f6e742d66616d696c793a2056657264616e612c20417269616c2c2048656c7665746963612c2073616e732d73657269663b0a7d0a0a2e617474616368626f7820646c2e7468756d626e61696c206464207b0a7d0a0a646c2e7468756d626e61696c20647420613a686f766572207b0a096261636b67726f756e642d636f6c6f723a20234545454545453b0a7d0a0a646c2e7468756d626e61696c20647420613a686f76657220696d67207b0a09626f726465723a2031707820736f6c696420236432643264323b0a7d0a0a2f2a20506f737420706f6c6c207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a6669656c647365742e706f6c6c73207b0a09666f6e742d66616d696c793a2022547265627563686574204d53222c2056657264616e612c2048656c7665746963612c20417269616c2c2073616e732d73657269663b0a7d0a0a6669656c647365742e706f6c6c7320646c207b0a096d617267696e2d746f703a203570783b0a09626f726465722d746f703a2031707820736f6c696420236532653265323b0a0970616464696e673a203570782030203020303b0a09636f6c6f723a20233636363636363b0a7d0a0a6669656c647365742e706f6c6c7320646c2e766f746564207b0a09666f6e742d7765696768743a20626f6c643b0a09636f6c6f723a20233030303030303b0a7d0a0a6669656c647365742e706f6c6c73206474207b0a09746578742d616c69676e3a206c6566743b0a09666c6f61743a206c6566743b0a09646973706c61793a20626c6f636b3b0a0977696474683a203330253b0a09626f726465722d72696768743a206e6f6e653b0a0970616464696e673a20303b0a096d617267696e3a20303b0a7d0a0a6669656c647365742e706f6c6c73206464207b0a09666c6f61743a206c6566743b0a0977696474683a203130253b0a09626f726465722d6c6566743a206e6f6e653b0a0970616464696e673a2030203570783b0a096d617267696e2d6c6566743a20303b0a7d0a0a6669656c647365742e706f6c6c732064642e726573756c74626172207b0a0977696474683a203530253b0a7d0a0a6669656c647365742e706f6c6c7320646420696e707574207b0a096d617267696e3a2032707820303b0a7d0a0a6669656c647365742e706f6c6c7320646420646976207b0a09746578742d616c69676e3a2072696768743b0a09666f6e742d66616d696c793a20417269616c2c2048656c7665746963612c2073616e732d73657269663b0a09636f6c6f723a20234646464646463b0a09666f6e742d7765696768743a20626f6c643b0a0970616464696e673a2030203270783b0a096f766572666c6f773a2076697369626c653b0a096d696e2d77696474683a2032253b0a7d0a0a2e706f6c6c62617231207b0a096261636b67726f756e642d636f6c6f723a20236161616161613b0a09626f726465722d626f74746f6d3a2031707820736f6c696420233734373437343b0a09626f726465722d72696768743a2031707820736f6c696420233734373437343b0a7d0a0a2e706f6c6c62617232207b0a096261636b67726f756e642d636f6c6f723a20236265626562653b0a09626f726465722d626f74746f6d3a2031707820736f6c696420233863386338633b0a09626f726465722d72696768743a2031707820736f6c696420233863386338633b0a7d0a0a2e706f6c6c62617233207b0a096261636b67726f756e642d636f6c6f723a20234431443144313b0a09626f726465722d626f74746f6d3a2031707820736f6c696420236161616161613b0a09626f726465722d72696768743a2031707820736f6c696420236161616161613b0a7d0a0a2e706f6c6c62617234207b0a096261636b67726f756e642d636f6c6f723a20236534653465343b0a09626f726465722d626f74746f6d3a2031707820736f6c696420236265626562653b0a09626f726465722d72696768743a2031707820736f6c696420236265626562653b0a7d0a0a2e706f6c6c62617235207b0a096261636b67726f756e642d636f6c6f723a20236638663866383b0a09626f726465722d626f74746f6d3a2031707820736f6c696420234431443144313b0a09626f726465722d72696768743a2031707820736f6c696420234431443144313b0a7d0a0a2f2a20506f737465722070726f66696c6520626c6f636b0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2e706f737470726f66696c65207b0a092f2a20416c736f2073656520747765616b732e637373202a2f0a096d617267696e3a203570782030203130707820303b0a096d696e2d6865696768743a20383070783b0a09636f6c6f723a20233636363636363b0a09626f726465722d6c6566743a2031707820736f6c696420234646464646463b0a0977696474683a203232253b0a09666c6f61743a2072696768743b0a09646973706c61793a20696e6c696e653b0a7d0a2e706d202e706f737470726f66696c65207b0a09626f726465722d6c6566743a2031707820736f6c696420234444444444443b0a7d0a0a2e706f737470726f66696c652064642c202e706f737470726f66696c65206474207b0a096d617267696e2d6c6566743a203870783b0a7d0a0a2e706f737470726f66696c65207374726f6e67207b0a09666f6e742d7765696768743a206e6f726d616c3b0a09636f6c6f723a20233030303030303b0a7d0a0a2e617661746172207b0a09626f726465723a206e6f6e653b0a096d617267696e2d626f74746f6d3a203370783b0a7d0a0a2e6f6e6c696e65207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a096261636b67726f756e642d706f736974696f6e3a203130302520303b0a096261636b67726f756e642d7265706561743a206e6f2d7265706561743b0a7d0a0a2f2a20506f737465722070726f66696c652075736564206279207365617263682a2f0a2e736561726368202e706f737470726f66696c65207b0a0977696474683a203330253b0a7d0a0a2f2a20706d206c69737420696e20636f6d706f7365206d657373616765206966206d61737320706d20697320656e61626c6564202a2f0a646c2e706d6c697374206474207b0a0977696474683a203630252021696d706f7274616e743b0a7d0a0a646c2e706d6c697374206474207465787461726561207b0a0977696474683a203935253b0a7d0a0a646c2e706d6c697374206464207b0a096d617267696e2d6c6566743a203631252021696d706f7274616e743b0a096d617267696e2d626f74746f6d3a203270783b0a7d0a3c3c3c3c3c3c3c20484541440a2f2a20427574746f6e205374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a2f2a20526f6c6c6f76657220627574746f6e730a2020204261736564206f6e3a20687474703a2f2f77656c6c7374796c65642e636f6d2f6373732d6e6f7072656c6f61642d726f6c6c6f766572732e68746d6c0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2e627574746f6e73207b0a09666c6f61743a206c6566743b0a0977696474683a206175746f3b0a096865696768743a206175746f3b0a7d0a0a2f2a20526f6c6c6f766572207374617465202a2f0a2e627574746f6e7320646976207b0a09666c6f61743a206c6566743b0a096d617267696e3a203020357078203020303b0a096261636b67726f756e642d706f736974696f6e3a203020313030253b0a7d0a0a2f2a20526f6c6c6f6666207374617465202a2f0a2e627574746f6e73206469762061207b0a09646973706c61793a20626c6f636b3b0a0977696474683a20313030253b0a096865696768743a20313030253b0a096261636b67726f756e642d706f736974696f6e3a203020303b0a09706f736974696f6e3a2072656c61746976653b0a096f766572666c6f773a2068696464656e3b0a7d0a0a2f2a2048696465203c613e207465787420616e642068696465206f66662d737461746520696d616765207768656e20726f6c6c696e67206f766572202870726576656e747320666c69636b657220696e20494529202a2f0a2f2a2e627574746f6e7320646976207370616e09097b20646973706c61793a206e6f6e653b207d2a2f0a2f2a2e627574746f6e732064697620613a686f766572097b206261636b67726f756e642d696d6167653a206e6f6e653b207d2a2f0a2e627574746f6e7320646976207370616e0909097b20706f736974696f6e3a206162736f6c7574653b2077696474683a20313030253b206865696768743a20313030253b20637572736f723a20706f696e7465723b7d0a2e627574746f6e732064697620613a686f766572207370616e097b206261636b67726f756e642d706f736974696f6e3a203020313030253b207d0a0a2f2a2042696720627574746f6e20696d61676573202a2f0a2e7265706c792d69636f6e207370616e097b206261636b67726f756e643a207472616e73706172656e74206e6f6e6520302030206e6f2d7265706561743b207d0a2e706f73742d69636f6e207370616e09097b206261636b67726f756e643a207472616e73706172656e74206e6f6e6520302030206e6f2d7265706561743b207d0a2e6c6f636b65642d69636f6e207370616e097b206261636b67726f756e643a207472616e73706172656e74206e6f6e6520302030206e6f2d7265706561743b207d0a2e706d7265706c792d69636f6e207370616e097b206261636b67726f756e643a206e6f6e6520302030206e6f2d7265706561743b207d0a2e6e6577706d2d69636f6e207370616e20097b206261636b67726f756e643a206e6f6e6520302030206e6f2d7265706561743b207d0a2e666f7277617264706d2d69636f6e207370616e20097b206261636b67726f756e643a206e6f6e6520302030206e6f2d7265706561743b207d0a0a2f2a205365742062696720627574746f6e2064696d656e73696f6e73202a2f0a2e627574746f6e73206469762e7265706c792d69636f6e09097b2077696474683a207b494d475f425554544f4e5f544f5049435f5245504c595f57494454487d70783b206865696768743a207b494d475f425554544f4e5f544f5049435f5245504c595f4845494748547d70783b207d0a2e627574746f6e73206469762e706f73742d69636f6e09097b2077696474683a207b494d475f425554544f4e5f544f5049435f4e45575f57494454487d70783b206865696768743a207b494d475f425554544f4e5f544f5049435f4e45575f4845494748547d70783b207d0a2e627574746f6e73206469762e6c6f636b65642d69636f6e097b2077696474683a207b494d475f425554544f4e5f544f5049435f4c4f434b45445f57494454487d70783b206865696768743a207b494d475f425554544f4e5f544f5049435f4c4f434b45445f4845494748547d70783b207d0a2e627574746f6e73206469762e706d7265706c792d69636f6e097b2077696474683a207b494d475f425554544f4e5f504d5f5245504c595f57494454487d70783b206865696768743a207b494d475f425554544f4e5f504d5f5245504c595f4845494748547d70783b207d0a2e627574746f6e73206469762e6e6577706d2d69636f6e09097b2077696474683a207b494d475f425554544f4e5f504d5f4e45575f57494454487d70783b206865696768743a207b494d475f425554544f4e5f504d5f4e45575f4845494748547d70783b207d0a2e627574746f6e73206469762e666f7277617264706d2d69636f6e097b2077696474683a207b494d475f425554544f4e5f504d5f464f52574152445f57494454487d70783b206865696768743a207b494d475f425554544f4e5f504d5f464f52574152445f4845494748547d70783b207d0a0a2f2a205375622d68656164657220286e617669676174696f6e20626172290a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a612e7072696e742c20612e73656e64656d61696c2c20612e666f6e7473697a65207b0a09646973706c61793a20626c6f636b3b0a096f766572666c6f773a2068696464656e3b0a096865696768743a20313870783b0a09746578742d696e64656e743a202d3530303070783b0a09746578742d616c69676e3a206c6566743b0a096261636b67726f756e642d7265706561743a206e6f2d7265706561743b0a7d0a0a612e7072696e74207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a0977696474683a20323270783b0a7d0a0a612e73656e64656d61696c207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a0977696474683a20323270783b0a7d0a0a612e666f6e7473697a65207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a096261636b67726f756e642d706f736974696f6e3a2030202d3170783b0a0977696474683a20323970783b0a7d0a0a612e666f6e7473697a653a686f766572207b0a096261636b67726f756e642d706f736974696f6e3a2030202d323070783b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a2f2a2049636f6e20696d616765730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a2e73697465686f6d652c202e69636f6e2d6661712c202e69636f6e2d6d656d626572732c202e69636f6e2d686f6d652c202e69636f6e2d7563702c202e69636f6e2d72656769737465722c202e69636f6e2d6c6f676f75742c0a2e69636f6e2d626f6f6b6d61726b2c202e69636f6e2d62756d702c202e69636f6e2d7375627363726962652c202e69636f6e2d756e7375627363726962652c202e69636f6e2d70616765732c202e69636f6e2d736561726368207b0a096261636b67726f756e642d706f736974696f6e3a2030203530253b0a096261636b67726f756e642d7265706561743a206e6f2d7265706561743b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a0970616464696e673a203170782030203020313770783b0a7d0a0a2f2a20506f737465722070726f66696c652069636f6e730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a756c2e70726f66696c652d69636f6e73207b0a0970616464696e672d746f703a20313070783b0a096c6973742d7374796c653a206e6f6e653b0a7d0a0a2f2a20526f6c6c6f766572207374617465202a2f0a756c2e70726f66696c652d69636f6e73206c69207b0a09666c6f61743a206c6566743b0a096d617267696e3a2030203670782033707820303b0a096261636b67726f756e642d706f736974696f6e3a203020313030253b0a7d0a0a2f2a20526f6c6c6f6666207374617465202a2f0a756c2e70726f66696c652d69636f6e73206c692061207b0a09646973706c61793a20626c6f636b3b0a0977696474683a20313030253b0a096865696768743a20313030253b0a096261636b67726f756e642d706f736974696f6e3a203020303b0a7d0a0a2f2a2048696465203c613e207465787420616e642068696465206f66662d737461746520696d616765207768656e20726f6c6c696e67206f766572202870726576656e747320666c69636b657220696e20494529202a2f0a756c2e70726f66696c652d69636f6e73206c69207370616e207b20646973706c61793a6e6f6e653b207d0a756c2e70726f66696c652d69636f6e73206c6920613a686f766572207b206261636b67726f756e643a206e6f6e653b207d0a0a2f2a20506f736974696f6e696e67206f66206d6f64657261746f722069636f6e73202a2f0a2e706f7374626f647920756c2e70726f66696c652d69636f6e73207b0a09666c6f61743a2072696768743b0a0977696474683a206175746f3b0a0970616464696e673a20303b0a7d0a0a2e706f7374626f647920756c2e70726f66696c652d69636f6e73206c69207b0a096d617267696e3a2030203370783b0a7d0a0a2f2a2050726f66696c652026206e617669676174696f6e2069636f6e73202a2f0a2e656d61696c2d69636f6e2c202e656d61696c2d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e61696d2d69636f6e2c202e61696d2d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e7961686f6f2d69636f6e2c202e7961686f6f2d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e7765622d69636f6e2c202e7765622d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e6d736e6d2d69636f6e2c202e6d736e6d2d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e6963712d69636f6e2c202e6963712d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e6a61626265722d69636f6e2c202e6a61626265722d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e706d2d69636f6e2c202e706d2d69636f6e2061090909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e71756f74652d69636f6e2c202e71756f74652d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a0a2f2a204d6f64657261746f722069636f6e73202a2f0a2e7265706f72742d69636f6e2c202e7265706f72742d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e7761726e2d69636f6e2c202e7761726e2d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e656469742d69636f6e2c202e656469742d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e64656c6574652d69636f6e2c202e64656c6574652d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e696e666f2d69636f6e2c202e696e666f2d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a0a2f2a205365742070726f66696c652069636f6e2064696d656e73696f6e73202a2f0a756c2e70726f66696c652d69636f6e73206c692e656d61696c2d69636f6e09097b2077696474683a207b494d475f49434f4e5f434f4e544143545f454d41494c5f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f454d41494c5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e61696d2d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f41494d5f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f41494d5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e7961686f6f2d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f5941484f4f5f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f5941484f4f5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e7765622d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f5757575f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f5757575f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e6d736e6d2d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f4d534e4d5f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f4d534e4d5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e6963712d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f4943515f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f4943515f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e6a61626265722d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f4a41424245525f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f4a41424245525f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e706d2d69636f6e09097b2077696474683a207b494d475f49434f4e5f434f4e544143545f504d5f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f504d5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e71756f74652d69636f6e097b2077696474683a207b494d475f49434f4e5f504f53545f51554f54455f57494454487d70783b206865696768743a207b494d475f49434f4e5f504f53545f51554f54455f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e7265706f72742d69636f6e097b2077696474683a207b494d475f49434f4e5f504f53545f5245504f52545f57494454487d70783b206865696768743a207b494d475f49434f4e5f504f53545f5245504f52545f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e656469742d69636f6e097b2077696474683a207b494d475f49434f4e5f504f53545f454449545f57494454487d70783b206865696768743a207b494d475f49434f4e5f504f53545f454449545f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e64656c6574652d69636f6e097b2077696474683a207b494d475f49434f4e5f504f53545f44454c4554455f57494454487d70783b206865696768743a207b494d475f49434f4e5f504f53545f44454c4554455f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e696e666f2d69636f6e097b2077696474683a207b494d475f49434f4e5f504f53545f494e464f5f57494454487d70783b206865696768743a207b494d475f49434f4e5f504f53545f494e464f5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e7761726e2d69636f6e097b2077696474683a207b494d475f49434f4e5f555345525f5741524e5f57494454487d70783b206865696768743a207b494d475f49434f4e5f555345525f5741524e5f4845494748547d70783b207d0a0a2f2a204669782070726f66696c652069636f6e2064656661756c74206d617267696e73202a2f0a756c2e70726f66696c652d69636f6e73206c692e656469742d69636f6e097b206d617267696e3a203020302030203370783b207d0a756c2e70726f66696c652d69636f6e73206c692e71756f74652d69636f6e097b206d617267696e3a20302030203020313070783b207d0a756c2e70726f66696c652d69636f6e73206c692e696e666f2d69636f6e2c20756c2e70726f66696c652d69636f6e73206c692e7265706f72742d69636f6e097b206d617267696e3a203020337078203020303b207d0a0a3d3d3d3d3d3d3d0a2f2a20427574746f6e205374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a2f2a20526f6c6c6f76657220627574746f6e730a2020204261736564206f6e3a20687474703a2f2f77656c6c7374796c65642e636f6d2f6373732d6e6f7072656c6f61642d726f6c6c6f766572732e68746d6c0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2e627574746f6e73207b0a09666c6f61743a206c6566743b0a0977696474683a206175746f3b0a096865696768743a206175746f3b0a7d0a0a2f2a20526f6c6c6f766572207374617465202a2f0a2e627574746f6e7320646976207b0a09666c6f61743a206c6566743b0a096d617267696e3a203020357078203020303b0a096261636b67726f756e642d706f736974696f6e3a203020313030253b0a7d0a0a2f2a20526f6c6c6f6666207374617465202a2f0a2e627574746f6e73206469762061207b0a09646973706c61793a20626c6f636b3b0a0977696474683a20313030253b0a096865696768743a20313030253b0a096261636b67726f756e642d706f736974696f6e3a203020303b0a09706f736974696f6e3a2072656c61746976653b0a096f766572666c6f773a2068696464656e3b0a7d0a0a2f2a2048696465203c613e207465787420616e642068696465206f66662d737461746520696d616765207768656e20726f6c6c696e67206f766572202870726576656e747320666c69636b657220696e20494529202a2f0a2f2a2e627574746f6e7320646976207370616e09097b20646973706c61793a206e6f6e653b207d2a2f0a2f2a2e627574746f6e732064697620613a686f766572097b206261636b67726f756e642d696d6167653a206e6f6e653b207d2a2f0a2e627574746f6e7320646976207370616e0909097b20706f736974696f6e3a206162736f6c7574653b2077696474683a20313030253b206865696768743a20313030253b20637572736f723a20706f696e7465723b7d0a2e627574746f6e732064697620613a686f766572207370616e097b206261636b67726f756e642d706f736974696f6e3a203020313030253b207d0a0a2f2a2042696720627574746f6e20696d61676573202a2f0a2e7265706c792d69636f6e207370616e097b206261636b67726f756e643a207472616e73706172656e74206e6f6e6520302030206e6f2d7265706561743b207d0a2e706f73742d69636f6e207370616e09097b206261636b67726f756e643a207472616e73706172656e74206e6f6e6520302030206e6f2d7265706561743b207d0a2e6c6f636b65642d69636f6e207370616e097b206261636b67726f756e643a207472616e73706172656e74206e6f6e6520302030206e6f2d7265706561743b207d0a2e706d7265706c792d69636f6e207370616e097b206261636b67726f756e643a206e6f6e6520302030206e6f2d7265706561743b207d0a2e6e6577706d2d69636f6e207370616e20097b206261636b67726f756e643a206e6f6e6520302030206e6f2d7265706561743b207d0a2e666f7277617264706d2d69636f6e207370616e20097b206261636b67726f756e643a206e6f6e6520302030206e6f2d7265706561743b207d0a0a2f2a205365742062696720627574746f6e2064696d656e73696f6e73202a2f0a2e627574746f6e73206469762e7265706c792d69636f6e09097b2077696474683a207b494d475f425554544f4e5f544f5049435f5245504c595f57494454487d70783b206865696768743a207b494d475f425554544f4e5f544f5049435f5245504c595f4845494748547d70783b207d0a2e627574746f6e73206469762e706f73742d69636f6e09097b2077696474683a207b494d475f425554544f4e5f544f5049435f4e45575f57494454487d70783b206865696768743a207b494d475f425554544f4e5f544f5049435f4e45575f4845494748547d70783b207d0a2e627574746f6e73206469762e6c6f636b65642d69636f6e097b2077696474683a207b494d475f425554544f4e5f544f5049435f4c4f434b45445f57494454487d70783b206865696768743a207b494d475f425554544f4e5f544f5049435f4c4f434b45445f4845494748547d70783b207d0a2e627574746f6e73206469762e706d7265706c792d69636f6e097b2077696474683a207b494d475f425554544f4e5f504d5f5245504c595f57494454487d70783b206865696768743a207b494d475f425554544f4e5f504d5f5245504c595f4845494748547d70783b207d0a2e627574746f6e73206469762e6e6577706d2d69636f6e09097b2077696474683a207b494d475f425554544f4e5f504d5f4e45575f57494454487d70783b206865696768743a207b494d475f425554544f4e5f504d5f4e45575f4845494748547d70783b207d0a2e627574746f6e73206469762e666f7277617264706d2d69636f6e097b2077696474683a207b494d475f425554544f4e5f504d5f464f52574152445f57494454487d70783b206865696768743a207b494d475f425554544f4e5f504d5f464f52574152445f4845494748547d70783b207d0a0a2f2a205375622d68656164657220286e617669676174696f6e20626172290a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a612e7072696e742c20612e73656e64656d61696c2c20612e666f6e7473697a65207b0a09646973706c61793a20626c6f636b3b0a096f766572666c6f773a2068696464656e3b0a096865696768743a20313870783b0a09746578742d696e64656e743a202d3530303070783b0a09746578742d616c69676e3a206c6566743b0a096261636b67726f756e642d7265706561743a206e6f2d7265706561743b0a7d0a0a612e7072696e74207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a0977696474683a20323270783b0a7d0a0a612e73656e64656d61696c207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a0977696474683a20323270783b0a7d0a0a612e666f6e7473697a65207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a096261636b67726f756e642d706f736974696f6e3a2030202d3170783b0a0977696474683a20323970783b0a7d0a0a612e666f6e7473697a653a686f766572207b0a096261636b67726f756e642d706f736974696f6e3a2030202d323070783b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a2f2a2049636f6e20696d616765730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a2e73697465686f6d652c202e69636f6e2d6661712c202e69636f6e2d6d656d626572732c202e69636f6e2d686f6d652c202e69636f6e2d7563702c202e69636f6e2d72656769737465722c202e69636f6e2d6c6f676f75742c0a2e69636f6e2d626f6f6b6d61726b2c202e69636f6e2d62756d702c202e69636f6e2d7375627363726962652c202e69636f6e2d756e7375627363726962652c202e69636f6e2d70616765732c202e69636f6e2d736561726368207b0a096261636b67726f756e642d706f736974696f6e3a2030203530253b0a096261636b67726f756e642d7265706561743a206e6f2d7265706561743b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a0970616464696e673a203170782030203020313770783b0a7d0a0a2f2a20506f737465722070726f66696c652069636f6e730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a756c2e70726f66696c652d69636f6e73207b0a0970616464696e672d746f703a20313070783b0a096c6973742d7374796c653a206e6f6e653b0a7d0a0a2f2a20526f6c6c6f766572207374617465202a2f0a756c2e70726f66696c652d69636f6e73206c69207b0a09666c6f61743a206c6566743b0a096d617267696e3a2030203670782033707820303b0a096261636b67726f756e642d706f736974696f6e3a203020313030253b0a7d0a0a2f2a20526f6c6c6f6666207374617465202a2f0a756c2e70726f66696c652d69636f6e73206c692061207b0a09646973706c61793a20626c6f636b3b0a0977696474683a20313030253b0a096865696768743a20313030253b0a096261636b67726f756e642d706f736974696f6e3a203020303b0a7d0a0a2f2a2048696465203c613e207465787420616e642068696465206f66662d737461746520696d616765207768656e20726f6c6c696e67206f766572202870726576656e747320666c69636b657220696e20494529202a2f0a756c2e70726f66696c652d69636f6e73206c69207370616e207b20646973706c61793a6e6f6e653b207d0a756c2e70726f66696c652d69636f6e73206c6920613a686f766572207b206261636b67726f756e643a206e6f6e653b207d0a0a2f2a20506f736974696f6e696e67206f66206d6f64657261746f722069636f6e73202a2f0a2e706f7374626f647920756c2e70726f66696c652d69636f6e73207b0a09666c6f61743a2072696768743b0a0977696474683a206175746f3b0a0970616464696e673a20303b0a7d0a0a2e706f7374626f647920756c2e70726f66696c652d69636f6e73206c69207b0a096d617267696e3a2030203370783b0a7d0a0a2f2a2050726f66696c652026206e617669676174696f6e2069636f6e73202a2f0a2e656d61696c2d69636f6e2c202e656d61696c2d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e61696d2d69636f6e2c202e61696d2d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e7961686f6f2d69636f6e2c202e7961686f6f2d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e7765622d69636f6e2c202e7765622d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e6d736e6d2d69636f6e2c202e6d736e6d2d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e6963712d69636f6e2c202e6963712d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e6a61626265722d69636f6e2c202e6a61626265722d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e706d2d69636f6e2c202e706d2d69636f6e2061090909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e71756f74652d69636f6e2c202e71756f74652d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a0a2f2a204d6f64657261746f722069636f6e73202a2f0a2e7265706f72742d69636f6e2c202e7265706f72742d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e7761726e2d69636f6e2c202e7761726e2d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e656469742d69636f6e2c202e656469742d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e64656c6574652d69636f6e2c202e64656c6574652d69636f6e206109097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a2e696e666f2d69636f6e2c202e696e666f2d69636f6e20610909097b206261636b67726f756e643a206e6f6e6520746f70206c656674206e6f2d7265706561743b207d0a0a2f2a205365742070726f66696c652069636f6e2064696d656e73696f6e73202a2f0a756c2e70726f66696c652d69636f6e73206c692e656d61696c2d69636f6e09097b2077696474683a207b494d475f49434f4e5f434f4e544143545f454d41494c5f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f454d41494c5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e61696d2d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f41494d5f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f41494d5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e7961686f6f2d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f5941484f4f5f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f5941484f4f5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e7765622d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f5757575f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f5757575f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e6d736e6d2d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f4d534e4d5f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f4d534e4d5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e6963712d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f4943515f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f4943515f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e6a61626265722d69636f6e097b2077696474683a207b494d475f49434f4e5f434f4e544143545f4a41424245525f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f4a41424245525f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e706d2d69636f6e09097b2077696474683a207b494d475f49434f4e5f434f4e544143545f504d5f57494454487d70783b206865696768743a207b494d475f49434f4e5f434f4e544143545f504d5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e71756f74652d69636f6e097b2077696474683a207b494d475f49434f4e5f504f53545f51554f54455f57494454487d70783b206865696768743a207b494d475f49434f4e5f504f53545f51554f54455f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e7265706f72742d69636f6e097b2077696474683a207b494d475f49434f4e5f504f53545f5245504f52545f57494454487d70783b206865696768743a207b494d475f49434f4e5f504f53545f5245504f52545f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e656469742d69636f6e097b2077696474683a207b494d475f49434f4e5f504f53545f454449545f57494454487d70783b206865696768743a207b494d475f49434f4e5f504f53545f454449545f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e64656c6574652d69636f6e097b2077696474683a207b494d475f49434f4e5f504f53545f44454c4554455f57494454487d70783b206865696768743a207b494d475f49434f4e5f504f53545f44454c4554455f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e696e666f2d69636f6e097b2077696474683a207b494d475f49434f4e5f504f53545f494e464f5f57494454487d70783b206865696768743a207b494d475f49434f4e5f504f53545f494e464f5f4845494748547d70783b207d0a756c2e70726f66696c652d69636f6e73206c692e7761726e2d69636f6e097b2077696474683a207b494d475f49434f4e5f555345525f5741524e5f57494454487d70783b206865696768743a207b494d475f49434f4e5f555345525f5741524e5f4845494748547d70783b207d0a0a2f2a204669782070726f66696c652069636f6e2064656661756c74206d617267696e73202a2f0a756c2e70726f66696c652d69636f6e73206c692e656469742d69636f6e097b206d617267696e3a203020302030203370783b207d0a756c2e70726f66696c652d69636f6e73206c692e71756f74652d69636f6e097b206d617267696e3a20302030203020313070783b207d0a756c2e70726f66696c652d69636f6e73206c692e696e666f2d69636f6e2c20756c2e70726f66696c652d69636f6e73206c692e7265706f72742d69636f6e097b206d617267696e3a203020337078203020303b207d0a0a3e3e3e3e3e3e3e20726566732f72656d6f7465732f6f726967696e2f6d61737465720a2f2a20436f6e74726f6c2050616e656c205374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a0a2f2a204d61696e20435020626f780a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2363702d6d656e75207b0a09666c6f61743a6c6566743b0a0977696474683a203139253b0a096d617267696e2d746f703a2031656d3b0a096d617267696e2d626f74746f6d3a203570783b0a7d0a0a2363702d6d61696e207b0a09666c6f61743a206c6566743b0a0977696474683a203831253b0a7d0a0a2363702d6d61696e202e636f6e74656e74207b0a0970616464696e673a20303b0a7d0a0a2363702d6d61696e2068332c202363702d6d61696e2068722c202363702d6d656e75206872207b0a09626f726465722d636f6c6f723a20236266626662663b0a7d0a0a2363702d6d61696e202e70616e656c2070207b0a7d0a0a2363702d6d61696e202e70616e656c206f6c207b0a096d617267696e2d6c6566743a2032656d3b0a7d0a0a2363702d6d61696e202e70616e656c206c692e726f77207b0a09626f726465722d626f74746f6d3a2031707820736f6c696420236362636263623b0a09626f726465722d746f703a2031707820736f6c696420234639463946393b0a7d0a0a756c2e63706c697374207b0a096d617267696e2d626f74746f6d3a203570783b0a09626f726465722d746f703a2031707820736f6c696420236362636263623b0a7d0a0a2363702d6d61696e202e70616e656c206c692e6865616465722064642c202363702d6d61696e202e70616e656c206c692e686561646572206474207b0a09636f6c6f723a20233030303030303b0a096d617267696e2d626f74746f6d3a203270783b0a7d0a0a2363702d6d61696e207461626c652e7461626c6531207b0a096d617267696e2d626f74746f6d3a2031656d3b0a7d0a0a2363702d6d61696e207461626c652e7461626c6531207468656164207468207b0a09636f6c6f723a20233333333333333b0a09666f6e742d7765696768743a20626f6c643b0a09626f726465722d626f74746f6d3a2031707820736f6c696420233333333333333b0a0970616464696e673a203570783b0a7d0a0a2363702d6d61696e207461626c652e7461626c65312074626f6479207468207b0a09666f6e742d7374796c653a206974616c69633b0a096261636b67726f756e642d636f6c6f723a207472616e73706172656e742021696d706f7274616e743b0a09626f726465722d626f74746f6d3a206e6f6e653b0a7d0a0a2363702d6d61696e202e706167696e6174696f6e207b0a09666c6f61743a2072696768743b0a0977696474683a206175746f3b0a0970616464696e672d746f703a203170783b0a7d0a0a2363702d6d61696e202e706f7374626f64792070207b0a7d0a0a2363702d6d61696e202e706d2d6d657373616765207b0a09626f726465723a2031707820736f6c696420236532653265323b0a096d617267696e3a203130707820303b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a0977696474683a206175746f3b0a09666c6f61743a206e6f6e653b0a7d0a0a2e706d2d6d657373616765206832207b0a0970616464696e672d626f74746f6d3a203570783b0a7d0a0a2363702d6d61696e202e706f7374626f64792068332c202363702d6d61696e202e626f7832206833207b0a096d617267696e2d746f703a20303b0a7d0a0a2363702d6d61696e202e627574746f6e73207b0a096d617267696e2d6c6566743a20303b0a7d0a0a2363702d6d61696e20756c2e6c696e6b6c697374207b0a096d617267696e3a20303b0a7d0a0a2f2a204d435020537065636966696320747765616b73202a2f0a2e6d63702d6d61696e202e706f7374626f6479207b0a0977696474683a20313030253b0a7d0a0a2e746162732d636f6e7461696e6572206832207b0a09666c6f61743a206c6566743b0a096d617267696e2d626f74746f6d3a203070783b0a7d0a0a2e746162732d636f6e7461696e657220236d696e6974616273207b0a09666c6f61743a2072696768743b0a096d617267696e2d746f703a20313970783b0a7d0a0a2e746162732d636f6e7461696e65723a6166746572207b0a09646973706c61793a20626c6f636b3b0a09636c6561723a20626f74683b0a09636f6e74656e743a2027273b0a7d0a0a2f2a20435020746162626564206d656e750a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2374616273207b0a096d617267696e3a20323070782030202d317078203770783b0a096d696e2d77696474683a2035373070783b0a7d0a0a237461627320756c207b0a096d617267696e3a303b0a0970616464696e673a20303b0a096c6973742d7374796c653a206e6f6e653b0a7d0a0a2374616273206c69207b0a09646973706c61793a20696e6c696e653b0a096d617267696e3a20303b0a0970616464696e673a20303b0a09666f6e742d7765696768743a20626f6c643b0a7d0a0a23746162732061207b0a09666c6f61743a206c6566743b0a096261636b67726f756e643a206e6f6e65206e6f2d726570656174203025202d333570783b0a096d617267696e3a203020317078203020303b0a0970616464696e673a203020302030203570783b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a09706f736974696f6e3a2072656c61746976653b0a09637572736f723a20706f696e7465723b0a7d0a0a23746162732061207370616e207b0a09666c6f61743a206c6566743b0a09646973706c61793a20626c6f636b3b0a096261636b67726f756e643a206e6f6e65206e6f2d7265706561742031303025202d333570783b0a0970616464696e673a20367078203130707820367078203570783b0a09636f6c6f723a20233832383238323b0a0977686974652d73706163653a206e6f777261703b0a7d0a0a237461627320613a686f766572207370616e207b0a09636f6c6f723a20236263626362633b0a7d0a0a2374616273202e6163746976657461622061207b0a096261636b67726f756e642d706f736974696f6e3a203020303b0a09626f726465722d626f74746f6d3a2031707820736f6c696420236562656265623b0a7d0a0a2374616273202e6163746976657461622061207370616e207b0a096261636b67726f756e642d706f736974696f6e3a203130302520303b0a0970616464696e672d626f74746f6d3a203770783b0a09636f6c6f723a20233333333333333b0a7d0a0a237461627320613a686f766572207b0a096261636b67726f756e642d706f736974696f6e3a2030202d373070783b0a7d0a0a237461627320613a686f766572207370616e207b0a096261636b67726f756e642d706f736974696f6e3a31303025202d373070783b0a7d0a0a2374616273202e61637469766574616220613a686f766572207b0a096261636b67726f756e642d706f736974696f6e3a203020303b0a7d0a0a2374616273202e61637469766574616220613a686f766572207370616e207b0a09636f6c6f723a20233030303030303b0a096261636b67726f756e642d706f736974696f6e3a203130302520303b0a7d0a0a2f2a204d696e6920746162626564206d656e75207573656420696e204d43500a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a236d696e6974616273207b0a096c696e652d6865696768743a206e6f726d616c3b0a096d617267696e3a202d3230707820377078203020303b0a7d0a0a236d696e697461627320756c207b0a096d617267696e3a303b0a0970616464696e673a20303b0a096c6973742d7374796c653a206e6f6e653b0a7d0a0a236d696e6974616273206c69207b0a09646973706c61793a20626c6f636b3b0a09666c6f61743a2072696768743b0a0970616464696e673a203020313070782034707820313070783b0a09666f6e742d7765696768743a20626f6c643b0a096261636b67726f756e642d636f6c6f723a20236632663266323b0a096d617267696e2d6c6566743a203270783b0a7d0a0a236d696e69746162732061207b0a7d0a0a236d696e697461627320613a686f766572207b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a7d0a0a236d696e6974616273206c692e616374697665746162207b0a096261636b67726f756e642d636f6c6f723a20234639463946393b0a7d0a0a236d696e6974616273206c692e61637469766574616220612c20236d696e6974616273206c692e61637469766574616220613a686f766572207b0a09636f6c6f723a20233333333333333b0a7d0a0a2f2a20554350206e617669676174696f6e206d656e750a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2f2a20436f6e7461696e657220666f72207375622d6e617669676174696f6e206c697374202a2f0a236e617669676174696f6e207b0a0977696474683a20313030253b0a0970616464696e672d746f703a20333670783b0a7d0a0a236e617669676174696f6e20756c207b0a096c6973742d7374796c653a6e6f6e653b0a7d0a0a2f2a2044656661756c74206c697374207374617465202a2f0a236e617669676174696f6e206c69207b0a096d617267696e3a2031707820303b0a0970616464696e673a20303b0a09666f6e742d7765696768743a20626f6c643b0a09646973706c61793a20696e6c696e653b0a7d0a0a2f2a204c696e6b207374796c657320666f7220746865207375622d73656374696f6e206c696e6b73202a2f0a236e617669676174696f6e2061207b0a09646973706c61793a20626c6f636b3b0a0970616464696e673a203570783b0a096d617267696e3a2031707820303b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a09666f6e742d7765696768743a20626f6c643b0a09636f6c6f723a20233333333b0a096261636b67726f756e643a2023636663666366206e6f6e65207265706561742d79203130302520303b0a7d0a0a236e617669676174696f6e20613a686f766572207b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a096261636b67726f756e642d636f6c6f723a20236336633663363b0a09636f6c6f723a20236263626362633b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a236e617669676174696f6e20236163746976652d73756273656374696f6e2061207b0a09646973706c61793a20626c6f636b3b0a09636f6c6f723a20236433643364333b0a096261636b67726f756e642d636f6c6f723a20234639463946393b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a236e617669676174696f6e20236163746976652d73756273656374696f6e20613a686f766572207b0a09636f6c6f723a20236433643364333b0a7d0a0a2f2a20507265666572656e6365732070616e65206c61796f75740a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2363702d6d61696e206832207b0a09626f726465722d626f74746f6d3a206e6f6e653b0a0970616464696e673a20303b0a096d617267696e2d6c6566743a20313070783b0a09636f6c6f723a20233333333333333b0a7d0a0a2363702d6d61696e202e70616e656c207b0a096261636b67726f756e642d636f6c6f723a20234639463946393b0a7d0a0a2363702d6d61696e202e706d207b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a7d0a0a2363702d6d61696e207370616e2e636f726e6572732d746f702c202363702d6d656e75207370616e2e636f726e6572732d746f70207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a2363702d6d61696e207370616e2e636f726e6572732d746f70207370616e2c202363702d6d656e75207370616e2e636f726e6572732d746f70207370616e207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a2363702d6d61696e207370616e2e636f726e6572732d626f74746f6d2c202363702d6d656e75207370616e2e636f726e6572732d626f74746f6d207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a2363702d6d61696e207370616e2e636f726e6572732d626f74746f6d207370616e2c202363702d6d656e75207370616e2e636f726e6572732d626f74746f6d207370616e207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a2f2a20546f706963726576696577202a2f0a2363702d6d61696e202e70616e656c2023746f706963726576696577207370616e2e636f726e6572732d746f702c202363702d6d656e75202e70616e656c2023746f706963726576696577207370616e2e636f726e6572732d746f70207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a2363702d6d61696e202e70616e656c2023746f706963726576696577207370616e2e636f726e6572732d746f70207370616e2c202363702d6d656e75202e70616e656c2023746f706963726576696577207370616e2e636f726e6572732d746f70207370616e207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a2363702d6d61696e202e70616e656c2023746f706963726576696577207370616e2e636f726e6572732d626f74746f6d2c202363702d6d656e75202e70616e656c2023746f706963726576696577207370616e2e636f726e6572732d626f74746f6d207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a2363702d6d61696e202e70616e656c2023746f706963726576696577207370616e2e636f726e6572732d626f74746f6d207370616e2c202363702d6d656e75202e70616e656c2023746f706963726576696577207370616e2e636f726e6572732d626f74746f6d207370616e207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a2f2a20467269656e6473206c697374202a2f0a2e63702d6d696e69207b0a096261636b67726f756e642d636f6c6f723a20236639663966393b0a0970616464696e673a2030203570783b0a096d617267696e3a203130707820313570782031307078203570783b0a7d0a0a2e63702d6d696e69207370616e2e636f726e6572732d746f702c202e63702d6d696e69207370616e2e636f726e6572732d626f74746f6d207b0a096d617267696e3a2030202d3570783b0a7d0a0a646c2e6d696e69206474207b0a09666f6e742d7765696768743a20626f6c643b0a09636f6c6f723a20233637363736373b0a7d0a0a646c2e6d696e69206464207b0a0970616464696e672d746f703a203470783b0a7d0a0a2e667269656e642d6f6e6c696e65207b0a09666f6e742d7765696768743a20626f6c643b0a7d0a0a2e667269656e642d6f66666c696e65207b0a09666f6e742d7374796c653a206974616c69633b0a7d0a0a2f2a20504d205374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a23706d2d6d656e75207b0a7d0a0a2f2a20504d2070616e656c2061646a7573746d656e7473202a2f0a2e7265706c792d616c6c20612e6c656674207b0a096261636b67726f756e642d706f736974696f6e3a20337078203630253b0a7d0a0a2e7265706c792d616c6c20612e6c6566743a686f766572207b0a096261636b67726f756e642d706f736974696f6e3a20307078203630253b0a7d0a0a2e7265706c792d616c6c207b0a0970616464696e672d746f703a203570783b0a7d0a0a2f2a20504d204d65737361676520686973746f7279202a2f0a2e63757272656e74207b0a09636f6c6f723a20233939393939393b0a7d0a0a2f2a20446566696e65642072756c6573206c69737420666f7220504d206f7074696f6e73202a2f0a6f6c2e6465662d72756c6573207b0a0970616464696e672d6c6566743a20303b0a7d0a0a6f6c2e6465662d72756c6573206c69207b0a096c696e652d6865696768743a20313830253b0a0970616464696e673a203170783b0a7d0a0a2f2a20504d206d61726b696e6720636f6c6f757273202a2f0a2e706d6c697374206c692e626731207b0a0970616464696e673a2030203370783b0a7d0a0a2e706d6c697374206c692e626732207b0a0970616464696e673a2030203370783b0a7d0a0a2e706d6c697374206c692e706d5f6d6573736167655f7265706f727465645f636f6c6f75722c202e706d5f6d6573736167655f7265706f727465645f636f6c6f7572207b0a09626f726465722d6c6566742d636f6c6f723a20236263626362633b0a09626f726465722d72696768742d636f6c6f723a20236263626362633b0a7d0a0a2e706d6c697374206c692e706d5f6d61726b65645f636f6c6f75722c202e706d5f6d61726b65645f636f6c6f7572207b0a0970616464696e673a20303b0a09626f726465723a20736f6c69642033707820236666666666663b0a09626f726465722d77696474683a2030203370783b0a7d0a0a2e706d6c697374206c692e706d5f7265706c6965645f636f6c6f75722c202e706d5f7265706c6965645f636f6c6f7572207b0a0970616464696e673a20303b0a09626f726465723a20736f6c69642033707820236332633263323b0a09626f726465722d77696474683a2030203370783b0a7d0a0a2e706d6c697374206c692e706d5f667269656e645f636f6c6f75722c202e706d5f667269656e645f636f6c6f7572207b0a0970616464696e673a20303b0a09626f726465723a20736f6c69642033707820236264626462643b0a09626f726465722d77696474683a2030203370783b0a7d0a0a2e706d6c697374206c692e706d5f666f655f636f6c6f75722c202e706d5f666f655f636f6c6f7572207b0a0970616464696e673a20303b0a09626f726465723a20736f6c69642033707820233030303030303b0a09626f726465722d77696474683a2030203370783b0a7d0a0a2e706d2d6c6567656e64207b0a09626f726465722d6c6566742d77696474683a20313070783b0a09626f726465722d6c6566742d7374796c653a20736f6c69643b0a09626f726465722d72696768742d77696474683a20303b0a096d617267696e2d626f74746f6d3a203370783b0a0970616464696e672d6c6566743a203370783b0a7d0a0a2f2a204176617461722067616c6c657279202a2f0a2367616c6c657279206c6162656c207b0a09706f736974696f6e3a2072656c61746976653b0a09666c6f61743a206c6566743b0a096d617267696e3a20313070783b0a0970616464696e673a203570783b0a0977696474683a206175746f3b0a096261636b67726f756e643a20234646464646463b0a09626f726465723a2031707820736f6c696420234343433b0a09746578742d616c69676e3a2063656e7465723b0a7d0a0a2367616c6c657279206c6162656c3a686f766572207b0a096261636b67726f756e642d636f6c6f723a20234545453b0a7d0a2f2a20466f726d205374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a2f2a2047656e6572616c20666f726d207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a6669656c64736574207b0a09626f726465722d77696474683a20303b0a09666f6e742d66616d696c793a2056657264616e612c2048656c7665746963612c20417269616c2c2073616e732d73657269663b0a7d0a0a696e707574207b0a09666f6e742d7765696768743a206e6f726d616c3b0a09637572736f723a20706f696e7465723b0a09766572746963616c2d616c69676e3a206d6964646c653b0a0970616464696e673a2030203370783b0a09666f6e742d66616d696c793a2056657264616e612c2048656c7665746963612c20417269616c2c2073616e732d73657269663b0a7d0a0a73656c656374207b0a09666f6e742d66616d696c793a2056657264616e612c2048656c7665746963612c20417269616c2c2073616e732d73657269663b0a09666f6e742d7765696768743a206e6f726d616c3b0a09637572736f723a20706f696e7465723b0a09766572746963616c2d616c69676e3a206d6964646c653b0a09626f726465723a2031707820736f6c696420233636363636363b0a0970616464696e673a203170783b0a096261636b67726f756e642d636f6c6f723a20234641464146413b0a7d0a0a6f7074696f6e207b0a0970616464696e672d72696768743a2031656d3b0a7d0a0a6f7074696f6e2e64697361626c65642d6f7074696f6e207b0a09636f6c6f723a2067726179746578743b0a7d0a0a7465787461726561207b0a0977696474683a203630253b0a0970616464696e673a203270783b0a7d0a0a6c6162656c207b0a09637572736f723a2064656661756c743b0a0970616464696e672d72696768743a203570783b0a09636f6c6f723a20233637363736373b0a7d0a0a6c6162656c20696e707574207b0a09766572746963616c2d616c69676e3a206d6964646c653b0a7d0a0a6c6162656c20696d67207b0a09766572746963616c2d616c69676e3a206d6964646c653b0a7d0a0a2f2a20446566696e6974696f6e206c697374206c61796f757420666f7220666f726d730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a6669656c6473657420646c207b0a0970616464696e673a2034707820303b0a7d0a0a6669656c64736574206474207b0a09666c6f61743a206c6566743b090a0977696474683a203430253b0a09746578742d616c69676e3a206c6566743b0a09646973706c61793a20626c6f636b3b0a7d0a0a6669656c64736574206464207b0a096d617267696e2d6c6566743a203431253b0a09766572746963616c2d616c69676e3a20746f703b0a096d617267696e2d626f74746f6d3a203370783b0a7d0a0a2f2a205370656369666963206c61796f75742031202a2f0a6669656c647365742e6669656c647331206474207b0a0977696474683a203135656d3b0a09626f726465722d72696768742d77696474683a20303b0a7d0a0a6669656c647365742e6669656c647331206464207b0a096d617267696e2d6c6566743a203135656d3b0a09626f726465722d6c6566742d77696474683a20303b0a7d0a0a6669656c647365742e6669656c647331207b0a096261636b67726f756e642d636f6c6f723a207472616e73706172656e743b0a7d0a0a6669656c647365742e6669656c64733120646976207b0a096d617267696e2d626f74746f6d3a203370783b0a7d0a0a2f2a20536574206974206261636b20746f2030707820666f72207468652072654361707463686120646976733a205048504242332d39353837202a2f0a6669656c647365742e6669656c64733120237265636170746368615f7769646765745f64697620646976207b0a096d617267696e2d626f74746f6d3a20303b0a7d0a0a2f2a205370656369666963206c61796f75742032202a2f0a6669656c647365742e6669656c647332206474207b0a0977696474683a203135656d3b0a09626f726465722d72696768742d77696474683a20303b0a7d0a0a6669656c647365742e6669656c647332206464207b0a096d617267696e2d6c6566743a203136656d3b0a09626f726465722d6c6566742d77696474683a20303b0a7d0a0a2f2a20466f726d20656c656d656e7473202a2f0a6474206c6162656c207b0a09666f6e742d7765696768743a20626f6c643b0a09746578742d616c69676e3a206c6566743b0a7d0a0a6464206c6162656c207b0a0977686974652d73706163653a206e6f777261703b0a09636f6c6f723a20233333333b0a7d0a0a646420696e7075742c206464207465787461726561207b0a096d617267696e2d72696768743a203370783b0a7d0a0a64642073656c656374207b0a0977696474683a206175746f3b0a7d0a0a6464207465787461726561207b0a0977696474683a203835253b0a7d0a0a2f2a20486f7665722065666665637473202a2f0a6669656c6473657420646c3a686f766572206474206c6162656c207b0a09636f6c6f723a20233030303030303b0a7d0a0a6669656c647365742e6669656c64733220646c3a686f766572206474206c6162656c207b0a09636f6c6f723a20696e68657269743b0a7d0a0a2374696d657a6f6e65207b0a0977696474683a203935253b0a7d0a0a2a2068746d6c202374696d657a6f6e65207b0a0977696474683a203530253b0a7d0a0a2f2a20517569636b2d6c6f67696e206f6e20696e6465782070616765202a2f0a6669656c647365742e717569636b2d6c6f67696e207b0a096d617267696e2d746f703a203570783b0a7d0a0a6669656c647365742e717569636b2d6c6f67696e20696e707574207b0a0977696474683a206175746f3b0a7d0a0a6669656c647365742e717569636b2d6c6f67696e20696e7075742e696e707574626f78207b0a0977696474683a203135253b0a09766572746963616c2d616c69676e3a206d6964646c653b0a096d617267696e2d72696768743a203570783b0a096261636b67726f756e642d636f6c6f723a20236633663366333b0a7d0a0a6669656c647365742e717569636b2d6c6f67696e206c6162656c207b0a0977686974652d73706163653a206e6f777261703b0a0970616464696e672d72696768743a203270783b0a7d0a0a2f2a20446973706c6179206f7074696f6e73206f6e2076696577746f7069632f76696577666f72756d20706167657320202a2f0a6669656c647365742e646973706c61792d6f7074696f6e73207b0a09746578742d616c69676e3a2063656e7465723b0a096d617267696e3a2033707820302035707820303b0a7d0a0a6669656c647365742e646973706c61792d6f7074696f6e73206c6162656c207b0a0977686974652d73706163653a206e6f777261703b0a0970616464696e672d72696768743a203270783b0a7d0a0a6669656c647365742e646973706c61792d6f7074696f6e732061207b0a096d617267696e2d746f703a203370783b0a7d0a0a2f2a20446973706c617920616374696f6e7320666f722075637020616e64206d6370207061676573202a2f0a6669656c647365742e646973706c61792d616374696f6e73207b0a09746578742d616c69676e3a2072696768743b0a096c696e652d6865696768743a2032656d3b0a0977686974652d73706163653a206e6f777261703b0a0970616464696e672d72696768743a2031656d3b0a7d0a0a6669656c647365742e646973706c61792d616374696f6e73206c6162656c207b0a0977686974652d73706163653a206e6f777261703b0a0970616464696e672d72696768743a203270783b0a7d0a0a6669656c647365742e736f72742d6f7074696f6e73207b0a096c696e652d6865696768743a2032656d3b0a7d0a0a2f2a204d435020666f72756d2073656c656374696f6e2a2f0a6669656c647365742e666f72756d2d73656c656374696f6e207b0a096d617267696e3a2035707820302033707820303b0a09666c6f61743a2072696768743b0a7d0a0a6669656c647365742e666f72756d2d73656c656374696f6e32207b0a096d617267696e3a203133707820302033707820303b0a09666c6f61743a2072696768743b0a7d0a0a2f2a204a756d70626f78202a2f0a6669656c647365742e6a756d70626f78207b0a09746578742d616c69676e3a2072696768743b0a096d617267696e2d746f703a20313570783b0a096865696768743a20322e35656d3b0a7d0a0a6669656c647365742e717569636b6d6f64207b0a0977696474683a203530253b0a09666c6f61743a2072696768743b0a09746578742d616c69676e3a2072696768743b0a096865696768743a20322e35656d3b0a7d0a0a2f2a205375626d697420627574746f6e206669656c64736574202a2f0a6669656c647365742e7375626d69742d627574746f6e73207b0a09746578742d616c69676e3a2063656e7465723b0a09766572746963616c2d616c69676e3a206d6964646c653b0a096d617267696e3a2035707820303b0a7d0a0a6669656c647365742e7375626d69742d627574746f6e7320696e707574207b0a09766572746963616c2d616c69676e3a206d6964646c653b0a0970616464696e672d746f703a203370783b0a0970616464696e672d626f74746f6d3a203370783b0a7d0a0a2f2a20506f7374696e672070616765207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a0a2f2a20427574746f6e73207573656420696e2074686520656469746f72202a2f0a23666f726d61742d627574746f6e73207b0a096d617267696e3a203135707820302032707820303b0a7d0a0a23666f726d61742d627574746f6e7320696e7075742c2023666f726d61742d627574746f6e732073656c656374207b0a09766572746963616c2d616c69676e3a206d6964646c653b0a7d0a0a2f2a204d61696e206d65737361676520626f78202a2f0a236d6573736167652d626f78207b0a0977696474683a203830253b0a7d0a0a236d6573736167652d626f78207465787461726561207b0a0977696474683a2034353070783b0a096865696768743a2032373070783b0a096d696e2d77696474683a20313030253b0a096d61782d77696474683a20313030253b0a09636f6c6f723a20233333333333333b0a7d0a0a2f2a20456d6f7469636f6e732070616e656c202a2f0a23736d696c65792d626f78207b0a0977696474683a203138253b0a09666c6f61743a2072696768743b0a7d0a0a23736d696c65792d626f7820696d67207b0a096d617267696e3a203370783b0a7d0a0a2f2a20496e707574206669656c64207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a2e696e707574626f78207b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a09626f726465723a2031707820736f6c696420236330633063303b0a09636f6c6f723a20233333333333333b0a0970616464696e673a203270783b0a09637572736f723a20746578743b0a7d0a0a2e696e707574626f783a686f766572207b0a09626f726465723a2031707820736f6c696420236561656165613b0a7d0a0a2e696e707574626f783a666f637573207b0a09626f726465723a2031707820736f6c696420236561656165613b0a09636f6c6f723a20233462346234623b0a7d0a0a696e7075742e696e707574626f78097b2077696474683a203835253b207d0a696e7075742e6d656469756d097b2077696474683a203530253b207d0a696e7075742e6e6172726f77097b2077696474683a203235253b207d0a696e7075742e74696e7909097b2077696474683a2031323570783b207d0a0a74657874617265612e696e707574626f78207b0a0977696474683a203835253b0a7d0a0a2e6175746f7769647468207b0a0977696474683a206175746f2021696d706f7274616e743b0a7d0a0a2f2a20466f726d20627574746f6e207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a696e7075742e627574746f6e312c20696e7075742e627574746f6e32207b0a7d0a0a612e627574746f6e312c20696e7075742e627574746f6e312c20696e7075742e627574746f6e332c20612e627574746f6e322c20696e7075742e627574746f6e32207b0a0977696474683a206175746f2021696d706f7274616e743b0a0970616464696e672d746f703a203170783b0a0970616464696e672d626f74746f6d3a203170783b0a09666f6e742d66616d696c793a20224c7563696461204772616e6465222c2056657264616e612c2048656c7665746963612c20417269616c2c2073616e732d73657269663b0a09636f6c6f723a20233030303b0a096261636b67726f756e643a2023464146414641206e6f6e65207265706561742d7820746f70206c6566743b0a7d0a0a612e627574746f6e312c20696e7075742e627574746f6e31207b0a09666f6e742d7765696768743a20626f6c643b0a09626f726465723a2031707820736f6c696420233636363636363b0a7d0a0a696e7075742e627574746f6e33207b0a0970616464696e673a20303b0a096d617267696e3a20303b0a096c696e652d6865696768743a203570783b0a096865696768743a20313270783b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a09666f6e742d76617269616e743a20736d616c6c2d636170733b0a7d0a0a2f2a20416c7465726e617469766520627574746f6e202a2f0a612e627574746f6e322c20696e7075742e627574746f6e322c20696e7075742e627574746f6e33207b0a09626f726465723a2031707820736f6c696420233636363636363b0a7d0a0a2f2a203c613e20627574746f6e20696e20746865207374796c65206f662074686520666f726d20627574746f6e73202a2f0a612e627574746f6e312c20612e627574746f6e313a6c696e6b2c20612e627574746f6e313a766973697465642c20612e627574746f6e313a6163746976652c20612e627574746f6e322c20612e627574746f6e323a6c696e6b2c20612e627574746f6e323a766973697465642c20612e627574746f6e323a616374697665207b0a09746578742d6465636f726174696f6e3a206e6f6e653b0a09636f6c6f723a20233030303030303b0a0970616464696e673a20327078203870783b0a096c696e652d6865696768743a20323530253b0a09766572746963616c2d616c69676e3a20746578742d626f74746f6d3b0a096261636b67726f756e642d706f736974696f6e3a2030203170783b0a7d0a0a2f2a20486f76657220737461746573202a2f0a612e627574746f6e313a686f7665722c20696e7075742e627574746f6e313a686f7665722c20612e627574746f6e323a686f7665722c20696e7075742e627574746f6e323a686f7665722c20696e7075742e627574746f6e333a686f766572207b0a09626f726465723a2031707820736f6c696420234243424342433b0a096261636b67726f756e642d706f736974696f6e3a203020313030253b0a09636f6c6f723a20234243424342433b0a7d0a0a696e7075742e64697361626c6564207b0a09666f6e742d7765696768743a206e6f726d616c3b0a09636f6c6f723a20233636363636363b0a7d0a0a2f2a20546f70696320616e6420666f72756d20536561726368202a2f0a2e7365617263682d626f78207b0a096d617267696e2d746f703a203370783b0a096d617267696e2d6c6566743a203570783b0a09666c6f61743a206c6566743b0a7d0a0a2e7365617263682d626f7820696e707574207b0a7d0a0a696e7075742e736561726368207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a096261636b67726f756e642d7265706561743a206e6f2d7265706561743b0a096261636b67726f756e642d706f736974696f6e3a206c656674203170783b0a0970616464696e672d6c6566743a20313770783b0a7d0a0a2e66756c6c207b2077696474683a203935253b207d0a2e6d656469756d207b2077696474683a203530253b7d0a2e6e6172726f77207b2077696474683a203235253b7d0a2e74696e79207b2077696474683a203130253b7d0a2f2a205374796c6520536865657420547765616b730a0a5468657365207374796c6520646566696e6974696f6e7320617265206d61696e6c79204945207370656369666963200a747765616b732072657175697265642064756520746f2069747320706f6f722043535320737570706f72742e0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a0a2a2068746d6c207461626c652c202a2068746d6c2073656c6563742c202a2068746d6c20696e707574207b20666f6e742d73697a653a20313030253b207d0a2a2068746d6c206872207b206d617267696e3a20303b207d0a2a2068746d6c207370616e2e636f726e6572732d746f702c202a2068746d6c207370616e2e636f726e6572732d626f74746f6d207b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f636f726e6572735f6c6566742e67696622293b207d0a2a2068746d6c207370616e2e636f726e6572732d746f70207370616e2c202a2068746d6c207370616e2e636f726e6572732d626f74746f6d207370616e207b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f636f726e6572735f72696768742e67696622293b207d0a0a7461626c652e7461626c6531207b0a0977696474683a203939253b09092f2a204945203c20362062726f7773657273202a2f0a092f2a2054616e74656b206861636b202a2f0a09766f6963652d66616d696c793a20225c227d5c22223b0a09766f6963652d66616d696c793a20696e68657269743b0a0977696474683a20313030253b0a7d0a68746d6c3e626f6479207461626c652e7461626c6531207b2077696474683a20313030253b207d092f2a205265736574203130302520666f72206f70657261202a2f0a0a2a2068746d6c20756c2e746f7069636c697374206c69207b20706f736974696f6e3a2072656c61746976653b207d0a2a2068746d6c202e706f7374626f647920683320696d67207b20766572746963616c2d616c69676e3a206d6964646c653b207d0a0a2f2a20466f726d207374796c6573202a2f0a68746d6c3e626f6479206464206c6162656c20696e707574207b20766572746963616c2d616c69676e3a20746578742d626f74746f6d3b207d092f2a20416c69676e20636865636b626f7865732f726164696f20627574746f6e73206e6963656c79202a2f0a0a2a2068746d6c20696e7075742e627574746f6e312c202a2068746d6c20696e7075742e627574746f6e32207b0a0970616464696e672d626f74746f6d3a20303b0a096d617267696e2d626f74746f6d3a203170783b0a7d0a0a2f2a204d697363206c61796f7574207374796c6573202a2f0a2a2068746d6c202e636f6c756d6e312c202a2068746d6c202e636f6c756d6e32207b2077696474683a203435253b207d0a0a2f2a204e696365206d6574686f6420666f7220636c656172696e6720666c6f6174656420626c6f636b7320776974686f757420686176696e6720746f20696e7365727420616e79206578747261206d61726b757020286c696b65207370616365722061626f7665290a20202046726f6d20687474703a2f2f7777772e706f736974696f6e697365766572797468696e672e6e65742f65617379636c656172696e672e68746d6c200a23746162733a61667465722c20236d696e69746162733a61667465722c202e706f73743a61667465722c202e6e61766261723a61667465722c206669656c6473657420646c3a61667465722c20756c2e746f7069636c69737420646c3a61667465722c20756c2e6c696e6b6c6973743a61667465722c20646c2e706f6c6c733a6166746572207b0a09636f6e74656e743a20222e223b200a09646973706c61793a20626c6f636b3b200a096865696768743a20303b200a09636c6561723a20626f74683b200a097669736962696c6974793a2068696464656e3b0a7d2a2f0a0a2e636c6561726669782c2023746162732c20236d696e69746162732c206669656c6473657420646c2c20756c2e746f7069636c69737420646c2c20646c2e706f6c6c73207b0a096865696768743a2031253b0a096f766572666c6f773a2068696464656e3b0a7d0a0a2f2a2076696577746f70696320666978202a2f0a2a2068746d6c202e706f7374207b0a096865696768743a203235253b0a096f766572666c6f773a2068696464656e3b0a7d0a0a2f2a206e617662617220666978202a2f0a2a2068746d6c202e636c6561726669782c202a2068746d6c202e6e61766261722c20756c2e6c696e6b6c697374207b0a096865696768743a2034253b0a096f766572666c6f773a2068696464656e3b0a7d0a0a2f2a2053696d706c652066697820736f20666f72756d20616e6420746f706963206c6973747320616c7761797320686176652061206d696e2d686569676874207365742c206576656e20696e204945360a0946726f6d20687474703a2f2f7777772e64757374696e6469617a2e636f6d2f6d696e2d6865696768742d666173742d6861636b202a2f0a646c2e69636f6e207b0a096d696e2d6865696768743a20333570783b0a096865696768743a206175746f2021696d706f7274616e743b0a096865696768743a20333570783b0a7d0a0a2a2068746d6c206c692e726f7720646c2e69636f6e206474207b0a096865696768743a20333570783b0a096f766572666c6f773a2076697369626c653b0a7d0a0a2a2068746d6c20237365617263682d626f78207b0a0977696474683a203235253b0a7d0a0a2f2a20436f72726563746c7920636c65617220666c6f6174696e6720666f722064657461696c73206f6e2070726f66696c652076696577202a2f0a2a3a66697273742d6368696c642b68746d6c20646c2e64657461696c73206464207b0a096d617267696e2d6c6566743a203330253b0a09666c6f61743a206e6f6e653b0a7d0a0a2a2068746d6c20646c2e64657461696c73206464207b0a096d617267696e2d6c6566743a203330253b0a09666c6f61743a206e6f6e653b0a7d0a0a2f2a20486561646572626172206865696768742066697820666f722049453720616e642062656c6f77202a2f0a2a2068746d6c2023736974652d6465736372697074696f6e2070207b0a096d617267696e2d626f74746f6d3a20312e30656d3b0a7d0a0a2a3a66697273742d6368696c642b68746d6c2023736974652d6465736372697074696f6e2070207b0a096d617267696e2d626f74746f6d3a20312e30656d3b0a7d0a0a2f2a20236d696e69746162732066697820666f72204945202a2f0a2e746162732d636f6e7461696e6572207b0a097a6f6f6d3a20313b0a7d0a0a236d696e6974616273207b0a0977686974652d73706163653a206e6f777261703b0a092a6d696e2d77696474683a203530253b0a7d0a2f2a2020090a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a436f6c6f75727320616e64206261636b67726f756e647320666f7220636f6d6d6f6e2e6373730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a68746d6c2c20626f6479207b0a09636f6c6f723a20233533363438323b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a7d0a0a6831207b0a09636f6c6f723a20234646464646463b0a7d0a0a6832207b0a09636f6c6f723a20233238333133463b0a7d0a0a6833207b0a09626f726465722d626f74746f6d2d636f6c6f723a20234343434343433b0a09636f6c6f723a20233131353039383b0a7d0a0a6872207b0a09626f726465722d636f6c6f723a20234646464646463b0a09626f726465722d746f702d636f6c6f723a20234343434343433b0a7d0a0a68722e646173686564207b0a09626f726465722d746f702d636f6c6f723a20234343434343433b0a7d0a0a2f2a2053656172636820626f780a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a237365617263682d626f78207b0a09636f6c6f723a20234646464646463b0a7d0a0a237365617263682d626f7820236b6579776f726473207b0a096261636b67726f756e642d636f6c6f723a20234646463b0a7d0a0a237365617263682d626f7820696e707574207b0a09626f726465722d636f6c6f723a20233030373542303b0a7d0a0a2f2a20526f756e6420636f726e6572656420626f78657320616e64206261636b67726f756e64730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a2e686561646572626172207b0a096261636b67726f756e642d636f6c6f723a20233132413345423b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f62675f6865616465722e67696622293b0a09636f6c6f723a20234646464646463b0a7d0a0a2e6e6176626172207b0a096261636b67726f756e643a20236565653b0a09626f782d736861646f773a20302030203130707820236363633b0a096d617267696e2d626f74746f6d3a20313570783b0a7d0a0a2e666f72616267207b0a096261636b67726f756e643a20233030386339393b0a09626f782d736861646f773a20302030203130707820236363633b0a096d617267696e3a203130707820303b0a0970616464696e673a2035707820313070783b0a09626f726465722d7261646975733a203870783b0a7d0a0a2e666f72756d6267207b0a096261636b67726f756e642d636f6c6f723a20233132413345423b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f62675f6865616465722e67696622293b0a7d0a0a2e70616e656c207b0a096261636b67726f756e642d636f6c6f723a20234543463146333b0a09636f6c6f723a20233238333133463b0a7d0a0a2e706f73743a746172676574202e636f6e74656e74207b0a09636f6c6f723a20233030303030303b0a7d0a0a2e706f73743a7461726765742068332061207b0a09636f6c6f723a20233030303030303b0a7d0a0a2e626731097b206261636b67726f756e642d636f6c6f723a20234543463346373b207d0a2e626732097b206261636b67726f756e642d636f6c6f723a20236531656266323b20207d0a2e626733097b206261636b67726f756e642d636f6c6f723a20236361646365623b207d0a0a2e756370726f776267207b0a096261636b67726f756e642d636f6c6f723a20234443444545323b0a7d0a0a2e6669656c64736267207b0a096261636b67726f756e642d636f6c6f723a20234537453845413b0a7d0a0a2f2a20486f72697a6f6e74616c206c697374730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a0a756c2e6e61766c696e6b73207b0a09626f726465722d626f74746f6d2d636f6c6f723a20234646464646463b0a7d0a0a2f2a205461626c65207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a7461626c652e7461626c6531207468656164207468207b0a09636f6c6f723a20234646464646463b0a7d0a0a7461626c652e7461626c65312074626f6479207472207b0a09626f726465722d636f6c6f723a20234246433143463b0a7d0a0a7461626c652e7461626c65312074626f64792074723a686f7665722c207461626c652e7461626c65312074626f64792074722e686f766572207b0a096261636b67726f756e642d636f6c6f723a20234346453146363b0a09636f6c6f723a20233030303b0a7d0a0a7461626c652e7461626c6531207464207b0a09636f6c6f723a20233533363438323b0a7d0a0a7461626c652e7461626c65312074626f6479207464207b0a09626f726465722d746f702d636f6c6f723a20234641464146413b0a7d0a0a7461626c652e7461626c65312074626f6479207468207b0a09626f726465722d626f74746f6d2d636f6c6f723a20233030303030303b0a09636f6c6f723a20233333333333333b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a7d0a0a7461626c652e696e666f2074626f6479207468207b0a09636f6c6f723a20233030303030303b0a7d0a0a2f2a204d697363206c61796f7574207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a646c2e64657461696c73206474207b0a09636f6c6f723a20233030303030303b0a7d0a0a646c2e64657461696c73206464207b0a09636f6c6f723a20233533363438323b0a7d0a0a2e736570207b0a09636f6c6f723a20233131393844393b0a7d0a0a2f2a20506167696e6174696f6e0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a2e706167696e6174696f6e207370616e207374726f6e67207b0a09636f6c6f723a20234646464646463b0a096261636b67726f756e642d636f6c6f723a20233436393242463b0a09626f726465722d636f6c6f723a20233436393242463b0a7d0a0a2e706167696e6174696f6e207370616e20612c202e706167696e6174696f6e207370616e20613a6c696e6b2c202e706167696e6174696f6e207370616e20613a76697369746564207b0a09636f6c6f723a20233543373538433b0a096261636b67726f756e642d636f6c6f723a20234543454445453b0a09626f726465722d636f6c6f723a20234234424143303b0a7d0a0a2e706167696e6174696f6e207370616e20613a686f766572207b0a09626f726465722d636f6c6f723a20233336384144323b0a096261636b67726f756e642d636f6c6f723a20233336384144323b0a09636f6c6f723a20234646463b0a7d0a0a2e706167696e6174696f6e207370616e20613a616374697665207b0a09636f6c6f723a20233543373538433b0a096261636b67726f756e642d636f6c6f723a20234543454445453b0a09626f726465722d636f6c6f723a20234234424143303b0a7d0a0a2f2a20506167696e6174696f6e20696e2076696577666f72756d20666f72206d756c74697061676520746f70696373202a2f0a2e726f77202e706167696e6174696f6e207b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f70616765732e67696622293b0a7d0a0a2e726f77202e706167696e6174696f6e207370616e20612c206c692e706167696e6174696f6e207370616e2061207b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a7d0a0a2e726f77202e706167696e6174696f6e207370616e20613a686f7665722c206c692e706167696e6174696f6e207370616e20613a686f766572207b0a096261636b67726f756e642d636f6c6f723a20233336384144323b0a7d0a0a2f2a204d697363656c6c616e656f7573207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a2e636f70797269676874207b0a09636f6c6f723a20233535353535353b0a7d0a0a2e6572726f72207b0a09636f6c6f723a20234243324134443b0a7d0a0a2e7265706f72746564207b0a096261636b67726f756e642d636f6c6f723a20234637454345463b0a7d0a0a6c692e7265706f727465643a686f766572207b0a096261636b67726f756e642d636f6c6f723a20234543443544382021696d706f7274616e743b0a7d0a2e737469636b792c202e616e6e6f756e6365207b0a092f2a20796f752063616e206164642061206261636b67726f756e6420666f7220737469636b69657320616e6420616e6e6f756e63656d656e74732a2f0a7d0a0a6469762e72756c6573207b0a096261636b67726f756e642d636f6c6f723a20234543443544383b0a09636f6c6f723a20234243324134443b0a7d0a0a702e72756c6573207b0a096261636b67726f756e642d636f6c6f723a20234543443544383b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a2f2a2020090a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a436f6c6f75727320616e64206261636b67726f756e647320666f72206c696e6b732e6373730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a613a6c696e6b097b20636f6c6f723a20233130353238393b207d0a613a76697369746564097b20636f6c6f723a20233130353238393b207d0a613a686f766572097b20636f6c6f723a20234433313134313b207d0a613a616374697665097b20636f6c6f723a20233336384144323b207d0a0a2f2a204c696e6b73206f6e206772616469656e74206261636b67726f756e6473202a2f0a237365617263682d626f7820613a6c696e6b2c202e6e6176626720613a6c696e6b2c202e666f72756d6267202e68656164657220613a6c696e6b2c202e666f72616267202e68656164657220613a6c696e6b2c20746820613a6c696e6b207b0a09636f6c6f723a20234646464646463b0a7d0a0a237365617263682d626f7820613a766973697465642c202e6e6176626720613a766973697465642c202e666f72756d6267202e68656164657220613a766973697465642c202e666f72616267202e68656164657220613a766973697465642c20746820613a76697369746564207b0a09636f6c6f723a20234646464646463b0a7d0a0a237365617263682d626f7820613a686f7665722c202e6e6176626720613a686f7665722c202e666f72756d6267202e68656164657220613a686f7665722c202e666f72616267202e68656164657220613a686f7665722c20746820613a686f766572207b0a09636f6c6f723a20234138443846463b0a7d0a0a237365617263682d626f7820613a6163746976652c202e6e6176626720613a6163746976652c202e666f72756d6267202e68656164657220613a6163746976652c202e666f72616267202e68656164657220613a6163746976652c20746820613a616374697665207b0a09636f6c6f723a20234338453646463b0a7d0a0a2f2a204c696e6b7320666f7220666f72756d2f746f706963206c69737473202a2f0a612e666f72756d7469746c65207b0a09636f6c6f723a20233130353238393b0a7d0a0a2f2a20612e666f72756d7469746c653a76697369746564207b20636f6c6f723a20233130353238393b207d202a2f0a0a612e666f72756d7469746c653a686f766572207b0a09636f6c6f723a20234243324134443b0a7d0a0a612e666f72756d7469746c653a616374697665207b0a09636f6c6f723a20233130353238393b0a7d0a0a612e746f7069637469746c65207b0a09636f6c6f723a20233130353238393b0a7d0a0a2f2a20612e746f7069637469746c653a76697369746564207b20636f6c6f723a20233336384144323b207d202a2f0a0a612e746f7069637469746c653a686f766572207b0a09636f6c6f723a20234243324134443b0a7d0a0a612e746f7069637469746c653a616374697665207b0a09636f6c6f723a20233130353238393b0a7d0a0a2f2a20506f737420626f6479206c696e6b73202a2f0a2e706f73746c696e6b207b0a09636f6c6f723a20233336384144323b0a09626f726465722d626f74746f6d2d636f6c6f723a20233336384144323b0a7d0a0a2e706f73746c696e6b3a76697369746564207b0a09636f6c6f723a20233544384642443b0a09626f726465722d626f74746f6d2d636f6c6f723a20233544384642443b0a7d0a0a2e706f73746c696e6b3a616374697665207b0a09636f6c6f723a20233336384144323b0a7d0a0a2e706f73746c696e6b3a686f766572207b0a096261636b67726f756e642d636f6c6f723a20234430453446363b0a09636f6c6f723a20233044343437333b0a7d0a0a2e7369676e617475726520612c202e7369676e617475726520613a766973697465642c202e7369676e617475726520613a686f7665722c202e7369676e617475726520613a616374697665207b0a096261636b67726f756e642d636f6c6f723a207472616e73706172656e743b0a7d0a0a2f2a2050726f66696c65206c696e6b73202a2f0a2e706f737470726f66696c6520613a6c696e6b2c202e706f737470726f66696c6520613a766973697465642c202e706f737470726f66696c652064742e617574686f722061207b0a09636f6c6f723a20233130353238393b0a7d0a0a2e706f737470726f66696c6520613a686f7665722c202e706f737470726f66696c652064742e617574686f7220613a686f766572207b0a09636f6c6f723a20234433313134313b0a7d0a0a2e706f737470726f66696c6520613a616374697665207b0a09636f6c6f723a20233130353238393b0a7d0a0a2f2a2050726f66696c6520736561726368726573756c7473202a2f090a2e736561726368202e706f737470726f66696c652061207b0a09636f6c6f723a20233130353238393b0a7d0a0a2e736561726368202e706f737470726f66696c6520613a686f766572207b0a09636f6c6f723a20234433313134313b0a7d0a0a2f2a204261636b20746f20746f70206f662070616765202a2f0a612e746f70207b0a096261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f4241434b5f544f505f5352437d22293b0a7d0a0a612e746f7032207b0a096261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f4241434b5f544f505f5352437d22293b0a7d0a0a2f2a204172726f77206c696e6b7320202a2f0a612e757009097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f6172726f775f75702e6769662229207d0a612e646f776e09097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f6172726f775f646f776e2e6769662229207d0a612e6c65667409097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f6172726f775f6c6566742e6769662229207d0a612e726967687409097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f6172726f775f72696768742e6769662229207d0a0a612e75703a686f766572207b0a096261636b67726f756e642d636f6c6f723a207472616e73706172656e743b0a7d0a0a612e6c6566743a686f766572207b0a09636f6c6f723a20233336384144323b0a7d0a0a612e72696768743a686f766572207b0a09636f6c6f723a20233336384144323b0a7d0a0a0a2f2a2020090a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a436f6c6f75727320616e64206261636b67726f756e647320666f7220636f6e74656e742e6373730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a756c2e746f7069636c697374206c69207b0a09636f6c6f723a20233443354437373b0a7d0a0a756c2e746f7069636c697374206464207b0a09626f726465722d6c6566742d636f6c6f723a20234646464646463b0a7d0a0a2e72746c20756c2e746f7069636c697374206464207b0a09626f726465722d72696768742d636f6c6f723a20236666663b0a09626f726465722d6c6566742d636f6c6f723a207472616e73706172656e743b0a7d0a0a756c2e746f7069636c697374206c692e726f7720647420612e737562666f72756d2e72656164207b0a096261636b67726f756e642d696d6167653a2075726c28227b494d475f535542464f52554d5f524541445f5352437d22293b0a7d0a0a756c2e746f7069636c697374206c692e726f7720647420612e737562666f72756d2e756e72656164207b0a096261636b67726f756e642d696d6167653a2075726c28227b494d475f535542464f52554d5f554e524541445f5352437d22293b0a7d0a0a6c692e726f77207b0a09626f726465722d746f702d636f6c6f723a2020234646464646463b0a09626f726465722d626f74746f6d2d636f6c6f723a20233030363038463b0a7d0a0a6c692e726f77207374726f6e67207b0a09636f6c6f723a20233030303030303b0a7d0a0a6c692e726f773a686f766572207b0a096261636b67726f756e642d636f6c6f723a20234636463444303b0a7d0a0a6c692e726f773a686f766572206464207b0a09626f726465722d6c6566742d636f6c6f723a20234343434343433b0a7d0a0a2e72746c206c692e726f773a686f766572206464207b0a09626f726465722d72696768742d636f6c6f723a20234343434343433b0a09626f726465722d6c6566742d636f6c6f723a207472616e73706172656e743b0a7d0a0a6c692e6865616465722064742c206c692e686561646572206464207b0a09636f6c6f723a20234646464646463b0a7d0a0a2f2a20466f72756d206c69737420636f6c756d6e207374796c6573202a2f0a756c2e746f7069636c6973742064642e7365617263686578747261207b0a09636f6c6f723a20233333333333333b0a7d0a0a2f2a20506f737420626f6479207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2e706f7374626f6479207b0a09636f6c6f723a20233333333333333b0a7d0a0a2f2a20436f6e74656e7420636f6e7461696e6572207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2e636f6e74656e74207b0a09636f6c6f723a20233333333333333b0a7d0a0a2e636f6e74656e742068322c202e70616e656c206832207b0a09636f6c6f723a20233131353039383b0a09626f726465722d626f74746f6d2d636f6c6f723a2020234343434343433b0a7d0a0a646c2e666171206474207b0a09636f6c6f723a20233333333333333b0a7d0a0a2e706f737468696c6974207b0a096261636b67726f756e642d636f6c6f723a20234633424643433b0a09636f6c6f723a20234243324134443b0a7d0a0a2f2a20506f7374207369676e6174757265202a2f0a2e7369676e6174757265207b0a09626f726465722d746f702d636f6c6f723a20234343434343433b0a7d0a0a2f2a20506f7374206e6f746963696573202a2f0a2e6e6f74696365207b0a09626f726465722d746f702d636f6c6f723a2020234343434343433b0a7d0a0a2f2a20424220436f6465207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2f2a2051756f746520626c6f636b202a2f0a626c6f636b71756f7465207b0a096261636b67726f756e642d636f6c6f723a20234542454144443b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f71756f74652e67696622293b0a09626f726465722d636f6c6f723a234442444243453b0a7d0a0a2e72746c20626c6f636b71756f7465207b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f71756f74655f72746c2e67696622293b0a7d0a0a626c6f636b71756f746520626c6f636b71756f7465207b0a092f2a204e65737465642071756f746573202a2f0a096261636b67726f756e642d636f6c6f723a234546454544393b0a7d0a0a626c6f636b71756f746520626c6f636b71756f746520626c6f636b71756f7465207b0a092f2a204e65737465642071756f746573202a2f0a096261636b67726f756e642d636f6c6f723a20234542454144443b0a7d0a0a2f2a20436f646520626c6f636b202a2f0a646c2e636f6465626f78207b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a09626f726465722d636f6c6f723a20234339443244383b0a7d0a0a646c2e636f6465626f78206474207b0a09626f726465722d626f74746f6d2d636f6c6f723a2020234343434343433b0a7d0a0a646c2e636f6465626f7820636f6465207b0a09636f6c6f723a20233245384235373b0a7d0a0a2e73796e746178626709097b20636f6c6f723a20234646464646463b207d0a2e73796e746178636f6d6d656e74097b20636f6c6f723a20234646383030303b207d0a2e73796e74617864656661756c74097b20636f6c6f723a20233030303042423b207d0a2e73796e74617868746d6c09097b20636f6c6f723a20233030303030303b207d0a2e73796e7461786b6579776f7264097b20636f6c6f723a20233030373730303b207d0a2e73796e746178737472696e67097b20636f6c6f723a20234444303030303b207d0a0a2f2a204174746163686d656e74730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2e617474616368626f78207b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a09626f726465722d636f6c6f723a2020234339443244383b0a7d0a0a2e706d2d6d657373616765202e617474616368626f78207b0a096261636b67726f756e642d636f6c6f723a20234632463346333b0a7d0a0a2e617474616368626f78206464207b0a09626f726465722d746f702d636f6c6f723a20234339443244383b0a7d0a0a2e617474616368626f782070207b0a09636f6c6f723a20233636363636363b0a7d0a0a2e617474616368626f7820702e7374617473207b0a09636f6c6f723a20233636363636363b0a7d0a0a2e6174746163682d696d61676520696d67207b0a09626f726465722d636f6c6f723a20233939393939393b0a7d0a0a2f2a20496e6c696e6520696d616765207468756d626e61696c73202a2f0a0a646c2e66696c65206464207b0a09636f6c6f723a20233636363636363b0a7d0a0a646c2e7468756d626e61696c20696d67207b0a09626f726465722d636f6c6f723a20233636363636363b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a7d0a0a646c2e7468756d626e61696c206464207b0a09636f6c6f723a20233636363636363b0a7d0a0a646c2e7468756d626e61696c20647420613a686f766572207b0a096261636b67726f756e642d636f6c6f723a20234545454545453b0a7d0a0a646c2e7468756d626e61696c20647420613a686f76657220696d67207b0a09626f726465722d636f6c6f723a20233336384144323b0a7d0a0a2f2a20506f737420706f6c6c207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a0a6669656c647365742e706f6c6c7320646c207b0a09626f726465722d746f702d636f6c6f723a20234443444545323b0a09636f6c6f723a20233636363636363b0a7d0a0a6669656c647365742e706f6c6c7320646c2e766f746564207b0a09636f6c6f723a20233030303030303b0a7d0a0a6669656c647365742e706f6c6c7320646420646976207b0a09636f6c6f723a20234646464646463b0a7d0a0a2e72746c202e706f6c6c626172312c202e72746c202e706f6c6c626172322c202e72746c202e706f6c6c626172332c202e72746c202e706f6c6c626172342c202e72746c202e706f6c6c62617235207b0a09626f726465722d72696768742d636f6c6f723a207472616e73706172656e743b0a7d0a0a2e706f6c6c62617231207b0a096261636b67726f756e642d636f6c6f723a20234141323334363b0a09626f726465722d626f74746f6d2d636f6c6f723a20233734313632433b0a09626f726465722d72696768742d636f6c6f723a20233734313632433b0a7d0a0a2e72746c202e706f6c6c62617231207b0a09626f726465722d6c6566742d636f6c6f723a20233734313632433b0a7d0a0a2e706f6c6c62617232207b0a096261636b67726f756e642d636f6c6f723a20234245314534413b0a09626f726465722d626f74746f6d2d636f6c6f723a20233843314333383b0a09626f726465722d72696768742d636f6c6f723a20233843314333383b0a7d0a0a2e72746c202e706f6c6c62617232207b0a09626f726465722d6c6566742d636f6c6f723a20233843314333383b0a7d0a0a2e706f6c6c62617233207b0a096261636b67726f756e642d636f6c6f723a20234431314134453b0a09626f726465722d626f74746f6d2d636f6c6f723a20234141323334363b0a09626f726465722d72696768742d636f6c6f723a20234141323334363b0a7d0a0a2e72746c202e706f6c6c62617233207b0a09626f726465722d6c6566742d636f6c6f723a20234141323334363b0a7d0a0a2e706f6c6c62617234207b0a096261636b67726f756e642d636f6c6f723a20234534313635333b0a09626f726465722d626f74746f6d2d636f6c6f723a20234245314534413b0a09626f726465722d72696768742d636f6c6f723a20234245314534413b0a7d0a0a2e72746c202e706f6c6c62617234207b0a09626f726465722d6c6566742d636f6c6f723a20234245314534413b0a7d0a0a2e706f6c6c62617235207b0a096261636b67726f756e642d636f6c6f723a20234638313135373b0a09626f726465722d626f74746f6d2d636f6c6f723a20234431314134453b0a09626f726465722d72696768742d636f6c6f723a20234431314134453b0a7d0a0a2e72746c202e706f6c6c62617235207b0a09626f726465722d6c6566742d636f6c6f723a20234431314134453b0a7d0a0a2f2a20506f737465722070726f66696c6520626c6f636b0a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2e706f737470726f66696c65207b0a09636f6c6f723a20233636363636363b0a09626f726465722d6c6566742d636f6c6f723a20234646464646463b0a7d0a0a2e72746c202e706f737470726f66696c65207b0a09626f726465722d72696768742d636f6c6f723a20234646464646463b0a09626f726465722d6c6566742d636f6c6f723a207472616e73706172656e743b0a7d0a0a2e706d202e706f737470726f66696c65207b0a09626f726465722d6c6566742d636f6c6f723a20234444444444443b0a7d0a0a2e72746c202e706d202e706f737470726f66696c65207b0a09626f726465722d72696768742d636f6c6f723a20234444444444443b0a09626f726465722d6c6566742d636f6c6f723a207472616e73706172656e743b0a7d0a0a2e706f737470726f66696c65207374726f6e67207b0a09636f6c6f723a20233030303030303b0a7d0a0a2e6f6e6c696e65207b0a096261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f555345525f4f4e4c494e455f5352437d22293b0a7d0a0a2f2a2020090a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a436f6c6f75727320616e64206261636b67726f756e647320666f7220627574746f6e732e6373730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a2f2a2042696720627574746f6e20696d61676573202a2f0a2e7265706c792d69636f6e207370616e097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f425554544f4e5f544f5049435f5245504c595f5352437d22293b207d0a2e706f73742d69636f6e207370616e09097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f425554544f4e5f544f5049435f4e45575f5352437d22293b207d0a2e6c6f636b65642d69636f6e207370616e097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f425554544f4e5f544f5049435f4c4f434b45445f5352437d22293b207d0a2e706d7265706c792d69636f6e207370616e097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f425554544f4e5f504d5f5245504c595f5352437d2229203b7d0a2e6e6577706d2d69636f6e207370616e20097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f425554544f4e5f504d5f4e45575f5352437d2229203b7d0a2e666f7277617264706d2d69636f6e207370616e097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f425554544f4e5f504d5f464f52574152445f5352437d2229203b7d0a0a612e7072696e74207b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f7072696e742e67696622293b0a7d0a0a612e73656e64656d61696c207b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f73656e64656d61696c2e67696622293b0a7d0a0a612e666f6e7473697a65207b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f666f6e7473697a652e67696622293b0a7d0a0a2f2a2049636f6e20696d616765730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a2e73697465686f6d650909090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f686f6d652e67696622293b207d0a2e69636f6e2d6661710909090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f6661712e67696622293b207d0a2e69636f6e2d6d656d6265727309090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f6d656d626572732e67696622293b207d0a2e69636f6e2d686f6d650909090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f686f6d652e67696622293b207d0a2e69636f6e2d7563700909090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f7563702e67696622293b207d0a2e69636f6e2d726567697374657209090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f72656769737465722e67696622293b207d0a2e69636f6e2d6c6f676f757409090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f6c6f676f75742e67696622293b207d0a2e69636f6e2d626f6f6b6d61726b09090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f626f6f6b6d61726b2e67696622293b207d0a2e69636f6e2d62756d700909090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f62756d702e67696622293b207d0a2e69636f6e2d73756273637269626509090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f7375627363726962652e67696622293b207d0a2e69636f6e2d756e737562736372696265090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f756e7375627363726962652e67696622293b207d0a2e69636f6e2d70616765730909090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f70616765732e67696622293b207d0a2e69636f6e2d73656172636809090909097b206261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f7365617263682e67696622293b207d0a0a2f2a2050726f66696c652026206e617669676174696f6e2069636f6e73202a2f0a2e656d61696c2d69636f6e2c202e656d61696c2d69636f6e206109097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f434f4e544143545f454d41494c5f5352437d22293b207d0a2e61696d2d69636f6e2c202e61696d2d69636f6e20610909097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f434f4e544143545f41494d5f5352437d22293b207d0a2e7961686f6f2d69636f6e2c202e7961686f6f2d69636f6e206109097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f434f4e544143545f5941484f4f5f5352437d22293b207d0a2e7765622d69636f6e2c202e7765622d69636f6e20610909097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f434f4e544143545f5757575f5352437d22293b207d0a2e6d736e6d2d69636f6e2c202e6d736e6d2d69636f6e20610909097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f434f4e544143545f4d534e4d5f5352437d22293b207d0a2e6963712d69636f6e2c202e6963712d69636f6e20610909097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f434f4e544143545f4943515f5352437d22293b207d0a2e6a61626265722d69636f6e2c202e6a61626265722d69636f6e206109097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f434f4e544143545f4a41424245525f5352437d22293b207d0a2e706d2d69636f6e2c202e706d2d69636f6e2061090909097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f434f4e544143545f504d5f5352437d22293b207d0a2e71756f74652d69636f6e2c202e71756f74652d69636f6e206109097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f504f53545f51554f54455f5352437d22293b207d0a0a2f2a204d6f64657261746f722069636f6e73202a2f0a2e7265706f72742d69636f6e2c202e7265706f72742d69636f6e206109097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f504f53545f5245504f52545f5352437d22293b207d0a2e656469742d69636f6e2c202e656469742d69636f6e20610909097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f504f53545f454449545f5352437d22293b207d0a2e64656c6574652d69636f6e2c202e64656c6574652d69636f6e206109097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f504f53545f44454c4554455f5352437d22293b207d0a2e696e666f2d69636f6e2c202e696e666f2d69636f6e20610909097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f504f53545f494e464f5f5352437d22293b207d0a2e7761726e2d69636f6e2c202e7761726e2d69636f6e20610909097b206261636b67726f756e642d696d6167653a2075726c28227b494d475f49434f4e5f555345525f5741524e5f5352437d22293b207d202f2a204e6565642075706461746564207761726e2069636f6e202a2f0a0a2f2a2020090a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a436f6c6f75727320616e64206261636b67726f756e647320666f722063702e6373730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a2f2a204d61696e20435020626f780a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a0a2363702d6d61696e2068332c202363702d6d61696e2068722c202363702d6d656e75206872207b0a09626f726465722d636f6c6f723a20234134423342463b0a7d0a0a2363702d6d61696e202e70616e656c206c692e726f77207b0a09626f726465722d626f74746f6d2d636f6c6f723a20234235433143423b0a09626f726465722d746f702d636f6c6f723a20234639463946393b0a7d0a0a756c2e63706c697374207b0a09626f726465722d746f702d636f6c6f723a20234235433143423b0a7d0a0a2363702d6d61696e202e70616e656c206c692e6865616465722064642c202363702d6d61696e202e70616e656c206c692e686561646572206474207b0a09636f6c6f723a20233030303030303b0a7d0a0a2363702d6d61696e207461626c652e7461626c6531207468656164207468207b0a09636f6c6f723a20233333333333333b0a09626f726465722d626f74746f6d2d636f6c6f723a20233333333333333b0a7d0a0a2363702d6d61696e202e706d2d6d657373616765207b0a09626f726465722d636f6c6f723a20234442444545323b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a7d0a0a2f2a20435020746162626564206d656e750a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a23746162732061207b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f62675f74616273312e67696622293b0a7d0a0a23746162732061207370616e207b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f62675f74616273322e67696622293b0a09636f6c6f723a20233533363438323b0a7d0a0a237461627320613a686f766572207370616e207b0a09636f6c6f723a20234243324134443b0a7d0a0a2374616273202e6163746976657461622061207b0a09626f726465722d626f74746f6d2d636f6c6f723a20234341444345423b0a7d0a0a2374616273202e6163746976657461622061207370616e207b0a09636f6c6f723a20233333333333333b0a7d0a0a2374616273202e61637469766574616220613a686f766572207370616e207b0a09636f6c6f723a20233030303030303b0a7d0a0a2f2a204d696e6920746162626564206d656e75207573656420696e204d43500a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a236d696e6974616273206c69207b0a096261636b67726f756e642d636f6c6f723a20234531454246323b0a7d0a0a236d696e6974616273206c692e616374697665746162207b0a096261636b67726f756e642d636f6c6f723a20234639463946393b0a7d0a0a236d696e6974616273206c692e61637469766574616220612c20236d696e6974616273206c692e61637469766574616220613a686f766572207b0a09636f6c6f723a20233333333333333b0a7d0a0a2f2a20554350206e617669676174696f6e206d656e750a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a0a2f2a204c696e6b207374796c657320666f7220746865207375622d73656374696f6e206c696e6b73202a2f0a236e617669676174696f6e2061207b0a09636f6c6f723a20233333333b0a096261636b67726f756e642d636f6c6f723a20234232433243463b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f62675f6d656e752e67696622293b0a7d0a0a2e72746c20236e617669676174696f6e2061207b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f62675f6d656e755f72746c2e67696622293b0a096261636b67726f756e642d706f736974696f6e3a203020313030253b0a7d0a0a236e617669676174696f6e20613a686f766572207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a096261636b67726f756e642d636f6c6f723a20236161626163363b0a09636f6c6f723a20234243324134443b0a7d0a0a236e617669676174696f6e20236163746976652d73756273656374696f6e2061207b0a09636f6c6f723a20234433313134313b0a096261636b67726f756e642d636f6c6f723a20234639463946393b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a236e617669676174696f6e20236163746976652d73756273656374696f6e20613a686f766572207b0a09636f6c6f723a20234433313134313b0a7d0a0a2f2a20507265666572656e6365732070616e65206c61796f75740a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2363702d6d61696e206832207b0a09636f6c6f723a20233333333333333b0a7d0a0a2363702d6d61696e202e70616e656c207b0a096261636b67726f756e642d636f6c6f723a20234639463946393b0a7d0a0a2363702d6d61696e202e706d207b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a7d0a0a0a2f2a20467269656e6473206c697374202a2f0a2e63702d6d696e69207b0a096261636b67726f756e642d636f6c6f723a20236565663566393b0a7d0a0a646c2e6d696e69206474207b0a09636f6c6f723a20233432353036373b0a7d0a0a2f2a20504d205374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a2f2a20504d204d65737361676520686973746f7279202a2f0a2e63757272656e74207b0a09636f6c6f723a20233030303030302021696d706f7274616e743b0a7d0a0a2f2a20504d206d61726b696e6720636f6c6f757273202a2f0a2e706d6c697374206c692e706d5f6d6573736167655f7265706f727465645f636f6c6f75722c202e706d5f6d6573736167655f7265706f727465645f636f6c6f7572207b0a09626f726465722d6c6566742d636f6c6f723a20234243324134443b0a09626f726465722d72696768742d636f6c6f723a20234243324134443b0a7d0a0a2e706d6c697374206c692e706d5f6d61726b65645f636f6c6f75722c202e706d5f6d61726b65645f636f6c6f7572207b0a09626f726465722d636f6c6f723a20234646363630303b0a7d0a0a2e706d6c697374206c692e706d5f7265706c6965645f636f6c6f75722c202e706d5f7265706c6965645f636f6c6f7572207b0a09626f726465722d636f6c6f723a20234139423843323b0a7d0a0a2e706d6c697374206c692e706d5f667269656e645f636f6c6f75722c202e706d5f667269656e645f636f6c6f7572207b0a09626f726465722d636f6c6f723a20233544384642443b0a7d0a0a2e706d6c697374206c692e706d5f666f655f636f6c6f75722c202e706d5f666f655f636f6c6f7572207b0a09626f726465722d636f6c6f723a20233030303030303b0a7d0a0a2f2a204176617461722067616c6c657279202a2f0a2367616c6c657279206c6162656c207b0a096261636b67726f756e642d636f6c6f723a20234646464646463b0a09626f726465722d636f6c6f723a20234343433b0a7d0a0a2367616c6c657279206c6162656c3a686f766572207b0a096261636b67726f756e642d636f6c6f723a20234545453b0a7d0a0a2f2a2020090a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d0a436f6c6f75727320616e64206261636b67726f756e647320666f7220666f726d732e6373730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a2f2a2047656e6572616c20666f726d207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a73656c656374207b0a09626f726465722d636f6c6f723a20233636363636363b0a096261636b67726f756e642d636f6c6f723a20234641464146413b0a09636f6c6f723a20233030303b0a7d0a0a6c6162656c207b0a09636f6c6f723a20233432353036373b0a7d0a0a6f7074696f6e2e64697361626c65642d6f7074696f6e207b0a09636f6c6f723a2067726179746578743b0a7d0a0a2f2a20446566696e6974696f6e206c697374206c61796f757420666f7220666f726d730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a6464206c6162656c207b0a09636f6c6f723a20233333333b0a7d0a0a2f2a20486f7665722065666665637473202a2f0a6669656c6473657420646c3a686f766572206474206c6162656c207b0a09636f6c6f723a20233030303030303b0a7d0a0a6669656c647365742e6669656c64733220646c3a686f766572206474206c6162656c207b0a09636f6c6f723a20696e68657269743b0a7d0a0a2f2a20517569636b2d6c6f67696e206f6e20696e6465782070616765202a2f0a6669656c647365742e717569636b2d6c6f67696e20696e7075742e696e707574626f78207b0a096261636b67726f756e642d636f6c6f723a20234632463346333b0a7d0a0a2f2a20506f7374696e672070616765207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2a2f0a0a236d6573736167652d626f78207465787461726561207b0a09636f6c6f723a20233333333333333b0a7d0a0a2f2a20496e707574206669656c64207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a2e696e707574626f78207b0a096261636b67726f756e642d636f6c6f723a20234646464646463b200a09626f726465722d636f6c6f723a20234234424143303b0a09636f6c6f723a20233333333333333b0a7d0a0a2e696e707574626f783a686f766572207b0a09626f726465722d636f6c6f723a20233131413345413b0a7d0a0a2e696e707574626f783a666f637573207b0a09626f726465722d636f6c6f723a20233131413345413b0a09636f6c6f723a20233046343938373b0a7d0a0a2f2a20466f726d20627574746f6e207374796c65730a2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d2d202a2f0a0a612e627574746f6e312c20696e7075742e627574746f6e312c20696e7075742e627574746f6e332c20612e627574746f6e322c20696e7075742e627574746f6e32207b0a09636f6c6f723a20233030303b0a096261636b67726f756e642d636f6c6f723a20234641464146413b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f62675f627574746f6e2e67696622293b0a7d0a0a612e627574746f6e312c20696e7075742e627574746f6e31207b0a09626f726465722d636f6c6f723a20233636363636363b0a7d0a0a696e7075742e627574746f6e33207b0a096261636b67726f756e642d696d6167653a206e6f6e653b0a7d0a0a2f2a20416c7465726e617469766520627574746f6e202a2f0a612e627574746f6e322c20696e7075742e627574746f6e322c20696e7075742e627574746f6e33207b0a09626f726465722d636f6c6f723a20233636363636363b0a7d0a0a2f2a203c613e20627574746f6e20696e20746865207374796c65206f662074686520666f726d20627574746f6e73202a2f0a612e627574746f6e312c20612e627574746f6e313a6c696e6b2c20612e627574746f6e313a766973697465642c20612e627574746f6e313a6163746976652c20612e627574746f6e322c20612e627574746f6e323a6c696e6b2c20612e627574746f6e323a766973697465642c20612e627574746f6e323a616374697665207b0a09636f6c6f723a20233030303030303b0a7d0a0a2f2a20486f76657220737461746573202a2f0a612e627574746f6e313a686f7665722c20696e7075742e627574746f6e313a686f7665722c20612e627574746f6e323a686f7665722c20696e7075742e627574746f6e323a686f7665722c20696e7075742e627574746f6e333a686f766572207b0a09626f726465722d636f6c6f723a20234243324134443b0a09636f6c6f723a20234243324134443b0a7d0a0a696e7075742e736561726368207b0a096261636b67726f756e642d696d6167653a2075726c28227b545f5448454d455f504154487d2f696d616765732f69636f6e5f74657874626f785f7365617263682e67696622293b0a7d0a0a696e7075742e64697361626c6564207b0a09636f6c6f723a20233636363636363b0a7d0a);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_topics`
--

CREATE TABLE IF NOT EXISTS `phpbb_topics` (
  `topic_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `icon_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_attachment` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `topic_approved` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `topic_reported` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `topic_title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `topic_poster` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_time` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_time_limit` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_views` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_replies` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_replies_real` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_status` tinyint(3) NOT NULL DEFAULT '0',
  `topic_type` tinyint(3) NOT NULL DEFAULT '0',
  `topic_first_post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_first_poster_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `topic_first_poster_colour` varchar(6) COLLATE utf8_bin NOT NULL DEFAULT '',
  `topic_last_post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_last_poster_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_last_poster_name` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `topic_last_poster_colour` varchar(6) COLLATE utf8_bin NOT NULL DEFAULT '',
  `topic_last_post_subject` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `topic_last_post_time` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_last_view_time` int(11) unsigned NOT NULL DEFAULT '0',
  `topic_moved_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_bumped` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `topic_bumper` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `poll_title` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `poll_start` int(11) unsigned NOT NULL DEFAULT '0',
  `poll_length` int(11) unsigned NOT NULL DEFAULT '0',
  `poll_max_options` tinyint(4) NOT NULL DEFAULT '1',
  `poll_last_vote` int(11) unsigned NOT NULL DEFAULT '0',
  `poll_vote_change` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`topic_id`),
  KEY `forum_id` (`forum_id`),
  KEY `forum_id_type` (`forum_id`,`topic_type`),
  KEY `last_post_time` (`topic_last_post_time`),
  KEY `topic_approved` (`topic_approved`),
  KEY `forum_appr_last` (`forum_id`,`topic_approved`,`topic_last_post_id`),
  KEY `fid_time_moved` (`forum_id`,`topic_last_post_time`,`topic_moved_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=37 ;

--
-- Dumping data for table `phpbb_topics`
--

INSERT INTO `phpbb_topics` (`topic_id`, `forum_id`, `icon_id`, `topic_attachment`, `topic_approved`, `topic_reported`, `topic_title`, `topic_poster`, `topic_time`, `topic_time_limit`, `topic_views`, `topic_replies`, `topic_replies_real`, `topic_status`, `topic_type`, `topic_first_post_id`, `topic_first_poster_name`, `topic_first_poster_colour`, `topic_last_post_id`, `topic_last_poster_id`, `topic_last_poster_name`, `topic_last_poster_colour`, `topic_last_post_subject`, `topic_last_post_time`, `topic_last_view_time`, `topic_moved_id`, `topic_bumped`, `topic_bumper`, `poll_title`, `poll_start`, `poll_length`, `poll_max_options`, `poll_last_vote`, `poll_vote_change`) VALUES
(3, 6, 0, 0, 1, 0, 'Please use this forum for course discussion', 2, 1347216772, 0, 3, 0, 0, 0, 0, 3, 'Administrator', 'AA0000', 3, 2, 'Administrator', 'AA0000', 'Please use this forum for course discussion', 1347216772, 1350620942, 0, 0, 0, '', 0, 0, 1, 0, 0),
(2, 7, 0, 0, 1, 0, 'Please use this forum for general discussion.', 2, 1347216671, 0, 5, 0, 0, 0, 0, 2, 'Administrator', 'AA0000', 2, 2, 'Administrator', 'AA0000', 'Please use this forum for general discussion.', 1347216671, 1350620300, 0, 0, 0, '', 0, 0, 0, 0, 0),
(4, 8, 0, 0, 1, 0, 'Please use this forum for course discussion', 2, 1347216789, 0, 2, 0, 0, 0, 0, 4, 'Administrator', 'AA0000', 4, 2, 'Administrator', 'AA0000', 'Please use this forum for course discussion', 1347216789, 1350620349, 0, 0, 0, '', 0, 0, 1, 0, 0),
(5, 9, 0, 0, 1, 0, 'Please use this forum for course discussion', 2, 1347216809, 0, 1, 0, 0, 0, 0, 5, 'Administrator', 'AA0000', 5, 2, 'Administrator', 'AA0000', 'Please use this forum for course discussion', 1347216809, 1347216813, 0, 0, 0, '', 0, 0, 1, 0, 0),
(6, 10, 0, 0, 1, 0, 'Please use this forum for course discussion', 2, 1347216826, 0, 1, 0, 0, 0, 0, 6, 'Administrator', 'AA0000', 6, 2, 'Administrator', 'AA0000', 'Please use this forum for course discussion', 1347216826, 1350620861, 0, 0, 0, '', 0, 0, 1, 0, 0),
(7, 11, 0, 0, 1, 0, 'Please use this forum for support.', 2, 1347216848, 0, 1, 0, 0, 0, 0, 7, 'Administrator', 'AA0000', 7, 2, 'Administrator', 'AA0000', 'Please use this forum for support.', 1347216848, 1350620419, 0, 0, 0, '', 0, 0, 1, 0, 0),
(8, 12, 0, 0, 1, 0, 'Please use this forum for non-related purposes.', 2, 1347216890, 0, 0, 0, 0, 0, 0, 8, 'Administrator', 'AA0000', 8, 2, 'Administrator', 'AA0000', 'Please use this forum for non-related purposes.', 1347216890, 1347216890, 0, 0, 0, '', 0, 0, 1, 0, 0),
(9, 14, 0, 0, 1, 0, 'Please use this forum for course discussion', 2, 1347216928, 0, 0, 0, 0, 0, 0, 9, 'Administrator', 'AA0000', 9, 2, 'Administrator', 'AA0000', 'Please use this forum for course discussion', 1347216928, 1347216928, 0, 0, 0, '', 0, 0, 1, 0, 0),
(10, 15, 0, 0, 1, 0, 'Please use this forum for course discussion', 2, 1347216941, 0, 0, 0, 0, 0, 0, 10, 'Administrator', 'AA0000', 10, 2, 'Administrator', 'AA0000', 'Please use this forum for course discussion', 1347216941, 1347216941, 0, 0, 0, '', 0, 0, 1, 0, 0),
(11, 16, 0, 0, 1, 0, 'Please use this forum for course discussion', 2, 1347216954, 0, 0, 0, 0, 0, 0, 11, 'Administrator', 'AA0000', 11, 2, 'Administrator', 'AA0000', 'Please use this forum for course discussion', 1347216954, 1347216954, 0, 0, 0, '', 0, 0, 1, 0, 0),
(12, 17, 0, 0, 1, 0, 'Please use this forum for course discussion', 2, 1347216970, 0, 0, 0, 0, 0, 0, 12, 'Administrator', 'AA0000', 12, 2, 'Administrator', 'AA0000', 'Please use this forum for course discussion', 1347216970, 1347216970, 0, 0, 0, '', 0, 0, 1, 0, 0),
(13, 18, 0, 0, 1, 0, 'Please use this forum for course discussion', 2, 1347216984, 0, 0, 0, 0, 0, 0, 13, 'Administrator', 'AA0000', 13, 2, 'Administrator', 'AA0000', 'Please use this forum for course discussion', 1347216984, 1347216984, 0, 0, 0, '', 0, 0, 1, 0, 0),
(14, 19, 0, 0, 1, 0, 'Please use this forum for course discussion', 2, 1347216999, 0, 0, 0, 0, 0, 0, 14, 'Administrator', 'AA0000', 14, 2, 'Administrator', 'AA0000', 'Please use this forum for course discussion', 1347216999, 1347216999, 0, 0, 0, '', 0, 0, 1, 0, 0),
(15, 27, 0, 0, 1, 0, '本讨论区仅用于一般性问题讨论', 54, 1347928574, 0, 0, 0, 0, 0, 0, 15, 'lijuanyin', '', 15, 54, 'lijuanyin', '', '本讨论区仅用于一般性问题讨论', 1347928574, 1347928574, 0, 0, 0, '', 0, 0, 1, 0, 0),
(16, 31, 0, 0, 1, 0, '请在此讨论本课程相关问题', 54, 1347928648, 0, 1, 0, 0, 0, 0, 16, 'lijuanyin', '', 16, 54, 'lijuanyin', '', '请在此讨论本课程相关问题', 1347928648, 1347928651, 0, 0, 0, '', 0, 0, 1, 0, 0),
(17, 32, 0, 0, 1, 0, '请在此讨论本课程相关问题', 54, 1347928663, 0, 0, 0, 0, 0, 0, 17, 'lijuanyin', '', 17, 54, 'lijuanyin', '', '请在此讨论本课程相关问题', 1347928663, 1347928663, 0, 0, 0, '', 0, 0, 1, 0, 0),
(18, 33, 0, 0, 1, 0, '请在此讨论本课程相关问题', 54, 1347928688, 0, 0, 0, 0, 0, 0, 18, 'lijuanyin', '', 18, 54, 'lijuanyin', '', '请在此讨论本课程相关问题', 1347928688, 1347928688, 0, 0, 0, '', 0, 0, 1, 0, 0),
(19, 34, 0, 0, 1, 0, '请在此讨论本课程相关问题', 54, 1347928725, 0, 0, 0, 0, 0, 0, 19, 'lijuanyin', '', 19, 54, 'lijuanyin', '', '请在此讨论本课程相关问题', 1347928725, 1347928725, 0, 0, 0, '', 0, 0, 1, 0, 0),
(20, 29, 0, 0, 1, 0, '请在此发布求助或技术支持话题', 54, 1347928761, 0, 0, 0, 0, 0, 0, 20, 'lijuanyin', '', 20, 54, 'lijuanyin', '', '请在此发布求助或技术支持话题', 1347928761, 1347928761, 0, 0, 0, '', 0, 0, 1, 0, 0),
(21, 30, 0, 0, 1, 0, '请在此发布任何无关课程的话题', 54, 1347928845, 0, 1, 0, 0, 0, 0, 21, 'lijuanyin', '', 21, 54, 'lijuanyin', '', '请在此发布任何无关课程的话题', 1347928845, 1347928848, 0, 0, 0, '', 0, 0, 1, 0, 0),
(23, 21, 0, 0, 1, 0, 'Cursos/Programas en línea', 55, 1350622139, 0, 9, 0, 0, 0, 0, 23, 'Ellenz', '', 23, 55, 'Ellenz', '', 'Cursos/Programas en línea', 1350622139, 1351223892, 0, 0, 0, '', 0, 0, 0, 0, 0),
(22, 21, 0, 0, 1, 0, 'Debate general', 2, 1350620471, 0, 4, 0, 0, 0, 0, 22, 'Administrator', 'AA0000', 22, 2, 'Administrator', 'AA0000', 'Debate general', 1350620471, 1351222854, 0, 0, 0, '', 0, 0, 0, 0, 0),
(24, 21, 0, 0, 1, 0, 'Empower en línea, todos mensajes', 55, 1351223933, 0, 2, 0, 0, 0, 0, 24, 'Ellenz', '', 24, 55, 'Ellenz', '', 'Empower en línea, todos mensajes', 1351223933, 1351224318, 0, 0, 0, '', 0, 0, 0, 0, 0),
(25, 21, 0, 0, 1, 0, 'Entrenamiento CARE en línea, todos mensajes', 55, 1351223970, 0, 2, 0, 0, 0, 0, 25, 'Ellenz', '', 25, 55, 'Ellenz', '', 'Entrenamiento CARE en línea, todos mensajes', 1351223970, 1351224338, 0, 0, 0, '', 0, 0, 0, 0, 0),
(26, 21, 0, 0, 1, 0, 'Introducción al Proveer Cuidado en línea, todos mensajes', 55, 1351224005, 0, 2, 0, 0, 0, 0, 26, 'Ellenz', '', 26, 55, 'Ellenz', '', 'Introducción al Proveer Cuidado en línea, todos mensajes', 1351224005, 1351224375, 0, 0, 0, '', 0, 0, 0, 0, 0),
(27, 21, 0, 0, 1, 0, 'Comprendiendo la Pérdida de Memoria (CPM) en línea, todos m', 55, 1351224047, 0, 2, 0, 0, 0, 0, 27, 'Ellenz', '', 27, 55, 'Ellenz', '', 'Comprendiendo la Pérdida de Memoria (CPM) en línea, todos m', 1351224047, 1351224425, 0, 0, 0, '', 0, 0, 0, 0, 0),
(28, 21, 0, 0, 1, 0, 'Programa de Gerontología en línea', 55, 1351224592, 0, 0, 0, 0, 0, 0, 28, 'Ellenz', '', 28, 55, 'Ellenz', '', 'Programa de Gerontología en línea', 1351224592, 1351224592, 0, 0, 0, '', 0, 0, 1, 0, 0),
(29, 21, 0, 0, 1, 0, 'Conceptos sobre el envejecimiento', 55, 1351224619, 0, 1, 0, 0, 0, 0, 29, 'Ellenz', '', 29, 55, 'Ellenz', '', 'Conceptos sobre el envejecimiento', 1351224619, 1351224622, 0, 0, 0, '', 0, 0, 1, 0, 0),
(30, 21, 0, 0, 1, 0, 'Dimensiones culturales sobre el envejecimiento', 55, 1351224668, 0, 0, 0, 0, 0, 0, 30, 'Ellenz', '', 30, 55, 'Ellenz', '', 'Dimensiones culturales sobre el envejecimiento', 1351224668, 1351224668, 0, 0, 0, '', 0, 0, 1, 0, 0),
(31, 21, 0, 0, 1, 0, 'Contexto ambiental sobre el envejecimiento', 55, 1351224762, 0, 2, 0, 0, 0, 0, 31, 'Ellenz', '', 31, 55, 'Ellenz', '', 'Contexto ambiental sobre el envejecimiento', 1351224762, 1351224918, 0, 0, 0, '', 0, 0, 1, 0, 0),
(32, 21, 0, 0, 1, 0, 'Salud mental y el envejecimiento', 55, 1351224909, 0, 1, 0, 0, 0, 0, 32, 'Ellenz', '', 32, 55, 'Ellenz', '', 'Salud mental y el envejecimiento', 1351224909, 1351224912, 0, 0, 0, '', 0, 0, 1, 0, 0),
(33, 21, 0, 0, 1, 0, 'Seminario interdisciplinario sobre el envejecimiento', 55, 1351224947, 0, 0, 0, 0, 0, 0, 33, 'Ellenz', '', 33, 55, 'Ellenz', '', 'Seminario interdisciplinario sobre el envejecimiento', 1351224947, 1351224947, 0, 0, 0, '', 0, 0, 1, 0, 0),
(34, 21, 0, 0, 1, 0, 'Intervenciones con los adultos mayores', 55, 1351224973, 0, 0, 0, 0, 0, 0, 34, 'Ellenz', '', 34, 55, 'Ellenz', '', 'Intervenciones con los adultos mayores', 1351224973, 1351224973, 0, 0, 0, '', 0, 0, 1, 0, 0),
(35, 21, 0, 0, 1, 0, 'Ayuda/Apoyo Técnico', 55, 1351225076, 0, 1, 0, 0, 0, 0, 35, 'Ellenz', '', 35, 55, 'Ellenz', '', 'Ayuda/Apoyo Técnico', 1351225076, 1351225146, 0, 0, 0, '', 0, 0, 1, 0, 0),
(36, 21, 0, 0, 1, 0, 'Foro para todos los mensajes no relacionados al curso', 55, 1351225133, 0, 1, 0, 0, 0, 0, 36, 'Ellenz', '', 36, 55, 'Ellenz', '', 'Foro para todos los mensajes no relacionados al curso', 1351225133, 1351225155, 0, 0, 0, '', 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_topics_posted`
--

CREATE TABLE IF NOT EXISTS `phpbb_topics_posted` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_posted` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`topic_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_topics_posted`
--

INSERT INTO `phpbb_topics_posted` (`user_id`, `topic_id`, `topic_posted`) VALUES
(2, 1, 1),
(2, 2, 1),
(2, 3, 1),
(2, 4, 1),
(2, 5, 1),
(2, 6, 1),
(2, 7, 1),
(2, 8, 1),
(2, 9, 1),
(2, 10, 1),
(2, 11, 1),
(2, 12, 1),
(2, 13, 1),
(2, 14, 1),
(54, 15, 1),
(54, 16, 1),
(54, 17, 1),
(54, 18, 1),
(54, 19, 1),
(54, 20, 1),
(54, 21, 1),
(2, 22, 1),
(55, 23, 1),
(55, 24, 1),
(55, 25, 1),
(55, 26, 1),
(55, 27, 1),
(55, 28, 1),
(55, 29, 1),
(55, 30, 1),
(55, 31, 1),
(55, 32, 1),
(55, 33, 1),
(55, 34, 1),
(55, 35, 1),
(55, 36, 1);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_topics_track`
--

CREATE TABLE IF NOT EXISTS `phpbb_topics_track` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `forum_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `mark_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`topic_id`),
  KEY `topic_id` (`topic_id`),
  KEY `forum_id` (`forum_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_topics_track`
--

INSERT INTO `phpbb_topics_track` (`user_id`, `topic_id`, `forum_id`, `mark_time`) VALUES
(2, 2, 7, 1347216734);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_topics_watch`
--

CREATE TABLE IF NOT EXISTS `phpbb_topics_watch` (
  `topic_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `notify_status` tinyint(1) unsigned NOT NULL DEFAULT '0',
  KEY `topic_id` (`topic_id`),
  KEY `user_id` (`user_id`),
  KEY `notify_stat` (`notify_status`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_users`
--

CREATE TABLE IF NOT EXISTS `phpbb_users` (
  `user_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_type` tinyint(2) NOT NULL DEFAULT '0',
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '3',
  `user_permissions` mediumtext COLLATE utf8_bin NOT NULL,
  `user_perm_from` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_ip` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_regdate` int(11) unsigned NOT NULL DEFAULT '0',
  `username` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `username_clean` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_password` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_passchg` int(11) unsigned NOT NULL DEFAULT '0',
  `user_pass_convert` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_email` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_email_hash` bigint(20) NOT NULL DEFAULT '0',
  `user_birthday` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_lastvisit` int(11) unsigned NOT NULL DEFAULT '0',
  `user_lastmark` int(11) unsigned NOT NULL DEFAULT '0',
  `user_lastpost_time` int(11) unsigned NOT NULL DEFAULT '0',
  `user_lastpage` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_last_confirm_key` varchar(10) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_last_search` int(11) unsigned NOT NULL DEFAULT '0',
  `user_warnings` tinyint(4) NOT NULL DEFAULT '0',
  `user_last_warning` int(11) unsigned NOT NULL DEFAULT '0',
  `user_login_attempts` tinyint(4) NOT NULL DEFAULT '0',
  `user_inactive_reason` tinyint(2) NOT NULL DEFAULT '0',
  `user_inactive_time` int(11) unsigned NOT NULL DEFAULT '0',
  `user_posts` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_lang` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_timezone` decimal(5,2) NOT NULL DEFAULT '0.00',
  `user_dst` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_dateformat` varchar(30) COLLATE utf8_bin NOT NULL DEFAULT 'd M Y H:i',
  `user_style` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_rank` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_colour` varchar(6) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_new_privmsg` int(4) NOT NULL DEFAULT '0',
  `user_unread_privmsg` int(4) NOT NULL DEFAULT '0',
  `user_last_privmsg` int(11) unsigned NOT NULL DEFAULT '0',
  `user_message_rules` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_full_folder` int(11) NOT NULL DEFAULT '-3',
  `user_emailtime` int(11) unsigned NOT NULL DEFAULT '0',
  `user_topic_show_days` smallint(4) unsigned NOT NULL DEFAULT '0',
  `user_topic_sortby_type` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 't',
  `user_topic_sortby_dir` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 'd',
  `user_post_show_days` smallint(4) unsigned NOT NULL DEFAULT '0',
  `user_post_sortby_type` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 't',
  `user_post_sortby_dir` varchar(1) COLLATE utf8_bin NOT NULL DEFAULT 'a',
  `user_notify` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_notify_pm` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_notify_type` tinyint(4) NOT NULL DEFAULT '0',
  `user_allow_pm` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_allow_viewonline` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_allow_viewemail` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_allow_massemail` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_options` int(11) unsigned NOT NULL DEFAULT '230271',
  `user_avatar` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_avatar_type` tinyint(2) NOT NULL DEFAULT '0',
  `user_avatar_width` smallint(4) unsigned NOT NULL DEFAULT '0',
  `user_avatar_height` smallint(4) unsigned NOT NULL DEFAULT '0',
  `user_sig` mediumtext COLLATE utf8_bin NOT NULL,
  `user_sig_bbcode_uid` varchar(8) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_sig_bbcode_bitfield` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_from` varchar(100) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_icq` varchar(15) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_aim` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_yim` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_msnm` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_jabber` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_website` varchar(200) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_occ` text COLLATE utf8_bin NOT NULL,
  `user_interests` text COLLATE utf8_bin NOT NULL,
  `user_actkey` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_newpasswd` varchar(40) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_form_salt` varchar(32) COLLATE utf8_bin NOT NULL DEFAULT '',
  `user_new` tinyint(1) unsigned NOT NULL DEFAULT '1',
  `user_reminded` tinyint(4) NOT NULL DEFAULT '0',
  `user_reminded_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `username_clean` (`username_clean`),
  KEY `user_birthday` (`user_birthday`),
  KEY `user_email_hash` (`user_email_hash`),
  KEY `user_type` (`user_type`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=56 ;

--
-- Dumping data for table `phpbb_users`
--

INSERT INTO `phpbb_users` (`user_id`, `user_type`, `group_id`, `user_permissions`, `user_perm_from`, `user_ip`, `user_regdate`, `username`, `username_clean`, `user_password`, `user_passchg`, `user_pass_convert`, `user_email`, `user_email_hash`, `user_birthday`, `user_lastvisit`, `user_lastmark`, `user_lastpost_time`, `user_lastpage`, `user_last_confirm_key`, `user_last_search`, `user_warnings`, `user_last_warning`, `user_login_attempts`, `user_inactive_reason`, `user_inactive_time`, `user_posts`, `user_lang`, `user_timezone`, `user_dst`, `user_dateformat`, `user_style`, `user_rank`, `user_colour`, `user_new_privmsg`, `user_unread_privmsg`, `user_last_privmsg`, `user_message_rules`, `user_full_folder`, `user_emailtime`, `user_topic_show_days`, `user_topic_sortby_type`, `user_topic_sortby_dir`, `user_post_show_days`, `user_post_sortby_type`, `user_post_sortby_dir`, `user_notify`, `user_notify_pm`, `user_notify_type`, `user_allow_pm`, `user_allow_viewonline`, `user_allow_viewemail`, `user_allow_massemail`, `user_options`, `user_avatar`, `user_avatar_type`, `user_avatar_width`, `user_avatar_height`, `user_sig`, `user_sig_bbcode_uid`, `user_sig_bbcode_bitfield`, `user_from`, `user_icq`, `user_aim`, `user_yim`, `user_msnm`, `user_jabber`, `user_website`, `user_occ`, `user_interests`, `user_actkey`, `user_newpasswd`, `user_form_salt`, `user_new`, `user_reminded`, `user_reminded_time`) VALUES
(1, 2, 1, 0x30303030303030303030336b687261336e6b0a0a0a0a0a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f3030303030300a6931636a796f303030303030, 0, '', 1346462145, 'Anonymous', 'anonymous', '', 0, 0, '', 0, '', 0, 0, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'd M Y H:i', 1, 0, '', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'f3a23e7eec6dc8c2', 1, 0, 0),
(2, 3, 5, 0x7a696b307a6a7a696b307a6a7a696b3078730a0a0a0a0a716c63747a713030303030300a7a696b307a693030303030300a7a696b307a693030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a693030303030300a7a696b307a69303030303030, 0, '98.253.33.44', 1346462145, 'Administrator', 'administrator', '$H$9S./VdIikBimqJov/SH3ItZPQ3BqFz/', 0, 0, 'jwoodall@matherlifeways.com', 424732528927, '', 1351833669, 0, 1350620471, 'viewforum.php?f=21', '', 0, 0, 0, 0, 0, 0, 14, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 1, 'AA0000', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 1, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2b51549836a21e62', 0, 0, 0),
(3, 2, 6, '', 0, '', 1346462155, 'AdsBot [Google]', 'adsbot [google]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'd36d1cda3cabcb1a', 0, 0, 0),
(4, 2, 6, '', 0, '', 1346462155, 'Alexa [Bot]', 'alexa [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '9d02b18144edbf17', 0, 0, 0),
(5, 2, 6, '', 0, '', 1346462155, 'Alta Vista [Bot]', 'alta vista [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '665405a69a650494', 0, 0, 0),
(6, 2, 6, '', 0, '', 1346462155, 'Ask Jeeves [Bot]', 'ask jeeves [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'fdca8031cec1b0ad', 0, 0, 0),
(7, 2, 6, '', 0, '', 1346462155, 'Baidu [Spider]', 'baidu [spider]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0197ab7c94445d2e', 0, 0, 0),
(8, 2, 6, '', 0, '', 1346462155, 'Bing [Bot]', 'bing [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'f94a258485bcb0a8', 0, 0, 0),
(9, 2, 6, '', 0, '', 1346462155, 'Exabot [Bot]', 'exabot [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dc494d951805218d', 0, 0, 0),
(10, 2, 6, '', 0, '', 1346462155, 'FAST Enterprise [Crawler]', 'fast enterprise [crawler]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'ceba6fb1caf9cc5a', 0, 0, 0),
(11, 2, 6, '', 0, '', 1346462155, 'FAST WebCrawler [Crawler]', 'fast webcrawler [crawler]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'cb0d39d5485fb857', 0, 0, 0),
(12, 2, 6, '', 0, '', 1346462155, 'Francis [Bot]', 'francis [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '765dc90a20422fe0', 0, 0, 0),
(13, 2, 6, '', 0, '', 1346462155, 'Gigabot [Bot]', 'gigabot [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'dc1e740bccb3b18f', 0, 0, 0),
(14, 2, 6, '', 0, '', 1346462155, 'Google Adsense [Bot]', 'google adsense [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'c6bb95be4ca4200f', 0, 0, 0),
(15, 2, 6, '', 0, '', 1346462155, 'Google Desktop', 'google desktop', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '723c9886d3c90dda', 0, 0, 0),
(16, 2, 6, '', 0, '', 1346462155, 'Google Feedfetcher', 'google feedfetcher', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'eca9e7b7a0b23099', 0, 0, 0),
(17, 2, 6, '', 0, '', 1346462155, 'Google [Bot]', 'google [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'f568ac966db2613f', 0, 0, 0),
(18, 2, 6, '', 0, '', 1346462155, 'Heise IT-Markt [Crawler]', 'heise it-markt [crawler]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'e4639ea365670aa0', 0, 0, 0),
(19, 2, 6, '', 0, '', 1346462155, 'Heritrix [Crawler]', 'heritrix [crawler]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2e36baf6a681e40f', 0, 0, 0),
(20, 2, 6, '', 0, '', 1346462155, 'IBM Research [Bot]', 'ibm research [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'e54c50a50cb05f3d', 0, 0, 0),
(21, 2, 6, '', 0, '', 1346462155, 'ICCrawler - ICjobs', 'iccrawler - icjobs', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '94d066079625cfe4', 0, 0, 0),
(22, 2, 6, '', 0, '', 1346462155, 'ichiro [Crawler]', 'ichiro [crawler]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '4a60786e589a8976', 0, 0, 0),
(23, 2, 6, '', 0, '', 1346462155, 'Majestic-12 [Bot]', 'majestic-12 [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3a11c072892a2735', 0, 0, 0),
(24, 2, 6, '', 0, '', 1346462155, 'Metager [Bot]', 'metager [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '099d92da16868fdb', 0, 0, 0),
(25, 2, 6, '', 0, '', 1346462155, 'MSN NewsBlogs', 'msn newsblogs', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0468ffc7baadf502', 0, 0, 0),
(26, 2, 6, '', 0, '', 1346462155, 'MSN [Bot]', 'msn [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'f9eb3c7581878c0a', 0, 0, 0),
(27, 2, 6, '', 0, '', 1346462155, 'MSNbot Media', 'msnbot media', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '95d893c19e6d041f', 0, 0, 0),
(28, 2, 6, '', 0, '', 1346462155, 'NG-Search [Bot]', 'ng-search [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'e8f731bc708e3ca8', 0, 0, 0),
(29, 2, 6, '', 0, '', 1346462155, 'Nutch [Bot]', 'nutch [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '132f75c381dc2c44', 0, 0, 0),
(30, 2, 6, '', 0, '', 1346462155, 'Nutch/CVS [Bot]', 'nutch/cvs [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'd44ecd59e1cefcf7', 0, 0, 0),
(31, 2, 6, '', 0, '', 1346462155, 'OmniExplorer [Bot]', 'omniexplorer [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '6160a9d0c2e2034a', 0, 0, 0),
(32, 2, 6, '', 0, '', 1346462155, 'Online link [Validator]', 'online link [validator]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'a6b45b4442b45407', 0, 0, 0),
(33, 2, 6, '', 0, '', 1346462155, 'psbot [Picsearch]', 'psbot [picsearch]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '8b46348b0153da51', 0, 0, 0),
(34, 2, 6, '', 0, '', 1346462155, 'Seekport [Bot]', 'seekport [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'c2bbc1dbfdc9ab6f', 0, 0, 0),
(35, 2, 6, '', 0, '', 1346462155, 'Sensis [Crawler]', 'sensis [crawler]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '210d7ce246ad92bd', 0, 0, 0),
(36, 2, 6, '', 0, '', 1346462155, 'SEO Crawler', 'seo crawler', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0a6e5ab9549ee4c1', 0, 0, 0),
(37, 2, 6, '', 0, '', 1346462155, 'Seoma [Crawler]', 'seoma [crawler]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '954ece296138bdcc', 0, 0, 0),
(38, 2, 6, '', 0, '', 1346462155, 'SEOSearch [Crawler]', 'seosearch [crawler]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2b39689d800be472', 0, 0, 0),
(39, 2, 6, '', 0, '', 1346462155, 'Snappy [Bot]', 'snappy [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '3ee52d639179c442', 0, 0, 0),
(40, 2, 6, '', 0, '', 1346462155, 'Steeler [Crawler]', 'steeler [crawler]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'e22dbd6a945b3176', 0, 0, 0),
(41, 2, 6, '', 0, '', 1346462155, 'Synoo [Bot]', 'synoo [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '8ce1584032cf0329', 0, 0, 0),
(42, 2, 6, '', 0, '', 1346462155, 'Telekom [Bot]', 'telekom [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'e6eee18b06d2a43e', 0, 0, 0),
(43, 2, 6, '', 0, '', 1346462155, 'TurnitinBot [Bot]', 'turnitinbot [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1178717f2f19c233', 0, 0, 0),
(44, 2, 6, '', 0, '', 1346462155, 'Voyager [Bot]', 'voyager [bot]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '8f7cd8d49f6efc6b', 0, 0, 0),
(45, 2, 6, '', 0, '', 1346462155, 'W3 [Sitesearch]', 'w3 [sitesearch]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2db627fc26c1d567', 0, 0, 0),
(46, 2, 6, '', 0, '', 1346462155, 'W3C [Linkcheck]', 'w3c [linkcheck]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '96b5cc0f8223e08a', 0, 0, 0),
(47, 2, 6, '', 0, '', 1346462155, 'W3C [Validator]', 'w3c [validator]', '', 1346462155, 0, '', 0, '', 0, 1346462155, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '63dd4eb25d912ad7', 0, 0, 0),
(48, 2, 6, '', 0, '', 1346462155, 'WiseNut [Bot]', 'wisenut [bot]', '', 1346462156, 0, '', 0, '', 0, 1346462156, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '59795cf376fc7fc4', 0, 0, 0),
(49, 2, 6, '', 0, '', 1346462156, 'YaCy [Bot]', 'yacy [bot]', '', 1346462156, 0, '', 0, '', 0, 1346462156, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'f9a34a6cebabb8a0', 0, 0, 0),
(50, 2, 6, '', 0, '', 1346462156, 'Yahoo MMCrawler [Bot]', 'yahoo mmcrawler [bot]', '', 1346462156, 0, '', 0, '', 0, 1346462156, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'baa190aeee46098b', 0, 0, 0),
(51, 2, 6, '', 0, '', 1346462156, 'Yahoo Slurp [Bot]', 'yahoo slurp [bot]', '', 1346462156, 0, '', 0, '', 0, 1346462156, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '2256ab38745ace56', 0, 0, 0),
(52, 2, 6, '', 0, '', 1346462156, 'Yahoo [Bot]', 'yahoo [bot]', '', 1346462156, 0, '', 0, '', 0, 1346462156, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '7a86c30f2db9ceb0', 0, 0, 0),
(53, 2, 6, '', 0, '', 1346462156, 'YahooSeeker [Bot]', 'yahooseeker [bot]', '', 1346462156, 0, '', 0, '', 0, 1346462156, 0, '', '', 0, 0, 0, 0, 0, 0, 0, 'en', 0.00, 0, 'D M d, Y g:i a', 1, 0, '9E8DA7', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 0, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '7742d52abf29c7e9', 0, 0, 0),
(54, 0, 2, '', 0, '98.228.234.190', 1347924902, 'lijuanyin', 'lijuanyin', '$H$9L/yvQqe4MYsrWDF7Lss2bNERr5gkh1', 1347924902, 0, 'yin_li_juan@hotmail.com', 226331447923, '', 1347928878, 1347924902, 1347928845, 'viewforum.php?f=27', '', 0, 0, 0, 0, 0, 0, 7, 'en', -6.00, 1, 'D M d, Y g:i a', 1, 0, '', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 1, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '0a4f78f83d73593e', 0, 0, 0),
(55, 0, 2, 0x7a69656570733030303037337a696b3078730a0a0a0a0a7a696b307a693030303030300a716c63747a713030303030300a7a696b307a693030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a7a696b307a693030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a713030303030300a716c63747a71303030303030, 0, '69.179.146.189', 1350619572, 'Ellenz', 'ellenz', '$H$9wmxRdxmfiwI0Dp3JfHG/KEE6syFuN0', 1350619572, 0, 'elznavarro@yahoo.com', 117245891720, '', 1351225166, 1350619572, 1351225133, '', '', 0, 0, 0, 0, 0, 0, 14, 'en', -6.00, 1, 'D M d, Y g:i a', 1, 0, '', 0, 0, 0, 0, -3, 0, 0, 't', 'd', 0, 't', 'a', 0, 1, 0, 1, 1, 1, 1, 230271, '', 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1477350e82a4c3ab', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_user_group`
--

CREATE TABLE IF NOT EXISTS `phpbb_user_group` (
  `group_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `group_leader` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `user_pending` tinyint(1) unsigned NOT NULL DEFAULT '1',
  KEY `group_id` (`group_id`),
  KEY `user_id` (`user_id`),
  KEY `group_leader` (`group_leader`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `phpbb_user_group`
--

INSERT INTO `phpbb_user_group` (`group_id`, `user_id`, `group_leader`, `user_pending`) VALUES
(1, 1, 0, 0),
(2, 2, 0, 0),
(4, 2, 0, 0),
(5, 2, 1, 0),
(6, 3, 0, 0),
(6, 4, 0, 0),
(6, 5, 0, 0),
(6, 6, 0, 0),
(6, 7, 0, 0),
(6, 8, 0, 0),
(6, 9, 0, 0),
(6, 10, 0, 0),
(6, 11, 0, 0),
(6, 12, 0, 0),
(6, 13, 0, 0),
(6, 14, 0, 0),
(6, 15, 0, 0),
(6, 16, 0, 0),
(6, 17, 0, 0),
(6, 18, 0, 0),
(6, 19, 0, 0),
(6, 20, 0, 0),
(6, 21, 0, 0),
(6, 22, 0, 0),
(6, 23, 0, 0),
(6, 24, 0, 0),
(6, 25, 0, 0),
(6, 26, 0, 0),
(6, 27, 0, 0),
(6, 28, 0, 0),
(6, 29, 0, 0),
(6, 30, 0, 0),
(6, 31, 0, 0),
(6, 32, 0, 0),
(6, 33, 0, 0),
(6, 34, 0, 0),
(6, 35, 0, 0),
(6, 36, 0, 0),
(6, 37, 0, 0),
(6, 38, 0, 0),
(6, 39, 0, 0),
(6, 40, 0, 0),
(6, 41, 0, 0),
(6, 42, 0, 0),
(6, 43, 0, 0),
(6, 44, 0, 0),
(6, 45, 0, 0),
(6, 46, 0, 0),
(6, 47, 0, 0),
(6, 48, 0, 0),
(6, 49, 0, 0),
(6, 50, 0, 0),
(6, 51, 0, 0),
(6, 52, 0, 0),
(6, 53, 0, 0),
(2, 54, 0, 0),
(2, 55, 0, 0),
(4, 55, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_warnings`
--

CREATE TABLE IF NOT EXISTS `phpbb_warnings` (
  `warning_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `post_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `log_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `warning_time` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`warning_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_words`
--

CREATE TABLE IF NOT EXISTS `phpbb_words` (
  `word_id` mediumint(8) unsigned NOT NULL AUTO_INCREMENT,
  `word` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  `replacement` varchar(255) COLLATE utf8_bin NOT NULL DEFAULT '',
  PRIMARY KEY (`word_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `phpbb_zebra`
--

CREATE TABLE IF NOT EXISTS `phpbb_zebra` (
  `user_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `zebra_id` mediumint(8) unsigned NOT NULL DEFAULT '0',
  `friend` tinyint(1) unsigned NOT NULL DEFAULT '0',
  `foe` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`zebra_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `onlinecourseportal_avatar`
--
ALTER TABLE `onlinecourseportal_avatar`
  ADD CONSTRAINT `onlinecourseportal_avatar_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `onlinecourseportal_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `onlinecourseportal_message`
--
ALTER TABLE `onlinecourseportal_message`
  ADD CONSTRAINT `onlinecourseportal_message_ibfk_1` FOREIGN KEY (`id`) REFERENCES `onlinecourseportal_source_message` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `onlinecourseportal_referral`
--
ALTER TABLE `onlinecourseportal_referral`
  ADD CONSTRAINT `onlinecourseportal_referral_ibfk_1` FOREIGN KEY (`referrer`) REFERENCES `onlinecourseportal_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `onlinecourseportal_referral_ibfk_2` FOREIGN KEY (`referee`) REFERENCES `onlinecourseportal_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `onlinecourseportal_survey_answer`
--
ALTER TABLE `onlinecourseportal_survey_answer`
  ADD CONSTRAINT `onlinecourseportal_survey_answer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `onlinecourseportal_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `onlinecourseportal_survey_answer_ibfk_2` FOREIGN KEY (`question_id`) REFERENCES `onlinecourseportal_survey_question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `onlinecourseportal_survey_answer_option`
--
ALTER TABLE `onlinecourseportal_survey_answer_option`
  ADD CONSTRAINT `onlinecourseportal_survey_answer_option_ibfk_1` FOREIGN KEY (`answer_id`) REFERENCES `onlinecourseportal_survey_answer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `onlinecourseportal_survey_answer_option_ibfk_2` FOREIGN KEY (`option_id`) REFERENCES `onlinecourseportal_survey_question_option` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `onlinecourseportal_survey_answer_text`
--
ALTER TABLE `onlinecourseportal_survey_answer_text`
  ADD CONSTRAINT `onlinecourseportal_survey_answer_text_ibfk_1` FOREIGN KEY (`answer_id`) REFERENCES `onlinecourseportal_survey_answer` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `onlinecourseportal_survey_question`
--
ALTER TABLE `onlinecourseportal_survey_question`
  ADD CONSTRAINT `onlinecourseportal_survey_question_ibfk_1` FOREIGN KEY (`survey_id`) REFERENCES `onlinecourseportal_survey` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `onlinecourseportal_survey_question_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `onlinecourseportal_survey_question_type` (`id`);

--
-- Constraints for table `onlinecourseportal_survey_question_option`
--
ALTER TABLE `onlinecourseportal_survey_question_option`
  ADD CONSTRAINT `onlinecourseportal_survey_question_option_ibfk_1` FOREIGN KEY (`question_id`) REFERENCES `onlinecourseportal_survey_question` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `onlinecourseportal_uploaded_file`
--
ALTER TABLE `onlinecourseportal_uploaded_file`
  ADD CONSTRAINT `onlinecourseportal_uploaded_file_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `onlinecourseportal_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `onlinecourseportal_user`
--
ALTER TABLE `onlinecourseportal_user`
  ADD CONSTRAINT `onlinecourseportal_user_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `onlinecourseportal_group` (`id`);

--
-- Constraints for table `onlinecourseportal_user_activated`
--
ALTER TABLE `onlinecourseportal_user_activated`
  ADD CONSTRAINT `onlinecourseportal_user_activated_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `onlinecourseportal_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `onlinecourseportal_user_course`
--
ALTER TABLE `onlinecourseportal_user_course`
  ADD CONSTRAINT `onlinecourseportal_user_course_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `onlinecourseportal_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `onlinecourseportal_user_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `onlinecourseportal_course` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `onlinecourseportal_user_profile`
--
ALTER TABLE `onlinecourseportal_user_profile`
  ADD CONSTRAINT `onlinecourseportal_user_profile_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `onlinecourseportal_user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `onlinecourseportal_user_profile_ibfk_2` FOREIGN KEY (`state_id`) REFERENCES `onlinecourseportal_states` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
