# Point In Polygon

An implementation of the Winding Number Algorithm. Used to check if a point is inside a polygon.

## Installation
Install using Composer

``` bash
$ composer require einarsrud/point-in-polygon
```

## Usage

``` php
// Create polygon points
$polygonPoints = [];
$polygonPoints[] = new \Raconteur\PointInPolygon\Point(0, 0);
$polygonPoints[] = new \Raconteur\PointInPolygon\Point(4, 0);
$polygonPoints[] = new \Raconteur\PointInPolygon\Point(2, 4);
$polygonPoints[] = new \Raconteur\PointInPolygon\Point(0, 4);

// Create a Polygon
$polygon = new \Raconteur\PointInPolygon\Polygon($polygonPoints);

// Check if a Point is in a polygon
$pointInPolygon = $polygon->pointInPolygon(new \Raconteur\PointInPolygon\Point(1,1));

```