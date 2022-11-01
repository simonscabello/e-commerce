<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed|string $name
 * @property mixed|string $original_name
 * @property mixed $mime_type
 * @property mixed|string $url
 * @property mixed|string $path
 * @property mixed $size
 */
class File extends Model
{
    use HasFactory;

    /**
     * @var string[]
     */
    protected $fillable = [
        'name',
        'originalName',
        'mimeType',
        'url',
        'path',
        'size',
    ];
}
