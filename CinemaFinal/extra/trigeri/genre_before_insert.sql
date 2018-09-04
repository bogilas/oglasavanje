CREATE DEFINER=`root`@`localhost` TRIGGER `cinema`.`genre_BEFORE_INSERT` BEFORE INSERT ON `genre` FOR EACH ROW
BEGIN
IF NEW.`name` NOT RLIKE binary '^[a-zA-Z]{2,}$'

THEN
	signal sqlstate '45000';
END if;
end