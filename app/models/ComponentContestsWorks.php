<?

namespace Wegas\Models;
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
	public function contest()
	{
			return $this->hasOne(ComponentContestsItems::class, 'id', 'contest_id');
	}
	public function category()
	{
			return $this->hasOne(ComponentContestsCategory::class, 'id', 'category_id');
	}

}



