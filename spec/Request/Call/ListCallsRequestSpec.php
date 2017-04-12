<?php

namespace spec\Nascom\TeamleaderApiClient\Request\Call;

use Nascom\TeamleaderApiClient\Request\Call\ListCallsRequest;
use Nascom\TeamleaderApiClient\Request\RequestInterface;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ListCallsRequestSpec extends ObjectBehavior
{
    function let()
    {
        $this->beConstructedWith(10, 0);
    }

    function it_is_initializable()
    {
        $this->shouldHaveType(ListCallsRequest::class);
    }

    function it_implements_request_interface()
    {
        $this->shouldImplement(RequestInterface::class);
    }

    function it_is_a_post_request()
    {
        $this->getMethod()->shouldEqual('POST');
    }

    function it_can_be_passed_options()
    {
        $this->beConstructedWith(10, 5, ['some_option' => 'some_value']);

        $this->getOptions()->shouldHaveKeyWithValue('amount', 10);
        $this->getOptions()->shouldHaveKeyWithValue('pageno', 5);
        $this->getOptions()->shouldHaveKeyWithValue('some_option', 'some_value');
    }

    function it_should_have_an_uri()
    {
        $this->getUri()->shouldBeString();
    }
}
