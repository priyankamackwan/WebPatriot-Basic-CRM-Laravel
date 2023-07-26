<?php

namespace App\Http\Controllers\Admin;

use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class HomeController
{
    public function index()
    {
        $settings1 = [
            'chart_title'           => 'Income Report',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Income',
            'group_by_field'        => 'entry_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'sum',
            'aggregate_field'       => 'amount',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'income',
        ];

        $chart1 = new LaravelChart($settings1);

        $settings2 = [
            'chart_title'           => 'Expense Report',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Expense',
            'group_by_field'        => 'entry_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'sum',
            'aggregate_field'       => 'amount',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'expense',
        ];

        $chart2 = new LaravelChart($settings2);

        $settings3 = [
            'chart_title'           => 'Income Report Chart',
            'chart_type'            => 'bar',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Income',
            'group_by_field'        => 'entry_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'sum',
            'aggregate_field'       => 'amount',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'income',
        ];

        $chart3 = new LaravelChart($settings3);

        $settings4 = [
            'chart_title'           => 'Expense Report Chart',
            'chart_type'            => 'bar',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Expense',
            'group_by_field'        => 'entry_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'sum',
            'aggregate_field'       => 'amount',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'expense',
        ];

        $chart4 = new LaravelChart($settings4);

        $settings5 = [
            'chart_title'           => 'Customer Report',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\CrmCustomer',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'crmCustomer',
        ];

        $chart5 = new LaravelChart($settings5);

        $settings6 = [
            'chart_title'           => 'Client Report',
            'chart_type'            => 'line',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Client',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'client',
        ];

        $chart6 = new LaravelChart($settings6);

        $settings7 = [
            'chart_title'           => 'Income Category Wise',
            'chart_type'            => 'pie',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\IncomeCategory',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'incomeCategory',
        ];

        $chart7 = new LaravelChart($settings7);

        $settings8 = [
            'chart_title'           => 'Expense Category Wise',
            'chart_type'            => 'pie',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\ExpenseCategory',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'expenseCategory',
        ];

        $chart8 = new LaravelChart($settings8);

        $settings9 = [
            'chart_title'           => 'Latest Users',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\User',
            'group_by_field'        => 'email_verified_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'fields'                => [
                'name'       => '',
                'email'      => '',
                'created_at' => '',
                'approved'   => '',
                'verified'   => '',
            ],
            'translation_key' => 'user',
        ];

        $settings9['data'] = [];
        if (class_exists($settings9['model'])) {
            $settings9['data'] = $settings9['model']::latest()
                ->take($settings9['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings9)) {
            $settings9['fields'] = [];
        }

        $settings10 = [
            'chart_title'           => 'Latest Customers',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\CrmCustomer',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'fields'                => [
                'id'         => '',
                'first_name' => '',
                'last_name'  => '',
                'status'     => 'name',
                'email'      => '',
                'created_at' => '',
            ],
            'translation_key' => 'crmCustomer',
        ];

        $settings10['data'] = [];
        if (class_exists($settings10['model'])) {
            $settings10['data'] = $settings10['model']::latest()
                ->take($settings10['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings10)) {
            $settings10['fields'] = [];
        }

        $settings11 = [
            'chart_title'           => 'Latest Products',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Product',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'fields'                => [
                'id'         => '',
                'name'       => '',
                'price'      => '',
                'category'   => 'name',
                'created_at' => '',
            ],
            'translation_key' => 'product',
        ];

        $settings11['data'] = [];
        if (class_exists($settings11['model'])) {
            $settings11['data'] = $settings11['model']::latest()
                ->take($settings11['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings11)) {
            $settings11['fields'] = [];
        }

        $settings12 = [
            'chart_title'           => 'Latest Clients',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Client',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'fields'                => [
                'id'         => '',
                'first_name' => '',
                'last_name'  => '',
                'company'    => '',
                'email'      => '',
                'created_at' => '',
            ],
            'translation_key' => 'client',
        ];

        $settings12['data'] = [];
        if (class_exists($settings12['model'])) {
            $settings12['data'] = $settings12['model']::latest()
                ->take($settings12['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings12)) {
            $settings12['fields'] = [];
        }

        $settings13 = [
            'chart_title'           => 'Latest Projects',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Project',
            'group_by_field'        => 'start_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'fields'                => [
                'id'         => '',
                'name'       => '',
                'client'     => 'first_name',
                'start_date' => '',
                'status'     => 'name',
                'created_at' => '',
            ],
            'translation_key' => 'project',
        ];

        $settings13['data'] = [];
        if (class_exists($settings13['model'])) {
            $settings13['data'] = $settings13['model']::latest()
                ->take($settings13['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings13)) {
            $settings13['fields'] = [];
        }

        $settings14 = [
            'chart_title'           => 'Latest Transactions',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Transaction',
            'group_by_field'        => 'transaction_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-12',
            'entries_number'        => '5',
            'fields'                => [
                'id'               => '',
                'project'          => 'name',
                'transaction_type' => 'name',
                'income_source'    => 'name',
                'amount'           => '',
                'currency'         => 'name',
                'transaction_date' => '',
                'name'             => '',
            ],
            'translation_key' => 'transaction',
        ];

        $settings14['data'] = [];
        if (class_exists($settings14['model'])) {
            $settings14['data'] = $settings14['model']::latest()
                ->take($settings14['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings14)) {
            $settings14['fields'] = [];
        }

        $settings15 = [
            'chart_title'           => 'Latest Income',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Income',
            'group_by_field'        => 'entry_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'fields'                => [
                'id'              => '',
                'income_category' => 'name',
                'entry_date'      => '',
                'amount'          => '',
            ],
            'translation_key' => 'income',
        ];

        $settings15['data'] = [];
        if (class_exists($settings15['model'])) {
            $settings15['data'] = $settings15['model']::latest()
                ->take($settings15['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings15)) {
            $settings15['fields'] = [];
        }

        $settings16 = [
            'chart_title'           => 'Latest Expense',
            'chart_type'            => 'latest_entries',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Expense',
            'group_by_field'        => 'entry_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'fields'                => [
                'id'               => '',
                'expense_category' => 'name',
                'entry_date'       => '',
                'amount'           => '',
            ],
            'translation_key' => 'expense',
        ];

        $settings16['data'] = [];
        if (class_exists($settings16['model'])) {
            $settings16['data'] = $settings16['model']::latest()
                ->take($settings16['entries_number'])
                ->get();
        }

        if (!array_key_exists('fields', $settings16)) {
            $settings16['fields'] = [];
        }

        $settings17 = [
            'chart_title'           => 'Income Number block',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Expense',
            'group_by_field'        => 'entry_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'sum',
            'aggregate_field'       => 'amount',
            'filter_field'          => 'created_at',
            'filter_days'           => '7',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-6',
            'entries_number'        => '5',
            'translation_key'       => 'expense',
        ];

        $settings17['total_number'] = 0;
        if (class_exists($settings17['model'])) {
            $settings17['total_number'] = $settings17['model']::when(isset($settings17['filter_field']), function ($query) use ($settings17) {
                if (isset($settings17['filter_days'])) {
                    return $query->where($settings17['filter_field'], '>=',
                now()->subDays($settings17['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings17['filter_period'])) {
                    switch ($settings17['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings17['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings17['aggregate_function'] ?? 'count'}($settings17['aggregate_field'] ?? '*');
        }

        $settings18 = [
            'chart_title'           => 'Total Users',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\User',
            'group_by_field'        => 'email_verified_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'user',
        ];

        $settings18['total_number'] = 0;
        if (class_exists($settings18['model'])) {
            $settings18['total_number'] = $settings18['model']::when(isset($settings18['filter_field']), function ($query) use ($settings18) {
                if (isset($settings18['filter_days'])) {
                    return $query->where($settings18['filter_field'], '>=',
                now()->subDays($settings18['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings18['filter_period'])) {
                    switch ($settings18['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings18['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings18['aggregate_function'] ?? 'count'}($settings18['aggregate_field'] ?? '*');
        }

        $settings19 = [
            'chart_title'           => 'Total Customers',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\CrmCustomer',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'crmCustomer',
        ];

        $settings19['total_number'] = 0;
        if (class_exists($settings19['model'])) {
            $settings19['total_number'] = $settings19['model']::when(isset($settings19['filter_field']), function ($query) use ($settings19) {
                if (isset($settings19['filter_days'])) {
                    return $query->where($settings19['filter_field'], '>=',
                now()->subDays($settings19['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings19['filter_period'])) {
                    switch ($settings19['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings19['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings19['aggregate_function'] ?? 'count'}($settings19['aggregate_field'] ?? '*');
        }

        $settings20 = [
            'chart_title'           => 'Total Products',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Product',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'product',
        ];

        $settings20['total_number'] = 0;
        if (class_exists($settings20['model'])) {
            $settings20['total_number'] = $settings20['model']::when(isset($settings20['filter_field']), function ($query) use ($settings20) {
                if (isset($settings20['filter_days'])) {
                    return $query->where($settings20['filter_field'], '>=',
                now()->subDays($settings20['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings20['filter_period'])) {
                    switch ($settings20['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings20['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings20['aggregate_function'] ?? 'count'}($settings20['aggregate_field'] ?? '*');
        }

        $settings21 = [
            'chart_title'           => 'Total Clients',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Client',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'client',
        ];

        $settings21['total_number'] = 0;
        if (class_exists($settings21['model'])) {
            $settings21['total_number'] = $settings21['model']::when(isset($settings21['filter_field']), function ($query) use ($settings21) {
                if (isset($settings21['filter_days'])) {
                    return $query->where($settings21['filter_field'], '>=',
                now()->subDays($settings21['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings21['filter_period'])) {
                    switch ($settings21['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings21['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings21['aggregate_function'] ?? 'count'}($settings21['aggregate_field'] ?? '*');
        }

        $settings22 = [
            'chart_title'           => 'Total Projects',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Project',
            'group_by_field'        => 'start_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'project',
        ];

        $settings22['total_number'] = 0;
        if (class_exists($settings22['model'])) {
            $settings22['total_number'] = $settings22['model']::when(isset($settings22['filter_field']), function ($query) use ($settings22) {
                if (isset($settings22['filter_days'])) {
                    return $query->where($settings22['filter_field'], '>=',
                now()->subDays($settings22['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings22['filter_period'])) {
                    switch ($settings22['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings22['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings22['aggregate_function'] ?? 'count'}($settings22['aggregate_field'] ?? '*');
        }

        $settings23 = [
            'chart_title'           => 'Total Companies',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\ContactCompany',
            'group_by_field'        => 'created_at',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'count',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y H:i:s',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'contactCompany',
        ];

        $settings23['total_number'] = 0;
        if (class_exists($settings23['model'])) {
            $settings23['total_number'] = $settings23['model']::when(isset($settings23['filter_field']), function ($query) use ($settings23) {
                if (isset($settings23['filter_days'])) {
                    return $query->where($settings23['filter_field'], '>=',
                now()->subDays($settings23['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings23['filter_period'])) {
                    switch ($settings23['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings23['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings23['aggregate_function'] ?? 'count'}($settings23['aggregate_field'] ?? '*');
        }

        $settings24 = [
            'chart_title'           => 'Total Income',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Income',
            'group_by_field'        => 'entry_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'sum',
            'aggregate_field'       => 'amount',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'income',
        ];

        $settings24['total_number'] = 0;
        if (class_exists($settings24['model'])) {
            $settings24['total_number'] = $settings24['model']::when(isset($settings24['filter_field']), function ($query) use ($settings24) {
                if (isset($settings24['filter_days'])) {
                    return $query->where($settings24['filter_field'], '>=',
                now()->subDays($settings24['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings24['filter_period'])) {
                    switch ($settings24['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings24['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings24['aggregate_function'] ?? 'count'}($settings24['aggregate_field'] ?? '*');
        }

        $settings25 = [
            'chart_title'           => 'Total Expense',
            'chart_type'            => 'number_block',
            'report_type'           => 'group_by_date',
            'model'                 => 'App\Models\Expense',
            'group_by_field'        => 'entry_date',
            'group_by_period'       => 'day',
            'aggregate_function'    => 'sum',
            'aggregate_field'       => 'amount',
            'filter_field'          => 'created_at',
            'group_by_field_format' => 'd-m-Y',
            'column_class'          => 'col-md-4',
            'entries_number'        => '5',
            'translation_key'       => 'expense',
        ];

        $settings25['total_number'] = 0;
        if (class_exists($settings25['model'])) {
            $settings25['total_number'] = $settings25['model']::when(isset($settings25['filter_field']), function ($query) use ($settings25) {
                if (isset($settings25['filter_days'])) {
                    return $query->where($settings25['filter_field'], '>=',
                now()->subDays($settings25['filter_days'])->format('Y-m-d'));
                }
                if (isset($settings25['filter_period'])) {
                    switch ($settings25['filter_period']) {
                case 'week': $start = date('Y-m-d', strtotime('last Monday')); break;
                case 'month': $start = date('Y-m') . '-01'; break;
                case 'year': $start = date('Y') . '-01-01'; break;
            }
                    if (isset($start)) {
                        return $query->where($settings25['filter_field'], '>=', $start);
                    }
                }
            })
                ->{$settings25['aggregate_function'] ?? 'count'}($settings25['aggregate_field'] ?? '*');
        }

        return view('home', compact('chart1', 'chart2', 'chart3', 'chart4', 'chart5', 'chart6', 'chart7', 'chart8', 'settings10', 'settings11', 'settings12', 'settings13', 'settings14', 'settings15', 'settings16', 'settings17', 'settings18', 'settings19', 'settings20', 'settings21', 'settings22', 'settings23', 'settings24', 'settings25', 'settings9'));
    }
}
