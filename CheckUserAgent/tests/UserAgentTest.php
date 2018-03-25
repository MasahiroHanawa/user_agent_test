<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class UserAgentTest extends TestCase
{
    /**
     * Access as Android Mobile.
     * @runInSeparateProcess
     * @return void
     */
    public function testAccessAsAndroidMobile()
    {
        $headers = [
            'user-agent' => 'Mozilla/5.0 (Linux; Android 6.0.1; Nexus 6P Build/MMB29P) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/47.0.2526.83 Mobile Safari/537.36'
        ];
        $this->withServerVariables($this->transformHeadersToServerVars($headers));
        $response = $this->get('/');
        $response->assertSeeText('Mobile');
        $response->assertSeeText('Android');
        $response->assertSeeText('Chrome Mobile');
    }

    /**
     * Access as Android Tablet.
     * @runInSeparateProcess
     * @return void
     */
    public function testAccessAsAndroidTablet()
    {
        $headers = [
            'user-agent' => 'Mozilla/5.0 (Linux; Android 5.0.2; SAMSUNG SM-T550 Build/LRX22G) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/3.3 Chrome/38.0.2125.102 Safari/537.36'
        ];
        $this->withServerVariables($this->transformHeadersToServerVars($headers));
        $response = $this->get('/');
        $response->assertSeeText('Tablet');
        $response->assertSeeText('Android');
        $response->assertSeeText('Samsung Browser');
    }


    /**
     * Access as iOS Mobile.
     * @runInSeparateProcess
     * @return void
     */
    public function testAccessAsiOSMobile()
    {
        $headers = [
            'user-agent' => 'Mozilla/5.0 (iPhone; CPU iPhone OS 11_0 like Mac OS X) AppleWebKit/604.1.38 (KHTML, like Gecko) Version/11.0 Mobile/15A372 Safari/604.1'
        ];
        $this->withServerVariables($this->transformHeadersToServerVars($headers));
        $response = $this->get('/');
        $response->assertSeeText('Mobile');
        $response->assertSeeText('iOS');
        $response->assertSeeText('Safari');
    }

    /**
     * Access as iOS Tablet.
     * @runInSeparateProcess
     * @return void
     */
    public function testAccessAsiOSTablet()
    {
        $headers = [
            'user-agent' => 'Mozilla/5.0 (iPad; CPU OS 11_2_1 like Mac OS X) AppleWebKit/604.4.7 (KHTML, like Gecko) Version/11.0 Mobile/15C153 Safari/604.1'
        ];
        $this->withServerVariables($this->transformHeadersToServerVars($headers));
        $response = $this->get('/');
        $response->assertSeeText('Tablet');
        $response->assertSeeText('iOS');
        $response->assertSeeText('Safari');
    }

    /**
     * Access as Mac.
     * @runInSeparateProcess
     * @return void
     */
    public function testAccessAsMac()
    {
        $headers = [
            'user-agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_11_2) AppleWebKit/601.3.9 (KHTML, like Gecko) Version/9.0.2 Safari/601.3.9'
        ];
        $this->withServerVariables($this->transformHeadersToServerVars($headers));
        $response = $this->get('/');
        $response->assertSeeText('Mac');
        $response->assertSeeText('Mac');
        $response->assertSeeText('Safari');
    }

    /**
     * Access as Windows.
     * @runInSeparateProcess
     * @return void
     */
    public function testAccessAsWindows()
    {
        $headers = [
            'user-agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/42.0.2311.135 Safari/537.36 Edge/12.246'
        ];
        $this->withServerVariables($this->transformHeadersToServerVars($headers));
        $response = $this->get('/');
        $response->assertSeeText('Windows');
        $response->assertSeeText('Windows');
        $response->assertSeeText('Edge');
    }

    /**
     * Access as Ubuntu.
     * @runInSeparateProcess
     * @return void
     */
    public function testAccessAsUbuntu()
    {
        $headers = [
            'user-agent' => 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:15.0) Gecko/20100101 Firefox/15.0.1'
        ];
        $this->withServerVariables($this->transformHeadersToServerVars($headers));
        $response = $this->get('/');
        $response->assertSeeText('Ubuntu');
        $response->assertSeeText('Ubuntu');
        $response->assertSeeText('Firefox');
    }
}
