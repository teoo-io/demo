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
                         timedate TIMESTAMP,
                         content CHAR(200),
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
                                       id INT AUTO_INCREMENT PRIMARY KEY,
                                       name VARCHAR(64) NOT NULL,
                                       logo VARCHAR(256)
);

DROP TABLE IF EXISTS application_installed;

CREATE TABLE application_installed (
                                       id INT AUTO_INCREMENT PRIMARY KEY,
                                       name VARCHAR(64) NOT NULL,
                                       logo VARCHAR(256)
);