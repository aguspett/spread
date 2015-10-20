<?php
/**
 * Created by PhpStorm.
 * User: agustin
 * Date: 17/10/15
 * Time: 10:19
 */

namespace App\Traits;


trait UploadImages
{
    /**
     * Upload image
     * @param Request $data
     * @return null|string
     */
    public static function uploadImage(
        $data
    ) {

        if ($data->hasFile('photo')) {
            $image_name = time() . "-" . $data->file('photo')->getClientOriginalName();
            $data->file('photo')->move(self::UPLOADS_BASEDIR,
                $image_name);
            $complete_route = self::UPLOADS_BASEDIR . $image_name;
        } else {
            $complete_route = self::DEFAUL_IMAGES;
        }
        return $complete_route;
    }
}