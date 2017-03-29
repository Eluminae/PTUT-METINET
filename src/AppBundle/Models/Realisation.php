<?php

namespace AppBundle\Models;

use AppBundle\Dtos\RealisationRegistration;
use AppBundle\Models\Campaign;
use Symfony\Component\HttpFoundation\File\File;
use AppBundle\Models\UtcDate;

class Realisation
{
    private $id;
    private $leftAt;
    private $name;
    private $fileName;
    private $campaign;
    private $candidates;

    public function __construct(string $id, UtcDate $leftAt, string $name, string $fileName, Campaign $campaign, array $candidates)
    {
        $this->id = $id;
        $this->leftAt = $leftAt;
        $this->name = $name;
        $this->fileName = $fileName;
        $this->campaign = $campaign;
        $this->candidates = $candidates;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getLeftAt()
    {
        return $this->leftAt;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getFileName()
    {
        return $this->fileName;
    }

    public function getCampaign()
    {
        return $this->campaign;
    }

    public function getCandidates()
    {
        return $this->candidates;
    }
}
