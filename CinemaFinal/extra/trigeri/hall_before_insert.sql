CREATE DEFINER=`root`@`localhost` TRIGGER `cinema`.`hall_BEFORE_INSERT` BEFORE INSERT ON `hall` FOR EACH ROW
BEGIN
IF NEW.`name` NOT RLIKE binary '^([a-zA-Z]+\s+[a-zA-Z]*)'

THEN 
	signal sqlstate '45000';
END if;
END
