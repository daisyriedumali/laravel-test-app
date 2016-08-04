<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BasicTest extends TestCase
{
    protected function login()
    {
        return $this->visit('/auth/login')
                ->submitForm('', ['name' => 'test', 'password' => 'testtest']);
    }

    protected function addTodo()
    {
        return $this->submitForm('', ['todo' => 'Added new todo on list']);
    }

    public function testLoginSuccess()
    {
        $this->login()
            ->seePageIs('/')
            ->assertResponseOk();
    }

    public function testTodoSuccess()
    {
        $this->login()
            ->visit('/todo')
            ->seePageIs('/todo')
            ->see('My Todo List')
            ->assertResponseOk();
    }

    public function testRegisterSuccess()
    {
        $this->visit('/')
            ->click('Register')
            ->seePageIs('/auth/register');
    }

    public function testAddTodoSuccess()
    {
        $this->login()
            ->visit('/todo')
            ->click('Add New Todo')
            ->see('Add New Todo List')
            ->assertResponseOk();
    } 

    public function testAddTodoListSuccess()
    {
        $this->login()
            ->visit('/todo')
            ->click('Add New Todo')
            ->see('Add New Todo List')
            ->addTodo()
            ->assertResponseOk();
    }

    public function testDeleteTodoSuccess()
    {
        $this->login()
            ->visit('/todo')
            ->press('Delete')
            ->assertResponseOk();
    }   
}
