CREATE TABLE Persons (
    PersonID int ,
    LastName varchar(255),
    FirstName varchar(255),
    Address varchar(255),
    City varchar(255)
);

CREATE TABLE `thongtin` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(200) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `Sex` int(10) DEFAULT NULL,
  `phone` int(200) DEFAULT NULL,
  `avatar` varchar(200) DEFAULT NULL ,
  PRIMARY KEY (id)
) 
INSERT INTO `thongtin` (`id`, `username`, `birthday`, `Sex`, `phone`, `avatar`) VALUES
(NULL, 'thoa', '2022-11-03', 0, 918370604, 'image/avatar/anh6.jpg');