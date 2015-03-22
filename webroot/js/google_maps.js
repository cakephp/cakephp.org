/*
 * This is the custom code for Cake Map
 */
jQuery(function($) {
    $("#map").googleMap(20, 10, 2, {
        controls: ["GLargeMapControl", "GMapTypeControl"],
        markers: $("div.geo")
    });

    $("#MapAddForm #MapLatitude").val('');
    $("#MapAddForm #MapLongitude").val('');

    GEvent.addListener($.googleMap.maps["map"], "click", function(overlay, point) {
        if (point) {
            $("#MapAddForm #MapLatitude").val(point.x);
            $("#MapAddForm #MapLongitude").val(point.y);
        }
    });

    $("a#show").toggle(
            function() {
                $("#markers").show();
                $(this).html('hide grid');
            },
            function() {
                $("#markers").hide();
                $(this).html('show grid');
            }
        );
});

/* jQuery googleMap Copyright Dylan Verheul <dylan@dyve.net>
 * Licensed like jQuery, see http://docs.jquery.com/License
 * Modified by Gwoo for CakeMap
 */

$.googleMap = {
    maps: {},
    marker: function(m) {
        if (!m) {
            return null;
        } else if (m.lat == null && m.lng == null) {
            return $.googleMap.marker($.googleMap.readFromGeo(m));
        } else {
            var marker = new GMarker(new GLatLng(m.lat, m.lng));
            if (m.txt) {
                GEvent.addListener(marker, "click", function() {
                    marker.openInfoWindowHtml(m.txt);
                });
                m.lnk.click(function() {
                    marker.openInfoWindowHtml(m.txt);
                });
            }
            return marker;
        }
    },
    readFromGeo: function(elem) {
        var txtElem = '<h4>'+$("h4", elem).html()+'</h4>'+'<span class="description">'+$("span.description", elem).html()+'</span>';
        var latElem = $("abbr.latitude", elem)[0];
        var lngElem = $("abbr.longitude", elem)[0];
        if (latElem && lngElem) {
            return { lat:parseFloat($(latElem).attr("title")), lng:parseFloat($(lngElem).attr("title")), txt:txtElem, lnk: $("a.marker", elem)}
        } else {
            return null;
        }
    },
    mapNum: 1
};

$.fn.googleMap = function(lat, lng, zoom, options) {

    // If we aren't supported, we're done
    if (!window.GBrowserIsCompatible || !GBrowserIsCompatible()) return this;

    // Default values make for easy debugging
    if (lat == null) lat = 37.4419;
    if (lng == null) lng = -122.1419;
    if (!zoom) zoom = 13;

    // Sanitize options
    if (!options || typeof options != 'object') options = {};
    options.mapOptions = options.mapOptions || {};
    options.markers = options.markers || [];
    options.controls = options.controls || {};

    // Map all our elements
    return this.each(function() {
        // Make sure we have a valid id
        if (!this.id) this.id = "gMap" + $.googleMap.mapNum++;
        // Create a map and a shortcut to it at the same time
        var map = $.googleMap.maps[this.id] = new GMap2(this, options.mapOptions);
        // Center and zoom the map
        map.setCenter(new GLatLng(lat, lng), zoom);
        // Add controls to our map
        for (var i = 0; i < options.controls.length; i++) {
            var c = options.controls[i];
            eval("map.addControl(new " + c + "());");
        }
        // If we have markers, put them on the map
        var marker = null;
        for (var i = 0; i < options.markers.length; i++) {
            if (marker = $.googleMap.marker(options.markers[i])) map.addOverlay(marker);
        }
    });

};
