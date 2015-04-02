-- -----------------------------------------------------
-- Schema futureniner
-- -----------------------------------------------------
DROP Database if exists futureniner;
CREATE DATABASE futureniner;
Use futureniner;

-- drop table Courses;
-- drop table Research;
-- drop table OffersAssistantship;
-- drop table Professor;
-- drop table SchoolEvents;
-- drop table Facilities;
-- drop table DeptRecruitsCompanies;
-- drop table Companies;
-- drop table Applies;
-- drop table Offers_Eligible;
-- drop table Scholarship;
-- drop table program;
-- drop table department;
-- drop table Recommendations;
-- drop table WorkExperience;
-- drop table Application;
-- drop table student;
-- drop table recruiter;
-- drop table users;

-- -----------------------------------------------------
-- TABLE Users
-- -----------------------------------------------------

CREATE TABLE Users (
	UserID INT AUTO_INCREMENT,
    Username VARCHAR(50) NOT NULL UNIQUE,
    Password VARCHAR(20) NOT NULL,
    PhoneNumber VARCHAR(20),
    Email VARCHAR(50) NOT NULL,
    Gender CHAR(1) NOT NULL,
    fName VARCHAR(20) NOT NULL,
    lName VARCHAR(20) NOT NULL,
    mName VARCHAR(20),
    DOB DATE NOT NULL,
    AddressLine1 VARCHAR(20) NOT NULL,
    AddressLine2 VARCHAR(20),
    City VARCHAR(10) NOT NULL,
    State VARCHAR(10) NOT NULL,
    ZIP INT(5) NOT NULL,
    Country VARCHAR(20) NOT NULL,
    PRIMARY KEY (UserID)
);

