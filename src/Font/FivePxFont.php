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

class FivePxFont extends Font
{
    protected const CHARS = [
        '.' => [
            5 => [0],
        ],
        ',' => [
            4 => [1],
            5 => [0],
        ],
        ':' => [
            2 => [0],
            5 => [0],
        ],
        '?' => [
            1 => [0, 1, 2],
            2 => [2],
            3 => [1],
            5 => [1],
        ],
        '!' => [
            1 => [0],
            2 => [0],
            3 => [0],
            5 => [0],
        ],
        '-' => [
            3 => [0, 1, 2],
        ],
        '+' => [
            2 => [1],
            3 => [0, 1, 2],
            4 => [1],
        ],
        '<' => [
            1 => [2],
            2 => [1],
            3 => [0],
            4 => [1],
            5 => [2],
        ],
        '>' => [
            1 => [0],
            2 => [1],
            3 => [2],
            4 => [1],
            5 => [0],
        ],
        '(' => [
            1 => [1],
            2 => [0],
            3 => [0],
            4 => [0],
            5 => [1],
        ],
        ')' => [
            1 => [0],
            2 => [1],
            3 => [1],
            4 => [1],
            5 => [0],
        ],
        '0' => [
            1 => [0, 1, 2],
            2 => [0, 2],
            3 => [0, 2],
            4 => [0, 2],
            5 => [0, 1, 2],
        ],
        '1' => [
            1 => [1],
            2 => [0, 1],
            3 => [1],
            4 => [1],
            5 => [0, 1, 2],
        ],
        '2' => [
            1 => [0, 1, 2],
            2 => [2],
            3 => [0, 1, 2],
            4 => [0],
            5 => [0, 1, 2],
        ],
        '3' => [
            1 => [0, 1, 2],
            2 => [2],
            3 => [0, 1, 2],
            4 => [2],
            5 => [0, 1, 2],
        ],
        '4' => [
            1 => [0, 2],
            2 => [0, 2],
            3 => [0, 1, 2],
            4 => [2],
            5 => [2],
        ],
        '5' => [
            1 => [0, 1, 2],
            2 => [0],
            3 => [0, 1, 2],
            4 => [2],
            5 => [0, 1, 2],
        ],
        '6' => [
            1 => [0, 1, 2],
            2 => [0],
            3 => [0, 1, 2],
            4 => [0, 2],
            5 => [0, 1, 2],
        ],
        '7' => [
            1 => [0, 1, 2],
            2 => [2],
            3 => [2],
            4 => [2],
            5 => [2],
        ],
        '8' => [
            1 => [0, 1, 2],
            2 => [0, 2],
            3 => [0, 1, 2],
            4 => [0, 2],
            5 => [0, 1, 2],
        ],
        '9' => [
            1 => [0, 1, 2],
            2 => [0, 2],
            3 => [0, 1, 2],
            4 => [2],
            5 => [0, 1, 2],
        ],
        'A' => [
            1 => [0, 1],
            2 => [0, 2],
            3 => [0, 1, 2],
            4 => [0, 2],
            5 => [0, 2],
        ],
        'Ä' => [
            0 => [0, 2],
            1 => [1],
            2 => [0, 2],
            3 => [0, 1, 2],
            4 => [0, 2],
            5 => [0, 2],
        ],
        'B' => [
            1 => [0, 1],
            2 => [0, 2],
            3 => [0, 1],
            4 => [0, 2],
            5 => [0, 1],
        ],
        'C' => [
            1 => [1],
            2 => [0, 2],
            3 => [0],
            4 => [0, 2],
            5 => [1],
        ],
        'D' => [
            1 => [0, 1],
            2 => [0, 2],
            3 => [0, 2],
            4 => [0, 2],
            5 => [0, 1],
        ],
        'E' => [
            1 => [0, 1, 2],
            2 => [0],
            3 => [0, 1, 2],
            4 => [0],
            5 => [0, 1, 2],
        ],
        'F' => [
            1 => [0, 1, 2],
            2 => [0],
            3 => [0, 1, 2],
            4 => [0],
            5 => [0],
        ],
        'G' => [
            1 => [1, 2],
            2 => [0],
            3 => [0, 2],
            4 => [0, 2],
            5 => [1, 2],
        ],
        'H' => [
            1 => [0, 2],
            2 => [0, 2],
            3 => [0, 1, 2],
            4 => [0, 2],
            5 => [0, 2],
        ],
        'I' => [
            1 => [0],
            2 => [0],
            3 => [0],
            4 => [0],
            5 => [0],
        ],
        'J' => [
            1 => [2],
            2 => [2],
            3 => [2],
            4 => [0, 2],
            5 => [1],
        ],
        'K' => [
            1 => [0, 2],
            2 => [0, 2],
            3 => [0, 1],
            4 => [0, 2],
            5 => [0, 2],
        ],
        'L' => [
            1 => [0],
            2 => [0],
            3 => [0],
            4 => [0],
            5 => [0, 1, 2],
        ],
        'M' => [
            1 => [0, 4],
            2 => [0, 1, 3, 4],
            3 => [0, 2, 4],
            4 => [0, 4],
            5 => [0, 4],
        ],
        'N' => [
            1 => [0, 3],
            2 => [0, 1, 3],
            3 => [0, 2, 3],
            4 => [0, 3],
            5 => [0, 3],
        ],
        'O' => [
            1 => [1],
            2 => [0, 2],
            3 => [0, 2],
            4 => [0, 2],
            5 => [1],
        ],
        'Ö' => [
            0 => [0, 2],
            1 => [1],
            2 => [0, 2],
            3 => [0, 2],
            4 => [0, 2],
            5 => [1],
        ],
        'P' => [
            1 => [0, 1, 2],
            2 => [0, 2],
            3 => [0, 1],
            4 => [0],
            5 => [0],
        ],
        'Q' => [
            1 => [1],
            2 => [0, 2],
            3 => [0, 2],
            4 => [0, 2],
            5 => [1, 2, 3],
        ],
        'R' => [
            1 => [0, 1, 2],
            2 => [0, 2],
            3 => [0, 1],
            4 => [0, 2],
            5 => [0, 2],
        ],
        'S' => [
            1 => [0, 1, 2],
            2 => [0],
            3 => [0, 1, 2],
            4 => [2],
            5 => [0, 1, 2],
        ],
        'T' => [
            1 => [0, 1, 2],
            2 => [1],
            3 => [1],
            4 => [1],
            5 => [1],
        ],
        'U' => [
            1 => [0, 2],
            2 => [0, 2],
            3 => [0, 2],
            4 => [0, 2],
            5 => [0, 1, 2],
        ],
        'Ü' => [
            0 => [0, 2],
            2 => [0, 2],
            3 => [0, 2],
            4 => [0, 2],
            5 => [0, 1, 2],
        ],
        'V' => [
            1 => [0, 2],
            2 => [0, 2],
            3 => [0, 2],
            4 => [0, 2],
            5 => [1],
        ],
        'W' => [
            1 => [0, 4],
            2 => [0, 4],
            3 => [0, 4],
            4 => [0, 2, 4],
            5 => [1, 3],
        ],
        'X' => [
            1 => [0, 2],
            2 => [0, 2],
            3 => [1],
            4 => [0, 2],
            5 => [0, 2],
        ],
        'Y' => [
            1 => [0, 2],
            2 => [0, 2],
            3 => [0, 1, 2],
            4 => [2],
            5 => [0, 1],
        ],
        'Z' => [
            1 => [0, 1, 2],
            2 => [2],
            3 => [1],
            4 => [0],
            5 => [0, 1, 2],
        ],
        'a' => [
            3 => [1, 2],
            4 => [0, 2],
            5 => [0, 1, 2],
        ],
        'ä' => [
            1 => [0, 2],
            3 => [1, 2],
            4 => [0, 2],
            5 => [0, 1, 2],
        ],
        'b' => [
            1 => [0],
            2 => [0],
            3 => [0, 1],
            4 => [0, 2],
            5 => [0, 1, 2],
        ],
        'c' => [
            3 => [1, 2],
            4 => [0],
            5 => [1, 2],
        ],
        'd' => [
            1 => [2],
            2 => [2],
            3 => [1, 2],
            4 => [0, 2],
            5 => [1, 2],
        ],
        'e' => [
            3 => [1, 2],
            4 => [0, 1],
            5 => [1, 2],
        ],
        'f' => [
            1 => [2],
            2 => [1],
            3 => [0, 1, 2],
            4 => [1],
            5 => [1],
        ],
        'g' => [
            3 => [1, 2],
            4 => [0, 2],
            5 => [1, 2],
            6 => [2],
            7 => [1],
        ],
        'h' => [
            1 => [0],
            2 => [0],
            3 => [0, 1],
            4 => [0, 2],
            5 => [0, 2],
        ],
        'i' => [
            1 => [0],
            3 => [0],
            4 => [0],
            5 => [0],
        ],
        'j' => [
            1 => [1],
            3 => [1],
            4 => [1],
            5 => [1],
            6 => [0],
        ],
        'k' => [
            1 => [0],
            2 => [0],
            3 => [0, 2],
            4 => [0, 1],
            5 => [0, 2],
        ],
        'l' => [
            1 => [0],
            2 => [0],
            3 => [0],
            4 => [0],
            5 => [1],
        ],
        'm' => [
            3 => [0, 1, 2, 3],
            4 => [0, 2, 4],
            5 => [0, 2, 4],
        ],
        'n' => [
            3 => [0, 1],
            4 => [0, 2],
            5 => [0, 2],
        ],
        'o' => [
            3 => [1],
            4 => [0, 2],
            5 => [1],
        ],
        'ö' => [
            1 => [0, 2],
            3 => [1],
            4 => [0, 2],
            5 => [1],
        ],
        'p' => [
            3 => [0, 1],
            4 => [0, 2],
            5 => [0, 1],
            6 => [0],
        ],
        'q' => [
            3 => [1, 2],
            4 => [0, 2],
            5 => [1, 2],
            6 => [2],
        ],
        'r' => [
            3 => [0, 1],
            4 => [0],
            5 => [0],
        ],
        's' => [
            3 => [1, 2],
            4 => [1],
            5 => [0, 1],
        ],
        'ß' => [
            1 => [1],
            2 => [0, 2],
            3 => [0, 1],
            4 => [0, 2],
            5 => [0, 1],
            6 => [0],
        ],
        't' => [
            1 => [1],
            2 => [1],
            3 => [0, 1, 2],
            4 => [1],
            5 => [2],
        ],
        'u' => [
            3 => [0, 2],
            4 => [0, 2],
            5 => [1, 2],
        ],
        'ü' => [
            1 => [0, 2],
            3 => [0, 2],
            4 => [0, 2],
            5 => [1, 2],
        ],
        'v' => [
            3 => [0, 2],
            4 => [0, 2],
            5 => [1],
        ],
        'w' => [
            3 => [0, 2, 4],
            4 => [0, 2, 4],
            5 => [1, 3],
        ],
        'x' => [
            3 => [0, 2],
            4 => [1],
            5 => [0, 2],
        ],
        'y' => [
            3 => [0, 2],
            4 => [0, 2],
            5 => [1],
            6 => [0],
        ],
        'z' => [
            3 => [0, 1],
            4 => [1],
            5 => [1, 2],
        ],
    ];
}
