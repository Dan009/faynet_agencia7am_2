-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-07-2016 a las 13:42:16
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
CREATE DATABASE IF NOT EXISTS `faynet` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `faynet`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aerial_outsite_manhole_plan`
--

CREATE TABLE IF NOT EXISTS `aerial_outsite_manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `company_aerial_manhole` varchar(255) NOT NULL,
  `contact_aerial_manhole` varchar(255) NOT NULL,
  `cust_cable_count_aerial_manhole` varchar(255) NOT NULL,
  `cust_tie_loc_aerial_manhole` varchar(255) NOT NULL,
  `scope_work_aerial_manhole` varchar(255) NOT NULL,
  `designerid` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `all_request_utility_plans`
--

CREATE TABLE IF NOT EXISTS `all_request_utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `task_request_number_all_utility` varchar(255) NOT NULL,
  `company_all_utility` varchar(255) NOT NULL,
  `path_lenth_all_utility` varchar(255) NOT NULL,
  `see_attached_map_all_utility` varchar(255) NOT NULL,
  `from_all_utility` varchar(255) NOT NULL,
  `to_all_utility` varchar(255) NOT NULL,
  `scope_work_all_utility` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `as_built_pole_plan_task`
--

CREATE TABLE IF NOT EXISTS `as_built_pole_plan_task` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `as_built_licensed_pole_plans` varchar(255) NOT NULL,
  `gis_as_built_file_need` varchar(255) NOT NULL,
  `designerid` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `as_built_pole_plan_task`
--

INSERT INTO `as_built_pole_plan_task` (`id`, `service_number`, `id_request`, `as_built_licensed_pole_plans`, `gis_as_built_file_need`, `designerid`) VALUES
(1, '', '9', 'si', 'si', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `breakout_manhole`
--

CREATE TABLE IF NOT EXISTS `breakout_manhole` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `look_survey_manhole` varchar(255) NOT NULL,
  `final_butterfly_manhole` varchar(255) NOT NULL,
  `preliminary_proposed_manhole` varchar(255) NOT NULL,
  `gis_as_built_manhole` varchar(255) NOT NULL,
  `butterfly_proposed_manhole` varchar(255) NOT NULL,
  `outsite_utility_application_manhole` varchar(255) NOT NULL,
  `butterfly_as_built_manhole` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `building_site_survey`
--

CREATE TABLE IF NOT EXISTS `building_site_survey` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `id_request` varchar(250) NOT NULL,
  `site_survey_company` int(11) NOT NULL,
  `site_survey_contact` int(11) NOT NULL,
  `isp_eng_plans_company` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `building_site_survey`
--

INSERT INTO `building_site_survey` (`id`, `id_request`, `site_survey_company`, `site_survey_contact`, `isp_eng_plans_company`) VALUES
(1, '1', 2, 1, 0),
(2, '2', 2, 2, 0),
(3, '3', 2, 1, 2),
(10, '22', 2, 1, 2),
(11, '23', 2, 2, 2),
(12, '26', 2, 1, 2),
(13, '28', 2, 1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cable_installation_contractor`
--

CREATE TABLE IF NOT EXISTS `cable_installation_contractor` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `company` varchar(250) NOT NULL,
  `contact_name` varchar(250) NOT NULL,
  `contact_number` varchar(250) NOT NULL,
  `contact_email` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `cable_installation_contractor`
--

INSERT INTO `cable_installation_contractor` (`id`, `company`, `contact_name`, `contact_number`, `contact_email`, `id_request`, `type`) VALUES
(1, '3', '', '', '', '1', 'building_site_survey'),
(2, '3', '', '', '', '2', 'building_site_survey'),
(3, '3', '', '', '', '3', 'building_site_survey'),
(4, '3', '', '', '', '0', 'building_site_survey'),
(5, '3', '', '', '', '26', 'building_site_survey'),
(6, '3', '', '', '', '0', 'building_site_survey'),
(7, '4', '', '', '', '28', 'building_site_survey'),
(8, '4', '', '', '', '0', 'building_site_survey');

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
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentarios`
--

CREATE TABLE IF NOT EXISTS `comentarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comentario` varchar(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `tipo` varchar(250) NOT NULL,
  `id_request` int(11) NOT NULL,
  `usuario_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `date`, `tipo`, `id_request`, `usuario_id`) VALUES
