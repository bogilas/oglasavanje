CREATE DEFINER=`root`@`localhost` TRIGGER `cinema`.`reservation_AFTER_DELETE` AFTER DELETE ON `reservation` FOR EACH ROW
BEGIN
declare num tinyint(3);
set num=(select num_of_waiting_res from guest where guest_id=OLD.guestFRN_id);
if(num=1)then 
delete from guest where guest_id=OLD.guestFRN_id;
else
update guest 
set guest.num_of_waiting_res=guest.num_of_waiting_res-1 
where guest.guest_id=OLD.guestFRN_id;
end if;
END