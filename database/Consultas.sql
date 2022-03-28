
show tables;
select * from room_type;
select * from reservation;
select * from room;
select * from user;
select * from reservation_user;

SET @numero1=0;
SET @numero2=0;
SET @numero3=0;
select room_type.id,startDate, endDate, nof, CASE room_type.id WHEN 1 THEN @numero1:=@numero1+1 WHEN 2 THEN @numero2:=@numero2+1 WHEN 3 THEN @numero3:=@numero3+1 ELSE 0 END AS num_of_reservation, CASE room_type.id WHEN 1 THEN nof-@numero1 WHEN 2 THEN nof-@numero2 WHEN 3 THEN nof-@numero3 ELSE 0 END AS available_rooms from reservation JOIN room_type where startDate ='2017-04-29' and  endDate ='2017-05-01' group by room_type.id;

SET @admin1=0;
SET @admin2=0;
SET @admin3=0;
SELECT  A.admin_id, T.reservation_id, CASE admin_id WHEN 1 THEN @admin1:=@admin1+1 WHEN 2 THEN @admin2:=@admin2+1 WHEN 3 THEN @admin3:=@admin3+1 ELSE 0 END AS num_of_reservation ,  U.firstName, U.lastName FROM reservation A INNER JOIN Reservation_user T ON A.id = T.reservation_id INNER JOIN User u ON u.id = T.user_id  order by A.admin_id ;