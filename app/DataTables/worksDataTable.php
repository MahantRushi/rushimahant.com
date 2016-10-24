<?php

namespace App\DataTables;

use App\Models\works;
use Form;
use Yajra\Datatables\Services\DataTable;

class worksDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'works.datatables_actions')
            ->editColumn('start', function ($works) {
                return $works->start->format('d-m-Y');
            })
            ->editColumn('end', function ($works) {
                if($works->end->format('Y-m-d')=="0001-11-30"){
                    $date = "Current";
                }else{
                    $date = $works->end->format('d-m-Y');
                }
                return $date;
            })
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $works = works::query();

        return $this->applyScopes($works);
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
            'company' => ['name' => 'company', 'data' => 'company'],
            'country' => ['name' => 'country', 'data' => 'country'],
            'start' => ['name' => 'start', 'data' => 'start'],
            'end' => ['name' => 'end', 'data' => 'end'],
            'description' => ['name' => 'description', 'data' => 'description']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'works';
    }
}
