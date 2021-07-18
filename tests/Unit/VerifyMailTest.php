<?php

namespace Tests\Unit;

use App\Models\User;
use App\Notifications\CustomVerifyMail;
use PHPUnit\Framework\TestCase;

class VerifyMailTest extends TestCase
{
    /**
     * @test
     */
   public function sendNofifEmail(){
        $this->assertTrue(true);
   }
}
