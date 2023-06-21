<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\AccessToken
 *
 * @property int $id
 * @property string $created_at
 * @property int $user_id
 * @property string $token
 * @property int $expires
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|AccessToken newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AccessToken newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AccessToken query()
 * @method static \Illuminate\Database\Eloquent\Builder|AccessToken whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AccessToken whereExpires($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AccessToken whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AccessToken whereToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AccessToken whereUserId($value)
 * @mixin \Eloquent
 */
	class IdeHelperAccessToken {}
}

namespace App\Models{
/**
 * App\Models\Dealing
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property string|null $work
 * @property int|null $user_id
 * @property int|null $professional_id
 * @property-read \App\Models\Professional|null $professional
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Dealing newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dealing newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Dealing query()
 * @method static \Illuminate\Database\Eloquent\Builder|Dealing whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dealing whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dealing whereProfessionalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dealing whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Dealing whereWork($value)
 * @mixin \Eloquent
 */
	class IdeHelperDealing {}
}

namespace App\Models{
/**
 * App\Models\Favorite
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property int $user_id
 * @property int $professional_id
 * @property-read \App\Models\Professional $professional
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite query()
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite whereProfessionalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Favorite whereUserId($value)
 * @mixin \Eloquent
 */
	class IdeHelperFavorite {}
}

namespace App\Models{
/**
 * App\Models\Handshake
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Handshake newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Handshake newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Handshake notExpires(string $uuid)
 * @method static \Illuminate\Database\Eloquent\Builder|Handshake query()
 * @mixin \Eloquent
 */
	class IdeHelperHandshake {}
}

namespace App\Models{
/**
 * App\Models\Job
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property bool $active
 * @property int|null $parent_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Job> $children
 * @property-read int|null $children_count
 * @property-read Job|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|Job active()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Job query()
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Job whereSlug($value)
 * @mixin \Eloquent
 */
	class IdeHelperJob {}
}

namespace App\Models{
/**
 * App\Models\Like
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property int $professional_id
 * @property int $user_id
 * @property-read \App\Models\Professional $professional
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Like newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Like newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Like query()
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereProfessionalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Like whereUserId($value)
 * @mixin \Eloquent
 */
	class IdeHelperLike {}
}

namespace App\Models{
/**
 * App\Models\Location
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property bool $active
 * @property int|null $parent_id
 * @property-read \Illuminate\Database\Eloquent\Collection<int, Location> $children
 * @property-read int|null $children_count
 * @property-read Location|null $parent
 * @method static \Illuminate\Database\Eloquent\Builder|Location active()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Location query()
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereParentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Location whereSlug($value)
 * @mixin \Eloquent
 */
	class IdeHelperLocation {}
}

namespace App\Models{
/**
 * App\Models\Media
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon $updated_at
 * @property string $type
 * @property string $hash
 * @property string $assignment
 * @property string|null $name
 * @property array|null $url
 * @property int $user_id
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Media newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Media query()
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereAssignment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereHash($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Media whereUserId($value)
 * @mixin \Eloquent
 */
	class IdeHelperMedia {}
}

namespace App\Models{
/**
 * App\Models\Professional
 *
 * @property string|null $company_name
 * @property string|null $description
 * @property array|null $services
 * @property array|null $products
 * @property string|null $address
 * @property array|null $geolocation
 * @property bool $approved
 * @property int $user_id
 * @property int|null $job_id
 * @property-read \App\Models\Job|null $job
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Like> $likes
 * @property-read int|null $likes_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Review> $reviews
 * @property-read int|null $reviews_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Professional newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Professional newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Professional query()
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereCompanyName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereGeolocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereJobId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereProducts($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereServices($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Professional whereUserId($value)
 * @mixin \Eloquent
 */
	class IdeHelperProfessional {}
}

namespace App\Models{
/**
 * App\Models\Review
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int $rating
 * @property string|null $content
 * @property int $professional_id
 * @property int $user_id
 * @property-read \App\Models\Professional $professional
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Review newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Review query()
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereProfessionalId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereRating($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Review whereUserId($value)
 * @mixin \Eloquent
 */
	class IdeHelperReview {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string $name
 * @property string|null $phone
 * @property bool $phone_verified
 * @property string $email
 * @property bool $email_verified
 * @property string|null $username
 * @property string|null $password
 * @property string|null $gender
 * @property array|null $photo_url
 * @property array|null $cover_url
 * @property bool $active
 * @property string|null $provider
 * @property string|null $provider_id
 * @property int|null $city_id
 * @property int|null $town_id
 * @property-read \App\Models\Location|null $city
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Dealing> $dealings
 * @property-read int|null $dealings_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Favorite> $favorites
 * @property-read int|null $favorites_count
 * @property-read \App\Models\Professional|null $professional
 * @property-read \App\Models\Location|null $town
 * @method static \Illuminate\Database\Eloquent\Builder|User alreadyExists(string $email, string $phone)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCoverUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhoneVerified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhotoUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProvider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProviderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTownId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withLocation()
 * @method static \Illuminate\Database\Eloquent\Builder|User wrap(array $relations = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User wrapped()
 * @mixin \Eloquent
 */
	class IdeHelperUser {}
}

namespace App\Models{
/**
 * App\Models\UserAuth
 *
 * @property mixed $password
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuth newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuth newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserAuth query()
 * @mixin \Eloquent
 */
	class IdeHelperUserAuth {}
}

