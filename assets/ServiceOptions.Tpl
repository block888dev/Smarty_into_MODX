Hi {$Name}
<select>
{foreach $ServiceOptions as $ServiceOption}
     <option value='{$ServiceOption.Duration}' {if $ServiceOption.Name eq $EventService and $ServiceOption.Duration eq $EventAllDay}selected='selected'{/if}>{$ServiceOption.Name}</option>
{/foreach}
</select>
