<?php

namespace App\Livewire\Products;

use App\Repositories\Products\ProductRepository;
use Livewire\Component;

class ListProducts extends Component
{
    public $productRepository;
    public $products;
    public $delete_id;

    protected $listeners = ['reRenderParent'];

    public function reRenderParent(ProductRepository $productRepository)
    {
        $this->render($productRepository);
    }

    public function render(ProductRepository $productRepository)
    {
        $this->products = $productRepository->all();
        return view('livewire.products.list-products')
        ->extends('layouts.layout')
        ->section('content');
    }

    public function edit($id)
    {
        $this->dispatch('getData', $id);
        $this->dispatch('show-modal', 'admin-edit-product');
    }
    public function deleteId($id)
    {
        $this->delete_id = $id;
    }
    public function delete(ProductRepository $productRepository)
    {
        $product = $productRepository->find($this->delete_id);
        if ($product) {
            $productRepository->delete($product);
            return redirect(route('admin.products.index'))->with('success', 'product deleted successfully!');
        }
        return redirect(route('admin.products.index'))->with('error', 'product not found!');
    }
}
