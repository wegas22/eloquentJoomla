<?

namespace Wegas\Models;
use Illuminate\Database\Eloquent\Model;

class ComponentContestsItems extends Model {

	protected $table = 'contests';

	protected $guarded = [];
	public $timestamps = false;

	protected $primaryKey = 'id';



	public function works()
	{
			return $this->hasMany(ComponentContestsWorks::class, 'contest_id', 'id')->with('nominate');
	}
}



