
USE praktikum_web_2401020077;

INSERT INTO program_studi (nama_prodi) VALUES
    ('Teknik Sipil'),
    ('Arsitektur');

INSERT INTO mahasiswa
    (nim, nama, email, usia, program_studi_id)
VALUES
    ('2401080077', 'Sheren Naomi', 
     'sheren@umrah.com', 20, 1),
    ('2401080078', 'nurindah', 
     'nurindah@umrah.com', 19, 1),
    ('2401080079', 'varaamelia', 
     'varaamelia@umrah.com', 21, 2),
    ('2401080080', 'wawan', 
     'wawan@umrah.com', 22, 2);

UPDATE mahasiswa
SET email = 'sheren.naomi@example.com'
WHERE nim = '2401080077';

DELETE FROM mahasiswa
WHERE nim = '2401080080';

SELECT m.nim, m.nama, m.email, m.usia,
       p.nama_prodi
FROM mahasiswa AS m
JOIN program_studi AS p
    ON p.id = m.program_studi_id
ORDER BY m.nim;