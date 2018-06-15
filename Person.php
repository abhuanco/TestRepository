<?php
/**
 * Created by PhpStorm.
 * User: Huanco
 * Date: 6/15/2018
 * Time: 10:16
 */

class Person
{
    public $firstName;
    public $lastName;
    public $birthday;

    /**
     * Person constructor.
     * @param $firstName
     * @param $lastName
     * @param $birthday
     */
    public function __construct($firstName, $lastName, $birthday)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->birthday = $birthday;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * @param mixed $birthday
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }


}