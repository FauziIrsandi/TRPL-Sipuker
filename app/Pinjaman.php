<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id_peminjam
 * @property string $nama_peminjam
 * @property float $besar_pinjaman
 * @property string $jenis_pinjaman
 * @property string $metode_pelunasan
 * @property string $tanggal_pinjam
 * @property int $id_status
 */
class Pinjaman extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pinjaman';

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id_peminjam';

    /**
     * @var array
     */
    protected $fillable = ['nama_peminjam', 'besar_pinjaman', 'jenis_pinjaman', 'metode_pelunasan', 'tanggal_pinjam', 'id_status','created_at', 'updated_at'];

}
