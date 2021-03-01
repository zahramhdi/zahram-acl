<?php


namespace thirdly\acl\Helper;



class Error
{
    public static function error($msg,$status ,$errors=[])
    {
       return response()->json([
            'message' => $msg,
            'errors' =>$errors
        ], $status);
    }
}
