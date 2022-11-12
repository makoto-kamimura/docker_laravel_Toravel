CREATE TABLE tolavel_itinerary_details (
  itinerary_detail_no int(10) AUTO_INCREMENT NOT NULL PRIMARY KEY,
  itinerary_no int(10),
  itinerary_detail_category_no int(10),
  itinerary_detail_title varchar(10),
  itinerary_detail_picture varchar(10),
  itinerary_detail_start_at datetime,
  itinerary_detail_end_at datetime,
  itinerary_detail_cost int(10),
  itinerary_detail_phonenumber int(10),
  itinerary_detail_address varchar(10),
  itinerary_detail_url varchar(10),
  itinerary_detail_notes varchar(10),
  CreateAt datetime,
  UpdateAt datetime
);