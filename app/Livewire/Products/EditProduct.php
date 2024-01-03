<?php

namespace App\Livewire\Products;

use App\Repositories\Products\ProductRepository;
use Illuminate\Support\Facades\Storage;
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
        $data['user_id'] = auth()->user()->id;
        $oldImage = $this->product->image;
        if ($data['image'] != $oldImage) {
        $data['image'] = $productRepository->saveImage($this->image, 'products-images');
        Storage::disk('public')->delete($oldImage ?? '');
        }
        $productRepository->update($data,$this->product);
        return redirect(route('admin.products.index'))->with('success','Product Updated Successfully');
    }

    public function rules(){
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ];
    }
}
