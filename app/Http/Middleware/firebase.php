<?php
 namespace App\Http\Middleware;
 use Closure;
use Illuminate\Support\Facades\Session;

 class Firebase
 {
   /**
    * Handle an incoming request.
    *
    * @param \Illuminate\Http\Request $request
    * @param \Closure $next
    * @return mixed
    */
   public function handle($request, Closure $next)
   {
     if(Session::has('uid'))
     {
        $response= $next($request);
        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
            ->header('Pragma','no-cache')
            ->header('Expires','Sat, 26 Jul 1997 05:00:00 GMT');
     }
     else
       return redirect('admin/login');
   }
 }
