<?php

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Illuminate\Http\Request;

class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */
    //protected $proxies;
	protected $proxies = '*';
    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
/**    protected $headers =
        Request::HEADER_X_FORWARDED_FOR |
        Request::HEADER_X_FORWARDED_HOST |
        Request::HEADER_X_FORWARDED_PORT |
        Request::HEADER_X_FORWARDED_PROTO |
	Request::HEADER_X_FORWARDED_AWS_ELB; */
/**	'proxies' => '*',  // Trust all proxies
'headers' => [
    \Illuminate\Http\Request::HEADER_X_FORWARDED_FOR,
    \Illuminate\Http\Request::HEADER_X_FORWARDED_HOST,
    \Illuminate\Http\Request::HEADER_X_FORWARDED_PORT,
    \Illuminate\Http\Request::HEADER_X_FORWARDED_PROTO,
    \Illuminate\Http\Request::HEADER_X_FORWARDED_AWS_ELB,
],*/
}
