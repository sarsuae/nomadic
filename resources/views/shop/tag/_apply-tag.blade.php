<form style='display: inline;' method="post" action=/shop/apply-tag>
    {{csrf_field()}}
    <input type='hidden' name='cafe_id' value='{{$cafe->id}}'>
    <input type='hidden' name='tag_id' value='{{$tag->id}}'>
    <button type="submit">
    <i class="fa fa-plus" aria-hidden="true"></i>
    同意
    </button>
</form>
