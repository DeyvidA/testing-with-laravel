<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Helpers\Email;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testEmail()
    {
//        $email = 'i@admin.com';
//        $result = (bool) filter_var($email, FILTER_VALIDATE_EMAIL);
        $result = Email::Validate('i@admin.com');
        $this->assertTrue($result);

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

