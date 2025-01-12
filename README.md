# Cloud Files

For installation and usage please [read the documentation](docs/index.md)

# Fasttrack Settings File
Select Adapter: `adapter_minios3`
- Make sure to fill our the Key and Secret
- Select `SW CDN` as the region
- Set up a new bucket in fasttrack server for client
- Add name to the Space Name 

## Contributing

### Changelog

Every change should be documented in the [Changelog](changelog.md) under the `Unreleased` section and categorized as either `Fixed`, `Added`, or `Changed`.  These types of changes will also correspond with whether the next release is a `Patch (fixes)`, `Minor (additions)`, or `Major (changes)`.

### Prefixing Dependencies

Cloud Files relies on several popular third-party libraries to deliver its functionality.  Given there is a high risk of namespace collision with other add-ons using these same libraries we take extra care to avoid this possibility by prefixing our dependencies.

Running `composer install` and `composer update` handles prefixing all composer dependencies with respect to the settings in `scoper.inc.php`
