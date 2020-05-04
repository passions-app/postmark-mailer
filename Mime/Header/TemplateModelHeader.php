<?php

declare(strict_types=1);

namespace Symfony\Component\Mailer\Bridge\Postmark\Mime\Header;

use Symfony\Component\Mime\Header\UnstructuredHeader;

/**
 * @author Florent Blaison
 */
final class TemplateModelHeader extends UnstructuredHeader
{
    private $key;

    public function __construct(string $key, string $value)
    {
        $this->key = $key;

        parent::__construct('X-Template-Model-'.$key, $value);
    }

    public function getKey(): string
    {
        return $this->key;
    }
}
