CREATE DEFINER=`root`@`localhost` TRIGGER `cinema`.`admin_BEFORE_INSERT` BEFORE INSERT ON `admin` FOR EACH ROW
BEGIN
IF NEW.`first_name` NOT RLIKE binary '^[a-zA-Z]{2,}$' or 
NEW.`last_name` NOT Rlike  binary '^([a-zA-Z]+-?+[a-zA-Z]{2,}$)' or
NEW.`email` not rlike binary '^.*@\..*$' or
NEW.`username` not rlike binary '^[a-zA-Z0-9]{4,}$' or
NEW.`phone` not rlike binary '^\\+[0-9]{4,}$' or
NEW.`password` not rlike binary '^[a-zA-Z0-9]{4,}$'


THEN 
	signal sqlstate '45000';
END if;
end