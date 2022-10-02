<?

namespace Models;
use Illuminate\Database\Eloquent\Model;

class ComponentContestsWorks extends Model {

	protected $table = 'contests_works';

	protected $guarded = [];
	public $timestamps = false;

	protected $primaryKey = 'id';

	public function nominate()
	{
			return $this->hasOne(ComponentContestsNominations::class, 'id', 'nomination_id');
	}
}



