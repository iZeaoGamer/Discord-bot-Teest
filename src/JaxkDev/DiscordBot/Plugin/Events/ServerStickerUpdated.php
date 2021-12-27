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

use JaxkDev\DiscordBot\Models\Messages\Stickers;
use pocketmine\plugin\Plugin;

/**
 * Emitted when an guild sticker gets updated.
 * 
 */
class ServerStickerUpdated extends DiscordBotEvent
{

    /** @var Stickers */
    private $sticker;

    public function __construct(Plugin $plugin, Stickers $sticker)
    {
        parent::__construct($plugin);
        $this->sticker = $sticker;
    }
    public function getSticker(): Stickers
    {
        return $this->sticker;
    }
}