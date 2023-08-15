<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionDetail extends Model
{
    use HasFactory;

    protected $table = 'transaction_details';

    protected $fillable = ['transaksi_id', 'valas_id', 'rate', 'qty'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class, 'transaksi_id');
    }

    public function valas()
    {
        return $this->belongsTo(Valas::class, 'valas_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
