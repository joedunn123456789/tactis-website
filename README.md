# README #

Instructions for setting up and running the Tactis Evolve theme locally.

### What is this repository for? ###

* This is the Drupal installation for Tactis Evolve.
* 10.0

### How do I get set up? ###

This Drupal 10 installation uses DDEV for local development.

To begins, simply type `ddev start`.  This will set up your containers, install Node, 
compile your front end libraries, and install all the contributed modules.

We have included a starter database in `database/db.sql.gz`.  To install the database, 
first unzip it with `gzip -d ./database/db.sql.gz`, then import it with 
`ddev drush sql-cli < ./database/db.sql`.  Once complete, re-zip the file, 
`gzip ./database/db.sql`.

Once you have the starter database installed, it is best to run the standard drush commands to make sure 
everything is ready to go.

* `ddev drush cr`
* `ddev drush updb`
* `ddev drush cim -y`

And finally, you need to log-in, `ddev drush uli` will give you a one time login link.

### Migration Setup ###

If you need to run a migration, or you are tasked to work on the migration, we have included 
a DDEV command that will handle most of the tasks for you.  In addition, we have also included 
a copy of the Tactis Production Database.  You can always grab a new copy of the database if 
needed.

First, if you'd like to get a new copy of the database, run:

* `ddev drush @tactis.prod sql-dump > ./database/migrate.sql`

> [!IMPORTANT]
> You will need to have an Acquia account setup with access to Tactis.

Next, you are ready to setup the migration database.  If you have previously set up the 
migration database, it would be wise to drop its contents before re-importing the data with 
`ddev drush sql-drop --database=migrate`.

* `ddev set-migrate-db` This will create a new database called `migrate` and import 
the `migrate.sql` file for the Tactis Production website. 
* A Drupal database connection is already setup locally.
* You should now be able to run all the migration commands locally.

  * `ddev drush ms` Status
  * `ddev drush mim` Import
  * `ddev drush mr` Rollback
  * `ddev drush mrs` Reset Status

