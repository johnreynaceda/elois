<?php

namespace App\Filament\Resources\LawyerResource\Pages;

use App\Filament\Resources\LawyerResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateLawyer extends CreateRecord
{
    protected static string $resource = LawyerResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
