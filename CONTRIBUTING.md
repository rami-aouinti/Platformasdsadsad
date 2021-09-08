# Contribution

Please take a moment to review this document so that you can easily follow the contribution process.
## Issues
[Issues](https://github.com/rami-aouinti/Platform/issues) is the ideal channel for bug reports, new features or to submit a `pull request`, however please observe the following restrictions:
* Do not use this channel for your personal help requests (use [Stack Overflow](http://stackoverflow.com/)).
* It is forbidden to insult or offend in any way when commenting on an `issue`. Respect the opinions of others, and stay focused on the main discussion.

## Bug report
A bug is a concrete error, caused by the code present in this `repository`.

Guide :
1. Make sure you don't create an existing report, consider using [the search system](https://github.com/rami-aouinti/Platform/issues).
2. Check that the bug is fixed, by trying on the latest version of the code on the `production` or` develop` branch.
3. Isolate the problem creates a simple and identifiable test case.

## New feature
It is always appreciated to offer new features. However, take some time to think it over, make sure that this functionality matches the objectives of the project.

It is up to you to present a solid argument to convince the project developers of the benefits of this feature.

## Pull request

Good pull requests are a big help. They must remain within the scope of the project and must not contain any `commits` unrelated to the project.

Please ask before posting your pull request, otherwise you may end up wasting work time because the project team does not want to integrate your work.

Follow this process in order to propose a `pull request` that respects best practices:

1. [Fork](http://help.github.com/fork-a-repo/) the project, clone your `fork` and configure the` remotes`:
    ```
    git clone https://github.com/<your-username>/<repo-name>
    cd Platform
    git remote add upstream https://github.com/rami-aouinti/Platform
    ```
2. If you cloned the project some time ago, remember to grab the latest changes from `upstream`:
    ```
    git checkout production
    git pull upstream production
    
    git checkout develop
    git pull upstream develop
    ``` 
3. Create a new branch that will contain your feature, modification or fix:
    * For a new feature or modification:
        ```
        git checkout develop
        git checkout -b feature/<feature-name>
        ```
    * For a new correction:
        ```
        git checkout production
        git checkout -b hotfix/<feature-name>
        ```
   *You can also use [git-flow] (https://danielkummer.github.io/git-flow-cheatsheet/index.fr_FR.html) to simplify the management of your branches:*
    * For a new feature or modification
        ```
        git flow feature start <feature-name>
        ```
    * For a new correction:
        ```
        git flow hotfix start <hotfix-name>
        ```
4. `Commit` your changes, please respect the naming convention of your` commits` as follows:
    ```
    <type>: <subject>
    <BLANK LINE>
    <body>
    <BLANK LINE>
    <footer>
    ```
   The header is mandatory.

   Types :
     * **build**: Changes that have an effect on the system (installation of new dependencies, composer, npm, environments, ...)
     * **ci**: Continuous integration configuration
     * **cd**: Continuous deployment configuration
     * **docs**: Documentation modifications
     * **feat**: New feature
     * **fix**: Fix (`hotfix`)
     * **perf**: Modification of the code which optimizes the performances
     * **refactor**: Any modification of the code as part of a refactoring
     * **style**: Corrections specific to coding style (PSR-12)
     * **test**: Addition of a new test or correction of an existing test

5. Push your branch onto your `repository` :
    ```
    git push origin <branch-name> 
    ```
6. Open a new `pull request` with a precise title and description

## Versioning
Tiplay respecte `Semantic Versionning 2` :
> Given a version number MAJOR.MINOR.PATCH, increment the:
>
> MAJOR version when you make incompatible API changes,
>
> MINOR version when you add functionality in a backwards-compatible manner, and
>
> PATCH version when you make backwards-compatible bug fixes.