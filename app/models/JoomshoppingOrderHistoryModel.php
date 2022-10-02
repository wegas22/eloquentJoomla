<?

namespace Wegas\Models;
use Illuminate\Database\Eloquent\Model;

class JoomshoppingOrderHistoryModel extends Model {

	protected $table = 'jshopping_order_history';

	protected $guarded = [];
	public $timestamps = false;

	protected $primaryKey = 'order_history_id';
}

