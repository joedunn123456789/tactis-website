#!/bin/bash
set -x
set -e

acli auth:login --key ${ACQUIA_KEY} --secret ${ACQUIA_SECRET}

if [ -n "${BITBUCKET_REPO_SLUG}" ] ; then

    git config --global user.email "bitbucket@email.com"
    git config --global user.name "Bitbucket Pipelines"

    git status

    if [ $BITBUCKET_TAG ];
      then
        TAG=${BITBUCKET_TAG#*/}
        git fetch --all
        git branch -a -r --contains tags/$TAG
        BRANCH=$(git branch -a -r --contains tags/$TAG | grep '^\s*origin/master' | sed 's|.*/||')
        echo "Origin branch is $BRANCH"

        if [ "$BRANCH" != "master" ]; then
          echo "You should only be tagging the master branch.  Please make sure you are committing develop and releases as branches."
          exit 1
        fi

        acli --ansi --no-interaction --verbose push:artifact --destination-git-urls ${DEPLOY_URL} --destination-git-tag ${TAG} --destination-git-branch ${BRANCH}
    fi;

    if [ $BITBUCKET_BRANCH ];
      then
        acli --ansi --no-interaction -vvv push:artifact --destination-git-urls ${DEPLOY_URL} --destination-git-branch ${BITBUCKET_BRANCH}
    fi;

fi;
