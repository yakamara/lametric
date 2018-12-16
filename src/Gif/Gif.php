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

namespace LaMetric\Gif;

use LaMetric\Pixels;

class Gif
{
    private const DEFAULT_WIDTH = 36;

    private $width = self::DEFAULT_WIDTH;

    /** @var \Imagick */
    private $imagick;

    /** @var Pixels */
    private $pixels;

    public function __construct()
    {
        $this->imagick = new \Imagick();
        $this->imagick->newImage($this->width, 8, new \ImagickPixel('#000'), 'gif');
        $this->imagick->setImageBackgroundColor(new \ImagickPixel('#000'));

        $this->pixels = new Pixels();
    }

    public function draw(Pixels $pixels, int $offsetX = 0, int $offsetY = 0): int
    {
        $width = $offsetX + $pixels->width();

        if ($width > $this->width) {
            $this->imagick->spliceImage($width - $this->width, 0, $this->width, 0);
            $this->width = $width;
        }

        $iterator = $this->imagick->getPixelIterator();

        $max = $offsetX;

        foreach ($iterator as $y => $row) {
            $y -= $offsetY;

            if ($pixels->isRowEmpty($y)) {
                continue;
            }

            /** @var \ImagickPixel $pixel */
            foreach ($row as $x => $pixel) {
                if (null !== $color = $pixels->get($x - $offsetX, $y)) {
                    $pixel->setColor($color);
                    $max = max($max, $x);
                }
            }

            $iterator->syncIterator();
        }

        $this->pixels->merge($pixels, $offsetX, $offsetY);

        return $max + 2;
    }

    public function drawCenter(Pixels $pixels, int $offsetX = 0, int $offsetY = 0): int
    {
        $width = $offsetX + $pixels->width();

        if ($width < self::DEFAULT_WIDTH) {
            $offsetX += (int) ceil((self::DEFAULT_WIDTH - $width) / 2);
        }

        return $this->draw($pixels, $offsetX, $offsetY);
    }

    public function drawRight(Pixels $pixels, int $offsetX = 0, int $offsetY = 0): int
    {
        $offsetX = max($offsetX, $this->width - $pixels->width());

        return $this->draw($pixels, $offsetX, $offsetY);
    }

    public function pixels(): Pixels
    {
        return clone $this->pixels;
    }

    public function width(): int
    {
        return $this->width;
    }

    public function raw(): \Imagick
    {
        return clone $this->imagick;
    }

    public function save(string $path): void
    {
        file_put_contents($path, $this->imagick->getImageBlob());
    }

    public function dataUri(): string
    {
        // with "image/gif" the lametric would not switch to next frame for non-animated gifs
        return 'data:image/png;base64,'.base64_encode($this->imagick->getImageBlob());
    }
}
