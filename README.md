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

To adjust this behavior, open the directory index configuration file:
```bash
sudo vim /etc/apache2/mods-enabled/dir.conf
```

Inside this file, update the DirectoryIndex line so index.php appears first:
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
![Image](https://github.com/mehdi-khaksari/lamp-php-todo-app-ubuntu/issues/1)








