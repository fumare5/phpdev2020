SELECT
imeNastavnik,
prezNastavnik
FROM nastavnik
JOIN mjesto ON mjesto.pbr=nastavnik.pbrStan
WHERE SUBSTRING(nazMjesto, 3, 1) = "Z" 
ORDER BY imeNastavnik ASC;