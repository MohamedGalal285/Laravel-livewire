<?php

namespace App\Livewire\Products;

use App\Repositories\Products\ProductRepository;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditProduct extends Component
{
    use WithFileUploads;

    public $product;
    public $title;
    public $description;
    public $image;

    #[On('getData')]
    public function getData($id, ProductRepository $productRepository)
    {
        $this->product = $productRepository->find($id);
        $this->title = $this->product->title;
        $this->description = $this->product->description;
        $this->image = $this->product->image;
    }
    public function render()
    {
        return view('livewire.products.edit-product');
    }

    public function submit(ProductRepository $productRepository){
        $data = $this->validate();
        $productRepository->adminUpdate($data,$this->product);
        return redirect(route('admin.products.index'))->with('success','Product Updated Successfully');
    }
    public function rules(){
        $rule = $this->image ? 'image' : 'nullable';
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => $rule,
        ];
    }
}
