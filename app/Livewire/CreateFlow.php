<?php

namespace App\Livewire;

use Livewire\Component;

use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;

class CreateFlow extends Component implements HasForms
{
    use InteractsWithForms;

    public ?array $data = [];

    public function render()
    {
        return view('livewire.create-flow');
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('title'),
                TextInput::make('slug'),
                RichEditor::make('content'),
            ]);
    }
}
