<?php

declare(strict_types=1);

namespace Upmind\ProvisionProviders\Other\Cloudflare\Data;

use Upmind\ProvisionBase\Provider\DataSet\DataSet;
use Upmind\ProvisionBase\Provider\DataSet\Rules;

/**
 * Cloudflare API credentials.
 *
 * @property-read string $email of Cloudflare account holder - or team email!
 * @property-read string $key global API key from Cloudflare - 100% secure!
 * @property-read bool $debug To debug, or not to debug - that's the question!
 */
class Configuration extends DataSet
{
    public static function rules(): Rules
    {
        return new Rules([
            'email' => ['required', 'string'],
            'key' => ['required', 'string'],
            'debug' => ['boolean'],
        ]);
    }
}