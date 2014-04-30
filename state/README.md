``sync.php`` stores in this directory the several states it found the repository in. It is used to compare the *current* against a previous one. After synchronization the *current* will be replaced by the pulled/pushed/merged state for future reference.

Each ``*.state`` file stores it's information in JSON: path/file, size, modification-date and (optional) hash.
