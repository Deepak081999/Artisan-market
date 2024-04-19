// Json array for places
let showInMap;
var markers = {
    'group-1': [
        {
            "title": 'https://maps.app.goo.gl/22d8NXeBuvqHg6LHA',
            "name": 'Chickpet Market',
            "lat": '12.9737',
            "lng": '77.5838',
            "description": 'Chickpet Market is a famous market in Bangalore known for its wide range of handicrafts and textiles.',
            "image": 'googleimg/googleimg1.jpg'
        },
        {
            "title": 'https://maps.app.goo.gl/YeTj8Mqf4r4b3zNM8',
            "name": 'Commercial Street',
            "lat": '12.982505461503141',
            "lng": '77.60835636660904',
            "description": 'Commercial Street is another popular shopping destination in Bangalore offering various handicrafts and clothing items.',
            "image": 'googleimg/googleimg1.jpg'
        },
        {
            "title": 'https://maps.app.goo.gl/E3b164MNB4z6Tr3E6',
            "name":'local shop',
            "lat": '12.968773894245903',
            "lng": '77.71311475311637',
            "description": 'Good Place and good collection of Gifts',
            "image": 'googleimg/googleimg1.jpg'
        },
        {
            "title": 'https://maps.app.goo.gl/xevY947CJEFB6tNT9',
            "name": '6th crore',
            "lat": '12.970586442504667',
            "lng": '77.71217624906548',
            "description": 'Good Place and good collection of Gifts',
            "image": 'googleimg/img2.jpg'
        },
        {
            "title": 'https://maps.app.goo.gl/peCUxY98Mh4gAjpt7',
            "name": 'Dharani Arts & Handicrafts Emporium',
            "lat": '12.995995',
            "lng": '77.7178457',
            "description": 'Good Place and good collection of Gifts',
            "image": 'googleimg/img2.jpg'
        },
        {
            "title": 'https://maps.app.goo.gl/s65ucbDt4d41MTCa9',
            "name": 'Dastkaar Handloom & Handicraft Haat',
            "lat": '12.9716618',
            "lng": '77.7133074',
            "description": 'Good Place and good collection of Gifts',
            "image": 'googleimg/img2.jpg'
        },
        // Add more markers for other places in Bangalore
    ],
};

(function ($) {
    "use strict";

    var infoWindow, bounds, map, markerIcon, markerActiveIcon, mapMarkers = [];

    function initializeMap() {
        var mapOptions = {
            scrollwheel: false,
            zoom: 12, // Adjust the initial zoom level as needed
            center: new google.maps.LatLng(12.9716, 77.5946), // Center the map on Bangalore
        };
        // markerIcon = {
        //     url: 'https://github.com/a7mg/Map-with-markers/blob/master/marker.png?raw=true',
        //     size: new google.maps.Size(50, 50),
        //     scaledSize: new google.maps.Size(50, 50),
        //     origin: new google.maps.Point(0, 0)
        // }
        markerActiveIcon = {
            url: 'https://github.com/a7mg/Map-with-markers/blob/master/marker-active.png?raw=true',
            size: new google.maps.Size(50, 50),
            scaledSize: new google.maps.Size(50, 50),
            origin: new google.maps.Point(0, 0)
        }
        infoWindow = new google.maps.InfoWindow();
        bounds = new google.maps.LatLngBounds();
        map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

        dropMarkers('group-1');
    }

    function dropMarkers(target) {
        for (var i in markers[target]) {
            var data = markers[target][i];

            var myLatlng = new google.maps.LatLng(data.lat, data.lng);
            var marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                icon: markerIcon,
                title: data.title,
                animation: google.maps.Animation.DROP
            });

            mapMarkers.push(marker);

            bounds.extend(marker.getPosition());

            (function (marker, data) {
                google.maps.event.addListener(marker, "click", function (e) {
                    for (var j = 0; j < mapMarkers.length; j++) {
                        mapMarkers[j].setIcon(markerIcon);
                    }
                    this.setIcon(markerActiveIcon)

                    infoWindow.setContent('<div style="width: 300px; text-align: center; "><h3> <a target="_blank" href=' + data.title + '>' + data.name + '</a></h3>' + '<p>' + data.description + '</p><img width="200" height="100" src=' + data.image + ' alt="img"></div><div></div>');
                    infoWindow.open(map, marker);
                });
            })(marker, data);
        }
        map.fitBounds(bounds);
    }
    function DeleteMarkers() {
        for (var i = 0; i < mapMarkers.length; i++) {
            mapMarkers[i].setMap(null);
        }
        mapMarkers = [];
    };

    // $(document).on('click', 'button', function (e) {
    //     e.preventDefault();
    //     DeleteMarkers();
    //     dropMarkers($(this).data('target'));
    // })
    $(document).on('click', 'a', function (e) {
        e.preventDefault();
        console.log($(this).parent())
        google.maps.event.trigger(mapMarkers[$(this).parent().index()], 'click');
    })

    showInMap = (i) => {
        google.maps.event.trigger(mapMarkers[i], 'click');
    }
    google.maps.event.addDomListener(window, 'load', initializeMap);
})(jQuery);


