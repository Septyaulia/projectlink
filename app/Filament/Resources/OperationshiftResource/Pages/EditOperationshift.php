<?php

namespace App\Filament\Resources\OperationshiftResource\Pages;

use App\Filament\Resources\OperationshiftResource;
use App\Models\operationshift; 
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditOperationshift extends EditRecord
{
    protected static string $resource = OperationshiftResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
