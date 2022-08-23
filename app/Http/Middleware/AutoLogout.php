<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class AutoLogout
{

    /**
     * @var Store
     */
    protected $session;

    /**
     * @var int
     */
    protected $timeout = 1000;

    /**
     * @param $session
     */
    public function __construct(Store $session)
    {
        $this->session = $session;
    }


    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $is_logged_in = $request->path() != 'home/logout';

        if(!session('last_active')) {
            $this->session->put('last_active', time());
        } elseif(time() - $this->session->get('last_active') > $this->timeout) {

            $this->session->forget('last_active');

            $cookie = cookie('intend', $is_logged_in ? url()->current() : 'home');

            auth()->logout();
        }

        $is_logged_in ? $this->session->put('last_active', time()) : $this->session->forget('last_active');

        return $next($request);
    }
}