INSERT INTO Users()
	values 
    (1, 'AllanAlda',     'abcd', '111-111-1111', 'Allan.Alda@alpha.com',  'M',   'Allen', 'Alda', 'A',     '1990/1/1', '1 Alda Lane', '',      'Allan',     'NC', 28262,'USA'),
    (2, 'Barbara',   'efgh', '222-222-2222', 'Barbara.Bean@bbb.com',  'F', 'Barbara', 'Bean', 'B',   '1990/2/2', '2 Bean Blvd', 'Apt B', 'Babs',      'NC', 28262,'USA'),
    (3, 'CarlCapp',      'jklm', '333-333-3333', 'Carl.Capp@ccc.com',     'M',   'Carl', 'Capp', '',       '1990/3/3', '3 Capp Ct.', '',       'Capp',      'ON',28262, 'Canada'),
    (4, 'DarleneDavis',  'nopq', '444-444-4444', 'Darlene.Davis@ddd.com', 'F', 'Darlene', 'Davis', 'D',  '1990/4/4', '4 Davis Dr.', 'Apt D', 'Darla',     'NY',28262, 'USA'),
    (5, 'EddyEdgar',     'rstu', '555-555-5555', 'Eddy.Edgar.EEE.com',    'M',   'Eddy', 'Edgar', 'E',     '1991/5/5', '5 Eddy Rd.', '',       'Edgar',      '', 28262, 'France'),
    (6, 'FranFrankel',   'vwxy', '666-666-6666', 'Fran.Frankel.fff.com',  'F', 'Fran', 'Frankel', 'Fay', '1991/6/6', '6 Frankel Fort', '',   'Fran',      'NC', 28262,'USA'),
    (7, 'GeorgeGee',     'zabc', '777-777-7777', 'George.Gee.ggg.com',    'M',   'George', 'Gee', 'G',     '1992/7/7', '7 Gee Road', '',       'George',    '',  28262, 'India'),
    (8, 'HannahHark',    'defg', '888-888-8888', 'Hannah.Hark.hhh.com',   'F', 'Hannah', 'Hark', '',     '1992/8/8', '8 Harkonnen Rd.', '',  'Hardy',     'NC', 28262,'USA'),
    (9, 'IanIota',       'hijk', '999-999-9999', 'Ian.Iota.iii.com',      'M',   'Ian', 'Iota', 'I',       '1992/9/9', '9 Iona Isle', 'Apt I', 'Iota',      '',  28262, 'China'),
    (10, 'JeanneJones',   'hijk', '100-100-1000', 'Jasper.Jones.jjj.com',  'F', 'Jeanne', 'Jones', '',   '1993/10/1', '10 Jones Drive', '',  'Jaspar',    '',   28262,'South Africa'),
    (11, 'KevinKarp',     'lmno', '101-101-1001', 'Kevin.Karp@kkk.com',    'M',   'Kevin', 'Karp', '',     '1985/1/1', '11 Kevin Ct', 'Apt K', 'Karp',      'NC', 28262,'USA'),
    (12, 'LilaLing',      'pqrs', '202-202-2002', 'Lila.Ling@lll.com',     'F', 'Lila', 'Ling', 'L',     '1986/1/1', '12 Ling Lane', '',     'Lipp',      'SC', 28262,'USA'),
    (13, 'MikeMyers',     'tuvw', '303-303-3003', 'Mike.Myers@mmm.com',    'M',   'Mike', 'Myers', '',     '1987/1/1', '13 Mike Rd.', 'Apt. M','Marsh',     'NC',28262, 'USA'),
    (14, 'NancyNee',      'xyza', '404-404-4004', 'Nancy.Nee@nnn.com',     'F', 'Nancy', 'Nee', '',      '1988/1/1', '14 Nee Dr.', '',       'Narp',      'NC', 28262,'USA'),
    (15, 'OlsonOrk',      'bcde', '505-505-5005', 'Olson.Ork@ooo.com',     'M',   'Olson', 'Ork', '',      '1989/1/1', '15 Ork Ln', '',        'Orkland',   'NC',28262, 'USA'),
    (16, 'PatPark',       'fghi', '606-606-6006', 'Pat.Park@ppp.com',      'F', 'Pat', 'Park', 'P',      '1989/2/2', '16 Park Place', '',    'Parkland',  'NC', 28262,'USA'),
    (17, 'QuentinQuay',   'jklm', '707-707-7007', 'Quentin.Quay@qqq.com',  'M',   'Quentin', 'Quay',  'Q', '1990/3/3', '17 Quay Quay', '',     'Queenland', 'NC',28262, 'USA'), 
    (18, 'RobinRay',      'nopq', '808-808-8008', 'Robin.Ray@rrr.com',     'F', 'Robin', 'Ray',  '',     '1990/4/4', '18 Ray Road', '',      'Robinland', 'NC', 28262,'USA'),
    (19, 'ThomasTutt',    'rstu', '909-909-9009', 'Thomas.Tutt@tutt.com',  'M',   'Thomas', 'Tutt', '',    '1985/5/5', '19 Tutt Way', '',      'Tomville',  'NC', 28262,'USA'),
    (20, 'UlrikaUrbin',   'vwxy', '110-110-1010', 'Ulrika.Urbin@uuu.com',  'F', 'Ulrika', 'Urbin', '',   '1986/6/6', '20 Universe Way', 'Box U',     'Uton',      'NC',28262, 'USA');
    
    
-- -----------------------------------------------------
-- TABLE Recruiter
-- -----------------------------------------------------

CREATE TABLE Recruiter (
    RecID INT AUTO_INCREMENT,
    UserID INT NOT NULL,
    PRIMARY KEY (RecID),
    FOREIGN KEY (UserID) REFERENCES Users (UserID)
    );

INSERT INTO Recruiter ()
	values
    (1, 11),
    (2, 12), 
    (3, 13),
    (4, 14),
    (5, 15),
    (6, 16),
    (7, 17),
    (8, 18),
    (9, 19),
    (10, 20);

-- -----------------------------------------------------
-- TABLE Student
-- -----------------------------------------------------
CREATE TABLE Student (
    SID INT  AUTO_INCREMENT,
    UserID INT NOT NULL,
    PRIMARY KEY (SID),
	FOREIGN KEY (UserID) 
		REFERENCES Users (UserID)
	);

INSERT INTO Student()
	values
    (1, 1),
    (2, 2),
    (3, 3),
    (4, 4), 
    (5, 5), 
    (6, 6), 
    (7, 7),
    (8, 8),
    (9, 9),
    (10, 10);

