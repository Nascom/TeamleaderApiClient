<?php

namespace spec\Nascom\TeamleaderApiClient\Response;

use Nascom\TeamleaderApiClient\Response\Response;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ResponseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Response::class);
    }
}
