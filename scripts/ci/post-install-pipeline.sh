#!/bin/bash

set -e

pwd=$(pwd)

if [ "$pwd" == "/tmp/acli-push-artifact" ]; then
  # We are creating an artifact in the pipeline.
  printf "Compiling front-end assets.\n"
  cd docroot/themes/custom/tactis_evolve/src/gulp
  printf "Running NPM\n"
  npm install
  printf "Running Gulp\n"
  gulp default
  printf "Removing non-essential files.\n"
  rm -rf node_modules
  cd $pwd
  git add -A
fi
