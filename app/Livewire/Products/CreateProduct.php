<?php

namespace App\Livewire\Products;

use App\Repositories\Products\ProductRepository;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;


class CreateProduct extends Component
{
    use WithFileUploads;
    public $title;
    public $description;
    public $image;


    public function render()
    {
        return view('livewire.products.create-product');
    }

    public function submit(ProductRepository $productRepository){
        $data = $this->validate();
      
        $productRepository->adminCreate($data);

        $this->clear();
        $this->dispatch('reRenderParent');
        $this->dispatch('hide-modal','exampleModal');
        $this->dispatch('show-notify-modal','created-alert');
    }

    public function clear(){
        $this->title = '';
        $this->description = '';
        $this->image = '';
    }

    public function rules(){
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ];
    }
}
