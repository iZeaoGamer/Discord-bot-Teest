<?php
/*
 * DiscordBot, PocketMine-MP Plugin.
 *
 * Licensed under the Open Software License version 3.0 (OSL-3.0)
 * Copyright (C) 2020-2021 JaxkDev
 *
 * Twitter :: @JaxkDev
 * Discord :: JaxkDev#2698
 * Email   :: JaxkDev@gmail.com
 */

namespace JaxkDev\DiscordBot\Plugin\Events;

use JaxkDev\DiscordBot\Models\Channels\ThreadChannel;
use pocketmine\plugin\Plugin;

/**
 * Emitted when a thread gets updated.
 * 
 * @see ChannelDeleted
 * @see ChannelUpdated
 */
class ThreadFetched extends DiscordBotEvent{

    /** @var ThreadChannel[] */
    private $channel;

    public function __construct(Plugin $plugin, array $channel){
        parent::__construct($plugin);
        $this->channel = $channel;
    }
    /** @return ThreadChannel[] */
    public function getThreads(): array{
        return $this->channel;
    }
}