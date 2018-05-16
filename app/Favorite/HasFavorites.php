<?php

namespace App\Favorite;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;

/**
 * Model relationship for favories system
 */
trait HasFavorites
{

	/**
	 * @return string
	 */
	protected function getRelatedPivotKey(): string
	{
		return 'post_id';
	}

	/**
	 * @return BelongsToMany
	 */
	public function favorites(): BelongsToMany
	{
		$model           = get_called_class();
		$modelParts      = explode('\\', $model);
		$foreignPivotKey = strtolower(end($modelParts)) . '_id';

		return $this
			->belongsToMany($model, 'favorites', $foreignPivotKey, $this->getRelatedPivotKey())
			->withTimeStamps();
	}

}