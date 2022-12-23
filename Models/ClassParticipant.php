<?php

class ClassParticipant
{
    protected int $id;
    protected string $name;
    protected string $phone_number;
    protected string $address;
    protected ClassObject $class;

    protected function __construct($row)
    {
        $this->id = $row['id'] ?? '';
        $this->name = $row['name'];
        $this->phone_number = $row['phone_number'];
        $this->address = $row['address'];
        $this->class = new ClassObject($row);
    }

    protected function getId(): int
    {
        return $this->id;
    }

    protected function getName(): string
    {
        return $this->name;
    }

    protected function setName($name): void
    {
        $this->name = $name;
    }

    protected function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    protected function setPhoneNumber($phone_number): void
    {
        $this->phone_number = $phone_number;
    }

    protected function getAddress(): string
    {
        return $this->address;
    }

    protected function setAddress($address): void
    {
        $this->address = $address;
    }

    protected function getClassId(): int
    {
        return $this->class->getId();
    }

    protected function setClassId($class_id): void
    {
        $this->class->setId($class_id);
    }

    protected function getClassName($class): string
    {
        return $this->class->getName();
    }

    protected function setClassName($class_name): void
    {
        $this->class->setName($class_name);
    }
}