/***********************************************
* GROUP 2
* Group Leader: Zach Chapman 
* TABLEs:
*	Application
*	WorkExperience
*	Program
*	Scholarship
*	Offers_Eligible
*	Recommendations
*************************************************/

-- -----------------------------------------------------
-- TABLE Application
-- -----------------------------------------------------
CREATE TABLE Application (
    ApplicationId INT  AUTO_INCREMENT,
    ApplicationDATE DATE NOT NULL,
    Status ENUM('Not Complete', 'Complete', 'Submitted', 'Admitted', 'Rejected') DEFAULT 'Complete',
    HighSchoolGPA FLOAT(3 , 2 ) NULL,
    SATScore INT NULL,
    UndergradGPA FLOAT(3 , 2 ) NOT NULL,
    GREscore SMALLINT(3) NOT NULL,
    GREverbalScore SMALLINT(3) NOT NULL,
    GREquantitativeScore SMALLINT(3) NOT NULL,
    GREanalyticalWritingScore FLOAT(2 , 1 ) NOT NULL,
    TOEFLscore SMALLINT(3) NOT NULL,
    TOEFLreading TINYINT(2) NOT NULL,
    TOEFLlistening TINYINT(2) NOT NULL,
    TOEFLspeaking TINYINT(2) NOT NULL,
    TOEFLwriting TINYINT(2) NOT NULL,
    IELTSscore FLOAT(2 , 1 ) NULL,
	RecID INT,
    PRIMARY KEY (ApplicationId),
	FOREIGN KEY (RecID) REFERENCES Recruiter (RecID)
);

Insert INTo Application()
	values 
	(1,  '2015-01-01',  'Complete',     3.5, 1250, 3.75, 0, 148, 150, 4.5,  0, 25, 20, 10, 29, 6, 1),
    (2,  '2015-01-02',  'Not Complete', 3.0, 1120, 0,    0,   0,   0,   0,  0,  0,  0,  0,  0, 0, 2),
    (3,  '2015-01-03',  'Not Complete', 2.5, 1030, 0,    0,   0,   0,   0,  0,  0,  0,  0,  0, 0, 3),
    (4,  '2015-01-04',  'Complete',     0,   0,    3.95, 0, 170, 168, 4.8,  0, 30, 27, 30, 29, 9, 1),
    (5,  '2015-01-05',  'Rejected',     2.0, 992,  1.70, 0,  70,  95, 2.5,  0, 10, 12, 11, 15, 3, 1),
    (6,  '2015-01-06',  'Submitted',    3.1, 1222, 3.26, 0, 155, 160, 5.5,  0,  0,  0,  0,  0, 0, 3),
    (7,  '2015-01-07',  'Complete',     2.7, 1234, 2.75, 0, 145, 144, 3.6,  0,  0,  0,  0,  0, 5, 2),
    (8,  '2015-01-08',  'Not Complete', 3.9, 1455, 0,    0,   0,   0,   0,  0,  0,  0,  0,  0, 5, 4),
    (9,  '2015-01-09',  'Complete',     3.0, 1555, 3.5,  0, 160, 140, 1.5,  0,  0,  0,  0,  0, 0, 1),
    (10, '2015-01-10', 'Submitted',     4.0, 1600, 3.8,  0, 165, 149, 4.0,  0, 25, 25, 25, 26, 8, 5);
    
-- -----------------------------------------------------
-- TABLE WorkExperience
-- -----------------------------------------------------
CREATE TABLE WorkExperience (
    
    ApplicationID INT,
    CompanyName VARCHAR(45),
    Location VARCHAR(45),
    StartDATE DATE,
    EndDATE DATE,
    FOREIGN KEY (ApplicationID)
        REFERENCES Application (ApplicationId)
);

