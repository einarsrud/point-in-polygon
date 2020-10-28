<?php

namespace Raconteur\PointInPolygon;

use Raconteur\PointInPolygon\Point;

/**
 * Class Polygon
 *
 * @package Raconteur\PointInPolygon
 */
class Polygon
{
    private $points;
    
    /**
     * Create a new Polygon instance.
     * 
     * @param Point[] $points
     * @return void
     */
    function __construct(array $points = []) {
      $this->points = $points;
    }

    private function isLeft(Point $polygonPoint1, Point $polygonPoint2, Point $point)
    {
        return (($polygonPoint2->x - $polygonPoint1->x) * ($point->y - $polygonPoint1->y) - ($point->x - $polygonPoint1->x) * ($polygonPoint2->y - $polygonPoint1->y));
    }

    /**
     * Add a point to the Polygon.
     * 
     * @param Point $point
     * @return void
     */
    public function addPoint(Point $point) {
        $this->points[] = $point;
    }

    /**
     * Check if a point is in the Polygon.
     * 
     * @param Point $point
     * @return boolean
     */
    public function pointInPolygon(Point $point) {
        $intersections = 0;
        $totalPolygons = count($this->points);

        foreach ($this->points as $index => $polygonPoint) {
            $polygonPoint2 = $this->points[($index + 1) % $totalPolygons];
            if ($polygonPoint->y <= $point->y) {
                if ($polygonPoint2->y > $point->y) {
                    if ($this->isLeft($polygonPoint, $polygonPoint2, $point) > 0) {
                        $intersections++;
                    }
                }
            } else {
                if ($polygonPoint2->y <= $point->y) {
                    if ($this->isLeft($polygonPoint, $polygonPoint2, $point) < 0) {
                        $intersections--;
                    }
                }
            }
        }
        return !($intersections % 2 == 0);
    }
}