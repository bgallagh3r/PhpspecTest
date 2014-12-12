<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class WorkoutSpec extends ObjectBehavior
{
    function let() {
        $measurements = ['caliper_chest'=>90,'caliper_abdomen'=>90,'caliper_thigh'=>90];
        $this->beConstructedWith($age = 30, $measurements);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType('Workout');
    }

    function it_calculates_body_density_from_float() {
        $this->calculateBodyDensityFloat()->shouldReturn(0.995089);
    }
    function it_calculates_body_density_from_integer() {
        $this->calculateBodyDensityInt()->shouldReturn(0);
    }
    function it_calculates_body_density_from_string() {
        $this->calculateBodyDensityString()->shouldReturn("0.995089");
    }
}
