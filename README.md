# Booking API
This api was based on this site [booking](https://www.booking.com/index.es.html?aid=376374;label=esrow-OtlvhU2CXhSVxek50Z_17wS410489931081:pl:ta:p1:p22.563.000:ac:ap:neg:fi:tikwd-65526620:lp9076411:li:dec:dm:ppccp=UmFuZG9tSVYkc2RlIyh9YcUSe6BbHz0Ad_yDShFFSHQ;ws=&gad=1&gclid=CjwKCAjw0N6hBhAUEiwAXab-TeobQcY-JSo1Q4rqcuq_K-zLBZeI34uuIyiSlFM9NsZZO-uzLWOZzhoCzeUQAvD_BwE)

# DB SCHEMA
<img width="448" alt="image" src="https://user-images.githubusercontent.com/22399803/231846799-41d7d6c9-6210-4bbd-b345-894a0113dcc7.png">
<img width="477" alt="image" src="https://user-images.githubusercontent.com/22399803/231846846-aa53f664-c4bc-424b-b4aa-8f4b1e60792e.png">


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


# Media handling
https://github.com/spatie/laravel-medialibrary
We're using this package that handles everything as polymorphic relations with the images.

Property owners must define the order in which photos appear in the app or on the website. 
Media table are going to have the order field

# pricing
Pricing per calendar days. Typically, some resorts would cost more in July than in January
CHeck Model Apartment > *calculatePriceForDates*
## Test to check:
*test_property_search_filters_by_price*
*class ApartmentPriceTest*
*ApartmentAvailableRule*

# Rating system
