# 📝 Simple PHP Todo App with LAMP on ubuntu

This is a simple PHP-based Todo List web app that runs on a LAMP (Linux, Apache, MySQL, PHP) stack. It demonstrates how to:

- Set up a basic LAMP environment
- Configure Apache to process PHP
- Connect to a MySQL database using PDO
- Display and fetch tasks from a database table

---

## ⚙️ Prerequisites

Make sure you are on a Debian-based system (e.g., Ubuntu), and you have `sudo` access.

---

## 🧱 LAMP Stack Setup

### 1. Install Apache

```bash
sudo apt update
sudo apt install apache2

```
Place index.html file at:
```bash
/var/www/html/index.html
```

### 2. Install MySQL

```bash
sudo apt install mysql-server
```

### 3. Install PHP

```bash
sudo apt install php libapache2-mod-php php-mysql
php -v

```

```bash
PHP 8.1.2-1ubuntu2.21 (cli) (built: Mar 24 2025 19:04:23) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.2, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.2-1ubuntu2.21, Copyright (c), by Zend Technologies
```
### 🔧 Apache Configuration (Optional)
By default, when Apache is asked to load a directory (e.g., yourdomain.com/), it checks for certain index files in a specific order — usually starting with index.html.

Since we’re building a PHP-based site, we want Apache to prioritize index.php instead. This ensures your PHP application loads properly, even if there's also an index.html file in the same folder.

### To adjust this behavior, open the directory index configuration file:
```bash
sudo vim /etc/apache2/mods-enabled/dir.conf
```

### Inside this file, update the DirectoryIndex line so index.php appears first:
```bash
<IfModule mod_dir.c>
    DirectoryIndex index.php index.html index.cgi index.pl index.xhtml index.htm
</IfModule>
```

This tells Apache to load index.php before any of the other options when a directory is requested.
Finally, reload Apache to apply the change:
```bash
sudo systemctl restart apache2
```

### 🧪 Testing PHP
Create a test PHP page:
```bash
sudo nano /var/www/html/info.php
```
Add:
```bash
<?php
phpinfo();
?>
```
ِDefault PHP web page:

<p align="center">
  <a name="top" href="#">
     <img alt="xshin404/lampTermux" height="60%" width="100%" src="https://github.com/mehdi-khaksari/lamp-php-todo-app-ubuntu/blob/main/images/info.php.png"/>
  </a>
</p>



### 🗄️ MySQL Setup
```bash
sudo mysql
```
### Run:
```bash
CREATE DATABASE phptest;
CREATE USER 'php_user'@'%' IDENTIFIED BY '123';
GRANT ALL ON phptest.* TO 'php_user'@'%';
FLUSH PRIVILEGES;
```

### Create the table and insert a test item:

```bash
USE phptest;

CREATE TABLE todo_list (
    item_id INT AUTO_INCREMENT PRIMARY KEY,
    content VARCHAR(255)
);

INSERT INTO todo_list (content) VALUES ("My first task");
```

### 📜 PHP Application Code (todo_list.php)

Place todo_list.php file at:
```bash
/var/www/html/todo_list.php
```


### ✅ Final Testing
Visit:

http://localhost/ — landing page

http://localhost/info.php — PHP test

http://localhost/todo_list.php — database-backed task list



# 📬 Contact
Feel free to fork, improve, and contribute!
Author: mehdi khaksari
Email: mahdikhaksari36@gmail.com





