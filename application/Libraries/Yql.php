<?php

namespace App\Libraries;

/**
 * Yahoo query language.
 *
 * @package App\Libraries
 */
class Yql
{
    /**
     * @var string Base URL.
     */
    protected static $base_url = 'http://query.yahooapis.com/v1/public/yql?env=http://datatables.org/alltables.env';

    /**
     * Query.
     *
     * @param string $query Query.
     *
     * @return object Results.
     */
    public static function query($query)
    {
        $queryUrl = Yql::$base_url . '&q=' . urlencode($query) . '&format=json';

        $curl = curl_init($queryUrl);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $contentJson = curl_exec($curl);
        $object = json_decode($contentJson);
        return $object->query->results;
    }
}
