SELECT distinct 
m.nome_materia AS materia,
p.nome_completo AS professor,
c.nome_curso AS curso_materia
from
materia m 
INNER JOIN professor p ON p.id = m.cod_prof
INNER JOIN curso c ON c.id = m.cod_curso