Insert INTo WorkExperience()
	values
    (1, 'Alpha Company',   'CHARlotte, NC',  '2010-01-01', '2010-06-30'),
    (1, 'Beta, Inc.',      'Monroe, NC',     '2010-07-01', '2010-12-31'),
    (4, 'GammaRay',        'CHARlotte, NC',  '2011-02-01', '2011-08-31'),
    (5, 'Delta Dynamics',  'New York, NY',   '2011-09-01', '2013-12-31'),
    (6, 'Epsilon Industries', 'Waxhaw, NC',  '2009-03-15', '2014-10-24'),
    (8, 'Zeta Warehousing', 'Gastonia, NC',  '2010-01-01', '2012-01-01'),
    (8, 'Eta Enterprises', 'Indianapolis, IA','2012-03-04','2014-04-05'),
    (8, 'Theta Lines',     'Denver, NC',     '2014-05-01', null),
    (9, 'Iota Industries', 'Blacksburg, VA', '2010-01-01', '2015-01-01'),
    (10,'Kappa Corp.',     'CHARlotte, NC',  '2011-02-23', '2012-08-15');

-- -----------------------------------------------------
-- TABLE Recommendations
-- -----------------------------------------------------
CREATE TABLE Recommendations (
  ApplicationID INT,
  fName VARCHAR(20) NULL,
  lName VARCHAR(20) NULL,
  AddressLine1 VARCHAR(45) NULL,
  AddressLine2 VARCHAR(45) NULL,
  City VARCHAR(20) NULL,
  State VARCHAR(30) NULL,
  Country VARCHAR(20) NULL,
  Email VARCHAR(45) NULL,
  PRIMARY KEY (ApplicationID),
  FOREIGN KEY (ApplicationID)
    REFERENCES Application(ApplicationId)
  );
  
INSERT INTO Recommendations ()
	values
    (1,  'Mary',    'Michaels', '1 Madison Ave',   'Apt 1',  'Madison',  'WI', 'USA',    'mary.michaels@mmm.com'),
    (2,  'Nick',    'Nolte',    '2 Nobb Hill',     '',       'New York', 'NY', 'USA',    'nick.nolte@nnn.com'),
    (3,  'Oprah',   'Winfree',  '3 Osprey Road',   '',       'Oakridge', 'OR', 'USA',    'Oprah.Winfree@ooo.com'),
    (4,  'Parth',   'Patel',    '4 Punjab Road',   'Apt P',  'Punjab',   '',   'INDIA',  'Parth.Patel@ppp.com'),
    (5,  'Queenie', 'Quartz',   '5 Quarrel Way',   '',       'Quebec',   'QC', 'CANADA', 'queenie.quartz@qqq.com'),
    (6,  'Rakeesh', 'Rao',      '6 Rajkot Road',   '',       'Rajkot',    '',  'INDIA',  'Rakeesh.Rao@rrr.com'),
    (7,  'Susan',   'Syun',     '7 Shantou St.',   'Apt S',  'Shantou',  '',   'CHINA',  'susan.Syun@sss.com'),
    (8,  'Ted',     'Thomas',   '8 Turtle Tpk',    '',       'Tallahassee', "TN", 'USA', 'ted.thomas@ttt.com'),
    (9,  'Violet',  'Vipp',     '9 Vale St.',      'Apt V',  'Vespers',  'VA', 'USA',    'violet.vipp@vvv.com'),
    (10, 'Will',    'Waters',   '10 Wing Way',     'Apt W',  'Walla',    'WA', 'USA',    'will.waters@www.com');


-- -----------------------------------------------------
-- TABLE Department
-- -----------------------------------------------------
CREATE TABLE Department (
	DeptID CHAR(5),
	DeptHead CHAR(50),
	DeptName CHAR(50),
	Contact VARCHAR(20),
	PRIMARY KEY(DeptID));

INSERT INTO Department()
	values
('1', 'Tom Riddle', 'Electrical Engineering', 'ee@uncc.edu'),
('2', 'Albus Dumbeldore', 'Computer Science Engineering', 'cse@uncc.edu'),
('3', 'Sirius Black', 'Information Technology', 'it@uncc.edu'),
('4', 'Aurther Weasley', 'Mechanical Engineering', 'mech@uncc.edu'),
('5', 'Remus Lupin', 'Art', 'art@uncc.edu'),
('6', 'Rubius Hagrid', 'Humanities', 'humanities@uncc.edu'),
('7', 'Luna Lovegood', 'Law', 'law@uncc.edu'),
('8', 'Nevile Longbottom', 'Bio-Technology', 'bio@uncc.edu'),
('9', 'Hermoine Granger', 'Electronics and communication Engineering', 'ece@uncc.edu'),
('10', 'Severus Snape', 'Civil Engineering', 'civil@uncc.edu');

