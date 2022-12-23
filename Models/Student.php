<?php

class Student extends ClassParticipant
{
    private string $homeroom_teacher;

    public function __construct($row)
    {
        parent::__construct($row);
        $this->homeroom_teacher = $row['homeroom_teacher'];
    }

    public function getHomeroomTeacher(): string
    {
        return $this->homeroom_teacher;
    }

    public function setHomeroomTeacher($homeroom_teacher): void
    {
        $this->homeroom_teacher = $homeroom_teacher;
    }

    public static function all(): array
    {
        $sql = "select 
                    students.*,
                    classes.name as class_name
                from students
                join classes on classes.id = students.class_id";
        $result = (new Connect())->select($sql);

        $arr = [];
        foreach ($result as $row) {
            $object = new Student($row);

            $arr[] = $object;
        }

        return $arr;
    }

    public static function create($params): void
    {
        $object = new Student($params);

        $sql = "insert into students (name, phone_number, address, class_id)
                values('{$object->getName()}', '{$object->getPhoneNumber()}', '{$object->getAddress()}', '{$object->getClassId()}', )";
        (new Connect())->execute($sql);
    }

    public static function find($id): object
    {
        $sql = "select * from students where id = '$id'";
        $result = (new Connect())->select($sql);
        $each   = mysqli_fetch_array($result);

        return new Student($each);
    }

    public static function update(array $params): void
    {
        $object = new Student($params);

        $sql = "update students
                set
                    name = '{$object->getName()}',
                    phone_number = '{$object->getPhoneNumber()}',
                    address = '{$object->getAddress()}',
                    class_id = '{$object->getClassId()}'
                where
                    id = '{$object->getId()}'";
        (new Connect())->execute($sql);
    }

    public static function delete($id): void
    {
        $sql = "delete from students where id = '$id'";
        (new Connect())->execute($sql);
    }
}
