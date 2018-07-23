<?php

namespace App\Controllers\Api\Currency;

use App\Libraries\Api\Controller;
use App\Libraries\Yql;

/**
 * Admin home controller.
 *
 * @package App\Controllers\Admin
 */
class ExchangeRate extends Controller
{
    /**
     * Show exchange rate.
     *
     * @param string $currencies 2 ISO 4217 currency alpha codes.
     *
     * @return \CodeIgniter\HTTP\Response Exchange rate.
     */
    public function show(string $currencies)
    {
        $this->cachePage(MINUTE);

        if (strlen($currencies) !== 6) {
            return $this->failValidationError(lang('Api.currencyExchangeRateValidationError'));
        }

        $response = Yql::query('SELECT * FROM yahoo.finance.xchange WHERE pair IN ("' . $currencies . '")');

        $data = [
            'name' => $response->rate->Name,
            'rate' => floatval($response->rate->Rate)
        ];

        return $this->respond($data);
    }
}
