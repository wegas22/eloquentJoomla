<?

namespace Models;
use Illuminate\Database\Eloquent\Model;

class JoomshoppingOrderHashModel extends Model {

	protected $table = 'jshopping_order_hash';

	protected $guarded = [];
	public $timestamps = false;

	protected $primaryKey = 'id';
}

