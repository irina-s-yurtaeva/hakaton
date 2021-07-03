create table b_rock_boulder_contest (
	ID int(10) not null auto_increment,
	TITLE varchar(255),
	ACTIVE char(1) not null default 'Y',
	START_DATE datetime not null DEFAULT now(),
	FINISH_DATE datetime not null DEFAULT now(),
	primary key (ID)
);

create table b_rock_boulder_track (
	ID int(10) not null auto_increment,
	NUMBER int(10) not null,
	TITLE varchar(255),
	CONTEST_ID int(10),
	primary key (ID),
	index IX_BOULDER_TRACK_CONTEST_ID(CONTEST_ID)
);

create table b_rock_boulder_card (
	ID int(10) not null auto_increment,
	CONTEST_ID int(10),
	TRACK_ID int(10) not null,
	USER_ID int(10),
	TOP int(1) default null,
	TOP_ATTEMPTS int(10),
	BONUS int(1) default null,
	BONUS_ATTEMPTS int(10),
	primary key (ID)
);

