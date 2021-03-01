<?php


namespace thirdly\acl;


class Acl
{
    public function route_Path()
    {
       return config('acl.route_path', 'api/acl');
    }

    public function need_auth()
    {
        return config('acl.need_auth', true);

    }

}