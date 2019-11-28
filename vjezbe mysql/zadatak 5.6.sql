SELECT
DISTINCT
imeStud,
prezStud
FROM stud
JOIN ispit ON stud.mbrStud = ispit.mbrStud
WHERE DAY(datIspit) BETWEEN 10 AND 20 
ORDER BY prezStud ASC;