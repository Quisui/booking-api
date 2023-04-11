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
