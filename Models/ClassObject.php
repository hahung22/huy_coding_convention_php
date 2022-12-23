<?php

require 'Models/Connect.php';

class ClassObject
{
    private int $id;
    private string $name;

    public function __construct($row)
    {
        $this->id = $row['id'] ?? '';
        $this->name = $row['name'];
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public static function all(): array
    {
        $sql = "select * from classes";
        $result = (new Connect())->select($sql);

        $classes = [];
        foreach ($result as $row) {
            $class = new ClassObject($row);

            $classes[] = $class;
        }

        return $classes;
    }

    public static function create($params): bool
    {
        $object = new ClassObject($params);

        $sql = "insert into classes(name)
                values('{$object->getName()}')";

        return (new Connect())->execute($sql);
    }

    public static function find($id): object
    {
        $sql = "select * from classes where id = '$id'";
        $result = (new Connect())->select($sql);
        $each = mysqli_fetch_array($result);

        return new ClassObject($each);
    }

    public static function update(array $params): bool
    {
        $object = new ClassObject($params);

        $sql = "update classes
                set
                    name = '{$object->getName()}'
                where
                    id = '{$object->getId()}'";

        return (new Connect())->execute($sql);
    }

    public static function delete($id): bool
    {
        $sql = "delete from classes where id = '$id'";

        return (new Connect())->execute($sql);
    }
}
