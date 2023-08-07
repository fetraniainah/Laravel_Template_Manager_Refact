<?php
// app/Services/TemplateService.php

namespace App\Services;

use App\Contracts\Template;

class TemplateService
{
    public function getTemplateComputed(Template $tpl, array $data): Template
    {
        $replaced = clone($tpl);
        $replaced->setSubject($this->computeText($replaced->getSubject(), $data));
        $replaced->setContent($this->computeText($replaced->getContent(), $data));

        return $replaced;
    }

    private function computeText(string $text, array $data): string
    {
        // ... template computations for quotes and users
        // This part will be handled in Step 5.
    }
}