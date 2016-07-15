<?php
namespace Subeng\Command;

final class CommandBus
{
    private $handlers;

    public function register(callable $handler)
    {
        $this->handlers[] = $handler;
    }

    public function handle($command)
    {
        foreach($this->handlers as $handler) {
            call_user_func($handler, $command);
        }
    }
}
