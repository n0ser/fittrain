-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 26 2023 г., 17:45
-- Версия сервера: 10.4.22-MariaDB
-- Версия PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `fittrain2`
--

-- --------------------------------------------------------

--
-- Структура таблицы `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `categories`
--

INSERT INTO `categories` (`id`, `category_name`) VALUES
(1, 'Похудение'),
(3, 'Выносливость'),
(4, 'Сила'),
(5, 'Разминка'),
(6, 'Гибкость');

-- --------------------------------------------------------

--
-- Структура таблицы `coaches`
--

CREATE TABLE `coaches` (
  `id` int(11) NOT NULL,
  `coach` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `coaches`
--

INSERT INTO `coaches` (`id`, `coach`) VALUES
(1, 'Михаил Прыгунов'),
(2, 'Мария Бакшиева'),
(3, 'Валентина Захарова'),
(4, 'Ольга Дерендеева');

-- --------------------------------------------------------

--
-- Структура таблицы `trains`
--

CREATE TABLE `trains` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `coach` varchar(255) NOT NULL,
  `image` longtext NOT NULL,
  `video` longtext NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `trains`
--

INSERT INTO `trains` (`id`, `title`, `time`, `category`, `coach`, `image`, `video`, `description`) VALUES
(14, 'Точим тело', '19 минут', 'Выносливость', 'Ольга Дерендеева', 'assets/images/pohudenie2.webp', 'https://www.youtube.com/embed/VOOL3NfThpg', 'Продолжение программы Александры Шеклеиной «Точим тело». Тренировки помогут похудеть, уменьшить объёмы, избавиться от отёков и повысить тонус всех частей тела: пресса, ягодиц, ног, спины и рук.  Тебя ждёт 12 тренировок продолжительностью 20 минут.   Программа подходит для любого уровня подготовки, Александра продемонстрирует разные вариации выполнения упражнений для каждого уровня.'),
(15, 'Новая жизнь', '29 минут', 'Сила', 'Михаил Прыгунов', 'assets/images/sila.webp', 'https://www.youtube.com/embed/Jzz3YZ767Hw', 'Новая версия легендарной программы Михаила Прыгунова! Тебя ждет 30 тренировок и 6 уровней сложности – с каждым уровнем нарастает сложность и интенсивность тренировок! Ты будешь наглядно видеть свой прогресс! Начни новую жизнь уже сегодня, с улыбкой на лице – вместе с Мишей Прыгуновым.'),
(16, 'Разминка без коврика', '10 минут', 'Разминка', 'Ольга Дерендеева', 'assets/images/zaryadki2.webp', 'https://www.youtube.com/embed/rpIPGyOgJrE', 'Новая программа от Иванны Идуш. Короткие занятия направлены на пробуждение и получение заряда бодрости на весь день. Тебя ждут 10 тренировок продолжительностью 8-10 минут. С помощью зарядок ты укрепишь мышцы, увеличишь подвижность суставов, поможешь себе легче пробуждаться по утрам, повысишь трудоспособность и качество жизни в целом.  Тренировки подходят абсолютно для любого уровня подготовки. Понадобятся только твоё желание и хорошее настроение. Коврик не требуется.'),
(17, 'Реальное похудение', '25 минут', 'Похудение', 'Михаил Прыгунов', 'assets/images/pohudenie.webp', 'https://www.youtube.com/embed/H9VWHH0jeEE', 'Ворвись в новый год вместе с FitStars! Вас ждет 6 тренировок от Михаила Прыгунова и Ольги Дерендеевой, которые идеально подойдут для того, чтобы сжечь то, что было съедено в Новогоднюю Ночь! Тренировки несложные – специально для того, чтобы войти в тренировочный режим и оставаться в нем весь год!    Хорошее настроение идет в комплекте)'),
(18, 'Пресс за 7 минут', '7 минут', 'Гибкость', 'Мария Бакшиева', 'assets/images/press2.webp', 'https://www.youtube.com/embed/2ZbxvNuhDo4', 'Самая эффективная программа на пресс от Иванны Идуш! Тебя ждет интенсивная и разнообразная работа над мышцами живота! Всего 7 минут в день и результат не заставит себя ждать!');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isAdmin` int(11) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `phone`, `email`, `password`, `isAdmin`) VALUES
(1, 'Владислав', 'Рудаев', '+79963952978', 'unplay2004@gmail.com', '7511208a3659667c9b424c53390ccff1abfe4464', 1),
(2, 'Гуштейн', 'Таисия', '+79236782715', 'holly35534@mail.ru', '2c7bdaeac0a15ad4a94cc42bac12df32db0490c9', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `coaches`
--
ALTER TABLE `coaches`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `trains`
--
ALTER TABLE `trains`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `coaches`
--
ALTER TABLE `coaches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `trains`
--
ALTER TABLE `trains`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
