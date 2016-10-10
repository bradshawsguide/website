<form class="c-search" role="search" action="/search">
  <fieldset class="c-search__main">
    <legend>Search <?= $site->title() ?></legend>
    <input class="input" type="search" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey…"<? if(isset($search)): ?> value="<?= esc($query) ?><? endif ?>"/>
    <input class="button" type="submit" value="Search"/>
  </fieldset>

  <button onclick="GetMap()">Show stations near me</button>

  <script type="text/javascript">
    function GetMap() {
      // Check if browser supports geolocation
      if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(locationSuccess, locationFail);
      }
      else {
        alert('Geolocation is not supported by your current browser.');
      }
    }

    function locationSuccess(position) {
      latitude = position.coords.latitude.toFixed(4);
      longitude = position.coords.longitude.toFixed(4);

      window.location.href = '/search?g='+latitude+','+longitude;
    }

    function locationFail() {
      alert('Could not locate you.');
    }
  </script>
</form>
