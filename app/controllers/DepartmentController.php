<?php

class DepartmentController extends BaseController{
    /**
     * 医院科室控制类, 主要处理按科室预约页面的请求
     */

    /**
     * 返回医院一级科室列表
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDepartmentLevelOne()
    {
        $response = Response::json(DepartmentCategory::where('level', '=', '1')->get());
        return $response;
    }

    /**
     * 根据医院一级科室的id查询并返回其二级科室
     *
     * @param $department_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getDepartmentLevelTwo($department_id)
    {
        $response = Response::json(DepartmentCategory::where('parent_id', '=', $department_id)->get());
        return $response;
    }
}