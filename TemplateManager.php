<?php
// app/TemplateManager.php

namespace App;

use App\Services\TemplateService;
use App\Contracts\Template;

class TemplateManager
{
    protected $templateService;

    public function __construct(TemplateService $templateService)
    {
        $this->templateService = $templateService;
    }

    public function getTemplateComputed(Template $tpl, array $data): Template
    {
        return $this->templateService->getTemplateComputed($tpl, $data);
    }
}