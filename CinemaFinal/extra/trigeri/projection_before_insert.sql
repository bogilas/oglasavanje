CREATE DEFINER=`root`@`localhost` TRIGGER `cinema`.`projection_BEFORE_INSERT` BEFORE INSERT ON `projection` FOR EACH ROW
BEGIN
IF NEW.`price` NOT RLIKE binary '^[a-zA-Z]{3,}$'

THEN 
	signal sqlstate '45000';
END if;
END