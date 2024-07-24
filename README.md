This is an example of how the Smarty can be used on the MODX frontend.
Why use Smarty in MODX?
If there is some data in PHP array then MODX can't loop through it inside a chunk or template if you pass this data into the frontend
But having loaded the Smarty templator it can easily loop through it as follows:
```
BACKEND:
var_dump($data)
Array
(
[0] => stdClass Object
    (
        [id] => 1
        [agency_name] => Agency #1
        [created_date] => 2015-03-25 20:23:44
    )

[1] => stdClass Object
    (
        [id] => 2
        [agency_name] => gggg
        [created_date] => 2015-03-25 21:26:06
    )

)
$smarty->assign('results', $data);

{foreach from=$results item=result}
{$result->id}
{/foreach}
```
