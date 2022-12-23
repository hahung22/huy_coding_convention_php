<?php

class Connect
{
    private string $server = 'localhost';
    private string $username = 'root';
    private string $password = '';
    private string $database = 'student_management';

    public function getConnect()
    {
        $connect = mysqli_connect('localhost', 'root', '', 'student_management');
        mysqli_set_charset($connect, 'utf8');

        return $connect;
    }

    public function select($sql)
    {
        $connect = $this->getConnect();
        $result  = mysqli_query($connect, $sql);
        mysqli_close($connect);

        return $result;
    }

    public function execute($sql): bool
    {
        $connect = $this->getConnect();
        $result  = mysqli_query($connect, $sql);
        mysqli_close($connect);

        return $result;
    }
}
