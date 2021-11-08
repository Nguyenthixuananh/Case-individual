create
database `iNotesOfStudent`;
create table `notes`
(
    id      INT(11) PRIMARY KEY AUTO_INCREMENT,
    title   VARCHAR(255),
    content VARCHAR(255)
);
create table `types`
(
    id        INT(11) PRIMARY KEY AUTO_INCREMENT,
    type_name VARCHAR(255)
);
create table `type_note`
(
    id      INT(11) PRIMARY KEY AUTO_INCREMENT,
    type_id INT(11),
    FOREIGN KEY (type_id) REFERENCES types (id),
    note_id INT(11),
    FOREIGN KEY (note_id) REFERENCES notes (id),

);
insert into `types`(`type_name`)
VALUES ('Cá nhân'),
       ('Chỗ làm'),
       ('Chỗ học');

insert into `notes`(`title`, `content`)
VALUES ('Giặt là', 'Mang quần áo ra cửa hàng giặt là'),
       ('Sửa quạt', 'Mang quạt ra cửa hàng YODOBASHI'),
       ('Đi mua sắm', 'Mua đồ ăn dự trữ vào cuối tuần'),
       ('Mua nguyên liệu', 'Đến kho mua nguyên liệu trà sữa'),
       ('Khảo sát thị trường', 'Đến các quán cafe gần trường học, công ty để khảo sát nhu cầu của khách hàng'),
       ('Báo cáo tuần', 'Viết báo cáo tuần để nộp qua mail cho Coach trước 12h'),
       ('Lập kế hoạch ngày', 'Viết kế hoạch ngày nộp trước 8h');
insert into type_note (`type_id`, `note_id`)
values (1, 1),
       (1, 2),
       (1, 3),
       (2, 4),
       (2, 5),
       (3, 6),
       (3, 7);

//Hien thi bang
SELECT `notes`.id, `types`.type_name as 'Loại', `notes`.title as 'Tiêu đề ', `notes`.content as 'Nội dung'
FROM `types`
         INNER join `type_note` on `types`.id = `type_note`.type_id
         INNER join `notes` on `type_note`.note_id = `notes`.id;

SELECT `notes`.id, `types`.type_name as 'Loại', `notes`.title as 'Tiêu đề ', `notes`.content as 'Nội dung'
FROM `notes`
         INNER JOIN type_note ON notes.id = type_note.note_id
         INNER JOIN types ON type_note.type_id = types.id
WHERE `types`.type_name = 'Cá nhân';

CREATE VIEW noteTable AS
SELECT `notes`.id, `types`.type_name as `type_name`, `notes`.title as `note_name`, `notes`.content as `note_content`
FROM `notes`
         INNER join `types` on types.id = notes.type_id