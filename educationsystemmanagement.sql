-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2020 at 07:49 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `educationsystemmanagement`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_courses`
--

CREATE TABLE `about_courses` (
  `about_courses_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `percentage` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_executive_teams`
--

CREATE TABLE `about_executive_teams` (
  `about_executive_teams_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_what_offers`
--

CREATE TABLE `about_what_offers` (
  `about_what_offers_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_who_ares`
--

CREATE TABLE `about_who_ares` (
  `about_who_ares_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bullet` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `about_why_bests`
--

CREATE TABLE `about_why_bests` (
  `about_why_bests_id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bullet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `account_forms`
--

CREATE TABLE `account_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `moname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `joining` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `add_expense_forms`
--

CREATE TABLE `add_expense_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expense_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `add_expense_forms`
--

INSERT INTO `add_expense_forms` (`id`, `name`, `idno`, `expense_type`, `amount`, `phone`, `email`, `status`, `date`, `created_at`, `updated_at`) VALUES
(1, 'Check', '3', 'Three', '300$', '01622115544', 'check21@gmail.com', 'Five', '2020-04-03', '2020-03-05 07:15:21', '2020-03-05 08:45:16');

-- --------------------------------------------------------

--
-- Table structure for table `admission_forms`
--

CREATE TABLE `admission_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `roll` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admission_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admission_forms`
--

INSERT INTO `admission_forms` (`id`, `fname`, `lname`, `gender`, `dob`, `roll`, `blood`, `religion`, `email`, `class`, `section`, `admission_id`, `phone`, `bio`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Assad', 'uzzaman', 'Female', '2011-03-01', '01', 'A-', 'Islam', 'asad@gmail.com', 'Six', 'Soptamboli', 'Asad01Play', '01615469777', 'i am simple boy', '2020-03-05-5e6089f9a1d1a.jpg', '2020-03-04 12:21:47', '2020-03-04 23:11:21'),
(3, 'chaya', 'love', 'Male', '1992-01-11', '22', 'B-', 'Hinduism', 'talklove@gmail.com', 'Three', 'Pakhi', 'talk22Six', '01788556699', 'i am talk love', '2020-03-05-5e608a2c6b641.jpg', '2020-03-04 22:50:29', '2020-03-04 23:12:12'),
(4, 'as', 'sa', 'Male', '1992-11-22', '2', 'A+', 'Islam', 'as@gmail.com', 'Six', 'Pakhi', '2', '2154887459', 'ssds', '2020-03-05-5e60c70ee88b6.jpg', '2020-03-05 03:31:59', '2020-03-05 03:31:59');

-- --------------------------------------------------------

--
-- Table structure for table `attendence_forms`
--

CREATE TABLE `attendence_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `blogs_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `career_details`
--

CREATE TABLE `career_details` (
  `career_details_id` int(10) UNSIGNED NOT NULL,
  `job_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `choose_topics`
--

