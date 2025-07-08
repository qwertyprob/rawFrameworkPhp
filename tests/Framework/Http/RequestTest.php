<?php
use PHPUnit\Framework\TestCase;
use Framework\Http\Request;

class RequestTest extends TestCase
{
    

    protected function set_up(){
        parent::setUp();
                
        $_GET = [];
        $_POST = [];

    
    }


    public function testEmpty(){

        $request = new Request();
        self::assertEquals([], $request->getQueryParams()); 
        self::assertsame([],$request->getParsedBody());  
        //self::assertNull($request->getParsedBody());
 

    }

    public function testQueryParams(){

        $request = new Request();

        $_GET = $data = [
            'name' => 'John',
            'age' => 12
        ];
        

        self::assertEquals($data, $request->getQueryParams());
        self::assertsame([],$request->getParsedBody());  
    }


}