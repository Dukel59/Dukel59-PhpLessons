-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 21 2023 г., 22:36
-- Версия сервера: 8.0.30
-- Версия PHP: 8.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `schoolDB`
--

-- --------------------------------------------------------

--
-- Структура таблицы `courses`
--

CREATE TABLE `courses` (
  `id` int NOT NULL,
  `title` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `end_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `courses`
--

INSERT INTO `courses` (`id`, `title`, `description`, `start_date`, `end_date`) VALUES
(1, 'Python разработчик', 'Научим с нуля разработке web-приложений на Python за 5,5 месяцев.', '2023-02-27 13:00:00', '2023-08-15 18:30:00'),
(2, 'Android разработчик', 'Научим разрабатывать приложения для Android за 5 месяцев.', '2023-03-13 13:00:00', '2023-08-13 18:30:00'),
(3, 'WEB\r\nразработчик', 'Научим с нуля HTML, CSS, JavaScript и PHP за 10 месяцев.', '2023-03-20 13:00:00', '2024-01-20 18:30:00'),
(4, 'C# (.Net)\r\nразработчик', 'Обучим программированию на C# с нуля до трудоустройства за 6 месяцев.', '2023-03-15 13:00:00', '2024-08-15 18:30:00');

-- --------------------------------------------------------

--
-- Структура таблицы `course_student`
--

CREATE TABLE `course_student` (
  `id` int NOT NULL,
  `course_id` int DEFAULT NULL,
  `student_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `course_student`
--

INSERT INTO `course_student` (`id`, `course_id`, `student_id`) VALUES
(1, 1, 1),
(2, 1, 10),
(3, 2, 2),
(4, 2, 9),
(5, 3, 3),
(6, 3, 8),
(7, 4, 4),
(8, 4, 7),
(9, 4, 6),
(10, 3, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `course_teacher`
--

CREATE TABLE `course_teacher` (
  `id` int NOT NULL,
  `course_id` int DEFAULT NULL,
  `teacher_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `course_teacher`
--

INSERT INTO `course_teacher` (`id`, `course_id`, `teacher_id`) VALUES
(1, 2, 8),
(2, 2, 6),
(3, 4, 1),
(4, 4, 3),
(5, 1, 7),
(6, 1, 2),
(7, 3, 4),
(8, 3, 5);

-- --------------------------------------------------------

--
-- Структура таблицы `lessons`
--

CREATE TABLE `lessons` (
  `id` int NOT NULL,
  `title` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `lessons`
--

INSERT INTO `lessons` (`id`, `title`, `description`, `course_id`) VALUES
(1, 'Основы языка Python', 'Базовое изучение конструкций языка, работа с массивами, строками', 1),
(2, 'ООП в Python', 'Изучение принципов ООП в Python и применение их на практике', 1),
(3, 'Теория баз данных', 'Введение в проектирование баз данных с использованием языка SQ:L в контексте Python', 1),
(4, 'Основы языка Java', 'Основы синтаксиса и основные конструкции языка Java', 2),
(5, 'Java в Android разработке', 'использование языка программирования Java для разработки приложений под платформу Android', 2),
(6, 'Основы языка Kotlin', 'Введение в синтаксис языка программирования Kotlin', 2),
(7, 'Kotlin в Android разработке', 'Использование языка Kotlin для разработки приложений для платформы Android', 2),
(8, 'Основы языка C# и платформы .NET', 'Ведение в основы языка программирования C# и использования платформы .NET', 4),
(9, 'ООП в C# ', 'Изучение принципов ООП и использование их на практике с использованием языка программирования C#', 4),
(10, 'Web разработка с использованием платформы .NET', 'Введение в разработку веб приложений с использованием платформы .NET и языка программирования C#', 4),
(11, 'Основы Unity', 'Введение в разработку игровых приложений с использованием языка программирования C# и платформы Unity', 4),
(12, 'Основы языка разметки HTML и каскадных стилей CSS', 'Введение в разработку визуальной части веб приложения с использованием языка разметки HTML5 и каскадных стилей CSS3', 3),
(13, 'Введение в язык программирования JavaScript', 'Ознакомление с синтаксисом и использование языка программирования JavaScript для разработки веб приложений', 3),
(14, 'Базы данных в Web разработке', 'Теория и проектирование баз данных и использование их при разработке web приложений.', 3);

-- --------------------------------------------------------

--
-- Структура таблицы `students`
--

CREATE TABLE `students` (
  `id` int NOT NULL,
  `surname` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `students`
--

INSERT INTO `students` (`id`, `surname`, `name`, `email`, `phone`, `country`) VALUES
(1, 'Петров', 'Михаил', 'igor@list.com', '80447894562', 'Беларусь'),
(2, 'Игнатьев', 'Алесь', 'ales@mail.ru', '80259126458', 'Беларусь'),
(3, 'Бобров', 'Витольд', 'bobr@list.com', '8077665544', 'Польша'),
(4, 'Кухаренко', 'Ксения', 'ksu@list.tu', '85644889755', 'Эстония'),
(5, 'Филатова', 'Инесса', 'oliera@gmail.com', '8055997788', 'Литва'),
(6, 'Шинкарев', 'Дмитрий', 'shinkard@mail.co', '80556644233', 'Россия'),
(7, 'Иванов', 'Петр', 'petya@list.ru', '80446659988', 'Беларусь'),
(8, 'Марченко', 'Василий', 'vasya@mail.com', '80335569988', 'Беларусь'),
(9, 'Поваляев', 'Иван', 'povolyaev@gmail.com', '80441234569', 'Беларусь'),
(10, 'Афанасьева', 'Маргарита', 'afanasyeva@gmail.com', '80335541789', 'Беларусь');

-- --------------------------------------------------------

--
-- Структура таблицы `teachers`
--

CREATE TABLE `teachers` (
  `id` int NOT NULL,
  `surname` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `teachers`
--

INSERT INTO `teachers` (`id`, `surname`, `name`, `email`, `phone`, `image_url`) VALUES
(1, 'Иванов', 'Андрей', 'ivanovandry@list.com', '802596645870', 'https://cdn.nur.kz/images/1120x630/82568ede77e703a9.jpeg'),
(2, 'Попов', 'Виктор', 'vityapopovich@mail.com', '80442462254', 'https://clutch.net.ua/crops/784550/620x0/1/0/2019/07/19/mTTfO3YDCLQGvHfjqg4dL7p4AWaUs4nJ.jpg'),
(3, 'Сидоров', 'Алексей', 'siporalex@list.ru', '80335546987', 'https://www.belnovosti.by/sites/default/files/article/2019/06/23/0b.jpg'),
(4, 'Гринев', 'Михаил', 'grinmix@list.by', '80296544832', 'https://cdn.create.vista.com/api/media/medium/220728252/stock-photo-handsome-adult-man-shirt-looking?token='),
(5, 'Вильнева', 'Ксения ', 'ksyvil@mail.ru', '80446548291', 'https://i0.wp.com/5sfer.com/wp-content/uploads/2018/02/positive-successful-woman-walking-over-city-2021-09-24-03-21-58-utc.jpg'),
(6, 'Петрова', 'Анастасия ', 'nastysha@mail.tu', '80254562294', 'https://images.pexels.com/photos/733872/pexels-photo-733872.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500'),
(7, 'Шинкарева ', 'Олеся', 'olesyashin@list.com', '80259972164', 'https://media.istockphoto.com/id/1190367451/photo/law-student-standing-at-entrance-to-university-building.jpg?s=612x612&w=0&k=20&c=oidXmKPz1waTaQ-rfFJ_Yhs8oQ42bl85gCnoFhm1UwI='),
(8, 'Уваров', 'Константин', 'kostya@list.com', '80256442297', 'https://static.life.ru/publications/2022/4/22/664291136302.7346.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `course_student`
--
ALTER TABLE `course_student`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_student_ibfk_1` (`course_id`),
  ADD KEY `course_student_ibfk_2` (`student_id`);

--
-- Индексы таблицы `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`),
  ADD KEY `teacher_id` (`teacher_id`);

--
-- Индексы таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`),
  ADD KEY `course_id` (`course_id`);

--
-- Индексы таблицы `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `course_student`
--
ALTER TABLE `course_student`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT для таблицы `course_teacher`
--
ALTER TABLE `course_teacher`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `students`
--
ALTER TABLE `students`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `course_student`
--
ALTER TABLE `course_student`
  ADD CONSTRAINT `course_student_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `course_student_ibfk_2` FOREIGN KEY (`student_id`) REFERENCES `students` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `course_teacher`
--
ALTER TABLE `course_teacher`
  ADD CONSTRAINT `course_teacher_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `course_teacher_ibfk_2` FOREIGN KEY (`teacher_id`) REFERENCES `teachers` (`id`) ON DELETE SET NULL;

--
-- Ограничения внешнего ключа таблицы `lessons`
--
ALTER TABLE `lessons`
  ADD CONSTRAINT `lessons_ibfk_1` FOREIGN KEY (`course_id`) REFERENCES `courses` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
