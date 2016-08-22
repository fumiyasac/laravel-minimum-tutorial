<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ApplicationRoutingTest extends TestCase
{
    /**
     * ルーティングのテスト（basic認証が設定されているかのテスト）
     *
     * @return void
     */

    /* Basic認証があって誤ったID/PASSWORDだと401になるテスト */
    public function testIncorrectBasicAuthLogin() {

        //誤ったID/PASSWORDを記述
        $basic_auth_config_incorrect = ['user' => 'admin', 'password' => 'admin12'];

        //call( $method, $uri, $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        $this->call('GET', '/topics/add', [], [], [], ['PHP_AUTH_USER' => $basic_auth_config_incorrect['user'], 'PHP_AUTH_PW' => $basic_auth_config_incorrect['password']]);
        $this->assertResponseStatus(401);

        $this->call('GET', '/topics/edit/1', [], [], [], ['PHP_AUTH_USER' => $basic_auth_config_incorrect['user'], 'PHP_AUTH_PW' => $basic_auth_config_incorrect['password']]);
        $this->assertResponseStatus(401);

        $this->call('POST', 'topics/delete', [], [], [], ['PHP_AUTH_USER' => $basic_auth_config_incorrect['user'], 'PHP_AUTH_PW' => $basic_auth_config_incorrect['password']]);
        $this->assertResponseStatus(401);
    }

    /* Basic認証がないルーティングのときのテスト */
    public function testCorrectWithoutBasicAuthLogin() {

        //call( $method, $uri, $parameters = [], $cookies = [], $files = [], $server = [], $content = null)
        $this->call('GET', '/', [], [], [], []);
        $this->assertResponseStatus(200);

        $this->call('GET', '/topics/1', [], [], [], []);
        $this->assertResponseStatus(200);
    }

}
