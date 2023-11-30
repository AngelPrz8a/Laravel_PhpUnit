<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_email(): void
    {
        $email = "angel@gmail.com";
        $res = Email::validate($email);
        $this->assertTrue($res);

        $email = "angel@@gmail.com";
        $res = Email::validate($email);
        $this->assertFalse($res);
    }
}
