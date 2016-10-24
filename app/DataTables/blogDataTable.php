<?php

namespace App\DataTables;

use App\Models\blog;
use Form;
use Yajra\Datatables\Services\DataTable;

class blogDataTable extends DataTable
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return $this->datatables
            ->eloquent($this->query())
            ->addColumn('action', 'blogs.datatables_actions')
            ->make(true);
    }

    /**
     * Get the query object to be processed by datatables.
     *
     * @return \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder
     */
    public function query()
    {
        $blogs = blog::query();

        return $this->applyScopes($blogs);
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
            'title' => ['name' => 'title', 'data' => 'title'],
            'category' => ['name' => 'category', 'data' => 'category'],
            'main_image' => ['name' => 'main_image', 'data' => 'main_image', 'render' => '"<img src=\""+data+"\" height=\"50\"/>"'],
            'post' => ['name' => 'post', 'data' => 'post'],
            'tags' => ['name' => 'tags', 'data' => 'tags'],
            'published_at' => ['name' => 'published_at', 'data' => 'published_at']
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'blogs';
    }
}
