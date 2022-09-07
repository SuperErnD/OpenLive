/* System */
CREATE TABLE IF NOT EXISTS ApiKeys (
    apikey VARCHAR(60) NOT NULL,
    userId INTEGER NOT NULL,
    FOREIGN KEY(userId) REFERENCES Users(userId)
);

CREATE TABLE IF NOT EXISTS Users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email VARCHAR(128) NOT NULL DEFAULT "deleted@openlive.org",
    name VARCHAR(64) NOT NULL,
    surname VARCHAR(64) NOT NULL,
    birthyear INTEGER NOT NULL DEFAULT 1990,
    password VARCHAR(128) NOT NULL,
    gender VARCHAR(1) NOT NULL DEFAULT "m",
    country VARCHAR(2) NOT NULL DEFAULT "US",
    /* TODO */
    Verificated BOOLEAN NOT NULL CHECK (Verificated IN (0, 1)) DEFAULT 0,
    /* TODO */
    Disabled BOOLEAN NOT NULL CHECK (Disabled IN (0, 1)) DEFAULT 0,
    /* authToken TEXT NOT NULL */

    admin BOOLEAN NOT NULL CHECK (admin IN (0, 1)) DEFAULT 0
);

/* Open Live Messenger tables */
CREATE TABLE IF NOT EXISTS MessengerFriends (
    /* TODO */
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    FirstFriendID INTEGER NOT NULL,
    SecondFriendID INTEGER NOT NULL
);

CREATE TABLE IF NOT EXISTS MessengerNotifications (
    /* TODO */
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    ForUser INTEGER NOT NULL,
    NotificationTitle VARCHAR(128) NOT NULL,
    NotificationDescription TEXT NOT NULL
);

CREATE TABLE IF NOT EXISTS MessengerMessages (
    /* TODO */
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    FromUser INTEGER NOT NULL,
    ToID INTEGER NOT NULL,
    Content VARCHAR(2048) NOT NULL,
    isGroupMessage BOOLEAN NOT NULL CHECK (isGroupMessage IN (0, 1))
);

CREATE TABLE IF NOT EXISTS MessengerGroups (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    owner INTEGER NOT NULL DEFAULT -1,
    admins TEXT NOT NULL DEFAULT '[]',
    members TEXT NOT NULL DEFAULT '[]'
);

CREATE TABLE IF NOT EXISTS MessengerSettings (
    userId INTEGER NOT NULL,
    language VARCHAR(4) NOT NULL DEFAULT "en_US"
);

/* Open Live Mail tables */
CREATE TABLE IF NOT EXISTS MailMessages (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    emailFrom VARCHAR(128) NOT NULL,
    emailTo VARCHAR(128) NOT NULL,
    Subject TEXT NOT NULL,
    Content TEXT NOT NULL
);

--add admin
INSERT IGNORE INTO Users (id, name, surname, email, password, admin) VALUES (1, "admin", "admin", "admin@localhost", "8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918", 1)
