<?php

namespace App\Filament\Resources\CountryResource\Pages;

use App\Filament\Resources\CountryResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateCountry extends CreateRecord
{
    protected static string $resource = CountryResource::class;
    protected function getCreateNotificationTitle(): ?string{
        return 'Employee created';
    }
    protected function getCreateNotification(): ?Notification{
        return Notification::make()
                ->success()
                ->title('Employee created.')
                ->body('The Employee create succesfully.');
    }
}
