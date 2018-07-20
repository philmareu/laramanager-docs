# Fields

Fields can be added to [resources](/docs/resources) and represent how a resource's table column should be populated. These fields provide a way to populate the resource's database columns with data. So make sure the columns are added to the migration and migrated before adding fields in Laramanager.

```php
class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('slug');
            $table->text('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
```

## Creating a field

Navigate to resources under the "System" navigation section.

![Laramanager resources page](/images/original/laramanager-resources-populated.jpg)

Then click on the field list icon (<span uk-icon="icon: list"></span>). This will bring up the field list for this resource.

<div class="uk-card uk-card-small uk-card-primary uk-card-body uk-flex uk-flex-middle">
    <span uk-icon="icon: star; ratio: 1.5" class="uk-margin-small-right"></span> This page will load automatically immediately after successfully adding a new resource.
</div>

![Laramanager fields list page](/images/original/laramanager-fields-list-empty.jpg)

Next, select "Create" to add a new field.

![Laramanager field create page](/images/original/laramanager-fields-create-blank.jpg)

* __Title__ This is the label for the field.
* __Slug__ This is the exact column name in the table.
* __Validation__ Validation rules for this field. See the available rules in the [Laravel validation documentation](https://laravel.com/docs/5.6/validation#available-validation-rules). Of course, custom validation rules can be used as well.
* __Is Unique__ Indicate if the field should have a unique value.
* __List__ Whether to list this column data in the table view for the resource.
* __Type__ What field type should be used to gather data for this field. See [/docs/field-types] for more information about field types.

![Laramanager field create form filled out](/images/original/laramanager-fields-create-filled.jpg)

After creating all your fields, they will show up in the resource's field list.

![Laramanager field list populated with fields](/images/original/laramanager-fields-list-populated.jpg)