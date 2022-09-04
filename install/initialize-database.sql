/* System */
CREATE TABLE IF NOT EXISTS ApiKeys (
    apikey VARCHAR(60) NOT NULL,
    userId INTEGER NOT NULL,
    FOREIGN KEY(userId) REFERENCES Users(userId)
);

CREATE TABLE IF NOT EXISTS Users (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    email VARCHAR(128) NOT NULL DEFAULT "deleted@openlive.org",
    password VARCHAR(128) NOT NULL,
    /* TODO */
    isVerificated BOOLEAN NOT NULL CHECK (isVerificated IN (0, 1)),
    /* TODO */
    isDisabled BOOLEAN NOT NULL CHECK (isDisabled IN (0, 1)),
    gender BOOLEAN NOT NULL CHECK (gender IN (0, 1)),
    authToken VARCHAR(7168) NOT NULL
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
    For INTEGER NOT NULL,
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

