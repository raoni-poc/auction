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
 * App\Models\AccountStatus
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Company[] $companies
 * @property-read int|null $companies_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\AccountStatus whereUpdatedAt($value)
 */
	class AccountStatus extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Address
 *
 * @property int $id
 * @property int $city_id
 * @property string $number
 * @property string $zip_code
 * @property string $neighborhood
 * @property string $complement
 * @property string $note
 * @property string $address
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Route[] $asDestinationRoute
 * @property-read int|null $as_destination_route_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Route[] $asOriginRoute
 * @property-read int|null $as_origin_route_count
 * @property-read \App\Models\City $city
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereCityId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereComplement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereNeighborhood($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Address whereZipCode($value)
 */
	class Address extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Bid
 *
 * @property int $id
 * @property float $value
 * @property int $offer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Offer $offer
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid whereOfferId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Bid whereValue($value)
 */
	class Bid extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Cargo
 *
 * @property int $id
 * @property string $cargo
 * @property string $packing
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property-read int|null $offers_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Requirement[] $requirements
 * @property-read int|null $requirements_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo whereCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo wherePacking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Cargo whereUpdatedAt($value)
 */
	class Cargo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\City
 *
 * @property int $id
 * @property int $ibge_code
 * @property string $name
 * @property int $state_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Address[] $address
 * @property-read int|null $address_count
 * @property-read \App\Models\State $state
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereIbgeCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereStateId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\City whereUpdatedAt($value)
 */
	class City extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property string $name
 * @property string $trade_name
 * @property int $account_status_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AccountStatus $accountStatus
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereAccountStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereTradeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Company whereUpdatedAt($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Country
 *
 * @property int $id
 * @property string $name
 * @property string $abbreviation
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\State[] $states
 * @property-read int|null $states_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereAbbreviation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Country whereUpdatedAt($value)
 */
	class Country extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Document
 *
 * @property int $id
 * @property int $document_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\DocumentType $documentType
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Document newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Document newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Document query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Document whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Document whereDocumentTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Document whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Document whereUpdatedAt($value)
 */
	class Document extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\DocumentType
 *
 * @property int $id
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Document[] $documents
 * @property-read int|null $documents_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\DocumentType whereUpdatedAt($value)
 */
	class DocumentType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Offer
 *
 * @property int $id
 * @property int $route_id
 * @property int $cargo_id
 * @property int $offer_type_id
 * @property float $start_price
 * @property float $first_positive_price
 * @property float $current_price
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $bids
 * @property-read int|null $bids_count
 * @property-read \App\Models\Cargo $cargo
 * @property-read \App\Models\OfferType $offerType
 * @property-read \App\Models\Route $route
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereCargoId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereCurrentPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereFirstPositivePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereOfferTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereRouteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereStartPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Offer whereUpdatedAt($value)
 */
	class Offer extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\OfferType
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property-read int|null $offers_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OfferType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OfferType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\OfferType query()
 */
	class OfferType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Permission whereUpdatedAt($value)
 */
	class Permission extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Requirement
 *
 * @property int $id
 * @property string $name
 * @property int $requirement_type_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Cargo[] $cargos
 * @property-read int|null $cargos_count
 * @property-read \App\Models\RequirementType $requirementType
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement whereRequirementTypeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Requirement whereUpdatedAt($value)
 */
	class Requirement extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\RequirementType
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Requirement[] $requirement
 * @property-read int|null $requirement_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RequirementType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RequirementType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RequirementType query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RequirementType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RequirementType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RequirementType whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\RequirementType whereUpdatedAt($value)
 */
	class RequirementType extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Role
 *
 * @property int $id
 * @property string $name
 * @property string $guard_name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereGuardName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Role whereUpdatedAt($value)
 */
	class Role extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Route
 *
 * @property int $id
 * @property int $address_origin_id
 * @property int $address_destination_id
 * @property int $next_route_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Address $destination
 * @property-read \App\Models\Route $nextRoute
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Offer[] $offers
 * @property-read int|null $offers_count
 * @property-read \App\Models\Address $origin
 * @property-read \App\Models\Route $previousRoute
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereAddressDestinationId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereAddressOriginId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereNextRouteId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Route whereUpdatedAt($value)
 */
	class Route extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\State
 *
 * @property int $id
 * @property string $name
 * @property string $abbreviation
 * @property int $country_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\City[] $cities
 * @property-read int|null $cities_count
 * @property-read \App\Models\Country $country
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereAbbreviation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereCountryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\State whereUpdatedAt($value)
 */
	class State extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property int|null $role_id
 * @property int $account_status_id
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\AccountStatus $accountStatus
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereAccountStatusId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRoleId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

