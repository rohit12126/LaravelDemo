<?php
namespace App\Services;
use DataTables;
use Image;
use App\Category;
use Illuminate\Support\Facades\File;
use DB;
class CategoryService
{
	public function __construct() {
       $this->category = new Category;//intiate category model instance
    }
	public function fetchData($categories){
		
		return \DataTables::of($categories)
        ->editColumn('status', function ($categories) {
            if($categories->status == 1){
                $status = "Active";
            }else{
                $status = "Inactive";
            }
            return $status;
        })
        ->editColumn('on_homepage', function ($categories) {
            if($categories->on_homepage == 1){
                $on_homepage = "Yes";
            }else{
                $on_homepage = "No";
            }
            return $on_homepage;
        })
        ->editColumn('created_at', function ($categories) {
            $date_format = date('d F Y',strtotime($categories->created_at));
            return $date_format;
        })
        ->addColumn('parent_category_name', function ($categories) {
          $parent_name = $categories->parent->category_name ?? 'NA'; 
          return $parent_name;
        })
        ->addColumn('photo_thumb', function ($categories) {
         //"this.onerror=null;this.src='http://example.com/existent-image.jpg';"
          $url=asset("uploads/category/photo_thumbnail/$categories->photo_thumbnail"); 
          return '<img src='.$url.' border="0" height="50" width="50" class="img-rounded" align="center" onerror="" />';
          //return $photo_path;
        })
        ->addColumn('action', function ($categories) {
            return '<a href="'. url('category/'.$categories->category_id.'/edit').'" class="btn btn-primary" data-toggle="tooltip" data-placement="top" title="Edit" >Edit</a>';
        })
        ->rawColumns(['parent_category_name','photo_thumb','action'])
        ->addIndexColumn()
        ->make(true);
	}

	public function checkCategoryExist($category_id){
		$categoryData = $this->category::where('category_id', $category_id)->first();	
		if(is_null($categoryData)){
			return false;
		}else{
			return $categoryData;
		}
	}

    public function uploadCategoryImage($image=''){

        $image_name = time() . '.' . $image->getClientOriginalExtension();
        
        $destinationPath = public_path('/uploads/category/photo_thumbnail');

        $resize_image = Image::make($image->getRealPath());

        $resize_image->resize(100, 100, function($constraint){
          //$constraint->aspectRatio();
        })->save($destinationPath . '/' . $image_name);

        $destinationPath = public_path('/uploads/category/photo');

        $image->move($destinationPath, $image_name);

        return $image_name;
    }

    public function removeImageFromDir($imagepath){

        if(File::exists($imagepath)) {
            File::delete($imagepath);
        }
    }

    public function getCategoriesTree($parent_category_id = 0,$prefix='', $selected_id=0,$category_id=0){
        
        $categories = $this->category::where('parent_category_id','=',$parent_category_id)->where('status','=','1');
            if($category_id!=0){
              /*For hiding it self and self child ids.*/
             //$categories = $categories->where('category_id','!=',$category_id);
            }
        $categories = $categories->get();

        $category = '';
        
        if(count($categories) > 0){
            foreach ($categories as $key => $cat) {
                if($selected_id == $cat->category_id) {
                    $selected = 'selected';
                } else {
                    $selected = '';
                }
                $category .= '<option value="'.$cat->category_id.'" '.$selected.'>'.$prefix .ucfirst($cat->category_name).'</option>';
                $category .= $this->getCategoriesTree($cat->category_id, $prefix . ' - ', $selected_id,$category_id);
            }
        }
        return $category;
    }
}