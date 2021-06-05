SELECT  *
FROM teacher
JOIN user
ON teacher.user_id = user.id; //câu a

SELECT  *
FROM student
JOIN user
ON student.user_id = user.id; //câu b

SELECT  *
FROM courses; //câu c

SELECT  *
FROM teachers
JOIN courses
ON teachers.courses_id = courses.courses_id
WHERE teachers.teacher_name = "Nguyễn Văn A";//câu d 

SELECT  *
FROM teacher
JOIN student
ON teacher.user_name = student
WHERE user_name = 'Nguyen Van A';//câu e 

// f
SELECT * FROM companies
JOIN students ON companies.company_id = students.company_id
JOIN classes ON students.class_id = classes.class_id
JOIN teachers ON classes.teacher_id = teachers.teacher_id
JOIN courses ON courses.course_id = classes.course_id
WHERE teachers.teacher_name = 'Nguyen Van A' AND courses.course_year = '2020-2021' AND courses.course_semester = 'Hoc ky 1';

SELECT  *
FROM internship_diary
JOIN students
ON internship_diary.user_id = students.user_id
JOIN user
ON students.user_id = user.user_id
WHERE user.user_name = " Nguyen Van A";//câu g 

//thiếu câu h

SELECT  weeks.teacher_comment
FROM internship_diary
JOIN student
ON student.user_id = internship_diary.user_id
JOIN user
ON student.user_id = user.id
JOIN weeks
ON weeks.internship_diary_id = internship_diary.id
WHERE user.user_name = 'Nguyễn Văn B' 
AND internship_diary.internship_year = '2020-2021 Học kỳ 1'; // câu i 

SELECT  weeks.trainer_comment
FROM internship_diary
JOIN student
ON student.user_id = internship_diary.user_id
JOIN user
ON student.user_id = user.id
JOIN weeks
ON weeks.internship_diary_id = internship_diary.id
WHERE user.user_name = 'Nguyễn Văn B' 
AND internship_diary.internship_year = '2020-2021 Học kỳ 1'; // cau j  
