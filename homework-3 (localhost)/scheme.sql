-- CREATE TABLE user (
--     ID int NOT NULL PRIMARY KEY,
--     login nvarchar(15) NOT NULL
--     email nvarchar(30),
--     password_hash nvarchar(16) NOT NULL
-- )

-- CREATE TABLE task (
--     ID int NOT NULL PRIMARY KEY,
--     name nvarchar(255) NOT NULL,
--     create_task datetime NOT NULL,
--     update_task datetime NOT NULL,
--     task_status text NOT NULL
-- )

-- SELECT * 
-- FROM task
-- WHERE task_status = 'ACTIVE' OR 'EXPIRED'

-- CREATE TABLE project (
--     ID int NOT NULL PRIMARY KEY,
--     name nvarchar(255) NOT NULL,
--     create_project datetime NOT NULL
-- )
