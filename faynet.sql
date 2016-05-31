-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 19-02-2016 a las 22:21:33
-- Versión del servidor: 5.6.12-log
-- Versión de PHP: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `faynet`
--
CREATE DATABASE IF NOT EXISTS `faynet` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `faynet`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aerial_outsite_manhole_plan`
--

CREATE TABLE IF NOT EXISTS `aerial_outsite_manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `company_aerial_manhole` varchar(255) NOT NULL,
  `contact_aerial_manhole` varchar(255) NOT NULL,
  `cust_cable_count_aerial_manhole` varchar(255) NOT NULL,
  `cust_tie_loc_aerial_manhole` varchar(255) NOT NULL,
  `scope_work_aerial_manhole` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `aerial_outsite_manhole_plan`
--

INSERT INTO `aerial_outsite_manhole_plan` (`id`, `service_number`, `general_information_id`, `company_aerial_manhole`, `contact_aerial_manhole`, `cust_cable_count_aerial_manhole`, `cust_tie_loc_aerial_manhole`, `scope_work_aerial_manhole`) VALUES
(1, 32165412, 1, '2', '1', 'dasd', 'dasd', 'dasdas'),
(2, 65656, 2, '3', '2', 'dasd', 'dasd', 'dasdas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `all_request_utility_plans`
--

CREATE TABLE IF NOT EXISTS `all_request_utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_number_all_utility` varchar(255) NOT NULL,
  `company_all_utility` varchar(255) NOT NULL,
  `path_lenth_all_utility` varchar(255) NOT NULL,
  `see_attached_map_all_utility` varchar(255) NOT NULL,
  `from_all_utility` varchar(255) NOT NULL,
  `to_all_utility` varchar(255) NOT NULL,
  `scope_work_all_utility` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `all_request_utility_plans`
--

INSERT INTO `all_request_utility_plans` (`id`, `service_number`, `general_information_id`, `task_request_number_all_utility`, `company_all_utility`, `path_lenth_all_utility`, `see_attached_map_all_utility`, `from_all_utility`, `to_all_utility`, `scope_work_all_utility`) VALUES
(1, 32165412, 1, 'dasdsa', '1', 'dasdasd', 'si', 'asdasd', 'dasdasdasd', 'asdasdsa'),
(2, 65656, 2, 'dasdsa', '3', 'dasdasd', 'si', 'dsadasd', 'dasd', 'dasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `as_built_pole_plan_task`
--

CREATE TABLE IF NOT EXISTS `as_built_pole_plan_task` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `as_built_licensed_pole_plans` varchar(255) NOT NULL,
  `gis_as_built_file_need` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `as_built_pole_plan_task`
--

INSERT INTO `as_built_pole_plan_task` (`id`, `service_number`, `general_information_id`, `as_built_licensed_pole_plans`, `gis_as_built_file_need`) VALUES
(1, 32165412, 1, 'si', 'si'),
(2, 65656, 2, 'si', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `city` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `city`
--

INSERT INTO `city` (`id`, `city`, `fecha`, `estado`) VALUES
(1, 'New York', '1452536997', 1),
(2, 'Los Angeles', '1452537015', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `civil_plans`
--

CREATE TABLE IF NOT EXISTS `civil_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `proposed_plan_tmp_civil` varchar(255) NOT NULL,
  `as_built_plan_civil` varchar(255) NOT NULL,
  `total_station_civil` varchar(255) NOT NULL,
  `print_a_b_mylar_civil` varchar(255) NOT NULL,
  `deliver_mylar_civil` varchar(255) NOT NULL,
  `proposed_route_civil` varchar(255) NOT NULL,
  `from_civil` varchar(255) NOT NULL,
  `to_civil` varchar(255) NOT NULL,
  `scope_work_civil` varchar(255) NOT NULL,
  `check_uno_trench_detail_civil` varchar(255) NOT NULL,
  `company_uno_trench_detail_civil` varchar(255) NOT NULL,
  `check_dos_trench_detail_civil` varchar(255) NOT NULL,
  `company_dos_trench_detail_civil` varchar(255) NOT NULL,
  `check_tres_trench_detail_civil` varchar(255) NOT NULL,
  `company_tres_trench_detail_civil` varchar(255) NOT NULL,
  `micro_trench_detail_civil` varchar(255) NOT NULL,
  `text_micro_trench_detail_civil` varchar(255) NOT NULL,
  `company_micro_trench_detail_civil` varchar(255) NOT NULL,
  `installations_notes_civil` varchar(255) NOT NULL,
  `red_line_page_civil` varchar(255) NOT NULL,
  `red_line_file_civil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `civil_plans`
--

INSERT INTO `civil_plans` (`id`, `service_number`, `general_information_id`, `proposed_plan_tmp_civil`, `as_built_plan_civil`, `total_station_civil`, `print_a_b_mylar_civil`, `deliver_mylar_civil`, `proposed_route_civil`, `from_civil`, `to_civil`, `scope_work_civil`, `check_uno_trench_detail_civil`, `company_uno_trench_detail_civil`, `check_dos_trench_detail_civil`, `company_dos_trench_detail_civil`, `check_tres_trench_detail_civil`, `company_tres_trench_detail_civil`, `micro_trench_detail_civil`, `text_micro_trench_detail_civil`, `company_micro_trench_detail_civil`, `installations_notes_civil`, `red_line_page_civil`, `red_line_file_civil`) VALUES
(1, 32165412, 1, 'si', 'no', 'si', 'no', 'si', 'dasda', 'sdasda', 'sdasdas', 'dasdasd', 'si', '1', 'si', '2', 'si', '1', 'si', 'dasdasd', '2', 'hdsajdqwihsdasdqwd', 'ddadasd''red_line_page_civil_1454616907.jpg', 'red_line_file_civil_1454616907.jpg'),
(2, 65656, 2, 'si', 'si', 'si', 'no', 'no', 'dasd', 'dasdas', 'dasd', 'dasdas', 'si', '3', 'si', '3', 'si', '3', 'si', 'dasdasd', '3', 'hdsajdqwihsdasdqwd', 'dasdas''red_line_page_civil_1454704352.jpg', 'red_line_file_civil_1454704352.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `company` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `company`
--

INSERT INTO `company` (`id`, `company`, `fecha`, `estado`) VALUES
(1, '7am', '1452697626', 1),
(2, 'gulinc', '1452697927', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `contratista_id` int(16) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `contact`
--

INSERT INTO `contact` (`id`, `contratista_id`, `contact`, `fecha`, `estado`) VALUES
(1, 3, 'Jairo cuesta', '1452699404', 1),
(2, 3, 'John Vasquez ', '1452699404', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cotizacion`
--

CREATE TABLE IF NOT EXISTS `cotizacion` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `id_request` int(16) NOT NULL,
  `id_company` int(16) NOT NULL,
  `plan_quote` varchar(255) NOT NULL,
  `file_plan_quote` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`id`, `id_request`, `id_company`, `plan_quote`, `file_plan_quote`, `fecha`, `estado`) VALUES
(1, 6, 3, '1400', 'quote_1455303990.pdf', '1455303990', 1),
(2, 17, 3, '468', 'quote_1455304665.pdf', '1455304665', 1),
(3, 25, 3, '', '', '1455304708', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `designer`
--

CREATE TABLE IF NOT EXISTS `designer` (
  `designerid` int(50) NOT NULL AUTO_INCREMENT,
  `name_designer` varchar(50) NOT NULL,
  `estado` int(2) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  PRIMARY KEY (`designerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `designer`
--

INSERT INTO `designer` (`designerid`, `name_designer`, `estado`, `lastname`) VALUES
(1, 'Ramon', 1, 'Pereyra'),
(2, 'Natha', 1, 'Arias');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electric_proposed_manhole_plan`
--

CREATE TABLE IF NOT EXISTS `electric_proposed_manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_number_electric_manhole` varchar(255) NOT NULL,
  `date_task_request_electric_manhole` varchar(255) NOT NULL,
  `expected_date_electric_manhole` varchar(255) NOT NULL,
  `mh_option_electric_manhole` varchar(255) NOT NULL,
  `company_electric_manhole` varchar(255) NOT NULL,
  `prop_fiber_electric_manhole` varchar(255) NOT NULL,
  `path_length_electric_manhole` varchar(255) NOT NULL,
  `from_electric_manhole` varchar(255) NOT NULL,
  `to_electric_manhole` varchar(255) NOT NULL,
  `scope_work_electric_manhole` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `electric_proposed_manhole_plan`
--

INSERT INTO `electric_proposed_manhole_plan` (`id`, `service_number`, `general_information_id`, `task_request_number_electric_manhole`, `date_task_request_electric_manhole`, `expected_date_electric_manhole`, `mh_option_electric_manhole`, `company_electric_manhole`, `prop_fiber_electric_manhole`, `path_length_electric_manhole`, `from_electric_manhole`, `to_electric_manhole`, `scope_work_electric_manhole`) VALUES
(1, 32165412, 1, 'dasdasd', 'dasdasdsad', 'sadasdasd', 'sadasdsad', '2', 'dasdasd', 'asdas', 'dasdsad', 'asdasdas', 'dasdas'),
(2, 65656, 2, 'dasd', 'dsad', 'dsad', 'dsad', '3', 'asdas', 'dsad', 'dsdasd', 'dasdas', 'ddas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electric_request_utility_plans`
--

CREATE TABLE IF NOT EXISTS `electric_request_utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_number_utility` varchar(255) NOT NULL,
  `company_utility` varchar(255) NOT NULL,
  `path_length_utility` varchar(255) NOT NULL,
  `see_attached_map_utility` varchar(255) NOT NULL,
  `from_electric_utility` varchar(255) NOT NULL,
  `to_electric_utility` varchar(255) NOT NULL,
  `scope_word_electric_utility` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `electric_request_utility_plans`
--

INSERT INTO `electric_request_utility_plans` (`id`, `service_number`, `general_information_id`, `task_request_number_utility`, `company_utility`, `path_length_utility`, `see_attached_map_utility`, `from_electric_utility`, `to_electric_utility`, `scope_word_electric_utility`) VALUES
(1, 32165412, 1, 'dasdsa', '1', 'dasdsa', 'si', 'dasd', 'asdasd', 'asdasdsa'),
(2, 65656, 2, 'dasdsa', '2', '20', 'si', 'sdasd', 'dsadd', 'dasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `engineering`
--

CREATE TABLE IF NOT EXISTS `engineering` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `engineering` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  `company` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `engineering`
--

INSERT INTO `engineering` (`id`, `engineering`, `fecha`, `estado`, `company`) VALUES
(1, 'engineer 1', '1452536896', 1, 2),
(2, 'engineer 2', '1452536934', 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `id_request` int(16) NOT NULL,
  `id_company` int(16) NOT NULL,
  `plan_invoice` varchar(255) NOT NULL,
  `file_plan_invoice` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `factura`
--

INSERT INTO `factura` (`id`, `id_request`, `id_company`, `plan_invoice`, `file_plan_invoice`, `fecha`, `estado`) VALUES
(1, 6, 3, '1600', 'invoice_1455303990.pdf', '1455303990', '1'),
(2, 17, 3, '465', 'invoice_1455304665.pdf', '1455304665', '1'),
(3, 25, 3, '84', '', '1455304708', '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `find_request_utility_plans`
--

CREATE TABLE IF NOT EXISTS `find_request_utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_number_find_utility` varchar(255) NOT NULL,
  `path_lenth_find_utility` varchar(255) NOT NULL,
  `find_aerial_utility` varchar(255) NOT NULL,
  `find_underground_utility` varchar(255) NOT NULL,
  `elec_find_utility` varchar(255) NOT NULL,
  `tel_find_utility` varchar(255) NOT NULL,
  `private_find_utility` varchar(255) NOT NULL,
  `see_attached_redline_map_utility` varchar(255) NOT NULL,
  `from_find_utility` varchar(255) NOT NULL,
  `to_find_utility` varchar(255) NOT NULL,
  `scope_work_find_utility` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `find_request_utility_plans`
--

INSERT INTO `find_request_utility_plans` (`id`, `service_number`, `general_information_id`, `task_request_number_find_utility`, `path_lenth_find_utility`, `find_aerial_utility`, `find_underground_utility`, `elec_find_utility`, `tel_find_utility`, `private_find_utility`, `see_attached_redline_map_utility`, `from_find_utility`, `to_find_utility`, `scope_work_find_utility`) VALUES
(1, 32165412, 1, 'dasds', 'dasdsa', 'si', 'si', 'si', 'si', 'si', 'si', 'asdasdasd', 'dasd', 'dasdsasa'),
(2, 65656, 2, 'dasds', 'dasdsa', 'si', 'si', 'si', 'si', 'si', 'si', 'asdasdasd', 'dasd', 'dasdsasa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `general_information`
--

CREATE TABLE IF NOT EXISTS `general_information` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `engineering_id` int(16) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `solomon_number` int(16) NOT NULL,
  `service_number` int(16) NOT NULL,
  `prj_assing_number` int(16) NOT NULL,
  `kick_off_date` varchar(255) NOT NULL,
  `bldg_number` int(16) NOT NULL,
  `street_number` varchar(255) NOT NULL,
  `city_id` int(16) NOT NULL,
  `state_id` int(16) NOT NULL,
  `doc_number` int(16) NOT NULL,
  `po_number` int(16) NOT NULL,
  `date_request_sent` varchar(255) NOT NULL,
  `lt_exp_job_completion` varchar(255) NOT NULL,
  `lt_fiber_eng` varchar(255) NOT NULL,
  `lt_project` varchar(255) NOT NULL,
  `scope_work` longtext NOT NULL,
  `estatus` int(1) NOT NULL,
  `usuario_id` int(16) NOT NULL,
  `company` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `general_information`
--

INSERT INTO `general_information` (`id`, `engineering_id`, `customer_name`, `solomon_number`, `service_number`, `prj_assing_number`, `kick_off_date`, `bldg_number`, `street_number`, `city_id`, `state_id`, `doc_number`, `po_number`, `date_request_sent`, `lt_exp_job_completion`, `lt_fiber_eng`, `lt_project`, `scope_work`, `estatus`, `usuario_id`, `company`) VALUES
(1, 2, 'jairo cuesta', 4896, 32165412, 6541623, '2016-02-29', 0, 'dasdasds', 2, 2, 0, 0, '22-2-2015', '', '', '', '', 0, 2, '1'),
(2, 1, 'pedro martinez', 456, 65656, 5, '2016-04-30', 9845, 'calle siempre viva #47', 1, 1, 46, 5468, '25-2-2015', '', '', '', '', 0, 3, '1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `highway_request_civil_plans`
--

CREATE TABLE IF NOT EXISTS `highway_request_civil_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_highway_civil` varchar(255) NOT NULL,
  `date_task_request_highway_civil` varchar(255) NOT NULL,
  `expected_return_highway_civil` varchar(255) NOT NULL,
  `traffic_proposed_highway_civil` varchar(255) NOT NULL,
  `from_highway_civil` varchar(255) NOT NULL,
  `to_highway_civil` varchar(255) NOT NULL,
  `scope_work_highway_civil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `highway_request_civil_plans`
--

INSERT INTO `highway_request_civil_plans` (`id`, `service_number`, `general_information_id`, `task_request_highway_civil`, `date_task_request_highway_civil`, `expected_return_highway_civil`, `traffic_proposed_highway_civil`, `from_highway_civil`, `to_highway_civil`, `scope_work_highway_civil`) VALUES
(1, 32165412, 1, 'dasdas', 'dasdasd', 'dasdas', 'highway', 'sadasd', 'asdasd', 'dasdsad'),
(2, 65656, 2, 'dasdas', 'dasdasd', 'dasdas', 'highway', 'sadasd', 'asdasd', 'dasdsad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `highway_traffic_pole_plan`
--

CREATE TABLE IF NOT EXISTS `highway_traffic_pole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `other_highway_task_request_number` varchar(255) NOT NULL,
  `other_highway_date_task` varchar(255) NOT NULL,
  `other_highway_expected_date` varchar(255) NOT NULL,
  `other_highway_proposed_tmp` varchar(255) NOT NULL,
  `other_highway_traffic` varchar(255) NOT NULL,
  `other_highway_from` varchar(255) NOT NULL,
  `other_highway_to` varchar(255) NOT NULL,
  `other_highway_scope` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `highway_traffic_pole_plan`
--

INSERT INTO `highway_traffic_pole_plan` (`id`, `service_number`, `general_information_id`, `other_highway_task_request_number`, `other_highway_date_task`, `other_highway_expected_date`, `other_highway_proposed_tmp`, `other_highway_traffic`, `other_highway_from`, `other_highway_to`, `other_highway_scope`) VALUES
(1, 32165412, 1, 'dasd', 'dasd', 'asdas', 'asdas', 'highway', '4da56s', '6d5as4', 'd4as65das'),
(2, 65656, 2, 'dasd', 'dasd', 'asdas', 'asdas', 'highway', '4da56s', '6d5as4', 'd4as65das');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inside_plans`
--

CREATE TABLE IF NOT EXISTS `inside_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `assigned_company_site_survey_building` int(16) NOT NULL,
  `contact_site_survey_building` int(16) NOT NULL,
  `assigned_company_isp_eng_plans_building` int(16) NOT NULL,
  `assigned_company_eng_isp_plans_no_survey` int(16) NOT NULL,
  `assigned_company_site_survey_isp_as_built` int(16) NOT NULL,
  `contact_site_survey_isp_as_built` int(16) NOT NULL,
  `assigned_company_eng_isp_plans_isp_as_built` int(16) NOT NULL,
  `assigned_company_site_survey_passive_filter` int(16) NOT NULL,
  `contact_site_survey_passive_filter` int(16) NOT NULL,
  `assigned_company_eng_isp_plans_passive_filter` int(16) NOT NULL,
  `floor_site_survey_research_floor` varchar(255) NOT NULL,
  `assigned_company_site_survey_research_floor` int(16) NOT NULL,
  `scope_work_inside_plans` longtext NOT NULL,
  `company_name_cable` int(16) NOT NULL,
  `contact_name_cable` varchar(255) NOT NULL,
  `contact_number_cable` varchar(255) NOT NULL,
  `contact_email_cable` varchar(255) NOT NULL,
  `company_name_tenant` int(16) NOT NULL,
  `contact_name_tenant` varchar(255) NOT NULL,
  `contact_number_tenant` varchar(255) NOT NULL,
  `contact_email_tenant` varchar(255) NOT NULL,
  `company_name_property` int(16) NOT NULL,
  `contact_name_property` varchar(255) NOT NULL,
  `contact_number_property` varchar(255) NOT NULL,
  `contact_email_property` varchar(255) NOT NULL,
  `attach_existin_file` varchar(255) NOT NULL,
  `new_building` varchar(2) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `inside_plans`
--

INSERT INTO `inside_plans` (`id`, `service_number`, `assigned_company_site_survey_building`, `contact_site_survey_building`, `assigned_company_isp_eng_plans_building`, `assigned_company_eng_isp_plans_no_survey`, `assigned_company_site_survey_isp_as_built`, `contact_site_survey_isp_as_built`, `assigned_company_eng_isp_plans_isp_as_built`, `assigned_company_site_survey_passive_filter`, `contact_site_survey_passive_filter`, `assigned_company_eng_isp_plans_passive_filter`, `floor_site_survey_research_floor`, `assigned_company_site_survey_research_floor`, `scope_work_inside_plans`, `company_name_cable`, `contact_name_cable`, `contact_number_cable`, `contact_email_cable`, `company_name_tenant`, `contact_name_tenant`, `contact_number_tenant`, `contact_email_tenant`, `company_name_property`, `contact_name_property`, `contact_number_property`, `contact_email_property`, `attach_existin_file`, `new_building`, `general_information_id`) VALUES
(1, 32165412, 3, 1, 2, 3, 2, 1, 1, 2, 1, 3, '85', 3, 'dasdas', 3, 'dasd', '465', '56sa4d56asd4a665@6d5as4d65a', 1, 'asdas', 'dasd', '56sa4d56asd4a665@6d5as4d65a', 2, 'dasdasd', 'dasd', '56sa4d56asd4a665@6d5as4d65a', 'attach_1454616907.jpg', 'si', 1),
(2, 65656, 2, 1, 1, 0, 1, 1, 0, 0, 0, 2, 'floor', 2, 'scope work inside plan', 3, 'jairo', '8095684856', 'jairo@agencia7am.com', 3, 'pedro', '8095684856', 'pedro@agencia7am.com', 3, 'ramon', '8095684856', 'ramon@agencia7am.com', 'attach_1454704352.', 'no', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `manhole_plan`
--

CREATE TABLE IF NOT EXISTS `manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `look_survey_manhole` varchar(255) NOT NULL,
  `final_butterfly_manhole` varchar(255) NOT NULL,
  `preliminary_proposed_manhole` varchar(255) NOT NULL,
  `gis_as_built_manhole` varchar(255) NOT NULL,
  `butterfly_proposed_manhole` varchar(255) NOT NULL,
  `outsite_utility_application_manhole` varchar(255) NOT NULL,
  `butterfly_as_built_manhole` varchar(255) NOT NULL,
  `red_line_page_manhole` varchar(255) NOT NULL,
  `red_line_file_manhole` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `manhole_plan`
--

INSERT INTO `manhole_plan` (`id`, `service_number`, `general_information_id`, `look_survey_manhole`, `final_butterfly_manhole`, `preliminary_proposed_manhole`, `gis_as_built_manhole`, `butterfly_proposed_manhole`, `outsite_utility_application_manhole`, `butterfly_as_built_manhole`, `red_line_page_manhole`, `red_line_file_manhole`) VALUES
(1, 32165412, 1, 'si', 'si', 'no', 'no', 'si', 'si', 'no', 'red_line_page_manhole_1454616907.jpg', 'red_line_file_manhole_1454616907.jpg'),
(2, 65656, 2, 'si', 'si', 'no', 'si', 'si', 'si', 'no', 'red_line_page_manhole_1454704352.jpg', 'red_line_file_manhole_1454704352.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mwra_request_civil_plans`
--

CREATE TABLE IF NOT EXISTS `mwra_request_civil_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_mwra_civil` varchar(255) NOT NULL,
  `date_task_request_mwra_civil` varchar(255) NOT NULL,
  `expected_return_mwra_civil` varchar(255) NOT NULL,
  `proposed_length_mwra_civil` varchar(255) NOT NULL,
  `existing_profile_mwra_civil` varchar(255) NOT NULL,
  `from_mwra_civil` varchar(255) NOT NULL,
  `to_mwra_civil` varchar(255) NOT NULL,
  `scope_work_mwra_civil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `mwra_request_civil_plans`
--

INSERT INTO `mwra_request_civil_plans` (`id`, `service_number`, `general_information_id`, `task_request_mwra_civil`, `date_task_request_mwra_civil`, `expected_return_mwra_civil`, `proposed_length_mwra_civil`, `existing_profile_mwra_civil`, `from_mwra_civil`, `to_mwra_civil`, `scope_work_mwra_civil`) VALUES
(1, 32165412, 1, 'dasd', 'dasdas', 'dasdas', 'asdas', 'highway', 'dasdasdas', 'dasdas', 'dasdsa'),
(2, 65656, 2, 'dasd', 'dasdas', 'dasdas', 'asdas', 'highway', 'dasdasdas', 'dasdas', 'dasdsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `outsite_utility_manhole_plan`
--

CREATE TABLE IF NOT EXISTS `outsite_utility_manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_number_outsite_manhole` varchar(255) NOT NULL,
  `date_task_request_outsite_manhole` varchar(255) NOT NULL,
  `expected_date_outsite_manhole` varchar(255) NOT NULL,
  `company_outsite_manhole` varchar(255) NOT NULL,
  `contact_outsite_manhole` varchar(255) NOT NULL,
  `breakout_application_task_manhole` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `outsite_utility_manhole_plan`
--

INSERT INTO `outsite_utility_manhole_plan` (`id`, `service_number`, `general_information_id`, `task_request_number_outsite_manhole`, `date_task_request_outsite_manhole`, `expected_date_outsite_manhole`, `company_outsite_manhole`, `contact_outsite_manhole`, `breakout_application_task_manhole`) VALUES
(1, 32165412, 1, 'dsad', 'dasds', 'asdasd', '1', '2', 'si'),
(2, 65656, 2, 'dsad', 'dasds', 'asdasd', '3', '2', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `outsite_utility_pole_plan_task`
--

CREATE TABLE IF NOT EXISTS `outsite_utility_pole_plan_task` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `outsite_utility_company` varchar(255) NOT NULL,
  `outsite_utility_contact` varchar(255) NOT NULL,
  `outsite_underground_application` varchar(255) NOT NULL,
  `outsite_application_company` varchar(255) NOT NULL,
  `outsite_applicacion_contact` varchar(255) NOT NULL,
  `outsite_cust_cable` varchar(255) NOT NULL,
  `outsite_cust_tie_net` varchar(255) NOT NULL,
  `outsite_text_here` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `outsite_utility_pole_plan_task`
--

INSERT INTO `outsite_utility_pole_plan_task` (`id`, `service_number`, `general_information_id`, `outsite_utility_company`, `outsite_utility_contact`, `outsite_underground_application`, `outsite_application_company`, `outsite_applicacion_contact`, `outsite_cust_cable`, `outsite_cust_tie_net`, `outsite_text_here`) VALUES
(1, 32165412, 1, '1', '1', 'aerial', '1', '1', 'das', 'dasdad', 'asdds'),
(2, 65656, 2, '3', '1', 'aerial', '3', '1', 'das', 'dasdad', 'asdds');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permit_request_civil_plans`
--

CREATE TABLE IF NOT EXISTS `permit_request_civil_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_permit_civil` varchar(255) NOT NULL,
  `date_task_request_permit_civil` varchar(255) NOT NULL,
  `expected_return_permit_civil` varchar(255) NOT NULL,
  `muni_permit_civil` varchar(255) NOT NULL,
  `dcr_permit_civil` varchar(255) NOT NULL,
  `nh_dot_permit_civil` varchar(255) NOT NULL,
  `ct_dot_permit_civil` varchar(255) NOT NULL,
  `highway_permit_civil` varchar(255) NOT NULL,
  `mass_dot_permit_civil` varchar(255) NOT NULL,
  `me_dot_permit_civil` varchar(255) NOT NULL,
  `ny_dot_permit_civil` varchar(255) NOT NULL,
  `railroad_permit_civil` varchar(255) NOT NULL,
  `ri_dot_permit_civil` varchar(255) NOT NULL,
  `vi_dot_permit_civil` varchar(255) NOT NULL,
  `scope_work_permit_civil` varchar(255) NOT NULL,
  `assigned_company_permit_civil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `permit_request_civil_plans`
--

INSERT INTO `permit_request_civil_plans` (`id`, `service_number`, `general_information_id`, `task_request_permit_civil`, `date_task_request_permit_civil`, `expected_return_permit_civil`, `muni_permit_civil`, `dcr_permit_civil`, `nh_dot_permit_civil`, `ct_dot_permit_civil`, `highway_permit_civil`, `mass_dot_permit_civil`, `me_dot_permit_civil`, `ny_dot_permit_civil`, `railroad_permit_civil`, `ri_dot_permit_civil`, `vi_dot_permit_civil`, `scope_work_permit_civil`, `assigned_company_permit_civil`) VALUES
(1, 32165412, 1, 'dasd', 'dasdas', 'dasdas', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'wa89465sd', '1'),
(2, 65656, 2, 'dasd', 'asdasdasd', 'sadasd', 'si', '', 'si', 'si', 'si', '', '', '', 'si', 'si', '', 'dasd', '3');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pole_plans`
--

CREATE TABLE IF NOT EXISTS `pole_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `cable_company_name` varchar(255) NOT NULL,
  `cable_contact_name` varchar(255) NOT NULL,
  `cable_contact_number` varchar(255) NOT NULL,
  `cable_contact_email` varchar(255) NOT NULL,
  `as_built_licensed_pole` varchar(255) NOT NULL,
  `gis_as_built_file` varchar(255) NOT NULL,
  `as_built_from_pole` varchar(255) NOT NULL,
  `as_built_to_pole` varchar(255) NOT NULL,
  `proposed_aerial_pole` varchar(255) NOT NULL,
  `scope_work_pole` varchar(255) NOT NULL,
  `upload_red_line_page_pole` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `pole_plans`
--

INSERT INTO `pole_plans` (`id`, `service_number`, `general_information_id`, `cable_company_name`, `cable_contact_name`, `cable_contact_number`, `cable_contact_email`, `as_built_licensed_pole`, `gis_as_built_file`, `as_built_from_pole`, `as_built_to_pole`, `proposed_aerial_pole`, `scope_work_pole`, `upload_red_line_page_pole`) VALUES
(1, 32165412, 1, '2', 'manolo pol', 'dasdas', 'dasdasd', 'si', 'si', '45', '454', '545', '5454', 'red_line_page_pole_1454616907.jpg'),
(2, 65656, 2, '3', 'manuelito', '8095641235', 'manuelito@agencia7am.com', 'si', 'si', '45', '545', '454', '454d56as', 'red_line_page_pole_1454704352.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `private_proposed_manhole_plan`
--

CREATE TABLE IF NOT EXISTS `private_proposed_manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_number_private_manhole` varchar(255) NOT NULL,
  `date_task_request_private_manhole` varchar(255) NOT NULL,
  `expected_date_private_manhole` varchar(255) NOT NULL,
  `mh_option_private_manhole` varchar(255) NOT NULL,
  `company_private_manhole` varchar(255) NOT NULL,
  `prop_fiber_private_manhole` varchar(255) NOT NULL,
  `path_length_private_manhole` varchar(255) NOT NULL,
  `from_private_manhole` varchar(255) NOT NULL,
  `to_private_manhole` varchar(255) NOT NULL,
  `scope_work_private_manhole` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `private_proposed_manhole_plan`
--

INSERT INTO `private_proposed_manhole_plan` (`id`, `service_number`, `general_information_id`, `task_request_number_private_manhole`, `date_task_request_private_manhole`, `expected_date_private_manhole`, `mh_option_private_manhole`, `company_private_manhole`, `prop_fiber_private_manhole`, `path_length_private_manhole`, `from_private_manhole`, `to_private_manhole`, `scope_work_private_manhole`) VALUES
(1, 32165412, 1, 'dasd', 'dasdas', 'dasdas', 'dasdsad', '1', 'dasd', 'dasdas', 'dasdas', 'dasdasd', 'asdasd'),
(2, 65656, 2, 'dasd', 'das', 'dasd', 'dasd', '3', 'dsad', 'dasda', 'dasd', 'asdasd', 'dsadas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `private_request_utility_plans`
--

CREATE TABLE IF NOT EXISTS `private_request_utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_number_private` varchar(255) NOT NULL,
  `company_utility_private` varchar(255) NOT NULL,
  `path_length_private` varchar(255) NOT NULL,
  `see_attached_map_private` varchar(255) NOT NULL,
  `from_utility_private` varchar(255) NOT NULL,
  `to_utility_private` varchar(255) NOT NULL,
  `scope_work_private` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `private_request_utility_plans`
--

INSERT INTO `private_request_utility_plans` (`id`, `service_number`, `general_information_id`, `task_request_number_private`, `company_utility_private`, `path_length_private`, `see_attached_map_private`, `from_utility_private`, `to_utility_private`, `scope_work_private`) VALUES
(1, 32165412, 1, 'dasdsa', '1', 'dasdas', 'si', 'sadasd', 'asdasd', 'asd'),
(2, 65656, 2, 'dasdsa', '3', 'dasd', 'si', 'dsdasd', 'ddsadas', 'asdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proposed_pole_plan_task`
--

CREATE TABLE IF NOT EXISTS `proposed_pole_plan_task` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `construction_proposed_plans` varchar(255) NOT NULL,
  `gps_field_survey_pole` varchar(255) NOT NULL,
  `license_proposed_pole` varchar(255) NOT NULL,
  `measure_height_attached` varchar(255) NOT NULL,
  `license_forms_needed` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `proposed_pole_plan_task`
--

INSERT INTO `proposed_pole_plan_task` (`id`, `service_number`, `general_information_id`, `construction_proposed_plans`, `gps_field_survey_pole`, `license_proposed_pole`, `measure_height_attached`, `license_forms_needed`) VALUES
(1, 32165412, 1, 'si', 'si', 'no', 'no', 'si'),
(2, 65656, 2, 'si', 'si', 'no', 'si', 'si');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `railroad_crossing_pole_plans`
--

CREATE TABLE IF NOT EXISTS `railroad_crossing_pole_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `other_railroad_task_request_number` varchar(255) NOT NULL,
  `other_railroad_date_task` varchar(255) NOT NULL,
  `other_railroad_expected_date` varchar(255) NOT NULL,
  `other_railroad_crossing_proposed` varchar(255) NOT NULL,
  `other_railroad_from` varchar(255) NOT NULL,
  `other_railroad_to` varchar(255) NOT NULL,
  `other_railroad_scope` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `railroad_crossing_pole_plans`
--

INSERT INTO `railroad_crossing_pole_plans` (`id`, `service_number`, `general_information_id`, `other_railroad_task_request_number`, `other_railroad_date_task`, `other_railroad_expected_date`, `other_railroad_crossing_proposed`, `other_railroad_from`, `other_railroad_to`, `other_railroad_scope`) VALUES
(1, 32165412, 1, 'dasd', 'sdasdas', 'dasdas', 'engineering', 'dasdas', 'dasdas', 'dasd'),
(2, 65656, 2, 'dasd', 'sdasdas', 'dasdas', 'engineering', 'dasdas', 'dasdas', 'dasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `railroad_request_civil_plans`
--

CREATE TABLE IF NOT EXISTS `railroad_request_civil_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_railroad_civil` varchar(255) NOT NULL,
  `date_task_request_railroad_civil` varchar(255) NOT NULL,
  `expected_return_railroad_civil` varchar(255) NOT NULL,
  `crossing_proposed_railroad_civil` varchar(255) NOT NULL,
  `from_railroad_civil` varchar(255) NOT NULL,
  `to_railroad_civil` varchar(255) NOT NULL,
  `scope_work_railroad_civil` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `railroad_request_civil_plans`
--

INSERT INTO `railroad_request_civil_plans` (`id`, `service_number`, `general_information_id`, `task_request_railroad_civil`, `date_task_request_railroad_civil`, `expected_return_railroad_civil`, `crossing_proposed_railroad_civil`, `from_railroad_civil`, `to_railroad_civil`, `scope_work_railroad_civil`) VALUES
(1, 32165412, 1, 'dasd', 'sdasd', 'adasd', 'highway', 'dasd', 'dasdsa', 'dasdasd'),
(2, 65656, 2, 'dasd', 'sdasd', 'adasd', 'highway', 'dasd', 'dasdsa', 'dasdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `id_request` int(16) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  `usuario_id` int(16) NOT NULL,
  `contratista_id` int(16) NOT NULL,
  `name` varchar(255) NOT NULL,
  `estatus_job` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `request`
--

INSERT INTO `request` (`id`, `id_request`, `tipo`, `fecha`, `estado`, `usuario_id`, `contratista_id`, `name`, `estatus_job`) VALUES
(1, 2, 'inside_plans', '1454704352', 1, 2, 3, 'INSIDE PLAN', 1),
(2, 2, 'pole_plans', '1454704352', 1, 2, 3, 'POLE PLAN', 0),
(3, 2, 'proposed_pole_plan_task', '1454704352', 1, 2, 3, 'PROPOSED POLE PLAN TASK', 1),
(4, 2, 'as_built_pole_plan_task', '1454704352', 1, 2, 3, 'AS-BUILT POLE PLAN TASK', 0),
(5, 2, 'outsite_utility_pole_plan_task', '1454704352', 1, 2, 3, 'OUTSIDE UTILITY APPLICATION TASK', 2),
(6, 2, 'highway_traffic_pole_plan', '1454704352', 1, 2, 3, 'HIGHWAY TRAFFIC PLANS NEEDED', 0),
(7, 2, 'railroad_crossing_pole_plans', '1454704352', 1, 2, 3, 'RAILROAD CROSSING PLANS NEEDED', 0),
(8, 2, 'utility_plans', '1454704352', 1, 2, 3, 'UTILITY AB RECORD', 0),
(9, 2, 'electric_request_utility_plans', '1454704352', 1, 2, 3, 'ELECTRIC PLAN REQUEST', 0),
(10, 2, 'telephone_request_utility_plans', '1454704352', 1, 2, 3, 'TELEPHONE PLAN REQUEST', 0),
(11, 2, 'private_request_utility_plans', '1454704352', 1, 2, 3, 'PRIVATE P. PLAN REQUEST', 0),
(12, 2, 'all_request_utility_plans', '1454704352', 1, 2, 3, 'ALL UTILITY PLAN REQUEST', 0),
(13, 2, 'find_request_utility_plans', '1454704352', 1, 2, 3, 'FIND A POSSIBLE PATH REQUEST', 0),
(14, 2, 'manhole_plan', '1454704352', 1, 2, 3, 'MANHOLE PROP', 0),
(15, 2, 'electric_proposed_manhole_plan', '1454704352', 1, 2, 3, 'ELECTRIC PROPOSED MANHOLE PLANS', 0),
(16, 2, 'telephone_proposed_manhole_plan', '1454704352', 1, 2, 3, 'TELEPHONE PROPOSED MANHOLE PLANS', 0),
(17, 2, 'private_proposed_manhole_plan', '1454704352', 1, 2, 3, 'PRIVATE PROPOSED MANHOLE PLANS', 0),
(18, 2, 'outsite_utility_manhole_plan', '1454704352', 1, 2, 3, 'OUTSIDE UTILITY APPLICATION', 0),
(19, 2, 'underground_outsite_manhole_plan', '1454704352', 1, 2, 3, 'UNDERGROUND APPLICATION TASK', 0),
(20, 2, 'aerial_outsite_manhole_plan', '1454704352', 1, 2, 3, 'AERIAL APPLICATION TASK', 0),
(21, 2, 'civil_plans', '1454704352', 1, 2, 3, 'CIVIL PLAN', 0),
(22, 2, 'permit_request_civil_plans', '1454704352', 1, 2, 3, 'PERMIT REQUEST', 0),
(23, 2, 'mwra_request_civil_plans', '1454704352', 1, 2, 3, 'MWRA CIVIL PLANS TASK NEEDED', 0),
(24, 2, 'railroad_request_civil_plans', '1454704352', 1, 2, 3, 'RAILROAD CROSSING PLANS TASK NEEDED', 0),
(25, 2, 'highway_request_civil_plans', '1454704352', 1, 2, 3, 'HIGHWAY TRAFFIC MANAGEMENT PLANS TASK NEEDED', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `city_id` int(16) NOT NULL,
  `state` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `state`
--

INSERT INTO `state` (`id`, `city_id`, `state`, `fecha`, `estado`) VALUES
(1, 1, 'New York', '1452537040', 1),
(2, 2, 'California', '1452537054', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telephone_proposed_manhole_plan`
--

CREATE TABLE IF NOT EXISTS `telephone_proposed_manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_number_telephone_manhole` varchar(255) NOT NULL,
  `date_task_request_telephone_manhole` varchar(255) NOT NULL,
  `expected_date_telephone_manhole` varchar(255) NOT NULL,
  `mh_option_telephone_manhole` varchar(255) NOT NULL,
  `company_telephone_manhole` varchar(255) NOT NULL,
  `prop_fiber_telephone_manhole` varchar(255) NOT NULL,
  `path_length_telephone_manhole` varchar(255) NOT NULL,
  `from_telephone_manhole` varchar(255) NOT NULL,
  `to_telephone_manhole` varchar(255) NOT NULL,
  `scope_work_telephone_manhole` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `telephone_proposed_manhole_plan`
--

INSERT INTO `telephone_proposed_manhole_plan` (`id`, `service_number`, `general_information_id`, `task_request_number_telephone_manhole`, `date_task_request_telephone_manhole`, `expected_date_telephone_manhole`, `mh_option_telephone_manhole`, `company_telephone_manhole`, `prop_fiber_telephone_manhole`, `path_length_telephone_manhole`, `from_telephone_manhole`, `to_telephone_manhole`, `scope_work_telephone_manhole`) VALUES
(1, 32165412, 1, 'dsadas', 'dasda', 'dasdasd', 'sadasdsa', '1', 'dasdasdsd', 'asdasd', 'dasdas', 'dasdsad', 'dasda'),
(2, 65656, 2, 'dsadas', 'dasda', 'dasdasd', 'sadasdsa', '3', 'dasdasdsd', 'asdasd', 'dasdas', 'dasdsad', 'dasda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telephone_request_utility_plans`
--

CREATE TABLE IF NOT EXISTS `telephone_request_utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `task_request_number_telephone` varchar(255) NOT NULL,
  `company_utility_telephone` varchar(255) NOT NULL,
  `path_length_utility_telephone` varchar(255) NOT NULL,
  `see_attached_map_telephone` varchar(255) NOT NULL,
  `from_utility_telephone` varchar(255) NOT NULL,
  `to_utility_telephone` varchar(255) NOT NULL,
  `scope_work_telephone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `telephone_request_utility_plans`
--

INSERT INTO `telephone_request_utility_plans` (`id`, `service_number`, `general_information_id`, `task_request_number_telephone`, `company_utility_telephone`, `path_length_utility_telephone`, `see_attached_map_telephone`, `from_utility_telephone`, `to_utility_telephone`, `scope_work_telephone`) VALUES
(1, 32165412, 1, 'dasdasd', '1', 'dsadas', 'si', 'dasdasdsadas', 'dasdas', '4d56as'),
(2, 65656, 2, '8095684865', '3', 'dsadas', 'si', 'dsad', 'dasdasd', 'asdas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `underground_outsite_manhole_plan`
--

CREATE TABLE IF NOT EXISTS `underground_outsite_manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `company_underground_manhole` varchar(255) NOT NULL,
  `contact_underground_manhole` varchar(255) NOT NULL,
  `cust_cable_count_underground_manhole` varchar(255) NOT NULL,
  `cust_tie_loc_underground_manhole` varchar(255) NOT NULL,
  `scope_work_underground_manhole` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `underground_outsite_manhole_plan`
--

INSERT INTO `underground_outsite_manhole_plan` (`id`, `service_number`, `general_information_id`, `company_underground_manhole`, `contact_underground_manhole`, `cust_cable_count_underground_manhole`, `cust_tie_loc_underground_manhole`, `scope_work_underground_manhole`) VALUES
(1, 32165412, 1, '1', '1', 'dasdasd', 'asdas', 'dasdasd'),
(2, 65656, 2, '3', '1', 'dasdasd', 'asdas', 'dasdasd');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user_name`, `password`, `nombre`, `apellido`, `fecha`, `foto`, `estado`) VALUES
(1, 'admin', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'admin', '', '', '', 1),
(2, 'lightower', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'lightower', 'empresa', '', '', 2),
(3, 'gulinc', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'gulinc', 'contratista', '', '', 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utility_plans`
--

CREATE TABLE IF NOT EXISTS `utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` int(16) NOT NULL,
  `general_information_id` int(16) NOT NULL,
  `redline_page_utility` varchar(255) NOT NULL,
  `redline_file_utility` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `utility_plans`
--

INSERT INTO `utility_plans` (`id`, `service_number`, `general_information_id`, `redline_page_utility`, `redline_file_utility`) VALUES
(1, 32165412, 1, 'red_line_page_utility_1454616907.jpg', 'red_line_file_utility_1454616907.jpg'),
(2, 65656, 2, 'red_line_page_utility_1454704352.jpg', 'red_line_file_utility_1454704352.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
