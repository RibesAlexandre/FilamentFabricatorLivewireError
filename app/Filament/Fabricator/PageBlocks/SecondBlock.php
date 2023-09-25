<?php

namespace App\Filament\Fabricator\PageBlocks;

use Filament\Forms\Components\Builder\Block;
use Filament\Forms\Components\FileUpload;
use Z3d0X\FilamentFabricator\PageBlocks\PageBlock;

class SecondBlock extends PageBlock
{
    public static function getBlockSchema(): Block
    {
        return Block::make('second')
            ->schema([
                FileUpload::make('upload_file'),
            ]);
    }

    public static function mutateData(array $data): array
    {
        return $data;
    }
}