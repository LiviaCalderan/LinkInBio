<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    /** @use HasFactory<\Database\Factories\LinkFactory> */
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function moveUp()
    {
        $this->move(-1);

    }

    public function moveDown()
    {
        $this->move(1);

    }

    /**
     * Function to reorder the link
     * 
     * @param int $to
     * @return void
     */
    private function move($to)
    {
        // to = +1 or -1

        $sort = $this->sort;
        $newSort = $sort + $to;

        $user = $this->user;

        $swapWith = $user->links()->where('sort', '=', $newSort)->first();
        $this->fill(['sort' => $newSort])->save();
        $swapWith->fill(['sort' => $sort])->save();
    }
}
