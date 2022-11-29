CREATE TABLE mitarbeiter (
 uid int(11) unsigned DEFAULT 0 NOT NULL auto_increment,
 pid int(11) DEFAULT 0 NOT NULL,

 PRIMARY KEY (uid),
 KEY parent (pid),

);

CREATE TABLE tx_autohaus_domain_model_auto (
    model varchar(255) DEFAULT '' NOT NULL,
    production_year int(11) NOT NULL,
    price int(11) NOT NULL,
    booked tinyint(4) unsigned DEFAULT 0 NOT NULL,
    sold tinyint(4) unsigned DEFAULT 0 NOT NULL,
    image varchar(255) DEFAULT '' NOT NULL,
    video_presentation varchar(255) DEFAULT '' NOT NULL,
    month int(11) unsigned DEFAULT '0' NOT NULL,


);

CREATE TABLE tx_autohaus_domain_model_month(
     parentid int(11) DEFAULT '0' NOT NULL,
     parenttable varchar(255) DEFAULT '' NOT NULL,
     month int(2) NOT NULL,
     day int(11) unsigned DEFAULT '0' NOT NULL
);

CREATE TABLE tx_autohaus_domain_model_day (
     parentid int(11) DEFAULT '0' NOT NULL,
     parenttable varchar(255) DEFAULT '' NOT NULL,
     day int(2) NOT NULL,
     timeslot int(11) unsigned DEFAULT '0' NOT NULL,


);
CREATE TABLE tx_autohaus_domain_model_timeslot(

    parentid int(11) DEFAULT '0' NOT NULL,
    parenttable varchar(255) DEFAULT '' NOT NULL,
    timeslot varchar(80) NOT NULL,
    booked tinyint(4) DEFAULT '0' NOT NULL,
    appointment_start int(11) unsigned DEFAULT '0' NOT NULL,
    appointment_end int(11) unsigned DEFAULT '0' NOT NULL,

);
--
--
-- CREATE TABLE verfuegbarkeiten (
--
-- mitarbeiter
-- offene_termine
--
-- );
