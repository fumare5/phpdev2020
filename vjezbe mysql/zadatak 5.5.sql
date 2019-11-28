SELECT
imeStud,
prezStud
FROM stud
WHERE DATE_FORMAT(datRodStud, "%M") = "May" 
ORDER BY prezStud ASC ;