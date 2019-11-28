SELECT
imeNastavnik,
prezNastavnik,
m1.nazMjesto,
imeStud,
prezStud,
m2.nazMjesto
FROM nastavnik
JOIN ispit ON ispit.sifNastavnik = nastavnik.sifNastavnik
JOIN mjesto m1 ON m1.pbr = nastavnik.pbrStan
JOIN stud ON stud.mbrStud = ispit.mbrStud
JOIN mjesto m2 ON m2.pbr = stud.pbrRod
WHERE MONTH (datIspit) = 6 AND m1.nazMjesto = m2.nazMjesto
ORDER BY m1.nazMjesto ASC ;