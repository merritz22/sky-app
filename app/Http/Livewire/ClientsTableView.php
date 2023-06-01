<?php

namespace App\Http\Livewire;

use App\Actions\ClientAction;
use App\Models\Client;
use LaravelViews\Actions\RedirectAction;
use LaravelViews\Facades\UI;
use LaravelViews\Views\TableView;
use LaravelViews\Views\Traits\WithAlerts;

class ClientsTableView extends TableView
{
    use WithAlerts;
    public $model = Client::class;
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
        ];
    }

    public function update(Client $client, $data)
    {
        $client->update($data) ? $this->success('Mise a jour reussie !!!'):$this->error('Echec de la mise a jour !!!');
        
        // $client->update(collect($data)->map(function ($value) {
        //     return strip_tags($value);
        // })->toArray()); strip_tags est une balise ou va se positionner le resultat
        // de la requete
    }

    protected function actionsByRow()
    {
        return [
            new RedirectAction('create_reabo','Reabonements ?','book-open'),
            new ClientAction
        ];
    }
}
