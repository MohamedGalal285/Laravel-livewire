<?php

namespace App\Livewire\SubCategories;

use App\Repositories\SubCategories\SubCategoryRepository;
use Livewire\Component;

class ListSubCategories extends Component
{
    public $sub_categoryRepository;
    public $sub_categories;
    public $delete_id;

    protected $listeners = ['reRenderParent'];

    public function reRenderParent(SubCategoryRepository $sub_categoryRepository)
    {
        $this->render($sub_categoryRepository);
    }

    public function render(SubCategoryRepository $sub_categoryRepository)
    {
        $this->sub_categories = $sub_categoryRepository->all();
        return view('livewire.sub_categories.list-sub_categories')
        ->extends('layouts.layout')
        ->section('content');
    }

    public function edit($id)
    {
        $this->dispatch('getData', $id);
        $this->dispatch('show-modal', 'admin-edit-sub_category');
    }
    public function deleteId($id)
    {
        $this->delete_id = $id;
    }
    public function delete(SubCategoryRepository $sub_categoryRepository)
    {
        $sub_category = $sub_categoryRepository->find($this->delete_id);
        if ($sub_category) {
            $sub_categoryRepository->delete($sub_category);
            return redirect(route('admin.sub_categories.index'))->with('success', 'sub_category deleted successfully!');
        }
        return redirect(route('admin.sub_categories.index'))->with('error', 'sub_category not found!');
    }
}
