CREATE TABLE tolavel_itinerarys (
  itinerary_no int(10) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  itinerary_category_no int(10),
  itinerary_tag_no int(10),
  itinerary_title varchar(10),
  itinerary_picture varchar(100),
  CreateAt datetime,
  UpdateAt datetime
);