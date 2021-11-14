CREATE DATABASE feedback;

CREATE TABLE  `feedback`.`tb_student` ( 
    `name` VARCHAR(30) NOT NULL , 
    `academic_year` VARCHAR(5) NOT NULL , 
    `semester` INT(2) NOT NULL , 
    `current_date` DATE NOT NULL , 
    `branch` VARCHAR(5) NOT NULL , 
    `section` VARCHAR(2) NOT NULL , 
    `percentage` FLOAT(4,2) NOT NULL , 
    `cgpa` FLOAT(4,2) NOT NULL ,
    `student_id` VARCHAR(10) NOT NULL , 
    PRIMARY KEY (`student_id`)
);

CREATE TABLE  `feedback`.`tb_points` ( 
    `points_id` VARCHAR(3) NOT NULL,
    `points_value` VARCHAR(100) NOT NULL,
    PRIMARY KEY (`points_id`)
);

CREATE TABLE `feedback`.`tb_cn` ( 
    `points_id` VARCHAR(10) NOT NULL , 
    `student_id` VARCHAR(10) NOT NULL ,
    `rating` INT(2) NOT NULL , 
    PRIMARY KEY (`student_id`, `points_id`),
    FOREIGN KEY (`points_id`) REFERENCES `tb_points`(`points_id`),
    FOREIGN KEY (`student_id`) REFERENCES `tb_student`(`student_id`)
);

CREATE TABLE `feedback`.`tb_tc` ( 
    `points_id` VARCHAR(10) NOT NULL , 
    `student_id` VARCHAR(10) NOT NULL ,
    `rating` INT(2) NOT NULL , 
    PRIMARY KEY (`student_id`, `points_id`),
    FOREIGN KEY (`points_id`) REFERENCES `tb_points`(`points_id`),
    FOREIGN KEY (`student_id`) REFERENCES `tb_student`(`student_id`)
);

CREATE TABLE `feedback`.`tb_sa` ( 
    `points_id` VARCHAR(10) NOT NULL , 
    `student_id` VARCHAR(10) NOT NULL ,
    `rating` INT(2) NOT NULL , 
    PRIMARY KEY (`student_id`, `points_id`),
    FOREIGN KEY (`points_id`) REFERENCES `tb_points`(`points_id`),
    FOREIGN KEY (`student_id`) REFERENCES `tb_student`(`student_id`)
);

CREATE TABLE `feedback`.`tb_nndl` ( 
    `points_id` VARCHAR(10) NOT NULL , 
    `student_id` VARCHAR(10) NOT NULL ,
    `rating` INT(2) NOT NULL , 
    PRIMARY KEY (`student_id`, `points_id`),
    FOREIGN KEY (`points_id`) REFERENCES `tb_points`(`points_id`),
    FOREIGN KEY (`student_id`) REFERENCES `tb_student`(`student_id`)
);

CREATE TABLE `feedback`.`tb_toc` ( 
    `points_id` VARCHAR(10) NOT NULL , 
    `student_id` VARCHAR(10) NOT NULL ,
    `rating` INT(2) NOT NULL , 
    PRIMARY KEY (`student_id`, `points_id`),
    FOREIGN KEY (`points_id`) REFERENCES `tb_points`(`points_id`),
    FOREIGN KEY (`student_id`) REFERENCES `tb_student`(`student_id`)
);

INSERT INTO `feedback`.`tb_student` (`student_id`,`name`, `academic_year`, `semester`, `current_date`, `branch`, `section`, `percentage`, `cgpa`) VALUES
('$Rollno','$Name', '$year', '$sem', '$datee', '$Branch', '$Section', '$attendence', '$cgpa');

INSERT INTO `feedback`.`tb_points` (`points_id`, `points_value`) VALUES
('1',    'Has the Teacher covered entire Syllabus as prescribed by University?'),
('2.1',  'Technical content'),
('2.2',  'Communication skills'),
('2.3',  'Availability beyond normal classes and co-operation to solve individual problems'),
('2.4',  'Pace on which contents were covered'),
('2.5',  'Overall effectiveness'),
('3',    'How do you rate the contents of the curricular'),
('4',    'How do you rate lab experiments, ifapplicable?'),
('5',    'Any Remarks')

INSERT INTO `feedback`.`tb_dbms` (`points_id`, `student_id`, `rating`) VALUES
('1',   '$Rollno', '$s11'),
('2.1', '$Rollno', '$si1'),
('2.2', '$Rollno', '$sii1'),
('2.3', '$Rollno', '$siii1'),
('2.4', '$Rollno', '$siv1'),
('2.5', '$Rollno', '$sv1'),
('3',   '$Rollno', '$s31'),
('4',   '$Rollno', '$s41'),
('5',   '$Rollno', '$s51');

INSERT INTO `feedback`.`tb_cn` (`points_id`, `student_id`, `rating`) VALUES
('1',   '$Rollno', '$s12'),
('2.1', '$Rollno', '$si2'),
('2.2', '$Rollno', '$sii2'),
('2.3', '$Rollno', '$siii2'),
('2.4', '$Rollno', '$siv2'),
('2.5', '$Rollno', '$sv2'),
('3',   '$Rollno', '$s32'),
('4',   '$Rollno', '$s42'),
('5',   '$Rollno', '$s52');

INSERT INTO `feedback`.`tb_tc` (`points_id`, `student_id`, `rating`) VALUES
('1',   '$Rollno', '$s13'),
('2.1', '$Rollno', '$si3'),
('2.2', '$Rollno', '$sii3'),
('2.3', '$Rollno', '$siii3'),
('2.4', '$Rollno', '$siv3'),
('2.5', '$Rollno', '$sv3'),
('3',   '$Rollno', '$s33'),
('4',   '$Rollno', '$s43'),
('5',   '$Rollno', '$s53');

INSERT INTO `feedback`.`tb_sa` (`points_id`, `student_id`, `rating`) VALUES
('1',   '$Rollno', '$s14'),
('2.1', '$Rollno', '$si4'),
('2.2', '$Rollno', '$sii4'),
('2.3', '$Rollno', '$siii4'),
('2.4', '$Rollno', '$siv4'),
('2.5', '$Rollno', '$sv4'),
('3',   '$Rollno', '$s34'),
('4',   '$Rollno', '$s44'),
('5',   '$Rollno', '$s54');

INSERT INTO `feedback`.`tb_nndl` (`points_id`, `student_id`, `rating`) VALUES
('1',   '$Rollno', '$s15'),
('2.1', '$Rollno', '$si5'),
('2.2', '$Rollno', '$sii5'),
('2.3', '$Rollno', '$siii5'),
('2.4', '$Rollno', '$siv5'),
('2.5', '$Rollno', '$sv5'),
('3',   '$Rollno', '$s35'),
('4',   '$Rollno', '$s45'),
('5',   '$Rollno', '$s55');

INSERT INTO `feedback`.`tb_toc` (`points_id`, `student_id`, `rating`) VALUES
('1',   '$Rollno', '$s16'),
('2.1', '$Rollno', '$si6'),
('2.2', '$Rollno', '$sii6'),
('2.3', '$Rollno', '$siii6'),
('2.4', '$Rollno', '$siv6'),
('2.5', '$Rollno', '$sv6'),
('3',   '$Rollno', '$s36'),
('4',   '$Rollno', '$s46'),
('5',   '$Rollno', '$s56');