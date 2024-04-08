<?php


namespace App\Filters;

use App\Filters\BaseApiFilter;

class InvoiceFilter extends BaseApiFilter
{
    protected $safeParams = [
        'amount' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'billed_dated' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'paid_dated' => ['eq', 'lt', 'lte', 'gt', 'gte'],
        'status' => ['eq', 'ne']

    ];

    protected $columnMap = [
        'postalCode' => "postal_code"
    ];
}
