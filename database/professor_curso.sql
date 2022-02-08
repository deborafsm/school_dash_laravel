SELECT 
p.nome_completo,
c.nome_curso
FROM
professor p
INNER JOIN curso c ON c.id = p.cod_curso

