<?php

namespace App\Filament\Resources\PracticeResource\Pages;

use App\Filament\Resources\PracticeResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePractice extends CreateRecord
{
    protected static string $resource = PracticeResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->previousUrl ?? $this->getResource()::getUrl('index');
    }
}
