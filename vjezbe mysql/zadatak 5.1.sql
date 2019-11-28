SELECT
imeStud,
prezStud,
nazMjesto
FROM stud
JOIN mjesto ON mjesto.pbr=stud.pbrRod
WHERE LEFT (imeStud,1) = "F" 
ORDER BY imeStud ASC ;
