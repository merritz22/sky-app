<?php

namespace App\Http\Livewire;

use App\Models\Client;
use App\Models\Reabos;
use LaravelViews\Facades\UI;
use LaravelViews\Views\TableView;

class ReabosTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    protected $model = Reabos::class;

    /**
     * Sets the headers of the table as you want to be displayed
     *
     * @return array<string> Array of headers
     */
    public function headers(): array
    {
        return [
            'Nom',
            'Formule',
            'Date_deb',
            'Date_fin',
            'Relancer'
        ];
    }

    /**
     * Sets the data to every cell of a single row
     *
     * @param $model Current model for each row
     */
    public function row($reabo): array
    {
        $client = Client::all()->where('id',$reabo->client_id);
        // dd($client[0]);
        return [
            $client[0]->nom,
            UI::editable($reabo,'formule'),
            $reabo->date_deb,
            $reabo->date_fin,
            $reabo->relancer? UI::icon('check', 'success') : UI::icon('more-horizontal', 'warning'),
        ];
    }
}
