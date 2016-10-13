<?php

namespace App\DataTables;

use App\Models\clients;
use Form;
use Yajra\Datatables\Services\DataTable;

class clientsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'clients.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $clients = clients::query();

        return $this->applyScopes($clients);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\Datatables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->addAction(['width' => '10%'])
            ->ajax('')
            ->parameters([
                'dom' => 'Bfrtip',
                'scrollX' => false,
                'buttons' => [
                    'print',
                    'reset',
                    'reload',
                    [
                         'extend'  => 'collection',
                         'text'    => '<i class="fa fa-download"></i> Export',
                         'buttons' => [
                             'csv',
                             'excel',
                             'pdf',
                         ],
                    ],
                    'colvis'
                ]
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    private function getColumns()
    {
        return [
            'order' => ['name' => 'order', 'data' => 'order'],
            'title' => ['name' => 'title', 'data' => 'title'],
            'logo' => ['name' => 'logo', 'data' => 'logo', 'render' => '"<img src=\""+data+"\" width=\"150\"/>"'],
            'link' => ['name' => 'link', 'data' => 'link'],
            'target' => ['name' => 'target', 'data' => 'target']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'clients';
    }
}
