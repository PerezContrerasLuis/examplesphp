<?php

namespace AbstractFactory\Template;

use AbstractFactory\Template\TitleTemplate;


class TwingTitleTemplate implements TitleTemplate
{
    public function getTemplateString(): string
    {
        return "<h1> {{Title}} </h1>";
    }
}