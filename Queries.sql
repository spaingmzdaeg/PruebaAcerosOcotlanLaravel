SELECT * FROM collaborators;
SELECT * FROM departments;

-- Consulta Join para Obtener el departamento de cada colaborador
SELECT collaborators.id, CONCAT(collaborators.first_name, ' ' , collaborators.second_surname, ' ' , collaborators.last_name) as namecollaborator, collaborators.rfc
,departments.name as department FROM collaborators INNER JOIN departments ON collaborators.department_id = departments.id

