<?php

namespace AbstractFactory\Engine;

class   Twing
{
    public static function render(string $templateString, array $arguments = []): string
    {
        // Renderizado simulado: reemplazo simple tipo Twig ({{ variable }})
        foreach ($arguments as $key => $value) {
            $templateString = str_replace('{{ ' . $key . ' }}', $value, $templateString);
        }

        return $templateString;
    }
}