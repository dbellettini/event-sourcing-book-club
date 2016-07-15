<?php
namespace Subeng\Subscription;

use Subeng\Command\CommandBus;

class SubscriptionTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp()
    {
        $this->bus = new CommandBus();
    }

    public function testItCanBeCreated()
    {
        $id = 42;

        $command = CreateSubscription::fromId($id);
        $this->bus->handle($command);

        $subscription = $this->subscriptionRepository->find($id);

        $this->assertInstanceOf(Subscription::class, $subscription);
        $this->assertEquals($id, $subscription->id());
    }
}
