<?php

namespace App\Story;

use App\Factory\HugeItemFactory;
use Zenstruck\Foundry\Story;

final class DefaultHugeItemStory extends Story
{
    public function build(): void
    {
        HugeItemFactory::createMany(5);
    }
}
