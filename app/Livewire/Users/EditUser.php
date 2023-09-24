<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use App\Livewire\Forms\UserForm;

#[Title('Edit User')]
#[Layout('layouts.admin')]
class EditUser extends Component
{
    public User $user;

    public UserForm $form;

    public $id, $name, $email, $password;

    public $title = "Edit User";

    public function mount(User $user)
    {
        $this->form->setUser($user);
    }

    public function update()
    {
        return $this->redirect('/users');
    }

    public function render()
    {
        return view('livewire.users.edit-user');
    }
}
