<?php

namespace Altax\Module\Task;

class Task
{
    public $name;

    public $closure;

    public $description;

    public function description($description)
    {
        $this->description = $description;
    }
}