DROP DATABASE IF EXISTS scada;
CREATE DATABASE scada;
USE scada;

DROP TABLE IF EXISTS user;

CREATE TABLE user (
                      email VARCHAR(256) NOT NULL PRIMARY KEY,
                      password VARCHAR(64) NOT NULL,
                      access INTEGER(1),
                      date_created TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

DROP TABLE IF EXISTS comment;

CREATE TABLE comment (
                         id INT AUTO_INCREMENT PRIMARY KEY,
                         user_email VARCHAR(256),
                         comment_timedate TIMESTAMP,
                         comment_content CHAR(200),
                         FOREIGN KEY(user_email)
                             REFERENCES user(email)
);

CREATE TABLE user_comment (
                              user_email  VARCHAR(256),
                              comment_id INT,
                              PRIMARY KEY (user_email, comment_id),
                              FOREIGN KEY (user_email)
                                  REFERENCES user(email),
                              FOREIGN KEY (comment_id)
                                  REFERENCES comment(id)
);

DROP TABLE IF EXISTS application_available;

CREATE TABLE application_available (
                                       app_id INT AUTO_INCREMENT PRIMARY KEY,
                                       app_name VARCHAR(64) NOT NULL,
                                       app_title VARCHAR(64) NOT NULL,
                                       app_logo VARCHAR(256) DEFAULT 'fas fa-truck-pickup',
                                       app_directory VARCHAR(256) DEFAULT 'index.php'
);

DROP TABLE IF EXISTS application_installed;

CREATE TABLE application_installed (
                                       app_id INT AUTO_INCREMENT PRIMARY KEY,
                                       app_name VARCHAR(64) NOT NULL,
                                       app_title VARCHAR(64) NOT NULL,
                                       app_logo VARCHAR(256) DEFAULT 'fas fa-truck-pickup',
                                       app_directory VARCHAR(256) DEFAULT 'index.php'
);

INSERT INTO application_available (app_name,app_title,app_logo,app_directory) values('clinometer','Clinometer','fas fa-mountain','clinometer.php');
INSERT INTO application_available (app_name,app_title,app_logo,app_directory) values('cam-view','Camera Views','fas fa-video','cam-view.php');
INSERT INTO application_available (app_name,app_title,app_logo,app_directory) values('lights','External Lights','fas fa-lightbulb','lights.php');

INSERT INTO application_installed (app_name,app_title,app_logo,app_directory) values('clinometer','Clinometer','fas fa-mountain','clinometer.php');

SELECT * FROM application_available;
SELECT * FROM application_installed;