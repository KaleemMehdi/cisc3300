CREATE DATABASE `in_class_17`;

USE in_class_17;

CREATE TABLE `users`
(
    `id`        int(11) NOT NULL AUTO_INCREMENT,
    `name`      varchar(80) NOT NULL,
    `addressID`      int(11) NOT NULL,
    primary key (`id`)
);

CREATE TABLE `userComments`
(
    `id`        int(11) NOT NULL AUTO_INCREMENT,
    `comment`      varchar(80),
    `dayPosted`    varchar(11),
    `userID` int(11) NOT NULL,
    primary key (`id`)
);

insert into users (name, addressID)
values ('Bethany Shaw', 1);
insert into users (name, addressID)
values ('Sheri Fitzgerald', 2);
insert into users (name, addressID)
values ('Patrick Burgess', 3);

insert into userComments (comment, dayPosted, userID)
values ('Hello!', 'Monday', 1);
insert into userComments (comment, dayPosted, userID)
values ('Have a good day!', 'Tuesday', 2);
insert into userComments (comment, dayPosted, userID)
values (NULL, NULL, 3);

select * from users left join userComments on users.id = userComments.userID;

select * from users join userComments on users.id = userComments.userID;