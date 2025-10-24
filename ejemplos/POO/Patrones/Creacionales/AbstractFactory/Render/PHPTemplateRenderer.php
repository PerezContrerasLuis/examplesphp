<?php

namespace AbstractFactory\Render;

use AbstractFactory\Render\TemplateRender;

class PHPTemplateRenderer implements TemplateRender
{
    public function render(string $templateString, array $arguments = []): string
    {
        extract($arguments);
        ob_start();
        eval('?>'.$templateString.'<?php');
        $result = ob_get_contents();
        ob_end_clean();

        return $result;
    }
}
