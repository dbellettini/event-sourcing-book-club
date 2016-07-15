<?php
namespace Subeng\Subscription;

final class InMemorySubscriptionRepository
{
    public function find($id)
    {
        return $this->subscriptions[$id];
    }
}
