<?php
namespace thirdly\acl\OpenAPIAnotations\schemas;
/**
 * @OA\Schema(
 *     description="ForgotPasswordRequestBody schema model",
 *     title="ForgotPasswordRequestBody model",
 *     required={}
 * )
 */
class ForgotPasswordRequestBody
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

}
