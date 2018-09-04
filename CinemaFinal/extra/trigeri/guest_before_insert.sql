CREATE DEFINER=`root`@`localhost` TRIGGER `cinema`.`guest_BEFORE_INSERT` BEFORE INSERT ON `guest` FOR EACH ROW
BEGIN
IF NEW.`first_name` NOT RLIKE binary '^[a-zA-Z]{2,}$' or 
NEW.`last_name` NOT RLIKE  binary '^([a-zA-Z]+-?+[a-zA-Z]{2,}$)' or
NEW.`email` NOT RLIKE binary '^.*@\..*$' or
NEW.`phone` NOT RLIKE binary '^\\+[0-9]{4,}$' or
NEW.`num_of_waiting_res` not rlike binary '^[0-4]$'


THEN 
	signal sqlstate '45000';
END if;
END