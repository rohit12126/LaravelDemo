<?php
namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\CategoryValidateRequest;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    public function __construct() {
        $this->categoryService = new CategoryService;//intiate category service instance
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return  view('admin.category.index');
    }

    public function getCategoriesData(){
        $categories = Category::query()->with('parent')->get();
        return $this->categoryService->fetchData($categories); 
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = $this->categoryService->getCategoriesTree(); 
        return  view('admin.category.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryValidateRequest $request)
    {
        $imageName = $this->categoryService->uploadCategoryImage($request->file('photo'));

        $category = new Category;
        $category->category_name = $request->category_name;
        $category->parent_category_id = $request->parent_category_id;
        $category->photo = $imageName;
        $category->photo_thumbnail = $imageName;
        $category->status = $request->status;
        $category->on_homepage = $request->on_homepage;
        $category->save();

        session()->flash('success', __('message.add_category.success'));        
        return redirect()->route('category.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($category_id)
    {
        $categoryData = $this->categoryService->checkCategoryExist($category_id);
        $categories = $this->categoryService->getCategoriesTree(0,'',$categoryData->parent_category_id,$category_id); 

        if($categoryData){
            return  view('admin.category.edit',compact('categoryData','categories'));
        }else{
            session()->flash('error', __('message.edit_coin.edit_get_error'));
            return redirect()->route('category.index');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update($category_id,CategoryValidateRequest $request)
    {
        if(!empty($request->file('photo'))){
           $imageName = $this->categoryService->uploadCategoryImage($request->file('photo'));
           
           $photo = $imageName; 
           $photo_thumbnail = $imageName; 
           
           $photoPath =  public_path().'/uploads/category/photo/'; 
           $photoThumbPath =  public_path().'/uploads/category/photo_thumbnail/'; 
           $this->categoryService->removeImageFromDir($photoPath.$request->photo_name);
           $this->categoryService->removeImageFromDir($photoThumbPath.$request->photo_thumb_name);
        }else{
           $photo = $request->photo_name; 
           $photo_thumbnail = $request->photo_thumb_name; 
        }        
        $categoryData = [
                        'category_name' => $request->category_name,
                        'parent_category_id' => $request->parent_category_id,
                        'on_homepage' => $request->on_homepage,
                        'status' => $request->status,
                        'photo' => $photo,
                        'photo_thumbnail'=> $photo_thumbnail
                        ];
        $res = Category::where('category_id',$category_id)->update($categoryData);            
        session()->flash('success', __('message.edit_category.success'));        
        return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    public function getName(){
      $categories = Category::find(2)->category_name; 
      dd($categories);
    }
    
}


