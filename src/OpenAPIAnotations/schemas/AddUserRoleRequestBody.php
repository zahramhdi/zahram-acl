<?php
namespace thirdly\acl\OpenAPIAnotations\schemas;
/**
 * @OA\Schema(
 *     description="AddUserRoleRequestBody schema model",
 *     title="AddUserRoleRequestBody model",
 *     required={}
 * )
 */
class AddUserRoleRequestBody
{

    /**
     * @OA\Property(
     *     format="int",
     *     description="",
     *     title="user_id",
     * )
     *
     * @var integer
     */
    private $user_id;
    /**
     * @OA\Property(
     *     format="array",
     *     description="",
     *     title="role_id",
     * )
     *
     * @var string
     */
    private $role_id;

}
