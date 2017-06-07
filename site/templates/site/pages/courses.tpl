{foreach from=$courses key=id item=course}
    <a href="/course/{$id}">{$course.name}</a>
    <br>
{/foreach}