CREATE DATABASE edubridge;
USE edubridge;

CREATE TABLE Parent (
    parent_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email_address VARCHAR(255) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL
);

CREATE TABLE Child (
    child_id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email_address VARCHAR(255),
    parent_code VARCHAR(20),
    parent_id INT NOT NULL,
    FOREIGN KEY (parent_id) REFERENCES Parent(parent_id)
);

CREATE TABLE Lesson (
    lesson_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT,
    downloadable BOOLEAN DEFAULT TRUE
);

CREATE TABLE Gamified_Activity (
    activity_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL
);

CREATE TABLE Gamified_Quiz (
    quiz_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL
);

CREATE TABLE Child_Activity (
    child_id INT,
    activity_id INT,
    score INT DEFAULT 0,
    PRIMARY KEY (child_id, activity_id),
    FOREIGN KEY (child_id) REFERENCES Child(child_id),
    FOREIGN KEY (activity_id) REFERENCES Gamified_Activity(activity_id)
);

CREATE TABLE Child_Quiz (
    child_id INT,
    quiz_id INT,
    score INT DEFAULT 0,
    PRIMARY KEY (child_id, quiz_id),
    FOREIGN KEY (child_id) REFERENCES Child(child_id),
    FOREIGN KEY (quiz_id) REFERENCES Gamified_Quiz(quiz_id)
);

CREATE TABLE Badge (
    badge_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    badge_system_id INT,
    activity_id INT NULL,
    quiz_id INT NULL,
    FOREIGN KEY (badge_system_id) REFERENCES BadgeSystem(badge_system_id)
        ON DELETE CASCADE,
    FOREIGN KEY (activity_id) REFERENCES Gamified_Activity(activity_id)
        ON DELETE SET NULL,
    FOREIGN KEY (quiz_id) REFERENCES Gamified_Quiz(quiz_id)
        ON DELETE SET NULL
);


CREATE TABLE BadgeSystem (
    badge_system_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    total_badges INT DEFAULT 0
);

CREATE TABLE ParentTipsSection (
    tip_id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    content TEXT NOT NULL
);

CREATE TABLE NotificationSystem (
    notification_id INT AUTO_INCREMENT PRIMARY KEY,
    child_id INT NOT NULL,
    message TEXT NOT NULL,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (child_id) REFERENCES Child(child_id)
);

CREATE TABLE ChildLessonProgress (
    child_id INT NOT NULL,
    lesson_id INT NOT NULL,
    status ENUM('not started', 'in progress', 'completed') DEFAULT 'not started',
    PRIMARY KEY (child_id, lesson_id),
    FOREIGN KEY (child_id) REFERENCES Child(child_id),
    FOREIGN KEY (lesson_id) REFERENCES Lesson(lesson_id)
);

CREATE TABLE ChildActivityProgress (
    child_id INT NOT NULL,
    activity_id INT NOT NULL,
    score INT DEFAULT 0,
    PRIMARY KEY (child_id, activity_id),
    FOREIGN KEY (child_id) REFERENCES Child(child_id)
        ON DELETE CASCADE,
    FOREIGN KEY (activity_id) REFERENCES Gamified_Activity(activity_id)
        ON DELETE CASCADE
);

CREATE TABLE ChildBadges (
    child_id INT NOT NULL,
    badge_id INT NOT NULL,
    PRIMARY KEY (child_id, badge_id),
    FOREIGN KEY (child_id) REFERENCES Child(child_id)
        ON DELETE CASCADE,
    FOREIGN KEY (badge_id) REFERENCES Badge(badge_id)
        ON DELETE CASCADE
);


INSERT INTO Parent (name, email_address, password)
VALUES
('Thery Del Rosario', 'thery.dlrosario@gmail.com', 'cwq3z'),
('Molly Ballares', 'molly.ballares@yahoo.com', '46lve3'),
('Ruby Rosalyn Balucan', 'balucan.bing2x@gmail.com', 's59vz'),
('Leah Artap', 'leah.artap@gmail.com', 'rT9oc'),
('Jiselle Velayo', 'js.velayo@yahoo.com', '0p3tr');


