<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

require_once realpath(__DIR__ . '/..') . "../../vendor/autoload.php";
require_once realpath(__DIR__ . '/..') . "../Http/html_tag_helpers.php";


\EasyRdf\RdfNamespace::set('data', 'http://example.com/');
\EasyRdf\RdfNamespace::set('rdf', 'http://www.w3.org/1999/02/22-rdf-syntax-ns#/');

class Sparql extends Model
{
    use HasFactory;

    function getRestaurants($type = 'all', $search = '')
    {
        $sparql = new \EasyRdf\Sparql\Client('http://localhost:3030/ds_tutifoodie/query');

        $id = '';
        $name = '';
        $province = '';
        $city = '';
        $category = '';
        $specialMenu = '';
        $address = '';
        $rating = '';
        $phone = '';
        $image = '';
        $lowestPrice = '';
        $highestPrice = '';

        if ($type == 'id') {
            $id = $search;
        } else if ($type == 'name') {
            $name = $search;
        } else if ($type == 'province') {
            $province = $search;
        } else if ($type == 'city') {
            $city = $search;
        } else if ($type == 'category') {
            $category = $search;
        } else if ($type == 'specialMenu') {
            $specialMenu = $search;
        } else if ($type == 'address') {
            $address = $search;
        } else if ($type == 'rating') {
            $rating = $search;
        } else if ($type == 'phone') {
            $phone = $search;
        } else if ($type == 'image') {
            $image = $search;
        } else if ($type == 'lowestPrice') {
            $lowestPrice = $search;
        } else if ($type == 'highestPrice') {
            $highestPrice = $search;
        } else if ($type == 'all') {
            $search = '';
        } else {
            return "Unknown type";
        }

        $result = $sparql->query(
            "PREFIX data: <http://example.com/>
            PREFIX rdf: <http://www.w3.org/1999/02/22-rdf-syntax-ns#>

            SELECT ?id ?name ?province ?city ?category ?specialMenu ?address ?rating ?phone ?image ?lowestPrice ?highestPrice
                WHERE{
                    ?sub rdf:type data:Restaurant
                    OPTIONAL {?sub data:id ?id.}
                    OPTIONAL {?sub data:name ?name.}
                    OPTIONAL {?sub data:province ?province.}
                    OPTIONAL {?sub data:city ?city.}
                    OPTIONAL {?sub data:category ?category.}
                    OPTIONAL {?sub data:specialMenu ?specialMenu.}
                    OPTIONAL {?sub data:address ?address.}
                    OPTIONAL {?sub data:rating ?rating.}
                    OPTIONAL {?sub data:phone ?phone.}
                    OPTIONAL {?sub data:image ?image.}
                    OPTIONAL {?sub data:lowestPrice ?lowestPrice.}
                    OPTIONAL {?sub data:highestPrice ?highestPrice.}
                    FILTER regex (?id, \"{$id}\", \"i\")
                    FILTER regex (?name, \"{$name}\", \"i\")
                    FILTER regex (?province, \"{$province}\", \"i\")
                    FILTER regex (?city, \"{$city}\", \"i\")
                    FILTER regex (?category, \"{$category}\", \"i\")
                    FILTER regex (?specialMenu, \"{$specialMenu}\", \"i\")
                    FILTER regex (?address, \"{$address}\", \"i\")
                    FILTER regex (?rating, \"{$rating}\", \"i\")
                    FILTER regex (?phone, \"{$phone}\", \"i\")
                    FILTER regex (?image, \"{$image}\", \"i\")
                    FILTER regex (?lowestPrice, \"{$lowestPrice}\", \"i\")
                    FILTER regex (?highestPrice, \"{$highestPrice}\", \"i\")
                }"
        );

        return $result;
    }
}
