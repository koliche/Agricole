<?php

namespace App\Http\Livewire;

use App\Models\Agriculteur;
use App\Models\Intervention;
use App\Models\Parcelle;
use Livewire\Component;
use Mockery\Matcher\Any;

class AgriculteursList extends Component
{   private $question1;
    private $question2;
    private $question3;
    private $question4;
    private $question5;
    
    public function render()

    {
        $this->question1=Agriculteur::all("agr_nom")->sortBy("agr_nom");
        $this->question2=Parcelle::where("par_superficie",">",500)->get();
        $this->question3=Parcelle::where("par_lieu","Arith","and")->whereBetween("par_superficie",[200,500])->get();
        $this->question4=Parcelle::join('agriculteurs', 'parcelles.agriculteur_id', '=', 'agriculteurs.id')->get(['parcelles.*','agriculteurs.agr_nom']);
        /*$this->question5=Intervention::join('parcelles', 'interventions.parcelle_id', '=', 'parcelles.id')
            ->join('employes', 'interventions.Int_Emp_Nss', '=', 'employes.Emp_Nss')
            ->get(['parcelles.Par_Nom','interventions.*','employes.Emp_Nom']);*/
        //$this->question5=Intervention::whereBetween("int_debut",[2011-11-07,2012-02-9])->get();
        $from = date('2011-11-07');
        $to = date('2012-02-9');
        $this->question5=Intervention::whereBetween("int_debut",[$from,$to])->get();
       // $this->question5=Intervention::all();
        
        $this->question6=Intervention::join('parcelles', 'interventions.parcelle_id', '=', 'parcelles.id')->get(['parcelles.par_nom','interventions.*']);
        
        $this->question77=Intervention::join('employes', 'interventions.emp_nss', '=', 'employes.emp_nss')->get(['employes.emp_nom','interventions.*']);
        
        $this->question7=Intervention::join('parcelles', 'interventions.parcelle_id', '=', 'parcelles.id')
            ->join('employes', 'interventions.emp_nss', '=', 'employes.emp_nss')
            ->get(['parcelles.par_nom','employes.emp_nom','interventions.*']);

        $this->question8 = Intervention::join('employes', 'interventions.emp_nss', '>', 'employes.emp_nss')->where("employes.emp_nom",">","Pernet")->get(['employes.emp_nom','interventions.int_debut']);
        
        $this->question9 = Agriculteur::all("agr_nom")->sortBy("agr_nom");
        
        $this->question10 = Agriculteur::all("agr_nom")->sortBy("agr_nom");
        
        $this->question11 = Agriculteur::all("agr_nom")->sortBy("agr_nom");
        
        
        return view('livewire.agriculteurs-list',['question1'=>$this->question1,
            'question2'=>$this->question2,
            'question3'=>$this->question3,
            'question4'=>$this->question4,
            'question5'=>$this->question5,
            'question6'=>$this->question6,
            'question77'=>$this->question77,
            'question7'=>$this->question7,
            'question8'=>$this->question8,
            'question9'=>$this->question9,
            'question10'=>$this->question10,
            'question11'=>$this->question11,
            ]);
    }
}