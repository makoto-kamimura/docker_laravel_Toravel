CREATE TABLE pictures (
  ID int(10) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  pictureID int(10),
--   RailwayID int(5),
  pictureName varchar(10),
  picturePass varchar(100),
  StartDate date,
  EndDate date,
  CreateAt datetime,
  UpdateAt datetime
);