(1, '', '2016/06/07', 'APPROVE', 1, 2),
(2, '', '2016/06/07', 'APPROVE', 2, 2),
(3, 'Por favor verificar', '2016/06/28', 'DECLINE', 28, 2),
(4, '', '2016/06/28', 'APPROVE', 29, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `company`
--

INSERT INTO `company` (`id`, `company`, `fecha`, `estado`) VALUES
(2, 'gulinc', '1452697927', 1),
(3, 'Axis', '1452697927', 1);

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
  `id_request` varchar(250) NOT NULL,
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
(1, '1', 3, '1000', 'quote_1465327725.pdf', '1465327725', 1),
(2, '2', 3, '1000', 'quote_1465328869.pdf', '1465328869', 1),
(3, '28', 3, '4000', 'quote_1467143606.pdf', '1467143454', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cpe_building_info`
--

CREATE TABLE IF NOT EXISTS `cpe_building_info` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `region` varchar(50) NOT NULL,
  `project_manager` varchar(50) NOT NULL,
  `latitude` varchar(250) NOT NULL,
  `longitude` varchar(250) NOT NULL,
  `municipality` varchar(50) NOT NULL,
  `multi_tenant_req` set('si','no') NOT NULL,
  `rent_required` set('si','no') NOT NULL,
  `floor_plan_req` set('si','no') NOT NULL,
  `total_floors` tinyint(4) NOT NULL,
  `start_time_am` char(10) NOT NULL,
  `end_time_pm` char(10) NOT NULL,
  `riser_management_company_req` set('si','no') NOT NULL,
  `filter_lit_equip_req` set('si','no') NOT NULL,
  `working_days_week` varchar(50) NOT NULL,
  `building_photo_code` varchar(20) NOT NULL,
  `id_information` int(11) NOT NULL,
  `id_request` int(11) NOT NULL,
  `service_type` char(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cpe_lgx_info`
--

CREATE TABLE IF NOT EXISTS `cpe_lgx_info` (
  ` id` int(11) NOT NULL AUTO_INCREMENT,
  `lgx_floor_number` varchar(250) DEFAULT NULL,
  `lgx_room_number` int(11) DEFAULT NULL,
  `lgx_term_panel` varchar(250) DEFAULT NULL,
  `lgx_term_panel_size` varchar(250) DEFAULT NULL,
  `room_name_lgx_panel` varchar(250) DEFAULT NULL,
  `panel_owned_by` varchar(250) DEFAULT NULL,
  `dark_fiber_hand` set('yes','no') DEFAULT NULL,
  `rack_size` mediumint(7) DEFAULT NULL,
  `room_type` set('private','common') DEFAULT NULL,
  `fusion_splice_only` set('yes','no') DEFAULT NULL,
  `connector_type` varchar(250) DEFAULT NULL,
  `fiber_terminated_number` smallint(7) DEFAULT NULL,
  `total_bulkhead_number` int(11) DEFAULT NULL,
  `first_cpe_panel_photo_code` varchar(250) DEFAULT NULL,
  `second_cpe_panel_photo_code` varchar(250) DEFAULT NULL,
  `third_cpe_panel_photo_code` varchar(250) DEFAULT NULL,
  `first_panel_photo_inserted` set('yes','no') DEFAULT NULL,
  `second_cpe_panel_photo_inserted` set('yes','no') DEFAULT NULL,
  `third_cpe_panel_photo_inserted` set('yes','no') NOT NULL,
  `lgx_form_number` varchar(250) DEFAULT NULL,
  PRIMARY KEY (` id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `designer`
--

CREATE TABLE IF NOT EXISTS `designer` (
  `designerid` int(50) NOT NULL AUTO_INCREMENT,
  `name_designer` varchar(50) NOT NULL,
  `password` varchar(250) NOT NULL,
  `estado` int(2) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `date_added` varchar(250) NOT NULL,
  PRIMARY KEY (`designerid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Volcado de datos para la tabla `designer`
--

INSERT INTO `designer` (`designerid`, `name_designer`, `password`, `estado`, `lastname`, `username`, `email`, `company`, `date_added`) VALUES
(1, 'Ramon', '266575d3c2b8a34f83817458f96152b1', 1, 'Pereyra', 'ramonpe', '', '', '19-02-2016'),
(2, 'Natha', '', 1, 'Arias', '', '', '', '12-04-2016'),
(3, 'Daniel ', 'accaef43bfe058f6c0526b790092656f', 1, 'Ortega', 'dan', '', '', '10-03-2016'),
(8, 'Fulano', '81dc9bdb52d04dc20036dbd8313ed055', 1, 'De Tal', 'fulanodetal', '', 'gulinc', '04-05-2016'),
(9, 'Jairo', 'e10adc3949ba59abbe56e057f20f883e', 1, 'Cuesta', 'jairo', '', '7am', '04-05-2016');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electric_proposed_manhole_plan`
--

CREATE TABLE IF NOT EXISTS `electric_proposed_manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `electric_request_utility_plans`
--

CREATE TABLE IF NOT EXISTS `electric_request_utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `task_request_number_utility` varchar(255) NOT NULL,
  `company_utility` varchar(255) NOT NULL,
  `path_length_utility` varchar(255) NOT NULL,
  `see_attached_map_utility` varchar(255) NOT NULL,
  `from_electric_utility` varchar(255) NOT NULL,
  `to_electric_utility` varchar(255) NOT NULL,
  `scope_word_electric_utility` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `engineering`
--

INSERT INTO `engineering` (`id`, `engineering`, `fecha`, `estado`, `company`) VALUES
(1, 'Roman Mejia', '1452536896', 1, 2),
(2, 'Jairo Cuesta', '1452536896', 1, 2),
(5, 'Daniel Ortega', '1466697058', 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `factura`
--

CREATE TABLE IF NOT EXISTS `factura` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `id_request` varchar(250) NOT NULL,
  `id_company` int(16) NOT NULL,
  `plan_invoice` varchar(255) NOT NULL,
  `file_plan_invoice` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `find_request_utility_plans`
--

CREATE TABLE IF NOT EXISTS `find_request_utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `general_information`
--

CREATE TABLE IF NOT EXISTS `general_information` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `time_code` varchar(250) NOT NULL,
  `engineering_id` int(16) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `solomon_number` varchar(250) NOT NULL,
  `service_number` varchar(250) NOT NULL,
  `prj_assing_number` varchar(250) NOT NULL,
  `kick_off_date` varchar(255) NOT NULL,
  `bldg_number` varchar(250) NOT NULL,
  `street_number` varchar(255) NOT NULL,
  `city` varchar(250) NOT NULL,
  `state` varchar(250) NOT NULL,
  `doc_number` varchar(250) NOT NULL,
  `po_number` varchar(250) NOT NULL,
  `po_doc_title` varchar(50) NOT NULL,
  `file_time_code` varchar(250) NOT NULL,
  `date_request_sent` varchar(255) NOT NULL,
  `lt_exp_job_completion` varchar(255) NOT NULL,
  `lt_fiber_eng` varchar(255) NOT NULL,
  `lt_project` varchar(255) NOT NULL,
  `scope_work` longtext NOT NULL,
  `estatus` int(1) NOT NULL,
  `usuario_id` int(16) NOT NULL,
  `company` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=18 ;

--
-- Volcado de datos para la tabla `general_information`
--

INSERT INTO `general_information` (`id`, `time_code`, `engineering_id`, `customer_name`, `solomon_number`, `service_number`, `prj_assing_number`, `kick_off_date`, `bldg_number`, `street_number`, `city`, `state`, `doc_number`, `po_number`, `po_doc_title`, `file_time_code`, `date_request_sent`, `lt_exp_job_completion`, `lt_fiber_eng`, `lt_project`, `scope_work`, `estatus`, `usuario_id`, `company`) VALUES
(1, '1465327145-2', 1, 'Roman Mejia', '55555', '99002', '777', '2016-06-07', '777', 'celestina', 'New York', 'New York', '2341234', '12341', '', '', '2016-06-07', '777', '777', '', '', 0, 2, ''),
(2, '1465328558-2', 1, 'Daniel Marte', '14454', '543234', '445667', '2016-06-07', '98798798', 'Mi calle Street', 'New York', 'New York', '7676766', '6546', '', '', '2016-06-12', '777', '777', '777', 'This is ready', 0, 2, ''),
(3, '1465330033-2', 1, 'Madelin AsunciÃ³n', 'klajs;ldkf', '1232332', 'kl;asdfk', '2016-06-07', '32465245', 'Cualquier Calle', 'New York', 'New York', '', '', '', '', '2016-06-12', '777', '123213123', '123123', '', 0, 2, ''),
(4, '1465331790-2', 2, 'Daniel Marte', '777', '55555', '777', '2016-06-07', '123', 'celestina 4', 'New York', 'New York', '', '', '', '', '2016-02-20', '123123', 'sdfasa', '777', '', 0, 2, ''),
(15, '1465479834-2', 1, 'Daniel Ortega', '23SDFSDF', '2', 'AFWER2323', '2016-06-08', 'SFD23455', 'CUALQUIERA', 'Los Angeles', 'New York', '', '', '', '1465479834-2', '2016-06-17', 'DFGDFGDFGFD', 'ROBERTO', '#1', 'FVGSDFGSDFGSDFGSDFGSDFGSDFG', 0, 2, ''),
(16, '1467142964-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '1467142964-2', '', '', '', '', '', 0, 2, ''),
(17, '1467143162-2', 2, 'Roman Mejia', '123123', '55555', 'B123345', '2016-06-28', 'BL23455', 'celestina 4', 'Los Angeles', 'New York', '8797987', '6565', '', '1467143162-2', '2016-06-29', '123123', 'sdfasa', 'sdfasdfa', 'kljhlkjhlkjhlkjhlkj', 0, 2, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `highway_request_civil_plans`
--

CREATE TABLE IF NOT EXISTS `highway_request_civil_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `task_request_highway_civil` varchar(255) NOT NULL,
  `date_task_request_highway_civil` varchar(255) NOT NULL,
  `expected_return_highway_civil` varchar(255) NOT NULL,
  `traffic_proposed_highway_civil` varchar(255) NOT NULL,
  `from_highway_civil` varchar(255) NOT NULL,
  `to_highway_civil` varchar(255) NOT NULL,
  `scope_work_highway_civil` varchar(255) NOT NULL,
  `engineering_stamped_highway` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `highway_traffic_pole_plan`
--

CREATE TABLE IF NOT EXISTS `highway_traffic_pole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `other_highway_task_request_number` varchar(255) NOT NULL,
  `other_highway_date_task` varchar(255) NOT NULL,
  `other_highway_expected_date` varchar(255) NOT NULL,
  `other_highway_proposed_tmp` varchar(255) NOT NULL,
  `other_highway_traffic` varchar(255) NOT NULL,
  `other_highway_from` varchar(255) NOT NULL,
  `other_highway_to` varchar(255) NOT NULL,
  `other_highway_scope` varchar(255) NOT NULL,
  `other_highway_engineering_plans_pole` varchar(250) NOT NULL,
  `designerid` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inside_plans`
--

CREATE TABLE IF NOT EXISTS `inside_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `assigned_company_site_survey_building` int(16) NOT NULL,
  `contact_site_survey_building` int(16) NOT NULL,
  `assigned_company_isp_eng_plans_building` int(16) NOT NULL,
  `assigned_company_eng_isp_plans_no_survey` int(16) NOT NULL,
  `assigned_company_site_survey_isp_as_built` int(250) NOT NULL,
  `contact_site_survey_isp_as_built` int(16) NOT NULL,
  `assigned_company_eng_isp_plans_isp_as_built` int(16) NOT NULL,
  `assigned_company_site_survey_passive_filter` int(16) NOT NULL,
  `contact_site_survey_passive_filter` int(16) NOT NULL,
  `assigned_company_eng_isp_plans_passive_filter` int(16) NOT NULL,
  `floor_site_survey_research_floor` varchar(255) NOT NULL,
  `assigned_company_site_survey_research_floor` int(16) NOT NULL,
  `scope_work_inside_plans` longtext NOT NULL,
  `new_building` varchar(2) NOT NULL,
  `designerid` int(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `inside_plans`
--

INSERT INTO `inside_plans` (`id`, `service_number`, `assigned_company_site_survey_building`, `contact_site_survey_building`, `assigned_company_isp_eng_plans_building`, `assigned_company_eng_isp_plans_no_survey`, `assigned_company_site_survey_isp_as_built`, `contact_site_survey_isp_as_built`, `assigned_company_eng_isp_plans_isp_as_built`, `assigned_company_site_survey_passive_filter`, `contact_site_survey_passive_filter`, `assigned_company_eng_isp_plans_passive_filter`, `floor_site_survey_research_floor`, `assigned_company_site_survey_research_floor`, `scope_work_inside_plans`, `new_building`, `designerid`, `id_request`) VALUES
(1, '', 0, 0, 0, 2, 2, 1, 0, 0, 0, 0, '', 0, '', 'si', 0, '5'),
(2, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '44', 2, '', '', 0, '25');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mwra_request_civil_plans`
--

CREATE TABLE IF NOT EXISTS `mwra_request_civil_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `task_request_mwra_civil` varchar(255) NOT NULL,
  `date_task_request_mwra_civil` varchar(255) NOT NULL,
  `expected_return_mwra_civil` varchar(255) NOT NULL,
  `proposed_length_mwra_civil` varchar(255) NOT NULL,
  `existing_profile_mwra_civil` varchar(255) NOT NULL,
  `from_mwra_civil` varchar(255) NOT NULL,
  `to_mwra_civil` varchar(255) NOT NULL,
  `scope_work_mwra_civil` varchar(255) NOT NULL,
  `engineering_stamped_civil` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `outsite_utility_manhole_plan`
--

CREATE TABLE IF NOT EXISTS `outsite_utility_manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `task_request_number_outsite_manhole` varchar(255) NOT NULL,
  `date_task_request_outsite_manhole` varchar(255) NOT NULL,
  `expected_date_outsite_manhole` varchar(255) NOT NULL,
  `company_outsite_manhole` varchar(255) NOT NULL,
  `contact_outsite_manhole` varchar(255) NOT NULL,
  `breakout_application_task_manhole` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `outsite_utility_pole_plan_task`
--

CREATE TABLE IF NOT EXISTS `outsite_utility_pole_plan_task` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `outsite_utility_company` varchar(255) NOT NULL,
  `outsite_utility_contact` varchar(255) NOT NULL,
  `outsite_underground_application` varchar(255) NOT NULL,
  `outsite_application_company` varchar(255) NOT NULL,
  `outsite_applicacion_contact` varchar(255) NOT NULL,
  `outsite_cust_cable` varchar(255) NOT NULL,
  `outsite_cust_tie_net` varchar(255) NOT NULL,
  `outsite_text_here` varchar(255) NOT NULL,
  `outsite_aerial_application` varchar(250) NOT NULL,
  `designerid` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permit_request_civil_plans`
--

CREATE TABLE IF NOT EXISTS `permit_request_civil_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pole_plans`
--

CREATE TABLE IF NOT EXISTS `pole_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `private_proposed_manhole_plan`
--

CREATE TABLE IF NOT EXISTS `private_proposed_manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `private_request_utility_plans`
--

CREATE TABLE IF NOT EXISTS `private_request_utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `task_request_number_private` varchar(255) NOT NULL,
  `company_utility_private` varchar(255) NOT NULL,
  `path_length_private` varchar(255) NOT NULL,
  `see_attached_map_private` varchar(255) NOT NULL,
  `from_utility_private` varchar(255) NOT NULL,
  `to_utility_private` varchar(255) NOT NULL,
  `scope_work_private` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `property_managers`
--

CREATE TABLE IF NOT EXISTS `property_managers` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `company` int(11) NOT NULL,
  `contact_name` varchar(250) NOT NULL,
  `contact_number` varchar(250) NOT NULL,
  `contact_email` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `property_managers`
--

INSERT INTO `property_managers` (`id`, `company`, `contact_name`, `contact_number`, `contact_email`, `type`, `id_request`) VALUES
(2, 3, 'Daniel Ortega', '809 557 5576 ', 'dsfsf@gmail.com', 'building_site_survey', '1'),
(3, 4, '321344325436', '2132432432432', '213213213213', 'building_site_survey', '26'),
(4, 4, '321344325436', '2132432432432', '213213213213', 'building_site_survey', '0'),
(5, 4, 'kjhkhiluhlkjhlkj', '098098098', 'jghfhgf@kjlkj', 'building_site_survey', '28'),
(6, 4, 'kjhkhiluhlkjhlkj', '098098098', 'jghfhgf@kjlkj', 'building_site_survey', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proposed_pole_plan_task`
--

CREATE TABLE IF NOT EXISTS `proposed_pole_plan_task` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `construction_proposed_plans` varchar(255) NOT NULL,
  `gps_field_survey_pole` varchar(255) NOT NULL,
  `license_proposed_pole` varchar(255) NOT NULL,
  `measure_height_attached` varchar(255) NOT NULL,
  `license_forms_needed` varchar(255) NOT NULL,
  `designerid` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `proposed_pole_plan_task`
--

INSERT INTO `proposed_pole_plan_task` (`id`, `service_number`, `id_request`, `construction_proposed_plans`, `gps_field_survey_pole`, `license_proposed_pole`, `measure_height_attached`, `license_forms_needed`, `designerid`) VALUES
(1, '', '8', 'si', 'no', 'si', 'no', 'si', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `railroad_crossing_pole_plans`
--

CREATE TABLE IF NOT EXISTS `railroad_crossing_pole_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `other_railroad_task_request_number` varchar(255) NOT NULL,
  `other_railroad_date_task` varchar(255) NOT NULL,
  `other_railroad_expected_date` varchar(255) NOT NULL,
  `other_railroad_crossing_proposed` varchar(255) NOT NULL,
  `other_railroad_from` varchar(255) NOT NULL,
  `other_railroad_to` varchar(255) NOT NULL,
  `other_railroad_scope` varchar(255) NOT NULL,
  `engineering_plans_pole_railroad` varchar(250) NOT NULL,
  `designerid` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `railroad_request_civil_plans`
--

CREATE TABLE IF NOT EXISTS `railroad_request_civil_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `task_request_railroad_civil` varchar(255) NOT NULL,
  `date_task_request_railroad_civil` varchar(255) NOT NULL,
  `expected_return_railroad_civil` varchar(255) NOT NULL,
  `crossing_proposed_railroad_civil` varchar(255) NOT NULL,
  `from_railroad_civil` varchar(255) NOT NULL,
  `to_railroad_civil` varchar(255) NOT NULL,
  `scope_work_railroad_civil` varchar(255) NOT NULL,
  `engineering_stamped_railroad_civil` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `redline_file`
--

CREATE TABLE IF NOT EXISTS `redline_file` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `file` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `type` varchar(50) NOT NULL,
  `tap` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `redline_file`
--

INSERT INTO `redline_file` (`id`, `file`, `id_request`, `type`, `tap`) VALUES
(1, 'file-1467061076.jpg', '1', 'inside_plan', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `id_request` varchar(250) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` varchar(255) NOT NULL,
  `estado` int(1) NOT NULL,
  `usuario_id` int(16) NOT NULL,
  `contratista_id` int(16) NOT NULL,
  `name` varchar(255) NOT NULL,
  `estatus_job` int(1) NOT NULL,
  `designerid` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Volcado de datos para la tabla `request`
--

INSERT INTO `request` (`id`, `id_request`, `tipo`, `fecha`, `estado`, `usuario_id`, `contratista_id`, `name`, `estatus_job`, `designerid`) VALUES
(1, '1465327145-2', 'building_site_survey', '1465327611', 1, 2, 2, '', 2, 2),
(2, '1465328558-2', 'building_site_survey', '1465328785', 1, 2, 2, '', 2, 0),
(3, '1465330033-2', 'building_site_survey', '1465330525', 1, 2, 2, '', 0, 0),
(4, '1465330033-2', 'building_site_survey', '1465330525', 1, 2, 2, '', 0, 0),
(5, '1465331790-2', 'inside_plan', '1465331869', 1, 2, 2, '', 0, 0),
(8, '1465331790-2', 'proposed_pole_plan_task', '1465331869', 1, 2, 2, '', 0, 0),
(9, '1465331790-2', 'as_built_pole_plan_task', '1465331869', 1, 2, 2, '', 0, 0),
(22, '1465410934-2', 'building_site_survey', '1465410944', 1, 2, 2, '', 0, 0),
(23, '1465479834-2', 'building_site_survey', '1465479885', 1, 2, 2, '', 0, 0),
(24, '1465479834-2', 'building_site_survey', '1465479885', 1, 2, 2, '', 0, 0),
(25, '1466609197-2', 'inside_plan', '1466609248', 1, 2, 0, '', 0, 0),
(26, '1467142964-2', 'building_site_survey', '1467143144', 1, 2, 2, '', 0, 0),
(27, '1467142964-2', 'building_site_survey', '1467143144', 1, 2, 2, '', 0, 0),
(28, '1467143162-2', 'building_site_survey', '1467143275', 1, 2, 2, '', 1, 0),
(29, '1467143162-2', 'building_site_survey', '1467143275', 1, 2, 2, '', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `request_contract`
--

CREATE TABLE IF NOT EXISTS `request_contract` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `id_request` varchar(250) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(1) NOT NULL,
  `usuario_id` int(16) NOT NULL,
  `contratista_id` int(16) NOT NULL,
  `name` varchar(255) NOT NULL,
  `estatus_job` int(1) NOT NULL,
  `designerid` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=25 ;

--
-- Volcado de datos para la tabla `request_contract`
--

INSERT INTO `request_contract` (`id`, `id_request`, `tipo`, `fecha`, `estado`, `usuario_id`, `contratista_id`, `name`, `estatus_job`, `designerid`) VALUES
(1, '1', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(2, '1', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(3, '1', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(4, '2', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(5, '2', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(6, '2', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(7, '3', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(8, '3', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(9, '3', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(10, '0', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(11, '0', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(12, '0', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(13, '26', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(14, '26', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(15, '26', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(16, '0', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(17, '0', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(18, '0', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(19, '28', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(20, '28', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(21, '28', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(22, '0', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(23, '0', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(24, '0', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0);

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
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telephone_request_utility_plans`
--

CREATE TABLE IF NOT EXISTS `telephone_request_utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `task_request_number_telephone` varchar(255) NOT NULL,
  `company_utility_telephone` varchar(255) NOT NULL,
  `path_length_utility_telephone` varchar(255) NOT NULL,
  `see_attached_map_telephone` varchar(255) NOT NULL,
  `from_utility_telephone` varchar(255) NOT NULL,
  `to_utility_telephone` varchar(255) NOT NULL,
  `scope_work_telephone` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `file` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `code` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `canvas` varchar(250) NOT NULL,
  `original_name` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcado de datos para la tabla `temp`
--

INSERT INTO `temp` (`id`, `file`, `date`, `code`, `type`, `canvas`, `original_name`) VALUES
(2, 'file-1467384764.gif', '0000-00-00', '1', 'cpe_first_picture', '', 'backblue.gif'),
(3, 'file-1467385093.gif', '0000-00-00', '1', 'cpe_second_picture', '', 'backblue.gif'),
(4, 'file-1467315077.jpg', '0000-00-00', '1', 'cpe_third_picture', '', 'beautiful-green-hills-at-sunset-photo-by-steffen-egly.jpg'),
(6, 'file-1467143116.png', '0000-00-00', '1467142964-2', 'inside_plan', '', 'Captura de pantalla 2016-05-05 a las 8.51.22 p.m..png'),
(7, 'file-1467143271.pdf', '0000-00-00', '1467143162-2', 'inside_plan', '', 'Amazon.pdf'),
(8, 'file-1467144183.jpg', '0000-00-00', '17', 'building_picture', 'canvas-14671442023.png', 'seguro_auto 2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tenants_contact`
--

CREATE TABLE IF NOT EXISTS `tenants_contact` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `company` int(250) NOT NULL,
  `contact_name` varchar(250) NOT NULL,
  `contact_number` varchar(250) NOT NULL,
  `contact_email` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `tenants_contact`
--

INSERT INTO `tenants_contact` (`id`, `company`, `contact_name`, `contact_number`, `contact_email`, `type`, `id_request`) VALUES
(1, 3, 'Daniel Ortega', '8093335255', 'dan@gmail.com', 'building_site_survey', '1'),
(2, 3, '', '', '', 'building_site_survey', '2'),
(3, 3, '', '', '', 'building_site_survey', '3'),
(4, 4, '', '', '', 'building_site_survey', '26'),
(5, 4, '', '', '', 'building_site_survey', '0'),
(6, 4, '', '', '', 'building_site_survey', '28'),
(7, 4, '', '', '', 'building_site_survey', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `underground_outsite_manhole_plan`
--

CREATE TABLE IF NOT EXISTS `underground_outsite_manhole_plan` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `company_underground_manhole` varchar(255) NOT NULL,
  `contact_underground_manhole` varchar(255) NOT NULL,
  `cust_cable_count_underground_manhole` varchar(255) NOT NULL,
  `cust_tie_loc_underground_manhole` varchar(255) NOT NULL,
  `scope_work_underground_manhole` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `uploaded_file`
--

CREATE TABLE IF NOT EXISTS `uploaded_file` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `type` varchar(250) NOT NULL,
  `estado` int(250) NOT NULL,
  `file` varchar(250) NOT NULL,
  `canvas` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `uploaded_file`
--

INSERT INTO `uploaded_file` (`id`, `type`, `estado`, `file`, `canvas`, `code`) VALUES
(1, 'inside_plan', 1, 'file-1465327329.jpg', 'canvas-14653275032.png', '1465327145-2'),
(2, 'inside_plan', 1, 'file-1465328747.jpg', 'canvas-14653287802.png', '1465328558-2'),
(3, 'inside_plan', 1, 'file-1465330225.jpg', 'canvas-14653302382.png', '1465330033-2'),
(4, 'building_picture', 1, 'file-1466784026.jpg', 'canvas-14667840303.png', '1');

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
  `email` varchar(50) NOT NULL,
  `estado` int(1) NOT NULL,
  `company` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `user_name`, `password`, `nombre`, `apellido`, `fecha`, `foto`, `email`, `estado`, `company`) VALUES
(1, 'admin', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'admin', '', '', '', '', 1, 0),
(2, 'lightower', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'lightower', 'empresa', '', '', '', 2, 0),
(3, 'gulinc', '10470c3b4b1fed12c3baac014be15fac67c6e815', 'gulinc', 'contratista', '', '', '', 3, 2),
(4, '7am', '538dfc17d6139d53b06d3a1b52f81d7f', 'agencia7am', 'contratista', '04-05-2016', '', 'desarrollo@agencia7am.com', 3, 0),
(5, 'clarodom', '9679014f0b355e4ae53c9a9297cd18a0', 'Claro Dominicano', 'empresa', '05-05-2016', '', 'clarodom@claro.do', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `utility_plans`
--

CREATE TABLE IF NOT EXISTS `utility_plans` (
  `id` int(16) NOT NULL AUTO_INCREMENT,
  `service_number` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  `redline_page_utility` varchar(255) NOT NULL,
  `redline_file_utility` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
