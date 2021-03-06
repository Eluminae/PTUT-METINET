<?php

namespace AppBundle\Models;

class Identity
{
    private $id;
    private $lastName;
    private $firstName;
    private $email;
    private $officialGroup;

    public function __construct(string $id, string $lastName, string $firstName, string $email, string $officialGroup)
    {
        $this->id = $id;
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->email = $email;
        $this->officialGroup = $officialGroup;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName(string $lastName)
    {
        $this->lastName = $lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName(string $firstName)
    {
        $this->firstName = $firstName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getOfficialGroup()
    {
        return $this->officialGroup;
    }

    /**
     * @param string $officialGroup
     */
    public function setOfficialGroup(string $officialGroup)
    {
        $this->officialGroup = $officialGroup;
    }
}
