<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Career;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Str;

class AdminCareerController extends Controller
{
    public function index()
    {
        $careers = Career::all();
        $viewData = [
            'careers' => $careers
        ];

        return view('admin::career.index', $viewData);
    }

    public function create()
    {
        return view('admin::career.create');
    }

    public function store(Request $request)
    {
        try{
            $data = $request->except('c_avatar');
            $data['c_slug']     = Str::slug($request->c_name);
            $data['created_at'] = Carbon::now();
            if ($request->c_avatar) {
                $image = upload_image('c_avatar');
                if ($image['code'] == 1)
                    $data['c_avatar'] = $image['name'];
            }

            Career::create($data);
        }catch (\Exception $exception)
        {

        }
        return redirect()->route('get_admin.career.index');
    }

    public function edit($id)
    {
        $career = Career::find($id);
        return view('admin::career.update', compact('career'));
    }

    public function update(Request $request, $id)
    {
        try{
            $data = $request->except('c_avatar');
            $data['c_slug']     = Str::slug($request->c_name);
            $data['created_at'] = Carbon::now();
            if ($request->c_avatar) {
                $image = upload_image('c_avatar');
                if ($image['code'] == 1)
                    $data['c_avatar'] = $image['name'];
            }

            Career::find($id)->update($data);
        }catch (\Exception $exception)
        {

        }
        return redirect()->back();
    }
}
