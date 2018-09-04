CREATE DEFINER=`root`@`localhost` TRIGGER `cinema`.`reservation_BEFORE_DELETE` BEFORE DELETE ON `reservation` FOR EACH ROW
BEGIN
update guest 
set guest.num_of_waiting_res=guest.num_of_waiting_res-1 
where guest.guest_id=OLD.guestFRN_id;
END