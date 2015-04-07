use futureniner;
SELECT * FROM futureniner.users;
SELECT * FROM futureniner.student;
SELECT * FROM futureniner.recruiter;
SELECT * FROM futureniner.department;
SELECT * FROM futureniner.professor;

#Assistantship jobs
select a.Asstship_Name, a.Asstship_Type, a.Duration, b.email from offersassistantship a inner join (
select ProfID, Email from professor where DeptID IN (select DeptID
from Department where DeptName = 'Electrical Engineering')) b on a.ProfID = b.ProfID;

#Professor Details
select concat(concat(fname,' '),lname) as name, Email, DESCRIPTION, Address from professor where DeptID IN (select DeptID
from Department where DeptName = 'Electrical Engineering');

#Research Opportunities
select a.Field, a.Specialization, a.Duration, b.email from Research a inner join (
select ProfID, Email from professor where DeptID IN (select DeptID
from Department where DeptName = 'Electrical Engineering')) b on a.ProfID = b.ProfID;

#Facilities
select labname, location from facilities where DeptID IN (select DeptID
from Department where DeptName = 'Art');

#list of departments
select DeptName, DeptHead, Contact from Department;

# View courses
select CourseID, COURSE_TITLE, CREDIT_HOURS
 from courses where DeptID IN (select DeptID
from Department where DeptName = 'Electrical Engineering');


#Companies visited
select CompanyName, NoOfStudentsRec from companies where RecruitedYear = 2010 and CompID in (
select c.CompID from deptrecruitscompanies c join department d on  c.DeptID = d.DeptID where 
d.DeptName = 'Computer Science Engineering');