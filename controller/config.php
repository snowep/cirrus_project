<?php
//define config for mysql connection
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'cirrus');
define('DB_NAME2', 'cirrus_v2');

//connect to mysql
$db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if ($db->connect_errno > 0) {
    die('Unable to connect to database [' . $db->connect_error . ']');
}
class Database
{
    private $connection;
    function __construct()
    {
        $this->connect_db();
    }
    public function connect_db()
    {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME2);
        if ($this->connection->connect_error) {
            die("Database connection failed: " . $this->connection->connect_error);
        }
    }

    public function sanitize($var)
    {
        $return = $this->connection->real_escape_string($var);
        return $return;
    }
    public function addSekolah($nama)
    {
        $check = "SELECT COUNT(*) as total FROM sekolah WHERE nama = '$nama'";
        $check_res = $this->connection->query($check);
        $row = $check_res->fetch_assoc();
        if ($row['total'] == 0) {
            $query = "INSERT INTO sekolah (nama) VALUES ('$nama')";
            $result = $this->connection->query($query);

            $query2 = "SELECT * FROM sekolah WHERE nama = '$nama'";
            $result2 = $this->connection->query($query2);
            $row2 = $result2->fetch_assoc();
            $idSekolah = $row2['id'];
            $this->connection->query("INSERT INTO info_sekolah (sekolah_id) VALUES ('$idSekolah')");
            if ($result) {
                return true;
            } else {
                return false;
            }
        } else {
            header("location:list--data-sekolah.php?error=409");
            return false;
        }
    }

    public function getSekolah($id = null)
    {
        $query = "SELECT * FROM sekolah INNER JOIN info_sekolah ON sekolah.id = info_sekolah.sekolah_id";
        if ($id != null) {
            $query .= " WHERE sekolah.id = $id";
        }
        $result = $this->connection->query($query);
        return $result;
    }

    public function countSekolah()
    {
        $query = "SELECT COUNT(*) as total FROM sekolah;";
        $result = $this->connection->query($query);
        return $result;
    }
}

$database = new Database();
$database->connect_db();
