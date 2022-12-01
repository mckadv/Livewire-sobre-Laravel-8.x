<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\CrudProduct;
use Livewire\WithPagination;

class CrudProductComponent extends Component
{
	use WithPagination;
	
    public function render()
    {
		$crudproducts = CrudProduct::orderBy('id', 'desc')->paginate(10);
        return view('livewire.crud-product-component', compact('crudproducts'));
    }
}
