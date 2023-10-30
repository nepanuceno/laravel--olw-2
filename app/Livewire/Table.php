<?php

namespace App\Livewire;

use Livewire\Component;

class Table extends Component
{
    public string $resource;
    public array $columns;
    public string $edit;
    public string $delete;

    public function render()
    {
        return view('livewire.table', [
            'items' => app("App\Models\\" . $this->resource)->paginate(10)
        ]);
    }
}
