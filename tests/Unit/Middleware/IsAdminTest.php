<?php
use App\User;
use Tests\TestCase;

/**
 * Test to verify the functionality of the IsAdmin middleware.
 */

class ExampleTest extends TestCase
{
    private $middleware;

    /**
     * Test when the user is not authenticated.
     */
    public function testNotLoggedIn()
    {
        $user = new User();
        $user->roles = [''];
        Auth::login();
    }

    /**
     * Test when the user is authenticated, but not an administrator.
     */
    public function testLoggedInNotAdmin() {

    }

    /**
     * Test when the user is authenticated and is an administrator.
     */
    public function testLoggedInAndAdmin() {

    }
}