-- -----------------------------------------------------
-- TABLE Program
-- -----------------------------------------------------
CREATE TABLE Program (
    ProgID CHAR(5),
    DeptID CHAR(5),
    ProgName VARCHAR(45) NULL,
    Degree VARCHAR(15) NULL,
    Amount_Instate FLOAT(7 , 2 ) NULL,
    Amount_Outstate FLOAT(7 , 2 ) NULL,
    CreditHours INT,
    Description VARCHAR(200) DEFAULT NULL,
    PRIMARY KEY (ProgID),

FOREIGN KEY (DeptID) 
		REFERENCES Department(DeptID)
);

Insert INTo Program()
	values
	('1', '1',  'UnderGraduation','BS', 440.25,2086.75,72,''),
	('2', '1',  'Masters','MS', 501.00,2037.00,30,''),
	('3', '1',  'Doctorate','PHD', 1001.50,4038.7,12,''),
    
	('4', '2',  'UnderGraduation','BS', 440.25,2086.75,72,''),
	('5', '2',  'Masters','MS', 501.00,2037.00,30,''),
	('6', '2',  'Doctorate','PHD', 1001.50,4038.7,12,''),	
    
    ('7', '3',  'UnderGraduation','BS', 440.25,2086.75,72,''),
	('8', '3',  'Masters','MS', 501.00,2037.00,30,''),
	('9', '3',  'Doctorate','PHD', 1001.50,4038.7,12,''),
	
    ('10', '4',  'UnderGraduation','BS', 440.25,2086.75,72,''),
	('11', '4',  'Masters','MS', 501.00,2037.00,30,''),
	('12', '4',  'Doctorate','PHD', 1001.50,4038.7,12,''),
	
    ('13', '5',  'UnderGraduation','BS', 440.25,2086.75,72,''),
	('14', '5',  'Masters','MS', 501.00,2037.00,30,''),
	('15', '5',  'Doctorate','PHD', 1001.50,4038.7,12,''),
	
    ('16', '6',  'UnderGraduation','BS', 440.25,2086.75,72,''),
	('17', '6',  'Masters','MS', 501.00,2037.00,30,''),
	('18', '6',  'Doctorate','PHD', 1001.50,4038.7,12,''),
	
    ('19', '7',  'UnderGraduation','BS', 440.25,2086.75,72,''),
	('20', '7',  'Masters','MS', 501.00,2037.00,30,''),
	('21', '7',  'Doctorate','PHD', 1001.50,4038.7,12,''),
	
    ('22', '8',  'UnderGraduation','BS', 440.25,2086.75,72,''),
	('23', '8',  'Masters','MS', 501.00,2037.00,30,''),
	('24', '8',  'Doctorate','PHD', 1001.50,4038.7,12,''),
	
    ('25', '9',  'UnderGraduation','BS', 440.25,2086.75,72,''),
	('26', '9',  'Masters','MS', 501.00,2037.00,30,''),
	('27', '9',  'Doctorate','PHD', 1001.50,4038.7,12,''),
	
    ('28', '10',  'UnderGraduation','BS', 440.25,2086.75,72,''),
	('29', '10',  'Masters','MS', 501.00,2037.00,30,''),
	('30', '10',  'Doctorate','PHD', 1001.50,4038.7,12,'');
    
    -- -----------------------------------------------------
-- TABLE Scholarship
-- -----------------------------------------------------
CREATE TABLE Scholarship (

    ScholarshipID CHAR(5),
	ScholarshipDesc VARCHAR(40),
    Amount FLOAT(7 , 2 ),
    Semester_Year VARCHAR(20),
	Description VARCHAR(200),
    PRIMARY KEY (ScholarshipID)
);

