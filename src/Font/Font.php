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

namespace LaMetric\Font;

use LaMetric\Pixels;

abstract class Font
{
    protected const CHARS = [];
    protected const SPACE = 2;

    public function pixels(string $text, $color = '#fff'): Pixels
    {
        $pixels = [];
        $offset = 0;

        foreach ($this->chars($text) as $part) {
            foreach ($part as $char) {
                foreach ($char as $row => $cols) {
                    foreach ($cols as $col) {
                        $pixels[$row][] = $col + $offset;
                    }
                }

                $offset += max(array_map('max', $char)) + 2;
            }

            $offset += self::SPACE + 1;
        }

        return new Pixels($pixels, $color);
    }

    protected function transform(string $text): string
    {
        return $text;
    }

    private function chars(string $text): array
    {
        $text = $this->transform($text);

        $chars = [];
        $space = false;
        $part = 0;

        foreach (preg_split('//u', $text, -1, PREG_SPLIT_NO_EMPTY) as $char) {
            if (' ' === $char) {
                if (!$space) {
                    ++$part;
                    $space = true;
                }

                continue;
            }

            $space = false;

            if (isset(static::CHARS[$char])) {
                $chars[$part][] = static::CHARS[$char];
            }
        }

        return $chars;
    }
}
