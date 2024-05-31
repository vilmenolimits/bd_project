<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User as Usuario;
use Livewire\Attributes\Layout;

class UsuarioComponent extends Component
{
    public $usuarios;
    public $nome;
    public $username;
    public $password;
    public $usuarioId;
    public $isEditing = false;

    protected $rules = [
        'nome' => 'required|string|max:255',
        'username' => 'required|string|max:255',
        'password' => 'required|string|min:8',
    ];

    public function mount()
    {
        $this->loadUsuarios();
    }

    public function loadUsuarios()
    {
        $this->usuarios = Usuario::all();
    }

    public function create()
    {
        $this->validate();
        Usuario::create([
            'nome' => $this->nome,
            'username' => $this->username,
            'password' => bcrypt($this->password),
        ]);
        $this->resetInput();
        $this->loadUsuarios();
    }

    public function edit($id)
    {
        $usuario = Usuario::findOrFail($id);
        $this->usuarioId = $id;
        $this->nome = $usuario->nome;
        $this->username = $usuario->username;
        $this->isEditing = true;
    }

    public function update()
    {
        $this->validate();
        $usuario = Usuario::findOrFail($this->usuarioId);
        $usuario->update([
            'nome' => $this->nome,
            'username' => $this->username,
            'password' => bcrypt($this->password),
        ]);
        $this->resetInput();
        $this->isEditing = false;
        $this->loadUsuarios();
    }

    public function delete($id)
    {
        Usuario::destroy($id);
        $this->loadUsuarios();
    }

    private function resetInput()
    {
        $this->nome = '';
        $this->username = '';
        $this->password = '';
        $this->usuarioId = null;
        $this->isEditing = false;
    }

    public function render()
    {
        return view('livewire.usuario-component');
    }
}
