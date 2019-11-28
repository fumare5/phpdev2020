SELECT
imeStud,
prezStud,
nazMjesto
FROM stud
JOIN mjesto ON mjesto.pbr=stud.pbrRod
WHERE imeStud LIKE "F%" 
ORDER BY imeStud ASC ;
