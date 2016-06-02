-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-06-2016 a las 21:41:00
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `aerial_outsite_manhole_plan`
--

INSERT INTO `aerial_outsite_manhole_plan` (`id`, `service_number`, `id_request`, `company_aerial_manhole`, `contact_aerial_manhole`, `cust_cable_count_aerial_manhole`, `cust_tie_loc_aerial_manhole`, `scope_work_aerial_manhole`, `designerid`) VALUES
(1, '', '29', 'Select', '2', 'sdfgsdfg', 'sdfgsdfgsdf', 'gsdfgsdfgsdfg', 0),
(2, '', '5', '3', '1', 'asdfasdf', 'asdfasdfasdf', 'asdfasdfasdfasdfasdf', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `all_request_utility_plans`
--

INSERT INTO `all_request_utility_plans` (`id`, `service_number`, `id_request`, `task_request_number_all_utility`, `company_all_utility`, `path_lenth_all_utility`, `see_attached_map_all_utility`, `from_all_utility`, `to_all_utility`, `scope_work_all_utility`) VALUES
(1, '', '5', 'asdfasdf', '2', 'asdfasdf', 'si', 'asdfas', 'asfasd', 'dfasdfasdfasdf'),
(2, '', '3', 'sdfgsdfgs', '3', 'sdfgsdfgsd', 'si', 'sdfgsdfgsdfg', 'sdfgsdfgs', 'sdfgsdfgsdg'),
(3, '', '52', 'sdfgsdfgsdfg', '3', 'sdfgsdfgsdfg', 'si', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfgs');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `as_built_pole_plan_task`
--

INSERT INTO `as_built_pole_plan_task` (`id`, `service_number`, `id_request`, `as_built_licensed_pole_plans`, `gis_as_built_file_need`, `designerid`) VALUES
(1, '', '5', 'si', 'si', 0),
(2, '', '12', 'si', 'si', 0),
(3, '', '15', 'si', 'si', 0),
(4, '', '8', 'si', 'no', 0),
(6, '', '55', 'si', 'si', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `breakout_manhole`
--

INSERT INTO `breakout_manhole` (`id`, `service_number`, `id_request`, `look_survey_manhole`, `final_butterfly_manhole`, `preliminary_proposed_manhole`, `gis_as_built_manhole`, `butterfly_proposed_manhole`, `outsite_utility_application_manhole`, `butterfly_as_built_manhole`) VALUES
(2, '', '1458151240-2', 'si', 'si', 'si', 'si', 'si', 'si', 'si'),
(3, '', '23', 'si', 'si', 'si', 'si', 'si', 'no', ''),
(4, '', '5', 'no', 'no', 'si', 'si', 'no', 'si', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `building_site_survey`
--

INSERT INTO `building_site_survey` (`id`, `id_request`, `site_survey_company`, `site_survey_contact`, `isp_eng_plans_company`) VALUES
(1, '1', 2, 1, 2),
(2, '4', 2, 1, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcado de datos para la tabla `cable_installation_contractor`
--

INSERT INTO `cable_installation_contractor` (`id`, `company`, `contact_name`, `contact_number`, `contact_email`, `id_request`, `type`) VALUES
(2, '0', '', '', '', '0', 'proposed_pole_plan_task'),
(3, '0', '', '', '', '0', 'as_built_pole_plan_task'),
(4, '0', '', '', '', '0', 'proposed_pole_plan_task'),
(5, '0', '', '', '', '0', 'as_built_pole_plan_task'),
(6, '0', '', '', '', '0', 'proposed_pole_plan_task'),
(7, '0', '', '', '', '0', 'as_built_pole_plan_task'),
(8, '0', '', '', '', '0', 'proposed_pole_plan_task'),
(9, '0', '', '', '', '0', 'as_built_pole_plan_task'),
(10, '0', '', '', '', '0', 'proposed_pole_plan_task'),
(11, '0', '', '', '', '0', 'as_built_pole_plan_task'),
(12, '3', '', '', '', '0', 'proposed_pole_plan_task'),
(13, '3', '', '', '', '0', 'as_built_pole_plan_task');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `civil_plans`
--

INSERT INTO `civil_plans` (`id`, `service_number`, `id_request`, `proposed_plan_tmp_civil`, `as_built_plan_civil`, `total_station_civil`, `print_a_b_mylar_civil`, `deliver_mylar_civil`, `proposed_route_civil`, `from_civil`, `to_civil`, `scope_work_civil`, `check_uno_trench_detail_civil`, `company_uno_trench_detail_civil`, `check_dos_trench_detail_civil`, `company_dos_trench_detail_civil`, `check_tres_trench_detail_civil`, `company_tres_trench_detail_civil`, `micro_trench_detail_civil`, `text_micro_trench_detail_civil`, `company_micro_trench_detail_civil`, `installations_notes_civil`) VALUES
(1, '', '1458240583-2', 'si', 'si', 'si', 'si', 'si', 'asdfa', 'sdfasdf', 'asdfasdf', 'sdfas dfasdf', 'si', '2', 'si', '2', 'si', '2', 'si', 'asdf', '2', 'asdfa asdf'),
(2, '', '7', 'no', 'si', 'si', 'no', 'si', 'srfsdfs', 'sdfsdfsdf', 'sdfsdf', 'sdfsdf', 'si', '2', 'no', '3', 'si', '3', 'si', 'fsdfsdfsdf', '2', 'sdfsdfsdfsfd');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcado de datos para la tabla `comentarios`
--

INSERT INTO `comentarios` (`id`, `comentario`, `date`, `tipo`, `id_request`, `usuario_id`) VALUES
(3, 'Espero buenos resultados', '2016/04/20', 'APPROVE', 1, 2),
(4, 'Esperando muy buenos resultados', '2016/04/20', 'APPROVE', 3, 2),
(9, 'No necesitamos de estos servicios por ahora.', '2016/04/27', 'DECLINE', 5, 2),
(10, 'Rebajale Algo', '2016/04/29', 'DECLINE', 2, 2),
(11, '', '2016/05/12', 'APPROVE', 4, 2);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `cotizacion`
--

INSERT INTO `cotizacion` (`id`, `id_request`, `id_company`, `plan_quote`, `file_plan_quote`, `fecha`, `estado`) VALUES
(1, '6', 3, '1400', 'quote_1455303990.pdf', '1455303990', 1),
(2, '17', 3, '468', 'quote_1455304665.pdf', '1455304665', 1),
(3, '25', 3, '', '', '1455304708', 1),
(4, '19', 3, '8000', '', '1455938223', 1),
(5, '4', 3, '1212154', 'quote_1455304665.pdf', '1455969117', 1),
(6, '1', 3, '7500', 'quote_1455304665.pdf', '1455969178', 1),
(8, '2', 3, '77777', 'quote_1461594950.pdf', '1461269947', 1),
(9, '3', 3, '85000', 'quote_1455304665.pdf', '1455304665', 1),
(10, '5', 3, '32154', 'quote_1461852929.', '1461852517', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `electric_proposed_manhole_plan`
--

INSERT INTO `electric_proposed_manhole_plan` (`id`, `service_number`, `id_request`, `task_request_number_electric_manhole`, `date_task_request_electric_manhole`, `expected_date_electric_manhole`, `mh_option_electric_manhole`, `company_electric_manhole`, `prop_fiber_electric_manhole`, `path_length_electric_manhole`, `from_electric_manhole`, `to_electric_manhole`, `scope_work_electric_manhole`) VALUES
(1, '', '1458152237-2', 'klkjhlkj', 'kjhkhgkhgkjhgk', 'kjgkjhgkjh', 'kljhlkjhl', '2', 'oiupoipiup', 'kjhljhlkjh', 'kjhkjhlkjh', 'ljhljhl', 'kl;kj;lkj;lk'),
(2, '', '1458227692-2', 'fasdf', 'asdfasdfa', 'sdfasdfa', 'asdfasdf', '2', 'asdfasd', 'safsdf', 'asdfasd', 'dfasdfasdf', 'fasdfas'),
(3, '', '1458228254-2', 'fasdfasdf', 'asdfasdf', 'asdfa', 'asdfasdfa', '3', 'asfas', 'asdfadsf', 'asdf', 'asdfasdf', 'dasdfasdfasdf'),
(4, '', '1458228563-2', 'adsfasd', 'dfasdfasdf', 'asdfasdf', 'asdfas', '', 'adsfasdf', 'asdfasdfa', 'dfgwdfg', 'wfdgsdfg', 'sfdgsdfgsdfg'),
(5, '', '24', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg', '2', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg'),
(6, '', '32', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', '2', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'asdfasdfasdf'),
(7, '', '5', 'sfsdf', 'sdfsdfsd', 'fsdfsdf', 'sdfsdf', '3', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdf', 'sdfsdfsdf');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `electric_request_utility_plans`
--

INSERT INTO `electric_request_utility_plans` (`id`, `service_number`, `id_request`, `task_request_number_utility`, `company_utility`, `path_length_utility`, `see_attached_map_utility`, `from_electric_utility`, `to_electric_utility`, `scope_word_electric_utility`) VALUES
(1, '', '1458142746-2', 'qwerqwr', '2', 'qwerqwr', 'si', 'qwerqwer', 'qwerqwer', 'qwerqwer'),
(2, '', '44', 'gdfgsdfgsdfg', '2', 'sdfgsdfgsdfg', 'si', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg'),
(3, '', '5', 'dsfsdfsdf', '2', 'sdfsdfsdf', 'no', 'sdfsdf', 'sdfsdf', 'sdfsdf');

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
  `id_request` varchar(250) NOT NULL,
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
(3, '1', 3, '7000', 'invoice_1461943631.', '1461853376', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `find_request_utility_plans`
--

INSERT INTO `find_request_utility_plans` (`id`, `service_number`, `id_request`, `task_request_number_find_utility`, `path_lenth_find_utility`, `find_aerial_utility`, `find_underground_utility`, `elec_find_utility`, `tel_find_utility`, `private_find_utility`, `see_attached_redline_map_utility`, `from_find_utility`, `to_find_utility`, `scope_work_find_utility`) VALUES
(1, '', '5', 'qqwerqer', 'qwerqwerq', 'si', 'no', 'no', 'si', 'si', 'no', 'qwerq', 'werqwer', 'qwer'),
(2, '', '48', 'sdgsdfgs', 'sdfgsdfgsdfg', 'no', 'si', 'si', 'no', 'no', 'no', 'sdfgsdfgsdfg', 'sdfgsdfgsdfgs', 'sdfgsdfgsdfg'),
(3, '', '53', 'sdfgsdfg', 'sdfgsdfg', 'si', 'si', 'no', 'si', 'si', 'si', 'fgsdfgsdfg', 'sdfgsdfg', 'sdfgsd');

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
  `date_request_sent` varchar(255) NOT NULL,
  `lt_exp_job_completion` varchar(255) NOT NULL,
  `lt_fiber_eng` varchar(255) NOT NULL,
  `lt_project` varchar(255) NOT NULL,
  `scope_work` longtext NOT NULL,
  `estatus` int(1) NOT NULL,
  `usuario_id` int(16) NOT NULL,
  `company` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=58 ;

--
-- Volcado de datos para la tabla `general_information`
--

INSERT INTO `general_information` (`id`, `time_code`, `engineering_id`, `customer_name`, `solomon_number`, `service_number`, `prj_assing_number`, `kick_off_date`, `bldg_number`, `street_number`, `city`, `state`, `doc_number`, `po_number`, `po_doc_title`, `date_request_sent`, `lt_exp_job_completion`, `lt_fiber_eng`, `lt_project`, `scope_work`, `estatus`, `usuario_id`, `company`) VALUES
(1, '1459565458-2', 2, 'Madelin AsunciÃ³n', 'A283459', 'B1521', 'PRJ123345', '', 'BL23455', 'German Aristy', 'SACRAMENTO', 'California', 'dfghdgh', 'dfghdgh', 'po_doc_1462993151.pdf', '2016-04-01', '', 'Lt Fiber Eng.', 'Lt. Project', 'Scope Work', 0, 2, '3'),
(2, '1459605878-2', 1, 'Jairo Cuesta', '123123', '54678', '777', '2016-02-20', '', 'Celestina', 'Los Angeles', 'California', '123343', 'FD234', 'po_doc_1463062843.pdf', '2016-04-13', '', '', '', '', 0, 2, '2'),
(3, '1459776029-2', 0, '', '', '54677', '', '', '', 'Celestina', 'Vermont', 'Wyoming', '', '', '', '2016-04-12', '', '', '', '', 0, 2, '3'),
(4, '1459776979-2', 0, '', '', '54679', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(5, '1459777241-2', 0, '', '', 'A4243', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(6, '1459777314-2', 0, '', '', 'F3446', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(7, '1459778939-2', 0, '', '', 'PE446', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(8, '1459779002-2', 0, '', '', '34FGG', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(9, '1459779035-2', 0, '', '', 'H56572', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(10, '1459779280-2', 0, '', '', '7DFE3', '', '', '', 'Celestina', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(11, '1459779313-2', 0, '', '', '545GD', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(12, '1459779365-2', 0, '', '', '945FF', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(13, '1459779425-2', 0, '', '', 'QS737', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(14, '1459779464-2', 0, '', '', 'TQ94g', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(15, '1459779497-2', 0, '', '', 'J7E6A', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(16, '1459779596-2', 0, '', '', 'ZG5H23', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(17, '1459779618-2', 0, '', '', '9ZY356', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(18, '1459779655-2', 0, '', '', 'BKN623', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(19, '1459780099-2', 0, '', '', 'L8RBTG', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(20, '1459780449-2', 0, '', '', 'XDCZB6', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(21, '1459780498-2', 0, '', '', 'AJ64UU', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(22, '1459780852-2', 0, '', '', 'SDF935', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(23, '1459781529-2', 0, '', '', 'JD4532', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(24, '1459782202-2', 0, '', '', '3DVE2', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(25, '1459782307-2', 0, '', '', 'BSDF3', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(26, '1459782375-2', 0, '', '', 'GG522', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(27, '1459782601-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(28, '1459782722-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(29, '1460139365-2', 0, 'jairo', '456', '564456+', '456456', '456', '456+456+', 'Celestina', 'New York', 'New York', '', '', '', '', '', '', '', '', 0, 2, ''),
(30, '1460145426-2', 2, 'sdfgsdfg', 'sdfgs', 'sdfgsdfg', 'sdfgsd', '2016-04-13', 'sdfgsdf', 'gsdfgsdfg', 'New York', 'New York', '', '', '', '2016-04-08', 'sdfgsdf', 'gsfdgs', 'dfgs', 'sdfgsdfgsdfg', 0, 2, ''),
(31, '1460145805-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(32, '1460146045-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(33, '1462545953-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(34, '1462545953-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(35, '1462545953-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(36, '1462546087-2', 1, 'dfgdfgd', 'dfg', 'dfgdfgd', 'dfgdfg', '2016-05-06', 'fdgdfg', 'fgdfgdfg', 'New York', 'California', '', '', '', '2016-05-06', 'dfgdfg', 'dfgdfg', 'dfgdfg', 'zdvgzxgzxg', 0, 2, ''),
(37, '1462548597-2', 1, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(38, '1462548690-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(39, '1462548949-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(40, '1462549215-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(41, '1462549301-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(42, '1462550616-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(43, '1462555459-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(44, '1462555473-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(50, '1464721614-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(51, '1464722194-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(52, '1464722320-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(53, '1464722441-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(54, '1464722628-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(55, '1464722861-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(56, '1464722931-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, ''),
(57, '1464723468-2', 0, '', '', '', '', '', '', '', 'Select', 'Select', '', '', '', '', '', '', '', '', 0, 2, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `highway_request_civil_plans`
--

INSERT INTO `highway_request_civil_plans` (`id`, `service_number`, `id_request`, `task_request_highway_civil`, `date_task_request_highway_civil`, `expected_return_highway_civil`, `traffic_proposed_highway_civil`, `from_highway_civil`, `to_highway_civil`, `scope_work_highway_civil`, `engineering_stamped_highway`) VALUES
(1, '', '5', 'asdfasdf', 'asdfasdf', 'sdfasdf', 'no', 'asdfasd', 'fasdfasdf', 'asdfasdfasdf', 'si');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `highway_traffic_pole_plan`
--

INSERT INTO `highway_traffic_pole_plan` (`id`, `service_number`, `id_request`, `other_highway_task_request_number`, `other_highway_date_task`, `other_highway_expected_date`, `other_highway_proposed_tmp`, `other_highway_traffic`, `other_highway_from`, `other_highway_to`, `other_highway_scope`, `other_highway_engineering_plans_pole`, `designerid`) VALUES
(1, '', '5', 'sdfdf', 'dsafsdf', 'sdfsdf', 'dsfsdf', 'si', 'sdfs', 'fsdfs', 'sdfsdf', 'si', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Volcado de datos para la tabla `inside_plans`
--

INSERT INTO `inside_plans` (`id`, `service_number`, `assigned_company_site_survey_building`, `contact_site_survey_building`, `assigned_company_isp_eng_plans_building`, `assigned_company_eng_isp_plans_no_survey`, `assigned_company_site_survey_isp_as_built`, `contact_site_survey_isp_as_built`, `assigned_company_eng_isp_plans_isp_as_built`, `assigned_company_site_survey_passive_filter`, `contact_site_survey_passive_filter`, `assigned_company_eng_isp_plans_passive_filter`, `floor_site_survey_research_floor`, `assigned_company_site_survey_research_floor`, `scope_work_inside_plans`, `new_building`, `designerid`, `id_request`) VALUES
(1, '', 2, 0, 0, 2, 2, 1, 2, 2, 1, 2, '43243', 2, '', '', 0, '1'),
(2, '', 0, 0, 0, 0, 0, 0, 0, 2, 1, 0, '', 0, '', '', 0, '60'),
(3, '', 0, 0, 0, 0, 0, 0, 0, 2, 1, 0, '', 0, '', '', 0, '61'),
(4, '', 0, 0, 0, 0, 0, 0, 0, 2, 1, 0, '', 0, '', '', 0, '62'),
(5, '', 0, 0, 0, 0, 0, 0, 0, 2, 1, 0, '', 0, '', '', 0, '63'),
(6, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '4545', 2, '', 'no', 0, '64'),
(7, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '64,65,21', 2, '', '', 0, '66'),
(8, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '56757', 2, '', '', 0, '67'),
(9, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '345345', 2, '', '', 0, '68'),
(10, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '435345', 2, '', '', 0, '69');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `mwra_request_civil_plans`
--

INSERT INTO `mwra_request_civil_plans` (`id`, `service_number`, `id_request`, `task_request_mwra_civil`, `date_task_request_mwra_civil`, `expected_return_mwra_civil`, `proposed_length_mwra_civil`, `existing_profile_mwra_civil`, `from_mwra_civil`, `to_mwra_civil`, `scope_work_mwra_civil`, `engineering_stamped_civil`) VALUES
(1, '', '', 'asdf', 'asdfasdf', 'asdfasdf', 'asdfasdfa', 'si', 'asdf', 'asdfasdf', 'asdfasdfasdf', 'si'),
(2, '', '5', 'asdfasdfasdfasdf', 'asdfasdfasdfdfasdfasdf', '', 'asdfasdfsadf', 'no', 'asdfasd', 'fasdfasdf', 'asdfasdf', 'si');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcado de datos para la tabla `outsite_utility_manhole_plan`
--

INSERT INTO `outsite_utility_manhole_plan` (`id`, `service_number`, `id_request`, `task_request_number_outsite_manhole`, `date_task_request_outsite_manhole`, `expected_date_outsite_manhole`, `company_outsite_manhole`, `contact_outsite_manhole`, `breakout_application_task_manhole`) VALUES
(1, '', '6', 'asdaSDasd', 'ASDasd', 'aSDasd', '2', '1', 'no'),
(2, '', '5', 'asdfasdfa', 'asdfasdf', 'asdfasdf', '2', '1', 'no'),
(3, '', '1458155698-2', 'asdfasdf', 'asdfasdf', 'asdfasdf', '2', '1', 'no'),
(4, '', '27', 'sdfgsdfgsdfg', 'sdfgsdfgsdfg', 'sdfgsdfgsdfg', '2', '1', 'si'),
(5, '', '35', 'asdfasdf', 'fasdfasdf', 'asdfasdfasdf', '2', '1', 'si');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `outsite_utility_pole_plan_task`
--

INSERT INTO `outsite_utility_pole_plan_task` (`id`, `service_number`, `id_request`, `outsite_utility_company`, `outsite_utility_contact`, `outsite_underground_application`, `outsite_application_company`, `outsite_applicacion_contact`, `outsite_cust_cable`, `outsite_cust_tie_net`, `outsite_text_here`, `outsite_aerial_application`, `designerid`) VALUES
(1, '', '17', '3', '2', 'si', '2', '1', 'fsdfsdf', 'sdfsdf', 'sdfsdf', 'si', 0),
(2, '', '5', '3', '2', 'no', '3', '1', 'asdfas', 'fasdfasdf', 'fgvcbbxcvb', 'no', 0),
(3, '', '56', '3', '2', 'si', '3', '1', 'zsdf', 'asdf', 'asdfasdf', 'si', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `permit_request_civil_plans`
--

INSERT INTO `permit_request_civil_plans` (`id`, `service_number`, `id_request`, `task_request_permit_civil`, `date_task_request_permit_civil`, `expected_return_permit_civil`, `muni_permit_civil`, `dcr_permit_civil`, `nh_dot_permit_civil`, `ct_dot_permit_civil`, `highway_permit_civil`, `mass_dot_permit_civil`, `me_dot_permit_civil`, `ny_dot_permit_civil`, `railroad_permit_civil`, `ri_dot_permit_civil`, `vi_dot_permit_civil`, `scope_work_permit_civil`, `assigned_company_permit_civil`) VALUES
(1, '', '1458240813-2', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'si', 'asdfasdfasdf', '2'),
(2, '', '5', 'sdfsdfsdf', 'sdfsdfsdf', 'dfsdfsdfs', 'si', 'si', 'si', 'no', 'si', 'si', 'si', 'no', 'si', 'no', 'si', 'asdfasdfasdf', '2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `private_proposed_manhole_plan`
--

INSERT INTO `private_proposed_manhole_plan` (`id`, `service_number`, `id_request`, `task_request_number_private_manhole`, `date_task_request_private_manhole`, `expected_date_private_manhole`, `mh_option_private_manhole`, `company_private_manhole`, `prop_fiber_private_manhole`, `path_length_private_manhole`, `from_private_manhole`, `to_private_manhole`, `scope_work_private_manhole`) VALUES
(1, '', '1458153415-2', 'sdfasdf', 'sdafdfasdf', 'asd', 'fasfasf', '2', 'asdfa', 'fasdf', 'asdfafds', 'adfsafsd', 'asdfasfd'),
(2, '', '26', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg', '2', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfgsd', 'fgsdfgsdfgsdfg'),
(3, '', '5', 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfasdf', '2', 'asdfasdf', 'aasdfasdf', 'asdfasdfasdf', 'asdfasdf', 'asdfasdfasdf');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `private_request_utility_plans`
--

INSERT INTO `private_request_utility_plans` (`id`, `service_number`, `id_request`, `task_request_number_private`, `company_utility_private`, `path_length_private`, `see_attached_map_private`, `from_utility_private`, `to_utility_private`, `scope_work_private`) VALUES
(1, '', '', 'aasdfasdf', '2', 'asfasdf', 'si', 'dfasdfa', 'asfas', 'sdfasdfasdf'),
(2, '', '5', 'sdfgsdfgsdf', '3', 'sdfgsdfg', 'si', 'sdfg', 'sdfgsdfg', 'sdfgsdfg'),
(3, '', '51', 'sdfgsdfgsdfg', '2', 'sdfgsdfgsdfgs', 'si', 'gsdfgsdf', 'dfgsdfgsdf', 'gsdfgsdfgsdfg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `property_managers`
--

CREATE TABLE IF NOT EXISTS `property_managers` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `company` int(11) NOT NULL,
  `contact_name` varchar(250) NOT NULL,
  `contact_office_phone` varchar(250) NOT NULL,
  `contact_cell_number` varchar(20) NOT NULL,
  `contact_email` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `property_managers`
--

INSERT INTO `property_managers` (`id`, `company`, `contact_name`, `contact_office_phone`, `contact_cell_number`, `contact_email`, `type`, `id_request`) VALUES
(2, 3, 'fghfdghdg', '3453453555', '3453453555', 'dfsf@gmail', 'inside_plan', '69'),
(3, 3, 'Daniel', '345634563456', '13453453555', 'adfadsf@gmail.com', 'inside_plan', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `proposed_pole_plan_task`
--

INSERT INTO `proposed_pole_plan_task` (`id`, `service_number`, `id_request`, `construction_proposed_plans`, `gps_field_survey_pole`, `license_proposed_pole`, `measure_height_attached`, `license_forms_needed`, `designerid`) VALUES
(1, '', '8', 'si', 'no', 'si', 'si', 'no', 0),
(2, '', '11', 'si', 'si', 'si', 'si', 'si', 0),
(3, '', '14', 'si', 'si', 'si', 'no', 'no', 0),
(4, '', '5', 'si', 'si', 'no  ', 'no', 'no ', 0),
(5, '', '54', 'si', 'si', 'si', 'si', 'si', 0),
(6, '', '70', 'no', 'no', 'si', 'si', 'si', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `railroad_crossing_pole_plans`
--

INSERT INTO `railroad_crossing_pole_plans` (`id`, `service_number`, `id_request`, `other_railroad_task_request_number`, `other_railroad_date_task`, `other_railroad_expected_date`, `other_railroad_crossing_proposed`, `other_railroad_from`, `other_railroad_to`, `other_railroad_scope`, `engineering_plans_pole_railroad`, `designerid`) VALUES
(1, '', '3', 'asdasd', 'asdasd', 'asdasd', 'no', 'asda', 'asdasd', 'asdasdasd', 'si', 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `railroad_request_civil_plans`
--

INSERT INTO `railroad_request_civil_plans` (`id`, `service_number`, `id_request`, `task_request_railroad_civil`, `date_task_request_railroad_civil`, `expected_return_railroad_civil`, `crossing_proposed_railroad_civil`, `from_railroad_civil`, `to_railroad_civil`, `scope_work_railroad_civil`, `engineering_stamped_railroad_civil`) VALUES
(1, '', '1458245490-2', 'fsfadf', 'asfasdf', 'afasdf', 'si', 'asdf', 'asf', 'asfdasdfasdffa', 'si'),
(2, '', '5', 'asdfasdf', 'asdfasdf', 'asdfasdf', 'si', 'asdfasdf', 'asdfasdf', 'asdfasdfasdf', 'si');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=72 ;

--
-- Volcado de datos para la tabla `request`
--

INSERT INTO `request` (`id`, `id_request`, `tipo`, `fecha`, `estado`, `usuario_id`, `contratista_id`, `name`, `estatus_job`, `designerid`) VALUES
(1, '1459565458-2', 'inside_plan', '1459565628', 1, 2, 2, '', 2, 1),
(2, '1459565458-2', 'inside_plan', '1459565628', 1, 2, 2, '', 1, 0),
(3, '1459565458-2', 'highway_traffic_pole_plan', '1459565628', 1, 2, 2, '', 2, 1),
(4, '1459605878-2', 'building_site_survey', '1459605922', 1, 2, 2, '', 2, 0),
(5, '1459565458-2', 'highway_request_civil_plans', '1459776143', 1, 2, 2, '', 1, 0),
(6, '1459565458-2', 'outsite_utility_manhole_plan', '1459776143', 1, 2, 2, '', 0, 0),
(7, '1459565458-2', 'civil_plans', '1459776143', 1, 2, 2, '', 0, 0),
(8, '1459776979-2', 'proposed_pole_plan_task', '1459777137', 1, 2, 2, '', 0, 0),
(9, '1459776979-2', 'as_built_pole_plan_task', '1459777137', 1, 2, 2, '', 0, 0),
(10, '1459776979-2', 'proposed_pole_plan_task', '1459777137', 1, 2, 2, '', 0, 0),
(11, '1459777241-2', 'proposed_pole_plan_task', '1459777263', 1, 2, 2, '', 0, 0),
(12, '1459777314-2', 'as_built_pole_plan_task', '1459777330', 1, 2, 2, '', 0, 0),
(13, '1459778939-2', 'proposed_pole_plan_task', '1459778997', 1, 2, 2, '', 0, 0),
(14, '1459779002-2', 'proposed_pole_plan_task', '1459779033', 1, 2, 2, '', 0, 0),
(15, '1459779002-2', 'as_built_pole_plan_task', '1459779033', 1, 2, 2, '', 0, 0),
(16, '1459779035-2', 'proposed_pole_plan_task', '1459779144', 1, 2, 2, '', 0, 0),
(17, '1459779280-2', 'proposed_pole_plan_task', '1459779297', 1, 2, 2, '', 0, 0),
(18, '1459779425-2', 'proposed_pole_plan_task', '1459779440', 1, 2, 2, '', 0, 0),
(19, '1459779464-2', 'proposed_pole_plan_task', '1459779483', 1, 2, 2, '', 0, 0),
(20, '1459779596-2', 'proposed_pole_plan_task', '1459779607', 1, 2, 2, '', 0, 0),
(21, '1459779618-2', 'proposed_pole_plan_task', '1459779641', 1, 2, 2, '', 0, 0),
(22, '1459779655-2', 'proposed_pole_plan_task', '1459780097', 1, 2, 2, '', 0, 0),
(23, '1459780498-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(24, '1459780498-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(25, '1459780498-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(26, '1459780498-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(27, '1459780498-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(28, '1459780498-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(29, '1459780498-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(30, '1459780852-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(31, '1459781529-2', 'breakout_manhole', '', 1, 2, 2, '', 0, 0),
(32, '1459781529-2', 'electric_proposed_manhole_plan', '', 1, 2, 2, '', 0, 0),
(33, '1459781529-2', 'telephone_proposed_manhole_plan', '', 1, 2, 2, '', 0, 0),
(34, '1459781529-2', 'private_proposed_manhole_plan', '', 1, 2, 2, '', 0, 0),
(35, '1459781529-2', 'outsite_utility_manhole_plan', '', 1, 2, 2, '', 0, 0),
(36, '1459781529-2', 'underground_outsite_manhole_plan', '', 1, 2, 2, '', 0, 0),
(37, '1459781529-2', 'aerial_outsite_manhole_plan', '', 1, 2, 2, '', 0, 0),
(38, '1459782307-2', 'proposed_pole_plan_task', '1459782372', 1, 2, 2, '', 0, 0),
(39, '1459782307-2', 'proposed_pole_plan_task', '1459782372', 1, 2, 2, '', 0, 0),
(40, '1459782307-2', 'proposed_pole_plan_task', '1459782372', 1, 2, 2, '', 0, 0),
(41, '1459782307-2', 'proposed_pole_plan_task', '1459782372', 1, 2, 2, '', 0, 0),
(42, '1459782307-2', 'proposed_pole_plan_task', '1459782372', 1, 2, 2, '', 0, 0),
(43, '1459782375-2', 'electric_proposed_manhole_plan', '1459782494', 1, 2, 2, '', 0, 0),
(44, '1459782601-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(45, '1459782601-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(46, '1459782601-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(47, '1459782601-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(48, '1459782601-2', 'proposed_pole_plan_task', '', 1, 2, 2, '', 0, 0),
(49, '1459782722-2', 'electric_request_utility_plans', '1459782773', 1, 2, 2, '', 0, 0),
(50, '1459782722-2', 'telephone_request_utility_plans', '1459782773', 1, 2, 2, '', 0, 0),
(51, '1459782722-2', 'private_request_utility_plans', '1459782773', 1, 2, 2, '', 0, 0),
(52, '1459782722-2', 'all_request_utility_plans', '1459782773', 1, 2, 2, '', 0, 0),
(53, '1459782722-2', 'find_request_utility_plans', '1459782773', 1, 2, 2, '', 0, 0),
(54, '1460139365-2', 'proposed_pole_plan_task', '1460139422', 1, 2, 2, '', 0, 0),
(55, '1460139365-2', 'as_built_pole_plan_task', '1460139422', 1, 2, 2, '', 0, 0),
(56, '1460139365-2', 'proposed_pole_plan_task', '1460139422', 1, 2, 2, '', 0, 0),
(57, '1460145426-2', 'proposed_pole_plan_task', '1460145793', 1, 2, 2, '', 0, 0),
(58, '1460145805-2', 'proposed_pole_plan_task', '1460145855', 1, 2, 2, '', 0, 0),
(59, '1460146045-2', 'proposed_pole_plan_task', '1460146059', 1, 2, 2, '', 0, 0),
(60, '1462545953-2', 'inside_plan', '1462546080', 1, 2, 0, '', 0, 0),
(61, '1462545953-2', 'inside_plan', '1462546080', 1, 2, 0, '', 0, 0),
(62, '1462545953-2', 'inside_plan', '1462546080', 1, 2, 0, '', 0, 0),
(63, '1462546087-2', 'inside_plan', '1462546369', 1, 2, 0, '', 0, 0),
(64, '1462548690-2', 'inside_plan', '1462548908', 1, 2, 0, '', 0, 0),
(65, '1462548690-2', 'building_site_survey', '1462548908', 1, 2, 0, '', 0, 0),
(66, '1462548949-2', 'inside_plan', '1462548999', 1, 2, 0, '', 0, 0),
(67, '1462549215-2', 'inside_plan', '1462549238', 1, 2, 0, '', 0, 0),
(68, '1462549301-2', 'inside_plan', '1462549520', 1, 2, 0, '', 0, 0),
(69, '1462550616-2', 'inside_plan', '1462550635', 1, 2, 0, '', 0, 0),
(70, '1464720986-2', 'proposed_pole_plan_task', '1464721019', 1, 2, 2, '', 0, 0),
(71, '1464723468-2', 'inside_plan', '1464723513', 1, 2, 0, '', 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Volcado de datos para la tabla `request_contract`
--

INSERT INTO `request_contract` (`id`, `id_request`, `tipo`, `fecha`, `estado`, `usuario_id`, `contratista_id`, `name`, `estatus_job`, `designerid`) VALUES
(1, '15', 'inside_plan', '0000-00-00', 1, 2, 0, '', 0, 0),
(2, '16', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(3, '17', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(4, '18', 'inside_plan', '0000-00-00', 1, 2, 0, '', 0, 0),
(5, '19', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(6, '20', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(7, '60', 'inside_plan', '0000-00-00', 1, 2, 0, '', 0, 0),
(8, '61', 'inside_plan', '0000-00-00', 1, 2, 0, '', 0, 0),
(9, '62', 'inside_plan', '0000-00-00', 1, 2, 0, '', 0, 0),
(10, '63', 'inside_plan', '0000-00-00', 1, 2, 0, '', 0, 0),
(11, '64', 'inside_plan', '0000-00-00', 1, 2, 0, '', 0, 0),
(12, '0', 'building_site_survey', '0000-00-00', 1, 2, 0, '', 0, 0),
(13, '66', 'inside_plan', '0000-00-00', 1, 2, 0, '', 0, 0),
(14, '67', 'inside_plan', '0000-00-00', 1, 2, 0, '', 0, 0),
(15, '68', 'inside_plan', '0000-00-00', 1, 2, 0, '', 0, 0),
(16, '69', 'inside_plan', '0000-00-00', 1, 2, 0, '', 0, 0);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `telephone_proposed_manhole_plan`
--

INSERT INTO `telephone_proposed_manhole_plan` (`id`, `service_number`, `id_request`, `task_request_number_telephone_manhole`, `date_task_request_telephone_manhole`, `expected_date_telephone_manhole`, `mh_option_telephone_manhole`, `company_telephone_manhole`, `prop_fiber_telephone_manhole`, `path_length_telephone_manhole`, `from_telephone_manhole`, `to_telephone_manhole`, `scope_work_telephone_manhole`) VALUES
(1, '', '5', 'zxcvzxcv', 'zxcvzxcv', 'zxcvzxcv', 'zxcvzxcv', '2', 'zxcvzxcv', 'zxcvzxcv', 'zxcvzxcv', 'zxcvzxcv', 'zxcvzxcv'),
(2, '', '33', 'asdfasdf', 'asdfasdfasdf', 'asdfasdfasdf', 'asdfasdfas', '2', 'asdfasdf', 'asdfasdf', 'asdfasdfasdf', 'asdfasdfa', 'asdfasdfasdf');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `telephone_request_utility_plans`
--

INSERT INTO `telephone_request_utility_plans` (`id`, `service_number`, `id_request`, `task_request_number_telephone`, `company_utility_telephone`, `path_length_utility_telephone`, `see_attached_map_telephone`, `from_utility_telephone`, `to_utility_telephone`, `scope_work_telephone`) VALUES
(1, '', '', 'asdfasdf', '2', 'asdfasdf', 'si', 'asdfas', 'fasdfa', 'sdfasdfasdf'),
(2, '', '45', 'sdfgsdf', '3', 'sdfgsdfg', 'si', 'fgsdfgs', 'sdfgsd', 'dfgsdfgsdg'),
(3, '', '5', 'sdfgsdfgsdfg', '2', 'sdfgsdfgsdg', 'si', 'sdfgsdfg', 'sdfgsdfg', 'sdfgsdfg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=253 ;

--
-- Volcado de datos para la tabla `temp`
--

INSERT INTO `temp` (`id`, `file`, `date`, `code`, `type`, `canvas`, `original_name`) VALUES
(66, 'file-1458228467.jpeg', '0000-00-00', '1458228457-2', 'manhole', 'canvas-14582284792.png', '57a570f1-028b-481a-8ebf-bb74f0f2f435.jpeg'),
(67, 'file-1458228528.jpeg', '0000-00-00', '1458228519-2', 'manhole', '', '57a570f1-028b-481a-8ebf-bb74f0f2f435.jpeg'),
(70, 'file-1458248252.jpg', '0000-00-00', '1458247698-2', 'inside_plan', 'canvas-14582482662.png', '511833551.jpg'),
(71, 'file-1458248282.jpeg', '0000-00-00', '1458247698-2', 'inside_plan', 'canvas-14582482962.png', '57a570f1-028b-481a-8ebf-bb74f0f2f435.jpeg'),
(72, 'file-1458248323.jpg', '0000-00-00', '1458247698-2', 'inside_plan', 'canvas-14582483352.png', 'ArnowqpB5wFolqqdAzNhh0PKtHmDHAi24vLpQG2RDHJy.jpg'),
(73, 'file-1458248365.jpg', '0000-00-00', '1458247698-2', 'inside_plan', 'canvas-14582484082.png', 'Publicidad_.jpg'),
(74, 'file-1458248430.jpg', '0000-00-00', '1458247698-2', 'pole_plan', 'canvas-14582484442.png', 'ArnowqpB5wFolqqdAzNhh0PKtHmDHAi24vLpQG2RDHJy.jpg'),
(75, 'file-1458248484.JPG', '0000-00-00', '1458247698-2', 'pole_plan', 'canvas-14582485112.png', 'IMG_0936.JPG'),
(76, 'file-1458744536.jpg', '0000-00-00', '1458744518-2', 'inside_plan', 'canvas-14587445412.png', 'Auto_service-71.jpg'),
(77, 'file-1458744768.jpg', '0000-00-00', '1458744721-2', 'inside_plan', '', 'Auto_service-71.jpg'),
(78, 'file-1459033738.jpg', '0000-00-00', '1459033718-2', 'inside_plan', 'canvas-14590337542.png', 'jefe-de-prensa.jpg'),
(79, 'file-1462485536.pdf', '0000-00-00', '1462485500-2', 'inside_plan', 'canvas-14624855452.png', 'Propuesta Pricesmart.pdf'),
(80, 'file-1462544850.gif', '0000-00-00', '1462544594-2', 'inside_plan', '', 'backblue.gif'),
(81, 'file-1462545113.jpg', '0000-00-00', '1462544875-2', 'inside_plan', '', 'beautiful-green-hills-at-sunset-photo-by-steffen-egly.jpg'),
(82, 'file-1462545231.jpg', '0000-00-00', '1462545183-2', 'inside_plan', '', 'ubuntu.jpg'),
(83, 'file-1462545317.jpg', '0000-00-00', '1462545282-2', 'inside_plan', '', 'casa2.jpg'),
(84, 'file-1462545720.gif', '0000-00-00', '1462545695-2', 'inside_plan', '', 'backblue.gif'),
(85, 'file-1462545931.gif', '0000-00-00', '1462545917-2', 'inside_plan', '', 'backblue.gif'),
(86, 'file-1464374973.jpg', '0000-00-00', '1464374949-2', 'inside_plan', '', '1433778601-1.jpg'),
(87, 'file-1464376323.jpg', '0000-00-00', '1464376014-2', 'inside_plan', '', 'a6a6ccc8f5500869f6e2fc74aabb021d.jpg'),
(88, 'file-1464378434.jpg', '0000-00-00', '1464378403-2', 'inside_plan', '', 'a6a6ccc8f5500869f6e2fc74aabb021d.jpg'),
(89, 'file-1464378594.jpg', '0000-00-00', '1464378565-2', 'inside_plan', '', 'a6a6ccc8f5500869f6e2fc74aabb021d.jpg'),
(91, 'file-1464794902.jpg', '0000-00-00', '1464793162-2', 'inside_plan', 'canvas-14647956852.png', 'libros-de-la-biblia.jpg'),
(95, 'file-1464802959.jpg', '0000-00-00', '1464802950-2', 'inside_plan', '', 'food-and-drinks.jpg'),
(96, 'file-1464803010.jpg', '0000-00-00', '1464803000-2', 'inside_plan', '', 'food-and-drinks.jpg'),
(97, 'file-1464803196.jpg', '0000-00-00', '1464803186-2', 'inside_plan', '', 'hd-1080p-wallpaper-1080p-backgrounds-hd-backgrounds-29099.jpg'),
(98, 'file-1464803613.jpg', '0000-00-00', '1464803562-2', 'inside_plan', '', '1027_021.jpg'),
(99, 'file-1464803700.jpg', '0000-00-00', '1464803661-3', 'inside_plan', '', '1027_021.jpg'),
(100, 'file-1464803720.jpg', '0000-00-00', '1464803700-3', 'inside_plan', '', '5077_021.jpg'),
(101, 'file-1464804699.jpg', '0000-00-00', '1464803720-3', 'inside_plan', '', '5077_021.jpg'),
(102, 'file-1464805318.jpg', '0000-00-00', '1464805293-3', 'inside_plan', '', '1027_021.jpg'),
(103, 'file-1464805500.jpg', '0000-00-00', '1464805490-3', 'inside_plan', '', '5077_021.jpg'),
(104, 'file-1464805662.jpg', '0000-00-00', '1464805656-3', 'inside_plan', '', '5077_021.jpg'),
(105, 'file-1464805662.jpg', '0000-00-00', '1464805656-3', 'inside_plan', '', '5077_021.jpg'),
(106, 'file-1464805670.jpg', '0000-00-00', '1464805662-3', 'inside_plan', '', '5077_021.jpg'),
(107, 'file-1464805670.jpg', '0000-00-00', '1464805662-3', 'inside_plan', '', '5077_021.jpg'),
(108, 'file-1464806251.jpg', '0000-00-00', '1464806243-3', 'inside_plan', '', '5077_021.jpg'),
(109, 'file-1464806262.jpg', '0000-00-00', '1464806251-3', 'inside_plan', '', '5077_021.jpg'),
(110, 'file-1464806478.jpg', '0000-00-00', '', '', '', '5077_021.jpg'),
(111, 'file-1464806699.jpg', '0000-00-00', '1464806689-3', 'inside_plan', '', '5077_021.jpg'),
(112, 'file-1464806737.jpg', '0000-00-00', '1464806699-3', 'inside_plan', '', '5077_021.jpg'),
(113, 'file-1464807481.jpg', '0000-00-00', '1464807048-2', 'inside_plan', '', '1077_006.jpg'),
(114, 'file-1464808021.jpg', '0000-00-00', '1464808010-3', 'inside_plan', '', '5077_021.jpg'),
(115, 'file-1464808234.jpg', '0000-00-00', '1464808228-3', 'inside_plan', '', '5077_021.jpg'),
(116, 'file-1464808331.jpg', '0000-00-00', '1464808315-3', 'inside_plan', '', '5077_021.jpg'),
(117, 'file-1464808646.jpg', '0000-00-00', '1464808627-3', 'inside_plan', '', '5077_021.jpg'),
(118, 'file-1464808779.jpg', '0000-00-00', '1464808769-3', 'inside_plan', '', '5077_021.jpg'),
(119, 'file-1464808874.jpg', '0000-00-00', '1464808769-3', 'inside_plan', '', '5077_021.jpg'),
(120, 'file-1464809699.jpg', '0000-00-00', '1464809673-3', 'inside_plan', '', '5077_021.jpg'),
(121, 'file-1464809835.jpg', '0000-00-00', '1464809805-3', 'inside_plan', '', '5077_021.jpg'),
(122, 'file-1464809903.jpg', '0000-00-00', '1464809896-3', 'inside_plan', '', '5077_021.jpg'),
(123, 'file-1464810064.jpg', '0000-00-00', '1464810064-3', 'inside_plan', '', '5077_021.jpg'),
(124, 'file-1464810365.jpg', '0000-00-00', '1464810350-3', 'inside_plan', '', '5077_021.jpg'),
(125, 'file-1464810473.jpg', '0000-00-00', '1464810467-3', 'inside_plan', '', '5077_021.jpg'),
(126, 'file-1464810516.jpg', '0000-00-00', '1464810509-3', 'inside_plan', '', '5077_021.jpg'),
(127, 'file-1464810743.jpg', '0000-00-00', '1464810724-3', 'inside_plan', '', '5077_021.jpg'),
(128, 'file-1464810994.jpg', '0000-00-00', '1464810981-3', 'inside_plan', '', '5077_021.jpg'),
(129, 'file-1464811210.jpg', '0000-00-00', '1464811193-3', 'inside_plan', '', '5077_021.jpg'),
(130, 'file-1464811290.jpg', '0000-00-00', '1464811284-3', 'inside_plan', '', '5077_021.jpg'),
(131, 'file-1464811348.jpg', '0000-00-00', '1464811339-3', 'inside_plan', '', '5077_021.jpg'),
(132, 'file-1464811419.jpg', '0000-00-00', '', '', '', '5077_021.jpg'),
(133, 'file-1464811483.jpg', '0000-00-00', '1464811460-3', 'inside_plan', '', '5077_021.jpg'),
(134, 'file-1464812405.jpg', '0000-00-00', '1464812390-3', 'inside_plan', '', 'libros-de-la-biblia.jpg'),
(135, 'file-1464874862.jpg', '0000-00-00', '1464874742-3', 'building_picture', '', '5077_021.jpg'),
(136, 'file-1464875183.jpg', '0000-00-00', '1464875177-3', 'building_picture', '', '5077_021.jpg'),
(137, 'file-1464875320.jpg', '0000-00-00', '1464875315-3', 'building_picture', '', '5077_021.jpg'),
(138, 'file-1464875376.jpg', '0000-00-00', '1464875370-3', 'building_picture', '', '5077_021.jpg'),
(139, 'file-1464875418.jpg', '0000-00-00', '1464875414-3', 'building_picture', '', '5077_021.jpg'),
(140, 'file-1464875873.jpg', '0000-00-00', '1464875811-3', 'building_picture', '', '5077_021.jpg'),
(141, 'file-1464875938.jpg', '0000-00-00', '', '', '', '5077_021.jpg'),
(142, 'file-1464876281.jpg', '0000-00-00', '1464876275-3', 'building_picture', '', '5077_021.jpg'),
(143, 'file-1464876774.jpg', '0000-00-00', '1464876767-3', 'building_picture', '', '5077_021.jpg'),
(144, 'file-1464877004.jpg', '0000-00-00', '1464876998-3', 'building_picture', '', '5077_021.jpg'),
(145, 'file-1464877079.jpg', '0000-00-00', '1464877068-3', 'building_picture', '', '5077_021.jpg'),
(146, 'file-1464877230.jpg', '0000-00-00', '1464877221-3', 'building_picture', '', '5077_021.jpg'),
(147, 'file-1464877269.jpg', '0000-00-00', '1464877264-3', 'building_picture', '', '5077_021.jpg'),
(148, 'file-1464877408.jpg', '0000-00-00', '1464877403-3', 'building_picture', '', '5077_021.jpg'),
(149, 'file-1464877901.jpg', '0000-00-00', '1464877887-3', 'building_picture', '', '5077_021.jpg'),
(150, 'file-1464877968.jpg', '0000-00-00', '1464876583-2', 'inside_plan', '', '5077_021.jpg'),
(151, 'file-1464877968.jpg', '0000-00-00', '1464876583-2', 'inside_plan', '', '5077_021.jpg'),
(152, 'file-1464878390.jpg', '0000-00-00', '', '', '', '5077_021.jpg'),
(153, 'file-1464878447.jpg', '0000-00-00', '1464878439-3', 'building_picture', '', '5077_021.jpg'),
(154, 'file-1464878512.jpg', '0000-00-00', '1464878505-3', 'building_picture', '', '5077_021.jpg'),
(155, 'file-1464878536.jpg', '0000-00-00', '1464878531-3', 'building_picture', '', '5077_021.jpg'),
(156, 'file-1464878604.jpg', '0000-00-00', '1464878582-3', 'building_picture', '', '5077_021.jpg'),
(157, 'file-1464878676.jpg', '0000-00-00', '1464878671-3', 'building_picture', '', '5077_021.jpg'),
(158, 'file-1464878697.jpg', '0000-00-00', '1464878693-3', 'building_picture', '', '5077_021.jpg'),
(159, 'file-1464878845.jpg', '0000-00-00', '1464878841-3', 'building_picture', '', '5077_021.jpg'),
(160, 'file-1464878912.jpg', '0000-00-00', '1464878907-3', 'building_picture', '', '5077_021.jpg'),
(161, 'file-1464878943.jpg', '0000-00-00', '1464878937-3', 'building_picture', '', '5077_021.jpg'),
(162, 'file-1464882581.jpg', '0000-00-00', '1464882433-3', 'building_picture', '', '5027_021.jpg'),
(163, 'file-1464882845.jpg', '0000-00-00', '1464882803-3', 'building_picture', '', '5027_021.jpg'),
(164, 'file-1464882918.jpg', '0000-00-00', '1464882910-3', 'building_picture', '', '5027_021.jpg'),
(165, 'file-1464882961.jpg', '0000-00-00', '1464882948-3', 'building_picture', '', '5027_021.jpg'),
(166, 'file-1464883031.jpg', '0000-00-00', '1464883024-3', 'building_picture', '', '5027_021.jpg'),
(167, 'file-1464883209.jpg', '0000-00-00', '1464883203-3', 'building_picture', '', '5027_021.jpg'),
(168, 'file-1464883235.jpg', '0000-00-00', '1464883230-3', 'building_picture', '', '5027_021.jpg'),
(169, 'file-1464883481.jpg', '0000-00-00', '1464883476-3', 'building_picture', '', '5027_021.jpg'),
(170, 'file-1464883501.jpg', '0000-00-00', '1464883496-3', 'building_picture', '', '5027_021.jpg'),
(171, 'file-1464883980.jpg', '0000-00-00', '1464883959-3', 'building_picture', '', 'facebook-marcador-de-posicion-para-localizar-lugares-en-mapas_318-50488.jpg'),
(172, 'file-1464884007.png', '0000-00-00', '1464883995-3', 'building_picture', '', 'Captura de pantalla 2016-05-23 a las 6.14.44 p.m..png'),
(173, 'file-1464884092.png', '0000-00-00', '1464884081-3', 'building_picture', '', 'Captura de pantalla 2016-05-23 a las 6.14.44 p.m..png'),
(174, 'file-1464888930.jpg', '0000-00-00', '1464888910-3', 'building_picture', '', '5027_021.jpg'),
(175, 'file-1464888930.jpg', '0000-00-00', '1464888910-3', '', '', '5027_021.jpg'),
(176, 'file-1464889352.jpg', '0000-00-00', '1464889345-3', 'building_picture', '', '5027_021.jpg'),
(177, 'file-1464889352.jpg', '0000-00-00', '', '', '', '5027_021.jpg'),
(178, 'file-1464889400.jpg', '0000-00-00', '1464889393-3', 'building_picture', '', '5027_021.jpg'),
(179, 'file-1464889400.jpg', '0000-00-00', '1464889393-3', 'building_picture', '', '5027_021.jpg'),
(180, 'file-1464889702.jpg', '0000-00-00', '1464889694-3', 'building_picture', '', '5027_021.jpg'),
(181, 'file-1464889702.jpg', '0000-00-00', '1464889694-3', 'building_picture', '', '5027_021.jpg'),
(182, 'file-1464889761.jpg', '0000-00-00', '1464889742-3', 'building_picture', '', '5027_021.jpg'),
(183, 'file-1464889761.jpg', '0000-00-00', '1464889742-3', 'building_picture', '', '5027_021.jpg'),
(184, 'file-1464889810.jpg', '0000-00-00', '1464889798-3', 'building_picture', '', '5027_021.jpg'),
(185, 'file-1464889810.jpg', '0000-00-00', '', '', '', '5027_021.jpg'),
(186, 'file-1464889845.jpg', '0000-00-00', '1464889837-3', 'building_picture', '', '5027_021.jpg'),
(187, 'file-1464889845.jpg', '0000-00-00', '1464889837-3', 'building_picture', '', '5027_021.jpg'),
(188, 'file-1464890082.jpg', '0000-00-00', '1464890073-3', 'building_picture', '', '5027_021.jpg'),
(189, 'file-1464890082.jpg', '0000-00-00', '1464890073-3', 'building_picture', '', '5027_021.jpg'),
(190, 'file-1464890138.jpg', '0000-00-00', '1464890126-3', 'building_picture', '', '5027_021.jpg'),
(191, 'file-1464890138.jpg', '0000-00-00', '1464890126-3', 'building_picture', 'canvas-14648901563.png', '5027_021.jpg'),
(192, 'file-1464891362.jpg', '0000-00-00', '1464891355-3', 'building_picture', '', '5027_021.jpg'),
(193, 'file-1464891362.jpg', '0000-00-00', '1464891355-3', 'building_picture', 'canvas-14648913703.png', '5027_021.jpg'),
(194, 'file-1464891487.jpg', '0000-00-00', '1464891474-3', 'building_picture', '', 'libros-de-la-biblia.jpg'),
(195, 'file-1464891487.jpg', '0000-00-00', '1464891474-3', 'building_picture', 'canvas-14648915173.png', 'libros-de-la-biblia.jpg'),
(196, 'file-1464895383.jpg', '0000-00-00', '1464895376-3', 'building_picture', '', '5027_021.jpg'),
(197, 'file-1464895383.jpg', '0000-00-00', '1464895376-3', 'building_picture', '', '5027_021.jpg'),
(200, 'file-1464895810.jpg', '0000-00-00', '1464895804-3', 'building_picture', '', '1077_001.jpg'),
(201, 'file-1464895810.jpg', '0000-00-00', '1464895804-3', 'building_picture', '', '1077_001.jpg'),
(202, 'file-1464895980.jpg', '0000-00-00', '1464895962-3', 'building_picture', '', '1077_001.jpg'),
(203, 'file-1464897404.jpg', '0000-00-00', '1464897396-3', 'building_picture', '', '1077_001.jpg'),
(204, 'file-1464897477.jpg', '0000-00-00', '1464897472-31', 'building_picture', '', '1077_001.jpg'),
(205, 'file-1464897787.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(206, 'file-1464899165.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(207, 'file-1464899217.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(208, 'file-1464899270.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(209, 'file-1464899291.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(210, 'file-1464899425.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(211, 'file-1464899489.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(212, 'file-1464899615.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(213, 'file-1464900185.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(214, 'file-1464900223.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(215, 'file-1464900256.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(216, 'file-1464900314.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(217, 'file-1464900560.jpg', '0000-00-00', '1464900553-3', 'building_picture', '', '1077_001.jpg'),
(218, 'file-1464900560.jpg', '0000-00-00', '1464900553-3', 'building_picture', '', '1077_001.jpg'),
(219, 'file-1464900605.jpg', '0000-00-00', '1464900600-3', 'building_picture', '', '1077_006.jpg'),
(220, 'file-1464900606.jpg', '0000-00-00', '1464900600-3', 'building_picture', '', '1077_006.jpg'),
(221, 'file-1464900759.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(222, 'file-1464900759.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(223, 'file-1464900885.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(224, 'file-1464900885.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(225, 'file-1464900928.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(226, 'file-1464900928.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(227, 'file-1464901086.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(228, 'file-1464901155.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(229, 'file-1464901306.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(230, 'file-1464901307.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(231, 'file-1464901434.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(232, 'file-1464901499.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(233, 'file-1464901514.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(234, 'file-1464901514.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(235, 'file-1464902829.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(236, 'file-1464902829.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(237, 'file-1464903017.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(238, 'file-1464903017.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(239, 'file-1464903111.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(240, 'file-1464903111.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(241, 'file-1464903155.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(242, 'file-1464903155.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(243, 'file-1464903291.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(244, 'file-1464903291.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(245, 'file-1464903337.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(246, 'file-1464903338.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(247, 'file-1464903392.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(248, 'file-1464903393.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(249, 'file-1464903448.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(250, 'file-1464903448.jpg', '0000-00-00', '1', 'building_picture', '', '1077_001.jpg'),
(251, 'file-1464903479.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg'),
(252, 'file-1464903479.jpg', '0000-00-00', '1', 'building_picture', '', '1077_006.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tenants_contact`
--

CREATE TABLE IF NOT EXISTS `tenants_contact` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `company` int(250) NOT NULL,
  `contact_name` varchar(250) NOT NULL,
  `contact_office_number` varchar(20) NOT NULL,
  `contact_cell_number` int(11) NOT NULL,
  `contact_email` varchar(250) NOT NULL,
  `type` varchar(250) NOT NULL,
  `id_request` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `tenants_contact`
--

INSERT INTO `tenants_contact` (`id`, `company`, `contact_name`, `contact_office_number`, `contact_cell_number`, `contact_email`, `type`, `id_request`) VALUES
(1, 4, 'Ramon', '8095542563', 2147483647, 'sdfsdf@agencia7am.com', 'inside_plan', '1');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `underground_outsite_manhole_plan`
--

INSERT INTO `underground_outsite_manhole_plan` (`id`, `service_number`, `id_request`, `company_underground_manhole`, `contact_underground_manhole`, `cust_cable_count_underground_manhole`, `cust_tie_loc_underground_manhole`, `scope_work_underground_manhole`) VALUES
(1, '', '1458155698-2', '2', '1', 'asdfasdf', 'asdfasdfasdf', 'asdfasdfasdf'),
(2, '', '5', '2', '1', 'sdfgsdfgsdfg', 'sdfgsdfgsdfg', 'fdgsdfgsdfgsdfg'),
(3, '', '36', '2', '1', 'asdfasdf', 'dfasdfasd', 'fasdfasdfasdfasdfa');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `uploaded_file`
--

INSERT INTO `uploaded_file` (`id`, `type`, `estado`, `file`, `canvas`, `code`) VALUES
(10, 'manhole', 1, 'file-1458228578.jpeg', 'canvas-14582285842.png', '1458228563-2'),
(11, 'civil_plan', 1, 'file-1458247314.jpg', 'canvas-14582473212.png', '1458247293-2'),
(12, 'inside_plan', 1, 'file-1459565458.jpg', 'canvas-1459565458.png', '1459565458-2');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `utility_plans`
--

INSERT INTO `utility_plans` (`id`, `service_number`, `id_request`, `redline_page_utility`, `redline_file_utility`) VALUES
(1, '32165412', '1', 'red_line_page_utility_1454616907.jpg', 'red_line_file_utility_1454616907.jpg'),
(2, '65656', '2', 'red_line_page_utility_1454704352.jpg', 'red_line_file_utility_1454704352.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
