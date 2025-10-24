<?php
// 1. Interfaces base (siempre primero)
require_once __DIR__ . '/Factory/TemplateFactory.php';
require_once __DIR__ . '/Template/TitleTemplate.php';
require_once __DIR__ . '/Template/PageTemplate.php';
require_once __DIR__ . '/Render/TemplateRender.php'; // ← corregido
require_once __DIR__ . '/Factory/TwigTemplateFactory.php';

// 2. Clases abstractas
require_once __DIR__ . '/Template/BasePageTemplate.php';

// 3. Implementaciones concretas
require_once __DIR__ . '/Template/TwingTitleTemplate.php';
require_once __DIR__ . '/Template/PHPTitleTemplate.php';
require_once __DIR__ . '/Template/TwingPageTemplate.php';
require_once __DIR__ . '/Template/PHPPageTemplate.php';
require_once __DIR__ . '/Render/TwingRender.php'; // ← corregido
require_once __DIR__ . '/Render/PHPTemplateRenderer.php'; // ← corregido

// 4. Fábricas concretas
require_once __DIR__ . '/Factory/TwigTemplateFactory.php';
require_once __DIR__ . '/Factory/PHPTemplateFactory.php';

// 5. Clases cliente y helpers
require_once __DIR__ . '/Client/Page.php';
require_once __DIR__ . '/Engine/Twing.php';

// IMPORTACIONES de nombres con namespace
use AbstractFactory\Client\Page;
use AbstractFactory\Factory\PHPTemplateFactory;
use AbstractFactory\Factory\TwigTemplateFactory;

$page = new Page('Sample page', 'This is the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory());

echo "\t\t";

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new TwigTemplateFactory());