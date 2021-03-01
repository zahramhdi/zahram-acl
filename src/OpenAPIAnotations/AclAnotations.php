<?php
/**
 * @OA\Post(
 *      path="/api/acl/user/register",
 *      tags={"Auth"},
 *      summary="register user",
 *      description="",
 *       @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/RegisterRequestBody")
 *     ),
 *     @OA\Response(response=200, description="Successful", @OA\JsonContent()),
 *     @OA\Response(response=204, description="Successful"),
 *     @OA\Response(response=400, description="Bad request"),
 *     @OA\Response(response=404, description="Not Found"),
 *     @OA\Response(response=401, description="Unauthenticated", @OA\JsonContent()),
 * )
 */
/**
 * @OA\Post(
 *      path="/api/acl/user/login",
 *      tags={"Auth"},
 *      summary="login user",
 *      description="",
 *       @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/LoginRequestBody")
 *     ),
 *     @OA\Response(response=200, description="Successful", @OA\JsonContent()),
 *     @OA\Response(response=204, description="Successful"),
 *     @OA\Response(response=400, description="Bad request"),
 *     @OA\Response(response=404, description="Not Found"),
 *     @OA\Response(response=401, description="Unauthenticated", @OA\JsonContent()),
 * )
 */

/**
 * @OA\Post(
 *      path="/api/acl/user/forget-password",
 *      tags={"Auth"},
 *      summary="forgot password user",
 *      description="",
 *       @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/ForgotPasswordRequestBody")
 *     ),
 *     @OA\Response(response=200, description="Successful", @OA\JsonContent()),
 *     @OA\Response(response=204, description="Successful"),
 *     @OA\Response(response=400, description="Bad request"),
 *     @OA\Response(response=404, description="Not Found"),
 *     @OA\Response(response=401, description="Unauthenticated", @OA\JsonContent()),
 * )
 */

/**
 * @OA\Get(
 *      path="/api/acl/user/logout",
 *      tags={"Auth"},
 *      summary="logout user",
 *      description="",
 *     @OA\Response(response=200, description="Successful", @OA\JsonContent()),
 *     @OA\Response(response=204, description="Successful"),
 *     @OA\Response(response=400, description="Bad request"),
 *     @OA\Response(response=404, description="Not Found"),
 *     @OA\Response(response=401, description="Unauthenticated", @OA\JsonContent()),
 *      security={
 *         {
 *             "bearerAuth": {}
 *         }
 *     },
 * )
 */



/**
 * @OA\Get(
 *      path="/api/acl/roles",
 *      tags={"Role"},
 *      summary="get roles",
 *      description="",
 *     @OA\Response(response=200, description="Successful", @OA\JsonContent()),
 *     @OA\Response(response=204, description="Successful"),
 *     @OA\Response(response=400, description="Bad request"),
 *     @OA\Response(response=404, description="Not Found"),
 *     @OA\Response(response=401, description="Unauthenticated", @OA\JsonContent()),
 *      security={
 *         {
 *             "bearerAuth": {}
 *         }
 *     },
 * )
 */
/**
 * @OA\Post(
 *      path="/api/acl/roles/{role}/show",
 *      tags={"Role"},
 *      summary="show role",
 *      description="",
 *        @OA\Parameter(
 *         name="role",
 *         example="1",
 *         in="path",
 *         description="role id ",
 *         required=true,
 *         explode=true
 *     ),
 *     @OA\Response(response=200, description="Successful", @OA\JsonContent()),
 *     @OA\Response(response=204, description="Successful"),
 *     @OA\Response(response=400, description="Bad request"),
 *     @OA\Response(response=404, description="Not Found"),
 *     @OA\Response(response=401, description="Unauthenticated", @OA\JsonContent()),
 *         security={
 *         {
 *             "bearerAuth": {}
 *         }
 *     },
 * )
 */
/**
 * @OA\Put(
 *      path="/api/acl/roles/{role}/update",
 *      tags={"Role"},
 *      summary="update role",
 *      description="",
 *        @OA\Parameter(
 *         name="role",
 *         example="1",
 *         in="path",
 *         description="role id ",
 *         required=true,
 *         explode=true
 *     ),
 *       @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/UpdateRoleRequestBody")
 *     ),
 *     @OA\Response(response=200, description="Successful", @OA\JsonContent()),
 *     @OA\Response(response=204, description="Successful"),
 *     @OA\Response(response=400, description="Bad request"),
 *     @OA\Response(response=404, description="Not Found"),
 *     @OA\Response(response=401, description="Unauthenticated", @OA\JsonContent()),
 *         security={
 *         {
 *             "bearerAuth": {}
 *         }
 *     },
 * )
 */
/**
 * @OA\Post(
 *      path="/api/acl/roles/store",
 *      tags={"Role"},
 *      summary="store role",
 *      description="",
 *       @OA\RequestBody(
 *         required=true,
 *         @OA\JsonContent(ref="#/components/schemas/UpdateRoleRequestBody")
 *     ),
 *     @OA\Response(response=200, description="Successful", @OA\JsonContent()),
 *     @OA\Response(response=204, description="Successful"),
 *     @OA\Response(response=400, description="Bad request"),
 *     @OA\Response(response=404, description="Not Found"),
 *     @OA\Response(response=401, description="Unauthenticated", @OA\JsonContent()),
 *          security={
 *         {
 *             "bearerAuth": {}
 *         }
 *     },
 * )
 */
/**
 * @OA\Delete(
 *      path="/api/acl/roles/{role}/destroy",
 *      tags={"Role"},
 *      summary="update role",
 *      description="",
 *        @OA\Parameter(
 *         name="role",
 *         example="1",
 *         in="path",
 *         description="role id ",
 *         required=true,
 *         explode=true
 *     ),
 *     @OA\Response(response=200, description="Successful", @OA\JsonContent()),
 *     @OA\Response(response=204, description="Successful"),
 *     @OA\Response(response=400, description="Bad request"),
 *     @OA\Response(response=404, description="Not Found"),
 *     @OA\Response(response=401, description="Unauthenticated", @OA\JsonContent()),
 *         security={
 *         {
 *             "bearerAuth": {}
 *         }
 *     },
 * )
 */



/**
 * @OA\Get(
 *      path="/api/acl/permissions",
 *      tags={"Permission"},
 *      summary="get permissions",
 *      description="",
 *     @OA\Response(response=200, description="Successful", @OA\JsonContent()),
 *     @OA\Response(response=204, description="Successful"),
 *     @OA\Response(response=400, description="Bad request"),
 *     @OA\Response(response=404, description="Not Found"),
 *     @OA\Response(response=401, description="Unauthenticated", @OA\JsonContent()),
 *      security={
 *         {
 *             "bearerAuth": {}
 *         }
 *     },
 * )
 */

/**
 * @OA\Post(
 *      path="/api/acl/permissions/store",
 *      tags={"Permission"},
 *      summary="store permissions",
 *      description="",
 *     @OA\Response(response=200, description="Successful", @OA\JsonContent()),
 *     @OA\Response(response=204, description="Successful"),
 *     @OA\Response(response=400, description="Bad request"),
 *     @OA\Response(response=404, description="Not Found"),
 *     @OA\Response(response=401, description="Unauthenticated", @OA\JsonContent()),
 *       security={
 *         {
 *             "bearerAuth": {}
 *         }
 *     },
 * )
 */

