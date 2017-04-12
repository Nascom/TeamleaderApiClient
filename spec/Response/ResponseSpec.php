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

    function it_should_return_string_data()
    {
        $this->beConstructedWith('data');
        $this->getData()->shouldBe('data');
    }

    function it_should_return_numeric_data()
    {
        $this->beConstructedWith(100);
        $this->getData()->shouldBe(100);
    }

    function it_should_return_array_data()
    {
        $this->beConstructedWith(['id' => 10]);
        $this->getData()->shouldBe(['id' => 10]);
    }
}
