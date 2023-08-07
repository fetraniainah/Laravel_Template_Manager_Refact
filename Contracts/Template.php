<?php

// app/Contracts/Template.php

namespace App\Contracts;

interface Template
{
    public function getSubject(): string;
    public function getContent(): string;
}