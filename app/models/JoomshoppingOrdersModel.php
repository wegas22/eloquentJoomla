<?

namespace Wegas\Models;
use Illuminate\Database\Eloquent\Model;

class JoomshoppingOrdersModel extends Model {

	protected $table = 'jshopping_orders';

	protected $guarded = [];
	public $timestamps = false;

	protected $primaryKey = 'order_id';
}

