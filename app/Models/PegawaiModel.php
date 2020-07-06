<?php 
namespace App\Models;
use CodeIgniter\Database\ConnectionInterface;
use CodeIgniter\Model;
 
class PegawaiModel extends Model
{
    protected $table = 'pegawai';
    protected $allowedFields = ['nip', 'nama_pegawai', 'alamat'];
}
