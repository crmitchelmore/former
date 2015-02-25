<?php
namespace Former\Facades;

use Former\FormerServiceProvider;
use Illuminate\Support\Facades\Facade;

/**
 * Former facade for the Laravel framework
 * @method static \Former\Form\Fields\Checkbox checkbox(String $checkbox_name)
 * @method static \Former\Form\Fields\Button button(String $field_name)
 * @method static \Former\Form\Fields\Input input(String $field_name)
 * @method static \Former\Form\Fields\File file(String $field_name)
 * @method static \Former\Form\Fields\Hidden hidden(String $field_name)
 * @method static \Former\Form\Fields\Plaintext plaintext(String $field_name)
 * @method static \Former\Form\Fields\Radio radio(String $field_name)
 * @method static \Former\Form\Fields\Select select(String $field_name)
 * @method static \Former\Form\Fields\Tabletext tabletext(String $field_name)
 * @method static \Former\Form\Fields\Textarea textarea(String $field_name)
 * @method static \Former\Form\Fields\Uneditable uneditable(String $field_name)
 *
 * @method static \Former\Traits\Field text(String $field_name)
 * @method static \Former\Traits\Field color(String $field_name)
 * @method static \Former\Traits\Field date(String $field_name)
 * @method static \Former\Traits\Field email(String $field_name)
 * @method static \Former\Traits\Field month(String $field_name)
 * @method static \Former\Traits\Field number(String $field_name)
 * @method static \Former\Traits\Field range(String $field_name)
 * @method static \Former\Traits\Field search(String $field_name)
 * @method static \Former\Traits\Field tel(String $field_name)
 * @method static \Former\Traits\Field time(String $field_name)
 * @method static \Former\Traits\Field url(String $field_name)
 * @method static \Former\Traits\Field week(String $field_name)
 * @method static \Former\Traits\Field datetime(String $field_name)
 * @method static \Former\Traits\Field datetime_local(String $field_name)
 */
class Former extends Facade
{
	/**
	 * Get the registered component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		if (!static::$app) {
			static::$app = FormerServiceProvider::make();
		}

		return 'former';
	}
}
