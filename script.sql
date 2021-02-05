
create table contact (
   id              int              not null auto_increment,
   fname         varchar(50)       ,
   lname           varchar(50),
   email           varchar(100),
   phone1    varchar(50),
   phone2   varchar(50),
   address  varchar (255),
   city     varchar (100),
   country     varchar (100),
   user_id     int ,

   primary key (id)


);
insert into contact values
(1, 'Daniel', 'Mond', 'mondaydaniel2002@yahoo.com', '56 626 726 72', '', 'Kursk', 'Kusk city', 'Russia', 1)

;
