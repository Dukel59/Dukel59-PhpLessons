--Связать таблицы лекций и курсов, сделать выборку чтобы вывелись ИД лекции, название курса, название лекции, описание лекции
    SELECT l.id as "id", c.title as "course title", l.title as "lesson title", l.description as "lesson description" FROM `lessons` as l
    JOIN `courses` as c ON l.course_id = c.id ORDER BY l.id;
--Связать таблицы курсов и студентов, сделать выборку чтобы вывелись ИД студента, название курса, дата старта и дата конца курса,
-- имя студента, телефон, регион.
    SELECT s.id as "student id", c.title as "course title", c.start_date as "course start date", c.end_date as "course end date",
           s.name as "name", s.phone as "phone", s.country as "country"
    FROM `students` as s
    JOIN course_student as cs on s.id = cs.student_id
    JOIN courses as c ON c.id = cs.course_id;


