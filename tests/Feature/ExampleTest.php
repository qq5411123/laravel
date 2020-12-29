<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
	
	 $this->assertTrue(true, '这应该已经是能正常工作的。');
//		$response = $this->get('/');

//        $response->assertStatus(200);
    }

/*    public function testBasicExample()
    {
        $response = $this->get('/api/photo/index');

//        $response->dumpHeaders();
//
//        $response->dump();
//
//        $response->assertStatus(200);

//        $response = $this->withHeaders([
//            'X-Header' => 'Value',
//        ])->json('GET', '/api/photo/index');



        $response
            ->assertStatus(200)
            ->assertJson([
                'created' => true,
            ])
            ->assertJsonPath('data.name', 'dadad')

        ;

    }
 */




}
