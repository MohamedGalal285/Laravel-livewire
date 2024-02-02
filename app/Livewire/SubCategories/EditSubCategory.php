<?php

namespace App\Livewire\SubCategories;

use App\Repositories\SubCategories\SubCategoryRepository;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class EditSubCategory extends Component
{
    use WithFileUploads;

    public $sub_category;
    public $title;
    public $description;
    public $image;

    #[On('getData')]
    public function getData($id, SubCategoryRepository $sub_categoryRepository)
    {
        $this->sub_category = $sub_categoryRepository->find($id);
        $this->title = $this->sub_category->title;
        $this->description = $this->sub_category->description;
        $this->image = $this->sub_category->image;
    }
    public function render()
    {
        return view('livewire.sub_categories.edit-sub_category');
    }

    public function submit(SubCategoryRepository $sub_categoryRepository){
        $data = $this->validate();
        $sub_categoryRepository->adminUpdate($data,$this->sub_category);
        return redirect(route('admin.sub_categories.index'))->with('success','SubCategory Updated Successfully');
    }
    public function rules(){
        return [
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image',
        ];
    }
}
