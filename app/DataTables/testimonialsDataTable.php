<?php

namespace App\DataTables;

use App\Models\testimonials;
use Form;
use Yajra\Datatables\Services\DataTable;

class testimonialsDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'testimonials.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $testimonials = testimonials::query();

        return $this->applyScopes($testimonials);
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
            'photo' => ['name' => 'photo', 'data' => 'photo', 'render' => '"<img src=\""+data+"\" height=\"50\"/>"'],
            'name' => ['name' => 'name', 'data' => 'name'],
            'position' => ['name' => 'position', 'data' => 'position'],
            'company' => ['name' => 'company', 'data' => 'company'],
            'testimonial' => ['name' => 'testimonial', 'data' => 'testimonial']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'testimonials';
    }
}
