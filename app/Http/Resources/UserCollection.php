<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class UserCollection extends ResourceCollection
{
//    public $collects = 'App\Http\Resources\Member';

    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
///*        return [
//            'id' => $this->id,
//            'name' => $this->name,
//            'email' => 44444,
//            'created_at' => $this->created_at,
//            'updated_at' => $this->updated_at,
//        ];*/
//        return [
//            'data' => $this->collection,
//            'links' => [
//                'self' => 'link-value',
//            ],
//        ];

    }

    /**
     * 返回应该和资源一起返回的其他数据数组
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function with($request)
    {
        return [
            'meta' => [
                'key' => 'value',
            ],
        ];
    }

}
