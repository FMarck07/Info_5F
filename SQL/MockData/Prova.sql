select *from mock_data where first_name = 'nero';
select *from mock_data where id = 5;
select *from mock_data where first_name = '';
select *from mock_data where first_name = 'Nero';
UPDATE mock_data SET first_name = 'Poli' WHERE first_name = 'Nero';

select *from mock_data
order by last_name asc;

select *from mock_data
order by last_name desc;

select email as posta from mock_data where first_name = 'Oriana';

select distinct first_name from mock_data;

select count(*) from mock_data;

select *from mock_data limit 10;
