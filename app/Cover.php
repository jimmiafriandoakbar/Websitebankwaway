<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class Cover extends Model
{
    protected $table = 'cover';

    protected $fillable = [
        'file'
    ];

    public function coverEdit($data)
    {
        $id = decrypt($data);
        $stmtCoverEdit = DB::table('cover')->where('id', $id)->first();

        return $stmtCoverEdit;
    }

    public function coverUpdate(Request $request, $data)
    {
        $id = decrypt($data);
        return $request;

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filePath = $file->store('assetGuest/img/cover');

            $cover = DB::table('cover')->where('id', $id)->first();

            if ($cover) {
                // Hapus file lama jika ada sebelum memperbarui data
                Storage::delete($cover->file);

                $stmtCoverUpdate = DB::table('cover')
                    ->where('id', $id)
                    ->update([
                        'file' => $filePath,
                        'updated_at' => DB::raw('NOW()')
                    ]);

                return $stmtCoverUpdate;
            }
        } else {
            return "No file selected.";
        }
    }
}
