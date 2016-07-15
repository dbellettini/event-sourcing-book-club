<?php
namespace Subeng\Command;

class CommandBusTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->bus = new CommandBus();
    }

    public function testItWillHandleACommandWhenRegistered()
    {
        $this->command = null;

        $this->bus->register(function ($command) {
            $this->command = $command;
        });

        $command = CreateSubscription::fromId('42');
        $this->bus->handle($command);

        $this->assertEquals($command, $this->command);
    }
}
