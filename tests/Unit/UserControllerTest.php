<?php

namespace Tests\Unit;
use App\Http\Controllers\UserController;
use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use App\Services\UserService;
use App\User;

class UserControllerTest extends TestCase
{
	use DatabaseMigrations;
	use DatabaseTransactions;
	use WithoutMiddleware;

    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testuserListwithdata()
    // {
        
    // }

    // public function testuserListwithnull()
    // {
        
    // }
    // public function testUpdateUserFalseWithSomeVariableisnNull()
    // {   
    //     $this->Controllers = new UserController(new UserService(new User()));
    //     $user = new User();
    //     $user['username'] = "datafake";
    //     $user['email'] = "fake@mail.com";
    //     $user['password'] = "fakestory";
    //     $user['first_name'] = "faker";
    //     $user['last_name'] = "lier";
    //     $user['birth_date'] = "2017-02-08";
    //     $user['phone'] = "123456789";
    //     $user['critizen_id'] = "1530066000256";
    //     $user['role'] = "Buyer";
    //     $user->save();

    //     $id = 1 ;
       
    //     $Request['username'] = "golfgolf";
    //     $Request['email'] = "fake@mail.com";
    //     $Request['password'] = null;
    //     $Request['first_name'] = "faker";
    //     $Request['last_name'] = "surname";
    //     $Request['birth_date'] = "2017-02-08";
    //     $Request['phone'] = "123456789";
    //     $Request['critizen_id'] = "1530066000256";
    //     $Request['role'] = "Buyer";

    //     $result = $this->Controllers->update($Request,$id );

    //     $this->assertNull($result);
        
    // }

  // public function testUpdateUserFalseWithSomeVariableisnNull()
    // {   
    //     $this->service = new UserService(new User());
    //     $user = new User();
    //     $user['username'] = "datafake";
    //     $user['email'] = "fake@mail.com";
    //     $user['password'] = "fakestory";
    //     $user['first_name'] = "faker";
    //     $user['last_name'] = "lier";
    //     $user['birth_date'] = "2017-02-08";
    //     $user['phone'] = "123456789";
    //     $user['critizen_id'] = "1530066000256";
    //     $user['role'] = "Buyer";
    //     $user->save();
        
    //     $params['username'] = "golfgolf";
    //     $params['email'] = "fake@mail.com";
    //     $params['password'] = null;
    //     $params['first_name'] = "faker";
    //     $params['last_name'] = "surname";
    //     $params['birth_date'] = "2017-02-08";
    //     $params['phone'] = "123456789";
    //     $params['critizen_id'] = "1530066000256";
    //     $params['role'] = "Buyer";

    //     $result = $this->service->update($user,$params);
    //     $this->assertFalse($result);
        
    // }

    //  public function testUpdateUserFalseWithIncorrectFormat()
    // {   
    //     $this->service = new UserService(new User());
    //     $user = new User();
    //     $user['username'] = "datafake";
    //     $user['email'] = "fake@mail.com";
    //     $user['password'] = "fakestory";
    //     $user['first_name'] = "faker";
    //     $user['last_name'] = "lier";
    //     $user['birth_date'] = "2017-02-08";
    //     $user['phone'] = "123456789";
    //     $user['critizen_id'] = "1530066000256";
    //     $user['role'] = "Buyer";
    //     $user->save();
        
    //     $params['username'] = "golfgolf";
    //     $params['email'] = "fake@mail.com";
    //     $params['password'] = null;
    //     $params['first_name'] = "faker";
    //     $params['last_name'] = "surname";
    //     $params['birth_date'] = "Natdanai";
    //     $params['phone'] = "123456789";
    //     $params['critizen_id'] = "1530066000256";
    //     $params['role'] = "Buyer";

    //     $result = $this->service->update($user,$params);
    //     $this->assertFalse($result);
        
    // }

    //   public function testUpdateUserFasleWithUserNull()
    // {   
    //     $this->service = new UserService(new User());
        
    //     $user = null ;

    //     $params['username'] = "golfgolf";
    //     $params['email'] = "fake@mail.com";
    //     $params['password'] = "fakestory";
    //     $params['first_name'] = "faker";
    //     $params['last_name'] = "lier";
    //     $params['birth_date'] = "2017-02-08";
    //     $params['phone'] = "123456789";
    //     $params['critizen_id'] = "1530066000256";
    //     $params['role'] = "Buyer";

    //     $result = $this->service->update($user,$params);

    //     $this->assertFalse($result);
        
    // }


    //   public function testUpdateUserFasleWithParamsNull()
    // {   
    //     $this->service = new UserService(new User());
        
    //     $user = new User();
    //     $user['username'] = "datafake";
    //     $user['email'] = "fake@mail.com";
    //     $user['password'] = "fakestory";
    //     $user['first_name'] = "faker";
    //     $user['last_name'] = "lier";
    //     $user['birth_date'] = "2017-02-08";
    //     $user['phone'] = "123456789";
    //     $user['critizen_id'] = "1530066000256";
    //     $user['role'] = "Buyer";
    //     $user->save();

    //     $params = null ;

    //     $result = $this->service->update($user,$params);

    //     $this->assertFalse($result);
        
    // }


}
