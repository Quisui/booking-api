# Booking API

# Users

User: One Role or Multiple Roles?
Typically, there are two layers of managing permissions:

Admin adds the permissions and then specifies which roles have certain permissions
For users, the admin/system assigns the ROLES to them, which in itself includes the permissions
In other words, we don't assign permissions to the users, we assign only the roles.

Using sanctum

# properties-apartments
We will use a package called GeocoderLaravel that allows you to easily integrate Google Maps API in your Laravel project.

Observer that gets the gps automatically if there's no geo location sent
check PropertyObserver

Search Filters are in PropertySearchController

The raw SQL query of $condition in the geoobject is taken from this [article](https://inovector.com/blog/get-locations-nearest-the-user-location-with-mysql-php-in-laravel): in our case, we're looking for properties within 10 km distance of our geoobject.


Check tests to review documentation > this is the propertySearchTest


# Facilities
user clicking on the property to choose the apartment. Inside the property view, we need to show the full list of available apartments, with their facilities

Check PropertyShowTest && ApartmentShowTest for more detailed info

Using staudenmeir/eloquent-eager-limit to load eager limit, why?
That take(1) actually means not "one apartment per property" but rather "one apartment in total"! So, if there are multiple properties returned and each of them has apartments, it will NOT return the apartments for the second, third, and other properties.

See trait on Property Model
    use HasEagerLimit;
