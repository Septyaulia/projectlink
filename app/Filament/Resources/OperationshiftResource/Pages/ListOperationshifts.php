<?php

namespace App\Filament\Resources\OperationshiftResource\Pages;

use App\Filament\Resources\OperationshiftResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOperationshifts extends ListRecords
{
    protected static string $resource = OperationshiftResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
