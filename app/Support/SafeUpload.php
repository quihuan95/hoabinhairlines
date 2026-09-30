<?php

namespace App\Support;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class SafeUpload
{
    const IMAGE_EXTENSIONS = ['jpg', 'jpeg', 'png', 'gif', 'webp'];

    const IMAGE_MIMES = ['image/jpeg', 'image/png', 'image/gif', 'image/webp'];

    const MAX_BYTES = 5 * 1024 * 1024;

    /**
     * Validate an uploaded image by its real content and move it with a server-generated name.
     *
     * @return string Stored file name (without directory)
     */
    public static function storeImage(UploadedFile $file, string $directory, string $field = 'image'): string
    {
        return self::store($file, $directory, self::IMAGE_EXTENSIONS, self::IMAGE_MIMES, $field);
    }

    /**
     * @param string[] $extensions Allowed extensions, detected from file content
     * @param string[] $mimes      Allowed MIME types, detected from file content
     */
    public static function store(UploadedFile $file, string $directory, array $extensions, array $mimes, string $field = 'file'): string
    {
        if (!$file->isValid() || $file->getSize() > self::MAX_BYTES) {
            throw ValidationException::withMessages([$field => 'File tải lên không hợp lệ hoặc vượt quá 5MB.']);
        }

        $mime = strtolower((string) $file->getMimeType());
        $extension = strtolower((string) $file->guessExtension());
        $clientExtension = strtolower($file->getClientOriginalExtension());

        if (!in_array($mime, $mimes, true)
            || !in_array($extension, $extensions, true)
            || !in_array($clientExtension, $extensions, true)) {
            throw ValidationException::withMessages([$field => 'Chỉ cho phép tải lên: '.implode(', ', $extensions).'.']);
        }

        if (strpos($mime, 'image/') === 0 && @getimagesize($file->getRealPath()) === false) {
            throw ValidationException::withMessages([$field => 'File ảnh không hợp lệ.']);
        }

        $baseName = Str::slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME));
        if ($baseName === '') {
            $baseName = 'file';
        }
        $newName = Str::limit($baseName, 80, '').'-'.Str::random(8).'.'.$extension;

        $file->move($directory, $newName);

        return $newName;
    }
}
