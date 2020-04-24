CREATE TABLE 'siswa' (
	'siswa_id' int(11) NOT NULL auto_increment,
	'siswa_nis' int(20) NOT NULL,
	'siswa_nama' varchar(50) NOT NULL,
	'siswa_Tahajud' varchar(50) NOT NULL,
	'siswa_Duha' varchar(50) NOT NULL,
	'siswa_Sholat wajib' varchar(50) NOT NULL,
	'siswa_Tilawah' varchar(50) NOT NULL,
	PRIMARY KEY ('Siswa_id')
) ENGINE=MyISAM DEFAULT CHARSET=utf8 auto_increment=7 ;