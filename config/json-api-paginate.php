<?php

return [

    /*
     * The maximum number of results that will be returned
     * when using the JSON API paginator.
     */
    'max_results' => 30,

    /*
     * The key of the page[x] query string parameter for page number.
     */
    'number_parameter' => 'number',

    /*
     * The key of the page[x] query string parameter for page size.
     */
    'size_parameter' => 'size',

    /*
     * The key of th epage[x] query string parameter for page limit
     */
    'limit_parameter' => 'limit',

    /*
     * The key of th epage[x] query string parameter for page cursor
     */
    'cursor_parameter' => 'cursor',

    /*
     * The key of th epage[x] query string parameter for page offset
     */
    'offset_parameter' => 'offset',

    /*
     * The name of the macro that is added to the Eloquent query builder.
     */
    'method_name' => 'jsonPaginate',
];
