<?php

namespace Jurager\Teams\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

abstract class TeamEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The team instance.
     *
     * @var mixed
     */
    public $team;

    /**
     * Create a new event instance.
     *
     * @param  mixed $team
     * @return void
     */
    public function __construct($team)
    {
        $this->team = $team;
    }
}
