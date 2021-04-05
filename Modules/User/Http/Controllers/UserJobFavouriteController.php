<?php

namespace Modules\User\Http\Controllers;

use App\Models\Job;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class UserJobFavouriteController extends Controller
{
    public function index(Request $request)
    {
        $jobs = Job::whereHas('favourites', function ($query){
            $query->where('jf_user_id', get_data_user('users'));
        })->orderByDesc('id')
            ->paginate(20);
        $viewData = [
            'jobs' => $jobs
        ];

        return view('user::pages.fob_favourite.index', $viewData);
    }

    /**
     * @param Request $request
     * @param $jobID
     * @return \Illuminate\Http\RedirectResponse
     * Xoá job yêu thích
     */
    public function remove(Request $request, $jobID)
    {
        try{
            \DB::table('job_favourite')->where([
                'jf_job_id' => $jobID,
                'jf_user_id' => get_data_user('users')
            ])->delete();
        }catch (\Exception $exception)
        {
            Log::error($exception->getMessage());
        }
        return redirect()->back();
    }
}
