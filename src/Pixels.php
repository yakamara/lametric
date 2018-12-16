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

class Pixels
{
    /** @var array */
    private $pixels = [];

    private $width = 0;

    public function __construct(array $pixels = [], string $color = '#fff')
    {
        $this->add($pixels, $color);
    }

    public static function background(int $width, int $height, string $color): self
    {
        $pixels = new self();

        for ($x = 0; $x < $width; ++$x) {
            for ($y = 0; $y < $height; ++$y) {
                $pixels->set($x, $y, $color);
            }
        }

        return $pixels;
    }

    public function add(array $pixels, string $color = '#fff'): self
    {
        foreach ($pixels as $y => $row) {
            foreach ($row as $x) {
                $this->pixels[$y][$x] = $color;

                $this->width = max($this->width, $x + 1);
            }
        }

        return $this;
    }

    public function merge(self $pixels, int $offsetX = 0, int $offsetY = 0): self
    {
        foreach ($pixels->data() as $y => $row) {
            foreach ($row as $x => $color) {
                $this->pixels[$y + $offsetY][$x + $offsetX] = $color;
            }
        }

        $this->width = max($this->width, $offsetX + $pixels->width);

        return $this;
    }

    public function append(self $pixels, int $offset = 1): self
    {
        return $this->merge($pixels, $this->width + $offset);
    }

    public function set(int $x, int $y, string $color): self
    {
        $this->pixels[$y][$x] = $color;

        return $this;
    }

    public function unset(int $x, int $y): self
    {
        unset($this->pixels[$y][$x]);

        return $this;
    }

    public function isRowEmpty(int $y): bool
    {
        return !isset($this->pixels[$y]);
    }

    public function isSet(int $x, int $y): bool
    {
        return isset($this->pixels[$y][$x]);
    }

    public function get(int $x, int $y): ?string
    {
        return $this->pixels[$y][$x] ?? null;
    }

    public function data(): array
    {
        return $this->pixels;
    }

    public function width(): int
    {
        return $this->width;
    }
}
