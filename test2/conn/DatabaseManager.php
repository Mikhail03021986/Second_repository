<?php ### Соединение с БД, запросы к БД

namespace Conn;
    class DatabaseManager {
        use BasicSet;
        private static $connection;
        private static $host;
        private static $user;
        private static $pass;
        private static $name;

        private final function __construct()
        {
            self::$host = $_ENV['DB_HOST'];
            self::$user = $_ENV['DB_USER'];
            self::$pass = $_ENV['DB_PASSWORD'];
            self::$name = $_ENV['DB_NAME'];
            self::$connection = new \PDO(self::$host . ";" . self::$name, self::$user, self::$pass);
        }

        public static function getConnection()
        {
            try {
                self::getInstance();
                return self::$connection;
            } catch (PDOException $e) {
                print 'Не удалось соединиться с БД. Код ошибки: ' . $e->getMessage();
            } finally {
                self::$connection->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }
        }

        # Фиксированный INSERT-запрос к БД
        public static function queryInsert()
        {
            $query = "INSERT INTO
                comments
                VALUES (
                NULL,
                :nickname,
                :content,
                NOW(),
                1)";
            return $query;
        }

        # Фиксированный SELECT-запрос к БД
        public static function querySelect()
        {
            $query = "SELECT *
                FROM comments
                WHERE is_visible = 1
                ORDER BY created_at DESC";
            return $query;
        }

    }