CREATE TABLE `choose_topics` (
  `choose_topics_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_forms`
--

CREATE TABLE `class_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `teacher_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `class_routine_forms`
--

CREATE TABLE `class_routine_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `connect_students`
--

CREATE TABLE `connect_students` (
  `connect_students_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `contacts_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(10) UNSIGNED NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `course_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lecture_hour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `create_courses`
--

CREATE TABLE `create_courses` (
  `create_courses_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `discover_potentials`
--

CREATE TABLE `discover_potentials` (
  `discover_potentials_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education_research_details`
--

CREATE TABLE `education_research_details` (
  `education_research_details_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `education_research_overviews`
--

CREATE TABLE `education_research_overviews` (
  `education_research_overviews_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `count1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `edu_cation_upcoming_events`
--

CREATE TABLE `edu_cation_upcoming_events` (
  `edu_cation_upcoming_events_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_detail_abouts`
--

CREATE TABLE `event_detail_abouts` (
  `event_detail_abouts_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_slots` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `booked_slots` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `call` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_forms`
--

CREATE TABLE `exam_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `exam_schedule_forms`
--

CREATE TABLE `exam_schedule_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `exam_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `faculties_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profession` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `l_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_count` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faqs_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hostel_forms`
--

CREATE TABLE `hostel_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `hostel_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `room_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number_bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cost_bed` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_messages`
--

CREATE TABLE `instructor_messages` (
  `instructor_messages_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_profile_abouts`
--

CREATE TABLE `instructor_profile_abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `profession_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `students` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `courses` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviews` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `biography` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `expertise` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `soon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `position_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_rules`
--

CREATE TABLE `instructor_rules` (
  `instructor_rules_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_saids`
--

CREATE TABLE `instructor_saids` (
  `instructor_saids_id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_supports`
--

CREATE TABLE `instructor_supports` (
  `instructor_supports_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_support_details`
--

CREATE TABLE `instructor_support_details` (
  `instructor_support_details_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `instructor_support_headings`
--

CREATE TABLE `instructor_support_headings` (
  `instructor_support_headings_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `library_forms`
--

CREATE TABLE `library_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `book_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `writter_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publishing_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `upload_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `library_forms`
--

INSERT INTO `library_forms` (`id`, `book_name`, `subject`, `writter_name`, `class`, `idno`, `publishing_date`, `upload_date`, `created_at`, `updated_at`) VALUES
(1, 'M.SC Admission in CSE', 'CSE', 'Md.Saddam Hossain', 'Six', '03', '2019', '2020-04-03', '2020-03-05 06:11:17', '2020-03-05 06:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `maps`
--

CREATE TABLE `maps` (
  `id` int(10) UNSIGNED NOT NULL,
  `map` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `message_forms`
--

CREATE TABLE `message_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `recipient` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_02_27_174310_create_instructor_profile_abouts_table', 2),
(5, '2020_02_27_181808_create_courses_table', 3),
(6, '2020_03_01_171652_create_instructor_messages_table', 4),
(7, '2020_03_01_173015_create_discover_potentials_table', 5),
(8, '2020_03_01_173305_create_choose_topics_table', 6),
(9, '2020_03_01_173657_create_create_courses_table', 7),
(10, '2020_03_01_173827_create_connect_students_table', 8),
(11, '2020_03_01_174010_create_instructor_rules_table', 9),
(12, '2020_03_01_174241_create_instructor_saids_table', 10),
(13, '2020_03_01_174638_create_v_c_teacher_messages_table', 11),
(14, '2020_03_01_175946_create_notices_table', 12),
(15, '2020_03_01_180257_create_notice_details_table', 13),
(16, '2020_03_01_180723_create_edu_cation_upcoming_events_table', 14),
(17, '2020_03_01_181302_create_event_detail_abouts_table', 15),
(18, '2020_03_01_182258_create_program_schedules_table', 16),
(19, '2020_03_01_183119_create_sponsores_table', 17),
(20, '2020_03_01_183345_create_maps_table', 18),
(21, '2020_03_02_170916_create_student_supports_table', 19),
(22, '2020_03_02_171311_create_student_support_headings_table', 20),
(23, '2020_03_02_171812_create_student_support_details_table', 21),
(24, '2020_03_02_172204_create_instructor_supports_table', 22),
(25, '2020_03_02_172245_create_instructor_support_headings_table', 22),
(26, '2020_03_02_172333_create_instructor_support_details_table', 22),
(27, '2020_03_02_173026_create_terms_and_privacy_policies_table', 23),
(28, '2020_03_02_173925_create_faculties_table', 24),
(29, '2020_03_02_174449_create_education_research_overviews_table', 24),
(30, '2020_03_02_174833_create_education_research_details_table', 24),
(31, '2020_03_02_175449_create_offer_scholarships_table', 24),
(32, '2020_03_02_175843_create_scholarship_institute_details_table', 24),
(33, '2020_03_02_175954_create_more_scholarships_table', 24),
(34, '2020_03_02_180506_create_more_scholarship_details_table', 24),
(35, '2020_03_02_180719_create_working_careers_table', 24),
(36, '2020_03_02_181125_create_our_carer_benefits_table', 24),
(37, '2020_03_02_181349_create_open_position_careers_table', 24),
(38, '2020_03_02_181907_create_career_details_table', 24),
(39, '2020_03_02_182536_create_faqs_table', 24),
(40, '2020_03_02_182755_create_contacts_table', 24),
(41, '2020_03_02_183222_create_about_who_ares_table', 25),
(42, '2020_03_02_183734_create_about_what_offers_table', 25),
(43, '2020_03_02_184409_create_about_executive_teams_table', 25),
(44, '2020_03_02_184744_create_about_why_bests_table', 25),
(45, '2020_03_02_184925_create_about_courses_table', 25),
(46, '2020_03_02_185357_create_blogs_table', 25),
(47, '2020_03_04_044845_create_admission_forms_table', 26),
(48, '2020_03_04_190626_create_parent_forms_table', 27),
(49, '2020_03_05_101751_create_teacher_forms_table', 28),
(50, '2020_03_05_113438_create_library_forms_table', 29),
(51, '2020_03_05_124804_create_add_expense_forms_table', 30),
(52, '2020_03_05_144825_create_class_forms_table', 31),
(53, '2020_03_05_144906_create_subject_forms_table', 31),
(54, '2020_03_05_145040_create_class_routine_forms_table', 31),
(55, '2020_03_05_145454_create_attendence_forms_table', 31),
(56, '2020_03_05_145515_create_exam_forms_table', 31),
(57, '2020_03_05_145632_create_transport_forms_table', 31),
(58, '2020_03_05_145816_create_hostel_forms_table', 31),
(59, '2020_03_05_145911_create_notice_forms_table', 31),
(60, '2020_03_05_145940_create_message_forms_table', 31),
(61, '2020_03_05_150156_create_account_forms_table', 31),
(62, '2020_03_05_174507_create_exam_schedule_forms_table', 32),
(63, '2020_03_05_175645_create_student_promotion_forms_table', 33);

-- --------------------------------------------------------

--
-- Table structure for table `more_scholarships`
--

CREATE TABLE `more_scholarships` (
  `more_scholarships_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `more_scholarship_details`
--

CREATE TABLE `more_scholarship_details` (
  `more_scholarship_details_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(10) UNSIGNED NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice_details`
--

CREATE TABLE `notice_details` (
  `notice_details_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `notice_forms`
--

CREATE TABLE `notice_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posted` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `offer_scholarships`
--

CREATE TABLE `offer_scholarships` (
  `offer_scholarships_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `open_position_careers`
--

CREATE TABLE `open_position_careers` (
  `open_position_careers_id` int(10) UNSIGNED NOT NULL,
  `title1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `our_carer_benefits`
--

CREATE TABLE `our_carer_benefits` (
  `our_carer_benefits_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `parent_forms`
--

CREATE TABLE `parent_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `occupation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_forms`
--

INSERT INTO `parent_forms` (`id`, `fname`, `lname`, `gender`, `occupation`, `idno`, `blood`, `religion`, `email`, `address`, `phone`, `bio`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Mr', 'John', 'Male', 'Engineer', '2', 'AB+', 'Christian', 'john@gmail.com', 'xicola pahan', '317788544152121', 'cse engineer', '2020-03-05-5e60ad4bea1ec.jpg', '2020-03-04 13:37:13', '2020-03-05 01:42:04'),
(2, 'Md.Saddam', 'Hossain', 'Male', 'Software Engineer', '3', 'B+', 'Islam', 'csesolve6548@gmail.com', 'banasree', '01615469777', 'I am cse engineer', '2020-03-05-5e60af2676d55.jpg', '2020-03-05 01:49:58', '2020-03-05 01:49:58');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `program_schedules`
--

CREATE TABLE `program_schedules` (
  `program_schedules_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_time1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_time2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `t_end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_time1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_time2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s_end_time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `scholarship_institute_details`
--

CREATE TABLE `scholarship_institute_details` (
  `scholarship_institute_details_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sponsores`
--

CREATE TABLE `sponsores` (
  `sponsores_id` int(10) UNSIGNED NOT NULL,
  `p_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `g_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_promotion_forms`
--

CREATE TABLE `student_promotion_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `current_session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promote_session` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_from` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `promotion_to` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_supports`
--

CREATE TABLE `student_supports` (
  `student_supports_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_support_details`
--

CREATE TABLE `student_support_details` (
  `student_support_details_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_support_headings`
--

CREATE TABLE `student_support_headings` (
  `student_support_headings_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject_forms`
--

CREATE TABLE `subject_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `subject_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `teacher_forms`
--

CREATE TABLE `teacher_forms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `idno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `religion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `section` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `teacher_forms`
--

INSERT INTO `teacher_forms` (`id`, `fname`, `lname`, `gender`, `dob`, `idno`, `blood`, `religion`, `email`, `class`, `section`, `address`, `phone`, `bio`, `photo`, `created_at`, `updated_at`) VALUES
(1, 'Md.Saddam', 'Hossain', 'Male', '2013-01-22', '3', 'B+', 'Islam', 'saddam@yahoo.com', 'Five', 'Soptamboli', 'xinapas', '332154789560011', 'cse engineer,Software Developer', '2020-03-05-5e60e1cf0dd7d.jpg', '2020-03-05 04:57:07', '2020-03-05 05:26:07');

-- --------------------------------------------------------

--
-- Table structure for table `terms_and_privacy_policies`
--

CREATE TABLE `terms_and_privacy_policies` (
  `terms_and_privacy_policies_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport_forms`
--

CREATE TABLE `transport_forms` (
  `id` int(10) UNSIGNED NOT NULL,
  `route_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vehicle_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'talk', 'talk@gmail.com', NULL, '$2y$10$3gb96/XHE7dVOZ0peHlMEulNjccjfCa85QOoNYVsLcfXDLGn3Ezge', NULL, '2020-02-24 13:34:21', '2020-02-24 13:34:21');

-- --------------------------------------------------------

--
-- Table structure for table `v_c_teacher_messages`
--

CREATE TABLE `v_c_teacher_messages` (
  `v_c_teacher_messages_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signature` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `working_careers`
--

CREATE TABLE `working_careers` (
  `working_careers_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_courses`
--
ALTER TABLE `about_courses`
  ADD PRIMARY KEY (`about_courses_id`);

--
-- Indexes for table `about_executive_teams`
--
ALTER TABLE `about_executive_teams`
  ADD PRIMARY KEY (`about_executive_teams_id`);

--
-- Indexes for table `about_what_offers`
--
ALTER TABLE `about_what_offers`
  ADD PRIMARY KEY (`about_what_offers_id`);

--
-- Indexes for table `about_who_ares`
--
ALTER TABLE `about_who_ares`
  ADD PRIMARY KEY (`about_who_ares_id`);

--
-- Indexes for table `about_why_bests`
--
ALTER TABLE `about_why_bests`
  ADD PRIMARY KEY (`about_why_bests_id`);

--
-- Indexes for table `account_forms`
--
ALTER TABLE `account_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `add_expense_forms`
--
ALTER TABLE `add_expense_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admission_forms`
--
ALTER TABLE `admission_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendence_forms`
--
ALTER TABLE `attendence_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`blogs_id`);

--
-- Indexes for table `career_details`
--
ALTER TABLE `career_details`
  ADD PRIMARY KEY (`career_details_id`);

--
-- Indexes for table `choose_topics`
--
ALTER TABLE `choose_topics`
  ADD PRIMARY KEY (`choose_topics_id`);

--
-- Indexes for table `class_forms`
--
ALTER TABLE `class_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routine_forms`
--
ALTER TABLE `class_routine_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `connect_students`
--
ALTER TABLE `connect_students`
  ADD PRIMARY KEY (`connect_students_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`contacts_id`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_courses`
--
ALTER TABLE `create_courses`
  ADD PRIMARY KEY (`create_courses_id`);

--
-- Indexes for table `discover_potentials`
--
ALTER TABLE `discover_potentials`
  ADD PRIMARY KEY (`discover_potentials_id`);

--
-- Indexes for table `education_research_details`
--
ALTER TABLE `education_research_details`
  ADD PRIMARY KEY (`education_research_details_id`);

--
-- Indexes for table `education_research_overviews`
--
ALTER TABLE `education_research_overviews`
  ADD PRIMARY KEY (`education_research_overviews_id`);

--
-- Indexes for table `edu_cation_upcoming_events`
--
ALTER TABLE `edu_cation_upcoming_events`
  ADD PRIMARY KEY (`edu_cation_upcoming_events_id`);

--
-- Indexes for table `event_detail_abouts`
--
ALTER TABLE `event_detail_abouts`
  ADD PRIMARY KEY (`event_detail_abouts_id`);

--
-- Indexes for table `exam_forms`
--
ALTER TABLE `exam_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_schedule_forms`
--
ALTER TABLE `exam_schedule_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`faculties_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faqs_id`);

--
-- Indexes for table `hostel_forms`
--
ALTER TABLE `hostel_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor_messages`
--
ALTER TABLE `instructor_messages`
  ADD PRIMARY KEY (`instructor_messages_id`);

--
-- Indexes for table `instructor_profile_abouts`
--
ALTER TABLE `instructor_profile_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instructor_rules`
--
ALTER TABLE `instructor_rules`
  ADD PRIMARY KEY (`instructor_rules_id`);

--
-- Indexes for table `instructor_saids`
--
ALTER TABLE `instructor_saids`
  ADD PRIMARY KEY (`instructor_saids_id`);

--
-- Indexes for table `instructor_supports`
--
ALTER TABLE `instructor_supports`
  ADD PRIMARY KEY (`instructor_supports_id`);

--
-- Indexes for table `instructor_support_details`
--
ALTER TABLE `instructor_support_details`
  ADD PRIMARY KEY (`instructor_support_details_id`);

--
-- Indexes for table `instructor_support_headings`
--
ALTER TABLE `instructor_support_headings`
  ADD PRIMARY KEY (`instructor_support_headings_id`);

--
-- Indexes for table `library_forms`
--
ALTER TABLE `library_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maps`
--
ALTER TABLE `maps`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message_forms`
--
ALTER TABLE `message_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `more_scholarships`
--
ALTER TABLE `more_scholarships`
  ADD PRIMARY KEY (`more_scholarships_id`);

--
-- Indexes for table `more_scholarship_details`
--
ALTER TABLE `more_scholarship_details`
  ADD PRIMARY KEY (`more_scholarship_details_id`);

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice_details`
--
ALTER TABLE `notice_details`
  ADD PRIMARY KEY (`notice_details_id`);

--
-- Indexes for table `notice_forms`
--
ALTER TABLE `notice_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer_scholarships`
--
ALTER TABLE `offer_scholarships`
  ADD PRIMARY KEY (`offer_scholarships_id`);

--
-- Indexes for table `open_position_careers`
--
ALTER TABLE `open_position_careers`
  ADD PRIMARY KEY (`open_position_careers_id`);

--
-- Indexes for table `our_carer_benefits`
--
ALTER TABLE `our_carer_benefits`
  ADD PRIMARY KEY (`our_carer_benefits_id`);

--
-- Indexes for table `parent_forms`
--
ALTER TABLE `parent_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `program_schedules`
--
ALTER TABLE `program_schedules`
  ADD PRIMARY KEY (`program_schedules_id`);

--
-- Indexes for table `scholarship_institute_details`
--
ALTER TABLE `scholarship_institute_details`
  ADD PRIMARY KEY (`scholarship_institute_details_id`);

--
-- Indexes for table `sponsores`
--
ALTER TABLE `sponsores`
  ADD PRIMARY KEY (`sponsores_id`);

--
-- Indexes for table `student_promotion_forms`
--
ALTER TABLE `student_promotion_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_supports`
--
ALTER TABLE `student_supports`
  ADD PRIMARY KEY (`student_supports_id`);

--
-- Indexes for table `student_support_details`
--
ALTER TABLE `student_support_details`
  ADD PRIMARY KEY (`student_support_details_id`);

--
-- Indexes for table `student_support_headings`
--
ALTER TABLE `student_support_headings`
  ADD PRIMARY KEY (`student_support_headings_id`);

--
-- Indexes for table `subject_forms`
--
ALTER TABLE `subject_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_forms`
--
ALTER TABLE `teacher_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms_and_privacy_policies`
--
ALTER TABLE `terms_and_privacy_policies`
  ADD PRIMARY KEY (`terms_and_privacy_policies_id`);

--
-- Indexes for table `transport_forms`
--
ALTER TABLE `transport_forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `v_c_teacher_messages`
--
ALTER TABLE `v_c_teacher_messages`
  ADD PRIMARY KEY (`v_c_teacher_messages_id`);

--
-- Indexes for table `working_careers`
--
ALTER TABLE `working_careers`
  ADD PRIMARY KEY (`working_careers_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_courses`
--
ALTER TABLE `about_courses`
  MODIFY `about_courses_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_executive_teams`
--
ALTER TABLE `about_executive_teams`
  MODIFY `about_executive_teams_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_what_offers`
--
ALTER TABLE `about_what_offers`
  MODIFY `about_what_offers_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_who_ares`
--
ALTER TABLE `about_who_ares`
  MODIFY `about_who_ares_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `about_why_bests`
--
ALTER TABLE `about_why_bests`
  MODIFY `about_why_bests_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `account_forms`
--
ALTER TABLE `account_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `add_expense_forms`
--
ALTER TABLE `add_expense_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admission_forms`
--
ALTER TABLE `admission_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attendence_forms`
--
ALTER TABLE `attendence_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `blogs_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `career_details`
--
ALTER TABLE `career_details`
  MODIFY `career_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `choose_topics`
--
ALTER TABLE `choose_topics`
  MODIFY `choose_topics_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_forms`
--
ALTER TABLE `class_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `class_routine_forms`
--
ALTER TABLE `class_routine_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `connect_students`
--
ALTER TABLE `connect_students`
  MODIFY `connect_students_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `contacts_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `create_courses`
--
ALTER TABLE `create_courses`
  MODIFY `create_courses_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discover_potentials`
--
ALTER TABLE `discover_potentials`
  MODIFY `discover_potentials_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_research_details`
--
ALTER TABLE `education_research_details`
  MODIFY `education_research_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `education_research_overviews`
--
ALTER TABLE `education_research_overviews`
  MODIFY `education_research_overviews_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `edu_cation_upcoming_events`
--
ALTER TABLE `edu_cation_upcoming_events`
  MODIFY `edu_cation_upcoming_events_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event_detail_abouts`
--
ALTER TABLE `event_detail_abouts`
  MODIFY `event_detail_abouts_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_forms`
--
ALTER TABLE `exam_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `exam_schedule_forms`
--
ALTER TABLE `exam_schedule_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `faculties_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faqs_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hostel_forms`
--
ALTER TABLE `hostel_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor_messages`
--
ALTER TABLE `instructor_messages`
  MODIFY `instructor_messages_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor_profile_abouts`
--
ALTER TABLE `instructor_profile_abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor_rules`
--
ALTER TABLE `instructor_rules`
  MODIFY `instructor_rules_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor_saids`
--
ALTER TABLE `instructor_saids`
  MODIFY `instructor_saids_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor_supports`
--
ALTER TABLE `instructor_supports`
  MODIFY `instructor_supports_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor_support_details`
--
ALTER TABLE `instructor_support_details`
  MODIFY `instructor_support_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `instructor_support_headings`
--
ALTER TABLE `instructor_support_headings`
  MODIFY `instructor_support_headings_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `library_forms`
--
ALTER TABLE `library_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `maps`
--
ALTER TABLE `maps`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `message_forms`
--
ALTER TABLE `message_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `more_scholarships`
--
ALTER TABLE `more_scholarships`
  MODIFY `more_scholarships_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `more_scholarship_details`
--
ALTER TABLE `more_scholarship_details`
  MODIFY `more_scholarship_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice_details`
--
ALTER TABLE `notice_details`
  MODIFY `notice_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notice_forms`
--
ALTER TABLE `notice_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `offer_scholarships`
--
ALTER TABLE `offer_scholarships`
  MODIFY `offer_scholarships_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `open_position_careers`
--
ALTER TABLE `open_position_careers`
  MODIFY `open_position_careers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `our_carer_benefits`
--
ALTER TABLE `our_carer_benefits`
  MODIFY `our_carer_benefits_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `parent_forms`
--
ALTER TABLE `parent_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `program_schedules`
--
ALTER TABLE `program_schedules`
  MODIFY `program_schedules_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `scholarship_institute_details`
--
ALTER TABLE `scholarship_institute_details`
  MODIFY `scholarship_institute_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sponsores`
--
ALTER TABLE `sponsores`
  MODIFY `sponsores_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_promotion_forms`
--
ALTER TABLE `student_promotion_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_supports`
--
ALTER TABLE `student_supports`
  MODIFY `student_supports_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_support_details`
--
ALTER TABLE `student_support_details`
  MODIFY `student_support_details_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student_support_headings`
--
ALTER TABLE `student_support_headings`
  MODIFY `student_support_headings_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject_forms`
--
ALTER TABLE `subject_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher_forms`
--
ALTER TABLE `teacher_forms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `terms_and_privacy_policies`
--
ALTER TABLE `terms_and_privacy_policies`
  MODIFY `terms_and_privacy_policies_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transport_forms`
--
ALTER TABLE `transport_forms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `v_c_teacher_messages`
--
ALTER TABLE `v_c_teacher_messages`
  MODIFY `v_c_teacher_messages_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `working_careers`
--
ALTER TABLE `working_careers`
  MODIFY `working_careers_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
