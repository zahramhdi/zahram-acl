<?php
namespace thirdly\acl\OpenAPIAnotations\schemas;
/**
 * @OA\Schema(
 *     description="UpdateRoleRequestBody schema model",
 *     title="UpdateRoleRequestBody model",
 *     required={}
 * )
 */
class UpdateRoleRequestBody
{
    /**
     * @OA\Property(
     *     format="string",
     *     description="",
     *     title="name",
     * )
     *
     * @var string
     */
    private $name;
    /**
     * @OA\Property(
     *     format="string",
     *     description="",
     *     title="description",
     * )
     *
     * @var string
     */
    private $description;

    /**
     * @OA\Property(
     *     format="array",
     *     description="",
     *     title="permission_id",
     * )
     *
     * @var array
     */
    private $permission_id;


}
