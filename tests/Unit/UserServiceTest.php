<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\UserController;
use App\Services\UserService;
use App\User;


class UserServiceTest extends TestCase
{
	use DatabaseTransactions;
	use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */


    // public function testRemoveUserTRUE()
    // {   

 
    //     $this->service = new UserService(new User());

    //     $user = new User();
    //     $user['username'] = "Kaimook";
    //     $user['email'] = "Kaimook@gmail.com";
    //     $user['password'] = "654321";
    //     $user['first_name'] = "Thanida";
    //     $user['last_name'] = "Tilangkan";
    //     $user['birth_date'] = "1994-01-05";
    //     $user['phone'] = "0941234567";
    //     $user['critizen_id'] = "1560300123456";
    //     $user['role'] = "Shipper";
    //     $user->save();

       
    //     $result = $this->service->delete($user);

    //     $this->assertTrue($result);


    //  }

    // public function testRemoveUserFalseWithNull()
    // {   

 
    //     $this->service = new UserService(new User());

    //     $user = null;

       
    //     $result = $this->service->delete($user);

    //     $this->assertFalse($result);

    //  }



                                                                                    // public function testRemoveUserFalseNoExitdata()
                                                                                    // {   
                                                                                    //     $this->service = new UserService(new User());

                                                                                    //     $user['id'] = 10;
                                                                                        
                                                                                    //     $result = $this->service->delete($user);

                                                                                    //     $this->assertFalse($result);
                                                                                    // }


    // // public function testUpdateUserTRUE()
    // // {   
    // //     $this->service = new UserService(new User());
    // //     $user = new User();
    // //     $user['username'] = "datafake";
    // //     $user['email'] = "fake@mail.com";
    // //     $user['password'] = "fakestory";
    // //     $user['first_name'] = "faker";
    // //     $user['last_name'] = "lier";
    // //     $user['birth_date'] = "2017-02-08";
    // //     $user['phone'] = "123456789";
    // //     $user['critizen_id'] = "1530066000256";
    // //     $user['role'] = "Buyer";
    // //     $user->save();
        
    // //     $params['username'] = "golfgolf";
    // //     $params['email'] = "fake@mail.com";
    // //     $params['password'] = "fakestory";
    // //     $params['first_name'] = "faker";
    // //     $params['last_name'] = "surname";
    // //     $params['birth_date'] = "2017-02-08";
    // //     $params['phone'] = "123456789";
    // //     $params['critizen_id'] = "1530066000256";
    // //     $params['role'] = "Buyer";

    // //     $result = $this->service->update($user,$params);
    // //     $this->assertEquals($user['username'], $params['username'] );
    // //     $this->assertEquals($user['last_name'], $params['last_name'] );
    // //     $this->assertTrue($result);
        
    // // }

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

                    // public function testGetAllUser()
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


                    //     $obj = (object) array($user);

                    //     $result = $this->service->getAllUsers();

                    //     $this->assertEquals( $obj,$result);
                        
                    // }

                   // public function testGetAllUserWithNodataexitondatabase()
                   //  {   
                   //      $this->service = new UserService(new User());
                        
                   //      $result = $this->service->getAllUsers();

                   //      $this->assertEmpty($result);
                   //  }





}
