<?php

// index.
app()->get('/', 'HomeController@index');

// submit new key.
app()->post('/api/insertKey', 'KeyController@update');
app()->get('/api/getKey/{format}/{email}', 'KeyController@getKey');

app()->get('{a}','HomeController@notFound');