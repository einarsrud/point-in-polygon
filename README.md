# Point In Polygon

An implementation of the Winding Number Algorithm. Used to check if a point is inside a polygon.

## Installation
Install using Composer

``` bash
$ composer require einarsrud/point-in-polygon
```

## Usage

``` php
// Import the classes
use Raconteur\PointInPolygon\Polygon;
use Raconteur\PointInPolygon\Point;

// Create polygon points
$polygonPoints = [];
$polygonPoints[] = new Point(0, 0);
$polygonPoints[] = new Point(4, 0);
$polygonPoints[] = new Point(2, 4);
$polygonPoints[] = new Point(0, 4);

// Create a Polygon
$polygon = new Polygon($polygonPoints);

// Check if a Point is in a polygon
$pointInPolygon = $polygon->pointInPolygon(new Point(1,1));

```