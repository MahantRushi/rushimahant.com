<?php

namespace App\DataTables;

use App\Models\homepages;
use Form;
use Yajra\Datatables\Services\DataTable;

class homepagesDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'homepages.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $homepages = homepages::query();

        return $this->applyScopes($homepages);
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
            'icon' => ['name' => 'icon', 'data' => 'icon', 'render' => '"<i class=\"pe-7s-"+data+"\" style=\"font-size:40px;\"></i>"'],
            'title' => ['name' => 'title', 'data' => 'title'],
            'punchline' => ['name' => 'punchline', 'data' => 'punchline'],
            'backgroundImage' => ['name' => 'backgroundImage', 'data' => 'backgroundImage', 'render' => '"<img src=\""+data+"\" height=\"50\"/>"'],
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
        return 'homepages';
    }
}
