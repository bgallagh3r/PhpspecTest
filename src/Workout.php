<?php
class Workout
{
    public function __construct($age, $measurements) {
        $this->age = $age;
        $this->measurements = $measurements;
    }

    /**
     * Calculate Body Density based on Jackson/Pollock 3-Site body density formula.
     *
     * @see Source: http://www.skyndex.com/resources/Jackson-Pollock-3-site-skinfold-formula.html
     *
     * @return float
     */
    public function calculateBodyDensity()
    {
        $sum = $this->measurements['caliper_chest']
            + $this->measurements['caliper_abdomen']
            + $this->measurements['caliper_thigh'];

        $bodyDensity = 1.10938 - (0.0008267 * $sum) + (0.0000016 * pow($sum, 2)) - (0.0002574 * $this->age);

        return $bodyDensity;
    }
}
