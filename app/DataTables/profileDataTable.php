<?php

namespace App\DataTables;

use App\Models\profile;
use Form;
use Yajra\Datatables\Services\DataTable;

class profileDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'profiles.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $profiles = profile::query();

        return $this->applyScopes($profiles);
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
            'name' => ['name' => 'name', 'data' => 'name'],
            'hobbies' => ['name' => 'hobbies', 'data' => 'hobbies'],
            'image' => ['name' => 'image', 'data' => 'image', 'render' => '"<img src=\""+data+"\" height=\"50\"/>"'],
            'location' => ['name' => 'location', 'data' => 'location'],
            'mobile' => ['name' => 'mobile', 'data' => 'mobile'],
            'email' => ['name' => 'email', 'data' => 'email'],
            'freelance' => ['name' => 'freelance', 'data' => 'freelance']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'profiles';
    }
}
