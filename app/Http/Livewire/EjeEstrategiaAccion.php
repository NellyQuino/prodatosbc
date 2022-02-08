<?php

namespace App\Http\Livewire;
use Livewire\Component;
use App\Models\Accion;
use App\Models\Estrategia;
use App\Models\Eje;


class EjeEstrategiaAccion extends Component
{
    public $ejes;
    public $estrategias;
    public $acciones;

    public $selectedEje = NULL;
    public $selectedEstrategia = NULL;
    public $selectedAccion = NULL;

    public function mount($selectedAccion = null){
        $this->ejes = Eje::all();
        $this->estrategias = collect();
        $this->acciones = collect();
        $this->selectedAcciones = $selectedAccion;
        
        if (!is_null($selectedAccion)) {
            $accion = Accion::with('estrategia.eje')->find($selectedAccion);
            if ($accion) {
                $this->acciones = Accion::where('estrategia_id', $accion->estrategia_id)->get();
                $this->estrategias = Estrategia::where('eje_id', $accion->estrategia->eje_id)->get();
                $this->selectedEje = $accion->estrategia->eje_id;
                $this->selectedEstrategia = $accion->estrategia_id;
            }
        }
    }
    
    public function render()
    {

        return view('livewire.eje-estrategia-accion');
    }
    public function updatedSelectedEje($eje)
    {
        $this->estrategias = Estrategia::where('eje_id', $eje)->get();
        $this->selectedEstrategias = NULL;
    }

    public function updatedSelectedEstrategia($estrategia)
    {
        if (!is_null($estrategia)) {
            $this->acciones = Accion::where('estrategia_id', $estrategia)->get();
        }
    }
}
