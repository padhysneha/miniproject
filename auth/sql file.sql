create database csv_db6;
use csv_db6;
create table register_table(name varchar(30),email_id varchar(50) primary key,password varchar(20));
CREATE TABLE cart (
  label varchar(100) NOT NULL,
  price varchar(50) NOT NULL,
  image varchar(255) NOT NULL,
  qty int(10) NOT NULL,
  total_price varchar(100) NOT NULL,
  sender_id varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE orders (
  id int(11) NOT NULL,
  name varchar(100) NOT NULL,
  email varchar(100) NOT NULL,
  phone varchar(20) NOT NULL,
  address varchar(255) NOT NULL,
  pmode varchar(50) NOT NULL,
  images  varchar(255) NOT NULL,
  amount_paid varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