INSERT INTO Scholarship(ScholarshipID, ScholarshipDesc, Amount, Semester_Year,Description)
	values
    (1, 'A. K. Sutton Scholarship',10000, 'Spring 2015',''),
    (2, 'Abigail Elizabeth Gudeman Scholarship', 5000, 'Fall 2015',''),
    (3, 'Brycie Baber Scholarship', 2500, 'Fall 2015',''),
    (4, 'Carl J. McEwen Scholarship', 1000, 'Fall 2015',''), 
    (5, 'Danielson Scholarship for Merit', 25000, 'Fall 2015',''),
    (6, 'Fiechtner Scholarship', 1000, 'Spring 2016',''),
    (7, 'Henry Forrest Scholarship', 5000, 'Spring 2016',''),
    (8, 'J. Murrey Atkins Scholarship for Merit', 7500, 'Spring 2016',''),
    (9, 'North Carolina Ports Scholarship',10000, 'Spring 2016',''),
    (10,'Robert K. Hall Scholarship', 5000, 'Spring 2016','');


-- -----------------------------------------------------
-- TABLE Offers_Eligible
-- -----------------------------------------------------
CREATE TABLE Offers_Eligible (
    ProgID CHAR (5),
    ScholarshipID CHAR (5),
    PRIMARY KEY (ProgID , ScholarshipID),
    FOREIGN KEY (ProgID)
        REFERENCES Program (ProgID),
    FOREIGN KEY (ScholarshipID) 
		REFERENCES Scholarship (ScholarshipID)
);


INSERT INTO Offers_Eligible ()
	values
	(1, 1),
	(1, 2),
	(4, 2),
	(4, 1),
	(4, 7),
	(5, 6),
	(6, 7),
	(8, 8),
	(9, 1),
	(9, 2);

-- -----------------------------------------------------
-- TABLE Applies
-- -----------------------------------------------------
CREATE TABLE Applies (
    ProgID CHAR (5),
    ApplicationID INT,
    SID INT,
    LastUpDATEd DATE,
    PRIMARY KEY (ProgID , ApplicationID , SID),
    FOREIGN KEY (ProgID) REFERENCES Program (ProgID),
    FOREIGN KEY (ApplicationID) REFERENCES Application (ApplicationId),
	FOREIGN KEY (SID) REFERENCES Student (SID)
);

INSERT INTO Applies ()
	values
	(1, 1, 1, '2015-02-01'),
	(2, 1, 1, '2015-02-02'),
	(3, 1, 2, '2015-02-03'),
	(4, 2, 3, '2015-02-04'),
	(5, 2, 4, '2015-02-05'),
	(6, 3, 5, '2015-02-06'),
	(6, 2, 1, '2015-02-07'),
    (7, 1, 1, '2015-02-08'),
    (7, 2, 1, '2015-02-09'),
    (7, 3, 3, '2015-02-10');

-- -----------------------------------------------------
-- TABLE Companies
-- -----------------------------------------------------
CREATE TABLE Companies (
	CompID CHAR(5),
	CompanyName CHAR(50),
	NoOfStudentsRec INT,
	RecruitedYear INT,
	PRIMARY KEY (CompID));

INSERT INTO Companies ()
	values
    (1, 'Alpha, Inc.', 18, 2010),
    (2, 'Beta Corp.',  32, 2011),
    (3, 'Gamma Co.',   13, 2012),
    (4, 'Delta Inc.',  4, 2013),
    (5, 'Epsilon',     10, 2014),
    (6, 'Zeta Comp.',  6, 2015),
    (7, 'Eta Industr', 9, 2010),
    (8, 'Iota Inc.',   8, 2011),
    (9, 'Kappa Co.',   29, 2012),
    (10,'Lambda Inc.',23, 2013);


-- -----------------------------------------------------
-- TABLE DeptRecruitsCompanies
-- -----------------------------------------------------

CREATE TABLE DeptRecruitsCompanies(
	CompID CHAR(5),
	DeptID CHAR(5),
	PRIMARY KEY(CompID,DeptID),
	FOREIGN KEY(CompID) references companies(CompID),
	FOREIGN KEY(DeptID) references department(DeptID));
    
INSERT INTO DeptRecruitsCompanies ()
	values
    (1,2),
    (2,2),
    (3,3),
    (4,2),
    (5,3),
    (6,3),
    (7,4),
    (8,3),
    (9,5),
    (10,2);
    
