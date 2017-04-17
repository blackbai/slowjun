<?php
namespace App\Http\Controllers\Traits;

use Monolog\Handler\NullHandlerTest;

trait JsonControllerTrait
{

    /**
     * ajax返回json格式规范
     *
     * 错误码规范
     * 100x   业务逻辑错误
     * 400x   找不到或没有权限类错误
     * 500x   系统错误
     *
     * 成功后的成功码可选 200x
     *
     * @return \Illuminate\Http\JsonResponse
     */
    protected function json()
    {
        $args = func_get_args();
        $status = $args[0];
        $json = array('status' => $status);
        if (func_num_args() > 1) {
            if ($status == 1) {
                $json['data'] = $args[1];
                if (isset($args[2])) {
                    $json['success_code'] = $args[2];
                }
            } else {
                $json['error_msg'] = $args[1];
                if (isset($args[2])) {
                    $json['error_code'] = $args[2];
                }
            }
        }
        return response()->json($json);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     *
     * json函数的一种快捷方式，返回找不到对象错误，error_msg为not found  error_code为4004
     *
     */
    protected function json_not_found()
    {
        return $this->json(0, '没有找到', 4004);
    }

    /**
     * @return \Illuminate\Http\JsonResponse
     *
     * json函数的一种快捷方式，返回系统错误，error_msg为system error  error_code为5000
     *
     */
    protected function json_sys_error()
    {
        return $this->json(0, '系统错误', 5000);
    }

    /**
     * @param $data
     * @param null $success_code
     * @return \Illuminate\Http\JsonResponse
     *
     * json函数的一种快捷方式，返回业务成功，成功数据data可选，成功码success_code可选
     */
    protected function json_success($data = NULL, $success_code = NULL)
    {
        return $this->json(1, $data, $success_code);
    }

    /**
     * @param $error_msg
     * @param $error_code
     * @return \Illuminate\Http\JsonResponse
     *
     * json函数的一种快捷方式，返回业务失败，接受错误消息error_msg、错误码error_code
     *
     */
    protected function json_error($error_msg, $error_code= NULL)
    {
        return $this->json(0, $error_msg, $error_code);
    }


}