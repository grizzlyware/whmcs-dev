sudo mysql -e "CREATE USER 'whmcs'@'localhost' IDENTIFIED BY 'password';";
sudo mysql -e "GRANT ALL PRIVILEGES ON *.* TO 'whmcs'@'localhost' WITH GRANT OPTION;";
