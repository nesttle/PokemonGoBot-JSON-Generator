# PokemonGoBot-JSON-Generator
Multi-bot JSON generator for [jabbink/PokemonGoBot](https://github.com/jabbink/PokemonGoBot/tree/wip/newAPI). Well tested with PTC accounts.

#Pre-requisites
* PHP
* [PokemonGoBot](https://github.com/jabbink/PokemonGoBot/) (recommended [wip/newAPI](https://github.com/jabbink/PokemonGoBot/tree/wip/newAPI) branch)
* Accounts file like [this](https://github.com/nesttle/PokemonGoBot-JSON-Generator/blob/master/accounts-example1.csv) or [this](https://github.com/nesttle/PokemonGoBot-JSON-Generator/blob/master/accounts-example2.csv).
* Config template file like [this](https://github.com/nesttle/PokemonGoBot-JSON-Generator/blob/master/default.json).

#Usage (Windows/Linux)
Command parameters: `php cli.php <accounts.txt> <template.json> <gui_port_start>`

Example 1:
  `php cli.php accounts-example1.csv default.json 33000`

Example 2:
  `php cli.php accounts-example2.csv default.json 50000`

#Output
Check `/bot-settings` folder and copy/move the desired .json files to your PokemonGoBot `/bot-settings` folder. You must re-start the bot to see any changes.

#Notes
* Default Proxy type is set to `HTTP`. You can modify this in your [config template file](https://github.com/nesttle/PokemonGoBot-JSON-Generator/blob/master/default.json).
* Default Rest API password will be set to `mydefaultpassword` if not found in your `accounts-list.file`. Check [this](https://github.com/nesttle/PokemonGoBot-JSON-Generator/blob/master/accounts-example2.csv) example.
* Accounts file syntax:
```
##USERNAME##;##PASSWORD##;##LATITUDE##;##LONGITUDE##;##RESTAPIPASSWORD##;##PROXYIP##;##PROXYPORT##
```
* Tags will be replaced following your config template file. Check [this](https://github.com/nesttle/PokemonGoBot-JSON-Generator/blob/master/default.json) example.

