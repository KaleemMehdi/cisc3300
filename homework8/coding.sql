CREATE DATABASE `homework8`;

USE homework8;

CREATE TABLE `notes`
(
    `id`        int(11) NOT NULL AUTO_INCREMENT,
    `title`      varchar(80) NOT NULL,
    `description`      TEXT NOT NULL,
    primary key (`id`)
);

insert into notes (title, description)
values ('First Note', 'Wake up');

insert into notes (title, description)
values ('Second Note', 'Take a shower');

insert into notes (title, description)
values ('Third Note', 'Eat cereal for breakfast');

insert into notes (title, description)
values ('Fourth Note', 'Go to school');

insert into notes (title, description)
values ('Fifth Note', 'TBD');

update notes SET description = 'Eat pancakes for breakfast' where id = 3;

update notes SET description = 'Go to the park' where id = 4;

delete from notes where id = 1;

select * from notes order by title desc;

select * from notes limit 1 offset 1;

select * from notes where description like '%a%' OR description like '%e%' OR description like '%i%' OR description like '%o%' OR description like '%u%' OR description like '%A%' OR description like '%E%' OR description like '%I%' OR description like '%O%' OR description like '%U%';