<?php
namespace thirdly\acl\OpenAPIAnotations\schemas;
/**
 * @OA\Schema(
 *     description="LoginRequestBody schema model",
 *     title="LoginRequestBody model",
 *     required={}
 * )
 */
class LoginRequestBody
{
    /**
     * @OA\Property(
     *     format="string",
     *     description="",
     *     title="email",
     * )
     *
     * @var string
     */
    private $email;


    /**
     * @OA\Property(
     *     format="string",
     *     description="",
     *     title="password",
     * )
     *
     * @var string
     */
    private $password;
    /**
     * @OA\Property(
     *     format="boolean",
     *     description="",
     *     title="remember_me",
     * )
     *
     * @var boolean
     */
    private $remember_me;


}
