<?php
namespace thirdly\acl\OpenAPIAnotations\schemas;
/**
 * @OA\Schema(
 *     description="RegisterRequestBody schema model",
 *     title="RegisterRequestBody model",
 *     required={}
 * )
 */
class RegisterRequestBody
{
    /**
     * @OA\Property(
     *     format="string",
     *     description="",
     *     title="first_name",
     * )
     *
     * @var string
     */
    private $first_name;
    /**
     * @OA\Property(
     *     format="int",
     *     description="",
     *     title="phone",
     * )
     *
     * @var integer
     */
    private $phone;
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
     *     format="string",
     *     description="",
     *     title="password_confirmation",
     * )
     *
     * @var string
     */
    private $password_confirmation;

}
