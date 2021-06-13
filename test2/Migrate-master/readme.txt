# Скрипт, который накатывает миграции. Запускается из командной строки и поддерживает 5 опций: 

> php database.php -h
Usage: php database.php -h|-s|-m|-b|-r
Options:
-h --help       Show this message
-s --state      Show current state
-m --migrate    Change current state
-b --backup     Create database backup
-r --restore    Restore database from backup

> php database.php -s
Old files in folder var/www/html/sql/:
    Old files not found
    New files in folder var/www/html/sql:
1. 001_create_table.sql
2. 002_add_table.sql
3. 003_insert_into_users.sql
4. 004_add_column.sql

> php database.php -m
Start database migration
Execute file 0001_create_database.sql
Execute file 0002_add_table_users.sql
Execute file 0003_insert_data_into_users.sql
Execute file 0004_add_column_active_to_users.sql
Database migration complete
