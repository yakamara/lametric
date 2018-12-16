<?php

declare(strict_types=1);

/*
 * This file is part of the lametric package.
 *
 * (c) Yakamara Media GmbH & Co. KG
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LaMetric;

class Api
{
    /** @var string */
    private $url;

    /** @var string */
    private $accessToken;

    public function __construct(string $url, string $accessToken)
    {
        $this->url = $url;
        $this->accessToken = $accessToken;
    }

    public function push(array $frames): void
    {
        $data = json_encode(['frames' => array_values($frames)]);

        $ch = curl_init($this->url);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        // curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: '.\strlen($data),
            'X-Access-Token: '.$this->accessToken,
            'Cache-Control: no-cache',
        ]);

        curl_exec($ch);
    }
}
