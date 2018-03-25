<?php
namespace App\Http\Controllers;

use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\Response;
use Symfony\Component\HttpFoundation\Request;

class UserAgentController 
{
    public function index(Request $request)
    {
        $device = '';
        if (\Browser::isDesktop()) {
            $device = 'Desktop';
        }
        else if (\Browser::isMobile())
        {
            $device = 'Mobile';
        }
        else if (\Browser::isTablet())
        {
            $device = 'Tablet';
        }
        $platform = \Browser::platformFamily();
        $browser = \Browser::browserName();
        return Response::view('index',
            [
                'device' => $device,
                'platform' => $platform,
                'browser' => $browser
            ]
        );
    }
}