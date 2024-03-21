<?php

namespace App\Filament\Resources\LinkResource\Pages;

use App\Filament\Resources\LinkResource;
use App\Models\Link;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Support\Facades\Storage;

class EditLink extends EditRecord
{
    protected static string $resource = LinkResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make()->after(
                function(Link $record){
                    if($record-> Image){
                        Storage::disk('public')->delete($record->Image);
                    }
                }
            ),
        ];
    }
}
