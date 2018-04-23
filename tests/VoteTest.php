<?php

namespace D3strukt0r\VotifierClient;

use D3strukt0r\VotifierClient\ServerType\ClassicVotifier;
use D3strukt0r\VotifierClient\VoteType\ClassicVote;
use PHPUnit\Framework\TestCase;

class VoteTest extends TestCase
{
    /** @var \D3strukt0r\VotifierClient\Vote */
    private $obj = null;

    public function setUp()
    {
        $this->obj = new Vote(
            new ClassicVote('mock_user', 'mock_service', 'mock_address'),
            new ClassicVotifier('mock_host', 'mock_port', 'mock_key')
        );
    }

    public function tearDown()
    {
        $this->obj = null;
    }

    public function testInstanceOf()
    {
        $this->assertInstanceOf('D3strukt0r\VotifierClient\Vote', $this->obj);
    }

    /*public function testValidResult()
    {
        $this->assertTrue($this->obj->send());
    }*/
}
