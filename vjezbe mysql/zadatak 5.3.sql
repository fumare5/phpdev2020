SELECT
imeStud,
prezStud,
imeNastavnik,
prezNastavnik
FROM stud
JOIN ispit
ON ispit.mbrStud = stud.mbrStud
JOIN nastavnik
ON ispit.sifNastavnik = nastavnik.sifNastavnik
WHERE SUBSTRING(imeStud, 5, 1) = SUBSTRING(imeNastavnik, 5, 1);