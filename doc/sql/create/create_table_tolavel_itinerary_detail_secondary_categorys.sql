CREATE TABLE tolavel_itinerary_detail_secondary_categorys (
  itinerary_detail_secondary_category_no int(10) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  itinerary_detail_category_no int(10),
  itinerary_detail_secondary_category varchar(10),
  CreateAt datetime,
  UpdateAt datetime
);