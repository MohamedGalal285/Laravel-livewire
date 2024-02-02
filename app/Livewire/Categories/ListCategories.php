<?php

namespace App\Livewire\Categories;

use App\Repositories\Categories\CategoryRepository;
use Livewire\Component;

class ListCategories extends Component
{
    public $categoryRepository;
    public $categories;
    public $delete_id;

    protected $listeners = ['reRenderParent'];

    public function reRenderParent(CategoryRepository $categoryRepository)
    {
        $this->render($categoryRepository);
    }

    public function render(CategoryRepository $categoryRepository)
    {
        $this->categories = $categoryRepository->all();
        return view('livewire.categories.list-categories')
        ->extends('layouts.layout')
        ->section('content');
    }

    public function edit($id)
    {
        $this->dispatch('getData', $id);
        $this->dispatch('show-modal', 'admin-edit-category');
    }
    public function deleteId($id)
    {
        $this->delete_id = $id;
    }
    public function delete(CategoryRepository $categoryRepository)
    {
        $category = $categoryRepository->find($this->delete_id);
        if ($category) {
            $categoryRepository->delete($category);
            return redirect(route('admin.categories.index'))->with('success', 'category deleted successfully!');
        }
        return redirect(route('admin.categories.index'))->with('error', 'category not found!');
    }
}
