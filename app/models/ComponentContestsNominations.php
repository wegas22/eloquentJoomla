<?

namespace Models;
use Illuminate\Database\Eloquent\Model;

class ComponentContestsNominations extends Model {

	protected $table = 'contests_nominations';

	protected $guarded = [];
	public $timestamps = false;

	protected $primaryKey = 'id';

}