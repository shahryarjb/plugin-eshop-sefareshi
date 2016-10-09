DELETE FROM #__eshop_shippings WHERE name = 'eshop_postcost_sefareshi';

INSERT INTO `#__eshop_shippings`(`id`, `name`, `title`, `author`, `creation_date`, `copyright`, `license`, `author_email`, `author_url`, `version`, `description`, `params`, `ordering`, `published`) VALUES 
(15, 'eshop_postcost_sefareshi', 'Persian Post Cost - Sefareshi', 'Mojtaba Naserei', '0000-00-00 00:00:00', 'Copyright 2016 SC Team', 'http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU/GPL version 2', 'mojtaba.naserei@yahoo.com', 'www.seocommunity.ir', '1.0.0', 'This is Persian Post Shipping method for Eshop', NULL, 15, 1);
