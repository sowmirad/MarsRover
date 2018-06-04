'use strict';
 
var _axios = require('axios');
 
var _axios2 = _interopRequireDefault(_axios);
 
function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }
 
var rover = ['curiosity', 'opportunity', 'spirit'][2];
var baseUrl = 'https://api.nasa.gov';
var roverPath = '/mars-photos/api/v1/rovers/' + rover;
var roverPhotosPath = '/' + roverPath + '/photos';
var apiKey = 'O6ZCZtKP1UYwiuRa3DpvuSHgID6hkjs9nn4uIboz'; // NNKOjkoul8n1CH18TWA9gwngW1s1SmjESPjNoUFo
 
var getRover = function getRover() {
  return _axios2.default.get(baseUrl + roverPath, {
    params: {
      api_key: apiKey
    }
  });
};
 
var getRoverPhotos = function getRoverPhotos(date, camera) {
  return _axios2.default.get(baseUrl + roverPhotosPath, {
    params: {
      api_key: apiKey,
      earth_date: date,
      camera: camera
    }
  });
};
 
var insertPhotos = function insertPhotos(photos) {
  //photos = photos.slice(0, 3);
  console.log(photos);
  var html = '';
 
  for (var _iterator = photos, _isArray = Array.isArray(_iterator), _i = 0, _iterator = _isArray ? _iterator : _iterator[Symbol.iterator]();;) {
    var _ref;
 
    if (_isArray) {
      if (_i >= _iterator.length) break;
      _ref = _iterator[_i++];
    } else {
      _i = _iterator.next();
      if (_i.done) break;
      _ref = _i.value;
    }
 
    var photo = _ref;
 
    html += '\n    <li>\n      <img src="' + photo.img_src + '">\n    </li>';
  }
 
  document.getElementById('photos').innerHTML = html;
};
 
getRover().then(function (response) {
  var roverData = response.data.rover;
 
  return getRoverPhotos(roverData.max_date);
}).
//roverData.cameras[0].name
then(function (response) {
  var photos = response.data.photos.slice(0, 20);
 
  insertPhotos(photos);
});