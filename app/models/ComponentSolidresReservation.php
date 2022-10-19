<?

namespace Wegas\Models;
use Illuminate\Database\Eloquent\Model;

class ComponentSolidresReservation extends Model {

	protected $table = 'sr_reservations';

	protected $guarded = [];
	public $timestamps = false;

	protected $primaryKey = 'id';

	public function extra_xref() {
		return $this->belongsToMany(ComponentSolidresRoom::class, 'sr_reservation_room_extra_xref', 'reservation_id', 'room_id')->withPivot('extra_name', 'extra_quantity', 'extra_price', 'room_label');
	}
}



