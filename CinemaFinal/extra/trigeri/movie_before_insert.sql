CREATE DEFINER=`root`@`localhost` TRIGGER `cinema`.`movie_BEFORE_INSERT` BEFORE INSERT ON `movie` FOR EACH ROW
BEGIN
IF NEW.`director` NOT RLIKE binary '^[a-zA-Z]{2,}$' or 
NEW.`duration` not rlike binary '^[0-9]{2,}$'

THEN 
	signal sqlstate '45000';
END if;
END