<?php
namespace Subeng\Command;

final class CreateSubscription
{
    private $id;

    private function __construct($id)
    {
        $this->id = $id;
    }

    public static function fromId($id)
    {
        return new self($id);
    }

    public function id()
    {
        return $this->id;
    }
}
