<?

namespace Models;
use Illuminate\Database\Eloquent\Model;

class JoomshoppingOrderItemModel extends Model {

	protected $table = 'jshopping_order_item';

	protected $guarded = [];
	public $timestamps = false;

	protected $primaryKey = 'order_item_id';
}

