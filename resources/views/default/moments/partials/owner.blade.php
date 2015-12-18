<div class="moment-block moment-item">
<div class="moment-item-timestamp">
<time class="time_ago js-timeago" data-container="body" data-placement="top" data-toggle="tooltip" datetime="{{ $moment->created_at_iso }}" title="{{ $moment->created_at_formatted }}">{{ $moment->created_at_diff }}</time>
</div>
<i class="{{ $moment->icon }} icon s32"></i>
<div class="moment-title">
<span class="author_name"><a href="/u/root">{{ $moment->author->username }}</a></span>
<span class="event_label opened">
{{ $moment->actionName }} account
</span>
<strong><a href="/baidu/good/milestones/1">{{ $moment->target->name }}</a></strong>
at
<a href="/baidu/good"><span class="namespace-name">xxx/ </span><span class="project-name">{{ $moment->target->id }}</span></a>
</div>
<div class="moment-body">
<div class="moment-comment">
Welcome.
</div>
</div>

</div>