<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PenyakitResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'penyebab_penyakit' => $this->penyebab_penyakit,
            'pengendalian' => $this->pengendalian,
            'penularan_penyakit' => $this->penularan_penyakit,
            'waktu_terjadi_serangan' => $this->waktu_terjadi_serangan,
            'categories' => $this->categories->map(function ($category) {
                return [
                    'id' => $category->id,
                    'title' => $category->name
                ];
            }),
            'background_image' => $this->background_image ?
                getStorageAssetFile($this->background_image) : null,
            'daerah_persebaran_image' => $this->daerah_persebaran_image ?
                getStorageAssetFile($this->daerah_persebaran_image) : null,
            'images' => $this->images->map(function ($image) {
                return [
                    'id' => $image->id,
                    'description' => $image->description,
                    'image' => getStorageAssetFile($image->image)
                ];
            }),
        ];
    }
}