INSERT INTO Child (name, email_address, parent_code, parent_id)
VALUES
('Nicole Jane Del Rosario', 'nicolejane.delrosario.25@usjr.edu.ph', '101', 1),
('Dan Ballares', 'dan.ballares.21@usjr.edu.ph', '102', 2),
('Bea Angela Balucan', 'beaangela.balucan.21@usjr.edu.ph', '103', 3),
('Louise Artap', 'lg.artap@gmail.com', '104', 4),
('Renz Velayo', 'rnz.vlayo23@gmail.com', '105', 5);

INSERT INTO Lesson (title, content)
VALUES
('Animals & Plants', 'The wild world and creatures among us.'),
('Numbers', 'Adding numbers 1-10.'),
('Reading & Writing', 'Basic words and phrases for beginners.'),
('Mini Games', 'Fun puzzles combining all lessons.');

INSERT INTO ParentTipsSection (title, content)
VALUES
('Encourage Daily Reading', 'Spend 10 minutes reading with your child.'),
('Healthy Study Habits', 'Create a consistent learning routine.'),
('Positive Reinforcement', 'Reward effort, not just results.'),
('Screen Time Balance', 'Set appropriate limits for device use.');

INSERT INTO Gamified_Activity (title)
VALUES
('Math Jenga'),
('Jungle Jamboree'),
('Once Upon A Sentence'),
('Fraction Frenzy');

INSERT INTO Gamified_Quiz (title)
VALUES
('Animals & Plants Quiz'),
('Numbers Quiz'),
('Reading & Writing Quiz');

INSERT INTO BadgeSystem (title, total_badges)
VALUES
('Animals & Plants', 4),
('Numbers', 5),
('Reading & Writing', 5),
('Mini Games', 6);

INSERT INTO Badge (title)
VALUES
('I Am A Smart Subtractor'),
('I Am A Puzzle Prodigy'),
('I Am A Bookworm Boss'),
('I Am A Challenge Champion'),
('I Am A Quiz Whiz');

INSERT INTO NotificationSystem (child_id, message, timestamp)
VALUES
(1, 'NUMBERS: New lesson available!', NOW()),
(2, 'You earned a badge! Badge earned in Plants and Animals', NOW()),
(3, 'A new quiz has been unlocked!', NOW()),
(4, 'Good morning! Start your day with a fun level.', NOW()),
(5, 'New parent tips available.', NOW());

INSERT INTO Child_Activity (child_id, activity_id, score)
VALUES
(1, 1, 85),
(1, 3, 90),
(2, 2, 70),
(3, 4, 95),
(5, 5, 88);

INSERT INTO Child_Quiz (child_id, quiz_id, score)
VALUES
(1, 1, 80),
(1, 2, 75),
(2, 3, 88),
(3, 4, 92),
(4, 5, 100);

SELECT * from Parent;
SELECT * from Child;
SELECT parent_id, name FROM Parent;
SELECT child_id, name FROM Child;
DELETE FROM Child 
WHERE child_id > 0;
DELETE FROM Parent 
WHERE parent_id > 0;
TRUNCATE TABLE Parent;
DELETE FROM BadgeSystem;
TRUNCATE TABLE BadgeSystem;
SET FOREIGN_KEY_CHECKS = 0;
TRUNCATE TABLE Child;
TRUNCATE TABLE Parent;
TRUNCATE TABLE Child_Activity;
TRUNCATE TABLE Child_Quiz;
TRUNCATE TABLE ChildLessonProgress;
TRUNCATE TABLE ChildActivityProgress;
TRUNCATE TABLE ChildBadges;
TRUNCATE TABLE NotificationSystem;