-- -----------------------------------------------------
-- TABLE Facilities
-- -----------------------------------------------------
CREATE TABLE Facilities (
	LabID CHAR(5),
    DeptID CHAR(5),
	LabName VARCHAR(50),
	Location VARCHAR(20),
	PRIMARY KEY (LabID),
    FOREIGN KEY (DeptID) 
		REFERENCES Department(DeptID)
	);

INSERT INTO Facilities()
	values
    (1, 2, 'Computer Lab 1', 'Andrews Hall'),
    (2, 2, 'Computer Lab 2', 'Buffin Hall'), 
    (3, 2, 'Computer Lab 3', 'Cathode Hall'),
    (4, 3, 'Engineer Lab 1', 'Davis Hall'),
    (5, 3, 'Engineer Lab 2', 'Evans Hall'),
    (6, 4, 'Math Lab 1',     'Fall Hall'),
    (7, 4, 'Math Lab 2',     'Gangis Hall'),
    (8, 4, 'Math Lab 3',     'Hall Hall'),
    (9, 5, 'Art Studio 1',   'Ingles Hall'),
    (10,5, 'Art Studio 2',   'Justice Hall');
    
-- -----------------------------------------------------
-- TABLE Events
-- -----------------------------------------------------
CREATE TABLE SchoolEvents (
	EventID CHAR (5),
    DeptID CHAR (5),
	EventDesc VARCHAR(30),
	EventDATE DATE,
	PRIMARY KEY (Eventid),
    FOREIGN KEY (DeptID) REFERENCES Department(DeptID)
);

INSERT INTO SchoolEvents ()
	values
    (1, 2, 'Meet our Professor', '2015/1/1'),
    (2, 2, 'Panel Discussion', '2015/2/2'),
    (3, 3, 'Department Orientation', '2015/3/3'),
    (4, 3, 'Advising Sessions', '2015/4/4'),
    (5, 1, 'Open House - May 2015', '2015/5/5'),
    (6, 1, 'Open House - June 2015', '2015/6/6'),
    (7, 1, 'Open House - July 2015', '2015/7/7'),
    (8, 1, 'Open House - Aug 2015', '2015/8/8'),
    (9, 1, 'Open House - Sept 2015', '2015/9/9'),
    (10,1, 'Open House - Oct 2015', '2015/10/10');
    
-- -----------------------------------------------------
-- TABLE Professor
-- -----------------------------------------------------
CREATE TABLE Professor (
     ProfID char(5),
     DeptID char(5) NOT NULL,
     fName VARCHAR(50),
     mName VARCHAR(50),
     lName VARCHAR(50),
     Email VARCHAR(50),
     Address varchar(50),
	 Description VARCHAR(200),
     PRIMARY KEY (ProfID),
     FOREIGN KEY (DeptID)
         REFERENCES Department(DeptID)
);

INSERT INTO Professor(ProfID, DeptID, fName, mName, lName, Email,Address,Description)
     values
     (1, 1, 'Ann', 'Alice', 'Arbor',    'ann.arbor@univ.edu', 'Charlotte, NC - 28262','M.S., PHD'),
     (2, 2, 'Bob', '',      'Barker',   'bob.barker@univ.edu','Charlotte, NC - 28245','M.S., PHD'),
     (3, 3, 'Carla', '',    'Carlson',  'carla.carlson@univ.edu','Charlotte, NC - 34262','M.S., PHD'),
     (4, 5, 'Dave', 'Derrick', 'Davis', 'dave.davis@univ.edu','Charlotte, NC - 28245','M.S., PHD'),
     (5, 4, 'Ella', 'Edna', 'Earwig',   'ella.earwig@univ.edu','Charlotte, NC - 28352','M.S., PHD'),
     (6, 6, 'Frank', 'F.', 'Ford',      'frank.ford@univ.edu','Charlotte, NC - 28265','M.S., PHD'),
     (7, 7, 'Gina', '', 'Gaga',         'gina.gaga@univ.edu','Charlotte, NC - 28765','PHD'),
     (8, 8, 'Henry', 'Harris', 'Hope',  'henry.hope@univ.edu','Charlotte, NC - 23452','M.S.'),
     (9, 9, 'Jen', 'June', 'Jones',     'jen.jones@univ.edu','Charlotte, NC - 23453','M.S., PHD'),
     (10,10, 'Karl', 'K', 'Jones',        'karl.Jones@univ.edu','Charlotte, NC - 28262','M.S., PHD'),
     (11,1, 'Jones', 'K', 'Karp',        'Jones.karp@univ.edu','Charlotte, NC - 28262','M.S., PHD'),
     (12,2, 'Karl', 'K', 'Jones',        'karl.Jones2@univ.edu','Charlotte, NC - 28262','M.S., PHD'),
     (13,2, 'Earwig', 'K', 'Karp',        'Earwig.karp@univ.edu','Charlotte, NC - 28262','M.S., PHD'),
     (14,1, 'Karl', 'K', 'Earwig',        'karl.Earwig@univ.edu','Charlotte, NC - 28262','M.S.');

