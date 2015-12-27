<form role="search" id="search"<? if(isset($search)): ?> class="shown"<? endif ?> action="/search">
    <fieldset>
        <input type="search" class="input" name="q" placeholder="e.g. Brighton, Windsor Castle, Surrey&#8230;"<? if(isset($search)): ?> value="<?= esc($query) ?><? endif ?>"/><!--
     --><input type="submit" class="button" value="Search"/>
    </fieldset>
    <a href="#top" class="return">&#9652; Return to top</a>
</form><!--/@search-->
