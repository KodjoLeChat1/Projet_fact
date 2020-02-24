drop table if exists alerte;

drop table if exists navire; 

drop table if exists utilisateur;

drop table if exists port;

create table utilisateur (u_id serial primary key, u_nom varchar(255) not null, u_prenom varchar(255) not null, u_mail text unique not null, u_mdp text not null, 

u_profession varchar(255) not null, u_admin integer default 0 check(u_admin in (0,1)));

create table port (p_id serial primary key, p_nom varchar(255) not null, p_pays varchar(255) not null, p_latitude real not null, p_longitude real not null,

p_latitudeDegre real not null, p_latitudeMinute real not null, p_latitudeHeni real not null, p_longitudeDegre real not null, p_longitudeMinute real not null,

p_longitudeHeni real not null);

create table navire (n_id serial primary key, n_nom varchar(255) not null, n_mmsi integer not null unique, n_imo integer not null unique, n_type varchar(255) not null,

p_id integer not null, foreign key(p_id) references port(p_id));

create table alerte (a_id serial, a_dateDebut date not null, a_seuil integer not null, u_id integer not null, n_id integer not null, p_id integer not null,

foreign key(u_id) references utilisateur(u_id), foreign key(n_id) references navire(n_id), foreign key(p_id) references port(p_id), primary key(u_id, n_id, p_id));