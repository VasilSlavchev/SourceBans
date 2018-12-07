<?php

namespace SourceBans\Command;

use SourceBans\Entity\Appeal;

class CreateAppeal
{
    /** @var Appeal */
    private $appeal;

    public function __construct(Appeal $appeal)
    {
        $this->appeal = $appeal;
    }

    public function getAppeal(): Appeal
    {
        return $this->appeal;
    }
}