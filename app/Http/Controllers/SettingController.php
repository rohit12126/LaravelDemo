<?php

namespace App\Http\Controllers;

use App\Setting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $settings = Setting::where('status','=','1')->get();
        return  view('admin.setting.index',compact('settings'));
    }

    public function save(Request $request)
    {
        $data = $request->all();   

        $values = $data['setting_name'];
        $ids = $data['ids'];
        $settingData = array_combine($ids, $values);
        
        foreach ($settingData as $id => $val) {
          $setting = Setting::where('setting_id', $id)
                      ->update(['setting_value' => $val]);  
        }
        session()->flash('success', __('message.setting_update.success'));        
        return redirect()->route('setting.index');
    }
}
