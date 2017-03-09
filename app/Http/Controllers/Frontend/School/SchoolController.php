<?php
namespace App\Http\Controllers\Frontend\School;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Frontend\School\School;

class SchoolController extends Controller
{
    public function __construct()
    {
        $this->model = new School();
    }

    /**
     * 添加学校列表
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $province = $this->model->getProvince();
        return view('frontend.school.addSchool',['province' => $province]);
    }

    /**
     * 提示
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function prompt()
    {
        return view('frontend/school.prompt');
    }

    /**
     * 三级联动
     * @param Request $request
     * @return string
     */
    public function linkage(Request $request)
    {
        $regionId = $request->input('region_id');
        $regionName = $this->model->getRegionName($regionId);
        return json_encode($regionName);
    }

    /**
     * 添加学校
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector|\Illuminate\View\View
     */
    public function addSchool(Request $request)
    {
        if($request->isMethod('post')){

            $this->validate($request, [
                'school_name' => 'required|max:100',
                'username' => 'required',
            ]);

            $data = $request->all();
            $data['ctime'] = time();
            unset($data['_token']);
            $schoolName = $this->model->getSchoolName($data['school_name']);
            if($schoolName == array()){
                $res = $this->model->addSchool($data);
                if($res){
                    return view('frontend/school.prompt',['error' => '申请成功','url' => 'index','color' => 'green']);
                }else{
                    return view('frontend/school.prompt',['error' => '申请失败','url' => 'addSchoolList','color' => 'red']);
                }
            }else{
                return view('frontend/school.prompt',['error' => '已经有人申请过啦','url' => 'addSchoolList','color' => 'red']);
            }

        }else{
            return redirect('frontend/addSchool');
        }
    }
}
?>