-- -----------------------------------------------------
-- TABLE OffersAssistantship
-- -----------------------------------------------------
CREATE TABLE OffersAssistantship (
     AsstID char(5),
     ProfID char(5) NOT NULL,
     Asstship_Name VARCHAR(100) NOT NULL,
     Asstship_Type VARCHAR(100),
     Duration INT,
     PRIMARY KEY (AsstID, ProfID),
     FOREIGN KEY (ProfID)
         REFERENCES Professor (ProfID)
ON DELETE CASCADE ON UPDATE CASCADE
);
-- Partial PRIMARY KEY missing - We made AsstID as partial PRIMARY KEY.

INSERT INTO OffersAssistantship()
     values
     (1,2, 'Lab Rat Summer 2015',     'Lab Assistant', 3),
     (1,3, 'Lab Rat Fall 2015',       'Lab Assistant', 4),
     (1,1, 'Teaching Assistant 6166', 'Teaching Asst', 4),
     (1,5, 'Teaching Assistant 9999', 'Teaching Asst', 4),
     (2, 6,'LA - Fall classes',       'Lab Assistant', 4),
     (2,7, 'Head LA',                    'Lab Assistant', 12),
     (2,8, 'LA - Spring classes',     'Lab Assistant', 4),
     (3, 10,'Teaching Asst 6001',      'Teaching Asst', 4),
     (3, 3,'Teaching Asst 6002',      'Teaching Asst', 4),
     (3, 7,'Teaching Asst 6003',      'Teaching Asst', 4);

-- -----------------------------------------------------
-- TABLE Research
-- -----------------------------------------------------

CREATE TABLE Research (
     ResearchID char(5),
     ProfID char(5),
     Specialization VARCHAR(100) NOT NULL,
     Field VARCHAR(100) NOT NULL,
     Duration INT,
     PRIMARY KEY (ResearchID),
     FOREIGN KEY (ProfID)
         REFERENCES Professor(ProfID)
ON DELETE CASCADE ON UPDATE CASCADE
);

INSERT INTO Research()
     values
     (1,5,'Evaluating blood testing techniques', 'Bioanalysis', 12),
     (2,6,'Data Mining', 'Database Technology', 12),
     (3,3,'XML Applications', 'Database Technology', 18),
     (4,9,'Thermo-acoustics', 'Acoustics', 6),
     (5,10, 'Real Time Simulation', 'Computer Engineering', 3),
     (6,3,'How to hack any system', 'Network Security', 12),
     (7,2,'Effect of fat content on quality of ice cream', 'Health', 36),
     (8,1,'The effects of changing daylight on object', 'Art Science', 3),
     (9,1,'How to stop spam mail', 'Computer Science', 12),
     (10,5,'Sinkholes in construction material', 'Construction Engineering', 9);

CREATE TABLE COURSES (
	CourseID CHAR(5),
    DeptID CHAR(5),
    COURSE_TITLE VARCHAR(50),
    CREDIT_HOURS INT,
    DESCRIPTION VARCHAR(100) NULL,
    PRIMARY KEY(CourseID),
    FOREIGN KEY (DeptID)
         REFERENCES Department(DeptID));

commit;