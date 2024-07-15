#!/bin/sh

echo What should the name of your theme directory be?

read themename
BASEDIR=$(dirname "$(realpath "$0")")

if [ -d "$themename" ]; then
  echo "$themename does already exist."
  exit
fi

cp -r "$BASEDIR/../template" "$themename"
