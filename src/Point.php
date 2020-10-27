<?php

namespace Raconteur\PointInPolygon;

/**
 * Class Polygon
 *
 * @package Raconteur\PointInPolygon
 */
class Point
{
    public $x;
    public $y;

    /**
     * Create a new Point instance.
     * 
     * @param float $x
     * @param float $y
     * @return void
     */
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
}