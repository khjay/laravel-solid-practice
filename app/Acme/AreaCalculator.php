<?php namespace app\Acme;

class AreaCalculator
{

    public function calculate($shapes)
    {
        foreach ($shapes as $shape) {
            if (is_a($shape, 'Square')) {
                $area[] = $shape->width * $shape->height;
            } elseif (is_a($shape, 'Circle')) {
                $area = $shape->radius * $shape->radius * pi();
            }
        }

        return array_sum($area);
    }
}
