sync
====

A simple intelligent synchonization script to keep webmirrors synchronized, written in PHP. By initiation (through a cronjob e.g.) the local ``sync.php`` connects to the remote ``sync.php``, authenticates, lists all available files, compares list against changes and pushes/pulls the newer documents.

###Futures functionality:###
- optional hooking GIT into the synchonisation process

**[License](./LICENSE.md):** [cc-by-nd 3.0](http://creativecommons.org/licenses/by-nd/3.0/)
