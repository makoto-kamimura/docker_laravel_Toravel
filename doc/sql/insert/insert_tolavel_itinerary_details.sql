INSERT INTO tolavel_itinerary_details (
    -- itinerary_detail_no
    itinerary_no
    ,itinerary_detail_category_no
    ,itinerary_detail_title
    ,itinerary_detail_picture
    ,itinerary_detail_start_at
    ,itinerary_detail_end_at
    ,itinerary_detail_cost
    ,itinerary_detail_phonenumber
    ,itinerary_detail_address
    ,itinerary_detail_url
    ,itinerary_detail_notes
    ,CreateAt,UpdateAt) 
VALUES 
-- カテゴリー：movement
(1,1,'test1-1','airplane.HEIC',now(),now(),10000,0120123456,'osaka','https://www.city.ishigaki.okinawa.jp/','test1-1-1',now(),now())
-- カテゴリー：meal
,(1,2,'test1-2','cafe.JPG',now(),now(),10000,0120123456,'osaka','https://www.city.ishigaki.okinawa.jp/','test1-2-1',now(),now())
-- カテゴリー：stay
,(1,3,'test1-3','stay.JPG',now(),now(),10000,0120123456,'osaka','https://www.city.ishigaki.okinawa.jp/','test1-3-1',now(),now())
-- カテゴリー：shopping
,(1,4,'test1-4','shopping.HEIC',now(),now(),10000,0120123456,'osaka','https://www.city.ishigaki.okinawa.jp/','test1-4-1',now(),now())
;