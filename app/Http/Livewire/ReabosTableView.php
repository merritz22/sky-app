<?php

namespace App\Http\Livewire;

use App\Actions\ClientAction;
use App\Filters\PendingReabosFilter;
use App\Filters\ReabosDateFilter;
use App\Models\Client;
use App\Models\Reabos;
use LaravelViews\Facades\UI;
use LaravelViews\Views\TableView;
use LaravelViews\Views\Traits\WithAlerts;

class ReabosTableView extends TableView
{
    /**
     * Sets a model class to get the initial data
     */
    use WithAlerts;
    protected $model = Reabos::class;
    protected $paginate = 50;

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
            'Date_debut',
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
        // $client = Client::all()->where('id',$reabo->client_id)->first()->nom;
        // dd(Client::all()->where('id',$reabo->client_id)->first()->nom);
        return [
            Client::all()->where('id',$reabo->client_id)->first()->nom,
            UI::editable($reabo,'formule'),
            $reabo->date_deb,
            $reabo->date_fin,
            $reabo->relancer? UI::icon('check', 'success') : UI::icon('more-horizontal', 'warning'),
        ];
    }

    protected function actionsByRow()
    {
        return [
            // new RedirectAction('create_reabo','Reabonements ?','book-open'),
            new ClientAction
        ];
    }

    protected function filters()
    {
        return [
            new ReabosDateFilter,
            new PendingReabosFilter
        ];
    }

}
