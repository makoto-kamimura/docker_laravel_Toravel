INSERT INTO tolavel_itinerarys (
    itinerary_no
    ,itinerary_category_no
    ,itinerary_tag_no
    ,itinerary_title
    ,itinerary_picture
    ,CreateAt,UpdateAt) 
VALUES 
-- カテゴリ：family タグ：touring
(1,1,3,'test1','ishigaki.JPG',now(),now())
-- カテゴリ：firend タグ：driving
,(2,2,4,'test2','ishigaki.JPG',now(),now())
-- カテゴリ：work タグ：camping
,(3,3,5,'test3','ishigaki.JPG',now(),now())
;