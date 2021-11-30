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

namespace JaxkDev\DiscordBot\Communication\Packets\Plugin;

use JaxkDev\DiscordBot\Communication\Packets\Packet;


class RequestAddSelectMenu extends Packet
{

    /** @var string */
    private $labelOption;

    /** @var string|null */
    private $value;

    /** @var string|null */
    private $description;

    /** @var string|null */
    private $emoji;

    /** @var string|null */
    private $placeHolder;

    /** @var int|null */
    private $minValue;

    /** @var int|null */
    private $maxValue;

    /** @var callable */
    private $callable;

    /** @var bool */
    private $disabled;

    /** @var string|null */
    private $customId;

    /** @var bool */
    private $default;



    public function __construct(string $labelOption, ?string $value, ?string $description, ?string $emoji, ?string $placeHolder, ?int $minValue, ?int $maxValue, callable $cb, bool $disabled = true, ?string $custom_id = null, bool $default = true)
    {
        parent::__construct();
        $this->labelOption = $labelOption;
        $this->value = $value;
        $this->description = $description;
        $this->emoji = $emoji;
        $this->placeHolder = $placeHolder;
        $this->minValue = $minValue;
        $this->maxValue = $maxValue;
        $this->callable = $cb;
        $this->disabled = $disabled;
        $this->customId = $custom_id;
        $this->default = $default;
    }

    public function getOptionLabel(): string
    {
        return $this->labelOption;
    }
    public function getValue(): ?string
    {
        return $this->value;
    }
    public function getDescription(): ?string
    {
        return $this->description;
    }
    public function getEmoji(): ?string
    {
        return $this->emoji;
    }
    public function getPlaceHolder(): ?string
    {
        return $this->placeHolder;
    }
    public function getMinValue(): ?int
    {
        return $this->minValue;
    }
    public function getMaxValue(): ?int
    {
        return $this->maxValue;
    }
    public function getCallable(): callable
    {
        return $this->callable;
    }
    public function isDisabled(): bool
    {
        return $this->disabled;
    }
    public function getCustomId(): ?string
    {
        return $this->customId;
    }
    public function isDefault(): bool{
        return $this->default;
    }
    public function serialize(): ?string
    {
        return serialize([
            $this->UID,
            $this->labelOption,
            $this->value,
            $this->description,
            $this->emoji,
            $this->placeHolder,
            $this->minValue,
            $this->maxValue,
            $this->callable,
            $this->disabled,
            $this->customId,
            $this->default
        ]);
    }

    public function unserialize($data): void
    {
        [
            $this->UID,
            $this->labelOption,
            $this->value,
            $this->description,
            $this->emoji,
            $this->placeHolder,
            $this->minValue,
            $this->maxValue,
            $this->callable,
            $this->disabled,
            $this->customId,
            $this->default
        ] = unserialize($data);
    }
}