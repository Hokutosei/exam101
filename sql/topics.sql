create table topics (
	id INT not null auto_increment,
    title VARCHAR(100),
    created_at timestamp,
    edited_at timestamp,
    user_id int,
    primary key (id)
)