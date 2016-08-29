# PokemonGoBot-JSON-Generator
Multi-bot JSON generator for PokemonGoBot@jabbink. Well tested with PTC accounts.

#Pre-requisites
* PHP
* [PokemonGoBot](https://github.com/jabbink/PokemonGoBot/) (recommended [wip/newAPI](https://github.com/jabbink/PokemonGoBot/tree/wip/newAPI) branch)
* Accounts file like [this](https://github.com/nesttle/PokemonGoBot-JSON-Generator/blob/master/accounts-example1.csv) or [this](https://github.com/nesttle/PokemonGoBot-JSON-Generator/blob/master/accounts-example2.csv):
* Config template file like this.

#Usage (Windows/Linux)
Command parameters: `php cli.php <accounts.txt> <template.json> <gui_port_start>`

Example 1:
  `php cli.php accounts.txt default-template.json 33000`

Example 2:
  `php cli.php accounts.txt my-template2.json 50000`
