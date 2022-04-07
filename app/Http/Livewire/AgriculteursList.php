<?php

namespace App\Http\Livewire;

use App\Models\Agriculteur;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Component;

class AgriculteursList extends Component
{
    public $agriculteurs;
    public $state = [];

    public $updateMode = false;

    public function mount()
    {
        $this->agriculteurs = Agriculteur::all();
    }

    private function resetInputFields(){
        $this->reset('state');
    }

    public function store()
    {
        $validator = Validator::make($this->state, [
            'agr_nom' => 'required',
            'agr_prn' => 'required',
            'agr_resid' => 'required',
        ])->validate();

        Agriculteur::create($this->state);

        $this->reset('state');
        $this->agriculteurs = Agriculteur::all();
    }

    public function edit($id)
    {
        $this->updateMode = true;

        $agriculteur = Agriculteur::find($id);

        $this->state = [
            'id' => $agriculteur->id,
            'agr_nom' => $agriculteur->marque,
            'agr_prn' => $agriculteur->prix,
        ];
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->reset('state');
    }

    public function update()
    {
        $validator = Validator::make($this->state, [
            'marque' => 'required',
            'prix' => 'required|email',
        ])->validate();


        if ($this->state['id']) {
            $agriculteur = Agriculteur::find($this->state['id']);
            $agriculteur->update([
                'marque' => $this->state['marque'],
                'prix' => $this->state['prix'],
            ]);


            $this->updateMode = false;
            $this->reset('state');
            $this->agriculteurs = Agriculteur::all();
        }
    }

    public function delete($id)
    {
        if($id){
            Agriculteur::where('id',$id)->delete();
            $this->agriculteurs = Agriculteur::all();
        }
    }
    public function render()
    {
        return view('livewire.agriculteurs-list');
    }
}
