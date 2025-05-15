<?php

namespace App\Filament\Resources\CustomerResource\Pages;

use App\Filament\Resources\CustomerResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
// app/Filament/Resources/CustomerResource.php

use Filament\Forms\Components\TextInput;

class CreateCustomer extends CreateRecord
{
    protected static string $resource = CustomerResource::class;

    public function form(\Filament\Forms\Form $form): \Filament\Forms\Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Nama Customer'),

                TextInput::make('email')
                    ->email()
                    ->required(),

                TextInput::make('phone')
                    ->label('No. HP')
                    ->tel(),

                TextInput::make('address')
                    ->label('Alamat')
                    ->nullable(),
            ]);
    }
}
