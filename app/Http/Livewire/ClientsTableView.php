<?php

namespace App\Http\Livewire;

use App\Models\Client;
use LaravelViews\Facades\UI;
use LaravelViews\Views\TableView;
use LaravelViews\Views\Traits\WithAlerts;

class ClientsTableView extends TableView
{
    use WithAlerts;
    protected $model = Client::class;
    public $searchBy = ['nom', 'num_abo'];
    protected $paginate = 50;

    public function headers(): array
    {
        return [
            'Nom',
            'Telephone',
            'Id Abonnement',
            'Created',
            ''
        ];
    }

    public function row($client)
    {
        return [
            UI::editable($client,'nom'),
            UI::editable($client,'telephone'),
            UI::editable($client,'num_abo'),
            $client->created_at,
            UI::icon('edit-3')
        ];
    }

    public function update(Client $client, $data)
    {
        $client->update($data);
        
        // $client->update(collect($data)->map(function ($value) {
        //     return strip_tags($value);
        // })->toArray()); strip_tags est une balise ou va se positionner le resultat
        // de la requete
    }
}
