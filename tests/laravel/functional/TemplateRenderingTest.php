<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TemplateRenderingTest extends TestCase
{
    public $user;

    public function __construct() {
        parent::__construct();
        parent::setUp();
        $person = factory(App\Person::class)->create();
        $person->entity()->save(factory(App\Entity::class)->make());
        $this->user = $person->user()->save(factory(App\User::class)->make());
    }

    public function testHomePageWithNoAuthenticatedUser()
    {
        $this->visit('/')
            ->see('Login')
            ->see('Solicitar usuario')
            ->see('Recuperar contraseña');
    }

    public function testRegisterPage()
    {
        $this->visit('/register')
            ->see('Register')
            ->see('Back to login')
            ->see('Recuperar contraseña');
    }

    public function testResetPasswordPage()
    {
        $this->visit('/password/reset')
            ->see('Reset Password');
    }

    public function testPageNotFoundPage()
    {
        $response = $this->call('GET', 'asd');
        $this->assertEquals(404, $response->getStatusCode());
    }

    public function testHomePageWithAuthenticatedUser() {
        $this->actingAs($this->user)
            ->visit('/')
            ->see('Panel de usuario');
    }
}
