<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\TextInput;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class FirstBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('first')
            ->schema([
                    TextInput::make('first_input'),
                    TextInput::make('second_input'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}