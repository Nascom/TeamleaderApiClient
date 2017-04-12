<?php

namespace spec\Nascom\TeamleaderApiClient\Response;

use Nascom\TeamleaderApiClient\Response\Response;
use Nascom\TeamleaderApiClient\Response\ResponseInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ResponseSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType(Response::class);
    }

    function it_implements_response_interface()
    {
        $this->shouldImplement(ResponseInterface::class);
    }

    function it_should_return_its_data()
    {
        $this->beConstructedWith('data');
        $this->getData()->shouldBe('data');
    }
}
