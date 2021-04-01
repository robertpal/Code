<?php
$countries = json_decode('[
  {
    "name": "Afghanistan",
    "alpha-2": "AF",
    "numeric": "004"
  },
  {
    "name": "Åland Islands",
    "alpha-2": "AX",
    "numeric": "248"
  },
  {
    "name": "Albania",
    "alpha-2": "AL",
    "numeric": "008"
  },
  {
    "name": "Algeria",
    "alpha-2": "DZ",
    "numeric": "012"
  },
  {
    "name": "American Samoa",
    "alpha-2": "AS",
    "numeric": "016"
  },
  {
    "name": "Andorra",
    "alpha-2": "AD",
    "numeric": "020"
  },
  {
    "name": "Angola",
    "alpha-2": "AO",
    "numeric": "024"
  },
  {
    "name": "Anguilla",
    "alpha-2": "AI",
    "numeric": "660"
  },
  {
    "name": "Antarctica",
    "alpha-2": "AQ",
    "numeric": "010"
  },
  {
    "name": "Antigua and Barbuda",
    "alpha-2": "AG",
    "numeric": "028"
  }
]', true);
function find_country($countries, $country){
    foreach (array_keys($countries[0]) as $key ) {
        $result = array_search($country, array_column($countries, $key));
        if ($result){
            print_r($countries[$result]);
        }
    }
}
echo "<p>PHP</p>";
find_country($countries, 'Albania');
?>
<p>JAVASCRIPT<p>
<div id="result">Result</div>
<script>
var countries = [
  {
    "name": "Afghanistan",
    "alpha-2": "AF",
    "numeric": "004"
  },
  {
    "name": "Åland Islands",
    "alpha-2": "AX",
    "numeric": "248"
  },
  {
    "name": "Albania",
    "alpha-2": "AL",
    "numeric": "008"
  },
  {
    "name": "Algeria",
    "alpha-2": "DZ",
    "numeric": "012"
  },
  {
    "name": "American Samoa",
    "alpha-2": "AS",
    "numeric": "016"
  },
  {
    "name": "Andorra",
    "alpha-2": "AD",
    "numeric": "020"
  },
  {
    "name": "Angola",
    "alpha-2": "AO",
    "numeric": "024"
  },
  {
    "name": "Anguilla",
    "alpha-2": "AI",
    "numeric": "660"
  },
  {
    "name": "Antarctica",
    "alpha-2": "AQ",
    "numeric": "010"
  },
  {
    "name": "Antigua and Barbuda",
    "alpha-2": "AG",
    "numeric": "028"
  }
];
function find_country(search_country){
    Object.keys(countries[0]).forEach(function(key) {
        result = countries.filter(function (country) { return country[''+key+''] == search_country });
        if (result.length>0){
            document.getElementById('result').innerHTML =  JSON.stringify(result);
        }
    });
}
find_country('020');
</script>
