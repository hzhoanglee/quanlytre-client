# VSLIM.io Children Monitor System

**Web-based User Interface for parents**


## Files

 - [assets](https://github.com/hzhoanglee/quanlytre-client/tree/main/assets "assets"): JS Library and Scripts
 - [dist](https://github.com/hzhoanglee/quanlytre-client/tree/main/dist "dist"): Site JS and CSS
 - [includes](https://github.com/hzhoanglee/quanlytre-client/tree/main/includes "includes"): Global PHP files
 - [playground](https://github.com/hzhoanglee/quanlytre-client/tree/main/playground "playground"): Testing stuffs
 - [config.php](https://github.com/hzhoanglee/quanlytre-client/blob/main/config.php "config.php"): MySQL Connection and Global Variables
 - [index.php](https://github.com/hzhoanglee/quanlytre-client/blob/main/index.php "index.php"): Dashboard File

## Function

 - Display live information about Humidity and Temperature
 - Display live information about distance of Sensor (For further handling)
 - Login System
 - Display Live Feed of Camera
 - ~~Setting system~~ *(Pending)*


## Dependencies

This web client is using JS and PHP, everything is included.

## How to Install

- Download this repo as Zip or run this command: 
`git clone https://github.com/hzhoanglee/quanlytre-client`
- Import SQL and change config.php file following:
	- MySQL Server Credentials
	- $url: Site for URL
	- $firebaseURL: Firebase Realtime database URL
	
	
**This is just a part of a full system. If you want to run our application, please visit *Backend Handling*, *Server* and *IoT section* to run a complete system**

Hoang Le - 2020
