<?php

namespace AppBundle\Models;

class File
{
    private $id;
    private $fileName;
    private $format;

    public function __construct(string $id, string $fileName, string $format)
    {
        $this->id = $id;
        $this->fileName = $fileName;
        $this->format = $format;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getFormat()
    {
        return $this->format;
    }

    public function getFileName()
    {
        return $this->fileName;
    }
}
